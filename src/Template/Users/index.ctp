<table class="uk-table uk-table-small uk-table-divider"> 
    <thead> 
        <tr> 
            <th>Ф.И.О</th> 
            <th>Имя пользователя</th> 
            <th>Телефон</th> 
            <th>Долг</th> 
            <th>Статус</th> 
            <th>Операции</th> 
            <th></th>
         </tr> 
    </thead> 
    <tbody> 
        <?php foreach($users as $user):?>
        <tr>
            <td><?=$user->fio?></td>
            <td><?=$user->username?></td>
            <td></td>
            <td></td>
            <td></td>
			<td> 
            	<a href="<?= $this->Url->build(['controller'=>'Users','action'=>'edit',$user->id])?>"> 
                	<span uk-icon="icon: pencil"></span> Изменить 
            	</a> 
         	</td> 
         	<td> 
            	<a onclick='deleteRecord("<?= $this->Url->build(['controller'=>'Users','action'=>'delete',$user->id])?>")'> 
                	<span uk-icon="icon: close"></span> Удалить 
            	</a> 
         	</td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
        
