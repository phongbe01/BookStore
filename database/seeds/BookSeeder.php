<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sach chinht ri
        $book = new \App\Book();
        $book->title = '50 ý tưởng triết học';
        $book->summary = 'Bàn về 50 chủ đề triết học thú vị, cuốn sách là một minh chứng cho thấy triết học không hề khô khan, sách vở. Dù là những ý tưởng xưa cũ nhất hay hiện đại nhất, chúng đều rất gần gũi, có tầm ảnh hưởng, giúp chúng ta hiểu cách thế giới này tồn tại và cách chúng ta tri nhận về nó.';
        $book->image = 'image\book\chinhtri\50-y-tuong-triet-hoc_108132_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đi tìm hạnh phúc';
        $book->summary = 'Ta có thể nói về hạnh phúc được hiểu như sự "mãn nguyện chủ quan", như là ý thức về trạng thái thỏa mãn (ít hay nhiều) một cách tổng quát và bền vững. Nhưng thế có đủ để mô tả hạnh phúc theo nghĩa đầy đủ nhất của từ này? Và nhất là, liệu ta có thể tác động vào nó ?';
        $book->image = 'image\book\chinhtri\di-tim-hanh-phuc_108230_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường cách mệnh';
        $book->summary = 'Đường Cách Mệnh, tác phẩm có cách viết súc tích, ngắn gọn, dễ hiểu, dễ nhớ nhưng mang lại giá trị to lớn, đóng vai trò quan trọng trong việc truyền bá chủ nghĩa Mác Lê-nin vào Việt Nam, trong việc kết hợp phong trào yêu nước với chủ nghĩa Mác, tạo lập các tiền đề tư tưởng lý luận cho sự ra đời của Đảng cộng sản Việt Nam.';
        $book->image = 'image\book\chinhtri\duong-cach-menh_108843_1.jpg';
        $book->price = 30000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'đường mây trong cõi mộng';
        $book->summary = 'Đại sư Hám Sơn (1546 -1623) là một trong bốn vị thánh tăng đã có công phục hưng và phát triển Phật giáo trong triều đại nhà Minh (Trung Quốc). Cuộc đời hành đạo đầy gian khổ của Đại sư gắn liền với những biến cố chính trị của lịch sử Trung Hoa cũng như hoàn cảnh suy đồi của Phật giáo thời bấy giờ. Đại sư Hám Sơn là người có công đóng góp rất lớn cho việc chấn hưng Phật giáo thời nhà Minh, mở ra hướng đi mới cho Phật giáo sau một thời gian dài suy thoái. Nhờ cuộc đời tu trì Thiền – Tịnh song tu và công phu hoằng pháp của ngài cùng với các vị cao tăng khác cùng thời, Phật giáo Trung Hoa ngày càng khởi sắc theo tinh thần dung thông, hợp nhất các tông phái.';
        $book->image = 'image\book\chinhtri\duong-may-trong-coi-mong_107652_1.jpg';
        $book->price = 100000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = '50 ý tưởng triết học';
        $book->summary = 'Bàn về 50 chủ đề triết học thú vị, cuốn sách là một minh chứng cho thấy triết học không hề khô khan, sách vở. Dù là những ý tưởng xưa cũ nhất hay hiện đại nhất, chúng đều rất gần gũi, có tầm ảnh hưởng, giúp chúng ta hiểu cách thế giới này tồn tại và cách chúng ta tri nhận về nó.';
        $book->image = 'image\book\chinhtri\50-y-tuong-triet-hoc_108132_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hành trình sinh tử';
        $book->summary = 'Trong quyển sách “Hành trình sinh tử”, Dzongsar Khyentse Rinpoche đưa ra những lời khuyên phổ quát về việc làm thế nào để chuẩn bị cho lúc cận tử, chết và sau khi chết cho một người, bất kể người đó là ai. Lấy cảm hứng từ gần một trăm câu hỏi được những người bạn và học trò của Rinpoche đặt ra cho Ngài, Rinpoche đã mô tả cách thức: chuẩn bị cho cái chết của chính mình; trợ giúp, an ủi và hướng dẫn cho một người bạn hoặc người thân yêu đang sắp lìa đời; tiếp cận khoảnh khắc lâm chung; định hướng trong các giai đoạn Bardo (các giai đoạn thân trung ấm); hướng dẫn những người đã chết hướng dẫn cho người thân yêu vừa mới qua đời.';
        $book->image = 'image\book\chinhtri\hanh-trinh-sinh-tu_108692_1.png';
        $book->price = 110000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Minh đạo nhân sinh';
        $book->summary = 'Trong những triết lý ấy có cái gì mà gây tác động to lớn đến vậy với những người nghiên cứu chúng? Không tư tưởng nào trong số đó bảo bạn "chấp nhận và trân trọng bản thân", "tìm ra chính mình", hay phải làm theo một loạt chỉ dẫn để đạt được mục tiêu cụ thể. Trên thực tế đó, chúng chính là thứ đối chọi với kiểu tư duy đó. Chúng không cụ thể, không ra lệnh, cũng không đao to búa lớn. Thay vào đó, chúng thay đổi từ nền tảng theo những cách không thể đoán định hay hình dung ra từ trước.';
        $book->image = 'image\book\chinhtri\minh-dao-nhan-sinh_107749_1.png';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Muôn kiếp nhân sinh';
        $book->summary = '“Muôn kiếp nhân sinh” là tác phẩm do Giáo sư John Vũ - Nguyên Phong viết từ năm 2017 và hoàn tất đầu năm 2020 ghi lại những câu chuyện, trải nghiệm tiền kiếp kỳ lạ từ nhiều kiếp sống của người bạn tâm giao lâu năm, ông Thomas – một nhà kinh doanh tài chính nổi tiếng ở New York. Những câu chuyện chưa từng tiết lộ này sẽ giúp mọi người trên thế giới chiêm nghiệm, khám phá các quy luật về luật Nhân quả và Luân hồi của vũ trụ giữa lúc trái đất đang gặp nhiều tai ương, biến động, khủng hoảng từng ngày.';
        $book->image = 'image\book\chinhtri\muon-kiep-nhan-sinh_107747_1.png';
        $book->price = 90000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = '50 ý tưởng triết học';
        $book->summary = 'Bàn về 50 chủ đề triết học thú vị, cuốn sách là một minh chứng cho thấy triết học không hề khô khan, sách vở. Dù là những ý tưởng xưa cũ nhất hay hiện đại nhất, chúng đều rất gần gũi, có tầm ảnh hưởng, giúp chúng ta hiểu cách thế giới này tồn tại và cách chúng ta tri nhận về nó.';
        $book->image = 'image\book\chinhtri\50-y-tuong-triet-hoc_108132_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Thiết lập tịnh độ';
        $book->summary = 'Kinh A Di Đà là một kinh Đại thừa, thuộc về nền Phật giáo Phát triển. Đạo Bụt giống như một cây đại thọ và cũng là một thực tại sinh động. Bất kỳ một cái gì đang sống cũng phải lớn lên. Một cây đang sống thì ngày nào cũng cho thêm cành, lá; cành dài ra thêm, lá mọc nhiều thêm. Có cành mới, lá mới, hoa mới và trái mới thì cây đạo Bụt mới là một thực tại linh động, một cái gì đang sống. Vì vậy, mỗi ngày, mỗi tháng, mỗi năm, đạo Bụt phải phát triển thêm. Đạo Bụt Đại thừa là những hoa trái phát triển từ cội nguồn Phật giáo Nguyên thuỷ.';
        $book->image = 'image\book\chinhtri\thiet-lap-tinh-do_109091_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Trò chuyện với vĩ nhân';
        $book->summary = '“Trò chuyện với vĩ nhân” tổng hợp những câu chuyện của thiền sư Osho về 20 triết gia, nhà tư tưởng, đạo sư lỗi lạc nhất lịch sử.

