<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Upload Action</title>
<style>
    /* Optional: Styles for better presentation */
    #uploadedImage {
        max-width: 100%;
        height: auto;
    }
</style>
</head>
<body>

<!-- Image input -->
<input type="file" id="imageInput" accept="image/*">

<!-- <Display the uploaded image
<img id="uploadedImage" src="#" alt="Uploaded Image"> -->
<script>
    
   //Get reference to the image input element
    var imageInput = document.getElementById("imageInput");
    var uploadedImage = document.getElementById("uploadedImage");

    // Add change event listener to the image input
    imageInput.addEventListener("change", function() {
        // Perform an action when an image is selected
        // For example, you can read the selected image file and display it
        var selectedImage = imageInput.files[0];
        if (selectedImage) {
            // Example: Display the selected image
            // var reader = new FileReader();
            // reader.onload = function(event) {
            //     uploadedImage.src = event.target.result;
            // };
            // reader.readAsDataURL(selectedImage);
            document.write(5 + 6);
            
            // Or you can perform other actions like uploading the image to a server
            // uploadImage(selectedImage);
        }
    });
</script>

</body>
</html>