
function setMenu(){
                var pathname = window.location.pathname;
                console.log(pathname);
                switch(pathname){
                  case '/hermer/': 
                    $("#uno").addClass('activo'); 
                  break;

                  case '/hermer/index.php': 
                    $("#uno").addClass('activo');
                  break;

                  case '/hermer/2.php': 
                    $("#dos").addClass('activo');
                    $("#true_1").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                  break;  

                  case '/hermer/3.php': 
                    $("#tres").addClass('activo'); 
                    $("#true_1").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                    $("#true_2").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                  break;  

                  case '/hermer/4.php': 
                  	$("#cuatro").addClass('activo');
                    $("#true_1").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                    $("#true_2").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                    $("#true_3").html('<div class="normal"><i class="fa fa-check" aria-hidden="true"></i></div>');
                  break;        
                }
}

setMenu();
