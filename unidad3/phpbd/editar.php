<?php include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$edad=$_POST['numEdad'];
$sexo=$_POST['txtSexo'];
$idprocedencia=$_POST['selProcedencia'];

$celular=$_POST['numCelular'];
$estado=$_POST['selEstado'];
$fecha=$_POST['fecRegistro'];
$sql="update persona set nombre='$nombre',apellidos='$apellido',edad=$edad,sexo='$sexo',idprocedencia=$idprocedencia,celular=$celular,estado='$estado',fecha='$fecha' where id=".$id;
if (isset($_FILES['imgFotografia']['tmp_name']))
	copy($_FILES['imgFotografia']['tmp_name'],'images/'.$fotografia);

echo $sql;
$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listar.php">   

