/*
SUBCONSULTAS

Son consultas que se ejecutan dentro de otras, tambien consisten
en utilizar los resultados de la subconsulta para operar en la 
consulta principal.

Jugando con las claves foraneas
*/


/*saca los usuarios donde el id exista en la llave foranea en entradas*/
 select * from usuarios where id in (select usuario_id from entradas);


 /*saca los usuarios donde el id NO exista en la llave foranea en entradas*/
 select * from usuarios where id not in (select usuario_id from entradas);


 /*Sacar nombre y apellido de los usuarios que en su titulo tengan GTA*/
select nombre, apellido from usuarios where id 
in (select usuario_id FROM entradas where titulo like "&GTA&");

/*sACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE*/
select titulo from entradas where categoria_id in (select id from CATEGORIA where nombre = 'accion')

/*Mostrar la categoria con más de 3 entradas*/
select * from categoria where 
id in (select categoria_id from entradas group by categoria_id having count(categoria_id));

/*Mostrar usuarios que hayan creado un usuario el martes*/
select usuario_id, titulo from entradas where dayofweek(fecha)=2;

/*el nombre del usuario que tenga más enetradas*/
select concat(nombre, ' ', apellido) as 'El usuario con más entradas' from usuarios
where id = (select usuario_id from entradas group by usuario_id order by count(id) desc limit 1);

/*categoria sin entradas*/
select * from categorias where id
 not in (select categoria_id from entradas)

