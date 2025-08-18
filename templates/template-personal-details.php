<div class="booking-details-form cs-hidden" id="cs_page_PersonalDetails">

    <h4>
        <span>
            <i class="fa fa-user" aria-hidden="true"></i>
            Personal Detail
        </span>
    </h4>




    <div class="cs-body">







        <div class="row row_first">
            <div class="col-md-6">
                <div class="cs-field">

                    <label for="bookerName">
                        <span class="lbl">
                            First Name
                        </span>
                        <input id="bookerName" placeholder="Enter your name" type="text" />

                    </label>

                </div>
            </div>

            <div class="col-md-6">
                <div class="cs-field">

                    <label for="lastName">
                        <span class="lbl">
                            Last Name
                        </span>
                        <input id="lastName" placeholder="Enter your last name" type="text" />

                    </label>

                </div>
            </div>


            <div class="col-md-12">
                <div class="cs-field">

                    <label for="bookerEmail">
                        <span class="lbl">

                            Your Email
                        </span>
                        <input id="bookerEmail" placeholder="Enter your email" type="email" />

                    </label>

                </div>
            </div>
        </div>





        <!-- <button onclick="checkCarsAvailibility()">Check Availablity</button> -->



        <div class="row row_guests_and_cars">
            <div class="col-md-12">
                <div class="cs-field">

                    <label for="bookingGuests">

                        <span class="lbl">

                            Number Of Guests
                        </span>
                        <input id="bookingGuests" type="number" step='1' min=1 value='1' />

                    </label>

                </div>
            </div>

        </div>






        <div class="row">
            <div class="col-12">
                <label for="">Coupon Code</label>
            </div>
        </div>
        <div class="coupon_wrap mb-2">
            <div class="row">
                <div class="col-md-9">
                    <div class="cs-field">

                        <label for="bookingDiscountCode">

                            <input id="bookingDiscountCode" placeholder="Enter coupon code" type="text" />



                        </label>

                    </div>
                </div>
                <div class="col-md-3">
                    <button class="cs-secondary-button mt-md-0 mt-2 cs-md-6 w-100" onclick="applyDiscountCode(this)" id="btn_CouponApply"> Apply</button>
                </div>
            </div>
        </div>

        <!-- TODO PROX -->

        <!-- Coupon Success -->
        <div class="cs-coupon-success cs-hidden" id="csCouponSuccess">
            <div class="cs-coupon-left">
                <!-- Icon Wrapper -->
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="m42.8 23.2-18-18C24.1 4.4 23.1 4 22 4H8C5.8 4 4 5.8 4 8v14c0 1.1.4 2.1 1.2 2.8l18 18c.7.7 1.7 1.2 2.8 1.2s2.1-.5 2.8-1.2l14-14c.7-.7 1.2-1.7 1.2-2.8s-.5-2.1-1.2-2.8zM11 14c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z" fill="#2bc48a" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </div>

                <!-- Content Wrapper -->
                <div class="content-wrapper">
                    <p>
                        <span id="output_couponCode">Coupon</span>
                        applied
                    </p>
                    <p class="text-secondary">
                        <!-- €<span id="output_DiscountDollars">00.00</span> -->
                        (<span id="output_DiscountPercent">€15 / Day</span> Discount is Applied)
                    </p>
                </div>
            </div>
        </div>






        <!-- Coupon Invalid -->
        <div class="cs-coupon-invalid cs-hidden" id="csInvalidCoupon">
            <div class="cs-coupon-left">
                <!-- Icon Wrapper -->
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path d="m42.8 23.2-18-18C24.1 4.4 23.1 4 22 4H8C5.8 4 4 5.8 4 8v14c0 1.1.4 2.1 1.2 2.8l18 18c.7.7 1.7 1.2 2.8 1.2s2.1-.5 2.8-1.2l14-14c.7-.7 1.2-1.7 1.2-2.8s-.5-2.1-1.2-2.8zM11 14c-1.7 0-3-1.3-3-3s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z" fill="red" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                </div>

                <!-- Content Wrapper -->
                <div class="content-wrapper">
                    <p>
                        <span id="output_couponCode">Coupon</span>
                        invalid
                    </p>
                </div>
            </div>
        </div>

        <p class="cs-error-text cs-hidden" id="error_CouponCodeEmpty">Please Enter a Coupon Code</p>
        <p class="cs-error-text cs-hidden" id="cs_error_BookingCoupon">Invalid Coupon</p>
        <p class="cs-success-text cs-hidden" id="cs_success_BookingCoupon">Discount code applied</p>

        <p class="cs-hidden">$ <span id="summaryMainTotal">0</span></p>







        <div class="cs-button-wrapper">
            <!-- <button class="cs-secondary-button" id="cs_pageTwo_Prev">Previous</button>-->
            <!-- <button class="cs-primary-button mx-0" id="cs_pageTwo_Continue" onclick="generateSummary(true)"> Next</button> -->

            <button class="cs-button-outline mx-0 mr-4" id="btnPageTwoPrev"> Previous</button>


            <button class="cs-primary-button mx-0" id="btnPageTwoNext"> Next</button>

        </div>


    </div>
    <!-- cs-body ends -->


</div>