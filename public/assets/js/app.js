$(document).ready(function(){
    $('#search-form').submit(function(e){
        e.preventDefault();

        var customer = $('#customer-name').val();

        $.ajax({
            url: '/home/search',
            method: 'POST',
            data: {
                customer_name : customer
            },
            success: function (data){
                $('#result').html(data);
            }
        });
    });
});