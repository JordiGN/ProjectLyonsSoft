<?php include_once("sections/header.php") ?>

<body class="wall-3">
<ol class = "breadcrumb">
         <li><a class="directorio" href = "index.php/welcome/mainMenu">Home</a></li>
         <li><a class="directorio" href = "index.php/welcome/menuMateriales">Materials</a></li>
         <li class = "active">Providers </li>
</ol>
    <div id="wrapper">

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <h1 id="IdTitulo">Providers</h1>
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
                </div>
                <br>
                <br>
                <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="table-responsive col-lg-10">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr><!--Renglones-->
                                <th >Id</th><!--Colunas-->
                                <th >Name</th>
                                <th >Comercial Name</th>
                                <th >Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                         <!-- <?php //foreach($proveedores as $rowProveedores){ ?>
                         <tr>
                             <td><?php //echo $rowProveedores['id']; ?></td>
                             <td><?php //echo $rowProveedores['name']; ?></td>
                             <td><?php //echo $rowProveedores['comercialname']; ?></td>
                             <td><?php //echo $rowProveedores['date']; ?></td>
                         </tr>
                         <?php// } ?> -->
                         <tr>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                         <tr>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
                         <tr>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td>DATOS</td>
                            <td><i class="fa fa-pencil-square-o"></i></td>
                            <td><i class="fa fa-trash-o"></i></td>
                         </tr>
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
                      <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                      <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                      <li id="lista3"><a href="index.php/welcome/matAltaProveedores">Add provider <i class="fa fa-plus-square fa-lg"></i></a></li>
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
