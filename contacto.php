<?php  include 'layout/header.php' ?>	

<?php
  $errores = "";  
	$destino ="ventas@scorcsac.com";  
	$titulo = 'Solicitan nuevo cotización';
	// $destino .='contacto@oeroweb.com' . ', ';    

	if($_POST){
		if (!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) ){ 
			
			$nombre = $_POST['nombre'];
			$ruc = isset($_POST['ruc']) ? $_POST['ruc'] : 0;
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];      
			$mensaje = $_POST['mensaje'];

			if (!is_string($nombre)) {      
				$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
				$errores = "<i class='fa fa-thumbs-down'></i> Por favor agregar un nombre o empresa <br />" ;
			}

			if ($nombre == 'Crytogor' and $nombre == 'Crytogorgor' ) {      
				$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
				$errores = "<i class='fa fa-thumbs-down'></i> Hubo un Error!! <br />" ;
			} 
		
			if (!empty($correo)) {
				$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
				$errores .= "<i class='fa fa-thumbs-down'></i> Por favor agregar un correo <br />";          
			}

			if (!is_string($ruc)) {    
				$ruc = filter_var($ruc, FILTER_SANITIZE_NUMBER_INT);  				
				$errores = "<i class='fa fa-thumbs-down'></i> Por favor agregar un número de ruc valido <br />";
			}                                         

			if($ruc == 'Crytogor'){
				$ruc = filter_var($ruc, FILTER_SANITIZE_NUMBER_INT);
				$errores = "<i class='fa fa-thumbs-down'></i> Por favor agregar un número de ruc valido  <br />";
			}
			
			if(!empty($telefono)){
				$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
				$errores = "<i class='fa fa-thumbs-down'></i> Por favor agregar un telefono <br />";
			}

			if (!empty($mensaje)) {      
				$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
				$errores = "<i class='fa fa-thumbs-down'></i> Por favor agregar un mensaje <br />";
			}				
		
		$contenido = '
		<html>
		<head>
			<title> '. $titulo . '</title>
		</head>
		<body>
			<h2 style="color:#002060">Nueva Cotización Recibida</h2><hr><p>Nombre de la Empresa  o usuario <strong> '. $nombre. '</strong> su correo es <strong>' . $correo . '</strong> y número de teléfono '. $telefono.'.</p><p> Ruc <strong>' . $ruc . '</strong></p> <p> Su mensaje es : </p><p><i> ' . $mensaje .'</i></p><hr><p> Correo recibido desde la página web.</p>
		</body>
		</html>
		';
		
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras .= "From: Ventas - Scorcsac <ventas@scorcsac.com>\r\n";
		
		mail($destino, $titulo, $contenido, $cabeceras);

		$errores = "<i class='fa fa-thumbs-up'></i> Tu mensaje se envio correctactamente.";
		
		$nombre = ""; $ruc = ""; $telefono = ""; $correo = "";  $mensaje = "";
		}else{
			$errores = '<i class="fa fa-thumbs-down"></i> Por favor llenar todos los campos';
		} 
	}else{
		$errores = "";
	} 
?>

<section class="header_area">		
	<?php include 'layout/navbar.php' ?>	
	<img src=assets/img/bg/bg-contacto.jpg alt="" class="img-header-area height300">
	<div class="box_texto">
		<h2>Contacto</h2>
	</div>		
</section>

