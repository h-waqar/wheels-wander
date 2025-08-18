<div class="booking-details-form template-protection cs-hidden" id="cs_page_TemplateProtection">



    <div class="cs-body">

        <div class="cs-title-wrap">
            <div class="cs-wrap-back">
                <i class="fa-solid fa-angle-left" id="secProtectionBack"></i>
                <i class="fa-solid fa-angle-left cs-hidden" id="secDriverBack"></i>
                <i class="fa-solid fa-angle-left cs-hidden" id="secPaymentBack"></i>
            </div>
            <h4>

                <span id="titleTemplateProtection" class="title-template-protection">
                    Select a Protection Plan
                </span>
            </h4>

            <div class="cs-wrap-back">
                <i style="color: white;" class="fa"></i>
            </div>

        </div>

    </div> <!-- cs-body ends-->



    <div class="cs-body">



        <div class="row">
            <div class="col-md-8" id="summaryLeft">






                <?php

                require_once(__DIR__ . '/sec-protection.php');
                require_once(__DIR__ . '/sec-driver.php');
                require_once(__DIR__ . '/sec-payment.php');


                ?>





            </div>
            <div class="col-md-4" id="SummaryWrap" class="summary-wrap">
                <div class="summary-card">
                    <div class="car-detail">
                        <div class="img-wrap">
                            <img src="<?php echo CS_WHEELS_WANDER_BASE_URL . "img/fiat-car.png";  ?>" alt="">
                        </div>
                        <div class="desc-wrap">
                            <p class="cs-title">Fiat 500 Electric</p>
                            
                        </div>
                    </div>
                    <div class="days-wrap">
                        <p><i class="fa-regular fa-clock"></i> <span id="tvRentalDays">4 Rental Days</span></p>
                    </div>
                    <div class="location-wrap">
                        <div class="pickup-wrap">
                            <p class="location"><i class="fa-solid fa-location-dot"></i>Pickup: Clifhanger Villas</p>
                            <p id="sumPickupDate">Thu, 11 Jan, 2024</p>
                        </div>

                        <div class="drop-wrap">
                            <p class="location"><i class="fa-solid fa-location-dot"></i>Drop: Clifhanger Villas</p>
                            <p id="sumDropDate">Mon, 15 Jan, 2024</p>
                        </div>
                    </div>

                    <div class="cs-description" id="csSummaryDesc">
                        <!-- <p><i class="fa-solid fa-check"></i> Included Third party Location</p>
                        <p><i class="fa-solid fa-check"></i> Included Additional Driver</p>
                        <p><i class="fa-solid fa-check"></i> Basic Protection Plan</p> -->
                    </div>

                    <div class="cs-total">
                        <div class="wrap">
                            <p class="title">Total</p>
                        <p class="total"><span id="sumGrandTotal"></span></p>
                        </div>
                    </div>

                    <p class="price-detail" id="seePriceDetail">Price details</p>

                    <button class="btn-summary-next" id="templateProtectionNext">
                        Next<i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>

                    <button class="btn-summary-next cs-hidden" id="btnSecDriverNext">
                        Next<i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>


                </div>
            </div>
        </div>




        <!-- <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="cs-button-wrapper">

                    <button class="cs-button-outline mx-0 mr-2" id="templateProtectionPrev"> Previous</button>

                    <button class="cs-arrow-circle mx-0" id="templateProtectionNext">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>

                </div>
            </div>
        </div> -->


    </div>
    <!-- cs-body ends -->



</div>




<!-- Summary Alert -->

<section class="alert_ValidPassport sec-dialog cs-hidden" id="alert_SummaryDetail">
    <div class="cs-container">
        <div class="cs-alert-danger">


            <div class="close-wrap">
                <i class="fa fa-times" onclick="hideSummaryDetail()"></i>
            </div>

            <h2 class="cs-title">PRICE DETAILS</h2>


            <div class="desc-wrap">
                <p class="sub-title">Rental charges</p>



                <div class="detailed-desc-wrap" id="detailedDescWrap">

                </div>

                <hr>

                <p class="sub-title">Taxes and fees</p>

                <div id="taxesAndFees">

                </div>

                <!-- <div class="cs-row">
                    <p>1 Additional Driver</p>
                    <p>$ 50.44</p>
                </div>

                <div class="cs-row border-bottom">
                    <p>1 Additional Driver</p>
                    <p>$ 50.44</p>
                </div> -->


                <p class="cs-text-mini cs-hidden" id="textMini">The amount that is due upon collection of the car</p>

                <div class="total-wrap">
                    <p class="cs-total-head">Total</p>
                    <p class="cs-total"><span id="sumDetailTotal"></span></p>
                </div>


            </div>




        </div>
    </div>
</section>