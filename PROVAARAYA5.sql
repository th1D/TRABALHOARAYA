-- Criacao do schema 'curso'
CREATE SCHEMA IF NOT EXISTS curso;

-- Criacao da tabela 'tb_curso' dentro do schema 'curso'
CREATE TABLE curso.tb_curso (
  id_curso INT UNSIGNED NOT NULL AUTO_INCREMENT,
  ds_curso VARCHAR(120) NOT NULL,
  nr_carga_horaria INT UNSIGNED DEFAULT NULL,
  dt_inicio DATE DEFAULT NULL,
  PRIMARY KEY (id_curso)
);

-- Criacao da tabela 'tb_aluno' dentro do schema 'curso'
CREATE TABLE curso.tb_aluno (
  id_aluno INT NOT NULL AUTO_INCREMENT,
  ds_aluno VARCHAR(255) NOT NULL,
  id_curso INT NOT NULL,
  PRIMARY KEY (id_aluno),
  FOREIGN KEY (id_curso) REFERENCES curso.tb_curso(id_curso)
);
