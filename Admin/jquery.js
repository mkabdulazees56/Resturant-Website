$(function(){

    $('.message-table').hide();

    $('.nav').on('click', 'a', function(){
        $('.nav a.active').removeClass('active');
        $(this).addClass('active');
    })

    $('#booking').click(function(){
        $('.home').show();
        $('.message-table').hide();
    })

    $('#message').click(function(){
        $('.message-table').show();
        $('.home').hide();
    })

    $(".pwd-alert").hide();
    
    $(".btn").click(function (){
        if($(this).val() != $("#newPassword").val()){
            $(".pwd-alert").show();
            $(this).val(null);
        }
        else
            $(".pwd-alert").hide();
    })
    
    $("#rePassword").blur(function (){
        if($(this).val() != $("#newPassword").val()){
            $(".pwd-alert").show();
            $(this).val(null);
        }
        else
            $(".pwd-alert").hide();
    })
})  