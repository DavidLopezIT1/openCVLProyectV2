
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