
function selectorChecked() {
document.getElementById('generalCheckbox').addEventListener("change", function() {
    let isChecked = this.checked;

    let checkboxes = document.querySelectorAll('#miFormulario .checkboxitem');

    checkboxes.forEach(function(checkbox) {
        checkbox.checked = isChecked;
    });
});
}

function changedform1(parameter){
    document.getElementById('miFormulario').action = parameter;
    document.getElementById('miFormulario').submit();
}

function changedform2(parameter){
    document.getElementById('miFormulario').action = parameter;
    document.getElementById('miFormulario').submit();
}
let imprrimir = (__dirname);

function getPaises(){
   window.open(
    "http://localhost/Proyecto_soft/openCVLProyect/impo/pais/listado_paises.php",
    'Paises',
    "width=600,height=400,top=100,left=100,scrollbars=yes,resizable=yes"
);
return false;

} 

function abrirVentanaFlotante() {
    window.open(
        "https://www.example.com", // URL de la página a abrir
        "ventanaFlotante", // Nombre de la ventana
        "width=600,height=400,top=100,left=100" // Tamaño y posición
    );
    return false; // Evitar la navegación por defecto del enlace
}