use socalSports;

DROP TABLE IF EXISTS player;

CREATE TABLE player (
playerID INT(6) unsigned not null auto_increment PRIMARY KEY,
lastname VARCHAR(50),
firstname VARCHAR(30),
email VARCHAR(50),
homephone VARCHAR(20),
username VARCHAR(20),
passwd VARCHAR(20)
);

DROP TABLE IF EXISTS league;

CREATE TABLE league (
leagueID INT(6) unsigned not null auto_increment PRIMARY KEY,
leaguename VARCHAR(50),
commish INT(6)
);

-- LOAD DATA INFILE 'playerData.txt' INTO TABLE player;
-- LOAD DATA INFILE 'leagueData.txt' INTO TABLE league;

