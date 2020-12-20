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
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }

  //none tất cả các ảnh
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  //đổi tên tất cả những ảnh ở line thành null
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  //cho cái ảnh dó hiển thị
  slides[slideIndex - 1].style.display = "block";

  //cho ảnh đang block có classname từ null sang active
  dots[slideIndex - 1].className += " active";

}




//2. Modal display form combo hotel
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("btnSubmit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}


//input form combo  hotel

function onActionOrderHotel(button) {
  var btn = button;
  var spanNum_room = document.getElementsByClassName("number_room");
  var numroom = Array.from(spanNum_room, el => el.innerText);

  if (btn.id === "sub_room") {
      if (numroom[0] === "0") {
          return
      } else {
          
          spanNum_room[0].innerText = parseInt(numroom[0]) - 1;
      }
  }
  if (btn.id === "add_room") {
      
      spanNum_room[0].innerText = parseInt(numroom[0]) + 1;
  }

  //old
  var btn = button;
  var spanNum_old = document.getElementsByClassName("number_old");
  var numold = Array.from(spanNum_old, el => el.innerText);

  if (btn.id === "sub_old") {
      if (numold[0] === "0") {
          return
      } else {
          
          spanNum_old[0].innerText = parseInt(numold[0]) - 1;
      }
  }
  if (btn.id === "add_old") {
      
      spanNum_old[0].innerText = parseInt(numold[0]) + 1;
  }

  //child
  var btn = button;
  var spanNum_child = document.getElementsByClassName("number_child");
  var numchild = Array.from(spanNum_child, el => el.innerText);

  if (btn.id === "sub_child") {
      if (numchild[0] === "0") {
          return
      } else {
          
          spanNum_child[0].innerText = parseInt(numchild[0]) - 1;
      }
  }
  if (btn.id === "add_child") {
      
      spanNum_child[0].innerText = parseInt(numchild[0]) + 1;
  }
}
