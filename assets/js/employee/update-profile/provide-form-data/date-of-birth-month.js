import { months } from "../../../../utilities/js/months";
import {setFirstLetterUppercase} from "../../../../utilities/js/set-first-letter-uppercase";

export default $(function (){
    months().forEach(month =>{
        $('.date-of-birth-month').append($('<option/>', {
            value: setFirstLetterUppercase(month),
            text: setFirstLetterUppercase(month)
        }));
    });
});