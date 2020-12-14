MÔ TẢ CÁC BẢNG TRONG CƠ SỞ DỮ LIỆU:

====================================================================================



-/roles: Vai trò: Quyền của người dùng
	+id
	+tên: admin (quyền cao nhất), user (người dùng thông thường, chỉ có quyền
	tạo tài khoản, review và order), hotel_manager (quản lý data về khách sạn), 
	hotel_reservation_clerk (tiếp nhận và xử lý order đặt phòng), tour_manager 
	(quản lý data tour), tour_advisor (tiếp nhận và xử lý order tour),
	hotel_consultant (người xử lý yếu cầu tư vấn khách sạn), tour_consultant

Một role thuộc về nhiều user, mỗi user có một role



====================================================================================



-/users:
	+/id
	+/id_role
	+/tên người dùng: not null
	+/password: not null
	+/email
	+/tài khoản google
	+/tài khoản facebook
	+/ngày tạo

Mỗi user có một role, mỗi role thuộc về nhiều user
Một user có thể viết nhiều review_hotel (mỗi review cho một hotel khác nhau), mỗi
review_hotel thuộc về một user
Một user có thể viết nhiều review_tour (mỗi review cho một tour khác nhau), mỗi
review_tour thuộc về một user
Mỗi user có thể tạo nhiều order_hotel, mỗi order_hotel thuộc về một user
Mỗi user có thể tạo nhiều order_tour, mỗi order_tour thuộc về một user



==================================================================================



-/cities: Thành phố/Tỉnh
	+/id
	+/tên thành phố
	+/số lượng khách sạn
	+/ảnh

Một city chứa nhiều hotel, một hotel thuộc về một city
Một city chứa nhiều area, một area thuộc về một city
Một city là một điểm đến của nhiều tour, một tour có một city (làm điểm đến)



====================================================================================



-/areas: Khu vực: địa điểm du lịch của một tỉnh, thành phố
	+/id
	+/id của thành phố
	+/tên khu vực: Nhà hát lớn, hồ Tây, v.v. hoặc "Mặc định Hà Nội" để mô tả
	khách sạn không thuộc khu du lịch nào)
	+/số lượng khách sạn thuộc khu vực này

Một area thuộc về một city, một city chứa nhiều area
Một area chứa nhiều hotel, một hotel thuộc về một area



====================================================================================



-/locations: Địa chỉ: địa chỉ của khách sạn
	+/id
	+/quốc gia
	+/id của thành phố
	+/tên quận
	+/tên phường
	+/số nhà

Một location thuộc về một city, một city chứa nhiều location
Một location xác định một hotel, một hotel thuộc về một location



====================================================================================



-/type_of_hotels: Loại khách sạn
	+/id
	+/tên: resort, biệt thự, khách sạn, du thuyền, nhà nghỉ, v.v.

Một type_of_hotel thuộc về nhiều hotel, một hotel có một type_of_hotel



====================================================================================



-/theme_hotels: Chủ đề của khách sạn
	+/id
	+/tên chủ đề: Tết, Ưu đãi, v.v. hoặc "Mặc định" để mô tả khách sạn không
	thuộc chủ đề nào
	+/mô tả
	+/ảnh
	+/số lượng khách sạn thuộc chủ đề này

Một theme_hotel thuộc về nhiều hotel, một hotel tại mỗi thời điểm thuộc về một
theme



====================================================================================



-/utilities: Tiện nghi (Khách sạn có hồ bơi, bãi đỗ xe, đưa đón tại sân bay hay 
không, v.v.)
	+/id
	+/có phòng gia đình hay không
	+/có bãi biển riêng hay không
	+/có bãi đỗ xe chô oto hay không
	+/có hồ bơi hay không
	+/có đưa đón miễn phí tại sân bay hay không
	+/có khu vui chơi trẻ em hay không
	+/có dịch vụ trọn gói hay không

