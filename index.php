<!DOCTYPE html>
<html>

<head>
  <title>Peliculas Infinity</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.slider').slick({
        autoplay: true, // activa la reproducción automática
        autoplaySpeed: 3000, // velocidad en milisegundos de transición
        dots: true, // muestra los puntos de navegación
        arrows: true // muestra las flechas de navegación
      });
    });
    //Para el carrusel de peliculas famosas
    const slider = document.querySelector('.slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
      slider.classList.add('active');
    });

    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3; // Se multiplica por 3 para que el scroll sea más rápido
      slider.scrollLeft = scrollLeft - walk;
    });

  </script>

</head>

<body>
  <header>
    <h1>Peliculas Infinity</h1>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Películas</a></li>
        <li><a href="#">Actores</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </nav>

    <button id="show-search-btn" class="buscador">Show search</button>

  </header>
  <main class="agregado">
  <div id="search-container" style="display:none">
    <div class="container">
      <div class="search-container">
        <input type="text" id="movie-name" placeholder="Enter movie name here...">
        <button id="search-btn">Search</button>
      </div>
      <div id="result"></div>
    </div>
    <button id="close-btn">Close</button>
  </div>
  <script src="key.js"></script>
  <script src="index.js"></script>
  <script>
    // Obtener el botón "Show search"
    var showSearchBtn = document.getElementById("show-search-btn");

    // Obtener el contenedor de búsqueda
    var searchContainer = document.getElementById("search-container");

    // Agregar un controlador de eventos para el botón "Show search"
    showSearchBtn.onclick = function () {
      searchContainer.style.display = "block";
    }
    const closeBtn = document.getElementById("close-btn");

    // Ocultar el contenedor de búsqueda
    function closeSearchContainer() {
      searchContainer.style.display = "none";
    }

    // Ocultar el contenedor de búsqueda cuando se hace clic en el botón de cerrar
    closeBtn.addEventListener("click", closeSearchContainer);

  </script>
  
    <h2>Últimas películas agregadas</h2>
    <div class="slider">
        <?php include 'obtener_peliculas.php'; ?>
        <img src="<?php echo $imagen; ?>" alt="Poster de la película">
        <h3><?php echo $titulo; ?></h3>
        <p><?php echo $descripcion; ?></p>
      </div>
      
      <div class="slide">
        <?php include 'obtener_peliculas.php'; ?>
        <img src="<?php echo $imagen; ?>" alt="Poster de la película">
        <h3><?php echo $titulo; ?></h3>
        <p><?php echo $descripcion; ?></p>
      </div>
      <div class="slide">
        <?php include 'obtener_peliculas.php'; ?>
        <img src="<?php echo $imagen; ?>" alt="Poster de la película">
        <h3><?php echo $titulo; ?></h3>
        <p><?php echo $descripcion; ?></p>
      </div>
    </div>
  </main>
  <p>Hola Munco</p>
  <div class="recommended-movies">
  <h2>Películas recomendadas</h2>
  <div class="movie-list">
    <div class="movie">
      <img src="imagen1.jpeg" alt="Poster de película 1">
      <h3>Avatar 2</h3>
      <p>Descripción de la película 1</p>
    </div>
    <div class="movie">
      <img src="imagen2.jpg" alt="Poster de película 2">
      <h3>Título de la película 2</h3>
      <p>Descripción de la película 2</p>
    </div>
    <div class="movie">
      <img src="imagen3.jpg" alt="Poster de película 3">
      <h3>Título de la película 3</h3>
      <p>Descripción de la película 3</p>
    </div>
  </div>
</div>
   <div class="recommended-movies">
    <h2>Películas recomendadas</h2>
    <div class="movie-list">
      <div class="movie">
        <img src="imagen1" alt="Poster de película 1">
        <h3>Avatar 2</h3>
        <p>Descripción de la película 1</p>
      </div>
      <div class="movie">
        <img src="imagen2.jpg" alt="Poster de película 2">
        <h3>Título de la película 2</h3>
        <p>Descripción de la película 2</p>
      </div>
      <div class="movie">
        <img src="imagen3.jpg" alt="Poster de película 3">
        <h3>Título de la película 3</h3>
        <p>Descripción de la película 3</p>
      </div>
    </div>
  </div>

  <footer class="pie_pagina">
    <p>Derechos reservados &copy; 2023</p>
  </footer>
</body>

</html>