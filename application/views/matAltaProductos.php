<?php include_once("sections/header.php") ?>

<body class="wall-4">
<?php include_once("mUsuario.php") ?>
<ol class = "breadcrumb">
         <li><a class="directorio" href = "index.php/welcome/mainMenu">Home</a></li>
         <li><a class="directorio" href = "index.php/welcome/menuMateriales">Materials</a></li>
         <li><a class="directorio" href = "index.php/welcome/matProductos">Products</a></li>
         <li class = "active">Add Product </li>
</ol>

    <div id="wrapper">

        <div id="page-wrapper">

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                  <h1 id="IdTitulo">Added Products</h1>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-2"></div>
              <div class="col-lg-8 pform">
                <form class="form-horizontal" action="index.php/uploader/altaProducto" method="POST" enctype="multipart/form-data">
                <?php form_open_multipart('uploader/altaProducto'); ?>
                  <div class="form-group">
                    <label for="clave" class="control-label col-lg-9">Clave</label>
                    <div class="col-lg-3">
                      <?php foreach ($ultimoProducto as $ultimo) { ?>
                        <input type="text" name="clave" type="text" placeholder="<?php echo $ultimo['clave']+1 ?>" class="form-control" disabled>
                     <?php } ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="descripcion" class="control-label col-lg-2">Descripcion</label>
                    <div class="col-lg-10">
                      <textarea name="descripcion" id="" rows="3  " class="form-control" value="<?php echo set_value('descripcion') ?>">
                      </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="ucosto">Costo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="ucosto" value="<?php echo set_value('ucosto'); ?>">
                    </div>
                    <label for="umedidas" class="control-label col-lg-2">U. de Medida</label>
                    <div class="col-lg-2">
                      <select name="umedidas" id="" class="form-control">
                        <?php foreach ($unimedidas as $unimedida ) { ?>
                        <option value="<?php echo $unimedida['clave'] ?>">
                          <?php echo $unimedida['descripcion']; ?>
                        </option>
                       <?php } ?>
                      </select>
                    </div>
                    <label for="tallas" class="control-label col-lg-2">Tallas</label>
                    <div class="col-lg-2">
                        <select name="tallas" id="" class="form-control">
                          <?php foreach ($tallas as $talla ) { ?>
                          <option value="<?php echo $talla['clave']; ?>">
                            <?php echo $talla['corrida']; ?>
                          </option>
                         <?php } ?>
                        </select>
                    </div>
                  </div>
                  <br>

                  <div class="form-group ">
                    <label class="col-lg-12" for="">Stock</label>
                    <br>
                    <label class="control-label col-lg-2" for="minimo">Minimo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="minimo">
                    </div>
                    <label for="maximo" class="control-label col-lg-2">Máximo</label>
                    <div class="col-lg-2">
                      <input type="text" class="form-control" name="maximo">
                    </div>
                    <label for="tentrega" class="control-label col-lg-2">Tiempo de Entrega</label>
                    <div class="col-lg-2">
                      <input type="number" class="form-control" name="tentrega">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="col-lg-12" for="">Código de Barras</label>
                    <br>
                    <label class="control-label col-lg-1" for="sku1">Sku(1)</label>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="sku1">
                    </div>
                    <label for="sku2" class="control-label col-lg-1">Sku(2)</label>
                    <div class="col-lg-5">
                      <input type="text" class="form-control" name="sku2">
                    </div>
                  </div>


                  <div class="form-group ">
                    <div class="col-lg-10"></div>
                      <div class="col-lg-2">
                        <button type="submit" class="btn btn-success form-control">Save</button>
                      </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
<?php  include_once ("sections/footer.php") ?>
