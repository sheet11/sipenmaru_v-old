<?php
	include "session.php";
?>

<?php
	include"../config/koneksi.php";
	include("bar128.php");
	include("library.php");
	include("fucnt_tgl.php");
	
		
	$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' ");
	$a=mysqli_fetch_array($query);
	$tanggal = tgl_indo($a['tanggal_lahir']);
    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
    // echo date('h:i:s a'); // menampilkan jam sekarang
    // echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
    
    if($a['status_lulus'] == "LULUS") {
?>
<html>
	<body>

		  <table width="100%" border="0"  align="center">
		  <tr>
			<td><img src="../assets/img_kop/logobaru.png" width="100%"/></td>

		  </tr>
		</table>

        <table align="center">
          <!--<tr>-->
          <!--    <td rowspan=18 width=164 valign="top"><a href="../assets/img/<?php echo $a['nama_foto'];?>" class="fancy">-->
          <!--    <img src="../assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /></td>-->
          <!--</tr>-->
        <br>
        <br>

          <tr>
            <td valign="top">Jalur</td>
            <td valign="top">:</td>
            <td><?php echo $a['level']; ?></td>
          </tr>

          <tr>
              <td valign="top"  width="200">ID/Nomor Kartu Ujian</td>
              <td valign="top">:</td>
              <td><?php echo $a['username']; ?></td>
          </tr>

          <tr>
            <td valign="top">Nama</td>
            <td valign="top">:</td>
            <td><?php echo $a['nama_lengkap']; ?></td>
          </tr>

          <tr>
            <td valign="top">Prodi</td>
            <td valign="top">:</td>
            <td><?php echo $a['pilihan_prodi']; ?></td>
          </tr>
          
          <tr>
            <td colspan="4"><?php echo bar128 (stripslashes($a['username'])); ?></td>
          </tr>
          
          <!--  <tr>-->
          <!--  <td colspan="4"><?php echo date('l, d-m-Y  H:i:s'); ?></td>-->
          <!--</tr>-->
</table>
<br>
<br>
<table align="center">
    <tr>
        <td>
            <h3>&emsp;&emsp;Selamat anda dinyatakan:</h3>
        </td>
    </tr>
    <tr>
        <td>
            <h1>LULUS TAHAP I</h1>
        </td>
    </tr>
</table>
<div style="break-after:page"></div>

<table width="100%" border="0" align="center">
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1302:852" src="../assets/img_kop/page_001.jpg" height="1302" width="852" border="0" usemap="#Map"></div>
<div class="pos" id="_0:0" style="top:1302">
<img name="_852:1302" src="../assets/img_kop/page_002.jpg" height="852" width="1302" border="0" usemap="#Map"></div>
</nowrap></nobr>   

</body>
</html>
<script>
  window.print();
</script>
<?php } elseif ($a['status_lulus'] == "TIDAK LULUS") { 
echo "<br><br><br><h1>Maaf Anda Belum Lulus, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }else{
echo "<br><br><br><h1>Maaf Anda Belum Lulus, silahkan coba lagi di periode selanjutnya</h1><br><a href='index.php'>Kembali </a>";
 }
 ?>

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
