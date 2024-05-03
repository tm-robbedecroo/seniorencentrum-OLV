<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<!-- contact section start -->
<div class="contact_section pt-5">
    <div class="container">
        <div class="row"> 
            <div class="col-md-6">
                <h1 class="contact_text">Contacteer ons</h1>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Naam" name="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email" name="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Onderwerp" name="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="message-bt" placeholder="Bericht" rows="5" id="comment" name="text"></textarea>
                    </div>
                </form>
                <div class="main_bt"><a href="#">Verstuur</a></div>
            </div>
            <div class="col-md-6">
                <h1 class="contact_text">Reviews</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h2 class="selfideno_text">Vic Tief</h2>
                            <div class="client_main">
                                <div class="image_5"><img src="images/chief-technology-officer-portrait-brussels-768x768 (1).jpg"></div>
                                <p class="lorem_ipsum_text">
                                    "Seniorencentrum Onze Lieve Vrouw in Bornem biedt een warme en gastvrije omgeving voor ouderen. 
                                    Het toegewijde personeel zorgt voor persoonlijke zorg en aandacht, waardoor bewoners zich echt thuis voelen."</p>
                                <div class="quote_icon"><img src="images/quote-icon.png"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h2 class="selfideno_text">Ief Vict</h2>
                            <div class="client_main">
                                <div class="image_5"><img src="images/Automotive-industry-corporate-headshot-photographer-brussels-768x768 (1).jpg"></div>
                                <p class="lorem_ipsum_text">"Een verblijf in Seniorencentrum Onze Lieve Vrouw in Bornem is een zegen voor onze ouderen. 
                                    Met uitstekende faciliteiten en een vriendelijke sfeer, biedt het centrum een veilige haven waar 
                                    ouderen kunnen genieten van hun gouden jaren."</p>
                                <div class="quote_icon"><img src="images/quote-icon.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->

<?php include 'includes/footer.php'; ?>