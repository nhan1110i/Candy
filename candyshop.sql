-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2019 lúc 01:48 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `candyshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `AccountName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AccountPassword` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`AccountID`, `AccountName`, `AccountPassword`) VALUES
(1, 'Nhan', 'nhan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CategoryImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`, `CategoryImage`) VALUES
(1, 'Quà tặng', ''),
(2, 'Bánh Nhập Khẩu', ''),
(3, 'Kẹp nhập khẩu', ''),
(4, 'Nước Giải Khát, Sữa Nhập', ''),
(5, 'Thực Phẩm Sấy Khô', ''),
(6, 'Trái Cây Nhập Khẩu', ''),
(7, 'Thực Phẩm Chức Năng', ''),
(8, 'Thực Phẩm Bếp', ''),
(9, 'Bia Rượu', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerPhone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerAdd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerPhone`, `CustomerEmail`, `CustomerAdd`) VALUES
(13, 'Phạm Trọng Nhân', '0775331777', 'trongnhan1110i@gmail.com', 'số nhà 43/63 phố Văn Hội, phường Đức Thắng, Nam Từ Liêm, Hà Nội.'),
(14, 'Huỳnh Minh Tú', '0123456789', 'tu@mail.com', 'Hà Nội.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `OderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `OderDate` date NOT NULL,
  `OderStatus` int(11) NOT NULL,
  `OrderPayment` int(11) NOT NULL,
  `TotalMoney` double NOT NULL,
  `TotalQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`OderID`, `CustomerID`, `OderDate`, `OderStatus`, `OrderPayment`, `TotalMoney`, `TotalQuantity`) VALUES
(16, 13, '2019-05-07', 1, 0, 849000, 2),
(17, 14, '2019-05-08', 0, 0, 330000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oderdetail`
--

CREATE TABLE `oderdetail` (
  `OderDetailID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oderdetail`
--

INSERT INTO `oderdetail` (`OderDetailID`, `OrderID`, `ProductID`, `Quantity`) VALUES
(15, 16, 1, 1),
(16, 16, 6, 1),
(17, 17, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductPrice` double NOT NULL,
  `ProductImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProductCategoryID` int(11) NOT NULL,
  `ProductDecription` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `ProductImage`, `ProductCategoryID`, `ProductDecription`) VALUES
(1, 'Quà tặng 8/ 3 - Set 15', 519000, '1557131966226498310.jpg*15571319661775043025.jpg*15571319661012534696.jpg*1557131966591611480.jpg*1557131966431331227.jpg', 1, ''),
(2, 'Quà tặng 8/3 - Set 16', 921000, '1557132091585568805.jpg*1557132091649203353.jpg*15571320911852294762.jpg*1557132091836549110.jpg*15571320911153665819.jpg', 1, ''),
(3, 'Quà tặng 8/3 - Set 8', 569000, '15571321531102301935.jpg*1557132153820453886.jpg*15571321531873017154.jpg*1557132153741659401.jpg*15571321531164714615.jpg', 1, ''),
(4, 'Quà tặng 8/3 - Set 13', 755000, '15571322781788422415.jpg*1557132278511545317.jpg*15571322781629598756.jpg*15571322781288178130.jpg*15571322781242563318.jpg', 1, ''),
(6, 'Bánh quy Lambert Equisit Đức', 330000, '1557132551797416453.jpg*15571325511130540674.jpg*15571325511604516915.jpg*1557132551974830881.jpg*1557132551607501130.jpg', 2, 'Bánh quy Exquisit Lambertz là thương hiệu cao cấp nổi tiếng toàn cầu, gồm 11 loại bánh quy tổng hợp được phủ socola đắng và socola sữa với phương thức sản xuất truyền thống, tạo nên hương vị thơm ngon, hấp dẫn bất cứ ai ngay từ lần đầu thưởng thức.'),
(7, 'Bia Bud Light Mỹ', 85000, '1557239346498988604.jpg*1557239346730351886.jpg*1557239346570919814.jpg*15572393461735068341.jpg*1557239346400277248.jpg', 9, 'Hương vị của Bud Light khá êm và nhẹ nhàng, tạo cảm giác thoải mái khi thưởng thức tựa như một loại nước giải khát. Ngoài hương vị cay đắng của hoa bia và malt, bạn cũng dễ dàng cảm nhận được vị hậu ngọt nhẹ dịu dàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`OderID`);

--
-- Chỉ mục cho bảng `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD PRIMARY KEY (`OderDetailID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductCategoryID` (`ProductCategoryID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `OderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `oderdetail`
--
ALTER TABLE `oderdetail`
  MODIFY `OderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProductCategoryID`) REFERENCES `category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
