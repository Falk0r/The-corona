@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url(/uploads/banner_customer_panel.jpg)">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Orders</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                        </ul>				
                    </div>
                </div>
                <div class="col-md-9">				
                    <div class="table-responsive-md">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">Serial</th>
                                    <th scope="col">Order Number</th>
                                    <th scope="col">Paid Amount</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Last Delivery Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>5e98614880783</td>
                                    <td>$80.00</td>
                                    <td><a href="javascript:void;" class="btn btn-success btn-sm">Completed</a></td>
                                    <td>Received</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item" data-toggle="modal" data-target="#modd1"><i class="fa fa-eye"></i> Details</a>
                                            <a href="customer-invoice.php?id=25" class="dropdown-item"><i class="fa fa-life-ring"></i> Invoice</a>
                                        </div>										
                                        <div class="modal fade" id="modd1">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-weight-bold mb_0" id="exampleModalLabel">Order Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="font-weight-bold mb_5">Order Details</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Order Number</td>
                                                                        <td>5e98614880783</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Date Time</td>
                                                                        <td>2020-04-16 13:44:40</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Shipping Cost</td>
                                                                        <td>$0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Coupon Code</td>
                                                                        <td>STRONG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Coupon Discount</td>
                                                                        <td>$10.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Paid Amount</td>
                                                                        <td>$80.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Status</td>
                                                                        <td>                                                                              </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Customer &amp; Payment Gateway Details</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Customer Type</td>
                                                                        <td>Returning Customer</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning w_150">Customer Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Customer Email</td>
                                                                        <td>customer@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Method</td>
                                                                        <td>PayPal</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Billing Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Email</td>
                                                                        <td>arefin2k@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Phone</td>
                                                                        <td>111-222-3333</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Country</td>
                                                                        <td>United States</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Address</td>
                                                                        <td>4706 Romrog Way</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">State</td>
                                                                        <td>NE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">City</td>
                                                                        <td>Kearney</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Zip Code</td>
                                                                        <td>68847</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Shipping Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Email</td>
                                                                        <td>customer@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Phone</td>
                                                                        <td>111-222-3333</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Country</td>
                                                                        <td>United States</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Address</td>
                                                                        <td>4706 Romrog Way</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">State</td>
                                                                        <td>NE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">City</td>
                                                                        <td>Kearney</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Zip Code</td>
                                                                        <td>68847</td>
                                                                    </tr>
                                                                </tbody>
                                                        </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Product Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Product Name</th>
                                                                        <th>Product Price</th>
                                                                        <th>Product Quantity</th>
                                                                        <th>Subtotal</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Dettol Soap</td>
                                                                        <td>$10.00</td>
                                                                        <td>2</td>
                                                                        <td>$20.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Ventilator</td>
                                                                        <td>$70.00</td>
                                                                        <td>1</td>
                                                                        <td>$70.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>5e91f3758dd6e</td>
                                    <td>$16.00</td>
                                    <td>
                                        <a href="javascript:void;" class="btn btn-success btn-sm">Completed</a>
                                    </td>
                                    <td>Received</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="" class="dropdown-item" data-toggle="modal" data-target="#modd2"><i class="fa fa-eye"></i> Details</a>
                                            <a href="customer-invoice.php?id=10" class="dropdown-item"><i class="fa fa-life-ring"></i> Invoice</a>
                                        </div>										
                                        <div class="modal fade" id="modd2">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-weight-bold mb_0" id="exampleModalLabel">Order Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="font-weight-bold mb_5">Order Details</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Order Number</td>
                                                                        <td>5e91f3758dd6e</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Date Time</td>
                                                                        <td>2020-04-11 18:42:29</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Shipping Cost</td>
                                                                        <td>$20.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Coupon Code</td>
                                                                        <td>STRONG</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Coupon Discount</td>
                                                                        <td>$10.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Paid Amount</td>
                                                                        <td>$16.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Status</td>
                                                                        <td><a href="javascript:void;" class="btn btn-success btn-sm">Completed</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Customer &amp; Payment Gateway Details</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Customer Type</td>
                                                                        <td>Returning Customer</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning w_150">Customer Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Customer Email</td>
                                                                        <td>customer@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Payment Method</td>
                                                                        <td>Stripe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Card Number</td>
                                                                        <td>4242424242424242</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Card CVV</td>
                                                                        <td>233</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Expiry Month</td>
                                                                        <td>08</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Expiry Year</td>
                                                                        <td>2020</td>
                                                                    </tr>   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Billing Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Email</td>
                                                                        <td>arefin2k@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Phone</td>
                                                                        <td>111-222-3333</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Country</td>
                                                                        <td>United States</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Address</td>
                                                                        <td>4706 Romrog Way</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">State</td>
                                                                        <td>NE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">City</td>
                                                                        <td>Kearney</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Zip Code</td>
                                                                        <td>68847</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Shipping Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="alert-warning w-200">Name</td>
                                                                        <td>John Doe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Email</td>
                                                                        <td>customer@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Phone</td>
                                                                        <td>111-222-3333</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Country</td>
                                                                        <td>United States</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Address</td>
                                                                        <td>4706 Romrog Way</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">State</td>
                                                                        <td>NE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">City</td>
                                                                        <td>Kearney</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="alert-warning">Zip Code</td>
                                                                        <td>68847</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="font-weight-bold mt_20 mb_5">Product Information</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm w-100-p">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>SL</th>
                                                                        <th>Product Name</th>
                                                                        <th>Product Price</th>
                                                                        <th>Product Quantity</th>
                                                                        <th>Subtotal</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Face Covering Mask</td>
                                                                        <td>$2.00</td>
                                                                        <td>3</td>
                                                                        <td>$6.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection