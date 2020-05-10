--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2 (Ubuntu 12.2-4)
-- Dumped by pg_dump version 12.2 (Ubuntu 12.2-4)

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: utent; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.utent (
    nick character varying(255),
    email character varying(255),
    name character varying(255),
    surname character varying(255),
    password character varying(255)
);


ALTER TABLE public.utent OWNER TO postgres;

--
-- PostgreSQL database dump complete
--

