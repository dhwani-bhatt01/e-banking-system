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

    <h1 class="customerInfo">Customer Info</h1>
    <?php
        $con=mysqli_connect('localhost','root','','sparks_foundation');
        
        if($con === false) {
			die("ERROR: Could not connect. ".mysqli_connect_error());
        }

        $q="select * from customer";
        $result=mysqli_query($con,$q);
        
        if($result === false) {
			die("ERROR: Could not connect.");
		}
        
        $count=mysqli_num_rows($result);
        
        if($count > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th class='tbId'>Id</th>";
            echo "<th class='tbName'>Name</th>";
            echo "<th class='tbAge'>Age</th>";
            echo "<th>Email</th>";
            echo "<th class='tbMobile'>Mobile</th>";
            echo "<th>Balance</th>";
            echo "<th class='tbCity'>City</th>";
            echo "</tr>";
        
            for($i=1;$i<=$count;$i++)
			{
				$row=mysqli_fetch_array($result);
				echo "<tr>";
					echo "<td>".$row['Cust_id']."</td>";
					echo "<td>".$row['Cust_name']."</td>";
					echo "<td>".$row['Cust_age']."</td>";
                    echo "<td>".$row['Cust_email']."</td>";
                    echo "<td>".$row['Cust_mobile']."</td>";
                    echo "<td>$".$row['Cust_bankBal'].".00</td>";
                    echo "<td>".$row['Cust_city']."</td>";
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