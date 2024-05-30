<?php 

?>
<header class="container-fluid p-0 sticky-top" >
  <nav class="navbar navbar-expand-lg" style="Background-color: #43847b">
      <div class="container" >
        <a class="navbar-brand fw-bold" href="/PPW-24-07_L0122147_SalsaRizkiSaputri/index.php" style="color: #cdfadb">School Inventory</a>
        <?php if(!empty($_SESSION['is_login']) && $_SESSION['is_login'] == true) : ?>
        <a href="/PPW-24-07_L0122147_SalsaRizkiSaputri/src/functions/logout.php" class="btn fw-bold btn-light" style="color: #43847b">Log out</a>
        <?php endif; ?>
      </div>
  </nav>
</header>

