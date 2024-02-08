CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
    id          int(10) auto_increment not null,
    modelo      varchar(100) not null,
    marca       varchar(50) not null,
    precio      int(20) not null,
    stock       int(255) not null,
    constraint pk_coches primary key(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id      int(10) auto_increment not null,
    nombre  varchar(100) not null,
    ciudad  varchar(100) not null,
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id          int(10) auto_increment not null,
    grupo_id    int(10) not null,
    nombre      varchar(100) not null,
    apellidos   varchar(150) not null,
    jefe        int(10),
    cargo       varchar(50) not null,
    fecha       date,
    sueldo      float(20, 2),
    comisión    float(10, 2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id          int(10) auto_increment not null,
    vendedor_id    int(10) not null,
    nombre      varchar(150) not null,
    ciudad   varchar(100) not null,
    gastado      float(50,2),
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id          int(10) auto_increment not null,
    cliente_id    int(10) not null,
    coche_id      int(10) not null,
    cantidad      int(100),
    fecha           date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES cliente(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

#2. Rellenar la bd#

#coches#
insert into coches values (NULL, 'Renault clio', 'Renault', 1200, 13);
insert into coches values (NULL, 'Seat Panda', 'Sear', 10000, 101);
insert into coches values (NULL, 'Mercedes Ranchera', 'Renault', 32000, 24);
insert into coches values (NULL, 'Porche cayene', 'Porche', 65000, 5);
insert into coches values (NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
insert into coches values (NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);


insert into  grupos values (NULL, 'Vendedores A', 'Madrid');
insert into  grupos values (NULL, 'Vendedores B', 'Madrid');
insert into  grupos values (NULL, 'Vendedores Mecanicos', 'Madrid');
insert into grupos values (NULL, 'Vendedores A', 'Barcelona');
insert into  grupos values (NULL, 'Vendedores B', 'Barcelona');
insert into  grupos values (NULL, 'Vendedores C', 'Valencia');
insert into  grupos values (NULL, 'Vendedores A', 'Milbao');
insert into  grupos values (NULL, 'Vendedores B', 'Pamplona');
insert into  grupos values (NULL, 'Vendedores C', 'Santiago de Compostela');

insert into vendedores values(NULL, 1, NULL, 'David', 'Lopez', 'Responsable de tienda',CURDATE(),30000, 1);
insert into vendedores values(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudeante de tienda',CURDATE(), 23000, 2);
insert into vendedores values(NULL, 2, NULL, 'Nelson', 'Sánchez', 'Responsable de tienda',CURDATE(), 3800,);
insert into vendedores values(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante de tienda',CURDATE(), 12000,6);
insert into vendedores values(NULL, 3, NULL, 'Victor', 'Lopez', 'Mecanico Jefe',CURDATE(), 50000, 2);
insert into vendedores values(NULL, 4, NULL, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(),1300 ,5);
insert into vendedores values(NULL, 5, NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(),60000 ,2);
insert into vendedores values(NULL, 6, NULL, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(),80000 ,3);
insert into vendedores values(NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante de tienda', CURDATE(),10000 ,10);

insert into clientes values (NULL, 1, 'Construcciones Diaz inc', 'Alcovendas', 24000, CURDATE());
insert into clientes values (NULL, 1, 'Fruteria Antonia inc', 'Puebla', 40000, CURDATE());
insert into clientes values (NULL, 1, 'Imprenta Martinez inc', 'Balcelona', 2000, CURDATE());
insert into clientes values (NULL, 1, 'Jesus colchones inc', 'Guadalajara', 54000, CURDATE());
insert into clientes values (NULL, 1, 'Bar Pepe', 'Valencia', 28000, CURDATE());
insert into clientes values (NULL, 1, 'Tienda PC inc', 'Murcia', 100000, CURDATE());

insert into encargos values(NULL, 1, 1, 2, CURDATE());
insert into encargos values(NULL, 2, 2, 4, CURDATE());
insert into encargos values(NULL, 3, 3, 1, CURDATE());
insert into encargos values(NULL, 4, 4, 3, CURDATE());
insert into encargos values(NULL, 5, 5, 1, CURDATE());
insert into encargos values(NULL, 6, 6, 1, CURDATE());

























