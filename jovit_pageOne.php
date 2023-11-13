<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="submit_form.php" method="post">
            <h1>Enter Details Here!</h1>
            <div class="input-box">
                <input type="text" name="first_name" placeholder="First Name" required>
            </div>
            <div class="input-box">
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="input-box">
                <input type="text" name="address" placeholder="Address" required>
            </div>
            <div class="radio-btn">
                <label for="">Gender : </label>
                <input type="radio" name="gender" value="1"> Male
                <input type="radio" name="gender" value="2"> Female
            </div>
            <div class="birthday">
                <h4>Birthday:</h4>
                <input type="date" name="birthday">
            </div>

            <button type="submit" class="btn">Submit</button>
    
        </form>
    </div>
</body>
</html>
