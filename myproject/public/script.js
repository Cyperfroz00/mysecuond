$(document).ready(function(){
    $('.drop').click(function(){
        $(this).find('img').toggleClass('rotate');
        $(this).find('.drop_item').slideToggle();
    });
    $('body').on('click','#btn-delete',function(){
        var remove_id = $(this).attr('data-remove');
        $('#remove_id').val(remove_id);
    })
});