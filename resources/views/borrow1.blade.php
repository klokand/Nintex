<div id='borrow1-popup' class="needpopup" data-needpopup-options="borrow1">
	<form  method="POST" action="/borrow/user">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="Email1">Email address</label>
			<input type="email" name="email" class="form-control" id="Email1" placeholder="Email" required>
		</div>
		<div class="form-group">
			<label for="Name">Name</label>
			<input type="text" class="form-control" id="Name" placeholder="Name" required>
		</div>
		<button type="submit" class="btn btn-default" data-needpopup-show="#borrow2-popup">next</button>
	</form>
</div>