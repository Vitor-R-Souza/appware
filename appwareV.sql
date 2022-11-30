-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2022 às 20:50
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `appware`
--
CREATE DATABASE IF NOT EXISTS `appware` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `appware`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_catego` int NOT NULL,
  `generos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_catego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_catego`, `generos`) VALUES
(0, 'indie'),
(1, 'AÇÃO'),
(2, 'AVENTURA'),
(3, 'TERROR'),
(4, 'CORRIDA'),
(5, 'ESPORTES'),
(6, 'RPG'),
(7, 'FPS'),
(8, 'TPS'),
(9, 'RTS'),
(10, 'PVP'),
(11, 'MMORPG'),
(12, 'MOBA'),
(13, 'BATTLE ROYALE'),
(14, 'HACK AND SLASH'),
(15, 'SIMULADOR'),
(16, 'LUTA'),
(17, 'PUZZLE'),
(18, 'ESTRATÉGIA'),
(19, 'PLATAFORMA'),
(20, 'BEAT-EM UP'),
(21, 'STEALTH'),
(22, 'SOBREVIVÊNCIA'),
(23, 'RITMO'),
(24, 'SANDBOX'),
(25, 'MILITAR'),
(26, 'TEXT-ADVENTURE'),
(27, 'GRAPHIC ADVENTURE'),
(28, 'VISUAL NOVEL'),
(29, 'FILMES INTERATIVOS'),
(30, 'RUN N GUN'),
(31, 'METROIDVANIA'),
(32, 'ANIME'),
(33, 'JRPG'),
(34, 'RTT'),
(35, 'TORRE DEFENSIVA'),
(36, 'MUNDO ABERTO'),
(37, 'PARTY GAMES'),
(38, 'ROUGUELIKE'),
(39, 'AÇÃO E AVENTURA'),
(40, 'SOBREVIVÊNCIA HORROR'),
(41, 'AÇÃO, RPG'),
(42, 'SANDBOX, RPG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id_dados` int NOT NULL AUTO_INCREMENT,
  `espaco_armazenamento` decimal(15,0) NOT NULL,
  `memoria_ram` decimal(15,0) NOT NULL,
  `processador` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_video` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sistema_operacional` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_computador` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dados`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_dados`, `espaco_armazenamento`, `memoria_ram`, `processador`, `placa_video`, `sistema_operacional`, `nome_computador`, `email`) VALUES
(1, '465', '15', 'AMD Ryzen 5 PRO 4650G with Radeon Graphics', 'AMD Radeon Graphics Processor (0x1636)', 'Windows 10', 'sdfgsdfg', 'dfgsdfgs'),
(2, '465', '15', 'AMD Ryzen 5 PRO 4650G with Radeon Graphics', 'AMD Radeon Graphics Processor (0x1636)', 'Windows 10', 'PC da etec', 'vrdsmasked022@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `id_J` int NOT NULL,
  `id_U` int NOT NULL,
  KEY `id_jogos_idx` (`id_J`),
  KEY `id_usuario_idx` (`id_U`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id_jogos` int NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `classificacao_indi` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopse` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_lancamento` date NOT NULL,
  `arquitetura_sistema` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desenvolvedora` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa_jogo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa_filtragem` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qts_analisados` decimal(15,0) NOT NULL,
  `id_catego` int DEFAULT NULL,
  `id_catego3` int DEFAULT NULL,
  `id_catego2` int DEFAULT NULL,
  `indie` int DEFAULT '0',
  PRIMARY KEY (`id_jogos`),
  KEY `id_catego` (`id_catego`),
  KEY `id_catego3` (`id_catego3`),
  KEY `id_catego2` (`id_catego2`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id_jogos`, `nome_jogo`, `classificacao_indi`, `sinopse`, `ano_lancamento`, `arquitetura_sistema`, `desenvolvedora`, `capa_jogo`, `avaliacao`, `capa_filtragem`, `qts_analisados`, `id_catego`, `id_catego3`, `id_catego2`, `indie`) VALUES
