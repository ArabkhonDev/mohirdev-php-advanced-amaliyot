<?php 
require("../layouts/header.php"); 
require("../db_helper.php");

// if(isset($_GET['page'])){
//     $page = $_GET['page'];
// }else{
//     $page = 1;
// };

// var_dump(getCategoryList());
?>


<div class="container">
    <table class="table table-striped table-dark">
        <a href="../category/add_catagory.php" class="btn btn-primary float-end my-1">Add Category</a>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(getCategoryList() as $category){ ?>
                <tr>
                    <th scope="row"><?= $category['id']?></th>
            <td><?= $category['title']?></td>
            </tr>
        </tbody>
        <?php }; ?>
</table>
</div>

<?php require_once("../layouts/footer.php"); ?>
