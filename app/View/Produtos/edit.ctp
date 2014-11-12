<script>
function newDoc() {
    var id = document.getElementById('ProdutoId').value;
    window.location.assign("/n3script/produtos/edit/"+id);
}
</script>

<div class="produtos form">
<?php echo $this->Form->create('Produto'); ?>
	<fieldset>
		<legend><?php echo __('Saida de Produto'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'text','label'=>'Id<br>'));
                echo '<input type="button" value="Ok" onClick="newDoc();"/>';
//		echo $this->Form->input('fornecedor');
//		echo $this->Form->input('cnpj');
		echo $this->Form->input('descricao',array('label'=>'Descrição do produto<br>'));
		echo $this->Form->input('estoque',array('label'=>'Estoque atual<br>'));
		echo $this->Form->input('pedido',array('label'=>'Quantidade solicitada<br>'));
//		echo $this->Form->input('unidade');
//		echo $this->Form->input('observacoes');
		echo $this->Form->input('data',array('label'=>'Data da solicitação<br>'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Efetuar pedido')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Produto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Produto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Produtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
