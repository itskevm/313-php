CREATE TABLE team
( team_id    INT          NOT NULL PRIMARY KEY
, team_name  VARCHAR(50)  NOT NULL
, wins       INT          NOT NULL
, losses     INT          NOT NULL
);

CREATE TABLE player
( player_id     INT          NOT NULL PRIMARY KEY
, team_id       INT          NOT NULL REFERENCES team(team_id)
, first_name    VARCHAR(50)  NOT NULL
, last_name     VARCHAR(50)  NOT NULL
, jersey_number INT          NOT NULL
, height        VARCHAR(5)   NOT NULL
, position      VARCHAR(7)   NOT NULL
, home          VARCHAR(50)
, draft_round   INT
, draft_choice  INT
);