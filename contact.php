<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    include( $path . "/inc/header.php");
?>


<div class="container-fluid container-xl">
  <!-- ############################## Contact ############################## -->
  <div class="row">
    <div class="col-12 p-0">
      <img class="img-fluid" src="/css/images/contact-banner.jpg" alt="company banner">
    </div>
  </div>

  <div class="row mt-5 p-lg-5 p-md-3 p-sm-2 p-1">
    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <h2>Kontakti</h2>
      <ul class="ul-no-decoration p-0">
        <li>P.O.T.C.:   8:30 - 17:30</li>
		<li>Pk.:   8:30 - 17:00</li>
        <li>S.Sv.: Slēgts</li>
		<li><br></li>
		<li>Rīga, Latvija</li>
		<li>Aristida Briāna iela 10</li>
        <li><br></li>
        <li>Tel: 67373875 </li>
        <li>Mob: 29695298</li>
        <li>WhatsApp: 29695298</li>
        <li>info@glas.lv</li>
		
      </ul>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
      <h2>Rekvizīti</h2>
      <ul class="ul-no-decoration p-0">
        <li>SIA Glass</li>
        <li>Reģ. Nr.: LV40103680194</li>
        <li>Aristida Briāna iela 10</li>
        <li>Rīga, Latvija</li>
        <li>LV39HABA0551036653093</li>
        <li>SWIFT: HABALV22</li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
      <h2>Raksti mums</h2>
      <form method="post">
        <div class="form-group">
          <input class="form-control" type="text" name="first_name" placeholder="Vārds" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="tel" name="phone" placeholder="Tālrunis">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="email" placeholder="E-pasts">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="message" placeholder="Jūsu ziņa" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="submit_email" class="btn btn-info btn-block" value="Nosūtīt">
        </div>
      </form>
    </div>

  </div>

<!-- ############################## Location ############################## -->
  <div class="row mt-5">
    <div class="col-12 text-center">
      <h1>Kā mūs atrast?</h1>
    </div>
  </div>

  <div class="row justify-content-center mt-3">
    <div class="col-lg-1 col-md-1 col-sm-1 col-2">
      <a href="https://goo.gl/maps/g39VVcENoAyqhoMEA"><img src="css/icons/gmap.svg" alt="google map logo" class="cont-loc-logo">
    </div>
    <div class="col-6 align-self-center">
      <h4>Google Maps</h4></a>
    </div>
  </div>


  <div class="row justify-content-center mb-4">
    <div class="col-lg-1 col-md-1 col-sm-1 col-2">
      <a href="https://www.waze.com/ul?place=ChIJ0fVjirXP7kYRN5Co431n0xU&ll=56.96324550%2C24.12991060&navigate=yes"><img src="css/icons/waze.svg" alt="waze logo" class="cont-loc-logo">
    </div>
    <div class="col-6 align-self-center">
      <h4>Waze</h4></a>
    </div>
  </div>

  <div class="row p-lg-5 p-md-3 p-sm-3 p-2">
    <div class="col-12 map" id="mapid"> </div>
  </div>

  <div class="row p-5">
    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
      <h4>Trolejbuss</h4>
      <ul class="ul-no-decoration p-2">
        <li><strong>4, 12, 17</strong> - PIETURA: Matīsa iela</li>
        <li><strong>3, 25</strong> (Iļguciems –> Brīvības iela) PIETURA: A. Briāna iela</li>
        <li><strong>5</strong> (Daugavas stadions –> P.Stradiņa slimnīca) PIETURA: Kr.Valdemāra iela</li>
        <li><strong>5</strong> (P.Stradiņa slimnīca –> Daugavas stadions) PIETURA: A. Briāna iela</li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
      <h4>Autobuss</h4>
      <ul class="ul-no-decoration  p-2">
        <li><strong>1, 3, 6, 9, 14, 16, 21</strong></li>
        <li>PIETURA: Matīsa iela</li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
      <h4>Tramvajs</h4>
      <ul class="ul-no-decoration  p-2">
        <li><strong>11</strong></li>
        <li>PIETURA: Laima</li>
      </ul>
    </div>
  </div>

  <div class="row justify-content-center pb-5">
    <div class="col-lg-7 col-md-9 col-sm-10 col-11">
      <img class="img-fluid" src="/css/images/contact-bottom.jpeg" alt="company banner">
    </div>
  </div>
</div>

<?php
  include( $path . "/inc/footer.php");
?>
