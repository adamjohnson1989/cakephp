<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title',array(
    'div'=>'form-group',
    'label'=>'Title<em>*</em>',
    'class'=>'form-control',
));
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>


<form action="" method="POST" role="form">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <?php echo $this->Form->textarea('',array("class"=>"ckeditor"));?>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

