<!DOCTYPE html>
<html>

<head>
	<title>Laravel C4 Board</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="container text-center">

	<h1 class="mt-5 mb-3">Laravel Connect Four</h1>

	<div class="row justify-content-center">
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
		<div class="drop"><button class="btn btn-light">Drop!</button></div>
	</div>

	<div class="mt-3 mb-3 board">

		@for ( $i = $boardRows-1; $i >= 0; $i-- ) 

			<div class="row">

				@for ( $j = 0; $j < $boardColumns; $j++ ) 

					<div class="spot {{ $board[$i][$j] }}">{{ $i }} {{ $j }}</div>

				@endfor

			</div>

		@endfor

	</div>

	<div class="mt-3 mb-3">
		
			<button class="btn btn-primary">Restart Game</button>
		
	</div>

	<div class="mt-3 mb-3">
		Current Player: {{ $currentPlayer }}
	</div>
</body>
</html>