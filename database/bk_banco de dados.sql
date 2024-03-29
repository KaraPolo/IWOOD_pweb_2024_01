-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela marcenaria_2024.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.categorias: ~3 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Marcenaria', '2024-03-29 22:24:57', '2024-03-29 22:24:57'),
	(2, 'Carpintaria', '2024-03-29 22:24:57', '2024-03-29 22:24:57'),
	(3, 'Freelancer', '2024-03-29 22:24:57', '2024-03-29 22:24:57');

-- Copiando estrutura para tabela marcenaria_2024.estabelecimentos
CREATE TABLE IF NOT EXISTS `estabelecimentos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `estabelecimentos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `estabelecimentos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.estabelecimentos: ~8 rows (aproximadamente)
INSERT INTO `estabelecimentos` (`id`, `nome`, `descricao`, `imagem`, `telefone`, `created_at`, `updated_at`, `categoria_id`) VALUES
	(1, 'Carpintaria Artesanal', 'Na Madeira & Arte, combinamos habilidades artesanais com tecnologia moderna para criar móveis de alta qualidade que refletem elegância e sofisticação. Nosso compromisso com a excelência é evidente em cada detalhe, desde o design até a finalização.', 'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia12725/o-que-faz-um-marceneiro-cpt.jpg', '+55 49 99999-9999', '2024-03-17 21:26:07', '2024-03-17 21:29:38', 2),
	(2, 'Madeira & Arte Marcenaria', 'Na busca pela sustentabilidade, a Oficina da Madeira utiliza apenas madeira proveniente de fontes responsáveis ​​e práticas eco-friendly em todo o processo de produção. Nosso foco é criar móveis duráveis, belos e que respeitem o meio ambiente.', 'https://artedamarcenariamoderna.com.br/wp-content/uploads/2017/07/profiss%C3%A3o-marceneiro.png', '+55 49 99999-8888', '2024-03-17 21:28:04', '2024-03-17 21:29:23', 1),
	(3, 'Raízes Rústicas', 'Especializada em móveis rústicos feitos à mão, a Marcenaria Raízes Rústicas celebra a beleza natural da madeira. Cada peça é única e carrega consigo a história e a autenticidade do material, proporcionando um toque de rusticidade a qualquer ambiente.', 'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia31114/o-que-um-marceneiro-faz-muita-coisa-cpt.jpg', '+55 49 88888-8888', '2024-03-17 21:28:38', '2024-03-17 21:28:38', 1),
	(4, 'Oficina da Madeira', 'Na busca pela sustentabilidade, a Oficina da Madeira utiliza apenas madeira proveniente de fontes responsáveis ​​e práticas eco-friendly em todo o processo de produção. Nosso foco é criar móveis duráveis, belos e que respeitem o meio ambiente.', 'https://blog.ferimport.com.br/wp-content/uploads/2021/07/marceneiro.png', '+55 49 88888-8888', '2024-03-17 21:29:09', '2024-03-17 21:29:09', 3),
	(5, 'Estilo & Elegância Carpintaria', 'Combinando design contemporâneo com técnicas tradicionais, a Estilo & Elegância cria móveis sob medida que transcendem tendências passageiras. Nossa abordagem artesanal garante qualidade excepcional e beleza duradoura em cada peça.', 'https://digital.formobile.com.br/sites/formobile.com/files/styles/article_featured_standard/public/uploads/2019/05/shutterstock_578729953.jpg?itok=di5-5pD1.png', '+55 49 81234-1234', '2024-03-18 23:48:20', '2024-03-18 23:48:20', 2),
	(6, 'Marcelo Machado', 'Especialista em móveis personalizados, combina técnicas tradicionais com inovação para atender às necessidades específicas de cada cliente. Minha missão é criar móveis que não apenas atendam às expectativas, mas as superem.', 'https://artedamarcenariamoderna.com.br/wp-content/uploads/2017/07/melhores-profiss%C3%B5es-do-mercado.png', '+55 49 81234-4321', '2024-03-18 23:48:43', '2024-03-18 23:48:43', 3),
	(7, 'Carpintaria Harmonia', 'Na Carpintaria Harmonia, a paixão pela madeira é evidente em cada criação. Nossos móveis são projetados para proporcionar conforto, funcionalidade e beleza em perfeita harmonia, refletindo o compromisso com a excelência em carpintaria.', 'https://jkmadeiras.com.br/wp-content/uploads/2022/11/JK-BLOG-9-1024x683.png', '+55 49 9123-5544', '2024-03-18 23:49:22', '2024-03-18 23:49:22', 2),
	(8, 'Roberto Lenha', 'Especialista renomado em serviços de carpintaria e marcenaria, com vasta experiência na criação de móveis sob medida. Seus projetos exclusivos e personalizados atendem às necessidades específicas de cada cliente, proporcionando funcionalidade e beleza em cada peça.', 'https://i0.wp.com/www.guiamuriae.com.br/wp-content/uploads/2016/05/Carpinteiro-Foto-Pixabay.jpg', '+55 49 81234-9899', '2024-03-18 23:49:45', '2024-03-18 23:49:45', 3);

-- Copiando estrutura para tabela marcenaria_2024.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela marcenaria_2024.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.migrations: ~11 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_03_12_190724_categoria', 1),
	(6, '2024_03_19_185811_create_sugestaos_table', 1),
	(7, '2024_03_19_194127_tiposugestaos_table', 1),
	(8, '2024_03_20_010915_add_coluna_sugestao', 1),
	(9, '2024_03_20_155531_create_estabelecimentos_table', 1),
	(10, '2024_03_20_185210_addcategoria_estabelecimento', 1),
	(11, '2024_03_29_025047_create_servicos_table', 1);

-- Copiando estrutura para tabela marcenaria_2024.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela marcenaria_2024.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela marcenaria_2024.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalhamento` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.servicos: ~8 rows (aproximadamente)
INSERT INTO `servicos` (`id`, `nome`, `contato`, `detalhamento`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'Brad Pitt', '+55 49 1111-1111', 'Arrumar o chuveiro', 'https://i0.wp.com/www.guiamuriae.com.br/wp-content/uploads/2016/05/Carpinteiro-Foto-Pixabay.jpg', '2024-03-18 23:49:45', '2024-03-18 23:49:45'),
	(2, 'Ashton Kutcher', '+55 49 2222-2222', 'Construção de armários', 'https://www.cec.com.br/files/blog/posts/2022/06_jun/13062022/armarios-cozinha_700x409_1.png', '2024-03-18 23:49:45', '2024-03-18 23:49:45'),
	(3, 'Tom Cruise', '+55 49 3333-3333', 'Reparação de portas', 'https://portasemadeirasgralhaazul.com.br/wp-content/uploads/2023/07/every-onlilnee-9SxI_VloA2g-unsplash-1.jpg', '2024-03-18 23:49:45', '2024-03-18 23:49:45'),
	(4, 'Vin Diesel', '+55 49 4444-4444', 'Conserto de móveis', 'https://media-cdn.tripadvisor.com/media/photo-s/07/19/c2/9d/aquaville-resort.jpg', '2024-03-20 18:55:45', '2024-03-20 18:55:45'),
	(5, 'Agenor de Miranda Araújo Neto', '+55 49 5555-5555', 'Arrumar o chuveiro', 'https://midias.jornalcruzeiro.com.br/wp-content/uploads/2021/01/chuveiro-547x364.jpg', '2024-03-20 18:55:45', '2024-03-20 18:55:45'),
	(6, 'Farrokh Bulsara', '+55 49 6666-6666', 'Instalação de novos pisos de madeira', 'https://roidigital.com.br/a_pisopisoartes_sitepro/wp-content/uploads/instalacao.jpg', '2024-03-20 18:55:45', '2024-03-20 18:55:45'),
	(7, 'Paolla Oliveira', '+55 49 7777-7777', 'Reparação do deck de madeira', 'https://pegaefaz.com.br/wp-content/uploads/2023/12/deck-madeira2-1024x683.jpg', '2024-03-20 18:55:45', '2024-03-20 18:55:45'),
	(8, 'Allana', '+55 49 8888-8888', 'Criação de esculturas', 'https://www.awebic.com/wp-content/uploads/2017/09/esculturas-escala-real-1122x589.jpg', '2024-03-20 18:55:45', '2024-03-20 18:55:45');

