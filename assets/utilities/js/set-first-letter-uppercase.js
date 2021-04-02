/**
 * @param {string} givenString - Set first letter of given string name to uppercase, "russian federation" becomes 
 *                               "Russian Federation".
 *                              - Please use small letters.
 */
 export function setFirstLetterUppercase(givenString) {
    let formatString = null;
    if (givenString.split(" ").length === 2) {
      const splitStrings  = givenString.split(" ");
      let firstWord       = splitStrings[0].charAt(0).toUpperCase() + splitStrings[0].slice(1);
      let secWord         = splitStrings[1].charAt(0).toUpperCase() + splitStrings[1].slice(1);
      formatString        = `${firstWord} ${secWord}`; 
    } else if(givenString.split(" ").length === 3) {
      const splitStrings  = givenString.split(" ");
      let firstWord       = splitStrings[0].charAt(0).toUpperCase() + splitStrings[0].slice(1);
      let secWord         = splitStrings[1].charAt(0).toUpperCase() + splitStrings[1].slice(1);
      let thirdWord       = splitStrings[2].charAt(0).toUpperCase() + splitStrings[2].slice(1);
      formatString        = `${firstWord} ${secWord} ${thirdWord}`;   
    } else if(givenString.split(" ").length === 4) {
      const splitStrings  = givenString.split(" ");
      let firstWord       = splitStrings[0].charAt(0).toUpperCase() + splitStrings[0].slice(1);
      let secWord         = splitStrings[1].charAt(0).toUpperCase() + splitStrings[1].slice(1);
      let thirdWord       = splitStrings[2].charAt(0).toUpperCase() + splitStrings[2].slice(1);
      let fourthWord      = splitStrings[3].charAt(0).toUpperCase() + splitStrings[3].slice(1);
      formatString        = `${firstWord} ${secWord} ${thirdWord} ${fourthWord}`;  
    } else if(givenString.split(" ").length === 5) {
      const splitStrings = givenString.split(" ");
      let firstWord      = splitStrings[0].charAt(0).toUpperCase() + splitStrings[0].slice(1);
      let secWord        = splitStrings[1].charAt(0).toUpperCase() + splitStrings[1].slice(1);
      let thirdWord      = splitStrings[2].charAt(0).toUpperCase() + splitStrings[2].slice(1);
      let fourthWord     = splitStrings[3].charAt(0).toUpperCase() + splitStrings[3].slice(1);
      let fiththWord     = splitStrings[4].charAt(0).toUpperCase() + splitStrings[4].slice(1);
      formatString       = `${firstWord} ${secWord} ${thirdWord} ${fourthWord} ${fiththWord}`;  
    } else {
      formatString       = givenString.charAt(0).toUpperCase() + givenString.slice(1);;
    }
    return formatString;
}