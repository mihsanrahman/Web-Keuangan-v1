<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html">Allsys Solutions</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class='sidebar-hide d-xl-none d-block'><i class='bi bi-x bi-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- Query Menu -->
                        <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                              FROM `user_menu`
                              JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                              WHERE `user_access_menu`.`role_id` = $role_id
                              ORDER BY `user_access_menu`.`menu_id` ASC
                              ";
                        $menu = $this->db->query($queryMenu)->result_array();
                        ?>

                        <!-- Looping Menu -->
                        <?php foreach ($menu as $m) : ?>
                            <!-- Heading -->
                            <div class="sidebar-heading">
                                <?= $m['menu']; ?>
                            </div>
                            <!-- Looping Submenu -->
                            <?php
                            $menuId = $m['id'];
                            $querySubMenu = "SELECT *
                                 FROM `user_sub_menu` 
                                 JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                 WHERE `user_sub_menu`.`menu_id` = $menuId
                                 AND `user_sub_menu`.`is_active` = 1
                                ";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>
                            <?php foreach ($subMenu as $sm) : ?>
                                <?php if ($title == $sm['title']) : ?>
                                    <li class="sidebar-item active">
                                    <?php else : ?>
                                    <li class="sidebar-item">
                                    <?php endif; ?>
                                    <a class="sidebar-link" href="<?= base_url($sm['url']); ?>
                ">
                                        <i class="<?= $sm['icon']; ?>"></i>
                                        <span><?= $sm['title']; ?></span></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
