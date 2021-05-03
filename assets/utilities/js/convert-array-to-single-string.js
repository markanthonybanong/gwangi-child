export function convertArrayToSingleString(givenArr){
    let concatenatedString = '';
        for (let i = 0; i < givenArr.length; i++) {
            //next value is last indexx
           if(i+1 === givenArr.length-1){
               concatenatedString += `${givenArr[i]} & `;
           } else if(i+1 === givenArr.length) {//last index
               concatenatedString += givenArr[i];
           } else {
               concatenatedString += `${givenArr[i]}, `
           }
       }
       return concatenatedString;
}