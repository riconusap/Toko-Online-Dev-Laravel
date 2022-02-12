@extends('layouts.app')
@section('title', 'Toko Category')

@section('content')
<div class="page-content pages-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="zoom-in">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-gadgets.svg"
                    alt=""
                    class="w-100"
                  />
                  <p class="categories-text">Gadgets</p>
                </div>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-furniture.svg"
                    alt=""
                    class="w-100"
                  />
                  <p class="categories-text">Furniture</p>
                </div>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-makeup.svg"
                    alt=""
                    class="w-100"
                  />
                  <p class="categories-text">Make Up</p>
                </div>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-sneaker.svg"
                    alt=""
                    class="w-100"
                  />
                  <p class="categories-text">Sneaker</p>
                </div>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="images/categories-tools.svg"
                    alt=""
                    class="w-100"
                  />
                  <p class="categories-text">Tools</p>
                </div>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="images/categories-baby.svg" alt="" class="w-100" />
                  <p class="categories-text">Baby</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="store-new-product">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Product</h5>
            </div>
            <div class="row">
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-apple-watch.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">$899</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-black-edition-nike.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Nike Black Edition</div>
                  <div class="products-price">$499</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-bubuk-maketti.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Bubuk Maketti</div>
                  <div class="products-price">$99</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-orange-bogotta.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Orange Bogotta</div>
                  <div class="products-price">$8,899</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="500"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-monkey-toys.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Monkey Toys</div>
                  <div class="products-price">$299</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="600"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-sofa-ternyaman.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Sofa Ternyaman</div>
                  <div class="products-price">$1,899</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="700"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-mavic-kawe.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Mavic Kawe</div>
                  <div class="products-price">$999</div>
                </a>
              </div>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="800"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="product-thumbnail">
                    <div
                      class="products-image"
                      style="
                        background-image: url(images/products-tatakan-gelas.jpg);
                      "
                    ></div>
                  </div>
                  <div class="products-text">Tatakan Gelas</div>
                  <div class="products-price">$9</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
