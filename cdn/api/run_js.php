<?php
# Run JavaScript
$run = $_GET['run'];
echo $run;
$res = array(
  "meta"=>array("status"=>200),
  "data"=>array("run"=>$run)
);
?>
