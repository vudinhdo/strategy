@extends('layouts.layout')
@section('title', 'Detail')
@section('contents')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
    <div class="container position-relative">
      <h1>chi tiết {{ $image->name }}</h1>
      <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
      molestias.</p>
      <nav class="breadcrumbs">
      <ol>
        <li><a href="/">Trang chủ</a></li>
        <li class="current">{{ $image->name }}</li>
      </ol>
      </nav>
    </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="portfolio-details-media">
        <div class="main-image">
          <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 1000,
              "autoplay": {
              "delay": 6000
              },
              "effect": "creative",
              "creativeEffect": {
              "prev": {
                "shadow": true,
                "translate": [0, 0, -400]
              },
              "next": {
                "translate": ["100%", 0, 0]
              }
              },
              "slidesPerView": 1,
              "navigation": {
              "nextEl": ".swiper-button-next",
              "prevEl": ".swiper-button-prev"
              }
            }
            </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid">
            </div>
            <div class="swiper-slide">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid">
            </div>
            <div class="swiper-slide">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          </div>
        </div>

        <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
          <div class="row g-2 mt-3">
          <div class="col-3">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid glightbox">
          </div>
          <div class="col-3">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid glightbox">
          </div>
          <div class="col-3">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid glightbox">
          </div>
          <div class="col-3">
            <img src="{{ asset($image->image) }}" alt="{{ $image->name }}" class="img-fluid glightbox">
          </div>
          </div>
        </div>

        
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <div class="portfolio-details-content">
        <div class="project-meta">
          <div class="badge-wrapper">
          <span class="project-badge">{{ $image->tag->name }}</span>
          </div>
          <div class="date-client">
          <div class="meta-item">
            <i class="bi bi-calendar-check"></i>
            <span>September 2024</span>
          </div>
          <div class="meta-item">
            <i class="bi bi-buildings"></i>
            <span>DigitalCraft Solutions</span>
          </div>
          </div>
        </div>

        <h2 class="project-title">{{ $image->name }}</h2>

       

        <div class="project-overview">
          <p class="lead">
          
          </p>

          <div class="accordion project-accordion" id="portfolio-details-projectAccordion">
          <div class="accordion-item" data-aos="fade-up">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#portfolio-details-collapse-1" aria-expanded="true" aria-controls="collapseOne">
              <i class="bi bi-clipboard-data me-2"></i> Giới thiệu
            </button>
            </h2>
            <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show"
            data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>{{ $image->description }}.</p>
            </div>
            </div>
          </div>

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#portfolio-details-collapse-2" aria-expanded="false" aria-controls="collapseTwo">
              <i class="bi bi-exclamation-diamond me-2"></i> The Challenge
            </button>
            </h2>
            <div id="portfolio-details-collapse-2" class="accordion-collapse collapse"
            data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
              porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa,
              convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh.</p>
            </div>
            </div>
          </div>

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#portfolio-details-collapse-3" aria-expanded="false"
              aria-controls="collapseThree">
              <i class="bi bi-award me-2"></i> The Solution
            </button>
            </h2>
            <div id="portfolio-details-collapse-3" class="accordion-collapse collapse"
            data-bs-parent="#portfolio-details-projectAccordion">
            <div class="accordion-body">
              <p>Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor
              at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
            </div>
            </div>
          </div>
          </div>
        </div>

        

        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="btn-view-project">View Live Project</a>
          <a href="#" class="btn-next-project">Next Project <i class="bi bi-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>

    </div>

    </section><!-- /Portfolio Details Section -->

  </main>
@endsection