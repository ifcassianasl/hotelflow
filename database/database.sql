CREATE DATABASE "Classon";

CREATE TABLE "Turma"(
	id SERIAL, 
	sala varchar(10),
	area varchar(50),
	nome varchar(100) NOT NULL,
	CONSTRAINT "TurmaPK"
    PRIMARY KEY (id)
);

INSERT INTO "Turma" (sala, area, nome) VALUES
	('10002', 'Banco de Dados', '3C'),
	('402', 'Humanas', 'Sociologia - 3C'),
	('406', 'Matematica - 4C', '4C'),
	('10001', 'Logica de Programação', 'ICI');

SELECT * FROM "Turma";

CREATE TABLE "Aviso"(
	id serial,
	conteudo varchar(1000) NOT NULL,
	idTurma int NOT NULL,
	CONSTRAINT "AvisoPK"
    PRIMARY KEY (id),
	CONSTRAINT "AvisoTurmaFK"
    FOREIGN KEY (idTurma)
    REFERENCES "Turma"(id)
      ON UPDATE cascade
		  ON DELETE cascade
);

INSERT INTO "Aviso" (conteudo, idTurma) VALUES
	('Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1),
	('Perferendis alias placeat pariatur autem cum ab deserunt nemo, voluptatibus adipisci repellendus a totam distinctio nesciunt minima consectetur iure, eum laboriosam blanditiis.', 1),
	('Perferendis alias placeat pariatur autem cum ab deserunt nemo, voluptatibus adipisci repellendus a totam distinctio nesciunt minima consectetur iure, eum laboriosam blanditiis.', 3),
	('Lorem ipsum dolor sit amet consectetur adipisicing elit', 4);

SELECT * FROM "Aviso";


SELECT T.nome, T.area, T.sala, A.conteudo FROM "Turma" AS T LEFT OUTER JOIN "Aviso" AS A ON T.id = A.idTurma;

SELECT T.nome, T.area, T.sala, A.conteudo FROM "Turma" AS T LEFT OUTER JOIN "Aviso" AS A ON T.id = A.idTurma WHERE T.id = 1;
