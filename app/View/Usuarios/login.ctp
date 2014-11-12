<h2>Login</h2>
<div class="Usuario form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Usuario');?>
    <fieldset>
        <legend><?php echo __('Por favor, insira o seu Email e senha '); ?></legend>
        <?php echo $this->Form->input('email',array('label'=>'Email<br>'));
              echo $this->Form->input('password',array('label'=>'Senha<br>'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>