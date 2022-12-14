-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webbaolong
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmt_product_id` int(11) NOT NULL,
  `comment_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'hiepvit','Sản phẩm rất tốt !',12,0,'2021-10-29 02:33:42','2021-11-03 09:49:54',NULL),(2,'abc','abb',12,1,'2021-10-29 02:40:14','2021-11-03 02:03:11',NULL),(3,'hiepvit','Sản phẩm rất tốt',12,0,'2021-10-29 02:58:52','2021-11-03 02:03:24',NULL),(4,'hiepvit','sản phẩm tốt !',12,1,'2021-10-29 03:10:06','2021-11-03 02:03:16',NULL),(5,'hiepvit','Sản phẩm rất tốt !',12,1,'2021-10-29 03:15:27','2021-11-03 01:46:09',NULL),(10,'Công ty TNHH Bảo Long','Cảm ơn bạn',12,0,'2021-11-03 09:48:31','2021-11-03 09:48:31',3),(11,'Công ty TNHH Bảo Long','Cảm ơn',12,0,'2021-11-03 09:49:10','2021-11-03 09:49:10',3),(12,'Công ty TNHH Bảo Long',NULL,12,0,'2021-11-03 10:04:30','2021-11-03 10:04:30',3),(13,'Công ty TNHH Bảo Long','Vote tiếp điiiiii',12,0,'2021-11-03 10:10:15','2021-11-03 10:10:15',1),(14,'Công ty TNHH Bảo Long','Chiến đê',12,0,'2021-11-03 10:11:19','2021-11-03 10:11:19',1),(15,'Công ty TNHH Bảo Long',NULL,11,0,'2021-11-03 10:23:31','2021-11-03 10:23:31',9),(16,'Công ty TNHH Bảo Long',NULL,11,0,'2021-11-03 10:25:14','2021-11-03 10:25:14',9),(17,'Công ty TNHH Bảo Long',NULL,11,0,'2021-11-03 10:25:39','2021-11-03 10:25:39',9),(18,'Công ty TNHH Bảo Long',NULL,11,0,'2021-11-03 10:26:30','2021-11-03 10:26:30',16),(19,'Công ty TNHH Bảo Long',NULL,12,0,'2021-11-03 10:29:56','2021-11-03 10:29:56',6),(20,'Công ty TNHH Bảo Long','Cảm ơn đóng góp hữu ích',11,0,'2021-11-03 10:41:02','2021-11-03 10:41:02',9),(21,'Công ty TNHH Bảo Long','Cảm ơn đóng góp hữu ích',12,0,'2021-11-03 10:41:24','2021-11-03 10:41:24',6),(22,'Công ty TNHH Bảo Long','ko cần khách sáo',12,0,'2021-11-03 10:42:18','2021-11-03 10:42:18',6);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_orders`
--

DROP TABLE IF EXISTS `customer_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_orders` (
  `orders_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`orders_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_orders`
--

