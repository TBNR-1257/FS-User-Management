<?php

  $path = $_SERVER["REQUEST_URI"];

  //  Trim / at the back of the url to avoid switching back to homepage
  $path = trim( $path , "/" );

  // Removes all URL parameters that starts from '?'
  $path = parse_url( $path, PHP_URL_PATH );

  switch( $path ) {
    case 'login';
      require 'pages/login.php';
      break;
    case 'signup';
      require 'pages/signup.php';
      break;
    case 'logout';
      require 'pages/logout.php';
      break;
    default:
      require 'pages/home.php';
      break;
  }