        <!-- Begin Page Content -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Member</h6>
            </div>

            <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>No Telpon</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach($userlist as $user) : ?>
                    <tr>
                      <td><?=$user->id?></td>
                      <td><?=$user->name?></td>
                      <td><?=$user->email?></td>
                      <td><?=$user->alamat?></td>
                      <td><?=$user->notlp?></td>
                      <td><?=anchor('user/hapus/'.$user->id, '<div class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</div>')?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->