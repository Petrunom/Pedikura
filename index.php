<?php  session_start();
    require "static/templates/head.php";
    require "static/templates/header.php";
    require "static/templates/nav.php";

    //include "./config/temp.php";

  

?>

<hr>
<h1 style="text-align: center; margin-top: 1%;">Interiér:</h1>
<hr>
<div class="row">
  <div class="column">
        <img src="static/img/int.jpeg" style="width:100%">
  </div>
  <div class="column">
        <img src="static/img/int2.jpeg"  style="width:100%">
  </div>
  <div class="column">
    <img src="static/img/intPara.jpeg"  style="width:100%">
  </div>
</div>

<hr>
<h1 style="text-align: center; margin-top: 1%;">Služby:</h1>
<hr>

<div class="row">
<div class="column">
    <div class="container-foto">
      <h2 style="margin-top: 1%; margin-bottom: 1%; text-align: center">Bruska</h2>
      <img src="static/img/stroj.jpeg" class="image" style="width:100%">
      <div class="middle">
        <div class="text"><a href="#" onclick="showPopup('Bruska na pedikúru je speciální nástroj používaný k obnově a vyhlazování nehtů na nohou. Tento nástroj je obvykle vybaven vysokorychlostním rotačním nástrojem, který je napájen elektrickou energií. <br> <br>Bruska je vyrobena z kvalitního materiálu, který je dostatečně pevný a odolný vůči opotřebení. Většinou se používají brusky s diamantovou vrstvou, která je velmi odolná a dokáže vyrovnat nepravidelnosti na nehtech. <br> <br>Během pedikúry se bruska používá k odstranění tvrdé kůže a zlepšení tvaru nehtů. Nejprve se odstraní volná kůže a otlaky pomocí hrubšího nástavce a poté se použije jemnější nástavec, aby se vyrovnaly nepravidelnosti na nehtech a zlepšil se jejich tvar. <br> <br>Bruska na pedikúru je velmi užitečný nástroj, který umožňuje profesionálnímu pedikérům dosáhnout dokonalého vzhledu nehtů na nohou. Pokud si chcete nehty na nohou upravit sami, doporučuje se použít brusku s opatrností a s přesným postupem, aby nedošlo k poškození nehtů nebo kůže.')">Zjisti více</a></div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="container-foto">
      <h2 style="margin-top: 1%; margin-bottom: 1%; text-align: center">něco</h2>
      <img src="static/img/full eqp.jpeg" class="image" style="width:100%; ">
      <div class="middle">
        <div class="text"><a href="#" onclick="showPopup('<table><thead><tr><th>Nářadí</th></tr></thead><tbody><tr><td>Tabulka z databáze</td></tr></tbody></table>')">Zjisti více</a></div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="container-foto">
      <h2 style="margin-top: 1%; margin-bottom: 1%; text-align: center">Produkty</h2>
      <img src="static/img/kremy.jpeg" class="image" style="width:100%;" >
      <div class="middle">
        <div class="text"><a href="#" >Zjisti více</a></div>
      </div>
    </div>
  </div>
</div>

<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close" onclick="hidePopup()">&times;</span>
    <p id="popup-text"></p>
  </div>
</div>




<script src="static/js/popup.js"></script>

<hr>
<h1 style="text-align: center; margin-top: 1%;">Ceník služeb</h1>
<hr>



<?php

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
  <div style="margin-left: 4%; margin-top: 1%; position: relative;">
    <a href='static/templates/new.php' class='create'>Vytvořit</a>
  </div>
  <table >
  
    <thead>
      <th class="admin" style="text-align: center;">Název</th>
      <th class="admin" style="text-align: center;">Cena</th>
      <th class="admin" style="text-align: center;">Akce</th>
    </thead>
    <tbody class="tbody">
      
      <?php
        require "config/cenik.php"
      ?>
      
    </tbody>
  </table>
  
  <?php
  
  }else{
    ?>
  <table >
    <thead>
      <th class="user" style="text-align: center;"><h3> Název</h3></th>
      <th class="user" style="text-align: center;"> <h3>Cena</h3></th>
    </thead>
    <tbody class="tbody">
      <?php
        require "config/cenik_user.php"
      ?>
    </tbody>
  </table><?php }?>

<hr>
<h1 style="text-align: center; margin-top: 1%;">Formulář</h1>
<hr>



<div class="container-form">
  <form action="config/mail.php" method="post" id="contact-form">
    <h2 style="padding-bottom: 2%;">Objednejte se:</h2>
    <p>
      <label>Jméno a příjmení:</label>
      <input name="name" type="text" placeholder="Jana Nováková"/>
    </p>
    <p>
      <label>Předmět</label>
      <input name="subject" type="text" placeholder="O jakou službu máte zájem"/>
    </p>
    <p>
      <label>Email Address:</label>
      <input name="email" type="text" placeholder="Novakova@gmail.com"/>
    </p>
    <p>
      <label>Message:</label>
      <textarea name="message" placeholder="Požadovaný termín Vaší navštěvy"></textarea>
    </p>
    <p>

      <input type="submit" value="Odeslat"/>
    </p>
  </form>
</div>

<?php

require "static/templates/footer.php"
?>