<ul class="uk-nav uk-nav-default">
    <li class="uk-nav-header">Новости</li>
    <li><a href="<?= $this->Url->build(['controller'=>'News','action'=>'add'])?>">Добавить новость</a></li>
    <li><a href="<?= $this->Url->build(['controller'=>'News','action'=>'news'])?>">Список новостей</a></li>
</ul>
