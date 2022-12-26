<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?= base_url('assets/home/')?>css/components.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/')?>css/icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/')?>css/responsee.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/')?>owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url("assets/home/")?>owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="<?= base_url("assets/home/")?>css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?= base_url("assets/home/")?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url("assets/home/")?>js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	<!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="<?=base_url()?>" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="<?= base_url("assets/home/")?>img/logo-white.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="<?= base_url("assets/home/")?>img/logo-black.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li><a href="<?=base_url('about')?>">Tentang</a></li>
            <li><a href="<?=base_url('lapangan')?>">Lapangan</a></li>
            <?php if(!$this->session->userdata('email')):?>
              <li><a href="<?= base_url('auth')?>">Masuk</a></li>
              <?php else:?>
                <li><a href="<?= base_url('profile')?>">Akun Saya</a></li>
            <?php endif;?>
          </ul>
        </div>
      </nav>
    </header>