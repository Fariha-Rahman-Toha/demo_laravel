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
<form action="{{url('/save_skill')}}" method="post" style="margin:0 auto; width:48%; vertical-align:middle; border: medium; "> 
            @csrf <!--since laravel does not work unless it is secure enough-->
            <h2 style="color:white">Personal Information</h2>
            <label for="title">Title: </label> &nbsp;
            <input type="text" name="title" placeholder="Enter your name" value="" required>
            <br><br>
            <label for="proficiency_percent">Proficiency: </label> &nbsp;
            <input type="text" name="proficiency_percent" placeholder="Enter " value="" required>
            <br><br>
            <label for="type">Type: </label> &nbsp;
            <input type="text" name="type" placeholder="Enter" value="" required>
            <br><br><!--abcdefghklmnop-->
            <br><br>
            <input type="submit" value="submit" style="cursor:pointer; background-color:rgb(241, 200, 200); color:black;">
        
        </form>
</div>
</body>
</html>