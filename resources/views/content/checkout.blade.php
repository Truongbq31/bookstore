@extends('templates.layout')
@section('content')
<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid checkout-content">
       <div class="row">
          <div id="cart" class="card-block show p-0 col-12">
             <div class="row align-item-center">
                <div class="col-lg-8">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                         <div class="iq-header-title">
                            <h4 class="card-title">Shopping Cart</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">

                        <ul class="list-inline p-0 m-0">
                            @foreach ($cart->getItems() as $key => $value )
                            <li class="checkout-product">
                                <div class="row align-items-center">
                                    <div class="col-sm-2">
                                        <span class="checkout-product-img">
                                        <a href="javascript:void();"><img class="img-fluid rounded" src="{{ $value['image'] ? ''.Storage::url($value['image']) : '' }}" alt=""></a>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="checkout-product-details">
                                            <h5>{{ $value['product_name'] }}</h5>
                                            <p class="text-success">In stock</p>
                                            <div class="price">
                                            <h5>{{ number_format($value['price']) }} đ</h5>
                                            <input type="number" hidden id="price" value="{{ $value['price'] }}">
                                            <input type="text" hidden id="productID" value="{{ $key }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-10">
                                            <div class="row align-items-center mt-2">
                                                <div class="col-sm-7 col-md-6">
                                                    <button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button>
                                                    <input type="text" id="quantity" value="{{ $value['quantity'] }}">
                                                    <button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button>
                                                </div>
                                                <div class="col-sm-5 col-md-6">
                                                    <h5 id="totalPrice" class="product-price">{{ number_format($value['quantity'] * $value['price']) }} đ</h5>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="javascript:" id="cart_remove" onclick="remove({{ $key }})" class="btn text-dark font-size-20"><i class="ri-delete-bin-7-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <p>Options</p>
                         <div class="d-flex justify-content-between">
                            <span>Coupons</span>
                            <span><a href="#"><strong>Apply</strong></a></span>
                         </div>
                         <hr>
                         <p><b>Price Details</b></p>
                         <div class="d-flex justify-content-between mb-1">
                            {{-- <span>Total MRP</span> --}}
                            {{-- <span>{{ number_format($cart->getTotalPrice()) }}</span> --}}
                         </div>
                         {{-- <div class="d-flex justify-content-between mb-1">
                            <span>Bag Discount</span>
                            <span class="text-success">-20$</span>
                         </div> --}}
                         {{-- <div class="d-flex justify-content-between mb-1">
                            <span>Estimated Tax</span>
                            <span>$15</span>
                         </div> --}}
                         <div class="d-flex justify-content-between mb-1">
                            <span>EMI Eligibility</span>
                            <span><a href="#">Details</a></span>
                         </div>
                         <div class="d-flex justify-content-between">
                            <span>Delivery Charges</span>
                            <span class="text-success">Free</span>
                         </div>
                         <hr>
                         <div class="d-flex justify-content-between">
                            <span class="text-dark"><strong>Total</strong></span>
                            <span class="text-dark"><strong>{{ number_format($cart->getTotalPrice()) }} VNĐ</strong></span>
                         </div>
                         <div {{ Auth::user() ? '' : "hidden" }}>
                            <a id="place-order" href="javascript:void();" class="btn btn-primary d-block mt-3 next">Place order</a>
                         </div>
                         <div {{ Auth::user() ? 'hidden' : '' }}>
                            <a href="{{ route('login') }}" class="btn btn-primary d-block mt-3 next">Please log in to make a purchase</a>
                         </div>
                      </div>
                   </div>
                   <div class="iq-card ">
                      <div class="card-body iq-card-body p-0 iq-checkout-policy">
                         <ul class="p-0 m-0">
                            <li class="d-flex align-items-center">
                               <div class="iq-checkout-icon">
                                  <i class="ri-checkbox-line"></i>
                               </div>
                               <h6>Security policy (Safe and Secure Payment.)</h6>
                            </li>
                            <li class="d-flex align-items-center">
                               <div class="iq-checkout-icon">
                                  <i class="ri-truck-line"></i>
                               </div>
                               <h6>Delivery policy (Home Delivery.)</h6>
                            </li>
                            <li class="d-flex align-items-center">
                               <div class="iq-checkout-icon">
                                  <i class="ri-arrow-go-back-line"></i>
                               </div>
                               <h6>Return policy (Easy Retyrn.)</h6>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div id="address" class="card-block p-0 col-12">
             <div class="row align-item-center">
                <div class="col-lg-12">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Add Address</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <form onsubmit="required()">
                            <div class="row mt-3">
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Full Name: *</label>
                                     <input value="{{ Auth::user() ? Auth::user()->full_name : '' }}" type="text" class="form-control" name="fname" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Mobile Number: *</label>
                                     <input type="text" class="form-control" name="mno" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Flat, House No: *</label>
                                     <input type="text" class="form-control" name="houseno" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Landmark e.g. near apollo hospital:: *</label>
                                     <input type="text" class="form-control" name="landmark" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Town/City: *</label>
                                     <input type="text" class="form-control" name="city" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Pincode: *</label>
                                     <input type="text" class="form-control" name="pincode" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>State: *</label>
                                     <input type="text" class="form-control" name="state" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label for="addtype">Address Type</label>
                                     <select class="form-control" id="addtype">
                                        <option>Home</option>
                                        <option>Office</option>
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <button id="savenddeliver" type="submit" class="btn btn-primary">Continue</button>
                               </div>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div id="payment" class="card-block p-0 col-12">
             <div class="row align-item-center">
                <div class="col-lg-8">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Payment Options</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                               <img src="images/booking/cart.png" alt="" height="40" width="50">
                               <span>US Unlocked Debit Card 12XX XXXX XXXX 0000</span>
                            </div>
                            <span>Nik John</span>
                            <span>28/2020</span>
                         </div>
                         <form class="mt-3">
                            <div class="d-flex align-items-center">
                               <span>Enter CVV: </span>
                               <div class="cvv-input ml-3 mr-3">
                                  <input type="text" class="form-control" required="">
                               </div>
                               <button type="submit" class="btn btn-primary">Continue</button>
                            </div>
                         </form>
                         <hr>
                         <div class="card-lists">
                            <div class="form-group">
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="credit" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="credit"> Credit / Debit / ATM Card</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="netbaking" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="netbaking"> Net Banking</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="emi" name="emi" class="custom-control-input">
                                  <label class="custom-control-label" for="emi"> EMI (Easy Installment)</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="cod" name="cod" class="custom-control-input">
                                  <label class="custom-control-label" for="cod"> Cash On Delivery</label>
                               </div>
                            </div>
                         </div>
                         <hr>
                         <div class="add-card">
                            <a href="#"><span><i class="ri-add-box-line mr-2 font-size-18"></i>Add Gift Card</span></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <h4 class="mb-2">Price Details</h4>
                         <div class="d-flex justify-content-between">
                            <span>Price 3 Items</span>
                            <span><strong>$1000.00</strong></span>
                         </div>
                         <div class="d-flex justify-content-between">
                            <span>Delivery Charges</span>
                            <span class="text-success">Free</span>
                         </div>
                         <hr>
                         <div class="d-flex justify-content-between">
                            <span>Amount Payable</span>
                            <span><strong>$1000.00</strong></span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection

