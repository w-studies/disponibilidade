CREATE TABLE turnos (
    ID int PRIMARY KEY,
    DIA_SEMANA int,
    INICIO TIME,
    FIM TIME,
    NOME varchar(255)
);

INSERT INTO TURNOS VALUES (1,1,'00:00','08:00','Prenoite Domingo');
INSERT INTO TURNOS VALUES (2,1,'08:00','13:00','Domingo manha');
INSERT INTO TURNOS VALUES (3,1,'13:00','19:30','Domingo tarde');
INSERT INTO TURNOS VALUES (4,1,'19:30','00:00','Domingo noite');
INSERT INTO TURNOS VALUES (5,2,'00:00','08:00','Prenoite Segunda');
INSERT INTO TURNOS VALUES (6,2,'19:30','00:00','Segunda noite');
INSERT INTO TURNOS VALUES (7,3,'00:00','08:00','Prenoite Terca');
INSERT INTO TURNOS VALUES (8,3,'19:30','00:00','Terca noite');
INSERT INTO TURNOS VALUES (9,4,'00:00','08:00','Prenoite quarta');
INSERT INTO TURNOS VALUES (10,4,'19:30','00:00','Quarta noite');
INSERT INTO TURNOS VALUES (11,5,'00:00','08:00','Prenoite Quinta');
INSERT INTO TURNOS VALUES (12,5,'19:30','00:00','Quinta noite');
INSERT INTO TURNOS VALUES (13,6,'00:00','08:00','Prenoite Sexta');
INSERT INTO TURNOS VALUES (14,6,'19:30','00:00','Sexta noite');
INSERT INTO TURNOS VALUES (15,7,'00:00','08:00','Prenoite sabado');
INSERT INTO TURNOS VALUES (16,7,'08:00','13:00','Sabado manha');
INSERT INTO TURNOS VALUES (17,7,'13:00','19:30','Sabado tarde');
INSERT INTO TURNOS VALUES (18,7,'19:30','00:00','Sabado noite');
