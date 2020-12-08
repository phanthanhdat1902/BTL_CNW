+) file config để config database, cofig môi trường Dev để hiển thị lỗi cho develop, 
khi triển khai thật thì sẽ set biến này bằng false, che giấu lỗi với người dùng.


+)File: inflection: tệp này cho phép cài đặt các thể các từ bất quy tắc ( ví dụ như các từ không đếm được
 tức là các từ bất quy tắc,..)
ví dụ như từ fish số nhiều là fishes chứ không phải là fish thêm s đằng sau, cái này để
cắt chuỗi khi xử lý trong controller, hôm nọ Điệp hỏi ý.

+)file routing: 
Đoại loại cái này dùng để sửa đường dẫn URL
Ví dụ là:
http://localhost/framework/admin/categories/view sẽ thành http://localhost/framework/admin/categories_view
Ở đây controller là thằng admin và action là categories_view 
Nó dùng các biểu thức chính quy, mà biểu thức chính quy khó học vl
T sẽ để nguyên đoạn tiếng Anh cho Điệp dịch nha:
The routing configuration file enables us to specify default controller and action.
 We can also specify custom redirects using regular expressions. 
Currently I have specified only one redirect i.e. http://localhost/framework/admin/categories/view 
will become http://localhost/framework/admin/categories_view 
where admin is the controller and categories_view is the action. 
This will enable us to create an administration centre with pretty URLs.
 You can specify others as per your requirements. 
For more information on how to use regular expressions have a look at one of these tutorials.
 