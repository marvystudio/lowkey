-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2019 lúc 06:16 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lowkey`
--
CREATE DATABASE IF NOT EXISTS `lowkey` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lowkey`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_about`
--

CREATE TABLE `lk_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_admin`
--

CREATE TABLE `lk_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_blog`
--

CREATE TABLE `lk_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `header` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_create` datetime NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lk_blog`
--

INSERT INTO `lk_blog` (`id`, `title`, `header`, `content`, `author`, `date_create`, `thumb`, `view`, `active`) VALUES
(1, 'Dịch Vụ Marvy', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(2, 'Blog numba1', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos !', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(3, 'blog 2', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos V', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(4, 'Ten Bai Blog', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos II', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(5, 'Dịch Vụ Marvy 212', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(6, 'D1212ịch reqw Vụ Marvy', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos', '2019-07-24 06:14:08', 'thump.jpg', 2, 1),
(7, 'Ravd Vddaa Congtt', 'Dịch vụ làm website chuyên nghiệp Marvy tập trung đưa thương hiệu của bạn lên tầm cao mới bằng một website hoàn hảo từ backend lẫn frontend. Thương hiệu của bạn sẽ được khoác lên chiếc áo tuyêt vời nhất để thu hút người truy cập từ cái nhìn đầu tiên. Chúng tôi cam kết đem lại kết quả thật sự hài lòng.', 'Chất lượng sản phẩm được đặt lên hàng đầu\r\nMạnh từ kỹ thuật đến mỹ thuật, Marvy mong muốn chinh phục khách hàng khó tính nhất bằng chất lượng cao cấp và có tâm. Một khi lựa chọn Marvy, khách hàng sẽ được đảm bảo không những về chất lượng tuyệt đối mà còn dịch vụ hỗ trợ, hậu mãi, bảo trì để đảm bảo kênh bán hàng trực tuyến và website luôn hoạt động trơn tru. “Nếu khách hàng chưa hài lòng - chúng tôi vẫn chưa xong! Và sẽ tiếp tục cho đến khi nào khách hàng hài lòng. Sự mãn nguyện của khách hàng là kết quả cuối cùng mà chúng tôi muốn có được.”\r\n\r\nTối ưu hóa các tính năng website\r\nSản phẩm cảu Marvy phải đảm bảo những quy chuẩn sau đây để gọi là một website hoàn chỉnh:\r\n\r\nThể hiện được bản sắc thương hiệu\r\nThiết kế giao diện chuyên nghiệp, hình ảnh rõ ràng, thông tin đầy đủ\r\nHiển thị sản phẩm nổi bật, dịch vụ feature, chương trình khuyến mãi hiện thời\r\nGiao diện web đẹp và có thẩm mỹ\r\nKhông như những dịch vụ làm website giá rẻ với giao diện được làm sơ sài, Marvy studio rất coi trọng thẩm mỹ của website. Chúng tôi không chỉ đơn thuần làm một trang web, chúng tôi là người kể chuyện, truyền cảm hứng cho doanh nghiệp của bạn Mỗi ngành nghề có một đặc thù riêng nên thiết kế và tính năng của web cũng không hề giống nhau. Nguyên tắc làm việc của Marvy là thấu hiểu nhu cầu khách hàng, xem xét và nghiên cứu cẩn thận trước khi thực hiện: màu sắc, bố cục, cách bày trí, nôi dung hiển thị,… để cho ra một sản phẩm toàn diện. Chúng tôi hiểu website là một phần quan trọng góp mặt trong hệ thống thương hiệu, đi kèm với logo và bộ nhận diện thương hiệu. Website là nơi thương hiệu sẽ tiếp xúc trực tiếp với khách mua hàng, họ quyết định bấm chọn mua hay không phụ thuộc rất nhiều vào độ tin cậy và phong cách mà trang web thể hiện. Marvy sẽ giúp thương hiệu của bạn tạo nên thiện cảm với khách hàng từ cái nhìn đầu tiên', 'Genos', '2019-07-24 06:14:08', 'thump.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_eservice`
--

CREATE TABLE `lk_eservice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `unit` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_esop`
--

CREATE TABLE `lk_esop` (
  `id` int(11) NOT NULL,
  `id_pack` int(11) NOT NULL,
  `id_eservice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_pack`
--

CREATE TABLE `lk_pack` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `info` text NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lk_pack`
--

INSERT INTO `lk_pack` (`id`, `name`, `price`, `info`, `active`) VALUES
(1, 'BUSINESS', 1000000, 'Thiết kế giao diện độc quyền, chuẩn SEO, tương thích mọi thiết bị. Phù hợp với đối tượng là doanh nghiệp cần website với giao diện chuyên nghiệp.', 1),
(2, 'STUDIO', 2000000, 'Giao diện tương tác, branding 4.0, hỗ trợ web AR/XR. Phù hợp với đối tượng doanh nghệp muốn làm nổi bật thương hiệu của mình.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_procedure`
--

CREATE TABLE `lk_procedure` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lk_procedure`
--

INSERT INTO `lk_procedure` (`id`, `content`, `orders`) VALUES
(1, 'Thu thập thông tin, thảo luận và thấu hiểu nhu cầu khách hàng', 1),
(2, ' Phân tích, đưa ra giải pháp, thiết kế layout giao diện', 2),
(3, 'Tiến hành lập trình, triển khai và tối ưu hóa các tính năng', 3),
(4, 'Kiểm tra, testing', 4),
(5, 'Nghiệm thu và bàn giao sản phẩmg', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_project`
--

CREATE TABLE `lk_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thump` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_service`
--

CREATE TABLE `lk_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kind` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lk_service`
--

INSERT INTO `lk_service` (`id`, `name`, `kind`, `active`) VALUES
(1, 'Bản Thiết Kế Độc Quyền', 1, 1),
(2, 'Trang Admin', 1, 1),
(3, 'Hỗ Trợ 24/7', 1, 1),
(4, 'Chatbot', 1, 1),
(5, 'SSL', 1, 1),
(6, 'Không Giới Hạn Băng Thông', 1, 1),
(7, 'Chuẩn SEO', 1, 1),
(8, 'Mail Doanh Nghiệp', 1, 1),
(9, 'Hỗ Trợ Xem Ảnh 360', 1, 1),
(10, 'Hỗ Trợ Xem AR', 1, 1),
(11, 'Thiết Kế Logo Chuyên Nghiệp', 1, 1),
(12, 'Web Tương Tác', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_sop`
--

CREATE TABLE `lk_sop` (
  `id` int(11) NOT NULL,
  `id_pack` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lk_sop`
--

INSERT INTO `lk_sop` (`id`, `id_pack`, `id_service`) VALUES
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 8),
(10, 2, 1),
(11, 2, 2),
(12, 2, 3),
(13, 2, 4),
(14, 2, 5),
(15, 2, 6),
(16, 2, 7),
(17, 2, 8),
(18, 2, 9),
(19, 2, 10),
(20, 2, 11),
(21, 2, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lk_user`
--

CREATE TABLE `lk_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lk_admin`
--
ALTER TABLE `lk_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_blog`
--
ALTER TABLE `lk_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_esop`
--
ALTER TABLE `lk_esop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_pack`
--
ALTER TABLE `lk_pack`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_procedure`
--
ALTER TABLE `lk_procedure`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_project`
--
ALTER TABLE `lk_project`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_service`
--
ALTER TABLE `lk_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_sop`
--
ALTER TABLE `lk_sop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lk_user`
--
ALTER TABLE `lk_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lk_admin`
--
ALTER TABLE `lk_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lk_blog`
--
ALTER TABLE `lk_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `lk_esop`
--
ALTER TABLE `lk_esop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lk_pack`
--
ALTER TABLE `lk_pack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lk_procedure`
--
ALTER TABLE `lk_procedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lk_project`
--
ALTER TABLE `lk_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lk_service`
--
ALTER TABLE `lk_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `lk_sop`
--
ALTER TABLE `lk_sop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `lk_user`
--
ALTER TABLE `lk_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
