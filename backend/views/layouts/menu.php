<nav>
    <?php
       $action = Yii::$app->controller->action->id;
    ?>
    <ul class="nav-menu navbar-dark bg-dark">
        <div class="font-menu">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span class="p-1">Menu</span>
        </div>
        <div class="font-emo">
            ____________
        </div>
        <div class="col-lg-12 pd-menu">
            <li class="mt-2 <?= $action == 'content'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'content/default/content'?>" class="lcon-menu">
                    <i class="fa fa-home fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Content
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'member'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'member/default/member'?>">
                    <i class="fa fa-user fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Member
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'branch'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'masterdata/branch/branch'?>">
                    <i class="fa fa-server fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Branch
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'section'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'/masterdata/section/section'?>">
                    <i class="fa fa-filter fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Section
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'team'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'/masterdata/team/team'?>">
                    <i class="fa fa-users fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Team
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'team-position'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'/masterdata/team-position/team-position'?>">
                    <i class="fa fa-archive fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        TeamP
                    </span>
                </a>
            </li>
            <li class="mt-2 <?= $action == 'position'?'bg-list':''?>">
                <a href="<?=Yii::$app->homeUrl.'/masterdata/position/position'?>">
                    <i class="fa fa-thumb-tack fas" aria-hidden="true"></i>
                    <span class="nav-items">
                        Position
                    </span>
                </a>
            </li>
        </div>
    </ul>
</nav>