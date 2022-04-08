<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Menu Management</h6>
                </div>
                <div class="col-sm">
                    <div class="float-sm-right">
                        <a href="<?= base_url('admin/submenu'); ?>" class="d-sm-inline-block btn btn-warning btn-sm">Open Sub Menu <i class="fas fa-share"></i></a>
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
                            <h3 class="card-title">Menu</h3>
                            <br>
                            <?= form_error('menu', '<div class="alert alert-danger" role="alert"> ', '</div>'); ?>
                            <?= $this->session->flashdata('message1'); ?>
                            <a href="<?= base_url('admin/menu'); ?>" class="d-sm-inline-block btn btn-success btn-sm col-2" data-toggle="modal" data-target="#newmenumodal">Add</a>
                            <a href="<?= base_url('admin/menu'); ?>" class="d-sm-inline-block btn btn-warning btn-sm col-2">Reload</a>
                            </br>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Menu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <a href="" class="d-sm-inline-block btn btn-success btn-sm " role="button">Edit</a>
                                                <a href="" class="d-sm-inline-block btn btn-danger btn-sm " role="button">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!--modal-->


<!-- Modal -->
<div class="modal fade" id="newmenumodal" tabindex="-1" aria-labelledby="newmenumodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newmenumodalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Menu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end modal-->