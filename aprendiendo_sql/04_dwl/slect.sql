/*MOSTRAR TODOS LOS REGISTROS DE LA TABLA USUARIOS*/
SELECT * FROM usuarios;

SELECT email FROM usuarios;

/*OPERADORES ARITMETICOS*/
/*Muestra una tabla con el id, email y una columna mas con el nombre
operación y en esta los datos son la suma del id de ese registro más 7
*/
SELECT id, email, (id + 7) AS 'OPERACION' FROM usuarios;

/*FUNCIONES*/
SELECT ROUND (7.91, 1) AS 'operacion' FROM usuarios;/*Redondea 7.91 con un digito*/

SELECT SQRT (7.91) AS 'operacion' FROM usuarios;

SELECT TRUNCATE (7.91, 1) AS 'operacion' FROM usuarios;


/*FUNCIONES PARA TEXTO*/
SELECT LOWER (nombre) FROM usuarios;
SELECT CONCAT (nombre, ' ', apellido) FROM usuarios;

SELECT CONCAT (nombre, ' ', apellido) AS 'CONVERSION' FROM usuarios;
SELECT upper(concat(nombre, ' ', apellido)) AS 'CONVERSION' FROM usuarios;
SELECT length(upper(concat(nombre, ' ', apellido))) AS 'CONVERSION' FROM usuarios;
/*Para quitar espacios*/
SELECT trim(upper(concat(nombre, ' ', apellido))) AS 'CONVERSION' FROM usuarios;

/*FUNCIONES PARA FECHAS*/
SELECT fecha FROM usuarios;
SELECT email, fecha FROM usuarios;

SELECT email, fecha CURDATE() AS 'fecha_actual' FROM usuarios; /*FECHA ACTUAL*/

/*DIFERENCIA DE DIAS QUE HAY ENTRE UNA FECHA Y OTRA*/
SELECT email, fecha DATEDIF((fecha, CURDATE() AS 'FECHA_ACTUAL')) FROM usuarios;

/*DIA DE LA SEMANA DE LA FECHA */
SELECT email, DAYNAME(fecha) AS 'FECHA ACTUAL' FROM usuarios;

/*NUMERO DE DIA DE LA SEMANA*/
SELECT email, DAYOFWEEK(fecha) AS 'fecha_actual' FROM usuarios;

SELECT email, DAYOFYEAR(fecha) AS 'fecha_actual' FROM usuarios;

SELECT email, MONTH(fecha) AS 'fecha_actual' FROM usuarios;

SELECT email, YEAR(fecha) AS 'fecha_actual' FROM usuarios;

SELECT email, HOUR(fecha) AS 'fecha_actual' FROM usuarios;

/*HORA EXACTA*/
SELECT email, CURTIME(fecha) AS 'fecha_actual' FROM usuarios;

SELECT email, DATE_FORMAT(fecha, %d-%m-%y) AS 'fecha_actual' FROM usuarios;


/*FUNCIONES GENERALES*/

SELECT email, ISNULL(apellido) FROM usuarios;

/*compara si dos valores son iguales*/

SELECT email, STRCMP('HOLA', 'HOLA') FROM usuarios;

SELECT VERSION () FROM usuarios;

SELECT USER()  FROM usuarios;
/*solo muestra los valores diferentes*/
SELECT USER() DISTINT FROM usuarios;

/*Rellena los registros del campo apellido vacios*/
SELECT IFNULL(apellido, 'ESTE CAMPO ESTA VACIO')
