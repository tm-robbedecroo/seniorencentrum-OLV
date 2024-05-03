<h1 class="highest_text text-center">Contactformulier</h1>
<form action="submit.php" method="post" enctype="multipart/form-data">
    <!-- Gegevens aanvrager -->
    <h2 class="highest_text">Gegevens aanvrager</h2>
    <div class="form-section">

        <!-- VOORNAAM -->
        <label for="firstname" class="form-label fw-bold mb-0">Voornaam</label>
        <input type="text" name="firstname" id="firstname" class="form-control mt-0">

        <!-- ACHTERNAAM -->
        <label for="lastname" class="form-label fw-bold mb-0">Achternaam</label>
        <input type="text" name="lastname" id="lastname" class="form-control mt-0">

        <!-- TELEFOONNUMMER -->
        <label for="phone" class="form-label fw-bold mb-0">Telefoonnummer</label>
        <input type="text" name="phone" id="phone" class="form-control mt-0">

        <!-- EMAIL -->
        <label for="email" class="form-label fw-bold mb-0">Email</label>
        <input type="email" name="email" id="email" class="form-control mt-0">

        <!-- RELATIE MET BEWONER -->
        <h5 class="highest_text mb-0">Relatie met de bewoner</h5>
        <div class="form-check my-0">
            <input type="radio" name="rel" id="rel-1" class="form-check-input">
            <label for="rel-1" class="form-check-label fw-bold">Ik doe de aanvraag voor mezelf</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="rel" id="rel-2" class="form-check-input">
            <label for="rel-2" class="form-check-label fw-bold">Kind</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="rel" id="rel-3" class="form-check-input">
            <label for="rel-3" class="form-check-label fw-bold">Kleinkind</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="rel" id="rel-4" class="form-check-input">
            <label for="rel-4" class="form-check-label fw-bold">Anders</label>
        </div>

        <!-- BEWONER 1 -->
        <h3 class="highest_text">Gegevens toekomstige bewoner(s)</h3>
        <h4 class="highest_text fw-normal">Gegevens bewoner 1</h4>
        <!-- VOORNAAM -->
        <label for="res-firstname" class="form-label fw-bold mb-0">Voornaam</label>
        <input type="text" name="res-firstname" id="res-firstname" class="form-control mt-0">

        <!-- ACHTERNAAM -->
        <label for="res-lastname" class="form-label fw-bold mb-0">Achternaam</label>
        <input type="text" name="res-lastname" id="res-lastname" class="form-control mt-0">

        <!-- GEBOORTEDATUM -->
        <label for="res-birthdate" class="form-label fw-bold mb-0">Geboortedatum</label>
        <input type="date" name="res-birthdate" id="res-birthdate" class="form-control mt-0">

        <!-- BURGERLIJKE STAAT -->
        <h5 class="highest_text mb-0">Burgerlijke staat</h5>
        <div class="form-check my-0">
            <input type="radio" name="ms-1" id="ms-1-1" class="form-check-input">
            <label for="ms-1-1" class="form-check-label fw-bold">Gehuwd</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="ms-1" id="ms-1-2" class="form-check-input">
            <label for="ms-1-2" class="form-check-label fw-bold">Ongehuwd</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="ms-1" id="ms-1-3" class="form-check-input">
            <label for="ms-1-3 class=form-check-label fw-bold">Weduwe/weduwnaar</label>
        </div>

        <!-- BEWONER 2 -->
        <h3 class="highest_text">Gegevens toekomstige bewoner(s)</h3>
        <h4 class="highest_text fw-normal">Gegevens bewoner 2</h4>
        <!-- VOORNAAM -->
        <label for="res-2-firstname" class="form-label fw-bold mb-0">Voornaam</label>
        <input type="text" name="res-2-firstname" id="res-2-firstname" class="form-control mt-0">

        <!-- ACHTERNAAM -->
        <label for="res-2-lastname" class="form-label fw-bold mb-0">Achternaam</label>
        <input type="text" name="res-2-lastname" id="res-2-lastname" class="form-control mt-0">

        <!-- GEBOORTEDATUM -->
        <label for="res-2-birthdate" class="form-label fw-bold mb-0">Geboortedatum</label>
        <input type="date" name="res-2-birthdate" id="res-2-birthdate" class="form-control mt-0">

        <!-- BURGERLIJKE STAAT -->
        <h5 class="highest_text mb-0">Burgerlijke staat</h5>
        <div class="form-check my-0">
            <input type="radio" name="ms-2" id="ms-2-1" class="form-check-input">
            <label for="ms-2-1" class="form-check-label fw-bold">Gehuwd</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="ms-2" id="ms-2-2" class="form-check-input">
            <label for="ms-2-2" class="form-check-label fw-bold">Ongehuwd</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="ms-2" id="ms-2-3" class="form-check-input">
            <label for="ms-2-3" class="form-check-label fw-bold">Weduwe/weduwnaar</label>
        </div>

        <!-- TELEFOONNUMMER BEWONER -->
        <label for="res-phone" class="form-label fw-bold mb-0">Telefoonnummer bewoner</label>
        <input type="text" name="res-phone" id="res-phone" class="form-control mt-0">

        <!-- EMAIL BEWONER -->
        <label for="res-email" class="form-label fw-bold mb-0">Email bewoner</label>
        <input type="email" name="res-email" id="res-email" class="form-control mt-0">

        <!-- VERHOUDING TUSSEN BEWONERS -->
        <h5 class="highest_text mb-0">Verhouding tussen bewoners</h5>
        <div class="form-check my-0">
            <input type="radio" name="rel-res" id="rel-res-1" class="form-check-input">
            <label for="rel-res-1" class="form-check-label">Gehuwd</label>
        </div>
        <div class="form-check my-0">
            <input type="radio" name="rel-res" id="rel-res-2" class="form-check-input">
            <label for="rel-res-2" class="form-check-label">Verloofd</label>
        </div>
        <div class="form-check">
            <input type="radio" name="rel-res" id="rel-res-3" class="form-check-input">
            <label for="rel-res-3" class="form-check-label">Relatie</label>
        </div>
        <div class="form-check">
            <input type="radio" name="rel-res" id="rel-res-4" class="form-check-input">
            <label for="rel-res-4" class="form-check-label">Vrienden</label>
        </div>
        <div class="form-check">
            <input type="radio" name="rel-res" id="rel-res-5" class="form-check-input">
            <label for="rel-res-5" class="form-check-label">Familie</label>
        </div>
        <div class="form-check">
            <input type="radio" name="rel-res" id="rel-res-6" class="form-check-input">
            <label for="rel-res-6" class="form-check-label">Anders</label>
        </div>

        <!-- INTERESSE IN -->
        <h5 class="highest_text">Interesse in</h5>
        <div class="form-check">
            <input type="radio" name="interest" id="interest-1" class="form-check-input">
            <label for="interest-1" class="form-check-label">Type 1</label>
        </div>
        <div class="form-check">
            <input type="radio" name="interest" id="interest-2" class="form-check-input">
            <label for="interest-2" class="form-check-label">Type 2</label>
        </div>
        <div class="form-check">
            <input type="radio" name="interest" id="interest-3" class="form-check-input">
            <label for="interest-3" class="form-check-label">Type 3</label>
        </div>

        <!-- GEWENSTE DATUM AANVANG VERBLIJF -->
        <label for="start-date" class="form-label fw-bold mb-0">Gewenste datum aanvang verblijf</label>
        <input type="date" name="start-date" id="start-date" class="form-control mt-0">

        <!-- VERDERE VRAGEN -->
        <label for="questions" class="form-label fw-bold mb-0">Verdere vragen?</label>
        <input type="text" name="questions" id="questions" class="form-control mt-0">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Verzenden</button>
</form>