<?php
$input = "f";
if(preg_match("/[^0-9-'-'_' '-éàè]/", $input)){
  echo "ok";
};

  ?>