-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-29 04:53:57
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `steak`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `sid` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `certification` varchar(255) NOT NULL,
  `activated` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`sid`, `email_id`, `password`, `nickname`, `mobile`, `address`, `created_at`, `certification`, `activated`) VALUES
(1, '777@yahoo.com.tw', '7c4a8d09ca3762af61e59520943dc26494f8941b', '++', '0928560437', NULL, '2016-12-22 11:36:18', 'e4a2214266c7b75e6ff3de9404cf2af40790d5d2', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`sid`, `member_sid`, `amount`, `order_date`) VALUES
(1, 1, 3079, '2016-12-26 17:21:20'),
(2, 1, 10093, '2016-12-28 11:25:22'),
(3, 1, 9774, '2016-12-28 11:49:53'),
(4, 1, 8394, '2016-12-28 12:10:19'),
(5, 1, 9793, '2016-12-28 13:19:02'),
(6, 1, 4078, '2016-12-28 13:22:19'),
(7, 1, 5596, '2016-12-28 13:22:46'),
(8, 1, 17914, '2016-12-28 13:36:48'),
(9, 1, 8394, '2016-12-28 13:38:49'),
(10, 1, 8394, '2016-12-28 13:39:59'),
(11, 1, 23872, '2016-12-28 19:26:01'),
(12, 1, 10114, '2016-12-28 21:10:02'),
(13, 1, 6796, '2016-12-29 11:50:44');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_country` varchar(100) NOT NULL,
  `p_count` int(11) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_areas` varchar(100) NOT NULL,
  `p_varieties` varchar(100) DEFAULT NULL,
  `p_alcohol` varchar(100) NOT NULL,
  `p_winning` varchar(100) DEFAULT NULL,
  `p_products` text,
  `p_winery` text,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`sid`, `category_id`, `category_country`, `p_count`, `p_id`, `p_name`, `p_areas`, `p_varieties`, `p_alcohol`, `p_winning`, `p_products`, `p_winery`, `price`) VALUES
