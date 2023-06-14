<?php
    $this -> title = 'View Content';
?>
<div class="row">
    <div class="col-lg-12 border border-dark mt-5 bd-position">
        <div class="text-center h2 font-title mt-3">
            MY CONTENT
        </div>
        <div>
           <span class="font-sub"> ID : </span>
           <span class="font-body"><?= isset($content -> contentId) ? $content -> contentId : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Name : </span>
            <span class="font-body"><?= isset($content -> contentName) ? $content -> contentName : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Title : </span>
            <span class="font-body"><?= isset($content -> title) ? $content -> title : '' ?></span>
        </div>
        <div>
            <span class="font-sub"> Details : </span>
            <span class="font-body"><?= isset($content -> detail) ? $content -> detail : '' ?></span>
        </div><br>
    </div>
</div>