<?php
    function check_if_added_to_cart($product_id){
       
        require './includes/common.php';
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users_products WHERE product_id = '$product_id' AND user_id = '$user_id' ";
        
        $query_result = mysqli_query($con, $query);
        if(mysqli_num_rows($query_result) >= 1){
            return 1;
        }else{
            return 0;
        }
    }
?>