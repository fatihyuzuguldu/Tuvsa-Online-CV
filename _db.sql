-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 16 May 2024, 12:06:28
-- Sunucu sürümü: 10.5.25-MariaDB
-- PHP Sürümü: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fatihyuz_cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abilities`
--

CREATE TABLE `abilities` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AbilitiesName` varchar(50) DEFAULT NULL,
  `AbilitiesMonth` int(11) DEFAULT NULL,
  `Abilities` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `abilities`
--

INSERT INTO `abilities` (`id`, `UserId`, `AbilitiesName`, `AbilitiesMonth`, `Abilities`) VALUES
(1, 1, 'javascript', 0, NULL),
(2, 1, 'netcore', 6, NULL),
(7, 1, 'php', 37, NULL),
(8, 1, 'csharp', 2, NULL),
(9, 1, 'mysql', 24, NULL),
(13, 1, 'wordpress', 4, NULL),
(16, 1, 'html5', 0, NULL),
(17, 1, 'css3', 0, NULL),
(18, 1, 'git', 0, NULL),
(19, 1, 'github', 0, NULL),
(21, 1, 'google', 0, NULL),
(24, 1, 'mssql', 6, NULL),
(25, 1, 'chatgpt', 0, NULL),
(26, 1, 'nodejs', 1, NULL),
(27, 1, 'phpstorm', 0, NULL),
(28, 1, 'visualstudio', 0, NULL),
(29, 1, 'postman', 1, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abilitiesname`
--

CREATE TABLE `abilitiesname` (
  `id` int(11) NOT NULL,
  `AbilitiesUrl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `CertificatesName` varchar(255) NOT NULL,
  `CertificatesDate` date DEFAULT NULL,
  `CertificatesUrl` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `certificates`
--

INSERT INTO `certificates` (`id`, `UserId`, `CertificatesName`, `CertificatesDate`, `CertificatesUrl`) VALUES
(1, 1, 'X\' Sertifikası', '2024-03-27', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clubmembership`
--

CREATE TABLE `clubmembership` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ClubName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `clubmembership`
--

INSERT INTO `clubmembership` (`id`, `UserId`, `ClubName`) VALUES
(1, 1, 'DevTools Kulübü');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `EduFaculty` varchar(255) NOT NULL,
  `EduLevel` varchar(255) DEFAULT NULL,
  `EduDescription` text DEFAULT NULL,
  `EduSection` varchar(255) DEFAULT NULL,
  `EduAverage` double DEFAULT NULL,
  `EduClass` enum('Hazırlık','1','2','3','4','5','Mezun') DEFAULT NULL,
  `EduStartingDate` date DEFAULT NULL,
  `EduEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `education`
--

INSERT INTO `education` (`id`, `UserId`, `EduFaculty`, `EduLevel`, `EduDescription`, `EduSection`, `EduAverage`, `EduClass`, `EduStartingDate`, `EduEndDate`) VALUES
(3, 1, 'Sakarya Uygulamalı Bilimler Üniversitesi', 'ÖnLisans', 'Yeni Arkadaşlar,Yeni Hayatlar, Yeni Teknolojiler\r\n', 'Bilgisayar Programcılığı', 3, 'Mezun', '2024-03-23', '2024-03-23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Height` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `MedicalOperations` enum('Evet','Hayır') DEFAULT NULL,
  `Smoking` enum('Evet','Hayır') DEFAULT NULL,
  `PhysicalDisability` enum('Evet','Hayır') DEFAULT NULL,
  `VisualImpairment` enum('Evet','Hayır','Gözlük/Lens Kullanıyorum') DEFAULT NULL,
  `HearingLoss` enum('Evet','Hayır','İşitme Cihazı Kullanıyorum') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `health`
--

INSERT INTO `health` (`id`, `UserId`, `Height`, `Weight`, `MedicalOperations`, `Smoking`, `PhysicalDisability`, `VisualImpairment`, `HearingLoss`) VALUES
(2, 1, 180, 85, 'Hayır', 'Hayır', 'Hayır', 'Gözlük/Lens Kullanıyorum', 'Hayır');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Hobbies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hobbies`
--

INSERT INTO `hobbies` (`id`, `UserId`, `Hobbies`) VALUES
(1, 1, 'Doğal Yaşam'),
(2, 1, 'Kendimi Geliştirmek'),
(3, 1, 'Biten Projeler\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `LangForeign` varchar(255) NOT NULL,
  `LangSpeech` decimal(20,0) NOT NULL,
  `LangRead` decimal(20,0) NOT NULL,
  `LangWrite` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `languages`
--

INSERT INTO `languages` (`id`, `UserId`, `LangForeign`, `LangSpeech`, `LangRead`, `LangWrite`) VALUES
(1, 1, 'Türkçe (Anadil)', 5, 5, 5),
(2, 1, 'İngilizce', 2, 3, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otherfiles`
--

CREATE TABLE `otherfiles` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `FileName` text NOT NULL,
  `FileUrl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL DEFAULT 0,
  `ProjectName` varchar(255) DEFAULT NULL,
  `ProjectLang` varchar(255) DEFAULT NULL,
  `ProjectUrl` text DEFAULT NULL,
  `ProjectDescription` text DEFAULT NULL,
  `ProjectDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `UserId`, `ProjectName`, `ProjectLang`, `ProjectUrl`, `ProjectDescription`, `ProjectDate`) VALUES
(1, 1, 'Fayu Pre-Accounting ERP Solutions', 'ASP.NET Core 8 MVC', 'https://github.com/fatihyuzuguldu/Fayu-Pre-Accounting-ERP-Solutions', 'ASP.NET Core 8 MVC Pre-Accounting ERP Solutions\r\n', '2023-03-24'),
(2, 1, 'Online CV', 'PHP 8', 'https://tuvsa.com', 'Online CV Uygulaması', '2024-03-24'),
(4, 1, 'PHP Sms/Email Dogrulama Paneli', 'PHP', 'https://github.com/fatihyuzuguldu/PHP-Sms-Email-Dogrulama-Paneli', 'PHP Sms/Email Dogrulama Paneli', '2023-12-24'),
(5, 1, 'Kripto Para Piyasa Kontrol', 'PHP / CMK API', 'https://fatihyuzuguldu.com/kripto/filtre.php', 'PHP CMK API Piyasa kontrol', '2023-12-24'),
(6, 1, 'Muhasebe Hesaplama Aracı', 'PHP', 'https://fatihyuzuguldu.com/muhasebe', 'Muhasebe Hesaplama Aracı', '2023-12-24'),
(7, 1, 'Araç Kiralama Sistemi', 'ASP.Net MVC 5', 'https://fatihyuzuguldu.com/upload/2021/ASP.Net%20MVC%205%20Ara%C3%A7%20Kiralama%20Sistemi.zip', 'Araç Kiralama Sistemi', '2021-03-24'),
(8, 1, 'C# Liman Projesi', 'C#', 'https://fatihyuzuguldu.com/upload/2021/CSharp%20Karasu%20Liman%20%C3%96devi.zip', 'C# Liman Projesi', '2021-03-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserFullName` varchar(255) NOT NULL,
  `UserSurname` varchar(255) NOT NULL,
  `UserCountry` varchar(255) DEFAULT NULL,
  `UserIDNumber` varchar(11) DEFAULT NULL,
  `UserEmail` varchar(255) DEFAULT NULL,
  `UserCountryCode` varchar(10) DEFAULT NULL,
  `UserPhoneNumber` varchar(10) NOT NULL,
  `UserCity` varchar(255) DEFAULT NULL,
  `UserDistrict` varchar(255) DEFAULT NULL,
  `UserBirthPlace` varchar(255) DEFAULT NULL,
  `UserBirthday` date DEFAULT NULL,
  `UserMaritalStatus` enum('Bekar','Evli') DEFAULT NULL,
  `UserMilitaryStatus` enum('Tecilli','Yapıldı','Muaf') DEFAULT NULL,
  `UserGender` enum('Erkek','Kız') NOT NULL,
  `UserPhotoUrl` text NOT NULL,
  `UserUrl` text NOT NULL,
  `UserDescription` text DEFAULT NULL,
  `UserWeb` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `UserFullName`, `UserSurname`, `UserCountry`, `UserIDNumber`, `UserEmail`, `UserCountryCode`, `UserPhoneNumber`, `UserCity`, `UserDistrict`, `UserBirthPlace`, `UserBirthday`, `UserMaritalStatus`, `UserMilitaryStatus`, `UserGender`, `UserPhotoUrl`, `UserUrl`, `UserDescription`, `UserWeb`) VALUES
(1, 'Fatih', 'Yüzügüldü', 'Türkiye', '1939100000', 'info@tuvsa.com', '+90', '5467420000', 'Osmaniye', 'Merkez', 'Osmaniye', '2001-01-05', 'Bekar', 'Tecilli', 'Erkek', '2818802120240226042821988.jpg', 'fatihyuzuguldu', 'Merhaba ben Fatih, 3 yıllık PHP ve .NET dilindeki yeteneklerimi kullanarak yazılım geliştirme süreçlerinde uçtan uca çözümler üretiyorum. Ayrıca bu yeteneklerimi HTML5, Javascript, CSS, MySql, CPanel, MySQL, MSSQL, API, MVC, teknolojileri ve projelerim ile geliştirmelere devam ediyorum.', 'fatihyuzuguldu.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `workexperiences`
--

CREATE TABLE `workexperiences` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `JobPosition` varchar(255) NOT NULL,
  `JobCompany` varchar(255) DEFAULT NULL,
  `JobCountry` varchar(255) DEFAULT NULL,
  `JobMode` enum('Stajyer','Tam Zamanlı','Proje Bazlı','Serbest Zamanlı') DEFAULT NULL,
  `JobDescription` text DEFAULT NULL,
  `JobWorkingMonth` decimal(20,0) DEFAULT NULL,
  `JobSalary` decimal(20,2) DEFAULT NULL,
  `JobStartDate` date DEFAULT NULL,
  `JobEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `workexperiences`
--

INSERT INTO `workexperiences` (`id`, `UserId`, `JobPosition`, `JobCompany`, `JobCountry`, `JobMode`, `JobDescription`, `JobWorkingMonth`, `JobSalary`, `JobStartDate`, `JobEndDate`) VALUES
(1, 1, 'Jr. Full Stack Developer', 'DevSecure', 'Kocaeli', 'Stajyer', 'Stajyer olarak Kali linux ve Windows kullanarak siber güvenlik konularında bilgi edindim. Cpanel ve Cyberpanel kullandım. Html css php kullandım. ', 3, 30000.00, '2022-02-17', '2022-06-20'),
(2, 1, 'Jr. Full Stack Developer', 'Freelancer', 'Türkiye', 'Proje Bazlı', 'Backend teknolojileri ile kendimi geliştirdim.\r\n-PHP\r\n-ASP.NET\r\n-MYSQL\r\n.\r\nAyrıca depremi yerinde atlattığım için bu gelişmem için olumsuz etkiledi.', 9, 30000.00, '2022-06-20', '2024-05-24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `workstatus`
--

CREATE TABLE `workstatus` (
  `id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `WorkStatus` enum('Çalışıyor','Çalışmıyor','İş Arayan','Stajyer','Staj Arayan') NOT NULL,
  `WorkProfession` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `workstatus`
--

INSERT INTO `workstatus` (`id`, `UserId`, `WorkStatus`, `WorkProfession`) VALUES
(1, 1, 'İş Arayan', 'Software Developer');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Sütun 2` (`UserId`);

--
-- Tablo için indeksler `abilitiesname`
--
ALTER TABLE `abilitiesname`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `clubmembership`
--
ALTER TABLE `clubmembership`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKHobbiesUsers` (`UserId`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `otherfiles`
--
ALTER TABLE `otherfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserUrl` (`UserUrl`(768));

--
-- Tablo için indeksler `workexperiences`
--
ALTER TABLE `workexperiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Tablo için indeksler `workstatus`
--
ALTER TABLE `workstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserId` (`UserId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abilities`
--
ALTER TABLE `abilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `abilitiesname`
--
ALTER TABLE `abilitiesname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `clubmembership`
--
ALTER TABLE `clubmembership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `otherfiles`
--
ALTER TABLE `otherfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `workexperiences`
--
ALTER TABLE `workexperiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `workstatus`
--
ALTER TABLE `workstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `abilities`
--
ALTER TABLE `abilities`
  ADD CONSTRAINT `FKabilitiesuserid` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `FKCertificatesUseRID` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `clubmembership`
--
ALTER TABLE `clubmembership`
  ADD CONSTRAINT `FKClubUserID` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `FKEducationInf` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `health`
--
ALTER TABLE `health`
  ADD CONSTRAINT `FKHealthUSerID` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `FKHobbiesUsers` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `FKLanguagesUser` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `otherfiles`
--
ALTER TABLE `otherfiles`
  ADD CONSTRAINT `FKOtherFilesId` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `FKProjectsUser` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `workexperiences`
--
ALTER TABLE `workexperiences`
  ADD CONSTRAINT `FKWorkExperiencesUserId` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Tablo kısıtlamaları `workstatus`
--
ALTER TABLE `workstatus`
  ADD CONSTRAINT `FKWorkStatus` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
