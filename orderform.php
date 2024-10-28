<?php 

include "connection.php";

if (isset($_POST['submit'])) {
    
    $cust_name = $_POST['cust_name'];
    $home_add = $_POST['home_add'];
    $email_add = $_POST['email_add'];
    $mobile_no = $_POST['mobile_no'];
    $chosen_drink = $_POST['chosen_drink'];
    $flavor = $_POST['flavor'];
    $toppings = $_POST['toppings'];
    $size= $_POST['size'];
    $add_orders= $_POST['add_orders'];
    $pay_mode= $_POST['pay_mode'];
    $procure_mode= $_POST['procure_mode'];

    $sql = "INSERT INTO `orderform`(`cust_name`, `home_add`, `email_add`, `mobile_no`, `chosen_drink`, `flavor`, `toppings`, `size`, `add_orders`, `pay_mode`, `procure_mode`) VALUES ('$cust_name','$home_add','$email_add','$mobile_no','$chosen_drink','$flavor','$toppings','$size','$add_orders','$pay_mode','$procure_mode');";
   
    if ($result = $conn->query($sql) === TRUE)
    {
        header("Location: orderdetails.php");
        exit(); 
    } else {
        echo "Error inserting data: " . $conn->error;
    }

} 

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
    <style>
    * {
        box-sizing: border-box;
        }

        body {

            font-family: 'Poppins', sans-serif;
        }

        input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-family: 'Poppins';
        font-style: normal;
        }

        label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        }

        input[type=submit] {
            padding: 7px 16px;
            border: 2px solid var(--second-color);
            border-radius: 40px;
            color: var(--second-color);
            font-weight: 500;
        }

        input[type=submit]:hover {
        color: #fff;
        background-color: #FF6666
        }

        .row1{
            position: absolute;
            width: 965px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            
        }
        .container1 {
            position: absolute;
            
            width: 995px;
            height: 699px;
            left: 273px;
            top: 208px;
            border-radius: 5px;
            padding: 20px;
        }

        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }

        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
        .add{
            position: absolute;
            left: 668px;
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
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo"><img src="img/logoo.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">SHOP</a></li>
            <li><a href="index.php">DELIVERY</a></li>
            <li><a href="index.php">APP</a></li>
            <li><a href="index.php">ABOUT</a></li>
            <li><a href="index.php">CONTACT</a></li>
        </ul>
</header>

<div class = "add">ORDER FORM</div>
    <div class="container1">
        <fieldset>
        <form action="" method="POST">
            <div class="row">
            <div class="col-25">
                <br><label for="cust_name">CUSTOMER NAME</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="cust_name" name="cust_name" placeholder="Your Name.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="home_add">HOME ADDRESS</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="home_add" name="home_add" placeholder="Your Home Address.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="email_add">EMAIL ADDRESS</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="email_add" name="email_add" placeholder="Your Email Address.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="mobile_no">MOBILE NUMBER</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="mobile_no" name="mobile_no" placeholder="Your Mobile Number.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="chosen_drink">CHOSEN DRINK</label><br>
            </div>
            <div class="col-75">
                <br><select id="chosen_drink" name="chosen_drink">
                    <option value="">Select an option</option>
                    <option value="Milktea">Milk Tea</option>
                    <option value="Coffee">Coffee</option>
                    <option value="Frappe">Frappe</option>
                </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <br><label for="flavor">FLAVOR</label><br>
            </div>
            <div class="col-75">
                <br><select id="flavor" name="flavor">
                    <option value="">For Milk Tea Option</option>
                    <option value="Okinawa">Okinawa</option>
                    <option value="Wintermelon">Wintermelon</option>
                    <option value="Cheesecake">Cheesecake</option>
                    <option value="Matcha">Matcha</option>
                    <option value="Salted Caramel">Salted Caramel</option>
                    <option value="">For Coffee Option</option>
                    <option value="Caramel Macchiato">Caramel Macchiato</option>
                    <option value="Iced Latte">Iced Latte</option>
                    <option value="Coffee Jelly">Coffee Jelly</option>
                    <option value="Black Coffee">Black Coffee</option>
                    <option value="Iced Mocha">Iced Mocha</option>
                    <option value="">For Frappe Option</option>
                    <option value="Java Chip">Java Chip</option>
                    <option value="Milo Dinosaur">Milo Dinosaur</option>
                    <option value="Cookies n Cream">Cookies n Cream</option>
                    <option value="Choco Fudge">Choco Fudge</option>
                    <option value="Dark Mocha">Dark Mocha</option>
                </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <br><label for="toppings">TOPPINGS</label><br>
            </div>
            <div class="col-75">
                <br><select id="toppings" name="toppings">
                        <option value="">Select an option</option>
                        <option value="Nata De Coco">Nata de Coco</option>
                        <option value="Tapioca Pearl">Tapioca Pearl</option>
                        <option value="Grass Jelly">Grass Jelly</option>
                        <option value="No Toppings">No Toppings</option>
                </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for ="size">DRINK SIZE</label><br>
            </div>
            <div class="col-75">
                <br><select id="size" name="size">
                    <option value="">Select an option</option>
                        <option value="Large">Large</option>
                        <option value="Medium">Medium</option>
                        <option value="Small">Small</option>
                    </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for ="add_orders">ADDITIONAL ORDERS</label><br>
            </div>
            <div class="col-75">
                <br><select id="add_orders" name="add_orders">
                    <option value="">Select an option</option>
                        <option value="Macaroons">Macaroons</option>
                        <option value="Ham and Cheese Croissant">Ham & Cheese Croissant</option>
                        <option value="Honey Glazed Donut">Honey Glazed Donut</option>
                        <option value="No Add. Orders">No Additional Orders</option>
                    </select></br>
            </div>
            </div>

            <div class="row">
            <div class="col-25">
                <br><label for ="pay_mode">MODE OF PAYMENT</label><br>
            </div>
            <div class="col-75">
                <br><select id="pay_mode" name="pay_mode">
                    <option value="">Select an option</option>
                        <option value="Credit or Debit Card">Credit or Debit Card</option>
                        <option value="On the Counter (Cash)">On the Counter (Cash) - for Pick-Up Orders ONLY</option>
                        <option value="E-Wallet Service">E-Wallet Service (i.e. GCash, Maya, Paypal)</option>
                    </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for ="procure_mode">MODE OF PROCUREMENT</label><br>
            </div>
            <div class="col-75">
                <br><select id="procure_mode" name="procure_mode">
                    <option value="">Select an option</option>
                        <option value="Pick-up">Pick-Up</option>
                        <option value="Delivery">Delivery</option>
                    </select></br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><br>
            </div>
            <div class="row1">
                <INPUT type="submit" value="PLACE ORDER" name="submit" id= "submit" > 
            </div>
        </form>
        </fieldset>
</div>                  
        <script src="main.js"></script>
</body>
</html>
