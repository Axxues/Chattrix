<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Chattrix</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('public/assets/images/message-svgrepo-com.svg'); ?>" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/themify-icons/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/slick/slick-theme.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fancybox/jquery.fancybox.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/aos/aos.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/homepage.css'); ?>">

  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
  <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <div class="homepage-logo">
      <a class="navbar-brand" href="<?= site_url('/') ?>"><img class="header-logo" src="<?php echo base_url('public/assets/images/message-svgrepo-com.svg'); ?>" alt="logo"></a>
      <h3 class="header-logo-title font-weight-bold">Chattrix</h4>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="<?= site_url('landing') ?>">Home
          </a>
        </li>
        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="<?= site_url('team') ?>">Team</a></li>
            <li><a class="dropdown-item @@privacy" href="<?= site_url('privacy') ?>">Privacy</a></li>
            <li><a class="dropdown-item @@faq" href="<?= site_url('FAQ') ?>">FAQ</a></li>
            <li><a class="dropdown-item" href="<?= site_url('sign_in') ?>">Sign In</a></li>
            <li><a class="dropdown-item" href="<?= site_url('sign_up') ?>">Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link " href="<?= site_url('about') ?>">About</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>