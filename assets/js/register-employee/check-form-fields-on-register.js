export function checkFormFieldsOnRegister(){
    let isValid = true;
    function islookingForJobCBsValid(){
       if(!$(".looking-for-job input:checked").length) {
           isValid = false;
           return;
       } 
    }

    function check(){
        islookingForJobCBsValid();
    }
    return {
        check: check,
        isValid: isValid
    }
}