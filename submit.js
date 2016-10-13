console.log("jquery ajax php");
$('#form_sub').submit(function(e)

    {

        // var name = $("#name").val();
        // if(name=='')
        // {
        //   alert("please fill all fields");
        // }

        console.log("jquery ajax php");
        e.preventDefault();

        $.ajax({
            url: 'validation_plus_submit.php',
            type: 'post',
            data: $('#form_sub').serialize(),

            datatype: 'json',

            success: function(data) {
                $('#data').html(data);
                console.log("data sent: success full", "***value is",'data',data);
                console.log("callinfg php fun")
                

                
                //$('#success').html(" successful submission ");
                //$('#success').load('http://www.rahullocal.com/validation_plus_submit.php');

            },
            error: function() {
                console.log("data not sent: unsuccessful");
                $('#success').html('Unsuccessful submission');
            }

        });

    });
