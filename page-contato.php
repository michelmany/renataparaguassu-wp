<?php include("header.php"); ?>
<section class="page-contato">
    <div class="page-head">
        <div class="container text-center">
            <h2><img src="<?php echo IMAGES_PATH ?>/icon-logo-white.png"> Fale Conosco</h2>
        </div>
    </div>
    <div class="page-content contato">
        <div class="container">
            <form action="">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>                                       
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Mensagem" rows="10"></textarea>
                    </div>  
                    <button type="submit" class="btn btn-custom outline pull-right">Enviar mensagem</button>                  
                </div>
                    
            </form>
                <div class="col-md-4">
                    <p class="phone"><i class="fa fa-phone"></i> (21) 2622-8283</p><br>
                    <p><i class="fa fa-map-marker"></i> Rua Aurelino Leal, 40 - 501<br>Centro - Niterói - RJ</p>
                </div>
        </div>

    </div>
    <div id="map" class="no-padding">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3675.454999112904!2d-43.123551541433166!3d-22.89658269623427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1471379784923" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>        
    </div>     
</section>

<?php include("footer.php"); ?>