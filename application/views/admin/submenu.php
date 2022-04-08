<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Sub Menu Management</h6>
                </div>
                <div class="col-sm">
                    <div class="float-sm-right">
                        <a href="<?= base_url('admin/menu'); ?>" class="d-sm-inline-block btn btn-light btn-sm">Back to Menu <i class="fas fa-reply-all"></i></a>
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
                            <h3 class="card-title">Sub Menu</h3>
                            <br>
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>


                            <?= $this->session->flashdata('message2'); ?>
                            <a href="<?= base_url('admin/menu'); ?>" class="d-sm-inline-block btn btn-success btn-sm col-2" data-toggle="modal" data-target="#newsubmenumodal">Add</a>
                            <a href="<?= base_url('admin/submenu'); ?>" class="d-sm-inline-block btn btn-warning btn-sm col-2">Reload</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sub Menu Title</th>
                                        <th>Menu</th>
                                        <th>URL</th>
                                        <th>Icon</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($submenu as $sm) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $sm['title']; ?></td>
                                            <td><?= $sm['menu']; ?></td>
                                            <td><?= $sm['url']; ?></td>
                                            <td><?= $sm['icon']; ?></td>
                                            <td><?= $sm['is_active']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/editmenu/') ?><?= $sm['id'] ?>" class="d-sm-inline-block btn btn-success btn-sm " role="button" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('admin/hapusmenu/') ?><?= $sm['id'] ?>" class="d-sm-inline-block btn btn-danger btn-sm " role="button" data-placement="top" title="Delete Data"><i class="far fa-trash-alt"></i></a>
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


<!-- Modal add sub-->
<div class="modal fade" id="newsubmenumodal" tabindex="-1" aria-labelledby="newsubmenumodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsubmenumodalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu icon" value="nav-icon ">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
<!-- modal delete-->
<div class="modal fade" id="modaldelete" tabindex="-1" aria-labelledby="modaldeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaldeleteLabel">Do you want to delete this data?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
            </div>
        </div>
    </div>
</div>
<!--end modal delete-->
<!-- modal edit-->
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="modaleditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaleditLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit</button>
            </div>
        </div>
    </div>
</div>
<!--end modal edit-->