<dt>LOGIN</dt>

        <dd>
            <div class=" val">

                <label class="label1">UserName <input id="user_name" name="user_name" type=
                    "text" /></label>
                    
                    <label class="label1">Password <input id="password" name="password" type="text" />
                      
                    </label>
                    <label class="label1" style="color:red"></label>
                                
              <input id="b1"  type="button" value=
                "Login"  onclick="checklogin()" />
                <span><label> <p id="p1"><p></label>


                </span>
            </div>

            
                <div class="para"></div>
        </dd>
        <style type="text/css">


        </style>

<script type="text/javascript">
i=0;
$("#user_name,#password").mouseover( function(){
if($(this).val() == "Invalid")  {
$(this).css("background-color","white");
$("#user_name").css({"color":"black"});
$("#password").css({"color":"black"});
$(this).val("");
}
else
{
$(this).css("background-color","white");
$("#user_name").css({"color":"black"});
$("#password").css({"color":"black"});
}
});


function checklogin(){

 user_name = $('#user_name').val();
 password = $('#password').val(); 


if ((user_name == "" && password =="") ||(user_name == null && password ==null) ) { 
$("#user_name").css("background-color","#FF0000");
i=0;
$("#password").css("background-color","#FF0000");
$("#user_name").val("Invalid").css({"opacity":"0.5","color":"white"});
$("#password").val("Invalid").css({"opacity":"0.5","color":"white"});
}

else
{  
    $.ajax({ 
            type: "GET",
            url: 'view/index.php',                        
            data: "user_name="+user_name+"&password="+password+"",                       
             beforeSend: function() {
            
    
              },
             success: function(data){
           //   $('#p1').html().remove().html(data);
            $('#p1').text(data).hide().fadeIn("3000");

            
            
              },
              complete: function () {
            
              },
              error: function() {
              }
          });
}
}
</script>