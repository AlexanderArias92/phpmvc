<html>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>


<body>
 <h1 align="center">LISTA</h1>
    <table width="70%" border="1px" align="center"
    <table width="90%" border="1px" align="center">
    <tr bgcolor="orange"><td>Apellido</td><td>ID_Usuario</td><td>Tiempo</td></tr>
    

    <?php


        foreach($matrizArticulo as $data): ?>
    
        <tr><td><?php echo $data["apellido"] ?> </td><td><?php echo $data["iduser"]?> </td><td><?php echo $data["tiempo"]?> </td><td align="right"></td>
            <td><a href='index.php' class='btn btn-warning'>ver</a></td>
        </tr>

 
    <?php endforeach  ?>

</table>

</body>

</html>