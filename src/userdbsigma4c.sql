DROP ROLE IF EXISTS sigma4c;
CREATE ROLE sigma4c WITH
        INHERIT
        LOGIN
        ENCRYPTED PASSWORD 'abc123';

DROP DATABASE IF EXISTS sigma4c;
CREATE DATABASE sigma4c
        ENCODING = 'UTF8'
        LC_COLLATE = 'en_US.UTF8'
        LC_CTYPE = 'en_US.UTF8'
        TABLESPACE = pg_default
        OWNER = sigma4c;

\connect sigma4c;
CREATE EXTENSION postgis;
CREATE EXTENSION postgis_topology;
CREATE EXTENSION ogr_fdw;
SELECT postgis_full_version();
