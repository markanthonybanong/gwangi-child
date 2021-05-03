export function personalInformation(userData){
    const container                           = $('.personal-information-container');
    const genderContainer                     = `<div class="gender-container opacity-background">
                                                    <h5>Gender</h5>
                                                    <p>${userData['gender']}</p>
                                                </div>`;
    const dateOfBirthContainer                = `<div class="date-of-birth-container">
                                                    <h5>Date of birth</h5>
                                                    <p>${userData['date_of_birth_month']} ${userData['date_of_birth_year']}</p>
                                                </div>`;
    const weight                              = userData['weight_in_kg'] !== null ? `${userData['weight_in_kg']} kg`:`${userData['weight_in_lbs']} lbs`;
    const weightContainer                     = `<div class="weight-container opacity-background">
                                                    <h5>Weight</h5>
                                                    <p>${weight}</p>
                                                </div>`;
    const height                              = userData['height_in_cm'] !== null ? `${userData['height_in_cm']} cm`:`${userData['height_in_ft']} ft`;
    const heightContainer                     = `<div class="height-container">
                                                    <h5>Height</h5>
                                                    <p>${height}</p>
                                                </div>`;
    const nationalityContainer                = `<div class="nationality-container opacity-background">
                                                    <h5>Nationality</h5>
                                                    <p>${userData['nationality']}</p>
                                                </div>`;
    const haveAPassportFromContainer          = `<div class="have-a-passport-from-container">
                                                    <h5>Have a passport from</h5>
                                                    <p>${userData['have_a_passport_from']}</p>
                                                 </div>`;
    const currentlyLivingHomeCounry           = `<div class="currently-living-container opacity-background">
                                                    <h5>Currently living</h5>
                                                    <p>${userData['currently_living']}</p>
                                                 </div>`;
    const currentlyLivingAnotherCountry       =  `<div class="currently-living-container opacity-background">
                                                    <h5>Currently living</h5>
                                                    <p>${userData['currently_living']}</p>
                                                    <h5>Living in</h5>
                                                    <p>${userData['living_in']}</p>
                                                    <h5>Visa status</h5>
                                                    <p>${userData['visa_status']}</p>
                                                 </div>`;
    const currentlyLivingContainer             = userData['currently_living'] === 'Another country' ? currentlyLivingAnotherCountry : currentlyLivingHomeCounry;
    const educationContainer                   = `<div class="education-container">
                                                    <h5>Education</h5>
                                                    <p>${userData['education']}</p>
                                                  </div>`;
    const nameOfSchoolCollegeAndUniContainer   = `<div class="name-of-school-college-and-university-container opacity-background">
                                                    <h5>Name of School, College or University</h5>
                                                    <p>${userData['name_of_school_college_university']}</p>
                                                 </div>`;
    const professionContainer                  = `<div class="profession-container">
                                                    <h5>Profession</h5>
                                                    <p>${userData['profession']}</p>
                                                  </div>`;
    const maritalStatusContainer               = `<div class="marital-status-container opacity-background">
                                                    <h5>Marital status</h5>
                                                    <p>${userData['marital_status']}</p>
                                                  </div>`;
    const haveOwnChildrenContainer              = `<div class="have-own-children-container">
                                                    <h5>Have own children</h5>
                                                    <p>${userData['have_own_children']}</p>
                                                  </div>`;
    const haveAnySiblingsContainer              = `<div class="have-any-siblings-container opacity-background">
                                                    <h5>Have any siblings</h5>
                                                    <p>${userData['have_any_siblings']}</p>
                                                  </div>`;
    const haveHealthCareTrainingContainer       = `<div class="have-healthcare-training-container">
                                                    <h5>Have healthcare training</h5>
                                                    <p>${userData['have_traning_in_healthcare']}</p>
                                                  </div>`;
    const attendFirstAidTrainingContainer       = `<div class="attend-first-aid-training-container opacity-background">
                                                    <h5>Attend first aid training</h5>
                                                    <p>${userData['attend_first_aid_training']}</p>
                                                  </div>`;
    const haveCriminalRecordContainer           = `<div class="have-criminal-record-container">
                                                    <h5>Have criminal record</h5>
                                                    <p>${userData['have_criminal_record']}</p>
                                                  </div>`;
    const specialDietConsiderationContainer     = `<div class="special-diet-consideration-container opacity-background">
                                                    <h5>Special diet consideration</h5>
                                                    <p>${userData['special_diet_considerations']}</p>
                                                  </div>`;
   const haveHealthProblemsOrAllergy            = `<div class="have-health-problems-or-allergy-container">
                                                    <h5>Have health problems</h5>
                                                    <p>${userData['have_health_problems_allergy']}</p>
                                                  </div>`;
    const haveHealthProblemsOrAllergyYes        = `<div class="have-health-problems-or-allergy-container">
                                                    <h5>Have health problems</h5>
                                                    <p>${userData['have_health_problems_allergy']}</p>
                                                    <h5>Health Problems/Allergies</h5>
                                                    <p>${userData['describe_health_problems_allergies']}</p>
                                                   </div>`;
    const haveHealthProblemsOrAllergyContainer  = userData['have_health_problems_allergy'] === 'Yes' ? haveHealthProblemsOrAllergyYes : haveHealthProblemsOrAllergy; 
    const smokeContainer                        = `<div class="smoke-container opacity-background">
                                                    <h5>Smoke</h5>
                                                    <p>${userData['do_you_smoke']}</p>
                                                  </div>`;
    const canSwimWellContainer                  = `<div class="can-swim-well-container">
                                                      <h5>Can swim well</h5>
                                                      <p>${userData['can_swim_well']}</p>
                                                   </div>`;
    const canRideABikeContainer                 = `<div class="can-ride-a-bike-container opacity-background">
                                                      <h5>Can ride a bike</h5>
                                                      <p>${userData['can_ride_bike']}</p>
                                                  </div>`;    
    const haveADriversLicenseContainer           = `<div class="have-a-drivers-license-container">
                                                      <h5>Have a drivers license</h5>
                                                      <p>${userData['have_drivers_license']}</p>
                                                   </div>`;
    const sportsContainer                       = `<div class="sports-container opacity-background">
                                                      <h5>Sports</h5>
                                                      <p>${userData['sports']}</p>
                                                   </div>`;
    const religionContainer                     = `<div class="religion-container">
                                                      <h5>Religion</h5>
                                                      <p>${userData['religion']}</p>
                                                  </div>`;
    const religionIsContainer                   = `<div class="religion-is-container opacity-background">
                                                      <h5>Religion is</h5>
                                                      <p>${userData['religion_for_you_is']}</p>
                                                  </div>`;    
    container.append(genderContainer);  
    container.append(dateOfBirthContainer);
    container.append(weightContainer);
    container.append(heightContainer);
    container.append(nationalityContainer);
    container.append(haveAPassportFromContainer);
    container.append(currentlyLivingContainer);
    container.append(educationContainer);
    container.append(nameOfSchoolCollegeAndUniContainer);
    container.append(professionContainer);
    container.append(maritalStatusContainer);
    container.append(haveOwnChildrenContainer);
    container.append(haveAnySiblingsContainer);
    container.append(haveHealthCareTrainingContainer);
    container.append(attendFirstAidTrainingContainer);
    container.append(haveCriminalRecordContainer);
    container.append(specialDietConsiderationContainer);
    container.append(haveHealthProblemsOrAllergyContainer);
    container.append(smokeContainer);
    container.append(canSwimWellContainer);
    container.append(canRideABikeContainer);
    container.append(haveADriversLicenseContainer);
    container.append(sportsContainer);
    container.append(religionContainer);
    container.append(religionIsContainer);
    

}