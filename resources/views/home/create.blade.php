@extends('layout/main')
@section('content')
<div class="ui breadcrumb">
  <a class="section" href="/">Home</a>  
  <i class="right angle icon divider"></i>
  <div class="active section">Create</div>
</div>
<h1>Tambah data siswa</h1>

@if ($errors->any())
<div class="ui warning message">
  <div class="header">
    Please, fill in all the fields correctly!
  </div>
  <ul class="list">    
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
    
        
@endif

<!-- semantic ui-->
<div class="ui cards">
<div class="card">
    <div class="content">
      <div class="header">Form siswa baru</div>
      <div class="description">
        <form class="ui form" method="post" action="/student/store">
        	{{csrf_field()}}		  
		  <div class="field">
		    <label>Name</label>
		    <div class="two fields">
		      <div class="field">
		      	<input type="text" name="first_name" id="first_name" value="{{old('first_name')}}" placeholder="First Name">        
		      </div>
		      <div class="field">
		      	<input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" placeholder="Last Name">      
		      </div>
		    </div>
		  </div>
		  <div class="ui form">
			  <div class="field">
			    <label>NISN</label>
			    <input type="text" name="nisn" id="nisn" value="{{old('nisn')}}">	
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Alamat</label>
			    <input type="text" name="address" id="address" value="{{old('address')}}">
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Umur</label>
			    <input type="text" name="age" id="age" value="{{old('age')}}">
			  </div>
		 </div>
		 <div class="ui form">
			  <div class="field">
			    <label>Email</label>
			    <input type="text" name="email" id="email" value="{{old('email')}}">
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

