<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GameDetail</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
        background-color: #AF1E2C;
        color: #E6BE8A;
	}
	nav {
        position: fixed;
        top: 0px;
        right: 0px;
	}
	a {
		color: #E6BE8A;
	}

/*	$games = $statement->fetchAll();*/

    </style>
</head>
<body>
	<h1>Game Detail {{ $game["gameID"] }}</h1>
	<h3>{{ $game["gameName"]}};</h3>
	<h3>Game start time: {{date('F j, Y, g:i a', $game["startTime"])}}</h3>
	<h4>Game State: {{$game["state"]}}</h4>
	<p><a href="/games/{{$game['gameID']}}/players">Players</p>

	<button>Join</button>

	<nav>
            <a href="/">Home</a>
            <a href="/games">Games</a>
            <a href="/players">Players</a>
        </nav>
</body>
</html>