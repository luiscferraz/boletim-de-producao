<h1>Editar Usuário</h1>
<?php echo $this->Form->create('Usuario', array('action' => 'edit')); ?>
	<div class="left">
		<fieldset id="dados_funcionais">
			<legend class="legenda">Dados Funcionais</legend>

<?php echo $this->Form->input('Usuario.login', array('label' => 'Login:','required'=>'required', 'id' => 'login')); ?>
<?php echo $this->Form->input('Usuario.senha', array('label' => 'Senha:','required'=>'required', 'id' => 'senha')); ?>
<?php echo $this->Form->input('Usuario.tipo', array('options' => array('admin' => 'ADM', 'user' => 'Usuário'),'type' => 'select', 'empty' => 'Selecione','label' => 'Tipo:','required'=>'required', 'id' => 'tipo')); ?>
<?php echo $this->Form->input('Usuario.nome', array('label' => 'Nome:', 'required'=>'required', 'id' => 'nome')); ?>
<?php echo $this->Form->input('Usuario.matricula', array('label' => 'Matrícula:','required'=>'required', 'id' => 'matricula')); ?>
<?php echo $this->Form->input('Usuario.cpf', array('label' => 'CPF:','required'=>'required','id' => 'cpf')); ?>
<?php echo $this->Form->input('Usuario.admissao', array('label' => 'Data de Admissão:','required'=>'required','id' => 'admissao')); ?>
<?php echo $this->Form->input('Usuario.nascimento', array('label' => 'Data de Nascimento:','required'=>'required','id' => 'nascimento')); ?>
		</fieldset>
	</div>

	<div class="right">
		<fieldset id="dados_pessoais">
			<legend class="legenda">Dados Pessoais</legend>

<?php echo $this->Form->input('Dados.endereco', array('label' => 'Endereço:','required'=>'required', 'id' => 'endereco')); ?>
<?php echo $this->Form->input('Dados.numero', array('label' => 'Número:','required'=>'required', 'id' => 'numero')); ?>
<?php echo $this->Form->input('Dados.complemento', array('label' => 'Complemento:','id' => 'complemento')); ?>
<?php echo $this->Form->input('Dados.bairro', array('label' => 'Bairro:','required'=>'required', 'id' => 'bairro')); ?>
<?php echo $this->Form->input('Dados.cidade', array('label' => 'Cidade:','required'=>'required', 'id' => 'cidade')); ?>
<?php echo $this->Form->input('Dados.estado', array('label' => 'Estado:','required'=>'required', 'id' => 'estado')); ?>
<?php echo $this->Form->input('Dados.cep', array('label' => 'CEP:','required'=>'required', 'id' => 'cep')); ?>
<?php echo $this->Form->input('Dados.telefone1', array('label' => 'Telefone 1:','required'=>'required', 'id' => 'telefone1')); ?>
<?php echo $this->Form->input('Dados.telefone2', array('label' => 'Telefone 2:','required'=>'required', 'id' => 'telefone2')); ?>
<?php echo $this->Form->input('Dados.email', array('label' => 'E-mail:','required'=>'required', 'id' => 'email')); ?>

		</fieldset>
	</div>

<?php echo $this->Form->end('Salvar Usuário'); ?>