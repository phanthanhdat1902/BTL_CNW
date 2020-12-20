/*Hàm click hiển-ẩn menu*/
window.onload = function (e) {
    document.getElementById("features").addEventListener('click', function () {
        var subFeatures = document.getElementsByClassName("subFeatures")[0];
        var iconFirst = document.getElementById("iconFirst");
        if (subFeatures.classList.contains("active")) {
            subFeatures.classList.remove("active");
            iconFirst.classList.remove("rotate");
        } else {
            subFeatures.classList.add("active");
            iconFirst.classList.add("rotate");
        }
    });
    document.getElementById("services").addEventListener('click', function () {
        var subService = document.getElementsByClassName("subService")[0];
        var iconSecond = document.getElementById("iconSecond");
        if (subService.classList.contains("active")) {
            subService.classList.remove("active");
            iconSecond.classList.remove("rotate");
        } else {
            subService.classList.add("active");
            iconSecond.classList.add("rotate");
        }
    });
    document.getElementById("btnMenu").addEventListener('click', function () {
        var btnMenu = document.getElementById("btnMenu");
        var menu = document.getElementsByClassName("menu")[0];
        var content = document.getElementsByClassName("content")[0];
        if (btnMenu.classList.contains("click")) {
            btnMenu.classList.remove("click");
            menu.classList.remove("show");
            content.classList.remove("show");
        } else {
            btnMenu.classList.add("click");
            menu.classList.add("show");
            content.classList.add("show");
        }
    });


    /*hàm khi click vào "xin chào,admin ở header thì nó sẽ hiển thị các mục chi tiết*/

    document.getElementById("dropbtn").addEventListener('click', function () {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains("show")) {
            myDropdown.classList.remove("show");
        } else {
            myDropdown.classList.add("show");
        }
    });


    /* click vào table*/
    document.querySelectorAll('.main-table tbody tr').forEach(e => e.addEventListener("click", RowOnClick));
    function RowOnClick(event) {
        if (window.event.ctrlKey) {
            var tr = event.target.parentNode;
            //tr.style.backgroundColor = "#d7e9f4";
            if (tr.classList.contains("tick")) {
                tr.classList.remove("tick");
            } else {
                tr.classList.add("tick");
            }
        } else {
            var tr = event.target.parentNode;
            if (tr.classList.contains("tick")) {
                document.querySelectorAll('.main-table tbody tr.tick').forEach(e => { e.classList.remove("tick"); });
            } else {
                document.querySelectorAll('.main-table tbody tr.tick').forEach(e => { e.classList.remove("tick"); });
                tr.classList.add("tick");
            }
        }
        var tick = document.getElementsByClassName('tick');
        var btnUpdate = document.getElementById("btnUpdate");
        var btnDelete = document.getElementById("btnDelete");
        var btnApproval = document.getElementById("btnApproval");
        var btnCancel = document.getElementById("btnCancel");
        if (tick.length === 1) {
            if (btnUpdate.classList.contains("disable")) {
                btnUpdate.classList.remove("disable");
            }
        } else {
            if (!btnUpdate.classList.contains("disable")) {
                btnUpdate.classList.add("disable");
            }
        }
        if (tick.length >= 1) {
            if (btnDelete.classList.contains("disable")) {
                btnDelete.classList.remove("disable");
            }
            if (btnApproval != null && btnApproval.classList.contains("disable")) {
                btnApproval.classList.remove("disable")
            }
            if (btnCancel != null && btnCancel.classList.contains("disable")) {
                btnCancel.classList.remove("disable");
            }
        } else {
            if (!btnDelete.classList.contains("disable")) {
                btnDelete.classList.add("disable");
            }
            if (btnApproval != null && !btnApproval.classList.contains("disable")) {
                btnApproval.classList.add("disable")
            }
            if (btnCancel != null && !btnCancel.classList.contains("disable")) {
                btnCancel.classList.add("disable");
            }
        }
    }


    /*
        model duyệt và xóa  và hủy duyệt:  
    */
    // Get the modal
    var modalApproval = document.getElementById("modalApproval");
    var modalDelete = document.getElementById("modalDelete");
    var modalCancel = document.getElementById("modalCancel");
    // Get the button that opens the modal
    var btnApproval = document.getElementById("btnApproval");
    var btnDelete = document.getElementById("btnDelete");
    var btnCancel = document.getElementById("btnCancel");
    // Get the <span> element that closes the modal
    var spanApproval = document.getElementsByClassName("close")[1];
    var spanDelete = document.getElementsByClassName("close")[0];
    var spanCancel = document.getElementsByClassName("close")[2];
    //btn confirm
    var btnConfirmNoDelete = document.getElementsByClassName("btnConfirmNo")[0];
    var btnConfirmNoApproval = document.getElementsByClassName("btnConfirmNo")[1];
    var btnConfirmNoCancel = document.getElementsByClassName("btnConfirmNo")[2];
    // When the user clicks the button, open the modal 
    if (btnApproval != null) {
        btnApproval.onclick = function () {
            if (!document.getElementById("btnApproval").classList.contains("disable")) {
                modalApproval.style.display = "block";
            }
        }
        spanApproval.onclick = function () {
            modalApproval.style.display = "none";
        }
        btnConfirmNoApproval.onclick = function () {
            modalApproval.style.display = "none";
        }
    }
    if (btnDelete != null) {
        btnDelete.onclick = function () {
            if (!document.getElementById("btnDelete").classList.contains("disable")) {
                modalDelete.style.display = "block";
            }
        }
        spanDelete.onclick = function () {
            modalDelete.style.display = "none";
        }
        btnConfirmNoDelete.onclick = function () {
            modalDelete.style.display = "none";
        }
    }

    if (btnCancel != null) {
        btnCancel.onclick = function () {
            if (!document.getElementById("btnCancel").classList.contains("disable")) {
                modalCancel.style.display = "block";
            }
        }
        spanCancel.onclick = function () {
            modalCancel.style.display = "none";
        }
        btnConfirmNoCancel.onclick = function () {
            modalCancel.style.display = "none";
        }
    }
}
