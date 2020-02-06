<?php require"header.php"?>
<?php require"nav.php"?>
<div class="auth">
<?php 
$d = dir('gallary/'.$_GET["id"]);
$i=1;
while (($file = $d->read()) !== false){ 
  if($i>2)
  echo "<a href='gallary/".$_GET['id'] .'/'. $file ."'><img width='300' height='500' style='margin:30px' src='gallary/".$_GET['id'] .'/'. $file . "'>"; 
  $i++;
} 
$d->close(); 
?>
	</div>

    
<?php require"footer.php"?>
