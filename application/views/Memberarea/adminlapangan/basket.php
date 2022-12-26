        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Lapangan Basket</h6>
            </div>
            <div class="card-body">
            <a href="<?=base_url('managelapangan/tambahlapangan')?>" class="btn btn-primary">Tambah Lapangan</a>
            <hr>
            <?= $this->session->flashdata('message'); ?>
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Lapangan</th>                        
                        <th>Nama</th>
                        <th>Lokasi</th>
                        <th>Map</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($lapangan as $lap) : ?>
                    <tr>
                      <td><img src="<?= base_url("assets/img/lapangan/")?><?=$lap->image?>" class="img-thumbnail"></td>
                      <td><?=$lap->name?></td>
                      <td><?=$lap->alamat?></td>
                      <td><iframe src="<?=$lap->map?>" width="300" height="175" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                      <td><?=anchor('managelapangan/edit_lapangan/'.$lap->id.'/'.$lap->id_category, '<div class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i>edit</div>')?></td>
                      <td><?=anchor('managelapangan/hapus/'.$lap->id, '<div class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>Hapus</div>')?></td>
                    </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->