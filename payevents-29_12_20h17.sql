-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Dez-2020 às 00:17
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `payevents`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `sigla`, `estado`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) NOT NULL,
  `modalidade` int(10) NOT NULL,
  `descricao` text NOT NULL,
  `responsavel` int(10) NOT NULL,
  `tipo` int(2) DEFAULT NULL COMMENT '1.presencial 2.virtual',
  `cep` varchar(20) DEFAULT NULL,
  `logradouro` varchar(80) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `imagem` varchar(70) DEFAULT NULL,
  `corfundo` varchar(15) DEFAULT NULL,
  `cortitulos` varchar(15) DEFAULT NULL,
  `corbotoes` varchar(15) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.ativo 2.inativo 3.bloqueado 4.excluido 5.analise',
  `datacriacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `subtitulo`, `modalidade`, `descricao`, `responsavel`, `tipo`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `imagem`, `corfundo`, `cortitulos`, `corbotoes`, `status`, `datacriacao`) VALUES
(5, 'Corrida maluca 2', 'subtitulo da corrida', 4, 'descricao', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#000000', '#000000', '#000000', 4, '2020-12-29 18:20:48'),
(6, 'Corrida maluca 32', 'subtitulo corrida 32', 4, 'descricao virtual2', 9, 1, '04469130', 'ghf', 'hdf', 'dfs', 'gsdfg', 'fsdg', 12, NULL, '#000000', '#000000', '#000000', 4, '2020-12-29 18:21:13'),
(7, 'São Silvestre', 'A corrida de São Paulo', 4, 'Um evento que ocorre anualmente.', 9, 1, '04459320', 'Avenida Paulista', '1200', '', 'Jd. Paulista', 'São Paulo', 25, NULL, '#e10505', '#3c3939', '#000000', 5, '2020-12-29 20:11:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_categorias`
--

CREATE TABLE `eventos_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `evento` int(10) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `status` int(5) NOT NULL COMMENT '1.liberado 2.bloqueado 3.encerrado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_categorias`
--

