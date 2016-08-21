<?xml version="1.0" encoding="UTF-8"?>
<!--
CAUTION: Do not modify this file unless you know what you are doing.
         Unexpected results may occur if the code is changed deliberately.
-->
<dbmodel pgmodeler-ver="0.8.2" last-position="0,0" last-zoom="0.8"
	 default-schema="public" default-owner="postgres">
<role name="sigma4c"
      inherit="true"
      login="true"
      encrypted="true"
      password="********">
</role>

<database name="sigma4c" encoding="UTF8" lc-collate="en_US" lc-ctype="en_US">
	<role name="sigma4c"/>
	<tablespace name="pg_default"/>
</database>

<schema name="public" rect-visible="true" fill-color="#e1e1e1" sql-disabled="true">
</schema>

<extension name="postgis" cur-version="2.1.8">
	<schema name="public"/>
	<comment><![CDATA[PostGIS geometry, geography, and raster spatial types and functions]]></comment>
</extension>

<schema name="topology" rect-visible="true" fill-color="#e8a15b">
	<role name="postgres"/>
</schema>

<extension name="postgis_topology" cur-version="2.1.8">
	<schema name="topology"/>
	<comment><![CDATA[PostGIS topology spatial types and functions]]></comment>
</extension>

<sequence name="empresa_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="empresa">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="100" y="60"/>
	<column name="id" not-null="true" sequence="public.empresa_id_seq">
		<type name="integer"/>
	</column>
	<column name="tipoempresa">
		<type name="character varying"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<column name="representantelegal">
		<type name="character varying"/>
	</column>
	<column name="rut">
		<type name="character varying"/>
	</column>
	<column name="nit">
		<type name="character varying"/>
	</column>
	<column name="email">
		<type name="character varying"/>
	</column>
	<column name="ciudad">
		<type name="character varying"/>
	</column>
	<column name="direccion">
		<type name="character varying"/>
	</column>
	<constraint name="empresa_id" type="pk-constr" table="public.empresa">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="proyecto_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="proyecto">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="600" y="260"/>
	<column name="id" not-null="true" sequence="public.proyecto_id_seq">
		<type name="integer"/>
	</column>
	<column name="involucrados">
		<type name="character varying"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<column name="encargado">
		<type name="character varying"/>
	</column>
	<constraint name="proyecto_id" type="pk-constr" table="public.proyecto">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="muestra_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="muestra">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="1200" y="480"/>
	<column name="id" not-null="true" sequence="public.muestra_id_seq">
		<type name="integer"/>
	</column>
	<column name="id_fuente_hidrica">
		<type name="integer"/>
	</column>
	<column name="responsable">
		<type name="character varying"/>
	</column>
	<column name="producto">
		<type name="character varying"/>
	</column>
	<column name="lugar_toma">
		<type name="character varying"/>
	</column>
	<column name="foto">
		<type name="character varying"/>
	</column>
	<column name="n_muestras">
		<type name="integer"/>
	</column>
	<column name="fecha_toma">
		<type name="date"/>
	</column>
	<column name="fecha_recepcion">
		<type name="date"/>
	</column>
	<column name="fecha_analisis">
		<type name="date"/>
	</column>
	<column name="tipo_muestreo">
		<type name="character varying"/>
	</column>
	<column name="geometria">
		<type name="geometry"/>
	</column>
	<constraint name="muestra_id" type="pk-constr" table="public.muestra">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="fuente_hidrica_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="fuente_hidrica">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="1240" y="220"/>
	<column name="id" not-null="true" sequence="public.fuente_hidrica_id_seq">
		<type name="integer"/>
	</column>
	<column name="geometria">
		<type name="geometry"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<constraint name="fuente_hidrica_id" type="pk-constr" table="public.fuente_hidrica">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="rol_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="rol">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="1200" y="140"/>
	<column name="id" not-null="true" sequence="public.rol_id_seq">
		<type name="integer"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<constraint name="rol_id" type="pk-constr" table="public.rol">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="usuario_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="usuario">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="520" y="60"/>
	<column name="id" not-null="true" sequence="public.usuario_id_seq">
		<type name="integer"/>
	</column>
	<column name="id_empresa">
		<type name="integer"/>
	</column>
	<column name="alias">
		<type name="character varying"/>
	</column>
	<column name="mail">
		<type name="character varying"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<column name="id_rol">
		<type name="integer"/>
	</column>
	<constraint name="user_id" type="pk-constr" table="public.usuario">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<usertype name="paramlist" configuration="enumeration">
	<schema name="public"/>
	<role name="sigma4c"/>
	<enumeration values="PH,CONDUCTIVIDAD,COLOR APARENTE,COLOR VERDADERO,SALINIDAD,TURBIEDAD,OXIGENO DISUELTO,DUREZA TOTAL,DIOXIDO DE CARBONO,ALCALINIDAD TOTAL,ACIDEZ TOTAL,SULFATOS,SOLIDOS TOTALES,SOLIDOS DISUELTOS TOTALES,SOLIDOS SUSPENDIDOS TOTALES,SOLIDOS SEDIMENTABLES,DBO5,DQO,NITROGENO AMONIACAL,NITRATOS,NITRITOS,FOSFORO TOTAL,FOSFATOS,FENOLES TOTALES,CLORUROS,BICARBONATOS,SODIO,POTASIO,PLOMO,NIQUEL,MERCURIO,MAGNESIO,HIERRO,CROMO HEXAVALENTE,COBRE,CALCIO,CADMIO,BARIO,ALUMINIO,TENSOACTIVOS,GRASAS Y ACEITES,HIDROCARBUROS TOTALES,PESTICIDAS ORGANOFOSFORADOS,PESTICIDAS ORGANOCLORADOS,COLIFORMES TOTALES,COLIFORMES FECALES"/>
