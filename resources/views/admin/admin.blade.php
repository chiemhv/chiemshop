<!DOCTYPE html>
<html>
<head>
	<title>Business Operations Center</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/admin/admin.css')}}">
</head>
<body>
<div class="container">
	<div class="row" id="menu-header" class="bg-info">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		     <a class="navbar-brand" href="#">Business Operations Center</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="#">Lịch trực online</a></li>
		        <li><a href="#">Thông báo</a></li>
		        <li><a href="#">Kế hoạch kinh doanh</a></li>
		        <li><a href="#">Thông tin nhân viên</a></li>
		        <li><a href="#">CHÀO ADMIN :{{ Auth::user()->name }}</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	</div>
<!-- PHAN THAN -->
<div class="container" id="c_phanthan">
	<div id="c_menu_bar">
		<div id="area_menu">
			<ul>
			  <li><a href="#">MÀN HÌNH ĐIỀU HÀNH</a></li>
			</ul>
			<label>BÁN HÀNG</label>
			<ul>
			  <li><a href="#">Đơn hàng</a></li>
			  <li><a href="#">Doanh Số</a></li>
			  <li><a href="#">Lợi nhuận</a></li>
			</ul>
	 		<label>NGƯỜI DÙNG</label>
	 		<ul>
			  <li><a href="#">Admin</a></li>
			  <li><a href="{{URL::to('admin/man')}}">Khách hàng</a></li>
			  <li><a href="#">Bình Luận</a></li>
			  <li><a href="#">Tin nhắn</a></li>
			</ul>
			<label>KHO HÀNG</label>
			<ul>
			  <li><a href="{{URL::to('admin/fx')}}">FX</a></li>
			  <li><a href="{{URL::to('admin/catalog')}}">Catalog</a></li>
			  <li><a href="{{URL::to('admin/producer')}}">Producer</a></li>
			  <li><a href="{{URL::to('admin/product')}}">Product</a></li>
			  <li><a href="{{URL::to('admin/product/sale')}}">Sản phẩm khuyến mãi</a> </li>
			</ul>
			<label>MEDIA</label>
			<ul>
			  <li><a href="#">Image</a></li>
			  <li><a href="#">Producer</a></li>
			  <li><a href="#">Product</a></li>
			  <li><a href="#">Sản phẩm khuyến mãi</a> </li>
			</ul>
		</div>
	</div>
	<div id="c_content">
	    @yield('content_admin')
	</div>
</div>
<div class="container">
 	<div class="row" id="admin_footer">
 		LIÊN HỆ HOTLINE : 0989.686.392 / 0942100362  -- CODE BY : HÀ CHIÊM PTIT
 	</div>
</div>
</body>
</html>