Một utility thuộc về nhiều hotel, một hotel có một utility (một tổ hợp các thuộc
tính utility)



====================================================================================



-/hotels:
	+/id
	+/id_location
	+/id_area
	+/id_utility
	+/id_theme
	+/id_type_of_hotel
	+/tên khách sạn
	+/mức sao (1, 2, 3, 4, 5 sao)
	+/mô tả
	+/quy định giờ nhận phòng
	+/quy định giờ trả phòng
	+/quy định đưa đón
	+/quy định nhận phòng
	+/quy định giải trí
	+/quy định phụ thu
	+/ghi chú quy định
	+/ảnh 1
	+/ảnh 2
	+/ảnh 3
	+/ảnh 4
	+/ảnh 5
	+/link video quảng cáo khách sạn
	+/điểm số review
	+/số lượng review

Mỗi hotel nằm tại một location, một location dành cho một hotel
Mỗi hotel thuộc về một area, một area chứa nhiều hotel
Mỗi hotel có một utility, một utility thuộc về nhiều hotel
Mỗi hotel có một theme, mỗi theme gồm nhiều hotel
Mỗi hotel có một type_of_hotel, mỗi type_of_hotel gồm nhiều hotel
Mỗi hotel gồm nhiều type_of_room, mỗi type_of_room thuộc về một hotel
Mỗi hotel gồm nhiều room, mỗi room thuộc một hotel
Mỗi hotel có nhiều review về nó (mỗi review đến từ một user khác nhau), mỗi
review dành cho một hotel



=================================================================================



-/type_of_views: hướng của phòng
	+/id
	+/tên: hướng biển, hướng phố, hướng vườn, hướng sân golf, v.v.

Mỗi type_of_view thuộc về nhiều type_of_room, mỗi type_of_room có duy nhất một
view



====================================================================================



-/type_of_rooms:
	+id
	+id_hotel
	+tên loại phòng: deluxe, royal suite, v.v.
	+id_type_of_view
	+chứa được lượng người lớn là
	+chứa được lượng trẻ em là
	+cỡ (đơn vị mét vuông)
	+loại giường
	+loại nhà tắm
	+ảnh



==================================================================================



-/rooms:
	+id
	+id_type_of_room
	+id_hotel
	+tên phòng: VD:101, 102E, 102W, 102S, 102N, v.v.
	+có sẵn hay không: có sẵn sàng cho đặt hay không (do
	tour_reservation_clerk quản lý)
	+ngày khách checkin: chức năng dành cho tour_reservation_clerk
	+ngày khách hẹn checkout: chức năng dành cho tour_reservation_clerk
	+ghi chú

Mỗi room thuộc về một hotel, một hotel chứa nhiều room
Mỗi room thuộc về một type_of_room, mỗi type_of_room gồm nhiều room



==================================================================================



-/service_rooms: dịch vụ phòng
	+/id
	+/có ăn sáng hay không
	+/có wifi miễn phí hay không
	+/có cho phép huỷ phòng hay không
	+/đã thêm VAT chưa
	+/có đưa đón miễn phí hay không

Mỗi service_rooms cùng với một type_of_room xác định một package



==================================================================================



-/packages: gói (mỗi cặp dịch vụ phòng và loại phòng xác định một gói)
	+/id_type_of_room
	+/id_room_service
	+/giá cho một người một đêm

Mỗi package được xác định một cặp type_of_room và service_room
Mỗi package nằm trên nhiều order_hotel, mỗi order_hotel gồm một package



==================================================================================



-/starter_packages: gói rẻ nhất của một khách sạn
	+/id_hotel
	+/id_type_of_room
	+/id_service

Mỗi starter_package thuộc về một hotel, một hotel có một starter_package
(dù có thể hotel đó có các package cùng một giá rẻ nhất)



==================================================================================



