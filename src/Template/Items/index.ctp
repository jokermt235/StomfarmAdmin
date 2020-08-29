<div id="item_list_container" class="uk-overflow-auto">
</div>
<div id="paginator">
</div>
<?= $this->Html->script('components/table.action.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Items','action'=>'index'])?>";
    var deleteAction = "<?=$this->Url->build(['controller'=>'Items','action'=>'delete'])?>";
    var deleteRedirect = "<?=$this->Url->build(['controller'=>'Items','action'=>'index'])?>";
    var editAction = "<?=$this->Url->build(['controller'=>'Items','action'=>'edit'])?>";
    var editRedirect = "<?=$this->Url->build(['controller'=>'Items','action'=>'index'])?>";
    var viewAction = "<?=$this->Url->build(['controller'=>'Items','action'=>'view'])?>";
    instance.get(url + '.json').then((response)=>{
        if(response.data.items.length != 0){
            console.log(response.data);
            ReactDOM.render(React.createElement(TableAction,
            {   data : response.data.items,
                actions:
                {
                    edit : {
                        title :"Изменить",
                        url : editAction,
                        redirect : editRedirect
                    },
                    delete : {
                        title : "Удалить",
                        url : deleteAction,
                        redirect : deleteRedirect
                    } 
                }
            }), 
            document.querySelector('#item_list_container'));
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    }); 
</script>
