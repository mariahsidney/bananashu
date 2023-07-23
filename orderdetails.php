<?php 
    include "connection.php";

    $sql = "SELECT
            orderform.orderno,
            orderform.cust_name,
            orderform.home_add,
            orderform.email_add,
            orderform.mobile_no,
            orderform.chosen_drink,
            orderform.flavor,
            orderform.toppings,
            orderform.size,
            orderform.add_orders,
            orderform.pay_mode,
            orderform.procure_mode,
            SUM(addorderlist.aoprice + chosensize.price + toppingslist.tprice) AS total_price
        FROM
            orderform
        JOIN
            addorderlist ON orderform.add_orders = addorderlist.add_orders
        JOIN
            chosensize ON orderform.size = chosensize.size
        JOIN
            toppingslist ON orderform.toppings = toppingslist.toppings
        GROUP BY
            orderform.orderno
        ORDER BY
            orderform.orderno DESC LIMIT 1";

$result = $conn->query($sql);

echo "<div class='table'>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Customer Name     : " . $row["cust_name"] . "<br>";
        echo "Home Address      : " . $row["home_add"] . "<br>";
        echo "Email Address     : " . $row["email_add"] . "<br>";
        echo "Mobile Number     : " . $row["mobile_no"] . "<br>";
        echo "Chosen Drink      : " . $row["chosen_drink"] . "<br>";
        echo "Flavor            : " . $row["flavor"] . "<br>";
        echo "Toppings          : " . $row["toppings"] . "<br>";
        echo "Drink Size        : " . $row["size"] . "<br>";
        echo "Additional Orders : " . $row["add_orders"] . "<br>";
        echo "Mode of Payment   : " . $row["pay_mode"] . "<br>";
        echo "Mode of Procurement: " . $row["procure_mode"] . "<br>";
        echo "Subtotal: " . $row["total_price"] . "<br><br>";
        
        $total_price = $row["total_price"];
        $orderno = $row["orderno"];
        $updateSql = "UPDATE orderform SET total_price = $total_price WHERE orderno = $orderno";
    
        if ($conn->query($updateSql) !== TRUE) {
            echo "Error updating subtotal for order ID $orderno: " . $conn->error;
        }
    }
} else {
    echo "No records found.";
}
echo "</div>";
?>

<html lang="en">`
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Shu Milktea Website</title>
    
    <!-- Link to CSS -->
    <link rel="stylesheet" href="proj.css">
    
    <!-- Box Icons -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style>

    .order{
        margin: 0;
        position: absolute;
        top:85%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    
    .deets{
        position: absolute;
        left: 646px;
        right: 163px;
        top: 169px;
        bottom: 74.41%;
        text-align: center;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 5px;
        display: flex;
    }
    .table{
        position: absolute;
        left: 549px;
        right: 163px;
        top: 214px;
        bottom: 74.41%;
        text-align: justify;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 25px;
        line-height: 1;
        display: flex;
        flex-wrap: wrap;
        align-content: flex-start;
        justify-content: flex-start;
        align-items: baseline;
        flex-direction: row
    }
</style>
<body>
    
<!-- Navbar -->
    <header>
        <a href="#" class="logo"><img src="img/logoo.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="proj.php">HOME</a></li>
            <li><a href="proj.php">SHOP</a></li>
            <li><a href="proj.php">DELIVERY</a></li>
            <li><a href="proj.php">APP</a></li>
            <li><a href="proj.php">ABOUT</a></li>
            <li><a href="proj.php">CONTACT</a></li>
        </ul>
    </header>

    <div class = "deets">ORDER DETAILS</div>
  
    

    <div class="order">
        <a href="landingpage.php" class="btn">CONFIRM ORDER</a>
    </div>

</body>
</html>