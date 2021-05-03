<?php
/*
 * Template Name: Register Host Family
 * description: >-
  Active aupair host family registration form
 */
get_header();
?>
<div class="active-aupair-parent-container">
    <div class="active-aupair-container">
        <form action="" method="post">
            <div class="warning-msg">
            </div>
            <div class="we-are-looking-for-container">
                <h3 class="add-border-bottom">Job Requirements</h3>
                <h5>We are looking for(max. 2)<span id="required">*</span></h5>
                <div class="center">
                    <div class="we-are-looking-for">
                        <div class="registration-checkbox">
                            <label><input type="checkbox" name="aupair" value="aupair" class="un-check" id="aupair"/> Aupair</label>
                            <label><input type="checkbox" name="nanny" value="nanny"  class="un-check" id="nanny"/> Nanny</label>
                            <label><input type="checkbox" name="granny aupair" value="granny aupair" class="un-check" id="granny-aupair" /> Granny aupair</label>
                            <label><input type="checkbox" name="caregiver for eldery" value="caregiver for elderly" class="un-check" id="caregiver-for-elderly"/> Caregiver for elderly</label>
                        </div> 
                        <div class="registration-checkbox">
                            <label><input type="checkbox" name="live in help" value="live in help" class="un-check" id="live-in-help"/> Live in help</label>
                            <label><input type="checkbox" name="live in tutor" value="live in tutor" class="un-check" id="live-in-tutor"/> Live in tutor</label>
                            <label><input type="checkbox" name="online tutor" value="online tutor" class="un-check" id="online-tutor"/> Online tutor</label>
                            <label><input type="checkbox" name="virtual childcare" value="virtual childcare" class="un-check" id="virtual-childcare"/> Virtual Childcare</label>
                        </div>
                    </div>
                </div>
                <!-- LOOKING FOR A JOB SHOW/HIDE INPUTS -->
                <div class="aupair-nanny-granny-aupair" style="background: red">
                    <div class="take-care-of-children-container">
                        <h3 class="add-border-bottom">Aupair, Nanny & Granny Aupair</h3>
                            <h6>How old are the children/people the applicants has to take care of?<span id="required">*</span></h6>
                            <div class="center">
                                <div class="take-care-of-children">
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="0 - 1 year old" value="0 - 1 year old"/> 0 - 1 year old</label>   
                                        <label><input type="checkbox" name="1 - 5 years old" value="1 - 5 years old"/> 1 - 5 years old</label>
                                        <label><input type="checkbox" name="6 - 10 years old" value="6 - 10 years old"/> 6 - 10 years old</label>
                                        <label><input type="checkbox" name="11 - 14 years old" value="11 - 14 years old"/> 11 - 14 years old</label>
                                    </div>
                                    <div class="registration-checkbox">
                                        <label><input type="checkbox" name="15+ years old" value="15+ years old"/> 15+ years old</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="childcare-experience">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h6>Minium required childcare experience for the past 24 months?<span id="required">*</span></h6>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <select id="field" name="hours-child-care-experience" class="hours-child-care-experience">
                                        <option value="" disabled selected>Select</option>
                                        <option value="not important">Not important</option>
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
                    <div class="children-people-taken-care">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h6>How many children/people would you like to take care of?<span id="required">*</span></h6>
                                    </div>
                                </div>
                                <div class="field-container">
                                   <input id="field" type="number" name="how-many-children-people-would" class="how-many-children-people-would">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="take-care-children-special-needs">
                        <div class="center"> 
                            <div class="registration-radio-button">
                                <h6>Does the applicant have to take care children with special needs?<span id="required">*</span></h6>
                                <div class="radio-button-fields">
                                    <div id="input-1">
                                    <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-yes" value="yes">
                                    <label for="take-care-children-with-special-needs-yes" class="take-care-children-with-special-needs">Yes</label><br>
                                    </div>
                                    <div id="input-2">
                                    <input type="radio" name="take-care-children-with-special-needs" id="take-care-children-with-special-needs-no" value="no">
                                    <label for="take-care-children-with-special-needs-no" class="take-care-children-with-special-needs">No</label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="yes-take-care-special-children">
                        <div class="center">
                            <div class="registration-input">
                                <div class="label-container">
                                    <div>
                                        <h5>Describe children<span id="required">*</span></h5>
                                    </div>
                                </div>
                                <div class="field-container">
                                    <textarea id="field" class="describe-children">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="we-need-assistance-support-in">
                    <h3 class="add-border-bottom">Caregiver for elderly & Live in help</h3>
                    <h6>We need assistance and support in<span id="required">*</span></h6>
                    <div class="center">
                        <div class="we-need-assistance-support-in-cb">
                            <div class="registration-checkbox">
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="walks and outings"/>Walks and outings</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="mobility support"/>Mobility support</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="driving"/>Driving</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="errands/shopping"/>Errands/Shopping</label>
                            </div>
                            <div class="registration-checkbox">
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="cleaning & laundry"/>Cleaning & Laundry</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="light domestic work"/>Light domestic work</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="cooking meals"/>Cooking meals</label>
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="washing & dressing"/>Washing & Dressing</label>
                            </div>
                            <div class="registration-checkbox">
                                <label><input type="checkbox" name="need-assistance-support-in[]" value="washing & dressing"/>Companionship and conversation</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="applicant-would-take-care">
                    <div class="center"> 
                        <div class="registration-radio-button">
                            <h6>Does the applicant have to take care people with special needs?<span id="required">*</span></h6>
                            <div class="radio-button-fields">
                                <div id="input-1">
                                    <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-yes" value="yes">
                                    <label for="take-care-people-with-special-needs-yes" class="take-care-people-with-special-needs">Yes</label><br>
                                </div>
                                <div id="input-2">
                                    <input type="radio" name="take-care-people-with-special-needs" id="take-care-people-with-special-needs-no" value="no">
                                    <label for="take-care-people-with-special-needs-no" class="take-care-people-with-special-needs">No</label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <h3 class="dynamic-label add-border-bottom">
                   Live in tutor
                 </h3>
                <div class="tutor-who-can-teach">
                    <h6>We need a tutor who can teach<span id="required">*</span></h6>
                    <div class="center">
                       <div class="tutor-who-can-teach-cb">
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="mathematics"/> Mathematics</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="physics"/> Physics</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="chemistry"/> Chemistry</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="biology"/> Biology</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="english"/> English</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="german"/> German</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="french"/> French</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="spanish"/> Spanish</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="italian"/> Italian</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="music"/> Music</label>
                             <label><input type="checkbox" name="tutor-who-can-teach[]" value="sport"/> Sport</label>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="tutor-who-can-do-activities">
                    <h6>We need a tutor who can do the following activities with our kids<span id="required">*</span></h6>
                    <div class="center">
                       <div class="tutor-who-can-do-activities-cb">
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="activities-with-kids[]" value="homework assistance"/> Homework Assistance</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="book reading"/> Book Reading</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="art & craft"/> Art & Craft</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="drawing & cutting"/> Drawing & Cutting</label>
                          </div>
                          <div class="registration-checkbox">
                             <label><input type="checkbox" name="activities-with-kids[]" value="numbers & counting"/> Numbers & Counting</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="letters & sound"/> Letters & Sounds</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="songs & poetry"/> Songs & Poetry</label>
                             <label><input type="checkbox" name="activities-with-kids[]" value="mind games & activity"/> Mind Games & Activity</label>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="student-age-group-tutor-would-teach">
                   <h6>How old are the students the tutor should teach?<span id="required">*</span></h6>
                   <div class="center">
                      <div class="student-age-group-tutor-would-teach-cb">
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="infants (0-1)"/> Infants(0-1)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="toddlers (2-3)"/> Toddlers(2-3)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="preschoolers (4-5)"/> Preschoolers(4-5)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="primary school (6-12)"/> Primary school (6-12)</label>
                         </div>
                         <div class="registration-checkbox">
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="teenagers (13-17)"/> Teenagers(13-17)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="young adults (18-30)"/> Young adults(18-30)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="adults (31-60)"/> Adults(31-60)</label>
                            <label><input type="checkbox" name="student-age-group-tutor-would-teach[]" value="senior (60+)"/> Senior (60+)</label>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="price-per-hour">
                   <div class="center">
                      <div class="registration-input">
                         <div class="price-label-container">
                            <div>
                               <h6>Price per hour<span id="required">*</span></h6>
                            </div>
                         </div>
                         <div class="field-container">
                            <input type="number" id="field-1" name="amount" class="amount" placeholder="Amount"/>
                            <select id="field-2" name="currency" class="currency">
                               <option value="" disabled selected>Currency</option>
                               <option value="eur">EUR</option>
                               <option value="usd">USD</option>
                               <option value="gbp">GBP</option>
                               <option value="aud">AUD</option>
                            </select>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- END LOOKING FOR A JOB SHOW/HIDE INPUTS -->
            </div>
            <div class="preferred-nationalities-container">
                <h5>Preferred Nationalities<span id="required">*</span></h5>
                <div class="center">
                    <div class="preferred-nationalities registration-checkbox">
                        <div>
                            <label><input type="checkbox" name="preferred-nationalites[]" value="no preferences" id="p-n-no-preferences"/>No Preferences</label>
                            <label><input type="checkbox" name="preferred-nationalites[]" value="select all" id="p-n-select-all"/>Select All</label>
                            <label><input type="checkbox" name="preferred-nationalites[]" value="afghan"/>Afghan</label>
                            <label><input type="checkbox" name="preferred-nationalites[]" value="albanina"/>Albanian</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-currently-living-in-container">
                <h5>Applicant Currently Living In<span id="required">*</span></h5>
                <div class="center">
                    <div class="applicant-currently-living-in registration-checkbox">
                        <div>
                            <label><input type="checkbox" name="applicant-living-in[]" value="no preferences" id="a-c-l-no-preferences"/>No Preferences</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="inside-eu-country" id="inside-eu-country"/>Inside EU/EØS/SCHENGEN</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="afghan" id="eu-country"/>Afghan</label>
                            <label><input type="checkbox" name="applicant-living-in[]" value="albanina" id="eu-country"/>Albanian</label>           
                        </div>
                    </div>
                </div>
            </div>
            <div class="earliest-starting-date">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Earliest starting date<span id="required">*</span></h5>
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
            <div class="latest-starting-date">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Latest starting date<span id="required">*</span></h5>
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
                            <option value="1-3 months">1-3 months</option>
                            <option value="1-6 months">1-6 months</option>
                            <option value="1-9 months">1-9 months</option>
                            <option value="1-2 years">1-2 years</option>
                            <option value=">2 yeas">>2 years</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
            <div class="preferred-gender-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Preferred Gender<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="preferred-gender" class="preferred-gender">
                                <option value="" disabled selected>Select</option>
                                <option value="not important">Not Important</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="require-language-skills-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Required Language Skills<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="required-language-skills" class="required-language-skills">
                                <option value="" disabled selected>Select</option>
                                <option value="not important">Not Important</option>
                                <option value="minimum">Minimum</option>
                                <option value="medium">Medium</option>
                                <option value="maximum">Maximum</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="require-education-level-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Required Education Level<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="require-education-level" class="require-education-level">
                                <option value="" disabled selected>Select</option>
                                <option value="no education needed">No Education Needed</option>
                                <option value="primary school">Primary School</option>
                                <option value="seconday school">Secondary School</option>
                                <option value="college">College</option>
                                <option value="vocational school">Vocational School</option>
                                <option value="bachelor\'s degree">Bachelor\'s Degree</option>
                                <option value="master\'s degree">Master\'s Degree</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="working-hours-per-week-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Working Hours(per week)<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="working-hours-per-week" class="working-hours-per-week">
                                <option value="" disabled selected>Select</option>
                                <option value="25 - 30">25 - 30</option>
                                <option value="30 - 35">30 - 35</option>
                                <option value="35 - 40">35 - 40</option>
                                <option value="40 - 45">40 - 45</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pocket-money-per-month-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Pocket money(per month)<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <input id="field-1" type="number" name="pocket-money-permonth" class="pocket-money-permonth" placeholder="Pocket money"/>
                            <select id="field-2" class="pocket-money-permonth-currency" name="pocket-money-permonth-currency">
                                <option value="" disabled selected>Select</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="willing-to-pay-share-travel-expenses-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Are you willing to pay for travel expenses?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="pay-for-travel-expenses" class="pay-for-travel-expenses">
                                <option value="" disabled selected>Select</option>
                                <option value="applicant should pay for everything">Applicant should pay for everything</option>
                                <option value="we would share your travel expenses">We would share your travel expenses</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="willing-to-pay-visa-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Are you willing to pay for visa?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="pay-for-visa" class="pay-for-visa">
                                <option value="" disabled selected>Select</option>
                                <option value="applicant should pay for everything">Applicant should pay for everything</option>
                                <option value="we would share your visa expenses">We would share your visa expenses</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="required-age-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Required Age<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field-1" class="required-age-min" name="required-age-min">
                                <option value="" disabled selected>Min</option>
                            </select>
                            <select id="field-2" class="required-age-max" name="required-age-max">
                                <option value="" disabled selected>Max</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="is-smoking-allowed-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <h5>Is smoking allowed?<span id="required">*</span></h5>
                        </div>
                        <div class="field-container">
                            <select id="field" name="is-smoking-allowed" class="is-smoking-allowed">
                                <option value="" disabled selected>Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="yes, but not at home">Yes, but not at home</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-take-care-of-pets-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant have to take care of pets?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-take-care-of-pets" id="applicant-take-care-of-pets-yes" value="yes">
                                <label for="applicant-take-care-of-pets-yes" class="applicant-take-care-of-pets">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-take-care-of-pets" id="applicant-take-care-of-pets-no" value="no">
                                <label for="applicant-take-care-of-pets-no" class="applicant-take-care-of-pets">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-know-how-to-swim-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant know how to swim?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-know-how-to-swim" id="applicant-know-how-to-swim-yes" value="yes">
                                <label for="applicant-know-how-to-swim-yes" class="applicant-know-how-to-swim">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-know-how-to-swim" id="applicant-know-how-to-swim-no" value="no">
                                <label for="applicant-know-how-to-swim-no" class="applicant-know-how-to-swim">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="applicant-know-how-to-ride-a-bike-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Does the applicant know how to ride a bike?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-know-how-to-ride-bike" id="applicant-know-how-to-ride-bike-yes" value="yes">
                                <label for="applicant-know-how-to-ride-bike-yes" class="applicant-know-how-to-ride-bike">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-know-how-to-ride-bike" id="applicant-know-how-to-ride-bike-no" value="no">
                                <label for="applicant-know-how-to-ride-bike-no" class="applicant-know-how-to-ride-bike">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="does-applicant-have-first-aid-training-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you expect that the Applicant to attend a First Aid Training?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-attend-first-aid-training" id="applicant-first-aid-training-yes" value="yes">
                                <label for="applicant-first-aid-training-yes" class="applicant-attend-first-aid-training">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-attend-first-aid-training" id="applicant-first-aid-training-no" value="no">
                                <label for="applicant-first-aid-training-no" class="applicant-attend-first-aid-training">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="do-you-expect-applicant-to-drive-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you expect the Applicant to drive?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-to-drive" id="applicant-to-drive-yes" value="yes">
                                <label for="applicant-to-drive-yes" class="applicant-to-drive">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-to-drive" id="applicant-to-drive-no" value="no">
                                <label for="applicant-to-drive-no" class="applicant-to-drive">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="can-the-applicant-attend-language-courses-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Can the Applicant attend language courses?<span id="required">*</span></h5>
                        <div class="radio-button-fields">
                            <div id="input-1">
                                <input type="radio" name="applicant-to-attend-language-courses" id="applicant-to-attend-language-courses-yes" value="yes">
                                <label for="applicant-to-attend-language-courses-yes" class="applicant-to-attend-language-courses">Yes</label><br>
                            </div>
                            <div id="input-2">
                                <input type="radio" name="applicant-to-attend-language-courses" id="applicant-to-attend-language-courses-no" value="no">
                                <label for="applicant-to-attend-language-courses-no" class="applicant-to-attend-language-courses">No</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="add-border-bottom">Personal Information</h3>
             <div class="what-languages-spoken-at-home">
                <h5>What languages are spoken at home?<span id="required">*</span></h5>
                <div class="center">
                    <div class="languages-spoken-at-home registration-checkbox"></div>
                </div>
             </div>
             <div class="are-you-a-single-parent-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Are you a single parent?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field"  name="are-you-single-parent" class="are-you-single-parent">
                                <option value="" disabled selected>Select</option>
                                <option value="no, our family has two parents">No, our family has two parents</option>
                                <option value="yes, I am single father">Yes, I am single father</option>
                                <option value="yes, I am single mother">Yes, I am single mother</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="parents-age-group-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Parent\'s age group?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field"  name="parents-age-group" class="parents-age-group">
                                <option value="" disabled selected>Select</option>
                                <option value="18 - 30">18 - 30</option>
                                <option value="31 - 40">31 - 40</option>
                                <option value="41 - 50">41 - 50</option>
                                <option value="51 - 60">51 - 60</option>
                                <option value="61 - 70">61 - 70</option>
                                <option value="70+">70+</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="mother-nationality-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Mother Nationality<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" class="mother-nationality-select-box" name="mother-nationality">
                                <option value="" disabled selected>Select</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="father-nationality-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Father Nationality<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" class="father-nationality-select-box" name="fathers-nationality">
                                <option value="" disabled selected>Select</option>
                            </select>
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
                            <select id="field" class="religion-select-box" name="religion">
                                <option value="" disabled selected>Select</option>
                            </select>
                        </div>
                    </div>
                </div>
             </div>
             <div class="is-religion-important-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Is religion important to you?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="religion-important-to-you" class="religion-important-to-you">
                                <option value="" disabled selected>Select</option>
                                <option value="not important">Not Important</option>
                                <option value="important">Important</option>
                                <option value="very important">Very Important</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="employment-parent-1-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Employment (Parent 1)<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="employment-parent-1" class="employment-parent-1" placeholder="Employment">
                        </div>
                    </div>
                </div>
            </div>
            <div class="employment-parent-2-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Employment (Parent 2)</h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="text" name="employment-parent-2" class="employment-parent-2" placeholder="Employment">
                        </div>
                    </div>
                </div>
            </div>
            <div class="people-living-in-house-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>How many people living in the house<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <input id="field" type="number" name="how-many-people-living-in-the-house" class="how-many-people-living-in-the-house" placeholder="No. of people living in the house">
                        </div>
                    </div>
                </div>
            </div>
            <div class="do-you-have-any-pets-container">
                <div class="center">
                    <div class="registration-radio-button">
                        <h5>Do you have any pets?<span id="required">*</span></h5>
                    </div>
                    <div class="radio-button-fields">
                        <div id="input-1">
                            <input type="radio" name="have-pets" id="have-pets-yes" value="yes">
                            <label for="have-pets-yes" class="have-pets">Yes</label><br>
                        </div>
                        <div id="input-2">
                            <input type="radio" name="have-pets" id="have-pets-no" value="no">
                            <label for="have-pets-no" class="have-pets">No</label><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="where-do-you-live-container">
                <div class="center">
                    <div class="registration-input">
                        <div class="label-container">
                            <div>
                                <h5>Where do you live?<span id="required">*</span></h5>
                            </div>
                        </div>
                        <div class="field-container">
                            <select id="field" name="where-do-you-live" class="where-do-you-live">
                                <option value="" disabled selected>Select</option>
                                <option value="small city">Small City</option>
                                <option value="big city">Big City</option>
                                <option value="suburd">Suburd</option>
                                <option value="country side">Country Side</option>
                                <option value="town">Village</option>
                                <option value="sea side">Sea Side</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
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
                            <input id="field" type="text" name="firstname" class="firstname" placeholder="Firstname"/>
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
                            <input id="field" type="text" name="lastname" class="lastname" placeholder="Lastname"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address-container">
                <div class="center">
                <div class="registration-input">
                    <div class="label-container">
                        <div>
                            <h5>Addresss<span id="required">*</span></h5>
                        </div>
                    </div>
                    <div class="field-container">
                        <input id="field" type="text" name="address" class="address" placeholder="Address"/>
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
                            <input id="field" type="text" name="zip-code" class="zip-code" placeholder="Zip code"/>
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
                       <input id="field" type="text" name="city" class="city" placeholder="City"/>
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
                        <input id="field" type="text" name="state-region" class="state-region" placeholder="State/Region"/>
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
                        <select id="field" class="country-select" name="country">
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
                        <input id="field" type="number" name="mobile-number" placeholder="Mobile Phone No"/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="letter-to-the-applicant-container">
               <h3 class="add-border-bottom">Letter to the Applicant</h3>
               <h5>Letter<span id="required">*</span></h5>
               <div class="center">
                   <textarea id="text-area" name="letter-to-the-applicant" class="letter-to-the-applicant">
                   </textarea>
               </div>
            </div>
            <h3 class="add-border-bottom">Account Information</h3>
            <div class="email-add-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Email address <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="email" class="email" placeholder="Email"/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="confirm-email-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Confirm Email address <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="text" name="email" class="confirm-email" placeholder="Email"/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="password-container">
                <div class="center">
                   <div class="registration-input">
                      <div class="label-container">
                         <div>
                            <h5>Password <span id="required">*</span></h5>
                         </div>
                      </div>
                      <div class="field-container">
                         <input id="field" type="password" name="password" class="password" placeholder="Password"/>
                      </div>
                   </div>
                </div>
            </div>
            <div class="confirm-password-container">
               <div class="center">
                  <div class="registration-input">
                     <div class="label-container">
                        <div>
                           <h5>Confirm password <span id="required">*</span></h5>
                        </div>
                     </div>
                     <div class="field-container">
                        <input id="field" type="password" name="confirm-password" class="confirm-password" placeholder="Confirm password"/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="register-btn-container">
                <div class="first-div">
                </div>
                <div class="second-div">
                    <input type="submit" name="submit" value="Register" id="register-btn"/>
                </div>
            </div>
            <div class="login-warning-msg-container center">
               <div class="login-warning-msg">
                  
               </div>
            </div>
        </form>
    </div>
</div>
<?php
get_footer();
?>