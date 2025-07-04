<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>commone links</title>


    <link rel="stylesheet" href="{{ asset('frontend/assets/style/nice-select2.css') }}">
    <!-- FONT STYLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- FAV ICON -->
    <link rel="shortcut icon" href="./assets/images/fav.png" type="image/x-icon" />
    <!-- SLICK -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/slick.css') }}" />
    <!-- BOOTSTRAP 5 -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/bootstrap.min.css') }}" />
    <!-- FONT-AWSOME -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/all.min.css') }}" />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/style.css') }}" />
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/responsive.css') }}" />

    <!-- SWEETALERT2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
        /* OMITTED: Your original styles stay here unchanged */

        #order .btn-decrement,
        #order .btn-increment {
            background: #000;
            border-radius: 0;
            outline: none;
            border: none;
            font-size: 25px;
        }

        #order {
            margin-top: 50px;
        }

        #order form input {
            padding: 10px;
            border-radius: 0;

        }

        #order form button {
            border-radius: 0;
        }

        #order .nice-select.open .nice-select-dropdown {
            width: 100%;
        }

        #order .nice-select:after {
            display: none !important;
        }

        .nice-select.form-select {
            padding: 0.75rem 1rem;
            min-height: 45px;
            height: auto;
            border-radius: 0.375rem;
            border: 1px solid #ced4da;
            background-color: #fff;
            width: 100%;
            font-size: 1rem;
            box-shadow: none;
        }

        .nice-select.form-select .current {
            line-height: normal;
        }

        .nice-select.form-select .list {
            width: 100%;
        }

        .product-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 0.5rem;
            padding: 1.5rem;
            text-align: center;
            background: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .product_intro{
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section id="hero" style="background: url({{ asset('frontend/assets/images/hero.png') }})">
        <div class="container">
            <img style="width: 180px" src="https://raafidan.com/images/raafidan.png" alt="" />
            <h1>
                প্রিমিয়াম প্রডাক্টের সংকলন <br />
                আপনার পছন্দে বিশেষ ঘ্রাণ
            </h1>
            <p>
                বিশ্বস্ত সুগন্ধির অভিজ্ঞতা এখন এক সেটেই উপহার কিংবা নিজের ব্যবহারের
                জন্য উপযুক্ত।
            </p>
            <div>
                <a href="#product" class="purchase">এই প্যাকেজটি কিনুন</a>
            </div>
        </div>
    </section>
    <!-- HERO END -->



    <!-- product -->
    <section id="product">
        <div class="container">
            <div class="header">
                <h4>আমাদের প্যাকেজ সমূহ</h4>
                <p>
                    আপনার পছন্দের জন্য বেছে নেওয়া জনপ্রিয় আতরের সংগ্রহ। প্রতিটি ঘ্রাণই
                    <br />
                    আলাদা আবেশ ও অনুভূতি নিয়ে আসবে।
                </p>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-xl-4 product_cart">
                    <div>
                        <div class="img">
                            <img class="img-fluid" src="./assets/images/product_1.png" alt="" />
                        </div>
                        <div class="contains">
                            <h4>এ্যারোমা জেনেসিস ৫ টির প্যাকেজ।</h4>
                            <p>
                                জনপ্রিয় বিশ্বাসের বিপরীতে, লোরেম ইপসাম কেবল এলোমেলো লেখা নয়।
                                এর শিকড় ৪৫ খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি
                                অংশে রয়েছে।
                            </p>
                            <div class="retting">
                                <span>রেটিং:</span>
                                <ul class="p-0">
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="proicons:star" width="18" height="18"></iconify-icon>
                                    </li>
                                </ul>
                                <span>(১৮)</span>
                            </div>

                            <div class="d-flex justify-content-between pricing align-items-center">
                                <span>৳ ৩৯০</span>
                                <a href="#order" class="buy-now-btn" data-product-id="product_aroma">এই প্যাকেজটি
                                    কিনুন</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 product_cart">
                    <div>
                        <div class="img">
                            <img class="img-fluid" src="./assets/images/product_1.png" alt="" />
                        </div>
                        <div class="contains">
                            <h4>এহেসাস আল আরাবিয়া ১০ টির প্যাকেজ।</h4>
                            <p>
                                জনপ্রিয় বিশ্বাসের বিপরীতে, লোরেম ইপসাম কেবল এলোমেলো লেখা নয়।
                                এর শিকড় ৪৫ খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি
                                অংশে রয়েছে।
                            </p>
                            <div class="retting">
                                <span>রেটিং:</span>
                                <ul class="p-0">
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                    </li>
                                    <li>
                                        <iconify-icon icon="proicons:star" width="18" height="18"></iconify-icon>
                                    </li>
                                </ul>
                                <span>(১৮)</span>
                            </div>

                            <div class="d-flex justify-content-between pricing align-items-center">
                                <span>৳ ৬৯০</span>
                                <a href="#order" class="buy-now-btn" data-product-id="product_arabia">এই প্যাকেজটি
                                    কিনুন</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->

    <!-- review -->
    <section id="review">
        <div class="container">
            <div class="header">
                <h4>আমাদের ক্রেতারা যা বলেছেন</h4>
                <p>
                    আপনার পছন্দের জন্য বেছে নেওয়া জনপ্রিয় আতরের সংগ্রহ। প্রতিটি ঘ্রাণই
                    <br />
                    আলাদা আবেশ ও অনুভূতি নিয়ে আসবে।
                </p>
            </div>
            <div class="sliders mt-4">
                <div class="slider">
                    <img class="img-fluid" src="./assets/images/review_1.jpg" alt="" />
                </div>
                <div class="slider">
                    <img class="img-fluid" src="./assets/images/review_1.jpg" alt="" />
                </div>
                <div class="slider">
                    <img class="img-fluid" src="./assets/images/review_1.jpg" alt="" />
                </div>
                <div class="slider">
                    <img class="img-fluid" src="./assets/images/review_1.jpg" alt="" />
                </div>
                <div class="slider">
                    <img class="img-fluid" src="./assets/images/review_1.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- review end -->


    {{-- PRODUCT INTRO --}}
        <!-- product -->
    <section class="py-5" id="product_intro">
        <div class="container">
            <h2 class="text-center mb-5 product_intro">আমাদের পণ্যসমূহ</h2>

            <div class="row g-4">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">আমির আল উদ</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">এহসাস আল এরাবিয়া</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">কুল ওয়াটার ব্লু</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">ডানহিল ডিজায়ার</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">হোয়াইট উদ</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">সিকে ওয়ান</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">সিলভার স্টোন</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">ফ্যান্টাসি</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">ভ্যাম্পায়ার ব্লাড</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">রয়েল বাখুর</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">জান্নাতুল ফেরদৌস</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">জোপি</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">সুলতান</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">প্যারিস হিলটন</h5>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <h5 class="mb-0">বাকারাত রোজ</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- product end -->
    {{-- PRODUCT INTRO END --}}


    <!-- characteristics start -->
    <section id="characteristics">
        <div class="container">
            <div class="header">
                <h4>আমাদের বৈশিষ্ট্য সমুহ</h4>
                <p>১০০% অ্যালকোহল মুক্ত পারফিউম</p>
            </div>

            <div class="row g-5">
                <div class=" col-6 characteristics_box">
                    <div>
                        <span><iconify-icon icon="mdi:smell" width="50" height="50"></iconify-icon></span>
                        <h4>দীর্ঘস্থায়ী ঘ্রাণ</h4>
                    </div>
                </div>

                <div class=" col-6 characteristics_box">
                    <div>
                        <span>
                            <iconify-icon icon="ic:baseline-mosque" width="50"
                                height="50"></iconify-icon></span>
                        <h4>নামায ও ইসলামী অনুষ্ঠানে উপযোগী</h4>
                    </div>
                </div>

                <div class=" col-6 characteristics_box">
                    <div>
                        <span><iconify-icon icon="mdi:gift" width="50" height="50"></iconify-icon></span>
                        <h4>উপহার দেওয়ার জন্য দারুণ প্যাকেজিং</h4>
                    </div>
                </div>

                <div class=" col-6 characteristics_box">
                    <div>
                        <span><iconify-icon icon="material-symbols:editor-choice-rounded" width="50"
                                height="50"></iconify-icon></span>
                        <h4>আপনার পছন্দমতো আতর নির্বাচন করার সুবিধা</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- characteristics end -->




    {{-- ORDER --}}
    <section id="order">
        <div class="container">
            <form action="" method="POST" class="shadow-sm p-4 bg-white rounded">
                @csrf
                <div class="row justify-content-center">

                    <!-- Package Section -->
                    <div class="col-12 mb-4">
                        <h5 class="text-center mb-3">আপনার প্যাকেজ নির্বাচন করুন</h5>

                        <div class="row g-3 justify-content-center">

                             <!-- Product Card 2 -->
                            <div class="col-md-6 col-lg-5">
                                <div class="product-card p-3 h-100 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input package-checkbox" type="checkbox"
                                                id="product_aroma" data-price="390"
                                                data-name="এ্যারোমা জেনেসিস ৫ টির প্যাকেজ।">
                                            <label class="form-check-label fw-bold ms-3" for="product_aroma">
                                                এ্যারোমা জেনেসিস ৫ টির প্যাকেজ।
                                            </label>
                                        </div>
                                        <span class="badge bg-success fs-6">৳ ৩৯০</span>
                                    </div>

                                    <div class="input-group quantity-group">
                                        <button type="button" class="btn btn-outline-secondary btn-decrement"
                                            disabled>-</button>
                                        <input type="number" class="form-control text-center qty-input"
                                            id="qty_aroma" value="1" min="1" disabled>
                                        <button type="button" class="btn btn-outline-secondary btn-increment"
                                            disabled>+</button>
                                    </div>
                                </div>
                            </div>


                            <!-- Product Card 1 -->
                            <div class="col-md-6 col-lg-5">
                                <div class="product-card p-3 h-100 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input package-checkbox" type="checkbox"
                                                id="product_arabia" data-price="690"
                                                data-name="এহেসাস আল আরাবিয়া ১০ টির প্যাকেজ।">
                                            <label class="form-check-label fw-bold ms-3" for="product_arabia">
                                                এহেসাস আল আরাবিয়া ১০ টির প্যাকেজ।
                                            </label>
                                        </div>
                                        <span class="badge bg-success fs-6">৳ ৬৯০</span>
                                    </div>

                                    <div class="input-group quantity-group">
                                        <button type="button" class="btn btn-outline-secondary btn-decrement"
                                            disabled>-</button>
                                        <input type="number" class="form-control text-center qty-input"
                                            id="qty_arabia" value="1" min="1" disabled>
                                        <button type="button" class="btn btn-outline-secondary btn-increment"
                                            disabled>+</button>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <div class="text-center mt-4">
                            <h3 class="text-primary text-dark fw-bold">
                                মোট মূল্য: <span id="total_price">৳ ০</span>
                            </h3>
                        </div>
                        <div class="text-danger small mt-2" id="error-packages"></div>
                    </div>

                    <!-- Client Details -->
                    <div class="col-xl-5 p-3">
                        <label for="client_name">Name:</label>
                        <input type="text" name="client_name" id="client_name" class="form-control mb-1"
                            placeholder="enter your name">
                        <div class="text-danger small mb-2" id="error-client_name"></div>

                        <label for="client_phone">Phone:</label>
                        <input type="number" name="client_phone" id="client_phone" class="form-control mb-1"
                            placeholder="enter your number">
                        <div class="text-danger small mb-2" id="error-client_phone"></div>

                        <label for="client_address">Address:</label>
                        <textarea name="client_address" id="client_address" cols="30" rows="5" class="form-control mb-1"
                            placeholder="client address details"></textarea>
                        <div class="text-danger small mb-2" id="error-client_address"></div>
                    </div>

                    <!-- Address Selects -->
                    <div class="col-xl-5 p-3">
                        <label for="division">Division</label>
                        <select name="division_id" id="division" class="form-control mb-1">
                            <option value="" disabled selected>-- select division --</option>
                            @foreach ($divisions as $division)
                                <option value="{{ $division['id'] }}">{{ $division['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger small mb-2" id="error-division_id"></div>

                        <label for="district">District</label>
                        <select name="district_id" id="district" class="form-control mb-1">
                            <option value="" disabled selected>-- select district --</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district['id'] }}">{{ $district['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger small mb-2" id="error-district_id"></div>

                        <label for="upazilla">Upazilla</label>
                        <select name="upazilla_id" id="upazilla" class="form-control mb-1">
                            <option value="" disabled selected>-- select upazilla --</option>
                            @foreach ($upazillas as $upazilla)
                                <option value="{{ $upazilla['id'] }}">{{ $upazilla['name'] }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger small mb-2" id="error-upazilla_id"></div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">
                            Submit Order
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- ORDER END --}}



    <!-- FAQ -->
    <section id="faq">
        <div class="container">


            <div class="header">
                <h4 class="text-center">আপনাদের কিছু প্রশ্ন এবং উত্তর</h4>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    প্রশ্ন: আতরগুলোতে কি এলকোহল আছে?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>উত্তর: হ্যাঁ, ১০ টি আতরের সেটে আপনি ১৫ টির মধ্য থেকে নিজের
                                        পছন্দমতো ১০ টি নির্বাচন করতে পারবেন।</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    প্রশ্ন: আমি কি আমার পছন্দের আতরগুলো বেছে নিতে পারবো?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>উত্তর: হ্যাঁ, ১০ টি আতরের সেটে আপনি ১৫ টির মধ্য থেকে নিজের
                                        পছন্দমতো ১০ টি নির্বাচন করতে পারবেন।</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    প্রশ্ন: ডেলিভারি কতদিনে হবে?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>উত্তর: হ্যাঁ, ১০ টি আতরের সেটে আপনি ১৫ টির মধ্য থেকে নিজের
                                        পছন্দমতো ১০ টি নির্বাচন করতে পারবেন।</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    প্রশ্ন: ডেলিভারি কতদিনে হবে?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>উত্তর: হ্যাঁ, ১০ টি আতরের সেটে আপনি ১৫ টির মধ্য থেকে নিজের
                                        পছন্দমতো ১০ টি নির্বাচন করতে পারবেন।</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                {{-- <div class="col-xl-5">
                        <img style="height: 340px;" class="img-fluid" src="./assets/images/faq.png" alt="" />
                    </div> --}}
            </div>
        </div>
    </section>
    <!-- FAQ END -->


    <!-- FOOTER -->
    <footer id="footer" style="background:#000; color:#eee; padding: 40px 0; font-family: 'Roboto', sans-serif;">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">

                <!-- Logo & Description -->
                <div class="col-md-4 text-center text-md-start"
                    style="text-align: center !important;
    display: flex
;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    align-items: center;">
                    <img src="https://raafidan.com/images/raafidan.png  " alt="Brand Logo"
                        style="width: 100px; filter: brightness(0) invert(1);" />
                    <p style="margin-top: 15px; font-size: 1rem; max-width: 280px; ">
                        প্রিমিয়াম ঘ্রাণ এবং আতরের সংকলন যা আপনার প্রতিদিনের মুহূর্তকে করে তোলে বিশেষ।
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 text-center text-md-start">
                    <h5 style="font-weight: 700; margin-bottom: 15px;">দ্রুত লিঙ্কসমূহ</h5>
                    <ul style="list-style: none; padding: 0; line-height: 2;">
                        <li><a href="#product"
                                style="color: #eee; text-decoration: none; transition: color 0.3s;">প্যাকেজ
                                সমূহ</a></li>
                        <li><a href="#order"
                                style="color: #eee; text-decoration: none; transition: color 0.3s;">অর্ডার করুন</a>
                        </li>
                        <li><a href="#faq"
                                style="color: #eee; text-decoration: none; transition: color 0.3s;">প্রশ্ন ও
                                উত্তর</a></li>
                        <li><a href="#review"
                                style="color: #eee; text-decoration: none; transition: color 0.3s;">ক্রেতাদের
                                মতামত</a></li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="col-md-3 text-center text-md-start">
                    <h5 style="font-weight: 700; margin-bottom: 15px;">যোগাযোগ করুন</h5>
                    <p style="margin: 0 0 10px;">
                        📞 ফোন:
                        <a href="tel:+01775333625" style="color: #eee; text-decoration: none;">
                            ০১৭৭৫-৩৩৩৬২৫
                        </a>
                    </p>
                    <p style="margin: 0 0 10px;">
                        ✉️ ইমেইল:
                        <a href="mailto:raafidan@gmail.com" style="color: #eee; text-decoration: none;">
                            raafidan@gmail.com
                        </a>
                    </p>
                    <div style="margin-top: 10px;">
                        <a target="_blank" href="https://www.facebook.com/RaafidanStore"
                            style="color: #eee; margin-right: 15px; font-size: 1.5rem; transition: color 0.3s; text-decoration: none;">
                            <iconify-icon icon="mdi:facebook" width="24" height="24"></iconify-icon>
                        </a>
                        <a target="_blank" href="https://wa.me/8801775333625"
                            style="color: #eee; font-size: 1.5rem; transition: color 0.3s; text-decoration: none;">
                            <iconify-icon icon="mdi:whatsapp" width="24" height="24"></iconify-icon>
                        </a>
                    </div>
                </div>

            </div>

            <hr style="border-color: #222; margin: 30px 0;" />

            <div class="text-center" style="font-size: 0.9rem; color: #666;">
                &copy; ২০২৫ রাফিদান | সর্বস্বত্ব সংরক্ষিত
            </div>
        </div>
    </footer>

    {{-- FOOTER END --}}

    <!-- JS Files -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="./assets/js/font-awsome.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/js/nice-select2.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="./assets/js/app.js"></script>


    <script>
        $(document).ready(function() {
            var options = {
                searchable: true,
                placeholder: 'select',
                searchtext: 'খুঁজুন',
                selectedtext: 'নির্বাচিত'
            };

            if ($("#division").length) {
                NiceSelect.bind(document.getElementById("division"), options);
            }
            if ($("#district").length) {
                NiceSelect.bind(document.getElementById("district"), options);
            }
            if ($("#upazilla").length) {
                NiceSelect.bind(document.getElementById("upazilla"), options);
            }

            $(".package-checkbox").on("change", function() {
                let checked = $(this).is(":checked");
                let productCard = $(this).closest(".product-card");
                let qtyInput = productCard.find(".qty-input");
                let btnIncrement = productCard.find(".btn-increment");
                let btnDecrement = productCard.find(".btn-decrement");

                qtyInput.prop("disabled", !checked);
                btnIncrement.prop("disabled", !checked);
                btnDecrement.prop("disabled", !checked);

                if (!checked) {
                    qtyInput.val(1);
                }
                calculateTotal();
            });

            $(".btn-increment").on("click", function() {
                let input = $(this).siblings(".qty-input");
                let currentVal = parseInt(input.val()) || 1;
                input.val(currentVal + 1).trigger("input");
            });

            $(".btn-decrement").on("click", function() {
                let input = $(this).siblings(".qty-input");
                let currentVal = parseInt(input.val()) || 1;
                if (currentVal > 1) {
                    input.val(currentVal - 1).trigger("input");
                }
            });

            $(".qty-input").on("input", function() {
                calculateTotal();
            });

            function calculateTotal() {
                let total = 0;
                $(".package-checkbox:checked").each(function() {
                    let price = parseFloat($(this).data("price")) || 0;
                    let qty = parseInt($(this).closest(".product-card").find(".qty-input").val()) || 1;
                    total += price * qty;
                });
                $("#total_price").text("৳ " + total);
            }

            $("form").on("submit", function(e) {
                e.preventDefault();

                $(".text-danger").html('');
                $(".form-control").removeClass('is-invalid');

                let name = $("#client_name").val().trim();
                let phone = $("#client_phone").val().trim();
                let address = $("#client_address").val().trim();
                let division = $("#division").val();
                let district = $("#district").val();
                let upazilla = $("#upazilla").val();

                if (!name || !phone || !address || !division || !district || !upazilla) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'সমস্যা',
                        text: 'সকল তথ্য পূরণ করুন।'
                    });
                    return;
                }

                let packages = [];
                $(".package-checkbox:checked").each(function() {
                    let name = $(this).data("name");
                    let price = parseFloat($(this).data("price"));
                    let qty = parseInt($(this).closest(".product-card").find(".qty-input").val());
                    packages.push({
                        name,
                        price,
                        qty
                    });
                });

                if (packages.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'প্যাকেজ নির্বাচন করুন',
                        text: 'অন্তত একটি প্যাকেজ নির্বাচন করুন।',
                    });
                    return;
                }

                let totalPrice = $("#total_price").text().replace(/[^\d.]/g, '');

                $.ajax({
                    url: "{{ route('frontend.order.store') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        client_name: name,
                        client_phone: phone,
                        client_address: address,
                        division_id: division,
                        district_id: district,
                        upazilla_id: upazilla,
                        packages: packages,
                        total_price: totalPrice
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'অর্ডার সম্পন্ন!',
                            text: response.message
                        }).then(() => {
                            window.location.href =
                                "{{ route('frontend.order.index') }}";
                        });
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            $.each(errors, function(key, value) {
                                $("#error-" + key).html(value[0]);
                                $("#" + key).addClass("is-invalid");
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'ত্রুটি!',
                                text: 'আবার চেষ্টা করুন।'
                            });
                        }
                    }
                });
            });



            $(".buy-now-btn").on("click", function(e) {
                e.preventDefault();

                let productId = $(this).data("product-id");
                let targetCheckbox = $("#" + productId);

                // Scroll smoothly to the order section
                $('html, body').animate({
                    scrollTop: $("#order").offset().top - 50
                }, 500);

                // Check the checkbox if not already checked
                if (!targetCheckbox.prop("checked")) {
                    targetCheckbox.prop("checked", true).trigger("change");
                }
            });

        });
    </script>
</body>

</html>
