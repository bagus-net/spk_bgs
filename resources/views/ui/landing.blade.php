@extends('ui/layout')

@section('notifikasi')
<section id="notifikasiSubscribe" class="collapse sticky-top show">
	<div class="container-fluid py-3 px-4 text-center" style="background-color: #404041;">
		<a data-bs-toggle="modal" href="#formSubscribe" role="button" class="text-light">
			Hello. Get 10% OFF* | your first order when you subscribe to our newsletter! | Claim My 10% OFF <i class="bi bi-chevron-right"></i>
		</a>
	</div>
</section>
@endsection

@section('konten')
<!-- HOME BANNER -->
<section class="mb-4">
	<div class="container">
		<div id="homeBanner" class="carousel slide carousel-fade carousel-banner text-bg-dark overflow-hidden" data-bs-ride="carousel">

			<div class="carousel-inner" id="panel-carousel">
				<!-- slider item -->
				<div class="carousel-item active">
					<img src="ui/img/home/banner1m.jpg" class="d-lg-none w-100" alt="...">
					<img src="ui/img/home/banner1d.jpg" class="d-none d-lg-block w-100" alt="...">
					<div class="carousel-caption top-0 h-100 text-start">
						<div class="container h-100">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 px-0">
									<h1 class="caption-title display-4 gotham-bold lh-1 mb-0">Exquisite Indonesian Coffee*</h1>
									{{-- <h3 class="caption-title gotham-thin lh-1 mb-0">ASSORTED CAPSULES</h3>
									<p class="caption-text">Single Origin Collection | Gourmet Collection</p>
									<a href="/coffee" class="btn btn-primary fs-inherit">
										SHOP NOW <i class="bi bi-chevron-right"></i>
									</a> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- slider item -->
				{{-- <div class="carousel-item">
					<img src="ui/img/home/banner2m.jpg" class="d-lg-none w-100" alt="...">
					<img src="ui/img/home/banner2d.jpg" class="d-none d-lg-block w-100" alt="...">
					<div class="carousel-caption top-0 h-100 text-start">
						<div class="container h-100">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 px-0">
									<h1 class="caption-title display-4 gotham-bold lh-1 mb-0">30% OFF*</h1>
									<h3 class="caption-title gotham-thin lh-1 mb-0">ASSORTED CAPSULES</h3>
									<p class="caption-text">Single Origin Collection | Gourmet Collection</p>
									<a href="/coffee" class="btn btn-primary fs-inherit">
										SHOP NOW <i class="bi bi-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!-- slider item -->
				{{-- <div class="carousel-item">
					<img src="ui/img/home/banner3m.jpg" class="d-lg-none w-100" alt="...">
					<img src="ui/img/home/banner3d.jpg" class="d-none d-lg-block w-100" alt="...">
					<div class="carousel-caption top-0 h-100 text-start">
						<div class="container h-100">
							<div class="row h-100 align-items-center">
								<div class="col-lg-6 px-0">
									<h1 class="caption-title display-4 gotham-bold lh-1 mb-0">50% OFF*</h1>
									<h3 class="caption-title gotham-thin lh-1 mb-0">ASSORTED CAPSULES</h3>
									<p class="caption-text">Single Origin Collection | Gourmet Collection</p>
									<a href="/coffee" class="btn btn-primary fs-inherit">
										SHOP NOW <i class="bi bi-chevron-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!-- end of slider item -->
			</div>

			<div class="carousel-indicators position-relative m-0" id="indicator-carousel">
				<button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#homeBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#homeBanner" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#homeBanner" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>

		</div>
	</div>
</section>
<!-- END OF HOME BANNER -->

<!-- HOME PRODUCT -->
<section>
	<div class="container mb-4">
		<!-- navigasi home product -->
		<div class="table-responsive">
			<ul class="nav nav-pills flex-nowrap fw-bold mb-2" id="pills-tab" role="tablist" style="white-space: nowrap;">
				<!-- nav tab recommended -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5 active" id="nav-recommended-tab" data-bs-toggle="pill" data-bs-target="#nav-recommended" type="button" role="tab" aria-controls="nav-recommended" aria-selected="true">
						recommended
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab single origin -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-so-tab" data-bs-toggle="pill" data-bs-target="#nav-so" type="button" role="tab" aria-controls="nav-so" aria-selected="true">
						single origin
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab luwak prestige -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-luwak-tab" data-bs-toggle="pill" data-bs-target="#nav-luwak" type="button" role="tab" aria-controls="nav-luwak">
						luwak prestige
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab organic -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-organic-tab" data-bs-toggle="pill" data-bs-target="#nav-organic" type="button" role="tab" aria-controls="nav-organic">
						organic
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab rainforest -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-rainforest-tab" data-bs-toggle="pill" data-bs-target="#nav-rainforest" type="button" role="tab" aria-controls="nav-rainforest">
						rainforest
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab gourmet -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-gourmet-tab" data-bs-toggle="pill" data-bs-target="#nav-gourmet" type="button" role="tab" aria-controls="nav-gourmet">
						gourmet
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab wprld blend -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-wb-tab" data-bs-toggle="pill" data-bs-target="#nav-wb" type="button" role="tab" aria-controls="nav-wb">
						world blend
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab balicafe -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-bali-tab" data-bs-toggle="pill" data-bs-target="#nav-bali" type="button" role="tab" aria-controls="nav-bali">
						balicafé
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- nav tab bundles -->
				<li class="nav-item" role="presentation">
					<button class="nav-link btn-dot fs-5" id="nav-bundles-tab" data-bs-toggle="pill" data-bs-target="#nav-bundles" type="button" role="tab" aria-controls="nav-bundles">
						bundles
						<span class="dot">&bull;</span>
					</button>
				</li>
				<!-- end of nav tab -->
			</ul>
		</div>
		<!-- end of navigasi home product -->

	</div>

	<!-- home product list -->
	<div class="tab-content" id="pills-tabContent">

		<!-- tab konten recommended (rubah id carousel dan carousel control sesuai tab/ coffee collection) -->
		<div class="tab-pane fade show active" id="nav-recommended" role="tabpanel" aria-labelledby="nav-recommended-tab" tabindex="0">
			<div class="container">


				<!-- copy this section and paste on tabs pane coffee products category -->
				{{-- <div class="swiper mySwiper">
					<div class="swiper-wrapper">

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>
						
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div> --}}


			</div>
		</div>

		<!-- tab konten single origin -->
		<div class="tab-pane fade" id="nav-so" role="tabpanel" aria-labelledby="nav-so-tab" tabindex="0">
			<div class="container">

				<!-- copy this section and paste on tabs pane coffee products category -->
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">

						<!-- slide item -->
						<div class="swiper-slide">
							<div class="card card-product border-0 rounded-0 text-center">
								<div class="card-header position-relative p-0 rounded-0 border-0">
									<a href="/detail-coffee" class="text-text-decoration-none">
										<img src="ui/img/product/produk1.png" class="img-fluid">
										<img src="ui/img/product/produk2.png" class="img-fluid">
									</a>
									<button data-bs-toggle="modal" data-bs-target="#modalAddtocart" class="btn btn-addtocart btn-secondary position-absolute top-0 end-0 m-3 p-2 lh-1 rounded-1 fs-5">
										<i class="bi bi-cart-plus"></i>
									</button>
								</div>
								<div class="card-body text-capitalize px-0 pb-0">
									<div class="cart-title fw-bold lh-sm">sumatra mandheling coffee capsules</div>
									<div class="cart-text my-1">200g</div>
									<div class="harga-produk mb-0">
										<!-- <span class="harga-normal">S$ 7.50</span> -->
										<span class="harga-promo d-flex justify-content-center align-items-center gap-2">
											<span class="harga-setelah-diskon">S$ 6.55</span>
											<span class="harga-awal">S$ 7.50</span>
										</span>
									</div>
								</div>
								<button class="btn border-0 btn-bookmark position-absolute top-0 start-0 fs-3 p-0 ms-3 lh-1 d-none">
									<i class="bi bi-bookmark-fill"></i>
								</button>
								<div class="wobler text-bg-primary position-absolute top-0 start-0 py-1 px-2 small">SAVE 15%</div>
							</div>
						</div>

					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

			</div>
		</div>

		<!-- tab konten luwak prestige -->
		<div class="tab-pane fade" id="nav-luwak" role="tabpanel" aria-labelledby="nav-luwak-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						2
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten organic -->
		<div class="tab-pane fade" id="nav-organic" role="tabpanel" aria-labelledby="nav-organic-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						3
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten rainforest -->
		<div class="tab-pane fade" id="nav-rainforest" role="tabpanel" aria-labelledby="nav-rainforest-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						4
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten gourmet -->
		<div class="tab-pane fade" id="nav-gourmet" role="tabpanel" aria-labelledby="nav-gourmet-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						5
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten world blend -->
		<div class="tab-pane fade" id="nav-wb" role="tabpanel" aria-labelledby="nav-wb-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						6
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten balicafe -->
		<div class="tab-pane fade" id="nav-bali" role="tabpanel" aria-labelledby="nav-bali-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						7
					</div>
				</div>
			</div>
		</div>

		<!-- tab konten bundles -->
		<div class="tab-pane fade" id="nav-bundles" role="tabpanel" aria-labelledby="nav-bundles-tab" tabindex="0">
			<div class="container">
				<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5">
					<div class="col col-product">
						8
					</div>
				</div>
			</div>
		</div>
		<!-- end of tab konten -->

	</div>
	<!-- end of home product list -->
</section>
<!-- END OF HOME PRODUCT -->

<!-- HOME COFFEE FORM -->
<section id="homeCoffeeForm">
	<div class="container">
		<h4 class="gotham-bold mb-3">Coffee Form</h4>

		<div class="table-responsive">
			<div class="baris-coffee-form d-flex gap-3">

				<!-- form beans -->
				<div class="kolom-coffee-form">
					<a href="/coffee">
						<figure class="figure">
							<img src="ui/img/home/home_beans.png" class="figure-img img-fluid rounded">
							<figcaption class="text-center text-dark fw-bold">Coffee Beans</figcaption>
						</figure>
					</a>
				</div>

				<!-- form ground -->
				<div class="kolom-coffee-form">
					<a href="/coffee">
						<figure class="figure">
							<img src="ui/img/home/home_ground.png" class="figure-img img-fluid rounded">
							<figcaption class="text-center text-dark fw-bold">Gound Coffee</figcaption>
						</figure>
					</a>
				</div>

				<!-- form drip -->
				<div class="kolom-coffee-form">
					<a href="/coffee">
						<figure class="figure">
							<img src="ui/img/home/home_drip.png" class="figure-img img-fluid rounded">
							<figcaption class="text-center text-dark fw-bold">Drip Beans</figcaption>
						</figure>
					</a>
				</div>

				<!-- form capsules -->
				<div class="kolom-coffee-form">
					<a href="/coffee">
						<figure class="figure">
							<img src="ui/img/home/home_capsules.png" class="figure-img img-fluid rounded">
							<figcaption class="text-center text-dark fw-bold">Coffee Capsules</figcaption>
						</figure>
					</a>
				</div>

			</div>
		</div>

	</div>
</section>
<!-- END OF HOME COFFEE FORM -->
@endsection

@section('popup')
<!-- POPUP COOKIES -->
<div class="collapse fixed-bottom text-bg-primary show" id="cookies" style="z-index: 2000;">
	<div class="p-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col mb-3 mb-lg-0">
					This website uses cookies to improve functionality and performance. Using cookies should enable the user to use certain functions, share on social networks and edit messages and advertisements. By clicking on the “OK” button, you agree to the use of cookies on this website. For additional information, please see our Privacy Policy
				</div>
				<div class="col-lg-auto">
					<button class="btn btn-outline-light fs-inherit" data-bs-toggle="collapse" data-bs-target="#cookies">
						I Agree
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OF POPUP COOKIES -->

<!-- SUBSCRIBE ON LANDING PAGE -->
<!-- form subscribe -->
<div class="modal fade popup modal-middle" id="formSubscribe" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="formSubscribeLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title opacity-25" id="formSubscribeLabel">Subscribe</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<h1 class="gotham-bold">Hello.<br>Get 10% OFF*</h1>
					<p class="mb-4">Your first order when you subscribe to our newsletter!</p>
					<form>
						<div class="form-floating border-bottom mb-5">
							<input type="email" class="form-control border-0 px-0" id="inputEmail1" placeholder="name@example.com">
							<label for="inputEmail1" class="px-0">Email Address*</label>
						</div>
						<div class="text-center">
							<a data-bs-dismiss="modal" data-bs-toggle="modal" href="#formSignup" class="btn btn-dark w-100 mb-4 w-lg-auto fs-inherit" style="min-width: 50%;">
								CLAIM MY 10% OFF
							</a>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<p class="small">
					Subscribe to receive communications from Supresso about our products and services. By subscribing, you agree to Supresso’s <a href="#" target="_blank" class="text-primary">Privacy Policy</a> and <a href="#" target="_blank" class="text-primary">Terms & Conditions.</a>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end of form subscribe -->

<!-- FORM SIGN-UP FROM SUBSCRIBE WHEN USER DON'T HAVE ACCOUNT -->
<!-- form sign up -->
<div class="modal fade popup modal-middle" id="formSignup" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="formSignupLabel" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title opacity-25" id="formSignupLabel">Sign Up</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<h1 class="gotham-bold">Almost there...</h1>
					<p class="mb-4">Let us learn more about you!</p>
					<form>
						<div class="row">
							<div class="col-12">
								<p class="opacity-50">sgi.webdev@example.com</p>
							</div>
							<div class="col-md-6">
								<div class="form-floating border-bottom mb-4">
									<input type="text" class="form-control border-0 px-0" id="inputFirstName1" placeholder="First Name">
									<label for="inputFirstName1" class="px-0">First Name*</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating border-bottom mb-4">
									<input type="text" class="form-control border-0 px-0" id="inputLastName1" placeholder="Last Name">
									<label for="inputLastName1" class="px-0">Last Name</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group border-bottom mb-4 mb-lg-5 flex-nowrap">
									<div class="form-floating w-100">
										<input type="password" class="form-control border-0 px-0" id="inputPassword1" placeholder="Password">
										<label for="inputPassword1" class="px-0">Password*</label>
									</div>
									<button class="btn border-0 bi bi-eye d-none"></button>
									<button class="btn border-0 bi bi-eye-slash"></button>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group border-bottom mb-5 flex-nowrap">
									<div class="form-floating w-100">
										<input type="password" class="form-control border-0 px-0" id="inputConfirmPassword1" placeholder="Confirm Password">
										<label for="inputConfirmPassword1" class="px-0">Confirm Password*</label>
									</div>
									<button class="btn border-0 bi bi-eye d-none"></button>
									<button class="btn border-0 bi bi-eye-slash"></button>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a data-bs-dismiss="modal" data-bs-toggle="modal" href="#subscribeSuccess" class="btn btn-dark w-100 mb-4 w-lg-auto fs-inherit" style="min-width: 50%;">
								SIGN UP <i class="bi bi-chevron-right"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="approvalJoin">
					<label class="form-check-label small" for="approvalJoin">
						We would like to keep you updated on new products, services and exclusive offers. Please tick below if you DO NOT wish to receive any form of marketing & promotion communication from us.
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of form sign up -->

<!-- pop up confirmation sign up success -->
<div class="modal fade popup modal-middle" id="subscribeSuccess" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="subscribeSuccessLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title opacity-25" id="subscribeSuccessLabel">Subscribe Success</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<h1 class="gotham-bold">Congratulations!</h1>
					<p class="mb-4">
						Your 10% off Coupon Code is in your mailbox.
						<br>Please check your e-mail.
					</p>
					<hr class="my-4 opacity-100">
					<div class="text-center">
						<a data-bs-dismiss="modal" data-bs-toggle="modal" href="#modalSignin" class="btn btn-dark w-100 mb-4 w-lg-auto fs-inherit" style="min-width: 50%;">
							SHOP NOW <i class="bi bi-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- end of pop up confirmation sign up success -->

<!-- FORM SIGN-UP FROM SUBSCRIBE WHEN USER ALREADY HAVE ACCOUNT -->
<!-- sign in to account -->
<div class="modal fade popup modal-middle" id="modalSignin" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true" aria-labelledby="modalSigninLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title opacity-25" id="modalSigninLabel">Subscribe Success</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<h1 class="gotham-bold">Hello.</h1>
					<p class="mb-5">sgi.webdev@example.com</p>
					<p>You’re already one of us! Sign in to your account and enjoy all things #IndonesianCoffee with Supresso.</p>
					<hr class="my-4 opacity-100">
					<div class="text-center">
						<a data-bs-dismiss="modal" class="btn btn-dark w-100 mb-4 w-lg-auto fs-inherit" style="min-width: 50%;">
							SIGN IN <i class="bi bi-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- end of sign in to account -->
@endsection
