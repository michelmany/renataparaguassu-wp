<?php get_header("headers.php"); ?>

    <section id="section1" class="banner-home">
            <div class="banner-home-inner">
                <div class="banner-home-image">
                    <!-- <img src="http://placehold.it/1280x450" class="img-responsive"> -->
                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 7 ); } ?>
                    <div class="banner-home-image-shadow"></div>        
                </div>
            </div>
    </section>

    <section id="section2" class="servicos text-center">
        <div class="container">
            <div class="servicos-header">
                <h2><img src="<?php echo IMAGES_PATH ?>/icon-logo-blue.png"> Serviços</h2>
                <p>Confira todos os produtos que prestamos</p>
            </div>
            <div class="servicos-content">
                <div class="col-sm-4">
                    <h3>Odontologia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nihil nam sed consectetur at quis, molestiae, velit dolorum perspiciatis similique ipsa iste atque cupiditate. Unde illo laboriosam deleniti porro ab.</p>
                    <a href="<?php bloginfo('home'); ?>/servicos">Saiba mais</a>
                </div>
                <div class="col-sm-4">
                    <h3>Estética</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nihil nam sed consectetur at quis, molestiae, velit dolorum perspiciatis similique ipsa iste atque cupiditate. Unde illo laboriosam deleniti porro ab.</p>       
                    <a href="<?php bloginfo('home'); ?>/servicos">Saiba mais</a>         
                </div>
                <div class="col-sm-4">
                    <h3>Implante</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nihil nam sed consectetur at quis, molestiae, velit dolorum perspiciatis similique ipsa iste atque cupiditate. Unde illo laboriosam deleniti porro ab.</p>  
                    <a href="<?php bloginfo('home'); ?>/servicos">Saiba mais</a>  
                </div>
            </div>
        </div>
    </section>

<?php get_footer("footer.php"); ?>