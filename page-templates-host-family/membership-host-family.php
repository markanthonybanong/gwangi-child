<?php
/**
 * Template Name: Membership Host Family
 */
get_header();
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <h3 class="add-border-bottom">Become a Premium Host Family and speed up the process</h3>
        <div class="membership-parent-container">
            <div class="membership-container">
                <div class="silver-container">
                    <div class="img-container">
                        <?php
                            $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-2.jpg';
                            echo "<img src='$img_src' alt='silver-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Silver</h3>
                    <h3 id="price">$89.90(3 Months)</h3>
                    <p>$29.97 per month</p>
                    <?php
                        //3, level in paid membership pro, also knowb as(id)
                        $membership_checkout_link = add_query_arg('level', 5, site_url('/membership-checkout'));
                        echo "<a href='$membership_checkout_link'><button id='pay-btn'>Pay Now</button></a>";
                    ?>
                </div>
                <div class="gold-container">
                    <div class="img-container">
                        <?php
                            $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-5.jpg';
                            echo "<img src='$img_src' alt='gold-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Gold</h3>
                    <h3 id="price">$139.90(6 Months)</h3>
                    <p>$23.32 per month</p>
                    <?php
                        //3, level in paid membership pro, also knowb as(id)
                        $membership_checkout_link = add_query_arg('level', 4, site_url('/membership-checkout'));
                        echo "<a href='$membership_checkout_link'><button id='pay-btn'>Pay Now</button></a>";
                    ?>
                </div>
                <div class="bronze-container">
                    <div class="img-container">
                        <?php
                        $img_src = get_stylesheet_directory_uri().'/assets/images/family/family-6.jpg';
                        echo "<img src='$img_src' alt='bronze-family-photo'>";
                        ?>
                    </div> 
                    <h3 id="three-months">Bronze</h3>
                    <h3 id="price">$49.90(1 Month)</h3>
                    <p>$49.90 per month</p>
                    <?php
                        //3, level in paid membership pro, also knowb as(id)
                        $membership_checkout_link = add_query_arg('level', 6, site_url('/membership-checkout'));
                        echo "<a href='$membership_checkout_link'><button id='pay-btn'>Pay Now</button></a>";
                    ?>
                </div>
            </div>
            <div class="membership-info">
                <?php
                    $find_host_family = site_url('/find-employee');
                    echo "<p>The Premium Membership allows Host Families to contact ALL <a href='$find_host_family'>Employees!</a> It’s the easiest and fastest way to find your Employee!</p>";
                ?>
                <p id="membership-end">The Premium Membership ends automatically.</p>
                <h3 class="add-border-bottom">Premium Membership for Host Families</h3>
                <p id="check">Contact all Employees through personal messages and exchange contact information.</p>
                <h3 class="add-border-bottom">Basic Membership</h3>
                <p id="check">Register and use activeaupair.com for free!</p>
                <p id="check">Send one message to ALL Employees for FREE. If you have contacted a Premium Employee, the employee will be able to read it right away. Otherwise you can wait for the employee to become Premium Member.</p>
                <p id="check">Read personal descriptions.</p>
                <p id="check">Receive notification whenever someone have send you a message!</p>
                <h3 class="add-border-bottom">Payment Options</h3>
                <p id="check">Paypal</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>