<?php include_once("sections/header.php") ?>

<body class="wall-3">
<ol class = "breadcrumb">
         <li><a class="directorio" href = "index.php/welcome/mainMenu">Home</a></li>
         <li><a class="directorio" href = "index.php/welcome/menuMateriales">Materials</a></li>
         <li class = "active">Sizes </li>
</ol>
    <div id="wrapper">

        <div id="page-wrapper">

              <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 id="IdTitulo">Corridas/Tallas</h1>
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
                                <td>ID</td>
                                <td>Run</td>
                                <td>Description</td>
                                <td>Char</td>
                                <th>T-1</th>
                                <th>T-2</th>
                                <th>T-3</th>
                                <th>T-4</th>
                                <th>T-5</th>
                                <th>T-6</th>
                                <th>T-7</th>
                                <th>T-8</th>
                                <th>T-9</th>
                                <th>T-10</th>
                                <th>T-11</th>
                                <th>T-12</th>
                                <th>T-13</th>
                                <th>T-14</th>
                                <th>T-15</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($tallas as $rowTallas){ ?>
                                 <tr>

                                 <td><?php echo $rowTallas['clave']; ?></td>
                                 <td><?php echo $rowTallas['corrida']; ?></td>
                                 <td><?php echo $rowTallas['descripcion']; ?></td>
                                 <td><?php echo $rowTallas['letra']; ?></td>
                                 <td><?php echo $rowTallas['cor1']; ?></td>
                                 <td><?php echo $rowTallas['cor2']; ?></td>
                                 <td><?php echo $rowTallas['cor3']; ?></td>
                                 <td><?php echo $rowTallas['cor4']; ?></td>
                                 <td><?php echo $rowTallas['cor5']; ?></td>
                                 <td><?php echo $rowTallas['cor6']; ?></td>
                                 <td><?php echo $rowTallas['cor7']; ?></td>
                                 <td><?php echo $rowTallas['cor8']; ?></td>
                                 <td><?php echo $rowTallas['cor9']; ?></td>
                                 <td><?php echo $rowTallas['cor10']; ?></td>
                                 <td><?php echo $rowTallas['cor11']; ?></td>
                                 <td><?php echo $rowTallas['cor12']; ?></td>
                                 <td><?php echo $rowTallas['cor13']; ?></td>
                                 <td><?php echo $rowTallas['cor14']; ?></td>
                                 <td><?php echo $rowTallas['cor15']; ?></td>
                                 <td><a href=""><i class="fa fa-pencil-square-o"></i></a></td>
                                 <td><a href="index.php/uploader/desactivaTalla?id=<?php echo $rowTallas['clave'];?>"><i class="fa fa-trash-o"></i></a></td>
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
                        <li id="lista1"><a href="#"><i class="fa fa-file-excel-o fa-lg"></i> </a></li>
                        <li id="lista2"><a href="#"><i class="fa fa-print fa-lg"></i> </a></li>

                      </ul>
                      <ul class="nav navbar-nav navbar-right ">
                          <li id="lista3"><a href="index.php/welcome/matAltaTallas">Add run <i class="fa fa-plus-square fa-lg"></i></a></li>
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