@section('script')
<script type="text/javascript">
    function remove(id){
        $.ajax({
            url: "{{ route('Cart.remove') }}",
            method: "DELETE",
            data: {
                _token: "{{ csrf_token() }}",
                id: id
            },
            success: function(response){
                console.log(response);
                alertify.success('Xóa sản phẩm thành công');
                window.location.reload();
            }
        })
    }

    $("#btn-plus").click(function(e){
        e.preventDefault()
        var productID = $("#productID").val();
        var quantity = $("#quantity").val();
        var price = $("#price").val()
        var toltalPrice = (price * (++quantity))
        $("#totalPrice").html(toltalPrice + ' đ')

        $.ajax({
            url: "{{ route('Cart.update') }}",
            method: "patch",
            data: {
                _token: "{{ csrf_token() }}",
                id: productID,
                quantity: quantity
            },
            success: function(response){
                // console.log(response);
                window.location.reload()
            }
        })
    });

    $("#btn-minus").click(function(e){
        e.preventDefault()
        var productID = $("#productID").val();

        var quantity = $("#quantity").val();
        var price = $("#price").val()
        var toltalPrice = (price * (--quantity))
        $("#totalPrice").html(toltalPrice + ' đ')

        $.ajax({
            url: "{{ route('Cart.update') }}",
            method: "patch",
            data: {
                _token: "{{ csrf_token() }}",
                id: productID,
                quantity: quantity
            },
            success: function(response){
                // console.log(response);
                window.location.reload()
            }
        })
    })
</script>
@endsection
