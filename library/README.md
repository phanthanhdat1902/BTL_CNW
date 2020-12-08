+) file cache.class dùng để cache lại dữ liệu muốn cache, ở đây
nó làm cơ bản nên chỉ có 2 hàm get và set
hàm set nhận vào 2 tham số là tên file và giá trị muốn cache
nó sẽ tạo file có tên là tham số truyền vào và ghi lên file đó giá trị muốn cache
hàm get thì kiểm tra xem file đó tồn tại không và trả về dữ liệu

+)file inflection.class, đm đọc đến file này trầm cảm luôn,
chắc mọi người đang thắc mắc là ở trên thư mục config đã có file inflection rồi
mà sao ở đây lại có đúng ko ?
Đại loại là file này nó liệt kê được một số trường hợp chuẩn, hay dùng và một số
từ bất quy tắc phổ biến, nói thật thằng làm lười vl, đã mất công làm thì làm tất đi lại còn
để lại cho bọn mình làm, chính vì thế file inflection ở thư mục config ra đời
file đó nó cho phép mình thêm 1 số từ bất quy tắc mà nó thêm thiếu hoặc là từ nào do 
chính bản thân mình nghĩ hoặc sáng tạo ra :)). Chính vì thế trước khi chạy các hàm foreach, nó 
mới chạy qua cái mảng ở file trong config đầu tiên, kiểu như ưu tiên file người dùng
tự định nghĩa trước, tìm được thì return luôn.
Mở file inflection.class chắc trầm cảm nữa, toàn là các biểu thức chính quy. Nhìn nản muốn
nghỉ luôn môn này. Đùa chứ thật ra hiểu về biểu thức chính quy thì code luôn siêu ngắn,
nhất là đoạn string các thứ. Tóm lại cái đoạn đỏ đỏ là biểu thức chính quy thôi, ko cần hiểu cũng được
Ví dụ như:
'/(quiz)$/i'               => "$1zes",
nghĩa là từ quiz thì sẽ được thêm là quizes, cái $1 ở bên phải thay cho đoạn chữ đứng đằng trước 
chữ $ bên tên trái, t đoán thế :D.

+) file bootstrap ở đây ban đầu tưởng là framwork bootstrap , nhưng đ phải, nó chỉ là file để chạy
các file trong đây, vl ! 

+) file template.class để hiển thị file html tương ứng thui. Ở đây nó bổ sung thêm doNotRenderHeader để
kiểm tra xem trang đó có phải hiện header mới không.

+) File share.php thì luôn được chạy mỗi khi có sự kiện gì. gần như là file đầu vào của mọi sự kiện

+) file sqlquery thì không cần phải nói nha
+) file vanillacontroller là file controller.class ý, ko hiểu sao phần 2 nó đổi tên,
các file trong thư mục controller sẽ kế thừa từ class trong file này
+) tương tự với vanillamodel
+) lớp cuối, lớp html, gõ mệt vl : Lớp này để support cho lớp template ý, nó cho phép sủ dụng 
một vài hàm tiêu chuẩn để tạo links, thêm js và css. Cũng chưa test thử nên chưa hiểu sâu từng hàm

