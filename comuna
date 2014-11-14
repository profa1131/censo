       
CREATE TABLE actividad_comercial_vivienda (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.actividad_comercial_vivienda OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 47960)
-- Dependencies: 5
-- Name: actividad_comercial_vivienda_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actividad_comercial_vivienda_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.actividad_comercial_vivienda_id_seq OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 51402)
-- Dependencies: 5
-- Name: aguas_servidas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE aguas_servidas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.aguas_servidas OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 47932)
-- Dependencies: 5
-- Name: aguas_servidas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aguas_servidas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aguas_servidas_id_seq OWNER TO postgres;

--
-- TOC entry 229 (class 1259 OID 51450)
-- Dependencies: 5
-- Name: animales; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE animales (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.animales OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 47992)
-- Dependencies: 5
-- Name: animales_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE animales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.animales_id_seq OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 51367)
-- Dependencies: 5
-- Name: areas_de_trabajos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE areas_de_trabajos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.areas_de_trabajos OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 47936)
-- Dependencies: 5
-- Name: areas_de_trabajos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE areas_de_trabajos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.areas_de_trabajos_id_seq OWNER TO postgres;

--
-- TOC entry 238 (class 1259 OID 51495)
-- Dependencies: 5
-- Name: comunas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE comunas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    direccion character varying NOT NULL,
    estados_id bigint
);


ALTER TABLE public.comunas OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 47990)
-- Dependencies: 5
-- Name: comunas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE comunas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.comunas_id_seq OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 51440)
-- Dependencies: 5
-- Name: condicion_terrenos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE condicion_terrenos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.condicion_terrenos OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 47940)
-- Dependencies: 5
-- Name: condicion_terrenos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE condicion_terrenos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.condicion_terrenos_id_seq OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 51412)
-- Dependencies: 5
-- Name: condiciones_salubridad; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE condiciones_salubridad (
    id bigint NOT NULL,
    nombre character varying NOT NULL
);


ALTER TABLE public.condiciones_salubridad OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 47948)
-- Dependencies: 5
-- Name: condiciones_salubridad_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE condiciones_salubridad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.condiciones_salubridad_id_seq OWNER TO postgres;

--
-- TOC entry 239 (class 1259 OID 51503)
-- Dependencies: 5
-- Name: consejos_comunales; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE consejos_comunales (
    id bigint NOT NULL,
    nombres character varying(255),
    estado_id bigint,
    direccion character varying(255) NOT NULL,
    codigo character varying(255) NOT NULL,
    rif character varying(255) NOT NULL,
    numero_de_cuenta character varying(255) NOT NULL,
    comunas_id bigint
);


ALTER TABLE public.consejos_comunales OWNER TO postgres;

--
-- TOC entry 237 (class 1259 OID 51490)
-- Dependencies: 5
-- Name: discapacidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE discapacidades (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.discapacidades OWNER TO postgres;

--
-- TOC entry 166 (class 1259 OID 47912)
-- Dependencies: 5
-- Name: discapacidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE discapacidades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.discapacidades_id_seq OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 47942)
-- Dependencies: 5
-- Name: empleos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE empleos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.empleos_id_seq OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 51407)
-- Dependencies: 5
-- Name: enfermedades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE enfermedades (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.enfermedades OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 47944)
-- Dependencies: 5
-- Name: enfermedades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE enfermedades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.enfermedades_id_seq OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 51420)
-- Dependencies: 5
-- Name: enseres; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE enseres (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.enseres OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 47950)
-- Dependencies: 5
-- Name: enseres_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE enseres_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.enseres_id_seq OWNER TO postgres;

--
-- TOC entry 234 (class 1259 OID 51475)
-- Dependencies: 5
-- Name: estados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE estados (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.estados OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 47980)
-- Dependencies: 5
-- Name: estados_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estados_id_seq OWNER TO postgres;

--
-- TOC entry 240 (class 1259 OID 51511)
-- Dependencies: 5
-- Name: familias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE familias (
    id bigint NOT NULL,
    apellidos character varying(255),
    telefono_local character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    sector character varying(255) NOT NULL,
    nombres_comunidad character varying(255) NOT NULL,
    consejos_comunales_id bigint
);


ALTER TABLE public.familias OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 47926)
-- Dependencies: 5
-- Name: familias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE familias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.familias_id_seq OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 51425)
-- Dependencies: 5
-- Name: forma_tenencias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE forma_tenencias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.forma_tenencias OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 47920)
-- Dependencies: 5
-- Name: forma_tenencias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE forma_tenencias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.forma_tenencias_id_seq OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 51336)
-- Dependencies: 5
-- Name: grupos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE grupos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    role character varying NOT NULL
);


ALTER TABLE public.grupos OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 47986)
-- Dependencies: 5
-- Name: grupos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupos_id_seq OWNER TO postgres;

--
-- TOC entry 255 (class 1259 OID 51607)
-- Dependencies: 5
-- Name: habitantes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE habitantes (
    id bigint NOT NULL,
    familia_id bigint,
    nombre character varying(255) NOT NULL,
    segundo_nombre character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    segundo_apellido character varying(255) NOT NULL,
    genero character varying(255) NOT NULL,
    nacionalidad character varying(255) NOT NULL,
    cedula character varying(255) NOT NULL,
    fecha_nacimiento date NOT NULL,
    embarazo character varying(255) NOT NULL,
    parentesco character varying(255) NOT NULL,
    grado_de_instruccion character varying(255) NOT NULL,
    cne character varying(255) NOT NULL,
    profesiones_id bigint,
    pensionado character varying(255) NOT NULL,
    tipo_de_ingreso character varying(255) NOT NULL,
    ingreso_mensual character varying(255) NOT NULL,
    jefe_grupo_familiar character varying(255) NOT NULL,
    area_de_trabajo_id bigint,
    edo_civil character varying(255) NOT NULL,
    telefono_celular character varying(255) NOT NULL,
    correo_electronico character varying(255) NOT NULL,
    telefono_oficina character varying(255) NOT NULL,
    tiempo_en_la_comunidad character varying(255) NOT NULL,
    ub_cedula character varying NOT NULL,
    up_foto character varying NOT NULL,
    ley_politica_habitacional character varying(255) NOT NULL,
    voceria_id bigint,
    participa_organizacion character varying(255) NOT NULL,
    usuarios_id bigint,
    empleo character varying(255)
);


