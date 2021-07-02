CREATE TABLE tbLogin (
	sqLogin INT NOT NULL AUTO_INCREMENT,
    txLogin VARCHAR(15) NOT NULL,
    txSenha VARCHAR(15) NOT NULL,
    PRIMARY KEY (sqLogin)
);

SELECT * FROM tblogin;

CREATE TABLE tbCliente (
	sqCliente INT NOT NULL AUTO_INCREMENT,
    txNomeCliente VARCHAR(150) NOT NULL,
    txCPF VARCHAR(11) NOT NULL,
    txEmail VARCHAR(50) NOT NULL,
    idLogin INT NOT NULL,
    PRIMARY KEY(sqCliente),
    FOREIGN KEY(idLogin) REFERENCES tbLogin(sqLogin)
);

SELECT * FROM tbCliente;