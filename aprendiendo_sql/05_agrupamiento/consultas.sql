#CONSULTAS DE AGRUPAMIENTOS#

SELECT count (titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

#CONSULTAS DE AGRUPAMIENTO CON CONDICIONES SE HACEN CON HAVING#
SELECT count (titulo) AS 'NUMERO DE ENTRADAS', categoria_id
FROM entradas GROUP BY categoria_id HAVING count(titulo)>=4;


#FUNCIONES#

/*
AVG     Media
COUNT   numero de
MAX     maximo
MIN     minimo
SUM     suma de elementos

*/

SELECT AVG(id) AS 'Media de entradas' FROM 'entradas';

SELECT MAX(id) AS 'MAXIMO de entradas' FROM 'entradas';

SELECT MIN(id) AS 'Minimo de entradas' FROM 'entradas';

SELECT SUM(id) AS 'Minimo de entradas' FROM 'entradas';