![](https://www.animalpolitico.com/wp-content/uploads/2019/01/Recurso-2@7x-e1547504167570.png)
# Prueba de programación
Bienvenidx a la prueba para la vacante de programación junior. Abajo encontrarás lo que tienes que hacer y cómo enviar tus resultados.
## ¿Qué hay que hacer?
En resumen: la creación de un custom post type, con un metabox y su visualización sin utilizar ningún plugin.

 - [ ] Descarga este repo y navégalo.
 - [ ] Crea un custom post type llamado "Especiales" que sea visible en el admin. y que acepte categorías, autor, imagen destacada, editor y título.
 - [ ] Añade un metabox solo para el post type "Especiales" que se llame "URL"  para guardar un URL personalizado bajo el meta name "ap_especial_url"
 - [ ] Crea la visualización del post individual de "Especiales". Tendrá que contener mínimo:
	 - [ ] Título
	 - [ ] Imagen destacada
	 - [ ] Contenido de la nota
	 - [ ] Un call to action que utilice el URL de "ap_especial_url"
	 - [ ] El nombre del autor

## Hints y consejos
Es normal que no sepas realizar todos los pasos de memoria y probablemente tengas que buscar cómo hacerlos. Te sugerimos las siguientes búsquedas:

 - [ ] save_post hook
 - [ ] register_post_type
 - [ ] sass cli install
 - [ ] add_meta_box

P.D. Navega bien el código de este repositorio. Puede que encuentres cosas útiles.

## Plus
Calificaremos con puntos extra si realizas estos puntos:

 - [ ] Lazy loading para mejorar la carga de la imagen destacada.
 - [ ] Responsive CSS y uso de @mixin y @extend en SCSS
 - [ ] Validación del URL en el metabox con las siguientes reglas:
	 - [ ] El URL tiene que resolver a alguna dirección real.
	 - [ ] El URL tiene que ser seguro (https)
	 - [ ] El URL solo puede ser del dominio animalpolitico.com
	 - [ ] El URL no puede ser el del especial de La Estafa Maestra
	 - [ ] El URL no puede ser vacío.

## Ya acabé ¿y ahora?
Comprime tu proyecto en .zip y envíalo a: mauricio@animalpolitico.com

## ¡Eso es todo!
Mucha suerte en tu prueba, esperamos ver tus resultados con ansias.

![gato](https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif)
