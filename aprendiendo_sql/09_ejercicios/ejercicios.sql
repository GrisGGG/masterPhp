#Modificar la comisión de los vendedores y ponerla al 0.5% cuando ganan mas de 50000#

UPDATE vendedores set comision = 0.5 WHERE sueldo >= 50000;

#Incrementar el precio de los coches en un 5%#

UPDATE coches set precio = precio * 1.05;


#sacar todos los vendedores cuya fecha de alta sea posterios al 1 de Julio de 2018#

SELECT * FROM vendedores where fecha >= '2018-07-01';

#Sacaar los nombres de los vendedores y cuantos dias llevan trabajando en el consesionario#

SELECT nombre, DATEFIFF(CURDATE(), fecha) AS 'Dias' FROM vendedores; 


#Nostrar nombre y apellido en la misma columna, fecha en que se registraron, y dia de la semana que entraron#

SELECT CONCAT (nombre, ' ', apellido) AS 'Nombre', fecha, DAYOFWEEK(fecha)from vendedores; 

#nombre y salario de los vendedores con cargo de 'ayudante de tienda'#

select nombre, salario where cargp = 'Ayudante de tienda';

#visualizar todos los coches en cuyo marca exista la letra "a" y cuyo modelo empiece por "f"#

select * from coches where marca like '%a%' and modelo like '%f%';

#mostrar todos los vendedores del grupo num2, ordenados por salario de mayor a menor#

select * from vendedores where grupo_id= 2 order by sueldo DESC;

#VISUALIZAR LOS APELLIDOS DE LOS VENDEDORES, SU FECHA Y SU NUMERO DE GRUPO, 
ORDENADO POR FECHA DESCENDIENTE, MOSTRAR LOS 4 ULTIMOS#

SELECT apellidos, fecha, id  from vendedores order by fecha desc limit 4;

#Viisulizar todos los cargos y el numero de vendedores que en cada cargo#

select cargo, count(id) from cargos;

#conseguir la masa salarial del concesionario (anual)#

select sum(sueldo) as 'Masa salarial' from vendedores;

#sacar la media de sueldo entre todos los vendedores por grupo#

select avg(sueldo), grupo_id from vendedores group by grupo_id;

#visualizar las unidades totales vendidas de cada coche a cada cliente. Mostrando el 
nombre del coche, numero de cliente y la suma de unidades#

select co.modelo as 'coche', cl.nombre as 'cliente', sum(e,cantidad) as 'unidades'
from encargos e
inner join coches co on co.id = e,coche_id;
inner join clientes cl on cl.id = e.cliente_id
group by e.coche_id, e.cliente;