/*
VISTAS
SE DEFEINEN COMO UNA CUNSULTA ALMACENADA EN LA BD QUE 
SE UTULIZA COMO TABLA VIRTUAL.
NO ALMACENA DATOS SINO QUE UTILIZA ASOCIACIONES Y LOS DATOS ORIGRINALES
DE LAS TABLAS, DE FORMA QUE SIEMPRE SE MANTIENE ACTUALIZADA

*/

CREATE VIEW entradas_con_nombres AS 
select e.id, e.titulo, u.nombre AS 'AUTOR'
from entradas e
inner join usuarios u on e.usuario_id = u.id;

/*PARA BORRARLA*/

DROP VIEW entradas_con_nombres;