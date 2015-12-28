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
            li {
            	color: #E6BE8A;
            }
            .logo {
            	position: fixed;
            	bottom: 0px;
            	left: 0px;
            }
            a {
            	color: #E6BE8A;
            }
            ul {
            	position: fixed;
            	margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="/">Home</a>
            <a href="/games">Games</a>
            <a href="/players">Players</a>
        </nav>
        <div class="container">
            <div class="content">
                <div class="title">Games</div>
                 <ul>
                 	@foreach ($games as $game)
		        	<li><a href="/games/{{$game['gameID']}}">{{$game["gameName"]}}</li>
		        	@endforeach
	        	</ul>
            </div>
        </div>
    </body>
</html>