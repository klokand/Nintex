@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Currently Borrowed Books</div>
				
				<div class="panel-body">
					<form>
						<input id="filterTable-input" data-type="search">
					</form>
					@include('borrowList')
				</div>
			</div>
		</div>
	</div>
</div>
@include('borrow1')
@include('borrow2')
@endsection
