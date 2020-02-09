<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pengelolaan Siswa | Ver. 1.0</title>
	<!-- <link rel="stylesheet" type="text/css" href="{{url('assets/style.css')}}"> -->
	<style type="text/css">
		.container{
			width: 100%;
			padding-right: 50px;
			padding-left: 50px;			
		}
		.pagination li{
			float: left;
			list-style: none;
			/*margin: 5px;*/
			
		}
		.pagination{
			 display: -ms-flexbox;
			  display: flex;
			  padding-left: 0;
			  list-style: none;
			  border-radius: 0.25rem;
		}
		label{
			margin-top: 10px;
			margin-bottom: 10px;
			display: block;
		}
		button{
			display: block;
			margin-top: 10px;
			color: #fff;
		}
		.page-link {
		  position: relative;
		  display: block;
		  padding: 0.5rem 0.75rem;
		  margin-left: -1px;
		  line-height: 1.25;
		  color: #007bff;
		  background-color: #fff;
		  border: 1px solid #dee2e6;
		}

		.page-link:hover {
		  z-index: 2;
		  color: #0056b3;
		  text-decoration: none;
		  background-color: #e9ecef;
		  border-color: #dee2e6;
		}

		.page-link:focus {
		  z-index: 2;
		  outline: 0;
		  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
		}

		.page-item:first-child .page-link {
		  margin-left: 0;
		  border-top-left-radius: 0.25rem;
		  border-bottom-left-radius: 0.25rem;
		}

		.page-item:last-child .page-link {
		  border-top-right-radius: 0.25rem;
		  border-bottom-right-radius: 0.25rem;
		}

		.page-item.active .page-link {
		  z-index: 1;
		  color: #fff;
		  background-color: #007bff;
		  border-color: #007bff;
		}

		.page-item.disabled .page-link {
		  color: #6c757d;
		  pointer-events: none;
		  cursor: auto;
		  background-color: #fff;
		  border-color: #dee2e6;
		}

		.pagination-lg .page-link {
		  padding: 0.75rem 1.5rem;
		  font-size: 1.25rem;
		  line-height: 1.5;
		}

		.pagination-lg .page-item:first-child .page-link {
		  border-top-left-radius: 0.3rem;
		  border-bottom-left-radius: 0.3rem;
		}

		.pagination-lg .page-item:last-child .page-link {
		  border-top-right-radius: 0.3rem;
		  border-bottom-right-radius: 0.3rem;
		}

		.pagination-sm .page-link {
		  padding: 0.25rem 0.5rem;
		  font-size: 0.875rem;
		  line-height: 1.5;
		}

		.pagination-sm .page-item:first-child .page-link {
		  border-top-left-radius: 0.2rem;
		  border-bottom-left-radius: 0.2rem;
		}

		.pagination-sm .page-item:last-child .page-link {
		  border-top-right-radius: 0.2rem;
		  border-bottom-right-radius: 0.2rem;
		}
	
	</style>
	<link rel="stylesheet" type="text/css" href="{{url('assets/semantic.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/alert/dist/sweetalert2.min.css')}}">
</head>
<body>
<div class="ui secondary pointing menu">
  <a href="" class="item">
  	<b><i class="joget icon"></i>SMPN 1 Bojonegoro</b>
  </a>
  
  <div class="right menu">
  	<a class="ui item" id="dropdown-user">
     <div class="ui simple compact dropdown">
     	<i class="user outline icon"></i>     
		  <div class="text" >M. Galih Fikran Syah</div>
		  <i class="dropdown icon"></i>
		  <div class="menu">
		    <div class="item"><i class="user icon"></i>Profile</div>
		    <div class="item"><i class="logout icon"></i>     Logout</div>		    
		  </div>
		</div>      
    </a>
    <a class="ui item" id="menu">
      <i class="bars icon"></i>
    </a>
  </div>
</div>
<div class="ui left demo vertical inverted sidebar labeled icon menu">
  <a class="item">
    <i class="home icon"></i>
    Home
  </a>
  <a class="item">
    <i class="block layout icon"></i>
    Topics
  </a>
  <a class="item">
    <i class="smile icon"></i>
    Friends
  </a>
</div>


	@if (session('status'))
		<div class="flash-data" data-flashdata="{{session('status')}}"></div>	
	@endif

	<section class="container">		
		@yield('content')	
	</section>


<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="{{url('assets/semantic.min.js')}}"></script>
<script src="{{url('assets/alert/dist/sweetalert2.min.js')}}"></script>
<script type="text/javascript">	
function clicked(){
$('.form-delete').on('submit', function(e){
	var form = this;
    e.preventDefault();
    const href = $(this).attr('action');
    Swal({
        title: 'Apa anda yakin?',
        text: 'Data akan dihapus secara permanen',
        type: 'warning',
        showCancelButton: 'true',
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'Batal',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
    }).then((result) => {
        if(result.value){   
        		form.submit();
        }
    })
});
}
$('#menu').click(function(){
	$('.ui.labeled.icon.sidebar').sidebar('toggle');
});
$('#dropdown-user').click(function(){
	$('.ui.dropdown').dropdown({direction: 'downward'});
});

const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal({
        title: 'Berhasil!',
        text: flashData,
        type: 'success'
    });    
}

</script>

</body>
</html>
