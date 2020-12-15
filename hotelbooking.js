var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlide");
          var dots = document.getElementsByClassName("demo");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}

          //none tất cả các ảnh
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }

          //đổi tên tất cả những ảnh ở line thành null
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          //cho cái ảnh dó hiển thị
          slides[slideIndex-1].style.display = "block";

          //cho ảnh đang block có classname từ null sang active
          dots[slideIndex-1].className += " active";
          
        }