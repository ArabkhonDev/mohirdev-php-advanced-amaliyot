<?php
// bu category uchun funtionlar start
function getCategoryList(){
    include"./dbconnect.php";
    echo "<pre>";
    // $limit = 5;
    // $page = 1;
    // $offset = ($page -1) * $limit;
     $state = $conn->prepare("SELECT * FROM category");
    //  $state = $conn->prepare("SELECT * FROM category LIMIT :offset, :limit");
    //  $state->bindValue(":limit", $limit, PDO::PARAM_INT);
     $state->execute();
     $result = $state->fetchAll(PDO::FETCH_ASSOC);
     return $result;
 }


// bu category uchun funtionlar end

// bu post uchun funtionlar start

function getPostList(){
    include("./dbconnect.php");
    $state = $conn->prepare("SELECT * FROM posts");
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// bu post uchun funtionlar end

// bu tag uchun funtionlar start

function getTagList(){
    include("./dbconnect.php");
    $state = $conn->prepare("SELECT * FROM tags");
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// bu tag uchun funtionlar end

// bu user uchun funtionlar start

function getUserList(){
    include("./dbconnect.php");
    $state = $conn->prepare("SELECT * FROM users");
    $state->execute();
    $result = $state->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// bu user uchun funtionlar end
