<div class="col-sm-12">
	<ul class="breadcrumb">
	  <li><?= $this->lang['title']; ?></li>
	  <li class="active"><?= $this->lang['admin']; ?></li>
	</ul>

	<? $this->renderPartial('flashmessage'); ?>

    <br>
    <div class="row">
		<div class="col-sm-4">
			<h3><?= $this->lang['users']; ?>
			<hr>
			<form method="post" action="/admin/adduser">
				<div class="input-group">
				  <span class="input-group-addon" id="username-input"><?= $this->lang['username']; ?></span>
				  <input name="username" type="text" class="form-control" placeholder="user1" aria-describedby="username-input" autofocus >
				  <span class="input-group-btn">
        			<button class="btn btn-primary" type="submit"><?= $this->lang['add']; ?></button>
				  </span>
				</div>
			</form>
			<ul class="list-group">
				<? foreach ($this->users as $user): ?>
				<li class="list-group-item">
					<?= $user->login; ?>
					<? if (strcmp('admin', $user->role) != 0): ?>
					<div class="pull-right">
						<a href="/admin/removeuser/<?= $user->id; ?>" onclick="return confirm('<?= $this->lang['deluserc']; ?>');"><i class="fa fa-times"></i></a>
					</div>
					<? endif; ?>
				</li>
				<? endforeach; ?>
			</ul>
		</div>
	</div>
</div>
