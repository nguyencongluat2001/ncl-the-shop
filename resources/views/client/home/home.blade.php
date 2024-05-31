  @extends('client.layouts.index')
  @section('body-client')

      <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <!-- <div class="bg-home">
          <video playsinline autoplay muted loop>
              <source src="polina.webm" type="video/webm">
              <source src="https://videos.pexels.com/video-files/8306452/8306452-uhd_4096_2160_25fps.mp4" type="video/mp4">
              <source src="https://videos.pexels.com/video-files/7568747/7568747-hd_1920_1080_25fps.mp4" type="video/mp4">
              <source src="../assets/video/video_background.mp4" type="video/mp4">
          </video>
      </div> -->

      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h1>Chào mừng đến với <br><span>The Light</span></h1>
            <h2>Mua sắm thả ga, không lo về giá!</h2>

            <div class="btns">
              <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
              <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
          </div>

        </div>
      </div>
    </section><!-- End Hero -->
      <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

    <div class="row">
          <div class=" collection main-container">
            <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
              <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{url('/clients/assets/img/FSTP003.jpg')}}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right">
                    <i class="fas fa-cart-plus"></i> Thời trang nam<i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{url('/clients/assets/img/FSTP004.jpg')}}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right">
                    <i class="fas fa-cart-plus"></i> Thời trang nữ <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div><div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{url('/clients/assets/img/FSTP005.jpg')}}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right">
                    <i class="fas fa-cart-plus"></i> Dồ thể thao <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div><div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{url('/clients/assets/img/FSTP006.jpg')}}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right">
                    <i class="fas fa-cart-plus"></i> Thời trang trẻ em <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gian hàng</h2>
        <p>Sản phẩm bán chạy</p>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-12 sidebar sidebar-left d-none d-lg-block">
            <div class="filter-wrapper sticky-sidebar">
              <div class="filter-current">
                <div class="widget-title">
                  <div class="filter-subtitle">
                    <h1>Bộ lọc</h1></div>
                </div>
              </div>
              <div class="filter-content">
                <div class="widget-title">Danh mục sản phẩm</div>
                <ul class="category-list">
                  <li><a href="#">Sale</a></li>
                  <li><a href="#">Áo Nam</a></li>
                  <li><a href="#">Quần Nam</a></li>
                  <li><a href="#">Đồ Thể Thao</a></li>
                  <li><a href="#">Bộ Sưu Tập</a></li>
                  <li><a href="#">Hệ Thống Cửa Hàng</a></li>
                </ul>
                <div class="widget-title">Khoảng giá</div>
                <div class="price-slider">
                  <input type="range" min="0" max="30000000" value="15000000" class="slider" id="priceRange">
          
                </div>
                <div class="widget-title ">Màu sắc</div>
                <ul class="color-list d-flex justify-content-between ">
                  <li><span class="color-swatch" style="background-color: #000;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #fff;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #f00;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #00f;"></span> </li>
                  <li><span class="color-swatch" style="background-color: #ff0;"></span> </li>
                </ul>
                <div class="widget-title">Size</div>
                <ul class="size-list d-flex justify-content-between">
                  <li><a href="#">S</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">XL</a></li>
                  <li><a href="#">XXL</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="toolbar-products d-block d-lg-none col-12">
            <div class="head-title d-flex flex-row ">
              <h1 class="title">Sản phẩm khuyến mãi</h1>
              <div class="product-count ">
                <div class="count">
                  <b>14</b> sản phẩm
                </div>
              </div>
            </div>
            
            <div class="d-flex justify-content-between "> 
              <div class="product-filter-mb border border-dark d-flex flex-row">
                <p class="m-3">Bộ lọc</p>
                <svg class="m-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 459 459">
                <path d="M178.5,382.5h102v-51h-102V382.5z M0,76.5v51h459v-51H0z M76.5,255h306v-51h-306V255z"> </path> </svg>
              </div>

              <div class="product-sort">
                <label class="title">Sắp xếp theo</label>
                <div class="border border-dark">
                  <span class="text">Sản phẩm nổi bật</span>
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 128 128">
                      <path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-12 col-12 collection main-container">
            <div class="row" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
            
            @foreach ($datas as $key => $data)

              <div class="col-lg-3 col-md-6 col-sm-6 col-6 mb-4 product-hover" style="padding-right: 0px !important;padding-left: 0px !important;margin-top: 0px !important">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pro-sale">
                    <span style="font-size: 13px !important;color: white; font-weight: 600;font-family: 'Quicksand', sans-serif;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="5" height="13" viewBox="0 0 512.002 512.002">
                        <g>
                          <path d="m201.498 512.002c-1.992 0-4.008-.398-5.934-1.229-6.741-2.907-10.387-10.266-8.617-17.39l50.724-204.178h-136.67c-4.947 0-9.576-2.439-12.373-6.52s-3.402-9.278-1.617-13.892l100.262-259.204c2.235-5.779 7.793-9.589 13.989-9.589h137.961c5.069 0 9.795 2.56 12.565 6.806 2.768 4.246 3.206 9.603 1.162 14.242l-59.369 134.76h117.42c5.486 0 10.534 2.995 13.164 7.81 2.63 4.814 2.422 10.68-.543 15.296l-209.496 326.192c-2.833 4.412-7.651 6.896-12.628 6.896z" fill="#ffffff" data-original="#000000"></path>
                        </g>
                      </svg>-22%
                    </span>
                  </div>
                  <img src="{{url('/file-image-client/product/')}}/{{ !empty($data['image'])?$data['image']:'' }}" class="img-thumbnail" alt="Product Image">
                  <div class="pro-add-icon-right" style="cursor: pointer;">
                    <i class="fas fa-cart-plus"></i> Thêm vào giỏ <i class="fas fa-arrow-right"></i>
                  </div>
                  <div class="proloop-detail">
                    <div class="proloop-variant">
                      <div class="vrt-option vrt1">+13 Màu sắc</div>
                      <div class="vrt-option vrt2">+4 Kích thước</div>
                    </div>
                  </div>
                  <h3 class="proloop-title">
                    <a style="color:#333333" href="/products/ao-t-shirt-tron-in-logo-nguc-8-fsts001" data-handle="/products/ao-t-shirt-tron-in-logo-nguc-8-fsts001">Áo T shirt trơn in logo ngực FSTS001</a>
                  </h3>
                  <div class="price">
                    <div class="price_1">149,000₫</div>
                    <div class="price_2">200,000₫</div>
                  </div>
                </div>
              </div>

            @endforeach
             

            </div>  
          </div>
        
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-starters">Starters</li>
            <li data-filter=".filter-salads">Salads</li>
            <li data-filter=".filter-specialty">Specialty</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../clients/assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Bisque</a><span>$5.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../clients/assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Bread Barrel</a><span>$6.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../clients/assets/img/menu/cake.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Crab Cake</a><span>$7.95</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="../clients/assets/img/menu/caesar.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Caesar Selections</a><span>$8.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../clients/assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Tuscan Grilled</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="../clients/assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Mozzarella Stick</a><span>$4.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="../clients/assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="../clients/assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Spinach Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="../clients/assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Roll</a><span>$12.95</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Specials Section ======= -->
  <section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Architecto ut aperiam autem id</h3>
                  <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../clients/assets/img/specials-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Et blanditiis nemo veritatis excepturi</h3>
                  <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../clients/assets/img/specials-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                  <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                  <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../clients/assets/img/specials-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                  <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                  <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../clients/assets/img/specials-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                  <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../clients/assets/img/specials-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Specials Section -->

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Events</h2>
        <p>Organize Your Events in our Restaurant</p>
      </div>

      <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../clients/assets/img/event-birthday.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Birthday Parties</h3>
                <div class="price">
                  <p><span>$189</span></p>
                </div>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../clients/assets/img/event-private.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Private Parties</h3>
                <div class="price">
                  <p><span>$290</span></p>
                </div>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="../clients/assets/img/event-custom.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Custom Parties</h3>
                <div class="price">
                  <p><span>$99</span></p>
                </div>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                </ul>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section -->

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>

      <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Book a Table</button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>What they're saying about us</p>
      </div>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="../clients/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="../clients/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="../clients/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="../clients/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="../clients/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../clients/assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="../clients/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Chefs</h2>
        <p>Our Proffesional Chefs</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="../clients/assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Master Chef</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="../clients/assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="../clients/assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>Cook</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>
                Monday-Saturday:<br>
                11:00 AM - 2300 PM
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <footer class="mainFooter">
    <div class="footer-container">
      <div class="footer-expand-title">
        <p>Thông tin thêm </p>
        <span class="arrow-up">
          <svg xmlns="http://www.w3.org/2000/svg "width="22" height="22" x="0" y="0" viewBox="0 0 128 128">
            <g> 
              <path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path>
            </g>
          </svg>
        </span>
      </div>

      <div class="footer-expand-collapsed ">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 widget-footer">
              <h2 class="widget-footer__title">Thời trang nam</h2>
              <div class="widget-footer__content block-collapse">
                <div class="content-info">
                  <p>Hệ thống thời trang cho phái mạnh hàng đầu Việt Nam, hướng tới phong cách nam tính, lịch lãm và trẻ trung.</p>
                  <ul class="footerNav-social">
                    <li>
                      <a href="https://www.facebook.com/Torano.vn" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 155.139 155.139">
                          <g>
                            <path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z"></path>
                          </g>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a href="/" target="_blank" rel="noopener" title="Twitter" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512">
                          <g>
                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992	c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152	c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568	C480.224,136.96,497.728,118.496,512,97.248z"></path>
                          </g>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.instagram.com/torano.vn/" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512.00096 512.00096">
                          <g>
                            <path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path>
                            <path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path>
                            <path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path>
                          </g>
                        </svg>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.tiktok.com/@torano.vn" target="_blank" rel="noopener" title="TikTok" aria-label="TikTok">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512">
                          <g>
                            <path d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z"></path>
                          </g>
                        </svg>
                      </a>
                    </li>

                  </ul>
                  <div class="footer-payment">
                    <div class="payment-title">Phương thức thanh toán</div>
                    <ul class="payment-icon d-flex justify-content-between">
                      <li>
                       <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/payment_1_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/payment_1_img.png?v=370" alt="Vnpay" title="Vnpay">
                      </li>
                      <li>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/payment_2_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/payment_2_img.png?v=370" alt="Zalopay" title="Zalopay">
                      </li>
                      <li>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/payment_3_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/payment_3_img.png?v=370" alt="Moca" title="Moca">
                      </li>
                      <li>
                        <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/payment_4_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/payment_4_img.png?v=370" alt="Kredivo" title="Kredivo">
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 widget-footer">
              <h2 class="widget-footer__title">Thông tin liên hệ</h2>
              <div class="widget-footer__content block-collapse">
                <div class="address-footer">
                  <ul>
                    <li class="contact-1"><b>Địa chỉ:</b> Tầng 8, tòa nhà Ford, số 313 Trường Chinh, quận Thanh Xuân, Hà Nội</li>
                    <li class="contact-2"><b>Điện thoại:</b> 0964942121</li>
                    <li class="contact-3"><b>Fax:</b> 0904636356</li>
                    <li class="contact-4"><b>Email:</b> cskh@torano.vn</li>
                  </ul>
                </div>
                <div class="footer-shipment">
                  <div class="shipment-title">Phương thức vận chuyển</div>
                  <ul class="shipment-icon d-flex justify-content-between">
                    <li>
                      <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/shipment_1_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/shipment_1_img.png?v=370" alt="GHN" title="GHN">
                    </li>

                    <li>
                      <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/shipment_2_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/shipment_2_img.png?v=370" alt="GHN" title="GHN">
                    </li>

                    <li>
                      <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/shipment_3_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/shipment_3_img.png?v=370" alt="GHN" title="GHN">
                    </li>

                    <li>
                      <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/shipment_4_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/shipment_4_img.png?v=370" alt="GHN" title="GHN">
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 widget-footer">
              <h2 class="widget-footer__title">Nhóm liên kết</h2>
              <div class="widget-footer__content block-collapse">
                <ul class="footerNav-link">
                  <li class="item"><a href="/search" title="Tìm kiếm">Tìm kiếm</a></li>
                  <li class="item"><a href="/pages/about-us"><a href="/search" title="Giới thiệu">Giới thiệu</a></li>
                  <li class="item"><a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
                  <li class="item"><a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a></li>
                  <li class="item"><a href="/pages/dieu-khoan-dich-vu" title="Tuyển dụng">Tuyển dụng</a></li>
                  <li class="item"><a href="/pages/lien-he" title="Liên hệ">Liên hệ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 widget-footer widget-footer-newsletter">
              <h2 class="widget-footer__title">Đăng ký nhận tin</h2>
              <div class="widget-footer__content block-collapse">
                <p>Để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                <div class="newsletter-content newsletter-form">
                  <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="✓">
                    <div class="form-group input-group">
                      <span class="icon-email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                          <g>
                            <path d="M485.743,85.333H26.257C11.815,85.333,0,97.148,0,111.589V400.41c0,14.44,11.815,26.257,26.257,26.257h459.487 c14.44,0,26.257-11.815,26.257-26.257V111.589C512,97.148,500.185,85.333,485.743,85.333z M475.89,105.024L271.104,258.626 c-3.682,2.802-9.334,4.555-15.105,4.529c-5.77,0.026-11.421-1.727-15.104-4.529L36.109,105.024H475.89z M366.5,268.761 l111.59,137.847c0.112,0.138,0.249,0.243,0.368,0.368H33.542c0.118-0.131,0.256-0.23,0.368-0.368L145.5,268.761 c3.419-4.227,2.771-10.424-1.464-13.851c-4.227-3.419-10.424-2.771-13.844,1.457l-110.5,136.501V117.332l209.394,157.046 c7.871,5.862,17.447,8.442,26.912,8.468c9.452-0.02,19.036-2.6,26.912-8.468l209.394-157.046v275.534L381.807,256.367 c-3.42-4.227-9.623-4.877-13.844-1.457C363.729,258.329,363.079,264.534,366.5,268.761z" fill="currentColor" data-original="currentColor"></path>
                          </g>
                        </svg>
                      </span>
                      <input type="hidden" id="newsletter-tags" name="contact[tags]" value="Đăng kí nhận tin">
                      <input required type="email" name="contact[email]" class="form-control newsletter-input" id="newsletter-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Nhập email của bạn" aria-label="Email Address">
                      <span class="input-group-btn">
                        <button type="submit" class="button newsletter-btn">Đăng ký</button>
                      </span>
                    </div>

                    <div class="sitebox-recaptcha d-none">This site is protected by reCAPTCHA and the Google
                      <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a>
                      <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a>
									  </div>
                    <input id="f11c9a0eb1de4a81b635bbd72e9a1eeb" name="g-recaptcha-response" type="hidden">
                    <noscript data-src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript>
                  </form>
                </div>
              </div>
              <div class="ft-logobct">
                <a href="http://online.gov.vn/Home/WebDetails/47936" target="_blank" rel="noreferrer">
                  <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000690725/1001078549/14/footer_logobct_img.png?v=370" src="//theme.hstatic.net/200000690725/1001078549/14/footer_logobct_img.png?v=370" alt="Bộ Công Thương">
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-copyright text-center">
          <div class="container">
            <p>Copyright © 2024 
              <a href="https://torano.vn"> Torano</a>
              <a target="_blank" href="https://www.haravan.com" rel="noreferrer">Powered by Haravan</a>          
            </p>
          </div>
        </div>
      </div>

    </div>

  </footer>

  @endsection