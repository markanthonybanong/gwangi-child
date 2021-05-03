import {educations} from "../../../../utilities/js/educations";
import {setFirstLetterUppercase} from "../../../../utilities/js/set-first-letter-uppercase";

export default $(function(){
    educations().forEach(education => {
        $('.education-container .select').append($('<option/>', {
            value: setFirstLetterUppercase(education),
            text: setFirstLetterUppercase(education)
        }));
    });
}); 