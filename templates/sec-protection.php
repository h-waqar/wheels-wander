<section id="secProtection" class="">
    <div class="protection-row row" id="protectionRow">

        <input type="radio" name="protection_type" id="protectionBasic" hidden value="basic">

        <label for="protectionBasic" class="protection_wrap">

            <!-- <div class="icon_wrap">
                <img src="<?php // echo CS_WHEELS_WANDER_BASE_URL . "img/protection.png";  
                            ?>" alt="">
            </div> -->
            <div class="protection_desc">
                <h3>Basic Protection</h3>

                <p>Your responsibility for loss or damage is limited to a maximum of <b>€5000</b></p>
                <p>. In the event of loss or serious damage caused to the car, a <b>€5000</b> deposit must be paid. In the event of minor damage, a <b>€1000</b> deposit must be paid. The total cost of the car repair will be confirmed by a local garage, and along with the <b>€250</b> administration fee, this will be deducted from the deposit paid, and the balance refunded.</p>
                <p>Full receipt of damage will be provided so guests can reclaim the excess cost of the damage from their other insurance.</p>
                <p class="protection-included">Included</p>
            </div>

        </label>



        <input type="radio" name="protection_type" id="protectionPrem" hidden value="premium">
        <label for="protectionPrem" class="protection_wrap">

            <!-- <div class="icon_wrap">
            <img src="<?php // echo CS_WHEELS_WANDER_BASE_URL . "img/car-insurance.png";  
                        ?>" alt="">
        </div> -->
            <!-- <div class="protection_desc">
                <h3>Smart Protection</h3>

                <p>In the event that there is damage to the car, you responsibility is limited to a maximum of <b>€500</b>. The damage will be assessed and a <b>€500</b> deposit must be paid. The total cost of the car repair will be confirmed by a local garage and along with the <b>€250</b> administration fee this will be decuted from the deposit paid.</p>
                <p>Full receipt of damage will be provided so guests can re claim the excess cost of the damage from their other insurance.</p>
                <p class="cost"><?php echo CS_WHEELS_WANDER_CURRENCY;  ?>8/day</p>
            </div> -->

            <div class="protection_desc">
                <h3>Smart Protection</h3>

                <p>Your responsibility for loss or damage is limited to a maximum of <b>€500</b>. In the event of an incident, a <b>€500</b> deposit must be paid. The total cost of the car repair will be confirmed by a local garage, and along with a <b>€75</b> administration fee, this will be deducted from the deposit paid.</p>
                <p>Full receipt of damage will be provided so guests can reclaim the excess cost of the damage from their other insurance.</p>
                <p class="cost"><?php echo CS_WHEELS_WANDER_CURRENCY; ?>8/day</p>
            </div>


        </label>
    </div>
</section>