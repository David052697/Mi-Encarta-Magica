<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Encarta Mágica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
        background-image: url('https://i.pinimg.com/originals/1d/41/f0/1d41f0ebd7b0d571ace2cc2f5e7c1f13.jpg');
        background-size: cover;
        background-position: center;
    }

    header {
        background-color: #ffcc00;
        padding: 1rem 0;
        text-align: center;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin: 0 1rem;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        background-color: #ff6600;
        transition: all 0.3s ease;
    }

    nav ul li a:hover {
        background-color: #ff4500;
    }

    .section {
        padding: 2rem;
        text-align: center;
        border: 2px solid #ffcc00;
        border-radius: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        margin: 1rem;
    }

    h1, h2 {
        color: #ff6600;
    }

    footer {
        background-color: #ffcc00;
        color: #fff;
        text-align: center;
        padding: 1rem 0;
    }

    footer ul {
        list-style: none;
        padding: 0;
    }

    footer ul li {
        display: inline;
        margin: 0 1rem;
    }

    footer ul li a {
        color: #fff;
        text-decoration: none;
    }

    footer ul li a:hover {
        text-decoration: underline;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        text-align: left;
    }

    form label {
        display: block;
        margin-top: 1rem;
    }

    form input, form textarea {
        width: 100%;
        padding: 0.5rem;
        margin-top: 0.5rem;
        border: 1px solid #ff6600;
        border-radius: 4px;
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    form button {
        background-color: #ff6600;
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        margin-top: 1rem;
        cursor: pointer;
        border-radius: 20px;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        transition: all 0.3s ease;
    }

    form button:hover {
        background-color: #ff4500;
    }

    .carousel {
        position: relative;
        width: 80%;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 10px;
    }

    .carousel img {
        width: 100%;
        height: auto;
        display: none;
    }

    .carousel img.active {
        display: block;
    }

    .carousel .error {
        display: none;
        color: red;
        font-size: 1.2rem;
        margin-top: 1rem;
    }
</style>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Explora</a></li>
                <li><a href="#about">Descubre</a></li>
                <li><a href="#services">Aprende</a></li>
                <li><a href="#contact">Contacta</a></li>
                <li><a href="{{ route('register') }}">Regístrate</a></li>
                <li><a href="{{ route('login') }}">Inicia Sesión</a></li>
                <li><a href="{{ route('snake') }}">Juegos Mágicos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="section">
            <h1>Bienvenido a la Encarta Mágica</h1>
            <div id="carousel" class="carousel">
                <img src="https://i.ytimg.com/vi/mQKDUKxjiJ4/maxresdefault.jpg" alt="Portada de Libro 1">
                <img src="https://previews.123rf.com/images/yucalora/yucalora2102/yucalora210200184/164779528-patr%C3%B3n-sin-fisuras-de-la-ciudad-medieval-calle-de-la-ciudad-vieja-con-casas-de-estilo-chalet.jpg" alt="Portada de Libro 2">
                <img src="https://previews.123rf.com/images/teamplayfor/teamplayfor1611/teamplayfor161100252/68101212-vector-de-dibujos-animados-ilustraci%C3%B3n-retro-casas-ciudad-fachadas-paisaje-paisaje-urbano-d%C3%ADa.jpg" alt="Biblioteca">
                <img src="https://previews.123rf.com/images/volina/volina1503/volina150300028/38418439-ilustraci%C3%B3n-de-dibujos-animados-de-un-camino-a-una-ciudad.jpg" alt="Libros Antiguos">
                <img src="https://www.lavanguardia.com/andro4all/hero/2023/01/Fondos-de-pantalla-para-movil.jpg?width=768&aspect_ratio=16:9&format=nowebp" alt="Estantería de Biblioteca">
                <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/sf3f427a6eb1c79c6/image/i2b38cc5645c23685/version/1588035677/image.jpg" alt="Estantería de Biblioteca">
                <img src="https://media.istockphoto.com/id/1389467326/es/vector/cerebro.jpg?s=612x612&w=0&k=20&c=-_VcniM_xEW_vKz-TEBgW-kki82ugUw" alt="
                Estantería de Biblioteca">
                <div class="error">¡Oops! Parece que nuestros hechizos no están funcionando correctamente. Por favor, vuelve más tarde.</div>
            </div>
            <p>¡Sumérgete en un mundo de conocimiento y diversión con nuestra Encarta Mágica!</p>
        </section>

        <section id="about" class="section">
            <h2>¡Descubre un mundo de magia!</h2>
            <p>En nuestra Encarta Mágica, encontrarás los secretos más asombrosos y emocionantes del universo. ¡Explora y deja volar tu imaginación!</p>
        </section>

        <section id="services" class="section">
            <h2>¡Aprende con nuestra magia!</h2>
            <ul>
                <li>Consulta nuestros hechizos para aprender sobre cualquier tema.</li>
                <li>Descubre nuevos mundos con nuestros libros encantados.</li>
                <li>¡Sumérgete en aventuras inolvidables con nuestras historias mágicas!</li>
            </ul>
        </section>

        <section id="contact" class="section">
            <h2>¡Contacta a nuestro Gran Mago!</h2>
            <form action="#">
                <label for="name">Nombre Mágico:</label>
                <input type="text" id="name" name="name" placeholder="¡Escribe tu nombre mágico aquí!">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="¡Tu correo mágico aquí!">
                <label for="message">Mensaje Encantado:</label>
                <textarea id="message" name="message" placeholder="¡Escribe tu mensaje encantado aquí!"></textarea>
                <button type="submit">¡Enviar Hechizo!</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Magia Total. Todos los derechos reservados.</p>
        <ul>
            <li><a href="#">Términos y Condiciones del Reino</a></li>
            <li><a href="#">Política de Privacidad de las Hadas</a></li>
        </ul>
    </footer>

    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carouselImages = document.querySelectorAll('#carousel img');
            const errorElement = document.querySelector('#carousel .error');
            let currentImageIndex = 0;

            function showNextImage() {
                carouselImages[currentImageIndex].classList.remove('active');
                currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
                carouselImages[currentImageIndex].classList.add('active');
            }

            carouselImages.forEach((img, index) => {
                img.addEventListener('error', () => {
                    errorElement.style.display = 'block';
                    img.style.display = 'none';
                });
            });

            carouselImages[currentImageIndex].classList.add('active');
            setInterval(showNextImage, 3000);
        });
    </script>
</body>
</html>
