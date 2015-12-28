drop database if exists poker;

create database poker;
use poker;


-- player table

create table Player (

	playerid INT auto_increment primary key not null,
	playerName varchar(255) not null,
	rank int not null

);

-- inserting into player table

insert into player (playerName,rank) values ("Patrick Willis", 1);
insert into player (playerName,rank) values ("Frank Gore", 2);
insert into player (playerName,rank) values ("Colin Kaepernick", 3);
insert into player (playerName,rank) values ("Joe Staley", 4);


-- game table

create table Game (

	gameID INT auto_increment primary key not null,
	gameName varchar(255) not null,
	startTime int(11) not null,
	state int not null -- open=1, closed =0, break=2 .. 

);

-- inserting into game

insert into game (gameName,startTime,state) values ("Texas Hold'em",1443199637, 0);
insert into game (gameName,startTime,state) values ("5 card", 1443286035000, 1);
insert into game (gameName,startTime,state) values ("Texas Hold'em", 1443631635, 1);


-- game players table

create table GamePlayers (

	gameid INT not null,
	playerID INT not null

);

insert into GamePlayers (gameid,playerID) values (1,3);
insert into GamePlayers (gameid,playerID) values (1,2);
insert into GamePlayers (gameid,playerID) values (1,1);
insert into GamePlayers (gameid,playerID) values (2,1);
insert into GamePlayers (gameid,playerID) values (2,4);
