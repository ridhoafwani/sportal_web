        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Jadwal Lapangan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$lapangan->name?></h6>
            </div>
            <div class="card-body text-center">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <?php
                  date_default_timezone_set('Asia/Makassar');
                  $datenow = date("Y-m-d");
                  if($datenow > $date){
                    $future = 0;
                  }
                  else{
                    $future = 1;
                  }
                  ?>
                  <thead>
                    <tr>
                      <th>
                        <form class="date" method="post" action="<?= base_url('lapangan/jadwal_pick/'.$lapangan->id) ?>">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" value="<?=$date?>" id="datepick" name="datepick" ">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-calendar-alt"></i>
                                        Lihat Jadwal
                        </button>
                        </form>
                      </th>
                      <th>
                        Tarif per jam : Rp. <?=$lapangan->tarif?>
                      </th>

                    </tr>
                    <tr>
                      <th>Waktu</th>
                      <th>Ketersediaan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Waktu</th>
                      <th>Ketersediaan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>00.00 - 01.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 00:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/00-01/s01/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s01 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/00-01/s01/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>
                    <tr>
                      <td>01.00 - 02.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/01-02/s12/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s12 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/01-02/s12/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>
                    <tr>
                      <td>02.00 - 03.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/02-03/s23/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s23 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/02-03/s23/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>
                    <tr>
                      <td>03.00 - 04.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/03-04/s34/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s34 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/03-04/s34/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>04.00 - 05.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/04-05/s45/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s45 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/04-05/s45/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>05.00 - 06.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/05-06/s56/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s56 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/05-06/s56/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>06.00 - 07.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/06-07/s67/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s67 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/06-07/s67/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>07.00 - 08.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/07-08/s78/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s78 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/07-08/s78/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>08.00 - 09.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/08-09/s89/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s89 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/08-09/s89/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>09.00 - 10.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/09-10/s910/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s910 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/09-10/s910/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>10.00 - 11.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/10-11/s1011/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1011 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/10-11/s1011/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>11.00 - 12.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/11-12/s1112/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1112 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/11-12/s1112/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>12.00 - 13.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/12-13/s1213/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1213 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/12-13/s1213/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>13.00 - 14.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/13-14/s1314/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1314 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/13-14/s1314/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>14.00 - 15.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/14-15/s1415/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1415 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/14-15/s1415/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>15.00 - 16.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/15-16/s1516/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1516 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/15-16/s1516/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>16.00 - 17.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/16-17/s1617/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1617 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/16-17/s1617/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>17.00 - 18.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/17-18/s1718/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1718 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/17-18/s1718/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>18.00 - 19.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/18-19/s1819/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1819 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/18-19/s1819/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>19.00 - 20.00</td>
                      <<td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/19-20/s1920/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s1920 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/19-20/s1920/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>20.00 - 21.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/20-21/s2021/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s2021 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/20-21/s2021/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>21.00 - 22.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/21-22/s2122/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s2122 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/21-22/s2122/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>22.00 - 23.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/22-23/s2223/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s2223 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/22-23/s2223/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                    <tr>
                      <td>23.00 - 24.00</td>
                      <td>
                        <?php if($future==0): ?>
                          <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                          <?php else :?>
                            <?php
                              $timenow = date("Y-m-d H:i:s");
                              $scheduletime = $date." 01:00:00";  
                            ?>
                            <?php if($timenow>$scheduletime):?>
                              <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                              <?php else :?>
                                <?php if($ada_jadwal == 0):?>
                                  <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/23-24/s2324/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                  <?php else :?>
                                    <?php if($jadwal->s2324 == 1):?>
                                    <a href="#" class="btn btn-danger">Tidak Tersedia</a>
                                    <?php else :?>
                                    <?=anchor('lapangan/addtocart/'.$lapangan->id.'/'.$date.'/23-24/s2324/', '<div class="btn btn-success btn-sm"> <i class="fa fa-cart-plus"></i> Tambah Keranjang</div>')?>
                                <?php endif; ?>                     
                                <?php endif; ?>                                
                            <?php endif;?>  
                        <?php endif;?>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->