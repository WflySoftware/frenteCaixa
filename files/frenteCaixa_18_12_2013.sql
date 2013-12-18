CREATE TABLE cliente (
  cod_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  cpf VARCHAR(14) NULL,
  endereco VARCHAR(200) NULL,
  telefone VARCHAR(14) NULL,
  email VARCHAR(200) NULL,
  data_nascimento DATE NULL,
  PRIMARY KEY(cod_cliente),
  INDEX cliente_FKIndex1(filial_cod_filial)
);

CREATE TABLE filial (
  cod_filial INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NULL,
  endereco VARCHAR(200) NULL,
  estado_caixa BOOL NULL,
  pontos INT(2) NULL,
  PRIMARY KEY(cod_filial)
);

CREATE TABLE fornecedor (
  cod_fornecedor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  nome_fantasia VARCHAR(100) NULL,
  cnpj VARCHAR(50) NULL,
  razao_social VARCHAR(200) NULL,
  inscricao_estadual VARCHAR(50) NULL,
  estado VARCHAR(100) NULL,
  email VARCHAR(200) NULL,
  endereco VARCHAR(200) NULL,
  telefone_com VARCHAR(14) NULL,
  telefone_cel VARCHAR(14) NULL,
  cidade VARCHAR(50) NULL,
  representante VARCHAR(100) NULL,
  telefone_rep VARCHAR(14) NULL,
  PRIMARY KEY(cod_fornecedor),
  INDEX fornecedor_FKIndex1(filial_cod_filial)
);

CREATE TABLE funcionario (
  cod_funcionario VARCHAR NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(100) NULL,
  cpf VARCHAR(14) NULL,
  rg VARCHAR(14) NULL,
  orgao VARCHAR(10) NULL,
  data_expedicao DATE NULL,
  data_nascimento DATE NULL,
  telefone_cel VARCHAR(14) NULL,
  telefone_casa VARCHAR(14) NULL,
  endereco VARCHAR(200) NULL,
  tipo_contrato INT(2) NULL,
  data_admissao DATE NULL,
  salario FLOAT(8) NULL,
  email  VARCHAR(200) NULL,
  login VARCHAR(25) NULL,
  senha VARCHAR(6) NULL,
  funcao INT(2) NULL,
  banco VARCHAR(10) NULL,
  agencia VARCHAR(10) NULL,
  conta VARCHAR(7) NULL,
  cidade VARCHAR(50) NULL,
  cargo VARCHAR(50) NULL,
  PRIMARY KEY(cod_funcionario),
  INDEX funcionario_FKIndex1(filial_cod_filial)
);

CREATE TABLE itens (
  produto_cod_produto INTEGER UNSIGNED NOT NULL,
  venda_cod_venda INTEGER UNSIGNED NOT NULL,
  quantidade INTEGER UNSIGNED NULL,
  PRIMARY KEY(produto_cod_produto, venda_cod_venda),
  INDEX produto_has_venda_FKIndex1(produto_cod_produto),
  INDEX produto_has_venda_FKIndex2(venda_cod_venda)
);

CREATE TABLE produto (
  cod_produto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  descricao VARCHAR(100) NULL,
  valor_compra FLOAT(8) NULL,
  valor_venda FLOAT(8) NULL,
  cod_barras VARCHAR(50) NULL,
  quantidade INT(8) NULL,
  data_aquisicao DATE NULL,
  data_validade DATE NULL,
  PRIMARY KEY(cod_produto),
  INDEX produto_FKIndex1(filial_cod_filial)
);

CREATE TABLE servico (
  cod_servico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  descricao VARCHAR(100) NULL,
  valor FLOAT(8) NULL,
  PRIMARY KEY(cod_servico),
  INDEX servico_FKIndex1(filial_cod_filial)
);

CREATE TABLE venda (
  cod_venda INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  filial_cod_filial INTEGER UNSIGNED NOT NULL,
  funcionario_cod_funcionario VARCHAR NOT NULL,
  cliente_cod_cliente INTEGER UNSIGNED NOT NULL,
  data_2 DATE NULL,
  valor_total FLOAT(8) NULL,
  forma_pagamento INT(2) NULL,
  PRIMARY KEY(cod_venda),
  INDEX venda_FKIndex1(cliente_cod_cliente),
  INDEX venda_FKIndex2(funcionario_cod_funcionario),
  INDEX venda_FKIndex3(filial_cod_filial)
);


