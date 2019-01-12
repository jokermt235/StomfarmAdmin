<div class="tm-sidebar-left uk-visible@m">
    <ul class="uk-nav uk-nav-primary">
        <li class="uk-nav-header">Модули</li>
        <li class="uk-nav-divider"></li>
        <li>
            <div uk-grid class="uk-margin-small-top">
                <div class="uk-width-expand">
                    <a href="<?= $this->Url->build(['controller'=>'Users','action'=>'index'])?>">
                        Пользователи</a>
                </div>
                <div>
                    <a href="<?=$this->Url->build(['controller'=>'Users','action'=>'add'])?>"><span class="uk-label"> + add</span></a>
                </div>
            </div>
        </li>
        <li>
            <div uk-grid class="uk-margin-small-top">
                <div class="uk-width-expand">
                    <a href="<?= $this->Url->build(['controller'=>'Partners','action'=>'index'])?>">
                        Контрагенты</a>
                </div>
                <div>
                    <a href="<?=$this->Url->build(['controller'=>'Partners','action'=>'add'])?>"><span class="uk-label"> + add</span></a>
                </div>
            </div>
        </li>
        <li>
            <div uk-grid class="uk-margin-small-top">
                <div class="uk-width-expand">
                    <a href="<?= $this->Url->build(['controller'=>'Storages','action'=>'index'])?>">
                        Склады
                    </a>
                </div>
                <div>
                    <a href="<?=$this->Url->build(['controller'=>'Storages','action'=>'add'])?>"><span class="uk-label"> + add</span></a>
                </div>
            </div>       
        </li>
        <li>
            <div uk-grid class="uk-margin-small-top">
                <div class="uk-width-expand">
                    <a href="<?= $this->Url->build(['controller'=>'Items','action'=>'index'])?>">
                        Позиции
                    </a>
                </div>
                <div>
                    <a href="<?=$this->Url->build(['controller'=>'Items','action'=>'add'])?>"><span class="uk-label"> + add</span></a>
                </div>
            </div>       
        </li>
        <li>
            <div uk-grid class="uk-margin-small-top">
                <div class="uk-width-expand">
                    <a href="<?= $this->Url->build(['controller'=>'Documents','action'=>'index'])?>">
                        Документы
                    </a>
                </div>
                <div>
                    <a href="<?=$this->Url->build(['controller'=>'Documents','action'=>'add'])?>"><span class="uk-label"> + add</span></a>
                </div>
            </div>       
        </li>
    </ul>
</div>
<script>
    $(window ).resize(function() {
         $('#tm-logo-menu').outerWidth($('.tm-sidebar-left').outerWidth());
    }); 
    $('#tm-logo-menu').outerWidth($('.tm-sidebar-left').outerWidth());
</script>
