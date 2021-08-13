create table STATO(
	STATO_ID INT NOT NULL AUTO_INCREMENT,   
	STATO_MACCHINA			INT,
	NOTA_MANUTENTORE		VARCHAR(100),
	K_RISCALDAMENTO			REAL,
	TOT_PEZZI_PROD			DECIMAL,
	TOT_BATTUTA_MACCHINA	DECIMAL,
	TOT_BATTUTA_CHIOCC		DECIMAL,
	TOT_BATTUTA_VITE		DECIMAL,
	RICETTA_ATTIVA			VARCHAR(20),
	NR_RICETTA_ATTIVA		INT,
	TURNO_ATTIVO			INT,
	EFFICENZA_RICHIESTA		REAL,
	SET_BATTUTA1			REAL,
	SET_BATTUTA2			REAL,
	SET_BATTUTA3			REAL,
	SET_BATTUTA4			REAL,
	SPARE1					REAL,
	SPARE2					REAL,
	SPARE3  				REAL,
    SPARE4  				REAL,
    SPARE5  				REAL,
    SPARE6  				REAL,
    SPARE7  				REAL,
    SPARE8  				REAL,
    SPARE9  				REAL,
    SPARE10 				REAL,
	MACHINE_ID				INT NOT NULL,
   PRIMARY KEY ( STATO_ID )
);
-- -----------------------------------------------------------------------
create table RETE_ELETTRICA(	
		 POT_ATT 		REAL,   	
         POT_REATT 		REAL,  
         V1_N 			REAL,   	
         V2_N 			REAL,   	
         V3_N 			REAL,   	
         A1 			REAL,   		
         A2 			REAL,   		
         A3 			REAL,   		
         SPARE1 		REAL,
         SPARE2 		REAL,
         SPARE3 		REAL,
         SPARE4 		REAL,
         SPARE5 		REAL,
         SPARE6 		REAL,
         SPARE7 		REAL,
         SPARE8 		REAL,
         SPARE9 		REAL,
         SPARE10 		REAL	 
);

-- ------------------------------------------------------------------------------
create table ficep_tonnellate(	
		 TONNELLATE_VAL REAL,   
         SFORZO_MAX     REAL,
         PREALLARME   	DECIMAL,
         ALLARME 		DECIMAL, 		
         SPARE1 		REAL,
         SPARE2 		REAL,
         SPARE3 		REAL,
         SPARE4 		REAL,
         SPARE5 		REAL,
         SPARE6 		REAL,
         SPARE7 		REAL,
         SPARE8 		REAL,
         SPARE9 		REAL,
         SPARE10 		REAL	 
);
-- ------------------------------------------------------------------------------------
create table ficep_analogiche(
analogica_id    INT NOT NULL,
ABILITAZIONE	BOOLEAN,
VALORE			REAL,
LIMITE_MIN		REAL,
LIMITE_SUP		REAL,
DESCRIZIONE		VARCHAR(30),
SPARE1			REAL,
SPARE2			REAL,
SPARE3			REAL
);
-- --------------------------------------------------------------------------------------
create table ficep_assi(
asse_id      		INT NOT NULL,
ASSE_AB				BOOLEAN,
ASSE_POTENZA		REAL,
ASSE_CORRENTE		REAL,
ASSE_TEMPERATURA	REAL,
ASSE_ALLARME_ATT	DECIMAL,
ASSE_STRINGA		VARCHAR(30),
SPARE1				REAL,
SPARE2				REAL,
SPARE3				REAL
);

-- ---------------------------------------------------------------------------------------
create table ficep_manutenzione(
alarm_code varchar(10) NOT NULL,
alarm_group     VARCHAR(10),
stato_manutenzione INT

);
-- ---------------------------------------------------------------------------------------
create table ficep_allarmi(
alarm_code     	VARCHAR(10),
alarm_group     VARCHAR(10),
attivo 			BOOLEAN

);
-- ---------------------------------------------------------------------------------------
create table ficep_allarmi_attivi(

alarm_code     	VARCHAR(10) NOT NULL,
alarm_group     VARCHAR(10),
attivo 			BOOLEAN
);

-- ---------------------------------------------------------------------------------------
create table ficep_properties(

var_name     	VARCHAR(50),
start_value 	VARCHAR(50) DEFAULT '',
offset     		VARCHAR(50),
attivo 			BOOLEAN

);

