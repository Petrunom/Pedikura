<?php  session_start();
    require "static/templates/head.php";
    require "static/templates/header.php";
    require "static/templates/nav.php";

    //include "./config/temp.php";

  

?>
<hr>
<div class="container-form" style="margin:2% 0% 2% 4%">
<h1>Recenze produktu</h1>

<!-- Formulář pro zadání recenze -->
<form action="config/submit-review.php" method="post">
    <label for="name">Jméno:</label>
    <input type="text" id="name" name="name" required>

    <label for="product_name">Název produktu:</label>
    <input type="text" id="product_name" name="product_name" required>

    <label for="rating">Hodnocení:</label>
    <select id="rating" name="rating" required>
        <option value="">-- Vyberte hodnocení --</option>
        <option value="1">1 hvězdička</option>
        <option value="2">2 hvězdičky</option>
        <option value="3">3 hvězdičky</option>
        <option value="4">4 hvězdičky</option>
        <option value="5">5 hvězdiček</option>
    </select>

    <label for="review">Recenze:</label>
    <textarea id="review" name="review" rows="5" required></textarea>

    <input type="submit" value="Odeslat">
</form>
</div>

<hr>


<h1 style="margin:2% 0% 2% 4%">Komentáře</h1>
<!-- Zobrazení existujících recenzí -->
<?php include 'config/reviews.php'; ?>
<?php foreach ($reviews as $review): ?>
    <div class="review">
        <h3><?= $review['Jméno'] ?></h3>
        <p>Produkt: <?= $review['nazev'] ?></p>
        <p>Hodnocení: <?= $review['hodnocení'] ?>/5</p>
        <p><?= $review['popis'] ?></p>
        <p><?= $review['datum'] ?></p>
        <?php

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
        <form action="config/delete-review.php" method="post">
        <input type="hidden" name="review_id" value="<?= $review['id'] ?>">
        <button type="submit">Smazat</button>
        <?php
  
}else{
  ?>

<?php }?>
    </form>
    </div>

<?php endforeach; ?>


<?php
require "static/templates/footer.php"
?>