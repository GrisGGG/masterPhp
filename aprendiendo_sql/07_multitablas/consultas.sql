/*
Consulta multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia 

*/
#Mostrar las entradas con el nombre del autor y el nombre de la categoria#
select e.id, c.titulo, u.nombre as 'autor', c.nombre as 'categoria'
from entradas e.  usuarios u. categorias c
where e.usuario_id = u.id and e.categoria_id = c.id;

#con inner join#
select e.id, e.titulo, u.nombre AS 'AUTOR'
from entradas e
inner join usuarios u on e.usuario_id = u.id;


#mostrar el nombre de las categorias y al lado cuantas entradas tienen#
select c.nombre count(e.id) FROM categorias c.entradas e
where e.categoria_id = c.id group by e.categoria_id

/*con left join aparecen todas las categorias aunque no tengan entradas*/
select c.nombre, count(e.id) from categorias c 
left join entradas e on e.categoria_id = c.id 
group by e.categoria_id;

/*con right join mantiene todas las filas de la derecha*/
select c.nombre, count(e.id) from categorias c 
right join entradas e on e.categoria_id = c.id 
group by e.categoria_id;




#mostrar el email de los usuarios y al lado cuantas entradas tienen#
select u.email, count(titulo) from usuarios u, entradas e 
where e.usuario_id group by e.usuario_id;