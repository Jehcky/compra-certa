CREATE TABLE tbLogin (
	idLogin INT NOT NULL AUTO_INCREMENT,
    txLogin VARCHAR(15) NOT NULL,
    txSenha VARCHAR(15) NOT NULL,
    PRIMARY KEY (idLogin)
);

SELECT * FROM tblogin;

CREATE TABLE tbCliente (
	idCliente INT NOT NULL AUTO_INCREMENT,
    txNomeCliente VARCHAR(150) NOT NULL,
    txCPF VARCHAR(11) NOT NULL,
    txEmail VARCHAR(50) NOT NULL,
    idLogin INT NOT NULL,
    PRIMARY KEY(idCliente),
    FOREIGN KEY(idLogin) REFERENCES tbLogin(idLogin)
);

SELECT * FROM tbCliente;