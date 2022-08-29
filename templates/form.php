<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<form action="/contact-us" method="post" enctype="multipart/form-data">
    <div>
        <label class="form-label">
            Firstname
        </label>
        <input type="text" name="firstname" class="form-control" placeholder="Your firstname">
    </div>
    <div>
        <label class="form-label">Password</label>
        <input type="password" name="password" placeholder="Your password" class="form-control">
    </div>
    <div>
        Gender
        <input type="radio" name="gender" value="M">
        <input type="radio" name="gender" value="F">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="gender" value="M">
        <label class="form-check-label">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="gender" value="F">
        <label class="form-check-label">
            Female
        </label>
    </div>
    <input type="file" name="avatar">
    <button type="submit">Send.</button>
    </div>
</form>
</body>
</html>