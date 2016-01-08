<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript"  href="js/scripts.js"></script>
<script src="js/jquery-1.6.js" type="text/javascript"></script>
<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
<title>Elefante</title>
<script type="text/javascript">

$(document).ready(function() {
	$('.jqzoom').jqzoom({
            zoomType: 'reverse',
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
	//$('.jqzoom').jqzoom();
});


</script>
<style type"text/css">

body{margin:0px;padding:0px;font-family:Arial;}
a img,:link img,:visited img { border: none; }
table { border-collapse: collapse; border-spacing: 0; }
:focus { outline: none; }
*{margin:0;padding:0;}
p, blockquote, dd, dt{margin:0 0 8px 0;line-height:1.5em;}
fieldset {padding:0px;padding-left:7px;padding-right:7px;padding-bottom:7px;}
fieldset legend{margin-left:15px;padding-left:3px;padding-right:3px;color:#333;}
dl dd{margin:0px;}
dl dt{}

.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}

.jqzoom{

	text-decoration:none;
	float:left;

}
</style>
</head>

<body>
<?
$genero = $_GET['genero'];
$lineas = $_GET['lineas'];
$modelo = $_GET['modelo'];
?>
<header>
  <a href="index.php" title="ver carrito de compras" style="margin-left:10%; width:150px">
    <img src="images/logoeft.png">
  </a>
  <a href="carrito.php" style="margin-left:10%; width:50px">
    <img src="images/bolsa.png">
  </a>

		<!--<a href="index.php" title="ver carrito de compras" >
			<img src="img/bolsa.png" style="margin-top:30px">
		</a>-->
	</header>
	<section>
		<div class="submenu">

	<?php
		include ('conexion.php');
		$re=mysql_query("select * from generos where estatus=1 ")or die(mysql_error());
		$x=1;


		echo '<ul id="menu"><li><font color="#FF0000">TIENDA EN LINEA</font></li>';
		while ($f=mysql_fetch_array($re)) {

		?>

           <li ><a href='catalogo.php?genero=<? echo $f['clave']; ?>'><span style="color:#F00"><?php echo $f['genero'];?></span></a>
           <?
           $re2=mysql_query("select * from lineas where estatus=1 ")or die(mysql_error());
		   echo '<ul >';
		while ($f2=mysql_fetch_array($re2)) {
			?>
        <li style="color:#FF0000"><a href="catalogo.php?genero=<? echo $f['clave']; ?>&lineas=<? echo $f2['clave']; ?>" ><?php echo $f2['linea'];?></a></li>

        <?
		}
		echo '</ul></li>';
		}//termina while primero
		echo '</ul>';

	?>
		</div>
        <div style="float:right; margin-right:30px">
        <input id="searchInput" class="input_buscar" name="q" type="text" placeholder="Buscar marca, zapatos, categoría" autocomplete="off">
        <input type="submit" name="serch" id="serch" value="Buscar" class="boton_buscar"/>
        </div>
        <div class="contenido">
        <?
		if(isset($genero) and isset($lineas) and empty($modelo))
		{
        /*$re3=mysql_query("select * from listaprecios where estatus=1 and linea='$lineas' and genero='$genero' limit 100 ")or die(mysql_error());
		$x=1;
		while ($f3=mysql_fetch_array($re3)) {
		*/?>
        <!--
        <div class="producto">
			<center>
				<img src="productosimg/<?php // echo $f3['nomfoto'];?>"><br>
				<span>//</span><br>
                <span></span><br>
				<a href="./detalles.php">ver</a>
			</center>
		</div>
        -->
</body>
</html>
