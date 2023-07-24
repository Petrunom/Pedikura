<?php
    require "static/templates/head.php";
    require "static/templates/header.php";
    require "static/templates/nav.php";
?>

<section class="contact">
  <div class="contact__info">
    <h2 class="contact__info-heading">Kontakty</h2>
    <div class="contact__info-item">
      <h3 class="contact__info-subheading">Adresa</h3>
      <p>Kutná Hora</p>
    </div>
    <div class="contact__info-item">
      <h3 class="contact__info-subheading">Telefon</h3>
      <p>724 999 999</p>
    </div>
    <div class="contact__info-item">
      <h3 class="contact__info-subheading">Ičo</h3>
      <p>XXXXX</p>
    </div>
    <div class="contact__info-item">
      <h3 class="contact__info-subheading">E-mail</h3>
      <p>DOE@Seznam.Cz</p>
    </div>
  </div>
  <div class="contact__map">
    <h2 class="contact__map-heading">Mapa</h2>
    <div class="contact__map-frame">
      <iframe src="https://www.google.com/maps/embed?" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>


<?php

require "static/templates/footer.php"
?>