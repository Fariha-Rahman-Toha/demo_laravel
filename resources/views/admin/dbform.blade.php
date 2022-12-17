<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(to right, #2c272a, #382831, #442936, #52293a, #5f283d, #5d273f, #5b2642, #592544, #462543, #35243e, #262235, #1c1e2a);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}
.center {
  margin: auto;
  width: 50%;
  padding: 10px;
  color:white;
}


@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>
</head>
<body>
    <div class="center">
<form action="{{url('/save_profile')}}" method="post" style="margin:0 auto; width:48%; vertical-align:middle; border: medium; "> 
            @csrf <!--since laravel does not work unless it is secure enough-->
            <h2 style="color:white">Personal Information</h2>
            <label for="name">Name: </label> &nbsp;
            <input type="text" name="name" placeholder="Enter your name" value="" required>
            <br><br>
            <label for="email">Email: </label> &nbsp;
            <input type="text" name="email" placeholder="Enter your email" value="" required>
            <br><br>
            <label for="image">Image: </label> &nbsp;
            <input type="file" name="image" placeholder="Upload your file" value="" required>
            <br><br>
            <label for="dob">Date of Birth: </label> &nbsp;
            <input type="date" name="birth_date" value="" required>
            <br><br>
            <label for="designation">Designation: </label> &nbsp;
            <input type="text" name="designation" placeholder="Enter your designation" value="" required>
            <br><br>

            <label for="address">Address: </label> &nbsp;
            <textarea id="address" name="address" placeholder="Write your address" style="height:100px; width:180px;" required></textarea>
            <br><br>
            <label for="about">About : </label> &nbsp;
            <textarea id="about" name="about_me" placeholder="Write about yourself" style="height:90px; width:250px;" required>  </textarea>
            <br><br>
            <label for="fb">FB Link: </label> &nbsp;
            <input type="text" name="fb" placeholder="Facebook Profile" value="" required>
            <br><br>
            <label for="ig">Instagram Link: </label> &nbsp;
            <input type="text" name="ig" placeholder="Instagram Profile" value="" required>
            <br><br>
            <label for="linkedin">LinkedIn: </label> &nbsp;
            <input type="text" name="linkedin" placeholder="LinkedIn" value="" required>
            <br><br>
            <br><br>
            <input type="submit" value="submit" style="cursor:pointer; background-color:rgb(241, 200, 200); color:black;">
        
        </form>
</div>
</body>
</html>