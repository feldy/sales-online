<td width="156">&nbsp;</td>
<td>
	<br>
	<table width="70%" border="1" align="left" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
		<tr>
          	<td>
				<fieldset>
					<?php
						$pencarian = "";	
			        	$account = "";	
			        	$sql = "";
			        	if (isset($_POST['pencarian'])) {
			        		$pencarian = $_POST['pencarian'];
			        		$sql .=  "AND ".$pencarian;
			        	}
			        	if (isset($_POST['account'])) {
			        		$account = $_POST['account'];
			        		$sql .= " like '%".$account."%'"; 
			        	}


			        	// echo ">>>>>>>>>>>>>>".$sql;
					?>
					<legend>Review Selling</legend>
					<form action="" method="post">
						Kriteria Pencarian: <br /><br />
						<strong>Account</strong>
					    <input class="text" value="<?php echo $account;?>" name="account" type="text" >
					    <button>Cari</button>
					</form>	
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
                include '../system/config_service.php'; 
                $total = 0;
                $total2 = 0;
                $count = 0;
                $strQuery = "SELECT * FROM tbl_barang ORDER BY nama_barang";
                $result = mysql_query($strQuery) or die(mysql_error());
                while($arrResult = mysql_fetch_array($result)) {
                    $count++;
            		$qtySell = rand(5, 15);
            		$total = $total + $qtySell*$arrResult['harga'];
            		$total2 = $total2 + $qtySell;
            ?>
            <tr>
                <td><?php echo $count;?></td>
                <td class="right"><?php echo $arrResult['kode_barang'];?></td>
                <td class="right"><?php echo $arrResult['nama_barang'];?></td>
                <td class="right" align="right"><?php echo number_format($arrResult['harga'])?></td>
                <td align="center"><?php echo number_format($qtySell) ?></td>
                <td align="center"><?php echo number_format($qtySell*$arrResult['harga']) ?></td>
            </tr>
            <?php } 
            ?>
            <tr>
                <td align="right" colspan="4">Grand Total</td>
                <td align="center"><strong><?php echo number_format($total2) ?></strong></td>
                <td align="center"><strong>Rp. <?php echo number_format($total) ?></strong></td>
            </tr>
            </tbody>
        </table>
				</fieldset>
			</td>
	    </tr>
	</table>
</td>

