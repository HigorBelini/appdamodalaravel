-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2018 às 03:55
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdamoda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `socialname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasyname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `shopfacade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double(15,12) NOT NULL,
  `longitude` double(15,12) NOT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `created_at`, `updated_at`, `socialname`, `fantasyname`, `number`, `shopfacade`, `logo`, `latitude`, `longitude`, `industry`, `descriptive`, `keywords`, `date`, `user_id`, `deleted_at`) VALUES
(1, '2018-10-14 16:20:25', '2018-10-14 16:20:25', 'Pintado D\'ouro', 'Pintado D\'ouro', 3360, 'image/shopfacades/img_6168.jpeg', 'image/logos/img_9102.jpeg', -20.728562400000, -46.612991700000, 'Restaurante', 'O Pintado D´Ouro é tradição em Passos! Só aqui você saboreia os mais requintados pratos num ambiente aconchegante, agradável e familiar, proporcionando o mais alto padrão de qualidade e conforto.', 'Restaurantes, Chopps, Refrigerantes, Peixarias, Almoços, Jantares', '2018-10-14', 1, NULL),
(2, '2018-10-14 16:23:51', '2018-10-14 22:38:52', 'Confecções Farrelli', 'Farrelli', 3300, 'image/shopfacades/img_3873.jpeg', 'image/logos/img_2226.jpeg', -20.728610700000, -46.610591500000, 'Confecções', 'Loja na Avenida da Moda', 'Confecções em geral', '2018-10-14', 3, NULL),
(3, '2018-10-14 16:34:14', '2018-10-15 02:18:14', 'Luma Confecções Atacado e Varejo', 'Luma Confecções', 2745, 'image/shopfacades/img_1661.jpeg', 'image/logos/img_1518.jpeg', -20.723826000000, -46.614919100000, 'Confecções Atacado e Varejo', 'Loja na Avenida da Moda', 'Confecções, Atacados, Varejos', '2018-10-14', 3, NULL),
(4, '2018-10-14 16:46:37', '2018-10-14 16:46:37', 'Pão de queijo da Vó Lia', 'Pão de queijo da Vó Lia', 3315, 'image/shopfacades/img_3027.jpeg', 'image/logos/img_4936.jpeg', -20.728012900000, -46.610761400000, 'Panificadora e Lanchonete', 'Loja em Avenida da Moda', 'Pão de queijo, Pão Francês, Lanches', '2018-10-14', 1, NULL),
(5, '2018-10-14 16:54:42', '2018-10-14 16:55:20', 'Via Ternos', 'Via Ternos', 3107, 'image/shopfacades/img_3052.jpeg', 'image/logos/img_5377.jpeg', -20.726065100000, -46.611775200000, 'Ternos para festas, casamentos e eventos', 'Loja de roupas masculina. Tudo para homens de bom gosto. Desde 2002 fundada na cidade de Passos MG e Franca SP', 'Casamentos, Eventos, Reunião', '2018-10-14', 1, NULL),
(6, '2018-10-14 17:03:41', '2018-10-15 02:02:36', 'Móveis Melinho', 'Móveis Melinho', 3805, 'image/shopfacades/img_9270.jpeg', 'image/logos/img_2407.jpeg', -20.731606800000, -46.608075700000, 'Móveis Rústicos', 'A Móveis Rústicos Melinho oferece uma linha completa de móveis rústicos para decorar ambientes com aconchego, beleza e durabilidade.', 'Arcas, Cadeiras, Mesas', '2018-10-14', 3, NULL),
(7, '2018-10-14 17:27:45', '2018-10-15 02:15:00', 'Donna Gulla Pizza Pré Assada', 'Donna Gulla Pizzaria', 3864, 'image/shopfacades/img_4586.jpeg', 'image/logos/img_1628.png', -20.732433500000, -46.607461400000, 'Pizzaria', 'Loja em Passos', 'Pizza, calabresa, Mussarela', '2018-10-14', 3, NULL),
(8, '2018-10-14 17:33:34', '2018-10-14 17:33:34', 'Hinode Franquia Passos', 'Hinode Franquia Passos', 3760, 'image/shopfacades/img_2290.jpeg', 'image/logos/img_8111.png', -20.731482200000, -46.608288200000, 'Revenda de Produtos', 'Loja da Avenida da Moda', 'Revendas, Revendedor, Perfumes, Cosméticos', '2018-10-14', 1, NULL),
(9, '2018-10-14 17:44:30', '2018-10-14 17:44:30', 'Hotel Class', 'Hotel Class', 3661, 'image/shopfacades/img_5953.jpeg', 'image/logos/img_6449.jpeg', -20.730943500000, -46.608667700000, 'Hotelaria', 'Venha usufruir de nossas modernas instalações com conforto, praticidade e excelente atendimento.\r\n\r\nModerno, confortável, versátil e acessível, o Class Hotel está localizado em um ponto privilegiado de Passos, na Avenida da Moda e com fácil acesso aos principais pontos da cidade.', 'Hotel, Hospedagem, Viagem, Turismo', '2018-10-14', 1, NULL),
(10, '2018-10-14 22:07:43', '2018-10-15 02:22:28', 'Nakza Design Presentes & Decorações', 'Nakza', 3674, 'image/shopfacades/img_6336.jpeg', 'image/logos/img_7914.jpeg', -20.730579000000, -20.730579000000, 'Presentes e Decorações', 'Loja na Avenida da Moda', 'Presentes, Decorações, Decoração', '2018-10-14', 3, NULL),
(11, '2018-10-14 22:17:21', '2018-10-15 02:25:39', 'Coisas da Terra Artesanato', 'Coisas da Terra', 3674, 'image/shopfacades/img_7692.jpeg', 'image/logos/img_9860.jpeg', -20.730499800000, -46.609207500000, 'Artesanato', 'Aqui você encontra produtos para decoração jogos Americanos e Lavabo,Toalhas de Mesa,Mantas,Doces em compotas e cristalizado entre outros', 'Artesanato, Decoração, Decorações, lavabo, Toalhas de mesa, Mantas, Doces, Cristalizado', '2018-10-14', 3, NULL),
(12, '2018-10-14 22:33:56', '2018-10-14 22:33:56', 'Impressinho Indústria e Com de Confecções', 'Impressinho', 3591, 'image/shopfacades/img_5289.jpeg', 'image/logos/img_6587.png', -20.730384100000, -46.609214000000, 'Confecção e Venda Infantil e Infanto-Juvenil', 'A Impressinho é uma marca que está há mais de 18 anos no mercado confeccionista, vestindo de 0 a 12 anos, masculino e feminino, buscando qualidade, conforto e beleza. Com sede localizada em Passos - MG e representantes em todo o Brasil.', 'Confecção, Confecções, Infantil, Jovem, Teens', '2018-10-14', 3, NULL),
(13, '2018-10-14 22:53:00', '2018-10-14 22:53:00', 'Solar Prime', 'Solar Prime', 3622, 'image/shopfacades/img_2822.jpeg', 'image/logos/img_5588.png', -20.729996600000, -46.609664100000, 'Serviços de Energia Solar', 'A Solarprime nasceu de uma necessidade e, principalmente, de um sonho. Foi criada por empreendedores que viram a oportunidade de levar uma solução sustentável aliada a ideia de oferecer a cada consumidor a possibilidade de NUNCA MAIS PAGAR CONTA DE ENERGIA ELÉTRICA, gerando a própria energia em sua casa ou empresa. Em parceria com empresas de sucesso, premiadas por sua preocupação com o desenvolvimento sustentável, a atuação da Solarprime está focada na construção de pequenas, médias e grandes usinas geradoras de Energia Solar particulares.', 'Energia Solar', '2018-10-14', 3, NULL),
(14, '2018-10-14 23:07:37', '2018-10-14 23:07:37', 'Colégio Status', 'Colégio Status', 3584, 'image/shopfacades/img_4659.jpeg', 'image/logos/img_8478.png', -20.729754400000, -46.609884900000, 'Educação', 'Mais que educação, preparação para a vida.', 'Escolas, Ensino Médio, Ensino Fundamental', '2018-10-14', 3, NULL),
(15, '2018-10-14 23:22:25', '2018-10-15 02:06:50', 'Netspeed Serviços de Internet', 'NetSpeed', 3510, 'image/shopfacades/img_8461.jpeg', 'image/logos/img_7239.jpeg', -20.729117200000, -46.610463400000, 'Serviços de Internet', 'Com o compromisso de oferecer o melhor serviço e atendimento, a NetSpeed foi criada, em Janeiro de 1999. E hoje é uma empresa consolidada no campo da tecnologia da informação do Sudoeste Mineiro. Através de constantes mudanças na modernização de seus equipamentos, serviços prestados e treinamento de sua equipe, garante a mais alta e qualificada performance tecnológica em seus atendimentos.', 'Internet, Fibra-óptica, Cabeamento, TV, Televisão', '2018-10-14', 3, NULL),
(16, '2018-10-14 23:39:07', '2018-10-14 23:39:07', 'Formato Z', 'Formato Z', 3392, 'image/shopfacades/img_4843.jpeg', 'image/logos/img_6632.jpeg', -20.728935100000, -46.610544100000, 'Moda Feminina', 'Loja na Avenida da Moda', 'Vestidos, Calças, Blusinhas', '2018-10-14', 3, NULL),
(17, '2018-10-14 23:49:40', '2018-10-14 23:49:40', 'Posto Muarama', 'Posto Muarama', 3201, 'image/shopfacades/img_2774.jpeg', 'image/logos/img_2256.png', -20.727236200000, -46.611232400000, 'Posto de Combustível', 'Posto de Combustível na Avenida da Moda', 'Álcool, Gasolina, Etanol, Diesel, AMPM, Lava-rápido', '2018-10-14', 3, NULL),
(18, '2018-10-15 00:01:10', '2018-10-15 00:01:10', 'O Boticário', 'O Boticário', 3316, 'image/shopfacades/img_8692.jpeg', 'image/logos/img_7992.jpeg', -20.726201500000, -46.611783700000, 'Perfumaria e Produtos para o Bem-Estar', 'No dia 22 de março de 2010, nasce o Grupo Boticário, uma das maiores marcas de beleza do Brasil. Sob o comando de Arthur Grynbaum, o grupo reúne, além de O Boticário, as marcas Eudora, quem disse, berenice? e The Beauty Box. O início de uma longa história que ainda vai espalhar muito mais beleza por aí!', 'Perfumes, Cremes Corporais', '2018-10-14', 3, NULL),
(19, '2018-10-15 00:11:38', '2018-10-16 05:03:25', 'PHD Comércio de Confecções', 'PHD Store', 3046, 'image/shopfacades/img_1749.jpeg', 'image/logos/img_7794.jpeg', -20.725689500000, -46.612030800000, 'Roupas Femininas e Acessórios', 'Phd Store é a fast fashion de roupas femininas e acessórios que atende você com o que há de melhor e mais atual num preço justo. Em Ribeirão Preto e Passos', 'Vestidos, Calças, Blusinhas', '2018-10-14', 3, NULL),
(20, '2018-10-15 00:44:30', '2018-10-15 00:44:30', 'Maria Maria', 'Maria Maria', 3044, 'image/shopfacades/img_8635.jpeg', 'image/logos/img_7183.jpeg', -20.725596600000, -46.612084000000, 'Moda Feminina', 'Loja na Avenida da Moda', 'Vestidos, Calças, Blusinhas', '2018-10-14', 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_09_12_193416_create_companies_table', 1),
(9, '2018_09_12_194835_create_visits_table', 1),
(10, '2018_09_14_170218_create_promotions_table', 1),
(11, '2018_09_14_171444_create_users_promotions_table', 1),
(12, '2018_09_18_181507_add_image_table_promotion', 1),
(13, '2018_09_26_192304_add_image_table_user', 1),
(14, '2018_10_16_235738_add_logocompany_to_table_promotions', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('002255c03d2cae2c24c213330f83daa275911876354a856ed6387a48e71898d3a949e556974ef616', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-16 01:37:45', '2018-10-16 01:37:45', '2019-10-15 22:37:45'),
('00b22a56c76aa4b9a2083fcda7a2e37a4aa9cb65fef4a176c4b5abaf409c5ae1fcda2663aa2649aa', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 04:00:27', '2018-10-15 04:00:27', '2019-10-15 01:00:27'),
('0119b332e026a6e7020eaae25e9dc41c753ae2bce873da42981673af16e2975c77c42b7582c411a8', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-14 22:03:52', '2018-10-14 22:03:52', '2019-10-14 19:03:52'),
('0142765e8171af2b1db077572c0c4ac121b0fc47e33640ee940262ac99cfa2f9aa69e86b64f0a372', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:48:44', '2018-10-15 15:48:44', '2019-10-15 12:48:44'),
('035cb6752eaf6cebd9621786f19a9094f5de70361a572391fd60be5bc1d84733a55bc79023818645', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:33:52', '2018-10-17 21:33:52', '2019-10-17 18:33:52'),
('037a01c6e797f8429d00eb227b7189b4a6e6c86c29782a5eafaa907960d1ecef47518cc444ce46c5', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-19 02:04:31', '2018-10-19 02:04:31', '2019-10-18 23:04:31'),
('06c52f5fd2a867dbd445a924e735fc4346f706eed78fcf7302f679c2fa8cb63642a98cf295c99c24', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:27:27', '2018-10-15 21:27:27', '2019-10-15 18:27:27'),
('0a856ab969df9a618e37455aede647031dbe20b568d966781b153a17b3de75900b97af7de0ad7891', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:57:10', '2018-10-15 07:57:10', '2019-10-15 04:57:10'),
('0c81d5873f9fbe5f1c387e963e4931c8ec18fc3ba370583a7ec37b2117a9d7f7387f38d42fffa6b0', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:06:38', '2018-10-15 03:06:38', '2019-10-15 00:06:38'),
('0d6147fd866f7cddf6ffb448c49f715c0315d47f5d3a3c6898ffcc59a39b3295c5f4760c4ebabd24', 6, 1, 'wesley@ataio.com.br', '[]', 0, '2018-10-16 02:11:47', '2018-10-16 02:11:47', '2019-10-15 23:11:47'),
('0db5cf4d4b06deb96beb101dfa57edcc7641cca719baa500c4ca2f071be598c73f3803aaab72c7c4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 04:58:57', '2018-10-16 04:58:57', '2019-10-16 01:58:57'),
('0e70c711521f77e77a5438f5cddf08556be4264a6bc3a8692f6bca6223ffea5cca4a38e8b4b43dd0', 4, 1, 'maria@mail.com', '[]', 0, '2018-10-15 03:29:46', '2018-10-15 03:29:46', '2019-10-15 00:29:46'),
('11b59aa12f98d9209c9ca6e9a45be47fc624b8b5834f9a193d84ba1437cacbf1a2ad1e4ecfb90182', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 04:41:48', '2018-10-15 04:41:48', '2019-10-15 01:41:48'),
('1312e95e4db245e39306df6a330771df167e69a01027bb85e1a54a44de3be5531675319b71e0ec46', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:19:05', '2018-10-15 03:19:05', '2019-10-15 00:19:05'),
('13f6f4cd05f9324ad1b308b9d1ca6a3c9e87fc1b6744587c305371a2db6de623c6c89b819be603d0', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:53:29', '2018-10-15 07:53:29', '2019-10-15 04:53:29'),
('162786c721508fd0330d62573a985e012ff29a04a197acc67028824cfeb9d200e44459b7ea40be54', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 17:36:25', '2018-10-17 17:36:25', '2019-10-17 14:36:25'),
('19cbf614fe3ed2709543c5769fc5c6b07794904fd60fb3a3ec1fbb798c81f597306b3cdee0add737', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:23:47', '2018-10-17 21:23:47', '2019-10-17 18:23:47'),
('1d4578b6679a38c970add86fc777033657685b1be87047f6d1ec7d2c0047d87f16cb82070998c196', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:54:32', '2018-10-18 06:54:32', '2019-10-18 03:54:32'),
('1e42b8ce018c457121164ffd357e3b00cff7d16bbe39f68f281a7de0df32d4e75d4622c5bd1948bd', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:29:15', '2018-10-15 15:29:15', '2019-10-15 12:29:15'),
('1f5a8556d6c63fd69fc029fae2828f0147be31f0679a8b29a79a17afc1d5fbabb8a408c60fa04fde', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:34:09', '2018-10-15 15:34:09', '2019-10-15 12:34:09'),
('1fdfe37cdf4bfd3e5ac211d50d00bad43d06b2cfa57e0c9203d15c42ee91b161f295ed25340b51c8', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-15 07:55:05', '2018-10-15 07:55:05', '2019-10-15 04:55:05'),
('20645f5eded9f4965cba9853bad0b03adc1fca819391a3203fb57a32721ae48f783a10ab26cfe113', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:13:39', '2018-10-17 21:13:39', '2019-10-17 18:13:39'),
('2279ef2ddffeb17de7ee636d7dac04f8748595c9e337a9fec9b927b5a37c22d7793962bc7db826e3', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:37:29', '2018-10-15 15:37:29', '2019-10-15 12:37:29'),
('22d369904dc9669436fa16ce93b8e74c1314fc84455d94155c61839bf011b15d0a0144fa52b73597', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:17:03', '2018-10-15 03:17:03', '2019-10-15 00:17:03'),
('236cdd4f330e109fe034e200539e54c90e636f2801dc2afb46eedb8dd773c737b1e22bc75ebd04f6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:01:07', '2018-10-15 03:01:07', '2019-10-15 00:01:07'),
('2658f4061bb05abee29d9d80219eff9c5f9cd5a316e23c73d7f6e390574ced2da91d029c91d06b30', 10, 1, 'henriquevcintra@hotmail.com', '[]', 0, '2018-10-18 01:52:16', '2018-10-18 01:52:16', '2019-10-17 22:52:16'),
('267e5b20682a87f290ebf067e1b8d6e98450f2a0f35d22da1e3806c2396c09dd806aa8f02aed2e88', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:14:13', '2018-10-15 03:14:13', '2019-10-15 00:14:13'),
('26b81ab11e22e6cafa10ea338edebeecc892ce0e8bbde709efbc4af3f62ffe51a17896445e8ed416', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:58:17', '2018-10-15 03:58:17', '2019-10-15 00:58:17'),
('2a8eba51a1f55d6ab80f9db683321a6be2262eb4b57b673006840fdce05eda98e4551d639bd4e689', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:07:22', '2018-10-15 03:07:22', '2019-10-15 00:07:22'),
('2b32fbd833911662480c6c05206740ab5787a655f77e1c948d7ec7c8af5d18607c7cd882de68c786', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 04:00:36', '2018-10-15 04:00:36', '2019-10-15 01:00:36'),
('2b625d70770d6832e6ee3903499a872bd3f62d15a971866e2ef1c02cb3a856b38649788eb3cb5edd', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:56', '2018-10-15 15:33:56', '2019-10-15 12:33:56'),
('2d0c5ac43053f4c586d82e969d05a7a1122b4acb0ecbd6cf4463b5d8913dd3e4449b14363cd16246', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:31:48', '2018-10-15 15:31:48', '2019-10-15 12:31:48'),
('2eea706165766a0a64c3203a50117f08fe414ffc682c22b31ed1f46ff4b23e8507f23b0fad7321a6', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:51:48', '2018-10-18 06:51:48', '2019-10-18 03:51:48'),
('2f36e35c6b68ce7c459ab1d51510bf11984b46d66bbae923dd39c57e9e8657f06e5f8e54018b62e8', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:51:26', '2018-10-15 07:51:26', '2019-10-15 04:51:26'),
('3180b0397932d0a2538ceec33c26fdee2aff8b8d15b0fc62633fd4c468653c3a80b4dedaa010f38c', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-19 02:01:59', '2018-10-19 02:01:59', '2019-10-18 23:01:59'),
('326dc51f1fe2e0dcd3d85b3f737b826de45215b318ad161450e8c19fb8ae7480dd17e6a7f3f9c3ed', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:28:46', '2018-10-15 15:28:46', '2019-10-15 12:28:46'),
('34e98a645f0f539265c5df388c8596873f04b1fb380e4116c9376678942dd142d3a5402d0496a1e3', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:17', '2018-10-15 15:33:17', '2019-10-15 12:33:17'),
('3631e06c13def81b8f60c0be622f989aaa9c8f76c06c41745144ffe36f9623275ea58f92e2a037f6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:28:39', '2018-10-15 15:28:39', '2019-10-15 12:28:39'),
('384cc63280ee78c103c81d306e2478b8b7963e864b00d4bd5cefcc038ea500253580c30716c057ef', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:44:43', '2018-10-15 07:44:43', '2019-10-15 04:44:43'),
('386ba3c4d0104fc7392c40b07508fa77b457dca9ea2cc19e45025882422993c3824c1331853b7115', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:16:31', '2018-10-15 03:16:31', '2019-10-15 00:16:31'),
('3929a4932d75da007741bb7972a0445d7210f0b5877d7cfe09fd9eb678ad3f95e22c8cd458fc4750', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:04:13', '2018-10-15 03:04:13', '2019-10-15 00:04:13'),
('397ddd6ac6c282567d1a9f8fce7dc309629a6d4a127a0b462f3dce24d8303b3447192e129f5dc234', 6, 1, 'wesley@ataio.com.br', '[]', 0, '2018-10-16 02:05:51', '2018-10-16 02:05:51', '2019-10-15 23:05:51'),
('3986d0418b77e71d4402a63d88e5768985732a5bc2d65b51ede2ea09652a8a34693a658e27d0b2d6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:31:42', '2018-10-15 15:31:42', '2019-10-15 12:31:42'),
('3bf9bb11380e7cc0bd03fa40db84ac9e3290d20626a7dc90f39cda19d48165fef119fd5891764999', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:57:13', '2018-10-15 07:57:13', '2019-10-15 04:57:13'),
('3c6715c48b328fbcbc1273bb3881690db7fe857d2d5ddc3c3c05753cf01a2ecf0b77a38da097e36a', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:04:59', '2018-10-15 20:04:59', '2019-10-15 17:04:59'),
('42965a443420f13b90cabb417386063c18717ff0bdbdf936ca01eeecbcbc4099a8dd36aaeedbbe5c', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 06:50:08', '2018-10-18 06:50:08', '2019-10-18 03:50:08'),
('4438d246428ddfa6ff87cbc289721a9367d36c9d37a56e0a2d0ebfa559d4d386aa11dacc37bf4edd', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:31:41', '2018-10-15 15:31:41', '2019-10-15 12:31:41'),
('4444f2f7fac2496d2067d647e8c913b0c9cacca43a89e4fab2bfa3c5c3ef52adc04871f6e8b6a554', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:04:34', '2018-10-15 21:04:34', '2019-10-15 18:04:34'),
('45fbe00caa95ce66efa7e9c4ce6c1bfe2837926eebbfadadca91cbc09f235d7eb70893b381a9cbcb', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:16:52', '2018-10-15 21:16:52', '2019-10-15 18:16:52'),
('45fc6d08334c4a06c223731771d65f72725182f4ca2031befbe2a2e2b86b06cb39e6b06764ee8523', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 22:13:35', '2018-10-15 22:13:35', '2019-10-15 19:13:35'),
('46dc36cef591abedfd4b7ba6163cee36c8a975fdc887d38cd9a159a0deeb56a751b6d71423562cf6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:29:27', '2018-10-15 15:29:27', '2019-10-15 12:29:27'),
('479f257592f4bd18d817e221a00c1f172d5e745760673b80570da0e22373bc344fdc4cbf923edd12', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:13:36', '2018-10-15 03:13:36', '2019-10-15 00:13:36'),
('4b8f01ffcb782b9024b8626a6a61045c64413a282115fbba8944afb2c9c807861d46d39b154eadc4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:28', '2018-10-15 15:33:28', '2019-10-15 12:33:28'),
('4ff7f16ea533477c761b914ba9adb99a4b52e6c8522ad59ab374a262936b46c33e7bd89e54b25e84', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:14:32', '2018-10-15 03:14:32', '2019-10-15 00:14:32'),
('515ed88369bc056b610cb700bc571037d24512b542f45147bddce9c6b70205c705365567f0758093', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 04:03:10', '2018-10-18 04:03:10', '2019-10-18 01:03:10'),
('52cfa97f3553f71bebd20a2ad6978eaa6d4e019b4e52d5245aa39ad1e08bd69ff5a128d17b91d9d9', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 04:03:34', '2018-10-18 04:03:34', '2019-10-18 01:03:34'),
('53c5cec320c2c1d4ecffb19934e8b9d9f79766de25be5de8eda600b2bb6684e08312dfa235f3c26c', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-17 19:28:21', '2018-10-17 19:28:21', '2019-10-17 16:28:21'),
('544b7e9d2a02904d180234fc82558e12a8a8ddd86a2aac76d01d5c43a3a4a505bf258055b253ee5e', 5, 1, 'joao@mail.com', '[]', 0, '2018-10-15 03:32:03', '2018-10-15 03:32:03', '2019-10-15 00:32:03'),
('56be0315e6147841054e7c520533051cbe4d7847fd19fdbbd4aa32956391c1cda68e67c90b6b974b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:54:03', '2018-10-15 03:54:03', '2019-10-15 00:54:03'),
('5700d51b13cbe9968aef297673a79b2753809568176e262b92b408557f3772d63643f65a85fe0d65', 10, 1, 'henriquevcintra@hotmail.com', '[]', 0, '2018-10-18 01:52:49', '2018-10-18 01:52:49', '2019-10-17 22:52:49'),
('59511d146fbcf52df8e365ef17240cd34abc699de29703ca31777a0011a55212b6c8d77e0b9a9f8d', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-15 04:20:45', '2018-10-15 04:20:45', '2019-10-15 01:20:45'),
('5de9f1758e056c1470cdb754bceaf36a574752e8750db4900d3f51d7c315bde82c44b2c0255f39f7', 4, 1, 'maria@mail.com', '[]', 0, '2018-10-15 03:27:52', '2018-10-15 03:27:52', '2019-10-15 00:27:52'),
('5df8423c70739fac0a6e53e392a422364c33aefaa37b9b87ff41c7509163ccedcbe002dd1042a8a4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:36:18', '2018-10-16 01:36:18', '2019-10-15 22:36:18'),
('62c04bc546f6d1e8d295f74e7d337a9a8c5a5364cf5500bccd298e0c773455d6d20bff1bcbd07439', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:14:14', '2018-10-15 21:14:14', '2019-10-15 18:14:14'),
('638d6099c128e0791c06c2f1d9ae31e1be6dbd9b71f59ddddfe73df113c4b7e49ab40847ceb32ea3', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:03:28', '2018-10-15 03:03:28', '2019-10-15 00:03:28'),
('64d5122353750ed1a15eadecd97cc65b3ce61b0aaeb1451622371034ca844b879edc6a40d226f962', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:48:19', '2018-10-15 15:48:19', '2019-10-15 12:48:19'),
('67d79260063bc4d5ae6077d1e32d60be5ec5cf7e5cb03729565d764969abb421d1f21d627ee7e5ae', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 01:34:26', '2018-10-17 01:34:26', '2019-10-16 22:34:26'),
('67eb5513728aca953811acfb47fa72e74a5a2af578538a23718c14e908e9cdfcd0ce0da1d958d205', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:08:25', '2018-10-16 21:08:25', '2019-10-16 18:08:25'),
('684ea6bfe295a5aec536a318a22685ee2b9a7fc2274783c208fe0649f2db5f212e70d8d3d0adae5b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:53:35', '2018-10-15 07:53:35', '2019-10-15 04:53:35'),
('68979966fe624fdc819d7e3629e256175246cf53a92082df96ab3820dd52914689ff2adcd5b50893', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:40:54', '2018-10-16 01:40:54', '2019-10-15 22:40:54'),
('6ae665265f23066850d334d13537faa8af8b7225711e3fbe72627ef5933d57e9e13f53871e394109', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:17:08', '2018-10-15 21:17:08', '2019-10-15 18:17:08'),
('6cb6cc410f60aa846f6c6dd071afe8a6dad41112ea1ec779ac0ff2427ae15958120df780d8321c59', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:39:57', '2018-10-15 03:39:57', '2019-10-15 00:39:57'),
('6f7f1d23aee909a98db7f0d64f38ae42a75e38254b1ca11ef2d6503594d6b6255001cf5c5d4cff09', 10, 1, 'henriquevcintra@hotmail.com', '[]', 0, '2018-10-18 01:52:35', '2018-10-18 01:52:35', '2019-10-17 22:52:35'),
('705106c699319163c433e4b2fba708c5de23d90fd29ca1f927cd5927f1b6db362b52f2d4260b01af', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:34:02', '2018-10-15 15:34:02', '2019-10-15 12:34:02'),
('708f050b9e91e6862e2b2a7ba05240110cca153b4b7f88f37072d0c29703e58955940046790698aa', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:36:37', '2018-10-16 01:36:37', '2019-10-15 22:36:37'),
('7204f79000cac85ae1c483195d10d7af0735aa4881f965f2bdb52c0124c819b969e78b9adc9f63f4', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:01:27', '2018-10-16 21:01:27', '2019-10-16 18:01:27'),
('76ee8af756b23f4ec1b2bee0624fefff7c7394f323e7b656dec82973fbb968e1c4515018f514d118', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:57:21', '2018-10-15 03:57:21', '2019-10-15 00:57:21'),
('795a25b1eae35c675555b7148b8ecfdafa4160842f667e4636aff4f779127b466e51f8e526e91a9e', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:29:02', '2018-10-17 21:29:02', '2019-10-17 18:29:02'),
('79daebe614d6e4bfae9fc59b2a3a9f15a155bc25872096eb9c0fa1ff14060cf3f78ac32890f47d65', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:34:10', '2018-10-15 15:34:10', '2019-10-15 12:34:10'),
('7a3ebb69c563ca0cbf575dcf4bebb6b8880a231e091fe5205906cddffa2ec5744b31e6b0e703003b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:54:34', '2018-10-15 07:54:34', '2019-10-15 04:54:34'),
('7a8d873e86fd984646b4ef579b89a66c514d159f0e3442442e9c3e7b2fa94b841e53868e6e473fee', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:39:41', '2018-10-16 01:39:41', '2019-10-15 22:39:41'),
('7daba347fe1b58dc9b08310ff9e790d952a69bf9bcd12091bdad4bb8229974d439a5fdd34da2e074', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 19:44:06', '2018-10-15 19:44:06', '2019-10-15 16:44:06'),
('7e051da06c52330c105bf3581f41bc057fd00f134a1fe2afd3ea83fdca5fabba1c0d261fbdc2c47f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:56:57', '2018-10-16 01:56:57', '2019-10-15 22:56:57'),
('7e7dcec323f6c2b22ccbaedca200aa7b2e37b1ac12f2ebb1fad6c167cb0e5ffd389201844ea4dc72', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:01:42', '2018-10-15 21:01:42', '2019-10-15 18:01:42'),
('7e972d4b031eec4c727dd5cb52770722bbc8f649b68ef36c6d55c768bcebdf57cbbfff3ac5550a4f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 02:59:39', '2018-10-15 02:59:39', '2019-10-14 23:59:39'),
('80b026468fe0746681202dfefe73021201d57e817fad3777ea529ce619351c12e73f2176c321adff', 9, 1, 'higor@mail.com', '[]', 0, '2018-10-16 21:14:56', '2018-10-16 21:14:56', '2019-10-16 18:14:56'),
('817fe3f5ccbaefb3af85f62ed50cd8f4d987e6623ab8c926b1a74007c0007ef986faf8eec85bcb88', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:52:27', '2018-10-18 06:52:27', '2019-10-18 03:52:27'),
('81d036e02ef5f92ce69664b3597ee3f9d8581047030d7754e8a2aa9e6267b0b9300a3721c0b00bf6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:25:15', '2018-10-15 20:25:15', '2019-10-15 17:25:15'),
('823acfc3e01c29bf83750aee1fd55d753bff65470d60335eaecd3e74092e3801679fa1a8f46be202', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:25:46', '2018-10-15 20:25:46', '2019-10-15 17:25:46'),
('82d4e79b8de6d7443c4686e2450b701a0479bc609b4d52a1fec810ec8cb48ff55c909c1dd9c27299', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:12:08', '2018-10-15 21:12:08', '2019-10-15 18:12:08'),
('8910845dde9656b870315bc5b716d3ea26ac23db47940a2066d0ea0a65d6d21c14b3fbf290981cba', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:23:38', '2018-10-17 21:23:38', '2019-10-17 18:23:38'),
('8cd9db8f750713d0286ab41e4c8c38d7e2f74fa41bf94837055eef5e2626c3fe4e2bd4c592679645', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-15 07:55:00', '2018-10-15 07:55:00', '2019-10-15 04:55:00'),
('8e614f0ae1cafd6b05df921fd8f647ba08cfbfba721fffe79593cd6c746094ab93eb4684c55edea5', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:05:38', '2018-10-16 21:05:38', '2019-10-16 18:05:38'),
('90f58c3eac6f9d121214220fbb6931ada268a905a8441ed9ed54f35321113c999417f63dd28037ab', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 05:10:38', '2018-10-17 05:10:38', '2019-10-17 02:10:38'),
('914250faa620dbaf79299a81e5e68743d3766b94c50d9025361aa7a202280543a9f88ffae23ead3c', 6, 1, 'wesley@ataio.com.br', '[]', 0, '2018-10-16 02:05:41', '2018-10-16 02:05:41', '2019-10-15 23:05:41'),
('9239d897fe7dc84e5ec9dd07405db717689f7bc2630f9e94cf5be91ccf10b385721be75ebe854318', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:05:48', '2018-10-16 21:05:48', '2019-10-16 18:05:48'),
('923d752910f161ceabeb3791cc5fc25f2719f6d890f7bb650891ebe893f9cfe2bddf612ca39c00fb', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:41:19', '2018-10-15 07:41:19', '2019-10-15 04:41:19'),
('933acf807034e04431e21358b1b5cd4cb4b749707ac00d2488e9abfea245a6263cc6d61a5275e16f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 04:02:55', '2018-10-18 04:02:55', '2019-10-18 01:02:55'),
('95caf1ebdb2f54e2f9c096e6b6926b525ae2377339a80f0a7703deec750f4f5d1ebd81728f1d4370', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:57:02', '2018-10-15 07:57:02', '2019-10-15 04:57:02'),
('95d248676bce9f2230ef40c376a829ef07f43d1009fcf1a4cb9ac7a06f550ea413595dbf33e60353', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:13:31', '2018-10-15 03:13:31', '2019-10-15 00:13:31'),
('96c36a0b5685eb269e5f83913e2c38f1fcbf45f2f140b9fe7cd21e257498c1ea8ab6acfcfc0cbed2', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:53:40', '2018-10-15 07:53:40', '2019-10-15 04:53:40'),
('9911a1cf401fb0a354bb3c7dc7cd5e7521bcd6b66c13de8945197be7507d0105723311f91261fa3d', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:34:28', '2018-10-15 07:34:28', '2019-10-15 04:34:28'),
('9acfa2c46ffc80e824f6b766ed4efb56bf6552d8b5ced7d3d65d09f34798b40c4cbf573ecb25a6e4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:30:07', '2018-10-15 03:30:07', '2019-10-15 00:30:07'),
('9b3632bbc0cc01f65fd3d5a31fe664a9e2bbd17e45eee5e4cef95e546b87b67a08a18f77a276944f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:27', '2018-10-15 15:33:27', '2019-10-15 12:33:27'),
('9b3b1095de7ac32d45e941afdc310b7a3be1dc674cebfdc519b82844d6831c5cb468c5aad794ec1d', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:27:47', '2018-10-15 21:27:47', '2019-10-15 18:27:47'),
('9de5affdccfc47f8c31259385ed0fe68846e86a3bc42280138c4e3e20e8628b8433878d9b7177c16', 6, 1, 'wesley@ataio.com.br', '[]', 0, '2018-10-16 02:09:24', '2018-10-16 02:09:24', '2019-10-15 23:09:24'),
('9e1bb8ae956201e9270bc6e8a8bfbb6e3a77b903e9ad9d7a6cbae1a47663597e376e28fcb594ee77', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:14:16', '2018-10-15 21:14:16', '2019-10-15 18:14:16'),
('a0a0d79979729d3477cbbb24d3aef3a3503745aad40e534abf6019032e2633e2f302eb76c360dff2', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:29:27', '2018-10-15 15:29:27', '2019-10-15 12:29:27'),
('a0f0e99fd4bcd20c143044150a6427b1d70435f625e13179888f1349675002ab32a0394d4872bc20', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-19 02:03:51', '2018-10-19 02:03:51', '2019-10-18 23:03:51'),
('a17643fb420b3149cbb0127796dfb88d81ffcfda7be6352d916a50537bf09cb48bff2f3f98d96b26', 5, 1, 'joao@mail.com', '[]', 0, '2018-10-15 03:31:40', '2018-10-15 03:31:40', '2019-10-15 00:31:40'),
('a5391c04bcebcfb8a3ab01c92808b9715b04ceea8a2a23e1e2b7b1a8d466c1b8e620ba24ff51eb9e', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:05:54', '2018-10-16 21:05:54', '2019-10-16 18:05:54'),
('a55ede2f669885fa86d54cd991ef8cee50f2ad90606add43eef36aab55dc5a1a6d61efa3577263e9', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-16 01:37:29', '2018-10-16 01:37:29', '2019-10-15 22:37:29'),
('a6dfdeffb8c20ed2fad65ff6b1640dab5b44bc2007200cdabc996d228489947b1952a59a454779a1', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:25:07', '2018-10-15 20:25:07', '2019-10-15 17:25:07'),
('a79bd5cd16d16f9521145b4e0ad0ad5e0afbf10aa76e2fabc401d2b05fe875ef0cb5cf884e0184b6', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-19 02:21:55', '2018-10-19 02:21:55', '2019-10-18 23:21:55'),
('a846fb12d2de25dd97ef448ea5a6eacd5761bcb4239c0c22c7aa9251da18f7f6b9f6f18c28214e49', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-19 01:22:17', '2018-10-19 01:22:17', '2019-10-18 22:22:17'),
('a879ff53a818eb961cb31fe7fb22554eacae6f04becdec4a617592dc57d9b33ded4c52ff1ea8cc29', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:57', '2018-10-15 15:33:57', '2019-10-15 12:33:57'),
('ab00e5cc6b28192c56e826d42ae353f915c499bb9cf8023a378562d3a738785cfe2d90c3089ef9c9', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 20:32:33', '2018-10-16 20:32:33', '2019-10-16 17:32:33'),
('ab1b6485ec0c0deecc84b1c5b3e9d73895691bc4fc9662b2e249dddac15e39a5fd2c47052b41edc5', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:53:32', '2018-10-15 07:53:32', '2019-10-15 04:53:32'),
('acb6b0144d8260f0704958f091baf9cc3ad36ab31aa9e2bdaba356061627273f5e86fbf47d5d2c33', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:03:51', '2018-10-15 03:03:51', '2019-10-15 00:03:51'),
('adfae4e4902c73eb0f233757f16adcc739c149c0f5f363b8f150c7f3d16747f5bfe3cd44c2bfd55a', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:54:30', '2018-10-18 06:54:30', '2019-10-18 03:54:30'),
('b241312f0e74f2003c8803bf3797474c11fa4752a50796ebf2c30a912162fb9d1818732a594cd601', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:52:11', '2018-10-18 06:52:11', '2019-10-18 03:52:11'),
('b27e5dfd445805b42fdfda2b95acb837bbfc2fa0b972936c363c6750fd8f9ca55336414138a1b844', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 06:48:55', '2018-10-15 06:48:55', '2019-10-15 03:48:55'),
('b3993a014ee0c3953b265ec3941eb4ada3b4cbff0f4230acbace1b19d79cfa002e5468a07049b95e', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:54:46', '2018-10-15 03:54:46', '2019-10-15 00:54:46'),
('b3c373736245ab21f6f414b960f8f596639339d749d95f1c44257643db7b7389498da021b1ca17d9', 5, 1, 'joao@mail.com', '[]', 0, '2018-10-15 03:31:58', '2018-10-15 03:31:58', '2019-10-15 00:31:58'),
('b41c5f15a7c09c6df0dcedf964c19ca9d3863626cd519cc8fd971ad5b04c2566165d91dc5c5e1e18', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-17 19:28:58', '2018-10-17 19:28:58', '2019-10-17 16:28:58'),
('b6b1998287838ca3059f8aa0bfcd7045f547517885abf05f5829d3e2cf1396a7dc37433158097246', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-16 01:37:37', '2018-10-16 01:37:37', '2019-10-15 22:37:37'),
('b6c701ff66a983c18038ad7a3b295658608a94f29a952820a83b0e417515d40f483bd577407c1ca3', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:25:40', '2018-10-15 20:25:40', '2019-10-15 17:25:40'),
('b9900b28159fcce0c2bfa378c08e20dbefe0fcb3c3b5d91e550d02e9e7c4c7bd9c072926a3d9e0b5', 11, 1, 'pabscristinaferreira2404@gmail.com', '[]', 0, '2018-10-18 06:54:40', '2018-10-18 06:54:40', '2019-10-18 03:54:40'),
('bb34dc6e8b27273ddc4c92ae14b0c9cb89c01b9b78a06511224dc1c335df985826da20ee8fb94b61', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:33:19', '2018-10-15 15:33:19', '2019-10-15 12:33:19'),
('bc17fafaab51660ecb15cf3c3e48097d85af9f7a40ee527d35707fa3280def67831ae6e5f1ddae27', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-16 01:37:03', '2018-10-16 01:37:03', '2019-10-15 22:37:03'),
('bccb133ea5d0beecc55519009a8a213dfac82d1205bcdaff1f2f50327958b42180ee412841a89c90', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-14 15:53:56', '2018-10-14 15:53:56', '2019-10-14 12:53:56'),
('c3226acc9b063bc989df796b8cc27b962006044028f90e092f941944b33d84670bf384c34edb2881', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:54:36', '2018-10-15 07:54:36', '2019-10-15 04:54:36'),
('c9cbf21d8ec840cdf03387aa2a8c50b9885e24666200e1d09d4e09bfebe172a4d10b0e6e44d7861d', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-14 22:04:10', '2018-10-14 22:04:10', '2019-10-14 19:04:10'),
('ca1fb7d0749ae8f2424bda685d9a20a719e5d099f5d47c944a55dc4a6f198c68133a92107014c19d', 6, 1, 'wesley@ataio.com.br', '[]', 0, '2018-10-16 02:07:03', '2018-10-16 02:07:03', '2019-10-15 23:07:03'),
('cab7582017866c982961f366f6ffde08bca69e3e968205fafbe4c9680a105eecd613a6d33f7bf86b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 06:57:04', '2018-10-18 06:57:04', '2019-10-18 03:57:04'),
('cb06f7070a9d6e48db14ad5f6ba9d27eced8ed17cbc5c105022bed9fe7896fd73a5c479394de206f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 15:40:45', '2018-10-18 15:40:45', '2019-10-18 12:40:45'),
('cc1d1743cea775bc06bcc445601a1e1499688abaa15a3e0ef0a36b28dd766fcb40252e077fb86466', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 17:12:42', '2018-10-15 17:12:42', '2019-10-15 14:12:42'),
('cca39c225d9907dca2646135f36f2c88761996ba4b6ef9c0f17d612e4f4a82688a0b26a069929e61', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:41:22', '2018-10-16 01:41:22', '2019-10-15 22:41:22'),
('ce7b9653bfdb9fbf43680bbcd83d9b980388bda55f5224dd51cda40bbf4b0c055977bf855edf9b88', 8, 1, 'joaopedro@mail.com', '[]', 0, '2018-10-16 21:05:30', '2018-10-16 21:05:30', '2019-10-16 18:05:30'),
('ced25ae1c4fdff053839dc2ebac73dee331730cb12b0c42fd8ad898e2cc30f6d453152a8cb892619', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 19:27:52', '2018-10-17 19:27:52', '2019-10-17 16:27:52'),
('cf12d5e25439b27c95148c374e8abd697416ea4d7dde2aea2e524b884081eefc829a17b23089844c', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:30:13', '2018-10-15 03:30:13', '2019-10-15 00:30:13'),
('cf76d162fb7e0e27559d52b335acc50015e58b2477bc5a1648e246d5b0a1082a5fd6329839211ea4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:54:20', '2018-10-15 03:54:20', '2019-10-15 00:54:20'),
('d4c26ba4c7fd61ce8b6a16728257bef2b82cc5b6fd943253e4eddb502f575dab99a6b9b90365995b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 19:44:12', '2018-10-15 19:44:12', '2019-10-15 16:44:12'),
('da8abbad349e4462ec34f9f549fb0b859d83aa302bd0a8634145ea94354e58a726b9146de646a15e', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:04:39', '2018-10-15 21:04:39', '2019-10-15 18:04:39'),
('db13e91622746409f578ac2f823b438ecfc7f2ca5a1276af5676af2bb3c5c06727545c5772f51180', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 04:59:18', '2018-10-16 04:59:18', '2019-10-16 01:59:18'),
('e037bc036eedc7fdd0a94c92db5c8a2f95cdf403d32e6b3548614edc1928f5aa3adfbaccc4a3df52', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 04:59:09', '2018-10-16 04:59:09', '2019-10-16 01:59:09'),
('e05600b67a82b7b7328073187d11a60a339b68f527534f9783561ee3f77d6d071c1c4c117889e230', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:12:47', '2018-10-17 21:12:47', '2019-10-17 18:12:47'),
('e20155dc3b605b7a4415c0b2da65c28cdd9cbda0df8211ff32c90d8022aaad05d99dc0f313f9922a', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 04:20:13', '2018-10-15 04:20:13', '2019-10-15 01:20:13'),
('e4e18072b47a2a80e9e7a311cbb05e799609387f8c98e4d3a8f02906c982ad6fa91b9e49a536a3ee', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:56:32', '2018-10-15 03:56:32', '2019-10-15 00:56:32'),
('e6f957cbd42541a43cbaa948a4fe3d2187ae0ee2982661da28b5f84a355db413248d779e66ef685a', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-14 15:48:37', '2018-10-14 15:48:37', '2019-10-14 12:48:37'),
('e72b56afe45ba3903f5589a275f7c3d951490628590ae53fba60bed1660a09127bd9ee7ea76c0006', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:34:04', '2018-10-15 15:34:04', '2019-10-15 12:34:04'),
('e857f4984c73a8a02f854462cdfa73dd74317973d6787d4f7b18861236c1a60fa9504800dbf84fc7', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-19 00:35:56', '2018-10-19 00:35:56', '2019-10-18 21:35:56'),
('e93e5e4575d48c50d19c1c371841639e5fdc1c0c0ef3cc3e7abc45867aec9abbc6e12a0ebfc7492b', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:41:29', '2018-10-15 07:41:29', '2019-10-15 04:41:29'),
('e9656a47f0b6d6c5540603c5cade47f889e2c833fe110b9e369bab5d9a73d25b20fa741f98f7102f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:29:19', '2018-10-15 15:29:19', '2019-10-15 12:29:19'),
('e9a9efe3205d05530c5e282e2580da367431317bd3f1b455b97a1ce10f54e7f72ec95e25e5fb5b6a', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-14 15:53:31', '2018-10-14 15:53:31', '2019-10-14 12:53:31'),
('eb93feb301f7d55ad5677aa67d2596d8619557790bf913327778d91b040b7687acfaedd7ca9c65ee', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:01:38', '2018-10-15 21:01:38', '2019-10-15 18:01:38'),
('ee2613fb4a0c51d6b4e54e1c2b5ed3145786018a8d895c570f140231d05262eede87a2fba053fec3', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-18 06:50:48', '2018-10-18 06:50:48', '2019-10-18 03:50:48'),
('ef51974ddd029657a0f043f26129af63853b2a16a02f303d94cc8c63097265bb2a1ddadb020fbaeb', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 04:59:47', '2018-10-16 04:59:47', '2019-10-16 01:59:47'),
('efa99d6db819fa7fdcb28587e68b565b05d8f8ea6ab8321ae4035e359b72c528ef10fbadb1344b59', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:28:40', '2018-10-15 15:28:40', '2019-10-15 12:28:40'),
('efc58241d978fd63bb86ff90fca6f2b571fc39f88d7faf3e9dc8ec5f3155a0fe053068b01760a965', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:39:49', '2018-10-16 01:39:49', '2019-10-15 22:39:49'),
('f0fc44cdc1071d59221c0f8a48068495d30c7af3fbf23b5407260f6550b021938c000b318037a3e4', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 21:27:44', '2018-10-15 21:27:44', '2019-10-15 18:27:44'),
('f20c35cd71102033937f7b908150f86851a498be267cf56e5e288dd8caac0473702f8d565b9b23de', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-14 22:53:22', '2018-10-14 22:53:22', '2019-10-14 19:53:22'),
('f3466e1c44eb243ffde14777179c06fb35f6440a24b5e4b7cf08713da28adbb6c7eda23ed069a542', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-16 01:56:51', '2018-10-16 01:56:51', '2019-10-15 22:56:51'),
('f5e48cc52680bc83ec07d6ba0d9d54e85a11a4af42e6b32dbf3adb5428b0fe0c531b8a898af341df', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 15:31:49', '2018-10-15 15:31:49', '2019-10-15 12:31:49'),
('f6176f2e6d86044918b79b1b21d007e4e66ab76aa9aa0af599f9577b7d555596bfa6484d937369d8', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 07:40:28', '2018-10-15 07:40:28', '2019-10-15 04:40:28'),
('f757a46f957ce6ee180537292e3c82a8646f33e8d0a20bc0bf34efecdcc4b63bd12596a1da7e8348', 1, 1, 'belini.higor@gmail.com', '[]', 0, '2018-10-17 19:28:30', '2018-10-17 19:28:30', '2019-10-17 16:28:30'),
('f8563436688af077e95ffcb5db2b09b594a9633f525f6085e66f1b52cd7554e9f3c0acb453174b3d', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:30:22', '2018-10-15 03:30:22', '2019-10-15 00:30:22'),
('fa770e8bd0aeaeb31eb2fb01672d750dc4f214ad57b513f08ddfd3b718874bbf56fb7a160617b19f', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 03:19:59', '2018-10-15 03:19:59', '2019-10-15 00:19:59'),
('fb4eed8f0a9d46d44769949fb5171c2f86f088b7b7d7db4aa4fec16ae858f6d6e9aa72240801326b', 2, 1, 'claudiomaia@ataio.com.br', '[]', 0, '2018-10-19 02:27:18', '2018-10-19 02:27:18', '2019-10-18 23:27:18'),
('fc28ac54d611e06e45fbb2b19d6028fc41d183daad1e7834c0d2e24ffe25a7c6b3953b5669afd9fd', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 19:44:09', '2018-10-15 19:44:09', '2019-10-15 16:44:09'),
('fc43e6634a4db8f11dba3941045a6e28f7dcfa5efeb74856bc90c1383e588f0df6008f45ba4a4331', 7, 1, 'pamela_cristinassp@hotmail.com', '[]', 0, '2018-10-16 20:59:05', '2018-10-16 20:59:05', '2019-10-16 17:59:05'),
('fcd6df55989edd9a64147f6a774970e63b61762820eb0f8817ffd3d7b7e4502b39e6d1e33c8b58da', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-17 21:26:40', '2018-10-17 21:26:40', '2019-10-17 18:26:40'),
('fdf9bca68b0dfe5cac2509f2ae3383942699b211ed131c853f25e2e5dfcb65f8a3334638598e26af', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 04:20:03', '2018-10-15 04:20:03', '2019-10-15 01:20:03'),
('fff5893dec219275aff4abdec187902d3ed5ef20456f05321626ede48b93f03bac930c368b5b5f8d', 3, 1, 'higor@ataio.com.br', '[]', 0, '2018-10-15 20:24:12', '2018-10-15 20:24:12', '2019-10-15 17:24:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'TrKtF4XZT2CPpLu0gC1J3SMCfBkBXOCKygaa74GY', 'http://localhost', 1, 0, 0, '2018-10-14 15:33:46', '2018-10-14 15:33:46'),
(2, NULL, 'Laravel Password Grant Client', 'dAvptN6bfwBvOQ4xNz3PiFHMzzdRzbToRmJlZJmm', 'http://localhost', 0, 1, 0, '2018-10-14 15:33:46', '2018-10-14 15:33:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-10-14 15:33:46', '2018-10-14 15:33:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promotions`
--

CREATE TABLE `promotions` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `finaldate` date NOT NULL,
  `descriptive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `promotionimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logocompany` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `promotions`
--

INSERT INTO `promotions` (`id`, `company_id`, `name`, `startdate`, `finaldate`, `descriptive`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `promotionimage`, `logocompany`) VALUES
(1, 1, '20% OFF Maria Maria', '2018-10-31', '2018-10-31', 'Oferta imperdível na Maria Maria. Toda a loja com 20% de desconto. Aproveite', 3, '2018-10-15 00:53:50', '2018-10-15 01:32:34', '2018-10-15 01:32:34', 'image/promotions/img_9216.jpeg', ''),
(2, 20, '20% OFF na Maria Maria', '2018-10-14', '2018-10-14', 'Entre em nossa promoção e receba 20% de desconto em qualquer produto da nossa loja.', 3, '2018-10-15 01:35:18', '2018-10-17 03:12:58', NULL, 'image/promotions/img_9403.jpeg', 'image/promotions/logocompany/img_6296.jpeg'),
(3, 2, 'Compre 2 vestidos e ganhe um brinde', '2018-10-16', '2018-10-31', 'Na compra de dois vestidos, ganhe um brinde especial da nossa loja.', 3, '2018-10-17 04:22:05', '2018-10-17 04:22:05', NULL, 'image/promotions/img_1588.png', 'image/promotions/logocompany/img_6030.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datebirth` date DEFAULT NULL,
  `admin` enum('N','S') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `profileimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `city`, `uf`, `gender`, `datebirth`, `admin`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `profileimage`) VALUES
(1, 'Higor Belini', 'belini.higor@gmail.com', NULL, '$2y$10$ocWfsVnMyyWvJQ3x6lHtuORWaIM/sioFiLFgFu0n5G3CdHqWb9HT2', 'São Sebastião do Paraíso', 'MG', 'M', '1997-08-28', 'N', NULL, '2018-10-14 15:47:50', '2018-10-17 19:28:58', NULL, 'default.jpg'),
(2, 'Cláudio Roberto', 'claudiomaia@ataio.com.br', NULL, '$2y$10$o2RL2PwzoKmLI8MXqun8ZuGTlB5kG0d9zDaK2g1UHxxfYhXBaAp4O', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-14 15:53:31', '2018-10-16 01:37:45', NULL, 'default.jpg'),
(3, 'Higor Belini', 'higor@ataio.com.br', NULL, '$2y$10$1I7Q2D.I9JL/LvCMCS82muFEa0kVvZG41aAdpcjpBgF88CcxlcLbS', 'São Sebastião do Paraíso', 'MG', 'M', '1997-08-28', 'N', 'RwsxIv5n0abLkRa5uzyH9yzvQoynnNc9mYyiJA45s0zIHltMAR1cd4VRl0Ib', '2018-10-14 22:03:50', '2018-10-16 01:40:54', NULL, 'default.jpg'),
(4, 'Maria', 'maria@mail.com', NULL, '$2y$10$mF.HXsB3HzIZx57XGH4iAeDYbdNW0fHyBB2jMOcz/0e0RfSIYylUq', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-15 03:27:52', '2018-10-15 03:27:52', NULL, 'default.jpg'),
(5, 'João', 'joao@mail.com', NULL, '$2y$10$LR/nSPW5Xy5wrvr0H/WWuOmEpfpi2JCFOcNmUgtAePuoyA76p3Z0W', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-15 03:31:40', '2018-10-15 03:31:40', NULL, 'default.jpg'),
(6, 'Wesley Samuel', 'wesley@ataio.com.br', NULL, '$2y$10$OegANp5Lp8tCnoXUbPh.aOPQc3wVXCReNEoWrauG0RB4dVwxR0V2G', 'Passos', 'MG', 'M', '1985-01-01', 'N', NULL, '2018-10-16 02:05:41', '2018-10-16 02:07:03', NULL, 'default.jpg'),
(7, 'Pâmela Cristina', 'pamela_cristinassp@hotmail.com', NULL, '$2y$10$yoQdklRKqKUqmsVBuVJsZuYhEuCHE7elV/G3R.iWjr3j1qofsQwWK', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-16 20:59:05', '2018-10-16 20:59:05', NULL, 'default.jpg'),
(8, 'João', 'joaopedro@mail.com', NULL, '$2y$10$XC1/qclGD2h0xZPPzubZZ.BebwwILR6ICJ/hoOzbCC.QlHxLvHbra', 'Passos', 'MG', 'M', NULL, 'N', NULL, '2018-10-16 21:01:27', '2018-10-16 21:05:47', NULL, 'default.jpg'),
(9, 'higor', 'higor@mail.com', NULL, '$2y$10$zqrcMJFE9mQ2Nb7T02dT0u9ydr1r8HoCno2sj5lK3935uSBEgjgNm', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-16 21:14:56', '2018-10-16 21:14:56', NULL, 'default.jpg'),
(10, 'Henrique', 'henriquevcintra@hotmail.com', NULL, '$2y$10$vwpKd.MQ7398GDIeV7HKcuo8cERvkWmw.V476jO5d0jrhcRJ4SuN.', NULL, NULL, NULL, NULL, 'N', NULL, '2018-10-18 01:52:13', '2018-10-18 01:52:13', NULL, 'default.jpg'),
(11, 'Pâmela', 'pabscristinaferreira2404@gmail.com', NULL, '$2y$10$SAJifVkr7.wAOQauzB5Ase6FLNsrx7osFLLwjy5MYag.4dLnlQSA2', 'São Sebastião do Paraíso', 'Minas Gerais', 'Feminino', '1998-10-24', 'N', NULL, '2018-10-18 06:51:48', '2018-10-18 06:54:32', NULL, 'default.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userspromotions`
--

CREATE TABLE `userspromotions` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotion_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `userspromotions`
--

INSERT INTO `userspromotions` (`id`, `promotion_id`, `user_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2018-10-18 21:09:40', '2018-10-19 00:09:40', '2018-10-19 00:09:40'),
(3, 1, 3, '2018-10-18 21:22:57', '2018-10-19 00:22:57', '2018-10-19 00:22:57'),
(4, 1, 1, '2018-10-18 21:36:34', '2018-10-19 00:36:34', '2018-10-19 00:36:34'),
(5, 2, 1, '2018-10-18 21:38:37', '2018-10-19 00:38:37', '2018-10-19 00:38:37'),
(6, 3, 1, '2018-10-18 22:13:59', '2018-10-19 01:13:59', '2018-10-19 01:13:59'),
(7, 3, 2, '2018-10-18 23:32:17', '2018-10-19 02:32:17', '2018-10-19 02:32:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visits`
--

CREATE TABLE `visits` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_company_id_foreign` (`company_id`),
  ADD KEY `promotions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userspromotions`
--
ALTER TABLE `userspromotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userspromotions_promotion_id_foreign` (`promotion_id`),
  ADD KEY `userspromotions_user_id_foreign` (`user_id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_company_id_foreign` (`company_id`),
  ADD KEY `visits_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userspromotions`
--
ALTER TABLE `userspromotions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `promotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `userspromotions`
--
ALTER TABLE `userspromotions`
  ADD CONSTRAINT `userspromotions_promotion_id_foreign` FOREIGN KEY (`promotion_id`) REFERENCES `promotions` (`id`),
  ADD CONSTRAINT `userspromotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `visits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
