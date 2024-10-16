<!DOCTYPE html>
<html lang="es">
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bar plaza compostela" />
    <meta property="og:description" content="Bar plaza compostela - Tu parada en el camino" />
    <meta property="og:image" content="img/logo.png" />
    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />
    <meta property="og:url" content="https://barplazacompostela.es/bebidas" />
    <meta property="og:site_name" content="bar plaza compostela" />
 
    
    <title>Menu Dia</title>

    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/bebidas-view.css">
    <link rel="stylesheet" href="styles/footer.css">

    <style>


      /* ID del titulo "postres" dentro de menu del dia */
      #maxmenu-title-postres-menu-day {
        
      background-color: rgba(0, 0, 0, 0);
      display: none;

      }

      /* ID del contenido añadido en "postres" dentro de menu del dia */
      #maxmenu-postres-menu-day {
      background-color: rgba(0, 0, 0, 0);
      display: none;

      }



      h3.incluye {
      text-align: center;
      justify-content: center;
      align-items: center;
      margin-bottom: 200px;

      }



    </style>

</head>

<body>

<?php    include_once ('views/header.php');  ?>



 
<div id="maxmenu-menuContainer">

<script src="https://maxmenu.es/widget-menu.js" data-restaurant-id="Plaza_compostela" data-token="fa03afac83f1c6d47ebc82c299ac62ae"></script>

 <!-- Script Necesario para el desplazamiento de las categorias-->

<script>
document.addEventListener('DOMContentLoaded', function() {
// Esperar a que el menú esté cargado completamente
const checkMenuLoaded = setInterval(function() {
const track = document.querySelector('.carousel-track');
if (track) {
clearInterval(checkMenuLoaded);
initializeCarousel();
}
}, 100); // Intervalo de revisión cada 100ms

function initializeCarousel() {
const track = document.querySelector('.carousel-track');
let currentIndex = 0;

// Calcula el total de categorías
const totalCategories = track.children.length;
if (totalCategories === 0) return;

// Función para mover el carrusel
function moveCarousel(newIndex) {
// Ajuste de índice si fuera de límites
if (newIndex >= totalCategories) {
newIndex = 0;
} else if (newIndex < 0) {
newIndex = totalCategories - 1;
}

// Mueve el carrusel al nuevo índice
const width = track.clientWidth;
const newMove = newIndex * -width;
track.style.transform = `translateX(${newMove}px)`;
currentIndex = newIndex;
}

// Vincular eventos a las flechas
const arrowLeft = document.getElementById('maxmenu-arrow-left');
const arrowRight = document.getElementById('maxmenu-arrow-right');

if (arrowLeft && arrowRight) {
arrowLeft.addEventListener('click', () => moveCarousel(currentIndex - 1));
arrowRight.addEventListener('click', () => moveCarousel(currentIndex + 1));
}

// Inicializa el carrusel en la primera categoría
moveCarousel(0);
}
});
</script>  




                                       
<script>
   // Funciones globales para cargar idioma original y actualizar menú con traducciones
   function cargarIdiomaOriginal() {
       window.location.reload(); // Recargar la página para volver al idioma original
   }


     function actualizarMenuConTraducciones(data) {
       // Verifica que data.categorias exista y sea un array antes de llamar a forEach
       if (Array.isArray(data.categorias)) {
         data.categorias.forEach(categoria => {
           // Actualizar el nombre de la categoría
           let categoriaElement = document.querySelector(`[data-category-id="${categoria.id_categoria}"] .nombre-categoria`);
           if (categoriaElement) {
             categoriaElement.textContent = categoria.nombre_categoria_traducido;
           }

           // Verificar que categoria.items también sea un array
           if (Array.isArray(categoria.items)) {
             // Actualizar los ítems de la categoría
             categoria.items.forEach(item => {
               let itemElement = document.querySelector(`[data-item-id="${item.id_item}"]`);
               if (itemElement) {
                 let tituloElement = itemElement.querySelector('.titulo');
                 let descripcionElement = itemElement.querySelector('.descripcion');
                 if (tituloElement) {
                   tituloElement.textContent = item.titulo_traducido;
                 }
                 if (descripcionElement) {
                   descripcionElement.textContent = item.descripcion_traducida;
                 }
               }
             });
           }
         });
       } else {
         console.error('La propiedad categorias no está presente o no es un array', data);
       }
     }

     function cambiarIdioma(idIdioma) {
       // Crear FormData y enviar la solicitud de traducción al servidor
       const formData = new FormData();
       formData.append('id_idioma', idIdioma);
       formData.append('action', 'script_traducciones'); // Añadir el parámetro 'action'

       return fetch('https://maxmenu.es/wrapper-menu.php', {
         method: 'POST',
         body: formData
       })
       .then(response => response.json())
       .then(data => {
         actualizarMenuConTraducciones(data);
         // Cierra el modal después de actualizar las traducciones
         const modal = document.getElementById('translateItemModalMenu');
         modal.style.display = 'none';
       })
       .catch(error => console.error('Error al actualizar las traducciones:', error));
     }

   // Espera a que el DOM esté completamente cargado
   document.addEventListener('DOMContentLoaded', function() {
       // Verificar la carga del carrusel
       const checkCarouselLoaded = setInterval(function() {
           const track = document.querySelector('.carousel-track');
           if (track) {
               clearInterval(checkCarouselLoaded);
               initializeCarousel();
           }
       }, 100);

       function initializeCarousel() {
           const track = document.querySelector('.carousel-track');
           let currentIndex = 0;
           const totalCategories = track.children.length;
           if (totalCategories === 0) return;

           function moveCarousel(newIndex) {
               if (newIndex >= totalCategories) {
                   newIndex = 0;
               } else if (newIndex < 0) {
                   newIndex = totalCategories - 1;
               }
               const width = track.clientWidth;
               const newMove = newIndex * -width;
               track.style.transform = `translateX(${newMove}px)`;
               currentIndex = newIndex;
           }

           const arrowLeft = document.getElementById('maxmenu-arrow-left');
           const arrowRight = document.getElementById('maxmenu-arrow-right');
           if (arrowLeft && arrowRight) {
               arrowLeft.addEventListener('click', function() { moveCarousel(currentIndex - 1); });
               arrowRight.addEventListener('click', function() { moveCarousel(currentIndex + 1); });
           }
           moveCarousel(0);
       }

       // Verificar la carga del modal de traducción
       const checkTranslateLoaded = setInterval(function() {
           const btnTranslate = document.getElementById('BtnTranslateMenu');
           const modal = document.getElementById('translateItemModalMenu');
           if (btnTranslate && modal) {
               clearInterval(checkTranslateLoaded);
               initializeTranslationModal(btnTranslate, modal);
           }
       }, 100);

       function initializeTranslationModal(btnTranslate, modal) {
           const closeBtn = modal.querySelector('.close');
           if (closeBtn) {
               btnTranslate.addEventListener('click', function() { modal.style.display = 'block'; });
               closeBtn.addEventListener('click', function() { modal.style.display = 'none'; });
           }

           document.querySelectorAll('.idioma-btn').forEach(function(button) {
               button.addEventListener('click', function(event) {
                   event.preventDefault();
                   const formulario = button.closest('form');
                   if (formulario) {
                       const idIdioma = formulario.querySelector('input[name="id_idioma"]').value;
                       cambiarIdioma(idIdioma);
                   }
               });
           });
       }
   });
   </script>


</div>


<h3 class="incluye">
     Incluye Pan, Bebida y Postre 
 </h3>



<?php    include_once ('views/footer.php');?> 


    <script src="./js/menu.js"></script>
  
    

    
</body>
</html>
 
 




