<?php 
/*
 * Template Name: Find Host Family
 */
get_header();
?>
<?php
    global $wpdb;
    require get_theme_file_path('inc/host-family/find-host-family/find-host-family-db.php');
    require get_theme_file_path('inc/host-family/find-host-family/find-host-family-utils.php');
    require get_theme_file_path('assets/utilities/php/shared-utils.php');
    require get_theme_file_path('assets/utilities/php/variables.php');
    require get_theme_file_path('assets/utilities/php/pagination.php');
    $variables    = new Variables();
    $db           = new Find_Host_Family_Db($wpdb);
    $utils        = new Find_Host_Family_Utils($db, $variables);
    $pagination   = new Pagination($utils->query());
    $shared_utils = new Shared_Utils();

?>
<div class="aupair-two-column-parent-container">
    <div class="aupair-two-column-container">
        <div class="column-one">
            <div class="header-container">
                <h3 class="add-border-bottom"> 
                    Find Host Family from abroad contact them today for free.
                </h3>
            </div>
            <div class="host-families-container">
                <?php
                    $result = $pagination->get_data($utils->limit, $utils->page);
                    if(!empty($result->data)){
                        echo $utils->display_host_family($result->data);
                    } else {
                        echo "<h3>Cannot find host families with that search criteria.</h3>";
                    }
                    
                ?>
            </div>
            <div class="pagination-container">
                <?php
                    if(!empty($result->data)){
                        echo $pagination->create_links('host-family-page', 'find-host-family');
                    }
                ?>
            </div>
        </div>
        <div class="column-two">
            <form id="form" method="POST" action="">
                <div class="picture-required-container add-border-bottom">
                    <h5>Required picture?</h5>
                    <input type="checkbox" name="required-picture" value="required-picture" <?php if($_POST['required-picture'] !== null) echo 'checked';?>/>
                </div>
                <div class="looking-for-container add-border-bottom">
                    <h5>Host Family Looking for</h5>    
                    <div class="square-container">
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="aupair" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'aupair');?>/>Au Pair</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="nanny" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'nanny');?>/>Nanny</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="granny-aupair" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'granny-aupair');?>/>Granny aupair</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="caregiver-for-elderly" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'caregiver-for-elderly');?>/>Caregiver for elderly</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="live-in-help" <?php echo $shared_utils->filter_selected_array_cb('looking-for','live-in-help');?>/>Live in help</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="live-in-tutor" <?php echo $shared_utils->filter_selected_array_cb('looking-for','live-in-tutor');?>/>Live in tutor</label>
                    </div>
                </div>
                <div class="nationality-container add-border-bottom">
                    <h5>Host Family Nationality</h5>
                     <?php
                     $nationality_list = array_merge(array('No Preferences'), $variables->nationalities);
                     $i                = 0;       
                     echo "<select name='nationality'>";
                     while($i < count($nationality_list)){
                        $nationality = $nationality_list[$i];
                        $select      = $shared_utils->filter_selected_select_item('nationality', $nationality);
                        echo "<option value='$nationality' $select>$nationality</option>";
                        $i++;
                     }
                     echo "</select>";
                     ?>
                </div>
                <div class="host-family-country-container add-border-bottom">
                    <h5>Host Family Country</h5>
                    <div class="square-container">
                        <?php
                            $normal_index     = 0;
                            $eu_index         = 0;
                            $eu_countries     = array_merge(array('EU/EØS/SCHENGEN Countries'),$variables->eu_countries); 
                            $normal_countries = $variables->normal_countries;
                            while($eu_index < count($eu_countries)) {
                                $country = $eu_countries[$eu_index];
                                $checked   = $shared_utils->filter_selected_array_cb('countries', $country);
                                echo "<label id='label-full-width'><input type='checkbox' class='eu-country' name='countries[]' value='$country' $checked>$country</label>";
                                $eu_index++;
                            }
                            while($normal_index < count($normal_countries)){
                                $country = $normal_countries[$normal_index];
                                $checked = $shared_utils->filter_selected_array_cb('countries', $country);
                                echo "<label id='label-full-width'><input type='checkbox' name='countries[]' value='$country' $checked>$country</label>";
                                $normal_index++;
                            }                              
                        ?>
                    </div>
                </div>
                <div class="currently-living-in-container add-border-bottom">
                    <h5>Host Family Living in</h5>
                    <div class="square-container">
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Small City" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Small City');?>/>Small City</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Big City" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Big City');?>/>Big City</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Suburd" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Suburd');?>/>Suburd</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Country Side" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Country Side');?>/>Country Side</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Town" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Town');?>/>Town</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Village" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Village');?>/>Village</label>
                        <label id="label-full-width"><input type="checkbox" name="living-in[]" value="Sea Side" <?php echo $shared_utils->filter_selected_array_cb('living-in', 'Sea Side');?>/>Sea Side</label>
                    </div>
                </div>
                <div class="duration-container">
                    <h5>Job Duration</h5>
                    <div class="square-container-duration">
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-3 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-3 Months');?>/>1-3 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-6 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-6 Months');?>/>1-6 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-9 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-9 Months');?>/>1-9 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-2 Years" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-2 Years');?>/>1-2 Years</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value=">2 Years" <?php echo $shared_utils->filter_selected_array_cb('duration', '>2 Years');?>/>>2 Years</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>
