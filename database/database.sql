drop schema if exists pap;
create schema pap;
use pap;
--
-- users
--

set foreign_key_checks = 0;
set sql_mode = "no_auto_value_on_zero";

drop table if exists users;
create table users
(
  id         int(11) primary key auto_increment,
  username   varchar(100),
  number     varchar(60),
  email      varchar(60) unique,
  password   varchar(132),
  created_at timestamp not null default current_timestamp
) engine = innodb;

