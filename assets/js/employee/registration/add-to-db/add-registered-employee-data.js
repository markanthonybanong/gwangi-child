import {getFormData} from "../get-form-data";
export function addRegisteredEmployeeData(wpUserId){
    function employeeData() {
        const data       = {};
        data.wpUserID    = wpUserId;
        data.yearCreated = new Date().getFullYear();
        getFormData().lookingForJobAs(data);
        getFormData().angTakeCareChildrenFromAge(data);
        getFormData().clAssistProdiveSuppToElderlyIn(data);
        getFormData().loPrefferedSubjects(data);
        getFormData().lvActivityWithKids(data);
        getFormData().lovPreferredStudentAgeGroup(data);
        getFormData().preferredArea(data);
        getFormData().fields(data);
        return data;
    }

    $.ajax({
        type: 'POST',
        url: myAjax.restURL + 'activeAupair/v1/insertIntoAupairRegisteredEmployee',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        data: employeeData(), 
        success: function(response){
        },
        error: function(err, xhr, data){
        },
        complete: function(data){
        }
    });
}