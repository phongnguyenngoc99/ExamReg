<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('public/layout/backend')}}/">
	<base href="{{asset('lib/app/Http/Controllers/Admin')}}/">
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Đăng ký</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>

	<!-- link file CSS: -->
	<link rel="stylesheet" href="css/index4.css">
</head>
<body>
	<div class="row">
		<div id="header" class="col-md-9">
			<p>HỆ THỐNG ĐĂNG KÍ THI TRỰC TUYẾN</p>
		</div>
		<div class="col-md-3" id="btn-header">
			<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #28a745; border: #28a745";>
			    {{Auth::user()->name}}: {{Auth::user()->id}}             
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="{{asset('logout')}}" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất khỏi hệ thống không?');">Đăng xuất</a>
			    <a class="dropdown-item" href="#">Thông tin cá nhân</a>
			  </div>
			</div>
		</div>
	</div>
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<ul>
					<li>
						<a class="non-textdecoration" href="{{asset('admin/home')}}">
							<span><i class="icon-stackexchange"></i> Trang chủ</span>
						</a>
					</li>
					<li>
						<a class="non-textdecoration" href="{{asset('admin/regist')}}" title="Đăng kí môn thi">
							<span><i class="icon-stackexchange"></i> Đăng kí môn thi</span>
						</a>
					</li>
					
					<li>
						<a class="non-textdecoration" href="{{asset('admin/print')}}" title= "In kết quả đăng kí">
							<span><i class="icon-stackexchange"></i> In kết quả đăng kí</span>
						</a>
					</li>
				</ul>	
			</div>
			<div class="col-md-10">

				<p align="center" style="font-size: 40px;">
					PHIẾU BÁO DỰ THI
				</p>
				
				<p>
					<strong>Họ và tên: </strong>{{Auth::user()->name}} <br>
				</p>
				<p>
					<strong>ID:</strong>     {{Auth::user()->id}}
				</p>
				<p>
					<strong>Ngày đăng ký: </strong> 28/12/2019

				</p>
					
				
				<br>
				<table id="selectedTable" width="1000" align="center">
						<thead>
							<tr>
								<th>Mã môn học</th>
								<th style="width: 500px">Môn học</th>
								<th style="width: 150px">Ca thi</th>
								<th style="width: 150px">Ngày</th>
								<th style="width: 150px">Địa điểm</th>
								
							</tr>
						</thead>
						<tbody>	
							<!-- hide list selected subs	 -->				
							@foreach($selected_list as $selected)
							<tr>
								<td>{{$selected->sub_id}}</td>
								<td>{{$selected->sub_name}}</td>
								<td>{{$selected->shift}}</td>
								<td>{{$selected->time}}</td>
								<td>{{$selected->room_name}}</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
					<div>
						<a href="{{URL::to('admin/regist/export-pdf')}}" class=" btn btn-success" style="margin-left: 800px; margin-top: 50px"><i class="icon-save"></i> Xuất kết quả ra PDF</a>
					</div>
					
			</div>

		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>