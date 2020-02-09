@extends('layout/main')
@section('content')
<div class="ui breadcrumb">
  <a class="section" href="/">Home</a>  
  <i class="right angle icon divider"></i>
  <div class="active section">Edit</div>
</div>
<h1>Edit data siswa</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="ui cards">
<div class="card">
    <div class="content">
      <div class="header">Form edit siswa</div>
      <div class="description">
        <form class="ui form" method="post" action="/student/{{$student->id}}">
        	@method('patch')
        	{{csrf_field()}}		  
		  <div class="field">
		    <label>Name</label>
		    <div class="two fields">
		      <div class="field">
		      	<input type="text" name="first_name" id="first_name" value="{{$student->first_name}}" placeholder="First Name">        
		      </div>
		      <div class="field">
		      	<input type="text" name="last_name" id="last_name" value="{{$student->last_name}}" placeholder="Last Name">      
		      </div>
		    </div>
		  </div>
		  <div class="ui form">
			  <div class="field">
			    <label>NISN</label>
			    <input type="text" name="nisn" id="nisn" value="{{$student->nisn}}">	
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Alamat</label>
			    <input type="text" name="address" id="address" value="{{$student->address}}">
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Umur</label>
			    <input type="text" name="age" id="age" value="{{$student->age}}">
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Email</label>
			    <input type="text" name="email" id="email" value="{{$student->email}}">
			  </div>
		 </div>		 
      </div>
    </div>
    <button class="ui bottom attached button" type="submit">
      <i class="add icon"></i>
      Selesai
    </button>
    </form>
</div>
</div>
@endsection