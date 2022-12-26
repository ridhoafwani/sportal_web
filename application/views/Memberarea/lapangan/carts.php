        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Lapangan</th>                        
                        <th>Waktu</th>
                        <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($this->cart->contents() as $item) : ?>
                    <tr>
                      <td><?=$item['name']?></td>
                      <td><?=$item['date']?>, Jam <?=$item['time']?></td>
                      <td><?=$item['price']?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <div>
                <div class="row text-center">
                   <div class="col-md-9">
                   </div>
                   <div class="col-md-3">
                    <p>Total = Rp. <?=number_format($this->cart->total(),0,',','.')?> </p>
                        <hr>
                   </div>
                </div>
                <div class="text-right">
                  <?php date_default_timezone_set('Asia/Makassar'); ?>
                    <?=date('d-m-Y H:i:s')?>    
                    <a href="destroy_cart" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash"></i> Hapus Keranjang</a>
                    <a href="proses_pesanan" class="btn btn-success">Bayar Sekarang</a>
                </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->