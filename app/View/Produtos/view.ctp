<div class="produtos view">
<h2><?php echo __('Produto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fornecedor'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['fornecedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estoque'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['estoque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['unidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacoes'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['observacoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($produto['Produto']['data']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto'), array('action' => 'edit', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array(), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
