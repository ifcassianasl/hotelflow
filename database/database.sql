CREATE DATABASE "Classon";

CREATE TABLE "Turma"(
	id SERIAL, 
	sala varchar(10),
	area varchar(50),
	nome varchar(100) NOT NULL,
	CONSTRAINT "TurmaPK"
    PRIMARY KEY (id)
);

CREATE TABLE "Aviso"(
	id serial,
	conteudo varchar(1000)
    NOT NULL,
	idTurma int NOT NULL,
	CONSTRAINT "AvisoPK"
    PRIMARY KEY (id),
	CONSTRAINT "AvisoTurmaFK"
    FOREIGN KEY (idTurma)
    REFERENCES "Turma"(id)
      ON UPDATE cascade
		  ON DELETE cascade
);
