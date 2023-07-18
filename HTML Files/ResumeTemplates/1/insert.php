
        <?php
  
        
        $conn = mysqli_connect("localhost", "root", "", "resume");
          
        
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $first_name =  $_REQUEST['nameField'];
        $last_name = $_REQUEST['lnameField'];
        $email = $_REQUEST['emailField'];									
        $address = $_REQUEST['addField'];  
        $linked =  $_REQUEST['ldField'];
        $img = $_REQUEST['imageField'];
        $phone =  $_REQUEST['pnoField'];
        $git = $_REQUEST['gitField'];
        $object = $_REQUEST['objField'];
	    $intern =  $_REQUEST['internField'];
        $project = $_REQUEST['projField'];
        $cert =  $_REQUEST['certiField'];
        $education = $_REQUEST['eduField'];
        $tskil = $_REQUEST['tskillField']; 
        $pskil = $_REQUEST['pskillField']; 
        $extra = $_REQUEST['extracoField']; 
     
        $sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `addr`, `phone`, `link`, `git`, `objective`, `education`, `intern`, `tskils`, `pskils`, `project`, `cert`, `extra`, `img`) 
                VALUES ('$first_name','$last_name','$email','$address','$phone','$linked','$git','$object','$education','$intern','$tskil','$pskil','$project','$cert','$extra','$img')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>
    