-- Copiando estrutura para tabela marcenaria_2024.sugestaos
CREATE TABLE IF NOT EXISTS `sugestaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugestao` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tiposugestao_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sugestaos_tiposugestao_id_foreign` (`tiposugestao_id`),
  CONSTRAINT `sugestaos_tiposugestao_id_foreign` FOREIGN KEY (`tiposugestao_id`) REFERENCES `tiposugestaos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.sugestaos: ~2 rows (aproximadamente)
INSERT INTO `sugestaos` (`id`, `nome`, `sugestao`, `avaliacao`, `created_at`, `updated_at`, `tiposugestao_id`) VALUES
	(1, 'Fábio Augusto Fagundes', 'Site Bacana.', '5', '2024-03-20 21:26:07', '2024-03-20 21:29:38', 2),
	(2, 'Pedro de Oliveira', 'Eu achei o site bacana, mas seria bacana se tivessem mais profissionais', '4', '2024-03-20 21:26:07', '2024-03-20 21:29:38', 1);

-- Copiando estrutura para tabela marcenaria_2024.tiposugestaos
CREATE TABLE IF NOT EXISTS `tiposugestaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.tiposugestaos: ~3 rows (aproximadamente)
INSERT INTO `tiposugestaos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Sugestão', '2024-03-29 22:24:57', '2024-03-29 22:24:57'),
	(2, 'Crítica', '2024-03-29 22:24:57', '2024-03-29 22:24:57'),
	(3, 'Comentário', '2024-03-29 22:24:57', '2024-03-29 22:24:57');

-- Copiando estrutura para tabela marcenaria_2024.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela marcenaria_2024.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'admin@admin.com', NULL, '$2y$12$S0pGP7gv5e/wB/bal6A6gexRXzutjSXIsevJ5vQBXOdK3IfmcWzz.', NULL, '2024-03-29 22:35:21', '2024-03-29 22:35:21');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
