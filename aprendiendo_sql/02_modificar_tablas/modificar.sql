/*
//Para modificar tablas con 

ALTER TABLE

*/

/*RENOMBRAR UNA TABLA*/
ALTER TABLE usuarios RENAME TO usuarios_renom;

/*RENOMBRAR UNA COLUMNA*/
ALTER TABLE `blog_master`. `usuarios_renom`
CHANGE COLUMN `apellido` `apellidos` DATE NULL DEFAULT NULL ;

/*MODIFICAR COLUMNA SIN CAMBIAR NOMBRE*/

ALTER TABLE usuarios_renom MODIFY apellido char(30) not null;

/*AGREGAR UNA FILA MÁS*/
ALTER TABLE usuarios_renom ADD website varchar(100) null;

/*AÑADIR RESTICCIÓN A COLUMNA  (El email no se puede repetir entre registgros)*/
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

/*BORRAR UNA COLUMNA*/
ALTER TABLE usuarios_renom DROP website;
