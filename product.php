<!DOCTYPE html>
<html>
    <?php 
        $conn=$conn= new mysqli('localhost','root','','test');
    ?>
    <head>
        <title> Main Page</title>
    </head>
    <style>
        .container{
            border :5px outset red;
            background-color: lightblue;
            text-align: center;
            margin-bottom: 30px;
        }
        .ft
        {
            border :5px outset palevioletred;
            background-color: rgb(201, 231, 241);
            text-align: center;
            width: 500px;
            margin:auto ;
        }
    </style>
    <body>
        <div class="container"> 
            <b> <a href="index.html"> Category</a> | <a href="product.html">Product</a></b>
        </div>
        <form action="con_product.php" method="POST">
            <div class="ft">
            <table>
                    <tr> 
                        <label for="product_id"></label>
                        <td> Product ID </td>
                        <td><input type='text' name ="product_id"></td>
                    </tr>

                    <tr> 
                        <label for="product_name"></label>
                        <td> Product Name </td>
                        <td><input type='text'name="product_name"></td>
                    </tr>
                    <tr>
                        <label for="product_price"/>
                        <td> Product price </td>
                        <td><input type="number" name= "product_price"></td>
                    </tr>
                    <tr>
                        <label for="category_name"></label>
                        <td>
                            <label for="category"> Select Category</label>
                        </td>
                        <td>
                            <?php
                                $query=mysqli_query($conn,"select * from category");
                                $rowcount= mysqli_num_rows($query);

                            ?>
                            <select name="category_name" style="width: 170px; overflow: hidden;">
                            <?php
                                for ($i=1; $i<=$rowcount ; $i++) { 
                                    $row=mysqli_fetch_array($query);
                            ?>    
                                <option value="<?php echo $row["category_name"]?>"><?php echo $row["category_name"] ?> </option>

                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
            </table>
            <input type="submit" value="Add">
            <a href="show.php"> <input type="button" name="show" value="show"> 
            </div>
        </form>
    </body>
</html>