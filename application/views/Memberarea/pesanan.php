        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pesanan Saya</h1>
          
          <div class="card">
            <div class="card-header">
              Daftar Pesanan
            </div>
            <div class="card-body">
              <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->

              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Lapangan</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>

                <tbody>
                <?php foreach(array_reverse($pesanan) as $item):?>
                  <tr>
                    <td><?=$item->lapangan_name?></td>
                    <td>
                      <?php
                        $strtime = strtotime($item->date);
                        $date = date('d-m-Y', $strtime)
                      ?>
                      <?=$date?>, Jam <?=$item->time?>
                    </td>
                    <td><?=$item->price?></td>
                    <?php
                      date_default_timezone_set('Asia/Makassar');
                      $timenow = date('Y-m-d H');
                      $time = substr($item->time,0,2);
                      $maintime = $item->date.' '.$time;
                    ?>
                    <?php if($timenow>$maintime):?>
                      <td class="btn-danger btn-sm">Kadaluarsa</td>
                      <?php else :?>
                      <td class="btn-success">Aktif</td>
                    <?php endif; ?>
                  </tr>
                <?php endforeach; ?>  
                </tbody>
              </table>

              
            </div>
          </div>


        </div>