-/combos: combo ưu đãi của khách sạn
	+/id
	+/id_hotel
	+/id_type_of_room
	+/id_service
	+/giá khuyến mãi
	+/ngày bắt đầu khuyến mãi
	+/ngày kết thúc khuyến mãi
	+/số lượng phòng ít nhất cần đặt để được hưởng ưu đãi (những phòng này
	thuộc vào loại phòng xác định bởi id_type_of_room)

Mỗi combo thuộc về một hotel, một hotel có một combo
Mỗi combo dành cho một package, package nằm trong nhiều nhất một combo



==================================================================================



-/service_tours: Dịch vụ của tour (Có hướng dẫn viên, bảo hiểm, bao vé hay không,
v.v.)
	+/id
	+/có hướng dẫn viên hay không
	+/có bảo hiểm hay không
	+/có bao bữa ăn hay không
	+/có bao vé tham quan hay không
	+/có đưa đón hay không

Một service_tour thuộc về nhiều tour, mỗi tour chỉ có một service_tour (một tổ hợp
các thuộc tính service_tour)



==================================================================================



-/theme_tours: Chủ đề tour
	+/id
	+/tên: Cung đường Đông Tây Bắc, Tour cao cấp, Tour trải nghiệm, v.v. hoặc
	"Mặc định" để thể hiện tour không thuộc chủ đề nào

Một theme_tour thuộc về nhiều tour, mỗi tour tại một thời điểm chỉ thuộc về một
thêm_tour



==================================================================================



-/tour_transportations: những loại hình vận tải xuất hiện ở tour (VD: tàu với du
lịch biển, v.v.)
	+/id
	+/có xe khách hay không
	+/có tàu hoả hay không
	+/có máy bay hay không
	+/có tàu biển hay không

Mỗi tour_transporation: thuộc về nhiều tour, mỗi tour có duy nhất một
tour_transportation (một tổ hợp các thuộc tính của tour_transportation)



==================================================================================



-/tours:
	+/id
	+/id_tour_transportation
	+/id_city
	+/id_service
	+/id_theme
	+/điểm review
	+/số lượng review
	+/tên tour
	+/số lượng người lớn ít nhất cần tham gia để có thể đặt tour
	+/mã tour
	+/số ngày
	+/số đêm
	+/đường link đến mô tả (có thể sẽ phải sửa lại)
	+/quy định phụ thu
	+/quy định những dịch vụ đã tính giá (VD: giá trên đã bao gồm tiền vé vào
	cửa, v.v.)
	+/quy định những dịch vụ chưa tính giá (VD: giá trên chưa bao gồm tiền
	mua vé cáp treo, v.v.)
	+/quy định huỷ order
	+/ghi chú quy định
	+/quy định phụ thu với phòng đơn
	+/giá mỗi người lớn
	+/giá mỗi trẻ em

Một tour có một tour_transportation, một tour_transportation thuộc về nhiều tour
Một tour diễn ra tại một city, một city có nhiều tour
Một tour có một tour_service, một tour_service thuộc về nhiều tour
Một tour thuộc về một theme_tour, một theme_tour gồm nhiều tour
Một review_tour thuộc về một tour, một tour có nhiều tour_review
Một tour có nhiều order_tour đến nó, một order_tour chỉ định  một tour
Một tour có nhiều departure (nhiều lịch khởi hành), một departure thuộc một tour



==================================================================================



-/departures: lịch trình tour
	+/id
	+/id tour
	+/ngày khởi hành
	+/ngày kết thúc
	+/giá phụ thu (nếu như ngày khởi hành và kết thúc nằm trong ngày lễ, Tết,
	do tour_manager quản lý)

Một departure thuộc về một tour, một tour gồm nhiều departure



==================================================================================



-/review_hotels:
	+id_user
	+id_hotel
	+điểm (0, 1, 2 , 3, 4, 5, 6 ,7, 8, 9, 10)
	+nội dung
	+ngày viết

