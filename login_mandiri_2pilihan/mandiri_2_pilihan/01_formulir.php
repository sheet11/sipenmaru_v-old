<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Selamat Datang</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<hr></hr>
		<div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th>
						<th>ID </th>
						<th>Nama Lengkap </th>
						<th>Prodi 1</th>
						<th>Prodi 2</th>
						<th>Tgl Ujian</th>
						<th>Tempat</th>
						<th>Ruang</th>
						<th>Sesi</th>
						<th width="25%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir4 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[pilihan_prodi]</td>
					<td>$a[pilihan_prodi2]</td>
					<td>$a[tanggal_ujian]</td>
					<td>$a[tempat_ujian]</td>
					<td>$a[ruang_ujian]</td>
					<td>$a[sesi_ujian]</td>
					
					
					<td>";

						echo "
						
						<a href='01_edit_formulir.php?id_formulir=$a[id_formulir]' class='btn btn-danger'><b>Edit</b></a>
						<a href='01_lihat_formulir.php?id_formulir=$a[id_formulir]' class='btn btn-primary'><b>Lihat</b></a>
						";
				 		if ($a['status']=='Sudah Membayar') {
				 		echo "<a href='01_cetak_formulir.php?id_formulir=$a[id_formulir]' class='btn btn-info'><b>Cetak</b></a>";
				 		}

						
	

			
				echo"	</td>
					</tr>
					</table>";


				$i++;
			}
			?>
			<tr>
				<td><b>Catatan</b><br>
				1. Klik Tombol Edit Untuk Melengkapi Data</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>



