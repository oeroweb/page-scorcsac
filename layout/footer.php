<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="w100 container-wrap justify-content-center">
			<div class="aniview" data-av-animation="fadeInUp">
				<p class="footer-text">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados  <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="http://www.scorcsac.com">Scorcsac</a> </p>				
			</div>
		</div>		
	</footer>

	<div class="btnWhatsapp">
		<div class="popup-what" id="popup-what">
			<div class="box1 container-wrap">
				<div class="box-ico ">
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="box-text w80">
					<span class="bold">¿Qué tipo de servicios necesitas?</span>
					<!-- <p>Escribebenos </p> -->
				</div>
			</div>
			<div class="box2">
				<a href="https://api.whatsapp.com/send?phone=51912502161&text= Solicito%20información%20sobre%20tus%20servicios%20Gracias." target="_blank"> 
					<div class="container-wrap">
						<!-- <i class="fa fa-whatsapp w10 green"></i>  -->
						<span class="w80"> CONSORCIO SCORC SAC <br> <span class="gris">Scorcsac</span> </span>
						<i class="fab fa-whatsapp"></i>
					</div>				
				</a>
			</div>
		</div>
		<!-- <span class="text-whatsapp" id="text-whatsapp"></span> -->
		<span class="ico-whatsapp" id="ico-whatsapp">
			<i class="fab fa-whatsapp"></i>		
		</span>
	</div> 

	<span class="ir-arriba" title="Subir"><i class="fa fa-chevron-up"></i></span>	
	<!--================End Footer Area =================-->
	<script type="text/javascript">
	 	const currentLocation = location.href;
    const menuItem = document.querySelectorAll(".nav-link");
    const menuLenght = menuItem.length
    for (let i = 0; i < menuLenght; i++) {
        if (menuItem[i].href === currentLocation) {
            // menuItem[i].className = "active"
            menuItem[i].classList.add("active");
        }
			}	
	</script>

	<!-- MY STYLES -->
	<script src="assets/js/jquery.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/scorcsacquery.js"></script>
	<script src="assets/js/jquery.aniview.js"></script>
	<script src="assets/js/square.min.js"></script>