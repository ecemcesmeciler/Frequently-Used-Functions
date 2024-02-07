
$(document).ready(function () {
    console.log('initial value: ' + $('#InputProductType').val());

    $('#InputProductType').on('change', function () {
        console.log('Input value changed: ' + $(this).val());
        console.log('Current value: ' + $(this).val());
    });

    console.log('current value: ' + $('#InputProductType').val());
});