ALTER TABLE public.habitantes OWNER TO postgres;

--
-- TOC entry 257 (class 1259 OID 51621)
-- Dependencies: 5
-- Name: habitantes_discapacidades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE habitantes_discapacidades (
    id bigint NOT NULL,
    discapacidades_id bigint,
    habitantes_id bigint
);


ALTER TABLE public.habitantes_discapacidades OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 47974)
-- Dependencies: 5
-- Name: habitantes_discapacidades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE habitantes_discapacidades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.habitantes_discapacidades_id_seq OWNER TO postgres;

--
-- TOC entry 256 (class 1259 OID 51616)
-- Dependencies: 5
-- Name: habitantes_enfermedades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE habitantes_enfermedades (
    id bigint NOT NULL,
    enfermedades_id bigint,
    habitantes_id bigint
);


ALTER TABLE public.habitantes_enfermedades OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 47930)
-- Dependencies: 5
-- Name: habitantes_enfermedades_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE habitantes_enfermedades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.habitantes_enfermedades_id_seq OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 47970)
-- Dependencies: 5
-- Name: habitantes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE habitantes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.habitantes_id_seq OWNER TO postgres;

--
-- TOC entry 254 (class 1259 OID 51605)
-- Dependencies: 255 5
-- Name: habitantes_tiempo_en_la_comunidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE habitantes_tiempo_en_la_comunidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.habitantes_tiempo_en_la_comunidad_seq OWNER TO postgres;

--
-- TOC entry 2381 (class 0 OID 0)
-- Dependencies: 254
-- Name: habitantes_tiempo_en_la_comunidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE habitantes_tiempo_en_la_comunidad_seq OWNED BY habitantes.tiempo_en_la_comunidad;


--
-- TOC entry 228 (class 1259 OID 51445)
-- Dependencies: 5
-- Name: mecanismos_informcaion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE mecanismos_informcaion (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.mecanismos_informcaion OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 47958)
-- Dependencies: 5
-- Name: mecanismos_informcaion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE mecanismos_informcaion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mecanismos_informcaion_id_seq OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 51377)
-- Dependencies: 5
-- Name: misiones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE misiones (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.misiones OWNER TO postgres;

--
-- TOC entry 162 (class 1259 OID 47904)
-- Dependencies: 5
-- Name: misiones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE misiones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.misiones_id_seq OWNER TO postgres;

--
-- TOC entry 235 (class 1259 OID 51480)
-- Dependencies: 5
-- Name: municipios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE municipios (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    estados_id bigint
);


ALTER TABLE public.municipios OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 47954)
-- Dependencies: 5
-- Name: municipios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE municipios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipios_id_seq OWNER TO postgres;

--
-- TOC entry 236 (class 1259 OID 51485)
-- Dependencies: 5
-- Name: parroquias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE parroquias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    municipios_id bigint
);


ALTER TABLE public.parroquias OWNER TO postgres;

--
-- TOC entry 161 (class 1259 OID 47902)
-- Dependencies: 5
-- Name: parroquias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE parroquias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parroquias_id_seq OWNER TO postgres;

--
-- TOC entry 230 (class 1259 OID 51455)
-- Dependencies: 5
-- Name: plagas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE plagas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.plagas OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 47978)
-- Dependencies: 5
-- Name: plagas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE plagas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.plagas_id_seq OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 51362)
-- Dependencies: 5
-- Name: preguntas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE preguntas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.preguntas OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 47984)
-- Dependencies: 5
-- Name: preguntas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE preguntas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.preguntas_id_seq OWNER TO postgres;

--
-- TOC entry 253 (class 1259 OID 51600)
-- Dependencies: 5
-- Name: preguntas_registro; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE preguntas_registro (
    id bigint NOT NULL,
    preguntas_id bigint,
    registro_socioeconomico_id bigint
);


ALTER TABLE public.preguntas_registro OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 47924)
-- Dependencies: 5
-- Name: preguntas_registro_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE preguntas_registro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.preguntas_registro_id_seq OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 51357)
-- Dependencies: 5
-- Name: profesiones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE profesiones (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.profesiones OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 47982)
-- Dependencies: 5
-- Name: profesiones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE profesiones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profesiones_id_seq OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 51397)
-- Dependencies: 5
-- Name: recoleccion_basura; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE recoleccion_basura (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.recoleccion_basura OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 47946)
-- Dependencies: 5
-- Name: recoleccion_basura_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE recoleccion_basura_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.recoleccion_basura_id_seq OWNER TO postgres;

--
-- TOC entry 252 (class 1259 OID 51595)
-- Dependencies: 5
-- Name: registro_actividad_comercial; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_actividad_comercial (
    id bigint NOT NULL,
    registro_socioeconomico_id bigint,
    actividad_comercial_vivienda_id bigint
);


ALTER TABLE public.registro_actividad_comercial OWNER TO postgres;

--
-- TOC entry 164 (class 1259 OID 47908)
-- Dependencies: 5
-- Name: registro_actividad_comercial_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_actividad_comercial_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_actividad_comercial_id_seq OWNER TO postgres;

--
-- TOC entry 246 (class 1259 OID 51559)
-- Dependencies: 5
-- Name: registro_animales; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_animales (
    id bigint NOT NULL,
    registro_socioeconomico_id bigint,
    animal_id bigint
);


ALTER TABLE public.registro_animales OWNER TO postgres;

