<?php include_once("sections/header.php") ?>

<body class="wall-4">

    <div id="wrapper">
       <!-- Menu de materiales -->
         <?php include_once ("menuMateriales.php") ?>

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 id="IdTitulo">Alta de Almacen</h1>
                  </div>
                </div>

                <div class="row ">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8 pform">

                    <form class="form-horizontal" action="index.php/uploader/altaUmedida" method="POST" enctype="multipart/form-data">
                      <?php form_open_multipart('uploader/altaUmedida'); ?>
                        <div class="form-group">
                          <label for="clave" class="control-label col-lg-2">Clave</label>
                          <div class="col-lg-4">
                           <?php foreach ($ultimaUMedida as $ultimo) { ?>
                              <input type="text" name="clave" type="text" placeholder="<?php echo $ultimo['clave']+1 ?>" class="form-control" disabled>
                           <?php } ?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="descripcion" class="control-label col-lg-2">Descrpipcion</label>
                          <div class="col-lg-6">
                            <textarea name="descripcion" id="" rows="3  " class="form-control" placehoder="">
                            </textarea>
                          </div>
                          <label for="factor" class="control-label col-lg-2">Factor</label>
                          <div class="col-lg-2">
                            <input type="text" name="factor" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group ">
                          <div class="col-lg-8"></div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger form-control">Cancel</button>
                          </div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-success form-control">Save</button>
                          </div>
                        </div>
                    </form>

                  </div>
                  <div class="col-lg-2"></div>
                </div>
        <!-- /#page-wrapper -->
              </div>
        </div>
    <!-- /#wrapper -->
    </div>

</body>
<?php  include_once ("sections/footer.php") ?>
