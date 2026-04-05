# 🐉 MangaTekaZ - Guía de Integración Frontend (Blade)

Esta guía documenta el estado actual del backend y las instrucciones necesarias para que el equipo de frontend construya las vistas (Blade) sin tener que tocar la lógica de PHP o la base de datos.

---

## 1. 📊 Estado Actual del Proyecto (Diagnóstico)
El backend está **100% completado, securizado y funcional**.
- **Base de Datos:** Estructurada con relaciones complejas (Sagas 1:N Mangas N:M Pedidos 1:N Usuarios).
- **Control de Acceso:** Laravel Breeze implementado. Migraciones actualizadas para soportar roles (`admin`, `user`).
- **Autenticación (Middleware):** Protecciones instaladas. Los usuarios anónimos solo ven el catálogo. Los clientes tienen carrito. El Admin tiene un panel protegido.
- **Redirecciones Inteligentes:** El sistema sabe a qué pantalla enviarte después de iniciar sesión según tu rol.
- **Seeder Activo:** La base de datos se genera con 54 tomos reales de Dragon Ball (Viz Media), conectada a la API de OpenLibrary para las portadas, y junto con pedidos de prueba y usuarios preconfigurados. Tip para las portadas: En la variable $manga, el campo portada contiene el ID de OpenLibrary. Podéis usarlo así:
<img src="https://covers.openlibrary.org/b/id/{{ $manga->portada }}-L.jpg">

---

## 2. 🚦 Cómo Arrancar el Proyecto (Para el equipo Frontend)

Cuando os bajéis el proyecto por primera vez, abrid una terminal en la carpeta raíz y ejecutad:

```bash
composer install
npm install
php artisan key:generate
Crear la base de datos vacía en phpmyadmin, ponerla en el .env y ejecutar php artisan migrate:fresh --seed
```

Para trabajar, necesitaréis tener **dos terminales** corriendo simultáneamente:
1. `php artisan serve` (Servidor backend)
2. `npm run dev` (Compilador en tiempo real de Tailwind CSS / Vite)

**Usuarios de prueba disponibles:**
- **Admin:** `admin@mangatekaz.com` / Contraseña: `admin123`
- **Cliente:** `gohan@mangatekaz.com` (o vegeta, o bulma) / Contraseña: `user123`


InvalidArgumentException: View [catalogo] not found.

👉 ¡NO OS ASUSTEIS SI SALE ESTE ERROR AL USAR EL NAVEGADOR POR PRIMERA VEZ!

El enlace ha viajado por internet y ha llegado a tu archivo web.php sin chocar.
Tu archivo web.php lo ha enviado al PublicController.
El controlador ha conectado con la base de datos sin errores y ha bajado todos los libros de Dragon Ball...
Y cuando ha intentado decir: "Oye frontend, aquí tienes los libros para que los dibujes en la vista catalogo", ha visto que el archivo catalogo.blade.php aún no existe.

## 3. 🗺️ Mapa de Vistas necesarias y sus Variables

A continuación detallamos las vistas Blade (`resources/views/...`) que el frontend **tiene que crear** y las variables que el backend inyectará mágicamente en ellas.

Laravel utiliza "sesiones flash", que son mensajes que solo viven durante una carga de página. Para que el usuario reciba feedback, el frontend debe incluir este bloque en el diseño principal (normalmente en layouts/app.blade.php o justo encima del contenido) Esto se complementará con el success o error en el backend:

HTML
{{-- Mensaje de Éxito (Verde) --}}
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">¡Logro desbloqueado!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

{{-- Mensaje de Error (Rojo) --}}
@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">¡Kamehame-NO!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif

{{-- Errores de Validación Automáticos (Formularios) --}}
@if ($errors->any())
    <div class="bg-orange-100 border border-orange-400 text-orange-700 px-4 py-3 rounded relative mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
Si no se pone el usuario no sabe por qué ha fallado la operación

### 🔓 Zona Pública
| Ruta a crear | Ruta Web | Variables que os llegan | Descripción |
| :--- | :--- | :--- | :--- |
| `catalogo.blade.php` | `/catalogo` | `$mangas`, `$sagas` | Escaparate principal. `$manga->saga->nombre` os dará la categoría. |
| `detalle.blade.php` | `/catalogo/{id}` | `$manga` | Ficha individual del producto. |

### 👤 Zona de Cliente Privada (Requiere Login)
| Ruta a crear | Ruta Web | Variables que os llegan | Descripción |
| :--- | :--- | :--- | :--- |
| `carrito.blade.php` | `/carrito` | `$carrito` | Muestra el pedido en estado 'pendiente'. Iterar `$carrito->mangas`. |
| `mis-pedidos.blade.php` | `/mis-pedidos`| `$pedidos` | Historial de compras. |

### 👑 Zona de Gestión (Solo Admin)
| Ruta a crear | Ruta Web | Variables que os llegan | Descripción |
| :--- | :--- | :--- | :--- |
| `admin/dashboard.blade.php` | `/admin` | `$totalMangas`, `$totalPedidos`, `$totalStock`, `$ventasTotales` | Panel resumen con estadísticas. |
| `admin/mangas/index.blade.php`| `/admin/mangas` | `$mangas` | Tabla para ver, editar y borrar inventario. |
| `admin/mangas/crear.blade.php`| `/admin/mangas/crear` | `$sagas` | Formulario para añadir Manga. Enviar POST a `route('admin.mangas.store')`. |
| `admin/mangas/editar.blade.php`| `/admin/mangas/{id}/...`| `$manga`, `$sagas` | Formulario para editar. Enviar PUT a `route('admin.mangas.update', $manga->id)`. |
| `admin/pedidos/index.blade.php`| `/admin/pedidos` | `$pedidos` | Lista de ventas. Para cambiar estado, enviar PUT a `route('admin.pedidos.estado', $pedido->id)` con el campo `estado`. |

---

## 4. 🛒 El Funcionamiento del Carrito

Hemos diseñado el carrito aprovechando la tabla `pedidos`. Funciona así:
1. Cuando un cliente le da a "Añadir al carrito", el backend genera en secreto un pedido con `estado = 'pendiente'`.
2. Todos los artículos operan sobre la tabla pivot `mangas_pedido`.
3. Para eliminar/modificar un manga, debéis lanzar un formulario a la ruta `route('carrito.actualizar'` o `route('carrito.eliminar'`.
4. El botón "Confirmar Pedido" pasará el estado a `'atendido'` y restará el stock de la base de datos automáticamente.

### Ejemplo de Botón Añadir al Carrito (Para catalogo.blade.php)
```html
<form action="{{ route('carrito.anadir') }}" method="POST">
    @csrf
    <input type="hidden" name="manga_id" value="{{ $manga->id }}">
    <input type="number" name="cantidad" value="1" min="1" max="{{ $manga->stock }}">
    <button type="submit">🛒 Añadir</button>
</form>
```

---
*Fin del informe del Backend. EL DISEÑO DE LAS VISTAS Y COMO ESTÁ ORGANIZADO EL PROYECTO VIENE EN LA DOCUMENTACIÓN.* 🐉
