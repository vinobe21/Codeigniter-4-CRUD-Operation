<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Create New User</h4>
                <form action="<?= site_url('/submit-form') ?>" method="POST">
                    <div class="form-group my-3">
                        <label for="name">Name: </label>
                        <input class="form-control" name="name" type="text" placeholder="Enter your name" />
                    </div>
                    <div class="form-group  my-3">
                        <label for="email">Email: </label>
                        <input class="form-control" name="email" type="email" placeholder="Enter your Email" />
                    </div>
                    <button class="btn btn-success" type="submit">Create User</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>