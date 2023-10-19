// alert('hello !!!');

$(document).ready(function(){
    $("#btn-open-add").click(function(){
        // alert(123);
        $('#submit').show(); // display show
        $('#update').hide(); // display none

        $('#id').val('');
        $('#name').val('');
        $('#sex').val('');
        $('#php').val('');
        $('#java').val('');
        $('#python').val('');
    })
    $('body').on('click','#btn-open-update',function(){
        // alert(123);
        $('#update').show();
        $('#submit').hide();

        var id      = $(this).parents('tr').find('td').eq(0).text();
        var name    = $(this).parents('tr').find('td').eq(1).text();
        var sex     = $(this).parents('tr').find('td').eq(2).text();
        var php     = $(this).parents('tr').find('td').eq(3).text();
        var java    = $(this).parents('tr').find('td').eq(4).text();
        var python  = $(this).parents('tr').find('td').eq(5).text();

        $('#id').val(id);
        $('#name').val(name);
        $('#sex').val(sex);
        $('#php').val(php);
        $('#java').val(java);
        $('#python').val(python);
    })
    $('body').on('click','#btn_open_delete',function(){
        var id = $(this).parents('tr').find('td').eq(0).text();
        $('#del_id').val(id);
        
    })
});