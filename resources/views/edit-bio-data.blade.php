
@extends('template')
@section('title')
Bio-Data-Edit
@endsection
@section('content')
    <h1 id="title">Bio Data Form</h1>
    <!--use @ to write if-else statement in blade file
also here message is a variable-->
    @if(Session::has('message')) 
<h2> {{Session::get('message')}}</h2>
    @endif

    <div class="container">
        <form action="{{route('updateProfile')}}" method="post" > 
            @csrf <!--since laravel does not work unless it is secure enough-->
            <input type="hidden" name="profile_id" value="{{$bio_data->id}}"> <!-- for hidden info which passes id but will not be shown-->
            <h2 style="color:darkslateblue">Personal Information</h2>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter your name" value="{{$bio_data->name}}" required>
            <br>
            <label for="fathers_name">Father's Name: </label>
            <input type="text" name="fathers_name" placeholder="Enter your father's name" value="{{$bio_data->fathers_name}}" required>
            <br>
            <label for="mothers_name">Mother's Name: </label>
            <input type="text" name="mothers_name" placeholder="Enter your mother's name" value="{{$bio_data->mothers_name}}" required>
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Enter your email" value="{{$bio_data->email}}" required>
            <br>
            <label for="phone">Contact no. : </label>
            <input type="text" name="Mobile_num" placeholder="Enter your phone" value="{{$bio_data->phone}}" required>
            <br>
            <label for="dob">Date of Birth: </label>
            <input type="date" name="birth_date" value="{{$bio_data->date_of_birth}}" required>
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
               <li> <input type="radio" name="gender" style="width: 20px;"{{$bio_data->gender=='male'?'selected':''}}>Male
               <input type="radio" name="gender" style="width:20px;"{{$bio_data->gender=='female'?'selected':''}}>Female</li>
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
            <input type="checkbox" name="Hobby" value="{{$bio_data->hobby}}"> 
            <label for="gardening">Gardening</label> <br>
            <input type="checkbox" name="Hobby" value="{{$bio_data->hobby}}"> 
            <label for="drawing">Drawing</label> <br>
            <input type="checkbox" name="Hobby" value="{{$bio_data->hobby}}"> 
            <label for="reading">Reading novels</label> <br>
            <input type="checkbox" name="Hobby" value="{{$bio_data->hobby}}"> 
            <label for="gaming">Gaming</label><br>

            <label for="address">Address: </label>
            <textarea id="address" name="Address" placeholder="Write your address" style="height:100px; width:180px;" value="{{$bio_data->address}}" required>481/2-A, North Ibrahimpur, Kafrul</textarea>
            <h2 style="color:darkslateblue;">Education</h2>
            <label for="school">Name of School: </label>
            <input type="text" name="scl" placeholder="Enter the name of your school" value="{{$bio_data->school}}" style="width:250px"required>
            <br>
            <label for="college">Name of College: </label>
            <input type="text" name="clg" placeholder="Enter the name of your college" value="{{$bio_data->college}}" style="width:250px" required>
            <br><label for="school" style="width:21%">Name of University: </label>
            <input type="text" name="university" placeholder="Enter the name of your university" value="{{$bio_data->university}}"style="width:250px" required>
            <br>
            <label for="department">Department: </label>
             <select id="department" name="department" style="height:25px; width:250px;"required>
             <option value="ICT" selected>ICT</option>
            <option value="ES">ES</option>
            <option value="CSE">CSE</option>
            </select>
            <br>
            <label for="about">About : </label>
            <textarea id="about" name="about_me" placeholder="Write about yourself" style="height:300px; width:250px;" required> {{$bio_data->about_me}}
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