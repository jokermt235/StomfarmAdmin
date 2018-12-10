<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light"><?=$news->title?></span>
    </div>
</div>
<div class="uk-panel uk-padding-large uk-margin-top uk-margin-large-bottom">
    <img src="<?= $this->Url->assetUrl("/img/news/img/".$news->image)?>" alt="" class="uk-align-left uk-margin-remove-adjacent" height="768px" width="768px">
    <h5 class="uk-margin-remove-top">
        <?= $news->description?>
    </h5>
    <div class="uk-panel uk-align-right">
        <span class="uk-margin-small-right">Опубликовано:</span>
        <span><?=$news->created?></span>
    </div>
</div>
<?= $this->element('footer')?>
