$ = jQuery;
discountCodeValid = false;
_carsAvailable = true; // published value is false || true is for testing purpose
_currency = "€";

function submitForm() {
  $("input").addClass("cs-error");

  var selectedValue = $('input[name="cs_plan"]:checked').val();
  var payNow = false;
  if (selectedValue == "payNow") {
    payNow = true;
  }

  if (!validateDriverInfo()) return;

  //unitTesting
  if (payNow) {
    // Only Validate this if the Pay Now is false

    if (!validateCardInfo()) {
      console.log(validateCardInfo());
      return;
    }
  }

  runSpinner(true);

  // Get values from input elements
  // const bookerName = $("#bookerName").val();
  // const lastName = $("#lastName").val();

  const bookingStart = $("#bookingStart").val();
  const bookingEnd = $("#bookingEnd").val();
  // const bookingGuests = $("#bookingGuests").val();
  // const bookingDiscountCode = $("#bookingDiscountCode").val();
  // const bookerEmail = $("#bookerEmail").val();
  // const bookedCars = $("#bookedCars").val();

  if (payNow) {
    // billing Information

    // three extra fields
    var csFirstName = $("#csNFirstName").val();
    var csLastName = $("#csNLastName").val();
    // var csEmail = $("#csNEmail").val();

    var csAddress = $("#csAddress").val();
    var csCity = $("#csCity").val();
    var csState = $("#csState").val();
    var csPostalCode = $("#csPostalCode").val();
    var csCountry = $("#csCountry").val();

    // These are the Card Information
    var cardHolderName = $("#payment_CardHolderName").val();

    var cardNumber = $("#payment_CardNumber").val();
    var cardCvv = $("#payment_CardCvv").val();
    var expMonth = $("#month").val();
    var expYear = $("#year").val();
    var cardType = $("#cardType").val();
  }

  // These are the alerts for

  // get driver detail
  const driverFirstName = $("#driverFirstName").val();
  const driverSurName = $("#driverSurName").val();
  const driverEmail = $("#driverEmail").val();
  const driverPhone =
    $("#driverCountryCode").val() + " " + $("#driverPhone").val();

  // const checkbox25YearsOrOlder = $('#checkbox25YearsOrOlder').val();

  const totalAmount = cs_total();

  // New Information Told By client
  // const csPickup = $('#csPickup').val();
  // const csReturn = $('#csReturn').val();
  const bookingStartTime = $("#bookingStartTime").val();
  const bookingEndTime = $("#bookingEndTime").val();

  var selectedProtection = $('input[name="protection_type"]:checked').val();

  var payNowLater = $('input[name="cs_plan"]:checked').val();

  // Additoinal Driver value
  // Check if the checkbox is checked
  var isDriverChecked = $("#additionalDriver").is(":checked");

  // Store the value based on checkbox status
  var addtionalDriverStatus = isDriverChecked ? "yes" : "no";

  var formData = new FormData();
  formData.append("action", "book_my_car");
  // formData.append("bookerName", bookerName);
  // formData.append("lastName", lastName);
  formData.append("bookingStart", bookingStart);
  formData.append("bookingEnd", bookingEnd);
  // formData.append("bookingGuests", bookingGuests);
  // formData.append("bookingDiscountCode", bookingDiscountCode);
  // formData.append("bookerEmail", bookerEmail);
  // formData.append("bookedCars", bookedCars);

  if (payNow) {
    // Billing Information

    formData.append("csFirstName", csFirstName);
    formData.append("csLastName", csLastName);
    // formData.append("csEmail", csEmail);

    formData.append("csAddress", csAddress);
    formData.append("csCity", csCity);
    formData.append("csState", csState);
    formData.append("csPostalCode", csPostalCode);
    formData.append("csCountry", csCountry);

    // appended form data of the card

    formData.append("cardHolderName", cardHolderName);
    formData.append("cardNumber", cardNumber);
    formData.append("cardCvv", cardCvv);
    formData.append("expMonth", expMonth);
    formData.append("expYear", expYear);
    formData.append("cardType", cardType);
  }

  // Additional Information New added by client
  formData.append("protectionPlan", selectedProtection);
  formData.append("isAdditionalDriverSelected", addtionalDriverStatus);
  formData.append("payNowLater", payNowLater);

  // driver detail
  formData.append("driverFirstName", driverFirstName);
  formData.append("driverSurName", driverSurName);
  formData.append("driverEmail", driverEmail);
  formData.append("driverPhone", driverPhone);
  // formData.append("checkbox25YearsOrOlder", checkbox25YearsOrOlder);

  // formData.append("csPickup", csPickup);
  // formData.append("csReturn", csReturn);
  formData.append("bookingStartTime", bookingStartTime);
  formData.append("bookingEndTime", bookingEndTime);
  formData.append("totalAmount", totalAmount);
  formData.append("rentalDays", rentDays());

  // console.log(formData);
 
  // return;

  // //

  // // console.log(formData);

  // const formDataa = new FormData();
  // formDataa.append("action", "book_my_car");

  $.ajax({
    url: ajax_object.ajax_url,
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      //TODO Handle the response and do right action.
      let res = JSON.parse(response);

      runSpinner(false);

      if (res.success) {
        // $("#cs_PagePayment").addClass("cs-hidden");
        wheelsWander.hideAllPages();
        $("#cs_page_ThankYou").removeClass("cs-hidden");

        // alert("Thank you for booking a ride with us.");
      } else {
        // Response is not Correct display Error Message
        alertDanger("Error in processing your application", res.error);
      }

      // console.log('This is the response That we are going to validate');
      // console.log(response);

      //TODO, clear the response;
    },
  });
}

