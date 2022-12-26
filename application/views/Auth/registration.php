  <div class="container">
      <br>
      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                  <div class="col-lg-7">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Mendaftar!</h1>
                          </div>
                          <br>

                          <form class="user" method="post" action="<?= base_url('Auth/register'); ?> ">
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Anda" value="<?= set_value('name') ?>">
                                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Anda" value="<?= set_value('name') ?>">
                                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Verifikasi Password">
                                  </div>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                  Daftarkan Saya
                              </button>

                          </form>
                          <hr>
                          <div class="text-center">
                              <a class="small" href="<?= base_url('Auth') ?>">Sudah punya akun? Masuk di sini!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>