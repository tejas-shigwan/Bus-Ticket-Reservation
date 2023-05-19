<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer table</title>
    <style type=text/css>
        body {
            background: #D071f9;
        }

        table {
            background-color: white;
        }

        /* table {
        border-collapse: collapse;
        width: 100%;
        color: #eb4034;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
    }

    th{
        background-color: #ed4034;
        color: white;
    }

    tr:nth-child(even) {background-color: #ededed} */

        .update , .delete {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete {
            background-color: red;
            
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="7" width="85%">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>City</th>
            <th>Location</th>
            <th>Peoples</th>
            <th>Bus</th>
            <th>Arrivals</th>
            <th>Leaving</th>
            <th>Card Name</th>
            <th>Card Number</th>
            <th>Payment</th>
            <th>Month</th>
            <th>Year</th>
            <th>CVV</th>
            <th>Operations</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "book_db");
        $sql = "SELECT * FROM book_form";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["city"] . "</td> 
                <td>" . $row["location"] . "</td>
                <td>" . $row["peoples"] . "</td>
                <td>" . $row["bus"] . "</td>
                <td>" . $row["arrivals"] . "</td>
                <td>" . $row["leaving"] . "</td>
                <td>" . $row["card"] . "</td>
                <td>" . $row["cardno"] . "</td>
                <td>" . $row["payment"] . "</td>
                <td>" . $row["month"] . "</td>
                <td>" . $row["year"] . "</td>
                <td>" . $row["cvv"] . "</td>


                <td><a href='update.php?id=$row[id]'><input type='submit' value='Update' class='update'></a>

                <a href='delete.php?id=$row[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
                </tr>";
            }
        } else {
            echo "NO Results";
        }
        $conn->close();
        ?>
    </table>
    <script>function checkdelete()
    {
        return confirm('Are you sure you want to cancel your ticket ?');
    }
    </script>
    <a href="home.php" value="home" input type="home">Back To Home </a>
</body>

</html>