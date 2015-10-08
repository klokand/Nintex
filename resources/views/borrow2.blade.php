<div id="borrow2-popup" class="needpopup" data-needpopup-options="borrow2">
	<div id="detail" class="panel panel-default">
		<div class="panel-heading">User Detail</div>
		<div class="panel-body row">
			<div id="name" class="col-md-offset-2 col-md-4">Your name</div>
			<div id="email" class="col-md-4">Your email</div>
		</div>
	</div>
	<div id="book" class="panel panel-default">
		<div class="panel-heading">Borrow Book Detail</div>
		<div class="panel-body">
			<form id="borrow2-form" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" id="form-name" name="bname" value="">
				<input type="hidden" id="form-email" name="bemail" value="">
				<div class="form-group">
					<label for="title">Book Title:*</label>
					<input type="string" class="form-control" name="title" id="title" placeholder="Title" required>
				</div>
				<div class="form-group">
					<label for="author">Book Author:*</label>
					<input type="string" class="form-control" name="author" id="author" placeholder="Author" required>
				</div>
				<div class="form-group">
					<label for="barcode">Barcode/ISBN:*</label>
					<input type="string" class="form-control" name="barcode" id="barcode" placeholder="Barcode/ISBN" required>
					<a class="btn btn-default">Scan</a>
				</div>
				<button id="userSubmit" type="submit" class="btn btn-default" data-needpopup-show="#borrow1-popup">Go Back</button>
				<button id="borrowSubmit" type="submit" class="btn btn-default">Borrow</button>
			</form>
			<span></span>
		</div>
	</div>
	<div id="borrowed" class="panel panel-default">
		<div class="panel-heading">Books You Borrowed</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>
	</div>
</div>