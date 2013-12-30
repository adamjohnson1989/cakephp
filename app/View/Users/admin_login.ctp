<?php echo $this->Session->flash(); ?>

<?php echo $this->Form->create('User') ?>
<?php
    echo $this->Form->input('User.email',array(
        'div' => 'form-group',
        'class'=>'form-control',
        'placeholder' => 'Enter Email'
    ));
    echo $this->Form->input('User.password',array(
        'div' => 'form-group',
        'class'=>'form-control',
        'placeholder' => 'Enter Password'
    ));
    echo $this->Form->button('Login',array(
        'type' => 'submit',
        'class'=>'btn btn-default'
    ));

?>

<?php echo $this->Form->end; ?>
