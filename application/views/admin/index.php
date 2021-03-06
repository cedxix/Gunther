<div class="col-sm-12">
	<ul class="breadcrumb">
	  <li><?= $this->lang['title']; ?></li>
	  <li class="active"><?= $this->lang['admin']; ?></li>
	  <div class='pull-right'>
	  	<a href='/admin/clearcache'><i class='fa fa-trash'></i> <?= $this->lang['clearcaches']; ?></a>
	  </div>
	</ul>

	<?php $this->renderPartial('flashmessage'); ?>

    <br>
    <div class="row">
		<div class="col-sm-4">
			<h3><?= $this->lang['users']; ?>
			<hr>
			<form method="post" action="/admin/adduser">
				<div class="input-group">
				  <span class="input-group-addon" id="username-input"><?= $this->lang['searchuser']; ?></span>
				  <input name="usersearch" type="text" class="form-control" placeholder="username" aria-describedby="username-input" autofocus >
				  <span class="input-group-btn">
        			<a class="btn btn-primary" href="/admin/adduser"><?= $this->lang['add']; ?></a>
				  </span>
				</div>
			</form>
			<div class="list-group">
				<?php foreach ($this->users as $user): ?>
				<a class="list-group-item">
					<?= $user->login; ?>
					<div class='pull-right clickable'>
						<!--<i class="fa fa-edit" onclick="window.location='/admin/edituser/<?= $user->id; ?>';"></i>-->
						<i class="fa fa-times" onclick="if (confirm('<?= 'Login: ' . $user->login . '\nName: ' . $user->name . '\nEmail: ' . $user->email . '\n\n' . $this->lang['deluserc']; ?>') == true){ window.location='/admin/removeuser/<?= $user->id; ?>'; }"></i>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="col-sm-4">
			<h3><?= $this->settings['movie_provider']; ?> (<?= $this->lang['movies']; ?>)</h3>
			<hr>
			<a class="btn btn-primary" href="/admin/scanmovies/full"><i class="fa fa-refresh"></i> <?= $this->lang['refreshlibfull']; ?></a>
			<a class="btn btn-primary" href="/admin/scanmovies"><i class="fa fa-refresh"></i> <?= $this->lang['refreshlib']; ?></a>
			<a class="btn btn-danger" href="/admin/restartmovie"><i class="fa fa-power-off"></i> <?= $this->lang['restart']; ?></a>
			<a class="btn btn-primary" href="/admin/clearcache/movies"><i class="fa fa-refresh"></i> <?= $this->lang['flushmovies']; ?></a>
		</div>

		<div class="col-sm-4">
			<h3><?= $this->settings['show_provider']; ?> (<?= $this->lang['series']; ?>)</h3>
			<hr>
			<a class="btn btn-primary" href="/admin/scanshows"><i class="fa fa-refresh"></i> <?= $this->lang['refreshlib']; ?></a>
			<a class="btn btn-danger" href="/admin/restartshow"><i class="fa fa-power-off"></i> <?= $this->lang['restart']; ?></a>
			<a class="btn btn-primary" href="/admin/clearcache/shows"><i class="fa fa-refresh"></i> <?= $this->lang['flushshows']; ?></a>
		</div>
	</div>

	<br>
	
	<div class="row">
		<h3>Log</h3>
		<div class='pull-right'>
			<a href='/admin/clearlog'><i class='fa fa-trash'></i> <?= $this->lang['clearlog']; ?></a>
		</div>
		<hr>
		<pre><?= $this->log; ?></pre>
	</div>

	<br>
</div>
