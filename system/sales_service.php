<?php 
	include 'config_service.php';
	include 'gen_uuid_service.php';
	session_start();
	if (isset($_POST['simpan'])) {
		$account = $_SESSION['account'];
		$strQuery = "SELECT * FROM tbl_barang";
		$result = mysql_query($strQuery) or die(mysql_error());
		$jum = mysql_num_rows($result);
		$msg = "";
	    while($arrResult = mysql_fetch_array($result)) {
			$id = gen_uuid();
			$idBarang = $arrResult['id'];
			$kodeBarang = $arrResult['kode_barang'];
			$hargaBarang = $arrResult['harga'];
	    	$qty = $_POST['name_'.$arrResult['id']];
	    	$total = $_POST['name_'.$arrResult['id']]*$hargaBarang;
	    	if (!empty($qty) && $qty != 0 && $qty != "") {
	    		$strQ = "INSERT INTO `sales` (`id`, `id_barang`, `qty`, `account`, `total`, `tanggal`) VALUES ('$id', '$idBarang', $qty, '$account', $total, now()) ";
	    		// echo ">> ".$strQ."<br />";
	    		$x = mysql_query($strQ) or die(mysql_error());
	    		if (!$x) {
	    			$msg += $kodeBarang.", ";
	    		}

	    	}
	    }

	    if (empty($msg)) {
	    	echo "<script> alert('Berhasil Save Semua Penjualan ! '); window.location.href='../form/mobile/';</script>";
	    } else {
	    	echo "<script> alert('Kode ".$msg." Gagal Disimpan'); window.location.href='../form/mobile/';</script>";
	    }
	}
?>