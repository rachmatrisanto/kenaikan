<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body background="<?php echo base_url()?>assets/image/background.jpg">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-lg-12 bg-primary header">
			<img src="<?php echo base_url()?>assets/image/logo.png" alt="logo" class="logoku"/> 
			<i>SMK Negeri 5 Surabaya</i>
		</div>
		<div class="col-sm-12 col-lg-12 aturan" style="margin-top: 2%;">
			<div>
				<h5 class="alert alert-info" align="center">Silahkan Melihat Pemberitahuan Pada Halaman Utama</h5>
			</div>
			<div class="card">
				<div class="card-header" style="text-align: center">
					<h3><i class="fas fa-theater-masks" > Peserta Didik </i></h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" align="center" style="width: 100%; heigth:100%;">
							<tbody>
								<tr>
									<td>Nomor Induk Siswa</td>
									<td>:</td>
									<td><?php echo $this->session->userdata("nis"); ?></td>
								</tr>
								<tr>
									<td>Nama Siswa</td>
									<td>:</td>
									<td><?php echo $this->session->userdata("nama"); ?></td>
								</tr>
								<tr>
									<td>Kompetensi Keahlian</td>
									<td>:</td>
									<td><?php
										switch ($this->session->userdata("kompli")) {
											case 'KGSP':
												echo "KONTRUKSI GEDUNG SANITASI DAN PERAWATAN";
												break;
											case 'TTL':
												echo "TEKNIK TENAGA LISTRIK";
												break;
											case 'KI':
												echo "KIMIA INDUSTRI";
												break;
											case 'KA':
												echo "KIMIA ANALISIS";
												break;
											case 'TAB':
												echo "TEKNIK ALAT BERAT";
												break;
											case 'TMPO':
												echo "TEKNIK MANAJEMEN PERAWATAN OTOMOTIF";
												break;
											case 'TFLM':
												echo "TEKNIK FABRIKASI LOGAN DAN MANUFAKTUR";
												break;
											case 'TEDK':
												echo "TEKNIK ELEKTRONIKA DAYA DAN KOMUNIKASI";
												break;
										}
									?></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td>:</td>
									<td><?php echo $this->session->userdata("rombel"); ?></td>
								</tr>	
							</tbody>
						</table>
					</div>
					<div class="alert alert-success" style="text-align: center;">
						<h5> Selamat Anda <?php echo $this->session->userdata("status"); ?> Ke Kelas <?php echo $this->session->userdata("rombelbaru"); ?> </h5>
					</div>
				</div>
				<div class="card-footer" style="text-align: center;">
					<a href="<?php echo site_url('Kenaikan/kembali')?>" class = "btn btn-danger">kembali</a>
				</div>
			</div>
			
			
		</div>

		<div class="col-sm-12 col-lg-12 bg-primary footer" >
			<i> Copyright &copy;2020 Team IT SMK Negeri 5 Surabaya</i>
		</div>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php") ?>
</html>
<style>
.header{
	font-style: normal;
	font-size: 24px;
	color: aliceblue;
}
.footer{
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
	margin-bottom: 5%;;
}
.search{
	height: 100%;
}
.logoku{
	margin-left: 2%;
	margin-top: 1%;
	height: 60px;
	width: 60px;
	margin-bottom: 1%;
}
</style>
