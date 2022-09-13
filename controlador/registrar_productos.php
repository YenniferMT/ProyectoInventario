<?php 
    if(isset($_POST['registrarPro'])){
        //Si no esta vacio cumple la siguiente condicion 
        if((!empty($_POST['nombreProd'])) && !empty($_POST['descripcionPro']) && !empty($_POST['precioPro']) && !empty($_POST['stockPro']) && !empty($_POST['pesoPro']) && !empty($_POST['idcategoria']) && !empty($_POST['idmarca']) && !empty($_POST['idproveedor']) && !empty($_POST['idusuario']) && !empty($_POST['presentacioPro'])) {

            $nombre=$_POST['nombreProd'];
            $descripcion=$_POST['descripcionPro'];
            $precio=$_POST['precioPro'];
            $stock=$_POST['stockPro'];
            $peso=$_POST['pesoPro'];
            $idcategoria=$_POST['idcategoria'];
            $idmarca=$_POST['idmarca'];
            $idproveedor=$_POST['idproveedor'];
            $idusuario=$_POST['idusuario'];
            $idpresentacion=$_POST['presentacioPro'];


            $sql=$conexion->query("INSERT INTO producto(nombres_producto,descripcion_producto,precio_producto,stock_producto,peso_producto,id_categoria,id_marca,id_proveedor,id-usuario,id_presentacion) values('$nombre','$descripcion','$precio','$stock','$peso','$idcategoria','$idmarca','$idproveedor','$idusuario','$idpresentacion')");

            if($sql==1){
                echo '<div class="alert alert-success">Producto registrado</div>';
            }else{
                echo "Producto no registrado";
            }
        }else{
            echo "Los campos estan vacios";
        }
    }
?>