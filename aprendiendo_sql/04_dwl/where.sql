/*condición*/
SELECT * FROM usuarios WHERE email = 'guadalupe.gachupin@gmail.com';

/*
OPERADORES DE COMPARACIÓN
IGUAL       =
DISTINTO    !=
MENOR       <
MAYOR       >
MENOR O IGUAL <=
MAYOR O IGUAL >=
ENTRE       between A and B
EN          in
ES NULO     isnull
NO NULO     is not null
COMO        like
NO ES COMO  not like

OPERADORES LOGICOS
O           OR
Y           AND
NO          NOT


COMODINES:
Cualquier cantidad de caractes: %
Un caracter desconocido: _
*/

#EJEMPLOS#
#1. Mostrar nombre y apellido de los usuarios registrados en 2019#

SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) = 2019;

#2. Mostrar nombre y apellido de los usuarios que no se registraron en 2019#

SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2019;

SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);


#3. Mostrar email de los usuarios cuyo apellido contenga la letra a y su contraseña sea 123#

SELECT email FROM usuarios WHERE apellido LIKE '%a%' AND password = 1234;

#Sacar todos los registros de la tabla cuyo año sea par#

SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

#Impares#
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 != 0);

#Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras Y
que se hayan registrado antes del 2020 y mostrar el nombre en mayusculas#

SELECT UPPER(nombre), apellido FROM usuarios WHERE (LENGTH(nombre) > 5) AND 
YEAR(fecha)<2019;


























