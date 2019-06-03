<div class="uk-card uk-card-default">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <?=$this->Html->image('person-icon_256x256.png',['class'=>'uk-boder-circle','width'=>64,'height'=>64])?>
            </div>
            <div class="uk-width-expand">
            <h3 class="uk-card-title uk-margin-remove-bottom"><?=$partner->name?></h3>
            <p class="uk-text-meta uk-margin-remove-top"><time datetime=""><?=$partner->created?></time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <ul uk-tab>
            <li class="uk-active"><a href="#">Инфо</a></li>
            <li><a href="#">Продажи</a></li>
            <li>
                <a href="#">Долги</a>
            </li> 
        </ul>
        <ul class="uk-switcher uk-margin">
            <li>
                <div class="uk-margin">
                    <div class="uk-margin">
                        <?=$this->Html->image('mobile-2-icon_256x256.png',['width'=>32,'height'=>32])?>
                        <span class="uk-text-middle uk-margin-left"><?=$partner->phone?></span>
                    </div>
                    <div class="uk-margin">
                        <?=$this->Html->image('home-icon_256x256.png',['width'=>32,'height'=>32])?>
                        <span class="uk-text-middle uk-margin-left"><?=$partner->address?></span>
                    </div>
                    <div class="uk-margin">
                        <?=$this->Html->image('email-icon_256x256.png',['width'=>32,'height'=>32])?>
                        <span class="uk-text-middle uk-margin-left"><?=$partner->email?></span>
                    </div>
                </div>
            </li>
            <li id="sales"></li>
            <li id="debts"></li>
        </ul>
    </div>
    <?= $this->Html->script('components/table.action.js')?>
    <script>
        var url = "<?=$this->Url->build(['controller'=>'Sales','action'=>'index',$partner->mobile_id])?>";
        var urlDebts = "<?=$this->Url->build(['controller'=>'Debts','action'=>'index',$partner->mobile_id])?>";
        UIkit.util.on('#sales','shown',function(event){
            instance.get(url + '.json').then((response)=>{
            if(response.data.sales.length != 0){
                ReactDOM.render(React.createElement(TableAction,
                {   data : response.data.sales,
                    actions:{

                    }
                }), 
                document.querySelector('#sales'));
            } 
            
            }).catch(function(error){
                //window.location.pathname = error_500;
                console.log(error);
            });
            
        });
        UIkit.util.on('#debts','shown',function(event){
            instance.get(urlDebts + '.json').then((response)=>{
            if(response.data.debts.length != 0){
                ReactDOM.render(React.createElement(TableAction,
                {   data : response.data.debts,
                    actions:{

                    }
                }), 
                document.querySelector('#debts'));
            } 
            
            }).catch(function(error){
                //window.location.pathname = error_500;
                console.log(error);
            });
        });
    </script>
</div>
