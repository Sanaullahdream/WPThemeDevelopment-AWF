

<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">

                <!-- Widget data dynamic
                    https://www.youtube.com/watch?v=lszS5jVhdyo -->                      
      <?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar ('footer-1') ) :  ?>
         
                        <div class="footer-text one">
                                <h2>AWF HELP CHARITY</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                            <hr>
                            <p><a href="#"><i classo="fa fa-facebook" aria-hidden="false"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></p>

                         </div>
                         
                        <?php endif; ?>
                                             
                        </div>
                    </div>
                    

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <!-- <div class="footer-text one"> -->

                        <?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar ('footer-2') ) :  ?>
                            
                            <div class="footer-text one">
                                    <h3>RECENT POST</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing </a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing</a></li>
                                        <li><a href="#"><i class="material-icons">keyboard_arrow_right</i> Consectetur Adipisicing Elit</a></li>
                                    </ul>
                              </div>

                                <?php endif; ?>
                                        
                                </div>
                                </div>

                              </div>

                              
                            <!--   <div class="col-md-4">
                                <div class="row"> -->
                            <div class="col-md-4 col-sm-3">
                               <!--  <idv class="footer-text two"> -->

                        <?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar ('footer-3') ) :  ?>

                            <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Causes</a></li>
                                        <li><a href="#">Event</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Donate</a></li>
                                   </ul>
                               
                               </div>

                                 <?php endif; ?>
                                  <!-- </div>
                                </div> -->
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                <!-- <div class="footer-text one"> -->
                        <?php if (!function_exists('dynamic_sidebar') || ! dynamic_sidebar ('footer-4') ) :  ?>

                            <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>Dhaka, Bangladesh</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>aloronfoundation@gmail.com</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+8801925 353508</a></li>
                                    </ul>

                                      </div>

                            <?php endif; ?>

                         
                        </div>
                   
            </div>

            <div class="footer_bottom">
                <p>Copyright @ 2020 <a href="https://www.facebook.com/aloronwelfarefoundation/" target="blank" >Aloron Welfare Foundation</a> | All Rights Reserved </p>
            </div>
        
        </footer>

        </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/animationCounter.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

        <!-- wp_footer show the Get Support Button in the left below -->
    <?php wp_footer(); ?>

    </body>
</html>