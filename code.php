<!-- Code For Coupon Code -->

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
<!-- test -->
<!-- test -->
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
                (<span id="output_DiscountPercent">€15/day</span> Discount is Applied)
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