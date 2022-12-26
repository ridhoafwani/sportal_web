    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-volleyball-ball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sportal</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

            <!-- Query Menu -->

            <?php

            $role_id = $user['role_id'];
            $QueryMenu="SELECT `user_menu`.`id`, `menu`
            FROM `user_menu` JOIN `user_acces_menu` 
            ON `user_menu`.`id` = `user_acces_menu`.`menu_id`
            WHERE `user_acces_menu`.`role_id` = $role_id 
            ORDER BY `user_acces_menu`.`menu_id` ASC ";

            $Menu = $this->db->Query($QueryMenu)->result_array();
            
            ?>

            <?php foreach($Menu as $M): ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                <?=$M['menu']?>
            </div>
            <?php endforeach; ?>

            <?php
            $role = $user['role_id'];
            ?>
                <?php if($role == 3): ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-volleyball-ball"></i>
                    <span>Lapangan</span>
                  </a>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="<?= base_url('lapangan/futsall'); ?>">Futsall</a>
                      <a class="collapse-item" href="<?= base_url('lapangan/badminton'); ?>">Badminton</a>
                      <a class="collapse-item" href="<?= base_url('lapangan/voli'); ?>">Voli</a>
                      <a class="collapse-item" href="<?= base_url('lapangan/basket'); ?>">Basket</a>
                    </div>
                  </div>
                </li>
                <?php endif; ?>

                <?php if($role == 1 || $role == 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('performa'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Performa</span></a>
                    </li>

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-volleyball-ball"></i>
                        <span>Lapangan</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?=base_url('managelapangan/managefutsal')?>">Futsall</a>
                            <a class="collapse-item" href="<?=base_url('managelapangan/managebadminton')?>">Badminton</a>
                            <a class="collapse-item" href="<?=base_url('managelapangan/managevoli')?>">Voli</a>
                            <a class="collapse-item" href="<?=base_url('managelapangan/managebasket')?>">Basket</a>
                        </div>
                        </div>
                    </li>
                <?php endif; ?>

                <?php if($role == 1): ?>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Daftar User</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('user/member'); ?>">Member</a>
                            <a class="collapse-item" href="<?= base_url('user/admin'); ?>">Admin</a>
                            <a class="collapse-item" href="<?= base_url('user/pemilik'); ?>">Pemilik</a>
                            <a class="collapse-item" href="<?= base_url('user/all'); ?>">Semua</a>
                        </div>
                        </div>
                    </li>
                <?php endif; ?>


      <!-- Looping Menu -->

            <?php foreach($Menu as $M):?>

            <?php
            $Menu_id = $M['id']; 
            $QuerySubMenu="SELECT *
                    FROM `sub_menu` JOIN `user_menu` 
                    ON `sub_menu`.`menu_id` = `user_menu`.`id`
                    WHERE `sub_menu`.`menu_id`=$Menu_id
                    AND `sub_menu`.`is_active` = 1";
            
            $SubMenu = $this->db->Query($QuerySubMenu)->result_array();
            ?>

                <?php foreach($SubMenu as $SM):?>

                          <li class="nav-item">
                          <a class="nav-link" href="<?= base_url($SM['url'])?>">
                            <i class="<?=$SM['icon']?>"></i>
                            <span><?=$SM['title']?></span></a>
                        </li>
                  
                <?php endforeach; ?>

            <?php endforeach; ?>
            


      <!-- Divider -->
      <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('profile')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile Saya</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('profile/edit')?>">
          <i class="fas fa-fw fa-user-cog"></i>
          <span>Edit Profil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout/'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->