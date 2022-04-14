    
    
    
<?php if ($_SESSION['rights'] == 2) { ?>
  <!-- nav as admin -->
    <nav class="navbar">
      <div class="logoOrName">   
        <a class="title" href="index.php">sushi place</a>
      </div>
      <div class="navSpaceBetween">
      </div>
      <div class="navLinkBox">
        <div class="navBoxes">
          <li><a href="menu.php">menu</a></li>
        </div>
        <div class="navBoxes">
          <li><a href="contact.php">contact</a></li>
        </div>
        <div class="navBoxes">
          <li><a href="useroradmin.php">login</a></li>
        </div>
        <div class="navBoxes">
          <li><a href="back-end/dashboard.php">dashboard</a></li>
        </div>
      </div>
    </nav>
    <?php } else { ?>
      <!-- regualar nav -->
    <nav class="navbar">
      <div class="logoOrName">   
        <a class="title" href="index.php">sushi place</a>
      </div>
      <div class="navSpaceBetween">
      </div>
      <div class="navLinkBox">
        <div class="navBoxes">
          <li><a href="menu.php">menu</a></li>
        </div>
        <div class="navBoxes">
          <li><a href="contact.php">contact</a></li>
        </div>
        <div class="navBoxes">
          <li><a href="useroradmin.php">login</a></li>
        </div>
      </div>
    </nav>
    <?php } ?>
