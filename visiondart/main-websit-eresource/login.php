<?php 
  $err = "";
  if (isset($_GET['id'])){
    $err = $_GET['id'];
  }
 ?>
<dt>LOGIN</dt>

        <dd>
            <div class=" val">

                <label class="label1">UserName <input id="user_name" name="user_name" type=
                    "text" /></label>
                    
                    <label class="label1">Password <input id="password" name="password" type="text" />
                      
                    </label>
                    <label class="label1" style="color:red"></label>
                                
              <input id="b1"  type="button" value=
                "Login"  onclick="checklogin()"/>
                <span><label> <p id="p1"><p></label>


                </span>
            </div>

            
                <div class="para"></div>
        </dd>

<script type="text/javascript">
function checklogin(){

 user_name = $('#user_name').val();
   
    password = $('#password').val(); 
   
    $.ajax({ 
            type: "GET",
            url: 'view/index.php',                        
            data: "user_name="+user_name+"&password="+password+"",                       
             beforeSend: function() {
            
    
              },
             success: function(data){
           //   $('#p1').html().remove().html(data);
            $('#p1').text(data);

            
            
              },
              complete: function () {
            
              },
              error: function() {
              }
          });
}
</script>