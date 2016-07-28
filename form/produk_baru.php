<td width="156">&nbsp;</td>
<td>
	<br>
	<table width="70%" border="1" align="left" cellpadding="10" cellspacing="3" style="border: solid 1px #efefef;">
		<tr>
          	<td>
				<fieldset>
					<legend>Data Input Produk Baru</legend>
					<form action="../system/produk_baru_service.php" method="post" enctype="multipart/form-data">
					<table width="80%" border="0" cellspacing="0" cellpadding="3">
         				<tr>
				          	<td><label>Kode Produk</label></td>
				         	<td>:</td>
				         	<td>
				          		<div class="input-control text" data-role="input-control">
					            	<input name="kode_produk" id="kode_produk" type="text" >
				         		</div>          
				         	</td>
				        </tr>
				        <tr>
				          	<td><label>Nama Produk</label></td>
				         	<td>:</td>
				         	<td>
				          		<div class="input-control text" data-role="input-control">
					            	<input name="nama_produk" id="nama_produk" type="text" >
				         		</div>        
				         	</td>
				        </tr>
				        <tr>
				          	<td><label>Harga Produk</label></td>
				         	<td>:</td>
				         	<td>
				          		<div class="input-control text" data-role="input-control">
					            	<input name="harga_produk" id="harga_produk" type="text" >
				         		</div>         
				         	</td>
				        </tr>
				        <tr>
				          	<td valign="top"><label>Deskripsi Produk</label></td>
				         	<td valign="top">:</td>
				         	<td>
				          		<div class="input-control textarea">
								    <textarea id="deskripsi_produk" name="deskripsi_produk"></textarea>
								</div>         
				         	</td>
				        </tr>
				        <tr>
				          	<td></td>
				         	<td></td>
				         	<td>
				         		<button type="submit" name="simpan_produk">Save</button>
				         		<button type="reset">Batal</button>
				         	</td>
				        </tr>
			    	</table>
			    </form>
			  </fieldset>
			</td>
	    </tr>
	    <tr>
	    	<td>
	    		<fieldset>
	    			<legend>View Produk</legend>
	    			<table class="table hovered">
                        <thead>
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Kode Produk</th>
                            <th class="text-left">Nama Produk</th>
                            <th class="text-left">Harga Produk</th>
                            <th class="text-left">Deskripsi Produk</th>
                        </tr>
                        </thead>

                        <tbody>
                    	<?php
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
                        	<td class="right"><?php echo $arrResult['deskripsi'];?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>

	    		</fieldset>
	    	</td>
	    </tr>
	</table>
</td>
