<?php
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    //conn data
    

    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die("Error record!!".$conn->connect_error);
    }else{

        $stmt= $conn->prepare("insert into category(category_id,category_name) values(?,?)");
        $stmt->bind_param("is",$category_id, $category_name);
        $stmt->execute();
        echo "Added one parameter succesfully";
        $stmt->close();
        $conn->close();
    }
?>