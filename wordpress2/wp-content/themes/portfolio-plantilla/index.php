<!DOCTYPE html>
<html lang="en" manifest="cache.manifest">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">

        <link rel="icon" type="image/x-icon" href="img/favicon.ico">

        <meta name="theme-color" content="#FF9933">
        <meta name="msapplication-navbutton-color" content="#FF9933">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="#FF9933">

        <title>Portfoli</title>
        
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url'); ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url'); ?>/css/menu.css" />

    </head>

    <body>
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                   <!--contingut-->

                   <div class="contenidor">
            <div class="menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="img/logo_Ondono_Aida_clar.png" alt="">
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li class="inici">
                            <a href="index.html">Inici</a>
                        </li>
        
                        <li class="projectes">
                            <a href="html/projectes.html">Projectes
                                <ul class="nav2">
                                    <li class="practica">
                                        <a href="mp08_UF1_01_ondonoa/index.html">Primera</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_02_horari_ondonoa/index.html">Horari</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_03_feedly_ondonoa/index.html">Feedly</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_04_ifpagram_ondonoa/index.html">Ifpagram</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_05_escacs_ondonoa/index.html">Escacs</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_06_absolute_ondonoa/index.html">Asbsolute</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_07_floreta_ondonoa/index.html">Floreta</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_08_cara_ondonoa/index.html">Cara</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_09_photoshop_ondonoa/index.html">Photoshop</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_10_pelis_ondonoa/index.html">Pelis</a>
                                    </li>
        
                                </ul>
                            </a>
                        </li>
        
                        <li class="sobre-mi">
                            <a href="html/sobre-mi.html">Sobre mi</a>
                        </li>
        
                        <li class="contacte">
                            <a href="#">Contacte</a>
                        </li>
                    </ul>
                </div>
                
            </div>

            <div class="hamburguesa">
                <input type="checkbox" name="interruptor">
                <label for="interruptor">
                    <ul>
                        <li class="inici">
                            <a href="index.html">Inici</a>
                        </li>
                        <hr>
                        <li class="projectes">
                            <a href="html/projectes.html">Projectes
                                <ul class="nav2">
                                    <li class="practica">
                                        <a href="mp08_UF1_01_ondonoa/index.html">Primera</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_02_horari_ondonoa/index.html">Horari</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_03_feedly_ondonoa/index.html">Feedly</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_04_ifpagram_ondonoa/index.html">Ifpagram</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_05_escacs_ondonoa/index.html">Escacs</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_06_absolute_ondonoa/index.html">Asbsolute</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_07_floreta_ondonoa/index.html">Floreta</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_08_cara_ondonoa/index.html">Cara</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_09_photoshop_ondonoa/index.html">Photoshop</a>
                                    </li>
        
                                    <li class="practica">
                                        <a href="mp08_UF1_10_pelis_ondonoa/index.html">Pelis</a>
                                    </li>
        
                                </ul>
                            </a>
                        </li>
                        <hr>
                        <li class="sobre-mi">
                            <a href="html/sobre-mi.html">Sobre mi</a>
                        </li>
                        <hr>
                        <li class="contacte">
                            <a href="#">Contacte</a>
                        </li>
                    </ul>
                </label>
            </div>

            <div class="apartat1">
                <div class="titol">
                    <h1>Aida Ondoño Claret</h1>
                    <h5>Web design & development</h5>
                </div>
            </div>

            <div class="apartat2">
                <div class="imatge">
                    <img src="img/Aida2.JPEG" alt="">
                </div>
                <div class="apartat-projecte">
                    <h2>Projectes</h2>
                    <hr>
                    <p class="lletra-projecte">Lorem ipsum dolor sit amet, consectetur </p>
                    <a href="html/projectes.html">
                        <button >Veure més</button>
                    </a>
                </div>
            </div>

            <div class="apartat3">
                <div class="imatge">
                    <img src="img/Aida3.jpg" alt="">
                </div>
                <div class="apartat-mi">
                    <h2>Sobre mi</h2>
                    <hr>
                    <p class="lletra-projecte">Sóc una persona proactiva, amb iniciativa i amb una gran capacitat de treball en equip. Actualment, busco créixer i continuar millorant en l’àmbit laboral, desenvolupant les meves habilitats professionals dins del món del disseny.</p>
                    <a href="html/sobre-mi.html">
                        <button>Veure més</button>
                    </a>
                </div>
                
            </div>

        </div>
                
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                        <em>Penjat el:</em> <?php the_time('F jS, Y') ?>
                        <em>per</em> <?php the_author() ?>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Penjat a <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>

                    


                </article>
            <?php endwhile; ?>

            <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?> <!-- end content -->


        

    </body>

</html>