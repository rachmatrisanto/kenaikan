<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body background="<?php echo base_url()?>assets/image/background.jpg">
<div class="container-fluid">
	<div class="row" >
		<div class="col-sm-12 col-lg-12 bg-primary header">
			<img src="<?php echo base_url()?>assets/image/logo.png" alt="logo" class="logoku"/> 
			<i>SMK Negeri 5 Surabaya</i> 
			<?php date_default_timezone_set("Asia/Jakarta");
			echo date('d/m/Y H:i')?>
		</div>
		<div class="col-sm-8 col-lg-8 aturan">
			<div class="card" style="margin-top: 3%;">
				<div class="card-header">
					<h3><i class="fas fa-chalkboard" > Tatacara Melihat Kenaikan</i></h3>
				</div>
				<div class="card-body">
					<h6>
						1. Silahkan membuka website kenaikan di Portal SMK Negeri 5 Surabaya <br></br>
						2. Masukkan nomor induk siswa menggunakan 5 digit angka pertama <br>contoh: (19775/004/043) yang dimasukkan hanya 19775 <br></br>
						3. Silahkan pilih tingkat dan kompetensi keahlian anda kemudian klik cari<br></br> 
						4. Setelah melihat hasil kenaikan silahkan klik kembali <br></br>
					</h6>
				</div>
			</div>
			<div class="card" style="margin-top: 3%;">
				<div class="card-header">
					<h3><i class="fas fa-bullhorn" > Pemberitahuan </i></h3>
				</div>
				<div class="card-body">
					<h6> Sehubung dengan berakhirnya pembelajaran tahun ajaran 2020/2021, maka kami memberitahukan kepada
							bapak/ibu terkait dengan kenaikan kelas sebagai berikut : 
					</h6>
					<h6>
						1. Pengambilan Raport dan Pengembalian Buku (Jadwal menyusul)<br></br>
						2. Libur semester genap tanggal 21 juni sampai dengan 9 juli 2021<br></br>					
						3. Tahun pelajaran 2021/2022 akan dimulai pada tanggal 12 Juli 2021<br></br>					
						4. Apabila ada perubahan akan diumumkan di kemudian hari<br></br>					
					</h6>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-lg-4 search">
			<div class="card" style="margin-top: 3%; text-align:center;">
				<div class="card-header">
					<h3><i class="fas fa-user-secret" > pencarian </i></h3>
				</div>
				<form action="<?php echo site_url('Kenaikan/aksi')?>" method="POST" >
				<div class="card-body" align="left">
					<h6>Nomor Induk Siswa :</h6>
					<input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
					<br>
					<h6>Tingkat :</h6>
					<select class="form-control" name="tingkat">
						<option selected>== Pilih ==</option>
						<option value="10">Kelas 10</option>
						<option value="11">Kelas 11</option>
						<option value="12">Kelas 12</option>
					</select>
					<br>
					<h6>Kompetensi Keahlian :</h6>
					<select class="form-control" name="kompli">
						<option selected>== Pilih ==</option>
						<option value="KGSP">KONTRUKSI GEDUNG SANITASI & PERAWATAN</option>
						<option value="TTL">TEKNIK TENAGA LISTRIK</option>
						<option value="KI">KIMIA INDUSTRI</option>
						<option value="KA">KIMIA ANALISIS</option>
						<option value="TMPO">TEKNIK MANAJEMEN PERAWATAN OTOMOTIF</option>
						<option value="TAB">TEKNIK ALAT BERAT</option>
						<option value="TEDK">TEKNIK ELEKTRONIKA DAYA & KOMUNIKASI</option>
						<option value="TFLM">TEKNIK FABRIKASI LOGAM & MANUFAKTUR</option>
					</select>
					<br>
				</div>
				<div class="card-footer">
					<button class="btn btn-success"> <i class="fas fa-fingerprint"> cari </i> </button>
				</div>
				</form>
			</div>	
			<br>
			<!-- <div class="card" style="margin-top: 3%; text-align:center;">
				<div class="card-header">
					<h5><i class="fa fa-copy" > nomor induk siswa </i></h5>
				</div>
				<div class="card-body">
					<a href="https://drive.google.com/file/d/1FoFqR0btlh-w5OSjql9rFaJxV5Qf12I0/view?usp=sharing" target="_blank" class = "btn btn-danger" >Data kelas 12</a><br></br>
					<a href="https://drive.google.com/file/d/1tdpHN08nH8LvLe4HHKtIAWi_iUwwloIa/view?usp=sharing" target="_blank" class = "btn btn-danger" >Data kelas 13</a>
				</div>
			</div> -->
		</div>
		<div class="col-sm-12 col-lg-12 bg-primary footer" >
			<i> Copyright &copy;2020 Team IT SMK Negeri 5 Surabaya</i>
		</div>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php");?>
</html>
<style>
.btn{
	font-style: italic;
	width: 100%;
}
.header{
	font-style: normal;
	font-size: 24px;
	color: aliceblue;
}
.footer{
	margin-top: 10px;
	text-align: center;
	font-size: 16px;
	height: 40px;
	color: aliceblue;
	position: absolute;
	line-height: 50px;
	bottom: 0px;
}
.aturan{
	height: 100%;
	margin-bottom: 5%;
}
.search{
	height: 100%;
	margin-bottom: 5%;
}
.logoku{
	margin-left: 2%;
	margin-top: 1%;
	height: 60px;
	width: 60px;
	margin-bottom: 1%;
}
</style>
