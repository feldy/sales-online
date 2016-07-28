<?php
	include 'config_service.php';
	include 'gen_uuid_service.php';
	session_start();
	if (isset($_POST['simpan_produk'])) {
		$id = gen_uuid();
		$kode_produk = $_POST['kode_produk'];
		$nama_produk = $_POST['nama_produk'];
		$harga_produk = $_POST['harga_produk'];
		$deskripsi_produk = $_POST['deskripsi_produk'];

		
		$strQry = "INSERT INTO tbl_barang VALUES ('$id','$kode_produk','$nama_produk','$deskripsi_produk', '$harga_produk', 1)";
		// echo ">>>".$strQry;
		$exQuery = mysql_query($strQry) or die(mysql_error());
		if ($exQuery) {
			echo "<script> alert('Berhasil Menambahkan Produk Baru ! '); window.location.href='../form/halaman_utama.php?page=produk_baru';</script>";
		} else {
			echo "<script> alert('Gagal Membuat Produk Baru, silahkan ulangi! '); window.history.back();</script>";
		}
	}
?>