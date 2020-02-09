@extends('layout/main')
@section('content')

<h1 class="ui header">Daftar Siswa SMPN 1 BOJONEGORO</h1>
<a href="/student/create" class="primary ui button"><i class="plus icon"></i>Tambah Siswa</a>
<br><br>
<form method="get" action="/student/search">	
	{{csrf_field()}}
<div class="ui icon input">
  <i class="search icon"></i>
  <input type="text" placeholder="Search..." name="search" value="{{old('search')}}">
</div>	
<button class="ui inverted secondary button" type="submit">OK</button>
</form>
<br>
<table class="ui striped table ">
  	<thead>
    	<tr>
	    	<th>#</th>
			<th>Nama depan</th>
			<th>Nama belakang</th>
			<th>NISN</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Email</th>		
			<th>Action</th>
		</tr>
	</thead>
  	<tbody>
  				
  		@foreach($students as $student)
	    <tr>
	     	<td>{{$loop->iteration}}</td>
			<td>{{$student->first_name}}</td>
			<td>{{$student->last_name}}</td>
			<td>{{$student->nisn}}</td>
			<td>{{$student->address}}</td>
			<td>{{$student->age}}</td>
			<td>{{$student->email}}</td>
			<td>
				<form method="post" action="/student/{{$student->id}}" class="form-delete">
					@method('delete')
					@csrf	
					<div class="ui buttons">
					  <button class="ui secondary button" id="delete-button" type="submit" onclick="return clicked()"><i class="trash icon"></i></button>
					  <div class="or"></div>
					  <a href="/student/{{$student->id}}/edit" class="ui button"><i class="edit icon"></i></a>
					</div>			
				</form>
				
			</td>
	    </tr>	 
	    @endforeach
  </tbody>
</table>
@if($students->total() == 0)
	<div class="ui placeholder segment">
  <div class="ui icon header">
    <i class="search icon"></i>
    Maaf, kami tidak dapat menemukan siswa yang anda maksud!.
  </div>
  <div class="inline">
    <a class="ui primary button" href="/student/create">Tambah data</a>    
  </div>
</div>
@endif  
{{$students->links()}}

@endsection
