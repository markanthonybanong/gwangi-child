import {dateOfBirthYears} from "../../../../utilities/js/date-of-birth-years";
export default $(function (){
    for(let i = dateOfBirthYears().current; i >= dateOfBirthYears().last; i--) {
        $('.date-of-birth-year').append($('<option/>', { 
            value: i,
            text : i, 
        }));
    }
});