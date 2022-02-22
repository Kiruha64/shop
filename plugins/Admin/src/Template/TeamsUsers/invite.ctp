
<? foreach ($teamsusers as $invite):?>
    <?= $invite->team_id ?>
    <?= $invite->id?>

    <?= $this->Form->postLink('Accept', ['controller'=> 'TeamsUsers', 'action' => 'accept', $invite->id], ['class'=>'btn btn-success'])?>
    <?= $this->Form->postLink('Decline', ['controller'=> 'TeamsUsers', 'action' => 'decline', $invite->id], ['class'=>'btn btn-danger','confirm'=>'Are you sure?'])?>
<? endforeach;?>
