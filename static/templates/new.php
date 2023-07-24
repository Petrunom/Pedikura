<?php
    require "head.php";
    require "nav.php";
?>
<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<div class="container-form">
    <form method="post" class="form-new" action="/doudis/config/create.php">
        <p>
        <label>Název:</label>
        <input name="name" type="text" placeholder="Pedikúra"/>
        </p>
        <p>
        <label>Cena</label>
        <input name="price" type="text" placeholder="200"/>
        </p>
        <p>
        <input type="submit" value="Vytovřit"/>
        </p>
        <p>
        <input type="submit" value="Zpět"/>
        </p>
    </form>
</div>

<?php
}else{
  ?>
<p style="padding-top: 100px;"> Nic co hledáte zde nenajdete :)</p>
<?php }?>


<?php
require "footer.php"
?>