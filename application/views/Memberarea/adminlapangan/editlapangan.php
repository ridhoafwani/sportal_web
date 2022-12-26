<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Lapangan</h1>
		<?= $this->session->flashdata('message'); ?>
        <div class="row">
        	<div class="col-lg-9">
			<?= form_open_multipart('managelapangan/edit_lapangan/'.$lapangan->id.'/'.$lapangan->id_category);?>

			<div class="form-group row">
   					<label for="id_category" class="col-sm-2 col-form-label">Kategori</label>
    				<div class="col-sm-10">
					<select class="form-control" name="id_category" id="id_category">
					    <option value="<?=$take_category->id?>"><?=$take_category->name?></option>
						<?php foreach($kategori as $row):?>
                    		<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                   		<?php endforeach;?>
					</select>
   				 	</div>
   				 </div>


        		<div class="form-group row">
   					<label for="name" class="col-sm-2 col-form-label">Nama</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="name" name="name" value="<?=$lapangan->name?>">
   				 	</div>
   				 </div>

				<div class="form-group row">
   					<label for="tarif" class="col-sm-2 col-form-label">Tarif (Rp)
					   </label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="tarif" name="tarif" value="<?=$lapangan->tarif?>">
   				 	</div>
				</div>

   				<div class="form-group row">
   					<label for="alamat" class="col-sm-2 col-form-label">Lokasi</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$lapangan->alamat?>">
   				 	</div>
				</div>
					
   				<div class="form-group row">
   					<label for="map" class="col-sm-2 col-form-label">Map Embed</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="map" name="map" value="<?=$lapangan->map?>">
   				 	</div>
				</div>

   				  <div class="form-group row">
   					<div class="col-sm-2">Gambar</div>
   					<div class="col-sm-10">
   						<div class="row">
   							<div class="col-sm-3">
   								<img src="<?=base_url('assets/img/lapangan/')?><?=$lapangan->image?>" class="img-thumbnail">
   							</div>

   							<div class="col-sm-9">
   								<div class="custom-file">
 									 <input type="file" class="custom-file-input" id="image" name="image">
									 <label class="custom-file-label" for="image">Choose file</label>
								</div>
   							</div>

   						</div>
   					</div>
   				 </div>

   				 <div class="form-group row justify-content-end">
   				 	<div class="col-sm-10">
   				 		<button type="submit" class="btn btn-primary">Edit</button>
   				 	</div>
   				 </div>

			</div>
			<?= form_close(); ?>

            
            
        </div>

</div>
<!-- End of Main Content -->