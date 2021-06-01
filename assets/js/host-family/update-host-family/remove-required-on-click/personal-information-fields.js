export default $(function(){
    //What languages are spoken at home
    $('.languages-spoken-at-home input[type="checkbox"]').change(function(){
        if(this.checked && $('.languages-spoken-at-home').hasClass('required-border')){
            $('.languages-spoken-at-home').removeClass('required-border');
        }
    });
    
    //Employment parent 1
    $('.employment-parent-1').click(function(){
        if($('.employment-parent-1').hasClass('required-border')){
            $('.employment-parent-1').removeClass('required-border');
        }
    });
    
    //How many people living in the house
    $('.how-many-people-living-in-the-house').click(function(){
        if($('.how-many-people-living-in-the-house').hasClass('required-border')){
            $('.how-many-people-living-in-the-house').removeClass('required-border');
        }
    });
  
});