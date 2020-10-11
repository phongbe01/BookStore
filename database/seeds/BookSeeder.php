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
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đi tìm hạnh phúc';
        $book->summary = 'Ta có thể nói về hạnh phúc được hiểu như sự "mãn nguyện chủ quan", như là ý thức về trạng thái thỏa mãn (ít hay nhiều) một cách tổng quát và bền vững. Nhưng thế có đủ để mô tả hạnh phúc theo nghĩa đầy đủ nhất của từ này? Và nhất là, liệu ta có thể tác động vào nó ?';
        $book->image = 'image\book\chinhtri\di-tim-hanh-phuc_108230_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường cách mệnh';
        $book->summary = 'Đường Cách Mệnh, tác phẩm có cách viết súc tích, ngắn gọn, dễ hiểu, dễ nhớ nhưng mang lại giá trị to lớn, đóng vai trò quan trọng trong việc truyền bá chủ nghĩa Mác Lê-nin vào Việt Nam, trong việc kết hợp phong trào yêu nước với chủ nghĩa Mác, tạo lập các tiền đề tư tưởng lý luận cho sự ra đời của Đảng cộng sản Việt Nam.';
        $book->image = 'image\book\chinhtri\duong-cach-menh_108843_1.jpg';
        $book->price = 30000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'đường mây trong cõi mộng';
        $book->summary = 'Đại sư Hám Sơn (1546 -1623) là một trong bốn vị thánh tăng đã có công phục hưng và phát triển Phật giáo trong triều đại nhà Minh (Trung Quốc). Cuộc đời hành đạo đầy gian khổ của Đại sư gắn liền với những biến cố chính trị của lịch sử Trung Hoa cũng như hoàn cảnh suy đồi của Phật giáo thời bấy giờ. Đại sư Hám Sơn là người có công đóng góp rất lớn cho việc chấn hưng Phật giáo thời nhà Minh, mở ra hướng đi mới cho Phật giáo sau một thời gian dài suy thoái. Nhờ cuộc đời tu trì Thiền – Tịnh song tu và công phu hoằng pháp của ngài cùng với các vị cao tăng khác cùng thời, Phật giáo Trung Hoa ngày càng khởi sắc theo tinh thần dung thông, hợp nhất các tông phái.';
        $book->image = 'image\book\chinhtri\duong-may-trong-coi-mong_107652_1.jpg';
        $book->price = 100000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = '50 ý tưởng triết học';
        $book->summary = 'Bàn về 50 chủ đề triết học thú vị, cuốn sách là một minh chứng cho thấy triết học không hề khô khan, sách vở. Dù là những ý tưởng xưa cũ nhất hay hiện đại nhất, chúng đều rất gần gũi, có tầm ảnh hưởng, giúp chúng ta hiểu cách thế giới này tồn tại và cách chúng ta tri nhận về nó.';
        $book->image = 'image\book\chinhtri\50-y-tuong-triet-hoc_108132_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Hành trình sinh tử';
        $book->summary = 'Trong quyển sách “Hành trình sinh tử”, Dzongsar Khyentse Rinpoche đưa ra những lời khuyên phổ quát về việc làm thế nào để chuẩn bị cho lúc cận tử, chết và sau khi chết cho một người, bất kể người đó là ai. Lấy cảm hứng từ gần một trăm câu hỏi được những người bạn và học trò của Rinpoche đặt ra cho Ngài, Rinpoche đã mô tả cách thức: chuẩn bị cho cái chết của chính mình; trợ giúp, an ủi và hướng dẫn cho một người bạn hoặc người thân yêu đang sắp lìa đời; tiếp cận khoảnh khắc lâm chung; định hướng trong các giai đoạn Bardo (các giai đoạn thân trung ấm); hướng dẫn những người đã chết hướng dẫn cho người thân yêu vừa mới qua đời.';
        $book->image = 'image\book\chinhtri\hanh-trinh-sinh-tu_108692_1.png';
        $book->price = 110000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Minh đạo nhân sinh';
        $book->summary = 'Trong những triết lý ấy có cái gì mà gây tác động to lớn đến vậy với những người nghiên cứu chúng? Không tư tưởng nào trong số đó bảo bạn "chấp nhận và trân trọng bản thân", "tìm ra chính mình", hay phải làm theo một loạt chỉ dẫn để đạt được mục tiêu cụ thể. Trên thực tế đó, chúng chính là thứ đối chọi với kiểu tư duy đó. Chúng không cụ thể, không ra lệnh, cũng không đao to búa lớn. Thay vào đó, chúng thay đổi từ nền tảng theo những cách không thể đoán định hay hình dung ra từ trước.';
        $book->image = 'image\book\chinhtri\minh-dao-nhan-sinh_107749_1.png';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Muôn kiếp nhân sinh';
        $book->summary = '“Muôn kiếp nhân sinh” là tác phẩm do Giáo sư John Vũ - Nguyên Phong viết từ năm 2017 và hoàn tất đầu năm 2020 ghi lại những câu chuyện, trải nghiệm tiền kiếp kỳ lạ từ nhiều kiếp sống của người bạn tâm giao lâu năm, ông Thomas – một nhà kinh doanh tài chính nổi tiếng ở New York. Những câu chuyện chưa từng tiết lộ này sẽ giúp mọi người trên thế giới chiêm nghiệm, khám phá các quy luật về luật Nhân quả và Luân hồi của vũ trụ giữa lúc trái đất đang gặp nhiều tai ương, biến động, khủng hoảng từng ngày.';
        $book->image = 'image\book\chinhtri\muon-kiep-nhan-sinh_107747_1.png';
        $book->price = 90000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = '50 ý tưởng triết học';
        $book->summary = 'Bàn về 50 chủ đề triết học thú vị, cuốn sách là một minh chứng cho thấy triết học không hề khô khan, sách vở. Dù là những ý tưởng xưa cũ nhất hay hiện đại nhất, chúng đều rất gần gũi, có tầm ảnh hưởng, giúp chúng ta hiểu cách thế giới này tồn tại và cách chúng ta tri nhận về nó.';
        $book->image = 'image\book\chinhtri\50-y-tuong-triet-hoc_108132_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Thiết lập tịnh độ';
        $book->summary = 'Kinh A Di Đà là một kinh Đại thừa, thuộc về nền Phật giáo Phát triển. Đạo Bụt giống như một cây đại thọ và cũng là một thực tại sinh động. Bất kỳ một cái gì đang sống cũng phải lớn lên. Một cây đang sống thì ngày nào cũng cho thêm cành, lá; cành dài ra thêm, lá mọc nhiều thêm. Có cành mới, lá mới, hoa mới và trái mới thì cây đạo Bụt mới là một thực tại linh động, một cái gì đang sống. Vì vậy, mỗi ngày, mỗi tháng, mỗi năm, đạo Bụt phải phát triển thêm. Đạo Bụt Đại thừa là những hoa trái phát triển từ cội nguồn Phật giáo Nguyên thuỷ.';
        $book->image = 'image\book\chinhtri\thiet-lap-tinh-do_109091_1.jpg';
        $book->price = 120000;
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 3;
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
        $book->category = 3;
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
        $book->category = 3;
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
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Content bạc tỷ';
        $book->summary = 'Kinh doanh muốn phát triển lâu dài thì content phải có hiệu quả. Content hiệu quả là content có thể hái ra tiền. Rất nhiều content được chú trọng từng câu chữ với những câu văn bay bổng nhưng lại không thể mang lại hấp dẫn đối với người đọc. Viết content cũng giống việc móc nối các thông tin lại với nhau, “Content bạc tỷ” sẽ chỉ ra cho bạn 4 bước cụ thể để xây dựng chiến dịch viết một bài quảng cáo chuyên nghiệp: “Nói những gì – Nói với ai – Nói ở đâu – Nói thế nào”. Nói một cách dễ hiểu hơn thì chính là xem khách hàng là đối tượng để tán gẫu, chúng ta áp dụng đúng bốn điều trên sẽ khiến cuộc trò chuyện đạt được hiệu quả cao hơn.';
        $book->image = 'image\book\kinhte\content-bac-ty_108286_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
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
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Dạy Con Trong Hoang Mang';
        $book->summary = 'Gửi gắm thông điệp “chuyển hóa chính mình để giáo dục trẻ thơ”';
        $book->image = 'image\book\kinhte\day-con-trong-hoang-mang_73759_1.jpg';
        $book->price = '94000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường đến thành công';
        $book->summary = 'Đường Đến Thành Công Đỉnh Cao - Những Lời Khuyên "Đắt Giá" Trong Kinh Doanh';
        $book->image = 'image\book\kinhte\duong-den-thanh-cong-cua-jack-ma_50720_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đường đến thành công';
        $book->summary = 'Đường Đến Thành Công Đỉnh Cao - Những Lời Khuyên "Đắt Giá" Trong Kinh Doanh';
        $book->image = 'image\book\kinhte\duong-den-thanh-cong-cua-jack-ma_50720_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Mạng lưới kinh doanh';
        $book->summary = 'Kinh doanh theo mạng lưới là một trong những nghề nghiệp phát triển nhanh nhất tại Mỹ. Hàng triệu người như bạn đã từ bỏ công việc hành chính nhàm chán để theo đuổi cơ hội vươn tới ước mơ về một công việc kinh doanh cho riêng mình. Tuy nhiên, nhiều người nhận ra năm đầu tiên trong kinh doanh theo mạng lưới là thời gian thử thách, gian nan nhất.';
        $book->image = 'image\book\kinhte\mang-luoi-kinh-doanh-da-cap_108688_1.png';
        $book->price = '124000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Quản lý chiến lược';
        $book->summary = 'Lịch sử không bao giờ lặp lại nên nếu cứ “học tập lại những điều xảy ra trong lịch sử” là đồng nghĩa với việc đưa mình vào vòng nguy hiểm. Hơn nữa, có nhiều sự việc không xảy ra một cách ngẫu nhiên. Tuy nhiên, tất cả chúng ta thường không nhìn nhận rằng mọi thứ xảy ra theo tính tất yếu. Giá trị đích thực của việc học từ lịch sử là trong một tình huống sẽ xảy ra rất nhiều việc, sẽ có nhiều chiến lược có hiệu quả tương ứng với những tình huống đó. Cuốn sách này là một tài liệu quản lý chiến lược giới thiệu những khái niệm chiến lược đã xuất hiện trong suốt 100 năm từ đầu thế kỷ 20 đến nay, cùng với nền tảng của chúng. Từ một chiến lược quản lý cổ điển được nhiều công ty Nhật Bản áp dụng, đến việc giới thiệu những chiến lược mới nhất được sinh ra trong môi trường kinh doanh thay đổi mạnh mẽ của thế kỷ 21, độc giả sẽ có cái nhìn sâu sắc hơn về dòng chảy của lịch sử kinh doanh.';
        $book->image = 'image\book\kinhte\quan-ly-chien-luoc_108305_1.jpg';
        $book->price = '140000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Vòng quay tiền mặt';
        $book->summary = 'Tôi xin được phép gửi đến các bạn tình yêu của tôi, chúc cho các bạn có một hành trình hạnh phúc. Đừng quên thêm vào thực đơn hàng ngày đôi chút tình yêu!';
        $book->image = 'image\book\kinhte\vong-quay-tien-mat_108808_1.jpg';
        $book->price = '80000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 2;
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
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Nàng heo annie gầy còm';
        $book->summary = 'Nàng heo annie gầy còm';
        $book->image = 'image\book\thieunhi\nang-heo-annie-gay-com_109156_1.jpg';
        $book->price = '50000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Chúc mừng sinh nhật';
        $book->summary = 'Chúc Mừng Sinh Nhật!';
        $book->image = 'image\book\thieunhi\chuc-mung-sinh-nhat_105372_1.jpg';
        $book->price = '44000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Sử thi odisey';
        $book->summary = 'Khi khởi hành từ thành Troy để trở về Ithaca, người chiến binh huyền thoại Odysseus chẳng chút mảy may nghi ngờ về những hiểm họa khủng khiếp mà mình sẽ phải trải qua trên đường trở về nhà.';
        $book->image = 'image\book\thieunhi\su-thi-odyssey_105254_1.png';
        $book->price = '56000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Từ bước chân chập chững';
        $book->summary = 'Mỗi em bé đều có những lần đầu đáng nhớ, lần đầu gây ra một chuyện kì quặc, lần đầu đi lạc, lần đầu cáu nhặng xị, lần đầu bị bắt nạt, lần đầu tự đối mặt với nỗi sợ hãi, lần đầu làm việc nhà… và nhiều lần đầu khác. Ngắm nhìn những bước chân con chập chững, cảm nhận những lần đầu đáng nhớ của con, hỗ trợ con trên đường đời khôn lớn… đó chính là niềm hạnh phúc vô bờ của người làm cha làm mẹ, phải không?';
        $book->image = 'image\book\thieunhi\tu-buoc-chan-chap-chung-lan-dau-di-lac_109163_1.jpg';
        $book->price = '23000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
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
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Gauguin';
        $book->summary = 'Đây là Gauguin kể về cuộc đời và sự nghiệp của họa sỹ Hậu Ấn tượng vĩ đại người Pháp Gauguin, từ cậu bé có thân thế đặc biệt đến chàng trai thích phiêu lưu, mạo hiểm rồi trở thành một viên chức môi giới chứng khoán và cuối cùng lựa chọn nghệ thuật là lối thoát giúp ông trốn khỏi cái cuộc sống tù hãm. Ông đã vẽ những bức tranh đẹp nhất đời mình tại Tahiti – nơi ông xem là thiên đường nhiệt đới còn giữ vẻ hoang sơ của thiên nhiên và bản tính con người.';
        $book->image = 'image\book\trithuc\day-la-gauguin_108753_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây là Leonardo Da Vinci';
        $book->summary = 'Leonardo da Vinci là một nhà bác học, một con người đa tài mà ngày nay chúng ta thường gọi là “con người Phục Hưng”. Có lúc ông chế tạo khí cụ quân sự, có lúc lại thiết kế công trình xây dựng, và có lúc thì vẽ tranh. Mối quan tâm của ông trải dài từ thực vật học, truyện ngụ ngôn truyền thuyết, cho tới quá trình thai nghén và sinh con. Nhưng ông nói rằng hội họa luôn là mối quan tâm chính yếu của mình. Đối với ông, nhịp điệu của thế giới được xác định bởi hội họa và bởi thị giác: “Người họa sĩ có cả vũ trụ trong tâm trí và bàn tay mình.”';
        $book->image = 'image\book\trithuc\day-la-leonardo-da-vinci_108746_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Monet';
        $book->summary = 'Oscar-Claude Monet (1840 – 1926) là tên tuổi hàng đầu của trường phái hội họa Ấn tượng Pháp. Cả cuộc đời Monet trung thành với trường phái Ấn tượng, ông cũng là người tiên phong, tạo ảnh hưởng và truyền cảm hứng lâu dài lên nhiều thế hệ họa sĩ. Trong suốt 86 năm tại thế, người họa sĩ ấy đã lao động không ngơi nghỉ và để lại cho đời hơn 2.000 tác phẩm.';
        $book->image = 'image\book\trithuc\day-la-dali_108751_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây là Dali';
        $book->summary = 'Salvador Dalí là một trong những nghệ sỹ nổi tiếng nhất thế giới, cả vì phong cách sống hoang toàng, chòm ria mép bất chấp trọng lực, cho đến thứ nghệ thuật kỳ lạ của ông. Cuốn sách này kể về cuộc đời của Dalí và khám phá ý nghĩa của những bức tranh Siêu thực của ông. Tinh túy của chủ nghĩa siêu thực Dalí chính là: nơi cái bình thường trở thành cái phi thường. Dalí tự xem mình là một bậc thầy Phục Hưng – một kiện tướng về vẽ tranh sơn dầu – nhưng ông phá tan và vượt ra ngoài cái quy củ gọn gàng, ngăn nắp của mỹ thuật. Những tác phẩm quan trọng trong sự nghiệp của Dalí đều được giới thiệu đầy đủ trong cuốn sách này, từ Dáng người bên cửa sổ, đến Những ngày đầu tiên của mùa xuân, Sự dai dẳng của ký ức…';
        $book->image = 'image\book\trithuc\day-la-monet_108748_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Rembrandt';
        $book->summary = 'Rembrandt van Rijn (1606 – 1669) là một trong những bậc thầy cựu truyền của mỹ thuật Tây phương. Bất chấp cuộc đời nhiều thăng trầm và những bức tranh hàng thế kỷ bị chối bỏ bởi chủ nghĩa kinh viện, cái tên Rembrandt đến nay vẫn được kính trọng, bởi những nét cọ đầy cảm xúc cùng cảm thức tâm lý mãnh liệt. Tranh của ông, dù là vẽ hay in, đều đứng vững trước thử thách của thời gian';
        $book->image = 'image\book\trithuc\day-la-rembrandt_108749_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đây Là Warhol';
        $book->summary = 'Andy Warhol (1928 – 1987) có lẽ là một trong những nghệ sĩ gây nhiều tranh cãi nhất mọi thời đại. Ông là một trong những nghệ sĩ tiên phong, và cũng nằm trong số người dẫn đầu, của trào lưu pop-art. Được nhiều người miêu tả là một tấm gương theo nghĩa đen, Warhol phản chiếu lại cái trống rỗng của xã hội Mỹ hiện đại ở độ phân giải cao, như chính ông từng nói: “Nếu bạn muốn biết tất cả về Andy Warhol, chỉ cần nhìn phớt qua tôi và tranh ảnh hay phim của tôi, nhìn bề mặt thôi; tôi ở đó. Không có gì đằng sau cả.”';
        $book->image = 'image\book\trithuc\day-la-warhol_108752_1.jpg';
        $book->price = '120000';
        $book->quantity = 30;
        $book->authorID = 3;
        $book->publisherID = 3;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Chuyện Cũ Hà Nội';
        $book->summary = '“Tôi sinh ra và lớn lên ở Hà Nội, mọi chuyện chính yếu của đời tôi đều xảy ra ở nơi này và tôi viết bằng hồi ức về Hà Nội xưa cũ, tuổi trẻ của mình. Chuyện cũ Hà Nội tôi viết từ năm lên mười tới lúc già.”';
        $book->image = 'image\book\vanhoc\chuyen-cu-ha-noi.jpg';
        $book->price = '83000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
        $book->save();

        $book = new \App\Book();
        $book->title = 'Đi Thật Xa Trên Một Chiếc Camper';
        $book->summary = 'Khi bạn đọc cuốn sách đầy cảm hứng này, có thể tác giả vẫn đang dấn bước trên một cung đường xa xôi. Ở Khải Đơn, mỗi cuốn sách sẽ vẽ ra một hành trình và hứa hẹn một hành trình tiếp nối. Điều đó truyền cảm hứng cho những người đọc ở thế hệ cô lên đường với hành trang rất gọn nhẹ của riêng mình.';
        $book->image = 'image\book\vanhoc\di-that-xa-tren-mot-chiec-camper_102192_1.png';
        $book->price = '90000';
        $book->quantity = 30;
        $book->authorID = App\Author::inRandomOrder()->first()->id;
        $book->publisherID = App\Publisher::inRandomOrder()->first()->id;
        $book->category = 4;
        $book->save();

    }
}
