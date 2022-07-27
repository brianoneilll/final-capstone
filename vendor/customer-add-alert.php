
<?php
    if(isset($_SESSION['message'])) :
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hello!</strong> <?= $_SESSION['message']; ?>
  <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
</div>

<?php
    unset($_SESSION['message']);    
    endif;
?>