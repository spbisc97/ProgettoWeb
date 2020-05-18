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


--
-- TOC entry 2215 (class 0 OID 16583)
-- Dependencies: 190
-- Data for Name: logica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.logica (id, esericizio1, esercizio2, esercizio3) FROM stdin;
36	0	0	0
37	0	0	0
38	0	0	0
\.


--
-- TOC entry 2213 (class 0 OID 16566)
-- Dependencies: 188
-- Data for Name: matematica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.matematica (id) FROM stdin;
5
\.


--
-- TOC entry 2216 (class 0 OID 16591)
-- Dependencies: 191
-- Data for Name: python; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.python (id, esericizio1, esercizio2, esercizio3) FROM stdin;
36	0	0	0
37	0	0	0
38	0	0	0
\.


--
-- TOC entry 2214 (class 0 OID 16575)
-- Dependencies: 189
-- Data for Name: statistica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.statistica (id, esericizio1, esercizio2, esercizio3) FROM stdin;
1	0	0	0
35	0	0	0
36	0	0	0
37	0	0	0
38	0	0	0
\.


--
-- TOC entry 2212 (class 0 OID 16555)
-- Dependencies: 187
-- Data for Name: utent; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utent (nick, email, nome, cognome, password) FROM stdin;
Johnny	luca@ooo.it	cuai	arvotti	ciao
\.


