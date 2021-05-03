import {latestStartingDateYears} from "../../../../utilities/js/latest-starting-date-years";
export default $(function (){
    latestStartingDateYears().forEach(year =>{
        $('.latest-starting-date-year').append($('<option/>', { 
            value: year,
            text : year, 
        }));
    });
});