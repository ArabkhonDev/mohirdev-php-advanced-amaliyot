<?php 
include("../layouts/header.php");
require("../dbconnect.php"); 


if(isset($_POST['add_cat_btn'])){
    $title = $_POST['category_title'];
    $sql = "INSERT INTO category(title) values(:title)";
    $state = $conn->prepare($sql);
    $state->bindValue(":title", $title);
    $state->execute();

    header("Location: /pages/category.php"); exit;
}

?>
<div class="container mt-2">
<div class="d-flex justify-content-center  ">

    <form action="#" method="POST" class="w-50 border rounded-2 p-4 center">
        <h3>Kategoriya qo'shish</h3>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category_title" class="form-control" id="category" aria-describedby="Category">
            <div id="Category" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        
        <button type="submit" name="add_cat_btn" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

<?php include("../layouts/footer.php");?>