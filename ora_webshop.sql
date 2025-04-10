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
(1, 'Rolex Submariner', 3990000, 'A legenda maga, 300 méterig vízálló', 'https://images.watchfinder.co.uk/imgv3/stock/317622/Rolex-Submariner-16800-317622-241128-165654.jpg;quality=90;h=600,%20https://images.watchfinder.co.uk/imgv3/stock/317622/Rolex-Submariner-16800-317622-241128-165654.jpg;quality=55;h=1200%202x', 'Rolex'),
(2, 'Rolex Datejust', 3500000, 'Klasszikus elegancia, örök divat', 'https://www.watchswiss.com/wp-content/uploads/2024/05/m126234-0051_drp-upright-bba-with-shadow_mobile-694x1024.png', 'Rolex'),
(3, 'Rolex GMT-Master', 4200000, 'Több időzóna követése utazóknak', 'https://www.watchswiss.com/wp-content/uploads/2024/05/m126710grnr-0003_drp-upright-bba-with-shadow_mobile-694x1024.png', 'Rolex'),
(4, 'Rolex Daytona', 4500000, 'A versenyzés ihlette kronográf óra', 'https://img.chrono24.com/images/uhren/35852925-8ufzex0nvw0zimsng35v1l3c-ExtraLarge.jpg', 'Rolex'),
(5, 'Rolex Explorer', 3800000, 'Extrém körülményekre tervezve', 'https://media.rolex.com/image/upload/q_auto:eco/f_auto/t_v7-majesty/c_limit,w_3840/v1/catalogue/2025/upright-c/m224270-0001', 'Rolex'),
(6, 'Rolex Yacht-Master', 4100000, 'A tengerészeti életstílusra tervezve', 'https://s3.amazonaws.com/ISHOWIMAGES/ROLEX+V7/Rolex+Watches/Rolex+Model+Pages/watch_assets/upright_watches_assets/mobile/m268622-0002_drp-upright-bba-with-shadow.png', 'Rolex'),
(7, 'Rolex Air-King', 3200000, 'Egyszerű és letisztult design', 'https://rolex.torres.pt/wp-content/uploads/2024/07/m126900-0001_drp-upright-bba-with-shadow-Torres-Joalheiros.png', 'Rolex'),
(8, 'Rolex Milgauss', 3700000, 'Mágneses mezőkkel szemben ellenálló', 'https://imagedelivery.net/lyg2LuGO05OELPt1DKJTnw/97c06f73-1159-4594-54b3-315fa10dbf00/public', 'Rolex'),
(9, 'Rolex Sea-Dweller', 4300000, 'Professzionális búvárok számára', 'https://www.hodinarstvibechyne.cz/res/crc-2597747629/storage/1024x1024/dz-m126600-0002-drp-upright-bba-with-shadow.png', 'Rolex'),
(10, 'Rolex Cellini', 3600000, 'Kifinomult elegancia, klasszikus stílus', 'https://img.chrono24.com/images/uhren/33308273-x6t713ahx194niw930rgwzk4-ExtraLarge.jpg', 'Rolex'),
(11, 'Casio G-Shock', 39990, 'Ütésálló, sportos dizájn extrém helyzetekre', 'https://oraker.hu/UserFiles/Product/gm-2110d-7aer-or01-web-1727722882.jpg', 'Casio'),
(12, 'Casio Vintage', 18990, 'Klasszikus retro stílus, rozsdamentes acél szíjjal', 'https://img.sofia.sk/mediagallery/sofia_system/image/product/types/X/9/1/6/74619.png', 'Casio'),
(13, 'Casio AE-1500WH', 12990, 'Nagy kijelző, 10 év elemélettartam, LED világítás', 'https://www.ekszerora.hu/wp-content/uploads/product_new_images/AE-1500WH-1AVEF-CASIO-COLLECTION-F%C3%89RFI-KAR%C3%93RA-1.png.webp', 'Casio'),
(14, 'Casio MW-240', 8990, 'Egyszerű, letisztult design, jól olvasható kijelző', 'https://s13emagst.akamaized.net/products/47273/47272252/images/res_b3d852c0f0f8397545a469c5e48b3d83.jpg', 'Casio'),
(15, 'Casio F-91W', 5990, 'A világ legismertebb digitális órája, retro ikon', 'https://casio.cdn.shoprenter.hu/custom/casio/image/cache/w500h500wt1/product/Casio/F-91W-1Y%20casio%20ffi%20karora.jpg.webp?lastmod=0.1724412636', 'Casio'),
(16, 'Casio GA-700', 42990, 'Masszív kialakítás, világidő, stopper, LED', 'https://s13emagst.akamaized.net/products/14865/14864049/images/res_629994dcdc4df782832b8f41f915291e.jpg', 'Casio'),
(17, 'Casio Duro MDV-106', 24990, 'Vízálló búváróra, kvarc szerkezet, 200m WR', 'https://www.marketmaker.hu/img/52877/079767977320/079767977320.jpg', 'Casio'),
(18, 'Casio WS-1400H', 13490, 'Sportos digitális óra nagy stopperrel, WR 100m', 'https://img.modivo.cloud/product(d/8/c/c/d8cc098c91de541679e255a280e8ffed85ff16d5_20_4549526321870_PH.jpg,jpg)/casio-karora-ws-1400h-4avef-piros.jpg', 'Casio'),
(19, 'Casio Edifice', 52990, 'Elegáns acél tok, kronográf funkció, bőrszíj', 'https://setcomp.hu/images/stories/virtuemart/product/EFB-730D-7A.jpg', 'Casio'),
(20, 'Casio LTP-V300D', 22990, 'Női karóra rozsdamentes acél szíjjal, rózsaszín számlap', 'https://timestore.vshcdn.net/images/w700/2036272-1.jpg?v=1709899285', 'Casio'),
(31, 'Seiko Prospex Turtle', 185000, 'Ikonikus búváróra formával és megbízhatósággal.', 'https://www.royalora.hu/prodimg/18791/or/SRPE39K1_Prospex_Turtle_Save_The_Ocean_f%C3%A9rfi_kar%C3%B3ra_1.webp', 'Seiko'),
(32, 'Seiko Presage Cocktail Time', 165000, 'Kézzel készült számlap, elegancia koktélok ihletésében.', 'https://www.tutuora.hu/img/products/srpb43j1.jpg', 'Seiko'),
(33, 'Seiko 5 Sports', 95000, 'Megbízható automata óra modern dizájnnal.', 'https://www.orabirodalom.hu/kepek/nagy/seiko/SRPD55K1TRIM.webp', 'Seiko'),
(34, 'Seiko Astron GPS Solar', 520000, 'GPS vezérelt időbeállítás, napelemes töltés.', 'https://www.oragyor.hu/Images/Products/SSH121J1.JPG', 'Seiko'),
(35, 'Seiko King Turtle', 225000, 'Kerámia lünetta és zafírkristály, profi búváróra.', 'https://www.iwatchery.hu/soubory/75a509920900e6d237a144c30a4036653dff7e6b.jpg', 'Seiko'),
(36, 'Seiko Sumo', 240000, 'Masszív búváróra karakteres megjelenéssel.', 'https://www.tutuora.hu/img/products/spb101j1.jpg', 'Seiko'),
(37, 'Seiko SARB033', 190000, 'Minimalista dizájn, automata szerkezet.', 'https://www.tutuora.hu/img/products/sarb033.jpg', 'Seiko'),
(38, 'Seiko Chronograph', 89990, 'Pontos stopperfunkció, sportos stílus.', 'https://www.royalora.hu/prodimg/19637/or/SSB425P1_Chronograph_f%C3%A9rfi_kar%C3%B3ra_1.webp', 'Seiko'),
(39, 'Seiko Lukia', 135000, 'Női órakollekció elegáns megjelenéssel.', 'https://img.chrono24.com/images/uhren/38694804-4r3ah2y85crd07dj3m5l009h-ExtraLarge.jpg', 'Seiko'),
(40, 'Seiko Alpinist', 210000, 'Kalandozóknak tervezve, ikonikus zöld számlappal.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCG1xkzdXmgW95P6jyL5X_5yrRvfxaIZ1UqA&s', 'Seiko'),
(41, 'Omega Speedmaster Professional', 3200000, 'A legendás \'Moonwatch\', amely az űrbe is eljutott.', 'https://img.chrono24.com/images/uhren/37149629-yz5xwit347keeudm8otoucpj-ExtraLarge.jpg', 'Omega'),
(42, 'Omega Seamaster Diver 300M', 2500000, 'Ikonikus búváróra kerámia lünettával és hullámmintás számlappal.', 'https://exclusiveswisswatches.hu/wp-content/uploads/2023/08/seamaster-blue_WebReady.webp', 'Omega'),
(43, 'Omega Seamaster Planet Ocean', 2900000, 'Professzionális búváróra modern stílussal és nagy WR-rel.', 'https://img.chrono24.com/images/uhren/33338768-g82imim909q86agn8cgeaa2i-ExtraLarge.jpg', 'Omega'),
(44, 'Omega Constellation Co-Axial', 2300000, 'Elegáns és ikonikus design, csillagászati pontosság.', 'https://img.chrono24.com/images/uhren/37419984-p13nfim20ikmf4apyx6bp392-ExtraLarge.jpg', 'Omega'),
(45, 'Omega De Ville Prestige', 2100000, 'Letisztult elegancia és klasszikus megjelenés.', 'https://www.bankslyon.co.uk/wp-content/uploads/2022/12/43423402002001-hero.jpg', 'Omega'),
(46, 'Omega Aqua Terra', 2700000, 'Sportos és elegáns, fa mintás számlappal.', 'https://img.chrono24.com/images/uhren/37750101-jjjwubezip11nbnlgd3gfk8f-ExtraLarge.jpg', 'Omega'),
(47, 'Omega Speedmaster 57', 3100000, 'Vintage stílus modern technológiával.', 'https://img.chrono24.com/images/uhren/30262904-p50a691sw2db9nsyk0o9koth-ExtraLarge.jpg', 'Omega'),
(48, 'Omega Seamaster 1948', 3500000, 'Limitált kiadás a történelmi örökség előtt tisztelegve.', 'https://kronometer.hu/wp-content/uploads/2018/04/511.13.38.20.02.001.jpg', 'Omega'),
(49, 'Omega Globemaster', 2950000, 'A világ első Master Chronometer tanúsítvánnyal rendelkező órája.', 'https://img.chrono24.com/images/uhren/37416298-ysd17a3hc8u9oza5r2eag14o-ExtraLarge.jpg', 'Omega'),
(50, 'Omega Railmaster', 2400000, 'Mágneses mezőkkel szembeni ellenállás és letisztult stílus.', 'https://img.chrono24.com/images/uhren/38158157-iltao640lyqwxbw12i1klud8-ExtraLarge.jpg', 'Omega');

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
