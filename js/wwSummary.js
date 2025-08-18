class wwSummary {

    $ = null;
    selectedProtection = null;
    isAdditionalDriverSelected = null;
    payNowLater = null;
    bookingStart = null;
    bookingStartTime = null;
    bookingEnd = null;
    bookingEndTime = null;
    discountCodeValid = null;
    bookingDays = null;
    total = 0;
    taxPrice = 6.50;
    SmartProtectionPerDayCost = 10;
    perDayDriverCost = null;
    singleCarRentPerDay = null;
    driverPerDayCost = 10;



    constructor($) {

        this.$ = $;
        // this.init();
        // this.totalCalculation();
        // this.uiGeneration();


        // Display Billing Information in Payment Method Fields
        // displayBillingInfo();
    }


    uiGeneration() {
        let protection = this.selectedProtection.charAt(0).toUpperCase() + this.selectedProtection.slice(1);
        $("#tdProtectionType").html(protection);
        $("#singleCarRentPerDay").html(_currency + '' + this.singleCarRentPerDay);
        $("#csTotalPrice").html(_currency + '' + this.total);

        let guests = $("#bookingGuests").val();



        $("#uiGuests").html(guests);
        $("#summaryDays").html(this.bookingDays);
        $("#taxFee").html(_currency + '' + (this.bookingDays * this.taxPrice));

        this.$("#carTotalRent").html(_currency + '' + (this.bookingDays * this.singleCarRentPerDay))


        if (this.isAdditionalDriverSelected) {
            $("#additionalDriverRow").removeClass("cs-hidden");
            $("#additionalDriverFee").html(_currency + '' + (this.bookingDays * this.driverPerDayCost));

        }


    }

    totalCalculation() {
        let t = 0;

        let daysAmount = this.bookingDays * this.singleCarRentPerDay;


        let tax = this.bookingDays * this.taxPrice;


        let additionalDriver = this.bookingDays * this.perDayDriverCost;

        let protectionPrice = 0
        if (this.selectedProtection == 'premium') {
            protectionPrice = this.bookingDays * this.SmartProtectionPerDayCost;
        }
        // let protection = this.bookingDays * this.

        t = daysAmount + tax + additionalDriver + protectionPrice;

        this.total = t;
        this.$("#totalAmount").val(t);




        // var perDayFee = (days * 6.5) * bookedCars;
        // var price = (days * pricePerDay) * bookedCars;

        // // var threePercent = 0.03 * price;
        // // var totalPrice = threePercent + price;
        // var totalPrice = price + perDayFee;


    }










    init() {

        // premium
        // basic
        this.selectedProtection = $('input[name="protection_type"]:checked').val();
        this.payNowLater = $('input[name="pay_now_later"]:checked').val();
        this.isAdditionalDriverSelected = $('#additionalDriver').prop('checked');
        this.bookingStart = $('#bookingStart').val();
        this.bookingEnd = $('#bookingEnd').val();
        this.bookingStartTime = $('#bookingStartTime').val();
        this.bookingEndTime = $('#bookingEndTime').val();
        // this.discountCodeValid = discountCodeValid;



        this.bookingDays = calculateDays(this.bookingStart, this.bookingEnd);
        this.bookingDays = wheelsWander.calculateBookingDays(this.bookingStart, this.bookingStartTime, this.bookingEnd, this.bookingEndTime);


        // if (discountCodeValid) {
        //     this.singleCarRentPerDay = 35;
        // } else {
        //     this.singleCarRentPerDay = 50;
        // }


    }





}

// jQuery(document).ready(() => {
//     window.wwSummary = new wwSummary(jQuery);
// });

