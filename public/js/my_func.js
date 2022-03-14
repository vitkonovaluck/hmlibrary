$(document).on('click change keydown keyup', '#dt, #tm ', function () {
    //alert(document.getElementById('dt').value+" "+document.getElementById('tm').value);
    document.getElementById('dttm').value = document.getElementById('dt').value+" "+document.getElementById('tm').value;
});
