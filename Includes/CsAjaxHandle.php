<?php

namespace CsWheelsWander\Includes;

use stdClass;
use DateTime;
use Exception;
use WP_Query;
use CyberSource;
use CyberSource_Declined_Exception;


class CsAjaxHandle
{
    public static $_instance = null;
    public $driver_per_day_fee = 5;
    public $premium_protection_per_day_fee = 8;
    public static function instance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }








    // Function for email

    // Function to send confirmation email to the customer
    public function send_confirmation_email_to_customer($booking)
    {


        // $booking->post_id = 323;
        // $days = $this->calculate_days($booking->bookingStart, $booking->bookingEnd);

        // $to = $booking->bookerEmail;
        $to = $_POST['driverEmail'];
        $subject = 'Car Booking Confirmation';

        $message = "Dear Guest,\n\n";
        $message .= "Thank you for booking your car with Cliffhanger Villas your reservation is confirmed.\n\n";
        $message .= "Booked Car: Fiat 500 Electric.\n";
        $message .= "Pick-up and drop-off location: Cliffhanger villas, La misere, Mahe, Seychelles.\n";
        $message .= "Booking Days: " . $_POST['rentalDays'] . ".\n";



        /**
         * Protection Plan Information
         */

        if ($_POST['protectionPlan'] == 'premium')
            $message .= "Premium Protection Charges: €" . ($_POST['rentalDays'] * $this->premium_protection_per_day_fee) . ".\n";
        else
            $message .= "Basic Protection Included.\n";







        /**
         * Additional Driver Information
         */

        if ($_POST['isAdditionalDriverSelected'] == 'yes')
            $message .= "Additional Driver Charges: €" . ($_POST['rentalDays'] * $this->driver_per_day_fee) . ".\n";



        /**
         * Pay Now or Later Information
         */

        if ($_POST['payNowLater'] == 'payLater')
            $message .= "Amount owed is due to be paid on arrival: €" . $_POST['totalAmount'] . ".\n\n\n";
        else
            $message .= "Rental Charges: €" . $_POST['totalAmount'] . ".\n\n\n";







        // $message .= "Rental Charges: €" . $_POST['totalAmount'] . ".\n\n\n";F


        $message .= "If you have any questions regarding your reservation, please contact us at info@seychellesdream.com \n";


        $message .= "\n\n";


        $message .= "Thank you,\n";
        $message .= "Cliffhanger villas\n";
        $message .= "Seychelles\n";






        // And the rental charges displayed above



        // // $message .= "Booking ID: " . get_the_title($booking->post_id) . "\n";
        // $message .= "Guests: " . $booking->bookingGuests . "\n";
        // $message .= "Booking Start: " . $booking->bookingStart . "\n";
        // $message .= "Booking End: " . $booking->bookingEnd . "\n";
        // // $message .= "Coupon Code: " . $booking->bookingDiscountCode . "\n";
        // $message .= "Number of Days: " . $days . "\n";
        // // $message .= "Total Amount: " . $booking->total . "\n";
        // $message .= "Booked Cars: " . $booking->bookedCars . "\n\n";
        // $message .= "Thank you for choosing our car booking services.\n\n";
        // $message .= "Best regards,\nThe Seychellesdream Car Booking Team";

        $headers = 'From: Cliffhanger Villas Car Hire <info@seychellesdream.com>' . "\r\n";

        wp_mail($to, $subject, $message, $headers);
    }



    // Function to send notification email to the website owner
    public function send_notification_email_to_owner($booking)
    {



        // $days = $this->calculate_days($booking->bookingStart, $booking->bookingEnd);

        // $to = 'charlotte.hawkes@globaloceaninvest.com';
        $to = 'info@seychellesdream.com';
        
        $subject = 'New Car Booking';

        $message = "Hello,\n\n";
        $message .= "You have a new car booking. Here are the details:\n\n";
        $message .= "Booking Start: " . $booking->bookingStart . " " . $_POST['bookingStartTime'] . "\n";
        $message .= "Booking End: " . $booking->bookingEnd . " " . $_POST['bookingEndTime'] . "\n";
        $message .= "Number of Days: " . $_POST['rentalDays'] . "\n";
        $message .= "Order Total: €" . $_POST['totalAmount'] . "\n";


        /**
         * Driver Detail
         */

        $message .= "Driver details:\n";
        $message .= "Driver First Name: " . $_POST['driverFirstName'] . "\n";
        $message .= "Driver Sur Name: " . $_POST['driverSurName'] . "\n";
        $message .= "Driver Email: " . $_POST['driverEmail'] . "\n";
        $message .= "Driver Phone: " . $_POST['driverPhone'] . "\n\n";




        /**
         * Protection Plan Information
         */

        if ($_POST['protectionPlan'] == 'premium')
            $message .= "Premium Protection Charges: €" . ($_POST['rentalDays'] * $this->premium_protection_per_day_fee) . ".\n";
        else
            $message .= "Basic Protection Included.\n";







        /**
         * Additional Driver Information
         */

        if ($_POST['isAdditionalDriverSelected'] == 'yes')
            $message .= "Additional Driver Charges: €" . ($_POST['rentalDays'] * $this->driver_per_day_fee) . ".\n";



        /**
         * Pay Now or Later Information
         */

        if ($_POST['payNowLater'] == 'payLater')
            $message .= "Amount owed is due to be paid on arrival: €" . $_POST['totalAmount'] . ".\n\n\n";
        else
            $message .= "Rental Charges: €" . $_POST['totalAmount'] . ".\n\n\n";








        $message .= "View Full Detail On Website: \n";
        $message .= "https://seychellesdream.com/wp-admin/post.php?post=" . $_POST['post_id'] . "&action=edit \n";



        $headers = 'From: Cliffhanger Villas Car Hire <info@seychellesdream.com>' . "\r\n";

        wp_mail($to, $subject, $message, $headers);


        /**
         * Send Mail to 2nd Email as well
         */

        $to = 'creservations@altitudelondon.com';
        wp_mail($to, $subject, $message, $headers);
    }











    function book_cars_between_dates($start_date, $end_date, $num_cars, $post_id)
    {
        global $wpdb;

        // Validate the dates
        if (!strtotime($start_date) || !strtotime($end_date) || $num_cars <= 0) {
            // Invalid dates or number of cars, return false or handle the error as needed
            return false;
        }

        // Construct the table name
        $table_name = $wpdb->prefix . 'car_bookings';

        // Convert start and end dates to timestamps
        $start_timestamp = strtotime($start_date);
        $end_timestamp = strtotime($end_date);

        // Initialize the current timestamp to the start timestamp
        $current_timestamp = $start_timestamp;

        // Use a while loop to iterate over each day within the date range
        while ($current_timestamp <= $end_timestamp) {
            $current_date = date('Y-m-d', $current_timestamp);

            // Insert entry into the table
            $wpdb->insert(
                $table_name,
                array(
                    'date' => $current_date,
                    'booked_cars' => $num_cars,
                    'post_id' => $post_id, // You may need to replace this with the actual post ID
                ),
                array('%s', '%d', '%d')
            );

            // Increment the current timestamp by one day
            $current_timestamp = strtotime('+1 day', $current_timestamp);
        }

        // Return true or any relevant information indicating success
        return true;
    }










    function check_car_availability($booking_date, $num_cars,  $create_html = false)
    {


        global $wpdb;

        // Get the total available cars from options
        $total_available_cars = get_option('total_available_cars', 3); // Default to 4 if not set

        // Construct the table name
        $table_name = $wpdb->prefix . 'car_bookings';

        // Check if the table exists
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
            // Table doesn't exist, return false
            return false;
        }

        // Check if the date and number of cars are valid
        if (!strtotime($booking_date) || !is_numeric($num_cars) || $num_cars <= 0) {
            // Invalid date or number of cars, return false
            return false;
        }

        // Check the number of booked cars on the given date
        $booked_cars = $wpdb->get_var($wpdb->prepare(
            "SELECT SUM(booked_cars) FROM $table_name WHERE date = %s",
            $booking_date
        ));

        // Calculate available cars
        $available_cars = $total_available_cars - $booked_cars;



        // if this function is busy in creating html to display user that on this date this number
        // cars are available 
        if ($create_html) return $available_cars;


        // return $available_cars;

        // Check if the requested number of cars is available
        if ($num_cars <= $available_cars) {
            // Available cars, return the number of cars
            return $num_cars;
        } else {
            // Not enough available cars, return false
            return false;
        }
    }



    public function get_availability_html()
    {
        $start_date = strtotime($_POST['start_date']);
        $end_date = strtotime($_POST['end_date']);
        $booked_cars  = sanitize_text_field($_POST['booked_cars']);

        $html = '';
        while ($start_date <= $end_date) {
            // Perform operations on the current date
            $current_date = date('Y-m-d', $start_date);


            $available_cars = $this->check_car_availability($current_date, $booked_cars, true);

            $displayed_date = date('F j, Y', strtotime($current_date));

            $html .= '<tr>';
            $html .= "<td>";
            $html .=  $displayed_date;
            $html .= "</td>";
            $html .= '<td>';
            $html .= $available_cars;
            $html .= "</td>";
            $html .= "</tr>";

            // Increment the date by one day
            $start_date = strtotime('+1 day', $start_date);
        }



        return $html;
    }



    public function check_cars_availablity()
    {


        $response = [
            'availability' => true,
            "success" => true
        ];



        $start_date = strtotime($_POST['start_date']);
        $end_date = strtotime($_POST['end_date']);

        while ($start_date <= $end_date) {
            // Perform operations on the current date
            $current_date = date('Y-m-d', $start_date);
            $booked_cars  = sanitize_text_field($_POST['booked_cars']);

            $result = $this->check_car_availability($current_date, $booked_cars);


            if ($result == false) {
                $response['availability'] = false;
                $response['html'] = $this->get_availability_html();
                break;
            }


            // Increment the date by one day
            $start_date = strtotime('+1 day', $start_date);
        }



        // //unitTesting

        // $result = false;


        // if ($result == false) {
        //     $response['availability'] = false;
        //     $response['html'] = $this->get_availability_html();
        //     // break;
        // }


        // // unitTesting Ends




        return $response;
    }

    public function check_cars()
    {


        if (isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['booked_cars'])) {
            echo json_encode($this->check_cars_availablity());
            // echo $this->check_cars_availablity();
        } else
            echo json_encode(["success" => false, "error" => 'Error: Missing required fields.']);

        wp_die();
    }

    public function register()
    {
        add_action('wp_ajax_book_my_car', [$this, 'book_my_car_callback']);
        add_action('wp_ajax_nopriv_book_my_car', [$this, 'book_my_car_callback']);

        add_action('wp_ajax_book_my_car_discount', [$this, 'book_my_car_discount_code']);
        add_action('wp_ajax_nopriv_book_my_car_discount', [$this, 'book_my_car_discount_code']);


        add_action('wp_ajax_check_car_availablity', [$this, 'check_cars']);
        add_action('wp_ajax_nopriv_check_car_availablity', [$this, 'check_cars']);
    }

    public function book_my_car_discount_code()
    {
        if (isset($_POST['bookingDiscountCode'])) {
            echo json_encode($this->find_discount_code($_POST['bookingDiscountCode']));
        } else
            echo json_encode(["success" => false, "error" => 'Error: Missing required fields.']);

        wp_die();
    }

    private function find_discount_code($code)
    {
        if (empty($code))
            return ["success" => false, "error" => 'Discount code inavlid.'];

        $args = array(
            'post_type'      => 'discount',
            'posts_per_page' => 1,
            's'              => $code,
            'post_status'    => 'publish',
        );

        $query = new WP_Query($args);

        if ($query->have_posts())
            return ["success" => true, "message" => 'Discount code exists and active.'];

        return ["success" => false, "error" => 'Discount code inavlid.'];
    }

    public function book_my_car_callback()
    {


        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";



        if (isset(
            $_POST['bookingStart'],
            $_POST['bookingEnd'],
            $_POST['protectionPlan'],
            $_POST['bookingStartTime'],
            $_POST['bookingEndTime'],
            // $_POST['bookingDiscountCode'],

        )) {

            $car_booking = new stdClass();

            // $car_booking->bookerName = sanitize_text_field($_POST['bookerName']);
            // $car_booking->lastName = sanitize_text_field($_POST['lastName']);
            $car_booking->bookingStart = sanitize_text_field($_POST['bookingStart']);
            $car_booking->bookingEnd = sanitize_text_field($_POST['bookingEnd']);
            // $car_booking->bookingGuests = intval($_POST['bookingGuests']);
            // $car_booking->bookingDiscountCode = sanitize_text_field($_POST['bookingDiscountCode']);
            // $car_booking->bookerEmail = sanitize_text_field($_POST['bookerEmail']);
            // $car_booking->bookedCars = sanitize_text_field($_POST['bookedCars']);
            $car_booking->payNowLater = sanitize_text_field($_POST['payNowLater']);
            $car_booking->totalAmount = sanitize_text_field($_POST['totalAmount']);







            // Client New Changes Information
            $car_booking->driverFirstName = sanitize_text_field($_POST['driverFirstName']);
            $car_booking->driverSurName = sanitize_text_field($_POST['driverSurName']);
            $car_booking->driverEmail = sanitize_text_field($_POST['driverEmail']);
            $car_booking->driverPhone = sanitize_text_field($_POST['driverPhone']);

            $car_booking->protectionPlan = sanitize_text_field($_POST['protectionPlan']);
            $car_booking->isAdditionalDriverSelected = sanitize_text_field($_POST['isAdditionalDriverSelected']);
            $car_booking->payNowLater = sanitize_text_field($_POST['payNowLater']);



            // $car_booking->csPickup = sanitize_text_field($_POST['csPickup']);
            // $car_booking->csReturn = sanitize_text_field($_POST['csReturn']);
            $car_booking->bookingStartTime = sanitize_text_field($_POST['bookingStartTime']);
            $car_booking->bookingEndTime = sanitize_text_field($_POST['bookingEndTime']);



            if ($car_booking->payNowLater == "payNow") {

                // Billing Information
                $car_booking->csAddress = sanitize_text_field($_POST['csAddress']);
                $car_booking->csCity = sanitize_text_field($_POST['csCity']);
                $car_booking->csState = sanitize_text_field($_POST['csState']);
                $car_booking->csPostalCode = sanitize_text_field($_POST['csPostalCode']);
                $car_booking->csCountry = sanitize_text_field($_POST['csCountry']);



                $car_booking->cardHolderName = sanitize_text_field($_POST['cardHolderName']);
                $car_booking->cardCvv = sanitize_text_field($_POST['cardCvv']);
                $car_booking->expMonth = sanitize_text_field($_POST['expMonth']);
                $car_booking->expYear = sanitize_text_field($_POST['expYear']);
                $car_booking->cardType = sanitize_text_field($_POST['cardType']);
                $car_booking->cardNumber = sanitize_text_field($_POST['cardNumber']);
            }




            // // Unit Testing
            // $this->save_data($car_booking);
            // wp_die();





            $response = [];
            if ($car_booking->payNowLater == "payLater") {
                $this->save_data($car_booking);
                $this->send_confirmation_email_to_customer($car_booking);
                // unitTesting
                $this->send_notification_email_to_owner($car_booking);
                $response['success'] = true;
                $response['message'] = "Payment processed";
                echo json_encode($response);
                wp_die();
            }

            $status = $this->process_payment($car_booking);

            if ($status->response && $status->response->resMessage) {
                if (!$status->response->success) {
                    $response['success'] = false;
                    $response['error'] = $status->response->resMessage;
                } else {
                    $_POST['paymentId'] = $status->response->requestID;
                    $this->save_data($car_booking);

                    $this->send_confirmation_email_to_customer($car_booking);
                    // unitTesting
                    $this->send_notification_email_to_owner($car_booking);



                    $response['success'] = true;
                    $response['message'] = "Payment processed";
                }
            } else {
                if ($status instanceof CyberSource_Declined_Exception) {
                    //landing here means card is declined.................
                    $response['success'] = false;
                    $response['error'] = "Error: Card Declined. Please check your card and try again.";
                } else {
                    //landing here means we have some problem.................
                    $response['success'] = false;
                    $response['error'] = "Error processing your request. Please try again later.";
                }
            }















            echo json_encode($response);
        } else
            echo json_encode(["success" => false, "error" => 'Error: Missing required fields.']);
        //
        wp_die();
    }




    private function save_data($booking)
    {

        try {
            $days = $this->calculate_days($booking->bookingStart, $booking->bookingEnd);
            if ($days < 0)
                throw new Exception("Error: Incorrect Dates selected.");

            $total = $this->calculate_total_amount($booking);
            $post_title =  ucfirst($_POST['driverFirstName']) . " Booked " . $booking->bookedCars . " Car For " . $days . " Days On " . date('l, F j, Y');

            $post_id    = wp_insert_post([
                "post_title"   => $post_title,
                "post_content" => "",
                "post_type"    => "carbooking",
                "post_status"  => "private",
            ]);

            // update_field('reserver', $booking->bookerName, $post_id);
            // update_field('email', $booking->bookerEmail, $post_id);
            // update_field('guests', $booking->bookingGuests, $post_id);
            update_field('booking_start', $booking->bookingStart, $post_id);
            update_field('booking_end', $booking->bookingEnd, $post_id);
            // update_field('coupon', $booking->bookingDiscountCode, $post_id);
            update_field('days', $days, $post_id);
            update_field('amount', $total, $post_id);
            // update_field('booked_cars', $booking->bookedCars, $post_id);
            update_field('booking_start_time', $booking->bookingStartTime, $post_id);
            update_field('booking_end_time', $booking->bookingEndTime, $post_id);
            // update_field('pickup_location', $booking->csPickup, $post_id);
            // update_field('return_location', $booking->csReturn, $post_id);


            update_field('pickup_location', "Cliffhanger villas, La misere, Mahe, Seychelles", $post_id);
            update_field('return_location', "Cliffhanger villas, La misere, Mahe, Seychelles", $post_id);


            update_field('protection_plan', $booking->protectionPlan, $post_id);
            update_field('additional_driver', $booking->isAdditionalDriverSelected, $post_id);
            update_field('pay_now_or_later', $booking->payNowLater, $post_id);
            update_field('driver_first_name', $booking->driverFirstName, $post_id);
            update_field('driver_surname', $booking->driverSurName, $post_id);
            update_field('driver_email', $booking->driverEmail, $post_id);
            update_field('driver_phone_number', $booking->driverPhone, $post_id);
            update_field('amount', $booking->totalAmount, $post_id);
            update_field('payment_id', $_POST['paymentId'], $post_id);

            $_POST['post_id'] = $post_id;



            // Save Dates data that car is booked in these days
            // work77

            $this->book_cars_between_dates($booking->bookingStart, $booking->bookingEnd, 1, $post_id);
        } catch (Exception $e) {
            return $e;
        }

        return false;
    }



    private function calculate_days($s, $e)
    {
        // return (int) (new DateTime($s))->diff(new DateTime($e))->format('%r%a') + 1;
        return $_POST['rentalDays'];
    }

    private function calculate_total_amount($booking)
    {
        $price_per_day = 50;

        $result = $this->find_discount_code($booking->bookingDiscountCode);

        if ($result['success']) $price_per_day = 35;
        else $booking->bookingDiscountCode = "";

        try {
            $days = $this->calculate_days($booking->bookingStart, $booking->bookingEnd);
            if ($days < 0)
                throw new Exception("Error: Incorrect Dates selected.");
        } catch (Exception $e) {
            return $e;
        }

        $per_day_fee = ($days * 6.5) * $booking->bookedCars;
        $price = ($days * $price_per_day) * $booking->bookedCars;
        // $three_percent = (0.03 * $price);
        // $total_price = $three_percent + $price;
        $total_price =  $price + $per_day_fee;

        return $total_price;
    }

    private function process_payment($booking)
    {

        require_once(__DIR__ . '/cybersource.php');


        $random_number = mt_rand(0, 999999);
        $random_string = str_pad((string)$random_number, 6, '0', STR_PAD_LEFT);
        $random_string = "RIDE-" . $random_string;

        $request = new CyberSource("absa_seytravel_eur_0981357", "jpwlcXvYQ0qlY0j8qqgYHIBDsqKyODJLB/zZg3Z61+Tpj5yG2rzNuKjnAnKiSYQ34J99B6xogm12uxYZAlrobUiSZ3X/26x5ll5kYqMWbsRWaMS78ShJTJIK5v/6+MjDuV4y/V53aYsthV2JGzWkPWx8SKQPr/pYmaddifG482SC+EY6iLyvcn7nSm6/2XiNRwdurvrmPzEImT8OGGukDxGAXVSbZ3Pfh5PtcFjzZVx0Rt8ms7qFOdalFkVZ684tfS3Nlk1d15vdQjV6odLuWmKFKYUpBrZXf4Q/v5DCj/h0/89it3Emerfui9mjix2y8kpTEV9sCsYw7Rkf6jeFvw==", "Live");

        // $request = new CyberSource("caliphsoft_web_test", "Q1zcCMzFHm0QjOSDQmfsECLQpP9V7AqfFcEkb761HZiruMA+PmiotFHSIEKl1om0JqYNJsa0MbvBuy9Pxoua6fFT1YKPlZ/xiLTjTj1Aie1nskvTlSudxD5eIA3MuenEVlhmuQ9+PKoBvQCRHSZZ4187cAPmI8qk5we5WaHnUm9nhI6xsDHBLgUvy57R8DAg1tvdeaEyORMC5pYpiHKrPOA/E+FQovRapllEgZiuEeI3BnxsscSrHVmdsmDHHXYDuG77JGIU4Zb8VRDnu3hq4kBLlkoNO+st9+zZx0cyM7P0P57lc4DMkvY07+wjFK7clG9qxl4K2r6SbrM4xl+trA==", "Test");

        $request->reference_code = $random_string;

        $billTo = new stdClass();



        // $billTo->firstName = $booking->bookerName;
        // $billTo->lastName =  $booking->lastName;

        $billTo->firstName = sanitize_text_field($_POST['csFirstName']);
        $billTo->lastName =   sanitize_text_field($_POST['csLastName']);

        $billTo->street1 = $booking->csAddress;
        $billTo->city =  $booking->csCity;
        $billTo->state = $booking->csState;
        $billTo->postalCode = $booking->csPostalCode;
        $billTo->country =  $booking->csCountry;
        // $billTo->email = $booking->bookerEmail;
        $billTo->email = sanitize_text_field($_POST['driverEmail']);
        $billTo->ipAddress = $_SERVER['REMOTE_ADDR'];





        $card = new stdClass();
        $card->accountNumber = $booking->cardNumber;
        $card->fullName = $booking->cardHolderName;
        $card->expirationMonth = $booking->expMonth;
        $card->expirationYear = $booking->expYear;
        $card->cardType = @$request->card_types[$booking->cardType];
        $request->billTo = $billTo;
        $request->card = $card;




        try {

            // $amount = $this->calculate_total_amount($booking);
            $amount = $booking->totalAmount;
            $request->charge($amount);
            // TODO, comment the line below and uncomment the line above.
            // $request->valdiate_card();
        } catch (Exception $e) {
            return $e;
        }

        return $request;
    }
}
