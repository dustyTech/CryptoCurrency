

  function move_bank(transfer_code,amt,url_bank,meth,user_id,wallet_balance,ba_na,an,ac_number,ro_no) {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 60);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';

      // start first check
      if(width == 50){
        clearInterval(id);

        // alert('onaga');
        swal({
          text: 'Enter Transfer Code',
          content: "input",
          icon: "warning",
          button: true,
        })
        .then((value) =>{
          if(value != transfer_code){
            swal({
              title: "Error",
              text: "Incorrect Transfer code",
              icon: "error"
            }); //end swal
            
          }else{
            $.ajax({
                type: "POST",
                url: url_bank,  
                data: {amt: amt,transfer_code:transfer_code,meth:meth,user_id:user_id,wallet_balance:wallet_balance,ba_na:ba_na,an:an,ac_number:ac_number,ro_no:ro_no},
                success: function(data,request,setting){
                   $('#submit').prop('disabled',true);
                   // alert(data);
                   if(data == "errorbal"){
                      document.getElementById("errorbal").style.display = "block"; // this will show the alert success
                    }
                    if(data == "errorCode"){
                      document.getElementById("failed").style.display = "block"; // this will show the alert success
                    }
                     if(data == "success"){
                      // alert("it worked");
                       var elem = document.getElementById("myBar");   
                       var id = setInterval(frame, 60);
                    }
                    // exit();
                  

                   setTimeout(function(){// wait for 20 secs(2)
                       location.reload(); // then reload the page.(3)
                  }, 15000); 

                },
                beforeSend: function(data,request,setting){
                  document.getElementById("pw").style.display = "block"; // this will hide the progress bar
                }
              });  //end ajax for bit coin 
          

            // checking for the other sort code
         



          } //end if
        }); //end of then
      } //end width = 20
      if( width == 100){
          document.getElementById("pro_hide").style.display = "none"; // this will hide the progress bar
          document.getElementById("pw").style.display = "none"; // this will hide the progress bar
          document.getElementById("success").style.display = "block"; // this will show the alert success
          
            
          }

     
    
      // end first section
    }
  }


} //end function move