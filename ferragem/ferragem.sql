-- parte 3 
CREATE DATABASE FERRAGEM;

use FERRAGEM;

CREATE TABLE CATEGORIA ( 
idcategoria int not null auto_increment,
nome varchar(45) not null,
primary key (idcategoria)
);

CREATE TABLE LOJA (
idloja int not null auto_increment,
endereco varchar(45) not null,
telefone char (9) not null,
nome char(45) not null,
cnpj char(14) not null,
primary key (idloja)
);

CREATE TABLE FORNECEDOR (
idfornecedor int not null auto_increment,
nome varchar(45) not null,
email varchar(45) not null,
endereco varchar(45) not null,
primary key(idfornecedor)
);

CREATE TABLE ADMINISTRADOR(
	idadministrador int not null auto_increment,
    email varchar(45) not null,
    senha varchar(255) not null,
    nome varchar(45) not null,
    primary key (idadministrador)
);

CREATE TABLE CLIENTE(
idcliente int not  null auto_increment,
nome varchar(45) not null,
telefone char (9),
endereco varchar (45) not null,
email varchar(45) not null,
primary key(idcliente)
);

CREATE TABLE PRODUTO(
idproduto int not null auto_increment,
lote varchar(45) not null,
preco decimal not null,
nome varchar(45)not null,
validade date not null,
primary key (idproduto),
idcategoria int not null,
foreign key (idcategoria) references categoria (idcategoria)
);

CREATE TABLE compras( 
idfornecedor int not null,
idproduto int not null,
idcliente int not null,
quantidade int not null,
valor_pago decimal(6,2) not null,
data_compra date not null,
primary key (idfornecedor, idproduto, idcliente),
foreign key (idfornecedor) references fornecedor (idfornecedor),
foreign key (idproduto) references produto (idproduto),
foreign key (idcliente) references cliente (idcliente)
);

insert into loja ( endereco, telefone, nome, cnpj)
 values ( "passo" , "55 999999", "ferragem chuquel", "12345678912345");
 
insert into categoria (nome)
 values ("parafusos");
 
insert into administrador ( email, senha )
values (  "ferragemchuquel@gmail.com", "142536789" ); 

 
alter table loja add email varchar(45); 

 insert into loja(email) values("ferragem@gmail.com");
 
alter table categoria modify nome varchar(30);
 
 alter table loja alter column cnpj set default "não definido";
 
 alter table loja  alter column email set default "não inserido";

 alter table loja  alter column email drop default ;
 
 -- PARTE 4
 
 INSERT INTO CATEGORIA (nome) VALUES
('POTES'),
('MATERIAL P/ JARDINAGEM'),
('BIKES'),
('MATERIAIS P/ PINTURA'),
('MATERIAIS DE LIMPEZA'),
('ELETRONICOS'),
('SEMENTES'),
('ILUMINAÇÃO');

 INSERT INTO ADMINISTRADOR (email, senha) VALUES
 ('ana@gmail.com','vivaosanimes'),
 ('sheleykrausedequevedo@gmal.com', 'brasil22'),
 ('anerobalo@gmail.com', 'ericaminha'),
 ('brunagoncalves@gmail.com', 'lud123'),
 ('analauramacedo@gmail.com','laurinha'),
  ('eduardacunha@gmail.com', 'amofelix'),
 ('lipe44@gmail.com', 'dudaminhabest'),
 ('kauarodrigues@gmail.com', 'faouhater'),
 ('kelenarce@gmail.com', 'lovevida'),
 ('vitoriasilva@gmail.com', 'derrota');

INSERT INTO CLIENTE (nome, telefone, endereco, email) VALUES
('Eduarda Cunha', '996869814', 'R. General Osório 43', 'dudinhaamafelix@gmail.com'),
('Ana Julia','999685281', 'R. Mariana Alves 72', 'anajulia5anime@gmail.com'),
('Ane Robalo','992041301', 'R. Fernando Castro 258', 'aneatleta123@gmail.com'),
('Sheley Krause','984264872', 'R. Felix da Cunha 92', 'krausesheley22@gmail.com'),
('Felipe', '991688752', 'R.Alberto Beleveluto 42', 'lipeportela44@gmail.com'),
('Kauã Rodrigues','981633542', 'R. Francisco Martins 123', 'lovebts423@gmail.com'),
('Raissa', '992985783', 'R. Betim 29', 'raissaherdeira@gmail.com'),
('Enzo','999334566', 'R. Manuel Viana 938', 'enzoamalol@gmail.com'),
('Luiza', '991724561', 'R. General Oório 52', 'luluzinha@gmail.com'),
('Pedro','984359862', 'R. Juan Flores 244', 'juan985@gmail.com');



