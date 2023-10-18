<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/phpmvc_aflah/public/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/phpmvc_aflah/public/about">About</a>
        </li>
    </div>
  </div>
</nav>
<div class="text-center">
<h1>About Me</h1>

    <img src="<?=BASEURL;?>/img/profile.jpg" alt="Aflah Sans" width="200" class="rounded-circle shadow">

<p>Hallo nama saya <?= $data['nama'];?>, alamat saya <?= $data['alamat'];?>, umur saya <?= $data['umur'];?> tahun. </p>

</div>
