    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                            <!--footer 1 widget-->
                            <?php if ( !function_exists('dynamic_sidebar') ||
                             !dynamic_sidebar('Footer 1') ) : ?>
                            <?php endif; ?>
                        
                        
                        
                        
                        
                       <!--footer social menu-->
                        <div class="footer-right">
                            <?php 
                            wp_nav_menu(
                                array(

                                    'theme_location'=>'footer-social',
                                    'container' => ' ',
                                    'items_wrap'=>'<ul class="footer-links-soi">%3$s</ul>',
                                )

                            );?>
                        </div>                      
                    </div>
                </div>
                
                
                
                
                <!--footer-main menu-->
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                            <?php 
                            wp_nav_menu(
                                array(

                                    'theme_location'=>'footer-menu',
                                    'container' => ' ',
                                    'items_wrap'=>'<ul class="footer-links">%3$s</ul>',
                                )

                            );?>
                    </div>
                </div>
                
                
                
                <!--footer 2 widget-->
                
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>
                            <?php if ( !function_exists('dynamic_sidebar') ||
                             !dynamic_sidebar('Footer 2') ) : ?>
                            <?php endif; ?>
                    </div>
                </div>
                
                
                
                
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- footer end -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <b>XYZ</b> Design By : Kundan Kumar</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php wp_footer()?>

    <script>
    $(document).ready(function(){
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#menuid li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle"); 
        $('.navbar .dropdown-toggle').append('<b class="caret"></b>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
   </script>
</body>
</html>