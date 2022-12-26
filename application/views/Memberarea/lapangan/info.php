<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="card shadow mb-3">
                <div class="s-12 m-12 l-6" style="margin-top: 2%">
                    <div class="s-12 grayscale center">  	  
                            <iframe src="<?=$lapangan->map?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
                    </div>
                </div> 
                <div class="card-body">
                    <h5 class="card-title"><?=$lapangan->name?></h5>
                    <p class="card-text"><?=$lapangan->alamat?></p>
                    <td><?=anchor('lapangan/jadwal/'.$lapangan->id.'/'.$date, '<div class="btn btn-primary btn-sm"> <i class="fa fa-calendar-alt"></i> Lihat Jadwal</div>')?></td>
                </div>
            </div>
        </div>
        <div class="col-md-1">

        </div>

    </div>

</div>