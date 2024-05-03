<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
    <!--Start WZC-->
    <!--about section start-->
    <div class="about_section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 vertical-center">
                    <div class="about_title">
                        <h1 class="highest_text">Centrum voor dagverzorging</h1>
                        <h4 class="about_text">‘Zinvolle dagbesteding met professionele ondersteuning’</h4>
                        <p class="lorem_text">Het centrum voor dagverzorging (CVD) bevindt zich naast het
                            woonzorgcentrum.
                            Ouderen kunnen er tijdens weekdagen van 8u30 tot 16u30 verblijven voor een aangename (halve)
                            dag in huiselijke sfeer.
                            Naast een zinvolle dagbesteding is er ruime aandacht voor het medische aspect. Zo krijgen de
                            gasten ondersteuning bij
                            het medicatiegebeuren, begeleiding naar het toilet, maaltijdbegeleiding …
                            Op deze manier kunnen ook de mantelzorgers even op adem komen.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 elements-center">
                    <div class="image_2" href="#"><img src="./images/elderly-indian-man-retirement-house.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- Dagprijzen start -->
    <div class="dagprijzen_section">
        <div class="container">
            <h2 class="highest_text mb-2">Dagprijzen vanaf 1/07/2023:</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Dagverzorgingscentrum</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Volledige dag</td>
                        <td>23,16€</td>
                    </tr>
                    <tr>
                        <td>Halve dag</td>
                        <td>17,39€</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Dagprijzen einde -->

    <!-- about section start -->
    <div class="about_section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_2" href="#"><img
                                src="./images/elderly-couple-comfortable-sofas-receiving-assistance-from-helpful-resort-employee-retired-senior-man-receiving-cup-coffee-from-african-american-waiter-while-talking-his-wife.jpg">
                    </div>
                </div>
                <div class="col-md-6 vertical-center">
                    <div class="about_title">
                        <h1 class="highest_text">Inbegerepen in de dagprijs </h1><br>
                        <ol>
                            <li>&#8226 Middagmaal bestaande uit soep, hoofdschotel, dessert</li>
                            <li>&#8226 Water, koffie of thee</li>
                            <li>&#8226 Versnaperingen</li>
                            <li>&#8226 Zorg/begeleiding</li>
                            <li>&#8226 Themadagen</li>
                            <li>&#8226 Het gebruik van therapeutisch materiaal</li>
                            <li>&#8226 Administratieve ondersteuning</li>
                            <li>&#8226 Psychosociale begeleiding</li>
                            <li>&#8226 Incontinentiemateriaal</li>
                        </ol>
                        <p class="lorem_text">De kostprijs voor het vervoer van en naar het CVD is niet inbegrepen in de
                            dagprijs.
                            Vanuit SOLV kan dit vervoer voor jou georganiseerd worden waarbij de afrekening gebeurt via
                            dienstencheques.
                            Wij raden je aan om zeker bij jouw mutualiteit navraag doen omtrent de mogelijkheid tot
                            tussenkomst in de dagprijs en/of vervoer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <section id="contact-page dagverzorging" class="contact-page padding_top_50px padding_bottom_10px">
        <div class="container">
            <div class="row justify-content-center"> <!-- Nieuwe rij toegevoegd voor centreren -->
                <div class="col-md-8"> <!-- Nieuwe kolom toegevoegd voor het formulier -->
                    <h1 class="text-center">Dagverzorging</h1>
                    <form action="submit.php" method="post" enctype="multipart/form-data">
                        <!-- Gegevens aanvrager -->
                        <h2>Gegevens aanvrager</h2>
                        <div class="form-section">
                            <label for="voornaam_aanvrager" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_aanvrager" name="voornaam_aanvrager"
                                   required>
                            <label for="achternaam_aanvrager" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_aanvrager"
                                   name="achternaam_aanvrager" required>
                            <label for="telefoonnummer_aanvrager" class="form-label"><b>Telefoonnummer</b></label>
                            <input type="tel" class="form-control" id="telefoonnummer_aanvrager"
                                   name="telefoonnummer_aanvrager" pattern="[0-9]{4}-[0-9]{6}" required/>
                            <label for="email_aanvrager" class="form-label"><b>Email</b></label>
                            <input type="email" class="form-control" id="email_aanvrager" name="email_aanvrager"
                                   required/>
                            <label for="relatie_bewoner" class="form-label"><b>Relatie met bewoner</b></label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Bewoner" required>
                            <label for="Bewoner">Ik doe de aanvraag voor mezelf</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Kind" required>
                            <label for="Kind">Kind</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Kleinkind" required>
                            <label for="Kleinkind">Kleinkind</label><br>
                            <input type="radio" id="relatie_bewoner" name="relatie_bewoner" value="Anders" required>
                            <label for="Anders">Anders</label>

                            <h3>Gegevens toekomstige gast</h3>

                            <!-- Persoonsgegevens bewoner 1 -->
                            <h4>Gegevens gast 1</h4>
                            <label for="voornaam_bewoner_1" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_bewoner_1" name="voornaam_bewoner_1"
                                   required>
                            <label for="achternaam_bewoner_1" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_bewoner_1"
                                   name="achternaam_bewoner_1" required>
                            <label for="geboortedatum_bewoner_1" class="form-label"><b>Geboortedatum</b></label>
                            <input type="date" class="form-control" id="geboortedatum_bewoner_1"
                                   name="geboortedatum_bewoner_1" required>
                            <label for="burgerlijke_staat_1" class="form-label"><b>Burgerlijke staat</b></label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Gehuwd"
                                   required>
                            <label for="Gehuwd">Gehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Ongehuwd"
                                   required>
                            <label for="Ongehuwd">Ongehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_1" name="burgerlijke_staat_1" value="Weduwe"
                                   required>
                            <label for="Weduwe">Weduwe/weduwnaar</label>

                            <!-- Persoonsgegevens bewoner 2 -->
                            <h3>Gegevens gast 2 (optioneel)</h3>
                            <label for="voornaam_bewoner_2" class="form-label"><b>Voornaam</b></label>
                            <input type="text" class="form-control" id="voornaam_bewoner_2" name="voornaam_bewoner_2">
                            <label for="achternaam_bewoner_2" class="form-label"><b>Achternaam</b></label>
                            <input type="text" class="form-control" id="achternaam_bewoner_2"
                                   name="achternaam_bewoner_2">
                            <label for="geboortedatum_bewoner_2" class="form-label"><b>Geboortedatum</b></label>
                            <input type="date" class="form-control" id="geboortedatum_bewoner_2"
                                   name="geboortedatum_bewoner_2">
                            <label for="burgerlijke_staat_2" class="form-label"><b>Burgerlijke staat</b></label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Gehuwd">
                            <label for="Gehuwd">Gehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Ongehuwd">
                            <label for="Ongehuwd">Ongehuwd</label><br>
                            <input type="radio" id="burgerlijke_staat_2" name="burgerlijke_staat_2" value="Weduwe">
                            <label for="Weduwe">Weduwe/weduwnaar</label><br>

                            <!-- Extra gegevens bewoner(s) -->
                            <label for="telefoonnummer_bewoner" class="form-label"><b>Telefoonnummer toekomstige
                                    gast</b></label>
                            <input type="tel" class="form-control" id="telefoonnummer_bewoner"
                                   name="telefoonnummer_bewoner" pattern="[0-9]{4}-[0-9]{6}" required/>
                            <label for="email_bewoner" class="form-label"><b>Email toekomstige gast</b></label>
                            <input type="email" class="form-control" id="email_bewoner" name="email_bewoner"/>
                            <label for="verhouding_bewoners" class="form-label"><b>Verhouding tot elkaar</b></label><br>
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
                            <input type="radio" id="interesse" name="interesse" value="halve_dag">
                            <label for="halve_dag">Halve dag</label><br>
                            <input type="radio" id="interesse" name="interesse" value="volledige_dag">
                            <label for="volledige_dag">Volledige dag</label><br>
                            <input type="radio" id="interesse" name="interesse" value="weekschema">
                            <label for="weekschema">Weekschema</label><br>
                            <label for="interesse" class="form-label"><b>Vervoer nodig?</b></label><br>
                            <input type="radio" id="interesse" name="interesse" value="geen_vervoer">
                            <label for="geen_vervoer">Geen vervoer nodig</label><br>
                            <input type="radio" id="interesse" name="interesse" value="vervoer_heen">
                            <label for="vervoer_heen">Heen</label><br>
                            <input type="radio" id="interesse" name="interesse" value="vervoer_terug">
                            <label for="vervoer_terug">Terug</label><br>
                            <input type="radio" id="interesse" name="interesse" value="heen_terug">
                            <label for="heen_terug">Heen en terug</label><br>
                            <label for="woonsituatie" class="form-label"><b>Huidige woonsituatie</b></label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="thuis">
                            <label for="thuis">Thuis</label><br>
                            <input type="radio" id="woonsituatie" name="woonsituatie" value="inwonend">
                            <label for="inwonend">Inwonend</label><br>
                            <label for="datum_aanvang" class="form-label"><b>Gewenste startdatum</b></label>
                            <input type="date" class="form-control" id="datum_aanvang" name="datum_aanvang" required>
                            <label for="vragen" class="form-label form-vragen"><b>Verdere vragen?</b></label>
                            <input type="text" class="form-control" id="vragen" name="vragen" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Verzenden</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Einde WZC-->
<?php include 'includes/footer.php'; ?>