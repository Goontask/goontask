/**
 * Created by Aleksey on 08.04.14.
 */
$(document).ready(function () {
    $('.ajax').click(function(event){
        event.preventDefault();
        link = $(this).attr('data-href');
        content_block = $(this).attr('href');
        $.get(link, {}, function(data){
            $(content_block).html(data);
        })
    });

    $(document).on('click', '.ajax-submit', function(event){
        event.preventDefault();
        link = $(this).parents('form').attr('action')
        $.get(link, $(this).parents('form').serialize(), function(data){
            $('#myModal').html(data);
        });
    });

    $('.add-input').click(function(){
        input = $(this).parents('.input-group').find('input.form-control').clone();
        $(this).parents('.input-group').before(input);
    });

});

