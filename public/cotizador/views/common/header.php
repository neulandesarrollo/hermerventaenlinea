<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.0/remodal-default-theme.min.css">

<link rel="stylesheet" href="assets/css/bootstrap_2.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.0/remodal.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.0/remodal.js"></script>

<style>
	body {
	    background: url("assets/img/header/bkg.jpg") repeat-x #000000;
	    background-position: 45% 0%;
	}

	.row {
		margin: 0 auto;
	}

	a.modal-icon img {
	    width: 100%;
	    max-width: 40px;
	}
	/*.header-row {
	    height: auto;
	    padding: 2em 0 0;
	    line-height: normal;
	    text-align: center;
	    background-color: #000;
	    vertical-align: middle;
	}*/
	.mainWrapper div div ul li a {
	    color: #fff;
	}

	
	.header-row div ul li {
		width: 20%;
		float: left;
	    font-size: .8rem;
	    text-rendering: optimizeLegibility;
	    list-style: none;
	    text-align: center;
	}

	.header-row div ul li a {
		text-decoration: none;
	}
	
	.header-row div ul li a:hover {
		color: #00ADEF;
	}

	 .head-btn {
		width: 100%;
		max-width: 166px;		
	 }
	 .right-menu {
	     padding: .8em 0;
	     display: inline-flex;
	     text-align: right;
	 }
	 /*.right-menu {
	 	padding: 1.5em 0;
		display: inline-flex;
	 }*/
	 .hermer-log {
	 	padding: 0;
	 	margin: 0 auto;
	 }
	 .cover-modal {
	     width: 100%;
	     max-width: 600px;
	 }
	 .remodal {
	     max-width: 600px;
	     padding: 0;
	 }
	 .branch-phone {
	     display: inline-table;
	     vertical-align: middle;
	     padding: 2em 1em;
	     line-height: normal;
	     font-size: 1rem;
	 }
	 .branch-phone div {
	     float: left;
	     padding: 0 .5em;
	 }
	 .branch-phone div img {
	     width: 100%;
	     max-width: 25px;
	 }
	 .colxs-12.colsm-9.colmd-4 {
	 	padding: 1.7em 0;
	 }	 	 
	/* Tablets */
	@media (max-width: 767px) {
		.header-row {
		    height: auto;
		    padding: 1em 0;
		    /*line-height: 6;*/
		    text-align: center;
		}
		.slider-link, .model-list {
			margin: 0 auto;
		}
	 }	 
</style>

<div class="header-row row">
	<div class="colxs-12 colsm-3 colmd-3">
		<!-- <a href=""><img src="logo.gif"></a> -->
		<a href="../"><img src="assets/img/header/logo.gif"></a>
	</div>
	<div class="colxs-12 colsm-9 colmd-4">
		<ul class="header-menu">
			<li><a href="../modelos">Modelos</a></li>
			<li><a href="../servicios/mantenimiento">Servicios</a></li>
			<li><a href="../seminuevos">Seminuevos</a></li>
			<li><a href="../agencias">Agencias</a></li>
			<li><a href="../contacto">Contacto</a></li>
			<!-- <li><a href="http://hermer.mx/cotizador/">Cotizador</a></li> -->
		</ul>
	</div>
	<div class="colxs-12 colsm-12 colmd-4 right-menu">
		<figure class="colxs-6 colsm-6 colmd-8 hermer-log">
			<img class="head-btn" src="assets/img/header/logo-hermer.png">			
		</figure>
		<div class="colxs-3 colsm-3 colmd-2">
			<a href="#modal-2" class="modal-icon">
				<img class="head-btn" src="assets/img/header/white-phone.png">
			</a>			
		</div>
		<div class="colxs-3 colsm-3 colmd-2">
			<a href="#modal" class="modal-icon">
				<img class="head-btn" src="assets/img/header/whatsapp.png">
			</a>			
		</div>


		<div class="remodal" data-remodal-id="modal-2" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
		  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
		  <div>		  	
		  	<img class="cover-modal" alt="Llamar" src="assets/img/header/callus.jpg">
			<div>
				<div class="branch-phone">
					<div>
						<h2>Masaryk</h2>
					</div>				
					<div>
						<a href="tel://+525552629860">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 5262 9860</div>
				</div>
				<div class="branch-phone">
					<div>
						<h2>Pedregal</h2>
					</div>				
					<div>
						<a href="tel://+525554810160">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 5481 0160</div>
				</div>
				<div class="branch-phone">
					<div>
						<h2>Polanco</h2>
					</div>				
					<div>
						<a href="tel://+525511011500">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 1101 1500</div>
				</div>				
				<div class="branch-phone">
					<div>
						<h2>Santa Fe</h2>
					</div>				
					<div>
						<a href="tel://+525591770800">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 9177 0800</div>
				</div>				
				<div class="branch-phone">
					<div>
						<h2>Coapa</h2>
					</div>				
					<div>
						<a href="tel://+525554834450">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 5483 4450</div>
				</div>								
				<div class="branch-phone">
					<div>
						<h2>StarClass</h2>
					</div>				
					<div>
						<a href="tel://+525510373580">
							<img alt="Llamar" src="assets/img/header/call-icon.png">						
						</a>					
					</div>	
					<div>(55) 1037 3580</div>
				</div>
			</div>
		  </div>		  
		</div>		
		<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
		  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
		  <div>		  	
		  	<img class="cover-modal" src="assets/img/header/whatsapp-cover.jpg" alt="hermer whatsapp">		    
		  </div>		  
		</div>		
	</div>
</div>
<!-- Hotjar Tracking Code for http://hermer.mx/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:165940,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>