CREATE DATABASE panteones;

CREATE TABLE difuntos
(
	id 							int 					not null auto_increment,
	fecha_archivo				date,
	fecha_fallecimiento			date,
	nombre_finado				varchar(70) 			character set utf8 collate utf8_spanish_ci,
	nombre_familiar				varchar(70) 			character set utf8 collate utf8_spanish_ci,
	observaciones				varchar(70) 			character set utf8 collate utf8_spanish_ci,
	peticiones 					varchar(70) 			character set utf8 collate utf8_spanish_ci,
	PRIMARY KEY (id)
);

CREATE TABLE pagos
(
	id 							int 					not null auto_increment,	
	id_difunto					int,				
	fecha_pago					date,
	nrecibo						int,
	cantidad					numeric,
	referendo					numeric,
	PRIMARY KEY (id),
	FOREIGN KEY (id_difunto) REFERENCES difuntos (id)
);

CREATE TABLE permisos
(
	id 							int 					not null auto_increment,
	id_difunto					int,
	perp						boolean,
	exh							boolean,
	pert						boolean,
	const						boolean,
	cond						boolean,
	PRIMARY KEY (id),
	FOREIGN KEY (id_difunto) REFERENCES difuntos (id)
);

CREATE TABLE localizacion
(
	id 							int 					not null auto_increment,
	id_difunto					int,
	lt							numeric,
	mz							numeric,
	sec							numeric,
	fila 						numeric,
	panteon						varchar(70) 			character set utf8 collate utf8_spanish_ci,
	domicilio					varchar(70) 			character set utf8 collate utf8_spanish_ci,
	PRIMARY KEY (id),
	FOREIGN KEY (id_difunto) REFERENCES difuntos (id)
);

CREATE TABLE usuarios
(
	id 					int    				not null auto_increment,
	nombre 				varchar(35) 		character set utf8 collate utf8_spanish_ci,
	correo	 			varchar(70) 		character set utf8 collate utf8_spanish_ci,
	passworde 			varchar(500) 		character set utf8 collate utf8_spanish_ci, --Enveloped Data - Algoritmo de encriptacion asimetrica
	passwords 			varchar(500) 		character set utf8 collate utf8_spanish_ci, --Sealed Data - Algoritmo de encriptacion asimetrica
	PRIMARY KEY (id)
);

CREATE TABLE terrenos
(
	id 							int 					not null auto_increment,
	nombre_apartante  			varchar(150) 			character set utf8 collate utf8_spanish_ci,
	lt							numeric,
	mz							numeric,
	sec							numeric,
	fila 						numeric,
	panteon						varchar(70) 			character set utf8 collate utf8_spanish_ci,
	domicilio					varchar(70) 			character set utf8 collate utf8_spanish_ci,
	estado						boolean,
	PRIMARY KEY (id)
);
