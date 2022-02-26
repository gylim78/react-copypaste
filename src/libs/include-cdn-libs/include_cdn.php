<?php



  // jQuery Latest
  $include_flag = $include_jquery_latest ?? false;
  if ($include_flag){
    echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  }

  // jQuery 3.6.0
  $include_flag = $include_jquery_360 ?? false;
  if ($include_flag){
    echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
  }

  // jQuery redirect
  $include_flag = $include_jquery_redirect ?? false;
  if ($include_flag){
    echo "<script type='text/javascript' src='http://www.touch-print.net/libs/jQuery/jquery.redirect.js'></script>";
  }

  // BootStrap Latest
  $include_flag = $include_bootstrap_latest ?? false;
  if ($include_flag){
    echo "<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js'></script>";
  }


  // Mustache JS 4.1.0
  $include_flag = $include_mustache_410 ?? false;
  if ($include_flag){
    echo "<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.1.0/mustache.min.js'></script>";
  }

  





?>
