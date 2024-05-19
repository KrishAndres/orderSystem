<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <style>
        body{
            text-align: center;
            
        }
        ul{
            list-style-type: none;
            font-size: 35px;

        }
    </style>
</head>
<body>
<h1>Welcome to K-Cottage!<br/> Here are the prices:</h1>
    <ul>
        <li>Chicken Nuggets - ₱99</li>
        <li>Spaghetti - ₱79</li>
        <li>French Fries - ₱49</li>
    </ul>
    <form action="summary.php" method="post">
        <label for="food">Choose your order:</label>
        <select name="food" id="food">
            <option value="Chicken Nuggets">Chicken Nuggets</option>
            <option value="Spaghetti">Spaghetti</option>
            <option value="French Fries">French Fries</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1"><br><br>
        <label for="cash">Cash payment:</label>
        <input type="number" name="cash" id="cash" min="0"><br><br>
        <input type="submit" value="Place Order">
        <a href="logout.php">Logout</a>
    </form>

</body>
</html>
