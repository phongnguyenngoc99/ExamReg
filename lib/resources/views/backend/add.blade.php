<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('public/layout/backend')}}/">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8">
	<title>Quản lí môn thi</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>

	<!-- link file CSS: -->
	<link rel="stylesheet" href="css/index6.css">

	<style type="text/css" media="screen">
		label{
			width: 150px;
			padding-bottom: 10px;
			color: black;
		}
	</style>
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
				<ul class="menu">
					<li>
						<a class="non-textdecoration" href="{{asset('admin/subs/add')}}" title="Đăng kí môn thi">
							<span><i class="icon-stackexchange"></i> Quản lí môn thi</span>
						</a>
					</li>
					
					<li>	
							<a class="non-textdecoration" href="{{asset('admin/subs/add-room')}}" title= "Quản lí phòng thi" >
							<span><i class="icon-stackexchange"></i> Quản lí phòng thi</span>
							</a>					
					</li>

					<li>
						<a class="non-textdecoration" href="{{asset('admin/subs/add-student')}}" title= "Quản lí sinh viên">
							<span><i class="icon-stackexchange"></i> Quản lí sinh viên</span>
						</a>
					</li>
				</ul>	
			</div>
			
			<div class="col-md-10">
				<div>
					<br>
				</div>
				<header class="header-table">
					<p>
						Thêm môn thi
					</p>
				</header>
					@include('errors.note')
					<form action="" method="post" accept-charset="utf-8" style="margin-left: 200px">
						<div>
							<label for="sub_id">
								<strong>Mã môn thi</strong>
							</label>
							<input name="sub_id" type="text" placeholder="Mã môn thi" required>
		                
							<br>

		                	<label>
								<strong>Tên môn thi</strong>
							</label>
		                  	<input name="sub_name" type="text" placeholder="Tên môn học" required>
		                
							<br>

		                	<label>
								<strong>Phòng thi</strong>
							</label>
		                  	<select name="room_id" required>
		                		@foreach($room_list as $room)
		                		<option value="{{$room -> room_id}}">{{$room->room_name}}</option>}
		            			@endforeach
		            		</select>
							<br>

							<label>
								<strong>Ca thi</strong>
							</label>
		                  	<input name="shift" type="number" placeholder="Ca thi" required>
		                	
							<br>

		                	<label>
								<STRONG>Lịch thi</STRONG>
							</label>
		                  	<input name="calendar" type="date" required>
		                	
							<br>

							<label>
								<STRONG>Số lượng sinh viên</STRONG>
							</label>
		                  	<input name="limit_sv" type="number" placeholder="Số lượng SV" required>

		                  	<br>

		                  	<input type="submit" name="submit" value="Thêm" class="btn btn-success" style="width: 100px; margin-left: 240px; color: white;"> 
						</div>
						{{csrf_field()}}
					</form>
			</div>
		</div>
	</div>
	br
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<br>
			<br>
			<div class="col-md-10">
				<header class="header-table" style="margin-bottom: 0px">
					
						<p>Danh sách môn học đã thêm</p>
					
				</header><!-- /header -->
				<table id="t1">
					<thead>
						<tr>
							<th>Mã môn học</th>
							<th>Môn học</th>
							<th>Ca thi</th>
							<th>Ngày</th>
							<th>Địa điểm</th>
							<th>ID phòng thi</th>
							<th>Số lượng</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
					<!-- hide list subs -->
					@foreach($sub_list as $sub)
						<tr>
							<td>{{$sub->sub_id}}</td>
							<td>{{$sub->sub_name}}</td>
							<td>{{$sub->shift}}</td>
							<td>{{$sub->time}}</td>
							<td>{{$sub->room_name}}</td>
							<td>{{$sub->room_id}}</td>
							<td>{{$sub->amount}}</td>
							<td><a href="{{asset('admin/subs/add/'.$sub->sub_id)}}" onclick="return confirm('R u sure?')
								" class="btn btn-danger btn-xs">Xóa</a></td>								
							</tr>
						</tr>
					
					<!-- <script type="text/javascript">
						$(document).on('click', '.delete', function(){
							$.ajaxSetup({
								headers: {
									       				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								        				}
								        		});
					
							var id = $(this).attr('data-id');
								if(confirm("r u sure?")){
									$(this).closest('tr').remove();
									$.ajax({ 
										url: "{{URL::to('admin/subs/add/delete')}}",
										method: "POST",
										data:{id:id},
										succes:function(){
											alert("Data Deleted!!");
										}
									});
								}
					
						});
					</script> -->
					@endforeach
					</tbody>
				</table>
				<footer>
				
				</footer>
			</div>
		</div>
	</div>
</body>
</html>