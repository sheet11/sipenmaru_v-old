<?php
include"01_nav.php";

?>

<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>
                                        Jalur SIMAMI 1 Pilihan Terdaftar sudah membayar
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="09_daftar_calon_mahasiswa_pmdp.php" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir5 where status='Terdaftar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>
                                        Jalur SIMAMI 1 Pilihan terdaftar Belum Membayar
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>
                                        2 Pilihan SIMAMI
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="081_daftar_calon_mahasiswa.php" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Sudah Membayar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>
                                        Jalur SIMAMI 2 Pilihan Terdaftar Sudah Membayar
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-xs-6">
                            
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        <?php
                                                         require_once("../config/koneksi.php");
                                                         $query = mysqli_query ($kon,"SELECT * FROM tb_formulir4 where status='Terdaftar' ");
                                                         $jumlah= mysqli_num_rows ($query);
                                                         ?><?php echo $jumlah; ?>
                                    </h3>
                                    <p>
                                        Jalur SIMAMI 2 Pilihan terdaftar Belum Membayar
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="082_daftar_calon_mahasiswa.php" class="small-box-footer">
                                    Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
    


                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
           
