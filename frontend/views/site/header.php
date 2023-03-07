 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
     <div class="container">
         <a href="<?= Yii::$app->homeUrl ?>site/#home" class="nav-link"><img src="<?= Yii::$app->homeUrl ?>image/tcg-group.png" class="image-tokyo" style="width: 200px;"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
             <span class="snavbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse mt-3" id="navbarScroll">
             <ul class="navbar-nav me-auto  navbar-nav-scroll" style="--bs-scroll-height: 100px; margin: top 20px;padding-left: 140px;font-family:'klavika';font-size: 18px;">
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/philosophy" class="nav-link">Philosophy</a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/services" class="nav-link">Services</a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/people" class="nav-link">People</a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/career" class="nav-link">Career & Recruitment </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/about1" class="nav-link">About us</a>
                 </li>
                 <li class="nav-item">
                     <a href="<?= Yii::$app->homeUrl ?>site/contact Us" class="nav-link">Contact Us</a>
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