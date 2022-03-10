<?php

require "connection.php";

function addCategory(){
    $conn = dbConnect();
    $category_name = $_POST['category_name'];
    $sql ="INSERT INTO categories (category_name) VALUE ('$category_name')";

    if($conn->query($sql)){
        echo '<div class="alert alert-success">Category successfully added.</div>'; 
    }else{
        die("Error: " . $conn->error);
    }
}



function displayCategories(){
    $conn = dbConnect();
    $sql = "SELECT * FROM categories ORDER BY category_id DESC";

    if($result = $conn->query($sql)){
        if($result->num_rows >0 ){
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <td>".$row['category_id']."</td>
                    <td>".$row['category_name']."</td>
                    <td><a href='update-category.php?cat_id=".$row['category_id']."' class='btn btn-sm btn-warning text-white'>Update</a></td>
                    <td><a href='delete-category.php?cat_id=".$row['category_id']."' class='btn btn-sm btn-danger text-white'>Delete</a></td>
                </tr>";
            }
        }else{
            echo "<tr>
            <td colspan='4' class='text-center'>No records found.</td>
            <tr>";
        }
    }
}


function updateCategory($category_id){
    $conn = dbConnect();
    $category_name = $_POST['category_name'];
    $sql ="UPDATE categories SET category_name = '$category_name' WHERE `category_id` = $category_id";
    
    if($conn->query($sql)){
        echo '<div class="alert alert-success">Category successfully updated.</div>'; 
    }else{
        die("Error: " . $conn->error);
    }
}


function getCategory($cat_id){
    $conn = dbConnect();
    $sql = "SELECT * FROM categories WHERE category_id = $cat_id";

    if($result = $conn->query($sql)){
        return $result->fetch_assoc();
    }else{
        die("Error. " . $conn->error);
    }
}

function deleteCategory($cat_id){
    $conn = dbConnect();
    $sql = "DELETE FROM categories WHERE category_id = $cat_id";

    if($conn->query($sql)){
        header("location: categories.php");
        exit;
    }else{
        die("Error: " . $conn->error);
    }
}



?>