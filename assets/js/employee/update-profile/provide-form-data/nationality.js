import {nationalities} from "../../../../utilities/js/nationalities";
import {setFirstLetterUppercase} from "../../../../utilities/js/set-first-letter-uppercase";

export default $(function (){
    nationalities().forEach(nationality=>{
        $('.nationality-container .nationality').append($('<option/>',{
            value: setFirstLetterUppercase(nationality),
            text: setFirstLetterUppercase(nationality)
        }));
    });
});