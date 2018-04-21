<div class="user form">
	<!-- <?= $this->Flash->rendar('auth') ?> -->
	<?= $this->Form->create() ?>
	<fieldset>
		<legend>アカウント名とパスワードを入力してください。</legend>
		<?= $this->Form->controller('username') ?>
		<?= $this->Form->controller('password') ?>
	</fieldset>
	<?= $this->Form->button(__('送信')); ?>
	<?= $this->Form->end() ?>
</div>
