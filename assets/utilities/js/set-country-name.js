/**
 * @param {string} givenCountry - Set first letter of given country name to uppercase, "russian federation" becomes 
 *                               "Russian Federation".
 *                              - Please use small letters.
 */
export function setCountryName(countryName) {
      let formatCountryName = null;
      if (countryName.split(" ").length === 2) {
        const splitNames  = countryName.split(" ");
        let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
        let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
        formatCountryName = `${firstWord} ${secWord}`; 
      } else if(countryName.split(" ").length === 3) {
        const splitNames  = countryName.split(" ");
        let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
        let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
        let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
        formatCountryName = `${firstWord} ${secWord} ${thirdWord}`;   
      } else if(countryName.split(" ").length === 4) {
        const splitNames = countryName.split(" ");
        let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
        let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
        let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
        let fourthWord    = splitNames[3].charAt(0).toUpperCase() + splitNames[3].slice(1);
        formatCountryName = `${firstWord} ${secWord} ${thirdWord} ${fourthWord}`;  
      } else if(countryName.split(" ").length === 5) {
        const splitNames = countryName.split(" ");
        let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
        let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
        let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
        let fourthWord    = splitNames[3].charAt(0).toUpperCase() + splitNames[3].slice(1);
        let fiththWord    = splitNames[4].charAt(0).toUpperCase() + splitNames[4].slice(1);
        formatCountryName = `${firstWord} ${secWord} ${thirdWord} ${fourthWord} ${fiththWord}`;  
      } else if(countryName === 'usa') {
        formatCountryName = 'USA';
      } else {
        formatCountryName = countryName.charAt(0).toUpperCase() + countryName.slice(1);;
      }
      return formatCountryName;
}