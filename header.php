<?php 
require_once 'config.php';

$asksetting=$db->prepare("SELECT * FROM tblsetting");
$asksetting->execute();
$getsetting=$asksetting->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<title><?php echo $getsetting['site_title'] ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $getsetting['site_desc'] ?>">
<meta name="keywords" content="<?php echo $getsetting['site_keyw'] ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 
{
	font-family: "Roboto", sans-serif
}
a
{
	text-decoration: none;
}
p:hover, a:hover { color: black;
}
.blue{
	color: blue;
}
.red{
	color: red;
}
.black{
	color: black;
}
.lightblue{
	color: dodgerblue;
}
.darkblue{
	color:darkblue;
}
.deeppink{
	color: deeppink;
}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">