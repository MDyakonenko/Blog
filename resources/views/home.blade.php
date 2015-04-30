@extends('app')

@section('content')


<main>
	<div id="container2">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<a href="#" title="Презинтація 1" target="_blank"><img src="img/slider/slide-1.jpg" width="570" height="270" alt=""></a>
						<div class="caption" style="bottom:0">
							<p>Презинтація 1</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title="Презинтація 12" target="_blank"><img src="img/slider/slide-2.jpg" width="570" height="270" alt=""></a>
						<div class="caption">
							<p>Презинтація 2</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title="Презинтація 3" target="_blank"><img src="img/slider/slide-3.jpg" width="570" height="270" alt=""></a>
						<div class="caption">
							<p>Презинтація 3</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title="Презинтація 4" target="_blank"><img src="img/slider/slide-4.jpg" width="570" height="270" alt=""></a>
						<div class="caption">
							<p>Презинтація 4</p>
						</div>
					</div>
					<div class="slide">
						<a href="#" title="Презинтація 5" target="_blank"><img src="img/slider/slide-5.jpg" width="570" height="270" alt=""></a>
						<div class="caption">
							<p>Презинтація 5</p>
						</div>
					</div>
				</div>
				<a href="#" class="prev"><img src="img/slider/arrow-prev.png" width="24" height="43" alt="Íàçàä"></a>
				<a href="#" class="next"><img src="img/slider/arrow-next.png" width="24" height="43" alt="Âïåðåä"></a>
			</div>
			<img src="img/slider/example-frame.png" width="739" height="341" alt="Ïðèìåð ôðåéìà" id="frame">
		</div>
	</div>
</main>
@endsection
