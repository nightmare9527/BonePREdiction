<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder3="yolov7-main/datasets/Vert_newCheck/images/try/".$filename;
    $db = mysqli_connect("localhost", "root", "", "patient_data");
    $sql2 = "INSERT INTO temppath VALUES ('', '$filename')";
     mysqli_query($db, $sql2);
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($tempname, $folder3)) {
        //move_uploaded_file($folder3, $folder2);
        #$command = escapeshellcmd('python3 C:\Users\user\visualpy\pytorch.py');
        #$out = exec($command);
        ini_set('set_time_limit', 300);
        //$fileclaername=
        // $clear="yolov7-main/filesave/".$filename;
        // unlink($clear);
        //shell_exec('python C:\Users\kuoho\visualpy\yolov7-main\detect.py --weights D:\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source D:\visualpy\yolov7-main\datasets/Vert_newCheck/images/try');
        // $command = escapeshellcmd('python D:\visualpy\yolov7-main\detect.py --weights D:\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source D:\visualpy\yolov7-main\datasets/Vert_newCheck/images/try');
        // $output = shell_exec($command);
        // $command = escapeshellcmd('python D:\visualpy\temping.py');
        // $output = shell_exec($command);
        $command = escapeshellcmd('python D:\visualpy\yolov7-main\detect.py --weights D:\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source D:\visualpy\yolov7-main\datasets/Vert_newCheck/images/try');
        $output = shell_exec($command);
    } else {
        // Error uploading image
        echo "Error uploading image.";
    }
} 
else {
    echo "No image uploaded.";
}
