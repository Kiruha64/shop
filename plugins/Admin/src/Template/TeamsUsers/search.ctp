




<?php foreach ($users as $user): ?>
    <tr id="info-column">
        <td><?= $user->id ?></td>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td class="actions">
<!--            --><?//= $this->Form->Link('Invite', ['controller'=> 'TeamsUsers', 'action' => 'add', $user->id], ['class'=>'btn btn-primary','confirm'=>'Are you sure?'])?>
            <?= $this->Form->button('Invite',['class'=>'btn btn-primary btn-lg btn-block',$user->id ,'confirm'=>'Are you sure?']) ?>
        </td>
    </tr>
<?php endforeach; ?>