--
-- TOC entry 2211 (class 0 OID 16541)
-- Dependencies: 186
-- Data for Name: utente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.utente (id, nick, email, nome, cognome, password) FROM stdin;
9	Root	asfda@351.it	ciao	arvotti	$2y$10$035Pmr6fD7q3BlNAjo2JMueQ7oJ1J9h4iPaNqsomqgd8b3Hh9FILW
11	ciao	ciao@exe.it	ciao	ciao	$2y$10$fRr02IVSl3KkkA3yEVpGAuVyBSJawvtD6D0V9v6ksKRo2U6HgpvfO
12	ciao	ciao@1exe.it	ciao	ciaociao	$2y$10$/NsD9X4uQs6N8dqrneuncuE41rlL8ZAzEHc63gJfQhQ2UYnfqLNe.
13	ciao	ciao@exexe.it	ciao	ciao	$2y$10$YSPBw6N3IaoNgjHm0MOS7u0S8Rp68MGMXVXfEIgrcaKhWpeZw3jAm
14	ciao	ciao@exxe.it	ciao	ciao	$2y$10$V4/srGYl9nO1A9UbeXuOwOXq1K.uwyNxQCNYyFdFNryPnhZYk6XP2
15	ciao	ciao@ci3ao.it	ciao	ciao	$2y$10$pCsQrTa8y7ePhQUe11mwh.faXYTIsGW2xANSvz.YBLqg0mhiScJ8C
16	ciao	ciao@c11iao.it	ciao	ciao	$2y$10$DwASU/NLQOJa07tf5eqEMedHSFUNkCF5SVMQez33acu4p0pioatQK
17	Ciao	ciao@c333iao.it	CIao	Ci	$2y$10$H4EE.M7REFAnGrkPl3RuaeCRodAh0ko3lYvnyP7m9PL.goKejS4ha
18	ciao	ciao@ci13ao.it	CIao	ciao	$2y$10$F.PBtz24xPDkbA1xoqxyLey9BKankJYaIvfDHQcRL4Z1FkwU5kHq2
19	ciao	ciao@c123iao.it	ciao	ciao	$2y$10$vojSbdZ1u9dBdqd/4.kvJeOaJfedzYv04Ec4JPG1gV2x8IfvEukAm
20	ciao	ciao@cia5131o.it	CIao	ciaociao	$2y$10$SistpEGJ7r/O4QIm.VFvfutMAz20nn4ezfbkS9FC5mGFmE3/DksyK
21	ciao	c1@exe.it	ciao	ciao	$2y$10$UJ4/cvmI9P3u83HNEofkpu3V9UeuAYKktxIdZ6chFmzdeSX4KjCUi
22	ciaoia	Ciao@eeexe.it	CIao	ciaociao	$2y$10$/TPjheL.tYqWwtbTxdPTmO6tWftS/tf4OQCqODb5knsgtRrM.Lioe
23	ciao	1431ciao@ciao.it	CIao	ciaociao	$2y$10$2.GFpPzDcgYGwBcDXYtk8eJOvX/da3RRJBjmGPPByawnfRfXSGcPq
24	ciao	CIAOSAFNOANSIF@yah.it	ciao	ciao	$2y$10$mO3dsyg7Nsv9s4OxgqVwlOcR8qu3N4Ovj.Z.Bz7U5Tu1AfWRS6eyq
25	ciao	Ciaoasfaf@y.it	ciao	ciao	$2y$10$pu1McSTDQoeFAbyI2J4JW.L4XO5rwPhaAfCytkx0QvcsN.HDncb3a
26	ciao	1@ciao.it	ciao	ciao	$2y$10$5WoI.YQvV07yJc7cKHLsZev7SS7OjRdFka9Ii/uihBuyR1ibj3C2m
27	ciao	k@y.it	ciao	Ciao	$2y$10$ZpSVCEUU2qXxOBRjr5ysZOdd/V.HfDRNJfB5lDJc2qa5vW8mWu9oO
28	ciao	ciao.w@m.it	ciao	ciao	$2y$10$yqe2UYRBZ4wwo2MYa/fTDeyg7aPN4VkjmpjtpupMbXjmiWH4uOW3S
29	ciao	ci3ao@ciao.it	CIao	ciaociao	$2y$10$.hsXWo01z5qDnLZh/i68jegRgjXNGgnpJKacYVDiKXGnpM0GqcZLa
30	e	C@e.it	w	w	$2y$10$DHulqPayQhAlZQUbUfleB.Y2uE0Zcp7wjn1qMwWxOvYVIeaPSdAQS
31	ciao	a@a.it	ciao	ciao	$2y$10$qHd3iRHy5MW76pxGsGv1e.jLilAM2HJzyztGi6aIJ4smY0eqWY7t2
32	ciao	Ciaociao@a.it	ciao	ciao	$2y$10$5JabVswf43AZJyQU/p0wpuGFoja1O4EHGtHS95dW3pMYyO8vHcibK
33	ciao	ciao@t.it	ciao	ciao	$2y$10$8KF15ZprJlQlK.ZQQVg7b.xF0txT5IMDVFUC92/5d0xHYOBYYyQDG
34	ciao	ciao@ga.it	ciao	ciao	$2y$10$pRbxDNtIw8paQhIAyEK1Ju94/Jiq08hfAh.5W.TflITMCfq.Iyb7.
35	ciao	Ciaooo@gm.com	ciao	ciao	$2y$10$K.nWTGu6UofZmrZRP8Y5feVgvdOaQKN0PoFuw6iGzP2r0mWaFveR2
36	Ciao	ciaociaociao@gg.com	ciao	ciao	$2y$10$JH2rbh.JdQwmfacyyhuS5O0/M4PEKBBmJ5g/G1nrKRtKaQbb.mHZ.
37	ciaoc	ciaciaocs@ca.it	ciao	ciao	$2y$10$k70i6P8GWJZAwC5KJsjhE.TqcY8NgG90WnPLttKipMSWgzYMej9sC
38	Johnny	ciaociaociao@ciao.it	ciao	cic	$2y$10$emQaufSICH5nEvJitmMSyeZn56L.D61hpzAeta.jf9a9qHAGws4tS
5	Johnny	luca@ooo.it	cuai	arvotti	ciao
6	Johnny	luca@ooo.it	ciao	arvotti	ciao
7	Johnny	luca@ooo.itd	ciao	arvotti	ciao
10	ciao	ciao@ciao.it	ciao	ciao	Ciao1234
8	Prova	root@root.it	prova	prova	ciao
\.


--
-- TOC entry 2226 (class 0 OID 0)
-- Dependencies: 185
-- Name: utente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.utente_id_seq', 38, true);


--
-- TOC entry 2090 (class 2606 OID 16590)
-- Name: logica logica_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.logica
    ADD CONSTRAINT logica_pkey PRIMARY KEY (id);


--
-- TOC entry 2092 (class 2606 OID 16598)
-- Name: python python_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.python
    ADD CONSTRAINT python_pkey PRIMARY KEY (id);


--
-- TOC entry 2088 (class 2606 OID 16582)
-- Name: statistica statistica_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.statistica
    ADD CONSTRAINT statistica_pkey PRIMARY KEY (id);


--
-- TOC entry 2086 (class 2606 OID 16554)
-- Name: utente utente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.utente
    ADD CONSTRAINT utente_pkey PRIMARY KEY (id);


-- Completed on 2020-05-18 17:28:17 CEST

--
-- PostgreSQL database dump complete
--

