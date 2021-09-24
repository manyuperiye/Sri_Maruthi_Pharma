<?php
include_once 'dbh.php';
?>
<DOCTYPE html>
    <html>
        <head>
            <title></title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM contact_us;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while ($row=mysqli_fetch_assoc($result )){
            echo $row['id']."<br>";
            echo $row['first_name']."<br>";
            echo $row['last_name']."<br>";
            echo $row['email']."<br>";
            echo $row['phone']."<br>";
            echo $row['message']."<br><br>";
        }
    }
    ?>
</body>

</html>
