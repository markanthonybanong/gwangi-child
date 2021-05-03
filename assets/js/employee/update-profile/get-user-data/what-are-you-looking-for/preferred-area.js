export function preferredArea(userData){
    function checkAllPreferredArea(){
        $('.preferred-area-container').find('input[type="checkbox"]').each(function(){
             this.checked = true;
        });
    }
    function checkArea(){
        $('.preferred-area-container').find('input[type="checkbox"]').each(function(){
            if(this.name === 'preferredAreaSmallCity' && userData['preferred_area_small_city'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaBigCity' && userData['preferred_area_big_city'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaSuburd' && userData['preferred_area_suburd'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaCountrySide' && userData['preferred_area_countryside'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaTown' && userData['preferred_area_town'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaVillage' && userData['preferred_area_village'] === "1"){
                this.checked = true;
            } else if(this.name === 'preferredAreaSeaSide' && userData['preferred_area_sea_side'] === "1"){
                this.checked = true;
            }
        });
    }
    
    if(userData['preferred_area_all'] === "1"){
        checkAllPreferredArea();
    } else {
        checkArea();
    }
}