</usertype>

<sequence name="parametro_id_seq"
	 start="1" increment="1"
	 min-value="1" max-value="9223372036854775807"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="parametro">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="120" y="560"/>
	<column name="id" not-null="true" sequence="public.parametro_id_seq">
		<type name="integer"/>
	</column>
	<column name="nombre">
		<type name="character varying"/>
	</column>
	<column name="unidad">
		<type name="character varying"/>
	</column>
	<constraint name="parametro_id" type="pk-constr" table="public.parametro">
		<columns names="id" ref-type="src-columns"/>
	</constraint>
</table>

<sequence name="hibernate_sequence"
	 start="1" increment="1"
	 min-value="0" max-value="2147483647"
	 cache="1" cycle="false">
	<schema name="public"/>
	<role name="sigma4c"/>
</sequence>

<table name="many_proyecto_has_many_empresa">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="120" y="400"/>
	<column name="id_proyecto" not-null="true">
		<type name="integer"/>
	</column>
	<column name="id_empresa" not-null="true">
		<type name="integer"/>
	</column>
	<constraint name="many_proyecto_has_many_empresa_pk" type="pk-constr" table="public.many_proyecto_has_many_empresa">
		<columns names="id_proyecto,id_empresa" ref-type="src-columns"/>
	</constraint>
</table>

<table name="many_muestra_has_many_parametro">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="660" y="580"/>
	<column name="concentracion">
		<type name="double precision"/>
	</column>
	<column name="tec_analitic">
		<type name="character varying"/>
	</column>
	<column name="id_muestra" not-null="true">
		<type name="integer"/>
	</column>
	<column name="id_parametro" not-null="true">
		<type name="integer"/>
	</column>
	<constraint name="many_muestra_has_many_parametro_pk" type="pk-constr" table="public.many_muestra_has_many_parametro">
		<columns names="id_muestra,id_parametro" ref-type="src-columns"/>
	</constraint>
</table>