Danh sách những bậc vĩ nhân Osho bàn đến rất đa dạng: Ở phương Đông có Lão Tử, Trang Tử; phương Tây có Socrates, Pythagoras, J. Krishnamurtri, Heraclitus, những nhà lãnh đạo tôn giáo như Phật Thích Ca Mâu Ni, Bồ Đề Đạt Ma, Jesus Christ…';
        $book->image = 'image\book\chinhtri\tro-chuyen-voi-vi-nhan_108829_1.png';
        $book->price = 150000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Từ bi';
        $book->summary = 'Từ bi là một thứ tình thương mát lành, là sự chia sẻ niềm vui của bản thân đến với vạn vật. Từ bi giúp ta trở thành đóa hoa sen, vượt lên vũng bùn của thế giới ham muốn, dục vọng và sự giận dữ.
Dẫn dắt người đọc qua câu chuyện về cuộc đời Đức Phật, Chúa Jesus và những hiểu biết về Thiền đạo, Osho đặt ra thách thức cho các giả định về từ bi là gì và gạt bỏ những sai lầm, định kiến, khám phá ý nghĩa thực sự ẩn sau đó.';
        $book->image = 'image\book\chinhtri\tu-bi_108846_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 3;
        $book->save();

        //sach kinh te
        $book = new \App\Book();
        $book->title = 'Cộng tác với kẻ thù';
        $book->summary = '“Trong Cộng tác với kẻ thù, Kahane giúp giải quyết một vấn đề cực kỳ quan trọng mà chúng ta phải đối diện hằng ngày: Làm thế nào để có thể cùng tiến bộ trong những tình huống chúng ta xung đột với nhau và không thể có chung tầm nhìn? Kahane đã thay đổi cách hành xử thông thường, kể cả cách hành xử của chính ông và đề xuất một phương pháp hợp tác mới, phù hợp hơn với bối cảnh khó khăn hiện thời của chúng ta.”';
        $book->image = 'image\book\kinhte\cong-tac-voi-ke-thu_108743_1.png';
        $book->price = '60000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Content bạc tỷ';
        $book->summary = 'Kinh doanh muốn phát triển lâu dài thì content phải có hiệu quả. Content hiệu quả là content có thể hái ra tiền. Rất nhiều content được chú trọng từng câu chữ với những câu văn bay bổng nhưng lại không thể mang lại hấp dẫn đối với người đọc. Viết content cũng giống việc móc nối các thông tin lại với nhau, “Content bạc tỷ” sẽ chỉ ra cho bạn 4 bước cụ thể để xây dựng chiến dịch viết một bài quảng cáo chuyên nghiệp: “Nói những gì – Nói với ai – Nói ở đâu – Nói thế nào”. Nói một cách dễ hiểu hơn thì chính là xem khách hàng là đối tượng để tán gẫu, chúng ta áp dụng đúng bốn điều trên sẽ khiến cuộc trò chuyện đạt được hiệu quả cao hơn.';
        $book->image = 'image\book\kinhte\content-bac-ty_108286_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Khởi nghiệp tinh gọn';
        $book->summary = 'Chúng ta đang sống trong thời kì phục hưng kinh doanh toàn cầu.