INSERT INTO COMPRAS ( idfornecedor, quantidade, valor_pago, data_compra, idproduto) VALUES
(1, '40', '12.42', '06/24/2005',12),
(2, '99', '20.89', '03/30/2020',13),
(3, '85', '24.35', '12/28/2019',14),
(4, '72', '30.25', '10/06/2020', 15),
(5, '52', '14.99', '08/07/2013', 16),
(6, '63', '18.75', '07/30/2013', 17),
(7, '78', '25.48', '10/25/2009', 18),
(8, '66', '29.99', '09/29/2022', 19),
(9, '61', '35.12', '11/15/2019', 20),
(10, '98', '19.80', '01/23/2022', 21);

 
INSERT INTO PRODUTO ( lote, preco, nome, validade, idcategoria) VALUES
('NF939UUD', '45.74', 'cadeira de praia', '02/23/2025', 1),
('NQFHW89Q', '118.24', 'ração p/ cão adulto', '09/18/2023', 7),
('D87RTFVR', '8.23', 'semente de melancia', '02/13/2023', 8),
('ND7HE73H', '11.75', 'sabão em pó', '04/23/2023', 5),
('DW897R87', '7.99', 'detergente', '07/28/2024', 2),
('CNE77E8B', '13.84', 'água sanitária', '09/30/2025', 1),
('DQ87E77D', '286.78', 'pneu para bicicleta', '08/12/2027', 6),
('SFH87R8W', '57.63', 'torneira', '10/29/2025', 5),
('F9Q9R77E', '37.26', 'vassoura', '03/12/2024', 3),
('D87D77E7', '62.36', 'chuveiro elétrico', '07/19/2026', 8);
  
INSERT INTO LOJA ( endereco, telefone, nome, CNPJ, Email) VALUES
('Av. Francisco Miranda 134', '992356733', 'Chuquel Ferragem e Rações', '928.299.162-82', 'ricardochuquel@gmail.com');

 
INSERT INTO FORNECEDOR (nome, email, endereco) VALUES
('Junior Freitas', 'juninhodistribuicoes@gmail.com', 'R. General Osório 544'),
('Paloma Lima', 'limapaloma@gmail.com','R. Juan Flores 88'),
('Juliana Figueiredo', 'jujufigueiredo@gmail.com', 'R. Manuel Viana 142'),
('Fabio Comin', 'fabiocomin@gmail.com','R. Fernando Castro 32'),
('Maria Anastásia', 'mariaana@gmail.com', 'R.Alberto Beleveluto 744'),
('Sofia Espanha', 'eusofiaespanha@gmail.com', 'R. Betim 76'),
('José Fernando', 'josenando@gmail.com', 'R. Manuel Viana 324'),
('Henrique Silva', 'hsila@gmail.com', 'R. Felix da Cunha 723'),
('Rafael Fraga', 'fragsrafa@gmail.com', 'R. Mariana Alves 375'),
('Pedro Miranda', 'pedromi@gmail.com', 'R. Fernando Castro 116');





-- atualizando o email sheleyKrause@gmail.com para seujoao@gmail.com
UPDATE administrador
SET email =  'seujoao@gmail.com'
WHERE idadministrador = 3;

 -- atualizando o numero do cliente 2
UPDATE cliente
SET  telefone =  '999776982'
WHERE idcliente = 2;

-- mundando a senha do adm 2 
UPDATE administrador
SET senha =  '123456'
WHERE idadministrador = 2;

-- substituindo de todos os dados do usuario 9
UPDATE cliente
SET nome =  'paula', telefone = "999765745",
endereco = "Avenida Beira Rio, 167", email = "paulinhaescobar@gmail.com"
WHERE idcliente = 9;

-- mudança do nome e do email do cliente
UPDATE cliente
SET email = "juangameplay@gmail.com", nome =  'Juan'
WHERE idcliente = 10;

-- apagar o registro do cliente 9
DELETE FROM cliente WHERE idcliente = 9;

-- deletação de adm que perdeu acesso
DELETE FROM Administrador WHERE idadministrador = 3;

-- exclusão de um cliente inativo  
DELETE FROM cliente WHERE idcliente = 5;

SELECT * FROM ADMINISTRADOR ORDER BY email ASC; 
SELECT nome FROM CLIENTE;
SELECT * FROM fORNECEDOR ORDER BY nome DESC; 
SELECT DISTINCT email FROM CLIENTE;
SELECT * FROM CLIENTE;
SELECT * FROM PRODUTO WHERE preco<18;
SELECT * FROM PRODUTO WHERE nome LIKE 'deter_____';
SELECT * FROM FORNECEDOR ORDER BY nome ASC;
SELECT * FROM PRODUTO WHERE preco;
SELECT * FROM FORNECEDOR ORDER BY endereco DESC;


