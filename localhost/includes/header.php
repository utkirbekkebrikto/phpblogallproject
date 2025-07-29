<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<title><?php echo isset($title) ? $title : "PHP blog";?></title>
	<link href="assets/style.css" rel="stylesheet">
</head>
<body>
	<header data-bs-theme="dark">
		<?php require "navbar.php"; ?>
	</header>
	<main>
