<?php 	
	include"01_nav.php";
	include"../assets/js/date.php";
	error_reporting(0); 
?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="" enctype="multipart/form-data">	
			<table width="100%" class="table table-bordered">
				<tr>
					<td colspan="4" class="success"><b><h5>Tambah Data Nilai</b></h5></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td colspan="2"><select name="semester" type="select" class="form-control" required="yes">
				    	<option value="">-- Silahkan Dipilih --</option>
						<option value="1">1</option>
						<option value="2">2 </option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
				        </select></td>
				</tr>

				<tr>
					<td width="25%">&nbsp;</td>	
					<td>Pengetahuan</td>		
					<td>Keterampilan</td>
				</tr>

				<tr>
					<td>Pendidikan Agama</td>		
					<td><input type="number" name="peng_agama" required="yes" class="form-control">
					<td><input type="number" name="prak_agama" required="yes" class="form-control"></td>
				</tr>

				<tr>
					<td>Kewarganegaraan</td>		
					<td><input type="number" name="peng_kewarganegaraan" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_kewarganegaraan" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Bahasa Indonesia</td>		
					<td><input type="number" name="peng_bahasa_indonesia" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_bahasa_indonesia" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Bahasa Inggris</td>		
					<td><input type="number" name="peng_bahasa_inggris" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_bahasa_inggris" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Matematika Wajib</td>		
					<td><input type="number" name="peng_matematika" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_matematika" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Fisika</td>		
					<td><input type="number" name="peng_fisika" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_fisika" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Biologi</td>		
					<td><input type="number" name="peng_biologi" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_biologi" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Kimia</td>		
					<td><input type="number" name="peng_kimia" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_kimia" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Sejarah</td>		
					<td><input type="number" name="peng_sejarah" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_sejarah" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Geografi</td>		
					<td><input type="number" name="peng_geografi" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_geografi" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Ekonomi</td>		
					<td><input type="number" name="peng_ekonomi" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_ekonomi" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Sosiologi</td>		
					<td><input type="number" name="peng_sosiologi" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_sosiologi" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Seni Budaya</td>		
					<td><input type="number" name="peng_senibudaya" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_senibudaya" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Pendidikan Jasmani</td>		
					<td><input type="number" name="peng_pend_jasmani" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_pend_jasmani" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Teknologi Informasi</td>		
					<td><input type="number" name="peng_teknologi_informasi" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_teknologi_informasi" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Keterampilan / Bhs Asing</td>		
					<td><input type="number" name="peng_keterampilan" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_keterampilan" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>Muatan Lokal</td>		
					<td><input type="number" name="peng_mulok" required="yes" class="form-control"> </td>
					<td><input type="number" name="prak_mulok" required="yes" class="form-control"> </td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
						<input type="reset" name="submit" value="Hapus" class="btn btn-success"></td>
				</tr>

		</table>      
	</form>

	</div>
</div>

		<?php
			include"../config/koneksi.php";
	
				if(isset($_POST['submit']))
				{
						$query=mysqli_query($kon,"insert into tb_nilai(semester, peng_agama, peng_kewarganegaraan, peng_bahasa_indonesia, peng_bahasa_inggris, peng_matematika, peng_fisika, peng_biologi, peng_kimia, peng_sejarah, peng_geografi, peng_ekonomi, peng_sosiologi, peng_senibudaya, peng_pend_jasmani, peng_teknologi_informasi, peng_keterampilan, peng_mulok, prak_agama, prak_kewarganegaraan, prak_bahasa_indonesia, prak_bahasa_inggris, prak_matematika, prak_fisika, prak_biologi, prak_kimia, prak_sejarah, prak_geografi, prak_ekonomi, prak_sosiologi, prak_senibudaya, prak_pend_jasmani, prak_teknologi_informasi, prak_keterampilan, prak_mulok, username)
									values('$_POST[semester]','$_POST[peng_agama]','$_POST[peng_kewarganegaraan]','$_POST[peng_bahasa_indonesia]','$_POST[peng_bahasa_inggris]','$_POST[peng_matematika]','$_POST[peng_fisika]','$_POST[peng_biologi]','$_POST[peng_kimia]','$_POST[peng_sejarah]','$_POST[peng_geografi]','$_POST[peng_ekonomi]','$_POST[peng_sosiologi]','$_POST[peng_senibudaya]','$_POST[peng_pend_jasmani]','$_POST[peng_teknologi_informasi]','$_POST[peng_keterampilan]','$_POST[peng_mulok]','$_POST[prak_agama]','$_POST[prak_kewarganegaraan]','$_POST[prak_bahasa_indonesia]','$_POST[prak_bahasa_inggris]','$_POST[prak_matematika]','$_POST[prak_fisika]','$_POST[prak_biologi]','$_POST[prak_kimia]','$_POST[prak_sejarah]','$_POST[prak_geografi]','$_POST[prak_ekonomi]','$_POST[prak_sosiologi]','$_POST[prak_senibudaya]','$_POST[prak_pend_jasmani]','$_POST[prak_teknologi_informasi]','$_POST[prak_keterampilan]','$_POST[prak_mulok]','$_SESSION[username]')");
						if($query)
							{
								echo"<script>alert('Data Berhasil di Simpan');window.location='02_lihat_nilai.php'</script>";
							}

						else
							{
								echo"<script>alert('Data Gagal di Simpan');window.location='02_lihat_nilai.php'</script>";
							}
				}				
		?> 	
	</body>
</html>
