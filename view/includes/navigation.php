<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand my-auto" href="#"><img src="images/solv-tekst-white.png" alt="SOLV Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-items-collapse" aria-controls="nav-items-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-items-collapse">
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $page_name == "home" ? "active" : "" ?>"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="afdelingen-items" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Afdelingen</a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="afdelingen-items">
                        <a class="dropdown-item" href="index.php#woonzorgkamer">Woonzorgkamer</a>
                        <a class="dropdown-item" href="index.php#woonzorgflat">Woonzorgflat</a>
                        <a class="dropdown-item" href="index.php#tijdelijkverblijf">Tijdelijk verblijf</a>
                        <a class="dropdown-item" href="index.php#dagverblijf">Dagverblijf</a>
                        <a class="dropdown-item" href="index.php#assistentiewoningen">Assistentiewoningen</a>
                    </div>
                </li>
                <li class="nav-item <?php echo $page_name == "agenda" ? "active" : "" ?>"><a class="nav-link" href="agenda.php">Agenda</a></li>
                <li class="nav-item <?php echo $page_name == "overons" ? "active" : "" ?>"><a class="nav-link" href="overons.php">Over ons</a></li>
                <li class="nav-item dropdown <?php echo $page_name == "vragen" ? "active" : "" ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="vragen-items" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vragen</a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="vragen-items">
                        <a class="dropdown-item" href="vragen.php">Algemeen</a>
                        <a class="dropdown-item" href="vragen-assistentie.php">Assistentie</a>
                        <a class="dropdown-item" href="vragen-dagverblijf.php">Dagverblijf</a>
                    </div>
                </li>
                <li class="nav-item <?php echo $page_name == "contact" ? "active" : "" ?>"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>