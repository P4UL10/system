<?php
// Include your database connection code or configuration file
include 'db_connection.php'; // Adjust the filename as per your setup

// Check if LRN is provided via GET parameter
if (isset($_GET['lrn_number'])) {
    // Retrieve LRN from GET parameter
    $lrn_number = $_GET['lrn_number'];

    $sql = "SELECT * FROM bluecard WHERE lrn_number = ?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$lrn_number]);

    // Check if there are any results
    if ($stmt->rowCount() > 0) {
        // Fetch the data
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Display the registration data in an editable form within the existing table structure
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration Data</title>
    <style type="text/css">
        body {
            background-image: linear-gradient(to right, #cdffd8, #94b9ff);
        }

        input {
            border: none;
            outline: none;
            font-family: Arial, sans-serif;
            font-size: 14px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <table width="1000" height="200">
        <tr>
            <td width="400" height="200">
                <table bgcolor="white" height="400px" width="300px">
                    <tr>
                        <td>
                            <img src="clasj.png" height="80">
                            <center><p><h2> Community of Learners Academy of San Jose</h2></p></center>
                            <h4><center> S.Y_____-20__ </center></h4>
                            <h3><center> Registration Card </center></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center><h3><input id="input" name="search" rows="1.5" cols="15"> </input></h3></center>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <table bgcolor="Black" width="1000">
                        <tr bgcolor="white">
                            <th width="90">DATE</th>
                            <th width="80">OR#</th>
                            <th width="70">MONTH</th>
                            <th width="100">PAYMENT</th>
                            <th width="100">BALANCE</th>
                            <th width="100">SIGNATURE</th>
                        </tr>
                        <tr bgcolor="white" align="center" height="20">
                            <td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
                            <td><input type="text" name="or_number" value="<?php echo $row['or_number']; ?>"></td>
                            <td><input type="text" name="month" value="<?php echo $row['month']; ?>"></td>
                            <td><input type="text" name="payment" value="<?php echo $row['payment']; ?>"></td>
                            <td><input type="text" name="balance" value="<?php echo $row['balance']; ?>"></td>
                            <td><input type="text" name="signature" value="<?php echo $row['signature']; ?>"></td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>
<?php
    } else {
        echo "No data found for LRN: $lrn_number";
    }
} else {
    echo "LRN number not provided.";
}
?>
