@extends('layout.app')

@section('content')
	<div class="top" style="margin-top:20vh">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Cari Instasi</h2>
						<div>Temukan informasi mengenai nama instansi, nomor instansi, alamat dan lain-lain yang disortir dengan nama kabupaten</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Find Form -->

	<div class="find" id="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background parallax-window" data-parallax="scroll" data-image-src="{{asset('template/images/find.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Pilih nama Kabupaten</div>
				</div>
				<div class="col-md-6 offset-md-3">
					<div class="find_form_container">
						<form action="{{url('/fi')}}" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="col-md-8 find_item mb-0">
								<div>Nama Kabupaten:</div>
								<select name="kab" id="kab" required class="dropdown_item_select find_input">
									<option value="kp">Kabupaten Purwakarta</option>
									<option value="kb">Kota Bandung</option>
									<option value="kjb">Kota Jakarta Barat</option>
                  <option value="kjt">Kota Jakarta Timur</option>
                  <option value="kju">Kota Jakarta Utara</option>
                  <option value="kjs">Kota Jakarta Selatan</option>
								</select>
							</div>
							<button class="col-md-4 button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection