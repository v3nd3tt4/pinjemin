 MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            SANGGAM
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <!-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li> -->
                <?php if($this->session->userdata('level') != 'admin'){?>
                <li class="<?=$link=='user_dashboard' ? 'active' : ''?>">
                    <a href="<?=base_url()?>user">
                        <i class="fas fa-tachometer-alt "></i>Dashboard</a>
                </li>
                
                <li class="<?=$link=='user_profil' ? 'active' : ''?>">
                    <a href="<?=base_url()?>user/profil">
                        <i class="fas fa-user "></i>Profil</a>
                </li>
                <li class="<?=$link=='user_ajukan_pinjaman' ? 'active' : ''?>">
                    <a href="<?=base_url()?>user/ajukan_pinjaman">
                        <i class="fas  fa-usd"></i>Ajukan Pinjam</a>
                </li>
                <?php }else{?>
                <li class="<?=$link=='admin_dashboard' ? 'active' : ''?>">
                    <a href="<?=base_url()?>admin">
                        <i class="fas fa-tachometer-alt "></i>Dashboard
                    </a>
                </li>
                <li class="<?=$link=='admin_list_user' ? 'active' : ''?>">
                    <a href="<?=base_url()?>admin/list_user">
                        <i class="fas fa-user "></i>Customer
                    </a>
                </li>
                <?php }?>
                <!-- <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR