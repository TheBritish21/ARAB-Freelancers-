function checkPassword()
{
var pass = document.getElementById("password").value,
confirm = document.getElementById("confirm password").value;

    if(pass != confirm)
    {
        var msg = "Password and Confirm Password Doesn't match.";
        document.getElementById("error").innerHTML = msg;
    }


}


function clearTxt()
{
    var elements = document.getElementsByTagName("input")
    for( var el = 0; el < elements.length; el++){
        if(elements[el].type == 'text' || elemnts[el].type == 'password' ||
        elements[el].type =='email'){
            elemnts[el].value = '';
        }

    }


}


$(document).ready(function (){

    $('button').click(function (){
        var mail = $("#email").val();

        if(mail == ''){
            $('#emailMsg').fadeIn(3000).html('Please use a working email address.').delay(1000).fadeOut(2000);
        }


    })

});


$(Document).ready(function (){
    $('.message').animate({
        right: '10px',
    } , 2000 , function (){
        $(this).delay(2000).fadeOut(1000);
    });
});


//manage users search
$(document).ready(function (){

    $('#find').keyup(function (){
        var key = $(this).val();
        if(key !=''){
            //Request
            $.ajax({
                url:'search.php', 
                type:'GET' ,
                data:'K='+key ,

                //response
                success:function (show){
                    $('.result').show();
                    $('.result').html(show);
                } 

            }); 
         
        }else{
            $('.result').hide();
        }
    });
});

//freelancers search
$(document).ready(function (){
    $('#free').change(function (){

        var fid = $(this).val();

        $.ajax({
            url:'show-freelancer.php',
            type:'GET',
            data:'ID='+fid,

            success:function(response){
                $('.result').show();
                $('.result').html(response);
            }

        });
       
        

    });

});
