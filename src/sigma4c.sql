-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.8.2
-- PostgreSQL version: 9.5
-- Project Site: pgmodeler.com.br
-- Model Author: ---


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
	tipoempresa character varying,
	nombre character varying,
	representantelegal character varying,
	rut character varying,
	nit character varying,
	email character varying,
	ciudad character varying,
	direccion character varying,
	CONSTRAINT empresa_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.empresa OWNER TO postgres;
-- ddl-end --

-- object: public.proyecto | type: TABLE --
-- DROP TABLE IF EXISTS public.proyecto CASCADE;
CREATE TABLE public.proyecto(
	id serial NOT NULL,
	involucrados character varying,
	nombre character varying,
	encargado character varying,
	CONSTRAINT proyecto_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.proyecto OWNER TO postgres;
-- ddl-end --

-- object: public.muestra | type: TABLE --
-- DROP TABLE IF EXISTS public.muestra CASCADE;
CREATE TABLE public.muestra(
	id serial NOT NULL,
	responsable character varying,
	producto character varying,
	lugar_toma character varying,
	foto character varying,
	n_muestras integer,
	fecha_toma date,
	fecha_recepcion date,
	fecha_analisis date,
	tipo_muestreo character varying,
	id_fuente_hidrica integer,
	CONSTRAINT muestra_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.muestra OWNER TO postgres;
-- ddl-end --

-- object: public.fuente_hidrica | type: TABLE --
-- DROP TABLE IF EXISTS public.fuente_hidrica CASCADE;
CREATE TABLE public.fuente_hidrica(
	id serial NOT NULL,
	geometria character varying,
	nombre character varying,
	CONSTRAINT fuente_hidrica_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.fuente_hidrica OWNER TO postgres;
-- ddl-end --

-- object: public.many_proyecto_has_many_empresa | type: TABLE --
-- DROP TABLE IF EXISTS public.many_proyecto_has_many_empresa CASCADE;
CREATE TABLE public.many_proyecto_has_many_empresa(
	id_proyecto integer,
	id_empresa integer,
	CONSTRAINT many_proyecto_has_many_empresa_pk PRIMARY KEY (id_proyecto,id_empresa)

);
-- ddl-end --

-- object: proyecto_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_empresa DROP CONSTRAINT IF EXISTS proyecto_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_empresa ADD CONSTRAINT proyecto_fk FOREIGN KEY (id_proyecto)
REFERENCES public.proyecto (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: empresa_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_empresa DROP CONSTRAINT IF EXISTS empresa_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_empresa ADD CONSTRAINT empresa_fk FOREIGN KEY (id_empresa)
REFERENCES public.empresa (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: fuente_hidrica_fk | type: CONSTRAINT --
-- ALTER TABLE public.muestra DROP CONSTRAINT IF EXISTS fuente_hidrica_fk CASCADE;
ALTER TABLE public.muestra ADD CONSTRAINT fuente_hidrica_fk FOREIGN KEY (id_fuente_hidrica)
REFERENCES public.fuente_hidrica (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_proyecto_has_many_fuente_hidrica | type: TABLE --
-- DROP TABLE IF EXISTS public.many_proyecto_has_many_fuente_hidrica CASCADE;
CREATE TABLE public.many_proyecto_has_many_fuente_hidrica(
	id_proyecto integer,
	id_fuente_hidrica integer,
	CONSTRAINT many_proyecto_has_many_fuente_hidrica_pk PRIMARY KEY (id_proyecto,id_fuente_hidrica)

);
-- ddl-end --

-- object: proyecto_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_fuente_hidrica DROP CONSTRAINT IF EXISTS proyecto_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_fuente_hidrica ADD CONSTRAINT proyecto_fk FOREIGN KEY (id_proyecto)
REFERENCES public.proyecto (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: fuente_hidrica_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_proyecto_has_many_fuente_hidrica DROP CONSTRAINT IF EXISTS fuente_hidrica_fk CASCADE;
ALTER TABLE public.many_proyecto_has_many_fuente_hidrica ADD CONSTRAINT fuente_hidrica_fk FOREIGN KEY (id_fuente_hidrica)
REFERENCES public.fuente_hidrica (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: public.rol | type: TABLE --
-- DROP TABLE IF EXISTS public.rol CASCADE;
CREATE TABLE public.rol(
	id serial NOT NULL,
	nombre character varying,
	CONSTRAINT rol_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.rol OWNER TO postgres;
-- ddl-end --

-- object: public."user" | type: TABLE --
-- DROP TABLE IF EXISTS public."user" CASCADE;
CREATE TABLE public."user"(
	id serial NOT NULL,
	alias character varying,
	mail character varying,
	nombre character varying,
	id_empresa integer,
	CONSTRAINT user_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public."user" OWNER TO postgres;
-- ddl-end --

-- object: public.paramlist | type: TYPE --
-- DROP TYPE IF EXISTS public.paramlist CASCADE;
CREATE TYPE public.paramlist AS
 ENUM ('PH','CONDUCTIVIDAD','COLOR APARENTE','COLOR VERDADERO','SALINIDAD','TURBIEDAD','OXIGENO DISUELTO','DUREZA TOTAL','DIOXIDO DE CARBONO','ALCALINIDAD TOTAL','ACIDEZ TOTAL','SULFATOS','SOLIDOS TOTALES','SOLIDOS DISUELTOS TOTALES','SOLIDOS SUSPENDIDOS TOTALES','SOLIDOS SEDIMENTABLES','DBO5','DQO','NITROGENO AMONIACAL','NITRATOS','NITRITOS','FOSFORO TOTAL','FOSFATOS','FENOLES TOTALES','CLORUROS','BICARBONATOS','SODIO','POTASIO','PLOMO','NIQUEL','MERCURIO','MAGNESIO','HIERRO','CROMO HEXAVALENTE','COBRE','CALCIO','CADMIO','BARIO','ALUMINIO','TENSOACTIVOS','GRASAS Y ACEITES','HIDROCARBUROS TOTALES','PESTICIDAS ORGANOFOSFORADOS','PESTICIDAS ORGANOCLORADOS','COLIFORMES TOTALES','COLIFORMES FECALES');
-- ddl-end --
ALTER TYPE public.paramlist OWNER TO postgres;
-- ddl-end --

-- object: public.parametro | type: TABLE --
-- DROP TABLE IF EXISTS public.parametro CASCADE;
CREATE TABLE public.parametro(
	id serial NOT NULL,
	nombre public.paramlist,
	unidad character varying,
	concentracion character varying,
	tec_analitic character varying,
	CONSTRAINT parametro_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.parametro OWNER TO postgres;
-- ddl-end --

-- object: empresa_fk | type: CONSTRAINT --
-- ALTER TABLE public."user" DROP CONSTRAINT IF EXISTS empresa_fk CASCADE;
ALTER TABLE public."user" ADD CONSTRAINT empresa_fk FOREIGN KEY (id_empresa)
REFERENCES public.empresa (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_user_has_many_rol | type: TABLE --
-- DROP TABLE IF EXISTS public.many_user_has_many_rol CASCADE;
CREATE TABLE public.many_user_has_many_rol(
	id_user integer,
	id_rol integer,
	CONSTRAINT many_user_has_many_rol_pk PRIMARY KEY (id_user,id_rol)

);
-- ddl-end --

-- object: user_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_user_has_many_rol DROP CONSTRAINT IF EXISTS user_fk CASCADE;
ALTER TABLE public.many_user_has_many_rol ADD CONSTRAINT user_fk FOREIGN KEY (id_user)
REFERENCES public."user" (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: rol_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_user_has_many_rol DROP CONSTRAINT IF EXISTS rol_fk CASCADE;
ALTER TABLE public.many_user_has_many_rol ADD CONSTRAINT rol_fk FOREIGN KEY (id_rol)
REFERENCES public.rol (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_muestra_has_many_parametro | type: TABLE --
-- DROP TABLE IF EXISTS public.many_muestra_has_many_parametro CASCADE;
CREATE TABLE public.many_muestra_has_many_parametro(
	id_muestra integer,
	id_parametro integer,
	CONSTRAINT many_muestra_has_many_parametro_pk PRIMARY KEY (id_muestra,id_parametro)

);
-- ddl-end --

-- object: muestra_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_muestra_has_many_parametro DROP CONSTRAINT IF EXISTS muestra_fk CASCADE;
ALTER TABLE public.many_muestra_has_many_parametro ADD CONSTRAINT muestra_fk FOREIGN KEY (id_muestra)
REFERENCES public.muestra (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: parametro_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_muestra_has_many_parametro DROP CONSTRAINT IF EXISTS parametro_fk CASCADE;
ALTER TABLE public.many_muestra_has_many_parametro ADD CONSTRAINT parametro_fk FOREIGN KEY (id_parametro)
REFERENCES public.parametro (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: public."hibernate.secuence" | type: SEQUENCE --
-- DROP SEQUENCE IF EXISTS public."hibernate.secuence" CASCADE;
CREATE SEQUENCE public."hibernate.secuence"
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY NONE;
-- ddl-end --
ALTER SEQUENCE public."hibernate.secuence" OWNER TO postgres;
-- ddl-end --


