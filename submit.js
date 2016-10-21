
$('#form_sub').submit(function(e)

    {
        console.log("jquery ajax php");
        e.preventDefault();

        $.ajax({
            url: 'vali.php',
            type: 'post',
            data: $('#form_sub').serialize(),

            datatype: 'json',

            success: function(data) {

               //console.log("length og data",data.message.length);
                                      $("#success").html("");
              if((data.message.length)!==null)
              {
                len=  data.message.length; //  JSON.parse(data); 
                console.log(len)
                var i;
                if(!(data.Response))
                  {
                     for(i=0;i<len;i++)
                     {
                      $("#success").append(data.message[i].ErrorMessage+"<br>")
                     // $("#success1").html(data.message[i].ErrorMessage)

                      console.log(data.message[i].ErrorMessage,"response made true to show all the ErrorMessages");
                     }
                    console.log(data.message[0].ErrorMessage,"response made true to show all the ErrorMessages");
                 //this.error();
                 //console.log("@@@@@@@@@@@@@@@@@@",data[i].ErrorMessage[i]);
                }

             }
//else{this.error();}
              

                 
                console.log("data sent: success full", "***value is", 'data',data);
                console.log("callinfg php fun")


            },
            error: function() {

                console.log("data not sent: unsuccessful somethigs missing");
                $('#success').html('Unsuccessful submission');
                return;
            }

        });

    });
                

