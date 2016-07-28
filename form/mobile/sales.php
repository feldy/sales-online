<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../../lib/metro/css/metro-bootstrap.css" rel="stylesheet">
    <link href="../../lib/metro/css/metro-bootstrap-responsive.css" rel="stylesheet">
</head>
<body class="metro">
    <div class="container">
        <h1>Input Data Printout SPG</h1>
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
                    $count++;
            ?>
            <tr>
                <td><?php echo $count;?></td>
                <td class="right"><?php echo $arrResult['kode_barang'];?></td>
                <td class="right"><?php echo $arrResult['nama_barang'];?></td>
                <td class="right" align="right"><?php echo number_format($arrResult['harga'])?></td>
                <td align="center"><input style="padding: 3px;width: 100px;" name="" id="" type="text" ></td>
                <td align="center"><input style="padding: 3px;width: 100px;" name="" id="" type="text" ></td>
            </tr>
            <?php } ?>
            <tr>
                <td align="right" colspan="4">Grand Total</td>
                <td align="center"><strong>Rp. 0</strong></td>
                <td align="center"><strong>Rp. 0</strong></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>