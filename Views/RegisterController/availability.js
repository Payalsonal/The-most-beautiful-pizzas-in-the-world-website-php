$(document).ready(function(){
    $('#userName').blur(function(){

        var userName = $(this).val();

        $.ajax({
            url:"http://localhost/?page=availabilityName",
            method:"POST",
            data:{user_name:userName},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#warning').html('Nazwa użytkownika zajęta');
                    $('#register').attr("disabled", true);
                }
                else
                {
                    $('#warning').html('Nazwa użytkownika wolna');
                    $('#register').attr("disabled", false);
                }
            }
        })

    });
});