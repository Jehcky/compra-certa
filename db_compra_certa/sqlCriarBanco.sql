CREATE TABLE tbLogin (
	idLogin INT NOT NULL AUTO_INCREMENT,
    txLogin VARCHAR(15) NOT NULL,
    txSenha VARCHAR(15) NOT NULL,
    PRIMARY KEY (idLogin)
);

CREATE TABLE tbCliente (
	idCliente INT NOT NULL AUTO_INCREMENT,
    txNomeCliente VARCHAR(150) NOT NULL,
    txCPF VARCHAR(11) NOT NULL,
    txEmail VARCHAR(50) NOT NULL,
    flReceberEmail BOOLEAN NOT NULL,
    idLogin INT NOT NULL,
    PRIMARY KEY (idCliente),
    FOREIGN KEY (idLogin) REFERENCES tbLogin (idLogin)
);

CREATE TABLE tbFuncionario (
	idFuncionario INT NOT NULL AUTO_INCREMENT,
    txNomeFuncionario VARCHAR(150) NOT NULL,
    flGerente BOOLEAN NOT NULL,
    idLogin INT NOT NULL,
    PRIMARY KEY (idFuncionario),
    FOREIGN KEY (idLogin) REFERENCES tbLogin (idLogin)
);


