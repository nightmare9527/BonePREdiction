<?php
session_start();
if($_SESSION['eamil']==0){
    header("Location:LoginCH.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Page</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="homeCH.php">首頁</a></li>
            <li><a href="aboutCH.php">關於我們</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li><a href="index.php">登入</a>
                <ul class="dropdown">
                    <li><a href="index2.php">創建帳號</a></li>
                    <li><a href="index.php">登入</a></li>
                </ul>
            </li>
            <li><a href="#">語言</a>
                <ul class="dropdown">
                    <li><a href="userin.php">English</a></li>
                    <li><a href="#">繁體中文</a></li>
                </ul>
            </li>
            <li><a href="logoutCH.php">登出</a></li>
            </ul>
        </nav>
    </header>
    </body>
    <form action="result2.php" method="post" enctype="multipart/form-data" id ="myForm">
        <div class="container">
            <h2>Welcome</h2>
            <input type="file" id="imageInput" name="image" accept=".jpg, .jpeg, .png">
            <input type="text" name="patient_no" placeholder="patiant number">
            <script>
            // Get reference to the image input element
            var imageInput = document.getElementById("imageInput");
            // var uploadedImage = document.getElementById("uploadedImage");

            // Add change event listener to the image input
            imageInput.addEventListener("change", function() {
                // Perform an action when an image is selected
                // For example, you can read the selected image file and display it
                // var selectedImage = imageInput.files[0];
                // if (selectedImage) {
                //     // Example: Display the selected image
                //     // var reader = new FileReader();
                //     // reader.onload = function(event) {
                //     //     uploadedImage.src = event.target.result;
                //     // };
                //     // reader.readAsDataURL(selectedImage);
                    // var phpadd= <?//php echo add(1,2);?> //call the php add function
                //     document.write(phpadd);
                //     // Or you can perform other actions like uploading the image to a server
                //     // uploadImage(selectedImage);
                // }
                var formData = new FormData();
                var imageFile = document.getElementById('imageInput').files[0];
                formData.append('image', imageFile);

                var xhr = new XMLHttpRequest();
                //var phpadd=100;
                //document.write(phpadd);
                xhr.open('POST', 'upload_image.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log('Image uploaded successfully.');
                    } 
                    else {
                        console.error('Error uploading image.');
                    }
                };
            xhr.send(formData);
            });
            </script>
            <input type="text" name="patient_name" placeholder="patient name">
            <input type="date" name="date" placeholder="birth date">
            <label class="text">MALE
            <input type="checkbox" id="male" name="sex" value="MALE">
            <span class="checkmark"></span>
            </label>
            <label class="text">FEMALE
            <input type="checkbox" id="female" name="sex" value="FEMALE">
            <span class="checkmark"></span>
            </label>
            <!--<input class="radioinput" type="radio" id="male" name="sex" value="MALE">
            <label class="ridiolabel" for="male">MALE</label>
            <input class="radioinput" type="radio" id="female" name="sex" value="FEMALE">
            <label class="ridiolabel" for="female">FEMALE</label>-->
            <div class="btn-group">
            <button class="button" type="submit" name="upload" >UPLOAD</button>
            <button class="button" type="submit" name="search">SEARCH</button>
            <button class="button" type="submit" name="update">UPDATE</button>
            <button class="button" type="submit" name="delete">DELETE</button>
            
            </div>
        </div>
    </form>
    <script>
            // Function to clear input fields
            function clearFields() {
            if (window.location.search.indexOf('submitted=true') > -1) {
                    // Clear form inputs
                    document.getElementById('myForm').reset();
                }
            }
            // Call the clearFields function when the form is submitted
            //document.getElementById("myForm").addEventListener("submit", clearFields);
            clearFields();
    </script>
</html>