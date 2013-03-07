 topvalue = 0;
 textval = 0;

$(document).ready(function() {
    var topvalue = 0;

    
    

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