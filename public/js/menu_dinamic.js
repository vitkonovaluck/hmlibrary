function reloadLink($val) {
    var valID = $val.value;

    if(valID){
        jQuery.ajax({
            url:'/admin/select/'+valID.replace(".", "/"),
            type: "GET",
            dataType:"json",
            success:function (data) {
                $('#menu_link').empty();
                $('#menu_link').append('<option value="">-- Без значення --</option>');
                jQuery.each(data,function (key, value) {
                    $('#menu_link').append('<option value="'+key+'">'+value+'</option>');
                })
            }

        })
    }else{
        $('#menu_link').empty();
        $('#menu_link').append('<option value="">-- Без значення --</option>');
    }

}

/*jQuery(document).ready( function(){
    jQuery('select[name="menu_page"]').on('change', function(){
        alert('121');
    });
});
*/
