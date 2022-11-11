<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

        <?php require "../data/userdata.php"?>


    </head>
    <body>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthdate</th>
                    <th>Phone</th>
                    <th>Street</th>
                </tr>
                    </thead>
                    <?php
                        foreach ($data as $key => $value){
                            if ($value['id'] == $_GET['userId'] ){
                                echo "<tr>";
                                echo '<td>'. $value['firstname']." ".$value['lastname'] ."</td>";
                                echo "<td>". $value['email']."</td>";
                                echo "<td>". $value['phone']."</td>";
                                echo "<td>". $value['street']."</td>";
                                echo "<td>". $value['birthdate']."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
        </table>
    </body>
</html>