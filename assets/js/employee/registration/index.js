import {lookingForJobCheckBox} from "./looking-for-job-checkbox";
import {preferredCountries} from "./preferred-countries";
import {monthInSelectBox} from "./month-in-select-box";
import {yearInSelectBox} from "./year-in-select-box";
import {nationalityInSelectBox} from "./nationality-in-select-box";
import {educationInSelectBox} from "./education-in-select-box";
import {religionInSelectBox} from "./relegion-in-select-box";
import {countryInSelectBox} from "./country-in-select-box";
import {preferredCountriesCheckBox} from "./preffered-countries-checkbox";
import {preferredAreaCheckbox} from "./preferred-area-checkbox";
import {livingInRadioButton} from "./living-in-radio-button";
import {weightRadioButton} from "./show-hide-fields/weight-radio-button";
import {heightRadioButton} from "./show-hide-fields/height-radio-button";
import {addWpUserData } from "./add-to-db/add-wp-user-data";
import {removeRequiredBorderOnFields} from "./remove-required-border-on-fields";
import {haveHealthProblemsAllergiesRB} from "./show-hide-fields/have-health-problems-allergies";
import {interNationalTelephoneInput} from "../../../utilities/js/international-tel-input";
/***
 * - handles showing/hiding related input fields for every job selected.
 * - set the label dynamic for live in tutor, online tutor, virtual childcare. 
 */
const onLookingForJobCheckBoxOnClick = lookingForJobCheckBox();
onLookingForJobCheckBoxOnClick.aupair;
onLookingForJobCheckBoxOnClick.nanny;
onLookingForJobCheckBoxOnClick.grannyAupair;
onLookingForJobCheckBoxOnClick.careGiverForElderly;
onLookingForJobCheckBoxOnClick.liveInHelp;
onLookingForJobCheckBoxOnClick.liveInTutor;
onLookingForJobCheckBoxOnClick.onlineTutor;
onLookingForJobCheckBoxOnClick.virtualChildcare;
onLookingForJobCheckBoxOnClick.startUp();

const setPreferredCountries = preferredCountries();
setPreferredCountries.set();

const onPreferredCountriesCheckBoxSelect = preferredCountriesCheckBox();
onPreferredCountriesCheckBoxSelect.selectAll;
onPreferredCountriesCheckBoxSelect.selectAllEU;

const onPreferredAreaCheckbox = preferredAreaCheckbox();
onPreferredAreaCheckbox.selectAll;

const setMonthsInSelectBox = monthInSelectBox();
setMonthsInSelectBox.set();

const setYearInSelectBox = yearInSelectBox();
setYearInSelectBox.set();

const setNationalitesInSelectBox = nationalityInSelectBox();
setNationalitesInSelectBox.set();

const setEducationInSelectBox = educationInSelectBox();
setEducationInSelectBox.set();

const setRelegionInSelectBox = religionInSelectBox();
setRelegionInSelectBox.set();

const setCountryInSelectBox = countryInSelectBox();
setCountryInSelectBox.set();

const onlivingInRadioButton = livingInRadioButton();
onlivingInRadioButton.yes;
onlivingInRadioButton.no;

const onWeightRadioButton = weightRadioButton();
onWeightRadioButton.kg;
onWeightRadioButton.lbs;

const onHeightRadioButton = heightRadioButton();
onHeightRadioButton.cm;
onHeightRadioButton.ft;

const onAddWpUserData = addWpUserData();
onAddWpUserData.add;

