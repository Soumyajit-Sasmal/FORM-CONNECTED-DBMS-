<html>
<style>
    body {
        margin: 0;
        color: white;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    .mytab {
        width: auto;
        height: auto;
        background: rgba(18, 16, 16, 0.7);
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        border-radius: 3vw;
        padding: 2vw;
    }
    .mytab th {
        border: 1px solid white;
        padding: 1vw;
        background-color: white;
        color: black;
    }

    .mytab td {
        border: 1px solid white;
        padding: 1vw;
    }
</style>
<body>
    <table class="mytab">
        <tr>
            <th>ID</th>
            <th>FULL NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            ><th>STATE</th>
            <th>IP ADDRESS</th>
            <th>TIME REGIAN </th>
            <th>PHONE NUMBER  </th>
        </tr>
        <?php
        include "connection.php";
        $sql = "SELECT*FROM reg";  // table view 
        $table = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($table);
        do {
            echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['fullname'] . '</td>
            <td>' . $row['address'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['password'] . '</td>
            <td>' . $row['state'] . '</td>
            <td>' . $row['ip'] . '</td>
            <td>'.   $row['timeregian'] . '</td>
            <td>'.   $row['phonenumbers'] . '</td>
            </tr>';
        } while ($row = $table->fetch_assoc());
        ?>
    </table>
</body>
</html>