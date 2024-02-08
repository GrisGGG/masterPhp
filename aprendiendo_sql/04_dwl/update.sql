#MODIFICAR FILAS / ACTUALIZAR DATOS#

/*Cambia todos los registros en el campo fecha a la fecha actual*/
UPDATE usuarios SET fecha=CURDATE()

/*Siempre hay que poner un where en UPDATE
para solo afectar a los registros necesarios.
*/

UPDATE usuarios SET fecha='2019-07-09', apellidos='ADMIN' WHERE id=4;
