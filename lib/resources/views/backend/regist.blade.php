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
				<p>
					<i>
						Chú ý: Sinh viên chọn những môn mình theo học.
					</i>
				</p>
				<p>
					<label style="border: 1px solid #white; background-color: #ffff66; margin: 1px 1px 1px 1px; padding: 3px 5px 3px 5px; color: black">Không đủ điều kiện đăng ký</label>
					<br>
					
					<label style="border: 1px solid #white; background-color: #9fff80; margin: 1px 1px 1px 1px; padding: 3px 5px 3px 5px; color: black">Đăng ký thành công</label>
					<br>

					<label style="border: 1px solid #white; background-color: #ffb3b3; margin: 1px 1px 1px 1px; padding: 3px 5px 3px 5px; color: black">Đang chọn môn thi </label>
				</p>
	
				<header class="header-table">
					<label style="color: black; line-height: 60px; margin-bottom: 0px; margin-left: 20px; font-size: 25px">
						<select>
							<option value="1">Học kì I: 2019-2020</option>
							<option value="2">Học kì II:2019-2020</option>
							<option value="3">Học kì I: 2020-2021</option>
							<option value="4">Học kì II: 2020-2021</option>
							<option value="5">Học kì I: 2021-2022</option>
							<option value="6">Học kì II: 2021-2022</option>
						</select>
					</label>
				</header><!-- /header -->
				<table id="t1">
					<thead>
						<tr>
							<th>Chọn</th>
							<th>Mã môn học</th>
							<th>Môn học</th>
							<th>Ca thi</th>
							<th>Ngày</th>
							<th>Địa điểm</th>
							<th>ID phòng thi</th>
							<th>Số lượng</th>
							<th>Đã đăng kí</th>
						</tr>
					</thead>
					<tbody>
					<!-- hide list subs -->
					@foreach($sub_list as $sub)
						<tr>
							<td>
								<input type="checkbox" id="{{$sub->sub_id}}">
							</td>
							<td>{{$sub->sub_id}}</td>
							<td>{{$sub->sub_name}}</td>
							<td>{{$sub->shift}}</td>
							<td>{{$sub->time}}</td>
							<td>{{$sub->room_name}}</td>
							<td>{{$sub->room_id}}</td>
							<td>{{$sub->amount}}</td>
							<td>0</td>
						</tr>
					
					<script type="text/javascript">
						document.getElementById('{{$sub->sub_id}}').onchange = function(e){
						
							if(this.checked){
								$(this).closest('tr').css('background-color', '#ffb3b3');
								document.getElementById("{{$sub->sub_id}}").disabled = true;
							}
						}
						@foreach($dsdkdk as $not)
							if({{$not->sv_id}} == {{Auth::user()->id}} && {{$not->sub_id}} == {{$sub->sub_id}}){
								document.getElementById("{{$sub->sub_id}}").disabled = true;
								$('#{{$sub->sub_id}}').closest('tr').css('background-color', '#ffff66');
							 }
						@endforeach							


					</script>
					
					@endforeach
					</tbody>
				</table>

				<br>
		
				<header class="header-table">
					
						Danh sách môn thi đã chọn
					
				</header><!-- /header -->
				<form action="{{URL::to('admin/regist/post')}}" id="frm-submit" method="post">
					<table id="selectedTable">
						<thead>
							<tr>
								<th style="width: 150px">Mã môn học</th>
								<th style="width: 500px">Môn học</th>
								<th style="width: 150px">Ca thi</th>
								<th style="width: 150px">Ngày</th>
								<th style="width: 150px">Địa điểm</th>
								<th style="width: 150px">Hủy</th>
							</tr>
						</thead>
						<tbody>	
							<!-- hide list selected subs	 -->				
							@foreach($selected_list as $selected)
							<tr style="background-color: #ffcccc">
								
								<td>{{$selected->sub_id}}</td>
								<td>{{$selected->sub_name}}</td>
								<td>{{$selected->shift}}</td>
								<td>{{$selected->time}}</td>
								<td>{{$selected->room_name}}</td>
								<td><a href="{{URL::to('admin/regist/'.$selected->sub_id)}}" onclick="return confirm('R u sure?')" class="btn btn-danger btn-xs">Xóa</a></td>								
								</tr>
							@endforeach
						</tbody>
					</table>

					<br>
					<div align="right" style="margin-right: 200px;">
						<button type="submit" id="btn" class="btn btn-success">Ghi nhận</button>
					</div>
					@foreach($sub_list as $sub)
						<script type="text/javascript">
							var x = [];	
							$('#t1 tr').each(function(){/* get value in table*/
								var sv_id = parseInt('{{Auth::user()->id}}');
								var sv_name ='{{Auth::user()->name}}';
								var sub_id = parseInt($(this).find("td").eq(1).html());
								var sub_name = $(this).find("td").eq(2).html();
								var shift = parseInt($(this).find("td").eq(3).html());
								var time = $(this).find("td").eq(4).html();
								var room_name = $(this).find("td").eq(5).html();
								var room_id = parseInt($(this).find("td").eq(6).html());
								x.push({sv_id: sv_id, sv_name: sv_name, sub_id: sub_id, sub_name: sub_name, shift: shift, time: time, room_name: room_name, room_id: room_id});
							});
							var select=[];
								
							document.getElementById('{{$sub->sub_id}}').onchange = function(e){
								if(this.checked){
									$(this).closest('tr').css('background-color', '#ffb3b3'); /*change color when select*/
									document.getElementById("{{$sub->sub_id}}").disabled = true; /*disable checkbox button after click*/
									/*get value when click to checkbox*/
									for(i=0; i<x.length; i++){
										if(x[i].sub_id == {{$sub->sub_id}}){
											select.push(x[i]);
											var add = "<tr><td>"
														+  x[i].sub_id + "</td><td>"
														+ x[i].sub_name + "</td><td>" 
														+ x[i].shift + "</td><td>" 
														+ x[i].time + "</td><td>"
														+ x[i].room_name + "</td><td>"
														+ "<input type='button' value='Xóa' id='{{$sub->sub_name}}' class='btn btn-danger btn-xs delete'>"
														+ "</td></tr>";
											/*add row to table*/
											$("#selectedTable tbody").append(add);

											/*del row when select sub but havent submit*/
											$('#selectedTable').on('click', 'input[type="button"]', function(e){
		   										/*if(confirm("Are u sure?")){*/
		   											$(this).closest('tr').remove(); 
		   											document.getElementById("{{$sub->sub_id}}").checked = false;
													$('#{{$sub->sub_id}}').closest('tr').css('background-color', 'white');
													document.getElementById("{{$sub->sub_id}}").disabled = false;
		   										/*}*/						
											});
											/*console.log(x[i]);*/

											/*posting data to server*/
											$('#frm-submit').on('submit', function(e){
												$.ajaxSetup({
													headers: {
							            				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							        				}
												});
												e.preventDefault();
												for(i=0; i<select.length; i++){
													var data = select[i];														
													var url = $(this).attr('action');
													var post = $(this).attr('method');
													$.ajax({
														url: url,
														type: post,
														data: data,
														dataType: "html",
														success:function(){
											            	alert("Đăng kí thành công");
											           	}/*,error:function(){ 
											            	alert("Thất bại");
											        	   }*/
													});
												}
											});
										}
									}
								}
							}									
								
							
							/*destroy row selected sub and submited*/
							
							

							/*change color and block checkbox when regist sub succesfully*/
							@foreach($selected_list as $selected)
								if({{$sub->sub_id}} == {{$selected->sub_id}}){
										document.getElementById("{{$sub->sub_id}}").disabled = true;
										$('#{{$selected->sub_id}}').closest('tr').css('background-color', '#9fff80');
								}
							@endforeach

							
						</script>
					@endforeach

							
							
			

			</form>
				<footer>
					<br>
					<div style="background-color: #ffdddd; border-left: 6px solid #f44336; margin-bottom: 15px; padding: 4px 12px;">
  						<p><strong>Chú ý:</strong>
							<ul style="list-style: none;">
								<li>Ca thi 1: 7:00 am - 9:00 am.</li>
								<li>Ca thi 2: 9:00 am - 11:00 am. </li>
								<li>Ca thi 3: 1:00 pm - 3:00 pm. </li>
								<li>Ca thi 4: 3:00 pm - 5:00 pm. </li>
							</ul>
  						 </p>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>