<?php include_once("sections/header.php") ?>

<body class="wall-3">
<ol class = "breadcrumb">
         <li><a class="directorio" href = "index.php/welcome/mainMenu">Home</a></li>
         <li><a class="directorio" href = "index.php/welcome/menuMateriales">Materials</a></li>
         <li class = "active">Products </li>
</ol>
    <div id="wrapper">
        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 id="IdTitulo">Products</h1>
                    </div>

                </div>
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-1"></div>
                  <div class="col-lg-8 col-md-8 col-sm-9">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="table-responsive col-lg-10">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr><!--Renglones-->
                              <th>ID</th>
                              <th>Description</th><!--Colunas-->
                              <th>IdMedida</th>
                              <th>Cost</th>
                              <th>Max</th>
                              <th>Min</th>
                              <th>Sizes</th>
                              <th>Deliver Time</th>
                              <th></th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($productos as $rowProductos){ ?>
                          <tr>
                              <td><?php echo $rowProductos['arclave']; ?></td>
                              <td><?php echo $rowProductos['ardescripcion']; ?></td>
                              <td><?php echo $rowProductos['medescripcion']; ?></td>
                              <td><?php echo $rowProductos['arcosto']; ?></td>
                              <td><?php echo $rowProductos['armaximo']; ?></td>
                              <td><?php echo $rowProductos['arminimo']; ?></td>
                              <td><?php echo $rowProductos['arclavecor']; ?></td>
                              <td><?php echo $rowProductos['artentrega']; ?></td>
                              <td><a href=""><i class="fa fa-pencil-square-o"></i></a></td>
                              <td><a href="index.php/uploader/desactivaProducto?id=<?php echo $rowProductos['arclave'];?>"><i class="fa fa-trash-o"></i></a></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                  </div>
                  <div class="col-lg-1"></div>
                </div>
                <div class="row">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle btn btn-default btnInferior" data-toggle="collapse" data-target="#menuInferior"> <!-- Menu desplegable para inferiores -->
                      <span class="sr-only">Toggle navigation</span>
                      <span class=""><strong>Acciones</strong></span>
                      <!--<span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span> -->
                    </button>
                  </div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10 collapse navbar-collapse navbar-ex1-collapse" id="menuInferior">
                     <ul class="nav navbar-nav ">
                        <li id="lista1"><a href="#"><i class="fa fa-tags fa-lg"></i>  </a></li>
                        <li id="lista1"><a href="#"><i class="fa fa-list-alt fa-lg"></i></a></li>
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>

                      </ul>
                      <ul class="nav navbar-nav navbar-right ">
                          <li id="lista3"><a href="index.php/welcome/matAltaProductos">Add product<i class="fa fa-plus-square fa-lg"></i></a></li>
                      </ul>
                    </div>
                    <div class="col-lg-1"></div>
                  </div>
                </div>
              </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
<?php  include_once ("sections/footer.php") ?>