LOCK TABLES `customer_orders` WRITE;
/*!40000 ALTER TABLE `customer_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_orders_admin`
--

DROP TABLE IF EXISTS `customer_orders_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_orders_admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_orders_admin`
--

LOCK TABLES `customer_orders_admin` WRITE;
/*!40000 ALTER TABLE `customer_orders_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_orders_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (2,'banner 1','http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg','1','2021-10-22 00:27:55','2021-10-22 07:09:58'),(3,'slider 2','http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20tuf%20gaming%20vg27vq%20165gz.jpg','0','2021-10-22 07:09:02','2021-10-22 07:52:32'),(4,'slider 3','http://localhost:8000/responsive_filemanager/source/3090%20banner.jpg','0','2021-10-22 07:53:52','2021-10-22 07:53:52'),(5,'slide 4','http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg','0','2021-10-22 07:54:05','2021-10-22 07:54:05');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2021_08_27_035325_create_products',1),(3,'2021_08_27_035341_create_products_categories',1),(4,'2021_08_27_035415_create_news_post',1),(5,'2021_08_27_035428_create_news_post_categories',1),(6,'2014_10_12_000000_create_users_table',2),(7,'2021_08_27_035059_create_profile_users',2),(8,'2021_08_27_040129_create_customer_orders',2),(9,'2021_08_27_040220_pages_of_web',2),(10,'2021_08_27_144710_create_customer_orders_admin',2),(11,'2021_08_28_033846_create_images',2),(12,'2021_08_28_054330_alter_table_customer_orders_admin_add_quantity',3),(13,'2021_08_29_033226_alter_table_news_post_add_column',4),(14,'2021_08_29_033509_alter_table_images_add_column',5),(15,'2021_09_07_031933_alter_table_products_add_sale_price',6),(16,'2021_09_07_032510_alter_table_products_add_url',7),(17,'2021_09_07_102112_alter_table_products_add_products_content',8),(18,'2021_09_07_151737_alter_table_products_add_cloumn_tags',9),(19,'2021_09_12_031401_alter_table_news_post_add_column_url_post',10),(20,'2021_09_15_143034_alter_table_news_post_add_column_image_post',11),(21,'2021_09_15_143104_alter_table_products_add_column_image_product',11),(22,'2021_09_15_143114_alter_table_products_add_column_image_list_product',11),(23,'2021_09_16_035818_alter_table_news_post_add_column_tags_post',12),(24,'2021_09_20_031426_alter_table_news_post_categories_add_column_url_cat',13),(25,'2014_10_12_100000_create_password_resets_table',14),(26,'2019_08_19_000000_create_failed_jobs_table',14),(27,'2021_09_28_180414_alter_table_product_categories_add_column_url_prd_cat',15),(28,'2021_10_25_162322_create_table_comments',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_post`
--

DROP TABLE IF EXISTS `news_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_news_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_post`
--

LOCK TABLES `news_post` WRITE;
/*!40000 ALTER TABLE `news_post` DISABLE KEYS */;
INSERT INTO `news_post` VALUES (6,'Cách sử dụng máy bơm',13,'<p>T&agrave;i liệu kĩ thuật&nbsp;</p>\r\n\r\n<p>&nbsp;</p>','<p><img alt=\"\" src=\"http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20tuf%20gaming%20vg27vq%20165gz.jpg\" style=\"height:200px; width:200px\" />Hướng dẫn d&ugrave;ng m&aacute;y bơm 001 mới tr&ecirc;n thị trường</p>','Đăng ngay','2021-09-20 02:57:11','2021-10-05 10:19:41','cach - su - dung - may - bom','','hướng dẫn sử dung,tài liệu,kĩ thuật'),(8,'Các sản phẩm máy bơm hot nhất trên thị trường',14,'<p>Tin b&agrave;i m&aacute;y bơm</p>','<p><strong>Ng&agrave;y nay rất nhiều m&aacute;y bơm ngon&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20tuf%20gaming%20vg27vq%20165gz_2.jpg\" style=\"height:150px; width:150px\" /></p>','Đăng ngay','2021-10-06 08:23:23','2021-10-06 08:23:23','cac - san - pham - may - bom - hot - nhat - tren - thi - truong','ma%CC%80n%20asus%20tuf%20gaming%20vg27vq%20165gz_2.jpg','tin hot,tin máy bơm,giá máy bơm'),(9,'Máy bơm và đời sống',13,'<p>M&aacute;y bơm v&agrave; đời sống</p>','<p>M&aacute;y bơm v&agrave; đời sống</p>','Đăng ngay','2021-10-06 08:24:14','2021-10-06 08:24:14','may - bom - va - doi - song','banner%20danh%20muc%201660-1660super-ti.jpg','máy bơm'),(10,'Máy bơm cao áp',12,'<p><strong>M&aacute;y bơm cao &aacute;p</strong></p>','<p>M&aacute;y bơm cao &aacute;p</p>','Chờ duyệt','2021-10-06 08:27:20','2021-10-06 08:27:20','may - bom - cao - ap','','bơm cao áp'),(11,'Máy bơm cao áp 3',14,'<p>M&aacute;y bơm cao &aacute;p 3</p>','<p>M&aacute;y bơm cao &aacute;p 3</p>','Đăng ngay','2021-10-06 08:28:36','2021-10-06 08:28:36','may - bom - cao - ap - 3','ma%CC%80n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg','bơm cao áp 3'),(12,'Máy bơm cao áp 4',12,'<p>bơm cao &aacute;p 4</p>','<p>Bơm cao &aacute;p 2</p>','Đăng ngay','2021-10-06 08:29:21','2021-10-06 08:29:21','may - bom - cao - ap - 4','ma%CC%80n%20hi%CC%80nh%20asus%20game%20vg275q%2075hz.png','bơm cao áp 4'),(13,'Máy bơm cao áp suất 5',14,'<p>M&aacute;y bơm cao &aacute;p suất 5</p>','<p>M&aacute;y bơm cao &aacute;p suất 5</p>','Chờ duyệt','2021-10-06 09:05:22','2021-10-06 09:05:22','may - bom - cao - ap - suat - 5','ma%CC%80n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg','bơm cao áp 5'),(14,'Máy bơm cao áp 6',13,'<p>M&aacute;y bơm cao &aacute;p 6</p>','<p>M&aacute;y bơm cao &aacute;p 6</p>','Đăng ngay','2021-10-06 09:06:38','2021-10-06 09:06:38','may - bom - cao - ap - 6','','bơm cao áp 6'),(15,'máy bơm cao áp 7',12,'<p>m&aacute;y bơm cao &aacute;p 7</p>','<p>m&aacute;y bơm cao &aacute;p 7</p>','Chờ duyệt','2021-10-06 09:07:18','2021-10-06 09:07:18','may - bom - cao - ap - 7','','bơm cao áp 7'),(16,'GIỚI THIỆU CÔNG TY TNHH BẢO LONG',15,'B&agrave;i viết giới thiệu về c&ocirc;ng ty TNHH Bảo Long','<br />\r\n<span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:16px;\"><span style=\"color:#27ae60;\"><strong>TỔNG QUAN:</strong></span></span><br />\r\n<span style=\"font-size:14px;\">Công ty TNHH Bảo Long được thành lập, đi vào hoạt động từ năm 1998 với ngành nghề chính là sản xuất máy bơm nước và động cơ điện các loại. Trải qua 23 năm xây dựng và trưởng thành công ty luôn ổn định sản xuất kinh doanh, đầu tư phát triển mở rộng quy mô. Sản phẩm của công ty ngày càng khẳng định được thương hiệu trên thị trường trong nước. Trong suốt bề dày lịch sử và phát triển, Công ty TNHH Bảo Long đẵ khẳng định mình là một trong những doanh nghiệp tư nhân hàng đầu tại Lạng Sơn. Với doanh thu trên 300 tỷ đồng mỗi năm, đem lại việc làm cho trên 400 lao động. Dấu ấn đầu tiên phải kể tới là: - Vào năm 2004, công ty đã áp dụng thành công và có hiệu quả hệ thống quản lý chất lượng ISO 9001: 2000 vào quản lý sản xuất. -Năm 2006 được sự tạo điều kiện của UBND tỉnh Lạng Sơn, Công ty được thuê mặt bằng tại cụm công nghiệp địa phương số 2 (huyện Cao Lộc). -Đến năm 2008 công ty đã tự sản xuất được tr&ecirc;n 80% linh phụ kiện để lắp ráp. Và áp dụng thành công hệ thống quản lý chất lượng ISO 9001:2008. -Năm 2015 được Nhà nước trao tặng Huân chương Lao động hạng Ba. -Năm 2018 Công ty TNHH Bảo Long đã vinh dự được Chính phủ nước Cộng hòa xã hội chủ nghĩa Việt Nam trao tặng cờ thi đua đơn vị xuất sắc trong phong trào thi đua năm 2017. Phát huy kết quả đạt được, công ty TNHH Bảo Long sẽ tiếp tục mở rộng quy mô và hiệu quả sản xuất kinh doanh, để các sản phẩm mang thương hiệu Bảo Long chiếm trọn niềm tin người tiêu dùng, góp phần tích cực vào quá trình công nghiệp hóa - hiện đại hóa quê hương,đất nước. </span><br />\r\n<span style=\"font-size:16px;\"><span style=\"color:#27ae60;\"><strong>SỨ MỆNH: </strong></span></span><br />\r\n<span style=\"font-size:14px;\">NGƯỜI VIỆT NAM ƯU TIÊN DÙNG HÀNG VIỆT NAM Công ty TNHH Bảo Long luôn mong muốn đem đến cho người tiêu dùng sản phẩm nội địa giá cả hợp l&yacute;,chất lượng đảm bảo ổn định. Chúng tôi cam kết các sản phẩm phân phối trên thị trường đều đúng thương hiệu, đúng model, đúng chất lượng.</span><br />\r\n<span style=\"font-size:16px;\"><span style=\"color:#27ae60;\"><strong>GIÁ TRỊ CỐT LÕI:</strong></span></span><br />\r\n<span style=\"font-size:14px;\">Thế mạnh của thương hiệu công ty TNHH Bảo Long là chuyên môn hóa trong từng bộ phận, tính trách nhiệm cao trong con người. Ngoài ra các bộ phận luôn trao đổi, hỗ trợ nhau trong công việc, từng bộ phận như một mắt xích được gắn chặt với nhau tạo thành một chuỗi kết nối hoàn hảo, giúp cho từng thành viên trong mỗi bộ phận không ngừng sáng tạo, ngày càng chuyên nghiệp hơn trong việc tư vấn hỗ trợ khách hàng.</span><br />\r\n<span style=\"font-size:16px;\"><span style=\"color:#27ae60;\"><strong>TRIẾT LÝ KINH DOANH: </strong></span></span><br />\r\n<span style=\"font-size:14px;\">Với phương châm &ldquo;Chất lượng tạo nên uy tín&rdquo;, và định hướng &ldquo;Không ngừng học hỏi&rdquo; Công ty TNHH Bảo Long luôn nỗ lực xây dựng thương hiệu uy tín từng ngày, tạo dựng được niềm tin trong lòng khách hàng<br />\r\n_________________________________________________<br />\r\nDanh mục về một số th&ocirc;ng tin về <span style=\"color:#2980b9;\"><strong>CÔNG TY TNHH BẢO LONG</strong></span></span></span>\r\n<table align=\"center\" border=\"1\" cellpadding=\"2\" cellspacing=\"3\" style=\"width:100%;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align: center;\"><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Tên giao dịch</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN BẢO LONG </strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Loại hình hoạt động</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>&nbsp;Công ty TNHH Hai Thành Viên trở lên</strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Mã số thuế</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>4900142237 </strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Địa chỉ</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>Lô M8, cụm công nghiệp địa phương số 2, Xã Hợp Thành, Huyện Cao Lộc, Tỉnh Lạng Sơn</strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Giám Đốc </span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>Huỳnh Văn Long</strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Ngày cấp giấy phép</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>04/02/1998 </strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Ngày hoạt động</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>19/08/1998&nbsp;(Đã hoạt động 23 năm)</strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\">Điện thoại trụ sở</span></span></td>\r\n			<td><span style=\"font-family:Arial,Helvetica,sans-serif;\"><span style=\"font-size:14px;\"><strong>02053.876.755</strong></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<br />\r\n&nbsp;','Đăng ngay','2021-10-14 02:12:48','2021-10-20 20:50:46','gioi - thieu - cong - ty - tnhh - bao - long','','bài viết,giới thiệu,thông tin');
/*!40000 ALTER TABLE `news_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_post_categories`
--

DROP TABLE IF EXISTS `news_post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_post_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `news_categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_categories_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_categories_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_parent` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_post_categories`
--

LOCK TABLES `news_post_categories` WRITE;
/*!40000 ALTER TABLE `news_post_categories` DISABLE KEYS */;
INSERT INTO `news_post_categories` VALUES (11,'Tin tức','Danh mục cha Tin tức','0','2021-10-01 10:20:10','2021-10-01 10:20:10','tin - tuc','0'),(12,'Tư vấn kĩ thuật','Tài liệu về thông tin các loại sản phẩm','0','2021-10-02 19:44:33','2021-10-05 01:24:11','tu - van - ki - thuat -','11'),(13,'Hướng dẫn kĩ thuật','Tài liệu hướng dẫn sử dụng các dòng sản phẩm','0','2021-10-02 19:46:06','2021-10-02 19:46:06','huong - dan - ki - thuat','11'),(14,'Tin thị trường','Chuyên mục tin tức thị trường mới cập nhật','0','2021-10-02 19:46:54','2021-10-02 19:46:54','tin - thi - truong','11'),(15,'Giới thiệu','Bài giới thiệu về công ty','0','2021-10-06 09:16:50','2021-10-21 02:57:59','gioi - thieu','15'),(17,'Chưa phân loại','Danh mục cho các bài viết chưa có chuyên mục','0','2021-10-19 00:41:13','2021-10-19 00:41:13','chua - phan - loai','0');
/*!40000 ALTER TABLE `news_post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages_of_web`
--

DROP TABLE IF EXISTS `pages_of_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages_of_web` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pages_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages_of_web`
--

LOCK TABLES `pages_of_web` WRITE;
/*!40000 ALTER TABLE `pages_of_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages_of_web` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_prd_id` int(11) NOT NULL,
  `products_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `url_prd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_list_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (7,'Động cơ điện 2 chiều',11,'<p><span style=\"font-family:Verdana,Geneva,sans-serif;\"><span style=\"color:#000000;\"><strong>M&ocirc; tả sản phẩm:&nbsp;</strong></span></span></p>\r\n\r\n<div><span style=\"font-family:Verdana,Geneva,sans-serif;\"><span style=\"color:#000000;\">- Động cơ điện thế hệ mới</span></span><br />\r\n<span style=\"font-family:Verdana,Geneva,sans-serif;\"><span style=\"color:#000000;\">- Bảo h&agrave;nh 24 th&aacute;ng</span></span></div>',2000000,'Còn hàng','2021-10-04 21:46:55','2022-01-15 02:04:14',NULL,'dong - co - dien - 2 - chieu','<p>Th&ocirc;ng số kỹ thuật m&aacute;y bơm 02:</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/responsive_filemanager/source/ma%CC%80n%20asus%20tuf%20gaming%20vg27vq%20165gz_2.jpg\" style=\"height:200px; width:200px\" /></p>','bơm 002,bơm01,bơm mới','ma%60n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg','[\"ma%CC%80n%20hi%CC%80nh%20asus%20game%20vg275q%2075hz_2.png\",\"ma%CC%80n%20hi%CC%80nh%20asus%20game%20vg275q%2075hz.png\"]'),(8,'Động cơ điện 3 pha',11,'<p>Động cơ điện 3 pha</p>',120000,'Còn hàng','2021-10-06 09:33:52','2022-01-15 02:03:58',NULL,'dong - co - dien - 3 - pha','<p>Động cơ điện 3 pha</p>','động cơ điện 3 pha','ma%60n%20asus%20tuf%20gaming%20vg27vq%20165gz.jpg',''),(9,'Máy bơm 001',10,'<p>M&aacute;y bơm 001</p>',15000,'Hết hàng','2021-10-06 09:36:13','2022-01-15 02:03:44',NULL,'may - bom - 001','<p>M&aacute;y bơm 001</p>','bơm 01,bơm','ma%60n%20asus%20proart%20PA248QV%20%2024%20FHD%20IPS.jpg',''),(10,'Động cơ điện tăng áp',11,'<p>Động cơ điện tăng &aacute;p</p>',120,'Còn hàng','2021-10-06 09:37:03','2022-01-15 02:03:29',NULL,'dong - co - dien - tang - ap','<p>Động cơ điện tăng &aacute;p</p>','động cơ áp cao','ma%60n%20asus%20tuf%20gaming%20vg27vq%20165gz_2.jpg','[\"ma%CC%80n%20hi%CC%80nh%20asus%20game%20vg275q%2075hz_2.png\",\"ma%CC%80n%20hi%CC%80nh%20asus%20game%20vg275q%2075hz.png\"]'),(11,'Bơm cao áp',10,'<p>Bơm cao &aacute;p</p>',130,'Hết hàng','2021-10-06 09:37:34','2021-10-06 09:37:34',NULL,'bom - cao - ap','<p>Bơm cao &aacute;p</p>','bơm cao áp','3090%20banner.jpg',''),(12,'Máy bơm 009',10,'<p>M&aacute;y bơm 009</p>',1650,'Còn hàng','2021-10-06 09:38:08','2022-01-15 01:45:27',NULL,'may - bom - 009','<p>M&aacute;y bơm 009</p>','bơm 009','ma%60n%20hi%60nh%20asus%20game%20vg275q%2075hz_2.png','');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_categories_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_categories_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_prd_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_categories`
--

LOCK TABLES `products_categories` WRITE;
/*!40000 ALTER TABLE `products_categories` DISABLE KEYS */;
INSERT INTO `products_categories` VALUES (10,'Máy bơm nước','Danh mục cha sản phẩm máy bơm','Hiển thị','2021-10-04 03:25:48','2021-10-12 03:31:07','may - bom - nuoc',0),(11,'Động cơ điện','Danh mục cha  các sản phẩm động cơ điện','Hiển thị','2021-10-04 03:26:15','2021-10-12 03:31:15','dong - co - dien',0);
/*!40000 ALTER TABLE `products_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_users`
--

DROP TABLE IF EXISTS `profile_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profile_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_users`
--

LOCK TABLES `profile_users` WRITE;
/*!40000 ALTER TABLE `profile_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_comments`
--

DROP TABLE IF EXISTS `table_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cmt_product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_comments`
--

LOCK TABLES `table_comments` WRITE;
/*!40000 ALTER TABLE `table_comments` DISABLE KEYS */;
INSERT INTO `table_comments` VALUES (1,'Sản phẩm rất tốt','@HiepVit','0000-00-00 00:00:00',12),(2,'Sản phẩm rất tệ','@HiepVit','0000-00-00 00:00:00',12),(3,'Sản phẩm rất tệ','@Khachhang','0000-00-00 00:00:00',12);
/*!40000 ALTER TABLE `table_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 1,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hiepnguyenducit@gmail.com','hiepvit666','$2y$10$WtV1YfkPCrW75XSYKJwxY.uixyyYHmUnrDey6R27fx2kFnVOnoeMi','113 thái thịnh',1,'0366662357','2021-08-30 07:50:29','2021-08-30 07:50:29',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 23:03:22
