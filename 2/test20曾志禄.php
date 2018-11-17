<?php
   $username = $_POST['username'];
   $password = $_POST['password'];

   $link = mysql_connect('127.0.0.1','root','123456','itcast');//test
   $sql = "select * from test ";
   $result = mysqli_query($link,$sql);
        $data = mysqli_fetch_all($result,1);
      $arr = array(
      "data" => $data
      );
      //php转json
      echo json_encode($arr);
      echo
        }else{
        echo "失败！";

        }

        //关闭数据库
        mysqli_close($link);
?>