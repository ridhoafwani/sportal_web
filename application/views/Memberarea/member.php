        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="card mb-3" style="max-width: 740px;">
            <div class="row no-gutters">
              <div class="col-md-4">
              <img src="<?= base_url('assets/img/profile/'). $user['image'];?>" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"><?=$user['name']?></h5>
                <div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>: <?=$user['email']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>: <?=$user['alamat']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>No Telpon</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>: <?=$user['notlp']?></p>
                                            </div>
                                        </div>
                                
                </div>              
                  <p class="card-text"><small class="text-muted">Member sejak (01/05/2020)</small></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


