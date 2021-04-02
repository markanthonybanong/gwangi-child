/**
 * @param {string} givenString - Separate string by a hyphen, "russian federation" becomes 
 *                               "russian-federation".
 *                             - Please use small letters.
 * 
 */
export function separateStringByHyphen(givenString) {
    let formatString = null;
    if (givenString.split(" ").length === 2) {
        const strings  = givenString.split(" ");
        formatString = `${strings[0]}-${strings[1]}`; 
   } else if( givenString.split(" ").length === 3) {
        const strings  = givenString.split(" ");
        formatString = `${strings[0]}-${strings[1]}-${strings[2]}`;
   } else if( givenString.split(" ").length === 4) {
        const strings  = givenString.split(" ");
        formatString = `${strings[0]}-${strings[1]}-${strings[2]}-${strings[3]}`;
   } else if( givenString.split(" ").length === 5) {
         const strings = givenString.split(" ");
        formatString = `${strings[0]}-${strings[1]}-${strings[2]}-${strings[3]}-${strings[4]}`;
   } else {
      formatString = givenString;
   }
   return formatString;
};
