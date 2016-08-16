    <footer class="footer-blog">
        <div class="container">
            <div class="col-sm-6 col-md-2">
                <div class="footer-blog-header">
                    <h2><img src="<?php echo IMAGES_PATH ?>/icon-logo-white.png"> Blog</h2>
                    <p class="mb20">Confira as ultimas postagens</p>
                    <a href="" class="btn btn-default outline">Ver todas</a>
                </div>    
            </div>

            <?php
            $RecentPostsMaior = new WP_Query("showposts=1"); 
            while($RecentPostsMaior->have_posts()) : $RecentPostsMaior->the_post();?>       

            <div class="col-sm-6 col-md-4">
                <div class="footer-blog-image">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?> " rel="bookmark">
                        <?php the_post_thumbnail('blog-thumb-home', array( 'class' => 'img-responsive' )); ?>
                    </a>
                <?php else: ?>
                    <a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?> " rel="bookmark">
                        <img src="http://placehold.it/700x480/0070CC/FFFFFF?text=SEM+IMAGEM" class="img-responsive">
                    </a>
                <?php endif; ?>                     
                    <span>Publicado em <?php the_time('d/m'); ?></span>
                </div>
                <div class="footer-blog-title">
                    <h4><a href="<?php the_permalink() ?>"><?php cortaTitulo($post->post_title, 35); ?></a></h4>
                    <p><?php echo the_excerpt(); ?></p>
                </div>
            </div>

            <?php endwhile; ?>

            <?php
            $RecentPostsMenor = new WP_Query( array( 'showposts' => 2 , 'offset' => 1 )); 
            while($RecentPostsMenor->have_posts()) : $RecentPostsMenor->the_post();?>    

            <div class="col-sm-6 col-md-3">
                <div class="footer-blog-image">
                   <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?> " rel="bookmark">
                            <?php the_post_thumbnail('blog-thumb-home', array( 'class' => 'img-responsive' )); ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php the_permalink() ?>" title="Link para <?php the_title(); ?> " rel="bookmark">
                            <img src="http://placehold.it/510x356/0070CC/FFFFFF?text=SEM+IMAGEM" class="img-responsive">
                        </a>
                    <?php endif; ?>  
                    <span>Publicado em <?php the_time('d/m'); ?></span>
                </div>
                <div class="footer-blog-title">
                    <h4><a href="<?php the_permalink() ?>"><?php cortaTitulo($post->post_title, 30); ?></a></h4>
                    <p><?php echo the_excerpt(); ?></p>
                </div>
            </div> 
            
            <?php endwhile; ?>
                            
        </div>
    </footer>
        <div class="footer-bar">
            <div class="container">
                <div class="footer-bar-social-icons pull-left">
                    <span>Redes Sociais:</span>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="footer-bar-credits pull-right">
                    <span>Renata Paraguassú & Carreiro © 2016 - Desenvolvido pela NITDESIGN</span>
                </div>
            </div>
        </div>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-81635619-1','auto');ga('send','pageview');
    </script>   

    
    <!-- jQuery validate -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>        
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>        

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>              

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>

    <script src="<?php echo SCRIPTS_PATH ?>/app.js"></script>
    <?php wp_footer(); ?>
</body>
</html>