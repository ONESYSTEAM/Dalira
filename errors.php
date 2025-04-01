<?php if (count($success) > 0) : ?>
	<div class="alert alert-success p-2" role="alert">
		<?php foreach ($success as $message) : ?>
			<ul class="m-0">
				<li>
					<p class="small m-0"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
				</li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>

<?php if (count($invalid) > 0) : ?>
	<div class="alert alert-danger p-2" role="alert">
		<?php foreach ($invalid as $message) : ?>
			<ul class="m-0">
				<li>
					<p class="small m-0"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
				</li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>

<?php if (count($warning) > 0) : ?>
	<div class="alert alert-warning p-2" role="alert">
		<?php foreach ($warning as $message) : ?>
			<ul class="m-0">
				<li>
					<p class="small m-0"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
				</li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>

<?php if (count($info) > 0) : ?>
	<div class="alert alert-info p-2" role="alert">
		<?php foreach ($info as $message) : ?>
			<ul class="m-0">
				<li>
					<p class="small m-0"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
				</li>
			</ul>
		<?php endforeach ?>
	</div>
<?php endif ?>