(1, 'Red Dead Redemption 2', '+18', 'Red Dead Redemption 2, a épica aventura de mundo aberto da Rockstar Games aclamada pela crítica e o jogo mais bem avaliado desta geração de consoles, agora chega aprimorado para PC com conteúdos inéditos no Modo História, melhorias visuais e muito mais.', '2018-10-26', '64 bits', 'Rockstar Games', 'big-red-dead-redemption2.jpg', '', 'red-dead-redemption2.jpg', '0', NULL, NULL, NULL, 0),
(2, 'Marvel Spider-Man Remastered', '12', 'Em Marvel\'s Spider-Man Remasterizado, os mundos de Peter Parker e Spider-Man entram em conflito em uma história original cheia de ação. Jogue como um Peter Parker experiente que combate as maiores ameaças do crime e vilões icônicos na Nova York da Marvel.', '2019-08-28', '64 bits', 'Insomniac Games, Nixxes Software', 'big-marvel-spiderman.jpg', '', 'marvel-spiderman.jpg', '0', NULL, NULL, NULL, 0),
(3, 'Outlast 2', '+18', 'Em Outlast 2, você controla Blake Langermann, um cinegrafista que, junto da esposa repórter, vai até o Arizona, nos Estados Unidos, para cobrir o suposto assassinato de uma jovem. Um acidente o isola da mulher e encontrá-la se torna sua missão principal.\r\nEntretanto, o local é povoado por uma seita satanista, com direito a sacrifícios por todo lado.', '2017-04-24', '64 bits', 'Red Barrels', 'big-outlast2.jpg', '', 'outlast2.jpg', '0', NULL, NULL, NULL, 0),
(4, 'Forza Horizon 5', 'L', 'Sua maior aventura Horizon te espera! Explore o mundo aberto vibrante e em constante evolução nas terras mexicanas. Participe de corridas divertidas e sem limites enquanto pilota centenas dos melhores carros do mundo. Comece hoje sua Aventura Horizon e adicione o jogo a sua Lista de Desejos!', '2021-11-05', '64 bits', 'Playground Games', 'big-forza-horizon5.jpg', '', 'forza-horizon5.jpg', '0', NULL, NULL, NULL, 0),
(5, 'FIFA 23', 'L', 'FIFA 23 traz o Jogo de Todo Mundo aos gramados com a tecnologia HyperMotion2, proporcionando ainda mais realismo às partidas, a FIFA World Cup™ masculina e feminina (lançamento durante a temporada), times femininos, recursos de crossplay* e muito mais.', '2022-09-30', '64 bits', 'EA Canada & EA Romania', 'big-fifa23.jpg', '', 'fifa23.jpg', '0', NULL, NULL, NULL, 0),
(6, 'The Witcher 3: Wild Hunt', '16', 'Enquanto a guerra assola todos os Reinos do Norte, você enfrenta o maior conflito de sua vida: ir em busca da criança da profecia, uma arma senciente capaz de alterar o mundo.', '2015-05-18', '64 bits', 'CD PROJEKT RED', 'big-the-witcher3.jpg', '', 'the-witcher3.jpg', '0', NULL, NULL, NULL, 0),
(7, 'Battlefield 1', '16', 'Junte-se ao Battlefield e viva o alvorecer da guerra total em partidas multiplayer em equipes, ou através da campanha em imersivas Histórias de Guerra.', '2016-10-21', '64 bits', 'DICE', 'big-battlefield1.jpg', '', 'battlefield1.jpg', '0', NULL, NULL, NULL, 0),
(8, 'Resident Evil 2', '16', 'Um vírus maligno toma conta dos residentes de Raccoon City em setembro de 1998, afundando a cidade no caos enquanto zumbis comedores de carne humana vagam pelas ruas em busca de sobreviventes. Um surto de adrenalina sem comparação, uma história instigante e horrores...', '2019-01-25', '64 bits', 'CAPCOM Co., Ltd.', 'big-resident-evil2.jpg', '', 'resident-evil2.jpg', '0', NULL, NULL, NULL, 0),
(9, 'Iron Marines', 'L', 'RTS em cenários incríveis de ficção-científica! Conquiste a galáxia!', '2019-03-15', '32 ou 64 bits', 'Ironhide Game Studio', 'big-iron-marines.jpg', '', 'iron-marines.jpg', '0', NULL, NULL, NULL, 0),
(10, 'Counter-Strike: Global Offensive', '16', 'O Counter-Strike: Global Offensive (CS:GO) melhora a jogabilidade de ação baseada em equipes na qual foi pioneiro quando lançado há 19 anos. O CS:GO contém novos mapas, personagens e armas, além de contar com versões atualizadas de conteúdos do CS clássico.', '2012-08-21', '32 ou 64 bits', 'Valve, Hidden Path Entertainment', 'big-csgo.jpg', '', 'csgo.jpg', '0', NULL, NULL, NULL, 0),
(11, 'World of Warcraft', '12', 'O mundo de Azeroth serve como palco principal para toda a ação. É nele que o jogador utiliza seus personagens para evoluir de nível, eliminar monstros, realizar missões com amigos e ainda conseguir itens mágicos e superpoderosos, que vão te transformar em uma verdadeira lenda viva do lugar.', '2004-11-23', '64 bits', 'Blizzard Entertainment', 'big-world-of-warcraft.jpg', '', 'world-of-warcraft.jpg', '0', NULL, NULL, NULL, 0),
(12, 'Dota 2', '12', 'Diariamente, milhões de jogadores mundo afora batalham como um dentre os mais de cem heróis do Dota. Estejam jogando há 10 ou 1.000 horas, há sempre algo novo para descobrir. Com atualizações constantes das mecânicas, recursos e heróis, o Dota 2 se tornou mais que um simples jogo.', '2013-07-09', '32 ou 64 bits', 'Valve', 'big-dota2.jpg', '', 'dota2.jpg', '0', NULL, NULL, NULL, 0),
(13, 'Fortnite', '12', 'Chame seus amigos e mergulhe no Fortnite, um jogo massivo de combate entre 100 jogadores da Epic Games que combina saque, criação, tiroteio e caos. O resultado é uma experiência online competitiva e totalmente imprevisível que só fica maior e mais radical a cada temporada.', '2017-07-21', '64 bits', 'Epic Games', 'big-fortnite.jpg', '', 'fortnite.jpg', '0', NULL, NULL, NULL, 0),
(14, 'For Honor', '16', 'Deixe um rastro de destruição num campo de batalha intenso e verossímil em For Honor, um novo e inovador jogo desenvolvido pelo famoso estúdio Ubisoft Montreal em colaboração com outros estúdios da Ubisoft.', '2016-09-15', '64 bits', 'Ubisoft Montreal, Ubisoft Quebec, Ubisoft Toronto', 'big-for-honor.jpg', '', 'for-honor.jpg', '0', NULL, NULL, NULL, 0),
(15, 'Electrician Simulador', 'L', 'Desempenhe o papel de um eletricista e aprenda o básico da eletricidade. Assim como na vida real, conserte itens quebrados, monte tomadas, conserte controles de jogo, alto-falantes, plugues, lustres, troque lâmpadas e instale fios. Certifique-se de verificar tudo duas vezes, não há lugar para erros!', '2022-09-21', '64 bits', 'Take IT Studio!', 'big-electrician-simulator.jpg', '', 'electrician-simulator.jpg', '0', NULL, NULL, NULL, 0),
(16, 'Street Fighter V', '12', 'Experimente os intensos combates um contra um de Street Fighter® V! Escolha entre 16 personagens icônicos e lute contra amigos, online ou offline, com uma robusta variedade de opções de partidas.', '2016-02-16', '64 bits', 'Capcom', 'big-street-fighter5.jpg', '', 'street-fighter5.jpg', '0', NULL, NULL, NULL, 0),
(17, 'Portal 2', 'L', 'A \"Iniciativa de Testes Perpétuos\" foi expandida para permitir que você projete quebra-cabeças cooperativos para você e seus amigos!', '2011-04-18', '32 ou 64 bits', 'Valve', 'big-portal2.jpg', '', 'portal2.jpg', '0', NULL, NULL, NULL, 0),
(18, 'Age of Empires III: Definitive Edition', '10', 'Age of Empires III: Definitive Edition marca a celebração de uma das mais famosas franquias de estratégia em tempo real em formato definitivo, com gráficos e música remasterizados, todas as expansões lançadas anteriormente e conteúdo novo para ser desfrutado pela primeira vez.', '2020-10-15', '64 bits', 'Tantalus Media, Forgotten Empires', 'big-age-of-empires3.jpg', '', 'age-of-empires3.jpg', '0', NULL, NULL, NULL, 0),
(19, 'Cuphead', '10', 'Cuphead é um jogo de ação e tiros clássico, com enorme ênfase nas batalhas de chefes. Inspirado nas animações infantis da década de 1930, os visuais e efeitos sonoros foram minuciosamente recriados com as mesmíssimas técnicas dessa era, com destaque para desenhos feitos à mão, fundos...', '2017-09-29', '32 ou 64 bits', 'Studio MDHR Entertainment Inc.', 'big-cuphead.jpg', '', 'cuphead.jpg', '0', NULL, NULL, NULL, 0),
(20, 'Bayonetta', '+18', 'A obra-prima de ação universalmente aclamada da PlatinumGames finalmente chega ao PC. Experimente a ação elegante over-the-top em 60fps em resoluções HD desbloqueadas. A maneira definitiva de jogar: ser ruim nunca me pareceu tão bom.', '2009-10-29', '32 ou 64 bits', 'PlatinumGames', 'big-bayonetta.jpg', '', 'bayonetta.jpg', '0', NULL, NULL, NULL, 0),
(21, 'Tom Clancy: Splinter Cell Blacklist', '16', 'Infiltre nas posições terroristas, adquira inteligência crítica usando qualquer meio necessário, execute com extremo dano e saia sem deixar rastros!Você é Sam Fisher, um agente altamente treinado pela secreta Third Echelon, da NSA.', '2002-11-17', '32 ou 64 bits', 'Ubisoft', 'big-splinter-cell-blacklist.jpg', '', 'splinter-cell-blacklist.jpg', '0', NULL, NULL, NULL, 0),
(22, 'ARK: Survival Evolved', '14', 'Como um homem ou mulher abandonado nu, congelando e morrendo de fome numa ilha misteriosa, você precisa caçar, colher, construir itens, cultivar e construir abrigos para sobreviver. Use habilidade e astúcia para matar, domar, criar e montar Dinossauros e criaturas primitivas vivendo...', '2015-06-02', '64 bits', 'Studio Wildcard, Instinct Games, Efecto Studios, V', 'big-ark.jpg', '', 'ark.jpg', '0', NULL, NULL, NULL, 0),
(23, 'Geometry Dash', 'L', 'Pule e voe através do perigo neste plataforma de ação baseada em ritmo!', '2013-08-13', '32 ou 64 bits', 'RobTop Games', 'big-geometry-dash.jpg', '', 'geometry-dash.jpg', '0', NULL, NULL, NULL, 0),
(24, 'Minecraft', 'L', 'Minecraft é um jogo eletrônico dos gêneros sandbox e sobrevivência que não possui objetivos específicos a serem alcançados, permitindo aos jogadores uma grande liberdade de escolha de como jogá-lo.', '2011-11-18', '32 ou 64 bits', 'Mojang Studios, Other Ocean Interactive, 4J Studio', 'big-minecraft.jpg', '', 'minecraft.jpg', '0', NULL, NULL, NULL, 0),
(25, 'Verdun', '16', 'Guerra de trincheiras impiedosa mergulha você e seu esquadrão em intensas batalhas de ataque e defesa. Verdun é o primeiro FPS multiplayer ambientado em um autêntico cenário da Primeira Guerra Mundial oferecendo uma experiência de campo de batalha raramente vista.', '2015-04-28', '32 ou 64 bits', ' M2H, Blackmill Games', 'big-verdun.jpg', '', 'verdun.jpg', '0', NULL, NULL, NULL, 0),
(26, 'Zork Anthology', '10', 'Uma vez que você entra pela porta para Zork, você deixa o mundo dos jogos de arcade e fantasias banais para trás e entra na dimensão de sua imaginação.', '1989-07-14', '32 ou 64 bits', ' Infocom', 'big-zork.jpg', '', 'zork.jpg', '100', NULL, NULL, NULL, 0),
(27, 'Life is Strange - Episode 1', '16', 'O Episódio 1 agora é GRÁTIS! Life is Strange é uma premiada aventura em episódios, aclamada pela crítica, que permite ao jogador voltar no tempo e alterar passado, presente e futuro.', '2015-01-30', '32 ou 64 bits', 'DONTNOD Entertainment, Feral Interactive (Mac), Fe', 'big-life-is-strange-ep1.jpg', '', 'life-is-strange-ep1.jpg', '0', NULL, NULL, NULL, 0),
(28, 'Phoenix Wright: Ace Attorney Trilogy', '14', 'Torne-se Phoenix Wright e experimente a emoção da batalha lutando para salvar seus clientes inocentes no tribunal. Jogue todos os 14 episódios, cobrindo os três primeiros jogos, em uma bela coleção.', '2019-04-09', '64 bits', 'CAPCOM Co., Ltd.', 'big-phoenix-wright.jpg', '', 'phoenix-wright.jpg', '0', NULL, NULL, NULL, 0),
(29, 'The Walking Dead: Season 1', '16', 'Uma série de terror de aventura de cinco partes ambientada no mesmo universo da premiada série de quadrinhos de Robert Kirkman.', '2012-04-24', '32 ou 64 bits', 'Telltale Games', 'big-twd-season1.jpg', '', 'twd-season1.jpg', '0', NULL, NULL, NULL, 0),
(30, 'Metal Slug', '10', '\"METAL SLUG\", o primeiro título da lendária série de jogos de tiro 2D e gun da SNK, onde tudo começou, retorna às missões na plataforma de jogos!', '1996-04-18', '32 ou 64 bits', 'Dotemu', 'big-metal-slug.jpg', '', 'metal-slug.jpg', '0', NULL, 0, NULL, 0),
(31, 'Hollow Knight', 'L', 'Forje seu caminho em Hollow Knight! Uma aventura de ação épica em um vasto reino arruinado de insetos e heróis. Explore cavernas serpenteantes, lute contra criaturas malignas e alie-se a insetos bizarros num estilo clássico 2D desenhado à mão.\r\nSe você gosta de jogos clássicos, personagens fofos mas assustadores, aventuras épicas e mundos lindos e góticos, Hollow Knight estará à sua espera!', '2017-02-24', '64 bits', 'Team Cherry', 'big-hollow-knight.jpg', '', 'hollow-knight.jpg', '0', NULL, NULL, NULL, 0),
(32, 'Dragon Ball Z: Kakarot', '12', 'Viva novamente a história de Goku e outros Guerreiros Z em DRAGON BALL Z: KAKAROT! Além das batalhas épicas, sinta como é a vida no mundo de DRAGON BALL Z lutando, pescando, comendo e treinando com Goku, Gohan, Vegeta e outros. Explore novas áreas e aventuras: avance pela história e forme vínculos com outros heróis de DRAGON BALL Z.', '2020-01-16', '64 bits', 'CyberConnect2 Co., Ltd.', 'big-dbz-kakarot.jpg', '', 'dbz-kakarot.jpg', '0', NULL, NULL, NULL, 0),
(33, 'Final Fantasy VII Remake Intergrade', '14', 'Cloud Strife, ex-agente da SOLDIER, chega a Midgar, a cidade movida a energia de mako. O clássico atemporal FINAL FANTASY VII renasceu, com gráficos de última geração, um novo sistema de combate e uma aventura adicional com Yuffie Kisaragi.', '2020-03-03', '64 bits', 'Square Enix', 'big-final-fantasy7-remake.jpg', '', 'final-fantasy7-remake.jpg', '0', NULL, NULL, NULL, 0),
(34, 'Total War: Warhammer III', '12', 'O final cataclísmico da trilogia Total War: WARHAMMER chegou. Reúna seus exércitos e adentre o Reino do Caos, uma dimensão de terrores enlouquecedores, onde será decidido o destino do mundo. Você dominará os seus demônios... ou os comandará?', '2022-02-17', '64 bits', 'Creative Assembly, Feral Interactive ', 'big-totalwar-warhammer3.jpg', '', 'totalwar-warhammer3.jpg', '0', NULL, NULL, NULL, 0),
(35, 'Plants vs. Zombies™ Garden Warfare 2', '12', 'Carregue as Disparervilhas e prepare-se para o jogo de tiro mais doido e divertido do universo: Plants vs. Zombies Garden Warfare 2.', '2016-02-23', '64 bits', 'PopCap', 'big-plants-zombies-gw2.jpg', '', 'plants-zombies-gw2.jpg', '0', NULL, NULL, NULL, 1),
(36, 'Bully: Scholarship Edition', '14', 'Bully: Scholarship Edition se passa em uma escola fictícia em New England, Bullworth Academy, e conta a história de Jimmy Hopkins, um adolescente malandro de 15 anos que passa pela hilaridade e pela estranheza da adolescência. Acabe com os esportistas jogando queimada, sacaneie as patricinhas, salve os nerds, beije a garota e, por fim, navegue pela hierarquia social da pior escola das redondezas.', '2006-10-17', '32 ou 64 bits', 'Rockstar Games', 'big-bully.jpg', '', 'bully.jpg', '0', NULL, NULL, NULL, 0),
(37, 'House Party', '16', 'Este histérico, rico em histórias e jogo de aventura 3D é tudo sobre escolha do jogador e festa do jeito que você quer. O sistema exclusivo de IA e scripting do House Party permite que o jogo modele e molde seu conteúdo em torno de suas escolhas. Você verá algo novo ou diferente cada vez que jogar.\r\nAté hoje, há centenas de histórias diferentes, missões secundárias e narrativas, e milhares de histórias ramificando e elementos dinâmicos. O conteúdo está sendo adicionado regularmente, então ele continua ficando cada vez maior e melhor!', '2022-07-15', '32 ou 64 bits', 'Eek! Games, LLC', 'big-house-party.jpg', '', 'house-party.jpg', '0', NULL, NULL, NULL, 0),
(38, 'The Binding of Isaac: Rebirth', '14', 'The Binding of Isaac: Rebirth é um atirador de RPG de ação gerado aleatoriamente com elementos pesados semelhantes a Rogue. Seguindo Isaac em sua jornada, os jogadores encontrarão tesouros bizarros que mudam a forma de Isaac dando-lhe habilidades super humanas e permitindo que ele lute contra as massas de criaturas misteriosas, descubra segredos e lute seu caminho para a segurança...', '2014-11-04', '32 ou 64 bits', 'Nicalis, Inc, Edmund McMillen', '', '', 'the-binding-of-isaac-rebirth.jpg', '0', NULL, NULL, NULL, 0),
(39, 'Grand Theft Auto V', '+18', 'Grand Theft Auto V para PC oferece aos jogadores a opção de explorar o gigantesco e premiado mundo de Los Santos e Blaine County em resoluções de até 4K e além, assim como a chance de experimentar o jogo rodando a 60 FPS (quadros por segundo).', '2013-09-17', '64 bits', 'Rockstar Games', '', '', 'gta5.jpg', '0', NULL, NULL, NULL, 0),
(40, 'Alien: Isolation', '+18', 'Descubra o verdadeiro significado do medo em Alien: Isolation, um horror de sobrevivência ambientado em uma atmosfera de medo constante e perigo mortal.', '2014-10-07', '32 ou 64 bits', 'Creative Assembly, Feral Interactive (Mac), Feral', '', '', 'alien-isolation.jpg', '0', NULL, NULL, NULL, 0),
(41, 'The Elder Scrolls V: Skyrim Special Edition', '+18', 'Vencedora de mais de 200 Prêmios de Jogos do Ano, a Skyrim Special Edition dá vida à fantasia épica em detalhes impressionantes. A Edição Especial inclui o jogo aclamado pela crítica e complementos com recursos totalmente novos, como arte e efeitos remasterizados, raios de deus volumoscos, profundidade dinâmica de campo, reflexões de espaço de tela e muito mais.', '2011-11-11', '64 bits', 'Bethesda Game Studios', '', '', 'skyrim.jpg', '0', NULL, NULL, NULL, 0),
(42, 'Fallout 4', '+18', 'Bethesda Game Studios, os premiados criadores de Fallout 3 e The Elder Scrolls V: Skyrim, dão as boas-vindas ao mundo de Fallout 4 – seu jogo mais ambicioso de todos os tempos, e a próxima geração de jogos de mundo aberto.', '2015-11-10', '64 bits', 'Bethesda Game Studios', '', '', 'fallout4.jpg', '0', NULL, NULL, NULL, 0),
(43, 'Cyberpunk 2077', '+18', 'Cyberpunk 2077 é um RPG de ação e aventura em mundo aberto que se passa em Night City, uma megalópole perigosa onde todos são obcecados por poder, glamour e alterações corporais.', '2020-12-10', '64 bits', 'CD PROJEKT RED', '', '', 'cyberpunk2077.jpg', '0', NULL, NULL, NULL, 0),
(44, 'Genshin Impact', '10', 'Você irá explorar um mundo de fantasia chamado \"Teyvat\" no jogo, onde você pode viajar por sete nações, encontrar companheiros com diferentes personalidades e habilidades únicas, lutar contra inimigos e embarcar na estrada para reencontrar seu parente de sangue.', '2020-09-28', '64 bits', 'COGNOSPHERE PTE. LTD.', '', '', 'genshin-impact.jpg', '0', NULL, NULL, NULL, 0),
(45, 'Dying Light 2 Stay Human', '+18', 'O vírus venceu. A civilização voltou à Idade das Trevas. A Cidade, um dos últimos locais dos humanos, está prestes a entrar em colapso. Use sua agilidade e habilidades de combate para sobreviver e transformar o mundo. Suas escolhas fazem a diferença.', '2022-02-04', '64 bits', 'Techland', '', '', 'dying-light2.jpg', '0', NULL, NULL, NULL, 0),
(46, 'Apex Legends', '14', 'Domine com personalidade em Apex Legends, um jogo de tiro grátis* no qual personagens lendários com habilidades poderosas se unem para lutar por fama e fortuna na Fronteira.\nDomine um elenco diverso de Lendas, jogabilidade tática de equipe e inovações ousadas que elevam o nível da experiência battle royale, tudo dentro de um mundo inóspito onde vale tudo. Esta é a próxima evolução do jogo de tiro de heróis e heroínas.', '2019-02-04', '64 bits', 'Respawn Entertainment', '', '', 'apex-legends.jpg', '0', NULL, NULL, NULL, 0),
(47, 'Assassin*s Creed Valhalla', '+18', 'Torne-se um viking lendário em busca de glória. Ataque seus inimigos, amplie seu assentamento e consolide seu poder político.', '2020-11-10', '64 bits', 'Ubisoft Montreal', '', '', 'ac-valhalla.jpg', '0', NULL, NULL, NULL, 0),
(48, 'The Sims 4', '12', 'Curta o poder de criar e controlar pessoas num mundo virtual onde não há regras. Seja poderoso e livre, divirta-se e jogue com a vida!', '2014-09-02', '64 bits', 'Maxis', '', '', 'the-sims4.jpg', '0', NULL, NULL, NULL, 0),
(49, 'Far Cry 6', '+18', 'Entregue-se ao mundo sombrio de uma guerrilha revolucionária para libertar um país de seus ditadores opressivos.', '2021-10-07', '64 bits', 'Ubisoft Toronto', '', '', 'farcry6.jpg', '0', NULL, NULL, NULL, 0),
(50, 'Elden Ring', '16', 'O NOVO RPG DE AÇÃO E FANTASIA. Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.', '2022-02-25', '64 bits', 'FromSoftware Inc.', '', '', 'elden-ring.jpg', '0', NULL, NULL, NULL, 0),
(51, 'Call of Duty: Warzone', '+18', 'Em CoD Warzone, seu objetivo é seu o último sobrevivente em meio a uma multidão de competidores. Para quem está tendo dificuldades em superar os adversários, separamos algumas dicas importantes que podem te ajudar a vencer o Warzone (incluindo batalhas no Gulag).', '2020-03-10', '64 bits', 'Raven Software, Infinity Ward', '', '', 'cod-warzone.jpg', '0', NULL, NULL, NULL, 0),
(52, 'Call of Duty: Modern Warfare II', '+18', 'O Call of Duty®: Modern Warfare® II coloca os jogadores dentro de um conflito global sem precedentes que conta com o retorno dos Operadores icônicos da Força-Tarefa 141.', '2022-10-28', '64 bits', 'Infinity Ward, Raven Software, Beenox, Treyarch, H', '', '', 'cod-mw2.jpg', '0', NULL, NULL, NULL, 0),
(53, 'League of Legends', '12', 'League of Legends é um jogo de estratégia em que duas equipes de cinco poderosos Campeões se enfrentam para destruir a base uma da outra. Escolha entre mais de 140 Campeões para realizar jogadas épicas, assegurar abates e destruir torres conforme você luta até a vitória.', '2009-10-27', '32 ou 64 bits', 'Riot Games', '', '', 'lol.jpg', '0', NULL, NULL, NULL, 0),
(54, 'God of War', '+18', 'Com a vingança contra os deuses do Olimpo em um passado distante, Kratos agora vive como um mortal no reino dos deuses e monstros nórdicos. É nesse mundo duro e implacável que ele deve lutar para sobreviver... e ensinar seu filho a fazer o mesmo.', '2018-04-20', '64 bits', ' Santa Monica Studio', '', '', 'gow.jpg', '0', NULL, NULL, NULL, 0),
(55, 'Hitman 2', '18', 'Viaje ao redor do mundo e rastreie os seus alvos nos locais abertos, e exóticos, de HITMAN™ 2. Das ruas ensolaradas, às sombrias florestas tropicais, nenhum lugar está a salvo do assassino mais criativo do mundo, o Agente 47, em sua última história de suspense e espionagem.', '2018-11-13', '64 bits', 'IO Interactive A/S', '', '', 'hitman2.jpg', '0', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitos_minimos`
--

DROP TABLE IF EXISTS `requisitos_minimos`;
CREATE TABLE IF NOT EXISTS `requisitos_minimos` (
  `id_M` int NOT NULL AUTO_INCREMENT,
  `processador` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_video` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `espaco_armazenamento` decimal(15,0) NOT NULL,
  `memoria_ram` decimal(15,0) NOT NULL,
  PRIMARY KEY (`id_M`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitos_recomendados`
--

DROP TABLE IF EXISTS `requisitos_recomendados`;
CREATE TABLE IF NOT EXISTS `requisitos_recomendados` (
  `id_R` int NOT NULL AUTO_INCREMENT,
  `processador` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_video` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `espaco_armazenamento` decimal(15,0) NOT NULL,
  `memoria_ram` decimal(15,0) NOT NULL,
  PRIMARY KEY (`id_R`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema_operacional`
--

DROP TABLE IF EXISTS `sistema_operacional`;
CREATE TABLE IF NOT EXISTS `sistema_operacional` (
  `id_sistema` int NOT NULL AUTO_INCREMENT,
  `NomeSistema` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `VersaoSistema` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direct_x` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sistema_operacional`
--

INSERT INTO `sistema_operacional` (`id_sistema`, `NomeSistema`, `VersaoSistema`, `direct_x`) VALUES
(1, 'Windows XP', '32 bits', ''),
(2, 'Windows XP', '64 bits', ''),
(3, 'Windows VS', '32 bits', ''),
(4, 'Windows VS', '64 bits', ''),
(5, 'Windows 7', '32 bits', ''),
(6, 'Windows 7', '64 bits', ''),
(7, 'Windows 8', '32 bits', ''),
(8, 'Windows 8', '64 bits', ''),
(9, 'Windows 10', '32 bits', ''),
(10, 'Windows 10', '64 bits', ''),
(11, 'Windows 11', '64 bits', ''),
(12, 'Ubuntu 14.04 LTS', '64 bits', ''),
(13, 'Ubuntu 16.04 LTS', '64 bits', ''),
(14, 'Ubuntu 18.04 LTS', '64 bits', ''),
(15, 'Ubuntu 20.04 LTS', '64 bits', ''),
(16, 'Ubuntu 22.04 LTS', '64 bits', ''),
(17, 'MacOS 10.13.6', '64 bits', ''),
(18, 'MacOS 10.14.6', '64 bits', ''),
(19, 'MacOS 10.15.7', '64 bits', ''),
(20, 'MacOS 11.7', '64 bits', ''),
(21, 'MacOS 12.6', '64 bits', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_usuario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipos` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_usuario`, `email`, `tipos`, `data_nascimento`, `empresa`, `site_empresa`, `senha`, `icone`) VALUES
(1, 'João da Silva', '', '', '', '1969-11-25', '', '', 'fefgh', ''),
(2, 'Gabriel', '', '', '', '2002-02-23', '', '', 'gaga123', ''),
(3, 'Fernanda', '', '', '', '2005-06-09', '', '', 'fefe1367', ''),
(4, 'Gustavo', '', '', '', '1999-12-05', '', '', 'gusjava', ''),
(5, 'Alexandre', '', '', '', '1999-03-10', '', '', 'axe2799', ''),
(6, 'Paulo', '', '', '', '2002-11-03', '', '', 'wde4dfn', ''),
(7, 'Marcos', '', '', '', '2005-05-25', '', '', 'uvhfcvb', ''),
(8, 'Patrick', '', '', '', '1995-07-15', '', '', 'dgdhcv', ''),
(9, 'Júlio', '', '', '', '2001-03-06', '', '', 'kkd23vn', ''),
(10, 'Adriana', '', '', '', '1990-09-30', '', '', 'efdfg', ''),
(11, 'João', 'JJ_JAVA', 'Jojo@gmail.com', 'Dev', '1995-07-12', 'CyberSpace', 'www.CyberSpace.com', 'jojo123', ''),
(12, '$name', '$user', '$email', 'User', '1995-07-12', 'CyberSpace', 'www.CyberSpace.com', '$senhaF', ''),
(13, 'ADMIN', 'admin', 'technology.ldr@gmail.com', 'Admin', '1995-07-11', 'LDR TECHNOLOGY', '', '$2y$10$2dDOjvcZxMrpB8BIgpVoLOJP/A7wgkCC05q2InqpHqY9uS1cmByRW', ''),
(14, '$name', '$user', '$email', 'Dev', '1986-08-13', '$enterprise', '$site_dev', '$senhaF', ''),
(15, '', '', '', 'User', '2000-01-02', NULL, NULL, '$2y$10$WF3jIYJ06C91H7hyc8YOFelVfPkFp1AXdm9v3xGswEmhcPWpD3mOK', ''),
(16, 'vitor', 'vrds022', 'vrdsmasked022@gmail.com', 'User', '2002-12-30', NULL, NULL, '$2y$10$9YZEpWinQ9.ocPr7dwWLKO3aOjQx9ODvdJnvmT.wMHdxDVpZWmbRu', '');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `id_jogos` FOREIGN KEY (`id_J`) REFERENCES `jogos` (`id_jogos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_U`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `jogos_ibfk_1` FOREIGN KEY (`id_catego`) REFERENCES `categorias` (`id_catego`),
  ADD CONSTRAINT `jogos_ibfk_2` FOREIGN KEY (`id_catego3`) REFERENCES `categorias` (`id_catego`),
  ADD CONSTRAINT `jogos_ibfk_3` FOREIGN KEY (`id_catego2`) REFERENCES `categorias` (`id_catego`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
