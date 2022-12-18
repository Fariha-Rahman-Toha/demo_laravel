   @extends('template')
   @section('title')
   my form 
   @endsection
   @section('content')   
   <div class="container">
        <form action="{{url('/create')}}" method="post">
            @csrf
            <label for="name"> Name: </label>
            <input type="text" name="name" placeholder="Enter your name"> <br>
            <label for="dob"> Date of Birth: </label>
            <input type="date" name="dob" placeholder="Enter your dob"> <br>
            <label for="phone"> Phone: </label>
            <input type="text" name="phone" placeholder="Enter your contact no."> <br>
            <label for="gender"> Gender: </label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female <br>
            <label type="nationality"> Nationality: </label>
            <select name="nationality">
                <option value="Bangladeshi">Bangladeshi</option>
                <option value="Indian"> Indian </option>
                <option value="Chinese">Chinese </option>
                <option value="Japanese"> Japanese</option>
</select> <br>
<label for="email"> Email: </label>
<input type="email" name="email"> <br>
<label for="hobby"> Hobby: </label>
<input type="checkbox" name="hobby">Reading <br>
<input type="checkbox" name="hobby">writing <br>
<input type="checkbox" name="hobby">gardening <br>
<input type="checkbox" name="hobby">drawing <br>
<input type="submit" value="Submit" align="center"> 
</form>
</div>
@endsection