-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jul-2021 às 04:25
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_compra_certa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `txNomeCategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `txNomeCategoria`) VALUES
(1, 'BEBIDAS'),
(2, 'BELEZA HIGIENE E SAUDE'),
(3, 'CARNES E EMBUTIDOS'),
(4, 'CHOCOLATE DOCES E GULOSEIMAS'),
(5, 'CONGELADOS'),
(6, 'FRIOS E LATICINEOS'),
(7, 'HORTIFRUTI'),
(8, 'LIMPEZA'),
(9, 'PADARIA'),
(10, 'VINHOS CERVEJAS E DESTILADOS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `txNomeCliente` varchar(40) NOT NULL,
  `txCpf` varchar(11) NOT NULL,
  `txEmail` varchar(30) NOT NULL,
  `flReceberEmail` tinyint(1) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `txNomeCliente`, `txCpf`, `txEmail`, `flReceberEmail`, `idLogin`) VALUES
(3, 'Lucas Barboza Loula', '12345678901', 'lucas@email.com', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbendereco`
--

CREATE TABLE `tbendereco` (
  `idEndereco` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `flPrincipal` tinyint(1) NOT NULL DEFAULT 0,
  `txCep` varchar(8) NOT NULL,
  `txBairro` varchar(30) NOT NULL,
  `txRua` varchar(100) NOT NULL,
  `nuLogadouro` int(11) NOT NULL,
  `txComplemento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbendereco`
--

INSERT INTO `tbendereco` (`idEndereco`, `idCliente`, `flPrincipal`, `txCep`, `txBairro`, `txRua`, `nuLogadouro`, `txComplemento`) VALUES
(1, 3, 1, '11111111', 'BAIRRO', 'RUA RAU URA', 99, 'PERTO DALI MESMO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE `tbfuncionario` (
  `idFuncionario` int(11) NOT NULL,
  `txNomeFuncionario` varchar(25) NOT NULL,
  `flGerente` tinyint(1) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbfuncionario`
--

INSERT INTO `tbfuncionario` (`idFuncionario`, `txNomeFuncionario`, `flGerente`, `idLogin`) VALUES
(1, 'jehcky', 0, 3),
(2, 'safadao', 0, 2),
(3, 'gerente', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhistorico`
--

CREATE TABLE `tbhistorico` (
  `idHistorico` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `dtEncaminhamento` datetime NOT NULL,
  `idSetor` int(11) NOT NULL,
  `idFuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbhistorico`
--

INSERT INTO `tbhistorico` (`idHistorico`, `idPedido`, `dtEncaminhamento`, `idSetor`, `idFuncionario`) VALUES
(1, 1, '2021-07-02 23:19:39', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitem_pedido`
--

CREATE TABLE `tbitem_pedido` (
  `idItem` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `nuQuantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbitem_pedido`
--

INSERT INTO `tbitem_pedido` (`idItem`, `idPedido`, `idProduto`, `nuQuantidade`) VALUES
(1, 1, 11, 3),
(2, 1, 1, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `idLogin` int(11) NOT NULL,
  `txLogin` varchar(15) NOT NULL,
  `txSenha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`idLogin`, `txLogin`, `txSenha`) VALUES
(1, 'Lucas', 'lucas'),
(2, 'safadao', 'safadao'),
(3, 'jehcky', 'jekcky'),
(4, 'gerente', 'gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedido`
--

CREATE TABLE `tbpedido` (
  `idPedido` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `vlTotal` float NOT NULL,
  `nuAvaliacao` int(11) NOT NULL,
  `txObs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbpedido`
--

INSERT INTO `tbpedido` (`idPedido`, `idCliente`, `idEndereco`, `vlTotal`, `nuAvaliacao`, `txObs`) VALUES
(1, 3, 1, 259, 4, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `txNomeProduto` varchar(50) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `vlPreco` float NOT NULL,
  `flPromocao` tinyint(1) NOT NULL DEFAULT 0,
  `vlPreco_promocao` float NOT NULL,
  `nuQuantidade` int(11) NOT NULL,
  `txImg_url` varchar(100) NOT NULL,
  `txDescricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `txNomeProduto`, `idCategoria`, `vlPreco`, `flPromocao`, `vlPreco_promocao`, `nuQuantidade`, `txImg_url`, `txDescricao`) VALUES
(1, 'Agua Healsi Fuchsia Rosa Natural 500ml', 1, 19.9, 0, 15.9, 100, 'https://static.clubeextra.com.br/img/uploads/1/191/12218191.jpeg', 'Origem: Portugal    Tudo começou através da simbiose entre uma natureza que ainda permanece intacta em Portugal e a visão de uma família de médicos. A sua preocupação com a enorme importância da água na saúde do Homem, levou-os a procurar incessantemente uma água que pudesse ser muito mais do que uma mera fonte de hidratação.   Após 10 anos de pesquisa das águas mais puras de nascentes, surgiu a Healsi. Apresentada numa garrafa em forma de diamante, Healsi é uma água premium com características raras.   A Healsi flui a vários metros de profundidade, numa pura e intacta nascente de água, em Portugal. Devido à sua rara composição, com elevada concentração em sílica e um pH neutro.   A PUREZA   Healsi é uma água pura, uma fonte natural de vitalidade. A pureza é garantida desde o processo de captura da água até ao seu engarrafamento.   SOFISTICAÇÃO   Consumir Healsi é sinónimo de sofisticação.   A sua inovadora e estilizada embalagem remete para  um universo de uma elegância pura e sólida, tal como um diamante.   SAÚDE   A alta concentração em sílica e um pH neutro tornam a Healsi uma água única com benefícios notáveis na saúde do ser humano.   Composição Química   pH 7   SIO2 61 mg/L   HCO3- 56 mg/L   CI- 23 mg/L   SO2-4 4 mg/L   Ca2+ 2 mg/L   Mg2+ 3 mg/L   K+ 2 mg/L   Na+ 32 mg/L   Total mineralização 183 mg/L   '),
(2, 'Água Mineral Evian Pet 330ml', 1, 8.99, 1, 7.99, 100, 'https://static.clubeextra.com.br/img/uploads/1/415/11921415.jpeg', 'A água evian® começa como neve e chuva nos altos picos dos Alpes Franceses. Protegida dentro do coração das montanhas, cada gota é filtrada através de camadas de glaciais ricos em minerais por mais de 15 anos. Pura por natureza e intocada pelo homem, a água surge na fonte em Evian-les-Bains, onde tem sido engarrafada desde 1826.Especificações Técnicas Volume : 330ml País : França Marca : Evian Garantia : 03 meses contra Defeitos de Fabricação'),
(3, 'Suco Integral Laranja Natural One Garrafa 1,5l', 1, 14.04, 0, 13.64, 100, 'https://static.clubeextra.com.br/img/uploads/1/614/665614.png', ''),
(4, 'Coca-Cola Sabor Original PET 2L', 1, 8.29, 0, 7.29, 100, 'https://static.clubeextra.com.br/img/uploads/1/15/12034015.jpg', 'Com sabor inconfundível e único, uma Coca-Cola Original é o refrigerante mais tradicional e consumido no mundo inteiro! Toda Coca-Cola Original é especialmente concebido para manter sempre a qualidade do melhor sabor de refrigerante! É perfeita para compartilhar os melhores momentos da vida com amigos e familiares!'),
(5, 'Máscara Maisena Capilar Realinhamento Natural 500g', 2, 24.05, 0, 23, 100, 'https://static.clubeextra.com.br/img/uploads/1/549/12988549.png', 'Glatten Professional Amido de Milho - Máscara Maisena Capilar Realinhamento Natural Você já ouviu alguma Resenha desta maravilhosa máscara de Maisena? A GLATTEN há 5 anos foi a 1ª marca a lançar a Amido de Milho para cabelos. Um produto desenvolvido com amilho de milho e um mix de ativos que juntos eliminam de uma vez por todas o frizz dos cabelos. Ação Vitamina A, Gérmem de Trigo e Óleos essenciais mais um poderoso polímero natural de amido que reduz potencialmente o volume dos fios. Informações Pode ser aplicada em qualquer tipo de cabelo e com qualquer tipo de química. Inclusive em crianças e gestantes, sendo excelente opção para pessoas que precisam reduzir o volume dos fios de maneira natural. NOTA Infelizmente muitas empresas copiaram o \"estilo de produto\" e criaram alguns produtos de baixa qualidade que fizeram vários consumidores desacreditar das \"maisenas capilares¿. Entretanto a GLATTEN garante que esta Máscara é produzida com ativos originais e alta qualidade que garantem resultado de salão desde a primeira aplicação. Modo de Uso Após fazer uso do shampoo de sua preferência, aplique uma quantidade generosa de máscara na palma das mãos e enluve os fios mecha a mecha. Deixe agir até 3 minutos. Enxágue completamente e finalize com secador e prancha.'),
(6, 'Creme Dental Colgate Total 12 Clean Mint 180gr', 2, 11.99, 0, 10.99, 100, 'https://static.clubeextra.com.br/img/uploads/1/63/671063.png', '\"O novo creme dental Colgate® Total 12 Clean Mint cuida da sua boca por completo. Sua nova fórmula combate bactérias nos dentes, língua, bochechas e gengiva por até 12 horas, oferecendo mais benefícios do que nunca, incluindo alívio de sensibilidade, melhor resistência ao esmalte do dente e neutralização de odores que causam o mau hálito* (* com base em estudos in vitro). Nova fórmula inovadora Deixa a boca limpa e fresca Combate bactérias nos dentes, língua, bochechas e gengiva por até 12h Ajuda a prevenir a acumulação de placa, combate o tártaro Ajuda a prevenir cáries e gengivite \"'),
(7, 'Tintura Maxton 5.0 Castanho Claro', 2, 12.45, 0, 11, 100, 'https://static.clubeextra.com.br/img/uploads/1/570/12490570.jpeg', 'Tintura Maxton Kit 5.0 Castanho Claro_Especificações TécnicasUnitcount: 100Garantia : 1 Meses de Garantia'),
(8, 'Escova Dental Colgate Dr. Dentuço', 2, 5.98, 1, 4.99, 100, 'https://static.clubeextra.com.br/img/uploads/1/748/12321748.jpeg', 'A escova dental Colgate® Infantil Dr. Rabbit é indicada para uso de crianças acima de 2 anos de idade, auxilia na higiene bucal, deixando os dentes saudáveis e devidamente higienizados. Cerdas extra macias em multiníveis para real limpeza dos dentes e cerdas coloridas que indicam a quantidade recomendada de creme dental Cabeça compacta para a boca pequena do bebê Cabo antiderrapante para se adaptar a mão para facilitar a escovação e incentivar bons hábitos de higiene bucal desde cedoGarantia : 03 Meses de Garantia'),
(9, 'Picanha Prata Congelado SWIFT 1,3KG', 3, 84.45, 0, 80, 100, 'https://static.clubeextra.com.br/img/uploads/1/173/12305173.jpg', 'Preço do KG: R$64,96\r\n\r\nDescrição:\r\nO mais conhecido dos cortes, a Picanha Prata Swift tem pelo menos 80% de uniformidade na capa de gordura, muito sabor, maciez e suculência. Com tamanhos padronizados em peças de aproximadamente 1,5 kg, é maturada e tenderizada, agradando a todos os paladares.\r\n\r\nDica de Preparo:\r\nFaça uma boa selagem para garantir maciez e suculência. Para fazer a selagem de um produto ainda congelado, aumente a temperatura da chapa/grelha/frigideira e faça uma crosta dourada. Após esse processo retire medalhões e finalize a cocção.\r\n\r\nDica do Chef:\r\nSelar a peça em fogo alto (grelha mais baixa), primeiro com a parte da gordura virada para cima, para reter a suculência e depois virada para baixo, deixando a gordura bem douradinha, com um sabor delicioso. Depois de selada, reduzir o calor (grelha mais alta) para finalizar o cozimento ou fazer steaks para agilizar o processo. Temperar a carne com sal grosso alguns minutos antes de grelhar, ou utilizar sal de parrilla após o preparo.'),
(10, 'Patinho de Novilho Rubia Gallega Qualitá 500g', 3, 27.5, 1, 25, 100, 'https://static.clubeextra.com.br/img/uploads/1/680/548680.jpg', ''),
(11, 'Espetinho Coração de Frango Temperado e Congelado ', 3, 22.99, 1, 20, 100, 'https://static.clubeextra.com.br/img/uploads/1/568/644568.png', ''),
(12, 'Hambúrguer De Ervilha Sabor Carne SEARA Incrível 2', 3, 23.99, 1, 21.49, 100, 'https://static.clubeextra.com.br/img/uploads/1/576/11570576.jpg', ''),
(13, 'Coxa sem Pele SWIFT 1KG', 3, 14.47, 0, 13, 100, 'https://static.clubeextra.com.br/img/uploads/1/719/12128719.jpg', 'Descrição :\r\nUma opção leve e nutritiva, as Coxas de Frango sem Pele Swift são ótimas para quem busca uma alimentação saudável e balanceada. Para maior praticidade, são congeladas individualmente em embalagem abre fácil e podem ser preparadas de diversas maneiras.\r\n\r\nDica de Preparo:\r\nRetire da embalagem apenas o que irá consumir. Feche a embalagem e retorne-a ao congelador. Descongele na geladeira ou micro-ondas. Para preparações que não sejam fritas em óleo, pode ser preparado ainda congelado.\r\n\r\nDica do Chef:\r\nMais prático que frango impossível. Aposte numa receita charmosa e um tanto exótica de frango ao curry. Traga um pouco dos aromas e os sabores da índia para o seu dia a dia.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbsetor`
--

CREATE TABLE `tbsetor` (
  `idSetor` int(11) NOT NULL,
  `txNomeSetor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbsetor`
--

INSERT INTO `tbsetor` (`idSetor`, `txNomeSetor`) VALUES
(1, 'PREPARACAO'),
(2, 'EMBALAGEM'),
(3, 'ENTREGA'),
(4, 'ENTREGUE'),
(5, 'CANCELADO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `cliente_login` (`idLogin`);

--
-- Índices para tabela `tbendereco`
--
ALTER TABLE `tbendereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `cliente-endereco` (`idCliente`);

--
-- Índices para tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD PRIMARY KEY (`idFuncionario`),
  ADD KEY `funcionario_login` (`idLogin`);

--
-- Índices para tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD KEY `pedido_historico` (`idPedido`),
  ADD KEY `setor_historico` (`idSetor`),
  ADD KEY `setor_funcionario` (`idFuncionario`);

--
-- Índices para tabela `tbitem_pedido`
--
ALTER TABLE `tbitem_pedido`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `item_produto` (`idProduto`),
  ADD KEY `item_pedido` (`idPedido`);

--
-- Índices para tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- Índices para tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `pedido_cliente` (`idCliente`),
  ADD KEY `pedido-endereco` (`idEndereco`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `produto-cat` (`idCategoria`);

--
-- Índices para tabela `tbsetor`
--
ALTER TABLE `tbsetor`
  ADD PRIMARY KEY (`idSetor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbendereco`
--
ALTER TABLE `tbendereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbitem_pedido`
--
ALTER TABLE `tbitem_pedido`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbsetor`
--
ALTER TABLE `tbsetor`
  MODIFY `idSetor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `cliente_login` FOREIGN KEY (`idLogin`) REFERENCES `tblogin` (`idLogin`);

--
-- Limitadores para a tabela `tbendereco`
--
ALTER TABLE `tbendereco`
  ADD CONSTRAINT `cliente-endereco` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Limitadores para a tabela `tbfuncionario`
--
ALTER TABLE `tbfuncionario`
  ADD CONSTRAINT `funcionario_login` FOREIGN KEY (`idLogin`) REFERENCES `tblogin` (`idLogin`);

--
-- Limitadores para a tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD CONSTRAINT `pedido_historico` FOREIGN KEY (`idPedido`) REFERENCES `tbpedido` (`idPedido`),
  ADD CONSTRAINT `setor_funcionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tbfuncionario` (`idFuncionario`),
  ADD CONSTRAINT `setor_historico` FOREIGN KEY (`idSetor`) REFERENCES `tbsetor` (`idSetor`);

--
-- Limitadores para a tabela `tbitem_pedido`
--
ALTER TABLE `tbitem_pedido`
  ADD CONSTRAINT `item_pedido` FOREIGN KEY (`idPedido`) REFERENCES `tbpedido` (`idPedido`),
  ADD CONSTRAINT `item_produto` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`);

--
-- Limitadores para a tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD CONSTRAINT `pedido-endereco` FOREIGN KEY (`idEndereco`) REFERENCES `tbendereco` (`idEndereco`),
  ADD CONSTRAINT `pedido_cliente` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `produto-cat` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



