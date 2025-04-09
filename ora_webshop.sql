-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Ápr 09. 10:08
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ora_webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image_url`, `brand`) VALUES
(1, 'Rolex Submariner', 3990000, 'A legenda maga, 300 méterig vízálló', 'https://www.citizenwatch.co.uk/media/catalog/product/n/j/nj0152-51x_catalog.png', 'Rolex'),
(2, 'Rolex Datejust', 3500000, 'Klasszikus elegancia, örök divat', 'https://example.com/rolex-datejust.jpg', 'Rolex'),
(3, 'Rolex GMT-Master', 4200000, 'Több időzóna követése utazóknak', 'https://example.com/rolex-gmt.jpg', 'Rolex'),
(4, 'Rolex Daytona', 4500000, 'A versenyzés ihlette kronográf óra', 'https://example.com/rolex-daytona.jpg', 'Rolex'),
(5, 'Rolex Explorer', 3800000, 'Extrém körülményekre tervezve', 'https://example.com/rolex-explorer.jpg', 'Rolex'),
(6, 'Rolex Yacht-Master', 4100000, 'A tengerészeti életstílusra tervezve', 'https://example.com/rolex-yacht.jpg', 'Rolex'),
(7, 'Rolex Air-King', 3200000, 'Egyszerű és letisztult design', 'https://example.com/rolex-airking.jpg', 'Rolex'),
(8, 'Rolex Milgauss', 3700000, 'Mágneses mezőkkel szemben ellenálló', 'https://example.com/rolex-milgauss.jpg', 'Rolex'),
(9, 'Rolex Sea-Dweller', 4300000, 'Professzionális búvárok számára', 'https://example.com/rolex-seadweller.jpg', 'Rolex'),
(10, 'Rolex Cellini', 3600000, 'Kifinomult elegancia, klasszikus stílus', 'https://example.com/rolex-cellini.jpg', 'Rolex'),
(11, 'Casio G-Shock', 39990, 'Ütésálló, sportos dizájn extrém helyzetekre', 'https://www.casio.com/content/dam/casio/product-info/locales/hk/en/timepiece/product/watch/G/GD/gd-b500-1/gd-b500-1.png', 'Casio'),
(12, 'Casio Vintage', 18990, 'Klasszikus retro stílus, rozsdamentes acél szíjjal', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/A/A1/a168wa-1/a168wa-1.png', 'Casio'),
(13, 'Casio AE-1500WH', 12990, 'Nagy kijelző, 10 év elemélettartam, LED világítás', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/AE/AE-1500wh/ae-1500wh-1av/ae-1500wh-1av.png', 'Casio'),
(14, 'Casio MW-240', 8990, 'Egyszerű, letisztult design, jól olvasható kijelző', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/M/MW/mw-240-1b/mw-240-1b.png', 'Casio'),
(15, 'Casio F-91W', 5990, 'A világ legismertebb digitális órája, retro ikon', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/F/F-91W/f-91w-1/f-91w-1.png', 'Casio'),
(16, 'Casio GA-700', 42990, 'Masszív kialakítás, világidő, stopper, LED', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/GA/ga-700/ga-700-1b/ga-700-1b.png', 'Casio'),
(17, 'Casio Duro MDV-106', 24990, 'Vízálló búváróra, kvarc szerkezet, 200m WR', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/MD/mdv-106/mdv-106b-2av/mdv-106b-2av.png', 'Casio'),
(18, 'Casio WS-1400H', 13490, 'Sportos digitális óra nagy stopperrel, WR 100m', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/WS/ws-1400h/ws-1400h-1av/ws-1400h-1av.png', 'Casio'),
(19, 'Casio Edifice', 52990, 'Elegáns acél tok, kronográf funkció, bőrszíj', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/A/EFB/efb-710l-1a/efb-710l-1a.png', 'Casio'),
(20, 'Casio LTP-V300D', 22990, 'Női karóra rozsdamentes acél szíjjal, rózsaszín számlap', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/LTP/ltp-v300/ltp-v300d-4a/ltp-v300d-4a.png', 'Casio'),
(21, 'Casio G-Shock', 39990, 'Ütésálló, sportos dizájn extrém helyzetekre', 'https://www.casio.com/content/dam/casio/product-info/locales/hk/en/timepiece/product/watch/G/GD/gd-b500-1/gd-b500-1.png', 'Casio'),
(22, 'Casio Vintage', 18990, 'Klasszikus retro stílus, rozsdamentes acél szíjjal', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/A/A1/a168wa-1/a168wa-1.png', 'Casio'),
(23, 'Casio AE-1500WH', 12990, 'Nagy kijelző, 10 év elemélettartam, LED világítás', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/AE/AE-1500wh/ae-1500wh-1av/ae-1500wh-1av.png', 'Casio'),
(24, 'Casio MW-240', 8990, 'Egyszerű, letisztult design, jól olvasható kijelző', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/M/MW/mw-240-1b/mw-240-1b.png', 'Casio'),
(25, 'Casio F-91W', 5990, 'A világ legismertebb digitális órája, retro ikon', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/F/F-91W/f-91w-1/f-91w-1.png', 'Casio'),
(26, 'Casio GA-700', 42990, 'Masszív kialakítás, világidő, stopper, LED', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/GA/ga-700/ga-700-1b/ga-700-1b.png', 'Casio'),
(27, 'Casio Duro MDV-106', 24990, 'Vízálló búváróra, kvarc szerkezet, 200m WR', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/MD/mdv-106/mdv-106b-2av/mdv-106b-2av.png', 'Casio'),
(28, 'Casio WS-1400H', 13490, 'Sportos digitális óra nagy stopperrel, WR 100m', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/WS/ws-1400h/ws-1400h-1av/ws-1400h-1av.png', 'Casio'),
(29, 'Casio Edifice', 52990, 'Elegáns acél tok, kronográf funkció, bőrszíj', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/A/EFB/efb-710l-1a/efb-710l-1a.png', 'Casio'),
(30, 'Casio LTP-V300D', 22990, 'Női karóra rozsdamentes acél szíjjal, rózsaszín számlap', 'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece/product/watch/LTP/ltp-v300/ltp-v300d-4a/ltp-v300d-4a.png', 'Casio'),
(31, 'Seiko Prospex Turtle', 185000, 'Ikonikus búváróra formával és megbízhatósággal.', 'https://example.com/seiko-prospex-turtle.jpg', 'Seiko'),
(32, 'Seiko Presage Cocktail Time', 165000, 'Kézzel készült számlap, elegancia koktélok ihletésében.', 'https://example.com/seiko-presage-cocktail.jpg', 'Seiko'),
(33, 'Seiko 5 Sports', 95000, 'Megbízható automata óra modern dizájnnal.', 'https://example.com/seiko-5-sports.jpg', 'Seiko'),
(34, 'Seiko Astron GPS Solar', 520000, 'GPS vezérelt időbeállítás, napelemes töltés.', 'https://example.com/seiko-astron.jpg', 'Seiko'),
(35, 'Seiko King Turtle', 225000, 'Kerámia lünetta és zafírkristály, profi búváróra.', 'https://example.com/seiko-king-turtle.jpg', 'Seiko'),
(36, 'Seiko Sumo', 240000, 'Masszív búváróra karakteres megjelenéssel.', 'https://example.com/seiko-sumo.jpg', 'Seiko'),
(37, 'Seiko SARB033', 190000, 'Minimalista dizájn, automata szerkezet.', 'https://example.com/seiko-sarb033.jpg', 'Seiko'),
(38, 'Seiko Chronograph', 89990, 'Pontos stopperfunkció, sportos stílus.', 'https://example.com/seiko-chrono.jpg', 'Seiko'),
(39, 'Seiko Lukia', 135000, 'Női órakollekció elegáns megjelenéssel.', 'https://example.com/seiko-lukia.jpg', 'Seiko'),
(40, 'Seiko Alpinist', 210000, 'Kalandozóknak tervezve, ikonikus zöld számlappal.', 'https://example.com/seiko-alpinist.jpg', 'Seiko'),
(41, 'Omega Speedmaster Professional', 3200000, 'A legendás \'Moonwatch\', amely az űrbe is eljutott.', 'https://example.com/omega-speedmaster.jpg', 'Omega'),
(42, 'Omega Seamaster Diver 300M', 2500000, 'Ikonikus búváróra kerámia lünettával és hullámmintás számlappal.', 'https://example.com/omega-seamaster-diver.jpg', 'Omega'),
(43, 'Omega Seamaster Planet Ocean', 2900000, 'Professzionális búváróra modern stílussal és nagy WR-rel.', 'https://example.com/omega-planet-ocean.jpg', 'Omega'),
(44, 'Omega Constellation Co-Axial', 2300000, 'Elegáns és ikonikus design, csillagászati pontosság.', 'https://example.com/omega-constellation.jpg', 'Omega'),
(45, 'Omega De Ville Prestige', 2100000, 'Letisztult elegancia és klasszikus megjelenés.', 'https://example.com/omega-deville.jpg', 'Omega'),
(46, 'Omega Aqua Terra', 2700000, 'Sportos és elegáns, fa mintás számlappal.', 'https://example.com/omega-aqua-terra.jpg', 'Omega'),
(47, 'Omega Speedmaster 57', 3100000, 'Vintage stílus modern technológiával.', 'https://example.com/omega-speedmaster57.jpg', 'Omega'),
(48, 'Omega Seamaster 1948', 3500000, 'Limitált kiadás a történelmi örökség előtt tisztelegve.', 'https://example.com/omega-seamaster1948.jpg', 'Omega'),
(49, 'Omega Globemaster', 2950000, 'A világ első Master Chronometer tanúsítvánnyal rendelkező órája.', 'https://example.com/omega-globemaster.jpg', 'Omega'),
(50, 'Omega Railmaster', 2400000, 'Mágneses mezőkkel szembeni ellenállás és letisztult stílus.', 'https://example.com/omega-railmaster.jpg', 'Omega');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'balkazs sda', 'saddsa@afds.com', '$2y$10$k/iL5IcUURb6wv4hr/Wo3.3EKoUpE6Ux7P6E4folp.kEEtCjY3Wya'),
(2, 'BALAZS', 'BALAZS@BALAZS.BALAZS', '$2y$10$LRoN1c8g8IfB34/Mg2vHGuVHXYsQySf9JS30Lmd3HBM8N1EVNIZNy'),
(3, 'fasz', 'fasz@freemail.com', '$2y$10$ni001jRavObH8bmT9N4a4e5tOpf6Rv4TInhBzStI0KueGVmD/Jtq6');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
