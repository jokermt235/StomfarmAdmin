<div id="sale_list_container" class="uk-overflow-auto">
</div>
<?= $this->Html->script('components/table.action.js')?>
<script>
    var url = "<?=$this->Url->build(['controller'=>'Sales','action'=>'index'])?>";
    instance.get(url + '.json').then((response)=>{
        if(response.data.sales.length != 0){
            ReactDOM.render(React.createElement(TableAction,
            {   data : response.data.sales,
                actions:
                {

                }
            }), 
            document.querySelector('#sale_list_container'));
        } 
        
    }).catch(function(error){
        //window.location.pathname = error_500;
        console.log(error);
    }); 
</script>
