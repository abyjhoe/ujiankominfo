<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0">Admin Panel</h5>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <?php
                foreach ($stok as $dta) : ?>
                    <div class="alert alert-danger" role="alert"> <i class="fas fa-dolly-flatbed"></i> Stok Barang: <?= $dta['kode_brg']; ?> - <?= $dta['nama_brg']; ?> sisa <?= $dta['volume']; ?> <?= $dta['satuan']; ?></div>
                <?php endforeach; ?>

                <!-- Info boxes -->
                <div class="row">
                    <!-- SALDO KAS -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h1>Rp. 123.123.123</h1>

                                <p>Saldo Kas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cash"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- END SALDO KAS -->
                    <!-- PROJECT-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h1>2 Paket</h1>

                                <p>Project </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-tshirt-outline"></i>
                            </div>
                            <a href="<?= base_url('administrator/project'); ?>" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- END PROJECT -->
                    <!-- STOK-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h1><?= $jumlah['total']; ?> Item</h1>

                                <p>Stok Barang </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cube"></i>
                            </div>
                            <a href="<?= base_url('administrator/stockbarang'); ?>" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- END STOK -->
                    <!-- STOK-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h1>Rp. 123.434.000</h1>

                                <p>Estimasi Laba </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                            <a href="#" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- END STOK -->
                </div>
                <!--/. container-fluid -->
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-star"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Administrator</span>
                                <span class="info-box-number"><?= $adm['adm']; ?> Orang </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-desktop"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Operator</span>
                                <span class="info-box-number"><?= $opr['opr']; ?> Orang</span>
                            </div>
                        </div>
                    </div>

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-id-card-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Worker</span>
                                <span class="info-box-number"><?= $worker['worker']; ?> Orang</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Customer</span>
                                <span class="info-box-number"><?= $customer['cust']; ?> Orang</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8">

                        <!-- TABLE: LATEST ORDERS -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Latest Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Popularity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="badge badge-success">Shipped</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="badge badge-danger">Delivered</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-info">Processing</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="badge badge-danger">Delivered</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="badge badge-success">Shipped</span></td>
                                                <td>
                                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box mb-3 bg-indigo">
                            <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Pengguna</span>
                                <span class="info-box-number">5,200</span>
                                <span class="info-box-text">Ubah Status Pengguna</span>
                                <a href="<?= base_url('administrator/pengguna'); ?>" class="d-sm-inline-block btn btn-success btn-sm">ubah status <i class="fas fa-user-edit ml-3"></i></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-success">
                            <span class="info-box-icon"><i class="far fa-heart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Mentions</span>
                                <span class="info-box-number">92,050</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-danger">
                            <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Downloads</span>
                                <span class="info-box-number">114,381</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box mb-3 bg-info">
                            <span class="info-box-icon"><i class="far fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Direct Messages</span>
                                <span class="info-box-number">163,921</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 7500);
</script>