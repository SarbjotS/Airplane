-- 159.339 Assignment 2
--
-- Startup SQL source
--
-- First create a database and select it using USE
-- Then source this SQL file
--
-- Add additional tables as required and feel free to modify these
-- startup up tables as you see fit
-- 
-- List of aircraft types in the fleet. The assignment brief states 
-- there are 2 Cirrus jets and 2 Honda jets. Consider how this
-- can be accommodated in the database
CREATE TABLE Aircraft ( 
  craftID     VARCHAR(3)   NOT NULL,      
  model       VARCHAR(55)  NOT NULL,
  capacity    INT          NOT NULL,   -- max number of passengers
  rangenmi    FLOAT        NOT NULL,   -- range in nmi
  cruisekn    FLOAT        NOT NULL,   -- cruise speed in knots
  PRIMARY KEY (craftID)
);
INSERT INTO Aircraft VALUES ('A01', 'SyberJet SJ30i', 6, 622, 233);
INSERT INTO Aircraft VALUES ('A02',    'Cirrus SF50', 4, 1171, 342);
INSERT INTO Aircraft VALUES ('A03', 'HondaJet Elite', 5, 2205, 408);
-- List of destinations by airport
CREATE TABLE Destinations (
  code      VARCHAR(4)   NOT NULL,   -- 4 letter ICAO code
  airport   VARCHAR(55)  NOT NULL,   -- name of airport
  region    VARCHAR(55)  NOT NULL,   -- region served
  PRIMARY KEY (code)
);
INSERT INTO Destinations VALUES ('NZNE', 'Dairy Flat Airport', 'North Shore');
INSERT INTO Destinations VALUES ('YSSY', 'Sydney Kingsford Smith Airport', 'Sydney');
INSERT INTO Destinations VALUES ('NZRO', 'Rotorua Aiport', 'Rotorua');
INSERT INTO Destinations VALUES ('NZCI', 'Tuuta Aiport', 'Chatham Islands');
INSERT INTO Destinations VALUES ('NZGB', 'Claris Aerodrome', 'Great Barrier Island');
INSERT INTO Destinations VALUES ('NZTL', 'Lake Tekapo Airport', 'Mackenzie District');
-- List of operating routes. This information applies in either
-- direction between the points
CREATE TABLE Routes (
  routeID   VARCHAR(3)  NOT NULL,
  point1    VARCHAR(4)  NOT NULL,
  point2    VARCHAR(4)  NOT NULL,
  distance  FLOAT       NOT NULL,   -- separation distance in nmi
  PRIMARY KEY (routeID),
  FOREIGN KEY(point1) REFERENCES Destinations(code),
  FOREIGN KEY(point2) REFERENCES Destinations(code)
);
INSERT INTO Routes VALUES ('R01', 'NZNE', 'YSSY', 1164);
INSERT INTO Routes VALUES ('R02', 'NZNE', 'NZRO', 137);
INSERT INTO Routes VALUES ('R03', 'NZNE', 'NZCI', 581);
INSERT INTO Routes VALUES ('R04', 'NZNE', 'NZGB', 54);
INSERT INTO Routes VALUES ('R05', 'NZNE', 'NZTL', 472);


