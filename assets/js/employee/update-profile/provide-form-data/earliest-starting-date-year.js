import {earliestStartingDateYears} from "../../../../utilities/js/earliest-starting-date-years";
export default $(function (){
    earliestStartingDateYears().forEach(year =>{
        $('.earliest-starting-date-year').append($('<option/>', { 
            value: year,
            text : year, 
        }));
    });
});