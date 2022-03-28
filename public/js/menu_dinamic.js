function reloadLink($val,$id) {
    var valID = $val.value;

     var urls='/admin/select/'+valID.replace(".", "/");
         urls= urls +'?id='+$id;
    console.log(urls);
    if(valID){
        $('#link').empty();
        jQuery.ajax({
            url:'/admin/select/'+valID.replace(".", "/")+'?id='+$id,
            type: "GET",
            dataType:"json",
            success:function (data) {
                console.log(data);
                $('#link').append('<option value="">-- Без значення --</option>');
                jQuery.each(data,function (key, value) {
                    $('#link').append('<option value="'+key+'">'+value+'</option>');
                })
            }

        })
    }else{
        $('#link').empty();
        $('#link').append('<option value="">-- Без значення --</option>');
    }

}

/*jQuery(document).ready( function(){
    jQuery('select[name="menu_page"]').on('change', function(){
        alert('121');
    });
});
*/
