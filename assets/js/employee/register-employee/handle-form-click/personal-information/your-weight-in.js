export default $(function(){
    const weightKg  = $('.weight-in-kg');
    const weightLbs = $('.weight-in-lbs'); 
    $('input[name="weight"]').change(function(){
        if(this.value === "kg"){
            weightLbs.css('display', 'none');
            weightKg.css('display', 'block');
        } else {
            weightKg.css('display', 'none');
            weightLbs.css('display', 'block');
        }
    });
});