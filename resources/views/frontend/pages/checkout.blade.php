@extends('frontend.layouts.master')

@section('title','Lapakemane | Checkout')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Beranda<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Checkout barangmu disini</h2>
                                <p>Silakan lengkapi data dibawah ini!</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama depan<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}" required>
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nama belakang<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}" required>
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}" required>
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Telepon <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}" required>
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Provinsi<span>*</span></label>
                                            <select name="country" id="country" required>
                                                <option value="Aceh">Aceh</option>
                                                <option value="Bali">Bali</option>
                                                <option value="Bangka Belitung">Bangka Belitung</option>
                                                <option value="Banten">Banten</option>
                                                <option value="Bengkulu">Bengkulu</option>
                                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                <option value="DKI Jakarta">DKI Jakarta</option>
                                                <option value="Gorontalo">Gorontalo</option>
                                                <option value="Jambi">Jambi</option>
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="Jawa Tengah">Jawa Tengah</option>
                                                <option value="Jawa Timur">Jawa Timur</option>
                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                <option value="Lampung">Lampung</option>
                                                <option value="Maluku">Maluku</option>
                                                <option value="Maluku Utara">Maluku Utara</option>
                                                <option value="Nanggroe Aceh Darussalam (NAD)">Nanggroe Aceh Darussalam (NAD)</option>
                                                <option value="Nusa Tenggara Barat (NTB)">Nusa Tenggara Barat (NTB)</option>
                                                <option value="Nusa Tenggara Timur (NTT)">Nusa Tenggara Timur (NTT)</option>
                                                <option value="Papua">Papua</option>
                                                <option value="Papua Barat">Papua Barat</option>
                                                <option value="Riau">Riau</option>
                                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                <option value="Sumatera Barat">Sumatera Barat</option>
                                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                <option value="Sumatera Utara">Sumatera Utara</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kota<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}" required>
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Alamat<span>*</span></label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}" required>
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Kode pos<span>*</span></label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="bukti">Upload Bukti Transaksi</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a id="lfm-admin" data-input="bukti" data-preview="holder" class="btn btn-primary" style="color: white">
                                                <i class="fa fa-picture-o" style="color: white"></i> Pilih Gambar
                                                </a>
                                            </span>
                                            <input id="bukti" class="form-control" type="text" name="bukti" required>
                                        </div>
                                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                                
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>TOTAL KERANJANG</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Subtotal Keranjang<span>Rp {{number_format(Helper::totalCartPrice(),0, ',', '.')}}</span></li>
                                            <li class="shipping">
                                                Ongkos kirim
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select" required>
                                                        <option value="">Pilih alamatmu</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: Rp {{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Gratis</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>Rp {{number_format(session('coupon')['value'],0, ',', '.')}}</span></li>
                                            @endif
                                            @php
                                                session_start();
                                                $total_amount = Helper::totalCartPrice();
                                            //     if(session()->has('coupon')){
                                            //         $total_amount = $total_amount - session('coupon')['value'];
                                            //     }
                                            //     $random_discount = str_pad(mt_rand(1, 100), 3, '7', STR_PAD_LEFT);
                                            //     $_SESSION['random_discount'] = $random_discount;
                                            //     if (isset($_SESSION['random_discount'])) {
                                            //     $random_discount = $_SESSION['random_discount'];
                                            // } else {
                                            //     $random_discount = 0;
                                            // }
                                            //     $total_amount += $random_discount / 1;
                                                
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>Rp {{number_format($total_amount,0, ',', '.')}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>Rp {{number_format($total_amount,0, ',', '.')}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>PEMBAYARAN</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label>Transfer Bank</label><br>
                                                <input name="payment_method"  type="radio" value="cod1"> <label>QRIS</label> 
                                                <div class="single-widget payement">
                                                    <div class="content">
                                                        <img id="qrisImage" src="{{ asset('images/qris.jpg') }}" alt="#" style="display: none;">
                                                        <p id="bankTransferText" style="display: none;">Bank Jateng 3028351975 an Lapakemane</p>
                                                    </div>
                                                </div>
                                                
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">PROSES KE CHECKOUT</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Pengiriman cepat</h4>
						<p>Seluruh Indonesia</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Pengembalian Gratis</h4>
						<p>1 minggu garansi</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Transaksi aman</h4>
						<p>100% transaksi terjamin</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Harga terbaik</h4>
						<p>Terjangkau harganya</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    {{-- <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#e40614 !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquesry.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
                var random_discount = Math.floor(Math.random() * 100); // Menambahkan diskon acak antara 0 hingga 100

				// alert(coupon);
				$('#order_total_price span').text('Rp ' + new Intl.NumberFormat('id-ID').format(subtotal + cost - coupon + random_discount));


			});

		});

	</script>
    <script>
        $(document).ready(function() {
            // Ketika pilihan pembayaran berubah
            $('input[name="payment_method"]').change(function() {
                var paymentMethod = $(this).val();
                
                // Sembunyikan teks dan gambar secara default
                $('#qrisImage').hide();
                $('#bankTransferText').hide();
                
                if (paymentMethod === 'cod') { // Transfer Bank
                    // Tampilkan teks untuk Transfer Bank
                    $('#bankTransferText').show();
                } else if (paymentMethod === 'cod1') { // QRIS
                    // Tampilkan gambar QRIS
                    $('#qrisImage').show();
                }
            });
            
        });
    </script>
    <script>
        $('#lfm-admin').filemanager('image');
    </script>
    
    

@endpush