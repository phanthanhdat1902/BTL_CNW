function onActionBtn(button, status) {
    var btn = button;
    if (btn.id === "btnAdd") {
        window.location = "/adminThemTour.html"
    }
    if (btn.id === "btnUpdate") {
        if (!btn.classList.contains("disable")) {
            //lấy id tour muốn update
            var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
            var idTour = row[0];
            alert("ID tour là:" + idTour);
            //
        }
    }
    //TH bấm yes
    if (btn.classList.contains("btnConfirmYes")) {
        var row = Array.from(document.querySelectorAll('.main-table tbody tr.tick input'), el => el.value);
        //xóa
        if (status === 1) {
            window.location = "http://localhost/BTL_CNW/admins/deleteOrderTour/" + row;
        }
        //duyệt
        if (status === 2) {
            window.location = "http://localhost/BTL_CNW/admins/commitTour/" + row;
        }
        if (status === 3) {
            window.location = "http://localhost/BTL_CNW/admins/cancelOrderTour/" + row;
        }
    }
}

var page_index = document.getElementById("page_index");
page_index.addEventListener('keypress', function (e) {
    if (e.keyCode === 13) {
        var pageIndex = page_index.value;
        var pageTotal = document.getElementById("page_total").innerText;
        var pageSize = document.getElementById("page_size").options[document.getElementById("page_size").selectedIndex].value;
        alert("page: page index=" + pageIndex + " page size=" + pageSize + " page total=" + pageTotal);
    }
});

function onPage(button, event) {
    var btn = button;

    var pageIndex = parseInt(page_index.value);
    var pageSize = document.getElementById("page_size").options[document.getElementById("page_size").selectedIndex].value;
    var pageTotal = parseInt(document.getElementById("page_total").innerText);

    if (btn.id === "btn_first") {
        pageIndex = 1;
    }

    if (btn.id === "btn_prev") {
        pageIndex = pageIndex - 1;
    }
    if (btn.id === "btn_next") {
        pageIndex = pageIndex + 1;
    }
    if (btn.id === "btn_last") {
        pageIndex = pageTotal;
    }
    if (pageIndex <= 1) {
        pageIndex = 1;
    }
    if (pageIndex >= pageTotal) {
        pageIndex = pageTotal;
    }
    page_index.value = pageIndex;
    alert("page: page index= " + pageIndex + " page size=" + pageSize + " page total=" + pageTotal);
}