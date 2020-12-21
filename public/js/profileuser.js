
            function readURL(input) {


                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function changePass() {
                var checkbox = document.getElementById("changePass");
                var formPass = document.getElementsByClassName("changepassword");
                if(checkbox.checked == true) {
                    formPass.style.display = "block";
                }
                else  {
                    formPass.style.display = "none";
                }
            }