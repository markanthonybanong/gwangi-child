export function takeCareChildrenWithSpecialNeedRadioButton(){
    const yesTakeCareSpecialChildren = document.querySelector(".yes-take-care-special-children");
    
    const yes = document.querySelector("#take-care-children-with-special-needs-yes").addEventListener("change", (e)=>{
        yesTakeCareSpecialChildren.style.display = "block";
    });
    
    const no = document.querySelector("#take-care-children-with-special-needs-no").addEventListener("change", (e)=>{
        yesTakeCareSpecialChildren.style.display = "none";
    });

    return {
        yes: yes,
        no: no
    }
}