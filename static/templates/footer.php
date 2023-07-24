<footer class="footer">
     <div class="container-footer">
      <div class="row-footer">
        <div class="footer-col">
          <h4>Kontakt:</h4>
          <ul>
            <li><p>Adresa: Kutná Hora</p></li>
            <li><p>Tel.: 724 999 999</p></li>
            <li><p>Ičo: XXXXX</p></li>
            <li><p>E-mail: DOE@seznam.cz</p></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Navigace</h4>
          <ul>
          <li><a href="/doudis/index.php" class="<?php echo ($page == 'index') ? 'active' : ''?>" >HOME</a></li>
          <li><a href="/doudis/fotogalerie.php" class="<?php echo ($page == 'Fotogalerie') ? 'active' : ''?>" >Fotogalerie</a></li>
          <li><a href="/doudis/contact.php" class="<?php echo ($page == 'contact') ? 'active' : ''?>" >Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Admin</h4>    
          <ul>  <?php

  if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  ?> <li><a href="config/logout.php">logout</a></li>
            
            <?php
  
}else{
  ?>
          <li><a onclick="document.getElementById('id01').style.display='block'" href="#">login</a> <?php }?>
            <div id="id01" class="modal">
            <form class="modal-content animate" action="config/login.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>

                <div class="container-login">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                    
                <button type="submit">Login</button>
                </div>

                <div class="container" >
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                </div>
            </form>
            </div></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Sledujte nás</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

<script src="static/js/login.js"></script>
</body>
</html>