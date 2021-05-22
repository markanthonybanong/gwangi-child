<?php 
/*
 * Template Name: Find Employee
 */
get_header();
?>
<?php
    global $wpdb;
    require get_theme_file_path('inc/employee/find-employee/find-employee-db.php');
    require get_theme_file_path('inc/employee/find-employee/find-employee-utils.php');
    require get_theme_file_path('inc/employee/find-employee/find-employee-query.php');
    require get_theme_file_path('assets/utilities/php/shared-utils.php');
    require get_theme_file_path('assets/utilities/php/variables.php');
    require get_theme_file_path('assets/utilities/php/pagination.php');
    $variables    = new Variables();
    $db           = new Find_Employee_Db($wpdb);
    $utils        = new Find_Employee_Utils($db, $variables);
    $pagination   = new Pagination($utils->query());
    $shared_utils = new Shared_Utils();

?>
<div class="aupair-two-column-parent-container">
    <div class="aupair-two-column-container">
        <div class="column-one">
            <div class="header-container center">
                <h3 class="add-border-bottom"> 
                    Find Au Pairs, Nannies, Granny Au Pairs, Caregiver For Elderly, Live In Help, Live In Tutor
                    and become a Host Family.
                </h3>
            </div>
            <div class="employees-container">
                <?php
                    $result = $pagination->get_data($utils->limit, $utils->page);
                    echo $utils->display_employees($result->data);
                ?>
            </div>
            <div class="pagination-container">
                <?php
                    echo $pagination->create_links('employee-page', 'find-employee');
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
                    <h5>Looking for</h5>    
                    <div class="square-container">
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="aupair" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'aupair');?>/>Au Pair</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="nanny" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'nanny');?>/>Nanny</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="granny-aupair" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'granny-aupair');?>/>Granny aupair</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="caregiver-for-elderly" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'caregiver-for-elderly');?>/>Caregiver for elderly</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="live-in-help" <?php echo $shared_utils->filter_selected_array_cb('looking-for','live-in-help');?>/>Live in help</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="live-in-tutor" <?php echo $shared_utils->filter_selected_array_cb('looking-for','live-in-tutor');?>/>Live in tutor</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="online-tutor" <?php echo $shared_utils->filter_selected_array_cb('looking-for','online-tutor');?>/>Online tutor</label>
                        <label id="label-full-width"><input type="checkbox" name="looking-for[]" value="virtualchildcare" <?php echo $shared_utils->filter_selected_array_cb('looking-for', 'virtualchildcare');?>/>Virtual Childcare</label>
                    </div>
                </div>
                <div class="employee-applying-for-container add-border-bottom">
                    <h5>Employee Applying for</h5>
                    <div class="square-container">
                        <?php
                            $normal_index     = 0;
                            $eu_index         = 0;
                            $eu_countries     = array_merge(array('EU/EØS/SCHENGEN Countries'),$variables->eu_countries); 
                            $normal_countries = $variables->normal_countries;
                            while($eu_index < count($eu_countries)) {
                                $country = $eu_countries[$eu_index];
                                $checked   = $shared_utils->filter_selected_array_cb('employee-applying-for', $country);
                                echo "<label id='label-full-width'><input type='checkbox' class='eu-country' name='employee-applying-for[]' value='$country' $checked>$country</label>";
                                $eu_index++;
                            }
                            while($normal_index < count($normal_countries)){
                                $country = $normal_countries[$normal_index];
                                $checked = $shared_utils->filter_selected_array_cb('employee-applying-for', $country);
                                echo "<label id='label-full-width'><input type='checkbox' name='employee-applying-for[]' value='$country' $checked>$country</label>";
                                $normal_index++;
                            }                              
                        ?>
                    </div>
                </div>
                <div class="currently-living-in-container add-border-bottom">
                    <h5>Currently Living in</h5>
                    <div class="square-container">
                        <?php
                            $eu_index         = 0;
                            $normal_index     = 0;
                            $eu_countries     = array_merge(array('EU/EØS/SCHENGEN Countries'),$variables->eu_countries); 
                            $normal_countries = $variables->normal_countries;
                            while($eu_index < count($eu_countries)){
                                $country = $eu_countries[$eu_index];
                                $checked = $shared_utils->filter_selected_array_cb('currently-living-in', $country);
                                echo "<label id='label-full-width'><input type='checkbox' class='eu-country' name='currently-living-in[]' value='$country' $checked>$country</label>";
                                $eu_index++;
                            }  
                            while($normal_index < count($normal_countries)){
                                $country = $normal_countries[$normal_index];
                                $checked = $shared_utils->filter_selected_array_cb('currently-living-in', $country);
                                echo "<label id='label-full-width'><input type='checkbox' name='currently-living-in[]' value='$country' $checked>$country</label>";
                                $normal_index++;
                            }   
                                  
                        ?>
                    </div>
                </div>
                <div class="duration-container add-border-bottom">
                    <h5>Duration</h5>
                    <div class="square-container-duration">
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-3 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-3 Months');?>/>1-3 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-6 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-6 Months');?>/>1-6 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-9 Months" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-9 Months');?>/>1-9 Months</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value="1-2 Years" <?php echo $shared_utils->filter_selected_array_cb('duration', '1-2 Years');?>/>1-2 Years</label>
                        <label id="label-full-width"><input type="checkbox" name="duration[]" value=">2 Years" <?php echo $shared_utils->filter_selected_array_cb('duration', '>2 Years');?>/>>2 Years</label>
                    </div>
                </div>
                <div class="nationality-container add-border-bottom">
                    <h5>Nationality</h5>
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
                <div class="required-gender-continer add-border-bottom">
                    <h5>Required Gender</h5>
                    <select name="required-gender">
                        <option value="No Preferences" <?php echo $shared_utils->filter_selected_select_item('required-gender', 'No Preferences');?>>No Preferences</option>    
                        <option value="Male" <?php echo $shared_utils->filter_selected_select_item('required-gender', 'Male');?>>Male</option>
                        <option value="Female" <?php echo $shared_utils->filter_selected_select_item('required-gender', 'Female');?>>Female</option>
                    </select>
                </div>
                <div class="required-age-container add-border-bottom">
                    <h5>Required Age(Min-Max)</h5>
                     <div class="container">
                        <input type="number" name="required-age-min" value="<?php echo $shared_utils->filter_input_value('required-age-min');?>" placeholder="Min"/>
                        <input type="number" name="required-age-max" value="<?php echo $shared_utils->filter_input_value('required-age-max');?>"placeholder="Max"/>
                     </div> 
                </div>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>
