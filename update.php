<?php 
$con = mysqli_connect('localhost','root','','facebook');
   	    $id = $_POST['id'];
   	    //get current like values
        $select_query = "SELECT * FROM post WHERE id = '$id'";
        $fire = mysqli_query($con,$select_query);
        while($row = mysqli_fetch_assoc($fire)){
        $like = $row['like'];
        }
        //increament by 1
        $like = $like+ 1;
        echo $like;

        $update_query = "UPDATE `post` SET `like`= $like WHERE `id` = $id";


	 if(mysqli_query($con,$update_query)){
		 echo "updated!!";
	 }else{
		 die(mysqli_error($con));
		 echo "failed to updated";
	 }
?>