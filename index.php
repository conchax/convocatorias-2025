<?php
// VARIABLES CON LOS ID DE LAS CONVOCATORIAS QUE VAN A IR 
// CAMBIANDO ACORDE A LA SECCION EN LA QUE SE ENCUENTRE (A,B,C)
$secA = 4;
$secB = 5;
$secC = 6;
$convoActivo = 7;

/* if ($_SERVER['PHP_AUTH_USER'] != "PrepaLSEP" || $_SERVER['PHP_AUTH_PW'] != "convo80airb81") {
    header('WWW-Authenticate: Basic realm="Ingrese su usario y contraseña asignada"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization Required To Server.';
    exit;
} */
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="https://prepaenlinea.sep.gob.mx/wp-content/themes/PL-SEP-2024/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convocatorias - 2025 | Prepa en Línea-SEP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" id="estilos-css" href="https://prepaenlinea.sep.gob.mx/wp-content/themes/PL-SEP-2024/css/pls.min.css?ver=6.4.2" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url" content="https://prepaenlinea.sep.gob.mx/convocatorias-2025/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Convocatorias - 2025" />
    <meta property="og:description" content="Bachillerato en línea, gratuito y con certificado de la SEP. Haz clic y regístrate." />
    <meta property="og:image" content="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/portada-registro.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Convocatorias - 2025" />
    <meta name="twitter:description" content="Bachillerato en línea, gratuito y con certificado de la SEP. Haz clic y regístrate." />
    <meta name="twitter:image" content="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/portada-registro.png" />

    <!-- GA Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DZH4V12W3M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DZH4V12W3M');
    </script>
    <!-- GA Google Analytics -->
</head>

