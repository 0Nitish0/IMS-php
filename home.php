<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
        <h1 style="color: maroon;">WELCOME TO GODAM.</h1>
         <h3>This is your new home page!</h3>
         <p>Browse around and know about your Inventory.</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
