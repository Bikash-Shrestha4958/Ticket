<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/custom.css">

</head>

<body>
    <?php include('modals.html');?>
    <div class="container">
        <div class="jumbotron">
            <div class="card" id="heading">
                <h2>Ticketing System</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Add Data
                    </button>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table-view">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">title</th>
                                <th scope="col">email</th>
                                <th scope="col">message</th>
                                <th scope="col">created</th>
                                <th scope="col">status</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('db_connect.php');
                            $connect = db_connect();
                            $sql = 'select * from tickets';
                            $result = $connect->query($sql);
                            foreach ($result as $row) : ?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['msg'] ?></td>
                                    <td><?php echo $row['created'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn">Edit</button>
                                        <button type="button" class="btn btn-danger deletebtn">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="assets/scripts.js"></script>
    
</body>

</html>