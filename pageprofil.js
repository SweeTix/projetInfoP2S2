function editField(id) {
    const input = document.getElementById(id);
    input.readOnly = false;
    input.classList.add("editable");

    toggleButtons(id, true);
}

function validateField(id) {
    const input = document.getElementById(id);
    input.readOnly = true;
    input.classList.remove("editable");

    if (input.value !== input.dataset.original) {
        input.dataset.modified = "true";
    }

    checkSubmitVisible();
    toggleButtons(id, false);
}

function cancelField(id) {
    const input = document.getElementById(id);
    input.value = input.dataset.original;
    input.readOnly = true;
    input.classList.remove("editable");

    toggleButtons(id, false);
}

function toggleButtons(id, editing) {
    document.querySelector(`#field-${id} button[onclick^="editField"]`).hidden = editing;
    document.querySelector(`#field-${id} button[onclick^="validateField"]`).hidden = !editing;
    document.querySelector(`#field-${id} button[onclick^="cancelField"]`).hidden = !editing;
}

function checkSubmitVisible() {
    const inputs = document.querySelectorAll('input[data-modified="true"]');
    document.getElementById('submitBtn').hidden = inputs.length === 0;
}