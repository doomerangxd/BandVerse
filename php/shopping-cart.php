<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tienda</title>
		<link rel="stylesheet" href="css/stylesshopping-cart.css" />
		<link rel="icon" type="image/png" href="imgs/favicon.png"/>
	</head>
	<body>


		<header id="header">
			<div class="container__header">
				<div class="logo">
					<a href="index.html"><img src="imgs/logoBand2.png" alt=""></a>
				</div>
				<div class="container__nav">
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="bands.html">Bandas</a></li>
							<li><a class="select" href="shop.html">Tienda</a></li>
							<li><a href="conciertos.html">Conciertos</a></li>
							<li><a href="contact.html">Contacto</a></li>
							<li><a href="login.html" class="logear">Login/Register</a></li>
						</ul>
					</nav>
	
	
					<div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
	
				</div>
	
			</div>
		</header>
		
		<header>
			<h1>Tienda</h1>


			<div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">Zapatos Nike</p>
								<span class="precio-producto-carrito">$80</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
		</header>
		<div class="container-items">
			<div class="item">
				<figure>
					<img
						src="imgs/camisetabsica_mujer.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Camiseta Básica</h2>
					<p class="price">10€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona talla</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="XS">
									<label for="XS">XS</label>
				
									<input type="radio" name="talla" id="S">
									<label for="S">S</label>
				
									<input type="radio" name="talla" id="M">
									<label for="M">M</label>
				
									<input type="radio" name="talla" id="L">
									<label for="L">L</label>
				
									<input type="radio" name="talla" id="XL">
									<label for="XL">XL</label>
				
									<input type="radio" name="talla" id="XXL">
									<label for="XXL">XXL</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imgs/hombre_mangalarga2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Camiseta Larga</h2>
					<p class="price">13€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona talla</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="largaXS">
									<label for="largaXS">XS</label>
				
									<input type="radio" name="talla" id="largaS">
									<label for="largaS">S</label>
				
									<input type="radio" name="talla" id="largaM">
									<label for="largaM">M</label>
				
									<input type="radio" name="talla" id="largaL">
									<label for="largaL">L</label>
				
									<input type="radio" name="talla" id="largaXL">
									<label for="largaXL">XL</label>
				
									<input type="radio" name="talla" id="largaXXL">
									<label for="largaXXL">XXL</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imgs/sudaderahombre2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Sudadera</h2>
					<p class="price">22€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona talla</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="sudaXS">
									<label for="sudaXS">XS</label>
				
									<input type="radio" name="talla" id="sudaS">
									<label for="sudaS">S</label>
				
									<input type="radio" name="talla" id="sudaM">
									<label for="sudaM">M</label>
				
									<input type="radio" name="talla" id="sudaL">
									<label for="sudaL">L</label>
				
									<input type="radio" name="talla" id="sudaXL">
									<label for="sudaXL">XL</label>
				
									<input type="radio" name="talla" id="sudaXXL">
									<label for="sudaXXL">XXL</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imgs/panuelo.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Pañuelo</h2>
					<p class="price">3€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona tamaño</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="paP">
									<label for="paP">Pequeño</label>
				
									<input type="radio" name="talla" id="paG">
									<label for="paG">Grande</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img id="mochiNormal"
						src="imgs/mochila2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Mochila</h2>
					<p class="price">35€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona tamaño</h2>
							<form action="" class="formulario">
								<div class="radio">
				
									<input type="radio" name="talla" id="mochiGrande">
									<label for="mochiGrande">Grande</label>

									<input type="radio" name="talla" id="mochiPeque">
									<label for="mochiPeque">Pequeña</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var mochiGrande = document.getElementById("mochiGrande");
				var mochiPeque = document.getElementById("mochiPeque")
				var mochImagen = document.getElementById("mochiNormal");
				var price = document.querySelector('.price-mochi')

				mochiGrande.addEventListener("click", function() {
				mochImagen.src = "imgs/mochila2.jpg";
				});

				mochiPeque.addEventListener('click' ,function()
				{
					mochImagen.src = "imgs/mochilapequena2.jpg"
				})
			</script>

			<div class="item">
				<figure>
					<img id="tazaColor"
						src="imgs/taza.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Taza</h2>
					<p class="price">5€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona color</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="tazaBlanca">
									<label for="tazaBlanca">Blanco</label>
				
									<input type="radio" name="talla" id="tazaNegra">
									<label for="tazaNegra">Negro</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var tazaNegra = document.getElementById("tazaNegra");
				var tazaBlanca = document.getElementById("tazaBlanca")
				var tazaImagen = document.getElementById("tazaColor");
				tazaNegra.addEventListener("click", function() {
				tazaImagen.src = "imgs/tazanegra.jpg";
				});

				tazaBlanca.addEventListener('click' ,function()
				{
					tazaImagen.src = "imgs/taza.jpg"
				})
			</script>


			<div class="item">
				<figure>
					<img id="imgPin"
						src="imgs/pinbandverse.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Pin</h2>
					<p class="price">3€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona color</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="pinBlanco">
									<label for="pinBlanco">Blanco</label>
				
									<input type="radio" name="talla" id="pinNegro">
									<label for="pinNegro">Negro</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var pinBlanco = document.getElementById("pinBlanco");
				var pinNegro = document.getElementById("pinNegro")
				var pinImagen = document.getElementById("imgPin");
				pinBlanco.addEventListener("click", function() {
				pinImagen.src = "imgs/pinbandverse.jpg";
				});

				pinNegro.addEventListener('click' ,function()
				{
					pinImagen.src = "imgs/pinnegro2.jpg"
				})
			</script>

			<div class="item">
				<figure>
					<img id="posterNormal"
						src="imgs/posterLicuado2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Poster Licuado</h2>
					<p class="price">5€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona estilo</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="dark">
									<label for="dark">Darkness</label>
				
									<input type="radio" name="talla" id="candy">
									<label for="candy">Candy</label>
				
									<input type="radio" name="talla" id="tutti">
									<label for="tutti">Tutti Frutti</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var dark = document.getElementById("dark");
				var candy = document.getElementById("candy");
				var tutti = document.getElementById('tutti');
				var posterImagen = document.getElementById("posterNormal");
				dark.addEventListener("click", function() {
				posterImagen.src = "imgs/posterLicuado.jpg";
				});

				candy.addEventListener('click' ,function()
				{
					posterImagen.src = "imgs/posterlicuadoRosa.jpg"
				})

				tutti.addEventListener('click' ,function()
				{
					posterImagen.src = "imgs/posterLicuadoAmarillo.jpg"
				})
			</script>

			<div class="item">
				<figure>
					<img id="estrellasNormal"
						src="imgs/posterEstrellas.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Poster Galaxy</h2>
					<p class="price">5€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona estilo</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="classic">
									<label for="classic">Classic</label>
				
									<input type="radio" name="talla" id="nebula">
									<label for="nebula">Nebula</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var classic = document.getElementById("classic");
				var nebula = document.getElementById("nebula")
				var estrellasNormal = document.getElementById("estrellasNormal");
				classic.addEventListener("click", function() {
				estrellasNormal.src = "imgs/posterEstrellas.jpg";
				});

				nebula.addEventListener('click' ,function()
				{
					estrellasNormal.src = "imgs/posterNebula.jpg"
				})
			</script>

			<div class="item">
				<figure>
					<img id="posterLive"
						src="imgs/posterLiveDos.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Poster Live</h2>
					<p class="price">5€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona estilo</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="venue">
									<label for="venue">Venue</label>
									<input type="radio" name="talla" id="arena">
									<label for="arena">Arena</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

			<script>
				var venue = document.getElementById("venue");
				var arena = document.getElementById("arena")
				var posterLive = document.getElementById("posterLive");
				venue.addEventListener("click", function() {
				posterLive.src = "imgs/posterLiveDos.jpg";
				});

				arena.addEventListener('click' ,function()
				{
					posterLive.src = "imgs/posterLive.jpg"
				})
			</script>

			<div class="item">
				<figure>
					<img
						src="imgs/puaBandVerse2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Pua BandVerse</h2>
					<p class="price">1€</p>
					<div class="wrap">
						<div class="container__botones">
							<h2>Selecciona tamaño</h2>
							<form action="" class="formulario">
								<div class="radio">
									<input type="radio" name="talla" id="primera">
									<label for="primera">0,46mm</label>
				
									<input type="radio" name="talla" id="segunda">
									<label for="segunda">0.71mm</label>
				
									<input type="radio" name="talla" id="tercera">
									<label for="tercera">0.96mm</label>
				
									<input type="radio" name="talla" id="cuarta">
									<label for="cuarta">1.14mm</label>
				
									<input type="radio" name="talla" id="quinta">
									<label for="quinta">1.2mm</label>
							</div>
							</form>
						</div>
					</div>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imgs/cdbandverse2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>BandVerse Mix</h2>
					<p class="price">20€</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
		</div>

		<script src="js/shopping-cart.js"></script>
	</body>
</html>