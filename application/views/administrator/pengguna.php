<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Daftar Pengguna</h5>
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
                            <a href="<?= base_url('administrator/pengguna'); ?>" class="d-sm-inline-block btn btn-warning btn-sm"><i class="fas fa-sync-alt"></i> Refresh </a>

                            <?= $this->session->flashdata('error'); ?>
                        </div>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <?php $i = 1; ?>
                                <?php foreach ($user as $usr) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><small><?= $usr['name']; ?></small></td>
                                        <td><small><?= $usr['email']; ?></small></td>
                                        <td><small><?= $usr['role_id']; ?></small></td>
                                        <td>
                                            <a href="<?= base_url('administrator/updateuser/'); ?><?= $usr['id']; ?>" class="d-sm-inline-block btn btn-success btn-xs " role="button" data-toggle="modal" data-target="#<?= $usr['name']; ?>" data-placement="top" title="Edit"><i class="far fa-fw fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>


                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="<?= $usr['name']; ?>" tabindex="-1" aria-labelledby="editbarangLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 clas="mr-3">Edit Pengguna</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('administrator/updateuser/'); ?><?= $usr['id']; ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <small><label for="kode">Username</label></small>
                                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" value='<?= $usr['name']; ?>' readonly>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <small><label for="nama">Email</label></small>
                                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value='<?= $usr['email']; ?>' readonly>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <small><label for="role_id">Status</label></small>
                                                                    <select class="custom-select rounded-0" id="role_id" name="role_id" required>
                                                                        <option data-toggle="tooltip" data-placement="top" title="4 = Status Customer">4</option>
                                                                        <option data-toggle="tooltip" data-placement="top" title="3 = Status Worker">3</option>
                                                                        <option data-toggle="tooltip" data-placement="top" title="2 = Status Operator">2</option>
                                                                        <option class="bg-danger" data-toggle="tooltip" data-placement="top" title="1 = Status Administrator Jangan banyak bekeng admin">1</option>
                                                                    </select>
                                                                </div>
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
            timer: 2500,
            background: '#212f3c'
        });
    };
</script>