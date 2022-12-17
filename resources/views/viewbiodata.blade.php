@extends('template')

@section('title')
View Bio-Data
@endsection

@section('content')

<table class="table">
  <thead class="thead-light">
    <tr>
    <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Nationality</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">school</th>
      <th scope="col">college</th>
      <th scope="col">university</th>
      <th scope="col">Address</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">hobby</th>
      <th scope="col">about me</th>
      <th scope="col">father's name</th>
      <th scope="col">mother's name</th>
      <th scope="col">country</th>
      <th scope="col">Edit</th>
    <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($all_bio_data as $index=> $bio_data)
    @if($bio_data->status==1)
    <tr>
    <td>{{$index+1}}</td><!--index generated via loop-->
      <td>{{$bio_data->name}}</td>
      <td>{{$bio_data->nationality}}</td>
      <td>{{$bio_data->date_of_birth}}</td>
      <td>{{$bio_data->school}}</td>
      <td>{{$bio_data->college}}</td>
      <td>{{$bio_data->university}}</td>
      <td>{{$bio_data->address}}</td>
      <td>{{$bio_data->email}}</td>
      <td>{{$bio_data->phone}}</td>
      <td>{{$bio_data->hobby}}</td>
      <td>{{$bio_data->about_me}}</td>
      <td>{{$bio_data->fathers_name}}</td>
      <td>{{$bio_data->mothers_name}}</td>
      <td>{{$bio_data->country}}</td>
      <td>
        <a class="btn bg-warning text-white" href="{{route('editProfile',$bio_data->id)}}">Edit</a>
      </td>
      <td>
        <a class="btn bg-danger text-white" href="" data-toggle="modal" data-target="#exampleModal{{$bio_data->id}}">Delete</a>

  <!-- Modal -->
<div class="modal fade" id="exampleModal{{$bio_data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="text-danger">Do you want to delete?</p>
    
      </div>
      <div class="modal-footer">
      <form method="post" action="{{route('deleteProfile')}}">
        @csrf
        <input type="hidden" value="{{$bio_data->id}}" name="profile_id">
        <button class="btn bg-danger text-white" type="submit">Delete</button>
</form>
<!-- 1 for active
2 for disable
3 for delete
-->      
      </div>
    </div>
  </div>
</div>

      </td>
    </tr>
    @endif
@endforeach
  </tbody>
</table>
@endsection
