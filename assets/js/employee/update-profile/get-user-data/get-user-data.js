import {lookingForAJob} from './what-are-you-looking-for/looking-for-a-job-as';
import {aupairNannyGrannyAupair} from './what-are-you-looking-for/aupair-nanny-grannyaupair';
import {careGiverForElderlyAndLiveInHelp} from './what-are-you-looking-for/caregiver-for-elderly-and-live-in-help';
import {liveInOnlineTutorAndVirtualChildCare} from './what-are-you-looking-for/live-in-online-tutor-and-virtual-childcare';
import {preferredCountries} from './what-are-you-looking-for/preferred-countries';
import {preferredArea} from './what-are-you-looking-for/preferred-area';
import {whatAreYouLookingForFields} from './what-are-you-looking-for/what-are-you-looking-for-fields';
import {personalInformationFields} from './personal-information/personal-information-fields';
import {yourWeightIn} from './personal-information/your-weight-in';
import {yourHeightIn} from './personal-information/your-height-in';
import {whereAreYouCurrentlyLiving} from './personal-information/where-are-you-currently-living';
import {doYouHaveAnyHealthProblemsOrAllergies} from './personal-information/do-you-have-any-health-problems-or-allergies';
import {contactInformationFields} from './contact-information/contact-information-fields';
import {uploadPhoto} from './upload-photo/upload-photo';
export default $(function(){
    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getUserData',
        cache: false,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            if(response.success){
                const userData = response.data[0];
                uploadPhoto(userData);
                lookingForAJob(userData);
                aupairNannyGrannyAupair(userData);
                careGiverForElderlyAndLiveInHelp(userData);
                liveInOnlineTutorAndVirtualChildCare(userData);
                preferredCountries();
                preferredArea(userData);
                whatAreYouLookingForFields(userData);
                personalInformationFields(userData);
                yourWeightIn(userData);
                yourHeightIn(userData);
                whereAreYouCurrentlyLiving(userData);
                doYouHaveAnyHealthProblemsOrAllergies(userData);
                contactInformationFields(userData);
                //show form and hide loading
                $('.page-loading-container').css('display', 'none');
                $('.active-aupair-container').css('display', 'block');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {},
        complete: function(data){}
    });
});