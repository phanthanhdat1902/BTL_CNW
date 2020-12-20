/*
    show menu để thực hiện responsive
*/
function showMenu() {
    var myMenu = document.getElementById("myMenu");
    if (myMenu.className === "navHeader") {
        myMenu.className += " responsive";
    } else {
        myMenu.className = "navHeader";
    }
}

/*
* Hàm click vào tab trong tour detail
*/
function openTabRules(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
window.onload = function (e) {
    document.getElementById("defaultOpen").click();


    // Get the modal
    var modalOrder = document.getElementById("modalOrder");
    // Get the button that opens the modal
    var btnRequestOrder = document.getElementById("btnRequestOrder");

    var spanRequestOrder = document.getElementsByClassName("close")[0];
    if (btnRequestOrder != null) {
        btnRequestOrder.onclick = function () {
            modalOrder.style.display = "block";

        }
    }
    // When the user clicks on <span> (x), close the modal
    if (spanRequestOrder != null) {
        spanRequestOrder.onclick = function () {
            modalOrder.style.display = "none";
        }
    }
}


function onActionOrderTour(button) {
    var btn = button;
    var priceOld = document.getElementById("price_old").value;
    var priceChil = document.getElementById("price_chil").value;
    var spanNum = document.getElementsByClassName("numPeople");
    var numPeople = Array.from(spanNum, el => el.innerText);

    var price1 = document.getElementById("price1");
    var price2 = document.getElementById("price2");
    var sunPrice = document.getElementById("sunPrice");

    if (btn.id === "btnSubOld") {
        if (numPeople[0] === "0") {
            return;
        } else {
            price1.innerText = formatNumber(parseInt(priceOld) * (parseInt(numPeople[0]) - 1)) + " VND";
            spanNum[0].innerText = parseInt(numPeople[0]) - 1;
        }
    }
    if (btn.id === "btnAddOld") {
        price1.innerText = formatNumber(parseInt(priceOld) * (parseInt(numPeople[0]) + 1)) + " VND";
        spanNum[0].innerText = parseInt(numPeople[0]) + 1;
    }
    if (btn.id === "btnSubChil") {
        if (numPeople[1] === "0") {
            return;
        } else {
            price2.innerText = formatNumber(parseInt(priceChil) * (parseInt(numPeople[1]) - 1)) + " VND";
            spanNum[1].innerText = parseInt(numPeople[1]) - 1;
        }
    }
    if (btn.id === "btnAddChil") {
        price2.innerText = formatNumber(parseInt(priceChil) * (parseInt(numPeople[1]) + 1)) + " VND";
        spanNum[1].innerText = parseInt(numPeople[1]) + 1;
    }
    sunPrice.innerText = formatNumber(parseInt(spanNum[1].innerText) * priceChil + parseInt(spanNum[0].innerText) * priceOld) + " VND";
}
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}


function validateForm() {
    var formLogin = document.forms["formLogin"];
    var formRegister = document.forms["formRegister"];

    mail = document.getElementById("email");
    pwd = document.getElementById("password");
    cfpwd = document.getElementById("comfirmpassword");
    if (formLogin != null) {
        var email = formLogin["email"].value;
        var password = formLogin["password"].value;
        if (email == "" || email == null) {
            alert("Email must be filled out");
            mail.focus();
            return false;
        }
        if (password == "" || password == null) {
            alert("Password must be filled out");
            pwd.focus();
            return false;
        }
    }
    if (formRegister != null) {
        var email = formRegister["email"].value;
        var password = formRegister["password"].value;
        var comfirmpassword = formRegister["comfirmpassword"].value;
        if (email == "" || email == null) {
            alert("Email must be filled out");
            mail.focus();
            return false;
        }
        if (password == "" || password == null) {
            alert("Password must be filled out");
            pwd.focus();
            return false;
        }
        if (comfirmpassword == "" || comfirmpassword == null) {
            alert("Password must be filled out");
            cfpwd.focus();
            return false;
        }
        if (comfirmpassword !== password) {
            alert("Comfirm password fail!");
            cfpwd.focus();
            return false;
        }
    }
}