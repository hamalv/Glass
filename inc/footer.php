
<div class="container-fluid container-xl pt-5 pb-3" id="navigation">
  <div class="row">

    <div class="col-lg-3 col-md-5 col-sm-12 col-12 ">
      <h4>Kontakti</h4>
      <ul class="footer-content-list pl-2">
        <li>P-C.: 8:30 - 17:30</li>
		<li>Pk.: 8:30 - 17:00</li>
        <li>Tel.: 67373875</li>
        <li>Mob.: 29695298</li>
        <li>WhatsApp: 29695298</li>
        <li>Aristida Briāna iela 10, Rīga, Latvija</li>
        <li>info@glas.lv</li>
      </ul>
    </div>

    <div class="col-lg-3 col-md-5 col-sm-12 col-12">
      <h4>Rekvizīti</h4>
      <ul class="footer-content-list pl-2">
        <li>SIA "Glass"</li>
        <li>Reģ. Nr.: LV40103680194</li>
        <li>Aristida Briāna iela 10</li>
        <li>Rīga, Latvija</li>
        <li>LV39HABA0551036653093</li>
        <li>AS Swedbank</li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
      <h4>Seko mums</h4>
      <div class="footer-social-icon pl-lg-5 pl-md-2">
        <a href="https://www.facebook.com/pg/stikls.spogulis.lv/about/"><img src="css/icons/facebook.svg" alt="facebook icon"></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
      <h4>Raksti mums</h4>
      <form method="post">
        <div class="form-group">
          <input class="form-control" type="text" name="first_name" placeholder="Vārds" required>
        </div>
		<div class="form-group">
          <input class="form-control" type="tel" name="phone" placeholder="Tālrunis">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="email" placeholder="Epasts">
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

</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 footer-copyright text-center py-1">
      <p>© 2021 Copyright: SIA Glass</p>
    </div>
  </div>
</div>






<!-- Map -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
<script type="text/javascript">
    var map = L.map('mapid', {
      center: [56.96341, 24.13005],
      zoom: 15
    });
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([56.96335, 24.12996]).addTo(map)
      .bindPopup('SIA GLASS<br />Aristida Briāna iela 10')
      .openPopup();
</script>


<!-- Product Slider -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="/css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).on('ready', function() {
  $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
  });
</script>
<!-- Bootstrap -->
<script src="/css/bootstrap.bundle.js" type="text/javascript" charset="utf-8"></script>
<!-- Gallery images -->
<script src="/css/fslightbox.js"></script>

</body>
</html>
