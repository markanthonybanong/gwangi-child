<?php
/**
 * Template Name: Membership Employee
 */
get_header();
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <h3 class="add-border-bottom">Become a Premium Employee and speed up the process</h3>
        <div class="membership-parent-container">
            <div class="membership-container">
                <div class="silver-container">
                    <div class="img-container">
                        <?php
                            $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-1.jpg';
                            echo "<img src='$img_src' alt='silver-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Silver</h3>
                    <h3 id="price">$89.50(3 Months)</h3>
                    <p>$29.83 per month</p>
                    <?php
                        //3, level in paid membership pro, also(id)
                        $membership_checkout_link = add_query_arg('level', 3, site_url('/membership-checkout/'));
                        echo "<form><button id='pay-btn' formaction='$membership_checkout_link'>Pay Now</button></form>";
                    ?>
                </div>
                <div class="gold-container">
                    <div class="img-container">
                        <?php
                            $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-3.jpg';
                            echo "<img src='$img_src' alt='gold-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Gold</h3>
                    <h3 id="price">$129.50(6 Months)</h3>
                    <p>$21.58 per month</p>
                    <button id="pay-btn" >Pay Now</button>
                </div>
                <div class="bronze-container">
                    <div class="img-container">
                        <?php
                        $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-4.jpg';
                        echo "<img src='$img_src' alt='bronze-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Bronze</h3>
                    <h3 id="price">$49.50(1 Month)</h3>
                    <p>$49.50 per month</p>
                    <button id="pay-btn" >Pay Now</button>
                </div>
            </div>
            <div class="membership-info">
                <?php
                    $find_host_family = site_url('/find-host-family');
                    echo "<p>As an Employee you can write personalized messages to ALL <a href='$find_host_family'>Host Families</a> for free! Premium families are able to read and reply to these immediately. If you want non-premium families to be able to read and answer to your messages as well,  become a Premium Member and find your Host Family faster!</p>";
                ?>
                <h3 class="add-border-bottom">Premium Membership for Employees</h3>
                <p id="check">Make sure your personal messages can be read even by Host Families that don't have a Premium Membership yet.</p>
                <p id="check">Read personal descriptions.</p>
                <h3 class="add-border-bottom">Basic Membership</h3>
                <p id="check">Register and use activeaupair.com for free!</p>
                <p id="check">Send one personalized message to ALL Host Families for FREE. If you have contacted a Premium Host Family, the family will be able to read it right away. Otherwise you can wait for the family to become Premium Member. If they are actively looking for an Employee this usually happens within a few days.</p>
                <p id="check">Receive notification whenever someone have send you a message!</p>
                <h3 class="add-border-bottom">Payment Options</h3>
                <p id="check">Paypal</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>