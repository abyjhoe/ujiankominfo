<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Daftar Stok Barang</h5>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right float-md-right">
                        <a href="<?= base_url('administrator'); ?>" class="d-sm-inline-block btn btn-warning btn-sm">Back to Dashboard <i class="fas fa-reply-all"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('administrator'); ?>" class="d-sm-inline-block btn btn-success btn-sm" data-toggle="modal" data-target="#barang"><i class="far fa-plus-square"></i> Tambah </a>
                            <a href="<?= base_url('administrator/stockbarang'); ?>" class="d-sm-inline-block btn btn-warning btn-sm"><i class="fas fa-sync-alt"></i> Refresh </a>

                            <?= $this->session->flashdata('error'); ?>
                        </div>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Vol</th>
                                        <th>Satuan</th>
                                        <th>Hrg Satuan</th>
                                        <th>pakai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php $i = 1; ?>
                                <?php foreach ($barang as $brg) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><small><?= $brg['kode_brg']; ?></small></td>
                                        <td><small><?= $brg['nama_brg']; ?></small></td>
                                        <td>
                                            <a href="<?= base_url('administrator/updatebarang/'); ?><?= $brg['id']; ?>" class="d-sm-inline-block btn btn-success btn-xs " role="button" data-toggle="modal" data-target="#stok<?= $brg['kode_brg']; ?>" data-placement="top" title="Edit"><i class="fas fa-fw fa-plus"></i></a>
                                            <small class="ml-2"> <?= $brg['volume']; ?></small>
                                        </td>
                                        <td><small><?= $brg['satuan']; ?></small></td>
                                        <td><small>Rp. <?= number_format($brg['harga']); ?></small></td>
                                        <td><small>
                                                <?php
                                                if ($brg['used'] == 1) {
                                                    $ada = '<div class="d-sm-inline-block badge badge-success "> sudah</div>';
                                                } else {
                                                    $ada = '<div class="d-sm-inline-block badge badge-danger ">belum</div>';
                                                }
                                                ?>
                                                <?= $ada; ?></small>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('administrator/updatebarang/'); ?><?= $brg['id']; ?>" class="d-sm-inline-block btn btn-success btn-xs " role="button" data-toggle="modal" data-target="#<?= $brg['kode_brg']; ?>" data-placement="top" title="Edit"><i class="far fa-fw fa-edit"></i></a>
                                            <button class="d-sm-inline-block btn btn-danger btn-xs " role="button" id="hapus" name="hapus" data-placement="top" title="Hapus" onclick="
                                                        Swal.fire({
                                                                    title: 'Yakin Hapus Data?',
                                                                    text: 'Barang dgn kode '+('<?= $brg['kode_brg']; ?>')+' Akan Dihapus', 
                                                                    icon: 'question' , 
                                                                    showCancelButton: true, 
                                                                    confirmButtonColor: '#3085d6' , 
                                                                    background:'#1b2631' , 
                                                                    cancelButtonColor: '#d33' , 
                                                                    confirmButtonText: 'Yes, Hapus' })
                                                                    .then((result)=> { if (result.value) {window.location.href = ('<?= base_url('administrator/hapusbarang/' . $brg['kode_brg']); ?>');
                                                            }
                                                            })"><i class="far fa-fw fa-trash-alt"></i></button>
                                            <a href="<?= base_url('administrator/barangdetail/'); ?><?= $brg['id']; ?>" class="d-sm-inline-block btn btn-info btn-xs " role="button" data-toggle="tooltip" data-placement="top" title="Detail"><i class="far fa-fw fa-eye"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>


                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="<?= $brg['kode_brg']; ?>" tabindex="-1" aria-labelledby="editbarangLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 clas="mr-3">Edit Barang</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('administrator/updatebarang/'); ?><?= $brg['id']; ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="row mb-2">
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="kode">Kode Brg (auto)</label></small>
                                                                    <input type="text" class="form-control" id="kode" name="kode" placeholder="No" value='<?= $brg['kode_brg']; ?>' readonly>
                                                                </div>
                                                                <div class="col-8">
                                                                    <small><label for="nama">Nama Brg</label></small>
                                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value='<?= $brg['nama_brg']; ?>' required>
                                                                </div>
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="jenis">Jenis</label></small>
                                                                    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Kain" value='<?= $brg['jenis']; ?>' readonly required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="satuan">Satuan</label></small>
                                                                    <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Meter" value='<?= $brg['satuan']; ?>' required>
                                                                </div>
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="harga">Harga (Satuan)</label></small>
                                                                    <input type="number" class="form-control" id="harga" name="harga" placeholder="25000" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" value='<?= $brg['harga']; ?>' required>
                                                                </div>
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <small><label for="harga">Penggunaan</label></small>
                                                                    <?php
                                                                    if ($brg['used'] == 1) {
                                                                        $iya = '  sudah ada penggunaan';
                                                                    } else {
                                                                        $iya = '  belum ada penggunaan';
                                                                    }
                                                                    ?>
                                                                    <div class="bg-indigo color-palette"><span class="text-center"> <?= $iya; ?></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="text mt-1 col-12">
                                                                <small>PERINGATAN..!!!</small>
                                                            </div>
                                                            <div class="text col-12">
                                                                <br><small>Perubahan data akan mempengaruhi perhitungan volume maupun harga jika barang telah ada riwayat penggunaan.</small>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-success">Edit</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal-->

                                    <!-- Modal Tambah Stok -->
                                    <div class="modal fade" id="stok<?= $brg['kode_brg']; ?>" tabindex="-1" aria-labelledby="editbarangLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 clas="mr-3">Tambah stok barang</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('administrator/tambahstokbarang/'); ?><?= $brg['id']; ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="row mb-2">
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="kode">Kode Brg (auto)</label></small>
                                                                    <input type="text" class="form-control" id="kode" name="kode" placeholder="No" value='<?= $brg['kode_brg']; ?>' readonly>
                                                                </div>
                                                                <div class="col-8">
                                                                    <small><label for="nama">Nama Brg</label></small>
                                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value='<?= $brg['nama_brg']; ?>' readonly>
                                                                </div>
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="stok">Stok sekarang</label></small>
                                                                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Kain Katun" value='<?= $brg['volume']; ?>' readonly>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-2 ">
                                                                <div class="col-10">
                                                                </div>
                                                                <div class="col-4 col-md-2 col-sm-2">
                                                                    <small><label for="tambah">Tambah stok</label></small>
                                                                    <input type="number" class="form-control" id="tambah" name="tambah" placeholder="1" min="1" required>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-success">Edit</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal-->

                                <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Add -->
