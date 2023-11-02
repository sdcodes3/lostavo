<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/global.css">
    <title>Lostavo</title>
</head>
<body class="d-flex position-relative">
    <div class="container-fluid d-flex align-items-center justify-content-center p-0">
        <form action="controllers/register.php" method="POST" class="loginForm w-100 d-flex justify-content-center" enctype="multipart/form-data">
            <div class="d-flex flex-column p-3 p-md-5 col-12 col-md-6 col-xxl-4">
                <div class="heading text-center">
                    SignUp Page
                </div>
                <div class="pt-4">
                    Name : 
                    <input type="text" class="form-control" name="uname" id="">
                </div>
                <div class="pt-4">
                    Email : 
                    <input type="text" class="form-control" name="umail" id="">
                </div>
                <div class="pt-4">
                    Password : 
                    <input type="password" class="form-control" name="pass" id="">
                </div>
                <div class="pt-4">
                    City : 
                    <select name="city" id="" class="form-select">
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Jamnagar">Jamnagar</option>
                    </select>
                </div>
                <div class="pt-4">
                    State : 
                    <select name="state" id="" class="form-select">
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Rajasthan">Rajasthan</option>
                    </select>
                </div>
                <div class="pt-4">
                    Photo:
                    <input type="file" class="form-control" name="fileToUpload">
                </div>
                <div class="d-flex justify-content-end pt-4">
                    <input type="submit" value="Register" class="btn rounded-pill text-white bg-green w-100 rounded-0" name="submit">
                </div>
                <div class="text-end d-flex justify-content-end pt-4 flex-wrap">
                    <div>Already Registered? <a href="#" class="text-success">Login Here</a></div>
                </div>
                <div class="text-end">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>