--
-- TOC entry 163 (class 1259 OID 47906)
-- Dependencies: 5
-- Name: registro_animales_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_animales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_animales_id_seq OWNER TO postgres;

--
-- TOC entry 244 (class 1259 OID 51543)
-- Dependencies: 5
-- Name: registro_enseres; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_enseres (
    id character varying NOT NULL,
    enseres_id bigint,
    registro_socioeconomico_id_1 bigint
);


ALTER TABLE public.registro_enseres OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 47994)
-- Dependencies: 5
-- Name: registro_enseres_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_enseres_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_enseres_id_seq OWNER TO postgres;

--
-- TOC entry 247 (class 1259 OID 51564)
-- Dependencies: 5
-- Name: registro_mecanismos_de_informacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_mecanismos_de_informacion (
    id character varying NOT NULL,
    mecanismos_informcaion_id bigint,
    registro_socioeconomico_id_1 bigint
);


ALTER TABLE public.registro_mecanismos_de_informacion OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 47956)
-- Dependencies: 5
-- Name: registro_mecanismos_de_informacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_mecanismos_de_informacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_mecanismos_de_informacion_id_seq OWNER TO postgres;

--
-- TOC entry 250 (class 1259 OID 51582)
-- Dependencies: 5
-- Name: registro_misiones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_misiones (
    id character varying NOT NULL,
    registro_socioeconomico_id bigint,
    misiones_id_1 bigint
);


ALTER TABLE public.registro_misiones OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 47972)
-- Dependencies: 5
-- Name: registro_misiones_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_misiones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_misiones_id_seq OWNER TO postgres;

--
-- TOC entry 242 (class 1259 OID 51527)
-- Dependencies: 5
-- Name: registro_pared; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_pared (
    id character varying NOT NULL,
    tipo_paredes_id bigint,
    registro_socioeconomico_id bigint
);


ALTER TABLE public.registro_pared OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 47928)
-- Dependencies: 5
-- Name: registro_pared_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_pared_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_pared_id_seq OWNER TO postgres;

--
-- TOC entry 245 (class 1259 OID 51551)
-- Dependencies: 5
-- Name: registro_plagas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_plagas (
    id character varying NOT NULL,
    plagas_id_1 bigint,
    registro_socioeconomico_id_1 bigint
);


ALTER TABLE public.registro_plagas OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 47962)
-- Dependencies: 5
-- Name: registro_plagas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_plagas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_plagas_id_seq OWNER TO postgres;

--
-- TOC entry 248 (class 1259 OID 51572)
-- Dependencies: 5
-- Name: registro_servicios_comunales; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_servicios_comunales (
    id bigint NOT NULL,
    registro_socioeconomico_id bigint,
    servicio_comunal_id bigint
);


ALTER TABLE public.registro_servicios_comunales OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 47922)
-- Dependencies: 5
-- Name: registro_servicios_comunales_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_servicios_comunales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_servicios_comunales_id_seq OWNER TO postgres;

--
-- TOC entry 241 (class 1259 OID 51519)
-- Dependencies: 5
-- Name: registro_socioeconomico; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_socioeconomico (
    id bigint NOT NULL,
    ingreso_familiar character varying(255) NOT NULL,
    familias_id bigint,
    condicion_terreno_id bigint,
    forma_tenencia_id bigint,
    tipo_viviendas_id bigint,
    habitaciones_vivienda character varying NOT NULL,
    condiciones_salubridad_id bigint,
    ninos_calle character varying(255) NOT NULL,
    indigentes character varying(255) NOT NULL,
    enfermos_terminales character varying(255) NOT NULL,
    discapacitados character varying(255) NOT NULL,
    tercera_edad character varying(255) NOT NULL,
    ayuda_salud character varying(255) NOT NULL,
    ayuda_vivienda character varying(255) NOT NULL,
    aguas_blancas character varying(255) NOT NULL,
    tanque character varying(255) NOT NULL,
    lts_tanque character varying(255) NOT NULL,
    tipo_tanque character varying(255) NOT NULL,
    pipotes character varying(255) NOT NULL,
    cuantos character varying(255) NOT NULL,
    tipo_pipotes character varying(255) NOT NULL,
    medidor_agua character varying(255) NOT NULL,
    aguas_servidas_id bigint,
    gas character varying(255) NOT NULL,
    empresa_gas character varying(255) NOT NULL,
    cantidad_cilindros character varying(255) NOT NULL,
    capacidad_cilindro character varying(255) NOT NULL,
    duracion_cilindro character varying(255) NOT NULL,
    precio_cilindro character varying(255) NOT NULL,
    sistema_electrico character varying(255) NOT NULL,
    medidor character varying(255) NOT NULL,
    bombillos_ahorradores character varying(255) NOT NULL,
    cuantos_bobillos_necesita character varying(255) NOT NULL,
    recoleccion_basura_id bigint,
    mecanismo_informacion_id bigint NOT NULL,
    organizaciones_counitarias character varying(255) NOT NULL,
    fecha date
);


ALTER TABLE public.registro_socioeconomico OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 47966)
-- Dependencies: 5
-- Name: registro_socioeconomico_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_socioeconomico_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_socioeconomico_id_seq OWNER TO postgres;

--
-- TOC entry 243 (class 1259 OID 51535)
-- Dependencies: 5
-- Name: registro_techos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_techos (
    id character varying NOT NULL,
    tipo_techos_id bigint,
    registro_socioeconomico_id_1 bigint
);


ALTER TABLE public.registro_techos OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 47968)
-- Dependencies: 5
-- Name: registro_techos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_techos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_techos_id_seq OWNER TO postgres;

--
-- TOC entry 251 (class 1259 OID 51590)
-- Dependencies: 5
-- Name: registro_telefonias_id; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_telefonias_id (
    id bigint NOT NULL,
    registro_socioeconomico_id bigint,
    telefonias_id bigint
);


ALTER TABLE public.registro_telefonias_id OWNER TO postgres;

