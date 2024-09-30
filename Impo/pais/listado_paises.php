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
            // Cambia la acción y el método del formulario
            function changedform1(parameter, param2){
                let generalformethod = document.getElementById('miFormulario');
                generalformethod.action = parameter;
                generalformethod.method = param2;
            }

            // Enviar el valor seleccionado al otro formulario (en el formulario padre) y cerrar la ventana
            function SendParams(param){
                window.opener.document.getElementById('pais2').value = param; // envía el dato seleccionado al otro formulario
                window.close(); // cierra la ventana actual
            }
        </script>

        <?php 
            include 'C:/xampp/htdocs/Proyecto_soft/openCVLProyect/functions.php';
            include "C:/xampp/htdocs/Proyecto_soft/openCVLProyect/conection.php";

            $query2 = "SELECT * FROM siapais";
            $resultquery2 = $conection->query($query2);

            while($a = $resultquery2->fetch_assoc()) {
                echo "<tr style='font-size:13px'>" .
                    "<td value='" . htmlspecialchars($a['codigopais']) . "'>" . htmlspecialchars($a['codigopais']) . "</td>" . 
                    "<td>" . htmlspecialchars(strtoupper($a['numeropais'])) . "</td>" .
                    "<td>" . htmlspecialchars($a['descpais']) . "</td>" .
                    "<td><input type='checkbox' style='accent-color: yellow' class='checkboxitem' name='checkboxitemv[]' value='" . htmlspecialchars($a['descpais']) . "'></td>" .
                "</tr>";
            }
        ?>
        </tbody>
    </table>

    <!-- Botón que enviará los datos seleccionados -->
    <button name="Sender" type="button" onclick=" 
        let selectedCheckbox = document.querySelector('input[name=\'checkboxitemv[]\']:checked');
        if (selectedCheckbox) {
            SendParams(selectedCheckbox.value);  // Enviar el valor seleccionado
        } else {
            alert('Por favor selecciona un país.');
        }">Seleccionar</button>

    
</form>

</body>
</html>