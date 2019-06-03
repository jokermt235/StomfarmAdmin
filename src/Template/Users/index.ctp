<div id="user_list_container">
</div>
<?= $this->Html->script('components/table.action.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>";
    var deleteAction = "<?=$this->Url->build(['controller'=>'Users','action'=>'delete'])?>";
    var deleteRedirect = "<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>";
    var editAction = "<?=$this->Url->build(['controller'=>'Users','action'=>'edit'])?>";
    var editRedirect = "<?=$this->Url->build(['controller'=>'Users','action'=>'index'])?>";
    instance.get(url + '.json').then((response)=>{
        if(response.data.users){
            ReactDOM.render(React.createElement(TableAction,
        {   data : response.data.users,
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
            document.querySelector('#user_list_container'));
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    }); 
</script>
