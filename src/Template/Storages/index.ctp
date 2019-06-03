<div id="storage_list_container">
</div>
<?= $this->Html->script('components/table.action.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Storages','action'=>'index'])?>";
    var deleteAction = "<?=$this->Url->build(['controller'=>'Storages','action'=>'delete'])?>";
    var deleteRedirect = "<?=$this->Url->build(['controller'=>'Storages','action'=>'index'])?>";
    var editAction = "<?=$this->Url->build(['controller'=>'Storages','action'=>'edit'])?>";
    var editRedirect = "<?=$this->Url->build(['controller'=>'Storages','action'=>'index'])?>";
    instance.get(url + '.json').then((response)=>{
        if(response.data.storages){
            ReactDOM.render(React.createElement(TableAction,
        {
            data : response.data.storages,
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
            document.querySelector('#storage_list_container'));
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    }); 
</script>
