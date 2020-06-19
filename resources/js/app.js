require('./bootstrap');

$(document).ready(function () {

    $('.js_cities_select').change(function () {
        if ($(this).val() != '') {
            var select = $(this).attr("id");
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/cities/getAreasByCityAjax",
                method: "POST",
                data: {select: select, value: value, _token: _token},
                success: function (data) {
                    $('.js_areas_select').find('option').remove();
                    $.each(data, function (index, value) {
                        $('.js_areas_select').append('<option value="' + value.id + '">' + value.name + '</option>')
                    });
                }
            })
        } else {
            $('.js_areas_select').find('option').remove();
        }
    });

    $(".js_delete_address_btn").click(function deleteAddress() {
        var id = $(this).attr('data-id');
        var _token = $('input[name="_token"]').val();
        var div = $(this).parent().parent();
        $.ajax({
            url: "/address/destroy",
            method: "DELETE",
            data: {id: id, _token: _token},
            success: function (data) {
                div.remove();
            }
        })
    });
});
