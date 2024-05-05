<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<?php
$msg = ""; 
// check if the user has clicked the button "UPLOAD" 
$p_num=$_POST["patient_no"];
if(isset($_POST['upload'])) {
    // if($_FILES["image"]["error"]===4){
    //     die("image does not exist");
    // }
    $birth_date=$_POST["date"];
    $sex=$_POST["sex"];
    $patient_name=$_POST["patient_name"];
    //$filename = $_FILES["image"]["name"];
    $filename2=$p_num.".jpg";
    $filename22=$p_num."(2).jpg";
    //$filesize=$_FILES["image"]["size"];
    //$tempname = $_FILES["image"]["tmp_name"];  

    $db = mysqli_connect("localhost", "root", "", "patient_data");
    $sql10="SELECT path from temppath ORDER BY id DESC LIMIT 1";
            $pathquery=mysqli_query($db, $sql10);
            $pathth=mysqli_fetch_array($pathquery, MYSQLI_NUM);
            //echo "</br>";
            //echo $pathth[0];
            $tt=strval($pathth[0]);//get path

        //$folder = "image/".$filename;
        $folder2="image/".$filename2;
        $folder22="image/".$filename22;
        $folder3="yolov7-main/datasets/Vert_newCheck/images/try/".$tt;

    // connect with the database

    //$db = mysqli_connect("localhost", "root", "", "Image");
    $db2 = mysqli_connect("localhost", "root", "", "patient_data");
    $db3 = mysqli_connect("localhost", "root", "", "patient_data");
    $db4 = mysqli_connect("localhost", "root", "", "patient_data");
    $db5 = mysqli_connect("localhost", "root", "", "patient_data");

        // query to insert the submitted data
        // $img_path=$tempname;
        // $type=pathinfo($img_path, PATHINFO_EXTENSION);
        // $img_data=file_get_contents($img_path);
        // $base64_code = base64_encode($img_data);
        //$base64_str = 'data:image/' . $type . ';base64,' . $base64_code;


        //$sql = "INSERT INTO image VALUES ('', '$filename','$base64_str')";
        $sql2 = "INSERT INTO data VALUES ('', '$sex', '$birth_date', '$patient_name', '$p_num')";
        $sql3 = "INSERT INTO search VALUES ('', '$p_num')";
        $sql4="SELECT no from data";
        // function to execute above query
        $result=mysqli_query($db4, $sql4);
        $total_records=mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
            for($i=0;$i<$total_records;$i++){
                if(isset($row[$i])){
                    if($p_num==$row[$i]){
                        die("patient data has been insert before ");
                    }
                }
             }
        }

        //mysqli_query($db, $sql);
        mysqli_query($db2, $sql2);
        mysqli_query($db3, $sql3);
        // Add the image to the "image" folder"
        //if (move_uploaded_file($tempname, $folder3)) {
            //move_uploaded_file($folder3, $folder2);
            #$command = escapeshellcmd('python3 C:\Users\user\visualpy\pytorch.py');
            #$out = exec($command);
            //ini_set('set_time_limit', 300);
            //$fileclaername=
            // $clear="yolov7-main/filesave/".$filename;
            // unlink($clear);
            //$out=shell_exec('python C:\Users\user\visualpy\yolov7-main\detect.py --weights C:\Users\user\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source C:\Users\user\visualpy\yolov7-main\datasets/Vert_newCheck/images/try');
            //$sql10="SELECT path from path WHERE num=$p_num";
            //$fileclaername=substr($tt, 0, strpos($tt, ".jpg")); 
            //$clear="./yolov7-main/fileSave";            
            //unlink($clear);
            $newtt='./yolov7-main/fileSaveImg/really_regress_'.$tt;
            $newtt2='./yolov7-main/fileSaveImg/really_point_'.$tt;
            //echo($tt);
            //echo "</br>";
            //echo($newtt);
            //echo(gettype($newtt));
            //echo "</br>";
            //echo($out);
            $printpath=realpath($newtt);
            $printpath2=realpath($newtt2);
            rename($printpath,$folder2);
            rename($printpath2,$folder22);
            //echo $printpath;
            print "patient number:".$p_num;
            echo "</br>";
            print "patient name:".$patient_name;
            echo "</br>";
            print "sex:".$sex;
            echo "</br>";
            print "birth date:".$birth_date;
            echo "</br>";
            print"<img src=$folder2 width=\"500px\" height=\"500px\"\/>";
            print"<img src=$folder22 width=\"500px\" height=\"500px\"\/>";
            // $sql5 = "INSERT INTO result VALUES ('', '$p_num', '$out')";
            // mysqli_query($db5, $sql5);
            unlink($folder3);
        }
    //     }else{

    //         die( "Failed to upload image");

    // }


