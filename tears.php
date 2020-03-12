<?php
include 'mainPage.php';  
?>

<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
    //jquery to go here 
</script>
</head>

<body>

<div id="comments">
<?php
        $sql = "SELECT pplCount FROM countppl WHERE sensor_id = 'sensor1'";
        $result = mysqli_query($conn, $sql) or die("Error");
        if (mysqli_num_rows($result)>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row[1];
          }

        }else{
          echo "No data";
        }

      ?>
</div>

</body>
</html>