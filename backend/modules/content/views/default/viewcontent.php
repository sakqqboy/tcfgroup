<div class=row>
    <div class="col-lg-12 mycontent text-center">
        <h1>My Content</h1>
    </div>
</div>

<div class="card col-lg-12 col-mg-6">
    <div>
        <h3>CONTENT ID : <?= isset($content->contentId) ? $content->contentId : '' ?></h3>
        <h3>CONTENT NAME : <?= isset($content->contentName) ? $content->contentName : '' ?></h3>
        <h3>TITLE : <?= isset($content->title) ? $content->title : '' ?></h3>
        <h3>DETAIL : <?= isset($content->detail) ? $content->detail : '' ?></h3>
    </div>
</div>