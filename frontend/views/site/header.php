<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#home"><img src="<?= Yii::$app->homeUrl ?>image/Tokyo.png" style="width: 350px;"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Philosophy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Career & Recruitment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn" type="submit"><i class="fa fa-globe" href="#"></i></button>
                <button class="btn" type="submit"><i class="fa fa-search" href="#"></i></button>
                <button class="btn" type="submit"><i class="fa fa-user" href="#"></i></button>
                <button class="btn" type="submit"><i class="fa fa-bars" href="#"></i></button>
            </form>
        </div>
    </div>
</nav>