INSERT INTO `eventos_categorias` (`id`, `evento`, `titulo`, `valor`, `status`) VALUES
(3, 3, '3km', '234.32', 2),
(4, 0, 'dsfads', '2.34', 1),
(8, 5, '6km', '2343.24', 1),
(9, 7, '5 KM', '120.00', 1),
(10, 7, '10 km', '150.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_categorias_kits`
--

CREATE TABLE `eventos_categorias_kits` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` int(10) NOT NULL,
  `item` int(10) NOT NULL,
  `quantidade` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_categorias_kits`
--

INSERT INTO `eventos_categorias_kits` (`id`, `categoria`, `item`, `quantidade`) VALUES
(2, 8, 5, 5),
(3, 9, 7, 150),
(4, 10, 6, 150),
(5, 10, 7, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_imagens`
--

CREATE TABLE `eventos_imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `evento` int(10) NOT NULL,
  `imagem` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_imagens`
--

INSERT INTO `eventos_imagens` (`id`, `evento`, `imagem`) VALUES
(1, 2, '1609274205.jpg'),
(2, 2, '1609274214.jpg'),
(3, 2, '1609274223.jpg'),
(4, 2, '1609274231.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_kit_item`
--

CREATE TABLE `eventos_kit_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_kit_item`
--

INSERT INTO `eventos_kit_item` (`id`, `item`) VALUES
(6, 'Squeeze'),
(7, 'Camiseta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_kit_variacoes`
--

CREATE TABLE `eventos_kit_variacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` int(10) NOT NULL,
  `variacao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_kit_variacoes`
--

INSERT INTO `eventos_kit_variacoes` (`id`, `item`, `variacao`) VALUES
(3, 4, 'PP'),
(4, 4, 'M'),
(5, 5, 'PP'),
(6, 5, 'M'),
(7, 7, 'P'),
(8, 7, 'M'),
(9, 7, 'G');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_modalidades`
--

CREATE TABLE `eventos_modalidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `modalidade` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_modalidades`
--

INSERT INTO `eventos_modalidades` (`id`, `modalidade`) VALUES
(4, 'Corrida de rua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos_tipo`
--

CREATE TABLE `eventos_tipo` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos_tipo`
--

INSERT INTO `eventos_tipo` (`id`, `tipo`) VALUES
(1, 'Presencial'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idioma` varchar(40) NOT NULL,
  `bandeira` varchar(60) NOT NULL,
  `status` int(5) NOT NULL COMMENT '1.ativo 2.inativo 3.excluido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idiomas_textos`
--

CREATE TABLE `idiomas_textos` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `whatsapp` varchar(120) DEFAULT NULL,
  `facebook` varchar(120) DEFAULT NULL,
  `instagram` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `email`, `whatsapp`, `facebook`, `instagram`) VALUES
(1, 'contato@payeventos.com.br', '11980246313', 'www.facebook.com/payevents', 'www.instagram.com.br/payevents');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `mercadopago_token` varchar(120) NOT NULL,
  `mercadopago_codigo` varchar(120) NOT NULL,
  `paypal_token` varchar(120) NOT NULL,
  `paypal_codigo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `mercadopago_token`, `mercadopago_codigo`, `paypal_token`, `paypal_codigo`) VALUES
(1, 'token mp', 'codigo mp', 'token paypal', 'codigo paypal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `categoria` int(10) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `responsavel` int(10) DEFAULT NULL,
  `imagem` varchar(60) DEFAULT NULL,
  `cepsaida` varchar(15) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.aprovado 2.reprovado 3.bloqueado 4.excluido 5.analise',
  `datacriacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `subtitulo`, `categoria`, `preco`, `descricao`, `responsavel`, `imagem`, `cepsaida`, `status`, `datacriacao`) VALUES
(1, 'titulo do produto', 'subtitulo do produto', 2, NULL, 'descrição do produto', 9, '1609268061.jpg', '04468-080', 4, '2020-12-29 14:14:11'),
(3, 'fdgdfsg', 'fdsgfsd', 2, '4535.43', 'fdgdsfg', 9, NULL, '04469-120', 5, '2020-12-29 20:15:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_categorias`
--

CREATE TABLE `produtos_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_categorias`
--

INSERT INTO `produtos_categorias` (`id`, `categoria`) VALUES
(2, 'Camisetas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_imagens`
--

CREATE TABLE `produtos_imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `produto` int(10) NOT NULL,
  `imagem` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_imagens`
--

INSERT INTO `produtos_imagens` (`id`, `produto`, `imagem`) VALUES
(1, 1, '1609267577.jpg'),
(2, 1, '1609268061.jpg'),
(4, 1, '1609268150.jpg'),
(5, 3, '1609283721.jpg'),
(6, 3, '1609283728.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `representantes_regioes`
--

CREATE TABLE `representantes_regioes` (
  `id` int(10) NOT NULL,
  `estado` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seo`
--

CREATE TABLE `seo` (
  `id` int(5) UNSIGNED NOT NULL,
  `analytics` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `seo`
--

INSERT INTO `seo` (`id`, `analytics`, `description`, `keywords`) VALUES
(1, 'UA-60987813-1', 'PayEvents é um aplicativo de integração entre o atleta e o evento, facilitando aprimorando o modo de comprar eventos esportivos, unificando a interação com o cliente e o evento por ele inscrito, PayEvents é uma nova maneira pioneira mudando a forma de comprar eventos.', 'Corrida de rua, corrida brasil, corrida, esporte de rua, inscricao online de corrida de bike, inscricao on-line de corrida de rua, inscrição on-line de corrida, compra de on-linede inscricao em corrida diversas, evenos de rua, venda ingressos eventos de rua, onde comprar eventos de rua, onde vender eventos de rua, app de eventos de rua, app de venda de ingressos de eventos de rua, melhor app de eventos de rua, melhor App de venda de ingressos de eventos de esporte, Corrida de rua, Ciclismo, Corrida virtual, Maratona, Corrida de obstáculo, Natação, Meia maratona, Ultra maratona, Trail run, Corrida de montanha, Triathlon, Corrida infantil, Maratona aquática ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpfcnpj` varchar(30) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `senha` varchar(70) DEFAULT NULL,
  `perfil` int(2) DEFAULT NULL COMMENT '1.admin 2.organizador 3.representante',
  `idioma` int(10) DEFAULT NULL COMMENT '1.portugues(br) 2.ingles(en) 3.portugal(pt)',
  `imagem` varchar(40) DEFAULT NULL,
  `whatsapp` varchar(30) DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL COMMENT '1.ativo 2.inativo',
  `datadesativacao` datetime DEFAULT NULL,
  `datacadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpfcnpj`, `email`, `senha`, `perfil`, `idioma`, `imagem`, `whatsapp`, `estado`, `status`, `datadesativacao`, `datacadastro`) VALUES
(9, 'Felipe Sergio', '2615137800180', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, '1609248977.jpg', '(11) 11111-1111', 17, 1, NULL, '2020-12-28 13:54:55'),
(15, 'Felipe Sergio', '324.324.324324-32', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, NULL, NULL, '(23) 43243-2432', 16, 2, NULL, '2020-12-28 19:29:05'),
(16, 'Netto Silva', '314.762.168-51', 'lourival.neto@otima.com', '21232f297a57a5a743894a0e4a801fc3', 3, NULL, NULL, '(11) 94611-1556', 18, 1, '2020-12-28 19:30:16', '2020-12-28 19:30:10'),
(17, 'Neto Guedes', '314.762.168-54', 'netto781@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, NULL, '1609194712.jpg', '(11) 98024-6313', 10, 2, NULL, '2020-12-28 19:31:30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_categorias`
--
ALTER TABLE `eventos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_categorias_kits`
--
ALTER TABLE `eventos_categorias_kits`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_imagens`
--
ALTER TABLE `eventos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_kit_item`
--
ALTER TABLE `eventos_kit_item`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_kit_variacoes`
--
ALTER TABLE `eventos_kit_variacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_modalidades`
--
ALTER TABLE `eventos_modalidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos_tipo`
--
ALTER TABLE `eventos_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `idiomas_textos`
--
ALTER TABLE `idiomas_textos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_categorias`
--
ALTER TABLE `produtos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `representantes_regioes`
--
ALTER TABLE `representantes_regioes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `eventos_categorias`
--
ALTER TABLE `eventos_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `eventos_categorias_kits`
--
ALTER TABLE `eventos_categorias_kits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `eventos_imagens`
--
ALTER TABLE `eventos_imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `eventos_kit_item`
--
ALTER TABLE `eventos_kit_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `eventos_kit_variacoes`
--
ALTER TABLE `eventos_kit_variacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `eventos_modalidades`
--
ALTER TABLE `eventos_modalidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `eventos_tipo`
--
ALTER TABLE `eventos_tipo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `idiomas_textos`
--
ALTER TABLE `idiomas_textos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos_categorias`
--
ALTER TABLE `produtos_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `representantes_regioes`
--
ALTER TABLE `representantes_regioes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