elseif(isset($_POST['search'])){
    $db3 = mysqli_connect("localhost", "root", "", "patient_data");
    $db6 = mysqli_connect("localhost", "root", "", "patient_data");
    $sql3 = "INSERT INTO search VALUES ('', '$p_num')";
    $sql6="SELECT no FROM data";
    $sql7="SELECT id FROM data";
    //$sql8result="SELECT result FROM result WHERE num=$p_num";
    //$queryresult=mysqli_query($db6,$sql8result);
    //$rowresult = mysqli_fetch_array ($queryresult) ;
    mysqli_query($db3, $sql3);
    $result2=mysqli_query($db6, $sql6);
    $result3=mysqli_query($db6, $sql7);
    $sqltemp="SELECT num from search where Id=LAST_INSERT_ID()";
    $out=mysqli_query($db3, $sqltemp);
    $row = mysqli_fetch_array ( $out , MYSQLI_NUM ) ;
    $total_records=mysqli_num_rows($result2);
    $sqltemp2="SELECT name FROM data WHERE no=$p_num";
    $sqltemp3="SELECT sex FROM data WHERE no=$p_num";
    $sqltemp4="SELECT birth_date FROM data WHERE no=$p_num";
    $query=mysqli_query($db6, $sqltemp2);
    $query2=mysqli_query($db6, $sqltemp3);
    $query3=mysqli_query($db6, $sqltemp4);
    $row3 = mysqli_fetch_array ($query) ;
    $row4 = mysqli_fetch_array ($query2) ;
    $row5 = mysqli_fetch_array ($query3) ;
    $imagepath='image/'.$p_num.'.jpg';
    echo $p_num;
    echo "</br>";
    echo $row3[0];
    echo "</br>";
    echo $row4[0];
    echo "</br>";
    echo $row5[0];
    echo "</br>";
    print"<img src=$imagepath width=\"500px\" height=\"500px\"\/>";
    //echo "</br>";
    //echo $rowresult[0];
    //while($row2 = mysqli_fetch_array($result2,MYSQLI_NUM)) {
        //$row3 = mysqli_fetch_array($result3,MYSQLI_NUM);
    //for($i=0;$i<$total_records;$i++){
        //if(isset($row2[$i])&& isset($row3[$i])){
           // if($p_num==$row2[$i]){
                //echo $row3[$i];
                //$store=$row3[$i];
                //echo gettype($store);
            //}
        //}
    //}
    //$sqltemp2="SELECT name FROM data WHERE no=$p_num";
    //$query=mysqli_query($db6, $sqltemp2);
    //$row3 = mysqli_fetch_array ($query) ;
    //echo $row3[0];
    //echo "</br>";

 //}
}
elseif(isset($_POST['update'])){
    echo "OLD DATA";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    $db3 = mysqli_connect("localhost", "root", "", "patient_data");
    $db6 = mysqli_connect("localhost", "root", "", "patient_data");
    $sql3 = "INSERT INTO search VALUES ('', '$p_num')";
    $sql6="SELECT no FROM data";
    $sql7="SELECT id FROM data";
    $sql8result="SELECT result FROM result WHERE num=$p_num";
    $queryresult=mysqli_query($db6,$sql8result);
    $rowresult = mysqli_fetch_array ($queryresult) ;
    mysqli_query($db3, $sql3);
    $result2=mysqli_query($db6, $sql6);
    $result3=mysqli_query($db6, $sql7);
    $sqltemp="SELECT num from search where Id=LAST_INSERT_ID()";
    $out=mysqli_query($db3, $sqltemp);
    $row = mysqli_fetch_array ( $out , MYSQLI_NUM ) ;
    $sqltemp2="SELECT name FROM data WHERE no=$p_num";
    $sqltemp3="SELECT sex FROM data WHERE no=$p_num";
    $sqltemp4="SELECT birth_date FROM data WHERE no=$p_num";
    $query=mysqli_query($db6, $sqltemp2);
    $query2=mysqli_query($db6, $sqltemp3);
    $query3=mysqli_query($db6, $sqltemp4);
    $row3 = mysqli_fetch_array ($query) ;
    $row4 = mysqli_fetch_array ($query2) ;
    $row5 = mysqli_fetch_array ($query3) ;
    $imagepath='./image/'.$p_num.'.jpg';
    $old_name=$row3[0];
    $old_sex=$row4[0];
    $old_bd=$row5[0];
    echo $p_num;
    echo "</br>";
    echo $row3[0];
    echo "</br>";
    echo $row4[0];
    echo "</br>";
    echo $row5[0];
    echo "</br>";
    print"<img src=$imagepath width=\"500px\" height=\"500px\"\/>";
    echo "</br>";
    //echo $rowresult[0];
    $newname=$old_name;
    $newsex=$old_sex;
    $newbd=$old_bd;
    echo "</br>";
    echo $newname;
    //echo gettype($newname);
    echo "</br>";
    echo $newsex;
    //echo gettype($newsex);
    echo "</br>";
    echo $newbd;
    //echo gettype($newbd);
    if(!empty($_POST["patient_name"])){
        $newname=$_POST["patient_name"];
        //echo gettype($newname);
        echo "</br>";
        echo $newname;
    }
    if(!empty($_POST["date"])){
        $newbd=$_POST["date"];
        echo "</br>";
        echo $newbd;
    }
    if(!empty($_POST["sex"])){
        $newsex=$_POST["sex"];
        echo "</br>";
        echo $newsex;
    }
    $sqldel="DELETE FROM data WHERE no=$p_num";
    mysqli_query($db6,$sqldel);
    $sqlnew = "INSERT INTO data VALUES ('', '$newsex', '$newbd', '$newname', '$p_num')";
    mysqli_query($db6,$sqlnew);
    if ($_FILES['image']['error'] == 4 || ($_FILES['image']['size'] == 0 && $_FILES['image']['error'] == 0))
        {
    
    }   
}
elseif(isset($_POST['delete'])){
    $db3 = mysqli_connect("localhost", "root", "", "patient_data");
    $sql3 = "INSERT INTO search VALUES ('', '$p_num')";
    // $sql6="SELECT no FROM data";
    // $sql7="SELECT id FROM data";
    mysqli_query($db3, $sql3);
    // $result2=mysqli_query($db6, $sql6);
    // $result3=mysqli_query($db6, $sql7);
    $sqltemp="SELECT num from search where Id=LAST_INSERT_ID()";
    $out=mysqli_query($db3, $sqltemp);
    // $row = mysqli_fetch_array ( $out , MYSQLI_NUM ) ;
    // $sqltemp2="SELECT name FROM data WHERE no=$p_num";
    // $sqltemp3="SELECT sex FROM data WHERE no=$p_num";
    // $sqltemp4="SELECT birth_date FROM data WHERE no=$p_num";
    // $query=mysqli_query($db6, $sqltemp2);
    // $query2=mysqli_query($db6, $sqltemp3);
    // $query3=mysqli_query($db6, $sqltemp4);
    // $row3 = mysqli_fetch_array ($query) ;
    // $row4 = mysqli_fetch_array ($query2) ;
    // $row5 = mysqli_fetch_array ($query3) ;
    // $imagepath='./image/'.$p_num.'.jpg';
    // $old_name=$row3[0];
    // $old_sex=$row4[0];
    // $old_bd=$row5[0];
    // echo $p_num;
    // echo "</br>";
    // echo $row3[0];
    // echo "</br>";
    // echo $row4[0];
    // echo "</br>";
    // echo $row5[0];
    // echo "</br>";
    // print"<img src=$imagepath width=\"500px\" height=\"500px\"\/>";
    // echo "</br>";
    //echo $rowresult[0];
    // $newname=$old_name;
    // $newsex=$old_sex;
    // $newbd=$old_bd;
    // echo "</br>";
    // echo $newname;
    // //echo gettype($newname);
    // echo "</br>";
    // echo $newsex;
    // //echo gettype($newsex);
    // echo "</br>";
    // echo $newbd;
    //echo gettype($newbd);
    // if(!empty($_POST["patient_name"])){
    //     $newname=$_POST["patient_name"];
    //     //echo gettype($newname);
    //     echo "</br>";
    //     echo $newname;
    // }
    // if(!empty($_POST["date"])){
    //     $newbd=$_POST["date"];
    //     echo "</br>";
    //     echo $newbd;
    // }
    // if(!empty($_POST["sex"])){
    //     $newsex=$_POST["sex"];
    //     echo "</br>";
    //     echo $newsex;
    // }
    $sqldel="DELETE FROM data WHERE no=$p_num";
    mysqli_query($db3,$sqldel);
    $show=$p_num." has been deleted";
    echo $show;

    // if ($_FILES['image']['error'] == 4 || ($_FILES['image']['size'] == 0 && $_FILES['image']['error'] == 0))
    //     {
    
    // }   
}
?>
</body>
</html>
