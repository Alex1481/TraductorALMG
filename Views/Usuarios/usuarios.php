<?php 
    headerAdmin($data); 
    getModal('modalUsuarios',$data);
?>
<main class="app-content">
      <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
           <?php if($_SESSION['permisosMod']['w']){ ?>
                <button class="btn btn-info" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
            <?php } ?>
            </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/usuarios"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th style="text-align: center">CUI</th>
                          <th style="text-align: center">Nombres</th>
                          <th style="text-align: center">Apellidos</th>
                          <th style="text-align: center">Correo Electrónico</th>
                          <th style="text-align: center">Teléfono</th>
                          <th style="text-align: center">Rol</th>
                          <th style="text-align: center">Estado</th>
                          <th style="text-align: center">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </main>
<?php footerAdmin($data); ?>