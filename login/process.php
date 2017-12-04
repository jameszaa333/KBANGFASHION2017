<?php
//get values passe from from in login-php get_included_files
      $username = $POST ['username'];
      $password = $POSR ['password'];

//to prevent mysql injection
      $username = stripcslashes($username);
      $password = stripcslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($username);

 ?>
