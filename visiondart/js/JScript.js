

 topvalue = 0;
 textval = 0;

$(document).ready(function() {


 
var topvalue = 0;
$('#p1').hide();



$("#user_name,#password").mouseover( function(){
if($(this).val() == "Invalid")  {
$(this).css("background-color","white");
$(this).css({"color":"black"});
$(this).val("");
}



});


$("#contact_suggestion,#contact_email,#contact_name").mouseover( function(){
if($(this).val() == "Invalid")  {
$(this).css("background-color","white");
$(this).css({"color":"black"});
$(this).val("");
}
});


  /*  $("#reg_user_name")

                        $("#reg_password")

                        $("#reg_confirm_password")

                        $("#reg_first_name")

                        $("#reg_last_name")

                        $("#reg_email")

                        $("#reg_address")

                        $("#reg_phone")

                        $("#reg_dob")

                        $("#reg_age")
                      */


// - -------------------------------------------start of code for top window-------------------------------    

    $('.top').hide();
      $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
            $('.top').fadeIn();
        }   else { $('.top').fadeOut(); }
    });
    $('.top a').click(function () {
        $('body,html').animate({ scrollTop: 0
        }, 1000);
    });
    
    

    $('dd').filter(':nth-child(n+4)').hide();
    $('dt').click(function() {
        $(this).next().slideDown(200).fadeOut('fast').fadeIn('fast').siblings('dd').slideUp(200);
    });
});

// - -------------------------------------------End of code for top window-------------------------------    







// - -------------------------------------------start of code for slider-------------------------------


function slideImage1() {
        if (topvalue < -2400) {
            topvalue = 0;
        } else {
            $("#slider1").animate({
                top: topvalue
            }, 1500).fadeOut("fast").fadeIn("slow");
            topvalue = topvalue - 450;
        }
  switch (textval){

            case 0:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We allow users to share articles with other members who share a common interest in a topic. Join a group to submit topical articles that other members would be interested in.") ; 
            textval=1;
            break;
             case 1:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("A social network site isn't very social without the ability to communicate with each other. We included a private messaging module with Pligg, so that you can send your friends a message that they can respond to.") ; 
            textval=2;
            break; 
             case 2:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("Each user that signs up on a Pligg site gets their own profile page where they can change their settings, send personal messages, add an avatar, make friends and other great features.") ; 
            textval=3;
            break;           
             case 3:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We've done our best to help drive more traffic to your site by being as search engine friendly as possible. Our SEO methods will help get your site indexed faster and more often.") ; 
            textval=5;
            break;  


             
             case 5:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We're big fans of using RSS feeds to follow the latest news from our favorite sites and that's why we have added RSS functionality all over Pligg. You can subscribe to a user's voting trends, the front page, upcoming page and categories.") ; 
            textval=6;
            break;  

            case 6:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("We use the Smarty template system to keep our code separate from the design. This makes updating your site to the latest version of Pligg easier, and designing new templates a breeze. View free templates listed on the forum.") ; 
            textval=7;
            break;  

            case 7:
         
            $('.slidertopdiv p').fadeOut("slow").delay(1000).fadeIn("slow").html("A social network site isn't very social without the ability to communicate with each other. We included a private messaging module with Pligg, so that you can send your friends a message that they can respond to.") ; 
            textval=0;
            break;  
}
    }
    setInterval("slideImage1()", 5000);


// - -------------------------------------------End of code for slider-------------------------------
  






// - ------------------------------------------- start validate login/varify authenticaion ajax -------------------------------    


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
            url: 'model/index.php',                        
            data: "user_name="+user_name+"&password="+password+"",                       
             beforeSend: function() {
             
    
              },
             success: function(data){
           //   $('#p1').html().remove().html(data);
            //$('#p1').text(data).hide().fadeIn("3000");
           alert(data);
           if ($.trim(data) == 'You are not logged in'){

            $('#p1').text("You are not logged in").hide().fadeIn("3000");
          } else {
          window.location.href = "./index.php?function=loadDasboard";
          }  
            
              },
              complete: function () {
            
              },
              error: function() {
              }
          });
}
}


// - ------------------------------------------- End validate login/varify authenticaion ajax-------------------------------    
function register () {
                 reg_user_name    =   $("#reg_user_name").val();

                  reg_password    =  $("#reg_password").val();

                   reg_confirm_password   =  $("#reg_confirm_password").val();

                      reg_first_name = $("#reg_first_name").val();

                    reg_last_name  =  $("#reg_last_name").val();

                     reg_email  = $("#reg_email").val();

                 reg_address   =    $("#reg_address").val();

                  reg_phone    =  $("#reg_phone").val();

                   reg_dob    = $("#reg_dob").val();

                      reg_age  =$("#reg_age").val();
                      alert(reg_age);

}



function validatecontact () {



contact_name = $('#contact_name').val();
contact_suggestion = $('#contact_suggestion').val(); 
contact_email = $('#contact_email').val(); 

if (contact_name == "" || contact_name ==null){
     $('#contact_name').css("background-color","#FF0000").val("Invalid").css({"opacity":"0.5","color":"white"});;

}
 if (contact_suggestion== "" || contact_suggestion ==null) {
    $('#contact_suggestion').css("background-color","#FF0000").val("Invalid").css({"opacity":"0.5","color":"white"});;

}else
{

}
 if (contact_email== "" || contact_email ==null) {
     $('#contact_email').css("background-color","#FF0000").val("Invalid").css({"opacity":"0.5","color":"white"});;
}else
{

}



}
