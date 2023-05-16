<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
		<div class="container-fluid">
			<div class="d-flex d-lg-none me-2">
				<button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
					<i class="ph-list"></i>
				</button>
			</div>

			<div class="navbar-brand flex-1 flex-lg-0">
				<a href="index.html" class="d-inline-flex align-items-center">
					<img src="https://demo.interface.club/limitless/demo/template/assets/images/logo_icon.svg" alt="">
					<img src="https://demo.interface.club/limitless/demo/template/assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
						<div class="status-indicator-container">
						@if(auth()->user()->img == auth()->user()->img)
							<img src="{{ config('apidomain.url') .'settings/'. auth()->user()->img }}" class="w-32px h-32px rounded-pill" alt="{{ auth()->user()->name }}" />
							<span class="status-indicator bg-success"></span>
						@else
							<img src="{{ auth()->user()->img }}" class="w-32px h-32px rounded-pill" alt="avatar" />
							<span class="status-indicator bg-success"></span>
						@endif
						</div>
						<span class="d-none d-lg-inline-block mx-lg-2">{{ auth()->user()->name }}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						<a href="{{ route('profile') }}" class="dropdown-item">
							<i class="ph-user-circle me-2"></i>
							Profilim
						</a>
						<a href="{{ route('logout') }}" class="dropdown-item">
							<i class="ph-sign-out me-2"></i>
							Çıxış
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->