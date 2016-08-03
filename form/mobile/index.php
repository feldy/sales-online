<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="../../lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../../lib/jquery/jquery.easyui.min.js"></script>
    <link href="../../lib/metro/css/metro-bootstrap.css" rel="stylesheet">
    <link href="../../lib/metro/css/metro-bootstrap-responsive.css" rel="stylesheet">
    <title>Sales Mobile</title>
</head>
<body class="metro">
    <div class="container">
        <h1>Input Data Printout SPG</h1>
        <form action="../../system/sales_service.php" method="post">
	        <table class="table bordered striped">
	            <thead>
	            <tr>
	                <th class="text-center">No</th>
	                <th class="text-center">Kode Produk</th>
	                <th class="text-center">Nama Produk</th>
	                <th class="text-center">Harga Produk</th>
	                <th class="text-center">Qty Sellout</th>
	                <th class="text-center">Value</th>
	            </tr>
	            </thead>
	            <tbody>
	            <?php
	                include '../../system/config_service.php'; 
	                $count = 0;
	                $strQuery = "SELECT * FROM tbl_barang ORDER BY nama_barang";
	                $result = mysql_query($strQuery) or die(mysql_error());
	                while($arrResult = mysql_fetch_array($result)) {
	                	$id = $arrResult['id'];
	                	$harga = $arrResult['harga'];
	                    $count++;
	            ?>
	            <tr>
	                <td width="5px"><?php echo $count;?></td>
	                <td width="150px" class="right"><?php echo $arrResult['kode_barang'];?></td>
	                <td width="300px" class="right"><?php echo $arrResult['nama_barang'];?></td>
	                <td width="150px" class="right" align="right"><?php echo number_format($arrResult['harga'])?></td>
	                <td width="100px" align="center"><input class="input_harga" style="padding: 3px;width: 100px;" harga="<?php echo $harga;?>" maxlength="4" onkeyup="hitung(this.id)" value="0" name="<?php echo 'name_'.$id?>" id="<?php echo $id?>" type="text" ></td>
	                <td width="0" align="right"><span id="<?php echo 'span_'.$id?>">0</span></td>
	            </tr>
	            <?php } ?>
	            <tr>
	                <td align="right" colspan="4">Grand Total</td>
	                <td align="right"><strong><span id="qty_total">0</span></strong></td>
	                <td align="right"><strong>Rp. <span id="grand_total">0</span></strong></td>
	            </tr>
	            <tr>
	                <td align="right" colspan="6">
	                    <button class="button" type="submit" name="simpan">Simpan</button>
	                    <a href="../../system/logout_service.php" class="button">Logout</a>
	                </td>
	            </tr>
	            </tbody>
	        </table>
        </form>
    </div>
    <script type="text/javascript">
    function addCommas(nStr) {
	    nStr += '';
	    var x = nStr.split('.');
	    var x1 = x[0];
	    var x2 = x.length > 1 ? '.' + x[1] : '';
	    var rgx = /(\d+)(\d{3})/;
	    while (rgx.test(x1)) {
	        x1 = x1.replace(rgx, '$1' + ',' + '$2');
	    }
	    return x1 + x2;
	}

    	function hitung (id) {
    		var qty = parseFloat(document.getElementById(id).value);
    		var harga = parseFloat(document.getElementById(id).getAttribute('harga'));
    		var total = qty * harga;
			total = (isNaN(total)) ? 0 : total;

    		document.getElementById("span_"+id).innerHTML = addCommas(total);

    		//==================ALL
    		var all = $('.input_harga');
    		var grandTotal = 0;
    		var qtyTotal = 0;
    		for (var i = 0; i < all.length; i++) {
    			var idAll = all[i].id;
    			var qtyAll = parseFloat(document.getElementById(idAll).value);
	    		var hargaAll = parseFloat(document.getElementById(idAll).getAttribute('harga'));
	    		var totalAll = qtyAll * hargaAll;
				totalAll = (isNaN(totalAll)) ? 0 : totalAll;
				qtyTotal += qtyAll;
				grandTotal += totalAll;
    		}
    		document.getElementById("grand_total").innerHTML = addCommas(grandTotal);
    		document.getElementById("qty_total").innerHTML = addCommas(qtyTotal);
    	}

    </script>
</body>
</html>
