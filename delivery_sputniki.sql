DROP DATABASE IF EXISTS delivery_sputniki;
CREATE DATABASE delivery_sputniki;
USE delivery_sputniki;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
 id_user int not null PRIMARY KEY AUTO_INCREMENT,
    nome varchar(40) not null,
    sobrenome varchar(60) not null,
    -- nome_completo text GENERATED ALWAYS AS (nome,'',sobrenome) STORED,
 	cpf varchar(11), -- <-usado na hora de fazer para o entregador 
    email text not null,
    senha text not null,
    endereco_user text not null,
    user_type varchar(20) DEFAULT 'user'
);

CREATE INDEX idx_nome_completo ON usuario(nome,sobrenome);

DROP TABLE IF EXISTS cardapio; 
CREATE TABLE cardapio(
 id_produto int not null PRIMARY key AUTO_INCREMENT, -- nao eh um bom nome na hora que for relacionar ao nome da tabela mas ok, eh mais coerente
    produto_nome varchar(30) NOT NULL,
    preco decimal(15,2) NOT NULL -- Dizem que é a melhor formar de armazenar esses valores, floating pointers perdem precisao
);


DROP TABLE IF EXISTS restaurante;
CREATE TABLE restaurante(
 id_restaurante int not null PRIMARY KEY AUTO_INCREMENT,
 restaurante_nome varchar(30),
    cnpj varchar(14),
    dono_fk int,
    endereco_restaurante text,
    FOREIGN KEY (dono_fk) REFERENCES usuario(id_user) ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS cardapio_restaurante;
CREATE TABLE cardapio_restaurante(
 id_index int not NULL PRIMARY KEY AUTO_INCREMENT,
    id_restaurante_fk int not null,
    id_produto_fk int NOT null,
    FOREIGN KEY (id_restaurante_fk) REFERENCES restaurante(id_restaurante) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_produto_fk) REFERENCES cardapio(id_produto) ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS pedido;
create table pedido(
 id_pedido int not null PRIMARY KEY AUTO_INCREMENT,
    id_produto_fk int NOT null,
    id_restaurante_fk int NOT null,
    id_usuario_fk int not null,
    FOREIGN KEY (id_produto_fk) REFERENCES cardapio(id_produto),
    FOREIGN KEY (id_restaurante_fk) REFERENCES restaurante(id_restaurante),
    FOREIGN KEY (id_usuario_fk) REFERENCES usuario(id_user)
);

DROP TABLE IF EXISTS entrega_hist;
CREATE TABLE entrega_hist(
 id_entrega int not null PRIMARY KEY AUTO_INCREMENT,
    entregador_fk int not null,
    pedido_fk int NOT null,
    horario_saida datetime, -- poderia ser date tbm
    horario_entregue datetime,
    FOREIGN KEY (entregador_fk) REFERENCES usuario(id_user) ON UPDATE CASCADE,
 FOREIGN KEY (pedido_fk) REFERENCES pedido(id_pedido) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO usuario( nome, sobrenome, cpf, email, senha, endereco_user, user_type) 
VALUES ('Admin','Admin',null,'adm@adm.com','123','judas perdeu as botas', 'ADM');