const onRemoveRequiredBorderOnFields = removeRequiredBorderOnFields();
onRemoveRequiredBorderOnFields.lookingForAJobCB;
onRemoveRequiredBorderOnFields.iWillTakeCareChildrenCB;
onRemoveRequiredBorderOnFields.hoursOfChildCareSB;
onRemoveRequiredBorderOnFields.childrenPeopleTakeSB;
onRemoveRequiredBorderOnFields.workForSingleSB;
onRemoveRequiredBorderOnFields.takeCareChildrenRB;
onRemoveRequiredBorderOnFields.iCanAssistAndProvideCB;
onRemoveRequiredBorderOnFields.wouldYouTakeCarePeopleRB;
onRemoveRequiredBorderOnFields.preferredSubjectsCB;
onRemoveRequiredBorderOnFields.activitiesWithKidsCB;
onRemoveRequiredBorderOnFields.preferredStudentAgeGroupCB;
onRemoveRequiredBorderOnFields.amountIF;
onRemoveRequiredBorderOnFields.currenySB;
onRemoveRequiredBorderOnFields.prefferedCountriesCB;
onRemoveRequiredBorderOnFields.prefferedAreaCB;
onRemoveRequiredBorderOnFields.earlistStartingDateMonthSB;
onRemoveRequiredBorderOnFields.earlistStartingDateYearSB;
onRemoveRequiredBorderOnFields.latestStartingDateMonthSB;
onRemoveRequiredBorderOnFields.latestStartingDateYearSB;
onRemoveRequiredBorderOnFields.durationOfStaySB;
onRemoveRequiredBorderOnFields.whatKindOfWorkAreYouLookingForRB;
onRemoveRequiredBorderOnFields.accomodatationSB;
onRemoveRequiredBorderOnFields.wouldYouLiveFamilyWithPetsRB;
onRemoveRequiredBorderOnFields.wouldYouTakeCareOfPetsRB;
onRemoveRequiredBorderOnFields.wouldYouWorkExtraToEarnRB;
onRemoveRequiredBorderOnFields.genderRB;
onRemoveRequiredBorderOnFields.dateOfBirthMonthSB;
onRemoveRequiredBorderOnFields.dateOfBirthYearSB;
onRemoveRequiredBorderOnFields.yourWeightInRB;
onRemoveRequiredBorderOnFields.weightKgIF;
onRemoveRequiredBorderOnFields.weightLbsIF;
onRemoveRequiredBorderOnFields.yourHeightInRB;
onRemoveRequiredBorderOnFields.heightCmIF;
onRemoveRequiredBorderOnFields.heightFtIF;
onRemoveRequiredBorderOnFields.nationalitySB;
onRemoveRequiredBorderOnFields.iHaveApassportFromSB;
onRemoveRequiredBorderOnFields.currentlyLivingRB;
onRemoveRequiredBorderOnFields.livingInSB;
onRemoveRequiredBorderOnFields.visaStatusSB;
onRemoveRequiredBorderOnFields.educationSB;
onRemoveRequiredBorderOnFields.nameOfSchoolCollegeUniIF;
onRemoveRequiredBorderOnFields.professionIF;
onRemoveRequiredBorderOnFields.maritalStatusSB;
onRemoveRequiredBorderOnFields.haveOwnChildrenRB;
onRemoveRequiredBorderOnFields.haveAnySiblingsRB;
onRemoveRequiredBorderOnFields.haveHealthCareTraningRB;
onRemoveRequiredBorderOnFields.attendFirstAidTraningRB;
onRemoveRequiredBorderOnFields.haveCriminalRecordRB;
onRemoveRequiredBorderOnFields.specialDietConsiderationSB;
onRemoveRequiredBorderOnFields.haveAnyHealthProbemsAllergiesRB;
onRemoveRequiredBorderOnFields.describeHealthProblemsAllergiesIF;
onRemoveRequiredBorderOnFields.doYouSmokeSB;
onRemoveRequiredBorderOnFields.canSwimWellRB;
onRemoveRequiredBorderOnFields.canRideBikeRB;
onRemoveRequiredBorderOnFields.haveDriversLicenseSB;
onRemoveRequiredBorderOnFields.sportsIF;
onRemoveRequiredBorderOnFields.religionSB;
onRemoveRequiredBorderOnFields.religionForYouIsSB;
onRemoveRequiredBorderOnFields.firstNameIF;
onRemoveRequiredBorderOnFields.lastNameIF;
onRemoveRequiredBorderOnFields.addressIF;
onRemoveRequiredBorderOnFields.zipCodeIF;
onRemoveRequiredBorderOnFields.cityIF;
onRemoveRequiredBorderOnFields.stateRegionIF;
onRemoveRequiredBorderOnFields.countrySB;
onRemoveRequiredBorderOnFields.mobilePhoneIF;
onRemoveRequiredBorderOnFields.letterTA;
onRemoveRequiredBorderOnFields.confirmEmailIF;
onRemoveRequiredBorderOnFields.emailIF;
onRemoveRequiredBorderOnFields.passwordIF;
onRemoveRequiredBorderOnFields.confirmPasswordIF;

const onHaveHealthProblemsAllergiesRB = haveHealthProblemsAllergiesRB();
onHaveHealthProblemsAllergiesRB.toggle;

const onInterNationalTelephoneInput = interNationalTelephoneInput();
onInterNationalTelephoneInput.iti;