<div id="partner_list_container" class="uk-overflow-auto">
</div>
<?= $this->Html->script('components/table.action.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Partners','action'=>'index'])?>";
    var deleteAction = "<?=$this->Url->build(['controller'=>'Partners','action'=>'delete'])?>";
    var deleteRedirect = "<?=$this->Url->build(['controller'=>'Partners','action'=>'index'])?>";
    var editAction = "<?=$this->Url->build(['controller'=>'Partners','action'=>'edit'])?>";
    var editRedirect = "<?=$this->Url->build(['controller'=>'Partners','action'=>'index'])?>";
    var viewAction = "<?=$this->Url->build(['controller'=>'Partners','action'=>'view'])?>";
    instance.get(url + '.json').then((response)=>{
        if(response.data.partners.length != 0){
            ReactDOM.render(React.createElement(TableAction,
            {   data : response.data.partners,
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
                    },
                    view : {
                        title: "Подробно",
                        url : viewAction,
                        redirect: ""
                    }

                }
            }), 
            document.querySelector('#partner_list_container'));
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    }); 
</script>
