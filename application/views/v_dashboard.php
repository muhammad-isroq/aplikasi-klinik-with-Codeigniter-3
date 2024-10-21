<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="icon" type="image/x-icon" href="/assets/hospital.png">
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h1 class="display-4">Klinik STMIK</h1>
        <p class="lead">Aplikasi klinik ini menggunakan konsep php mvc</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner Min-height 100vh">
        <div class="carousel-item active">
          <img src="<?=base_url();?>/assets/1.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url();?>/assets/2.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?=base_url();?>/assets/3.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
</div>
      </div>
    </div>
  </div>
</div>

   
  </div>
</div>
</body>
</html>