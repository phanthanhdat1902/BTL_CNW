function onActionBtn(button, status) {
    var btn = button;
    if (btn.id === "btnAdd") {
        window.location = "http://localhost/BTL_CNW/admins/adduser"
    }
    if (btn.id === "btnUpdate") {
        if (!btn.classList.contains("disable")) {
            /*
             Lấy id của user được click
             */
            var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
            var userId = row[0];
            window.location = "http://localhost/BTL_CNW/admins/detailuser/" + userId;
        }
    }
    //TH bấm yes
    if (btn.classList.contains("btnConfirmYes")) {
        var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
        //xóa
        if (status === 1) {
            window.location = "http://localhost/BTL_CNW/admins/deleteuser/" + row;
        }
    }
}