--
-- TOC entry 168 (class 1259 OID 47916)
-- Dependencies: 5
-- Name: registro_telefonias_id_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_telefonias_id_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_telefonias_id_id_seq OWNER TO postgres;

--
-- TOC entry 249 (class 1259 OID 51577)
-- Dependencies: 5
-- Name: registro_transporte; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE registro_transporte (
    id bigint NOT NULL,
    registro_socioeconomico_id bigint,
    transporte_id bigint
);


ALTER TABLE public.registro_transporte OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 47918)
-- Dependencies: 5
-- Name: registro_transporte_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_transporte_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.registro_transporte_id_seq OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 51382)
-- Dependencies: 5
-- Name: servicios_comunales; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE servicios_comunales (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.servicios_comunales OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 47976)
-- Dependencies: 5
-- Name: servicios_comunales_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE servicios_comunales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.servicios_comunales_id_seq OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 51392)
-- Dependencies: 5
-- Name: telefonias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE telefonias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.telefonias OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 47996)
-- Dependencies: 5
-- Name: telefonias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE telefonias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.telefonias_id_seq OWNER TO postgres;

--
-- TOC entry 231 (class 1259 OID 51460)
-- Dependencies: 5
-- Name: tipo_paredes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_paredes (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.tipo_paredes OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 47988)
-- Dependencies: 5
-- Name: tipo_paredes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_paredes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_paredes_id_seq OWNER TO postgres;

--
-- TOC entry 232 (class 1259 OID 51465)
-- Dependencies: 5
-- Name: tipo_techos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_techos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.tipo_techos OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 47952)
-- Dependencies: 5
-- Name: tipo_techos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_techos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_techos_id_seq OWNER TO postgres;

--
-- TOC entry 233 (class 1259 OID 51470)
-- Dependencies: 5
-- Name: tipo_viviendas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_viviendas (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.tipo_viviendas OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 47938)
-- Dependencies: 5
-- Name: tipo_viviendas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_viviendas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_viviendas_id_seq OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 51387)
-- Dependencies: 5
-- Name: transportes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE transportes (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.transportes OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 47964)
-- Dependencies: 5
-- Name: transportes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE transportes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.transportes_id_seq OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 51344)
-- Dependencies: 5
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    id bigint NOT NULL,
    user_name character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    tipo_usuario character varying(255) NOT NULL,
    salt character varying(255) NOT NULL,
    is_active character varying(255) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 51352)
-- Dependencies: 5
-- Name: usuarios_grupos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios_grupos (
    id bigint NOT NULL,
    grupos_id bigint,
    usuarios_id bigint
);


ALTER TABLE public.usuarios_grupos OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 47934)
-- Dependencies: 5
-- Name: usuarios_grupos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_grupos_id_seq OWNER TO postgres;

