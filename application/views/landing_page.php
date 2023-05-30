<nav class="navbar navbar-light bg-dark text-black-50">

	<?php foreach($identitas as $idn) : ?>
  <a class="navbar-brand"><strong><?php echo $idn->judul_website ?></strong></a>
  <span class="small"><strong><?php echo $idn->alamat ?></strong> - <strong><?php echo $idn->email ?></strong> - <strong><?php echo $idn->telepon ?></strong></span>
<?php endforeach; ?>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="submit">Login</button>
  </form>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link ml-3" href="#">BERANDA<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="#">TENTANG KAMPUS</a>
      <a class="nav-item nav-link ml-3" href="#">INFORMASI</a>
      <a class="nav-item nav-link ml-3" href="#">FASILITAS</a>
      <a class="nav-item nav-link ml-3" href="#">GALLERY</a>
      <a class="nav-item nav-link ml-3" href="#">KONTAK</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>