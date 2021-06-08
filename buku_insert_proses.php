<?php 
if (isset($_POST["btnSimpan"])) {
	$KODE=$_POST["kode"];
	$JUDUL=$_POST["judul"];
	$PENGARANG=$_POST["pengarang"];
	$PENERBIT=$_POST["penerbit"];
	$TAHUN=$_POST["tahun"];
	$HARGA=$_POST["harga"];
	$JUMLAH=$_POST["jumlah"];
	$DESKRIPSI=$_POST["deskripsi"];

	include ("koneksi.php");
	$sql="insert into buku(kode_buku, judul_buku, pengarang, penerbit, tahun_terbit, harga, jumlah, deskripsi)
			values('$KODE', '$JUDUL', '$PENGARANG', '$PENERBIT', '$TAHUN', '$HARGA', '$JUMLAH', '$DESKRIPSI')";
	$result=$koneksi->query($sql);
	$koneksi=NULL;
	header("location:buku_select.php");
} else {
	echo "Anda harus ke membuka form buku terlebih dahulu";
}



?>