(1, 1, '法國', 1, 'r1011', 'Brio de Cantenac Brown 2012', 'Bordeaux Margaux', '65% 卡本內蘇維儂（Cabernet Sauvignon）', '13%', 'Jean-Marc Quarin 87分', NULL, '康田布朗古堡的二軍紅酒採用較年輕的葡萄藤，但大部分還是採用由康田布朗古堡葡萄園中特別挑選的區塊產出的葡萄。在70年代早期，康田布朗古堡將其土地擴展至Cantenac及Soussans並重新種植。價格較康田布朗古堡的一軍來得平易近人，BRIO有著瑪歌村經典的優雅、清新且以果香為主的香氣。', 1399),
(2, 1, '法國', 1, 'r1012', 'Les Hauts de Smith Red 2012', 'Bordeaux Pessac-Leognan', NULL, '12.5 %', 'Cellar Tracker 92分', NULL, '酒莊歷史可追溯到1365年。18世紀，蘇格蘭人George Smith買入酒莊，把自己的名字加入酒莊大名之中。到了最重要的1842年，Duffour-Dubergier先生，是當時的波爾多市長，同時也是位釀酒迷，從母親那裡繼承了酒莊，並發揚光大，奠定酒堡日後的知名度。1958年Louis Eschenauer獲得酒莊所有權後開始進行了大量投資，包括建造了一座非常棒的地下酒窖，可以同時容納1000只大桶。', 1399),
(3, 1, '法國', 1, 'r1013', 'Clarendelle Rouge, Bordeaux A.O.C. 2011', 'Bordeaux', '78 % Merlot 梅洛, 17 % Cabernet Sauvignon卡貝納蘇維翁, 5% Cabernet Franc卡本內弗朗', '13.5 %', '日本經濟新聞「最為餐桌增色的好酒」第一名', NULL, '康田布朗古堡的二軍紅酒採用較年輕的葡萄藤，但大部分還是採用由康田布朗古堡葡萄園中特別挑選的區塊產出的葡萄。在70年代早期，康田布朗古堡將其土地擴展至Cantenac及Soussans並重新種植。', 1280),
(4, 1, '法國', 1, 'r1014', 'Domaines FABRE Chateau Landat 2012', 'Bordeaux Haut-Medoc', '60 % Cabernet Sauvignon、35 % Merlot、5 % Petite Verdot', '12.5 %', NULL, '龍達古堡是高品質的中級酒莊酒，部份位於西塞克北方，部分位於維特邑的高地上。此酒的高品質在1881年就已經受到肯定，在1976年時，本莊園歸屬到法布荷家族裏。', NULL, 1699),
(5, 1, '法國', 1, 'r1015', 'Nuiton Beaunoy Bourgogne Hautes-Côtes De Beaune 2013', 'Bourgogne', '100% Pinot Noir', '12 %', NULL, NULL, '日月酒莊一直是上夜丘和上伯恩區的釀酒先驅。與金丘相接的村落裡，人們生生不息，日月酒莊的員工鍥而不捨，齊心協力地發展葡萄種植技術，鑽研釀酒工藝。這片土地上，從北到南、從東到西，"上丘酒窖(Cave des Hautes-Cotes)"的葡萄種植者團結一致，在日月酒莊的統領下，致力於釀製能表達金丘每塊土地內涵的酒。', 1380),
(6, 1, '法國', 1, 'r1016', 'Confuron-Gindre Vosne-Romanee 2013', 'Bourgogne', '100% Pinot Noir', '12.5 %', NULL, NULL, '傳承五代的傳統布根地家族酒莊，François Confuron 從18歲跟著父親承襲栽種與釀酒工藝，在1989年經營著自有的2公頃的葡萄田.  同時，也向人租葡萄田種植葡萄並也在其他酒莊工作，學習前人的經驗；不使用化學藥劑、除蟲劑。從以前到現在一直使用天然酵母，釀酒方法也遵循自家傳統，並參考自然動力法的月曆來裝瓶。', 2199),
(7, 1, '法國', 1, 'r1017', 'Joseph Roty Marsannay Village En Ouzelois', 'Bourgogne', '100% Pinot Noir', '13%', 'BH90 IWC89-91', '有著豐富和複雜的香氣，如黑色水果，香草香料等。口感的單寧與酸度結構完整，水果風味十足。', NULL, 1999),
(8, 1, '法國', 1, 'r1018', '2011 Maurice Gavignet Les Sous-Roches, Monthelie, France', 'Bourgogne', NULL, '12.5 %', '布根地葡萄酒大賽 金獎', NULL, '佳維那酒莊（Maurice Gavignet）位於法國勃艮第（Burgundy）夜丘（Cote de Nuits）產區的夜聖喬治（Nuits-Saint-Georges）產酒村，是該產酒村內的一座知名酒莊。', 790),
(9, 1, '美國', 2, 'r2011', 'Sean Minor-Cabernet Sauvignon Paso Robles 2013', 'Paso Robles', '80% Cabernet Sauvignon & 20% Petite Sirah ', '13%', ' Critics Challenge International Wine Competition 2013 -Silver Medal(2010)', NULL, '尚邁諾酒莊來自位於擁有涼爽海洋氣流影響和陽光充足的加州海岸的葡萄園。酒莊致力於提供最適生長環境下釀造的葡萄所釀成的酒，酒款風味和品質年年保持一致。近年來，酒莊區塊性酒款包含來自納帕谷的卡本內蘇維濃和梅洛、中央海岸的黑皮諾和夏多內及來自索諾瑪郡的白蘇維濃葡萄。', 790),
(10, 1, '美國', 2, 'r2012', 'Sean Minor 4 Bears Pinot Noir, Central Coast 2014', 'California', '100% Pinot Noir', '12.5 %', 'New York World Wine & Spirits Competition 金牌', NULL, '尚邁諾酒莊來自位於擁有涼爽海洋氣流影響和陽光充足的加州海岸的葡萄園。酒莊致力於提供最適生長環境下釀造的葡萄所釀成的酒，酒款風味和品質年年保持一致。近年來，酒莊區塊性酒款包含來自納帕谷的卡本內蘇維濃和梅洛、來自帕索羅伯斯的卡本內蘇維濃、卡內羅斯的黑皮諾、中央海岸的黑皮諾和夏多內及來自索諾瑪郡的白蘇維濃葡萄。', 1099),
(11, 1, '美國', 2, 'r2013', 'Hahn Family Wines-Central Coast GSM', 'Central Coast, California', '62% Grenache、28% Syrah 與  5% Mourvedre', '13.5 %', 'Wine Accolades:98 POINTS!', '來自加州中央海岸的優質葡萄品種－格納希(G) ，喜哈(S)及慕維得爾(M)，呈現法國南隆河的獨特風情。格納希為佳釀帶來莓果及香料芳香，喜哈調合色澤及單寧，慕維得爾則增添酸度及酒體。', NULL, 1899),
(12, 1, '美國', 2, 'r2014', 'Hahn Family Wines - Boneshaker Zinfandel', 'Lodi, California', '85% Zinfandel、 7% Cabernet Sauvignon、6% Merlot、2% Petite Sirah ', '12.5 %', '2012 Vintage 87 Points-Wine Enthusiast Magazine, 2011 Vintage', '想像一下，騎乘著鍛鐵的自行車且碰撞倒在鵝卵石的街道上。撲通，撲通，撲通......。過去這種尋求刺激的騎法稱為所謂的”骨頭鬆散”(Boneshaker)。你可以感覺到牙齒的搖晃和骨頭的鬆散。單車魅影聖粉黛紅酒，酒體豐盈而強勁，馥郁的黑莓，黑櫻桃果香，濃烈的香草巧克力和黑巧克力香氣。', NULL, 1399),
(13, 1, '美國', 2, 'r2015', 'Ironstone Vineyards Old Vine Zinfandel Reserve 2010', 'California', '91% Zinfandel/ 9% Petite Sirah', '13%', 'WE:91分!', NULL, '尚邁諾酒莊來自位於擁有涼爽海洋氣流影響和陽光充足的加州海岸的葡萄園。酒莊致力於提供最適生長環境下釀造的葡萄所釀成的酒，酒款風味和品質年年保持一致。近年來，酒莊區塊性酒款包含來自納帕谷的卡本內蘇維濃和梅洛、來自帕索羅伯斯的卡本內蘇維濃、卡內羅斯的黑皮諾、中央海岸的黑皮諾和夏多內及來自索諾瑪郡的白蘇維濃葡萄。', 2890),
(14, 1, '美國', 2, 'r2016', 'Hahn Family Wines - Smith & Hook Cabernet Sauvignon 2012', '加州（Central Coast, California）', '93% Cabernet Sauvignon、7% Petite Sirah', '14%', ' 2012 Vintage 2011年榮獲 Wine Enthusiast:87分', NULL, '史密斯虎克莊園生產卓越品質的單一葡萄品種 – 卡本內蘇維濃聞名。成立於1980年，前身為飼養馬、牛的牧場，在30餘年的努力下，目前史密斯虎克葡萄園儼然已成為加州中部海岸生產卡本內蘇維濃佳釀的領導先驅。', 2100),
(15, 1, '美國', 2, 'r2017', 'Mogen David Concord', '紐約', NULL, '13%', NULL, '酒色暗紅，口味香甜，酒香濃郁，是開胃酒中的最佳選擇！加入冰塊飲用，冰塊與酒的比例為 1：1，入喉更加香甜迷人、清爽順口，風味絕佳，更甚一般的雞尾酒！', NULL, 1399),
(16, 1, '美國', 2, 'r2018', 'Edgewood Cabernet Sauvignon Napa Valley', 'NAPA VALLEY', 'Cabernet Sauvignon', '13%', '金牌 (2011年份)- 2015 Mundus Vini 德國最大葡萄酒競賽', '含有豐富單寧酸，香味中帶有濃厚 黑莓及櫻桃等多種水果香味，其中藍莓香氣使酒香更加濃郁飽滿。口感柔滑順口，不失甘甜更有來自橡木桶陳年後的焦糖及香草芬芳。', NULL, 1699),
(17, 1, '智利', 3, 'r3011', 'Viña Morandé - Gran Reserva Cab Sauvignon 2010', 'Maipo Valley', '100% Cabernet Sauvingon 2010', '14%', NULL, '以前瞻的智慧與獨到的經驗開拓智利卡薩布蘭卡谷(Casablanca Valley)這塊經典葡萄園區的Pablo Morande在1996年創辦了茉蘭朵酒莊Viña Morandé。 同年，智利釀酒技術協會頒發Pablo Morande 為「年度最佳釀酒師」，接著他在1997年更獲得智利美食記者團票選為「最佳釀酒師」。', NULL, 690),
(18, 1, '智利', 3, 'r3012', 'Mont Gras Winery Antu Cabernet Carmenere 2014', 'Chile', '70% Cabernet Sauvignon/ 30% Carmenere', '13%', NULL, NULL, 'MontGras Vineyard 孟格拉斯酒，廠位於智利中部Colchagua Valley，1992年開始量產酒至今，已獲得許多國家級及國際級品酒人士的讚賞並，獲得超過200個獎項，更於2002年贏得ISWC(國際世界名酒大賽)肯定為“Best Chilean Producer。', 1199),
(19, 1, '智利', 3, 'r3013', 'Viña Morandé Morande Vigno Carignan 2009', 'Maule', '69% Carignan，26% Syrah，5% Chardonnay', '15%', NULL, NULL, '以前瞻的智慧與獨到的經驗開拓智利卡薩布蘭卡谷這塊經典葡萄園區的Pablo Morande在1996年創辦了茉蘭朵酒莊Viña Morandé。 同年，智利釀酒技術協會頒發Pablo Morande 為「年度最佳釀酒師」，接著他在1997年更獲得智利美食記者團票選為「最佳釀酒師」。', 1399),
(20, 1, '智利', 3, 'r3014', 'Vina Morande Gran Reserva Chardonnay', '卡薩布蘭卡谷(Casablanca Valley)', ' 100% Chardonnay', '14%', NULL, NULL, '以前瞻的智慧與獨到的經驗開拓智利卡薩布蘭卡谷這塊經典葡萄園區的Pablo Morande在1996年創辦了茉蘭朵酒莊Viña Morandé。 同年，智利釀酒技術協會頒發Pablo Morande 為「年度最佳釀酒師」，接著他在1997年更獲得智利美食記者團票選為「最佳釀酒師」。', 1999),
(21, 1, '智利', 3, 'r3015', 'Antares Cabernet Sauvignon', 'Chile', '100% Cabernet Sauvignon', '13%', NULL, '深沉的暗紅色澤，充滿了黑醋栗果香，氣味誘人並帶著些許橡木桶的香氣，口感中帶有些許的肉桂與可可的絕妙滋味。酒體紮實且不失雅致，酒質結構良好，口感飽滿柔順。', NULL, 2490),
(22, 1, '智利', 3, 'r3016', 'Merlot', 'Central Valley', '100% Merlot', '14%', 'Concours Mondial de Bruxelles 2014: Gold', '酒色深紅帶著些許的紫色，伴隨著濃郁的漿果香味，香味中包含有李子、黑莓、藍莓以及淡淡的煙燻味，濃郁且飽滿，單寧酸使得口感柔滑而順口。', NULL, 999),
(23, 1, '智利', 3, 'r3017', 'Vina Santa Carolina (VSC)', 'Rapel Valley', '80% Cabernet Sauvignon、10% Petit Verdot、10 % Syrah', '13%', '金牌 (2011年份)- 2015 Mundus Vini 德國最大葡萄酒競賽', '色澤如紅寶石般，同時顯露出些微的紫色，色澤飽滿，散發水果與花香的芬芳，和些微森林香草般氣息，相當平衡且不衝突。口感豐富有變化並帶有微甜的成熟丹寧風味。紅葡萄酒是最佳葡萄所釀造，只在最佳的年份釀造，全看釀酒師根據當年氣候、葡萄條件而決定是否釀造，可說是由釀酒師自由發揮釀酒天份的葡萄酒藝術品！', NULL, 1199),
(24, 1, '智利', 3, 'r3018', 'Santa Carolina Herencia ', 'Colchagua Valley', '100% Carmenere', '15%', '93 pts (2010年份) - Wine Enthusiast 葡萄酒愛好者雜誌 ', '酒色呈深邃的石榴紅，充滿了快要從瓶子爆發出來的成熟水果香氣，洋李、櫻桃、菸草及丁香。酒體飽滿、圓潤、有著黑醋栗及甘草的味道。單寧甜美圓潤、餘韻持久不散、擁有陳放超過10年以上的潛力。', NULL, 1699),
(25, 2, '法國', 4, 'w1011', 'Le Chardonnay Domaine de Baron', 'arques 2011', '100% Chardonnay', '14%', '14.5 分 – Jancis Robinson 英國知名葡萄酒評論家', '', '色澤金黃明亮，像是水晶一般的透徹; 豐富優雅的香氣蘊含了像是酒香水蜜桃、馬鞭草、以及礦石等風味; 入口強壯又不失協調，輔以清新帶有薄荷味的風味; 中段帶有柑橘類水果及礦石風味的口感。整體非常平衡、尾韻悠長且清新。', 1890),
(26, 2, '法國', 4, 'w1012', 'Clarendelle Blanc Bordeaux A.O.C. 2013', 'Bordeaux', '61 % Sauvignon Blanc、32 % Sémillon、7 % Muscadelle', '15%', NULL, '希帝波爾多白酒是一款由Château Haut-Brion團隊打造，具有精緻口感與均衡架構的白酒，就如同Château Haut-Brion一樣富有層次與神秘感。', NULL, 2199),
(27, 2, '法國', 4, 'w1013', 'Saint-Roch Vieilles Vignes', 'AOP Côtes du Roussillon', '80% Grenache Blanc、20%Roussanne ', '15%', NULL, NULL, '莊園是Francis Guérin於1998年建立，他買下附近的村莊，根據土壤性質和生態系統，重新整合並挑選出最好的土地，而這些土地由黑莓樹叢、無花果樹、石榴樹、櫻桃樹、角豆樹、橡樹，以及百里香、薰衣草和茴香田所圍繞。', 1380),
(28, 2, '法國', 4, 'w1014', 'Ginestet Bordeaux Blanc', 'RogerSabon/Les Olivets', '100% Chardonnay', '14.5%', '2011年國際葡萄酒挑戰賽-表揚（2010年份）', '香氣和口感都帶著鮮明的水果和辛香料，搭配著絲緞般的細緻單寧，有如一首協奏曲。這是一款大家都在尋找的教皇新堡紅酒，它滿足了幾乎每個人對教皇新堡的要求!多元化的口感讓它成為各式餐點的好搭檔。其與生具來的魅力足以迷倒任何人，甚至教皇!', '', 990),
(29, 2, '法國', 4, 'w1015', 'Antiguas Reservas Chardonnay', 'Maipo Valley', '55% Cabernet Sauvignon、45% Merlot', '13.5%', '2010年份-Wine Enthusiast Top 100 (第32名)', '這款中等酒體的酒款呈現出它優雅的單寧，非常的平易近人，和牛排、豬肋排、家禽、義大利麵、漢堡和烤肉搭配都很適合。新橡木的香氣將酒款轉化成柔軟的的口感，帶有煙燻和黑醋栗的氣息，以及早已完美融入其中的單寧，迷人的酸度帶給酒款最後的提升。', NULL, 1380),
(30, 2, '法國', 4, 'w1016', 'Deen Vat 2 Sauvignon Blanc', 'AOP Côtes du Roussillon', '80% Grenache Blanc、20%Roussanne ', '15%', NULL, NULL, '莊園是Francis Guérin於1998年建立，他買下附近的村莊，根據土壤性質和生態系統，重新整合並挑選出最好的土地，而這些土地由黑莓樹叢、無花果樹、石榴樹、櫻桃樹、角豆樹、橡樹，以及百里香、薰衣草和茴香田所圍繞。佔地40公頃，居於Agly山谷的Maury村莊，距離Perpignan和地中海15哩，土壤為以石灰岩為基底的黏土片岩。', 1690),
(31, 2, '德國', 5, 'w2011', 'Fritz Haag - Brauneberger Juffer Sonnenuhr Riesling Auslese', 'Germany', '100% Riesling', '14%%', 'Jancis Robinson 評分:18 分', '極為嚴選的方式挑選葡萄，甚至有部份來自極為高齡的葡萄藤。豐富白桃和鮮甜的芒果香，並有些許的奶油與草本花卉的香氣，溫和的酸度，尾韻帶點鹹度。整體呈現華麗的風格與高級的貴腐氣息，與略為豐腴的體感。', NULL, 1688),
(32, 2, '德國', 5, 'w2012', 'Schloss Lieser - Riesling Kabinett', 'Germany', '100% Riesling', '13%', NULL, '精釀微甜白酒/展現出麗絲玲的典型特質：成熟酸度架構，活潑、帶有些微氣泡的口感，呈現出純淨的果香，爽口且清淡，但入口不顯得單薄。', NULL, 1280),
(33, 2, '德國', 5, 'w2013', 'Schmitt Söhne - Blue Riesling Sptlese', 'Germany', '100% Riesling', '12.5 %', NULL, '此酒款選取精粹而飽滿的果實，完美的結合了成熟果實的果酸和果糖，散發出濃郁的水果和礦物質香味。', NULL, 699),
(34, 2, '智利', 6, 'w3011', 'Cousino Macul - (Varietal) Chardonnay', 'Chile', '100 % Chardonnay', '13%', 'WA 2011 評分: 85 分', '未過桶的 Chardonnay 展現出清新果香味與良好的自然酸度。酒色淺黃帶有綠色光澤，香氣有青蘋果、白桃，還帶點釋迦的香氣，酸度明亮，果香味伴隨著尾韻走，相當持久。', NULL, 599),
(35, 2, '智利', 6, 'w3012', 'PACO & LOLA 2012', 'Rias Baixas (D.O.)', '100% Albarino ', '12.5% ', 'International Wine & Spirit Awards 2013 Gold medal', '晶瑩的金黃色，邊緣鑲著透亮的綠光，清脆和諧的果香在空間裡遊蕩，青蘋果、梨子、柑橘、桃子以及香草和細緻花香，可愛極了。新鮮飽滿，滑潤的脂質口感如絲絹，熱帶水果和礦物風味彼此和諧。', NULL, 900),
(36, 3, '法國', 7, 'c1011', 'Joseph Perrier - Cuvée Royale Demi-Sec ', 'Champagne', ' 35% Chardonnay、35% Pinot Noir、30% Pinot Meunier', '14%', NULL, '以微香甜的方式做表現，其中添約 20% 的儲酒是來自我們擁有的 20 個不同村莊，包涵Cumières, Damery, Hautvillers 與 Verneuil，造就了口感的豐富與層次。豐厚的口感在這支香檳中會有甜美的黃桃香氣呈現，微甜的口感非常適合台灣的飲用風情。', NULL, 1990),
(37, 3, '法國', 7, 'c1012', 'Joseph Perrier - Cuvee Josephine', 'Champagne', NULL, '13%', 'Wine Spectator 評分:92 分', 'Joseph Perrier的鎮莊之寶，葡萄比率從未公開，瓶身為藝術名家設計，高貴精典！帶有通透誘人、華麗馥郁的花朵香氣，令人為之神魂顛倒，另外也散發出成熟的鳳梨、甜桃、杏桃，以及些微的奶油、烤麵包等香氣，尾韻的甘味長且強勁，是款精彩卓越的作品。此酒款曾與Krug、Bollinger R.D.、Louis Roederer Cristal、Dom Perignon同時被Robert Parker評選最佳經典的高檔香檳！', NULL, 1699),
(38, 3, '法國', 7, 'c1013', 'LANSON Champagne Black Label', 'Champagne', '35% Chardonnay、50% Pinot Noir、15% Pinot Meunier', '12%', '榮獲2015IWSC大賽特優銀牌', '明亮清澈的酒體，爽脆、新鮮帶有白色花朵的香氣，它給以充滿活力與春天氣息的香味，點綴以多種的花蜜芬芳。口感上帶有成熟水果和柑橘的香氣，酒體均衡，順口且令人愉悅。 ', NULL, 2380),
(39, 3, '義大利', 8, 'c2011', ' Bottega - Petalo Vino Dell’Amore Moscato', 'Italy', '100% Moscato', '12.5%', NULL, '這款迷人的微甜氣泡酒使用很成熟的蜜思嘉白葡萄釀造，葡萄種植在義大利威內多中部的尤佳寧山區 (Euganean Hills) ，在這個地方以種植玫瑰和蘋果聞名。口感香甜而帶些許微微果酸，很適合冰鎮後在炎炎夏日飲用。', NULL, 1388),
(40, 3, '義大利', 8, 'c2012', 'Castello Banfi - Banfi Brut', 'Italy', ' 50% Pinot Noir、40% Chardonnay、10% Pinot Blanc', '11%', NULL, '完全按照香檳的釀造方法生產，至少24個月的發酵期。由50%黑皮諾、40%的夏多內、以及10%白皮諾混調而成的氣泡酒；淺稻草色中帶點錦緻的珍珠白色，濃郁的芬芳香氣，清爽中帶著優雅的果酸,和諧極緻的平衡感，充滿整個口中，呈現出完美的餘韻。', NULL, 780),
(41, 3, '義大利', 8, 'c2013', 'ACCADEMIA PROSECCO SPUMANTE DOC', 'Italy', 'PROSECCO', '12.5 %', NULL, '酒色呈麥桿金黃色澤，澄淨清澈；倒入杯中，金黃蘋果、西洋梨及熱帶水果香氣四溢，清爽芳香的均衡口感，令人回味無窮。 ', NULL, 699),
(42, 3, '西班牙', 9, 'c3011', 'CAVA de VILARNAU Demi Sec', 'Spain', NULL, '11%', NULL, '閃著金色的稻草色澤，如蘋果般甜美爽口的滋味，清爽的柑橘類點綴其中，完美平衡了口感甜度與酸味的表現，無論搭餐或單飲都是不錯的選擇。', NULL, 1280),
(43, 3, '西班牙', 9, 'c3012', 'CAVA de VILARNAU BRUT RESERVA ROSE', 'Spain', 'Trepat、Pinot Noir', '11%', NULL, '作品加入Pinot Noir葡萄釀製，賦與酒液唯美浪漫的粉紅色澤；氣泡細緻繽紛、酸度完美、散發濃郁的成熟草莓與覆盆子香氣，為餐前開胃酒的最佳選擇。', NULL, 699),
(44, 3, '西班牙', 9, 'c3013', 'FREIXENET CORDON ROSADO', 'CATALONIA PENEDÈS', 'TREPAT', '11%', NULL, '可以感受到草莓與華麗深厚風味的超人氣甜味玫瑰氣泡酒。 顏色飽滿美麗的玫瑰色。黑葡萄帶出的沉穩單寧味與成熟草莓帶有的自然甜味形成完美的搭配。使用來自地中海沿岸塔拉戈納省的康卡‧巴貝拉地區，擁有濃厚乾無花果和石榴糖漿特殊味道的葡萄品種—Trepat。', NULL, 1290),
(45, 3, '西班牙', 9, 'c3014', 'Cava Brut Reserva de la Musica', 'Cataluna', '不甜氣泡酒', '11.5%', NULL, '傳統風格的不甜卡瓦酒、洋溢細緻持久的氣泡', NULL, 825),
(46, 3, '西班牙', 9, 'c3015', 'RONDEL BLUE BRUT', 'CAVA', '不甜氣泡酒', '11.5%', NULL, NULL, '明亮的鮮黃色澤，並擁有細膩綿密的氣泡。充滿成熟水果(蘋果)的香氣，再帶出淡淡的烤吐司和核果香氣，呈現在酒窖熟成的特徵。 美食搭配：適合搭配開胃小點。', 1890),
(47, 3, '西班牙', 9, 'c3016', 'Spain Dream Line Premium', 'Cataluna', '不甜氣泡酒', '8.5%', NULL, '特別選用麝香葡萄莫斯卡托，清澈透亮，吸引著我們的是她那耀眼的紅銅色澤。均勻的分子小氣泡，在紅銅色澤中緩慢流動。利用自然發酵和低溫控制保持氣泡酒的品質。鼻子感受到的是清爽、乾淨的氣味；嘴裡品嚐到的是莫斯卡托的風味，淡淡柑橘果香、蜂蜜甜味和微微的酸，視覺、嗅覺、味覺一次滿足。', NULL, 1450);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
