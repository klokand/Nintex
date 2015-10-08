<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoso BookShelf</title>

	<link href="/css/app.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/needpopup.min.css">
	<link rel="stylesheet" href="/css/jquery.mobile-1.4.5.min.css">
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">the <strong>BookShelf</strong></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="/" data-needpopup-show="#borrow1-popup">Borrow Book</a></li>
					<li><a href="/">Help</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="/js/needpopup.min.js"></script>
	<script src="/js/jquery.mobile-1.4.5.min.js"></script>
			<script>
			needPopup.config.borrow1 = {
				'removerPlace': 'outside',
				'closeOnOutside': false,
				onHide: function() {
				var url ="/borrow/user";
				var token =$('input[name=_token]').val();
				var email =$('input[name=email]').val();
				var name =$('input[name=name]').val();
				var $post ={};
				$post._token = token;
				$post.email = email;
				$post.name = name;
					$.ajax({
						type:"POST",
						url:url,
						data:$post,
						cashe:false,
						success:function(result){
							$("#name").html(result["name"]);
							$("#email").html(result["email"]);
							$("#form-name").val(result["name"]);
							$("#form-email").val(result["email"]);
							console.log(result["id"]);
						}
					});
				}
			};
			needPopup.init();
			$("#userSubmit").click(function(){
				$( "#borrow1-form" ).submit(function( event ) {
					var valide = true;
					if (!$("#Name").val()) {
						$( "span" ).text( "Name is not valid!" ).show().fadeOut( 3000 );
						valide = false;
						event.preventDefault();
						console.log("name needed");
					}if (!$("#Email1").val()) {
						$( "span" ).text( "Email is not valid!" ).show().fadeOut( 3000 );
						valide = false;
						event.preventDefault();
						console.log("email needed");
					}if(valide == true){
						console.log('borrow2');
						return
					}
				});
			});
			 $("#borrowSubmit").click(function(){
					$( "#borrow2-form" ).submit(function( event ) {
					var valide = true;
					if (!$( "#title" ).val()) {
						$( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
						valide = false;
						event.preventDefault();
					}if (!$( "#author" ).val()) {
						$( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
						valide = false;
						event.preventDefault();
					}if (!$( "#barcode" ).val()) {
						$( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
						valide = false;
						event.preventDefault();
					}if (!$("#form-name").val()) {
						$( "span" ).text( "Name is not valid!" ).show().fadeOut( 2000 );
						valide = false;
						event.preventDefault();
						console.log("name needed");
					}if (!$("#form-email").val()) {
						$( "span" ).text( "Email is not valid!" ).show().fadeOut( 2000 );
						valide = false;
						event.preventDefault();
						console.log("email needed");
					}if(valide == true){						
						var url ="/borrow/borrow";
						var token =$('input[name=_token]').val();
						var email =$('input[name=bemail]').val();
						var name =$('input[name=bname]').val();
						var title =$('input[name=title]').val();
						var author =$('input[name=author]').val();
						var barcode =$('input[name=barcode]').val();
						var $post ={};
						$post._token = token;
						$post.email = email;
						$post.name = name;
						$post.title = title;
						$post.author = author;
						$post.barcode = barcode;
						$.ajax({
							type:"POST",
							url:url,
							data:$post,
							cashe:false,
							success:function(result){
								$( "span" ).text( "Submiting..." ).show();
								console.log('submit');
								console.log('result');
								//location.reload();
								//document.location.href="/";
						}
					});
					}
				});
			});
		</script>
</body>
</html>
