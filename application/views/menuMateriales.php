<?php include_once("sections/header.php") ?>
<!-- menu -->
<?php include_once("mUsuario.php") ?>
<ol class = "breadcrumb">
         <li><a class="directorio" href = "index.php/welcome/mainMenu">Home</a></li>
         <li class = "active">Materials </li>
</ol>
<!-- contenedor -->
<body class="wall-2">
    <div id="container-apps" class="container">
    <!-- apps -->
            <table id="mMateriales">
            <tr>
                <td class="app">
                    <i class="fa fa-gift fa-5x"></i>
                    <p><a href="index.php/welcome/matProductos">Products</a></p>
                </td>
                <td class="app">
                    <i  class="fa fa-truck fa-5x"></i>
                    <p><a href="index.php/welcome/matProveedores">Providers</a></p>
                </td>
                <td class="app">
                    <i  class="fa fa-fw fa-bank fa-5x"></i>
                    <p><a href="index.php/welcome/matAlmacenes">Stores</a></p>
                </td>
                <td class="app">
                    <i class="fa fa-arrows-alt fa-4x"></i>
                    <p><a href="index.php/welcome/matTallas">Sizes</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <i  class="fa fa-list-alt fa-5x"></i>
                    <p><a href="index.php/welcome/matUnidadesdeMedida">Measurements Units</a></p>
                </td>
                <td class="app">
                    <i  i class="fa fa-usd fa-5x"></i>
                    <p><a href="">Store Buys</a></p>
                </td>
                <td class="app">
                    <i  class="fa fa-search fa-5x"></i>
                    <p><a href="">Buys Consult</a></p>
                </td>
                <td class="app">
                    <i  class="fa fa-barcode fa-5x"></i>
                    <p><a href="">Stock Inquiry</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <i  class="fa fa-tasks fa-5x"></i>
                    <p><a href="">Debts to pay</a></p>
                </td>
                <td class="app">
                    <i class="fa fa-money fa-5x"></i>
                    <p><a href="">Banks</a></p>
                </td>

                <td class="app">
                    <i class="fa fa-exchange fa-5x"></i>
                    <p><a href="">Store movements</a></p>
                </td>
                <td class="app">
                    <i class="fa fa-list-ul fa-5x"></i>
                    <p><a href="">Inventary</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <i class="fa fa-file-text fa-5x"></i>
                    <p><a href="">Movement report (Not Buys)</a></p>
                </td>
                <td class="app"></td>
                <td class="app"></td>
                <td class="app"></td>
            </tr>
        </table>

    <!-- /apps -->

    </div>
    <!-- /contenedor -->

<?php include_once("sections/footer.php") ?>
