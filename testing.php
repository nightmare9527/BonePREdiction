<?php
    $command = escapeshellcmd('python D:\visualpy\yolov7-main\detect.py --weights D:\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source D:\visualpy\yolov7-main\datasets/Vert_newCheck/images/try');
    $output = shell_exec($command);
    echo $output;
?>