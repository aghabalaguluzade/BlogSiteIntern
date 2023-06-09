<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
			<!-- Sidebar content -->
			<div class="sidebar-content">
				<!-- Sidebar header -->
				<div class="sidebar-section">
					<div class="sidebar-section-body d-flex justify-content-center">
						<h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>
						<div>
							<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
								<i class="ph-arrows-left-right"></i>
							</button>

							<button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
								<i class="ph-x"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- /sidebar header -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						
						<li class="nav-item">
							<a href="{{ route('home') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
								<i class="ph-house"></i>
								<span>
									Əsas səhifə
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{ route('categories.index') }}" class="nav-link {{ (request()->segment(2) == 'categories') ? 'active' : '' }}">
								<i class="ph-article"></i>
								<span>
									Kateqoriya
								</span>
							</a>	
						</li>
						
						<li class="nav-item">
							<a href="{{ route('tags.index') }}" class="nav-link {{ (request()->segment(2) == 'tags') ? 'active' : '' }}">
								<i class="ph-article"></i>
								<span>
									Taq
								</span>
							</a>	
						</li>

						<li class="nav-item">
							<a href="{{ route('blogs.index') }}" class="nav-link {{ (request()->segment(2) == 'blogs') ? 'active' : '' }}">
								<i class="ph-article"></i>
								<span>
									Bloq
								</span>
							</a>	
						</li>

						<li class="nav-item">
							<a href="{{ route('settings.index') }}" class="nav-link {{ (request()->segment(2) == 'settings') ? 'active' : '' }}">
								<i class="ph-gear"></i>
								<span>
									Tənzimləmələr
								</span>
							</a>	
						</li>

						<li class="nav-item">
							<a href="{{ route('contactMe') }}" class="nav-link {{ (request()->segment(2) == 'contact-me') ? 'active' : '' }}">
								<i class="ph-gear"></i>
								<span>
									Əlaqə
								</span>
							</a>	
						</li>

						<li class="nav-item">
							<a href="{{ route('about') }}" class="nav-link {{ (request()->segment(2) == 'about') ? 'active' : '' }}">
								<i class="ph-gear"></i>
								<span>
									Haqqında
								</span>
							</a>	
						</li>

					</ul>
				</div>
				<!-- /main navigation -->
			</div>
			<!-- /sidebar content -->
		</div>
		<!-- /main sidebar -->