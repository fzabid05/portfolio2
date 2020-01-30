

// menu ---------------------------------

  (function(){
    const burger = document.querySelector(".burger");
    burger.onclick = function()
    {
      const menu = document.querySelector(".menu");
      
      if(menu.dataset.etat == "open") // si le menu est ouvert => fermer
      {
        menu.classList.add("open");
        menu.dataset.etat = "close";
      }
      else
      {
        
        menu.classList.remove("open") ;
        menu.dataset.etat = "open";
      }
    }
  })();

  
// ------------------------------------ Animation des titres au scroll --------------

(function() {

  var elements = document.querySelectorAll(".js-textAnim");

  

  var animTitles = function() {
    elements.forEach(function(element) {

      var positionElement = element.offsetTop;
      var heightElement = element.offsetHeight;

      if (document.documentElement.scrollTop > (positionElement - window.innerHeight + heightElement)) {
        element.style.transform = "translateY(0em)";
      }
    });
  };

  // écoute
  window.addEventListener("scroll", animTitles);

})();




 //  ------------------------------------ competences -----------------------------
 //

  $(".competence-box li").on("click",function(event){
    
    $(this).css({
      "boxShadow" : "13px 17px 23px -1px rgba(0,0,0,0.75)",
      "letterSpacing" : "0.3vw",
      "transition" : "all 2s"
    })
 
     
     
     var numLi = $(".competence-box li").index(event.currentTarget);
     console.log("ma li no",numLi);

    $(".competence-box article").removeClass(".competence-box active");
    $(".competence-box article").eq(numLi).addClass(".competence-box active");
     
    $(".competence-box li").removeClass("o1");
    $(".competence-box li").eq(numLi).addClass("o1");
   })  

   //  //
    //  ------------------------------------ nav ------------------------------
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll < 100) {
      $("nav.menu-fixe").css("background" , "rgba(255, 255, 255, 0.1)");
    }

    else{
      $("nav.menu-fixe").css("background" , "white");  	
    }
    
  })
//})
   // ----------------------------------- go to top  ------------------------------------
  
   //$(document).ready(function(){

    $(window).scroll(function(){
      if($(this).scrollTop() > 40){
        $('#topBtn').fadeIn();
      } else{
        $('#topBtn').fadeOut();
      }
    });
    
    $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 0},800);
    });
    $('h1, header h2')
    .mouseover(function(){
        $(this).css({
            "letter-spacing" : "10px",
            "transition" : "all 2s",
            "color" : "oranged"
        });
    })
    .mouseout(function(){
        $(this).css({
            "letter-spacing" : "2px",
            "transition" : "all 2s",
            "color" : "black"
        });
    });
    });

   