<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>My Blog</title> -->
    <title><?php if(isset($page_title)) {echo "$page_title";} else {echo "My Blog";} ?></title>
    <meta name="descreption" content="<?php if(isset($meta_descreption)) {echo "$meta_descreption";} ?>">
    <meta name="kerwords" content="<?php if(isset($meta_keywords)) {echo "$meta_keywords";} ?>">
    <meta name="auther" content="Maher Blog">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets\css\style.css') ?>">



</head>
<body>
    
