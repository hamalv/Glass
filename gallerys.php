<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    include( $path . "/inc/header.php");
?>

<div class="container-fluid container-xl pt-5 pb-5">
<form class="" action="gallery.php" method="post">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 text-center">
    <div class="col mb-4">
      <a href="gallery.php?gallery=spoguli">
      <div class="card shadow">
        <img src="/css/images/led.jpg" class="card-img-top" alt="led mirror ">
        <div class="card-body">
          <h5 class="card-title">LED Spoguļi</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=interjeraspoguli">
      <div class="card shadow ">
        <img src="/css/images/interjera.jpg" class="card-img-top" alt="house interior mirror">
        <div class="card-body ">
          <h5 class="card-title">Interjera Spoguļi</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=matejums">
      <div class="card shadow">
        <img src="/css/images/matejums.jpg" class="card-img-top" alt="matte mirror">
        <div class="card-body">
          <h5 class="card-title">Matējums</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=virtuvespaneli">
      <div class="card shadow">
        <img src="/css/images/virtuve.jpg" class="card-img-top" alt="kitchen panel of glass">
        <div class="card-body">
          <h5 class="card-title">Virtuves Paneļi</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=duskabines">
      <div class="card shadow">
        <img src="/css/images/duskabine.jpeg" class="card-img-top" alt="shower wall of glass">
        <div class="card-body">
          <h5 class="card-title">Duškabīnes</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=pirtissaunas">
      <div class="card shadow">
        <img src="/css/images/pirtis.jpg" class="card-img-top" alt="sauna doors of glass">
        <div class="card-body">
          <h5 class="card-title">Pirtis un Saunas</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=stiklasienas">
      <div class="card shadow">
        <img src="/css/images/sienas.jpg" class="card-img-top" alt="wall of glass">
        <div class="card-body">
          <h5 class="card-title">Stikla Sienas</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=stikladurvis">
      <div class="card shadow">
        <img src="/css/images/durvis.jpg" class="card-img-top" alt="doors of glass">
        <div class="card-body">
          <h5 class="card-title">Stikla Durvis</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=margas">
      <div class="card shadow">
        <img src="/css/images/margas.jpeg" class="card-img-top" alt="railing of glass">
        <div class="card-body">
          <h5 class="card-title">Margas</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=ruditaisstikls">
      <div class="card shadow">
        <img src="/css/images/rudits.jpg" class="card-img-top" alt="toughened glass">
        <div class="card-body">
          <h5 class="card-title">Rūdītais Stikls</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=konstrukcijas">
      <div class="card shadow">
        <img src="/css/images/sample.jpeg" class="card-img-top" alt="picture of offers">
        <div class="card-body">
          <h5 class="card-title">Stikla un Spoguļu konstrukcijas</h5>
        </div>
      </div>
      </a>
    </div>
    <div class="col mb-4">
      <a href="gallery.php?gallery=dekorativie">
      <div class="card shadow">
        <img src="/css/images/krasainie.jpeg" class="card-img-top" alt="picture of offers">
        <div class="card-body">
          <h5 class="card-title">Dekoratīvie un Krāsotie stikli</h5>
        </div>
      </div>
      </a>
    </div>
  </div>
</form>
</div>

<?php
  include( $path . "/inc/footer.php");
?>
