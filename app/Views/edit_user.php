<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Update profile</h4>
                <form action="<?= site_url('/update-form') ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $users['id']; ?>">
                    <div class="form-group my-3">
                        <label for="name">Name: </label>
                        <input class="form-control" name="name" type="text" placeholder="Enter your name"
                            value="<?php echo $users['name']; ?>" />
                    </div>
                    <div class="form-group  my-3">
                        <label for="email">Email: </label>
                        <input class="form-control" name="email" type="email" placeholder="Enter your Email"
                            value="<?php echo $users['email']; ?>" />
                    </div>
                    <button class="btn btn-success" type="submit">Update User</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>