<aside id="sidebar" class="sidebar">
	<ul class="sidebar-nav" id="sidebar-nav">
		<li class="nav-item">
			<a class="nav-link " href="{{route('dashboard.index')}}"><i class="fas fa-chart-bar"></i><span>Inicio</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#placas" data-bs-toggle="collapse" href="#">
				<i class="fab fa-opencart"></i><span>Placas</span><i class="fas fa-chevron-down arrows ms-auto"></i>
			</a>
			<ul id="placas" class="nav-content collapse" data-bs-parent="#sidebar-nav">
				@foreach($insurences as $index => $insurence)
				<li>
					<a href="{{route('plate_car.generate', ['insurence' => $index])}}">
						<i class="fas fa-circle"></i><span>{{$insurence->name}}</span>
					</a>
				</li>
				@endforeach
			</ul>
		</li>
	</ul>
</aside>