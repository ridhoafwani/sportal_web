<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Edelweiss Florist | Edit Profile</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('asset/') ?>img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?= base_url('asset/') ?>css/core-style.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>style.css">

</head>

<body>
   

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?= base_url('asset/') ?>img/core-img/logo12.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="<?= base_url('asset/') ?>img/core-img/logo12.png" alt=""></a>
            </div>
           
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="<?= base_url('user/checkout/'); ?>">Checkout</a></li>
                    <li><a href="<?= base_url('user/myprofile/'); ?>">My Profile</a></li>
                    <li><a href="<?= base_url('user/editprofile/'); ?>">Edit Profile</a></li>
                    <li><a href="<?= base_url('user/changepassword/'); ?>">Change Password</a></li>
                    <li><a href="<?= base_url('user/logout/'); ?>">Logout</a></li>
                </ul>
            </nav>
            
        </header>
        <!-- Header Area End -->
    <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
        <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

                    <div class="row">
                        <div class="col-lg-8">

                            <?= form_open_multipart('user/editprofile/');?>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                </div>
                             </div>

                             <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                  <?= form_error('name','<small class="text-danger pl-3">', '</small>' ); ?> 
                                </div>
                             </div>

                              <div class="form-group row">
                                <div class="col-sm-2">Picture</div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('asset/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>

                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                 <input type="file" class="custom-file-input" id="image" name="image">
                                                 <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                             </div>

                             <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                             </div>

                            <?= form_close(); ?>
                        </div>
                    </div>

            </div>
    </div>
    </div>
<!-- End of Main Content -->
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('user/checkout/'); ?>">Checkout</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('user/myprofile/'); ?>">My Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('user/editprofile/'); ?>">Edit Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('user/changepassword/'); ?>">Change Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('user/logout/'); ?>">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?= base_url('asset/') ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url('asset/') ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('asset/') ?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url('asset/') ?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url('asset/') ?>js/active.js"></script>
    <script>
      $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });
  </script>

</body>

</html>