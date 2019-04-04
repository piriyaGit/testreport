<?php
    include ('config/database.php');
    $mysqli = connect();

    $sql="SELECT * FROM data_tb";
    global $mysqli;
        $obj = array();
        $res = $mysqli->query($sql) or die("SQL Error: <br>".$sql."<br>".$mysqli->error);
        while($data = $res->fetch_assoc()) {
            $obj[] = $data;
        }
?>

<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <head>
        <title>Test Report</title>
    </head>

    <body>
        <div class="container">
        <div class="table-responsive">
            <table class="table text-center">
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Nickname</th>
                <?php $i=0;
                    foreach ($obj as $result){
                        $i++;
                ?>
            <tr>
                <td ><?=$i;?></td>
                <td ><?=$result['Fname'];?></td>
                <td ><?=$result['Lname'];?></td>
                <td ><?=$result['Nname'];?></td>
            </tr>
                    <?php } ?>
            </table>
        </div>
        </div>
    </body>

</html>