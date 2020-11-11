<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./components/head.php');?>
</head>

<body style="background-image: url('image/header1.jpg');">
  <div class="site-wrap">
    <?php include('./components/header.php');?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="car-bg">
            <img src="/image/header1.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-uppercase" style="color: #fff;">Segurança e proteção em foco</h5>
            <p>Tecnologia de última geração no monitoramento, rastreamento e bloqueio 24h</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="car-bg">
            <img src="/image/hands_on.jpg" class="img-fluid" alt="">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-uppercase" style="color: #fff;">Cobertura e agilidade</h5>
            <p>Conheça nosso sistema de rastreamento</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="icon-angle-left" style="color:orange; font-size: 60px;" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="icon-angle-right" style="color:orange; font-size: 60px;" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <?php include('./components/screens/about.php')?>
    <?php include('./components/screens/products.php')?>
    <?php include('./components/screens/prices.php')?>
    <!--div class="site-section" id="app">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="http://via.placeholder.com/250x450" alt="APP">
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-center">
                <span class="caption d-block mb-2 font-secondary font-weight-bold">EXPERIMENTE</span>
                <h3 class="site-section-heading text-uppercase text-center font-secondary">App Get Track</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p></p>
              </div>
            </div>
            <div>
              <a href="#">
                <img src="" alt="">
              </a>
              <a href="#">
                <img src="" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div-->
    <?php include('./components/screens/contact.php')?>
    <?php include('./components/footer.php')?>
  </div>
  <?php include('./components/scripts.php')?>
</body>

</html>