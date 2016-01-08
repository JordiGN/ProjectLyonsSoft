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
                    <p><a href="index.php/welcome/matProductos"><i class="fa fa-gift fa-4x"></i><br>Products</a></p>
                </td>
                <td class="app">
                    <p><a href="index.php/welcome/matProveedores"><i class="fa fa-truck fa-4x"></i><br>Providers</a></p>
                </td>
                <td class="app">
                    <p><a href="index.php/welcome/matAlmacenes"><i class="fa fa-fw fa-bank fa-4x"></i><br>Stores</a></p>
                </td>
                <td class="app">
                    <p><a href="index.php/welcome/matTallas"><i class="fa fa-arrows-alt fa-4x"></i><br>Sizes</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <p><a href="index.php/welcome/matUnidadesdeMedida"><i class="fa fa-list-alt fa-4x"></i><br>Measurements Units</a></p>
                </td>
                <td class="app">
                    <p><a href=""><i class="fa fa-usd fa-4x"></i><br>Store Buys</a></p>
                </td>
                <td class="app">
                    <p><a href=""><i class="fa fa-search fa-4x"></i><br>Buys Consult</a></p>
                </td>
                <td class="app">
                    <p><a href=""><i class="fa fa-barcode fa-4x"></i><br>Stock Inquiry</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <p><a href=""><i class="fa fa-tasks fa-4x"></i><br>Debts to pay</a></p>
                </td>
                <td class="app">
                    <p><a href=""><i class="fa fa-money fa-4x"></i><br>Banks</a></p>
                </td>

                <td class="app">
                    <p><a href=""><i class="fa fa-exchange fa-4x"></i><br>Store movements</a></p>
                </td>
                <td class="app">
                    <p><a href=""><i class="fa fa-list-ul fa-4x"></i><br>Inventary</a></p>
                </td>
            </tr>
            <tr>
                <td class="app">
                    <i class="fa fa-file-text fa-4x"></i><br>
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
