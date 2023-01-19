<?php
require 'connection/connection_es.php';
require 'function/function-list.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Searching</title>
    <link rel="stylesheet" href="assets/css/style-list.css" />
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <form action="listening.php" method="get" autocomplete="off">
    <div class="frm1">
        <h3>Search for someone by lastname:</h3>
        <br>
        <input type="text" name="q" placeholder="last name.." required>
        <label>
        </label>
        <input type="submit" id="btn" value="Search">
    </div>
    </form>
    <div>
        <?php
        if (isset($result)) {
        ?>
            <div id="frm">
                <table>
                    <tr>
                        <th>lastname</th>
                        <th>firstname</th>
                        <th>birthday</th>
                        <th>gender</th>
                        <th>email</th>
                        <th>phonenumber</th>
                        <th>gradelevel</th>
                        <th>website</th>
                        <th>choices</th>
                    </tr>
                    <?php
                    foreach ($result as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value['lastname'] ?></td>
                            <td><?php echo $value['firstname'] ?></td>
                            <td><?php echo $value['birthday'] ?></td>
                            <td><?php echo $value['gender'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['phonenumber'] ?></td>
                            <td><?php echo $value['gradelevel'] ?></td>
                            <td><?php echo $value['website'] ?></td>
                            <td><?php echo $value['choices'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>