<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre los sabores únicos de Bar Plaza Compostela, un destacado restaurante y bar en Madrid. Disfruta de [detalles específicos del restaurante].">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="restaurant" />
    <meta property="og:title" content="Bar Plaza Compostela - Restaurante y Bar en Madrid" />
    <meta property="og:description" content="Bar Plaza Compostela en Madrid - Tu destino gastronómico para experiencias culinarias únicas y un ambiente acogedor." />
    <meta property="og:image" content="img/logo.png" />
    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />
    <meta property="og:url" content="https://barplazacompostela.es" />
    <meta property="og:site_name" content="Bar Plaza Compostela" />
    
    <!-- Título de la Página -->
    <title>Bar Plaza Compostela - Restaurante y Bar en Madrid</title>

    <!-- Estilos y Fuentes -->
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,900" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/index-view.css">
    <link rel="stylesheet" href="styles/footer.css">



</head>

<body>

    <!-- Inclusión de Componentes -->
    <?php include_once ('views/header.php'); ?>
    <?php include_once ('views/index-view.php'); ?>
    <?php include_once ('views/footer.php'); ?> 


        <!-- JavaScript original -->
        <script src="./js/menu.js"></script>
    <script>
        const faqHeaders = document.querySelectorAll(".faqs-container .faq-header");

        faqHeaders.forEach((header, i) => {
            header.addEventListener("click", () => {
                header.nextElementSibling.classList.toggle("active");

                const open = header.querySelector(".open");
                const close = header.querySelector(".close");

                if (header.nextElementSibling.classList.contains("active")) {
                    open.classList.remove("active");
                    close.classList.add("active");
                } else {
                    open.classList.add("active");
                    close.classList.remove("active");
                }
            });
        });
    </script>


</body>
</html>
