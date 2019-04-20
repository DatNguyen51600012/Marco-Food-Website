-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2018 lúc 01:06 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testing`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'thanh', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `pricetotal` varchar(100) NOT NULL,
  `nameproduct` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `name`, `email`, `address`, `phonenumber`, `pricetotal`, `nameproduct`, `quantity`) VALUES
(9, 'dat', 'anhthu15557@gmail.com', '499/6', '8654165448', '10', 'Hambuger', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu1`
--

CREATE TABLE `menu1` (
  `id` int(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `mon1` varchar(100) NOT NULL,
  `mon2` varchar(100) NOT NULL,
  `mon3` varchar(100) NOT NULL,
  `mon4` varchar(100) NOT NULL,
  `mon5` varchar(100) NOT NULL,
  `mon6` varchar(100) NOT NULL,
  `mon7` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menu1`
--

INSERT INTO `menu1` (`id`, `menu`, `mon1`, `mon2`, `mon3`, `mon4`, `mon5`, `mon6`, `mon7`, `price`) VALUES
(1, '1', 'Peking Duck', 'Salad', 'Pizza', 'Egg', 'Cake ', 'Ice cream', 'Fruit', '150.00'),
(2, '2', 'Beef steak', 'Chickken Fry', 'Fish Fresh', 'Fruit', 'Cake', 'Cream', 'Pig', '200.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `content1` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `content`, `img`, `grade`, `date`, `content1`) VALUES
(1, 'Pizza', ' Authentic Neapolitan pizzas are made with local ingredients like San Marzano tomatoes, which grow on the volcanic plains to the south of Mount Vesuvius and Mozzarella di Bufala Campana, made with the milk from water buffalo raised in the marshlands of Campania and Lazio in a semi-wild state (this mozzarella is protected by its own European law). The genuine Neapolitan pizza dough consists of Italian flour, natural Neapolitan yeast or brewer\'s yeast, salt and water.The dough must be kneaded by h Lazio style: Pizza in Lazio (Rome), as well as in many other parts of Italy is available in 2 different \"flavors\": 1) In take-away shops so-called \"Pizza Rustica\" or \"Pizza a Taglio\". Pizza is cooked in long, rectangular baking pans and relatively thick (1–2 cm). The crust similar to that of an English muffin and mostly cooked in an electric oven. When purchased, it is usually cut with scissors or knife and priced by weight. 2) In Pizza Restaurants (Pizzerias) it is served in a dish in its traditional round shape.', 'g10.jpg', '8', '12/10/2018', 'Lazio style: Pizza in Lazio (Rome), as well as in many other parts of Italy is available in 2 different \"flavors\": 1) In take-away shops so-called \"Pizza Rustica\" or \"Pizza a Taglio\". Pizza is cooked in long, rectangular baking pans and relatively thick (1–2 cm). The crust similar to that of an Engl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reversation`
--

CREATE TABLE `reversation` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `reversation`
--

INSERT INTO `reversation` (`id`, `name`, `email`, `phonenumber`, `date`, `time`, `menu`) VALUES
(1, 'Dat', 'dat@gmail.com', '09458548964', '12/11/2018', '4:00 PM', 'Menu 1'),
(0, 'dat', 'maicocarrick@gmail.com', '', '12/18/2018', '', ''),
(0, 'dat', 'maicocarrick@gmail.com', '', '12/18/2018', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reversation1`
--

CREATE TABLE `reversation1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `reversation1`
--

INSERT INTO `reversation1` (`id`, `name`, `email`, `date`, `time`, `menu`, `phonenumber`) VALUES
(5, 'dat', 'maicocarrick@gmail.com', '12/06/2018', '7:00 PM', '2', '8654165448'),
(6, 'dat', 'maicocarrick@gmail.com', '12/03/2018', '7:00 PM', '3', '8654165448');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `Type` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `describe1` varchar(300) NOT NULL,
  `material` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `Type`, `describe1`, `material`) VALUES
(1, 'Sweet Cake', 'g2.jpg', 2.00, 'Breakfast', 'Cake is a form of sweet dessert that is typically baked. In their oldest forms, cakes were modifications of breads, but cakes now cover a wide range of preparations that can be simple or elaborate, and that share features with other desserts such as pastries, meringues, custards, and pies.', 'Eggs , Cream , Fruit , ...'),
(2, 'Hambuger', 'g3.jpg', 10.00, 'Breakfast', '', ''),
(3, 'Beef Steak', 'g4.jpg', 35.00, 'Lunch', '', ''),
(10, 'Chicken Fry', 'chicken.jpg', 20.00, 'Lunch', '', ''),
(4, 'Pizza', 'pizza.jpg', 10.00, 'Fastfood', 'this is pizza', 'egg milk vegetable'),
(5, 'Hot Dog', 'hotdog.jpg', 3.00, 'Fastfood', '', ''),
(6, 'Fruit Mix', 'g1.jpg', 5.00, 'Breakfast', '', ''),
(7, 'Hambuger + French Fry', 'ham+frenchfry.jpg', 15.00, 'Breakfast', '', ''),
(8, 'Sashimi', 'sashimi.jpg', 6.00, 'Fastfood', '', ''),
(9, 'Simon Fry', 'simonfry.jpeg', 15.00, 'Lunch', '', ''),
(11, 'Avocado Smoothie', 'avocadosmoothie.jpg', 3.50, 'Drink', '', ''),
(12, 'Strawberry Smoothie', 'strawberrysmoothie.jpg', 5.00, 'Drink', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `address`, `age`, `phonenumber`) VALUES
(1, 'dat', '123456', 'jjj@gmail.com', '54654/54', '30', '8549465'),
(2, 'dat', '123456', 'jjj@gmail.com', '54654/54', '30', '8549465');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reversation1`
--
ALTER TABLE `reversation1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `menu1`
--
ALTER TABLE `menu1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `reversation1`
--
ALTER TABLE `reversation1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
