import {religions} from "../../../../utilities/js/religions";
import {setFirstLetterUppercase} from "../../../../utilities/js/set-first-letter-uppercase";

export default $(function(){
    religions().forEach(religion => {
        $('.religion-container .select').append($('<option/>', {
            value: setFirstLetterUppercase(religion),
            text: setFirstLetterUppercase(religion)
        }));
    });
}); 