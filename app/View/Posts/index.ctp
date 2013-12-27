<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Create At</th>
    </tr>
    </thead>
    <tbody>

        <?php foreach($posts as $post):?>
        <tr>
            <td><?php echo $post['Post']['id'] ?></td>
            <td><?php echo $this->Html->link($post['Post']['title'],array('controller'=>'posts','action'=>'view',$post['Post']['id']),array('class'=>'btn-default')) ?></td>
            <td><?php echo $post['Post']['created'] ?></td>
        </tr>
        <?php endforeach;?>

    </tbody>
</table>