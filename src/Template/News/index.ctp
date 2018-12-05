<?= $this->element('top_menu')?>
<div class="uk-panel">
    <div class="uk-panel" style="background-color: #009246;padding: 10px 0 10px 70px;">
        <span class="uk-heading-primary uk-light">Новости</span>
    </div>
</div>
<div class="uk-panel uk-padding-large uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid uk-child-width-expand@s">
        <?php foreach($news as $new):?>
        <div class="uk-text-center uk-margin-bottom">
            <a href="<?= $this->Url->build(['controller'=>'news','action'=>'view',$new['url']])?>">
                <div class="uk-inline-clip uk-transition-toggle uk-margin-bottom uk-card uk-card-default" tabindex="0">
                    <?= $this->Html->image('news/small_'.$new['image'])?>
                    <div class="uk-card-badge uk-label-success">
                        <span uk-icon="icon: history"></span>
                        <span class="uk-margin-small-left"><?= $new['created']?></span>
                    </div>
                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                        <p class="uk-h5 uk-margin-remove">
                            <?php $out = strlen($new['description']) > 50 ? substr($new['description'],0,50)."..." : $in;?>
                            <?= $out?>
                        </p>
                    </div>
                </div>
            </a>
            <div>
                <a href="<?= $this->Url->build(['controller'=>'news','action'=>'view',$new['url']])?>" class="uk-margin uk-link-reset uk-h4"><?= $news['title']?></a>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>
<?= $this->element('footer')?>
