    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('welcome'); ?>" class="brand-link">
            <img src="<?= base_url('assets/'); ?>dist/img/jakartataylor.png" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><strong>Jakarta </strong><small>taylor</small></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Query Menu -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "  SELECT `user_menu`.`id`,`user_menu`.`menu` 
                                    FROM `user_menu` JOIN `user_access_menu`
                                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                                    WHERE `user_access_menu`.`role_id` = $role_id
                                    ORDER BY `user_access_menu`.`menu_id`ASC
                                ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>
                    <?php foreach ($menu as $m) : ?>


                        <li class="nav-header"><?= $m['menu']; ?></li>
                        <!--Query Sub Menu -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "   SELECT *
                                            FROM `user_sub_menu` JOIN `user_menu`
                                            ON `user_sub_menu`.`menu_id`=`user_menu`.`id`
                                            WHERE `user_sub_menu`.`menu_id` = $menuId
                                            AND `user_sub_menu`.`is_active`=1
                                        ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                    <i class="<?= $sm['icon']; ?>"></i>
                                    <p>
                                        <?= $sm['title']; ?>

                                    </p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->