<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SI-AKAD</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header .logo {
      font-size: 24px;
      font-weight: bold;
      color: #ff6600;
    }

    nav a {
      margin: 0 15px;
      color: #333;
      text-decoration: none;
      font-weight: bold;
    }

    .hero {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px;
      background-color: #f9f9f9;
    }

    .hero div {
      max-width: 600px;
      text-align: center;
    }

    .hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      color: #777;
      margin-bottom: 20px;
    }

    .hero button {
      background-color: #ff6600;
      color: #fff;
      border: none;
      padding: 15px 30px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      margin: 0 10px;
    }

    .services,
    .stats,
    .contact {
      padding: 50px 20px;
      text-align: center;
    }

    .services h2,
    .stats h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .services .service,
    .stats .stat {
      display: inline-block;
      width: 30%;
      margin: 0 1.5%;
      vertical-align: top;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .services .service h3,
    .stats .stat h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .footer a {
      color: #ff6600;
      text-decoration: none;
      margin: 0 10px;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">SI-AKAD</div>
    <nav>
      <a href="#Beranda">Beranda</a>
      <a href="#Layanan">Layanan</a>
      <a href="#Data">Data</a>
      <a href="http://localhost/sistem-informasi/index.php/administrator/auth">Aplikasi</a>
    </nav>
  </header>
  <section class="hero" id="Beranda">
    <div>
      <h1>Sistem Informasi Akademik Universitas SI-AKAD</h1>
      <p>Media Digital Layanan Bimbingan, Monitoring dan Penilaian Akademik</p>
      <button>Mahasiswa</button>
      <button>Dosen</button>
    </div>
  </section>
  <section class="services" id="Layanan">
    <h2>Layanan Terbaik Kami</h2>
    <div class="service">
      <h3>Grafik Akademik</h3>
      <p>Menampilkan perkembangan akademik mahasiswa setiap periode perkuliahan melalui grafik yang interaktif.</p>
    </div>
    <div class="service">
      <h3>Nilai Mata Kuliah</h3>
      <p>Memberikan mutu dan nilai terhadap aktivitas perkuliahan mahasiswa setiap mata kuliah.</p>
    </div>
    <div class="service">
      <h3>Monitoring Bimbingan</h3>
      <p>Melakukan evaluasi monitoring secara online terhadap mahasiswa bimbingan akademik.</p>
    </div>
  </section>
  <section class="stats" id="Data">
    <h2>Data Sistem Informasi Akademik</h2>
    <div class="stat">
      <h3>Mahasiswa Aktif</h3>
      <p>31509</p>
    </div>
    <div class="stat">
      <h3>Dosen Terbaik</h3>
      <p>1011</p>
    </div>
    <div class="stat">
      <h3>Mata Kuliah Berkualitas</h3>
      <p>5784</p>
    </div>
    <div class="stat">
      <h3>Program Studi</h3>
      <p>95</p>
    </div>
  </section>
  <div class="card text-center m-5">
    <div class="card-header">
      <strong>TENTANG KAMPUS</strong>
    </div>
    <div class="card-body">
      <p class="card-text">

        <?php foreach ($tentang as $ttg) : ?>
          <?php echo word_limiter($ttg->sejarah, 75) ?>
        <?php endforeach; ?>

      </p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Selengkapnya...
      </button>
    </div>
  </div>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tentang Kampus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <strong>SEJARAH UNIVERSITAS BRAWIJAYA</strong>
          <?php foreach ($tentang as $ttg) : ?>
            <?php echo $ttg->sejarah ?>
          <?php endforeach; ?><br><br>

          <strong>VISI UNIVERSITAS BRAWIJAYA</strong>
          <?php foreach ($tentang as $ttg) : ?>
            <?php echo $ttg->visi ?>
          <?php endforeach; ?><br><br>

          <strong>MISI UNIVERSITAS BRAWIJAYA</strong>
          <?php foreach ($tentang as $ttg) : ?>
            <?php echo $ttg->misi ?>
          <?php endforeach; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row m-4 text-center">

    <?php foreach ($informasi as $info) : ?>
      <div class="card m-3" style="width: 18rem;">
        <span class="display-2 text-center text-info"><i class="<?php echo $info->icon ?>"></i></span>
        <div class="card-body">
          <h5 class="card-title badge badge-info"><?php echo $info->judul_informasi ?></h5>
          <p class="card-text"><?php echo $info->isi_informasi ?></p>
          <a href="#" class="btn btn-primary">Selengkapnya...</a>
        </div>
      </div>

    <?php endforeach; ?>

  </div>

  <form method="post" action="<?php echo base_url('landing_page/kirim_pesan') ?>">

    <div class="row m-4">
      <div class="col-md-8">
        <div class="alert alert-primary">
          <i class="fas fa-envelope-open-text"></i> HUBUNGI KAMI
        </div>

        <?php echo $this->session->flashdata('pesan') ?>

        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control">
          <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
          <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
        </div>

        <div class="form-group">
          <label>Pesan</label>
          <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
          <?php echo form_error('pesan', '<div class="text-danger small">', '</div>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>

  </form>
  <footer class="footer">
    <p>Copyright © 2021 Universitas Tanjungpura</p>
    <a href="#">SIAKAD Mahasiswa</a>
    <a href="#">SIAKAD Dosen</a>
  </footer>


</body>

</html>