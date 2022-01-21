<?php
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    
    $category_name = $_POST['category_name'];
    
    //conn data

    $conn= new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die("Error record!!".$conn->connect_error);
    }else{

        $stmt= $conn->prepare("insert into product(category_name, product_id, product_name, product_price) values(?,?,?,?)");
        $stmt->bind_param("sisd",$category_name,$product_id,$product_name,$product_price);
        $stmt->execute();
        echo "Added one parameter succesfully";
        $stmt->close();
        $conn->close();
    }
?>