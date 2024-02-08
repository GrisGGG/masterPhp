/**
int (n° cifras)                       ENTERO
intger(n° cifras)                     ENTERO  (máximo 255)
varchar(n ° caracteres)               STRING / ALFANUMERICO (máximo 250)
char(n° caracteres)                   STRING / ALFANUMERICO
float(n° cifras, n° decimales)        DECIMAL / COMA FLOTANTE
date, TIME, TIMESTAMP

//sTRING MÁS GRAAANDES
TEXT 65535 caaracteres
MEDIUMTEXT 16 millones
LONGTEXT  4 billones de caracteres

//RESTRINCCIONES DE INEGRIDAD
not null
null
default 'hola'
auto_increment
*/

create table invitados(
	id      int(8) auto_increment,
    nombre  varchar(100) not null,
    telefono varchar(100) null,
    acompanante    varchar(100) not null,
    numAcomp varchar(100) not null,
    CONSTRAINT pk_invitados PRIMARY KEY(id)
);

/*CREAR TABLA*/

CREATE TABLE usuarios (
    id      int(11) auto_increment,
    nombre  varchar(100) not null,
    apellido varchar(250) null,
    email    varchar(100) not null,
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

/*BORRAR TABLE*/

DROP TABLE usuarios;