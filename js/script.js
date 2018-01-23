'use strict';
$('#suggests').on('click', function () {
    $('#welcome').hide();
    $('#form').toggle(800);
});
$('#cancel, #send').on('click', function () {
    $('#form').hide();
    $('#welcome').toggle(800);
});
