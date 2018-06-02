<?php
  session_cache_expire( 20 );
  session_start(); // NEVER FORGET TO START THE SESSION!!!
  $inactive = 2200;
  if(isset($_SESSION['start']) ) {
  	$session_life = time() - $_SESSION['start'];
  	if($session_life > $inactive){
  		header("Location: ../index.php");
      session_destroy();
  	}
  } else {

};
