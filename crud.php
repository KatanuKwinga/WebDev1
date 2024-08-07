
<?php
// connection.php content
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "littlebakery";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle Create operation
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Hash the password before storing it
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert new user into the database
    $sql = "INSERT INTO customers (Name, Email, Password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Read operation - fetch all users
$sql = "SELECT id, name, email FROM customers";
$result = $conn->query($sql);

// Handle Update operation
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if password is provided and hash it
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Update user information with new password
        $sql = "UPDATE customers SET name='$name', email='$email', password='$hashedPassword' WHERE id=$id";
    } else {
        // Update user information without changing the password
        $sql = "UPDATE customers SET name='$name', email='$email' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle Delete operation
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Delete user from the database
    $sql = "DELETE FROM customers WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        $message = "Record deleted successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!--Beginning of html code for the page-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title>MyWebsite</title>
       <!-- custom css file link -->
        <link rel="stylesheet" href="css/crud.css">
        <link rel = "icon" type = "image/x-icon" href = "images/Logo.png">
        <!--Link to the page for icons used in the code-->
        <script src="https://kit.fontawesome.com/061a76efba.js"crossorigin="anonymous"></script>
    </head>
 </html>
<body>
    <!--Start of navbar code-->
<header class="header">
            <!--Code for bakery logo and name in the navbar-->
            <i class="fa-solid fa-cake-candles fa-3x" style="color: #d3ad7f;"></i>
            <h1 class="name" style="color: #fff;text-align: left;">THE<span> LITTLE</span> BAKERY</h1>
            <nav class="navbar">
                <!--Code for the different links to other pages in the navbar-->
                <a href="index.php">Home</a>
                <a href="About.php">About</a>
                <a href="Menu.php">Menu</a>
                <a href="Reviews.php">Reviews</a>
                <a href="contact.php">Contact</a>
                <a href = "crud.php">Admin</a>
                <div class="dropdown-container">
                    <!--Dropdown menu from the link 'More For You'-->
                    <a href="#" class="dropdown-toggle">More</a>
                    <ul class="dropdown">
                        <!--Icons and links to the different pages in the dropdown menu-->
                        <li><i class="fa-solid fa-right-to-bracket fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="login.php">Log In</a></li>
                        <li><i class="fa-solid fa-user fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="signup.php">Sign Up</a></li>
                        <li><i class="fa-solid fa-right-from-bracket fa-2x" style="color: #fff; margin-left: 7px;"></i><a href="#">Log Out</a></li>
                    </ul>
                </div>
            </nav>
        </header>
<section class = "crud" id = "crud">
<h1 class="title">CREATE, <span>READ, </span> UPDATE &<span> DELETE</h1> <!--Title-->  
<div class="container">
    <?php if (isset($message)): ?>
        <!-- Display any messages (like success or error messages) -->
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <h2>Create New Customer</h2>
    <!-- Form for creating a new customer-->
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="text" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="create" value="Create">
    </form><br>
    
    <h2>List of customers</h2>
    <!-- Table displaying the list of customers -->
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">0 results</td>
            </tr>
        <?php endif; ?>
    </table>

    <h2>Update Customers</h2>
    <!-- Form for updating an existing customers -->
    <form method="post" action="">
        id: <input type="number" name="id" required><br>
        Name: <input type="text" name="name" required><br>
        Email: <input type="text" name="email" required><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="update" value="Update">
    </form><br>

    <h2>Delete A Customer</h2>
    <!-- Form for deleting a user -->
    <form method="post" action="">
        id: <input type="number" name="id" required><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</div>
</section>
</body>
</html>
