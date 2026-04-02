# Planificación proyecto MangaTekaZ

## Breve descripción del proyecto

**MangaTekaZ (MTZ)** es un sistema de biblioteca web funcional para una tienda física dedicada a la venta de mangas de la franquicia *Dragon Ball*.

El sistema permite a los usuarios administradores:

- Añadir nuevos mangas.
- Modificar información errónea de los productos o su stock.
- Eliminar mangas que no estén disponibles en la tienda física.
- Marcar los pedidos como realizados.

Los usuarios finales podrán únicamente realizar pedidos y consultar el catálogo.

## Funcionalidades esperadas para el usuario final

- Login de usuario, diferenciando entre administrador y usuario.
- Consulta del catálogo de mangas, con filtros por sagas, series, etc.
- Realización de pedidos, que se registran en la base de datos y envían un correo de confirmación al usuario.
- Interfaz intuitiva y estética, con colores naranjas y azules, fieles a la paleta de *Dragon Ball*.

## Funcionalidades esperadas para los administradores o empleados

- Actualizar el stock de los productos.
- Insertar nuevos mangas relacionados con la franquicia.
- Eliminar mangas o modificar información errónea.
- Revisar el historial de pedidos y marcarlos como realizados cuando el cliente se persone en la tienda física.

## Valor añadido del proyecto

El valor diferencial de MTZ reside en su enfoque de nicho especializado. A diferencia de las plataformas genéricas, este sistema está diseñado para el mercado del coleccionismo de *Dragon Ball*, permitiendo catalogar reliquias, ediciones descatalogadas (como las traducciones clásicas y fieles) o series específicas como *Dragon Ball Heroes*.

Además, su arquitectura permite que funcione como una plantilla escalable para la digitalización de cualquier comercio físico de nicho.

## Stack tecnológico requerido

- **Frontend**: HTML5, CSS3 y JavaScript para una interfaz temática.
- **Backend**: PHP con Laravel y arquitectura MVC para la lógica de negocio.
- **Base de datos**: MySQL para almacenar información de los mangas, las categorías, los pedidos realizados, los usuarios, etc.
