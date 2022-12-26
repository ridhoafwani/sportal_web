<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Lapangan Futsal</h1>
    <div class="row justify-content-center">

    <?php foreach($lapangan as $lap) : ?>

    <div class="col-md-4" style="margin-bottom: 2%">
        <div class="card shadow" style="width: 18rem;">
            <div class="inner">
                <img src="<?= base_url("assets/img/lapangan/")?><?=$lap->image?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title"><?=$lap->name?></h5>
                <p class="card-text"><?=$lap->alamat?></p>
                <td><?=anchor('lapangan/info/'.$lap->id, '<div class="btn btn-outline-success btn-sm"> <i class="fa fa-map-marked-alt"></i> Peta</div>')?></td>
                <td><?=anchor('lapangan/jadwal/'.$lap->id.'/'.$date, '<div class="btn btn-primary btn-sm"> <i class="fa fa-calendar-alt"></i> Lihat Jadwal</div>')?></td>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    </div>

</div>