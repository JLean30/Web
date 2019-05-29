<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
           
            $(!document).ready(function() {
                $("body").hide();    
                //$(".search").keyup(buscar());
            });
                //metodo de buscar
                function buscar() {
                    var textoBusqueda = $("input#busqueda").val();
                    
                    if (textoBusqueda != "") {
                       /* $.post("search.php", {
                            valorBusqueda: textoBusqueda
                        }, function(mensaje) {
                            $(".header-container__search-resultados").html(mensaje);
                        });*/
                    $.ajax({
                    method: 'GET',
                    url: 'search.php',
                    data: {
                        valorBusqueda: textoBusqueda
                    },
                    error: function(){
                        console.log('ERROR');
                    },
                    dataType: 'text',
                    success: function(data){   
                        $(".header-container__search-resultados").show();
                        $(".header-container__search-resultados").html(data);
                    }
                });
                    } else {
                       $(".header-container__search-resultados").hide();
                    };
                };
            
            $(document).ready(function() {
                $("body").show();
                new WOW().init();

            });
        </script>
    <title>Index</title>
</head>

<body>
    <header>
        <div class="header-container">
            <a href="#">
                <img class="header-container__logo" src="logo.png" alt="logo">
            </a>
            <div class="header-container__search">
                <form accept-charset="utf-8" method="GET">
                    <input  class="search" type="search" name="busqueda" id="busqueda" value="" placeholder="Buscar" maxlength="30" autocomplete="off" onkeyup="buscar()">
                </form>
                <div class="header-container__search-resultados">
                    
                </div>
            </div>
            <button class="header-container__hamburger">&#9776;</button>
            <button class="header-container__cross">&#735;</button>
            <div class="header-container__menu">
                <ul>
                    <a href="#categorias">
                        <li>Categorías</li>
                    </a>
                    <a href="#populares">
                        <li>Populares</li>
                    </a>
                    <a href="./iniciarsesion.html">
                        <li>Iniciar Sesión</li>
                    </a>
                </ul>
            </div>
            <nav class="header-container__nav wow fadeIn data-wow-delay=3s">
                <ul class="header-container__nav--ul">
                    <li class="header-container__nav--ul">
                        <a class="header-container__nav--item" href="#">Inicio</a>
                        <a class="header-container__nav--item" href="#categorias">Categorías</a>
                        <a class="header-container__nav--item" href="#populares">Populares</a>
                        <a class="header-container__nav--item" href="./iniciarsesion.html">Iniciar sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <img class="wow fadeIn data-wow-delay=2s" src="./recursos/slide.jpg" style="width:100%">
    </section>
    <section class="section-pagina ">
        <section class="section-pagina__lineas">
            <h1 id="categorias" class="section-pagina__titulo">Categorías</h1>
        </section>
        <section class="section-categorias__cuadros wow fadeIn data-wow-delay=4s ">
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-carnes.jpg" alt="categoria carnes">
                    <p class="section-categorias__cuadro-texto"> Carnes</p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-ensaladas.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Ensaladas
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-mex.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Mexicana
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-pastas.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Pastas
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-postres.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Postres
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-rapida.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Rápida
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen " src="./recursos/cat-saludable.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Saludable
                    </p>
                </section>
            </a>
            <a href="#" class="section-categoria__link">
                <section class="section-categorias__cuadro-item">
                    <img class="section-categorias__cuadro-imagen" src="./recursos/cat-sopas.jpg" alt="categorias">
                    <p class="section-categorias__cuadro-texto">
                        Sopas
                    </p>
                </section>
            </a>
        </section>
        <!--section categorias-->
        <section class="section-pagina--destacado">
            <section class="section-pagina__lineas">
                <h1 id="populares" class="section-pagina__titulo section-destacados__titulo-populares">Populares</h1>
            </section>
            <section class="section-destacados wow fadeIn data-wow-delay=4s">
                <section class="section-destacados__cuadros">
                    <ul>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./receta.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta6.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./iniciarsesion.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./iniciarsesion.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta2.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./iniciarsesion.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta3.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./iniciarsesion.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta4.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                        <li>
                            <a class="section-destacados__cuadro-item" href="./iniciarsesion.html">
                                <img class="section-destacados__cuadro-imagen" src="./recursos/receta5.png" alt="">
                                <section class="section-destacados__cuadro-titulo">
                                    Carnes
                                </section>
                                <h3 class="section-destacados__cuadro-nombreReceta">Pollo Agridulce</h3>
                                <p class="section-destacados__cuadro-descripcion">La leche frita es uno de los postres más tradicionales que se pueden hacer hoy en día. ¿Te gusta la leche frita? Más te gustará hacerla. </p>
                            </a>
                        </li>
                    </ul>
                    <a class="section-destacados__link-vermas" href="#">Ver más</a>
                </section>
            </section>
            <!--destacadoscuadros-->
        </section>
        <!--Destacados-->
    </section>
    <!--Section-pagina-->
    <footer class="main-footer">
        <ul class="worked-with">
            <li class="company-logos">
                <a class="company-logo company-logo__instagram" href="https://instagram.com"></a>
            </li>
            <li class="company-logos">
                <a class="company-logo company-logo__facebook" href="https://facebook.com"></a>
            </li>
            <li class="company-logos">
                <a class="company-logo company-logo__twitter" href="https://twitter.com"></a>
            </li>
            <li class="company-logos">
                <a class="company-logo  company-logo__whatsapp" href="https://whatsapp.com"></a>
            </li>
        </ul>
        </section>
        <section class="textfooter">
            <h3>byocfoot@gmail.com</h3>
        </section>
       


    </footer>
</body>

</html>
