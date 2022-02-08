@extends('layout.front')
@section('title', 'Event')

@section('container')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/landingpage">Home</a></li>
      <li>Events</li>
    </ol>
    <h2>Events</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Event Section ======= -->
<section class="light">
	<div class="container">

		<article class="postcard light blue">
			<a class="postcard__img_link" href="https://picsum.photos/1000/1000" data-lightbox="image-1">
				<img class="postcard__img rounded"  src="https://picsum.photos/1000/1000" alt="" />
			</a>
			<div class="postcard__text t-dark" >
				<h1 class="postcard__title blue"><a href="/eventdetail">Webinar Series - IKA UA USA</a> </h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i> Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag ml-2"></i> Webinar</li>
					<li class="tag__item"><i class="fas fa-map-marker-alt ml-2"></i> Zoom Meeting</li>
					
				</ul>
        <a class="btn btn-primary d-flex align-self-start mt-3 text-white" href="/eventdetail" role="button">Details</a>
			</div>
		</article>
		
	</div>
</section>
<!-- ======= Event Section ======= -->

    
@endsection