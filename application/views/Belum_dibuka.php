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
                <div class="col-sm-8 col-lg-8 aturan">
<div class="card" style="margin-top: 3%;">
                                <div class="card-header">
                                        <h3><i class="fas fa-bullhorn" > Pemberitahuan </i></h3>
                                </div>
                                <div class="card-body alert-danger">
                                        <h1>
                                                Pemberitahuan Kenaikan Kelas Akan Dibuka
Pada Hari Sabtu Tanggal 19 Juni 2021 Pukul 09.00 WIB.
                                        </h1>
                                </div>
                        </div>
                </div>
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
        text-align: center;
        font-size: 16px;
        height: 50px;
        color: aliceblue;
        position: absolute;
        line-height: 50px;
        bottom: 0px;
}
.aturan{
        height: 100%;
}
.search{
        height: 100%px;
}
.logoku{
        margin-left: 2%;
        margin-top: 1%;
        height: 60px;
        width: 60px;
        margin-bottom: 1%;
}
</style>