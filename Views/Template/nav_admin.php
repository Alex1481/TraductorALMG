    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/user.jpg" alt="User Image" height="50">
        <div>
          <p class="app-sidebar__user-name"><font size="3px"><?= $_SESSION['userData']['nombres']; ?></font></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
            <li>
                <a class="app-menu__item" href="<?= base_url();?>/dashboard">
                    <i class="app-menu__icon fa fa-dashboard"></i>
                    <span class="app-menu__label">Dashboard</span>
                </a>
            </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                    <span class="app-menu__label">Usuarios</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
              <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url();?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                <li><a class="treeview-item" href="<?= base_url();?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
              </ul>
            </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
            <li>
                <a class="app-menu__item" href="<?= base_url();?>/vocabulario">
                    <i class="app-menu__icon fa fa-user-circle-o" aria-hidden="true"></i>
                    <span class="app-menu__label">Vocabulario</span>
                </a>
            </li>
        <?php } ?>
        <li>
            <a class="app-menu__item" href="<?= base_url();?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar Sesión</span>
            </a>
        </li>
      </ul>
    </aside>