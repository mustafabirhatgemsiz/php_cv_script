-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Nis 2021, 16:13:50
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv_project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbladmin`
--

CREATE TABLE `tbladmin` (
  `admin_id` int(11) NOT NULL,
  `admin_uname` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `admin_uname`, `admin_password`) VALUES
(1, 'admin', 'b59c67bf196a4758191e42f76670ceba');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblcertificates`
--

CREATE TABLE `tblcertificates` (
  `certificate_id` int(11) NOT NULL,
  `certificate_name` varchar(50) NOT NULL,
  `certificate_link` varchar(255) NOT NULL,
  `certificate_desc` varchar(255) NOT NULL,
  `certificate_date` varchar(255) NOT NULL,
  `certificate_company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblcertificates`
--

INSERT INTO `tblcertificates` (`certificate_id`, `certificate_name`, `certificate_link`, `certificate_desc`, `certificate_date`, `certificate_company`) VALUES
(1, 'PHP Tutorial', 'https://www.sololearn.com/Certificate/1059-21477861/pdf/', 'Sertifika bağlantısı buraya için tıklayınız.', '03 Nisan 2021 - Sona erme süresi yok.', 'SoloLearn'),
(2, 'JavaScript Tutorial', 'https://www.sololearn.com/certificates/course/en/21477861/1024/landscape/pdf', 'Sertifika bağlantısı buraya için tıklayınız.', '04 Nisan 2021 - Sona erme süresi yok.', 'SoloLearn'),
(3, 'SQL Database Programming', 'https://www.udemy.com/certificate/UC-8dcbdacb-4fb8-4422-be50-197f040935f4/', 'Sertifika bağlantısı buraya için tıklayınız.', '23 Şubat 20201 - Sona erme süresi yok.', 'Udemy'),
(4, 'Google Digital Marketing', 'https://learndigital.withgoogle.com/dijitalatolye/validate-certificate-code', 'Sertifika No: JAV XBU JLK\r\nSertifika bağlantısı buraya için tıklayınız.', '09 Ağustos 2021 - Sona erme süresi yok.', 'Google'),
(5, 'Social Media Manager', 'https://www.iienstitu.com/sertifika-sorgulama/sertifika/300800520139', 'Sertifika bağlantısı buraya için tıklayınız.', '30 Ağustos 2020 - Sona erme süresi yok.', 'İstanbul İşletme Enstitüsü'),
(6, 'WORDPRESS Tutorial', 'https://www.iienstitu.com/sertifika-sorgulama/sertifika/160802730098', 'Sertifika bağlantısı buraya için tıklayınız.', '16 Ağustos 2020 - Sona erme süresi yoktur.', 'İstanbul İşletme Enstitüsü');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblinfo`
--

CREATE TABLE `tblinfo` (
  `info_id` tinyint(11) NOT NULL,
  `info_image` varchar(500) NOT NULL,
  `info_name` varchar(40) NOT NULL,
  `info_job` varchar(40) NOT NULL,
  `info_residence` varchar(40) NOT NULL,
  `info_residencelink` varchar(500) NOT NULL,
  `info_mail` varchar(40) NOT NULL,
  `info_phone` varchar(40) NOT NULL,
  `info_whatsapp` varchar(255) NOT NULL,
  `info_whatsapplink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblinfo`
--

INSERT INTO `tblinfo` (`info_id`, `info_image`, `info_name`, `info_job`, `info_residence`, `info_residencelink`, `info_mail`, `info_phone`, `info_whatsapp`, `info_whatsapplink`) VALUES
(1, 'https://avatars.githubusercontent.com/u/77343458?s=400&u=45dc364ee43f7e21dacf4a606f106a8aca0de14c&v=4', 'Mustafa Birhat Gemsiz', 'Yazılım Geliştirici', 'Türkiye / Fatih', 'https://g.page/birhatiletisim?share', 'info@gmail.com', '+90-000-000-00-00', 'Whatsapp ile iletişim için tıkla.', 'https://api.whatsapp.com/send?phone=900000000000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblprograms`
--

CREATE TABLE `tblprograms` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(50) NOT NULL,
  `program_rate` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblprograms`
--

INSERT INTO `tblprograms` (`program_id`, `program_name`, `program_rate`) VALUES
(1, 'CAMTASIA 2020', 90),
(2, 'ADOBE PHOTOSHOP', 40),
(3, 'MICROSOFT POWERPOINT', 80),
(4, 'MICROSOFT WORLD', 70);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblschools`
--

CREATE TABLE `tblschools` (
  `school_id` tinyint(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_desc` varchar(255) NOT NULL,
  `school_date` varchar(50) NOT NULL,
  `school_continue` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblschools`
--

INSERT INTO `tblschools` (`school_id`, `school_name`, `school_desc`, `school_date`, `school_continue`) VALUES
(1, 'Selçuk Üniversitesi', 'Bilgisayar Programcılığı bölümünü okuyor.', '2019 - ', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsetting`
--

CREATE TABLE `tblsetting` (
  `site_id` tinyint(11) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_desc` varchar(255) NOT NULL,
  `site_keyw` varchar(255) NOT NULL,
  `site_footer` varchar(255) NOT NULL,
  `site_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblsetting`
--

INSERT INTO `tblsetting` (`site_id`, `site_title`, `site_url`, `site_desc`, `site_keyw`, `site_footer`, `site_color`) VALUES
(1, 'Mustafa Birhat Gemsiz', 'http://localhost/cvscripti/', 'PHP Web Geliştirici', 'php, mysql, laravel, web geliştici, php geliştirici, web develooper, php developer', ' Tüm Hakları Saklıdır.', 'orange');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblskills`
--

CREATE TABLE `tblskills` (
  `skills_id` tinyint(11) NOT NULL,
  `skill_name` varchar(50) NOT NULL,
  `skill_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblskills`
--

INSERT INTO `tblskills` (`skills_id`, `skill_name`, `skill_rate`) VALUES
(1, 'PHP', '80'),
(2, 'MySQL', '80'),
(3, 'OOP', '60'),
(4, 'LARAVEL', '50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsocialmedia`
--

CREATE TABLE `tblsocialmedia` (
  `sm_id` tinyint(11) NOT NULL,
  `sm_facebook` varchar(255) NOT NULL,
  `sm_instagram` varchar(255) NOT NULL,
  `sm_twitter` varchar(255) NOT NULL,
  `sm_linkedin` varchar(255) NOT NULL,
  `sm_youtube` varchar(255) NOT NULL,
  `sm_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tblsocialmedia`
--

INSERT INTO `tblsocialmedia` (`sm_id`, `sm_facebook`, `sm_instagram`, `sm_twitter`, `sm_linkedin`, `sm_youtube`, `sm_github`) VALUES
(1, 'https://www.facebook.com/codewithbirhat/', 'https://www.instagram.com/codewithbirhat/', 'https://www.twitter.com/codewithbirhat/', 'https://www.linkedin.com/in/mustafabirhatgemsiz/', 'https://www.youtube.com/channel/UCj-E0dSUoRuGTci9yrGaVOg', 'https://github.com/mustafabirhatgemsiz');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `tblcertificates`
--
ALTER TABLE `tblcertificates`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Tablo için indeksler `tblinfo`
--
ALTER TABLE `tblinfo`
  ADD PRIMARY KEY (`info_id`);

--
-- Tablo için indeksler `tblprograms`
--
ALTER TABLE `tblprograms`
  ADD PRIMARY KEY (`program_id`);

--
-- Tablo için indeksler `tblschools`
--
ALTER TABLE `tblschools`
  ADD PRIMARY KEY (`school_id`);

--
-- Tablo için indeksler `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `tblskills`
--
ALTER TABLE `tblskills`
  ADD PRIMARY KEY (`skills_id`);

--
-- Tablo için indeksler `tblsocialmedia`
--
ALTER TABLE `tblsocialmedia`
  ADD PRIMARY KEY (`sm_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tblcertificates`
--
ALTER TABLE `tblcertificates`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `tblinfo`
--
ALTER TABLE `tblinfo`
  MODIFY `info_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tblprograms`
--
ALTER TABLE `tblprograms`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `tblschools`
--
ALTER TABLE `tblschools`
  MODIFY `school_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `site_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tblskills`
--
ALTER TABLE `tblskills`
  MODIFY `skills_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `tblsocialmedia`
--
ALTER TABLE `tblsocialmedia`
  MODIFY `sm_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
