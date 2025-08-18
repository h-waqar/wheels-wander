class WheelsWander {


    btnNextOne = null;
    btnPageTwoNext = null;
    $ = null;
    carWrap = null;
    btnPageTwoPrev = null;
    templateCarNext = null;
    templateCarPrev = null;
    templateProtectionPrev = null;
    templateProtectionNext = null;
    templateDriverPrev = null;
    templateDriverNext = null;
    payNowLaterNext = null;
    payNowLaterPrev = null;
    templateProtectionPrev = null;
    btnDriverDetailPrev = null;
    btnDriverDetailNext = null;
    discountedPricePerDay = 35;
    seePriceDetail = null;
    btnSecDriverNext = null;
    rentDays = 0;
    currentTotal = 0;
    secProtectionBack = null;
    secDriverBack = null;
    secPaymentBack = null;
    constructor($) {


        this.$ = $;
        this.btnNextOne = this.$('#btnNextOne').get(0);
        this.btnPageTwoNext = this.$('#btnPageTwoNext').get(0);
        this.carWrap = this.$('#carWrap').get(0);

        this.btnPageTwoPrev = this.$('#btnPageTwoPrev').get(0);
        this.templateCarNext = this.$('#templateCarNext').get(0);
        this.templateCarPrev = this.$('#templateCarPrev').get(0);
        this.templateProtectionPrev = this.$('#templateProtectionPrev').get(0);
        this.templateProtectionNext = this.$('#templateProtectionNext').get(0);
        this.templateDriverPrev = this.$('#templateDriverPrev').get(0);
        this.templateDriverNext = this.$('#templateDriverNext').get(0);
        this.payNowLaterNext = this.$('#payNowLaterNext').get(0);
        this.payNowLaterPrev = this.$('#payNowLaterPrev').get(0);
        this.templateProtectionPrev = this.$('#templateProtectionPrev').get(0);
        this.btnDriverDetailPrev = this.$('#btnDriverDetailPrev').get(0);
        this.btnDriverDetailNext = this.$('#btnDriverDetailNext').get(0);
        this.seePriceDetail = this.$('#seePriceDetail').get(0);
        this.btnSecDriverNext = this.$('#btnSecDriverNext').get(0);
        this.secProtectionBack = this.$('#secProtectionBack').get(0);
        this.secDriverBack = this.$('#secDriverBack').get(0);
        this.secPaymentBack = this.$('#secPaymentBack').get(0);





        this.clickListners();



        if (this.secPaymentBack) {
            this.secPaymentBack.addEventListener('click', this.handle_secPaymentBack.bind(this));
        }



        if (this.secDriverBack) {
            this.secDriverBack.addEventListener('click', this.handle_secDriverBack.bind(this));
        }




        if (this.secProtectionBack) {
            this.secProtectionBack.addEventListener('click', this.handle_secProtectionBack.bind(this));
        }



        if (this.btnSecDriverNext) {
            this.btnSecDriverNext.addEventListener('click', this.handle_btnSecDriverNext.bind(this));
        }

        if (this.btnDriverDetailNext) {
            this.btnDriverDetailNext.addEventListener('click', this.handle_btnDriverDetailNext.bind(this));
        }

        if (this.btnDriverDetailPrev) {
            this.btnDriverDetailPrev.addEventListener('click', this.handle_btnDriverDetailPrev.bind(this));
        }

        if (this.templateProtectionPrev) {
            this.templateProtectionPrev.addEventListener('click', this.handle_templateProtectionPrev.bind(this));
        }

        if (this.seePriceDetail) {
            this.seePriceDetail.addEventListener('click', this.handle_seePriceDetail.bind(this));
        }



        // Setting On click listners on buttons
        if (this.payNowLaterPrev) {
            this.payNowLaterPrev.addEventListener('click', this.handle_payNowLaterPrev.bind(this));
        }




        // Setting On click listners on buttons
        if (this.payNowLaterNext) {
            this.payNowLaterNext.addEventListener('click', this.handle_payNowLaterNext.bind(this));
        }


        // Setting On click listners on buttons
        if (this.btnNextOne) {
            this.btnNextOne.addEventListener('click', this.handle_btnNextOne.bind(this));
        }


        if (this.btnPageTwoNext) {
            this.btnPageTwoNext.addEventListener('click', this.handle_btnPageTwoNext.bind(this));
        }



        if (this.carWrap) {
            this.carWrap.addEventListener('click', this.handle_carWrap.bind(this));
        }





        if (this.btnPageTwoPrev) {
            this.btnPageTwoPrev.addEventListener('click', this.handle_btnPageTwoPrev.bind(this));
        }


        if (this.templateCarNext) {
            this.templateCarNext.addEventListener('click', this.handle_templateCarNext.bind(this));
        }


        if (this.templateCarPrev) {
            this.templateCarPrev.addEventListener('click', this.handle_templateCarPrev.bind(this));
        }


        if (this.templateProtectionPrev) {
            this.templateProtectionPrev.addEventListener('click', this.handle_templateProtectionPrev.bind(this));
        }


        if (this.templateProtectionNext) {
            this.templateProtectionNext.addEventListener('click', this.handle_templateProtectionNext.bind(this));
        }


        if (this.templateDriverPrev) {
            this.templateDriverPrev.addEventListener('click', this.handle_templateDriverPrev.bind(this));
        }


        if (this.templateDriverNext) {
            this.templateDriverNext.addEventListener('click', this.handle_templateDriverNext.bind(this));
        }

        this.listenSummaryBtns();
        this.initDatePickers();




        // Attach a change event handler to the checkbox
        $('#additionalDriver').change(function () {

            cs_detail();
            cs_total();
        });



        $('input[name="cs_plan"]').change(function () {
            // var selectedValue = $('input[name="cs_plan"]:checked').val();
            // radioButtonCallback(selectedValue);

            cs_detail();
            cs_total();
        });





    }

    handle_secPaymentBack() {
        this.hideBackBtns();
        this.hideAllSections();
        $("#secDriver").removeClass("cs-hidden");
        $("#secDriverBack").removeClass("cs-hidden");
        $("#btnSecDriverNext").removeClass("cs-hidden");
        $("#titleTemplateProtection").html("Additional driver");

    }

    hideNextBtns() {
        $("#templateProtectionNext").addClass("cs-hidden");
        $("#btnSecDriverNext").addClass("cs-hidden");
    }

    handle_secDriverBack() {
        this.hideBackBtns();
        this.hideAllSections();
        this.hideNextBtns();
        $("#secProtection").removeClass("cs-hidden");
        $("#secProtectionBack").removeClass("cs-hidden");

        $("#templateProtectionNext").removeClass("cs-hidden");

        $("#titleTemplateProtection").html("Select a Protection Plan ");

    }

    hideBackBtns() {
        this.$("#secProtectionBack").addClass("cs-hidden");
        this.$("#secDriverBack").addClass("cs-hidden");
        this.$("#secPaymentBack").addClass("cs-hidden");
    }

    handle_secProtectionBack() {
        this.hideAllPages();
        this.hideBackBtns();

        this.$("#secProtectionBack").removeClass("cs-hidden");
        this.$("#cs_page_TemplateCar").removeClass("cs-hidden");
    }

    initDatePickers() {
        $(function () {
            $("#bookingStart").datepicker(
                {
                    dateFormat: 'yy-mm-dd', // Specify your desired date format
                    changeMonth: true,
                    changeYear: true,
                    minDate: 0 // Set minDate to 0 to disallow previous dates
                }
            );
            $("#bookingEnd").datepicker(
                {
                    dateFormat: 'yy-mm-dd', // Specify your desired date format
                    changeMonth: true,
                    changeYear: true,
                    minDate: 0 // Set minDate to 0 to disallow previous dates
                }
            );

        });



    }


    handle_btnSecDriverNext() {
        this.hideAllSections();


        // if ($('#additionalDriver').is(':checked')) {

        //     $("#csSummaryDesc").append('<p><i class="fa-solid fa-check"></i> Included Additional Driver</p>');
        // }


        cs_total();
        cs_detail();


        this.$("#secPayment").removeClass("cs-hidden");
        this.$("#cs_PagePayment").removeClass("cs-hidden");

        // handle suummary btnls
        this.hideSummarybtns();
        this.$("#btnSecBookNow").removeClass("cs-hidden");

        this.$("#titleTemplateProtection").html("Review and book");

        this.hideBackBtns();
        this.$("#secPaymentBack").removeClass("cs-hidden");


    }

    handle_seePriceDetail() {
        $("#alert_SummaryDetail").removeClass("cs-hidden");
    }

    listenSummaryBtns() {
        console.log("called");

        // Event handler for radio button change
        $('input[name="sizeBy"]').change(function () {
            console.log("function is called");
            if ($('#sizeWeight').prop('checked')) {
                // If "Pay Now" is selected, show "Next Step" button and hide "Book Car" button
                $('#btnSummaryNext').removeClass('cs-hidden');
                $('#btnSummarySubmit').addClass('cs-hidden');
            } else {
                // If "Pay Later" is selected, hide "Next Step" button and show "Book Car" button
                $('#btnSummaryNext').addClass('cs-hidden');
                $('#btnSummarySubmit').removeClass('cs-hidden');
            }
        });

        /**
         * Ignore the Id Names ***********************************
         * As due to client pressure id's are not changes ********
         * #clientDeadline
         * Just focused on Functionality
         */



        // Attach a change event handler to the radio buttons
        $('input[name="cs_plan"]').change(function () {
            // Inside the callback function, check which radio button is selected
            if ($(this).val() === 'payNow') {
                // // If "payNow" is selected, execute this block
                // console.log('Pay now selected');
                // // Your code for "payNow" option goes here
                $("#textMini").addClass("cs-hidden");

                $("#cs_PagePayment").removeClass("cs-hidden");
            } else {
                // If "payLater" is selected, execute this block
                $("#textMini").removeClass("cs-hidden");
                $("#cs_PagePayment").addClass("cs-hidden");

                $("")

                // Your code for "payLater" option goes here
            }
        });


    }





    clickListners() {

        // Protection Page Listners
        $('input[name="protection_type"]').change(function (e) {

            let labels = $('input[name="protection_type"]').siblings('label');

            $(labels).each(function (index, element) {


                $(element).removeClass('cs-invalid');

            });




        });


        /**
         * label
         */

        // $('#additionalDriver').change(function () {
        //     // Check if the checkbox is checked
        //     console.log("called");
        //     if ($(this).is(':checked')) {
        //         // Change the label text
        //         $('#additionalDriverLabel').text('Driver Selected');
        //     } else {
        //         // Change the label text back to the original value
        //         $('#additionalDriverLabel').text('Choose');
        //     }
        // });



        // Attach a change event handler to the radio buttons
        $('input[name="protection_type"]').change(function () {
            // Inside the callback function, check which radio button is selected
            if ($(this).val() === 'basic') {
                // If "payNow" is selected, execute this block

                let html = '<p class="p-protection-para"><i class="fa-solid fa-check"></i> Included Basic Protection</p>';

                $('#csSummaryDesc').find('.p-protection-para').remove();
                $("#csSummaryDesc").append(html);



                // Your code for "payNow" option goes here
            } else {
                // If "payLater" is selected, execute this block










                $('#csSummaryDesc').find('.p-protection-para').remove();

                let html = '<p class="p-protection-para"><i class="fa-solid fa-check"></i> Included Smart Protection</p>';
                $("#csSummaryDesc").append(html);


                // Your code for "payLater" option goes here
            }


            cs_total();
            cs_detail();
            // $("#sumGrandTotal").html(cs_total().toFixed(2));
            // $("#sumDetailTotal").html(cs_total().toFixed(2));



        });


    }



    validateDriverDetailPage() {


        // Driver Detail page validation
        // Flag to track validation status
        var isValid = true;

        // Validate driverFirstName
        var firstName = $('#driverFirstName').val();
        if (!firstName) {
            $('#driverFirstName').addClass('cs-invalid');
            isValid = false;
        } else {
            $('#driverFirstName').removeClass('cs-invalid');
        }

        // Validate driverSurName
        var surName = $('#driverSurName').val();
        if (!surName) {
            $('#driverSurName').addClass('cs-invalid');
            isValid = false;
        } else {
            $('#driverSurName').removeClass('cs-invalid');
        }

        // Validate driverEmail
        var email = $('#driverEmail').val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !email.match(emailRegex)) {
            $('#driverEmail').addClass('cs-invalid');
            isValid = false;
        } else {
            $('#driverEmail').removeClass('cs-invalid');
        }

        // Validate driverPhone
        var phone = $('#driverPhone').val();
        // var phoneRegex = /^\d{10}$/; // Assuming 10-digit phone number
        if (!phone) {
            $('#driverPhone').addClass('cs-invalid');
            isValid = false;
        } else {
            $('#driverPhone').removeClass('cs-invalid');
        }

        // Return the overall validation status
        return isValid;
    }


    manage_summary_btns() {


        var selectedValue = $('input[name="sizeBy"]:checked').val();


        // console.log("Selected Value: " + selectedValue);


        // hide all buttons first
        $("#btnSummaryNext").addClass('cs-hidden');
        $("#btnSummarySubmit").addClass('cs-hidden');


        if (selectedValue == "payNow") {
            // go as usual
            // $("#btnSummaryNext").removeClass('cs-hidden');
            $("#btnSummaryNext").removeClass('cs-hidden');
        } else {
            // dislay the submit button on summary page
            $("#btnSummarySubmit").removeClass('cs-hidden');

        }

    }


    handle_btnDriverDetailNext(e) {

        let validate = this.validateDriverDetailPage();

        if (validate) {


            this.manage_summary_btns();
            // Prepare Summary
            window.wwSummary = new wwSummary(jQuery);
            this.hideAllPages();
            $("#cs_page_BookingSummary").removeClass("cs-hidden");
        }
    }


    // Functions Start
    handle_btnDriverDetailPrev(e) {

        this.hideAllPages();


        // $("#templatePayNowLater").removeClass("cs-hidden");

        this.$('#cs_page_TemplateCar').removeClass("cs-hidden");

    }


    handle_templateProtectionPrev(e) {


        this.$('#cs_page_TemplateProtection').addClass("cs-hidden");
        this.$('#cs_page_TemplateCar').removeClass("cs-hidden");

    }

    handle_payNowLaterPrev(e) {
        // previous pay now later page 

        this.hideAllPages();
        this.$('#cs_page_TemplateCar').removeClass("cs-hidden");
        // this.$("#templatePayNowLater").addClass("cs-hidden");
        // this.$("#templateDriver").removeClass("cs-hidden");
    }

    handle_payNowLaterNext(e) {
        this.hideAllPages();


        // wwSummary.generate();

        window.wwSummary = new wwSummary(jQuery);

        this.$("#templateDriverDetail").removeClass("cs-hidden");
    }


    handle_templateDriverNext(e) {



        this.hideAllPages();


        this.$("#templatePayNowLater").removeClass("cs-hidden");

        console.log("function called");

    }

    handle_templateDriverPrev(e) {
        this.hideAllPages();
        this.$("#cs_page_TemplateProtection").removeClass("cs-hidden");
    }


    validateProtectionPage() {

        let labels = this.$('input[name="protection_type"]').siblings('label');

        if (this.$('input[name="protection_type"]:checked').length > 0) {

            $(labels).each(function (index, element) {

                $(element).removeClass('cs-invalid');

            });


            return true;
        }





        $(labels).each(function (index, element) {

            $(element).addClass('cs-invalid');

        });





        return false;
    }


    hideSummarybtns() {

        $('#templateProtectionNext').addClass("cs-hidden");
        $('#btnSecDriverNext').addClass("cs-hidden");
        $('#btnSecBookNow').addClass("cs-hidden");


    }

    hideAllSections() {
        $("#secDriver").addClass("cs-hidden");
        $("#secProtection").addClass("cs-hidden");
        $("#secPayment").addClass("cs-hidden");
    }


    handle_templateProtectionNext(e) {

        let validate = this.validateProtectionPage();

        if (validate) {
            // this.hideAllPages();
            this.hideAllSections();
            this.hideSummarybtns();
            this.hideBackBtns();


            $("#secDriverBack").removeClass("cs-hidden");



            cs_total();
            cs_detail();

            // 


            // let selectedProtection = $('input[name="protection_type"]:checked').val();

            // if (selectedProtection == 'basic') {
            //     // var sumTxt = '<p><i class="fa-solid fa-check"></i> Included Basic Protection</p>';
            //     let detailedSummaryHtml = '<div class="cs-row border-bottom">';
            //     detailedSummaryHtml += '<p>Basic Protection Cost</p>';
            //     detailedSummaryHtml += '<p>' + _currency + '0</p>';
            //     detailedSummaryHtml += '</div>';
            //     $("#detailedDescWrap").append(detailedSummaryHtml);


            // } else {

            //     // var sumTxt = '<p><i class="fa-solid fa-check"></i> Included Premium Protection</p>';

            //     let detailedSummaryHtml = '<div class="cs-row border-bottom">';
            //     detailedSummaryHtml += '<p>Premium Protection Cost</p>';
            //     detailedSummaryHtml += '<p>' + _currency + (this.rentDays * 10) + '</p>';
            //     detailedSummaryHtml += '</div>';
            //     $("#detailedDescWrap").append(detailedSummaryHtml);
            //     wheelsWander.currentTotal += this.rentDays * 10;
            //     $("#sumGrandTotal").html(wheelsWander.currentTotal);

            // }


            // $('#csSummaryDesc').append(sumTxt);

            this.$("#secDriver").removeClass("cs-hidden");
            this.$("#btnSecDriverNext").removeClass("cs-hidden");



            console.log("called upto here");
            // Set the Title of the page
            this.$("#titleTemplateProtection").html("Additional driver");
        }

    }


    handle_templateProtectionPrev(e) {

        this.hideAllPages();
        this.$("#cs_page_TemplateCar").removeClass("cs-hidden");

    }

    handle_templateCarPrev(e) {

        this.hideAllPages();
        this.$("#cs_page_BookingDetails").removeClass("cs-hidden");


    }

    validateProtectionPage() {


        $('.protection_wrap').removeClass('error-border');

        if (!$('#protectionPrem').is(':checked') && !$('#protectionBasic').is(':checked')) {

            $('.protection_wrap').addClass('error-border');

            return false;
        }



        return true;
    }


    handle_templateCarNext(e) {






        // let validate = this.validateTemplateCarPage();
        let validate = true;


        //work77
        if (validate) {
            this.hideAllPages();


            // let taxCharges = this.rentDays * 6.50;

            // let html = '<div class="cs-row">';
            // html = '<p>1 Additional Driver</p>';
            // html = '<p>' + _currency + taxCharges.toFixed(2); + '</p>';
            // html = '</div>';

            // $("#taxesAndFees").append(html);

            // this.currentTotal += taxCharges;



            // this.$("#sumDetailTotal").html();

            cs_total()

            cs_detail();



            this.$("#cs_page_TemplateProtection").removeClass("cs-hidden");
        }




    }

    hideAllPages() {

        // page one
        this.$("#cs_page_BookingDetails").addClass("cs-hidden");
        // page two
        this.$("#cs_page_PersonalDetails").addClass("cs-hidden");
        this.$("#cs_page_TemplateCar").addClass("cs-hidden");

        // page four
        this.$("#cs_page_TemplateProtection").addClass("cs-hidden");

        // page five
        this.$("#templateDriver").addClass("cs-hidden");

        // pay now or later
        this.$("#templatePayNowLater").addClass("cs-hidden");

        // Summary Page
        this.$("#cs_page_BookingSummary").addClass("cs-hidden");

        // Driver Detail page

        this.$("#templateDriverDetail").addClass("cs-hidden");

        // Card Information Page
        this.$("#cs_PagePayment").addClass("cs-hidden");







    }



    handle_btnPageTwoPrev(e) {

        this.hideAllPages();
        this.$("#cs_page_BookingDetails").removeClass("cs-hidden");

    }


    validatePersonalInfo() {





        var bookerName = $("#bookerName").val();
        var bookerEmail = $("#bookerEmail").val();
        var lastName = $("#lastName").val();





        var validationErrors = [];

        if (!bookerName || /[^a-zA-Z\s]/.test(bookerName)) {
            validationErrors.push("Booker Name is required");
            this.$("#bookerName").addClass("cs-invalid");
        } else {
            this.$("#bookerName").removeClass("cs-invalid");
        }



        // For Last Name
        if (!lastName || /[^a-zA-Z\s]/.test(lastName)) {
            validationErrors.push("Last Name is required");
            this.$("#lastName").addClass("cs-invalid");

        } else {
            this.$("#lastName").removeClass("cs-invalid");

        }







        if (!bookerEmail || !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(bookerEmail)) {
            validationErrors.push("Booker Email is required or invalid");
            this.$("#bookerEmail").addClass("cs-invalid");

        } else {
            this.$("#bookerEmail").removeClass("cs-invalid");

        }






        if (validationErrors.length > 0) {
            // Display all validation errors
            for (var i = 0; i < validationErrors.length; i++) {
                console.log(validationErrors[i]);
            }
            return false;
        }


        return true;


    }

    handle_btnPageTwoNext(e) {


        let validation = this.validatePersonalInfo();

        if (validation) {

            // move to next
            this.setPerDayCarPrice();
            this.hideAllPages();
            this.$("#cs_page_TemplateCar").removeClass("cs-hidden");

        }
    }



    setPerDayCarPrice() {

        let p = pricePerDay;

        console.log(p);
        if (discountCodeValid) {
            p = this.discountedPricePerDay;
        }
        $("#uiCarPerDayPrice").html(_currency + ' ' + p + '/Day');

    }

    handle_carWrap(e) {
        // move from car select to next page
    }

    validateStepOne() {





        var bookingStart = this.$("#bookingStart").val();
        var bookingEnd = this.$("#bookingEnd").val();
        var bookingStartTime = this.$("#bookingStartTime").val();
        var bookingEndTime = this.$("#bookingEndTime").val();






        var csPickup = this.$("#csPickup").get(0);
        var csReturn = this.$("#csReturn").get(0);


        var validationErrors = [];




        // check selections
        var nearestInputWrap = this.$(csPickup).closest('.input_wrap');
        if (this.$(csPickup).val() == '') {
            this.$(nearestInputWrap).addClass('cs-invalid');
        } else {
            this.$(nearestInputWrap).removeClass('cs-invalid');
        }



        var nearestInputWrap = this.$(csReturn).closest('.input_wrap');

        if (this.$(csReturn).val() == '') {

            this.$(nearestInputWrap).addClass('cs-invalid');
        } else {
            this.$(nearestInputWrap).removeClass('cs-invalid');

        }




        var startDate = new Date(bookingStart + " " + bookingStartTime);
        var endDate = new Date(bookingEnd + " " + bookingEndTime);

        if (startDate >= endDate) {
            validationErrors.push("Starting Time is greater than ending time");
            alert("Sorry: Your Booking start time is greater than or equal to booking end time");
            // alert("Error: Start date and time cannot be greater than end date and time.");
        } 







        if (!bookingStart) {
            validationErrors.push("Date selection is mandatory.");
            $("#bookingStart").addClass('cs-invalid');
        } else {
            $("#bookingStart").removeClass('cs-invalid');

        }




        if (!bookingEnd) {
            validationErrors.push("Date selection is mandatory.");
            $("#bookingEnd").addClass('cs-invalid');
        } else {
            $("#bookingEnd").removeClass('cs-invalid');

        }








        if (!bookingStartTime) {
            validationErrors.push("bookingStartTime is mandatory.");

            $("#bookingStartTime").addClass('cs-invalid');

        } else {
            $("#bookingStartTime").removeClass('cs-invalid');

        }



        if (!bookingEndTime) {
            validationErrors.push("bookingEndTime is mandatory.");

            $("#bookingEndTime").addClass('cs-invalid');

        } else {
            $("#bookingEndTime").removeClass('cs-invalid');

        }





        days = calculateDays(bookingStart, bookingEnd);




        if (new Date(bookingStart) - new Date(bookingEnd) > 0) {
            validationErrors.push("End date cannot be smaller than start date.");

            $("#bookingStart, #bookingEnd").addClass('cs-invalid');
        }



        if (days < 1) {
            validationErrors.push("Please select dates at least 1 day apart.");
            if (summaryGeneration)
                $("#bookingStart, #bookingEnd").addClass('cs-invalid');
        }


        if (!window._carsAvailable) {
            validationErrors.push("Cars Are Not Available");
            this.$("#paraCarsAvailable").removeClass("cs-hidden");
            // this.$("#paraCarsAvailable").addClass("cs-invalid");
            this.$("#paraCarsAvailable").html("Unfortunately, no cars are available during the time you have selected.");


        }


   

        if (validationErrors.length > 0) {
            // Display all validation errors
            for (var i = 0; i < validationErrors.length; i++) {
                console.log(validationErrors[i]);
            }
            return false;
        }


        return true;




    }

    calculateBookingDays(startDate, startTime, endDate, endTime) {
        // Combine date and time strings to create JavaScript Date objects
        var startDateTime = new Date(startDate + ' ' + startTime);
        var endDateTime = new Date(endDate + ' ' + endTime);

        // Calculate the difference in milliseconds
        var timeDifference = endDateTime - startDateTime;

        // Convert milliseconds to hours
        var hours = timeDifference / (1000 * 60 * 60);

        // Calculate the number of days
        var days = Math.ceil(hours / 24);

        // console.log('Total hours:', hours);
        // console.log('Number of days:', days);

        return days;
    }



    handle_btnNextOne(e) {



        let status = this.validateStepOne();

        if (status) {
            // move to next page
            // this.$("#cs_page_BookingDetails").addClass('cs-hidden');
            let bookingStart = $("#bookingStart").val();
            let bookingStartTime = $("#bookingStartTime").val();
            let bookingEnd = $("#bookingEnd").val();
            let bookingEndTime = $("#bookingEndTime").val();


            let rentalDays = this.calculateBookingDays(bookingStart, bookingStartTime, bookingEnd, bookingEndTime)
            this.rentDays = rentalDays;


            // $("#sumPickupDate").html($("#bookingStart").val() + ' ' + $("#bookingStartTime").val());
            // $("#sumDropDate").html($("#bookingEnd").val() + ' ' + $("#bookingEndTime").val());


            let carRent = rentalDays * 35;

            $("#totalCarPrice").html(carRent);

            if (rentalDays == 1) {
                $("#tvRentalDays").html(rentalDays + ' Rental Day');

            } else {
                $("#tvRentalDays").html(rentalDays + ' Rental Days');

            }






            $("#sumRentalDetail").html(rentalDays);

            $('#sumPerDayPrice').html(pricePerDay);
            $('#sumCarRentTotal').html(pricePerDay * rentalDays);
            $("#sumGrandTotal").html(pricePerDay * rentalDays);

            wwSummary.total = pricePerDay * rentalDays;
            wheelsWander.currentTotal = pricePerDay * rentalDays;







            this.hideAllPages();
            this.$("#cs_page_TemplateCar").removeClass("cs-hidden");
        }
    }



}

jQuery(document).ready(() => {
    window.wheelsWander = new WheelsWander(jQuery);
});


