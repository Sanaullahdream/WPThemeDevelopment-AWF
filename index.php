<!-- <!DOCTYPE html>
<html lang="en"> -->

<!-- <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!--  <title><?php the_title(); ?></title>

         <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
       
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.css'; ?>"
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri().'/css/font-awesome.min.css'; ?>"
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/owl.carousel.min.css'; ?>"
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/responsive.css">
    
</head> -->

<?php get_header(); ?>

        <section class="carosal-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="client owl-carousel owl-theme">
                            
                            <div class="item">
                                <div class="text">
                                    <h3><?php bloginfo('title');?> SOCIAL ORGANIZATION IN BANGLADESH</h3>
                                    
                                    <p> <?php bloginfo('description');?></p>
                                    
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
            
            <!-- Post content Dynamic > Dream: -->
                <?php while (have_posts()): the_post(); ?>
                            <div class="item">
                                <div class="text">
                                    <h3> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_content(); ?></p>
                                    <h5 class="white-button"><a href="<? the_permalink() ?>">DONATE NOW</a></h5>
                                    <h5><a href="<?php the_permalink() ?>">CONTACT US</a></h5>
                                </div>
                            </div>
                    
                    <?php endwhile; ?>


                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <h3>CHILDREN NEED YOUR HELP</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                    <h5 class="white-button"><a href="#">DONATE NOW</a></h5>
                                    <h5><a href="#">CONTACT US</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our_activity">

            <h2>OUR ACTIVITY</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">near_me</i>
                            </div>
                            <h2><a href="#">Fundraising</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">favorite</i>
                            </div>
                            <h2><a href="#">Volunteering</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="single-Promo">
                            <div class="promo-icon">
                                <i class="material-icons">dashboard</i>
                            </div>
                            <h2><a href="#">Our Programs</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="donate_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 for-padding">
                        <h4>URGENT CAUSE</h4>
                        <h3>Recent Environmental Disasters</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="progress-text">
                            <p class="progress-top">50%</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                            </div>
                            <p class="progress-left">Raised: $1200</p>
                            <p class="progress-right">Goal: $2400</p>
                        </div>
                        <h2><a href="#">DONATE NOW</a></h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="events_section_area">
            <h2>UPCOMING EVENTS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_one.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <div class="clear"></div>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_two.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <img src="img/events_single_three.jpg" alt="">
                            <p><span class="event_left"><i class="material-icons">access_time</i>1:00 pm - 3:00 pm</span><span class="event_right"><i class="material-icons">location_on</i>California Street</span></p>
                            <h3>Education For Children</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">favorite</i></p>
                            <p class="counter-wrapper"><span class="fb"></span></p>
                            <p class="text-block">CAUSES</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">language</i></p>
                            <p class="counter-wrapper"><span class="code"></span></p>
                            <p class="text-block">PLACES</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">person_add</i></p>
                            <p class="counter-wrapper"><span class="bike"></span></p>
                            <p class="text-block">VOLUNTEERS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 for-border">
                        <div class="block">
                            <p><i class="material-icons">people</i></p>
                            <p class="counter-wrapper"><span class="coffee"></span></p>
                            <p class="text-block">SAVED</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="our_cuauses">
            <h2>OUR CAUSES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_cuauses_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri();?>/img/our_cuauses_one.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="<?php echo get_template_directory_uri();?>">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri();?>/img/our_cuauses_two.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="<?php echo get_template_directory_uri();?>">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri();?>/img/our_cuauses_three.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="<?php echo get_template_directory_uri();?>">DONATE NOW</a></h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri();?>/img/our_cuauses_one.jpg" alt="">
                                <div class="for_padding">
                                    <h2>FUTURES FOR CHILDREN</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minima</p>
                                    <div class="progress-text">
                                        <p class="progress-top">50%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                                        </div>
                                        <p class="progress-left">Raised: <span>$1200</span></p>
                                        <p class="progress-right">Goal: <span>$2400</span></p>
                                    </div>
                                    <h2 class="borderes"><a href="<?php echo get_template_directory_uri();?>">DONATE NOW</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="donors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="donors_input">
                            <h2>DONATION NOW</h2>
                            <form action="#" method="post">
                                <p class="amount">
                                    <label for="usd">AMOUNT : </label>
                                    <input type="radio" name="usd" id="usd" checked>50 bdt
                                    <input type="radio" name="usd" id="usd">100 bdt
                                    <input type="radio" name="usd" id="usd">500 bdt </p>
                                <p class="type">
                                    <label for="type">TYPE : </label>
                                    <input type="radio" name="time" id="type" checked>One Time
                                    <input type="radio" name="time" id="type">Monthly
                                    <input type="radio" name="time" id="type">Yearly <br>
                                </p>
                                <h5>
                                    <input type="text" placeholder="Name">
                                    <input type="email" placeholder="Email">
                                </h5>
                                <h4>
                                    <select>
                                    <option>I Want To Donate For 1</option>
                                    <option>I Want To Donate For 2</option>
                                    <option>I Want To Donate For 3</option>
                                </select>
                                </h4>
                                <input type="submit" value="DONATION NOW">
                            </form>
                        </div>
                        <div class="donors_image">
                            <h2>FEATURED DONORS</h2>
                            <div class="donors_featured owl-carousel owl-theme">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri();?>/img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri();?>/img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri();?>/img/donors_featured_one.jpg" alt="">
                                    <h3>Kenneth J. Garnica</h3>
                                    <p>Donated Amount : <span>220 USD</span> </p>
                                </div>
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri().'/img/donors_featured_one.jpg'?>" alt="">
                                    <h3>Dream Garnica</h3>
                                    <p>Donated Amount : <span>350 USD</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear"></div>
          
        <section class="volunteer_area">
                    <!-- Donar Volunteer  -->
            <h2><?php bloginfo(); ?></h2>       
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="volunteer_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_1.jpg'?>" alt="">
                                <div class="text">
                                    <h3>Laura Jammy</h3>
                                    <h6>Designer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_2.jpg'?>" alt="">
                                <div class="text">
                                    <h3>Albert R. Ardoin</h3>
                                    <h6>Actor</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_3.jpg'?>" alt="">
                                <div class="text">
                                    <h3>Cynthia Anni</h3>
                                    <h6>Singer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_1.jpg'?> " alt="">
                                <div class="text">
                                    <h3>Laura Jammy</h3>
                                    <h6>Designer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_2.jpg'?> " alt="">
                                <div class="text">
                                    <h3>Albert R. Ardoin</h3>
                                    <h6>Actor</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri().'/img/volanteer_3.jpg'?>" alt="">
                                <div class="text">
                                    <h3>Cynthia Anni</h3>
                                    <h6>Singer</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi</p>
                                    <h5><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="carosal_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carosal_bottom_single owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/volanteer_1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                            <div class="item">
                                <img src="img/volanteer_3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <h5><i class="material-icons">format_quote</i></h5>
                                <h4>Florence M. Cofer</h4>
                                <h6>Designer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="letast_news">
            <h2>latest news</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_1.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_2.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_news">
                            <img src="img/news_images_3.jpg" alt="">
                            <div class="texts">
                                <p class="date"><a href="#">30 May, 2017</a></p>
                                <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                                <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h3><a href="#">READ MORE</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



           <!--              Start Section Add for Donate Form-->  
                <!--       <section class="donate_section">-->      
                 <!--                Source: https://www.w3schools.com/howto/howto_css_form_icon.asp -->   
                <section class="donate-form">

                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="register_input">
                            <h2>Registration Now</h2>
               
                      <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="usrnm" >
                      </div>

                      <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Email" name="email">
                      </div>

                      <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="psw">
                      </div>

                      <button type="submit" class="btn" > <h2> Register </h2> </button>
                    </form> 


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clear"> </div>
            <!-- Section Add for Donate Form -END-->  

       <?php get_footer(); ?>