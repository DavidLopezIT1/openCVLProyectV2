<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='general_scripts.js'></script>
    <link rel="stylesheet" href="Listado_paises.css">
    <title>Listar Paises</title>
</head>
<body>
    <form action="" method="post" id="miFormulario">

    <table>
        <thead>
            <th>Codigo</th>
            <th>Pais</th>
            <th>Descripcion</th> 
            <th>Selector</th>
        </thead>

        <tbody>

        <script>
            function changedform1(parameter, param2){
                document.getElementById('miFormulario');
                let generalformethod = document.getElementById('miFormulario');
                generalformethod.action = parameter;
                generalformethod.method = param2;
    // document.getElementById('miFormulario').submit();
}
        </script>
            <?php 

            include 'C:/xampp\htdocs\Proyecto_soft\openCVLProyect/functions.php';
            include "C:/xampp\htdocs\Proyecto_soft\openCVLProyect/conection.php";

             $query2 = "SELECT * FROM siapais";
             $resultquery2 = $conection->query($query2);
         
             while($a = $resultquery2->fetch_assoc()) {
                 echo "<tr style='font-size:13px'>" .
                 "<td value='" . htmlspecialchars($a['codigopais']) . "' onclick=\"changedform1('importadorCreate.php', 'post')\">" . htmlspecialchars($a['codigopais']) . "</button></td>" . 
                      "<td>" . htmlspecialchars(strtoupper($a['numeropais'])) . "</td>" .
                      "<td>" . htmlspecialchars($a['descpais']) . "</td>" .
                      "<td><input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv[]' value='" . htmlspecialchars($a['codigopais']) . "'></td>" .
                      "</tr>";
             }

            ?>
        </tbody>

    </table>
    <button name ='Sender' onclick="changedform1('../importador/importadorCreate.php', 'post');">Seleccionar</button>
            <?php 
            if(isset($_POST['Sender']) and isset($_POST['checkboxitemv'])){
                $variableCheckbox =    $_POST['checkboxitemv']; 
                
            }
            ?>

    </form> 

</body>
</html>