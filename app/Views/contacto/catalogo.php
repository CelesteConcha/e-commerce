<div class="card" style="width: 18rem;">
<?php
if($numero==0){
  ?>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title 0</h5>
    <p class="card-text">catalogo 0</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <?=$titulo;?>
  </div>
  <?php
}elseif ($numero==1){
  ?>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title 1</h5>
    <p class="card-text">catalogo 1</p>
    <a href="#" class="btn btn-danger">Go somewhere</a>
    <?=$titulo;?>
  </div>
  <?php
}
  ?>
</div> 
