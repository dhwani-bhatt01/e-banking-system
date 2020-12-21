<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="main.css">
</head>
<body>

    <header>
        <ul class="nav-links">
          <li><a href="index.html">HOME</a></li>
          <li><a href="user.php">USERS</a></li>
          <li><a href="transferMoney.html">TRANSFER MONEY</a></li>
          <li><a href="transactionHistory.php">TRANSACTION HISTORY</a></li>
        </ul>
    </header>

    <?php
    $senderId = $_POST['senderId'];
    $receiverId = $_POST['receiverId'];
    $amount = $_POST['amount'];
    
    $con = mysqli_connect('localhost','root','','sparks_foundation');

    $q1 = "UPDATE customer SET cust_bankBal = cust_bankBal - $amount WHERE cust_id = $senderId";
    $ck = mysqli_query($con, $q1);
    
    $q2 = "UPDATE customer SET cust_bankBal = cust_bankBal + $amount WHERE cust_id = $receiverId";
    $ck = mysqli_query($con, $q2);

    $q3 = "INSERT INTO transactions(senderId, receiverId, amount) VALUES('$senderId','$receiverId','$amount')";
    $ck = mysqli_query($con, $q3);

    if($ck)
        echo "<h1>Transaction successful</h1>";
    else
        echo "<h1>Transaction failed</h1>";

    mysqli_close($con);   
    ?>
</body>
</html>