PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE partner (
id integer primary key,
company varchar(40) not null,
brand varchar(40),
province varchar(20),
cite varchar(20),
contact varchar(20) not null,
phone varchar(20) not null,
email varchar(100)
, created_time timestamp default 'CURRENT_TIMESTAMP', updated_time timestamp);
CREATE TABLE subscriber (
id integer primary key,
email varchar(200) not null,
created_time timestamp default 'CURRENT_TIMESTAMP');
COMMIT;
