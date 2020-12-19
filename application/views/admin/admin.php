<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đây là trang quản trị</title>
    <link rel="stylesheet" href="/styleAdmin.css" />
    <script>
        window.onload = function (e) {
            document.getElementById("features").addEventListener('click', function () {
                var subFeatures= document.getElementsByClassName("subFeatures")[0];
                var iconFirst=document.getElementById("iconFirst");
                if(subFeatures.classList.contains("active")){
                    subFeatures.classList.remove("active");
                    iconFirst.classList.remove("rotate");
                }else{
                    subFeatures.classList.add("active");
                    iconFirst.classList.add("rotate");
                }
            });
            document.getElementById("services").addEventListener('click', function () {
                var subService=document.getElementsByClassName("subService")[0];
                var iconSecond=document.getElementById("iconSecond");
                if(subService.classList.contains("active")){
                    subService.classList.remove("active");
                    iconSecond.classList.remove("rotate");
                }else{
                    subService.classList.add("active");
                    iconSecond.classList.add("rotate");
                }
            });
            document.getElementById("btnMenu").addEventListener('click', function () {
                var btnMenu=document.getElementById("btnMenu");
                var menu=document.getElementsByClassName("menu")[0];
                var content=document.getElementsByClassName("content")[0];
                if(btnMenu.classList.contains("click")){
                    btnMenu.classList.remove("click");
                    menu.classList.remove("show");
                    content.classList.remove("show");

                }else{
                    btnMenu.classList.add("click");
                    menu.classList.add("show");
                    content.classList.add("show");
                }
            });

            if (window.matchMedia('screen and (max-width: 768px)').matches) {
                
            }
            
        }
    </script>
</head>

<body>
    <div class="header">
    </div>
    <div id="btnMenu" class="click">
        <span>&#9776;</span>
    </div>
    <div class="menu show">
        <div class="logo">IVIVU</div>
        <ul>
            <li><a href="#">Dashboard </a></li>
            <li>
                <a href="#" id="features">Features <span id="iconFirst">&#10148;</span></a>
                <ul class="subFeatures">
                    <li><a href="#">Pages 1</a></li>
                    <li><a href="#">Pages 2</a></li>
                </ul>
            </li>
            <li>
                <a href="#" id="services">Services <span id="iconSecond">&#10148;</span></a>
                <ul class="subService">
                    <li><a href="#">Service 1</a></li>
                    <li><a href="#">Service 2</a></li>
                </ul>
            </li>
            <li><a href="#">Overview</a></li>
            <li><a href="#">Chart</a></li>

        </ul>

    </div>
    <div class="content show">
        <div class="container">
            <h1>Dashboard</h1>
           
        </div>

        <div class="footer">
            <span>Copyright © Your Website 2020</span>
        </div>
    </div>
</body>

</html>