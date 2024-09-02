<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body, .container, .d-flex {
            height: 100%;
        }

        main {
            min-height: 82vh;
        }
    </style>
</head>
<body>
<?=
require "./layout/header.php";?>

<div>
    <section class="create">
        <div class="container py-5">
            <div class="row">
                <div class="col-8">

                    <form action="./store.php" class="form" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ism</label>
                            <input type="text" class="form-control" id="name" placeholder="ism..." name="name" ">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Manzil</label>
                            <input type="text" class="form-control" id="address" placeholder="manzil..." name="address" ">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" placeholder="age..." name="age" >
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" placeholder="gender..." name="gender" >
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Kurs</label>
                            <input type="text" class="form-control" id="course" placeholder="kursi..." name="course" >
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success mb-5">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
