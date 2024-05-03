<?php include 'includes/header.php'; ?>

<?php include 'includes/navigation.php'; ?>
    <!--Start TV-->

    <!--about section start-->
    <div class="about_section mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mobile mb-4" data-aos="fade-left">
                    <div class="image_2" href="#"><img src="./images/tijdelijkverblijf.jpg" alt="Tijdelijk verblijf"></div>
                </div>
                <div class="col-md-6 vertical-center" data-aos="fade-right">
                    <div class="about_title">
                        <h4 class="about_text">Over SOLV</h4>
                        <h1 class="highest_text">Tijdelijk verblijf</h1>
                        <p class="lorem_text">Wens je extra zorgondersteuning na een ziekenhuisopname of
                            als je familie tijdelijk niet beschikbaar is? Of heeft je mantelzorger wat rust nodig?
                            Dan kan een opname in ons aangemeld herstelverblijf een oplossing zijn. Je kunt hier
                            verblijven van 1 tot 3 maanden, en de duur kan worden aangepast aan je behoeften.
                            Net als in het woonzorgcentrum bieden we een liefdevolle en veilige omgeving met
                            persoonlijke zorg. Ons herstelverblijf heeft drie kamers met alle benodigde aanpassingen
                            om de beste zorg te garanderen. We streven ernaar om een comfortabele en ondersteunende
                            omgeving te bieden waarin je kunt herstellen en je op je gemak voelt. Vanaf 1/01/2023
                            bedraagt
                            de dagprijs 75,20 Euro, zonder tussenkomst van de mutualiteit.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 desktop" data-aos="fade-left">
                    <div class="image_2" href="#"><img src="./images/tijdelijkverblijf.jpg" alt="Tijdelijk verblijf"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- about section start -->
    <div class="about_section mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-right">
                    <div class="image_2" href="#"><img src="./images/old-patient-suffering-from-parkinson.jpg" alt="Inbegrepen in de dagprijs"></div>
                </div>
                <div class="col-md-6 vertical-center" data-aos="fade-left">
                    <div class="about-title">
                        <h1 class="highest_text">Inbegerepen in de dagprijs </h1>
                        <ol>
                            <li>&#8226 De woongelegenheid met bijhorende infrastructuur</li>
                            <li>&#8226 Inrichtings- en onderhoudswerken</li>
                            <li>&#8226 Elektriciteit/water/gasverbruik</li>
                            <li>&#8226 Standaardabonnement kabeldistributie en telefonie</li>
                            <li>&#8226 Verzekering brand en burgerlijke aansprakelijkheid</li>
                            <li>&#8226 Alle administratieve kosten m.b.t. het verblijf</li>
                            <li>&#8226 Onderhoud van je kamer</li>
                            <li>&#8226 Verpleging en verzorging 24u/24u</li>
                            <li>&#8226 Persoonlijke toiletartikelen (wc-papier, zeep, tandpasta)</li>
                            <li>&#8226 Verzorgingsmateriaal inbegrepen in de RIZIV-tegemoetkoming</li>
                            <li>&#8226 Bedlinnen</li>
                            <li>&#8226 Incontinentiemateriaal</li>
                            <li>&#8226 Maaltijden (incl. dieetmaaltijden) met drank (water en tafelbier)</li>
                            <li>&#8226 Water doorheen de dag</li>
                            <li>&#8226 Animatie</li>
                            <li>&#8226 Ergotherapie en kiné (afhankelijk van de zorggraad)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- about section start -->
    <div class="about_section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mobile mb-4" data-aos="fade-left">
                    <div class="image_2" href="#"><img src="./images/old-man-calling.jpg" alt="Niet inbegrepen in de dagprijs"></div>
                </div>
                <div class="col-md-6 vertical-center" data-aos="fade-right">
                    <div class="about_title">
                        <h1 class="highest_text">Niet inbegerepen in de dagprijs </h1>
                        <ol>
                            <li>&#8226 Medicatie</li>
                            <li>&#8226 Telefoonkosten (gesprekskosten)</li>
                            <li>&#8226 Huur TV (dagprijs : 0,40€)</li>
                            <li>&#8226 Kostprijs specifieke TV-zenderpakketten</li>
                            <li>&#8226 Reinigingskosten van je persoonlijke kleding (wasserij)</li>
                            <li>&#8226 Uitstappen</li>
                            <li>&#8226 Prestaties van je huisarts</li>
                            <li>&#8226 Manicure/Pedicure</li>
                            <li>&#8226 Kapper</li>
                            <li>&#8226 Kiné (afhankelijk van de zorggraad)</li>
                    </div>
                </div>
                <div class="col-md-6 desktop" data-aos="fade-left">
                    <div class="image_2" href="#"><img src="./images/old-man-calling.jpg" alt="Niet inbegrepen in de dagprijs"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <div class="about-section mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center">Contactformulier</h1>
                    <form action="submit.php" method="post" enctype="multipart/form-data">
                        <!-- Gegevens aanvrager -->
                        <h2>Gegevens aanvrager</h2>
                        <div class="form-section">
                            <label for="voornaam_aanvrager" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_aanvrager" name="voornaam_aanvrager" required>
                            <label for="achternaam_aanvrager" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_aanvrager" name="achternaam_aanvrager" required>
                            <label for="telefoonnummer_aanvrager" class="form-label"><b>Telefoonnummer</b></label>
                            <input type="tel" class="form-control" id="telefoonnummer_aanvrager" name="telefoonnummer_aanvrager" pattern="[0-9]{4}-[0-9]{6}" required />
                            <label for="email_aanvrager" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email_aanvrager" name="email_aanvrager" required />
                            <label for="relatie_bewoner" class="form-label"><b>Relatie met bewoner</b></label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Bewoner" required>
                            <label for="Bewoner">Ik doe de aanvraag voor mezelf</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Kind" required>
                            <label for="Kind">Kind</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Kleinkind" required>
                            <label for="Kleinkind">Kleinkind</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Anders" required>
                            <label for="Anders">Anders</label>

                            <h3>Gegevens toekomstige bewoner(s)</h3>

                            <!-- Persoonsgegevens bewoner 1 -->
                            <h4>Gegevens bewoner 1</h4>
                            <label for="voornaam_bewoner_1" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_bewoner_1" name="voornaam_bewoner_1" required>
                            <label for="achternaam_bewoner_1" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_bewoner_1" name="achternaam_bewoner_1" required>
                            <label for="geboortedatum_bewoner_1" class="form-label"><b>Geboortedatum</b></label>
                            <input type="date" class="form-control" id="geboortedatum_bewoner_1" name="geboortedatum_bewoner_1" required>
                            <label for="burgerlijke_staat_1" class="form-label"><b>Burgerlijke staat</b></label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Gehuwd" required>
                            <label for="Gehuwd">Gehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Ongehuwd" required>
                            <label for="Ongehuwd">Ongehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Weduwe" required>
                            <label for="Weduwe">Weduwe/weduwnaar</label>

                            <!-- Persoonsgegevens bewoner 2 -->
                            <h3>Gegevens bewoner 2 (optioneel)</h3>
                            <label for="voornaam_bewoner_2" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_bewoner_2" name="voornaam_bewoner_2">
                            <label for="achternaam_bewoner_2" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_bewoner_2" name="achternaam_bewoner_2">
                            <label for="geboortedatum_bewoner_2" class="form-label"><b>Geboortedatum</b></label>
                            <input type="date" class="form-control" id="geboortedatum_bewoner_2" name="geboortedatum_bewoner_2">
                            <label for="burgerlijke_staat_2" class="form-label"><b>Burgerlijke staat</b></label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Gehuwd">
                            <label for="Gehuwd">Gehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Ongehuwd">
                            <label for="Ongehuwd">Ongehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Weduwe">
                            <label for="Weduwe">Weduwe/weduwnaar</label><br>

                            <!-- Extra gegevens bewoner(s) -->
                            <label for="telefoonnummer_bewoner" class="form-label"><b>Telefoonnummer bewoner</b></label>
                            <input type="tel" class="form-control" id="telefoonnummer_bewoner" name="telefoonnummer_bewoner" pattern="[0-9]{4}-[0-9]{6}" required />
                            <label for="email_bewoner" class="form-label"><b>Email bewoner</b></label>
                            <input type="email" class="form-control" id="email_bewoner" name="email_bewoner" />
                            <label for="verhouding_bewoners" class="form-label"><b>Verhouding tussen bewoners</b></label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Gehuwd">
                            <label for="Gehuwd">Gehuwd</label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Verloofd">
                            <label for="Verloofd">Verloofd</label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Relatie">
                            <label for="Relatie">Relatie</label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Vrienden">
                            <label for="Vrienden">Vrienden</label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Familie">
                            <label for="Familie">Familie</label><br>
                            <input type="radio" id="verhouding_bewoners" name="verhouding_bewoners" value="Anders">
                            <label for="Anders">Anders</label><br>
                            <label for="interesse" class="form-label"><b>Interesse in</b></label><br>
                            <input type="radio" id="interesse" name="interesse" value="kamer1-20">
                            <label for="kamer1-20">Kamer 1 persoon < 20m²</label><br>
                            <input type="radio" id="interesse" name="interesse" value="kamer1+20">
                            <label for="kamer1+20">Kamer 1 persoon > 20m²</label><br>
                            <input type="radio" id="interesse" name="interesse" value="kamer-echtpaar-20">
                            <label for="kamer-echtpaar-20">Kamer echtpaar < 20m²</label><br>
                            <input type="radio" id="interesse" name="interesse" value="kamer-echtpaar+20">
                            <label for="kamer-echtpaar+20">Kamer echtpaar > 20m²</label><br>
                            <input type="radio" id="interesse" name="interesse" value="flat1">
                            <label for="flat1">Flat 1 persoon</label><br>
                            <input type="radio" id="interesse" name="interesse" value="flat-koppel">
                            <label for="flat-koppel">Flat koppel</label><br>
                            <label for="woonsituatie" class="form-label"><b>Huidige woonsituatie</b></label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="thuis">
                            <label for="thuis">Thuis</label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="inwonend">
                            <label for="inwonend">Inwonend</label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="ziekenhuis">
                            <label for="ziekenhuis">Ziekenhuis</label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="revalidatiecentrum">
                            <label for="revalidatiecentrum">Revalidatiecentrum</label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="assistentiewoning">
                            <label for="assistentiewoning">Assistentiewoning</label><br>
                            <label for="ondersteuning" class="form-label"><b>Huidige ondersteuning</b></label><br>
                            <input type="radio" id="ondersteuning" name="ondersteuning" value="mantelzorg">
                            <label for="mantelzorg">Mantelzorg</label><br>
                            <input type="radio" id="ondersteuning" name="ondersteuning" value="thuisverpleging">
                            <label for="thuisverpleging">Thuisverpleging</label><br>
                            <input type="radio" id="ondersteuning" name="ondersteuning" value="poetshulp">
                            <label for="poetshulp">Poetshulp</label><br>
                            <input type="radio" id="ondersteuning" name="ondersteuning" value="huishoudhulp">
                            <label for="huishoudhulp">Huishoudhulp</label><br>
                            <label for="datum_aanvang" class="form-label"><b>Gewenste datum aanvang verblijf</b></label>
                            <input type="date" class="form-control" id="datum_aanvang" name="datum_aanvang" required>
                            <label for="gewenste_duur" class="form-label"><b>Gewenste duur verblijf</b></label><br>
                            <input type="radio" id="gewenste_duur" name="gewenste_duur" value="1tot7">
                            <label for="1tot7">1 tot 7 dagen</label><br>
                            <input type="radio" id="gewenste_duur" name="gewenste_duur" value="1tot4">
                            <label for="1tot4">1 tot 4 weken</label><br>
                            <label for="vragen" class="form-label form-vragen"><b>Verdere vragen?</b></label>
                            <input type="text" class="form-control" id="vragen" name="vragen" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Verzenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>