<div class="modal fade" id="barang" tabindex="-1" aria-labelledby="barangLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 clas="mr-3"> Tambah Item Barang </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('administrator/stockbarang'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-4 col-md-2 col-sm-2">
                                <small><label for="kode">Kode Brg (auto)</label></small>
                                <input type="text" class="form-control" id="kode" name="kode" placeholder="No" value='<?= $kode['kode']; ?>' readonly>
                            </div>
                            <div class="col-8">

                                <small><label for="nama">Nama Brg</label></small>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required>

                            </div>
                            <div class="col-4 col-md-2 col-sm-2">
                                <small><label for="jenis">Jenis</label></small>
                                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Kain Katun" required>
                            </div>
                        </div>
                        <div class="row mb-2">

                            <div class="col-4 col-md-2 col-sm-2">
                                <small><label for="vol">Volume</label></small>
                                <input type="number" class="form-control" id="vol" name="vol" placeholder="10" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" required>
                            </div>
                            <div class="col-4 col-md-2 col-sm-2">
                                <small><label for="satuan">Satuan</label></small>
                                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Meter" required>
                            </div>
                            <div class="col-4 col-md-2 col-sm-2">
                                <small><label for="harga">Harga (Satuan)</label></small>
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="25000" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" required>
                            </div>
                            <div class="col-6 col-md-6 col-sm-4">
                                <small><label for="gambar">Foto Barang</label></small>
                                <input type="file" id="gambar" name="gambar" class=" form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="text mt-1 col-12">
                            <small>'Jenis' barang hanya berupa deskripsi untuk pengelompokan</small>
                            <br><small>'Harga' barang di isi dengan harga satuan</small>

                        </div>
                        <div class="text col-12">
                            <br><small>Syarat Upload Foto barang:</small>
                            <br><small>1. Format Gambar gif, jpg, jpeg atau png</small>
                            <br><small>2. Size file dibawah 500kb</small>
                            <br><small>3. Tidak upload gambar atau upload tidak memenuhi syarat, otomatis digunakan gambar default</small>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end modal-->





<script>
    const flashdata = ('<?= $this->session->flashdata('pesan'); ?>');
    if (flashdata == 'Berhasil Dihapus') {
        swal.fire({
            icon: 'success',
            title: 'Data Telah ' + flashdata,
            showConfirmButton: false,
            timer: 10000,
            background: '#212f3c'
        });
    };
    if (flashdata == 'Gagal Dihapus') {
        swal.fire({
            icon: 'error',
            title: 'Data ' + flashdata + ' Karena sudah ada penggunaan',
            showConfirmButton: false,
            timer: 10000,
            background: '#212f3c'
        });
    };
    if (flashdata == 'Berhasil disimpan dengan gambar default') {
        swal.fire({
            icon: 'warning',
            title: 'Data Telah ' + flashdata,
            showConfirmButton: false,
            timer: 10000,
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
    if (flashdata == 'Berhasil diedit') {
        swal.fire({
            icon: 'success',
            title: 'Data Telah ' + flashdata,
            showConfirmButton: false,
            timer: 10000,
            background: '#212f3c'
        });
    };
</script>