<table name="many_proyecto_has_many_fuente_hidrica">
	<schema name="public"/>
	<role name="sigma4c"/>
	<position x="680" y="460"/>
	<column name="id_proyecto" not-null="true">
		<type name="integer"/>
	</column>
	<column name="id_fuente_hidrica" not-null="true">
		<type name="integer"/>
	</column>
	<constraint name="many_proyecto_has_many_fuente_hidrica_pk" type="pk-constr" table="public.many_proyecto_has_many_fuente_hidrica">
		<columns names="id_proyecto,id_fuente_hidrica" ref-type="src-columns"/>
	</constraint>
</table>

<constraint name="fuente_hidrica_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="SET NULL" ref-table="public.fuente_hidrica" table="public.muestra">
	<columns names="id_fuente_hidrica" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="empresa_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="SET NULL" ref-table="public.empresa" table="public.usuario">
	<columns names="id_empresa" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="rol_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="SET NULL" ref-table="public.rol" table="public.usuario">
	<columns names="id_rol" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="proyecto_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.proyecto" table="public.many_proyecto_has_many_empresa">
	<columns names="id_proyecto" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="empresa_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.empresa" table="public.many_proyecto_has_many_empresa">
	<columns names="id_empresa" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="muestra_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.muestra" table="public.many_muestra_has_many_parametro">
	<columns names="id_muestra" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="parametro_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.parametro" table="public.many_muestra_has_many_parametro">
	<columns names="id_parametro" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="proyecto_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.proyecto" table="public.many_proyecto_has_many_fuente_hidrica">
	<columns names="id_proyecto" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<constraint name="fuente_hidrica_fk" type="fk-constr" comparison-type="MATCH FULL"
	 upd-action="CASCADE" del-action="CASCADE" ref-table="public.fuente_hidrica" table="public.many_proyecto_has_many_fuente_hidrica">
	<columns names="id_fuente_hidrica" ref-type="src-columns"/>
	<columns names="id" ref-type="dst-columns"/>
</constraint>

<relationship name="rel_muestra_fuente_hidrica" type="relfk"
	 custom-color="#21a028"
	 src-table="public.muestra"
	 dst-table="public.fuente_hidrica"
	 src-required="false" dst-required="false"/>

<relationship name="rel_usuario_empresa" type="relfk"
	 custom-color="#ce22b5"
	 src-table="public.usuario"
	 dst-table="public.empresa"
	 src-required="false" dst-required="false"/>

<relationship name="rel_usuario_rol" type="relfk"
	 custom-color="#e59afe"
	 src-table="public.usuario"
	 dst-table="public.rol"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_proyecto_has_many_empresa_proyecto" type="relfk"
	 custom-color="#f60fdc"
	 src-table="public.many_proyecto_has_many_empresa"
	 dst-table="public.proyecto"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_proyecto_has_many_empresa_empresa" type="relfk"
	 custom-color="#75125f"
	 src-table="public.many_proyecto_has_many_empresa"
	 dst-table="public.empresa"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_muestra_has_many_parametro_muestra" type="relfk"
	 custom-color="#e0cb26"
	 src-table="public.many_muestra_has_many_parametro"
	 dst-table="public.muestra"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_muestra_has_many_parametro_parametro" type="relfk"
	 custom-color="#1c3b35"
	 src-table="public.many_muestra_has_many_parametro"
	 dst-table="public.parametro"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_proyecto_has_many_fuente_hidrica_proyecto" type="relfk"
	 custom-color="#9a70e3"
	 src-table="public.many_proyecto_has_many_fuente_hidrica"
	 dst-table="public.proyecto"
	 src-required="false" dst-required="false"/>

<relationship name="rel_many_proyecto_has_many_fuente_hidrica_fuente_hidrica" type="relfk"
	 custom-color="#8f5c77"
	 src-table="public.many_proyecto_has_many_fuente_hidrica"
	 dst-table="public.fuente_hidrica"
	 src-required="false" dst-required="false"/>

</dbmodel>
