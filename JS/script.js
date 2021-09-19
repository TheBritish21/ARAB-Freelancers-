
$(document).ready(function (){

    $('#search').keyup(function (){

        var key = $(this).val();       
        
        if(key !=''){
            $.ajax({
                url:'find.php',
                type:'GET',
                data:'K='+key,

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