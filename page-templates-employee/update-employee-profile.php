<?php 
/*
 * Template Name: Update Employee Profile
 */
get_header();
?>  
    <div class="page-loading-container">
        <div class="page-loading">
        </div>
    </div>
    <div class="active-aupair-parent-container">
        <div class="active-aupair-container">
            <div class="warning-msg">
            </div>
            <form>
                <h3 class="add-border-bottom">Upload Photo</h3>
                <div class="upload-photo-container">
                    <div class="column-one">
                        <div class="employee-photo-container">
                            <?php
                                   global $wpdb;
                                   $result = $wpdb->get_results("SELECT * FROM aupair_registered_employee WHERE wp_user_id = '".get_current_user_id()."'");
                                   $photo  = $result[0]->photo;
                                   if( $photo != ""){
                                       $imgSrc = get_stylesheet_directory_uri().'/users-photo/employee/'.$photo;
                                       echo "<img src='".$imgSrc."' alt='employee-photo' id='user-photo'>";
                                   } else {
                                       $imgSrc = get_stylesheet_directory_uri().'/users-photo/avatars/user-avatar-thumb-square.png';
                                       echo "<img src='".$imgSrc."' alt='employee-photo' id='user-photo'>";
                                   }
                            ?>
                        </div>
                        <input type="file" name="employee-photo" id="employee-photo"/>
                        <div class="photo-privacy-container">
                            <h5>Photo Privacy <span id="required">*</span></h5>
                            <div class="radio-button-fields">
                                <div id="input-1">
                                    <input type="radio" name="photo-privacy" id="public" value="Public">
                                    <label for="public" class="photo-privacy">Public</label><br>
                                </div>
                                <div id="input-2">
                                    <input type="radio" name="photo-privacy" id="registered-members" value="Registered Members">
                                    <label for="registered-members" class="photo-privacy">Registered Members</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="photo-description-container">
                            <h5>Photo Description</h5>
                            <div class="center">
                                <textarea name="photo-description" id="photo-description">
                                </textarea>
                            </div>
                        </div>
                        <input type="button" value="Upload Photo" id="upload-button">
                        <div class="upload-photo-warning-msg-container">
                            <div class="msg">
                            </div>
                        </div>
                    </div>
                    <div class="column-two">
                        <h5><i class="bi bi-check"></i>Having a photo could help your profile!</h5>
                        <h5>Make sure your photos</h5>
                         <p>are appropriate for the position</p>
                        <p>are not too sexy</p>
                        <p>involve children</p>
                        <p>do not use Instagram filters</p>
                        <p>do not include any "duck faces" or weird gestures </p>
                    </div>                  
                </div>
                <div class="what-are-you-looking-for-container">
                    <h3 class="add-border-bottom">What are you looking for?</h3>
                    <div class="looking-for-a-job-as-container">
                        <h5>Looking for a job as (max. 2)<span id="required">*</span></h5>
                        <div class="center">
                            <div class="looking-for-job">
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="aupair" value="aupair" class="un-check" id="aupair"/> Aupair</label>
                                    <label><input type="checkbox" name="nanny" value="nanny" class="un-check" id="nanny"/> Nanny</label>
                                    <label><input type="checkbox" name="grannyAupair" value="granny aupair" class="un-check" id="granny-aupair"/> Granny aupair</label>
                                    <label><input type="checkbox" name="caregiverForElderly" value="caregiver for elderly" class="un-check" id="caregiver-for-elderly"/> Caregiver for elderly</label>
                                </div>
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="liveInHelp" value="live in help" class="un-check" id="live-in-help"/> Live in help</label> 
                                    <label><input type="checkbox" name="liveInTutor" value="live in tutor" class="un-check" id="live-in-tutor"/> Live in tutor</label> 
                                    <label><input type="checkbox" name="onlineTutor" value="online tutor" class="un-check" id="online-tutor"/> Online tutor</label> 
                                    <label><input type="checkbox" name="virtualChildcare" value="virtual childcare" class="un-check" id="virtual-childcare"/> Virtual Childcare</label> 
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- LOOKING FOR A JOB SHOW/HIDE INPUTS -->
                    <div class="aupair-nanny-granny-aupair-container">
                        <h3 class="add-border-bottom">Aupair, Nanny & Granny Aupair</h3>
                        <div class="i-will-take-care-of-children-container">
                            <h6>I will take care of children from age<span id="required">*</span></h6>
                            <div class="center">
                                <div class="checkboxes">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="careChildrenZeroToOne" value="0 - 1 year old"/> 0 - 1 year old</label>   
                                        <label><input type="checkbox" name="careChildrenOneToFive" value="1 - 5 years old"/> 1 - 5 years old</label>
                                        <label><input type="checkbox" name="careChildrenSixToTen" value="6 - 10 years old"/> 6 - 10 years old</label>
                                        <label><input type="checkbox" name="careChildrenElevenToFourteen" value="11 - 14 years old"/> 11 - 14 years old</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="careChildrenFifteenPlus" value="15+ years old"/> 15+ years old</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hours-of-childcare-experience-container">
                            <div class="center">
                                <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h6>Hours of child care experience in the past 24 months?<span id="required">*</span></h6>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <select id="field" name="hours-child-care-experience" class="hour-child-care-experience">
                                            <option value="" disabled selected>Select</option>
                                            <option value="10 - 50">10 - 50</option>
                                            <option value="50 - 100">50 - 100</option>
                                            <option value="100 - 200">100 - 200</option>
                                            <option value="201 - 500">201 - 500</option>
                                            <option value="501 - 800">501 - 800</option>
                                            <option value="800+">800+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="how-many-children-people-would-you-care-container">
                            <div class="center">
                                <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h6>How many children/people would you like to take care of?<span id="required">*</span></h6>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <select name="children-people-take-care-of" id="field" class="children-people-take-care">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="would-you-work-for-single-parent-container">
                            <div class="center">
                                <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h6>Would you work for a single parent?<span id="required">*</span></h6>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <select name="work-for-single-parent" id="field" class="work-for-single-parent">
                                            <option value="" disabled selected>Select</option>
                                            <option value="No">No</option>
                                            <option value="Yes, with the father">Yes, with the father</option>
                                            <option value="Yes, with the mother">Yes, with the mother</option>
                                            <option value="Yes, with any of them">Yes, with any of them</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="take-care-children-special-needs-container">
                            <div class="center">
                                <div class="registration-radio-button">
                                    <h6>Would you take care of chilren with special needs?<span id="required">*</span></h6>
                                    <div class="radio-button-fields">
                                    <div id="input-1">
                                            <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-yes" value="Yes">
                                            <label for="take-care-children-with-special-needs-yes" class="take-care-children-with-special-needs">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                            <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-no" value="No">
                                            <label for="take-care-children-with-special-needs-no" class="take-care-children-with-special-needs">No</label><br>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="caregiver-for-elderly-and-live-in-help-container">
                        <h3 class="add-border-bottom">Caregiver for elderly & Live in help</h3>
                        <div class="i-can-assist-provide-support-to-elderly-container">
                            <h6>I can assist and provide support to elderly in<span id="required">*</span></h6>
                            <div class="center">
                                <div class="checkboxes">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="assistSupportWalksOutings" value="walks and outings"/>Walks & outings</label>
                                        <label><input type="checkbox" name="assistSupportMobilitySupport" value="mobility support"/>Mobility support</label>
                                        <label><input type="checkbox" name="assistSupportDriving" value="driving"/>Driving</label>
                                        <label><input type="checkbox" name="assistSupportErrandShopping" value="errands/shopping"/>Errands/Shopping</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="assistSupportCleaningLaundry" value="cleaning & laundry"/>Cleaning & Laundry</label>
                                        <label><input type="checkbox" name="assistSupportLightDomesticWork" value="light domestic work"/>Light domestic work</label>
                                        <label><input type="checkbox" name="assistSupportCookingMeals" value="cooking meals"/>Cooking meals</label>
                                        <label><input type="checkbox" name="assistSupportWashingDressing" value="washing & dressing"/>Washing & Dressing</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="assistSupportCompanionshipConvo" value="companionship and conversation"/>Companionship & Conversation</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="would-you-take-care-of-people-with-special-needs-container">
                           <div class="center"> 
                               <div class="registration-radio-button">
                                   <h6>Would you take care of people with special needs?<span id="required">*</span></h6>
                                   <div class="radio-button-fields">
                                       <div id="input-1">
                                           <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-yes" value="Yes">
                                           <label for="take-care-people-with-special-needs-yes" class="take-care-people-with-special-needs">Yes</label><br>
                                       </div>
                                       <div id="input-2">
                                           <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-no" value="No">
                                           <label for="take-care-people-with-special-needs-no" class="take-care-people-with-special-needs">No</label><br>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                    <div class="live-in-online-tutor-and-virtual-childcare-container">
                        <!--l-o-v, Live in help, Online tutor, Virtual childcare-->
                        <h3 class="l-o-v-dynamic-label add-border-bottom">
                        </h3>
                        <div class="preferred-subjects-container">
                            <h6>Preffered subjects<span id="required">*</span></h6>
                            <div class="center">
                               <div class="checkboxes">
                                  <div class="registration-checkbox">
                                     <label><input type="checkbox" name="preferredSubjectMath" value="mathematics"/> Mathematics</label>
                                     <label><input type="checkbox" name="preferredSubjectPhysics" value="physics"/> Physics</label>
                                     <label><input type="checkbox" name="preferredSubjectChemistry" value="chemistry"/> Chemistry</label>
                                     <label><input type="checkbox" name="preferredSubjectBiology" value="biology"/> Biology</label>
                                  </div>
                                  <div class="registration-checkbox">
                                     <label><input type="checkbox" name="preferredSubjectEnglish" value="english"/> English</label>
                                     <label><input type="checkbox" name="preferredSubjectGerman" value="german"/> German</label>
                                     <label><input type="checkbox" name="preferredSubjectFrench" value="french"/> French</label>
                                     <label><input type="checkbox" name="preferredSubjectSpanish" value="spanish"/> Spanish</label>
                                  </div>
                                  <div class="registration-checkbox">
                                     <label><input type="checkbox" name="preferredSubjectItalian" value="italian"/> Italian</label>
                                     <label><input type="checkbox" name="preferredSubjectMusic" value="music"/> Music</label>
                                     <label><input type="checkbox" name="preferredSubjectSport" value="sport"/> Sport</label>
                                  </div>
                               </div>
                            </div>
                        </div>
                        <div class="activities-with-kids-container">
                            <h6>Activities with kids<span id="required">*</span></h6>
                            <div class="center">
                                <div class="checkboxes">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="activityWithKidsHomeWorkAst" value="homework assistance"/> Homework Assistance</label>
                                        <label><input type="checkbox" name="activityWithKidsBookReading" value="book reading"/> Book Reading</label>
                                        <label><input type="checkbox" name="activityWithKidsArtCraft" value="art & craft"/> Art & Craft</label>
                                        <label><input type="checkbox" name="activityWithKidsDrawCutting" value="drawing & cutting"/> Drawing & Cutting</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="activityWithKidsNumberCounting" value="numbers & counting"/> Numbers & Counting</label>
                                        <label><input type="checkbox" name="activityWithKidsLettersSound" value="letters & sound"/> Letters & Sounds</label>
                                        <label><input type="checkbox" name="activityWithKidsSongsPoetry" value="songs & poetry"/> Songs & Poetry</label>
                                        <label><input type="checkbox" name="activityWithKidsGamesActivity" value="mind games & activity"/> Mind Games & Activity</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="preferred-student-age-group-container">
                            <h6>Preferred student age group<span id="required">*</span></h6>
                            <div class="center">
                                <div class="checkboxes">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="preferredStudentAgeGroupInfant" value="infants (0-1)"/> Infants(0-1)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupToddlers" value="toddlers (2-3)"/> Toddlers(2-3)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupPreSchoolers" value="preschoolers (4-5)"/> Preschoolers(4-5)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupPrimarySchool" value="primary school (6-12)"/> Primary school (6-12)</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="preferredStudentAgeGroupTeenagers" value="teenagers (13-17)"/> Teenagers(13-17)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupYoungAdults" value="young adults (18-30)"/> Young adults(18-30)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupAdults" value="adults (31-60)"/> Adults(31-60)</label>
                                        <label><input type="checkbox" name="preferredStudentAgeGroupSeniors" value="senior (60+)"/> Senior (60+)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-per-hour-container">
                            <div class="center">
                                <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h6>Price per hour<span id="required">*</span></h6>
                                            <p>We recommend to start with a lower price per hour and increase it as your experience in this field grows.</p>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <input type="number" id="field-1" name="price-per-hour" placeholder="Amount" class="amount"/>
                                        <select id="field-2" name="currency" class="currency">
                                            <option value="" disabled selected>Currency</option>
                                            <option value="EUR">EUR</option>
                                            <option value="USD">USD</option>
                                            <option value="GBP">GBP</option>
                                            <option value="AUD">AUD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <!-- END LOOKING FOR A JOB SHOW/HIDE INPUTS -->
                    <div class="preferred-countries-container">
                        <h5>Preferred countries<span id="required">*</span></h5>
                        <div class="center">
                            <div class="countries registration-checkbox">
                                <div>
                                    <label><input type="checkbox" name="Select All" id="select-all"/>Select All</label>
                                    <label><input type="checkbox" name="EU Countries" id="select-eu"/>Select EU/EØS/SCHENGEN</label>
                                    <label><input type="checkbox" name="Austria" id="eu-country"/>Austria</label>
                                    <label><input type="checkbox" name="Belgium" id="eu-country"/>Belgium</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preferred-area-container">
                        <h5>Preferred Area <span id="required">*</span></h5>
                        <div class="center">
                            <div class="checkboxes">
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="preferredAreaAll" id="select-all"/>Select All</label>
                                    <label><input type="checkbox" name="preferredAreaSmallCity"/>Small City</label>
                                    <label><input type="checkbox" name="preferredAreaBigCity"/>Big City</label>
                                    <label><input type="checkbox" name="preferredAreaSuburd"/>Suburd</label>
                                </div>
                                <div class="registration-checkbox">
                                    <label><input type="checkbox" name="preferredAreaCountrySide">Countryside</label>
                                    <label><input type="checkbox" name="preferredAreaTown"/>Town</label>
                                    <label><input type="checkbox" name="preferredAreaVillage"/>Village</label>
                                    <label><input type="checkbox" name="preferredAreaSeaSide"/>Sea Side</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="earliest-starting-date-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Earliest starting date <span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field-1" class="earliest-starting-date-month" name="earliest-starting-date-month" id="input-1">
                                    <option value="" disabled selected>Month</option>
                                    </select>
                                    <select id="field-2" class="earliest-starting-date-year" name="earliest-starting-date-year" id="input-2">
                                    <option value="" disabled selected>Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="latest-starting-date-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Latest starting date <span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field-1" class="latest-starting-date-month" name="latest-starting-date-month" id="input-1">
                                    <option value="" disabled selected>Month</option>
                                    </select>
                                    <select id="field-2" class="latest-starting-date-year" name="latest-starting-date-year" id="input-2">
                                    <option value="" disabled selected>Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="duration-of-stay-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Duration of stay<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" name="duration-of-stay" class="duration-of-stay">
                                        <option value="" disabled selected>Select</option>
                                        <option value="1-3 Months">1-3 Months</option>
                                        <option value="1-6 Months">1-6 Months</option>
                                        <option value="1-9 Months">1-9 Months</option>
                                        <option value="1-2 Years">1-2 Years</option>
                                        <option value=">2 Years">>2 Years</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="what-kind-of-work-are-you-looking-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>What kind of work are you looking for?</h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                        <input type="radio" name="kind-of-work-looking" id="full-time-work" value="Full time work">
                                        <label for="full-time-work" class="kind-of-work-looking">Full time work</label><br>
                                    </div>
                                    <div id="input-2">
                                        <input type="radio" name="kind-of-work-looking" id="part-time-work" value="Part time work">
                                        <label for="part-time-work" class="kind-of-work-looking">Part time work</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accomodation-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Accomodation<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field"  name="accomodation" class="accomodation">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Im looking for live in work">Im looking for live in work</option>
                                        <option value="Im looking for live out work">Im looking for live out work</option>
                                        <option value="Both">Both</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="would-you-live-family-with-pets-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Would you live with a family with pets?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                        <input type="radio" name="live-family-with-pets" id="live-family-with-pets-yes" value="Yes">
                                        <label for="live-family-with-pets-yes" class="live-family-with-pets">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                        <input type="radio" name="live-family-with-pets" id="live-family-with-pets-no" value="No">
                                        <label for="live-family-with-pets-no" class="live-family-with-pets">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="would-you-take-care-of-pets-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Would you take care of pets?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                        <input type="radio" name="take-care-pets" id="take-care-pets-yes" value="Yes">
                                        <label for="take-care-pets-yes" class="take-care-pets">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                        <input type="radio" name="take-care-pets" id="take-care-pets-no" value="No">
                                        <label for="take-care-pets-no" class="take-care-pets">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="would-work-extra-to-earn-additional-money-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Would you work extra to earn some additional money?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="work-extra-to-earn-additional-money" id="work-extra-to-earn-additional-money-yes" value="Yes">
                                    <label for="work-extra-to-earn-additional-money-yes" class="work-extra-to-earn-additional-money">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="work-extra-to-earn-additional-money" id="work-extra-to-earn-additional-money-no" value="No">
                                    <label for="work-extra-to-earn-additional-money-no" class="work-extra-to-earn-additional-money">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="personal-information-container">
                    <div class="gender-container">
                        <h3 class="add-border-bottom">Personal Information</h3>
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Gender<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="gender" id="male" value="Male">
                                    <label for="male" class="gender">Male</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="gender" id="female" value="Female">
                                    <label for="female" class="gender">Female</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="date-of-birth-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Date of brith <span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field-1" class="date-of-birth-month" name="date-of-birth-month" id="input-1">
                                    <option value="" disabled selected>Month</option>
                                    </select>
                                    <select id="field-2" class="date-of-birth-year" name="date-of-birth-year" id="input-2">
                                    <option value="" disabled selected>Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your-weight-in-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Your weight in?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                        <input type="radio" name="weight" id="weight-kg" value="kg">
                                        <label for="weight-kg" class="weight">kg</label>
                                    </div>
                                    <div id="input-2">
                                        <input type="radio" name="weight" id="weight-lbs" value="lbs">
                                        <label for="weight-lbs" class="weight">lbs</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="weight-in-kg-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Weight in kg<span id="required">*</span></h5>         
                                    </div>
                                </div>
                                <div class="field-container">
                                    <input id="field" type="number" name="weight-kg" placeholder="Weight(kg)" class="weight-kg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="weight-in-lbs-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Weight in lbs<span id="required">*</span></h5>         
                                    </div>
                                </div>
                                <div class="field-container">
                                    <input id="field" type="number" name="weight-lbs" placeholder="Weight(lbs)" class="weight-lbs"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your-height-in-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Your height in?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="height" id="height-cm" value="cm">
                                    <label for="height-cm" class="height">cm</label>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="height" id="height-ft" value="ft">
                                    <label for="height-ft" class="height">ft</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height-in-cm-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <h5>Heigth in cm<span id="required">*</span></h5>  
                                </div>
                                <div class="field-container">
                                    <input id="field" type="number" name="height-cm" placeholder="Height(cm)" class="height-cm"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="height-in-ft-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <h5>Heigth in ft<span id="required">*</span></h5>  
                                </div>
                                <div class="field-container">
                                    <input id="field" type="number" name="height-ft" placeholder="Height(ft)" class="height-ft"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nationality-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Nationality<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" class="nationality" name="nationality">
                                        <option value="" disabled selected>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="i-have-a-passport-from-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>I have a passport from<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" class="select" name="have-a-passport-from">
                                        <option value="" disabled selected>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="where-are-you-currently-living-container">
                        <div>
                            <div class="center">
                                <div class="registration-radio-button">
                                    <h5>Where are you currently living?<span id="required">*</span></h5>
                                    <div class="radio-button-fields">
                                        <div id="input-1">
                                            <input type="radio" name="currently-living" id="home-country" value="In my home Country">
                                            <label for="home-country" class="currently-living">In my Home Country</label><br>
                                        </div>
                                        <div id="input-2">
                                            <input type="radio" name="currently-living" id="another-country" value="Another country">
                                            <label for="another-country" class="currently-living">Another Country</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="another-country-container">
                            <div class="living-in">
                                <div class="center">
                                    <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h5>Living in?<span id="required">*</span></h5>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <select id="field" class="select" name="living-in">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="visa-status">
                                <div class="center">
                                    <div class="registration-input">
                                    <div class="label-container">
                                        <div>
                                            <h5>Visa status?<span id="required">*</span></h5>
                                        </div>
                                    </div>
                                    <div class="field-container">
                                        <select id="field" class="visa-status-select" name="visa-status">
                                            <option value="" disabled selected>Select</option>
                                            <option value="I have for 1-2 years">I have for 1-2 years</option>
                                            <option value="I have for 2+ years">I have for 2+ years</option>
                                            <option value="I have a permanent visa">I have a permanent visa</option>
                                            <option value="My visa is close to expire">My visa is close to expire</option>
                                            <option value="I do not have a valid visa">I do not have a valid visa</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="education-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Education<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" class="select" name="education">
                                        <option value="" disabled selected>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name-of-school-college-and-university-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Name of school, College & University<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <input id="field" type="text" name="name-of-school-college-university" placeholder="School, College or University" class="name-of-school-college-university"/>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="profession-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                    <h5>Profession<span id="required">*</span></h5>         
                                    </div>
                                </div>
                                <div class="field-container">
                                    <input id="field" type="text" name="profession" placeholder="Profession" class="profession"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="marital-status-container">   
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Marital status<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <select id="field" name="marital-status" class="marital-status">
                                   <option value="" disabled selected>Select</option>
                                   <option value="Single">Single</option>
                                   <option value="Married">Married</option>
                                   <option value="Engaged">Engaged</option>
                                   <option value="Separated">Separated</option>
                                   <option value="Divorced">Divorced</option>
                                   <option value="Widow">Widow</option>
                                </select>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-have-children-of-your-own-container">
                       <div class="center">
                          <div class="registration-radio-button">
                             <h5>Do you have children of your own?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="have-own-children" id="have-own-children-yes" value="Yes">
                                   <label for="have-own-children-yes" class="have-own-children">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="have-own-children" id="have-own-children-no" value="No">
                                   <label for="have-own-children-no" class="have-own-children">No</label><br>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-have-any-siblings-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Do you have any siblings?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="have-siblings" id="have-siblings-yes" value="Yes">
                                    <label for="have-siblings-yes" class="have-siblings">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="have-siblings" id="have-siblings-no" value="No">
                                    <label for="have-siblings-no" class="have-siblings">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="do-you-have-a-training-in-healthcare-container">
                        <div class="center">
                            <div class="registration-radio-button">
                                <h5>Do you have a training in healthcare?<span id="required">*</span></h5>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="healthcare-training" id="healthcare-training-yes" value="Yes">
                                    <label for="healthcare-training-yes" class="healthcare-training">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="healthcare-training" id="healthcare-training-no" value="No">
                                    <label for="healthcare-training-no" class="healthcare-training">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="did-you-attend-first-aid-training-container">
                       <div class="center">
                          <div class="registration-radio-button">
                             <h5>Did you attend first aid training?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="have-first-aid-traning" id="have-first-aid-traning-yes" value="Yes">
                                   <label for="have-first-aid-traning-yes" class="have-first-aid-traning">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="have-first-aid-traning" id="have-first-aid-traning-no" value="No">
                                   <label for="have-first-aid-traning-no" class="have-first-aid-traning">No</label><br>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-have-criminal-record-container">
                       <div class="center">
                          <div class="registration-radio-button">
                             <h5>Do you have a criminal record?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="have-criminal-record" id="have-criminal-record-yes" value="Yes">
                                   <label for="have-criminal-record-yes" class="have-criminal-record">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="have-criminal-record" id="have-criminal-record-no" value="No">
                                   <label for="have-criminal-record-no" class="have-criminal-record">No</label><br>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="special-diet-consideration-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Special diet considerations<span id="required">*</span></h5>
                                </div>         
                             </div>
                             <div class="field-container">
                                <select id="field" name="special-diet-consideration" class="select">
                                   <option value="" disabled selected>Select</option>
                                   <option value="No Preferences/I eat anything">No Preferences/I eat anything</option>
                                   <option value="Vegetarian">Vegetarian</option>
                                   <option value="Special diet">Special Diet</option>
                                   <option value="No special diet">Vegetarian</option>
                                   <option value="Vegan">Vegan</option>
                                   <option value="Lactose Intolerance">Lactose Intolerance</option>
                                   <option value="Fructose Intolerance">Fructose Intolerance</option>
                                   <option value="Gluten Free">Gluten Free</option>
                                </select>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-have-any-health-problems-or-allergies-container">
                      <div class="center">
                         <div class="registration-radio-button">
                             <h5>Do you have any health problems or allergies?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="have-health-problems-or-allergies" id="have-health-problems-or-allergies-yes" value="Yes">
                                   <label for="have-health-problems-or-allergies-yes" class="have-health-problems-or-allergies">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="have-health-problems-or-allergies" id="have-health-problems-or-allergies-no" value="No">
                                   <label for="have-health-problems-or-allergies-no" class="have-health-problems-or-allergies">No</label><br>
                                </div>
                             </div>                    
                         </div>
                      </div>
                    </div>
                    <div class="describe-your-health-problems-or-allergies-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Describe your health problems or allergies <span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <textarea id="field" name="describe-health-problems-or-allergies" rows="4" cols="50" class="describe-health-problems-or-allergies">
                                </textarea>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-smoke-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Do you smoke?<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <select id="field" name="do-you-smoke" class="do-you-smoke">
                                   <option value="" disabled selected>Select</option>
                                   <option value="Yes">Yes</option>
                                   <option value="No">No</option>
                                   <option value="Sometimes">Sometimes</option>
                                </select>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="can-you-swim-well-container">
                       <div class="center">
                          <div class="registration-radio-button">
                             <h5>Can you swim well?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="can-swim-well" id="can-swim-well-yes" value="Yes">
                                   <label for="can-swim-well-yes" class="can-swim-well">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="can-swim-well" id="can-swim-well-no" value="No">
                                   <label for="can-swim-well-no" class="can-swim-well">No</label><br>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="can-you-ride-a-bike-container">
                       <div class="center">
                          <div class="registration-radio-button">
                             <h5>Can you ride a bike?<span id="required">*</span></h5>
                             <div class="radio-button-fields">
                                <div id="input-1">
                                   <input type="radio" name="can-ride-bike" id="can-ride-bike-yes" value="Yes">
                                   <label for="can-ride-bike-yes" class="can-ride-bike">Yes</label><br>
                                </div>
                                <div id="input-2">
                                   <input type="radio" name="can-ride-bike" id="can-ride-bike-no" value="No">
                                   <label for="can-ride-bike-no" class="can-ride-bike">No</label><br>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="do-you-a-drivers-license-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Do you have a drivers license?<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <select id="field" name="have-drivers-license" class="have-drivers-license">
                                   <option value="" disabled selected>Select</option>
                                   <option value="No">No</option>
                                   <option value="Yes, I have National driving license">Yes, I have National driving license</option>
                                   <option value="Yes, I have International driving license">Yes, I have International driving license</option>
                                </select>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="sports-container">
                      <div class="center">
                         <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Sports?<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <input id="field" type="text" name="sports" placeholder="Sports" class="sports"/>
                             </div>
                         </div>
                      </div>
                    </div>
                    <div class="religion-container">
                        <div class="center">
                           <div class="registration-input">
                              <div class="label-container">
                                 <div>
                                    <h5>Religion<span id="required">*</span></h5>
                                 </div>
                              </div>
                              <div class="field-container">
                                 <select id="field" class="select" name="religion">
                                    <option value="" disabled selected>Select</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="religion-for-you-is-container">
                      <div class="center">
                         <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Religion for you is<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <select id="field" name="religion-for-you-is" class="religion-for-you-is">
                                   <option value="" disabled selected>Select</option>
                                   <option value="Not important">Not Imporant</option>
                                   <option value="Important">Imporant</option>
                                   <option value="Very important">Very Imporant</option>
                                </select>
                             </div>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="contact-information-container">
                    <h3 class="add-border-bottom">Contact Information</h3>
                    <div class="firstname-container">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>First name<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <input id="field" type="text" name="firstname" placeholder="Firstname" class="firstname"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lastname-container">
                      <div class="center">
                         <div class="registration-input">
                            <div class="label-container">
                               <div>
                                  <h5>Last name<span id="required">*</span></h5>
                               </div>
                            </div>
                            <div class="field-container">
                               <input id="field" type="text" name="lastname" placeholder="Lastname" class="lastname"/>
                            </div>
                         </div>
                      </div>
                    </div>
                    <div class="address-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Address<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <input id="field" type="text" name="address" placeholder="Address" class="address"/>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="zip-code-container">
                      <div class="center">
                         <div class="registration-input">
                            <div class="label-container">
                               <div>
                                  <h5>Zip code<span id="required">*</span></h5>
                               </div>
                            </div>
                            <div class="field-container">
                               <input id="field" type="text" name="zip-code" placeholder="Zip code" class="zip-code"/>
                            </div>
                         </div>
                      </div>
                    </div>
                    <div class="city-container">
                      <div class="center">
                         <div class="registration-input">
                            <div class="label-container">
                               <div>
                                  <h5>City<span id="required">*</span></h5>
                               </div>
                            </div>
                            <div class="field-container">
                               <input id="field" type="text" name="city" placeholder="City" class="city"/>
                            </div>
                         </div>
                      </div>
                    </div>
                    <div class="state-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>State/Region<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <input id="field" type="text" name="state-region" placeholder="State/Region" class="state-region"/>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="country-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Country<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <select id="field" class="select" name="country">
                                   <option value="" disabled selected>Select</option>
                                </select>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="mobile-number-container">
                       <div class="center">
                          <div class="registration-input">
                             <div class="label-container">
                                <div>
                                   <h5>Mobile Phone No<span id="required">*</span></h5>
                                </div>
                             </div>
                             <div class="field-container">
                                <input id="field" type="tel" name="mobile-number[full]" class="mobile-number"/>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="letter-to-the-family-container">
                        <h3 class="add-border-bottom">Letter to the Family</h3>
                        <h5>Letter<span id="required">*</span></h5>
                        <div class="center">
                           <textarea id="text-area" name="letter-to-the-family" class="letter-to-the-family">
                           </textarea>
                        </div>
                    </div>
                </div>
                <div class="button-container">
                    <div class="first-div">
                    </div>
                    <div class="second-div">
                      <input type="submit" name="submit" value="Update" id="update-btn"/>
                    </div>
                </div>
                <div class="warning-msg-container-btm center">
                    <div class="warning-msg-btm">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
get_footer();
?>
