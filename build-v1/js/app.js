/**
 * Created by Lachlan on 12/21/2016.
 */

/**
 * DASHBOARD JS
 * */
$(function() {

    $.get('dashboard/xhrGetListings', function(o) {

        for (var i = 0; i < o.length; i++)
        {
            $('#listInserts').append('<div>' + o[i].text + '<a class="del" rel="'+o[i].id+'" href="#">X</a></div>');
        }

        $('body').on('click', '.del', function () {
            delItem = $(this);
            var id = $(this).attr('rel');
            location.reload();
            $.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
                delItem.parent().remove();
            }, 'json');
            return false;
        });

    }, 'json');



    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o) {
            $('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">X</a></div>');
        }, 'json');


        return false;
    });

});