Mỗi cặp user và hotel xác định một review_hotel (Một user có thể viết nhiều nhất
một review về một hotel, mỗi hotel có nhiều nhất một review từ một user)
Mỗi review dành cho một hotel, mỗi hotel có nhiều review (mỗi review viết bởi
một user khác nhau)
Mỗi review được viết bởi một user, một user có thể viết nhiều review (mỗi review
cho một hotel khác nhau)



==================================================================================



-/review_tours:
	+id_user
	+id_tour
	+điểm (0, 1, 2 , 3, 4, 5, 6 ,7, 8, 9, 10)
	+nội dung
	+ngày viết

Mỗi cặp user và tour xác định một review_tour (Một user có thể viết nhiều nhất
một review về một tour, mỗi tour có nhiều nhất một review từ một user)
Mỗi review dành cho một tour, mỗi tour có nhiều review (mỗi review viết bởi
một user khác nhau)
Mỗi review được viết bởi một user, một user có thể viết nhiều review (mỗi review
cho một tour khác nhau)



==================================================================================



-/type_of_payments: kiểu thanh toán
	+id
	+tên kiểu thanh toán: tiền mặt, chuyển khoản, ví điện tử, thẻ tín dụng

Mỗi type_of_payment dành cho nhiều order, một order có một type_of_payment
(cả order_hotel và order_tour)



==================================================================================



-/order_hotels:
	+id
	+id_user
	+id_type_of_room
	+id_service
	+id_type_of_payment: Kiểu thanh toán
	+id_hotel
	+thành tiền
	+tên người đặt
	+số điện thoại người đặt
	+email người đặt
	+ghi chú
	+số lượng người lớn
	+số lượng trẻ em
	+ngày đến nhận
	+ngày trả phòng
	+trạng thái: chờ xử lý, được chấp nhận, từ chối

Mỗi order được tạo bởi một user, một user có thể tạo nhiều order
Mỗi order gửi đến một hotel,mỗi hotel nhận được nhiều order
Mõi order yêu cầu một package, mỗi package được yêu cầu bởi nhiều order
Mỗi order có một type_of_payment, mỗi type_of_payment dành cho nhiều order (và
cả order_tour)



==================================================================================



-/order_tours:
	+id
	+id_user
	+id_tour
	+id_type_of_payment: Kiểu thanh toán
	+số người lớn
	+số trẻ em
	+ngày bắt đầu chuyến tour
	+ngày kết thúc chuyến tour
	+thành tiền
	+tên người đặt
	+số điện thoại người đặt
	+email người đặt
	+ghi chú
	+trạng thái: chờ xử lý, được chấp nhận, từ chối

Mỗi order được tạo bởi một user, một user có thể tạo nhiều order
Mỗi order gửi đến một tour,mỗi tour nhận được nhiều order
Mỗi order có một type_of_payment, mỗi type_of_payment dành cho nhiều order (và
cả order_hotel)



==================================================================================



-/hotel_consulting_requests: yêu cầu tư vấn thuê phòng khách sạn cho đoàn
	+id
	+tên khách sạn dự định
	+ngày khởi hành
	+ngày kết thúc
	+số người lớn
	+số trẻ em
	+ghi chú
	+tên người yêu cầu tư vấn
	+SĐT người yêu cầu tư vấn
	+email người yêu cầu tư vấn

Bảng này không tham chiếu tới bảng nào khác và không bảng nào khác tham chiếu
bảng này



==================================================================================



-/tour_consulting_requests: yêu cầu tư vấn tour cho đoàn
	+id
	+tên người yêu cầu tư vấn
	+SĐT người yêu cầu tư vấn
	+email người yêu cầu tư vấn
	+ghi chú: thời gian, số khách dự kiến, địa điểm yêu thích, loại hình
khách sạn

Bảng này không tham chiếu tới bảng nào khác và không bảng nào khác tham chiếu
bảng này



==================================================================================