--
-- TOC entry 167 (class 1259 OID 47914)
-- Dependencies: 5
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 51372)
-- Dependencies: 5
-- Name: vocerias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE vocerias (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.vocerias OWNER TO postgres;

--
-- TOC entry 165 (class 1259 OID 47910)
-- Dependencies: 5
-- Name: vocerias_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE vocerias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vocerias_id_seq OWNER TO postgres;

--
-- TOC entry 2162 (class 2606 OID 51434)
-- Dependencies: 226 226 2374
-- Name: actividad_comercial_vivienda_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY actividad_comercial_vivienda
    ADD CONSTRAINT actividad_comercial_vivienda_pk PRIMARY KEY (id);


--
-- TOC entry 2152 (class 2606 OID 51406)
-- Dependencies: 221 221 2374
-- Name: aguas_servidas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY aguas_servidas
    ADD CONSTRAINT aguas_servidas_pk PRIMARY KEY (id);


--
-- TOC entry 2168 (class 2606 OID 51454)
-- Dependencies: 229 229 2374
-- Name: animales_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY animales
    ADD CONSTRAINT animales_pk PRIMARY KEY (id);


--
-- TOC entry 2138 (class 2606 OID 51371)
-- Dependencies: 214 214 2374
-- Name: areas_de_trabajos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY areas_de_trabajos
    ADD CONSTRAINT areas_de_trabajos_pk PRIMARY KEY (id);


--
-- TOC entry 2186 (class 2606 OID 51502)
-- Dependencies: 238 238 2374
-- Name: comunas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY comunas
    ADD CONSTRAINT comunas_pk PRIMARY KEY (id);


--
-- TOC entry 2164 (class 2606 OID 51444)
-- Dependencies: 227 227 2374
-- Name: condicion_terrenos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY condicion_terrenos
    ADD CONSTRAINT condicion_terrenos_pk PRIMARY KEY (id);


--
-- TOC entry 2156 (class 2606 OID 51419)
-- Dependencies: 223 223 2374
-- Name: condiciones_salubridad_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY condiciones_salubridad
    ADD CONSTRAINT condiciones_salubridad_pk PRIMARY KEY (id);


--
-- TOC entry 2188 (class 2606 OID 51510)
-- Dependencies: 239 239 2374
-- Name: consejos_comunales_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT consejos_comunales_pk PRIMARY KEY (id);


--
-- TOC entry 2184 (class 2606 OID 51494)
-- Dependencies: 237 237 2374
-- Name: discapacidades_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY discapacidades
    ADD CONSTRAINT discapacidades_pk PRIMARY KEY (id);


--
-- TOC entry 2154 (class 2606 OID 51411)
-- Dependencies: 222 222 2374
-- Name: enfermedades_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY enfermedades
    ADD CONSTRAINT enfermedades_pk PRIMARY KEY (id);


--
-- TOC entry 2158 (class 2606 OID 51424)
-- Dependencies: 224 224 2374
-- Name: enseres_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY enseres
    ADD CONSTRAINT enseres_pk PRIMARY KEY (id);


--
-- TOC entry 2178 (class 2606 OID 51479)
-- Dependencies: 234 234 2374
-- Name: estados_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY estados
    ADD CONSTRAINT estados_pk PRIMARY KEY (id);


--
-- TOC entry 2190 (class 2606 OID 51518)
-- Dependencies: 240 240 2374
-- Name: familias_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY familias
    ADD CONSTRAINT familias_pk PRIMARY KEY (id);


--
-- TOC entry 2160 (class 2606 OID 51429)
-- Dependencies: 225 225 2374
-- Name: forma_tenencias_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY forma_tenencias
    ADD CONSTRAINT forma_tenencias_pk PRIMARY KEY (id);


--
-- TOC entry 2128 (class 2606 OID 51343)
-- Dependencies: 209 209 2374
-- Name: grupos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY grupos
    ADD CONSTRAINT grupos_pk PRIMARY KEY (id);


--
-- TOC entry 2222 (class 2606 OID 51625)
-- Dependencies: 257 257 2374
-- Name: habitantes_discapacidades_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY habitantes_discapacidades
    ADD CONSTRAINT habitantes_discapacidades_pk PRIMARY KEY (id);


--
-- TOC entry 2220 (class 2606 OID 51620)
-- Dependencies: 256 256 2374
-- Name: habitantes_enfermedades_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY habitantes_enfermedades
    ADD CONSTRAINT habitantes_enfermedades_pk PRIMARY KEY (id);


--
-- TOC entry 2218 (class 2606 OID 51615)
-- Dependencies: 255 255 2374
-- Name: habitantes_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT habitantes_pk PRIMARY KEY (id);


--
-- TOC entry 2166 (class 2606 OID 51449)
-- Dependencies: 228 228 2374
-- Name: mecanismos_informcaion_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY mecanismos_informcaion
    ADD CONSTRAINT mecanismos_informcaion_pk PRIMARY KEY (id);


--
-- TOC entry 2142 (class 2606 OID 51381)
-- Dependencies: 216 216 2374
-- Name: misiones_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY misiones
    ADD CONSTRAINT misiones_pk PRIMARY KEY (id);


--
-- TOC entry 2180 (class 2606 OID 51484)
-- Dependencies: 235 235 2374
-- Name: municipios_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY municipios
    ADD CONSTRAINT municipios_pk PRIMARY KEY (id);


--
-- TOC entry 2182 (class 2606 OID 51489)
-- Dependencies: 236 236 2374
-- Name: parroquias_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY parroquias
    ADD CONSTRAINT parroquias_pk PRIMARY KEY (id);


--
-- TOC entry 2170 (class 2606 OID 51459)
-- Dependencies: 230 230 2374
-- Name: plagas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY plagas
    ADD CONSTRAINT plagas_pk PRIMARY KEY (id);


--
-- TOC entry 2136 (class 2606 OID 51366)
-- Dependencies: 213 213 2374
-- Name: preguntas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY preguntas
    ADD CONSTRAINT preguntas_pk PRIMARY KEY (id);


--
-- TOC entry 2216 (class 2606 OID 51604)
-- Dependencies: 253 253 2374
-- Name: preguntas_registro_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY preguntas_registro
    ADD CONSTRAINT preguntas_registro_pk PRIMARY KEY (id);


--
-- TOC entry 2134 (class 2606 OID 51361)
-- Dependencies: 212 212 2374
-- Name: profesiones_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY profesiones
    ADD CONSTRAINT profesiones_pk PRIMARY KEY (id);


--
-- TOC entry 2150 (class 2606 OID 51401)
-- Dependencies: 220 220 2374
-- Name: recoleccion_basura_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY recoleccion_basura
    ADD CONSTRAINT recoleccion_basura_pk PRIMARY KEY (id);


--
-- TOC entry 2214 (class 2606 OID 51599)
-- Dependencies: 252 252 2374
-- Name: registro_actividad_comercial_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_actividad_comercial
    ADD CONSTRAINT registro_actividad_comercial_pk PRIMARY KEY (id);


--
-- TOC entry 2202 (class 2606 OID 51563)
-- Dependencies: 246 246 2374
-- Name: registro_animales_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_animales
    ADD CONSTRAINT registro_animales_pk PRIMARY KEY (id);


--
-- TOC entry 2198 (class 2606 OID 51550)
-- Dependencies: 244 244 2374
-- Name: registro_enseres_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_enseres
    ADD CONSTRAINT registro_enseres_pk PRIMARY KEY (id);


--
-- TOC entry 2204 (class 2606 OID 51571)
-- Dependencies: 247 247 2374
-- Name: registro_mecanismos_de_informacion_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_mecanismos_de_informacion
    ADD CONSTRAINT registro_mecanismos_de_informacion_pk PRIMARY KEY (id);


--
-- TOC entry 2210 (class 2606 OID 51589)
-- Dependencies: 250 250 2374
-- Name: registro_misiones_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_misiones
    ADD CONSTRAINT registro_misiones_pk PRIMARY KEY (id);


--
-- TOC entry 2194 (class 2606 OID 51534)
-- Dependencies: 242 242 2374
-- Name: registro_pared_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_pared
    ADD CONSTRAINT registro_pared_pk PRIMARY KEY (id);


--
-- TOC entry 2200 (class 2606 OID 51558)
-- Dependencies: 245 245 2374
-- Name: registro_plagas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_plagas
    ADD CONSTRAINT registro_plagas_pk PRIMARY KEY (id);


--
-- TOC entry 2206 (class 2606 OID 51576)
-- Dependencies: 248 248 2374
-- Name: registro_servicios_comunales_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_servicios_comunales
    ADD CONSTRAINT registro_servicios_comunales_pk PRIMARY KEY (id);


--
-- TOC entry 2192 (class 2606 OID 51526)
-- Dependencies: 241 241 2374
-- Name: registro_socioeconomico_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT registro_socioeconomico_pk PRIMARY KEY (id);


--
-- TOC entry 2196 (class 2606 OID 51542)
-- Dependencies: 243 243 2374
-- Name: registro_techos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_techos
    ADD CONSTRAINT registro_techos_pk PRIMARY KEY (id);


--
-- TOC entry 2212 (class 2606 OID 51594)
-- Dependencies: 251 251 2374
-- Name: registro_telefonias_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_telefonias_id
    ADD CONSTRAINT registro_telefonias_id_pk PRIMARY KEY (id);


--
-- TOC entry 2208 (class 2606 OID 51581)
-- Dependencies: 249 249 2374
-- Name: registro_transporte_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY registro_transporte
    ADD CONSTRAINT registro_transporte_pk PRIMARY KEY (id);


--
-- TOC entry 2144 (class 2606 OID 51386)
-- Dependencies: 217 217 2374
-- Name: servicios_comunales_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY servicios_comunales
    ADD CONSTRAINT servicios_comunales_pk PRIMARY KEY (id);


--
-- TOC entry 2148 (class 2606 OID 51396)
-- Dependencies: 219 219 2374
-- Name: telefonias_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY telefonias
    ADD CONSTRAINT telefonias_pk PRIMARY KEY (id);


--
-- TOC entry 2172 (class 2606 OID 51464)
-- Dependencies: 231 231 2374
-- Name: tipo_paredes_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_paredes
    ADD CONSTRAINT tipo_paredes_pk PRIMARY KEY (id);


--
-- TOC entry 2174 (class 2606 OID 51469)
-- Dependencies: 232 232 2374
-- Name: tipo_techos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_techos
    ADD CONSTRAINT tipo_techos_pk PRIMARY KEY (id);


--
-- TOC entry 2176 (class 2606 OID 51474)
-- Dependencies: 233 233 2374
-- Name: tipo_viviendas_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_viviendas
    ADD CONSTRAINT tipo_viviendas_pk PRIMARY KEY (id);


--
-- TOC entry 2146 (class 2606 OID 51391)
-- Dependencies: 218 218 2374
-- Name: transportes_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY transportes
    ADD CONSTRAINT transportes_pk PRIMARY KEY (id);


--
-- TOC entry 2132 (class 2606 OID 51356)
-- Dependencies: 211 211 2374
-- Name: usuarios_grupos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios_grupos
    ADD CONSTRAINT usuarios_grupos_pk PRIMARY KEY (id);


--
-- TOC entry 2130 (class 2606 OID 51351)
-- Dependencies: 210 210 2374
-- Name: usuarios_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pk PRIMARY KEY (id);


--
-- TOC entry 2140 (class 2606 OID 51376)
-- Dependencies: 215 215 2374
-- Name: vocerias_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY vocerias
    ADD CONSTRAINT vocerias_pk PRIMARY KEY (id);


--
-- TOC entry 2259 (class 2606 OID 51711)
-- Dependencies: 252 2161 226 2374
-- Name: actividad_comercial_vivienda_registro_actividad_comercial_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_actividad_comercial
    ADD CONSTRAINT actividad_comercial_vivienda_registro_actividad_comercial_fk FOREIGN KEY (actividad_comercial_vivienda_id) REFERENCES actividad_comercial_vivienda(id);


--
-- TOC entry 2233 (class 2606 OID 51686)
-- Dependencies: 241 2151 221 2374
-- Name: aguas_servidas_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT aguas_servidas_registro_socioeconomico_fk FOREIGN KEY (aguas_servidas_id) REFERENCES aguas_servidas(id);


--
-- TOC entry 2247 (class 2606 OID 51731)
-- Dependencies: 246 229 2167 2374
-- Name: animales_registro_animales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_animales
    ADD CONSTRAINT animales_registro_animales_fk FOREIGN KEY (animal_id) REFERENCES animales(id);


--
-- TOC entry 2265 (class 2606 OID 51651)
-- Dependencies: 214 2137 255 2374
-- Name: areas_de_trabajos_habitantes_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT areas_de_trabajos_habitantes_fk FOREIGN KEY (area_de_trabajo_id) REFERENCES areas_de_trabajos(id);


--
-- TOC entry 2229 (class 2606 OID 51781)
-- Dependencies: 239 2185 238 2374
-- Name: comunas_consejos_comunales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT comunas_consejos_comunales_fk FOREIGN KEY (comunas_id) REFERENCES comunas(id);


--
-- TOC entry 2236 (class 2606 OID 51721)
-- Dependencies: 227 241 2163 2374
-- Name: condicion_terrenos_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT condicion_terrenos_registro_socioeconomico_fk FOREIGN KEY (condicion_terreno_id) REFERENCES condicion_terrenos(id);


--
-- TOC entry 2234 (class 2606 OID 51696)
-- Dependencies: 223 2155 241 2374
-- Name: condiciones_salubridad_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT condiciones_salubridad_registro_socioeconomico_fk FOREIGN KEY (condiciones_salubridad_id) REFERENCES condiciones_salubridad(id);


--
-- TOC entry 2231 (class 2606 OID 51786)
-- Dependencies: 239 240 2187 2374
-- Name: consejos_comunales_familias_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY familias
    ADD CONSTRAINT consejos_comunales_familias_fk FOREIGN KEY (consejos_comunales_id) REFERENCES consejos_comunales(id);


--
-- TOC entry 2270 (class 2606 OID 51776)
-- Dependencies: 2183 257 237 2374
-- Name: discapacidades_habitantes_discapacidades_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes_discapacidades
    ADD CONSTRAINT discapacidades_habitantes_discapacidades_fk FOREIGN KEY (discapacidades_id) REFERENCES discapacidades(id);


--
-- TOC entry 2268 (class 2606 OID 51691)
-- Dependencies: 2153 222 256 2374
-- Name: enfermedades_habitantes_enfermedades_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes_enfermedades
    ADD CONSTRAINT enfermedades_habitantes_enfermedades_fk FOREIGN KEY (enfermedades_id) REFERENCES enfermedades(id);


--
-- TOC entry 2243 (class 2606 OID 51701)
-- Dependencies: 244 2157 224 2374
-- Name: enseres_registro_enseres_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_enseres
    ADD CONSTRAINT enseres_registro_enseres_fk FOREIGN KEY (enseres_id) REFERENCES enseres(id);


--
-- TOC entry 2227 (class 2606 OID 51766)
-- Dependencies: 2177 234 238 2374
-- Name: estados_comunas_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY comunas
    ADD CONSTRAINT estados_comunas_fk FOREIGN KEY (estados_id) REFERENCES estados(id);


--
-- TOC entry 2228 (class 2606 OID 51761)
-- Dependencies: 234 239 2177 2374
-- Name: estados_consejos_comunales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT estados_consejos_comunales_fk FOREIGN KEY (estado_id) REFERENCES estados(id);


--
-- TOC entry 2225 (class 2606 OID 51756)
-- Dependencies: 234 235 2177 2374
-- Name: estados_municipios_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY municipios
    ADD CONSTRAINT estados_municipios_fk FOREIGN KEY (estados_id) REFERENCES estados(id);


--
-- TOC entry 2267 (class 2606 OID 51791)
-- Dependencies: 255 240 2189 2374
-- Name: familias_habitantes_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT familias_habitantes_fk FOREIGN KEY (familia_id) REFERENCES familias(id);


--
-- TOC entry 2238 (class 2606 OID 51796)
-- Dependencies: 240 241 2189 2374
-- Name: familias_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT familias_registro_socioeconomico_fk FOREIGN KEY (familias_id) REFERENCES familias(id);


--
-- TOC entry 2235 (class 2606 OID 51706)
-- Dependencies: 225 2159 241 2374
-- Name: forma_tenencias_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT forma_tenencias_registro_socioeconomico_fk FOREIGN KEY (forma_tenencia_id) REFERENCES forma_tenencias(id);


--
-- TOC entry 2223 (class 2606 OID 51626)
-- Dependencies: 211 209 2127 2374
-- Name: grupos_usuarios_grupos_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios_grupos
    ADD CONSTRAINT grupos_usuarios_grupos_fk FOREIGN KEY (grupos_id) REFERENCES grupos(id);


--
-- TOC entry 2230 (class 2606 OID 51861)
-- Dependencies: 239 2217 255 2374
-- Name: habitantes_consejos_comunales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY consejos_comunales
    ADD CONSTRAINT habitantes_consejos_comunales_fk FOREIGN KEY (id) REFERENCES habitantes(id);


--
-- TOC entry 2271 (class 2606 OID 51866)
-- Dependencies: 257 2217 255 2374
-- Name: habitantes_habitantes_discapacidades_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes_discapacidades
    ADD CONSTRAINT habitantes_habitantes_discapacidades_fk FOREIGN KEY (habitantes_id) REFERENCES habitantes(id);


--
-- TOC entry 2269 (class 2606 OID 51871)
-- Dependencies: 255 2217 256 2374
-- Name: habitantes_habitantes_enfermedades_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes_enfermedades
    ADD CONSTRAINT habitantes_habitantes_enfermedades_fk FOREIGN KEY (habitantes_id) REFERENCES habitantes(id);


--
-- TOC entry 2249 (class 2606 OID 51726)
-- Dependencies: 247 228 2165 2374
-- Name: mecanismos_informcaion_registro_mecanismos_de_informacion_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_mecanismos_de_informacion
    ADD CONSTRAINT mecanismos_informcaion_registro_mecanismos_de_informacion_fk FOREIGN KEY (mecanismos_informcaion_id) REFERENCES mecanismos_informcaion(id);


--
-- TOC entry 2255 (class 2606 OID 51661)
-- Dependencies: 216 2141 250 2374
-- Name: misiones_registro_misiones_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_misiones
    ADD CONSTRAINT misiones_registro_misiones_fk FOREIGN KEY (misiones_id_1) REFERENCES misiones(id);


--
-- TOC entry 2226 (class 2606 OID 51771)
-- Dependencies: 236 2179 235 2374
-- Name: municipios_parroquias_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY parroquias
    ADD CONSTRAINT municipios_parroquias_fk FOREIGN KEY (municipios_id) REFERENCES municipios(id);


--
-- TOC entry 2245 (class 2606 OID 51736)
-- Dependencies: 245 2169 230 2374
-- Name: plagas_registro_plagas_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_plagas
    ADD CONSTRAINT plagas_registro_plagas_fk FOREIGN KEY (plagas_id_1) REFERENCES plagas(id);


--
-- TOC entry 2261 (class 2606 OID 51646)
-- Dependencies: 213 253 2135 2374
-- Name: preguntas_preguntas_registro_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY preguntas_registro
    ADD CONSTRAINT preguntas_preguntas_registro_fk FOREIGN KEY (preguntas_id) REFERENCES preguntas(id);


--
-- TOC entry 2264 (class 2606 OID 51641)
-- Dependencies: 255 2133 212 2374
-- Name: profesiones_habitantes_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT profesiones_habitantes_fk FOREIGN KEY (profesiones_id) REFERENCES profesiones(id);


--
-- TOC entry 2232 (class 2606 OID 51681)
-- Dependencies: 2149 220 241 2374
-- Name: recoleccion_basura_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT recoleccion_basura_registro_socioeconomico_fk FOREIGN KEY (recoleccion_basura_id) REFERENCES recoleccion_basura(id);


--
-- TOC entry 2262 (class 2606 OID 51801)
-- Dependencies: 253 241 2191 2374
-- Name: registro_socioeconomico_preguntas_registro_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY preguntas_registro
    ADD CONSTRAINT registro_socioeconomico_preguntas_registro_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2260 (class 2606 OID 51806)
-- Dependencies: 2191 241 252 2374
-- Name: registro_socioeconomico_registro_actividad_comercial_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_actividad_comercial
    ADD CONSTRAINT registro_socioeconomico_registro_actividad_comercial_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2248 (class 2606 OID 51836)
-- Dependencies: 246 241 2191 2374
-- Name: registro_socioeconomico_registro_animales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_animales
    ADD CONSTRAINT registro_socioeconomico_registro_animales_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2244 (class 2606 OID 51846)
-- Dependencies: 244 241 2191 2374
-- Name: registro_socioeconomico_registro_enseres_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_enseres
    ADD CONSTRAINT registro_socioeconomico_registro_enseres_fk FOREIGN KEY (registro_socioeconomico_id_1) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2250 (class 2606 OID 51831)
-- Dependencies: 247 241 2191 2374
-- Name: registro_socioeconomico_registro_mecanismos_de_informacion_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_mecanismos_de_informacion
    ADD CONSTRAINT registro_socioeconomico_registro_mecanismos_de_informacion_fk FOREIGN KEY (registro_socioeconomico_id_1) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2256 (class 2606 OID 51816)
-- Dependencies: 250 2191 241 2374
-- Name: registro_socioeconomico_registro_misiones_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_misiones
    ADD CONSTRAINT registro_socioeconomico_registro_misiones_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2240 (class 2606 OID 51856)
-- Dependencies: 242 2191 241 2374
-- Name: registro_socioeconomico_registro_pared_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_pared
    ADD CONSTRAINT registro_socioeconomico_registro_pared_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2246 (class 2606 OID 51841)
-- Dependencies: 245 241 2191 2374
-- Name: registro_socioeconomico_registro_plagas_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_plagas
    ADD CONSTRAINT registro_socioeconomico_registro_plagas_fk FOREIGN KEY (registro_socioeconomico_id_1) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2252 (class 2606 OID 51826)
-- Dependencies: 241 2191 248 2374
-- Name: registro_socioeconomico_registro_servicios_comunales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_servicios_comunales
    ADD CONSTRAINT registro_socioeconomico_registro_servicios_comunales_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2242 (class 2606 OID 51851)
-- Dependencies: 243 241 2191 2374
-- Name: registro_socioeconomico_registro_techos_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_techos
    ADD CONSTRAINT registro_socioeconomico_registro_techos_fk FOREIGN KEY (registro_socioeconomico_id_1) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2258 (class 2606 OID 51811)
-- Dependencies: 2191 241 251 2374
-- Name: registro_socioeconomico_registro_telefonias_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_telefonias_id
    ADD CONSTRAINT registro_socioeconomico_registro_telefonias_id_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2254 (class 2606 OID 51821)
-- Dependencies: 249 241 2191 2374
-- Name: registro_socioeconomico_registro_transporte_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_transporte
    ADD CONSTRAINT registro_socioeconomico_registro_transporte_fk FOREIGN KEY (registro_socioeconomico_id) REFERENCES registro_socioeconomico(id);


--
-- TOC entry 2251 (class 2606 OID 51666)
-- Dependencies: 217 248 2143 2374
-- Name: servicios_comunales_registro_servicios_comunales_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_servicios_comunales
    ADD CONSTRAINT servicios_comunales_registro_servicios_comunales_fk FOREIGN KEY (servicio_comunal_id) REFERENCES servicios_comunales(id);


--
-- TOC entry 2257 (class 2606 OID 51676)
-- Dependencies: 2147 251 219 2374
-- Name: telefonias_registro_telefonias_id_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_telefonias_id
    ADD CONSTRAINT telefonias_registro_telefonias_id_fk FOREIGN KEY (telefonias_id) REFERENCES telefonias(id);


--
-- TOC entry 2239 (class 2606 OID 51741)
-- Dependencies: 242 231 2171 2374
-- Name: tipo_paredes_registro_pared_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_pared
    ADD CONSTRAINT tipo_paredes_registro_pared_fk FOREIGN KEY (tipo_paredes_id) REFERENCES tipo_paredes(id);


--
-- TOC entry 2241 (class 2606 OID 51746)
-- Dependencies: 2173 232 243 2374
-- Name: tipo_techos_registro_techos_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_techos
    ADD CONSTRAINT tipo_techos_registro_techos_fk FOREIGN KEY (tipo_techos_id) REFERENCES tipo_techos(id);


--
-- TOC entry 2237 (class 2606 OID 51751)
-- Dependencies: 241 2175 233 2374
-- Name: tipo_viviendas_registro_socioeconomico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_socioeconomico
    ADD CONSTRAINT tipo_viviendas_registro_socioeconomico_fk FOREIGN KEY (tipo_viviendas_id) REFERENCES tipo_viviendas(id);


--
-- TOC entry 2253 (class 2606 OID 51671)
-- Dependencies: 249 2145 218 2374
-- Name: transportes_registro_transporte_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro_transporte
    ADD CONSTRAINT transportes_registro_transporte_fk FOREIGN KEY (transporte_id) REFERENCES transportes(id);


--
-- TOC entry 2263 (class 2606 OID 51636)
-- Dependencies: 2129 255 210 2374
-- Name: usuarios_habitantes_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT usuarios_habitantes_fk FOREIGN KEY (usuarios_id) REFERENCES usuarios(id);


--
-- TOC entry 2224 (class 2606 OID 51631)
-- Dependencies: 210 2129 211 2374
-- Name: usuarios_usuarios_grupos_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios_grupos
    ADD CONSTRAINT usuarios_usuarios_grupos_fk FOREIGN KEY (usuarios_id) REFERENCES usuarios(id);


--
-- TOC entry 2266 (class 2606 OID 51656)
-- Dependencies: 2139 255 215 2374
-- Name: vocerias_habitantes_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY habitantes
    ADD CONSTRAINT vocerias_habitantes_fk FOREIGN KEY (voceria_id) REFERENCES vocerias(id);


