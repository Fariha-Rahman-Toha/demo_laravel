
@extends('template')
@section('title')
Bio-Data
@endsection
@section('content')
    <h1 id="title">Bio Data Form</h1>
    <!--use @ to write if-else statement in blade file
also here message is a variable-->
    @if(Session::has('message')) 
<h2> {{Session::get('message')}}</h2>
    @endif

    <div class="container">
        <form action="{{url('/save-profile')}}" method="post"> 
            @csrf <!--since laravel does not work unless it is secure enough-->
            <h2 style="color:darkslateblue">Personal Information</h2>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter your name" value="Fariha Rahman Toha" required>
            <br>
            <label for="fathers_name">Father's Name: </label>
            <input type="text" name="fathers_name" placeholder="Enter your father's name" value="N.A.M. Faruque Rahman" required>
            <br>
            <label for="mothers_name">Mother's Name: </label>
            <input type="text" name="mothers_name" placeholder="Enter your mother's name" value="Afroza Sultana" required>
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Enter your email" value="122457toha@gmail.com" required>
            <br>
            <label for="phone">Contact no. : </label>
            <input type="text" name="Mobile_num" placeholder="Enter your phone" value="01877368799" required>
            <br>
            <label for="dob">Date of Birth: </label>
            <input type="date" name="birth_date" value="2002-08-30" required>
            <br>
            <label for="age">Age: </label>
            <input type="number" name="age" placeholder="Enter your age" value="20" required>
            <br>
            <label for="religion">Religion: </label>
            <input type="text" name="religion" placeholder="Enter your religion" value="Islam" required>
            <br>
            <label for="blood-g">Blood Group: </label>
            <input type="text" name="blood-g" placeholder="Enter your blood group" value="A+ (positive) " required>
            <br>
            <label for="gender" style="text-align:left; width:29%;">Gender: </label>
            <ul style="list-style: none;">
               <li> <input type="radio" name="gender" style="width: 20px;">Male
               <input type="radio" name="gender" style="width:20px;"checked>Female</li>
                </ul>
            <label for="country">Country: </label>
             <select id="country" name="country" style="height:25px;" required>
             <option value="bangladesh" selected>Bangladesh</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="japan">Japan</option>
            <option value="nepal">Nepal</option>
            </select>
            <br>
            <label for="hobby"style="text-align:left; width:29%;">Hobby: </label>
            <br>
            <input type="checkbox" name="Hobby" value="gardening"> 
            <label for="gardening">Gardening</label> <br>
            <input type="checkbox" name="Hobby" value="drawing"> 
            <label for="drawing">Drawing</label> <br>
            <input type="checkbox" name="Hobby" value="reading"> 
            <label for="reading">Reading novels</label> <br>
            <input type="checkbox" name="Hobby" value="gaming"> 
            <label for="gaming">Gaming</label><br>

            <label for="address">Address: </label>
            <textarea id="address" name="Address" placeholder="Write your address" style="height:100px; width:180px;" required>481/2-A, North Ibrahimpur, Kafrul</textarea>
            <h2 style="color:darkslateblue;">Education</h2>
            <label for="school">Name of School: </label>
            <input type="text" name="scl" placeholder="Enter the name of your school" value="Mirpur Girls' Ideal Laboratory Institute" style="width:250px"required>
            <br>
            <label for="college">Name of College: </label>
            <input type="text" name="clg" placeholder="Enter the name of your college" value="Adamjee Cantonment College" style="width:250px" required>
            <br><label for="school" style="width:21%">Name of University: </label>
            <input type="text" name="university" placeholder="Enter the name of your university" value="Bangladesh University of Professionals"style="width:250px" required>
            <br>
            <label for="department">Department: </label>
             <select id="department" name="department" style="height:25px; width:250px;"required>
             <option value="ICT" selected>ICT</option>
            <option value="ES">ES</option>
            <option value="CSE">CSE</option>
            </select>
            <br>
            <label for="about">About : </label>
            <textarea id="about" name="about_me" placeholder="Write about yourself" style="height:300px; width:250px;" required> I am an enthusiastic and  a dedicated individual. I am also willing to learn more skills. I am fluent at communicating in both English and Bangla.
             </textarea>
           
            <br>
            <input type="submit" value="submit" style="cursor:pointer; background-color:rgb(241, 200, 200); color:black;">
        
        </form>
    </div>
    <div><br>
    <br>
<br>
<br>
</div>
@endsection