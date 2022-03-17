@extends('layout.front')
@section('title', 'Partners')
@section('container')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/landingpage">Home</a></li>
        <li>Partners</li>
      </ol>
      <h2>Partners</h2>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Company Section ======= -->
  <section id="partner" class="partner">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8 entries">
          @foreach ($partners as $partner)
          <img src="{{ $partner->img }}" alt="">
              
          @endforeach
          <article class="entry">
            <div class="entry-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="/singlepartner">Telkomsel</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
              </p>
              <div class="read-more">
                <a href="/singlepartner">Read More</a>
              </div>
            </div>

          </article>

          <!-- End company entry -->

          <div class="partner-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>

        </div><!-- End company entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Partners</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                <h4><a href="blog-single.html">Telomsel</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                <h4><a href="blog-single.html">Gojek</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                <h4><a href="blog-single.html">Tokopedia</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                <h4><a href="blog-single.html">Astra</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                <h4><a href="blog-single.html">Indochito</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div>
            <!-- End sidebar company-->

          </div>
          <!-- End sidebar -->

        </div>
        <!-- End company sidebar -->

      </div>

    </div>
  </section>
  <!-- End Company Section -->

</main>
<!-- End #main -->
@endsection