<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Detail Barang</h6>
                </div>
                <div class="col-sm">
                    <div class="float-sm-right">
                        <a href="<?= base_url('administrator/stockbarang'); ?>" class="d-sm-inline-block btn btn-warning btn-sm">Kembali ke daftar stock <i class="fas fa-reply"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects Detail: <?= $barang['nama_brg']; ?></h3>
            </div>
            <?= $this->session->flashdata('error'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-lime">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center">Stok Saat ini</span>
                                        <span class="info-box-number text-center mb-0"><?= $barang['volume']; ?> <?= $barang['satuan']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-lime">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center">Harga Satuan</span>
                                        <span class="info-box-number text-center mb-0">Rp. <?= $barang['harga']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <?php
                                if ($barang['used'] == 1) {
                                    $ada1 = ' <div class="info-box bg-success">';
                                } else {
                                    $ada1 = ' <div class="info-box bg-danger">';
                                }
                                ?>
                                <?= $ada1; ?>

                                <div class="info-box-content">
                                    <span class="info-box-text text-center">Pemakaian</span>
                                    <?php
                                    if ($barang['used'] == 1) {
                                        $ada = ' <span class="info-box-number text-center mb-0">Sudah ada Pemakaian</span>';
                                    } else {
                                        $ada = ' <span class="info-box-number text-center mb-0">Belum ada Pemakaian</span>';
                                    }
                                    ?>
                                    <?= $ada; ?>
                                    <!-- <span class="info-box-number text-center mb-0"><?= $barang['used']; ?></span> -->
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <!-- TABLE: LATEST ORDERS -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">Riwayat Pemakaian</h3>
                                    <?= $this->session->flashdata('rincian'); ?>
                                    <div class="card-tools">

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Item</th>
                                                    <th>Vol</th>
                                                    <th>Total Biaya</th>
                                                    <th>Poin</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h6 class="text-warning"><i class="fas fa-box-open"></i> Nama Barang</h6>
                    <h3>
                        <p class="text-warning"><?= $barang['nama_brg']; ?></p>
                    </h3>
                    <br>
                    <div class="card" style="width: 21rem;">

                        <img src="<?= base_url('assets/dist/img/stock/' . $barang['image']); ?>" class="card-img-top" width="300px" height="250px">
                        <div class="card-body">
                            <form action="<?= base_url('administrator/updategambar/' . $barang['id'] . '/' . $barang['id']); ?>" method="post" enctype="multipart/form-data">
                                <small><label for="gambar">Update Foto Barang</label></small>
                                <input type="file" id="gambar" name="gambar" class=" form-control" accept="image/*">
                                <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>



<script>
    const flashdata = ('<?= $this->session->flashdata('pesan'); ?>');
    if (flashdata == 'Gagal diupdate') {
        swal.fire({
            icon: 'error',
            title: 'Data ' + flashdata,
            showConfirmButton: false,
            timer: 2500,
            background: '#212f3c'
        });
    };
    if (flashdata == 'Berhasil disimpan') {
        swal.fire({
            icon: 'success',
            title: 'Data Telah ' + flashdata,
            showConfirmButton: false,
            timer: 10000,
            background: '#212f3c'
        });
    };
</script>