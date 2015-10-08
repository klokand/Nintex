<div id='borrow1-popup' class="needpopup" data-needpopup-options="borrow1">
	<form id="borrow1-form" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="Email1">Email address</label>
			<input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
		</div>
		<div class="form-group">
			<label for="Name">Name</label>
			<input type="text" class="form-control" id="Name" name="name" placeholder="Name" required>
		</div>
		<button id="userSubmit" type="submit" class="btn btn-default" data-needpopup-show="#borrow2-popup">next</button>
	</form>
</div>