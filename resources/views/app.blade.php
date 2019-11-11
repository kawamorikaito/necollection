<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ネコレクション</title>

	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('grid.css') }}">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>
		body {
			font-family: 'Raleway';
			margin-top: 25px;
		}

		button .fa {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}

		.calendar {
			display: inline-block;
			font-size: 18;
		}

		ul, ol {
  padding: 0;
}



ul li {
  position: relative;
  padding: 1.5em 0.5em 0.5em 0.5em;
  display: block;
  margin-bottom: 5px;
  line-height: 1.5;
  background-image: url(li.png);
  background-size: cover;

}

.background{
    background-image: url(back.png);
    background-size:contain;
    background-repeat:repeat;
    background-position:center;
}

	</style>

	<script>
		$(function () {
			$('#book-name').focus();
		});
	</script>





</head>
<body class="background">
<!--	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar">ログイン</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#">書籍リスト</a>

				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
				</div>
			</div>
		</nav>
	</div>-->
	@yield('content')
</body>
</html>
