@extends('frontend.header')
@section('content')
<section id="products">
    <div class="container position-relative mt-4">
        <div class="section pt-4">
            <div class="row justify-content-start zindex-2">
                <div class="col-12 col-lg-5 wow fadeIn">
                  <div class="product__carousel">
                  <!-- Swiper and EasyZoom plugins start -->
                  <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide easyzoom easyzoom--overlay">
                        <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true">
                          <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true" alt=""/> 
                        </a>
                      </div>
                      <div class="swiper-slide easyzoom easyzoom--overlay">
                        <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true">
                          <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true" alt=""/>
                        </a>
                      </div>
                      <div class="swiper-slide easyzoom easyzoom--overlay">
                        <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true">
                          <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true" alt=""/>
                        </a>
                      </div>
                      <div class="swiper-slide easyzoom easyzoom--overlay">
                        <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true">
                          <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true" alt=""/>
                        </a>
                      </div>
                      <div class="swiper-slide easyzoom easyzoom--overlay">
                        <a href="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true">
                          <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true" alt=""/>
                        </a>
                      </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                  </div>
                  <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-1.jpg?raw=true" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-2.jpg?raw=true" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-3.jpg?raw=true" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-4.jpg?raw=true" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://github.com/shoha-kh/products-gallery-carousel-with-zoom/blob/master/images/nature-5.jpeg?raw=true" alt="">
                      </div>
                    </div>
                  </div>
                  <!-- Swiper and EasyZoom plugins end -->
                </div>
                </div>
                <div class="col-12 col-lg-7 wow fadeIn">
                  <div class="product-detail">
                    <h1>बोधिसत्वाच्या जातक अट्ठकथा</h1>
                    <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                    <h2 class="price"><span>₹250</span>  ₹150</h2>
                    <p>Lorem diam sagittis fusce consequat montes molestie viverra metus parturient</p>
                    <div class="product_meta">
                      <span class="sku_wrapper detail-container">
                        <span class="detail-label">SKU</span><span class="sku">MOX20021019-2</span>
                      </span>
                      <span class="posted_in detail-container"><span class="detail-label">Category</span> <span class="detail-content">Biographies &amp; Memoirs</a></span></span>
                    </div>
                    <div class="actioninput">
                      <div class="form-group mb-3">
                        <input type="number" min="1" max="100" class="form-control" value="1" />
                      </div>
                      <div class="d-flex gap-2 pt-4">
                        <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">पुस्तक वाचा</span></a>
                        <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">डाउनलोड करा</span></a>
                        <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="tile">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider"></div>
             <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> DESCRIPTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-id-card"></i>  ADDITIONAL INFORMATION</a>
              </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h2>Description</h2>
              <p>Justo eleifend vel congue. Pulvinar fringilla ullamcorper vitae mollis dignissim sit. Erat pretium ipsum torquent lorem. Bibendum senectus proin adipiscing sollicitudin nibh.</p>
              <p>Ligula nec inceptos sagittis luctus curae etiam ultricies. Ultrices netus ornare lacinia. Augue nunc dictum ipsum parturient tempus malesuada ultrices. Netus pretium id malesuada gravida.</p>
              <p>Quis magnis metus sit eros primis. Dolor consequat suscipit auctor nisi dictumst. Leo erat vivamus sem. Porttitor arcu inceptos ut metus integer class.</p>
            </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h2>Additional information</h2>
            <table class="table table-borded">
              <tbody><tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
              <th class="woocommerce-product-attributes-item__label">Weight</th>
              <td class="woocommerce-product-attributes-item__value">1 kg</td>
            </tr>
              <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
              <th class="woocommerce-product-attributes-item__label">Dimensions</th>
              <td class="woocommerce-product-attributes-item__value">60 × 35 × 50 cm</td>
            </tr>
          </tbody></table>
          </div>
          </div>
        
        </div>
    </div>
</section>

<section id="products" class=" gray-bg">
  <div class="container position-relative mt-4">
      <div class="section">
          <div class="elementor-background-overlay bg-img" data-bg="assets/img/leaves_4.png"></div>
          <div class="center-content text-center">
              <h2 class="page-title wow fadeInUp" data-wow-delay="100">New Release</h2>
          </div>
          <div class="row justify-content-start zindex-2">
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
              <div class="col-12 col-md-6 col-lg-3 wow fadeIn product-item-wrap text-center">
                  <a href="product-detail.html" class="product-item">
                      <span class="position-relative img-wrap d-block">
                          <img src="assets/img/products/product-img.jpg" alt="" class="img-fluid" />
                      </span>
                      <span class="position-relative pro-dis d-block">
                          <h4 class="pro-name">बोधिसत्वाच्या जातक अट्ठकथा</h4>
                          <span class="d-block"><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star-s fill"></i><i class="feather-icon icon-star"></i></span>
                          <h2 class="price"><span>₹250</span>  ₹150</h2>
                      </span>
                  </a>
                  <a href="product-detail.html" target="_self" class="bt_bb_link" title="मागणी करा"><span class="bt_bb_button_text">मागणी करा</span></a>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
