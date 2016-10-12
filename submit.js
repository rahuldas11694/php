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
                console.log(data)
                var name = $("#name").val();
                var email = $("#email").val();
                var address = $("#address").val();
                var contact = $("#contact").val();
                var pwd = $("#pwd").val();
                var male = $("#gmale").val();
                var female = $("#gfemale").val();




                // if (name == '' || email == '' || contact == '' || address == '' || pwd=='' ||(male==false || female==false)) {
                //     //$('.nerror').html("enter name");
                //     alert("please fill all fields");
                // } else {
                //     $('#success').html('successful submission');
                //     $('#data').html(data);
                // }


                $('#data').html(data);
                console.log("data sent: success full", "***value is", e, 'data', data);

                //$('#success').html(" successful submission ");
                //$('#success').load('http://www.rahullocal.com/validation_plus_submit.php');

            },
            error: function() {
                console.log("data not sent: unsuccessful");
                $('#success').html('Unsuccessful submission');
            }

        });

    });