<section class="contacto_area" id="contacto_area">
	<div class="center">
		<div class="box-datos-inner">				
			<div class="aniview" data-av-animation="fadeInUp">
				<h4 class="titulo">DATOS DE CONTACTO</h4>
				<p class="p1">Recibimos todas tus consultas y las atendemos en menos de 24 horas</p>
				<div class="content-box-datos">			
					<div class="item-box-datos">
						<div class="container-wrap align-items-center">
							<i class="ico fas fa-phone"></i>
							<a href="tel:+515964811">
								<div class="box-datos container-wrap">
									<strong>Teléfono:</strong>
									<span>+51 596 4811</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item-box-datos">
						<div class="container-wrap align-items-center">
							<i class="ico fas fa-mobile"></i>
							<a href="tel:+51912502161">
								<div class="box-datos container-wrap">
									<strong>Movil:</strong>
									<span>912 502 161</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item-box-datos">
						<div class="container-wrap align-items-center ">
							<i class="ico fab fa-whatsapp"></i>
							<a href="https://api.whatsapp.com/send?phone=51912502161&text= Solicito%20información%20sobre%20tus%20servicios%20Gracias." target="_blank"> 
								<div class="box-datos container-wrap">
									<strong>WhatsApp:</strong>
									<span>912 502 161</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item-box-datos">
						<div class="container-wrap align-items-center ">
							<i class="ico fas fa-envelope"></i>	
							<a href="mailto:ventas@scorcsac.com">
								<div class="box-datos container-wrap">
									<strong>Correo:</strong>
									<span>ventas@scorcsac.com</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item-box-datos">
						<div class="container-wrap align-items-center">
							<strong class="w100">Nuestras Redes:</strong>
							<div class="box-datos container-wrap">
							<a href="https://www.facebook.com/scorcsac/"><i class="ico fab fa-facebook"></i> </a>
							<a href="https://www.linkedin.com/company//"><i class="ico fab fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- container -->
			</div>
		</div>
		</div>
		<div class="box-formulario w100">
			<div class="aniview" data-av-animation="fadeInUp">
				<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method="post" id="formcontacto" class="formcontacto w80 mg-auto">
				<h2 class="titulo">Solicita tu <span class="rojo">Cotización</span></h2>
					<?php if(!empty($errores)): ?>
						<div class="mensaje">
							<?php echo $errores; ?>
						</div>				
					<?php endif; ?>
					<div class="container-wrap">		
						<div class="inputBox w50">
							<input type="text" class="form-control mb-10" name="nombre" id="nombre" value="<?php if(isset($nombre)) echo $nombre ?>" required>
							<span>Nombre o Empresa</span>
						</div>				
						<div class="inputBox w50">
							<input type="number" class="form-control mb-10" name="ruc" value="<?php if(isset($ruc)) echo $ruc ?>" >
							<span>RUC (Opcional)</span>
						</div>				
						<div class="inputBox w50">
							<input type="email" class="form-control mb-10" name="correo" value="<?php if(isset($correo)) echo $correo ?>" id="correo" required>
							<span>Correo</span>
						</div>
						<div class="inputBox w50">
							<input type="number" class="form-control mb-10" name="telefono" minlength="7" maxlength="9" value="<?php if(isset($telefono)) echo $telefono ?>" required>
							<span>Teléfono</span>
						</div>														
					</div>					
						<div class="inputBox ">										
							<textarea name="mensaje" class="form-control" cols="10" rows="5" required><?php if(isset($mensaje)) echo $mensaje ?></textarea>
							<span>Dejanos tu consulta</span>
						</div>
						<input class="btn" type="submit" name="submit" id="submit" value="Enviar" >		
				</form>	
			</div>
		</div>	

	
	</div>
	
</section>
<!--================ fin Portfolio =================-->
	<?php include 'layout/footer.php' ?>		
</body>
</html>

<script>		
		
	$("#nombre").on("keyup", function(){			
		var nombre = $(this).val();
		var boton = $("#submit");
		
		var nombrelength = $(this).val().length;
		
		if(nombrelength >= 5 ){			
			if(nombre == 'Crytogorgor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'crytogorgor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'Crytogor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'crytogor'){
				boton.attr("disabled", 'disabled');
			}			
		}
	});

	// $("#nombre").on("keyup", function(){			
	// 	var nombre = $(this).val();
	// 	var correolength = $(this).val().length;

	// 	if(correolength >= 10 ){
	// 		var dataString = 'email='+ email;			
	// 		$.ajax({
	// 			url: 'models/searchs/recuperarEmail.php',
	// 			type: "GET",
	// 			data: dataString,
	// 			dataType: "JSON",
	// 			success: function(respuesta){
	// 				if(respuesta.success == 0){
	// 					$("#info").slideDown();											
	// 					$("#info").html(respuesta.message);												
	// 					$("#submit").addClass("btn-none");
	// 					$("#submit").attr('disabled', true);
	// 				}else{
	// 					$("#info").slideDown();					
	// 					$("#info").html(respuesta.message);				
	// 					$("#submit").removeClass("btn-none");
	// 					$("#submit").attr('disabled', false); 
	// 				}
	// 			}
	// 		});
	// 	}
	// });

	// $("#submit").click(function(){
	$("#formcontacto").submit(function(){
		var nombre = $("#nombre").val();
		var nombrelength = $("#nombre").val().length;
		var boton = $("#submit");		
		
		if(nombrelength >= 5 ){			
			if(nombre == 'Crytogorgor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'crytogorgor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'Crytogor'){
				boton.attr("disabled", 'disabled');
			}
			if(nombre == 'crytogor'){
				boton.attr("disabled", 'disabled');
			}			
		}
	});	

</script>