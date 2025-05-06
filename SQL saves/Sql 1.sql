CREATE database `empresa` ;
use empresa;

create table cliente(
id_cliente int not null auto_increment,
nome varchar(50) not null,
endereco varchar(80) not null,
telefone varchar(20) not null,
email varchar(50) not null,
PRIMARY KEY (id_cliente)
);

INSERT INTO cliente (nome, endereco, telefone, email) VALUES
('João Silva', 'Rua das Flores, 123 - São Paulo, SP', '(11) 91234-5678', 'joao.silva@email.com'),
('Maria Oliveira', 'Av. Brasil, 456 - Rio de Janeiro, RJ', '(21) 99876-5432', 'maria.oliveira@email.com'),
('Carlos Pereira', 'Rua Afonso Pena, 789 - Belo Horizonte, MG', '(31) 98765-4321', 'carlos.pereira@email.com'),
('Ana Souza', 'Rua XV de Novembro, 101 - Curitiba, PR', '(41) 97654-3210', 'ana.souza@email.com'),
('Lucas Lima', 'Av. Paulista, 2020 - São Paulo, SP', '(11) 96543-2109', 'lucas.lima@email.com');


Create table usuario(
nome varchar(50) default null,
usuario varchar(10) default null,
senha varchar(32) default null,
nivel int default null
);


