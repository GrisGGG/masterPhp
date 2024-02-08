/*Creación de la tabla de USUARIOS*/

CREATE TABLE usuarios (
    id          int(255)        auto_increment      not null,
    nombre      varchar(100)    not null,
    apellido    varchar(100)    not null,
    email       varchar(255)    not null,
    password    varchar(255)    not null,
    registro    date not null,
    /*Definición de la llave primaria*/
    CONSTRAINT pk_usuarios PRIMARY_KEY(id),
    /*Añadimos restricción para que el email no se repita*/
    CONSTRAINT uq_email UNIQUE(email)
    /*Indicamos el motor */
)ENGINE=InnoDb;

/*Creación de la tabla de CATEGORIAS*/
CREATE TABLE categorias (
    id          int(255)        auto_increment      not null,
    nombre      varchar(100)    not null,
    /*Definición de la llave primaria*/
    CONSTRAINT pk_categorias PRIMARY_KEY(id)
)ENGINE=InnoDb;
/*Creación de la tabla de ENTRADAS*/
CREATE TABLE entradas (
    id          int(255)        auto_increment      not null,
    usuario_id  int(255)        not null,
    categoria_id int(255)       not null,
    titulo      varchar(255)    not null,
    descripcion MEDIUMTEXT,
    fecha       date not null,
    /*Definición de la llave primaria*/
    CONSTRAINT pk_entradas PRIMARY_KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIN KEY (usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIN KEY (categoria_id) REFERENCES categorias(id),
)ENGINE=InnoDb;

CREATE TABLE enquiry (
    id          int(255)        auto_increment      not null,
    name      varchar(100)    not null,
    mobil   varchar(100)    not null,
    email      varchar(255)    not null,
    CONSTRAINT pk_enquiry PRIMARY_KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;