<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/games', function () {
	// get games from DB?
	try {
    $link = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root');

    $statement = $link->prepare('SELECT gameID, gameName FROM Game');
    $statement->execute();
    $games = $statement->fetchAll();

    return view('games', ["games"=>$games]);


	} catch (PDOException $e) {
    	die($e->getMessage());
	}

});

Route::get('/games/{id}', function ($gameID) {

	try {
    $db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root');

    $statement = $db->prepare('SELECT * FROM Game where gameid = ' . $gameID);
    $statement->execute();
    $games = $statement->fetch();




    return view('gameDetail', ["game"=>$games]);


	} catch (PDOException $e) {
    	die($e->getMessage());
	}

});

Route::get('/games/{id}/players', function ($gameID) {

	try {
    $db = new PDO('mysql:host=localhost;dbname=poker;charset=utf8', 'root');

	$sql = "select * from GamePlayers as gp, player as p where gp.playerid = p.playerid and gp.gameID = '$gameID'";
	$statement = $db->prepare($sql);
	$statement->execute();
    $players = $statement->fetchAll();

    return view('gamePlayers', ["gameid"=>$gameID, "players"=>$players]);

    } catch (PDOException $e) {
    	die($e->getMessage());
	}
});

