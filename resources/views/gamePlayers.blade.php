<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-color: #AF1E2C;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
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
            li {
            	color: #E6BE8A;
            }
            ul {
            	position: fixed;
            	margin: 0 auto;
            }
            div {
            	position: fixed;
            	bottom: 300px;
            }
            h1,h2 {
            	color: #E6BE8A;
            }

        </style>
    </head>
    <body>
        <h1>Texas Hold'em</h1>
        <h2>Players</h2>
        <ul>
        @foreach ($players as $player)
			<li>{{$player["playerName"]}} {{$player["rank"]}}</li>
		@endforeach
        </ul>
        <div>
        <a href="/games">BACK</a>
        </div>
    </body>
</html>