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

    <h1 class="trans">Transactions</h1>
    <?php
        $con=mysqli_connect('localhost','root','','sparks_foundation');
        
        if($con === false) {
			die("ERROR: Could not connect. ".mysqli_connect_error());
        }

        $q="select * from transactions";
        $result=mysqli_query($con,$q);
        
        if($result === false) {
			die("ERROR: Could not connect.");
		}
        
        $count=mysqli_num_rows($result);
        
        if($count > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Time</th>";
            echo "<th>SenderId</th>";
            echo "<th>ReceiverId</th>";
            echo "<th>Amount</th>";
            echo "</tr>";
        
            for($i=1;$i<=$count;$i++)
			{
				$row=mysqli_fetch_array($result);
				echo "<tr>";
                    echo "<td>".$row['time']."</td>";
					echo "<td>".$row['senderId']."</td>";
					echo "<td>".$row['receiverId']."</td>";
					echo  "<td>".$row['amount']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			mysqli_free_result($result);
        } 
        
        else {
			echo "Failed";
        }
        
		mysqli_close($con);
    ?>

</body>
</html>