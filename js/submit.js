console.log("jquery ajax php");
$('#form_sub').submit(function(e))
{
	console.log("jquery ajax php");
	e.preventDefault();
    
    $.ajax(
         {
           url:'validation_plus_submit',
           type: 'post',
           data:$(this).serialize(),
           datatype:'html',

           success:function(value)
           {
           	console.log("data sent: success full","***value is",value)
           	$('#success').html(" successful submission ")
           },
           error:function()
           {
           	console.log("data not sent: unsuccessful");
           	$('#success').html('Unsuccessful submission')
           }

         });





   


});