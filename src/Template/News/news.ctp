<?= $this->element('admin_menu')?>
<div class="uk-card uk-card-default uk-card-body">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-1-5@m" style="border-right:solid 1px #289246;">
            <div class="uk-margin-large-bottom">
                <?= $this->element('nav')?>
            </div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-margin-large-bottom"> 
                <table class="uk-table uk-table-small uk-table-divider">
                    <thead>
                        <tr>
                            <th>Код</th>
                            <th>Заголовок</th>
                            <th>Дата создания</th>
                            <th>Опции</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($news as $new):?>
                        <tr>
                            <td><?= $new->id?></td>
                            <td><?= $new->title?></td>
                            <td><?= $new->created?></td>
                            <td><a href="javascript:" class="uk-button uk-button-primary delete" data-id="<?= $new->id?>">Удалить</a></td>
                        </tr>
                    <?php endforeach?>
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    var deleteNewsUrl = "<?= $this->Url->build(['controller'=>'news','action'=>'delete'])?>";
    var redirectUrl = "<?= $this->Url->build(['controller'=>'News','action'=>'news'])?>";
    $('.delete').click(function(){

        if(confirm("Вы действительно хотите удалить эту новость?")){
            $.ajax({
                type: "POST",
                beforeSend: function(request) {
                    request.setRequestHeader('X-CSRF-Token',csrfToken);
                },
                url: deleteNewsUrl + "/" + $(this).attr('data-id'),
                processData: false,
                success: function(msg) {
                    window.location.href= redirectUrl;
                },
                error: function(error){
                    alert("Произошла ошибка при удалении новости");
                    console.log(error);
                }
            });
        }else{
        }
    });
</script>
