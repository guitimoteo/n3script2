<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Cadastro de produto'); ?></legend>
	<?php
                $options = array('Peca'=>'Peça','Pacote'=>'Pacote','Quilograma'=>'Quilograma','Metro'=>'Metro','Metro_Quadrado'=>'Metro Quadrado', 'Metro_Cubico'=>'Metro Cubico');
		echo $this->Form->label('Nome do fornecedor <br>');
                echo $this->Form->input('fornecedor', array('label' => '','size'=>'30'));
                echo $this->Form->label('cnpj <br>');
		echo $this->Form->input('cnpj',array('label' => '','size'=>'20'));
                echo $this->Form->label('Descrição do produto <br>');
                echo $this->Form->input('descricao', array('label' => ''));
		echo $this->Form->input('quantidade', array('label' => 'Quantidade de entrada <br>'));
		 echo $this->Form->label('Estoque mínimo <br>');
                echo $this->Form->input('estoque', array('label' => ''));
                echo $this->Form->label('Selecione a unidade <br>');
                echo $this->Form->select('unidade', $options);
                echo '<br>';                
                echo $this->Form->label('Observações gerais <br>');
		echo $this->Form->textarea('observacoes', array('label' => ''));
		echo $this->Form->input('data', array('label' => 'Data da entrada','size'=>'10'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar',array('name'=>'gravar'))); ?>
</div>
<!--
<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
-->