Thử thách của chúng ta là phải làm được điều xứng đáng với cơ hội được cho.
“Khởi nghiệp Tinh gọn” đảm bảo rằng những ai khao khát làm được điều thực sự ý nghĩa
sẽ có được công cụ cần thiết để thay đổi thế giới.';
        $book->image = 'image\book\kinhte\khoi-nghiep-tinh-gon_108576_1.png';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Dạy Con Trong Hoang Mang';
        $book->summary = 'Gửi gắm thông điệp “chuyển hóa chính mình để giáo dục trẻ thơ”';
        $book->image = 'image\book\kinhte\day-con-trong-hoang-mang_73759_1.jpg';
        $book->price = '94000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường đến thành công';
        $book->summary = 'Đường Đến Thành Công Đỉnh Cao - Những Lời Khuyên "Đắt Giá" Trong Kinh Doanh';
        $book->image = 'image\book\kinhte\duong-den-thanh-cong-cua-jack-ma_50720_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường đến thành công';
        $book->summary = 'Đường Đến Thành Công Đỉnh Cao - Những Lời Khuyên "Đắt Giá" Trong Kinh Doanh';
        $book->image = 'image\book\kinhte\duong-den-thanh-cong-cua-jack-ma_50720_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Mạng lưới kinh doanh';
        $book->summary = 'Kinh doanh theo mạng lưới là một trong những nghề nghiệp phát triển nhanh nhất tại Mỹ. Hàng triệu người như bạn đã từ bỏ công việc hành chính nhàm chán để theo đuổi cơ hội vươn tới ước mơ về một công việc kinh doanh cho riêng mình. Tuy nhiên, nhiều người nhận ra năm đầu tiên trong kinh doanh theo mạng lưới là thời gian thử thách, gian nan nhất.';
        $book->image = 'image\book\kinhte\mang-luoi-kinh-doanh-da-cap_108688_1.png';
        $book->price = '124000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Quản lý chiến lược';
        $book->summary = 'Lịch sử không bao giờ lặp lại nên nếu cứ “học tập lại những điều xảy ra trong lịch sử” là đồng nghĩa với việc đưa mình vào vòng nguy hiểm. Hơn nữa, có nhiều sự việc không xảy ra một cách ngẫu nhiên. Tuy nhiên, tất cả chúng ta thường không nhìn nhận rằng mọi thứ xảy ra theo tính tất yếu. Giá trị đích thực của việc học từ lịch sử là trong một tình huống sẽ xảy ra rất nhiều việc, sẽ có nhiều chiến lược có hiệu quả tương ứng với những tình huống đó. Cuốn sách này là một tài liệu quản lý chiến lược giới thiệu những khái niệm chiến lược đã xuất hiện trong suốt 100 năm từ đầu thế kỷ 20 đến nay, cùng với nền tảng của chúng. Từ một chiến lược quản lý cổ điển được nhiều công ty Nhật Bản áp dụng, đến việc giới thiệu những chiến lược mới nhất được sinh ra trong môi trường kinh doanh thay đổi mạnh mẽ của thế kỷ 21, độc giả sẽ có cái nhìn sâu sắc hơn về dòng chảy của lịch sử kinh doanh.';
        $book->image = 'image\book\kinhte\quan-ly-chien-luoc_108305_1.jpg';
        $book->price = '140000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Vòng quay tiền mặt';
        $book->summary = 'Tôi xin được phép gửi đến các bạn tình yêu của tôi, chúc cho các bạn có một hành trình hạnh phúc. Đừng quên thêm vào thực đơn hàng ngày đôi chút tình yêu!';
        $book->image = 'image\book\kinhte\vong-quay-tien-mat_108808_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 2;
        $book->save();

        //sach thieu nhi
        $book = new \App\Book();
        $book->title = 'Chúc mừng sinh nhật';
        $book->summary = 'Chúc Mừng Sinh Nhật!';
        $book->image = 'image\book\thieunhi\chuc-mung-sinh-nhat_105372_1.jpg';
        $book->price = '44000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Nàng heo annie gầy còm';
        $book->summary = 'Nàng heo annie gầy còm';
        $book->image = 'image\book\thieunhi\nang-heo-annie-gay-com_109156_1.jpg';
        $book->price = '50000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Chúc mừng sinh nhật';
        $book->summary = 'Chúc Mừng Sinh Nhật!';
        $book->image = 'image\book\thieunhi\chuc-mung-sinh-nhat_105372_1.jpg';
        $book->price = '44000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Sử thi odisey';
        $book->summary = 'Khi khởi hành từ thành Troy để trở về Ithaca, người chiến binh huyền thoại Odysseus chẳng chút mảy may nghi ngờ về những hiểm họa khủng khiếp mà mình sẽ phải trải qua trên đường trở về nhà.';
        $book->image = 'image\book\thieunhi\su-thi-odyssey_105254_1.png';
        $book->price = '56000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Từ bước chân chập chững';
        $book->summary = 'Mỗi em bé đều có những lần đầu đáng nhớ, lần đầu gây ra một chuyện kì quặc, lần đầu đi lạc, lần đầu cáu nhặng xị, lần đầu bị bắt nạt, lần đầu tự đối mặt với nỗi sợ hãi, lần đầu làm việc nhà… và nhiều lần đầu khác. Ngắm nhìn những bước chân con chập chững, cảm nhận những lần đầu đáng nhớ của con, hỗ trợ con trên đường đời khôn lớn… đó chính là niềm hạnh phúc vô bờ của người làm cha làm mẹ, phải không?';
        $book->image = 'image\book\thieunhi\tu-buoc-chan-chap-chung-lan-dau-di-lac_109163_1.jpg';
        $book->price = '23000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        //sach tri thuc

        $book = new \App\Book();
        $book->title = 'Đây Là Dali';
        $book->summary = 'Salvador Dalí là một trong những nghệ sỹ nổi tiếng nhất thế giới, cả vì phong cách sống hoang toàng, chòm ria mép bất chấp trọng lực, cho đến thứ nghệ thuật kỳ lạ của ông. Cuốn sách này kể về cuộc đời của Dalí và khám phá ý nghĩa của những bức tranh Siêu thực của ông. Tinh túy của chủ nghĩa siêu thực Dalí chính là: nơi cái bình thường trở thành cái phi thường. Dalí tự xem mình là một bậc thầy Phục Hưng – một kiện tướng về vẽ tranh sơn dầu – nhưng ông phá tan và vượt ra ngoài cái quy củ gọn gàng, ngăn nắp của mỹ thuật. Những tác phẩm quan trọng trong sự nghiệp của Dalí đều được giới thiệu đầy đủ trong cuốn sách này, từ Dáng người bên cửa sổ, đến Những ngày đầu tiên của mùa xuân, Sự dai dẳng của ký ức…';
        $book->image = 'image\book\trithuc\day-la-dali_108751_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Gauguin';
        $book->summary = 'Đây là Gauguin kể về cuộc đời và sự nghiệp của họa sỹ Hậu Ấn tượng vĩ đại người Pháp Gauguin, từ cậu bé có thân thế đặc biệt đến chàng trai thích phiêu lưu, mạo hiểm rồi trở thành một viên chức môi giới chứng khoán và cuối cùng lựa chọn nghệ thuật là lối thoát giúp ông trốn khỏi cái cuộc sống tù hãm. Ông đã vẽ những bức tranh đẹp nhất đời mình tại Tahiti – nơi ông xem là thiên đường nhiệt đới còn giữ vẻ hoang sơ của thiên nhiên và bản tính con người.';
        $book->image = 'image\book\trithuc\day-la-gauguin_108753_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây là Leonardo Da Vinci';
        $book->summary = 'Leonardo da Vinci là một nhà bác học, một con người đa tài mà ngày nay chúng ta thường gọi là “con người Phục Hưng”. Có lúc ông chế tạo khí cụ quân sự, có lúc lại thiết kế công trình xây dựng, và có lúc thì vẽ tranh. Mối quan tâm của ông trải dài từ thực vật học, truyện ngụ ngôn truyền thuyết, cho tới quá trình thai nghén và sinh con. Nhưng ông nói rằng hội họa luôn là mối quan tâm chính yếu của mình. Đối với ông, nhịp điệu của thế giới được xác định bởi hội họa và bởi thị giác: “Người họa sĩ có cả vũ trụ trong tâm trí và bàn tay mình.”';
        $book->image = 'image\book\trithuc\day-la-leonardo-da-vinci_108746_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Monet';
        $book->summary = 'Oscar-Claude Monet (1840 – 1926) là tên tuổi hàng đầu của trường phái hội họa Ấn tượng Pháp. Cả cuộc đời Monet trung thành với trường phái Ấn tượng, ông cũng là người tiên phong, tạo ảnh hưởng và truyền cảm hứng lâu dài lên nhiều thế hệ họa sĩ. Trong suốt 86 năm tại thế, người họa sĩ ấy đã lao động không ngơi nghỉ và để lại cho đời hơn 2.000 tác phẩm.';
        $book->image = 'image\book\trithuc\day-la-dali_108751_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây là Dali';
        $book->summary = 'Salvador Dalí là một trong những nghệ sỹ nổi tiếng nhất thế giới, cả vì phong cách sống hoang toàng, chòm ria mép bất chấp trọng lực, cho đến thứ nghệ thuật kỳ lạ của ông. Cuốn sách này kể về cuộc đời của Dalí và khám phá ý nghĩa của những bức tranh Siêu thực của ông. Tinh túy của chủ nghĩa siêu thực Dalí chính là: nơi cái bình thường trở thành cái phi thường. Dalí tự xem mình là một bậc thầy Phục Hưng – một kiện tướng về vẽ tranh sơn dầu – nhưng ông phá tan và vượt ra ngoài cái quy củ gọn gàng, ngăn nắp của mỹ thuật. Những tác phẩm quan trọng trong sự nghiệp của Dalí đều được giới thiệu đầy đủ trong cuốn sách này, từ Dáng người bên cửa sổ, đến Những ngày đầu tiên của mùa xuân, Sự dai dẳng của ký ức…';
        $book->image = 'image\book\trithuc\day-la-monet_108748_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Rembrandt';
        $book->summary = 'Rembrandt van Rijn (1606 – 1669) là một trong những bậc thầy cựu truyền của mỹ thuật Tây phương. Bất chấp cuộc đời nhiều thăng trầm và những bức tranh hàng thế kỷ bị chối bỏ bởi chủ nghĩa kinh viện, cái tên Rembrandt đến nay vẫn được kính trọng, bởi những nét cọ đầy cảm xúc cùng cảm thức tâm lý mãnh liệt. Tranh của ông, dù là vẽ hay in, đều đứng vững trước thử thách của thời gian';
        $book->image = 'image\book\trithuc\day-la-rembrandt_108749_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Warhol';
        $book->summary = 'Andy Warhol (1928 – 1987) có lẽ là một trong những nghệ sĩ gây nhiều tranh cãi nhất mọi thời đại. Ông là một trong những nghệ sĩ tiên phong, và cũng nằm trong số người dẫn đầu, của trào lưu pop-art. Được nhiều người miêu tả là một tấm gương theo nghĩa đen, Warhol phản chiếu lại cái trống rỗng của xã hội Mỹ hiện đại ở độ phân giải cao, như chính ông từng nói: “Nếu bạn muốn biết tất cả về Andy Warhol, chỉ cần nhìn phớt qua tôi và tranh ảnh hay phim của tôi, nhìn bề mặt thôi; tôi ở đó. Không có gì đằng sau cả.”';
        $book->image = 'image\book\trithuc\day-la-warhol_108752_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Chuyện Cũ Hà Nội';
        $book->summary = '“Tôi sinh ra và lớn lên ở Hà Nội, mọi chuyện chính yếu của đời tôi đều xảy ra ở nơi này và tôi viết bằng hồi ức về Hà Nội xưa cũ, tuổi trẻ của mình. Chuyện cũ Hà Nội tôi viết từ năm lên mười tới lúc già.”';
        $book->image = 'image\book\vanhoc\chuyen-cu-ha-noi.jpg';
        $book->price = '83000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đi Thật Xa Trên Một Chiếc Camper';
        $book->summary = 'Khi bạn đọc cuốn sách đầy cảm hứng này, có thể tác giả vẫn đang dấn bước trên một cung đường xa xôi. Ở Khải Đơn, mỗi cuốn sách sẽ vẽ ra một hành trình và hứa hẹn một hành trình tiếp nối. Điều đó truyền cảm hứng cho những người đọc ở thế hệ cô lên đường với hành trang rất gọn nhẹ của riêng mình.';
        $book->image = 'image\book\vanhoc\di-that-xa-tren-mot-chiec-camper_102192_1.png';
        $book->price = '90000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Cố Định Một Đám Mây';
        $book->summary = '“Cố định một đám mây” là tập truyện ngắn với 10 truyện mới, dày hơn 180 trang.
        Nhà văn đưa độc giả bước vào một không gian mới trong chuyến viễn hành văn chương âm thầm nhưng
        đầy dấu ấn cá nhân.';
        $book->image = 'image\book\vanhoc\co-dinh-mot-dam-may_93567_1.jpg';
        $book->price = '77600';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Danh Sách Của Schindler';
        $book->summary = 'Trong bóng đen khủng khiếp của các trại diệt chủng thời Đệ nhị Thế chiến, có một nhà công nghiệp Đức đã trở thành cứu tinh của người Do Thái. Oskar Schindler, con người ham lạc thú, kẻ còn lâu mới được coi là mẫu mực, cũng đồng thời là kẻ đã mạo hiểm cả mạng sống của mình để bảo vệ những đồng loại khác chủng tộc mà nếu không có ông thì hẳn đã kết thúc cuộc đời trong lò thiêu. ';
        $book->image = 'image\book\vanhoc\danh-sach-cua-schindler_91159_1.jpg';
        $book->price = '90000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đêm Núm Sen';
        $book->summary = '“Ba giờ đêm, dưới phố, lại lào xào một cuộc hành binh dài dặc, về làng… Tôi tỉnh giấc. Sứa nằm thiêm thiếp bên vai tôi. Tôi nghe tiếng Sứa thở. Tôi vuốt nhẹ, dọc cái lưng trần. Vuốt nhẹ. Tôi nhớ cặp đùi. Khi nãy, nó giãy. Nó giãy cuống quýt. Tôi đưa tay vuốt. Sứa vẫn thiêm thiếp. Tôi vuốt. Căn buồng đỏ mênh mông. Tôi vuốt sự ngây thơ rơm rớm. Con nai nằm nghiêng đùi hơi co. Tôi vuốt… Dưới phố, những ki lô mét hành quân… Tôi vuốt. Sứa tỉnh dậy. Sứa thẹn. Sứa co người lại. Tôi vuốt. Con nai ngây thơ của tôi ơi! Tôi vuốt con nai bị thương của tôi. Rơm rớm… Rơm rớm…”';
        $book->image = 'image\book\vanhoc\dem-num-sen_70275_1.jpg';
        $book->price = '77600';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường Xa Nắng Mới';
        $book->summary = 'Đường xa nắng mới là tập bút ký mới nhất của Tiến sĩ Nguyễn Tường Bách, tập hợp những bài viết ký sự du hành của tác giả đến nhiều xứ sở lạ kỳ trên thế giới.
        Bắt đầu từ câu chuyện về ngôi làng nhỏ yên bình của mình ở nước Đức; bằng lối kể chuyện đầy mê hoặc, tác giả đã dẫn dắt người đọc du hành qua nhiều vùng đất lạ mà điểm dừng chân cuối cùng là mãi tận Kailash (Ngân Sơn) - ngọn núi thiêng được sùng bái nhất trên quả địa cầu.';
        $book->image = 'image\book\vanhoc\duong-xa-nang-moi_46040_1.jpg';
        $book->price = '112000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hành Tinh Khỉ';
        $book->summary = '"Những gì xảy ra cho chúng ta đều đã được dự báo trước. Sự lười biếng suy nghĩ đang chiếm giữ não bộ của chúng ta. Sách vở không còn nữa, ngay cả các tiểu thuyết trinh thám cũng trở nên quá tầm với trí tuệ đầu óc con người hiện nay. Không còn trò chơi nào nữa, chẳng còn cuộc thi đấu nào. Ngay cả một bộ phim trẻ con cũng không lôi cuốn được ai...”';
        $book->image = 'image\book\vanhoc\hanh-tinh-khi_73907_1.jpg';
        $book->price = '51600';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hãy Đi Đặt Người Canh Gác';
        $book->summary = '"Nước Mỹ những năm 1950. Làn sóng đòi quyền bình đẳng cho người da đen đang
         dâng trào cả nước; trong vài tiểu bang miền Nam, người da trắng tập hợp để bảo vệ cái mà họ
         coi là bản sắc bị tước đoạt của mình… Trở về thăm nhà như lệ thường, Jean Louise không ngờ
         mình sắp bước chân vào giữa cuộc chiến tư tưởng của thập kỷ. Cô sẽ ngỡ ngàng thấy người cha
         Atticus, vị anh hùng vì lẽ công bình của cô thuở bé, dường như đã đổi màu niềm tin; người thân,
         bạn bè lâu năm bỗng dưng xa lạ; thị trấn Maycomb quê hương và chính cô không còn nhận ra nhau.
         Công lý ở đâu, đúng sai là gì? Khi thành trì lương tâm tuổi thơ cô đã vụn vỡ từng viên đá một,
         Jean Louise bắt đầu đi tìm một sự thật của riêng mình.';
        $book->image = 'image\book\vanhoc\hay-di-dat-nguoi-canh-gac_51551_1.jpg';
        $book->price = '51600';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hôm Nay Tôi Thất Tình';
        $book->summary = 'Muốn vượt qua nỗi đau thất tình ư, dễ lắm...
        Đôi khi vẫn nghĩ, sao cứ phải ôm mãi một bó củi khô khi phía trước là rừng rậm,
        phải tiếc một gáo nước đã đổ đi khi suối nguồn đang ở phía trước?';
        $book->image = 'image\book\vanhoc\hom-nay-toi-that-tinh_65606_1.jpg';
        $book->price = '68800';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hòm Thư Số 110';
        $book->summary = 'Tình yêu của anh nhón chân rón rén bước.Em đã bước vào vườn hoa của anh rồi nhỉ.
        Dù chưa được cho phép.';
        $book->image = 'image\book\vanhoc\hom-thu-so-110_104178_1.png';
        $book->price = '119250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Không Ai Qua Sông';
        $book->summary = 'Không ai qua sông - Tập truyện ngắn mới nhất của Nguyễn Ngọc Tư gợi bạn đọc nhớ đến đến truyện dài Cánh đồng bất tận đã từng gây xôn xao trên văn đàn một thời gian dài. Cũng lấy cảm hứng từ cuộc sống của người dân nông thôn miền Tây, nhưng giờ đây nhân vật của NNT có cái trăn trở của một vùng đất đã dần bị đô thị hóa, con người phải thích ứng với những thứ nhân danh cuộc sống hiện đại nhưng có thể phá nát những rường mối gia đình.';
        $book->image = 'image\book\vanhoc\khong-ai-qua-song_48943_1.jpg';
        $book->price = '119250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Không Đến Một';
        $book->summary = 'Nếu bạn muốn xây dựng một tương lai tốt đẹp hơn, bạn phải tin vào bí mật.
        Bí mật lớn nhất của thời đại chúng ta là vẫn còn những lĩnh vực và phát minh mới cần chúng ta khám phá và tạo ra. Trong Không Đến Một, doanh nhân và nhà đầu tư huyền thoại Peter Thiel chỉ cho chúng ta biết cách tìm ra những cách thức độc đáo để tạo ra những thứ mới này.';
        $book->image = 'image\book\vanhoc\khong-den-mot_54214_1.jpg';
        $book->price = '119250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Lũ Trẻ Ở Làng Ồn Ào';
        $book->summary = '“Tôi viết để làm vui đứa trẻ trong tôi, và tôi chỉ có thể hi vọng rằng những đứa
        trẻ khác cũng cảm thấy vui theo cách đó.” – niềm hi vọng của Astrid Lindgren đã hoàn toàn trở
        thành hiện thực, ngày nay, trẻ em ở nhiều nước trên toàn cầu vẫn đang vui thích khi đọc những cuốn
        truyện mà bà sáng tác từ nhiều nhiều năm trước.';
        $book->image = 'image\book\vanhoc\lu-tre-o-lang-on-ao.jpg';
        $book->price = '32400';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Luật Hấp Dẫn Của Nụ Cười';
        $book->summary = 'Luật Hấp Dẫn Của Nụ Cười là những bài viết “sống đẹp” chắt lọc từ chính trải nghiệm của MC Quỳnh Hương. Cô viết cho mình, cho bạn đọc, và cho những mảnh đời cô quan sát, chiêm nghiệm được; để động viên, để nhen nhúm và để giữ gìn nụ cười lạc quan trên môi người, từ đó “vượt qua những con dốc khúc khuỷu, tiếp tục bước những bước đi vững chãi của cuộc đời”; hay như để “gieo duyên” đến những tâm hồn còn bối rối, mông lung, bế tắc suy nghĩ hòng hướng đến những tư duy rộng rãi khoáng đạt hơn, và “qua đó biết đâu giúp ích được” cho họ, như cô tâm niệm.';
        $book->image = 'image\book\vanhoc\luat-hap-dan-cua-nu-cuoi_74901_1.jpg';
        $book->price = '59500';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Mắt Biếc';
        $book->summary = 'Mắt biếc là một tác phẩm được nhiều người bình chọn là hay nhất của nhà văn Nguyễn Nhật Ánh. Tác phẩm này cũng đã được dịch giả Kato Sakae dịch sang tiếng Nhật để giới thiệu với độc giả Nhật Bản. ';
        $book->image = 'image\book\vanhoc\mat-biec-ban-dac-biet-_100101_2.jpeg';
        $book->price = '165000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Mike Tyson - Sự Thật Trần Trụi';
        $book->summary = 'Mike Tyson sinh năm 1966 là cựu vận động viên quyền Anh người Mỹ nổi tiếng thế giới. Bắt đầu thi đấu chuyên nghiệp ở độ tuổi mười tám, ông nhanh chóng giành được cả ba đai vô địch WBA, WBC và IBF khi vừa mới hai mươi để trở thành nhà vô địch quyền Anh hạng nặng trẻ tuổi nhất lịch sử. Năm 2010, ông được tạp chí The Ring xếp hạng thứ mười sáu trong danh sách 100 tay đấm vĩ đại nhất mọi thời đại.';
        $book->image = 'image\book\vanhoc\mike-tyson-su-that-tran-trui_73906_1.jpg';
        $book->price = '126750';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Ngày Tháng Nào Đã Ra Đi';
        $book->summary = 'Trong nỗi niềm tình cờ hoang mạc lắng nghe nhân gian trở mình, gọi về để nhớ, gọi về để quên, cho vô biên, cho sợi khói, cho chiêm bao trấn ngự mấy tầng trùng phùng cửu biệt của “muôn dặm không mây muôn dặm trời.';
        $book->image = 'image\book\vanhoc\ngaythangnaodaradi.jpg';
        $book->price = '79200';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Người Khuân Đá';
        $book->summary = 'Tình yêu cuộc sống và đạo lý ở đời trong câu chuyện bếp lửa, chuyện gia đình, chuyện của mọi người mà thấy đó chuyện của mình...';
        $book->image = 'image\book\vanhoc\nguoi-khuan-da_90090_1.png';
        $book->price = '89250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Người Sài Gòn Bất Đắc Dĩ';
        $book->summary = 'Sách tập hợp những truyện ngắn và ký viết về miền đất Nam Bộ, vùng ruộng đồng sông nước của nhà văn Võ Đắc Danh. Bàng bạc trong các truyện là nỗi niềm của những người nông dân đã một đời thân cò lặn lội, oằn vai dưới gánh nặng đau khổ của chiến tranh hôm qua, rồi lại vì miếng cơm manh áo hôm nay nhưng vẫn bất khuất, trung kiên chống lại áp bức, bất công.';
        $book->image = 'image\book\vanhoc\nguoi-sai-gon-bat-dac-di_75172_1.jpg';
        $book->price = '150000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Những Câu Chuyện Về Đàn Bà';
        $book->summary = 'Cuốn sách tập hợp những bài viết tản mạn của nhạc sĩ Tuấn Khanh. Mỗi bài viết thể hiện góc nhìn, quan điểm sâu sắc về con người, cuộc sống, xã hội... Một Tuấn Khanh với những suy ngẫm rất thật, rất đời. Có thể tìm thấy trong cuốn sách dung dị này một góc nhỏ Sài Gòn bình yên nỗi nhớ, một cuộc đối thoại ngắn "Phụ nữ Việt có tệ lắm không?", một nỗi niềm trăn trở "Người Việt mình rồi sẽ sống ra sao?", "Tổ quốc là gì?"...';
        $book->image = 'image\book\vanhoc\nhung-cau-chuyen-ve-dan-ba-_54268_1.jpg';
        $book->price = '150000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Oscar Và Bà Áo Hồng';
        $book->summary = 'Cuốn sách gồm những bức thư gửi Chúa từ một cậu bé mười tuổi, nhóc Oscar, biệt danh Sọ Trứng, vì cái đầu trọc - hệ quả sau đợt điều trị hóa chất do bệnh máu trắng. Oscar kể với Chúa về những mong ước của mình, về những gì diễn ra trong mười hai ngày có lẽ là cuối cùng của cuộc đời cậu. Những lá thư ấy đã được bà Hoa Hồng, một tình nguyện viên đến chơi với các bệnh nhi, tìm thấy sau khi Oscar mất. Nhờ có bà Hoa Hồng, mười hai ngày ấy đã trở thành huyền thoại. ';
        $book->image = 'image\book\vanhoc\oscar-va-ba-ao-hong_48343_1.jpg';
        $book->price = '41250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Sài Gòn Bao Nhớ';
        $book->summary = '"Bạn có thể nhớ về cha mẹ như về những người đã đánh đòn bạn, họ già cả và trái tính trái nết, đôi lúc khó khăn đến khắc nghiệt... và bạn cũng có thể nhớ về cha mẹ như những người gần như duy nhất trên hành tinh này đã luôn yêu thương, chăm sóc và hy sinh tất cả cho bạn, vô điều kiện. Bạn có thể nhớ về Sài Gòn như về một chốn xô bồ, đầy kẹt xe, bụi bặm, cướp giật, xì ke và lừa lọc... hoặc bạn cũng có thể chọn nhớ về Sài Gòn như về mảnh đất đã cưu mang mười triệu con người, mảnh đất của tình nghĩa, phóng khoáng và hào hiệp.';
        $book->image = 'image\book\vanhoc\sai-gon-bao-nho_48254_1.jpg';
        $book->price = '41250';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Sẽ Có Cách, Đừng Lo';
        $book->summary = 'Tản văn Sẽ có cách, đừng lo với lối viết gần gũi, những tự sự, trăn trở về tình yêu, chuyện đời - chuyện người. Cuốn sách như một người bạn động viên tác giả cũng như đem lại niềm tha thiết yêu cuộc sống cho độc giả, thể hiện năng lượng sống tích cực khi đứng trước những điều tưởng chừng như rất khó vượt qua.';
        $book->image = 'image\book\vanhoc\se-co-cach-dung-lo-_48341_1.jpg';
        $book->price = '41400';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Sống Như Cây Rừng';
        $book->summary = 'Sống Như Cây Rừng là một trong bộ ba cuốn tập hợp những bài viết hay nhất được tuyển chọn trong gần 500 bài được viết suốt 8 năm của chuyên mục "Trò chuyện đầu tuần" trên báo Hoa Học Trò của tác giả Hà Nhân. Anh chính là nhà báo Lê Thanh Hà, phó Tổng biên tập báo Hoa Học Trò, Sinh viên Việt Nam.';
        $book->image = 'image\book\vanhoc\song-nhu-cay-rung_50836_1.jpg';
        $book->price = '46500';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Ta Có Bi Quan Không?';
        $book->summary = 'Giữ tuổi trẻ đầy mộng mơ và lấp lánh, bạn có bao giờ nhìn thấy vết thương cào xước năm tháng hồn nhiên của mình? Vấp ngã giữa công việc đầy biến động, đập vỡ tình yêu trong bàn tay, hay đơn giản một ngày gục ngã vì tổn thương trán ứa những gì ta có thể chịu đựng.';
        $book->image = 'image\book\vanhoc\ta-co-bi-quan-khong_71301_1.png';
        $book->price = '55000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Thương Mấy Cũng Là Người Dưng';
        $book->summary = 'Thương mấy cũng là người dưng được tác giả viết “trong những ngày tủi thân nhất của thanh xuân mình. Cái quãng đời đã bước qua đủ nhiều cuộc yêu để tự thấy mình không còn dư dả tuổi trẻ, niềm tin và tình thương để phung phí; thành ra chỉ muốn nắm thật chặt bàn tay của người bên cạnh, bình bình đạm đạm đi đến cuối. Nhưng thế sự tuyệt đối khó toại lòng người, và chân tình ở đời hiếm khi buộc ràng trong khái niệm vĩnh viễn như mình mong đợi. Bởi nên, mọi tủi buồn của tuổi trẻ, chung quy cũng vì hai chữ hết yêu”.';
        $book->image = 'image\book\vanhoc\thuong-may-cung-la-nguoi-dung-_50645_1.jpg';
        $book->price = '50000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Van Gogh';
        $book->summary = 'Cuốn sách, mà ta có thể đọc say mê như một tiểu thuyết, kể lại, với những chi tiết không giải thích gì mà nói lên tất cả, quá trình từ bỏ con đường giáo sĩ để tận hiến cho hội họa của Vincent, tiến diễn hội họa của ông, tình anh em cảm động đến xót xa giữa Vincent và Théo, mối quan hệ đầy khúc mắc với Gauguin, những cơn bệnh tâm thần, những ảo giác, thời kỳ điều trị nội trú ở bệnh viện Saint-Rémy và cuối cùng, phát súng tự bắn vào ngực giữa cánh đồng lúa mì một chiều tháng 7 năm 1890, mặc dù không một khẩu súng nào được tìm thấy ở hiện trường.';
        $book->image = 'image\book\vanhoc\van-gogh_75252_1.gif';
        $book->price = '50000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Vua Gia Long Và Người Pháp';
        $book->summary = '“Lịch sử là một khoa học luôn chỉnh sửa lại mình trên cơ sở những phát hiện mới của khảo cổ, hoặc từ những tư liệu lịch sử bị lãng quên, bị thất lạc, bị che giấu vì những lý do xã hội nào đó, tới nay mới có điều kiện lộ sáng.';
        $book->image = 'image\book\vanhoc\vua-gia-long-va-nguoi-phap_66347_1.jpg';
        $book->price = '50000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Xuân Yến';
        $book->summary = 'Một phụ nữ tha hương đang hoài niệm trong thế giới thực. Một cô gái trẻ hình thành trong tưởng tượng hư ảo. Hai người xa lạ, sinh sống ở những không gian thời gian tách biệt, không hề hay biết đến sự tồn tại của nhau, đã luân phiên bước qua cuốn sách này, để đến cuối cùng, tương phùng tương ngộ nhờ ngòi bút của một người đàn bà viết.';
        $book->image = 'image\book\vanhoc\xuan-yen-_50754_1.jpg';
        $book->price = '91000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->categoryID = 4;
        $book->save();
    }
}
