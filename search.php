<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artists";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display all records from the artists table
function displayAllRecords()
{
    global $conn;
    $sql = "SELECT * FROM artists";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Nationality</th><th>Birth Year</th><th>Art</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["birthyear"] . "</td><td>" . $row["art"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
}


// Search functionality
if (isset($_POST['search'])) {
    $searchColumn = $_POST['search_column'];
    $searchValue = $_POST['search_value'];

    // Prepare the search column to be used in the query
    $validColumns = array('name', 'nationality', 'birthyear', 'art');
    $searchColumn = in_array($searchColumn, $validColumns) ? $searchColumn : 'name';

    $sql = "SELECT * FROM artists WHERE $searchColumn LIKE '%$searchValue%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Nationality</th><th>Birth Year</th><th>Art</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["birthyear"] . "</td><td>" . $row["art"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No matching records found.";
    }
}
// Insert functionality
if (isset($_POST['insert'])) {
    $insertName = $_POST['insert_name'];
    $insertNationality = $_POST['insert_nationality'];
    $insertBirthYear = $_POST['insert_birthyear'];
    $insertArt = $_POST['insert_art'];

    $sql = "INSERT INTO artists (name, nationality, birthyear, art) VALUES ('$insertName', '$insertNationality', '$insertBirthYear', '$insertArt')";

    if ($conn->query($sql) === true) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Delete functionality
if (isset($_POST['delete'])) {
    $deleteName = $_POST['delete_name'];

    $sql = "DELETE FROM artists WHERE name='$deleteName'";

    if ($conn->query($sql) === true) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update functionality
if (isset($_POST['update'])) {
    $updateName = $_POST['update_name'];
    $updateNationality = $_POST['update_nationality'];
    $updateBirthYear = $_POST['update_birthyear'];
    $updateArt = $_POST['update_art'];

    $sql = "UPDATE artists SET nationality='$updateNationality', birthyear='$updateBirthYear', art='$updateArt' WHERE name='$updateName'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Artists Database</title>
</head>
<body>
    <h1>Artists Database</h1>
<h2>Search Artists</h2>
<form method="POST" action="">
    <select name="search_column">
        <option value="name">Name</option>
        <option value="nationality">Nationality</option>
        <option value="birthyear">Birth Year</option>
        <option value="art">Art</option>
    </select>
    <input type="text" name="search_value" placeholder="Search Value">
    <input type="submit" name="search" value="Search">
</form>

<br>
<h2>Add New Artist</h2>
<form method="POST" action="">
    <input type="text" name="insert_name" placeholder="Name" required>
    <input type="text" name="insert_nationality" placeholder="Nationality" required>
    <input type="text" name="insert_birthyear" placeholder="Birth Year" required>
    <input type="text" name="insert_art" placeholder="Art" required>
    <input type="submit" name="insert" value="Insert">
</form>
<br>

<h2>Delete an Artist</h2>
<form method="POST" action="">
    <input type="text" name="delete_name" placeholder="Name" required>
    <input type="submit" name="delete" value="Delete">
</form>
<br>
<h2>Update an Artist</h2>
<form method="POST" action="">
    <input type="text" name="update_name" placeholder="Name" required>
    <input type="text" name="update_nationality" placeholder="Nationality">
    <input type="text" name="update_birthyear" placeholder="Birth Year">
    <input type="text" name="update_art" placeholder="Art">
    <input type="submit" name="update" value="Update">
</form>

<br>
<h2>All Artists</h2>
<?php
displayAllRecords();
?>
</body>
</html>

