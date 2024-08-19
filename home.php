<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación - Sistemas de Control Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url('fondoscd.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .container {
            flex: 1;
            padding-bottom: 100px;
            /* Espacio para el footer */
        }

        .title {
            text-align: center;
            margin: 50px 0;
            animation: fadeInDown 1s ease-out;
        }

        .title h1 {
            font-size: 2.5em;
            /* Disminuye el tamaño del título */
            font-weight: bold;
            color: #c0c0c0;
            /* Un color gris suave para hacerlo más discreto */
        }

        .photo {
            text-align: center;
            margin: 20px 0;
            animation: zoomIn 1s ease-out;
        }

        .photo img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        .description,
        .expectations {
            margin: 40px 0;
            animation: fadeInUp 1s ease-out;
        }

        .hobbies {
            margin: 40px 0;
            animation: fadeInLeft 1s ease-out;
        }

        .hobby {
            margin-bottom: 30px;
            text-align: center;
        }

        .hobby img {
            max-width: 80%;
            height: auto;
            margin-bottom: 15px;
        }

        .hobby h4 {
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }

        footer {
            background-color: #000000;
            /* Fondo negro */
            padding: 10px 0;
            /* Padding reducido */
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            animation: fadeIn 1s ease-out;
            font-size: 0.8em;
            /* Tamaño de fuente reducido */
            display: flex;
            justify-content: space-between;
            padding: 5px 30px;
            /* Ajuste del padding */
        }

        footer .footer-left,
        footer .footer-right {
            flex: 1;
            text-align: left;
            font-size: 0.8em;
            /* Ajuste de tamaño de fuente */
        }

        footer .footer-right {
            text-align: right;
        }

        footer .footer-center {
            flex: 2;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .photo img,
        .hobby img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            animation: fadeInImage 1s ease-in-out, fadeOutImage 1s ease-in-out;
        }

        @keyframes fadeInImage {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fadeOutImage {
            from {
                opacity: 1;
                transform: scale(1);
            }

            to {
                opacity: 0;
                transform: scale(0.8);
            }
        }

        .photo img,
        .hobby img {
            max-width: 100%;
            height: auto;
            animation: fadeIn 1s ease-in-out, fadeOut 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        /* Animación de entrada */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            /* Reduce el tiempo de transición */
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Aplica la animación solo a las imágenes */
        .photo img,
        .hobby img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            will-change: opacity, transform;
            /* Mejora el rendimiento de la animación */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>SISTEMAS DE CONTROL DIGITAL</h1>
        </div>

        <div class="photo">
            <img src="yo.jpg" alt="Mauricio Callisaya" class="fade-in">
            <h2>MAURICIO IMANOL CALLISAYA MORALES</h2>
        </div>

        <div class="description">
            <h3>Sobre mí</h3>
            <p>Mi nombre es Mauricio, estudiante de la Universidad Salesiana de Bolivia, carrera de Ingeniería de Sistemas, décimo semestre. Con el gusto adquirido a la programación y las redes tecnológicas, espero poder terminar la carrera y conseguir un trabajo en el que pueda implementar todo lo aprendido en la carrera y más.</p>
        </div>

        <div class="hobbies">
            <h3>Hobbies</h3>
            <div class="hobby">
                <h4>Basquetbol</h4>
                <img src="basquet.jpg" alt="Basquetbol">
                <p>Soy fanático de los deportes, pero en particular me gusta mucho el basquetbol. Es un deporte que he practicado desde que era niño y hasta la actualidad sigue siendo mi deporte favorito</p>
            </div>
            <div class="hobby">
                <h4>Videojuegos</h4>
                <img src="juegos.webp" alt="Videojuegos">
                <p>Una de las formas en las que suelo pasar mi tiempo libre es jugando videojuegos y es mucho mejor cuando juego con amigos. Me gusta tanto los juegos de computadora como los juegos de celular.</p>
            </div>
        </div>

        <div class="expectations">
            <h3>¿Cuáles son mis expectativas de la materia?</h3>
            <p>Espero mucho de la materia de Sistemas de Control Digital, lo que se nos propuso en la primera clase sobre la dirección que tendrá la materia a lo largo del semestre me pareció muy interesante y atractivo, por lo que espero con ansias lo que vendrá más adelante.</p>
        </div>
    </div>

    <footer>
        <div class="footer-left">
            <p>Mauricio Imanol Callisaya Morales<br>
                Universidad Salesiana de Bolivia</p>
        </div>
        <div class="footer-right">
            <p>Email: mauriciocallisayam@gmail.com<br>
                <a href="https://wa.me/59179144102" target="_blank">WhatsApp: +591 79144102</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, {
                threshold: 0.1 // El 10% del elemento debe ser visible para activar la animación
            });

            document.querySelectorAll('.photo img, .hobby img').forEach(img => {
                observer.observe(img);
            });
        });
    </script>
</body>

</html>