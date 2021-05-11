export function displayEmployee(employees){

    function displayHeading(){
        const container = $('.aupair-two-column-container .header-container');
        const heading = `<h3> 
                            Find Au Pairs, Nannies, Granny Au Pairs, Caregiver For Elderly, Live In Help, Live In Tutor
                            and become a Host Family.
                         </h3>`;
        container.append(heading);
    }
    function displayEmployees(){
        const container   = $('.aupair-two-column-container .employee-container');
        const imgSrcLocal = 'http://localhost/activeaupair/wp-content/themes/gwangi-child/users-photo/employee/';
        const emptyImgSrcLocal = 'http://localhost/activeaupair/wp-content/themes/gwangi-child/users-photo/avatars/user-avatar.png'
        let i             = 0;
        while( i < employees.length){
            console.log(employees[i]);
            const employee = employees[i];
            const img      = employee.photo !== null ? `<img src="${imgSrcLocal}${employee.photo}" alt="employee-photo">`:`<img src="${imgSrcLocal}user-avatar.png" alt="employee-photo">`;
            container.append(img);
            i++;
        }
    }
    displayHeading();
    displayEmployees();

    $.ajax({
        type: 'GET',
        url: myAjax.restURL + 'activeAupair/v1/getWPPhotoPath',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('X-WP-Nonce', myAjax.nonce);
        },
        success: function(response){
            console.log(response.data);
        },
        error: function (xhr, ajaxOptions, thrownError) {},
        complete: function(data){}
    });
   

}