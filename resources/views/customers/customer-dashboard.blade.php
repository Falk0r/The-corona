@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url(/uploads/banner_customer_panel.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>Dashboard</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
		  	</ol>
		</nav>
	</div>
</div>
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">				
				<div class="user-sidebar">
					<ul>
	<li><a href="/customer-dashboard" class="btn btn-md btn-block btn-dark">Dashboard</a></li>
	<li><a href="/customer-order" class="btn btn-md btn-block btn-dark">Orders</a></li>
	<li><a href="/customer-delivery-track" class="btn btn-md btn-block btn-dark">Delivery Track</a></li>
	<li><a href="/customer-edit-profile" class="btn btn-md btn-block btn-dark">Edit Profile</a></li>
	<li><a href="/customer-edit-password" class="btn btn-md btn-block btn-dark">Edit Password</a></li>
	<li><a href="/logout" class="btn btn-md btn-block btn-dark">Logout</a></li>
</ul>				</div>
			</div>
						<div class="col-md-9">
				<div class="row dashboard-stat">
					<div class="col-md-6 dashboard-stat-item">
                        <div class="bg-info p_20 pt_30 pb_30 text-center text-white">
                            <div class="text">Completed Orders</div>
                            <div class="total">2</div>
                        </div>
					</div>
					<div class="col-md-6 dashboard-stat-item">
                        <div class="bg-info p_20 pt_30 pb_30 text-center text-white">
                            <div class="text">Pending Orders</div>
                            <div class="total">0</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection