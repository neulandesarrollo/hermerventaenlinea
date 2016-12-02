<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'views/common/head.php' ?>
        <style>
            .classWrapper div:hover {
                background-color: #FFFFFF;
                cursor: default;
            }
            .classWrapper div a  {
                cursor: default;
            }
            .classImageWrapper {
                display: block;
            }
            #step2B {
                display: inline-block;
                width:100%;
            }
            #step1B, #step3B {
                display: none;
            }

            @media only screen and (min-width : 768px){
                #step1B, #step3B, #step2B
                {
                    display: inline-block;
                    width: 30%;
                }
                .classWrapper {
                	display: inline-block;
            	}
                .classImageWrapper {
                    display: inline-block;
                }
            }
        </style>
    </head>
    <body>
        <div class="mainWrapper">
            <?php include 'views/common/header.php' ?>
            <div class="steps">
                <div class="calcStep" id="step1B">
                    <a href="hermer_calculator.php">1. Selecciona tu modelo</a>
                </div>
                <div class="calcStep stepActive" id="step2B">
                    <span>2. Opciones de financiamiento</span>
                </div>
                <div class="calcStep" id="step3B">
                    <span>3. Tu cotización</span>
                </div>
            </div>
            <div class="contentWrapper">
                <div class="classWrapper">
                    <img src="assets/img/<?php echo urldecode($_GET['des']) ?>.jpg">
                </div>
                <div class="classImageWrapper">
                	<div class="uk-container uk-container-center uk-margin-large-bottom">
                        <div class="uk-grid" data-uk-grid-margin>
                            <form class="uk-form uk-form-horizontal" action="hermer_calculator_step3.php" method="post">
                                <section class="set">
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok"> Modelo</label>
                                        <div class="uk-form-controls">
                                            <?php echo urldecode($_GET['des']) ?>
                                        </div>
                                    </div>
                                </section>
                                <section class="set">
                                    <div class="uk-form-row">
                                        <br><br>
                                        <p id="loader" style="text-align: center;">Cargando datos de la clase<br>
                                        <img class="loader" src="assets/img/loader-2.gif" width="100px" height="100px"></p>
                                    </div>
                                </section>
                    <div id="classData" style="display:none">
                    <section class="set" id="step1">
                        
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="idTipoOk"> Version</label>
                            <div class="uk-form-controls">
                                
                                <select name="idTipo" id="idTipo">
                                    <option value="" disabled="disabled" selected="selected">
                                        Selecciona la versión
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it">Precio</label>
                            <div class="uk-form-controls">
                                <img src="assets/img/Preloader_2.gif" id="preloaderStep2"><span id="priceV"></span>
                            </div>
                        </div>
                    </section>
                    <section class="set" id="step2">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="tipoPersonaOk"> Persona</label>
                            <div class="uk-form-controls">
                                <div class="frie">
                                    
                                </div>
                                <div class="frie">
                                    <input type="radio" id="tipoPersona" name="tipoPersona" value="0"> <label for="form-h-r">Física</label><br>
                                    <input type="radio" id="tipoPersona" name="tipoPersona" value="1"> <label for="form-h-r1">Moral</label>
                                </div>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="tipoFinanciamientoOk"> Tipo crédito</label>
                            <div class="uk-form-controls">
                                
                                <select name="tipoFinanciamiento" id="tipoFinanciamiento">
                                    <option value="" disabled="disabled" selected="selected">
                                        Selecciona el financiamiento
                                    </option>
                                </select>
                                <br><img src="assets/img/Preloader_2.gif" id="preloaderStep3">
                            </div>
                        </div>
                   </section>
                    <section class="set" id="step3">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="idEstadoOk"> Estado</label>
                            <div class="uk-form-controls">
                                
                                <select name="idEstado" id="idEstado">
                                    <option value="" disabled="disabled">
                                        Selecciona el estado
                                    </option>
                                    <option value="1">Aguascalientes</option>
                                    <option value="2">Baja California</option>
                                    <option value="3">Baja California Sur</option>
                                    <option value="4">Campeche</option>
                                    <option value="5">Chiapas</option>
                                    <option value="6">Chuhuahua</option>
                                    <option value="7">Coahuila</option>
                                    <option value="8">Colima</option>
                                    <option value="9" selected="selected">Distrito Federal</option>
                                    <option value="10">Durango</option>
                                    <option value="11">Guanajuato</option>
                                    <option value="12">Guerrero</option>
                                    <option value="13">Hidalgo</option>
                                    <option value="14">Jalisco</option>
                                    <option value="15">México</option>
                                    <option value="16">Michoacán</option>
                                    <option value="17">Morelos</option>
                                    <option value="18">Nayarit</option>
                                    <option value="19">Nuevo León</option>
                                    <option value="20">Oaxaca</option>
                                    <option value="21">Puebla</option>
                                    <option value="22">Querétaro</option>
                                    <option value="23">Quintana Roo</option>
                                    <option value="24">San Luis Potosí</option>
                                    <option value="25">Sinaloa</option>
                                    <option value="26">Sonora</option>
                                    <option value="27">Tabasco</option>
                                    <option value="28">Tamaulipas</option>
                                    <option value="29">Tlaxcala</option>
                                    <option value="30">Veracruz</option>
                                    <option value="31">Yucatán</option>
                                    <option value="32">Zacatecas</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="idPlanOk"> Plan</label>
                            <div class="uk-form-controls">
                                
                                <select name="idPlan" id="idPlan">
                                    <option value="" disabled="" selected="selected">
                                        Selecciona el plan
                                    </option>
                                </select>
                                <br>
                                <img src="assets/img/Preloader_2.gif" id="preloaderStep4">
                            </div>
                        </div>
                    </section>
					<section class="set" id="step4">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"><img src="assets/img/ok.svg" class="ok" id="idTermOk"> Plazo</label>
                            <div class="uk-form-controls">
                                
                                <select name="idTerm" id="idTerm">
                                    <option value="" disabled="disabled" selected="selected">
                                        Selecciona el plazo
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"> <img src="assets/img/ok.svg" class="ok" id="engancheOk">Enganche</label>
                            <div class="uk-form-controls">
                                
                                <span id="engancheV"></span>% <input name="enganche" id="engancheS" type="range" min="" max="" step="1" />
                            </div>
                        </div>
                    </section>
                    <section class="set" id="step5">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="form-h-it"></label>
                            <div class="uk-form-controls">
                                <button class="uk-button" type="submit">Cotizar</button>
                            </div>
                        </div>
                    </section>
                    </div>
                </form>
            </div>
                </div>
            </div>
        </div>
        <?php include 'views/common/footer.php' ?>
        <script>
            $(document).ready(function(){
                
                $(".classWrapper a").click(function(event){
                
                event.preventDefault();
                
                });
                
                // Step 2
                $("#step2 input, #step2 select").attr("disabled", "disabled");
                
                // Step 3
                $("#step3 input, #step3 select").attr("disabled", "disabled");
                
                // Step 4
                $("#step4 input, #step4 select").attr("disabled", "disabled");
                
                $('input[name="tipoPersona"]').change(function(){
                    $("#tipoPersonaOk").hide();
                    $("#tipoPersonaOk").show();
                });
                
                $("#engancheS").mousemove( function(e){
                    $("#engancheV").html($(this).val());
                    $("#engancheOk").show();
                });
                $("#engancheS").change( function(e){
                    $("#engancheV").html($(this).val());
                    $("#engancheOk").show();
                });
                
                $("#idTerm").change(function(){
                    $("#engancheS").attr("min",$(this).find(":selected").data("emin"));
                    $("#engancheS").attr("max",$(this).find(":selected").data("emax"));
                    $("#idTermOk").show();
                });
                
                $("#idTipo").change(function(){
                    $("#idTipoOk").hide();
                    $("#preloaderStep2").fadeIn();
                    $("#priceV").html("");
                    $("#step2 input, #step2 select").attr("disabled", "disabled");
                    $("#step3 input, #step3 select").attr("disabled", "disabled");
                    $("#step4 input, #step4 select").attr("disabled", "disabled");
                    
                    $.ajax({
                      method: "POST",
                      url: "service.php",
                      data: { id: $(this).val(), action: "getPrice" }
                    })
                    .done(function( msg ) {
                        console.log("Response plain:" + msg);
                        
                        var obj = JSON.parse(msg);
                        
                        console.log(obj);
                        
                        $("#priceV").html(obj.precioUnidad_formatoMoneda);
                        $("#preloaderStep2").fadeOut();
                        $("#idTipoOk").show();
                        
                        $("#step2 input, #step2 select").removeAttr("disabled");
                    }); 
                });
                
                
                $("#tipoFinanciamiento").change(function(){
                    

                    $("#tipoFinanciamientoOk").hide();
                    $("#preloaderStep3").fadeIn();
                    $("#step3 input, #step3 select").attr("disabled", "disabled");
                    
                    console.log("----------------------------------");
                    console.log($("#idTipo").val());
                    console.log($('input[name="tipoPersona"]:checked').val());
                    console.log($(this).val());
                    console.log("----------------------------------");
                    
                    $.ajax({
                      method: "POST",
                      url: "service.php",
                      data: { idTipo: $("#idTipo").val(), tipoPersona: $('input[name="tipoPersona"]:checked').val(), tipoFinanciamiento: $(this).val(), action: "getPlans" }
                    })
                    .done(function( msg ) {
                        console.log("Response plan:" + msg);
                        
                        var obj = JSON.parse(msg);
                        
                        $("#idPlan .planOpt").remove();
                        if(Array.isArray(obj.PlanCotizador))
                        {
                            for(var i=0; i != obj.PlanCotizador.length; i++)
                            {
                                $("#idPlan").append('<option class="planOpt" value="'+ obj.PlanCotizador[i].id +'">'+ obj.PlanCotizador[i].descripcion +'</option>');
                            }
                        }
                        else{
                            $("#idPlan").append('<option class="planOpt" value="'+ obj.PlanCotizador.id +'">'+ obj.PlanCotizador.descripcion +'</option>');

                        }

                        $("#preloaderStep3").fadeOut();
                        $("#tipoFinanciamientoOk").show();
                        $("#step3 input, #step3 select").removeAttr("disabled");

                    }); 
                });
                
                $("#idPlan").change(function(){

                    $("#idPlanOk").hide();
                    $("#preloaderStep4").fadeIn();
                    $("#step4 input, #step4 select").attr("disabled", "disabled");
                    
                    $.ajax({
                      method: "POST",
                      url: "service.php",
                      data: { idPlan:$(this).val(), action: "getTerms" }
                    })
                    .done(function( msg ) {
                        console.log("Response plain:" + msg);
                        
                        var obj = JSON.parse(msg);
                        
                        console.log(obj);
                        
                        $("#idTerm .termOpt").remove();
                        for(var i=0; i != obj.plazoCotizacion.length; i++)
                        {
                            $("#idTerm").append('<option class="termOpt" data-emin="'+ obj.plazoCotizacion[i].sengancheMin.substr(0,obj.plazoCotizacion[i].sengancheMin.length-1) +'" data-emax="'+ obj.plazoCotizacion[i].sengancheMax.substr(0,obj.plazoCotizacion[i].sengancheMax.length-1) +'" value="'+ obj.plazoCotizacion[i].mesFinal.valor +'">'+ obj.plazoCotizacion[i].mesFinal.valor +' meses</option>');
                        }
                        
                        $("#preloaderStep4").fadeOut();
                        $("#idPlanOk").show();
                        $("#step4 input, #step4 select").removeAttr("disabled");

                    }); 
                });
                
                var request = $.post('service.php', { action: 'getData' });

                request.done(function(response) {

                    $('#classData').show();
                    $('#loader').hide();

                    var data = JSON.parse(response);

                    console.log(data.ModeloCotizador);

                    // Versiones
                    var version = '';

                    $.each(data.ModeloCotizador, function(index, value) {
                       
                        if (value.id == <?php echo $_GET['id'] ?>) {
                                
                            $.each(value.lstTipoBO, function(index, value) {
                                version += '<option value="' + value.id + '">';
                                version += value.descripcion;
                                version += '</option>';
                                });
                        }

                       

                    });

                    $('#idTipo').append(version);
                });

                request.fail(function(data) {
                    alert('¡Ups! Ocurrio un error');
                });
							
								$.ajax({
                      method: "POST",
                      url: "service.php",
                      data: { action: "getFinancings" }
                    })
                    .done(function(response) {
									
												var data = JSON.parse(response);
												var options = '';
									
												 $.each(data.tipoFinanciamiento, function(index, value) {
                        		options += '<option value="' + value.id + '">';
                        		options += value.nombre;
                       			options += '</option>';
												 });
									
													$('#tipoFinanciamiento').append(options);
                    }); 
            
            });
        
        </script>
    </body>
</html>