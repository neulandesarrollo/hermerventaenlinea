<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'views/common/head.php' ?>        
    </head>
    <body>
        <div class="mainWrapper">
            <?php include 'views/common/header.php' ?>
            <?php include 'views/common/header_2.php' ?>
            <div class="steps">
                <div class="calcStep stepActive" id="step1B">
                    <span>1. Selecciona tu modelo</span>
                </div>
                <div class="calcStep" id="step2B">
                    <span>2. Opciones de financiamiento</span>
                </div>
                <div class="calcStep" id="step3B">
                    <span>3. Tu cotización</span>
                </div>
            </div>
            <div class="contentWrapper">
                <div class="classWrapper">
                      <span class="loader-message">Buscando clases</span>
                      <!-- <img class="loader" src="assets/img/ajax-loader.gif" alt=""> -->
                      <img class="loader" src="assets/img/loader.gif" alt="" width="100px" height="100px">
                </div>
                <div class="classImageWrapper">
                    <img src="assets/img/ClaseA.jpg" class="classImage" width="546" height="298" style="display: block; max-width: 100%; height: auto;">
                </div>
            </div>  
            <?php include 'views/common/footer.php' ?>
        </div>
        <script>
            $(function(){

                setTimeout(function() {
                    $('.loader-message').html('Actualizando clases...');
                },5000);
              
                $(document).on('mouseover', ".classWrapper div", function(){
                    console.log("assets/img/" + $(this).children("a").html() + ".jpg");
                    $(".classImage").attr("src", "assets/img/" + $(this).children("a").data("ima") + ".jpg");
                });

                var request = $.post('service.php', { action: 'getData' });

                request.done(function(response) {

                    var data = JSON.parse(response);

                    console.log(data.ModeloCotizador);

                    var html = '';

                    $.each(data.ModeloCotizador, function(index, value) {
                        
                        html += '<div>';
                        html += '<a href="hermer_calculator_step2.php?id=' + value.id + '&des=' + value.descripcion + '" data-ima="' + value.descripcion + '">' + value.descripcion + '</a>';
                        html += '</div>';

                    });

                    $('.classWrapper').html(html);
                });

                request.fail(function(data) {
                    alert('¡Ups! Ocurrio un error');
                });
            
            });  
        </script>
    </body>
</html>

$.ajax({
        type: "GET",
        url: "assets/json/items.json.txt",
        dataType: 'json',
        success: function(s)
        {
            console.log(s);
            createHomepageGoogleMap(_latitude,_longitude,s);
        }
    });

