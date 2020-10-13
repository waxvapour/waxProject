<?php
$title = "Waxvapour.com | The Boolean Blog";
$description = "I love Computers and try to express my love through this Blog.";
$keywords = "Waxvapour,Blog,cybersecurity,forincics,programming,programmer,crazy Stuff,Developer,development,Potato_Head,Vaibhav,vaibhav Sharma,Vs";
?>
<!DOCTYPE html>   
<html>
<head>
<title>Waxvapour</title><link rel="icon" href="cores/favicon.ico" type="image/x-icon">
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
<meta name="robots" content="index,follow">
<meta name="title" content="<?php echo $title; ?>">
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta property="og:site_name" content="Waxvapour.com">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:url" content="https://waxvapour.com/">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="core/style/chelp.css" type="text/css" rel="stylesheet" />
<link href="core/style/w3.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="core/Assets/fevi.ico"; type="image/ico" />
</head>
<body class="desktop" onload="BodyLoad()">
	<div class="w3-bottom">
  <div class="w3-bar w3-grey TaskBar">
    <a onclick="window.location.href='https://waxvapour.com/';" class="w3-bar-item w3-hover-black w3-button">[W]</a>
    <a onclick="explorer();" class="w3-bar-item w3-button"><i class="fa fa-folder" aria-hidden="true"></i></a>
    <a onclick="term();" class="w3-bar-item w3-button"><i class="fa fa-terminal" aria-hidden="true"></i></a>
    <a onclick="#" class="w3-bar-item w3-right w3-button" id="clock">00:00:00</a>
  </div>
</div>
