<?php
    include './handler.php';
    $handler = new DbHandler();
    $example = $handler->readData("SELECT * FROM todo");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Simple Todo</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date Create</th>
                <th scope="col">Date Deadline</th>
                <th scope="col">Status</th>
                <th scope="col">Date Done</th>
            </tr>
        </thead>
        <tbody id="tableTodo">
            <?php 
            $no = 1;
                foreach($example as $val){
                    ?>
                        <tr>
                            <th scope="col"><?= $no ?></th>
                            <th scope="col"><?= $val['id']; ?></th>
                            <th scope="col"><?= $val['user_id']; ?></th>
                            <th scope="col"><?= $val['title']; ?></th>
                            <th scope="col"><?= $val['description']; ?></th>
                            <th scope="col"><?= $val['status']; ?></th>
                            <th scope="col"><?= $val['date_create']; ?></th>
                            <th scope="col"><?= $val['date_deadline'] ?></th>
                            <th scope="col"><?= $val['date_done']; ?></th>
                        </tr>
                    <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/script.js"></script>

</html>