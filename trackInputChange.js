
$(document).ready(function () {
    console.log('initial value: ' + $('#Input').val());

    $('#Input').on('change', function () {
        console.log('Input value changed: ' + $(this).val());
        console.log('Current value: ' + $(this).val());
    });

    console.log('current value: ' + $('#Input').val());
});
