$.noConflict();
jQuery( document ).ready(function( $ ) {
    $(".inline").click(function () {
    $(".inline").colorbox({inline:true, width:"auto"});
        $("#form1").submit(function() {
            $.ajax({
                type: "post",
                dataType: "",
                url: "/price",
                data: $("#form1").serialize(),
                success: function(response) {
                    var message = "Your price request was successfully sent.";
                    $.fn.colorbox.close();
                    $('.message').html(response);
                }
            });
            return false;
        });
    });
});




