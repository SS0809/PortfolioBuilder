CREATE DATABASE IF NOT EXISTS music23;

USE music23;

CREATE TABLE IF NOT EXISTS registered_users (
  id int NOT NULL,
  user_name varchar(100) NOT NULL,
  display_name varchar(100) NOT NULL DEFAULT 'DEFAULT',
  password varchar(100) NOT NULL,
  email varchar(100) NOT NULL DEFAULT 'DEFAULT',
  points int NOT NULL DEFAULT 5,
  suggest varchar(100) DEFAULT NULL,
  filename varchar(100) DEFAULT NULL,
  sudo varchar(100) NOT NULL DEFAULT '0',
  chart_data varchar(100) NOT NULL DEFAULT '0, 0, 0, 0, 0, 0, 0',
  pay int NOT NULL DEFAULT 0,
  goal text DEFAULT NULL,
  sabout varchar(100) DEFAULT NULL,
  about varchar(100) DEFAULT NULL,
  youtube varchar(100) DEFAULT NULL,
  insta int DEFAULT NULL,
  user_browser varchar(400) DEFAULT NULL,
  pointa varchar(100) DEFAULT NULL,
  pointb varchar(100) DEFAULT NULL,
  lastpoint varchar(100) DEFAULT NULL,
  timestampp int DEFAULT NULL,
  streak int DEFAULT 0,
  lasttime int DEFAULT NULL
);
