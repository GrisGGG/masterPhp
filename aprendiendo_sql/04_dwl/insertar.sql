/*INSERTAR REGISTROS*/
INSERT INTO  usuarios VALUES(
    NULL, 'Guadalupe', 'García', 'guadalupe.gachupin@gmail.com', '1234', '2023-12-25'
)


/*INSERTAR SÓLO EN ALGUNAS COLUMNAS*/
INSERT INTO usuarios (email, password) VALUES('admin@gmail.com', 'admin');