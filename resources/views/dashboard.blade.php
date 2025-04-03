<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encarta Mágica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f3ef;
            color: #333;
        }
        .navbar {
            background-color: #ff6600;
            color: #fff;
            padding: 10px;
            text-align: right;
        }
        .sidebar {
            width: 250px;
            background-color: #007bff;
            color: #fff;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            padding-top: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-yellow {
            background-color: #ffc107;
            color: #333;
        }

        .btn-orange {
            background-color: #ff6600;
            color: #fff;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-image: url('https://i.pinimg.com/originals/02/01/1e/02011ec8554277b8c70bf22fb192123c.gif');
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .card .card-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #e3e3e3;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .card .card-header h5 {
            margin: 0;
        }
        .card .card-body {
            padding: 0;
        }
        .card .topic {
            padding: 10px;
            border-bottom: 1px solid #e3e3e3;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card .topic:hover {
            background-color: #f4f3ef;
        }
        .no-results-message {
            display: none;
            color: red;
            margin-top: 10px;
        }
        .logout {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .logout button {
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            background-color: #dc3545;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <br>
        <a href="#" class="btn btn-yellow"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU3NVbcio9WXYfeC7Yc9qOOwYe1OmFAAN6nw&s" width="20" height="20">    Inicio</a>
        <a href="#" class="btn btn-orange"><img src="https://img.freepik.com/vector-premium/icono-lupa-sobre-fondo-amarillo_322958-1735.jpg" width="20" height="20">  Explora</a>
        <a href="#" class="btn btn-yellow"><img src="https://previews.123rf.com/images/ylivdesign/ylivdesign1704/ylivdesign170408973/77076162-icono-de-bloc-de-notas-espiral-en-blanco-ilustraci%C3%B3n-plana-de-icono-de-vector-de-bloc-de-notas.jpg" width="20" height="20">  Aprende</a>
        <a href="#" class="btn btn-orange"><img src="https://previews.123rf.com/images/mamanamsai/mamanamsai1506/mamanamsai150601635/41960301-dise%C3%B1o-de-juegos-sobre-fondo-amarillo-retro-fondo-amarillo-vector-limpia.jpg" width="20" height="20">  Juega</a>
        <a href="#" class="btn btn-yellow"><img src="https://elcomercio.pe/resizer/Uz8ypBaIj5Zg2iozzcJbnvriG5I=/1200x1200/smart/filters:format(jpeg):quality(90)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/LBL76Q2O7RDM3JWGMFNL3373JI.jpg" width="20" height="20">  Contacto</a>
        <a href="#" class="btn btn-yellow">
            <img src="https://www.angeldecuir.com.mx/wp-content/uploads/2021/08/NFT-Token-No-Fungible.png" alt="Biblioteca Digital" width="200" height="330">
            <img src="https://www.angeldecuir.com.mx/wp-content/uploads/2021/08/NFT-Token-No-Fungible.png" alt="Biblioteca Digital" width="200" height="330">
        </a>
    </div>

    <div class="navbar">
        <input type="text" id="searchInput" placeholder="Buscar...">
        <button onclick="searchContent()">Buscar</button>
    </div>

    <div class="content">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://wwwhatsnew.com/wp-content/uploads/2024/01/dibujos-animados-1200x733.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Historia</h5>
                        <p class="card-text">Some quick example text content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Edad Antigua - Civilizaciones antiguas, inventos importantes.</li>
                        <li class="list-group-item">Edad Media - Feudalismo, cruzadas, renacimiento</li>
                        <li class="list-group-item">Edad Moderna - Descubrimientos, revoluciones, independencias.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.blogs.es/916311/ia-que-dibuja/840_560.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Geografía</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Geografía Física - Relieve, climas, ecosistemas.</li>
                        <li class="list-group-item">Geografía Humana - Población, urbanismo, economía.</li>
                        <li class="list-group-item">Geopolítica - Países, conflictos, organizaciones internacionales</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://mundocontact.com/wp-content/uploads/2023/06/arte-ia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Artes Plásticas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Dibujo - Técnicas, materiales, expresión artística.</li>
                        <li class="list-group-item">Pintura - Estilos, historia del arte, pintores famosos.</li>
                        <li class="list-group-item">Escultura - Técnicas, artistas destacados, evolución histórica</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://ap-cdn.sfo3.digitaloceanspaces.com/uploads/2023/11/como-hablar-sexualidad-con-adolescentes.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Educación Sexual</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Anatomía y Fisiología - Cuerpo humano, sistemas reproductivos.</li>
                        <li class="list-group-item">Sexualidad - Identidad, orientación, diversidad.</li>
                        <li class="list-group-item">Salud Sexual y Reproductiva - Métodos anticonceptivos, prevención de enfermedades</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://holatelcel.com/wp-content/uploads/2023/04/deportes-IA.png" class="card-img-top" alt="Deportes">
                    <div class="card-body">
                        <h5 class="card-title">Deportes</h5>
                        <p class="card-text">Información sobre diferentes deportes, reglas, y técnicas.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Fútbol - Historia, reglas, jugadores destacados.</li>
                        <li class="list-group-item">Baloncesto - Fundamentos, equipos famosos, torneos importantes.</li>
                        <li class="list-group-item">Atletismo - Carreras, saltos, lanzamientos, eventos olímpicos.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://notipress.mx/img/content/22096.webp" class="card-img-top" alt="Inversiones">
                    <div class="card-body">
                        <h5 class="card-title">Inversiones</h5>
                        <p class="card-text">Conceptos básicos y estrategias para invertir en diversos mercados.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mercado de Acciones - Cómo funciona, principales índices, análisis técnico.</li>
                        <li class="list-group-item">Bienes Raíces - Inversión inmobiliaria, valoración de propiedades, alquiler y venta.</li>
                        <li class="list-group-item">Criptomonedas - Bitcoin, Ethereum, blockchain, riesgos y oportunidades.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.blogs.es/e239cb/crear-wallpapers-portada/1366_2000.jpeg" class="card-img-top" alt="Ciencia">
                    <div class="card-body">
                        <h5 class="card-title">Ciencia</h5>
                        <p class="card-text">Exploración de los diversos campos de la ciencia.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Física - Leyes del movimiento, energía, teoría de la relatividad.</li>
                        <li class="list-group-item">Química - Elementos, reacciones químicas, química orgánica.</li>
                        <li class="list-group-item">Biología - Ecosistemas, evolución, genética.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://thefoodtech.com/wp-content/uploads/2023/06/inteligencia-artificial-robot-.jpg" class="card-img-top" alt="Tecnología">
                    <div class="card-body">
                        <h5 class="card-title">Tecnología</h5>
                        <p class="card-text">Avances y tendencias en el mundo de la tecnología.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Computación - Hardware, software, inteligencia artificial.</li>
                        <li class="list-group-item">Robótica - Robots, automatización, aplicaciones.</li>
                        <li class="list-group-item">Internet - Historia, funcionamiento, seguridad.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/fotos-premium/hay-libro-flor-encima-ai-generativa_958138-16326.jpg" class="card-img-top" alt="Literatura">
                    <div class="card-body">
                        <h5 class="card-title">Literatura</h5>
                        <p class="card-text">Estudio de las obras literarias y sus autores.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Novelas - Clásicos, contemporáneos, géneros.</li>
                        <li class="list-group-item">Poesía - Poetas famosos, estilos, análisis de poemas.</li>
                        <li class="list-group-item">Teatro - Obras, dramaturgos, representaciones.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://mpost.io/wp-content/uploads/image-52-48.jpg" class="card-img-top" alt="Música">
                    <div class="card-body">
                        <h5 class="card-title">Música</h5>
                        <p class="card-text">Exploración de los diferentes géneros musicales y su historia.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Clásica - Compositores, obras maestras, instrumentos.</li>
                        <li class="list-group-item">Rock - Historia, bandas icónicas, evolución.</li>
                        <li class="list-group-item">Pop - Artistas, hits, influencia cultural.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/foto-gratis/primer-plano-cocina-robots-antropomorficos_23-2150865941.jpg" class="card-img-top" alt="Cocina">
                    <div class="card-body">
                        <h5 class="card-title">Cocina</h5>
                        <p class="card-text">Recetas y técnicas culinarias de todo el mundo.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cocina Italiana - Pastas, pizzas, postres.</li>
                        <li class="list-group-item">Cocina Mexicana - Tacos, enchiladas, moles.</li>
                        <li class="list-group-item">Cocina Japonesa - Sushi, ramen, tempura.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/fotos-premium/astronauta-espacio-exterior-ia-generativa_986034-947.jpg" class="card-img-top" alt="Astronomía">
                    <div class="card-body">
                        <h5 class="card-title">Astronomía</h5>
                        <p class="card-text">Estudio del universo y los cuerpos celestes.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Sistema Solar - Planetas, lunas, asteroides.</li>
                        <li class="list-group-item">Estrellas - Formación, tipos, supernovas.</li>
                        <li class="list-group-item">Galaxias - Vía Láctea, galaxias cercanas, cúmulos.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/fotos-premium/papel-de-parede-colorido-de-fundo-abstrato-feito-por-inteligencia-artificial-ai_41969-12311.jpg" class="card-img-top" alt="Historia">
                    <div class="card-body">
                        <h5 class="card-title">Historia del Arte</h5>
                        <p class="card-text">Evolución del arte a través de las diferentes épocas.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Renacimiento - Grandes maestros, técnicas, obras.</li>
                        <li class="list-group-item">Barroco - Estilo, pintores, escultores.</li>
                        <li class="list-group-item">Modernismo - Vanguardia, movimientos artísticos, influencias.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://static.vecteezy.com/system/resources/previews/035/165/600/non_2x/ai-generated-generative-ai-stoicism-concept-sculpture-of-a-stoic-representing-philosophy-ancient-greek-god-statue-photo.jpg" class="card-img-top" alt="Filosofía">
                    <div class="card-body">
                        <h5 class="card-title">Filosofía</h5>
                        <p class="card-text">Pensadores y teorías que han moldeado el pensamiento humano.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Antigua - Sócrates, Platón, Aristóteles.</li>
                        <li class="list-group-item">Moderna - Descartes, Kant, Nietzsche.</li>
                        <li class="list-group-item">Contemporánea - Existencialismo, postmodernismo, ética.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/fotos-premium/fondo-viajes-turismo-extranjero-ai-generado_538866-1011.jpg" class="card-img-top" alt="Viajes">
                    <div class="card-body">
                        <h5 class="card-title">Viajes</h5>
                        <p class="card-text">Destinos fascinantes y consejos para viajar.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Europa - Ciudades históricas, cultura, gastronomía.</li>
                        <li class="list-group-item">Asia - Tradiciones, naturaleza, arquitectura.</li>
                        <li class="list-group-item">América - Diversidad, paisajes, aventuras.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.redaccionmedica.com/images/destacados/la-inteligencia-artificial-mejora-su-lenguaje-y-reduce-la-brecha-medica-3100_620x368.jpg" class="card-img-top" alt="Salud">
                    <div class="card-body">
                        <h5 class="card-title">Salud</h5>
                        <p class="card-text">Información sobre cómo mantener una vida saludable.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nutrición - Dietas equilibradas, vitaminas, minerales.</li>
                        <li class="list-group-item">Ejercicio - Rutinas, beneficios, deportes.</li>
                        <li class="list-group-item">Bienestar Mental - Estrategias, técnicas de relajación, terapia.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://dossierdearquitectura.com/imgPosts/65441a1886eb2.jpg" class="card-img-top" alt="Arquitectura">
                    <div class="card-body">
                        <h5 class="card-title">Arquitectura</h5>
                        <p class="card-text">Estilos y construcciones emblemáticas del mundo.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Clásica - Monumentos, templos, técnicas constructivas.</li>
                        <li class="list-group-item">Moderna - Rascacielos, materiales innovadores, diseño.</li>
                        <li class="list-group-item">
                        <li class="list-group-item">Contemporánea - Sostenibilidad, arquitectura verde, urbanismo.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://media.es.wired.com/photos/64cc084e532fc59e0e8d52df/16:9/w_2560%2Cc_limit/NASA%2520IA%2520640351115.jpg" class="card-img-top" alt="Medio Ambiente">
                    <div class="card-body">
                        <h5 class="card-title">Medio Ambiente</h5>
                        <p class="card-text">Cuidado del entorno natural y problemas ambientales.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cambio Climático - Causas, efectos, soluciones.</li>
                        <li class="list-group-item">Conservación - Especies en peligro, áreas protegidas, reforestación.</li>
                        <li class="list-group-item">Sostenibilidad - Energías renovables, reciclaje, huella ecológica.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://mitsloanreview.mx/wp-content/uploads/2024/04/plataformas-ia-para-obtener-fondos.jpg" class="card-img-top" alt="Negocios">
                    <div class="card-body">
                        <h5 class="card-title">Negocios</h5>
                        <p class="card-text">Conceptos clave en el mundo empresarial y emprendedor.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Emprendimiento - Ideas, plan de negocios, financiamiento.</li>
                        <li class="list-group-item">Marketing - Estrategias, publicidad, análisis de mercado.</li>
                        <li class="list-group-item">Gestión - Administración, liderazgo, gestión del talento.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/vector-gratis/fondo-libro-ingles-dibujado-mano_23-2149483338.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1718064000&semt=ais_user" class="card-img-top" alt="Idiomas">
                    <div class="card-body">
                        <h5 class="card-title">Idiomas</h5>
                        <p class="card-text">Aprender y mejorar habilidades en diferentes idiomas.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Inglés - Gramática, vocabulario, pronunciación.</li>
                        <li class="list-group-item">Francés - Conversación, cultura, expresiones idiomáticas.</li>
                        <li class="list-group-item">Chino - Caracteres, tonos, escritura.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/fotos-premium/cerebro-humano-floral-concepto-salud-mental-ilustracion-modelo-3d-creada-tecnologia-ia-generativa-planta-diseno-flores-hojas-fondo-negro-psicologia-simbolo-inteligencia_156843-1547.jpg" class="card-img-top" alt="Psicología">
                    <div class="card-body">
                        <h5 class="card-title">Psicología</h5>
                        <p class="card-text">Estudio de la mente y el comportamiento humano.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Desarrollo - Infancia, adolescencia, adultez.</li>
                        <li class="list-group-item">Salud Mental - Trastornos, terapias, bienestar emocional.</li>
                        <li class="list-group-item">Social - Grupos, influencia social, relaciones interpersonales.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://png.pngtree.com/background/20230528/original/pngtree-the-sketches-of-the-three-models-are-of-picture-image_2774577.jpg" class="card-img-top" alt="Moda">
                    <div class="card-body">
                        <h5 class="card-title">Moda</h5>
                        <p class="card-text">Tendencias, diseñadores y estilos en el mundo de la moda.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pasarelas - Desfiles, diseñadores famosos, temporadas.</li>
                        <li class="list-group-item">Estilos - Casual, formal, urbano.</li>
                        <li class="list-group-item">Accesorios - Bolsos, zapatos, joyería.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://thumbs.dreamstime.com/b/experimentar-el-futuro-de-la-fotograf%C3%ADa-con-arte-c%C3%A1mara-ai-dise%C3%B1o-futurista-vibrante-transformar-su-experiencia-fotogr%C3%A1fica-273428321.jpg" class="card-img-top" alt="Fotografía">
                    <div class="card-body">
                        <h5 class="card-title">Fotografía</h5>
                        <p class="card-text">Técnicas, estilos y consejos para mejorar tus fotografías.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Composición - Regla de los tercios, enfoque, perspectiva.</li>
                        <li class="list-group-item">Iluminación - Luz natural, artificial, efectos.</li>
                        <li class="list-group-item">Edición - Photoshop, Lightroom, filtros.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhgvOYf1Ugs5VSB1lU909H4z4GqYiEN7-_0w&s" class="card-img-top" alt="Espacio">
                    <div class="card-body">
                        <h5 class="card-title">Exploración Espacial</h5>
                        <p class="card-text">Descubrimientos y misiones en el espacio exterior.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Agencias Espaciales - NASA, SpaceX, ESA.</li>
                        <li class="list-group-item">Misiones - Llegada a la Luna, Marte, sondas espaciales.</li>
                        <li class="list-group-item">Fenómenos - Agujeros negros, estrellas fugaces, auroras.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://previews.123rf.com/images/loft39studio/loft39studio2307/loft39studio230715117/208126181-ia-generativa-las-im%C3%A1genes-de-fondo-del-gimnasio-se-pueden-utilizar-para-anuncios-de-gimnasios-y.jpg" class="card-img-top" alt="Fitness">
                    <div class="card-body">
                        <h5 class="card-title">Fitness</h5>
                        <p class="card-text">Ejercicios y entrenamientos para mantenerse en forma.</p>
                
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Entrenamiento Cardiovascular - Correr, nadar, ciclismo.</li>
                        <li class="list-group-item">Entrenamiento de Fuerza - Levantamiento de pesas, entrenamiento con pesas.</li>
                        <li class="list-group-item">Flexibilidad - Yoga, estiramientos, pilates.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://emprendedores.es/wp-content/uploads/Inteligencia-Artificial.jpg" class="card-img-top" alt="Emprendimiento">
                    <div class="card-body">
                        <h5 class="card-title">Emprendimiento</h5>
                        <p class="card-text">Consejos y recursos para iniciar y hacer crecer un negocio.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Planificación - Idea de negocio, planificación estratégica, objetivos.</li>
                        <li class="list-group-item">Finanzas - Presupuesto, inversiones, financiamiento.</li>
                        <li class="list-group-item">Marketing - Estrategias de marketing, branding, redes sociales.</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2021/09/politica-destacada-978x652.jpg" class="card-img-top" alt="Política">
                    <div class="card-body">
                        <h5 class="card-title">Política</h5>
                        <p class="card-text">Análisis de los sistemas políticos y las decisiones gubernamentales.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Sistemas - Democracia, dictadura, monarquía.</li>
                        <li class="list-group-item">Gobernanza - Instituciones, políticas públicas, corrupción.</li>
                        <li class="list-group-item">Geopolítica - Relaciones internacionales, conflictos, acuerdos.</li>
                    </ul>
                </div>
            </div>
            <!-- Repite este bloque de cuatro tarjetas para cada conjunto de tres -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleContent(id) {
            var content = document.getElementById(id).getElementsByClassName('card-body')[0];
            content.style.display = (content.style.display === 'none' || content.style.display === '') ? 'block' : 'none';
        }

        function searchContent() {
            var input, filter, cards, topics, topic, i, j;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            cards = document.getElementsByClassName("card");

            for (i = 0; i < cards.length; i++) {
                topics = cards[i].getElementsByClassName("topic");
                for (j = 0; j < topics.length; j++) {
                    topic = topics[j];
                    if (topic.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        cards[i].style.display = "block";
                        topic.style.display = "";
                    } else {
                        topic.style.display = "none";
                    }
                }
                if (!Array.from(topics).some(topic => topic.style.display !== "none")) {
                    cards[i].style.display = "none";
                }
            }

            var noResultsMessage = document.getElementById("noResultsMessage");
            if (!Array.from(cards).some(card => card.style.display !== "none")) {
                noResultsMessage.style.display = "block";
            } else {
                noResultsMessage.style.display = "none";
            }
        }
    </script>
</body>
</html>
