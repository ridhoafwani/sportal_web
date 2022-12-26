<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Tambah Lapangan</h1>
		<?= $this->session->flashdata('message'); ?>
        <div class="row">
        	<div class="col-lg-9">
			<?= form_open_multipart('managelapangan/tambahlapanganproses/');?>

				<div class="form-group row">
   					<label for="id_category" class="col-sm-2 col-form-label">Kategori</label>
    				<div class="col-sm-10">
					<select class="form-control" name="id_category" id="id_category">
					    <option>Kategori</option>
						<?php foreach($kategori as $row):?>
                    		<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                   		<?php endforeach;?>
					</select>
   				 	</div>
   				 </div>


        		<div class="form-group row">
   					<label for="name" class="col-sm-2 col-form-label">Nama</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="name" name="name" value="">
   				 	</div>
   				 </div>

				<div class="form-group row">
   					<label for="tarif" class="col-sm-2 col-form-label">Tarif (Rp)
					   </label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="tarif" name="tarif" value="">
   				 	</div>
				</div>

   				<div class="form-group row">
   					<label for="alamat" class="col-sm-2 col-form-label">Lokasi</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="alamat" name="alamat" value="">
   				 	</div>
				</div>
					
   				<div class="form-group row">
   					<label for="map" class="col-sm-2 col-form-label">Map Embed</label>
    				<div class="col-sm-10">
    				 <input type="text" class="form-control" id="map" name="map" value="">
   				 	</div>
				</div>

				<div class="form-group row">
   					<label for="image" class="col-sm-2 col-form-label">Gambar</label>
    				<div class="col-sm-5">
    				 <input type="file" class="form-control" id="image" name="image" value="">
   				 	</div>
				</div>

   				 <div class="form-group row justify-content-end">
   				 	<div class="col-sm-10">
   				 		<button type="submit" class="btn btn-primary">Tambahkan</button>
   				 	</div>
   				 </div>
			<?= form_close(); ?>
            </div>

            </div>
            
            
        </div>

</div>
<!-- End of Main Content -->