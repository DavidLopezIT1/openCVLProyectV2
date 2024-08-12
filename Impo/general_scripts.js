
function selectorChecked() {
document.getElementById('generalCheckbox').addEventListener("change", function() {
    let isChecked = this.checked;

    let checkboxes = document.querySelectorAll('#miFormulario .checkboxitem');

    checkboxes.forEach(function(checkbox) {
        checkbox.checked = isChecked;
    });
});
}

