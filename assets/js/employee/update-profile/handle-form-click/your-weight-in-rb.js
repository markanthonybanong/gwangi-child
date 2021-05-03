export default $(function(){
    const weightInKgContainer  = $('.weight-in-kg-container');
    const weightInLbsContainer = $('.weight-in-lbs-container');

    $('.your-weight-in-container input[name=weight]').change(function(){
        if(this.value === 'kg'){
            weightInLbsContainer.css('display', 'none');
            weightInKgContainer.css('display', 'block');
        } else {
            weightInKgContainer.css('display', 'none');
            weightInLbsContainer.css('display', 'block');
        }
    });
});