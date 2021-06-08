<?php 
include ("header.php"); 
?>

<form method="post" action="buku_insert_proses.php">
	<div class="form-group row">
    	<label for="kode" class="col-sm-2 col-form-label">Kode</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="kode" name="kode">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="judul" name="judul">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="pengarang" name="pengarang">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="penerbit" name="penerbit">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="tahun" name="tahun">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="harga" class="col-sm-2 col-form-label">Harga</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="harga" name="harga">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
   		<div class="col-sm-10">
     		<input type="text" class="form-control" id="jumlah" name="jumlah">
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
   		<div class="col-sm-10">
   			<textarea class="form" id="deskripsi" name="deskripsi"></textarea>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label for="tombol" class="col-sm-2 col-form-label"></label>
   		<div class="col-sm-10">
     		<input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">
     		<input type="reset" class="btn btn-warning" name="btnReset" value="Reset">
    	</div>
  	</div>
</form>

<?php 
include ("footer.php"); 
?>