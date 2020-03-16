
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <title><?php the_title(); ?></title>
-->

        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
       
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.css'; ?>"
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri().'/css/font-awesome.min.css'; ?>"
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/owl.carousel.min.css'; ?>"
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/responsive.css">

    <link  rel="icon" href="<?php echo get_template_directory_uri().'/favicon.ico'?> " type="image/x-icon" />

    
    <?php wp_head(); ?>
    
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="contact">
                                <p><span class="phone"><a href="#"> <?php get_template_directory_uri();?>Phone: +8801925353508</a></span><span class="email"><a href="#">Email: aloronfoundation@gmail.com</a></span></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="join-us">
                                <p><a href="#">JOIN US NOW</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <a href="#">
                                <div class="main-logo">
                                    <img src="<?php echo get_template_directory_uri();?> /img/main-logo.png" alt="">
                                    
                                    <!-- HELP CHARITY -->
                                    <h2><?php bloginfo();?> </h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="menu">
                                <ul class="nav navbar-nav">
                                
                                <!-- general post query: dynamic -->

                            <?php
                            global $post;
                            $args = array('post_type' => 'page', 'orderby' => 'menu_order','posts_per_page' =>-1, 'order'=> 'ASC' );

                            $myposts = get_posts($args);
                            foreach ( $myposts as $post ) : setup_postdata ($post); ?>

                                <li><a href="<?php echo $post ->post_name; ?>"><?php the_title(); ?></a></li>

                           <?php endforeach?>
                            
                            <!-- general post query: dynamic END-->

                                   <!--  <li class="active"><a href="<?php echo get_template_directory_uri();?>">HOME</a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">ABOUT US</a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">CAUSES</a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">EVENT</a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">PORTFOLIO </a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">BLOG</a></li>
                                    <li><a href="<?php echo get_template_directory_uri();?>">CONTACT</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>



<!-- This is also in footer.php page -->
    <!--  </body>
    </html> -->