<body>
    <!-- menu -->
    <div id="headerPLS"></div>
    <!-- menu -->
    <section class="section-w"></section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="logo-convocatoria" src="assets/img/logo-general.svg" alt="logo">
                </div>
                <div class="col col-md-9">
                    <div class="des">
                        La Dirección General del Bachillerato, a través de Prepa en Línea-SEP, ofrece un servicio gratuito a personas mexicanas con certificado de secundaria y personas extranjeras con estancia legal en México que deseen cursar su bachillerato en línea, sin importar su edad ni lugar de residencia.
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="registro mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="text-center mb-3">Registro para aspirantes</h1>
                </div>
            </div>
        </div>

        <div class="bg-pausa">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-5 text-end  mb-4 mb-sm-0">
                        <img src="assets/img/identidad-G81.webp" alt="G81">
                    </div>
                    <div class="col-12 col-md-4 ">
                        <div class="prox mb-4 ps-md-5 ps-4">
                            Próxima convocatoria
                        </div>
                        <p class="fecha mb-4 ps-md-5 ps-4 text-start"><b>Regístrate</b> del 18 al 29 de agosto</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <p><a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#requisitos"><i class="fa-solid fa-arrow-down"></i> Requerimientos </a></p>
                        <p><a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#bases"><i class="fa-solid fa-arrow-down"></i> Bases</a></p>
                        <p><a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#guia"><i class="fa-solid fa-arrow-down"></i> Guía del aspirante</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-12 col-md-4">
                    <p class="text-center">
                        <a class="bottom-play" href="https://www.youtube.com/embed/Afgz--5J90g?si=oQE_f46cZXHurLgg" data-bs-toggle="modal" data-bs-target="#como-registro" data-url="https://www.youtube.com/embed/Afgz--5J90g?si=KOQ1nnsBFHI7bDRH" onclick="conteo_recurso(8)"><i class="fa-regular fa-circle-play"></i> ¿Cómo me registro?</a>
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <p class="text-center">
                        <a class="bottom-play" href="https://www.youtube.com/embed/As4OIoEMxrY?si=aVotQrc_S0k8TYKd" data-bs-toggle="modal" data-bs-target="#des-curp" data-url="https://www.youtube.com/embed/As4OIoEMxrY?si=aVotQrc_S0k8TYKd" onclick="conteo_recurso(10)"><i class="fa-regular fa-circle-play"></i> ¿Cómo descargo mi CURP?</a>
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <p class="text-center">
                        <a class="bottom-play" href="https://www.youtube.com/embed/J43cE93wlbM?si=PgDkqE6FkBM3lhqR" data-bs-toggle="modal" data-bs-target="#des-acta" data-url="https://www.youtube.com/embed/J43cE93wlbM?si=PgDkqE6FkBM3lhqR" onclick="conteo_recurso(11)"><i class="fa-regular fa-circle-play"></i> ¿Cómo descargo mi acta de nacimiento?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-titulo text-center mb-4">Sigue tu proceso</div>
                    <p class="parrafo text-center">
                        El procedimiento completo para ser estudiante de Prepa en Línea-SEP se conforma de varios pasos. Si te inscribiste en alguna de las siguientes generaciones, te invitamos a dar seguimiento a través de las fechas y enlaces correspondientes que facilitarán tu proceso de ingreso a nuestra comunidad.
                    </p>
                    <p class="text-center my-5">
                        <a class="bottom-play" href="https://www.youtube.com/embed/LVZy9ghr3rY?si=PdtZ7WPMRnCONLwh" data-bs-toggle="modal" data-bs-target="#como-proceso" data-url="https://www.youtube.com/embed/LVZy9ghr3rY?si=PdtZ7WPMRnCONLwh" onclick="conteo_recurso(9)"><i class="fa-regular fa-circle-play"></i> ¿Cómo seguir tu proceso de registro?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sigue-proceso my-4">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-4 mb-4">
                    <div class="card-convo">
                        <img src="assets/img/identidad-G78.png" height="140" alt="convocatoria 78">
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#sigueprocesoC"><i class="fa-solid fa-list"></i> Ver proceso</a></p>
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#guiaC"><i class="fa-regular fa-address-book"></i> Guía del aspirante</a></p>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card-convo">
                        <img src="assets/img/identidad-G79.png" height="140" alt="convocatoria 79">
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#sigueprocesoA"><i class="fa-solid fa-list"></i> Ver proceso</a></p>
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#guiaA"><i class="fa-regular fa-address-book"></i> Guía del aspirante</a></p>
                    </div>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card-convo">
                        <img src="assets/img/identidad-G80.webp" height="140" alt="convocatoria 80">
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#sigueprocesoB"><i class="fa-solid fa-list"></i> Ver proceso</a></p>
                        <p> <a class="btn-opciones" href="#" data-bs-toggle="modal" data-bs-target="#guiaB"><i class="fa-regular fa-address-book"></i> Guía del aspirante</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr class="convo">
            </div>
        </div>
    </div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-titulo text-center mb-4">¿Tienes dudas para registrarte? Te ayudamos</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4 text-center">
                    <a class="btn btn-labeled " href="https://prepaenlinea.sep.gob.mx/kit_aspirante" target="_blank" onclick="conteo_recurso(6)">
                        <span class="btn-label"><i class="fa-solid fa-user-check iconol"></i></span>
                        <div class="text-bottom">Kit del aspirante</div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-md-end text-center">
                    <div class="pe-md-5 mb-4">
                        <a href="https://youtube.com/live/X-b1b3Ae7Fg?feature=share" target="_blank" class="btn-sesiones">
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.5449 0.0432272C43.6249 -1.10677 56.9449 20.9232 46.3249 38.1432C36.4249 54.2032 12.8149 53.8932 3.37493 37.5532C-5.93507 21.4532 5.06492 1.10323 23.5449 0.0432272ZM23.1249 1.50323C4.72492 2.72323 -4.98507 24.5932 6.22493 39.2932C17.5549 54.1632 41.0449 50.5232 47.2449 32.9232C52.9949 16.6332 40.1849 0.373227 23.1249 1.50323Z" fill="var(--color-primary)" />
                                <path d="M31.1748 12.5234V26.1234C30.4848 26.4334 29.7548 26.6034 29.0648 26.9334C28.4248 27.2434 27.8748 27.6934 27.2548 28.0534C24.7848 27.4134 22.2648 27.1034 19.7048 27.2234V14.9234C21.8648 14.9834 23.8648 14.9534 25.9748 14.4734C27.7948 14.0634 29.4848 13.3134 31.1648 12.5234H31.1748Z" fill="var(--color-primary)" />
                                <path d="M18.455 14.9136V27.2136H11.525C10.805 27.2136 9.74495 26.0136 9.54495 25.3436C9.46495 25.0936 9.53495 24.5736 9.36495 24.4236C9.27495 24.3436 8.59495 24.1636 8.35495 24.0236C5.67495 22.4736 6.38495 18.3836 9.37495 17.8136C9.49495 17.4936 9.47495 17.1336 9.56495 16.8136C9.85495 15.8536 11.035 14.9236 12.045 14.9236H18.455V14.9136Z" fill="var(--color-primary)" />
                                <path d="M18.455 28.4636V35.1336C22.465 35.4236 22.425 41.0236 18.405 41.3836C15.655 41.6336 12.925 40.8836 11.915 38.0836C11.845 37.8836 11.575 37.0036 11.575 36.8536V28.3636C11.685 28.3236 11.805 28.4636 11.835 28.4636H18.455Z" fill="var(--color-primary)" />
                                <path d="M36.1748 26.5834C34.9348 26.2134 33.7448 25.9534 32.4248 26.0634V11.0034C32.4248 11.0034 32.6948 10.3834 32.7548 10.2934C33.4648 9.20342 35.0348 9.20342 35.8048 10.2334C35.8948 10.3534 36.1748 10.8034 36.1748 10.9034V26.5834Z" fill="var(--color-primary)" />
                                <path d="M37.4248 24.9235V17.3135C40.6248 18.7835 40.5748 23.4135 37.4248 24.9235Z" fill="var(--color-primary)" />
                                <path d="M39.215 14.7932C38.655 14.2332 40.145 12.8432 40.595 12.5232C41.225 12.0732 41.915 12.6432 41.575 13.2932C41.515 13.4032 40.185 14.7632 40.085 14.8232C39.855 14.9532 39.405 14.9832 39.215 14.7932Z" fill="var(--color-primary)" />
                                <path d="M39.5848 26.6033C40.0848 26.5333 41.7048 28.1433 41.7048 28.6233C41.7048 29.1033 41.1648 29.3333 40.7548 29.1433C40.6548 29.0933 39.1848 27.6333 39.1348 27.5233C38.9748 27.1733 39.1748 26.6633 39.5748 26.6033H39.5848Z" fill="var(--color-primary)" />
                                <path d="M31.7548 27.3435C23.2548 28.3035 23.2048 41.4835 32.0448 42.2135C43.1448 43.1235 42.8348 26.0935 31.7548 27.3435ZM34.7548 39.6835H32.4648V34.0235C32.4648 33.7935 32.4648 33.5535 32.4748 33.2935C32.4748 33.0335 32.4948 32.8035 32.5048 32.6035C32.4348 32.6935 32.3348 32.7935 32.2148 32.9135C32.0948 33.0335 31.9748 33.1335 31.8648 33.2235L30.7748 34.1135L29.6448 32.7035L32.8048 30.1535H34.7648V39.6735L34.7548 39.6835Z" fill="var(--color-primary)" />
                            </svg>
                            <span class="name">
                                1.ª sesión informativa <br>
                                <span class="date">
                                    22 de agosto a las 16:00 horas
                                </span>
                            </span>
                            <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.07296 8.50227C9.48019 8.32307 9.92561 7.90707 10.2056 7.56147C13.0371 4.04787 9.65836 -1.07213 5.32514 0.201468C2.17544 1.12947 0.991915 5.07827 3.1108 7.60627C3.38441 7.93907 3.81074 8.32947 4.20524 8.50227V3.97107C4.20524 3.83667 4.45977 3.32467 4.54885 3.17107C5.46512 1.59027 7.83853 1.57107 8.73572 3.17107C8.79935 3.28627 9.07296 3.90067 9.07296 3.97107V8.50227ZM8.34121 10.6271V3.97107C8.34121 3.86227 8.02942 3.34387 7.93398 3.23507C7.12587 2.32627 5.46512 2.57587 5.03244 3.74067C4.9879 3.85587 4.85427 4.37427 4.85427 4.45747V16.9887C3.68348 16.1631 2.75447 14.0383 1.06191 14.6847C-0.287053 15.2031 -0.236149 16.6687 0.552866 17.6799C2.07363 19.6319 4.30705 21.5327 5.69419 23.5231C5.86599 23.7727 6.05052 24.0735 6.16506 24.3551C6.28595 24.6623 6.36231 25.3343 6.59138 25.4751L16.5559 25.5327C17.0586 25.2703 16.8804 24.6943 16.9758 24.2399C17.3067 22.6719 18.5984 20.7263 18.7829 19.2031C18.8975 18.2431 18.942 15.1711 18.802 14.2495C18.5793 12.8159 16.4795 12.3807 15.6587 13.6031L15.3215 14.2815V12.2847C15.3215 12.2463 15.1115 11.7983 15.0669 11.7279C14.4052 10.7039 12.8399 10.7167 12.1718 11.7279L11.8345 12.3295V10.5759C11.8345 10.5375 11.6245 10.0895 11.58 10.0191C10.9246 9.00787 9.40384 8.96947 8.72299 9.97427L8.35394 10.6207L8.34121 10.6271ZM4.96244 26.8127C4.79701 26.9791 4.48522 27.4975 4.4534 27.7279C4.37705 28.2143 4.38341 30.0703 4.46613 30.5631C4.5743 31.2351 5.31241 31.8879 5.9678 31.9903L17.3767 32.0031C18.1148 31.8559 18.7766 31.2991 18.9293 30.5439C19.0375 30.0319 19.0247 27.9711 18.8657 27.4975C18.7066 27.0239 18.083 26.4351 17.5931 26.3263L6.10779 26.2879C5.71964 26.3071 5.23605 26.5375 4.96244 26.8127Z" fill="var(--color-primary)" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-md-start text-center">
                    <div class="ps-md-5">
                        <a href="https://youtube.com/live/M0S4ZeIoeAY?feature=share" target="_blank" class="btn-sesiones">
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.5997 0.0432272C43.6797 -1.10677 56.9997 20.9232 46.3797 38.1432C36.4797 54.2032 12.8697 53.8932 3.4297 37.5532C-6.0103 21.2132 5.1197 1.10323 23.5997 0.0432272ZM23.1797 1.50323C4.7797 2.72323 -4.9303 24.5932 6.2797 39.2932C17.6097 54.1632 41.0997 50.5232 47.2997 32.9232C53.0497 16.6332 40.2397 0.373227 23.1797 1.50323Z" fill="var(--color-primary)" />
                                <path d="M31.2298 12.5234V26.1234C30.5398 26.4334 29.8098 26.6034 29.1198 26.9334C28.4798 27.2434 27.9298 27.6934 27.3098 28.0534C24.8398 27.4134 22.3198 27.1034 19.7598 27.2234V14.9234C21.9198 14.9834 23.9198 14.9534 26.0298 14.4734C27.8498 14.0634 29.5398 13.3134 31.2198 12.5234H31.2298Z" fill="var(--color-primary)" />
                                <path d="M18.5099 14.9136V27.2136H11.5799C10.8599 27.2136 9.79988 26.0136 9.59988 25.3436C9.51988 25.0936 9.58988 24.5736 9.41988 24.4236C9.32988 24.3436 8.64988 24.1636 8.40988 24.0236C5.72988 22.4736 6.43988 18.3836 9.42988 17.8136C9.54988 17.4936 9.52988 17.1336 9.61988 16.8136C9.90988 15.8536 11.0899 14.9236 12.0999 14.9236H18.5099V14.9136Z" fill="var(--color-primary)" />
                                <path d="M18.5099 28.4636V35.1336C22.5199 35.4236 22.4799 41.0236 18.4599 41.3836C15.7099 41.6336 12.9799 40.8836 11.9699 38.0836C11.8999 37.8836 11.6299 37.0036 11.6299 36.8536V28.3636C11.7399 28.3236 11.8599 28.4636 11.8899 28.4636H18.5099Z" fill="var(--color-primary)" />
                                <path d="M36.2297 26.5834C34.9897 26.2134 33.7997 25.9534 32.4797 26.0634V11.0034C32.4797 11.0034 32.7497 10.3834 32.8097 10.2934C33.5197 9.20342 35.0897 9.20342 35.8597 10.2334C35.9497 10.3534 36.2297 10.8034 36.2297 10.9034V26.5834Z" fill="var(--color-primary)" />
                                <path d="M37.4797 24.9235V17.3135C40.6797 18.7835 40.6297 23.4135 37.4797 24.9235Z" fill="var(--color-primary)" />
                                <path d="M39.2699 14.7932C38.7099 14.2332 40.1999 12.8432 40.6499 12.5232C41.2799 12.0732 41.9699 12.6432 41.6299 13.2932C41.5699 13.4032 40.2399 14.7632 40.1399 14.8232C39.9099 14.9532 39.4599 14.9832 39.2699 14.7932Z" fill="var(--color-primary)" />
                                <path d="M39.6398 26.6033C40.1398 26.5333 41.7598 28.1433 41.7598 28.6233C41.7598 29.1033 41.2198 29.3333 40.8098 29.1433C40.7098 29.0933 39.2398 27.6333 39.1898 27.5233C39.0298 27.1733 39.2298 26.6633 39.6298 26.6033H39.6398Z" fill="var(--color-primary)" />
                                <path d="M31.8097 27.3435C23.3097 28.3035 23.2597 41.4835 32.0997 42.2135C43.1997 43.1235 42.8897 26.0935 31.8097 27.3435ZM36.2497 39.6835H29.4697V38.1535L31.8297 35.7635C32.3097 35.2635 32.6897 34.8535 32.9797 34.5335C33.2597 34.2135 33.4697 33.9335 33.5897 33.6835C33.7097 33.4435 33.7697 33.1835 33.7697 32.9035C33.7697 32.5635 33.6697 32.3235 33.4797 32.1635C33.2797 32.0035 33.0297 31.9335 32.7197 31.9335C32.3897 31.9335 32.0597 32.0135 31.7297 32.1835C31.3997 32.3535 31.0497 32.5935 30.6597 32.9135L29.4197 31.4635C29.6997 31.2135 29.9897 30.9835 30.3097 30.7635C30.6297 30.5435 30.9897 30.3635 31.4097 30.2335C31.8297 30.1035 32.3297 30.0235 32.9297 30.0235C33.5697 30.0235 34.1197 30.1335 34.5797 30.3635C35.0397 30.5935 35.3897 30.8935 35.6497 31.2835C35.8997 31.6735 36.0297 32.1135 36.0297 32.6135C36.0297 33.1435 35.9297 33.6335 35.7197 34.0635C35.5097 34.5035 35.2097 34.9335 34.8097 35.3535C34.4097 35.7835 33.9197 36.2635 33.3397 36.7935L32.3497 37.7035V37.7835H36.2397V39.6735L36.2497 39.6835Z" fill="var(--color-primary)" />
                            </svg>
                            <span class="name">
                                2.ª sesión informativa <br>
                                <span class="date">
                                    3 de septiembre a las 16:00 horas
                                </span>
                            </span>
                            <svg width="19" height="32" viewBox="0 0 19 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.07296 8.50227C9.48019 8.32307 9.92561 7.90707 10.2056 7.56147C13.0371 4.04787 9.65836 -1.07213 5.32514 0.201468C2.17544 1.12947 0.991915 5.07827 3.1108 7.60627C3.38441 7.93907 3.81074 8.32947 4.20524 8.50227V3.97107C4.20524 3.83667 4.45977 3.32467 4.54885 3.17107C5.46512 1.59027 7.83853 1.57107 8.73572 3.17107C8.79935 3.28627 9.07296 3.90067 9.07296 3.97107V8.50227ZM8.34121 10.6271V3.97107C8.34121 3.86227 8.02942 3.34387 7.93398 3.23507C7.12587 2.32627 5.46512 2.57587 5.03244 3.74067C4.9879 3.85587 4.85427 4.37427 4.85427 4.45747V16.9887C3.68348 16.1631 2.75447 14.0383 1.06191 14.6847C-0.287053 15.2031 -0.236149 16.6687 0.552866 17.6799C2.07363 19.6319 4.30705 21.5327 5.69419 23.5231C5.86599 23.7727 6.05052 24.0735 6.16506 24.3551C6.28595 24.6623 6.36231 25.3343 6.59138 25.4751L16.5559 25.5327C17.0586 25.2703 16.8804 24.6943 16.9758 24.2399C17.3067 22.6719 18.5984 20.7263 18.7829 19.2031C18.8975 18.2431 18.942 15.1711 18.802 14.2495C18.5793 12.8159 16.4795 12.3807 15.6587 13.6031L15.3215 14.2815V12.2847C15.3215 12.2463 15.1115 11.7983 15.0669 11.7279C14.4052 10.7039 12.8399 10.7167 12.1718 11.7279L11.8345 12.3295V10.5759C11.8345 10.5375 11.6245 10.0895 11.58 10.0191C10.9246 9.00787 9.40384 8.96947 8.72299 9.97427L8.35394 10.6207L8.34121 10.6271ZM4.96244 26.8127C4.79701 26.9791 4.48522 27.4975 4.4534 27.7279C4.37705 28.2143 4.38341 30.0703 4.46613 30.5631C4.5743 31.2351 5.31241 31.8879 5.9678 31.9903L17.3767 32.0031C18.1148 31.8559 18.7766 31.2991 18.9293 30.5439C19.0375 30.0319 19.0247 27.9711 18.8657 27.4975C18.7066 27.0239 18.083 26.4351 17.5931 26.3263L6.10779 26.2879C5.71964 26.3071 5.23605 26.5375 4.96244 26.8127Z" fill="var(--color-primary)" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="convo">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-6 text-md-end text-center">
                    <div class="pe-md-5 mb-4">
                        <a class="btn btn-labeled" href="difusion-y-vinculacion-digital.php" target="_blank" onclick="conteo_recurso(5)">
                            <span class="btn-label"><i class="fa-solid fa-bullhorn iconol"></i></span>
                            <div class="text-bottom">Difusión y vinculación</div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-md-start text-center"> <!--  -->
                    <div class="ps-md-5"><!--  -->
                        <a class="btn btn-labeled" href="https://prepaenlinea.sep.gob.mx/mesadeservicio" target="_blank" onclick="conteo_recurso(7)">
                            <span class="btn-label">
                                <svg class="iconol" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.11111 13.2222H19.8889C20.5111 13.2222 21 13.7111 21 14.3333V20.9999H1V14.3333C1 13.7111 1.51111 13.2222 2.11111 13.2222Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11 6.9111C12.6323 6.9111 13.9555 5.58785 13.9555 3.95555C13.9555 2.32324 12.6323 1 11 1C9.36768 1 8.04443 2.32324 8.04443 3.95555C8.04443 5.58785 9.36768 6.9111 11 6.9111Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                                    <path d="M15.4446 11.289C15.4446 9.11127 13.6668 7.3335 11.489 7.3335H10.5112C8.33344 7.3335 6.55566 9.11127 6.55566 11.289" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                            </span>
                            <div class="text-bottom">Mesa de servicio</div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <div id="footerPLS"></div>
    <!-- footer -->


    <!-- Modal requisitos -->
    <div class="modal fade" id="requisitos" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Requerimientos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <div class="text-center">
                                    <a class="btn btn-timeline" data-bs-toggle="collapse" href="#collapseRequisitos" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Requisitos
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="text-center">
                                    <a class="btn btn-timeline" data-bs-toggle="collapse" href="#collapseNavegacion" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Navegación
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-10">
                                <div class="collapse" id="collapseRequisitos">
                                    <div class="container fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <p class="text-titulo text-center">Requisitos</p>
                                            </div>
                                            <p>Para participar en la convocatoria como aspirante de Prepa en Línea-SEP, debes cumplir con estos requisitos:</p>
                                            <ul>
                                                <li style="list-style-type: none;">
                                                    <ul>
                                                        <li>Tener nacionalidad mexicana. Si eres extranjero, debes demostrar tu estancia legal en México.</li>
                                                        <li>Contar con certificado de secundaria o la equivalencia correspondiente.</li>
                                                        <li>Tener dos correos electrónicos válidos, personales e intransferibles, que no hayan sido utilizados en convocatorias anteriores y que se mantengan activos durante todo el proceso. Estos correos <strong>no podrán ser modificados durante el registro</strong> y la emisión de resultados.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p>También, necesitarás los siguientes documentos para completar tu registro:</p>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="text-center"><b>CURP</b> </p>

                                                    <p class="text-center"><img src="assets/img/Ejemplos-CURP.webp" alt="curp" class="img-fluid"></p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="text-center"> <b>Acta de nacimiento</b> </p>

                                                    <p class="text-center">
                                                        <img src="assets/img/Acta-de-Nacimiento-por-internet.webp" alt="Acta de naciemiento" class="img-fluid">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="collapseNavegacion">
                                    <div class="container fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <p class="text-titulo text-center">Navegación</p>
                                            </div>
                                            <p>Al estudiar en Prepa en Línea-SEP, accederás a una plataforma con aulas virtuales que contienen recursos como audios, videos, infografías y lecturas en PDF; además de herramientas de comunicación como foros y mensajero.</p>
                                            <p>Puedes usar dispositivos móviles para acceder a los recursos en cualquier momento y lugar. Toma en cuenta
                                                que <strong>algunas actividades requieren programas específicos en computadora</strong> para mejorar la
                                                calidad y elaboración de tus trabajos. </p>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="titulo-modal-body my-5">
                                                <div class="text-center"><b>Requerimientos tecnológicos</b></div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <p class="text-center">
                                                    <img src="assets/img/1.png" alt="escritorio" width="280" class="img-fluid">
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <p class="text-center">
                                                    <img src="assets/img/2.png" wi="" alt="movil" width="260" class="img-fluid">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="titulo-modal-body my-5">
                                            <div class="text-center"><b> Conectividad</b></div>
                                        </div>
                                        <div class="row align-items-center text-center justify-content-center">
                                            <div class="col-12 col-md-4 mb-3 text-center">
                                                <img src="assets/img/3.png" alt="tres" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-4 text-center mb-3">
                                                <img src="assets/img/4.png" alt="cuatro" class="img-fluid">
                                            </div>
                                            <div class="col-5 col-md-4 text-center mb-3">
                                                <img src="assets/img/5.png" alt="cinco" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Bases -->
    <div class="modal fade" id="bases" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Bases</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <iframe class="pdf" src="kit-81/bases_g81.pdf"></iframe>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-md-11 text-center">
                                <a class="btn btn-labeled" href="kit-81/bases_g81.pdf" download="PL-SEP_Convo2025-G81-bases.pdf" onclick="conteo_recurso(3)">
                                    <span class="btn-label"><i class="fa-solid fa-arrow-down iconol"></i> </span>
                                    <div class="text-bottom">Descargar</div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Guia -->
    <div class="modal fade" id="guia" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Guía del aspirante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <iframe class="pdf" src="kit-81/guia_aspirante_g81.pdf"></iframe>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-md-11 text-center">
                                <a class="btn btn-labeled" href="kit-81/guia_aspirante_g81.pdf" download="PL-SEP_Convo2025-G81-guia_aspirante.pdf" onclick="conteo_recurso(4)">
                                    <span class="btn-label"><i class="fa-solid fa-arrow-down iconol"></i> </span>
                                    <div class="text-bottom">Descargar</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Guia A-->
    <div class="modal fade" id="guiaA" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Guía del aspirante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <iframe class="pdf" src="kit-79/guia_aspirante_g79.pdf"></iframe>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-md-11 text-center">
                                <a class="btn btn-labeled" href="kit-79/guia_aspirante_g79.pdf" download="PL-SEP_Convo2025-G79-guia_registro.pdf" onclick="conteo_recurso(16)">
                                    <span class="btn-label"><i class="fa-solid fa-arrow-down iconol"></i> </span>
                                    <div class="text-bottom">Descargar</div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Guia B-->
    <div class="modal fade" id="guiaB" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Guía del aspirante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <iframe class="pdf" src="kit-80/guia_aspirante_g80.pdf"></iframe>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-md-11 text-center">
                                <a class="btn btn-labeled" href="kit-80/guia_aspirante_g80.pdf" download="PL-SEP_Convo2025-G80-guia_registro.pdf" onclick="conteo_recurso(21)">
                                    <span class="btn-label"><i class="fa-solid fa-arrow-down iconol"></i> </span>
                                    <div class="text-bottom">Descargar</div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Guia C-->
    <div class="modal fade" id="guiaC" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Guía del aspirante</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <iframe class="pdf" src="kit-78/guia_aspirante_g78.pdf"></iframe>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-md-11 text-center">
                                <a class="btn btn-labeled" href="kit-78/guia_aspirante_g78.pdf" download="PL-SEP_Convo2025-G78-guia_registro.pdf" onclick="conteo_recurso(26)">
                                    <span class="btn-label"><i class="fa-solid fa-arrow-down iconol"></i> </span>
                                    <div class="text-bottom">Descargar</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal sigueprocesoA -->
    <div class="modal fade" id="sigueprocesoA" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                <div class="text-center"> <img src="assets/img/identidad-G79.png" height="140" alt="G79"></div>

                                <ul class="timeline text-center">
                                    <li>
                                        <a class="btn btn-timeline disabled" href="http://registro.prepaenlinea.sep.gob.mx/registro/public/index.php/estatus_prope" target="_blank" onclick="conteo_recurso(12,<?php echo $secA; ?>)">Obtén tus claves de acceso</a>
                                        <p>del 2 al 6 de julio</p>
                                    </li>
                                    <li class="enproceso">
                                        <a class="btn btn-timeline activo" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(13,<?php echo $secA; ?>)">Cursa el módulo propedéutico</a>
                                        <p>del 7 de julio <br>
                                            al 10 de agosto</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" href="https://prepaenlinea.sep.gob.mx/publicacion-de-resultados/" target="_blank" onclick="conteo_recurso(14,<?php echo $secA; ?>)">Consulta tus resultados e inscríbete</a>
                                        <p>del 15 al 27 de agosto</p>
                                    </li>
                                    <li class="last">
                                        <a class="btn btn-timeline disabled" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(15,<?php echo $secA; ?>)">Cursa el módulo 1</a>
                                        <p>del 1 al 28 de septiembre <br> <span style="color: transparent;">.</span> </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal sigueprocesoB -->
    <div class="modal fade" id="sigueprocesoB" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                <div class="text-center"> <img src="assets/img/identidad-G80.webp" height="140" alt="G80"></div>

                                <p class="text-center d-none"><a class="btn btn-estatus my-4 " href="https://registro.prepaenlinea.sep.gob.mx/registro/public/" target="_blank" onclick="conteo_recurso(2)">Estatus de registro <i class="fa-solid fa-arrow-right"></i></a></p>
                                <ul class="timeline text-center">
                                    <li class="enproceso">
                                        <a class="btn btn-timeline activo" href="https://registro.prepaenlinea.sep.gob.mx/registro/public/index.php/estatus_prope" target="_blank" onclick="conteo_recurso(17,<?php echo $secB; ?>)">Obtén tus claves de acceso</a>
                                        <p>del 6 al 10 de agosto</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(18,<?php echo $secB; ?>)">Cursa el módulo propedéutico</a>
                                        <p>del 11 de agosto <br>
                                            al 7 de septiembre</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" href="https://prepaenlinea.sep.gob.mx/publicacion-de-resultados/" target="_blank" onclick="conteo_recurso(19,<?php echo $secB; ?>)">Consulta tus resultados e inscríbete</a>
                                        <p>del 12 al 24 de septiembre</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(20,<?php echo $secB; ?>)">Cursa el módulo 1</a>
                                        <p>del 29 de septiembre <br>
                                            al 26 de octubre</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal sigueprocesoC -->
    <div class="modal fade" id="sigueprocesoC" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10">
                                <div class="text-center"> <img src="assets/img/identidad-G78.png" height="140" alt="G78"></div>

                                <ul class="timeline text-center">

                                    <li>
                                        <a class="btn btn-timeline disabled" href="http://registro.prepaenlinea.sep.gob.mx/registro/public/index.php/estatus_prope" target="_blank" onclick="conteo_recurso(22,<?php echo $secC; ?>)">Obtén tus claves de acceso</a>
                                        <p>del 4 al 8 de junio</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(23,<?php echo $secC; ?>)">Cursa el módulo propedéutico</a>
                                        <p>del 9 de junio <br>
                                            al 6 de julio</p>
                                    </li>
                                    <li>
                                        <a class="btn btn-timeline disabled" href="https://prepaenlinea.sep.gob.mx/publicacion-de-resultados/" target="_blank" onclick="conteo_recurso(24,<?php echo $secC; ?>)">Consulta tus resultados e inscríbete</a>
                                        <p>del 11 al 30 de julio</p>
                                    </li>
                                    <li class="enproceso">
                                        <a class="btn btn-timeline activo" data-bs-toggle="modal" data-bs-target="#micomunidad" href="#micomunidad" onclick="conteo_recurso(25,<?php echo $secC; ?>)">Cursa el módulo 1</a>
                                        <p>del 4 al 31 de agosto</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal como como me registro -->
    <div class="modal fade" id="como-registro" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">¿Cómo me registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="embed-responsive embed-responsive-16by9 text-center">
                                        <iframe width="560" height="315" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="embed-responsive embed-responsive-16by9 text-center">
                                        <iframe width="100%" height="auto" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal como como seguir tu proceso de registro -->
    <div class="modal fade" id="como-proceso" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">¿Cómo seguir tu proceso de registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="embed-responsive embed-responsive-16by9 text-center">
                                        <iframe width="560" height="315" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="embed-responsive embed-responsive-16by9 text-center">
                                        <iframe width="100%" height="auto" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal como descargo curp -->
    <div class="modal fade" id="des-curp" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">¿Cómo descargo mi CURP?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="short" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal como descargo acta -->
    <div class="modal fade" id="des-acta" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">¿Cómo descargo mi acta de nacimiento?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="short" class="embed-responsive-item" src=""
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://prepaenlinea.sep.gob.mx/wp-content/themes/PL-SEP-2024/js/pls.min.js?ver=6.4.1" id="plsep-js-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://prepaenlinea.sep.gob.mx/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="clics_recursos/conteos.js"></script>

    <script>
        /*         jQuery(function() {

            jQuery(document).ready(function() {
                jQuery('.collapse').on('show.bs.collapse', function() {
                    jQuery('.collapse.show').collapse('toggle');
                });
            });
        });
    </script> */
    <script>
        jQuery('.modal').on('show.bs.modal', function(event) {
            jQuery(this).find('iframe').attr("src", jQuery(event.relatedTarget).data('url'));
        });

        jQuery('.modal').on('hidden.bs.modal', function(e) {
            jQuery(this).find('iframe').attr("src", "");
        });
    </script>
</body>

</html>