function checkSelection(dateInputId) {
  var selectedDate = new Date($("#" + dateInputId).val());
  var today = new Date();

  if (selectedDate < today) {
    var formattedToday = today.toISOString().split("T")[0];
    $("#" + dateInputId).val(formattedToday);
  }
}

$("#bookingStart, #bookingEnd").on("change", function () {
  checkSelection(this.id);
});

function calculateDays(s, e) {
  return Math.ceil((new Date(e) - new Date(s)) / 86400000) + 1;
}

var pricePerDay = 50;
var days = 0;

function doFieldsValidation(summaryGeneration) {
  var bookerName = $("#bookerName").val();
  var bookerEmail = $("#bookerEmail").val();
  var bookingStart = $("#bookingStart").val();
  var bookingEnd = $("#bookingEnd").val();
  var lastName = $("#lastName").val();

  var validationErrors = [];

  if (!bookerName || /[^a-zA-Z\s]/.test(bookerName)) {
    validationErrors.push("Booker Name is required");
    if (summaryGeneration) $("#bookerName").addClass("cs-invalid");
  }

  // For Last Name
  if (!lastName || /[^a-zA-Z\s]/.test(lastName)) {
    validationErrors.push("Last Name is required");
    if (summaryGeneration) $("#lastName").addClass("cs-invalid");
  }

  if (
    !bookerEmail ||
    !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(bookerEmail)
  ) {
    validationErrors.push("Booker Email is required or invalid");
    if (summaryGeneration) $("#bookerEmail").addClass("cs-invalid");
  }

  if (!bookingStart || !bookingEnd) {
    validationErrors.push("Date selection is mandatory.");
    if (summaryGeneration)
      $("#bookingStart, #bookingEnd").addClass("cs-invalid");
  }

  if (window.discountCodeValid) pricePerDay = 35;
  days = calculateDays(bookingStart, bookingEnd);

  if (new Date(bookingStart) - new Date(bookingEnd) > 0) {
    validationErrors.push("End date cannot be smaller than start date.");
    if (summaryGeneration)
      $("#bookingStart, #bookingEnd").addClass("cs-invalid");
  }

  if (days < 1) {
    validationErrors.push("Please select dates at least 1 day apart.");
    if (summaryGeneration)
      $("#bookingStart, #bookingEnd").addClass("cs-invalid");
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

// #f6f6f6 gray color code for summary background
function generateSummary(a) {
  // Remove cs-invalid class from all input fields
  $("input").removeClass("cs-invalid");
  var bookingGuests = $("#bookingGuests").val();
  var bookedCars = $("#bookedCars").val();

  // if (!doFieldsValidation(a)) return;

  console.log(_carsAvailable);

  if (!_carsAvailable) {
    // display no car available notification
    alertDanger(
      "No cars are available for the dates you have selected.",
      "Please choose alternative dates or adjust the number of cars selected to view availability. Unfortunately, we are unable to process your booking with the current dates and number of cars chosen."
    );
    return;
  }

  var perDayFee = days * 6.5 * bookedCars;
  var price = days * pricePerDay * bookedCars;

  // var threePercent = 0.03 * price;
  // var totalPrice = threePercent + price;
  var totalPrice = price + perDayFee;

  $(".summary-days").html(days);
  $(".summary-guests").html(bookingGuests);
  $(".summary-booked-cars").html(bookedCars);

  $(".summary-fee").html(_currency + perDayFee);
  // $(".summary-credit-charges").html(Math.round(threePercent));
  $(".summary-total").html(_currency + totalPrice);
  $(".single-car-rent-per-day").html(_currency + pricePerDay);
  $("#summaryMainTotal").html(_currency + totalPrice);

  // Display Billing Information
  displayBillingInfo();

  // Move to the next page if there are no validation errors
  // Only Move next if user click on next button
  if (a) handle_pageTwo_Continue();
}

function displayBillingInfo() {
  var bookerName = $("#bookerName").val();
  var lastName = $("#lastName").val();
  var bookerEmail = $("#bookerEmail").val();

  $("#csBillingName").val(bookerName + " " + lastName);
  $("#csBillingEmail").val(bookerEmail);
}

function validateCardInfo() {
  // These are the Card Information
  var cardHolderName = $("#payment_CardHolderName").val();
  var cardNumber = $("#payment_CardNumber").val();
  var cardCvv = $("#payment_CardCvv").val();
  var expMonth = $("#month").val();
  var expYear = $("#year").val();
  var cardType = $("#cardType").val();

  // Remove cs-invalid class from all input fields related to card information
  $(
    "#payment_CardHolderName, #payment_CardNumber, #payment_CardCvv, #month, #year, #cardType"
  ).removeClass("cs-invalid");

  var validationErrors = [];

  // Validate Card Number
  if (
    !cardNumber ||
    !/^\d+$/.test(cardNumber) ||
    (cardNumber.length !== 15 && cardNumber.length !== 16)
  ) {
    validationErrors.push(
      "Invalid Card Number. Please enter a valid 15 or 16 digit number"
    );
    $("#payment_CardNumber").addClass("cs-invalid");
  }

  // Validate Card Holder Name
  if (!cardHolderName || /[^a-zA-Z\s]/.test(cardHolderName)) {
    validationErrors.push(
      "Invalid Card Holder Name. Please enter a valid name without special characters or numbers"
    );
    $("#payment_CardHolderName").addClass("cs-invalid");
  }

  // Validate Card CVV
  if (
    !cardCvv ||
    !/^\d+$/.test(cardCvv) ||
    cardCvv.length < 3 ||
    cardCvv.length > 5
  ) {
    validationErrors.push(
      "Invalid Card CVV. Please enter a valid 3 to 5 digit number"
    );
    $("#payment_CardCvv").addClass("cs-invalid");
  }

  // Validate Expiry Month
  if (!expMonth) {
    validationErrors.push("Expiry Month is required");
    $("#month").addClass("cs-invalid");
  }

  // Validate Expiry Year
  if (!expYear) {
    validationErrors.push("Expiry Year is required");
    $("#year").addClass("cs-invalid");
  }

  // Validate Card Type
  if (!cardType) {
    validationErrors.push("Card Type is required");
    $("#cardType").addClass("cs-invalid");
  }

  if (!isTermsChecked()) {
    validationErrors.push("Terms and Conditions are not checked");
    $("#checkboxSymbol").addClass("cs-invalid");
  } else {
    $("#checkboxSymbol").removeClass("cs-invalid");
  }

  if (validationErrors.length > 0) {
    // Display all validation errors
    for (var i = 0; i < validationErrors.length; i++) {
      console.log(validationErrors[i]);
    }
    return false; // Indicate that there are validation errors
  }

  return true; // Indicate that card information is valid
}

function isValidEmail(email) {
  // Regular expression for a simple email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

function validateDriverInfo() {
  // These are the Card Information
  var driverFirstName = $("#driverFirstName").val();
  var driverSurName = $("#driverSurName").val();
  var driverEmail = $("#driverEmail").val();
  var driverCountryCode = $("#driverCountryCode").val();
  var driverPhone = $("#driverPhone").val();

  // Remove cs-invalid class from all input fields related to card information
  $(
    "#driverFirstName, #driverSurName, #driverEmail, #driverCountryCode, #driverPhone, #checkboxSymbol"
  ).removeClass("cs-invalid");

  var validationErrors = [];

  // Validate Card Holder Name
  if (!driverFirstName || /[^a-zA-Z\s]/.test(driverFirstName)) {
    validationErrors.push("Driver Name Validation Error");
    $("#driverFirstName").addClass("cs-invalid");
  }

  // Validate Card Holder Name
  if (!driverSurName || /[^a-zA-Z\s]/.test(driverSurName)) {
    validationErrors.push("Driver Surname Validation Error");
    $("#driverSurName").addClass("cs-invalid");
  }

  if (!isValidEmail(driverEmail)) {
    validationErrors.push("Driver Email Validation Error");
    $("#driverEmail").addClass("cs-invalid");
  }

  if (driverCountryCode.trim() === "") {
    validationErrors.push("Country code is not selected");
    $("#driverCountryCode").addClass("cs-invalid");
  }

  if (driverPhone.trim() === "") {
    validationErrors.push("Driver Phone Number is selected");
    $("#driverPhone").addClass("cs-invalid");
  }

  if (!isTermsChecked()) {
    validationErrors.push("Terms and Conditions are not checked");
    // $("#cardType").addClass('cs-invalid');

    $("#checkboxSymbol").addClass("cs-invalid");
  }

  if (validationErrors.length > 0) {
    // Display all validation errors
    for (var i = 0; i < validationErrors.length; i++) {
      console.log(validationErrors[i]);
    }
    return false; // Indicate that there are validation errors
  }

  return true; // Indicate that card information is valid
}

function display_coupon_status(e) {
  // display success coupon notification

  $("#csCouponSuccess").addClass("cs-hidden");
  $("#csInvalidCoupon").addClass("cs-hidden");

  if (e) {
    $("#csCouponSuccess").removeClass("cs-hidden");
  } else {
    $("#csInvalidCoupon").removeClass("cs-hidden");
  }
}

function checkEmptyCoupon(bookingDiscountCode) {
  if (bookingDiscountCode === "") {
    $("#error_CouponCodeEmpty").removeClass("cs-hidden");

    // hide if other coupon codes are applied
    $("#csCouponSuccess").addClass("cs-hidden");
    $("#csInvalidCoupon").addClass("cs-hidden");

    window.discountCodeValid = false;

    return false;
  }

  $("#error_CouponCodeEmpty").addClass("cs-hidden");

  return true;
}

$("#bookingDiscountCode").on("input", function () {
  // This function will be executed when the user starts typing
  $("#error_CouponCodeEmpty").addClass("cs-hidden");
});

function setCouponToSuccessDialog(bookingDiscountCode) {
  $("#output_couponCode").html(bookingDiscountCode);
}

function showDiscountedAmount(amount) {
  $("#output_DiscountDollars").html(amount);
}

function generateTotalFromSummary() {
  console.log("function is called");

  // Only Generate Summary if required attributes are filled
  if (doFieldsValidation(false)) {
    generateSummary(false);
  }
}

function applyDiscountCode(el) {
  var bookingDiscountCode = $("#bookingDiscountCode").val();

  if (!checkEmptyCoupon(bookingDiscountCode)) return;
  else $("#error_CouponCodeEmpty").addClass("cs-hidden");

  runSpinner(true);

  var formData = new FormData();
  formData.append("action", "book_my_car_discount");
  formData.append("bookingDiscountCode", bookingDiscountCode);

  $.ajax({
    url: ajax_object.ajax_url,
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      runSpinner(false);
      var r = JSON.parse(response);

      if (r.success) {
        window.discountCodeValid = true;

        // Pending
        //showDiscountedAmount(amount);
        setCouponToSuccessDialog(bookingDiscountCode);
        display_coupon_status(true);

        // var booked
        // $("#output_DiscountDollars").html(_currency + )
      } else {
        display_coupon_status(false);
        window.discountCodeValid = false;
      }

      generateTotalFromSummary();
    },
  });
}

// ------> Code By Pro-X
// Pages
const page_ElectricFiat = document.getElementById("cs_page_ElectricFiat");
const page_BookingDetails = document.getElementById("cs_page_BookingDetails");
const page_BookingSummary = document.getElementById("cs_page_BookingSummary");

// Buttons
// const btn_BookNow = document.getElementById('cs_btn_BookNow');
const pageTwo_Prev = document.getElementById("cs_pageTwo_Prev");
const pageTwo_Continue = document.getElementById("cs_pageTwo_Continue");

// Handlers
// btn_BookNow.addEventListener('click', handle_BookNowBtn);
// pageTwo_Prev.addEventListener('click', handle_pageTwo_Prev);

// pageTwo_Continue.addEventListener('click', handle_pageTwo_Continue);

function handle_BookNowBtn() {
  // page_ElectricFiat.classList.add('cs-hidden'); // Page 1
  page_BookingDetails.classList.remove("cs-hidden"); // Page 2
  page_BookingSummary.classList.add("cs-hidden"); // Page 3
}

function handle_pageTwo_Prev() {
  // page_ElectricFiat.classList.remove('cs-hidden'); // Page 1
  page_BookingDetails.classList.add("cs-hidden"); // Page 2
  page_BookingSummary.classList.add("cs-hidden"); // Page 3
}

function handle_pageTwo_Continue() {
  // page_ElectricFiat.classList.add('cs-hidden'); // Page 1
  page_BookingDetails.classList.add("cs-hidden"); // Page 2
  page_BookingSummary.classList.remove("cs-hidden"); // Page 3
}

function hideAlertDanger(e) {
  document.getElementById("alert_ValidPassport").remove();
}

function hideSummaryDetail(e) {
  document.getElementById("alert_SummaryDetail").classList.add("cs-hidden");
}

function stepSummaryContinue() {
  $("#cs_page_BookingSummary").addClass("cs-hidden");
  $("#cs_PagePayment").removeClass("cs-hidden");
}

function prevPaymentPage() {
  $("#cs_page_BookingSummary").removeClass("cs-hidden");
  $("#cs_PagePayment").addClass("cs-hidden");
}

function prevSummaryPage() {
  wheelsWander.hideAllPages();
  this.$("#templateDriverDetail").removeClass("cs-hidden");
  // $("#cs_page_BookingSummary").addClass("cs-hidden");

  // $("#templatePayNowLater").removeClass('cs-hidden');
}

function showParaCarsAvailablity() {
  $("#paraCarsAvailable").removeClass("cs-hidden");
  $("#paraCarsAvailable").css("color", "green");
}

function checkCarsAvailibility() {
  var startDate = $("#bookingStart").val();
  var endDate = $("#bookingEnd").val();

  var bookedCars = 1;

  if (startDate == "" || endDate == "") return;

  if (calculateDays(startDate, endDate) < 1) {
    return;
  }

  runSpinner(true);

  $("#paraCarsAvailable").removeClass("cs-hidden");
  $("#paraCarsAvailable").css("color", "black");
  $("#paraCarsAvailable").html("Checking Cars Availability...");

  var formData = new FormData();
  formData.append("action", "check_car_availablity");
  formData.append("start_date", startDate);
  formData.append("end_date", endDate);
  formData.append("booked_cars", bookedCars);

  $.ajax({
    url: ajax_object.ajax_url,
    type: "POST",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
      runSpinner(false);

      var r = JSON.parse(response);

      // $("#demoTable").html(r.html);
      if (r.success) {
        if (!r.availability) {
          // if cars are not fully available display him the seleted dates data
          // $("#tableId").html(r.html);

          displayCarsAvailability(
            "Availability of Cars on Your Selected Dates",
            r.html
          );

          _carsAvailable = false;
          $("#paraCarsAvailable").addClass("cs-hidden");

          // showParaCarsAvailablity("not_available");
        } else {
          // Cars are available
          _carsAvailable = true;
          // showParaCarsAvailablity("available");

          $("#paraCarsAvailable").css("color", "green");
          $("#paraCarsAvailable").html("Car is available for booking");
        }
      } else {
      }
    },
  });
}

// This is the Alert Danger function
function displayCarsAvailability(heading, tableBody) {
  let html = `
            
                <section class="alert_ValidPassport" id="alert_ValidPassport">
        <div class="cs-container">
            <div class="cs-alert-danger">



            <div class="content-wrapper">
            <h4>${heading}</h4>
       
            
        </div>

            <table class="tbl-booking-summary">
        <thead>
            <tr>
                <th>Dates</th>
                <th>Number of available cars</th>
            </tr>
        </thead>
        <tbody>
        ${tableBody}
        </tbody>
    </table>




                

                

                <hr>

                <div class="cs-button-wrapper float-end">
                <span class="cs-primary-button"  onclick="hideAlertDanger()">Close</span>
                </div>

            </div>
        </div>
    </section>                

            `;

  const alertAppendBody = document.getElementById("cs_body_BookingCarSection");
  alertAppendBody.insertAdjacentHTML("beforebegin", html);
}

// This is the Alert Danger function
function alertDanger(heading, text) {
  let html = `
            
                <section class="alert_ValidPassport" id="alert_ValidPassport">
        <div class="cs-container">
            <div class="cs-alert-danger">

                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 57 57" preserveAspectRatio="xMidYMid meet" focusable="false">
                        <g id="Error" transform="translate(-167 -573)">
                            <g id="Ellipse_107" data-name="Ellipse 107" transform="translate(167 573)" fill="#cb002c" stroke="#fff" stroke-width="2">
                                <circle cx="28.5" cy="28.5" r="28.5" stroke="none"></circle>
                                <circle cx="28.5" cy="28.5" r="27.5" fill="none"></circle>
                            </g>
                            <g id="Group_11147" data-name="Group 11147" transform="translate(173.466 675.788)">
                                <path id="Path_1906" data-name="Path 1906" d="M34.132-67.181,23.43-85.72a2.193,2.193,0,0,0-1.9-1.1,2.193,2.193,0,0,0-1.9,1.1L8.851-67.048a2.192,2.192,0,0,0,0,2.192,2.193,2.193,0,0,0,1.9,1.1H32.318a2.191,2.191,0,0,0,2.192-2.192,2.19,2.19,0,0,0-.378-1.229Zm-12.6-13.187a1.224,1.224,0,0,1,1.224,1.224l-.313,7.306a.908.908,0,0,1-.911.911.865.865,0,0,1-.911-.911l-.313-7.306A1.224,1.224,0,0,1,21.534-80.368ZM22.64-67.221a1.566,1.566,0,0,1-1.106.457,1.577,1.577,0,0,1-1.108-.457,1.582,1.582,0,0,1-.457-1.109,1.571,1.571,0,0,1,.457-1.106,1.579,1.579,0,0,1,1.108-.46,1.569,1.569,0,0,1,1.106.46,1.571,1.571,0,0,1,.46,1.106A1.573,1.573,0,0,1,22.64-67.221Z" transform="translate(0 0)" fill="#fff"></path>
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="content-wrapper">
                    <h4>${heading}</h4>
                    <p>${text}</p>
                </div>

                <hr>

                <div class="cs-primary-button float-end">
                <span class=""  onclick="hideAlertDanger()">Close</span>
                </div>

            </div>
        </div>
    </section>                

            `;

  const alertAppendBody = document.getElementById("cs_body_BookingCarSection");
  alertAppendBody.insertAdjacentHTML("beforebegin", html);
}

//Here is the function for the Spinner

// runSpinner function
// function runSpinner(runSpinner) {
//     const paymentForm = document.getElementById('payment-form');
//     const spinnerWrapper = document.getElementById('spinner-wrapper');
//     const parentForm = document.getElementById('cs_ParentForm');
//
//     if (runSpinner === true) {
//         paymentForm.classList.add('payment-form');
//         spinnerWrapper.classList.add('spinner-wrapper');
//         parentForm.classList.add('cs_ParentForm');
//     } else {
//         paymentForm.classList.remove('payment-form');
//         spinnerWrapper.classList.remove('spinner-wrapper');
//         parentForm.classList.remove('cs_ParentForm');
//     }
// } // This function need only one (param) if its true Spinner runs
// function openTimePicker() {
//     // Get the input element
//     var timeInput = document.getElementById('bookingStartTime');

//     // Trigger the click event on the input element
//     if (timeInput) {
//       timeInput.click();
//     }
//   }

function isTermsChecked() {
  return $("#cbTermsAndConditions").prop("checked");
}

function isDriverSelected() {
  return $("#additionalDriver").prop("checked");
}

// runSpinner function
function runSpinner(e) {
  const spinnerWrapper = document.getElementById("cs_LoadingSpinner");

  console.log(spinnerWrapper);

  if (e === true) {
    spinnerWrapper.classList.remove("cs-hidden");
  } else {
    spinnerWrapper.classList.add("cs-hidden");
  }
} // This function need only one (param) if its true Spinner runs

function rentDays() {
  let bookingStart = $("#bookingStart").val();
  let bookingStartTime = $("#bookingStartTime").val();
  let bookingEnd = $("#bookingEnd").val();
  let bookingEndTime = $("#bookingEndTime").val();

  let rentalDays = wheelsWander.calculateBookingDays(
    bookingStart,
    bookingStartTime,
    bookingEnd,
    bookingEndTime
  );

  return rentalDays;
}

function cs_total() {
  let bookingStart = $("#bookingStart").val();
  let bookingStartTime = $("#bookingStartTime").val();
  let bookingEnd = $("#bookingEnd").val();
  let bookingEndTime = $("#bookingEndTime").val();

  let rentalDays = wheelsWander.calculateBookingDays(
    bookingStart,
    bookingStartTime,
    bookingEnd,
    bookingEndTime
  );

  var payNowLater = $('input[name="cs_plan"]:checked').val();

  var oneDayRent = 35;
  if (payNowLater == "payLater") {
    var oneDayRent = 50;
  }

  let rent = rentalDays * oneDayRent;

  let tax = 6.5 * rentalDays;

  let protectionCost = 0;
  var selectedValue = $('input[name="protection_type"]:checked').val();
  if (selectedValue == "premium") {
    protectionCost += rentalDays * csSmartProtectionCostPerDay;
  }

  let driverCost = 0;
  if (isDriverSelected()) {
    driverCost += rentalDays * csDriverCostPerDay;
  }

  let total = tax + rent + protectionCost + driverCost;

  $("#sumGrandTotal").html(_currency + "" + total.toFixed(2));
  $("#sumDetailTotal").html(_currency + "" + total.toFixed(2));

  return total;
}

function convertDateFormat(dateString) {
  // Create a Date object from the provided date string
  var date = new Date(dateString);

  // Convert the date to the desired format
  var formattedDate = date.toLocaleDateString("en-US", {
    month: "long",
    day: "numeric",
    year: "numeric",
  });

  return formattedDate;
}

// Function to convert time to AM/PM format
function convertToAMPM(time) {
  var hours = parseInt(time.substring(0, 2), 10);
  var minutes = time.substring(3, 5);
  var ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12;
  hours = hours ? hours : 12; // If hours is 0, set it to 12
  return hours + ":" + minutes + " " + ampm;
}

var csDriverCostPerDay = 5;
var csSmartProtectionCostPerDay = 8;

function cs_detail() {
  // Empty the summary
  $("#detailedDescWrap").empty();
  $("#taxesAndFees").empty();

  let bookingStart = $("#bookingStart").val();
  let bookingStartTime = $("#bookingStartTime").val();
  let bookingEnd = $("#bookingEnd").val();
  let bookingEndTime = $("#bookingEndTime").val();

  let rentalDays = wheelsWander.calculateBookingDays(
    bookingStart,
    bookingStartTime,
    bookingEnd,
    bookingEndTime
  );

  if (
    bookingStart !== "" &&
    bookingEnd !== "" &&
    bookingStartTime != "" &&
    bookingEndTime != ""
  ) {
    $("#sumPickupDate").html(
      convertDateFormat(bookingStart) + " " + convertToAMPM(bookingStartTime)
    );

    $("#sumDropDate").html(
      convertDateFormat(bookingEnd) + " " + convertToAMPM(bookingEndTime)
    );
  }

  /**
   * Set the date values to the summary section
   */

  /**
   * Rental Price Setting
   */

  var payNowLater = $('input[name="cs_plan"]:checked').val();

  var oneDayRent = 35;
  if (payNowLater == "payLater") {
    var oneDayRent = 50;
  }

  let totalRent = rentalDays * oneDayRent;

  let html = "";

  html = `<div class="cs-row">
    <p>${rentalDays} Rental Days x ${_currency + "" + oneDayRent}</p>
    <p>${_currency + totalRent}</p>
</div>`;

  $("#detailedDescWrap").append(html);

  /**
   * Tax Price Set
   */

  let tax = 6.5 * rentalDays;

  html = `<div class="cs-row">
    <p>Taxes and fees (€6.50):</p>
    <p>${_currency + tax.toFixed(2)}</p>
</div>`;

  $("#taxesAndFees").append(html);

  /**
   * Protection Cost Setting
   */

  let protectionCost = 0;
  var selectedValue = $('input[name="protection_type"]:checked').val();
  if (selectedValue == "premium") {
    protectionCost += rentalDays * csSmartProtectionCostPerDay;
    html = `<div class="cs-row">
        <p>Smart Protection  ${
          _currency + "" + csSmartProtectionCostPerDay
        }/Day</p>
        <p>${_currency + protectionCost}</p>
    </div>`;
  } else {
    html = `<div class="cs-row">
        <p>Basic Protection Cost (Free)</p>
        <p>${_currency}0</p>
    </div>`;
  }

  $("#detailedDescWrap").append(html);

  /**
   * Handle Additional Driver
   */
  let driverCost = 0;
  if (isDriverSelected()) {
    driverCost += rentalDays * csDriverCostPerDay;
    html = `<div class="cs-row add-driver-cs-row">
    <p>1 Additional Driver ${_currency + "" + csDriverCostPerDay}/Day</p>
    <p>${_currency + "" + driverCost}</p>
</div>`;
    $("#detailedDescWrap").find(".add-driver-cs-row").remove();

    $("#detailedDescWrap").append(html);

    html = `<p class="para-sum-additional-driver"><i class="fa-solid fa-check"></i> Included Additional Driver</p>`;
    $("#csSummaryDesc").find(".para-sum-additional-driver").remove();

    $("#csSummaryDesc").append(html);
  } else {
    $("#detailedDescWrap").find(".add-driver-cs-row").remove();
    $("#csSummaryDesc").find(".para-sum-additional-driver").remove();
  }

  cs_total();

  // let paymentPlan = getPaymentPlan();
  // if(paymentPlan == "payNow"){

  // }else{

  // }
}

function generateTimeSlots(startTime, endTime) {
  var timeSlots = [];
  var currentSlot = new Date("01/01/2000 " + startTime);

  while (currentSlot <= new Date("01/01/2000 " + endTime)) {
    timeSlots.push(formatTime(currentSlot));
    currentSlot.setMinutes(currentSlot.getMinutes() + 30);
  }

  return timeSlots;
}

function formatTime(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  return (
    (hours < 10 ? "0" : "") + hours + ":" + (minutes === 0 ? "00" : minutes)
  );
}

function showTimeSlots(timeSlotsContainer, timeSlotsWrap, input) {
  $("#datesBg").on("click", function () {
    // Your onclick logic goes here
    // For example, you can add code to handle the click event
    $("#startTimeSlotsContainer").addClass("cs-hidden");
    $("#endTimeSlotsContainer").addClass("cs-hidden");
    $("#datesBg").addClass("cs-hidden");
  });

  $("#datesBg").removeClass("cs-hidden");

  if (timeSlotsContainer == "endTimeSlotsContainer") {
    $("#startTimeSlotsContainer").addClass("cs-hidden");
  } else {
    $("#endTimeSlotsContainer").addClass("cs-hidden");
  }

  var numberOfTimeWraps = $("#" + timeSlotsContainer + " .time-wrap").length;

  if (numberOfTimeWraps > 0) {
    // Time Slots has been already created no need to take any action
    $("#" + timeSlotsContainer).removeClass("cs-hidden");
    return;
  }

  // $('#startTimeSlotsWrap').empty();
  // Example usage
  var startTime = "6:00";
  var endTime = "23:30";
  var timeSlots = generateTimeSlots(startTime, endTime);

  // Iterate through the array and create HTML
  $.each(timeSlots, function (index, time) {
    var $timeWrap = $("<div>", {
      class: "time-wrap",
      "data-time": time,
      on: {
        click: function () {
          var selectedTime = $(this).data("time");

          $("#datesBg").addClass("cs-hidden");

          /**
           * Set the  bg color and color to default of each time slot
           */

          $("#" + timeSlotsWrap + " .time-wrap").each(function () {
            // Set background color to black
            $(this).css("background-color", "#f4f4f9");
            // Set text color to white
            $(this).css("color", "rgba(0,0,0,0.5)");
          });

          // Change the style for selected time slot
          $(this).css("background-color", "black");
          $(this).css("color", "white");

          $("#" + input).val(selectedTime);
          $("#" + timeSlotsContainer).addClass("cs-hidden");
        },
      },
    });

    var $span = $("<span>", {
      text: time,
    });

    $timeWrap.append($span);
    // Append to the body or your desired container

    $("#" + timeSlotsWrap).append($timeWrap); // Append to the body or your desired container
  });

  $("#" + timeSlotsContainer).removeClass("cs-hidden");
}

function getPaymentPlan() {
  return $('input[name="cs_plan"]:checked').val();
}
