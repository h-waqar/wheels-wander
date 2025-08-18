<div class="booking-pay-summary cs-hidden" id="cs_page_BookingSummary">
    <!--<div class="booking-pay-summary" id="cs_page_BookingSummary">-->

    <h4 class="bg-h4 cs-heading"> Summary </h4>

    <input type="text" id="totalAmount" hidden>

    <p>Please take a moment to review your order</p>


    <div class="cs-body">



        <table class="tbl-booking-summary">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>



                <tr>
                    <td>Days:</td>
                    <td><span class="summary-value summary-days" id="summaryDays"></span></td>
                </tr>
                <tr>
                    <td>Guests:</td>
                    <td class="summary-value summary-guests" id="uiGuests"></td>
                </tr>


                <tr>
                    <td>Protection Type</td>
                    <td class="summary-value" id="tdProtectionType"></td>
                </tr>

                <!-- <tr>
                    <td>Number Of Cars:</td>
                    <td class="summary-value summary-booked-cars"></td>
                </tr> -->



                <tr>
                    <td>Per Day Fee (€6.50):</td>
                    <td><span class="summary-value summary-fee" id="taxFee"></span></td>
                </tr>
                <!-- <tr>
                <td>3% credit card charges:</td>
                <td><span class="summary-value summary-credit-charges">$</span></td>
            </tr> -->


                <tr>
                    <td>Car Rent (<span id="singleCarRentPerDay">€50</span> / day)</td>
                    <td><span class="summary-value single-car-rent-per-day" id="carTotalRent"></span></td>
                </tr>


                <tr id="additionalDriverRow" class="cs-hidden">
                    <td>Additional Driver (€10 / day):</td>
                    <td><span class="summary-value" id="additionalDriverFee"></span></td>
                </tr>



                <tr>
                    <td>Total Price:</td>
                    <td><span class="summary-value summary-total" id="csTotalPrice"></span></td>
                </tr>
            </tbody>
        </table>


        <div class="row row-pay-now-later">


            <fieldset>
                <legend>Choose a Payment Plan</legend>
                <div class="toggle">
                    <input type="radio" name="sizeBy" value="payNow" id="sizeWeight" checked="checked" />
                    <label for="sizeWeight">Pay Now (<?php echo CS_WHEELS_WANDER_CURRENCY;  ?>400)</label>
                    <input type="radio" name="sizeBy" value="payLater" id="sizeDimensions" />
                    <label for="sizeDimensions">Pay Later (<?php echo CS_WHEELS_WANDER_CURRENCY;  ?>550)</label>
                </div>
                <!-- <p class="status">Toggle is <span>auto width</span><span>full width</span>.</p> -->
            </fieldset>


        </div>


        <div class="btn_wrap">
            <button class="cs-button-outline" id="btnSummaryPrev" onclick="prevSummaryPage()"> Previous</button>

            <button class="cs-primary-button" id="btnSummaryNext" onclick="stepSummaryContinue()"> Next Step</button>


            <button class="cs-primary-button cs-hidden" id="btnSummarySubmit" onclick="submitForm(this)"> Book Car</button>




        </div>


    </div>
    <!-- cs-body ends -->



</div>