import {weAreLookingFor} from "./we-are-looking-for";
import {monthInSelectBox} from "./month-in-select-box";
import {yearInSelectBox} from "./year-in-select-box";
import {preferredNationalities} from "./preferred-nationalities";
import {preferredNationalitiesCheckBox} from "./preferred-nationalities-checkbox";
import {currenyInSelectBox} from "./currency-in-select-box";
import {requiredAgesInSelectBox} from "./required-ages-in-select-box";
import {nationalityInSelectBox} from "./nationality-in-select-box";
import {languagesCheckBox} from "./languages-check-box";
import {religionCheckBox} from "./religion-check-box";
import {countrySelectBox} from "./country-select-box";
import {takeCareChildrenWithSpecialNeedRadioButton} from "./takecare-children-with-special-need-radio-button";
import {applicantCurrentlyLivingInCountries} from "./applicant-currently-living-in-countries";
import {applicantCurrentlyLivingInCountriesSelect} from "./applicant-currently-living-in-countries-select";

const onWeAreLookingForChoose = weAreLookingFor();
onWeAreLookingForChoose.aupair;
onWeAreLookingForChoose.nanny;
onWeAreLookingForChoose.grannyAupair
onWeAreLookingForChoose.careGiverForElderly;
onWeAreLookingForChoose.liveInHelp;
onWeAreLookingForChoose.liveInTutor;
onWeAreLookingForChoose.onlineTutor;
onWeAreLookingForChoose.virtualChildcare;

const onMonthInSelectBox = monthInSelectBox();
onMonthInSelectBox.set();

const onYearInSelectBox = yearInSelectBox();
onYearInSelectBox.set();

const onNationalitiesCheckBox = preferredNationalities();
onNationalitiesCheckBox.set();

const onPreferredNationalitiesCheckBox = preferredNationalitiesCheckBox();
onPreferredNationalitiesCheckBox.selectAll;

const onCurrenyInSelectBox = currenyInSelectBox();
onCurrenyInSelectBox.set()

const onRequiredAgesInSelectBox = requiredAgesInSelectBox();
onRequiredAgesInSelectBox.set();

const onNationalityInSelectBox = nationalityInSelectBox();
onNationalityInSelectBox.set();

const onLanguagesCheckBox = languagesCheckBox();
onLanguagesCheckBox.set();

const onReligionCheckBox = religionCheckBox();
onReligionCheckBox.set();

const onCountrySelectBox = countrySelectBox();
onCountrySelectBox.set();

const onTakeCareChildrenWithSpecialNeedRadioButton = takeCareChildrenWithSpecialNeedRadioButton();
onTakeCareChildrenWithSpecialNeedRadioButton.yes;
onTakeCareChildrenWithSpecialNeedRadioButton.no;

const onApplicantCurrentlyLivingInCountries = applicantCurrentlyLivingInCountries();
onApplicantCurrentlyLivingInCountries.set();

const onApplicantCurrentlyLivingInCountriesSelect = applicantCurrentlyLivingInCountriesSelect();
onApplicantCurrentlyLivingInCountriesSelect.insideEU;