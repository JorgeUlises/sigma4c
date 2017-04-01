-- Prepended SQL commands --
CREATE EXTENSION postgis;
CREATE EXTENSION postgis_topology;
---

-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.8.2
-- PostgreSQL version: 9.4
-- Project Site: pgmodeler.com.br
-- Model Author: ---

-- object: sigma4c | type: ROLE --
-- DROP ROLE IF EXISTS sigma4c;
CREATE ROLE sigma4c WITH 
	UNENCRYPTED PASSWORD 'abc123';
-- ddl-end --


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: sigma4c | type: DATABASE --
-- -- DROP DATABASE IF EXISTS sigma4c;
-- CREATE DATABASE sigma4c
-- ;
-- -- ddl-end --
-- 

-- object: public.empresa | type: TABLE --
-- DROP TABLE IF EXISTS public.empresa CASCADE;
CREATE TABLE public.empresa(
	id serial NOT NULL,
	nombre character varying(200),
	nit character varying(200),
	email character varying(255),
	ciudad character varying(200),
	direccion character varying(200),
	telefono character varying(50),
	CONSTRAINT empresa_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.empresa IS 'Datos basicos de la empresa';
-- ddl-end --
COMMENT ON COLUMN public.empresa.nombre IS 'nombre completo de la empresa';
-- ddl-end --
COMMENT ON COLUMN public.empresa.nit IS 'Identificacion NIT de la empresa';
-- ddl-end --
COMMENT ON COLUMN public.empresa.ciudad IS 'Ciudad de la Sede Principal';
-- ddl-end --
COMMENT ON COLUMN public.empresa.direccion IS 'Direccion de la Sede Principal';
-- ddl-end --
COMMENT ON COLUMN public.empresa.telefono IS 'Numero Telefonico';
-- ddl-end --
ALTER TABLE public.empresa OWNER TO sigma4c;
-- ddl-end --

-- object: public.proyecto | type: TABLE --
-- DROP TABLE IF EXISTS public.proyecto CASCADE;
CREATE TABLE public.proyecto(
	id serial NOT NULL,
	nombre character varying,
	geometria geometry(POLYGON, 4326),
	CONSTRAINT proyecto_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.proyecto IS 'Datos basicos del proyecto';
-- ddl-end --
COMMENT ON COLUMN public.proyecto.nombre IS 'Nombre del proyecto';
-- ddl-end --
COMMENT ON COLUMN public.proyecto.geometria IS 'Geometria del Bloque';
-- ddl-end --
ALTER TABLE public.proyecto OWNER TO sigma4c;
-- ddl-end --

-- object: public.muestra | type: TABLE --
-- DROP TABLE IF EXISTS public.muestra CASCADE;
CREATE TABLE public.muestra(
	id serial NOT NULL,
	id_punto_control integer,
	responsable character varying,
	elemento_ambiental character varying(200),
	fotos character varying(500),
	fecha_toma timestamp,
	fecha_recepcion timestamp,
	fecha_analisis timestamp,
	tipo_muestreo character varying(200),
	analisis text,
	pdf_lab bytea,
	CONSTRAINT muestra_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.muestra IS 'Muestra que se toma en un lugar e instante determinado';
-- ddl-end --
COMMENT ON COLUMN public.muestra.responsable IS 'Persona que toma la muestra';
-- ddl-end --
COMMENT ON COLUMN public.muestra.elemento_ambiental IS 'Pendiente de descripcion';
-- ddl-end --
COMMENT ON COLUMN public.muestra.fotos IS 'La muestra puede tener varias fotos asociadas';
-- ddl-end --
COMMENT ON COLUMN public.muestra.fecha_toma IS 'Fecha y hora de toma de la muestra';
-- ddl-end --
COMMENT ON COLUMN public.muestra.fecha_recepcion IS 'Fecha y hora en que se recibe la muestra';
-- ddl-end --
COMMENT ON COLUMN public.muestra.fecha_analisis IS 'Fecha y hora en que se analiza la muestra';
-- ddl-end --
COMMENT ON COLUMN public.muestra.tipo_muestreo IS 'Falta por describir';
-- ddl-end --
ALTER TABLE public.muestra OWNER TO sigma4c;
-- ddl-end --

-- object: public.rol | type: TABLE --
-- DROP TABLE IF EXISTS public.rol CASCADE;
CREATE TABLE public.rol(
	id serial NOT NULL,
	nombre character varying,
	descripcion varchar(100),
	CONSTRAINT rol_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.rol IS 'Nivel de privilegios del usuario';
-- ddl-end --
COMMENT ON COLUMN public.rol.nombre IS 'Nombre designado al ROL';
-- ddl-end --
COMMENT ON COLUMN public.rol.descripcion IS 'Permisos detallados sobre el rol';
-- ddl-end --
ALTER TABLE public.rol OWNER TO sigma4c;
-- ddl-end --

-- object: public.usuario | type: TABLE --
-- DROP TABLE IF EXISTS public.usuario CASCADE;
CREATE TABLE public.usuario(
	id serial NOT NULL,
	id_empresa integer,
	id_rol integer,
	nickname character varying(50),
	email character varying(255),
	clave character varying(255),
	CONSTRAINT user_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.usuario IS 'Datos basicos del usuario';
-- ddl-end --
COMMENT ON COLUMN public.usuario.nickname IS 'Nombre de usuario corto y sin espacios, ojala en minusculas';
-- ddl-end --
COMMENT ON COLUMN public.usuario.email IS 'correo en minusculas';
-- ddl-end --
COMMENT ON COLUMN public.usuario.clave IS 'clave en sha512 con salt';
-- ddl-end --
ALTER TABLE public.usuario OWNER TO sigma4c;
-- ddl-end --

-- object: public.parametro | type: TABLE --
-- DROP TABLE IF EXISTS public.parametro CASCADE;
CREATE TABLE public.parametro(
	id serial NOT NULL,
	prefijo character varying,
	nombre character varying,
	unidad character varying,
	metodo character varying,
	lc double precision,
	max_l double precision,
	min_l double precision,
	CONSTRAINT parametro_id PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.parametro IS 'Parametros que conforman la muestra como PH y demas';
-- ddl-end --
ALTER TABLE public.parametro OWNER TO sigma4c;
-- ddl-end --

-- object: empresa_fk | type: CONSTRAINT --
-- ALTER TABLE public.usuario DROP CONSTRAINT IF EXISTS empresa_fk CASCADE;
ALTER TABLE public.usuario ADD CONSTRAINT empresa_fk FOREIGN KEY (id_empresa)
REFERENCES public.empresa (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.hibernate_sequence | type: SEQUENCE --
-- DROP SEQUENCE IF EXISTS public.hibernate_sequence CASCADE;
CREATE SEQUENCE public.hibernate_sequence
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
-- ddl-end --
ALTER SEQUENCE public.hibernate_sequence OWNER TO sigma4c;
-- ddl-end --

-- object: rol_fk | type: CONSTRAINT --
-- ALTER TABLE public.usuario DROP CONSTRAINT IF EXISTS rol_fk CASCADE;
ALTER TABLE public.usuario ADD CONSTRAINT rol_fk FOREIGN KEY (id_rol)
REFERENCES public.rol (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_muestra_has_many_parametro | type: TABLE --
-- DROP TABLE IF EXISTS public.many_muestra_has_many_parametro CASCADE;
CREATE TABLE public.many_muestra_has_many_parametro(
	id_muestra integer,
	id_parametro integer,
	concentracion double precision,
	tec_analitica character varying,
	incertidumbre double precision,
	CONSTRAINT many_muestra_has_many_parametro_pk PRIMARY KEY (id_muestra,id_parametro)

);
-- ddl-end --
ALTER TABLE public.many_muestra_has_many_parametro OWNER TO sigma4c;
-- ddl-end --

-- object: muestra_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_muestra_has_many_parametro DROP CONSTRAINT IF EXISTS muestra_fk CASCADE;
ALTER TABLE public.many_muestra_has_many_parametro ADD CONSTRAINT muestra_fk FOREIGN KEY (id_muestra)
REFERENCES public.muestra (id) MATCH FULL
ON DELETE CASCADE ON UPDATE CASCADE;
-- ddl-end --

-- object: parametro_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_muestra_has_many_parametro DROP CONSTRAINT IF EXISTS parametro_fk CASCADE;
ALTER TABLE public.many_muestra_has_many_parametro ADD CONSTRAINT parametro_fk FOREIGN KEY (id_parametro)
REFERENCES public.parametro (id) MATCH FULL
ON DELETE CASCADE ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_proyecto_has_many_empresa | type: TABLE --
-- DROP TABLE IF EXISTS public.many_proyecto_has_many_empresa CASCADE;
CREATE TABLE public.many_proyecto_has_many_empresa(
	id_proyecto integer,
	id_empresa integer,
	CONSTRAINT many_proyecto_has_many_empresa_pk PRIMARY KEY (id_proyecto,id_empresa)

);
-- ddl-end --
ALTER TABLE public.many_proyecto_has_many_empresa OWNER TO sigma4c;
-- ddl-end --

-- object: proyecto_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_empresa DROP CONSTRAINT IF EXISTS proyecto_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_empresa ADD CONSTRAINT proyecto_fk FOREIGN KEY (id_proyecto)
REFERENCES public.proyecto (id) MATCH FULL
ON DELETE CASCADE ON UPDATE CASCADE;
-- ddl-end --

-- object: empresa_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_empresa DROP CONSTRAINT IF EXISTS empresa_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_empresa ADD CONSTRAINT empresa_fk FOREIGN KEY (id_empresa)
REFERENCES public.empresa (id) MATCH FULL
ON DELETE CASCADE ON UPDATE CASCADE;
-- ddl-end --

-- object: public.punto_control | type: TABLE --
-- DROP TABLE IF EXISTS public.punto_control CASCADE;
CREATE TABLE public.punto_control(
	id serial NOT NULL,
	id_proyecto integer,
	etiqueta varchar(200),
	geometria geometry(POINT, 4326),
	CONSTRAINT punto_control_pk PRIMARY KEY (id)

);
-- ddl-end --
COMMENT ON TABLE public.punto_control IS 'Punto donde se toman muchas muestras';
-- ddl-end --
COMMENT ON COLUMN public.punto_control.etiqueta IS 'Etiqueta o tag descriptivo del proyecto';
-- ddl-end --
COMMENT ON COLUMN public.punto_control.geometria IS 'Punto representativo de donde se toman las muestras';
-- ddl-end --
ALTER TABLE public.punto_control OWNER TO sigma4c;
-- ddl-end --

-- object: proyecto_fk | type: CONSTRAINT --
-- ALTER TABLE public.punto_control DROP CONSTRAINT IF EXISTS proyecto_fk CASCADE;
ALTER TABLE public.punto_control ADD CONSTRAINT proyecto_fk FOREIGN KEY (id_proyecto)
REFERENCES public.proyecto (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: punto_control_fk | type: CONSTRAINT --
-- ALTER TABLE public.muestra DROP CONSTRAINT IF EXISTS punto_control_fk CASCADE;
ALTER TABLE public.muestra ADD CONSTRAINT punto_control_fk FOREIGN KEY (id_punto_control)
REFERENCES public.punto_control (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --


