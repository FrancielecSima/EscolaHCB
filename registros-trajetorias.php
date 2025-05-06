<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeria de Fotos Escola HCB</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="src/style/registros-trajetorias.css">

</head>

<body>
<nav class="menu-logos">
  <img src="./src/imagens/registros-trajetorias.png" alt="Logo registros e trajetórias" class="logo-trajetoria">
<a href="index.php">
  <img src="./src/imagens/logo-horizon-hcb.png" class="logo-hcb" alt="Logo HCB">
  </a>
</nav>
<section>
<div class="gallery-container">
  <!-- Imagem Grande -->
  <div class="main-image">
    <img id="mainImage" src="img1.jpg" alt="Imagem Principal" />
  </div>

  <!-- Swiper com Thumbs -->
  <div class="swiper thumbs-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-img="img1.jpg" data-label="Categoria 1"><img src="img1.jpg" /></div>
      <div class="swiper-slide" data-img="img2.jpg" data-label="Categoria 2"><img src="img2.jpg" /></div>
      <div class="swiper-slide" data-img="img3.jpg" data-label="Categoria 3"><img src="img3.jpg" /></div>
      <div class="swiper-slide" data-img="img4.jpg" data-label="Categoria 4"><img src="img4.jpg" /></div>
      <div class="swiper-slide" data-img="img1.jpg" data-label="Categoria 1"><img src="img1.jpg" /></div>
      <div class="swiper-slide" data-img="img2.jpg" data-label="Categoria 2"><img src="img2.jpg" /></div>
      <div class="swiper-slide" data-img="img3.jpg" data-label="Categoria 3"><img src="img3.jpg" /></div>
      <div class="swiper-slide" data-img="img4.jpg" data-label="Categoria 4"><img src="img4.jpg" /></div>
      <div class="swiper-slide" data-img="img1.jpg" data-label="Categoria 1"><img src="img1.jpg" /></div>
      <div class="swiper-slide" data-img="img2.jpg" data-label="Categoria 2"><img src="img2.jpg" /></div>
      <div class="swiper-slide" data-img="img3.jpg" data-label="Categoria 3"><img src="img3.jpg" /></div>
      <div class="swiper-slide" data-img="img4.jpg" data-label="Categoria 4"><img src="img4.jpg" /></div>
      <!-- ... até 15 thumbs -->
    </div>

    <!-- Setas -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <!-- Categorias -->
  <div class="categories" id="categoryLabels">
    <span>Categoria 1</span>
    <span>Categoria 2</span>
    <span>Categoria 3</span>
    <span>Categoria 4</span>
    <span>Categoria 2</span>
    <span>Categoria 3</span>
    <span>Categoria 4</span>
    <span>Categoria 2</span>
    <span>Categoria 3</span>
    <span>Categoria 4</span>
    <!-- ... até 15 categorias -->
  </div>
</div>

</section>
<script src="./src/js/registro-trajetorias.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
