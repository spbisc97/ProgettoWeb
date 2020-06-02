--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.16
-- Dumped by pg_dump version 9.6.16

-- Started on 2020-05-18 17:28:17 CEST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12431)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2224 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 190 (class 1259 OID 16583)
-- Name: logica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.logica (
    id numeric(20,0) NOT NULL,
    esericizio1 numeric(20,0) DEFAULT 0,
    esercizio2 numeric(20,0) DEFAULT 0,
    esercizio3 numeric(20,0) DEFAULT 0
);


ALTER TABLE public.logica OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 16566)
-- Name: matematica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.matematica (
    id integer
);


ALTER TABLE public.matematica OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 16591)
-- Name: python; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.python (
    id numeric(20,0) NOT NULL,
    esericizio1 numeric(20,0) DEFAULT 0,
    esercizio2 numeric(20,0) DEFAULT 0,
    esercizio3 numeric(20,0) DEFAULT 0
);


ALTER TABLE public.python OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 16575)
-- Name: statistica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.statistica (
    id numeric(20,0) NOT NULL,
    esericizio1 numeric(20,0) DEFAULT 0,
    esercizio2 numeric(20,0) DEFAULT 0,
    esercizio3 numeric(20,0) DEFAULT 0
);


ALTER TABLE public.statistica OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 16555)
-- Name: utent; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utent (
    nick character varying(50) DEFAULT NULL::character varying,
    email character varying(125) DEFAULT NULL::character varying,
    nome character varying(40) DEFAULT NULL::character varying,
    cognome character varying(40) DEFAULT NULL::character varying,
    password character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.utent OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16541)
-- Name: utente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utente (
    id integer NOT NULL,
    nick character varying(50) DEFAULT NULL::character varying,
    email character varying(125) DEFAULT NULL::character varying,
    nome character varying(40) DEFAULT NULL::character varying,
    cognome character varying(40) DEFAULT NULL::character varying,
    password character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.utente OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 16539)
-- Name: utente_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.utente_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.utente_id_seq OWNER TO postgres;

--
-- TOC entry 2225 (class 0 OID 0)
-- Dependencies: 185
-- Name: utente_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.utente_id_seq OWNED BY public.utente.id;


--
-- TOC entry 2065 (class 2604 OID 16544)
-- Name: utente id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utente ALTER COLUMN id SET DEFAULT nextval('public.utente_id_seq'::regclass);


