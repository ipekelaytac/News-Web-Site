-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 17 Oca 2023, 21:21:52
-- Sunucu sürümü: 8.0.31-cll-lve
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aytacipekel_haber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `category_name`, `slug`) VALUES
(1, 'Nia Jacobi II', 'consequatur-eveniet-voluptatum-ut'),
(2, 'Ansley Cassin', 'dolorem-facilis-blanditiis-rem-odit-praesentium'),
(3, 'Carey Lindgren', 'ut-ratione-aliquam-et-fugit'),
(4, 'Lura Ziemann DDS', 'rerum-eius-quo-aut-ut-maxime'),
(5, 'Prof. Isabella Wintheiser Sr.', 'ipsa-consequatur-molestiae-voluptas-pariatur-quisquam-eum'),
(6, 'Moshe Kovacek', 'eos-tenetur-dolores-nam-ut-exercitationem'),
(7, 'Edyth Wuckert Sr.', 'sit-quia-voluptatem-tempora-numquam'),
(8, 'Asia Stroman', 'quia-non-quam-perspiciatis-et-laboriosam-explicabo-et'),
(9, 'Josh Romaguera II', 'accusantium-qui-tempora-soluta-velit'),
(10, 'Daron Buckridge', 'iure-asperiores-est-molestiae-et-sequi-ratione-rerum-earum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category_news`
--

CREATE TABLE `category_news` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `news_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `category_news`
--

INSERT INTO `category_news` (`id`, `category_id`, `news_id`) VALUES
(1, 5, 28),
(2, 5, 25),
(3, 1, 1),
(5, 3, 25),
(7, 1, 29),
(9, 6, 7),
(10, 1, 32),
(11, 2, 30),
(12, 3, 30),
(13, 3, 27),
(14, 10, 26),
(15, 9, 24),
(16, 9, 23),
(17, 1, 21),
(18, 10, 20),
(19, 6, 19),
(20, 9, 18),
(21, 7, 17),
(22, 2, 16),
(23, 6, 16),
(24, 2, 15),
(25, 3, 15),
(26, 6, 15),
(27, 2, 14),
(28, 4, 13),
(29, 2, 12),
(30, 2, 11),
(31, 2, 10),
(32, 1, 9),
(33, 8, 8),
(34, 6, 6),
(35, 5, 5),
(36, 6, 5),
(37, 2, 4),
(38, 3, 4),
(39, 4, 4),
(40, 1, 3),
(41, 2, 3),
(42, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `id` int UNSIGNED NOT NULL,
  `name_surname` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`id`, `name_surname`, `email`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Esmeralda Hamill', 'skoepp@kunze.org', 'Dr. Camron Schmidt', 'Soluta ad nobis ex et sapiente. Perferendis in optio ut voluptas occaecati soluta. Eos accusantium voluptatem et doloribus id. Eos saepe culpa ducimus ea consectetur dolores ut dolor. Excepturi voluptatem omnis qui mollitia praesentium. Atque deleniti nihil autem laboriosam architecto ducimus. Voluptatum quasi sunt officia. Necessitatibus ut officiis dolores sed iure eaque distinctio. Quisquam perferendis totam harum qui libero neque consectetur voluptatem. Culpa ut dolor repellat beatae sit. Nesciunt omnis et magni a quaerat dolor ullam. Rem id animi aspernatur quia voluptatem laudantium laborum. Quo quis nostrum ipsum cum vero rerum. Est nisi voluptatem nobis quos dolorem ut corporis. Ut veritatis temporibus sunt voluptas molestias occaecati. Quibusdam in quis inventore consequuntur iste ducimus. In vitae veniam quasi ut architecto facere. Tempora ducimus ea consequatur voluptatem maxime quod. Consequatur voluptate corporis ipsam ut deleniti nihil. Est similique voluptatem et quod et. Iusto fugit nobis sit ut id in laudantium. Necessitatibus eos et numquam dolorem cupiditate. Ab ullam et eum distinctio quae officia.', NULL, NULL),
(2, 'Dagmar Gottlieb DVM', 'chester.johnson@herzog.org', 'Kirk Maggio', 'Atque autem magni vel sequi recusandae et et. Impedit debitis non aut quibusdam similique sunt ea. Est neque ipsa assumenda voluptas. Dolor quo officia soluta qui reiciendis et vel. Placeat quaerat pariatur aperiam eum. Natus dolores et officiis quia in. Fugiat quo voluptatum dolores est. Et voluptatem tempore qui quas voluptatem autem optio et. Necessitatibus et eligendi eos excepturi rerum. Enim deserunt sunt numquam doloremque minima. Provident quia esse ut expedita debitis et voluptatibus mollitia. Qui et voluptatem fuga eos distinctio rerum. Qui amet perspiciatis ad qui quia molestias voluptatibus. Nesciunt veniam quo omnis nemo non in. Natus praesentium quo sit enim nulla maxime eos magnam. Aliquid eius cupiditate sequi velit id mollitia quod.', NULL, NULL),
(3, 'Dr. Adell Miller PhD', 'stark.wendell@gmail.com', 'Clementine Wyman', 'Est praesentium adipisci assumenda illum consectetur et. Id itaque porro repellat animi asperiores facilis sed. Consequuntur suscipit nam consectetur commodi ex nesciunt. Et eos ut asperiores illum delectus. Molestiae qui dolorum porro minima. Voluptates autem cupiditate saepe. Culpa consequatur qui incidunt excepturi. Aliquam et maiores sint eum et perferendis minus. Soluta enim quos laboriosam aut et et saepe. Odit placeat ab tenetur adipisci. Asperiores iusto sunt quo debitis id quam. Ut et et qui nihil quis quo dolor. Ut qui sit enim sunt iste saepe.', NULL, NULL),
(4, 'Ms. Marilyne Hermann', 'vbeier@gmail.com', 'Christine Ryan', 'Aut ut debitis culpa ratione ducimus ullam a. Harum corporis corrupti laboriosam non. Modi omnis dignissimos fugit qui. Consequuntur et ratione quaerat est ut modi. Ab nulla distinctio neque laboriosam soluta incidunt. Consectetur earum dolores possimus sed et cum. Rerum eligendi accusantium cum aliquam enim optio animi. Qui accusamus ut deleniti aut. Enim ullam quibusdam animi molestiae dolor id accusamus. Aliquid ea illo quae non perspiciatis perspiciatis. Reprehenderit aperiam quis qui cumque aut assumenda sit. Accusantium eos rem sequi provident velit eligendi. In fuga dolor quia eum est. Est quidem dolore molestiae rerum consequatur voluptas et. Quos assumenda vitae a non. Natus sit eum sed cupiditate aliquam autem occaecati.', NULL, NULL),
(5, 'Miss Gregoria Jast IV', 'schulist.preston@hotmail.com', 'Mrs. Felicia Waters', 'Facilis animi vitae explicabo veritatis. Dolorem qui ea est voluptatem minima reprehenderit molestiae quis. Aperiam adipisci quidem minima molestias. Expedita quod et ut repellat distinctio et. Cum aliquam odit in maxime. Cum modi minima qui dolores nisi consectetur odio omnis. Quidem est accusamus ex ex voluptatem. Officiis recusandae et est distinctio nemo ea et blanditiis. Suscipit quisquam nihil cum. Qui labore voluptatibus quae et ullam blanditiis aut. Voluptatem quae fugit deserunt enim neque. Quam et dolore at impedit qui maiores non. Provident voluptatem inventore sunt quibusdam consequatur aut a. Voluptas sit illum praesentium vitae consequatur pariatur corporis. Quasi aperiam magnam dolore omnis consequatur inventore nulla vero. Voluptatibus neque tenetur minima earum qui sapiente. Nulla id perspiciatis optio natus ut quia.', NULL, NULL),
(6, 'Wilson King', 'estel.bashirian@schmidt.com', 'Dr. Eric Hintz', 'Nobis dolores quo est voluptatum. Et in in qui numquam. Amet corrupti odio quae nam consequatur itaque. Doloremque amet adipisci iste quasi praesentium veniam. Sit quis velit non quae. Ullam officia voluptas ut. Mollitia animi voluptatem sequi distinctio. Eligendi reprehenderit ipsum mollitia quo in. Omnis esse quae dolor sunt earum quasi illo. Numquam dolore dolorem eos voluptatem quos quia sint. Vel et id velit commodi. Voluptas laboriosam qui ipsa nobis recusandae dolores. Nisi est expedita minus ipsam rem quisquam. Sequi vel nulla sint neque est mollitia. Facere quia eveniet quam tempore omnis. Doloribus perspiciatis deserunt voluptas quidem error facere fugit. Quaerat pariatur aperiam dolores. Quod corporis dolor provident numquam. Omnis voluptates necessitatibus cum sit consequatur consequuntur. Officia temporibus dolorem temporibus id officiis beatae ab ea. Mollitia sed tempore aut quia. Ab sunt illum rerum cupiditate id laboriosam.', NULL, NULL),
(7, 'Turner Wehner', 'heathcote.keon@yahoo.com', 'Erin Armstrong', 'Nemo eveniet reprehenderit non ea in qui accusantium. Et qui occaecati vitae asperiores alias odit sint. Alias non asperiores veritatis ut. Veniam reiciendis quo saepe molestiae molestiae. Quis qui recusandae ab hic. Et numquam expedita numquam eum sit. Fuga non facilis dolorem omnis. Explicabo corporis asperiores et voluptatem nemo nam. Tempore iusto et odio dolores quo nemo non. Dolorem et ut accusamus et modi esse. Veniam hic ex commodi ipsum cum sed ex est. Maiores amet facilis praesentium sit. Quod eveniet tempore omnis qui molestias porro ab dolor. Maiores quia et eum iure assumenda ut autem. Adipisci est ad minus et magni. Aut corporis a consequatur et ea est tempora. Praesentium cupiditate perferendis quia officia consequatur sunt quisquam. Sed dolor cum eligendi quia voluptatem. Tenetur et est maiores ut sapiente. Sapiente sequi in et sapiente. Occaecati consequuntur quam omnis qui. Et odio sapiente hic tenetur debitis. Sed numquam architecto aut quibusdam rerum hic. Porro at saepe vero reprehenderit dolor nulla a. Id enim culpa corporis molestiae. Et et aliquid sapiente quasi reiciendis.', NULL, NULL),
(8, 'Angeline Corwin', 'ritchie.dasia@haley.com', 'Prof. Allene O\'Keefe', 'Alias enim rerum autem possimus reiciendis. Mollitia est delectus velit sed eius quos. Ex sapiente necessitatibus neque totam. Maxime dignissimos veniam doloribus ducimus ad. Quae dolorem a cupiditate. Inventore recusandae totam et et molestiae nam magnam error. Et provident rem dolor deserunt aliquam magni est. Nisi magni omnis ut aliquam perferendis eligendi. Doloremque ex tempora pariatur animi et consequatur officia. Architecto modi voluptatibus quo illum. At iusto consectetur culpa aut quisquam ea. Magni molestiae animi aut eius suscipit quia aliquid sit. Qui debitis explicabo voluptatem aperiam recusandae consequatur non. Deserunt rerum nisi in neque nulla consequatur dolores ut. Aut expedita qui beatae sit iste. Et odio et recusandae et id. Ut sint provident maiores.', NULL, NULL),
(9, 'Isom Senger I', 'collier.stone@gmail.com', 'Prof. Jan Vandervort', 'Consequatur et nobis rerum est possimus. Deserunt voluptatem deserunt accusantium dolorem. Minima qui omnis porro quis. Et consectetur corrupti quam soluta. Ea quidem et atque. Sit animi recusandae a et. Similique velit saepe quis et numquam voluptatem. Eum enim quam pariatur est illum qui. Placeat et quod sapiente beatae. Quo corrupti perferendis quia. Sit explicabo quia voluptas facilis eos ut porro. Et sapiente enim fugit dolores qui possimus. Est sint ipsum animi dolorem dolorum dolorem enim delectus. Officiis dolorem aut asperiores dolorem perferendis. Saepe doloremque voluptates ut et et accusantium. Laborum repudiandae ipsa maxime error aspernatur. Aut iure dicta dolorum iste. Repellat est vero laborum. Autem eum repellat nihil qui. Ut velit voluptatem facilis maiores doloribus nam commodi. Laudantium nesciunt neque aut voluptatem et quo. Vel porro est excepturi. Laudantium tenetur sapiente et illo corrupti ut enim ut. Officia impedit enim repellat autem modi maiores.', NULL, NULL),
(10, 'Prof. Kyle Altenwerth IV', 'hosea49@hotmail.com', 'Nicolas Leffler', 'Aliquam quis enim unde. Exercitationem iste vel a in. Ipsa laboriosam sapiente beatae quibusdam sint. Eum voluptatem in quia aperiam eum. Dolorum porro et et et esse ipsum. Consequatur optio asperiores et voluptates ex fugiat. Molestiae dicta et quos deserunt dolor ullam itaque enim. Et voluptas sunt dolorem iusto quibusdam. Aut repellat dignissimos eos quia dolorum quo nobis ex. Et aut corrupti aut nesciunt. Atque veritatis similique ex culpa qui sed quia. Aut quo distinctio facilis. Sed neque minima omnis autem sed dolore.', NULL, NULL),
(11, 'Prof. Tillman Schmitt', 'keven84@lehner.com', 'Hassie Schoen', 'Et iste et cum quidem debitis. Quo sint rem tempora hic ex voluptas. Modi minus ut minus ut facilis sed beatae. Fugiat non fugiat tenetur non consequatur tempora ab. Velit assumenda et reprehenderit qui et accusantium quis. Doloremque consequuntur sit vero doloremque quod. Vero ratione non corrupti totam qui. Quia quia in quam alias nisi dignissimos sequi et. Et repellat laborum a voluptatem enim dolores a. Dolores autem et placeat optio ullam praesentium amet. Temporibus quia at velit enim ut. Ipsa qui tempore hic voluptate perferendis. Provident facilis quod accusantium suscipit non ab sit. Et voluptas ut repudiandae in illum quas molestiae. Praesentium et ea laborum sint. Omnis alias natus aut nobis repudiandae voluptas aut. Perferendis dolor numquam occaecati quae quae sed non. Et aliquam sed occaecati et debitis omnis ex aut. Error ut est nobis sed et temporibus.', NULL, NULL),
(12, 'Creola Spencer', 'devon94@hotmail.com', 'Price Stehr', 'Incidunt quasi pariatur provident iusto. Voluptatem esse saepe asperiores facere. Repellendus omnis molestiae quibusdam enim. Necessitatibus sit quo facilis incidunt maiores quae placeat. Corporis in consectetur nihil nisi et et facilis. In odit distinctio placeat id sint nam reprehenderit. Nesciunt dicta necessitatibus dignissimos nostrum minima repellat consequatur. Delectus incidunt amet voluptatem rerum est qui quo dolor. Repellat beatae eveniet amet voluptatem neque velit. Amet velit blanditiis enim rerum rerum nihil. Voluptate deserunt dolorem quia perspiciatis dolorum. Itaque velit eligendi numquam consequatur veniam. Alias doloribus neque rerum tempore. Nihil itaque voluptas incidunt voluptatem dicta dolor quibusdam. Adipisci enim velit qui natus. Error nemo eum neque ut similique et quod.', NULL, NULL),
(13, 'Kristoffer Gaylord', 'mina.harber@yahoo.com', 'Dawson Flatley I', 'Quis fugiat architecto pariatur quibusdam reiciendis recusandae qui. Numquam in explicabo eos deserunt nisi voluptatem. Asperiores a facere et quis delectus quasi quam rerum. Ut et autem occaecati rerum delectus ut neque. Porro vel fugit deleniti non esse qui sed. Necessitatibus dolorem consequatur itaque similique repudiandae. In voluptatem et ab sed. Doloribus et dolorem impedit id quia aut. Molestiae enim accusantium ut beatae. Rerum quae ex a corrupti labore. Nihil molestiae quisquam maxime sunt qui iusto. Id laborum quo nesciunt fuga nobis aspernatur eos. Necessitatibus necessitatibus similique necessitatibus enim. Dolorem voluptatem veritatis et corrupti repellat quis. Occaecati dolor consequuntur qui illo. Culpa consequatur maxime accusantium et rerum. Provident asperiores magnam nemo. A officia omnis provident magni porro aliquam iure nemo. Temporibus consequuntur doloribus reiciendis modi pariatur ipsa voluptatem consequuntur. Sequi et iusto debitis adipisci explicabo doloribus. Dolore recusandae amet ut officiis. Velit optio est necessitatibus omnis sed. Est sed ut aut. Fugiat cupiditate magnam ut vel ab sit. Adipisci similique vel non expedita.', NULL, NULL),
(14, 'Edd Runte', 'loraine67@yahoo.com', 'Dr. Mary Bednar', 'Qui id porro cupiditate quisquam aliquam. Voluptatem modi omnis iusto delectus nesciunt ex accusamus. Quia sunt sequi ut eveniet id. Exercitationem sunt ducimus veniam quia voluptatem. Vero aut nesciunt voluptas ut. Dolor quos dolorem ratione enim. Rem aut sunt soluta dolor et occaecati sint. Explicabo possimus dicta explicabo id cum pariatur et. Ut molestiae consequatur non aspernatur et quos voluptatem. Ducimus saepe voluptatem minima odio qui facilis. Et sint tenetur vel incidunt fugit assumenda. Et placeat quae omnis suscipit. Unde quasi in molestiae neque atque animi magni sed. Error perferendis nobis cum qui. Voluptate voluptatem fuga aliquid aut. Molestias sunt autem vel aspernatur rerum et. Est magni est quaerat. Voluptatum exercitationem deserunt et tenetur esse. Autem voluptatem nulla et ullam. Ratione sit nostrum ab quidem est quae quas voluptas. Sit eligendi perspiciatis architecto incidunt odit officiis sed. Officiis neque nobis fugiat accusamus error quia. Libero minus est cumque aut dignissimos. Aspernatur ullam dicta eius quos excepturi inventore. Doloribus sapiente quia ut unde quae veniam voluptas.', NULL, NULL),
(15, 'Ettie Quigley V', 'mnolan@gmail.com', 'Emely Rogahn', 'Quae reprehenderit ut provident harum consequatur numquam. Sapiente quis blanditiis fugit ducimus optio a ullam. Explicabo suscipit illum voluptatibus voluptates distinctio et sint voluptates. In voluptas excepturi autem et fugit provident voluptas. Molestiae rem et est nemo facere doloremque. Occaecati aut sapiente rerum voluptatem ut distinctio. Voluptatem ut voluptatum fugiat eos. Saepe consequuntur ut rerum voluptas architecto quos. Excepturi nihil quia est cupiditate nobis et qui. Aperiam voluptatibus nihil ullam cum repellat et harum qui. Aut accusantium a iste nisi delectus eum. Tenetur delectus ut perferendis totam sed officiis eaque. Fugit velit occaecati cum qui fuga. Dolores recusandae non est dolor alias. Quasi consequatur fuga voluptas necessitatibus fugiat eum ullam. Voluptatem itaque impedit voluptatibus repellendus nam. Ut amet ipsam dolores ipsa omnis debitis magni culpa. Qui veritatis iure vel unde autem natus vitae. Sed maxime voluptates quia ad et fugiat officia cum. Voluptatibus incidunt consequatur odit facere qui error vel omnis. Rerum sunt impedit ea vel in placeat quisquam. Molestias illum qui eveniet assumenda non. Vitae incidunt et dolore vel aliquam facere laudantium. Reprehenderit aperiam placeat dolores. Fugiat quo aut atque recusandae repudiandae et et. Reprehenderit qui ut nemo quia minus eaque.', NULL, NULL),
(16, 'Mrs. Verna Beer Jr.', 'jazmyn03@hotmail.com', 'Dallas Blick', 'Aut asperiores aspernatur consequatur. Suscipit quod rerum nobis quod eligendi aut. Beatae placeat modi tempore esse. Fugit accusamus veniam dolores dolore sed. Facilis veniam dolores iusto voluptate exercitationem molestiae architecto dolorum. Est quaerat quos enim. Aspernatur quaerat ut accusamus odit quasi. Dolor dignissimos sapiente asperiores autem excepturi commodi vel. Ipsum qui ipsa aliquam et beatae voluptates et. Quis et eos est. Dolorum cum voluptatem ut. Et quas eaque officiis laudantium voluptatem eius aspernatur repudiandae. Dolores officiis soluta aut rerum cupiditate eius. Hic voluptatem adipisci est veritatis est culpa neque ut. Ut id maiores deserunt harum. Perferendis laudantium quod laborum velit. Cupiditate accusantium dolorem sit id pariatur autem nulla voluptas. Consequuntur recusandae reprehenderit deserunt accusantium consequatur. Neque aut reiciendis excepturi tempore eum aliquam aliquam optio. Laborum et corporis eius est rerum rerum. Accusamus beatae impedit quibusdam dolor est expedita. Quidem ex soluta consequatur tempora pariatur. Perspiciatis velit perspiciatis tenetur consequatur eum. Numquam sit quam quia vitae qui porro dolor animi. Quia laudantium corporis odit. Laudantium dolorum animi ratione eos deserunt necessitatibus ipsum voluptate.', NULL, NULL),
(17, 'Edmond Schiller DVM', 'kuphal.roel@bashirian.com', 'Miss Danika Zboncak DDS', 'Fugit et et doloremque et qui non tempore. Nostrum praesentium ipsa facilis. Iste nostrum beatae fugit vitae. Aut voluptas pariatur cum aperiam architecto. Ut beatae ab aut quis eos voluptatem. Esse eaque odit praesentium soluta ipsam. Sunt ipsa alias ab eveniet aut impedit illum odio. Exercitationem aut inventore magnam itaque labore illum adipisci. Mollitia quia reprehenderit repellendus sunt ut. Reprehenderit accusantium voluptatem modi et iste. Rerum sint omnis qui. Vero sit reprehenderit nam qui. Perspiciatis ipsum officia ut numquam ut in. Magnam at sunt culpa dolore id repudiandae. Et tempore quisquam officia perferendis tenetur nisi. Eos nam maxime occaecati laboriosam. Provident deleniti optio doloremque. Optio officiis error numquam saepe accusantium eaque natus. Qui esse consectetur a quibusdam laboriosam placeat. Magnam voluptates eius corporis ut vitae quia corporis. Repudiandae qui ut quo odio consequuntur et est. Ut magni et cupiditate nisi minus magnam deleniti et. Quia blanditiis et est dolores a. Cumque ad amet necessitatibus est similique. Reprehenderit est ut impedit et consequatur.', NULL, NULL),
(18, 'Miss Aurelie Purdy', 'geovanni.walsh@sipes.org', 'Prof. Rosendo Conn PhD', 'Consectetur vel quo ullam repudiandae atque. Expedita atque aut culpa corrupti sit. Voluptatem qui molestias quia harum sunt et eum. Repudiandae officiis aperiam tempore voluptatem. Minima a eos labore repudiandae dolores ut. Id qui ex numquam eveniet iste sequi. Et et consequatur porro. Iure doloribus perferendis quas minus ut inventore neque. Ullam illo eum sed ea eum. Occaecati aliquam officia maxime cum odit in est. Est recusandae cupiditate quas et fugit laborum. Est voluptatibus ea ut ut. Distinctio dolor fugiat impedit magni nulla qui. Et qui ipsam dignissimos voluptas voluptatem sequi. Esse porro sint at qui. Qui ut quisquam tempora cum debitis magnam provident reprehenderit. Et ipsum nisi voluptatibus molestiae. Omnis ea ea aut omnis eos. Quae at illo quae veritatis perspiciatis. Veniam quia impedit voluptatem necessitatibus maiores. Quasi quia et quia. Quis neque sequi voluptas et reprehenderit fugit. Id et voluptatum libero modi consequatur. Magni nam modi omnis et saepe at tenetur autem. Magnam ut voluptate neque rerum maxime omnis. Ut assumenda aspernatur ut ad.', NULL, NULL),
(19, 'Eldred Gaylord', 'ayden.vandervort@schmitt.org', 'Prof. Elsa Cole I', 'Nihil consequatur iusto quaerat vero similique fugit in. Eaque eius dolores quam accusantium maiores. Molestiae totam modi labore repellendus at distinctio voluptatum. Non quia ut est esse aspernatur ratione architecto quia. Accusamus consequatur quod consectetur voluptatum porro libero consequatur et. Vel autem doloremque mollitia nostrum. Voluptatibus cumque aut excepturi omnis iste. Est esse eos magni vel sint facilis temporibus. Eos molestias perferendis et dolorem ut quis est. Rerum omnis quis distinctio qui. Qui placeat eius officia voluptatum velit iure maiores. Provident et ut accusantium cum est qui cupiditate. Commodi qui nihil quaerat. Dolor consequatur tempora saepe ut quo. Pariatur est iure reiciendis non voluptatem nobis. Delectus quos et magnam quas laudantium. Voluptatem perspiciatis magni dignissimos quo et id. Eaque est possimus reprehenderit iure. Et facilis et velit ullam ut quis officia ex. Quo quia occaecati facere vel officiis tempora. Non aut voluptatem ea tempore. Quaerat tempore assumenda omnis qui harum. Omnis voluptate minus rerum facere numquam cumque architecto accusantium. Odio aperiam omnis rerum impedit dolorum libero fuga.', NULL, NULL),
(20, 'Bernadine Collier', 'nicolette.heller@johns.com', 'Dr. Caitlyn Shields', 'Nihil et voluptatem ut qui nobis architecto aspernatur eaque. Molestiae qui sit autem fugiat officiis quasi unde voluptatibus. Tempora blanditiis voluptate recusandae iure qui quaerat sint fugit. Nihil quibusdam saepe et consequuntur occaecati tempore. Nihil consequatur facere dolor fugiat rerum voluptatibus eligendi aperiam. Delectus placeat ratione consequuntur amet explicabo voluptates eligendi. Molestias et animi velit eveniet maxime vel. Deserunt quaerat quis vel nihil aperiam dicta. Et ipsum laborum provident debitis consequatur nulla molestiae. Hic minus recusandae provident quisquam. Impedit eveniet cum voluptatibus deserunt iste. Sed necessitatibus quod necessitatibus amet molestias beatae quibusdam. Beatae aut dolor ducimus. Sit similique quia nemo consequuntur qui quia ab. Vel delectus sed accusamus cum dolorem eum.', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_user_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_26_140720_create_news_table', 1),
(4, '2022_12_26_140732_create_category_table', 1),
(5, '2022_12_26_140749_create_mail_table', 1),
(6, '2022_12_26_141649_create_category_news_table', 1),
(7, '2022_12_26_190222_create_subscriber_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(275) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Coralie Grimes', 'coralie-grimes', '<p>Dicta temporibus dolorum quia nisi quo rerum enim. Nesciunt ad et repellat iusto similique enim. Quia esse dicta numquam est et consequuntur libero. Error deleniti quis aperiam dolor. Ipsam iste ullam laborum et similique delectus soluta. Consequuntur facere nesciunt rerum et assumenda ut facere. Rerum est nostrum rerum illum consequatur nesciunt. Iste natus neque sint voluptas explicabo quia at. Facilis dolorum nemo unde doloremque voluptas voluptatem rerum. Laudantium est consequatur amet. At quia minima beatae eos nulla veritatis esse voluptatem. Pariatur optio assumenda soluta amet non. Dolor odit dicta et a pariatur aliquid ea. Illo molestias recusandae et facilis ullam sunt. Aut consequuntur architecto ut cumque perferendis dolorum. Qui et perspiciatis itaque suscipit qui exercitationem et. Natus deserunt ex et aut quam.</p>', '1-1672163547.jpg', '2022-12-13 18:09:58', '2022-12-27 14:52:27'),
(2, 'Telly Grimes', 'telly-grimes', '<p>Ipsa in et quae est. Quaerat non illo ut quasi aperiam officiis. Distinctio dignissimos quos cupiditate eum aspernatur amet voluptatem et. Sequi qui cupiditate at aliquam ex facilis. Repellendus vel sit quis est. Sint ullam iure sint modi vel eligendi ea. Rerum modi non perferendis nam. Perferendis aliquam est dicta ea magni. Nobis eos qui praesentium ut ipsum illo nihil. Est velit nihil accusamus dolores. Sequi et quia qui. Consequatur eius est quia fugiat eum mollitia. A natus dolor explicabo non ut amet minus. Non dolores et nemo. Consequuntur ipsa nobis labore. Quidem pariatur voluptas voluptatem in maxime beatae perspiciatis. Nostrum dolore nesciunt fugit et et quos. Quibusdam perspiciatis eius odit asperiores in natus tempora.</p>', '2-1672163537.jpg', '2022-12-14 18:10:16', '2022-12-27 14:52:17'),
(3, 'Mrs. Aliza Feeney', 'mrs-aliza-feeney', '<p>Laborum et voluptatibus quis iste explicabo. Rem totam odit dolores eos voluptatum ea. A sed nihil enim fuga quasi. Harum labore aut nobis atque cum. Eveniet laborum quia odit incidunt. Atque explicabo tempore ipsum perferendis molestias. Et qui enim consequatur consequuntur suscipit. Illum amet natus temporibus adipisci consequatur minus aut at. Voluptatem occaecati voluptates id dolore maiores laboriosam eos corporis. Et cupiditate vitae commodi debitis. Explicabo sint inventore molestias ea voluptatem. Sunt odit voluptas consequatur perspiciatis eos magni. Nihil officia nihil sit amet voluptas. Minima neque iure ipsa adipisci. Dignissimos omnis et vero. Hic quos enim cupiditate sint. Eius incidunt id aut in temporibus qui sequi. Voluptas et qui est et. Laudantium assumenda architecto sit. Velit repellat vero repellat perspiciatis. Est at incidunt quia quisquam eum dolorem. Sed nesciunt harum quia vitae soluta.</p>', '3-1672163524.jpg', '2022-11-28 21:00:00', '2022-12-27 14:52:04'),
(4, 'Rahul Boyle', 'rahul-boyle', '<p>Sequi est sed at illo numquam doloremque nihil. Autem aut adipisci similique voluptate quia. Id facere sit reiciendis. Sequi occaecati iure in omnis ut. Maiores nostrum dolore alias quibusdam. Sit aperiam molestiae maxime possimus. Quos eum rerum molestiae aut recusandae. Adipisci quia non nemo consectetur labore. Aut qui cum voluptatibus. Qui quidem accusantium dolor tenetur perspiciatis. Qui corrupti qui ad dolore aliquam et ut aliquid. Inventore fugiat eum repellendus porro magnam laudantium. Fugit in repellat quia hic perferendis. Repellat amet accusantium laborum id beatae minus itaque adipisci. Itaque rerum officia aut. Quidem porro expedita similique blanditiis iusto tenetur autem. Quo qui dolorem maxime nemo. Et error hic dolorem sed magnam veniam doloribus.</p>', '4-1672163504.jpg', '2022-01-08 18:10:22', '2022-12-27 14:51:44'),
(5, 'Prof. Arielle Hahn DVM', 'prof-arielle-hahn-dvm', '<p>Magni unde aut possimus atque qui. Et beatae quam quia. Unde doloremque minima consequatur. At occaecati unde dolores cupiditate. Non ut labore sit incidunt. Quas unde qui nulla quaerat. Non sit blanditiis delectus id nisi natus. Sed accusamus minus voluptates aut delectus. Voluptas inventore accusantium commodi debitis voluptatem. Quos saepe quia consequuntur recusandae. Consectetur ut est laudantium optio a qui et. Voluptate voluptatibus possimus consectetur dolores et consectetur et. Consectetur dolore voluptas quos voluptatem sequi. Nam est nam delectus numquam esse quia. Impedit delectus similique et sit. Autem et maxime nisi. Numquam asperiores quaerat iste et ad. Enim consequatur autem sit. Omnis voluptatum magnam minima sunt cupiditate est molestiae. Quod quia quae vero nostrum rem veritatis.</p>', '5-1672163460.jpg', '2022-01-10 21:00:00', '2022-12-27 14:51:00'),
(6, 'Elenora Mueller', 'elenora-mueller', '<p>Accusamus in molestiae sint omnis aspernatur tempore doloribus. Nobis ipsum laborum ad velit. Et repellendus vel mollitia nihil voluptas cupiditate molestiae autem. Eum rerum inventore est aliquid. Dignissimos sed et soluta praesentium non quasi non. Voluptas quod magni quia deserunt asperiores. Voluptas nemo labore eos sapiente sed aliquid. Id nobis repellat voluptates fugit. Facere consequuntur corporis doloremque et harum. Hic enim excepturi quis animi. Possimus pariatur quam qui facilis sit. Voluptatum quasi perspiciatis enim quia. Ab culpa officiis ut nihil laudantium. Fuga laboriosam non odit aliquam. Excepturi hic cumque et esse sunt facilis inventore. Natus repudiandae ut qui velit quia. Vitae ullam atque quia aut assumenda soluta. Quo maxime impedit sit. Illum assumenda aut quod dolore a.</p>', '6-1672163448.jpg', '2022-01-23 18:10:37', '2022-12-27 14:50:48'),
(7, 'Prof. Brennon Rippin', 'prof-brennon-rippin', '<p>Porro molestiae aut consequatur consectetur ab nam perferendis. Omnis natus perspiciatis eius ratione ut esse. Quaerat minima natus suscipit saepe excepturi aliquid sapiente rem. Fugit adipisci nobis labore ad maiores quod. Cupiditate sequi ut ullam dignissimos. Nulla nulla et facere sit neque possimus. At assumenda officia iusto id. Voluptatem cum neque et in ratione cupiditate sed. Enim impedit velit velit sed. Est sunt ullam omnis ducimus doloremque saepe. Ut illo adipisci ex animi. Officiis et saepe perspiciatis culpa. Voluptatem quia qui repellendus maiores unde placeat. Quasi est deserunt amet. Ad rerum praesentium sequi sed est rerum placeat. Sit consequatur maxime commodi repellat. Necessitatibus modi repudiandae veniam iure. Sapiente praesentium aspernatur odio fugit accusamus facere eos omnis. Architecto commodi sit non magni quis debitis qui. Sint qui eveniet possimus nihil tempora pariatur rerum. Hic sit magni delectus debitis nihil quod impedit. Occaecati amet sequi est animi quam consequatur unde. Consequuntur et itaque rerum illum rerum numquam molestiae. Cupiditate eum est dolores voluptas. Iure labore cumque dolores odio voluptatem. Aut labore animi culpa sed labore aut nam. Debitis et ut qui aut voluptas earum recusandae omnis. Nisi harum aut harum recusandae soluta neque omnis.</p>', '7-1672163436.jpg', '2022-01-03 21:00:00', '2022-12-27 14:50:36'),
(8, 'Miss Karlee Swift IV', 'miss-karlee-swift-iv', '<p>Fugit quaerat ducimus sed sit necessitatibus. Molestiae autem autem cumque voluptate. Ratione illum placeat vel et nisi aut rem. Magnam suscipit tenetur eligendi quo quo in adipisci. Ipsa quo ut distinctio dolorum eveniet omnis adipisci eum. Voluptatibus tempora debitis illum. Repellendus qui molestias dolorem qui harum deserunt. Et qui commodi et voluptate nihil quam. Exercitationem possimus eos rerum exercitationem voluptatem quia quo. Rerum laborum soluta cum excepturi. Labore temporibus et ratione. Dolorem molestiae praesentium eos. Optio dicta ut rerum tenetur. Ut explicabo maiores ullam perferendis. Molestiae ex explicabo qui eaque ut quam a. Rerum quaerat molestiae quo ea possimus voluptate commodi. Nostrum est sequi ut vitae exercitationem dolor. Neque in vitae cumque optio. Vel dolorem quae quia est sint dolores. Officia ducimus vitae nihil rerum.</p>', '8-1672163427.jpg', '2022-01-23 18:10:49', '2022-12-27 14:50:27'),
(9, 'Ibrahim Schroeder', 'ibrahim-schroeder', '<p>Similique reprehenderit nihil nam. Quae deleniti pariatur quibusdam ab molestiae. Iste itaque beatae ducimus perspiciatis iusto est. Omnis dolorem cupiditate nam repellat sequi totam sunt cum. Sit at consequuntur quibusdam reprehenderit labore quia consequatur. Et quia animi sequi necessitatibus rem et amet. Accusantium sint esse saepe qui quia ut perferendis. Rem cumque veritatis voluptatem aut quod. Repellat ea velit cumque molestiae numquam a quia ex. Assumenda aut atque consequatur non distinctio rem natus. Perspiciatis eius suscipit cupiditate aut architecto blanditiis libero. Qui eum assumenda pariatur id. Blanditiis provident explicabo qui molestias. Ipsam velit repellat velit. Adipisci sed ut illum itaque. Voluptas id maxime voluptatem.</p>', '9-1672163417.png', '2021-01-09 18:10:59', '2022-12-27 14:50:17'),
(10, 'Gretchen Bogan', 'gretchen-bogan', '<p>Tempore natus vel aut repellat ipsa. Ut exercitationem occaecati et nihil tenetur maxime. Ut ex debitis cum quos. Rerum ipsum et culpa eos consequatur ducimus quas itaque. Odit sint aut quas non. Aut sapiente iusto neque enim non deserunt. Ad occaecati qui et itaque beatae. Accusantium eos non eum a fugiat. Saepe enim aut quaerat sed ipsam. Qui dolor veniam omnis odit. Dignissimos esse aut nesciunt non ad. Qui eum atque similique. Sit architecto non tempore odit. Eum error sint eaque dolores. Error aut ea dolorem nam dicta iusto perferendis.</p>', '10-1672163408.jpg', '2022-01-09 21:00:00', '2022-12-27 14:50:08'),
(11, 'Brielle Crooks', 'brielle-crooks', '<p>Quo rem est non velit delectus nobis. Assumenda nemo est id rerum qui. Alias quia enim qui corrupti. Et rerum consequuntur ut asperiores sunt quaerat est. Illum aut modi in laboriosam. Corrupti rerum et accusamus neque. Architecto sed vel ad eveniet. Alias nulla aspernatur commodi cum saepe possimus. Nihil aliquam esse error mollitia. Qui quia quidem minima non exercitationem sint id. Officiis fugiat et officia facere omnis aperiam. Est voluptate velit illum dolores dicta. Voluptas est distinctio eos cumque quas consequatur. Quo deserunt est error fugit ut maiores maiores. Dolor rerum consequuntur eius molestiae perferendis eligendi. Magni voluptatem impedit neque ad dolor nisi. Magni sunt quia recusandae autem adipisci eum sequi vel. Similique occaecati alias odio harum debitis. Fugit iste pariatur soluta dolor. Nostrum tempora corrupti sit est adipisci cumque asperiores. Perspiciatis qui atque asperiores rerum quaerat consequatur ratione. Aliquam in velit optio ratione. Sit iure consequuntur doloremque maiores neque fugiat enim. Id est enim molestiae et. Minima vitae sunt ea nobis. Perspiciatis nisi porro dolorum voluptatem qui omnis magni dolorum.</p>', '11-1672163399.jpg', '2021-01-11 21:00:00', '2022-12-27 14:49:59'),
(12, 'Kameron Prohaska', 'kameron-prohaska', '<p>Pariatur mollitia et rem eius ducimus tempore. Sapiente illum esse velit. Aliquid ut sed sit et est aut ut. Asperiores dolor occaecati quasi rem aut quod. Modi nemo amet hic tenetur praesentium molestiae. Unde totam et enim aut reprehenderit nihil. Unde voluptatem voluptatem sequi accusantium molestiae totam quia. Et tempore eveniet non nobis. Est blanditiis itaque quos quaerat vel est maxime. Aut aliquam quaerat nulla ipsum eos et dolores nostrum. Nobis quo voluptatem cumque qui dolorum. Eos rerum dolor explicabo perspiciatis laudantium provident debitis quia. Et quia assumenda similique iste. Sit perferendis provident nisi rerum omnis aspernatur eaque. In error non accusamus ipsum qui aut. Culpa at atque explicabo modi molestias et. Exercitationem est enim omnis omnis sed eius. Nulla sunt quidem nostrum rerum quis. Ab cumque est praesentium necessitatibus excepturi deleniti velit. Rerum earum laborum sapiente provident consequatur occaecati. Ut alias et quisquam nam commodi. Nihil ut asperiores voluptatem voluptatem ab distinctio molestias itaque. Consequuntur vel et ab dolorem deleniti eaque magnam. Dolor fugit nostrum suscipit labore consequatur officiis. Accusamus quia praesentium sed enim.</p>', '12-1672163389.jpg', '2020-01-09 18:11:14', '2022-12-27 14:49:49'),
(13, 'Avery Schmitt V', 'avery-schmitt-v', '<p>Quas ullam molestiae eum voluptas. Unde rerum aut praesentium dolor. Dolor nemo et corrupti occaecati. Enim exercitationem quos quaerat est atque voluptas eum. Voluptas optio velit explicabo culpa et. At quod ut expedita accusantium ut cupiditate aliquid beatae. Autem quod consequuntur labore. Aut cupiditate nihil hic et autem dolore dignissimos. Aperiam sit aliquam et et libero ea iste. Soluta dolorem labore omnis cupiditate dolores officia voluptatum. Deserunt praesentium numquam blanditiis deleniti. Et maxime similique sit. Voluptatem rerum sed vitae ea et pariatur aspernatur. Quasi accusantium quia libero et. Magni nesciunt a neque nemo totam cupiditate voluptatem.</p>', '13-1672163372.jpg', '2020-01-28 21:00:00', '2022-12-27 14:49:32'),
(14, 'Glennie Bergnaum', 'glennie-bergnaum', '<p>Exercitationem qui quia iure dignissimos. Tempore possimus non aut excepturi ipsum odit. Ipsa amet beatae sint aperiam illum quaerat delectus. Necessitatibus et earum aliquam eum et numquam. Reiciendis dolor consequatur eos modi saepe amet tempora. Voluptatem qui dolorum numquam est aut assumenda rerum. Dolores magni labore velit sunt. Voluptatem est et voluptas dolor. Deserunt quia ratione dolorem dolorum praesentium. Omnis reprehenderit eos nulla quis. Natus aut est et officia et. Architecto maxime earum voluptatem non ea. Nostrum facere ut fuga cum quidem. Eos tempore eveniet maxime ut beatae. At cupiditate dolores voluptatem est sed sunt. Et aspernatur id omnis distinctio maxime expedita praesentium. Rem corporis in in sequi. Molestias tempore voluptate consectetur quis voluptatem blanditiis.</p>', '14-1672163361.jpg', '2022-01-23 18:11:23', '2022-12-27 14:49:21'),
(15, 'Ayana Schumm', 'ayana-schumm', '<p>Quidem et accusantium iure a est at praesentium. Ut dolorem alias id magni aut nisi. Necessitatibus temporibus sunt neque error ullam quo. Rerum reiciendis eum vitae. Alias dolorum pariatur possimus est expedita dignissimos quasi. Ea qui sit cumque. Delectus alias corrupti ab possimus dolores praesentium quo voluptas. Eum corrupti non tempore maxime fugiat veniam. Hic est iste qui voluptates et vero. Necessitatibus ut qui reprehenderit iusto sunt. Iste in commodi molestiae quos. Inventore blanditiis possimus voluptatem saepe. Quos quae velit facilis aspernatur provident. Molestiae quia et qui et. Architecto sunt sed consequatur consequatur facilis.</p>', '15-1672163349.jpg', '2022-01-18 21:00:00', '2022-12-27 14:49:09'),
(16, 'Annamarie Moore IV', 'annamarie-moore-iv', '<p>Ut voluptatem modi magnam ratione. Ratione voluptatem provident nihil voluptas. Nemo consequuntur accusantium qui repudiandae alias quam quasi. In voluptas repudiandae praesentium excepturi. Impedit officiis qui exercitationem at qui. Similique fugit voluptas voluptatum animi ea. Libero laudantium quo qui fugit sit perferendis. Sit quia dolores velit distinctio doloremque. Sunt ut illo atque placeat quod sapiente impedit. Ut vero praesentium quod. Praesentium perspiciatis et ullam quod architecto exercitationem ut molestiae. Laudantium sit amet in. Nesciunt nostrum facilis hic voluptatum et. Deserunt iure consequatur veritatis laborum qui iure non. Pariatur nobis dolore sunt et. Repellat officia velit nam aspernatur eaque non velit maxime. Neque explicabo ea repellendus consectetur voluptas.</p>', '16-1672163332.jpg', '2022-01-17 18:11:33', '2022-12-27 14:48:52'),
(17, 'Aleen Conn', 'aleen-conn', '<p>Vitae ea optio non quisquam asperiores illum. Mollitia voluptas praesentium quia ut eligendi repellat omnis culpa. Atque nostrum ipsa itaque nihil et quibusdam. Est tenetur blanditiis sit est aut perspiciatis vel voluptas. Ut voluptatum fugiat consequuntur fugiat. Sed voluptatem vitae ut voluptas quasi vel. Consequatur molestias possimus et esse totam eius reprehenderit. Et ex consequatur tempore eum autem consequuntur veritatis. Vero et quod ea recusandae. Odio autem nesciunt quia eos excepturi expedita provident modi. Cum repudiandae eligendi molestias id exercitationem illum. Consequuntur animi eligendi quia ut vitae sit eum a. Esse nisi repellat vero. Voluptatem aut repudiandae rerum et numquam et labore. Amet ad magnam beatae. Error aliquid qui sint inventore explicabo vero. Ut ratione dolores eaque quisquam quod at. Corporis voluptatem quis cum eligendi porro consequuntur. Repellat ut aperiam et doloremque aut itaque sapiente. Neque ratione pariatur dolorem nobis quia sed. Sit quidem rerum quisquam iure sequi velit. Et perferendis totam illo sed.</p>', '17-1672163318.jpg', '2022-01-10 21:00:00', '2022-12-27 14:48:38'),
(18, 'Judy Block', 'judy-block', '<p>Sapiente at velit et veritatis incidunt. Repellat odio eius voluptatem veritatis. Animi at quam repudiandae rem tempora. Similique saepe ea quia tempora reprehenderit. Beatae ab ab accusantium quo nam non officia. Quidem quo repellendus numquam est dolorem. Quo eos quisquam aut soluta et magni. Vitae inventore voluptas illo. Ducimus ipsam id recusandae amet facilis vero rem. Illum nobis est ut quia nobis mollitia. Illum non dolor recusandae quisquam sunt consequuntur. Officia nihil amet quia repudiandae. Corrupti eligendi ex quo dolores. Libero earum voluptates at nostrum pariatur non. Nulla eaque fugiat doloribus quod dolores. Sapiente consequatur dolorum libero est provident. Sit ut hic numquam sint dolorum.</p>', '18-1672163307.jpg', '2022-01-23 18:11:48', '2022-12-27 14:48:27'),
(19, 'Jaron Brekke IV', 'jaron-brekke-iv', '<p>Velit aut velit recusandae maxime temporibus ab saepe. Blanditiis dolore repellendus tenetur dicta accusantium adipisci ipsam. Eveniet amet molestias ducimus sed. Voluptatem aut aspernatur commodi omnis. Eum doloribus et assumenda rerum molestias. Et voluptates rem eos sint nihil deserunt beatae. Non architecto numquam consequatur et et sit. Tenetur accusantium nostrum quia corporis. Voluptatem odio in aut tempora rem culpa. Dolores odit repellat id. Sunt consectetur fuga laboriosam in est quis quaerat. Eaque ipsam et nostrum accusantium ratione. Ullam optio dolorum cum. Veritatis optio quibusdam qui vel necessitatibus facilis quos. Aliquam harum quisquam odio sit earum vero. Corporis quia dolorum quisquam blanditiis. Dignissimos modi qui sint corporis quia.</p>', '19-1672163291.jpg', '2022-01-30 21:00:00', '2022-12-27 14:48:11'),
(20, 'Raquel Altenwerth', 'raquel-altenwerth', '<p>Et qui explicabo dolor nobis perferendis. In possimus eius maiores facere nihil assumenda ducimus. Unde qui illo et quis iusto quia deserunt. Minus ab autem laboriosam veritatis delectus quos ratione nesciunt. Rerum quis omnis quam magni quo hic molestiae. Non est ullam corporis dolorem sunt corrupti. Tempore perspiciatis ratione dicta suscipit perferendis ea. Quis aut omnis aliquid aut sit. Atque adipisci sed occaecati magni molestiae nihil nesciunt. Eum quia aut voluptatem id. Modi ullam sit est iste non est. Dolores vitae amet doloribus distinctio labore facilis aspernatur. Aut quis eveniet et aut.</p>', '20-1672163273.jpg', '2023-01-30 18:11:57', '2022-12-27 14:47:53'),
(21, 'Prof. Jared Wiegand Sr.', 'prof-jared-wiegand-sr', '<p>Voluptatem excepturi officiis necessitatibus nisi. Ea voluptatem quasi magnam esse debitis doloremque. Quas in dolor sit odio qui non similique illo. Expedita dolorum totam asperiores autem recusandae alias. Esse amet est molestias eius. Aut ut culpa enim ipsa ea minima. Consequatur aut saepe non natus cum itaque odit. Laudantium vel ut aut magni. Et reprehenderit expedita maxime modi quis voluptas. Pariatur laborum ea delectus voluptas nesciunt. Consequatur explicabo reiciendis eum quaerat corrupti aliquid iure. Placeat corporis sequi eos et fuga adipisci ea. Dicta placeat illo corporis quasi amet. Ea dolorem sequi cumque nobis rem et. Quis in unde autem facilis et eaque debitis. Voluptas magni nemo maiores ducimus sint natus. Quia dolores rerum autem tempora. Est est eaque sunt eum voluptas occaecati in. Ut ipsum dignissimos assumenda facere hic. Quia vitae consequatur unde ea est quae blanditiis doloribus. Sint provident ab inventore alias. Aut consequatur fugiat eos. Quaerat cumque ab est facilis officiis sequi saepe. Tenetur doloribus ut repudiandae et. Cum enim voluptatem esse ut ut. Commodi possimus odio enim aut quisquam mollitia. Quos ab ea fugit voluptas. Natus cupiditate est assumenda repellat aspernatur repellat ut autem. Est occaecati quia est et mollitia.</p>', '21-1672163242.jpg', '2022-01-16 21:00:00', '2022-12-27 14:47:22'),
(22, 'Clementina Marquardt', 'clementina-marquardt', '<p>Explicabo omnis est non nostrum. Veniam numquam ex qui autem. Rem aperiam quas voluptatibus nobis doloribus. Enim reiciendis veritatis alias. Ut est et corporis voluptatum quod laborum ut. Et nulla hic soluta dignissimos facere tempora. Necessitatibus repellendus aut iste et aut est quos corrupti. Blanditiis sint non qui aut fugit voluptas. Omnis accusamus molestiae temporibus velit in. Numquam nam dignissimos tempore in dolor blanditiis aperiam et. Illum minus voluptatum ad expedita. Vel reprehenderit porro ipsum omnis illo ea sit est. Accusamus exercitationem necessitatibus accusamus mollitia consequuntur optio eligendi. Ab quia in architecto error harum ducimus. Ducimus nobis quis animi nam sint qui. Officiis iste accusantium qui velit. Labore esse nemo ut quis qui. Est reprehenderit dolor quod eum animi et fugit. Et odio est magni eius.</p>', '22-1672163230.webp', '2022-01-22 18:12:07', '2022-12-27 14:47:10'),
(23, 'Francesco McCullough', 'francesco-mccullough', '<p>Nihil at ut accusantium temporibus nesciunt. Voluptatem sequi odit sunt voluptas quis ut laudantium. Tenetur non qui nisi delectus doloremque blanditiis. Qui dolores et fugiat sit. Facere et quia alias error cupiditate quibusdam. Quae nesciunt rerum in ea. Rerum quibusdam et natus. Perferendis est pariatur est totam. Sapiente quasi minus iure temporibus ea est. Aut magni et soluta est. Consequatur hic reprehenderit rerum tempore aperiam pariatur quas. Voluptatibus perspiciatis numquam eum quaerat eos explicabo. Nostrum voluptatum minus doloribus et dolorem. Qui voluptatum modi natus et sequi suscipit. Eius quaerat ipsa ut ipsum architecto possimus. Odio aliquid ex cum exercitationem ipsam. At sint quo reprehenderit quia qui sit. Ut modi ratione culpa incidunt aut a aspernatur. Vero et voluptas sed architecto et. Nobis accusamus nostrum nihil aut.</p>', '23-1672163218.png', '2022-01-24 21:00:00', '2022-12-27 14:46:58'),
(24, 'Brianne Conn', 'brianne-conn', '<p>Deleniti aspernatur aspernatur incidunt doloremque odio veritatis rerum. Et voluptatum quibusdam libero aperiam numquam sed. Eligendi maiores id hic. Impedit temporibus assumenda at. Qui quae laborum asperiores officiis. A assumenda ipsa dicta quidem optio reprehenderit. Quia voluptas id unde non vero vero. Animi ipsum earum amet officia quibusdam nemo possimus. Aut et explicabo quia ad eum. Voluptate velit rerum sint. Inventore consectetur recusandae ut dolores. Accusamus illum maiores eveniet sunt aliquid dolorem inventore. Et quia molestiae dolorum. Est aspernatur eius reiciendis consequatur voluptatibus.</p>', '24-1672163205.webp', '2022-01-21 18:12:15', '2022-12-27 14:46:45'),
(25, 'Werner Dietrich', 'werner-dietrich', '<p>Repellat vitae voluptatem iure voluptates aut soluta molestias. Dolore et placeat velit modi. Iusto dignissimos incidunt iste expedita et. Et quibusdam neque dolor odit autem consequatur. Quibusdam repellat animi laboriosam ratione hic voluptas. Culpa fugiat dolores aut quia. Eos corporis sunt enim ut sunt nihil consectetur. Vel nostrum numquam beatae itaque ut magni. Dolores placeat sunt voluptas delectus aut placeat dolore. Est eos saepe natus temporibus et necessitatibus. Quisquam ullam fugit neque. Ipsum recusandae iste beatae sunt. Doloremque aliquid voluptas non ducimus harum. Voluptatem fugit enim quasi quo perferendis nisi. Soluta ut soluta aliquam quae. Porro quia ipsum expedita est exercitationem. Aut fugiat sed molestiae nihil ducimus.</p>', '25-1672163191.webp', '2022-01-24 21:00:00', '2022-12-27 14:46:31'),
(26, 'Kelvin Pollich', 'kelvin-pollich', '<p>Voluptatibus reiciendis necessitatibus aut ut. Vero sint qui hic maxime sint. Ipsam sint recusandae temporibus totam sapiente tenetur commodi. Est molestiae ratione aut dicta. Dignissimos et distinctio neque rerum saepe quasi doloribus. Et molestias sunt ex ullam ea. Accusantium ipsum id labore excepturi illum esse. Vel voluptatibus nihil sint qui. Quia veritatis consequatur incidunt ex sunt voluptatibus quo. Totam est sint et maxime qui tempore praesentium. A quibusdam iste magnam occaecati assumenda. Dolorem dolorem quae expedita est sit sed. Numquam dolores facilis est id ipsum quasi. Quia nostrum ut et similique. Reprehenderit aut nihil iure quam rerum. Nisi labore rerum blanditiis sit. Ad commodi quidem fuga assumenda ut sint nemo maiores. Vero nemo ex atque cumque. Eius quos eligendi consequatur provident asperiores. Eligendi optio expedita ex.</p>', '26-1672163180.jpg', '2022-01-16 21:00:00', '2022-12-27 14:46:20'),
(27, 'Dr. Napoleon Roberts', 'dr-napoleon-roberts', '<p>Enim velit quidem officiis qui cum quia minus. Voluptatem sit aut eos. Sequi aut sed enim omnis sunt aut. Esse rerum harum occaecati expedita rem. Accusantium in velit molestiae nihil eum. Aut reprehenderit modi ipsa est. Harum delectus fuga eius iste natus id perspiciatis. Ut vitae similique nisi aut culpa doloribus. Dolores voluptatum inventore quam est nesciunt sunt molestias. Facere cumque tempore non ut ipsa nemo. Ex et et sed fugiat. Quisquam enim eum ea harum esse. Consequatur aut soluta facilis rem provident ut in. Et et eos sit commodi laboriosam. Dolores esse vel quae in aspernatur autem necessitatibus. Qui eligendi voluptatem minus rem. Voluptatem recusandae eos ea aut. Neque dolor laborum aut voluptatem repellat officiis enim. Tempore rerum in rerum recusandae omnis iste. Iure eius dolorem dolor qui dolor rem perspiciatis. Provident et eum sunt consequatur voluptate. Sit minus blanditiis laboriosam nihil. Est ea eum consequuntur sit non. Nisi quo velit ad enim. Et alias quia aut voluptas adipisci. Nesciunt rerum sed porro. Reiciendis odit sed ut earum necessitatibus porro.</p>', '27-1672162734.jpg', '2022-01-22 18:12:24', '2022-12-27 14:38:54'),
(28, 'Cheyenne DuBuque', 'cheyenne-dubuque', '<p>Sunt voluptas iure facere quis ipsum incidunt. Sint eum officiis iure et. Dolores velit hic recusandae doloremque recusandae ipsum sunt. Quis ullam mollitia facere mollitia vero. Aliquid debitis eligendi iusto et libero corrupti. Illum eligendi porro et nemo fuga. Dignissimos voluptas voluptatem eos temporibus officia ullam. Labore accusantium dignissimos necessitatibus nemo velit laborum quia. Provident explicabo exercitationem mollitia nemo enim. Repudiandae molestiae sequi optio inventore iste dolor voluptas. Asperiores quia laboriosam libero reprehenderit ut sed. Molestiae quos consequatur vel reprehenderit qui. Repellat dolor sint consectetur reprehenderit impedit est. Voluptas eos qui voluptatum qui enim id qui. Consequuntur et qui optio qui qui. Perspiciatis harum cum officia eos veniam cupiditate vel. Dolor nemo at veniam nostrum quae. Necessitatibus sed excepturi ut est iure quam. Molestias soluta aspernatur nostrum consectetur repellendus ut nulla et. Architecto natus vel unde est amet. Et ut incidunt doloribus quos eveniet a. Aperiam in ratione atque necessitatibus voluptatum laboriosam. Nam aut sit explicabo qui totam qui. Aut doloremque distinctio ad rerum. Aut rerum quod aut ut accusantium praesentium quidem. Est qui aut qui sequi minima ad.</p>', '28-1672162723.webp', '2022-01-26 18:12:33', '2022-12-27 14:38:43'),
(29, 'Adele Harber', 'adele-harber', '<p>Magni dolorem doloremque ducimus sed doloribus provident occaecati. Ipsum quam impedit aspernatur voluptates rem est. Minus aperiam consequuntur officiis qui ipsa voluptas. Delectus facere officia debitis consequatur quia. Iste sint reiciendis possimus reprehenderit voluptas. Voluptatibus culpa harum corrupti facere soluta. Dignissimos voluptas delectus aliquam sequi quasi qui. Eum ut aspernatur aspernatur. Fugit molestiae et accusamus deserunt. Doloribus voluptatem aut sit earum ut. Molestias aut est laboriosam maxime amet est ut molestiae. Et officia fuga quia expedita omnis quisquam porro. Molestias est quis aut facilis aut.</p>', '29-1672162713.jpg', '2022-01-09 21:00:00', '2022-12-27 14:38:33'),
(30, 'Aaron Heathcote', 'aaron-heathcote', '<p>Qui aliquam consequuntur ipsa eos saepe. Asperiores aut sit nam excepturi occaecati placeat neque maiores. Rerum soluta aut repellat qui quas aut. Labore quisquam beatae ut quo eos. Dolor maxime aut est nulla quos architecto repellendus vitae. Impedit sint dolorem est consectetur. Esse harum voluptatum voluptatem cupiditate voluptatum. Facilis voluptatem nemo animi ipsam cupiditate rerum porro. Veniam quisquam aut ut neque. Dignissimos enim et ea nihil. Sint iure neque illo illum error deleniti. Tempora accusantium voluptate eum qui eos minus hic. Quis ea laborum quo voluptatem. Qui ut ea inventore debitis enim. Vel provident eius velit. Vero fugit voluptatibus et placeat veniam. Doloribus qui odit delectus velit. Quaerat atque commodi ab fugiat. Rerum ipsum nam et. Distinctio voluptatibus qui aut sapiente architecto sed occaecati. Eligendi maiores temporibus veritatis dignissimos error aut consequatur. Dicta sed consectetur ipsum architecto illum labore.</p>', '30-1672162702.jpg', '2022-01-15 18:12:45', '2022-12-27 14:38:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'abby.considine@yahoo.com'),
(25, 'aimee42@gibson.com'),
(7, 'bahringer.lempi@gmail.com'),
(6, 'brendon75@stiedemann.com'),
(28, 'chaim38@hayes.com'),
(20, 'emie.cronin@lind.info'),
(16, 'gabriella.harvey@mertz.com'),
(14, 'genoveva.wisoky@gmail.com'),
(24, 'gleichner.audrey@simonis.net'),
(17, 'glenna57@gmail.com'),
(4, 'hermann.jeanette@heathcote.com'),
(5, 'jacobson.phoebe@green.com'),
(13, 'jluettgen@yahoo.com'),
(29, 'kaitlin84@swift.info'),
(22, 'kschowalter@hotmail.com'),
(3, 'laron73@schimmel.info'),
(21, 'lauryn.ondricka@gmail.com'),
(9, 'legros.letha@feil.com'),
(18, 'lhand@gmail.com'),
(10, 'marianne49@hotmail.com'),
(2, 'nicolas.rosendo@yahoo.com'),
(11, 'ojenkins@borer.com'),
(27, 'pietro50@hotmail.com'),
(30, 'qledner@stracke.com'),
(12, 'raoul16@hickle.com'),
(23, 'schulist.felicia@becker.com'),
(15, 'senger.lori@nienow.net'),
(19, 'senger.stanton@jacobi.info'),
(8, 'torp.libbie@yahoo.com'),
(26, 'wrempel@connelly.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `name_surname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isit_active` tinyint(1) NOT NULL DEFAULT '0',
  `isit_executive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name_surname`, `email`, `password`, `isit_active`, `isit_executive`, `created_at`, `updated_at`) VALUES
(1, 'Cleora Bosco', 'zerdman@hessel.com', '!U^*jg}pwqO/', 1, 0, '2022-12-26 19:05:27', '2022-12-26 19:05:27'),
(2, 'Martin Harber', 'schumm.buddy@armstrong.com', 'E-=J+I6%jmc+p', 1, 0, '2022-12-26 19:05:27', '2022-12-31 20:25:51'),
(3, 'Marilyne Harris', 'aullrich@rolfson.biz', 'qy@/BaNKA{[MC<!sx)3', 1, 0, '2022-12-26 19:05:27', '2022-12-26 19:05:27'),
(4, 'Elise Boyer PhD', 'bethel90@gmail.com', 'ip>t`_|}1g5', 1, 0, '2022-12-26 19:05:27', '2022-12-31 20:26:30'),
(5, 'Prof. Ulises Cummings', 'craynor@gmail.com', '4T3ZcM$^&)V,uvT.', 1, 0, '2022-12-26 19:05:27', '2022-12-26 19:05:27'),
(6, 'Mr. Rowland Nikolaus III', 'hope80@mante.com', 'Pfa]aC7g', 1, 0, '2022-12-26 19:05:27', '2022-12-31 20:26:43'),
(7, 'Barrett Bailey', 'bella88@heaney.com', 'HF<AS$FpXqnjbS!3\'c', 1, 0, '2022-12-26 19:05:27', '2022-12-26 19:05:27'),
(8, 'Domenica Gusikowski', 'khahn@gmail.com', 'w:gXzD\'VGS]3i|`1S7TQ', 1, 0, '2022-12-26 19:05:27', '2022-12-31 20:25:59'),
(9, 'Jordyn Wiegand', 'rosario.upton@ward.org', '/[mRSTT:', 1, 0, '2022-12-26 19:05:27', '2022-12-26 19:05:27'),
(10, 'Ismael Nolan', 'dwight56@yahoo.com', ']CD?us%vPg`,+e\"0', 1, 0, '2022-12-28 23:31:36', '2022-12-31 20:24:24'),
(11, 'Aytaç İpekel', 'info@aytacipekel.com', '$2y$10$Af3jRhKUTS8KvPKuCX.iqexHm9DYXwKky35NSNMbOuRGkPxXPYr92', 1, 1, '2023-01-01 17:16:58', '2023-01-01 08:24:25'),
(12, 'Misafir', 'misafir@aytacipekel.com', '$2y$10$VNqfQ7Wfy0Pc7IVJPDXFjOTDW.4nHBiwgP5vAjvP2WXJvXm9k1SgK', 1, 0, '2022-12-31 23:30:21', '2023-01-01 08:24:37'),
(13, 'Ahmet Selim Över', 'ahmetselimover@gmail.com', '$2y$10$muSoOmxMPFc/a9oCJdmDlu7T8Ce7AygzHHUGqe76FSqcUgwrHPely', 1, 1, '2023-01-02 20:28:23', '2023-01-01 08:25:18'),
(14, 'Ramazan Bakır', 'ramazan.bakir@gmail.com', '$2y$10$ifBDmAh6DNAPFXDJsPeFxe0KxGfMsqyMHn0ygdsbwU.i0..AyHEt6', 1, 1, '2023-01-02 20:29:19', '2023-01-01 08:25:06');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_news_category_id_foreign` (`category_id`),
  ADD KEY `category_news_news_id_foreign` (`news_id`);

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
