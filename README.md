# Planificación proyecto MangaTekaZ

## Breve descripción del proyecto

**MangaTekaZ (MTZ)** es un pequeño e-commerce funcional dedicada a la venta de tomos de manga originales de la franquicia *Dragon Ball*.

El sistema permite a los usuarios administradores:

- Añadir nuevos mangas.
- Modificar información errónea de los productos o su stock.
- Eliminar mangas que no estén disponibles.
- Ver un dashboard con información general del negocio.
- Ver información de los pedidos realizados.

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
- Revisar el historial de pedidos.

## Valor añadido del proyecto

El valor diferencial de MTZ reside en su enfoque de nicho especializado. A diferencia de las plataformas genéricas, este sistema está diseñado para el mercado del coleccionismo de mangas originales.

## Stack tecnológico requerido

- **Frontend**: Blade (HTML) y Tailwind CSS para una interfaz temática.
- **Backend**: PHP con Laravel y arquitectura MVC para la lógica de negocio.
- **Base de datos**: MySQL para almacenar información de los mangas, las categorías, los pedidos realizados, los usuarios, etc.
