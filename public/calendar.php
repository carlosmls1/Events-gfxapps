<?php
/* Establecer el localismo al holandés */
/* Probar diferentes nombres posibles de localismos para el alemán a partir de PHP 4.3.0 */
$loc_de = setlocale(LC_ALL, $a['setlocale']);
echo "<!--El localismo preferido para el sistema es '$loc_de'-->";
?>
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i|IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Ramabhadra" rel="stylesheet">
<!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
<link rel="stylesheet" href="https://anandchowdhary.github.io/ionicons-3-cdn/icons.css" integrity="sha384-+iqgM+tGle5wS+uPwXzIjZS5v6VkqCUV7YQ/e/clzRHAxYbzpUJ+nldylmtBWCP0" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<div class="owl-carousel owl-theme">


    <!--Enero-->
    <?php
    $monthNum  = 1;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $enero->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $enero->have_posts() ) : $enero->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 2;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $febrero->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $febrero->have_posts() ) : $febrero->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 3;
    $monthName = strftime('F', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $marzo->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $marzo->have_posts() ) : $marzo->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 4;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $abril->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $abril->have_posts() ) : $abril->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 5;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $mayo->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $mayo->have_posts() ) : $mayo->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 6;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $junio->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $junio->have_posts() ) : $junio->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 7;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $julio->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $julio->have_posts() ) : $julio->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 8;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $agosto->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $agosto->have_posts() ) : $agosto->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 9;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $septiembre->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $septiembre->have_posts() ) : $septiembre->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 10;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $octubre->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $octubre->have_posts() ) : $octubre->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 11;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March

    if( $noviembre->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $noviembre->have_posts() ) : $noviembre->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
    <?php
    $monthNum  = 12;
    $monthName = strftime('%B', mktime(0, 0, 0, $monthNum, 10)); // March
    if( $diciembre->have_posts() ) :?>
        <div class="item">
            <div class="mobile-wrapper">
                <!--======= Header =======-->
                <header class="header">
                    <div class="container">
                        <span><?php echo strtoupper($monthName)?></span>
                        <h1> PRO IMAGEN EVENT'S</h1>
                    </div>
                </header>
                <!--======= Upcoming Events =======-->
                <section class="upcoming-events">
                    <div class="container">
                        <div class="events-wrapper">
                            <?php while( $diciembre->have_posts() ) : $diciembre->the_post(); ?>
                                <div class="event">
                                    <i class="ion ion-ios-flame hot"></i>
                                    <h4 class="event__point"><?php echo strtoupper(get_the_title());?></h4>
                                    <span class="event__duration"></span>
                                    <p class="event__description">
                                        <?=date("d M Y", strtotime(get_field('date')))?>
                                    </p>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;  ?>
</div>
