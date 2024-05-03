<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>
    <!--Start WZC-->
    <!--about section start-->
    <div class="about_section my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mobile mb-4">
                    <div class="image_2" href="#"><img src="./images/assistentiewoningen.jpg"></div>
                </div>
                <div class="col-md-6 vertical-center">
                    <div class="about_title">
                        <h1 class="highest_text">Assistentiewoningen</h1>
                        <h4 class="about_text">‘Assistentieflats met 24u/24u hulpverlening i.g.v. noodsituaties’</h4>
                        <p class="lorem_text">Onze assistentiewoningen bieden zelfstandig wonen aan voor personen die
                            voldoende zelfredzaam zijn,
                            maar toch in een veilige omgeving willen wonen met de nodige diensten en zorg binnen
                            handbereik.
                            Deze woonvorm richt zich uitsluitend naar zelfredzame personen : personen die in staat zijn
                            om zich zelfstandig te verplaatsen
                            (eventueel mits het gebruik van hulpmiddelen) en die zelf hun leven en huishouden kunnen
                            organiseren, hierbij eventueel
                            ondersteund door thuiszorgdiensten zoals thuisverpleging, poetshulp en bejaardenhulp. De
                            assistentiewoningen beschikken
                            over een noodoproepsysteem : bij alarmering coördineert gekwalificeerd personeel van het
                            Seniorencentrum de zorg.
                            De woonassistent kan je helpen bij allerlei administratieve verplichtingen en kan je heel
                            wat informatie bezorgen
                            over thuiszorgdiensten die het zelfstandig wonen kunnen vergemakkelijken. Buiten de
                            kantooruren kan u bij de
                            inwonende huisbewaarder terecht voor de nodige ondersteuning en hulp bij vragen.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 desktop">
                    <div class="image_2" href="#"><img src="./images/assistentiewoningen.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- Dagprijzen start -->
    <div class="dagprijzen_section">
        <div class="container">
            <h1 class="highest_text mb-0">3 verschillende types</h1>
            <p class="lorem_text mt-0">Solv heeft 3 groepen van erkende assistentiewoningen, met in totaal 60 assistentiewoningen:</p>
            <ol>
                <li>&#8226 7 assistentiewoningen gelegen Stationsstraat 29</li>
                <li>&#8226 27 assistentiewoningen gelegen Dries 57</li>
                <li>&#8226 26 assistentiewoningen gelegen Dries 67</li>
            </ol>
            <h2 class="highest_text mt-5">Dagprijzen vanaf 1/07/2023:</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Assistentiewoning SOLV</th>
                        <th>Dagprijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Assistentiewoning 1 bewoner</td>
                        <td>29,83€</td>
                    </tr>
                    <tr>
                        <td>Assistentiewoning 2 bewoners</td>
                        <td>67,35€</td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th>Assistentiewoning SOLV</th>
                        <th>Dagprijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Assistentiewoning 1 bewoner</td>
                        <td>30,33€</td>
                    </tr>
                    <tr>
                        <td>Assistentiewoning 2 bewoners</td>
                        <td>32,75€</td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- Dagprijzen einde -->


    <section id="contact-page woonzorgcentrum" class="contact-page padding_top_50px padding_bottom_10px">
        <div class="container">
            <div class="row justify-content-center"> <!-- Nieuwe rij toegevoegd voor centreren -->
                <div class="col-md-8"> <!-- Nieuwe kolom toegevoegd voor het formulier -->
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
                            <input type="email" class="form-control" id="email_bewoner" name="email_bewoner"/>
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
                            <input type="radio" id="interesse" name="interesse" value="type1">
                            <label for="type1">Type 1</label><br>
                            <input type="radio" id="interesse" name="interesse" value="type2">
                            <label for="type2">Type 2</label><br>
                            <input type="radio" id="interesse" name="interesse" value="type3">
                            <label for="type3">Type 3</label><br>
                            <label for="datum_aanvang" class="form-label"><b>Gewenste datum aanvang verblijf</b></label>
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