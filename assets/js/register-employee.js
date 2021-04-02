// //store labels for live in tutor, online tutor, virtual childcare
// const labels = [];
// /**
//  * populate countries in e-r-country-select, etc.
//  * 
//  */
//  function setInputName(countryName) {
//   let formatCountryName = null;
//   if (countryName.split(" ").length === 2) {
//       const splitNames  = countryName.split(" ");
//       formatCountryName = `${splitNames[0]}-${splitNames[1]}`; 
//  } else if( countryName.split(" ").length === 3) {
//       const splitNames  = countryName.split(" ");
//       formatCountryName = `${splitNames[0]}-${splitNames[1]}-${splitNames[2]}`;
//  } else if( countryName.split(" ").length === 4) {
//       const splitNames  = countryName.split(" ");
//       formatCountryName = `${splitNames[0]}-${splitNames[1]}-${splitNames[2]}-${splitNames[3]}`;
//  } else if( countryName.split(" ").length === 5) {
//        const splitNames = countryName.split(" ");
//       formatCountryName = `${splitNames[0]}-${splitNames[1]}-${splitNames[2]}-${splitNames[3]}-${splitNames[4]}`;
//  } else {
//     formatCountryName = countryName;
//  }
//  return formatCountryName;
// }
// function setCountryNameLabel(countryName) {
//   let formatCountryName = null;
//   if (countryName.split(" ").length === 2) {
//     const splitNames  = countryName.split(" ");
//     let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
//     let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
//     formatCountryName = `${firstWord} ${secWord}`; 
//   } else if(countryName.split(" ").length === 3) {
//     const splitNames  = countryName.split(" ");
//     let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
//     let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
//     let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
//     formatCountryName = `${firstWord} ${secWord} ${thirdWord}`;   
//   } else if(countryName.split(" ").length === 4) {
//     const splitNames = countryName.split(" ");
//     let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
//     let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
//     let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
//     let fourthWord    = splitNames[3].charAt(0).toUpperCase() + splitNames[3].slice(1);
//     formatCountryName = `${firstWord} ${secWord} ${thirdWord} ${fourthWord}`;  
//   } else if(countryName.split(" ").length === 5) {
//     const splitNames = countryName.split(" ");
//     let firstWord     = splitNames[0].charAt(0).toUpperCase() + splitNames[0].slice(1);
//     let secWord       = splitNames[1].charAt(0).toUpperCase() + splitNames[1].slice(1);
//     let thirdWord     = splitNames[2].charAt(0).toUpperCase() + splitNames[2].slice(1);
//     let fourthWord    = splitNames[3].charAt(0).toUpperCase() + splitNames[3].slice(1);
//     let fiththWord    = splitNames[4].charAt(0).toUpperCase() + splitNames[4].slice(1);
//     formatCountryName = `${firstWord} ${secWord} ${thirdWord} ${fourthWord} ${fiththWord}`;  
//   } else if(countryName === 'usa') {
//     formatCountryName = 'USA';
//   } else {
//   formatCountryName = countryName.charAt(0).toUpperCase() + countryName.slice(1);;
// }
//   return formatCountryName;
// }
// const euCountries = [
//   'australia',
//   'austria',
//   'belgium',
//   'brazil',
//   'canada',
//   'china',
//   'france',
//   'germany',
//   'ireland',
//   'italy',
//   'luxemberg',
//   'mexico',
//   'netherlands',
//   'norway',
//   'poland',
//   'russian federation',
//   'spain',
//   'sweden',
//   'switzerland',
//   'turkey',
//   'usa',
//   'united kingdom',
// ];

// const countries = [
//   'afghanistan',
//   'albania',
//   'algeria',
//   'american sam',
//   'andorra',
//   'angola',
//   'anguilla',
//   'antigua and barbuda',
//   'argentina',
//   'armenia',
//   'aruba',
//   'azerbaijan',
//   'bahamas',
//   'bahrain',
//   'banladesh',
//   'barbados',
//   'belarus',
//   'belize',
//   'benin',
//   'bermuda',
//   'bhutan',
//   'bolivia',
//   'bosnia',
//   'botswana',
//   'brunie daruss.',
//   'bulgaria',
//   'burkina faso',
//   'burundi',
//   'cambodia',
//   'cameroon',
//   'cape verde',
//   'camayan islands',
//   'central african republic',
//   'chad',
//   'channel islands',
//   'chile',
//   'christmas islands',
//   'cocos keeling isl',
//   'colombia',
//   'comoros',
//   'congo',
//   'cook islands',
//   'costa rica',
//   'croatia',
//   'cuba',
//   'cyprus',
//   'czech republic',
//   'denmark',
//   'djibouti',
//   'dominica',
//   'dominican republic',
//   'east timor',
//   'ecuador',
//   'egypt',
//   'el salvador',
//   'equatorial guin',
//   'eritrea',
//   'estonia',
//   'ethiopia',
//   'falkand islands',
//   'faroe islands',
//   'fiji',
//   'finland',
//   'french polynesia',
//   'french southern ter',
//   'gabon',
//   'gambia',
//   'georgia',
//   'ghana',
//   'gibraltar',
//   'greece',
//   'greenland',
//   'grenada',
//   'guadeloupe',
//   'guam',
//   'guatemala',
//   'guinea',
//   'guinea bissau',
//   'guyana',
//   'haiti',
//   'honduras',
//   'hong kong',
//   'hungary',
//   'iceland',
//   'india',
//   'indonesia',
//   'iran',
//   'iraq',
//   'israel',
//   'israel',
//   'ivory coast',
//   'jamaica',
//   'japan',
//   'jordan',
//   'kazakhstan',
//   'kenya',
//   'kiribati',
//   'kosovo',
//   'kuwait',
//   'krygyzstan',
//   'laos',
//   'latvia',
//   'lebanon',
//   'lesotho',
//   'liberia',
//   'libyan arab jamahiriya',
//   'liechtenstein',
//   'lithuania',
//   'macau',
//   'macedonia',
//   'madagascar',
//   'malawi',
//   'malaysia',
//   'maldives', 
//   'mali',
//   'malta',
//   'marshall islands',
//   'martinique',
//   'mauritanina',
//   'mauritius',
//   'mayotte',
//   'micronesia',
//   'moldova',
//   'monaco',
//   'mongolia',
//   'montenegro',
//   'montserrat',
//   'morocco',
//   'mozambique',
//   'myanmar',
//   'namibia',
//   'nauro',
//   'nepal',
//   'netherlands antilles',
//   'new caledonina',
//   'new zealand',
//   'nicaragua',
//   'niger',
//   'nigeria',
//   'niue',
//   'norfolk island',
//   'northern mariana isl',
//   'oman',
//   'pakistan',
//   'palau',
//   'palestine',
//   'panama',
//   'papua new guinea',
//   'paraguay',
//   'peru',
//   'philippines',
//   'pitcairn',
//   'portugal',
//   'puerto rico',
//   'qatar',
//   'reunion',
//   'romania',
//   'rwanda',
//   'saint barthelemy',
//   'saint lucia',
//   'saint vincent and the grenadines',
//   'samoa',
//   'san marino',
//   'saudi arabia',
//   'scotland',
//   'senegal',
//   'serbia',
//   'seychelles',
//   'sierra leone',
//   'singapore',
//   'slovakia',
//   'slovenia',
//   'solomon islands',
//   'somalia',
//   'south africa',
//   'south korea',
//   'sri lanka',
//   'sthelina',
//   'sudan',
//   'suriname',
//   'swaziland',
//   'syrian arab republic',
//   'são tomé and príncipe',
//   'taiwan',
//   'tajikistan',
//   'tanzania',
//   'thailand',
//   'togo',
//   'tokelau',
//   'tonga',
//   'trinidad and tobago',
//   'tunisia',
//   'turkmenistan',
//   'tuvalu',
//   'us minor outlying isl',
//   'uganda',
//   'ukraine',
//   'united arab emirates',
//   'uruguay',
//   'uzbekistan',
//   'vanuatu',
//   'vatican city st.',
//   'wallis futuna islands',
//   'western sahara',
//   'yemen',
//   'zaire',
//   'zambia',
//   'zimbabwe'
// ];
// const preferredCountries = document.querySelector(".r-e-preferred-countries-div");
// let countEuCountry = 0;
// let labelEuCountry = "";

// // for(let i = 0; i < euCountries.length; i++){
// //     let name        = `r-e-preferred-country-${setInputName(euCountries[i])}`;
     

// //     if(i === euCountries.length - 1 ) {
// //       labelEuCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(euCountries[i])}</label>`;
// //       const divCountry = `<div class="end-eu-countries-border-bottom">${labelEuCountry}</div>`
// //       preferredCountries.innerHTML += divCountry;
// //     }
// //     else if(countEuCountry < 3) {
// //       labelEuCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(euCountries[i])}</label> `; 
// //       countEuCountry += 1;
// //     } else {
// //       labelEuCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(euCountries[i])}</label>`;
// //       const divCountry = `<div>${labelEuCountry}</div>`;
// //       preferredCountries.innerHTML += divCountry;
// //       labelEuCountry        = "";
// //       countEuCountry = 0;
// //     }
// // }

// let countCountry   = 0;
// let labelCountry   = "";
// for(let i = 0; i < countries.length; i++){
//   let name        = `r-e-preferred-country-${setInputName(countries[i])}`;
//   if(i === countries.length - 1 ) {
//     labelCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(countries[i])}</label>`;
//     const divCountry = `<div>${labelCountry}</div>`
//     preferredCountries.innerHTML += divCountry;
//   }
//   else if(countCountry < 3) {
//     labelCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(countries[i])}</label> `; 
//     countCountry += 1;
//   } else {
//     labelCountry += `<label><input type="checkbox" name="${name}"/>${setCountryNameLabel(countries[i])}</label>`;
//     const divCountry = `<div>${labelCountry}</div>`;
//     preferredCountries.innerHTML += divCountry;
//     labelCountry        = "";
//     countCountry = 0;
//   }
  
 
// }

// const mergedCountries = euCountries.concat(countries);
// const erCountrySelect = document.querySelector(".e-r-country-select");
// for (let i = 0; i < mergedCountries.length; i++) {
//    const option      = document.createElement("option");
//   option.value       = mergedCountries[i];
//   option.textContent = setCountryNameLabel(mergedCountries[i]);
//   erCountrySelect.appendChild(option); 
// }
// /**
//  * end populate countries
//  */
// /**
//  * limit checkbox selected for "looking for a job as"
//  */
// var isCheckBoxRecentlyDisabled = false;
// function disableUncheckBoxIfMax() {
//   const checkCheckBox = document.querySelectorAll(".check");
//   if(checkCheckBox.length >= 2) {
//     const uncheckCheckBox = document.querySelectorAll(".un-check");
//     for(let i = 0; i < uncheckCheckBox.length; i++) {
//       uncheckCheckBox[i].disabled = true;
//     }
//     isCheckBoxRecentlyDisabled = true;
//   }
// }
// function enableUncheckBox() {
//   if(isCheckBoxRecentlyDisabled) {
//     const uncheckCheckBox = document.querySelectorAll(".un-check");
//     for(let i = 0; i < uncheckCheckBox.length; i++) {
//       uncheckCheckBox[i].disabled = false;
//     }
//     isCheckBoxRecentlyDisabled = false;
//   }
// }
// function alterCheckBox(checkbox) {
//   if(checkbox.checked === true) {
//     checkbox.className = "check";
//     disableUncheckBoxIfMax();
//    } else {
//      checkbox.className = "un-check";
//      enableUncheckBox();
//    }
// }
// /**
//  * end
//  */
// /**
//  * @param {string} label   - the checkbox label name
//  * @param {boolean} action - isCheck is the checkbox check or not(boolean) 
//  *                         - set dynamic label for live in tutor, online tutor, virtual childcare, this method,
//  *                           assumes there could only be two selection between the three
//  */

// function setDynamicLabel(label, isCheck) {
//   const dynamicLabel = document.querySelector(".r-e-dynamic-label");
//   if(isCheck) {
//     labels.push(label);
//     if(labels.length === 1) {
//       dynamicLabel.innerHTML     = labels[0];
//       dynamicLabel.style.display = "block";
//     } else {
//       dynamicLabel.innerHTML = `${labels[0]} & ${labels[1]}`;
//     }
//   } else {
//     for (let i = 0; i < labels.length; i++) {
//       if(label === labels[i]) {
//         labels.splice(i, 1);
//       }
//     }
//     if(labels.length === 1) {
//       dynamicLabel.innerHTML = labels[0];
//     } else {
//       dynamicLabel.style.display = "none";
//     }
//   }
// }
// /**
//  * end
//  */
// function onAupairClick(checkBox){
//    alterCheckBox(checkBox);
//    const takeCareOfChildren       = document.querySelector(".r-e-take-care-of-children");
//    const hoursChildCareExp        = document.querySelector(".r-e-hours-childcare-experience");
//    const childrenTakenCareOf      = document.querySelector(".r-e-children-taken-care");
//    const wouldWorkForSinglePrt    = document.querySelector(".r-e-would-work-for-single-parent");
//    const careChildrenSpecialNeeds = document.querySelector(".r-e-care-children-special-needs");
//    const nannyCheckBox            = document.querySelector("#nanny");
//    const grannyAupairCheckBox     = document.querySelector("#granny-aupair");
//    if(checkBox.checked === true) {
//     takeCareOfChildren.style.display    = "block";
//     hoursChildCareExp.style.display     = "block";
//     childrenTakenCareOf.style.display   = "block";
//     wouldWorkForSinglePrt.style.display = "block";
//     careChildrenSpecialNeeds.style.display          = "block"; 
//    } else if (nannyCheckBox.checked === false && grannyAupairCheckBox.checked === false ) {
//     takeCareOfChildren.style.display    = "none";
//     hoursChildCareExp.style.display     = "none";
//     childrenTakenCareOf.style.display   = "none";
//     wouldWorkForSinglePrt.style.display = "none";
//     careChildrenSpecialNeeds.style.display          = "none"; 
//    }
//  }
//  function onNannyClick(checkBox){
//    alterCheckBox(checkBox);
//    const takeCareOfChildren       = document.querySelector(".r-e-take-care-of-children");
//    const hoursChildCareExp        = document.querySelector(".r-e-hours-childcare-experience");
//    const childrenTakenCareOf      = document.querySelector(".r-e-children-taken-care");
//    const wouldWorkForSinglePrt    = document.querySelector(".r-e-would-work-for-single-parent");
//    const careChildrenSpecialNeeds = document.querySelector(".r-e-care-children-special-needs");
//    const aupairCheckBox           = document.querySelector("#aupair");
//    const grannyAupairCheckBox     = document.querySelector("#granny-aupair");
//    if(checkBox.checked === true) {
//       takeCareOfChildren.style.display       = "block";
//       hoursChildCareExp.style.display        = "block";    
//       childrenTakenCareOf.style.display      = "block";  
//       wouldWorkForSinglePrt.style.display    = "block";
//       careChildrenSpecialNeeds.style.display = "block";         
//    } else if(aupairCheckBox.checked === false && grannyAupairCheckBox.checked === false ) {
//      takeCareOfChildren.style.display       = "none";
//      hoursChildCareExp.style.display        = "none";    
//      childrenTakenCareOf.style.display      = "none";  
//      wouldWorkForSinglePrt.style.display    = "none";
//      careChildrenSpecialNeeds.style.display = "none";   
//    }
//  }
//  function onGranyAupairClick(checkBox) {
//   alterCheckBox(checkBox);
//   const takeCareOfChildren       = document.querySelector(".r-e-take-care-of-children");
//   const hoursChildCareExp        = document.querySelector(".r-e-hours-childcare-experience");
//   const childrenTakenCareOf      = document.querySelector(".r-e-children-taken-care");
//   const wouldWorkForSinglePrt    = document.querySelector(".r-e-would-work-for-single-parent");
//   const careChildrenSpecialNeeds = document.querySelector(".r-e-care-children-special-needs");
//   const aupairCheckBox           = document.querySelector("#aupair");
//   const nannyCheckBox            = document.querySelector("#nanny");

//   if(checkBox.checked === true) {
//     takeCareOfChildren.style.display    = "block";
//     hoursChildCareExp.style.display     = "block";    
//     childrenTakenCareOf.style.display   = "block";  
//     wouldWorkForSinglePrt.style.display = "block";
//     careChildrenSpecialNeeds.style.display          = "block";         
//   } else if(aupairCheckBox.checked === false && nannyCheckBox.checked === false ) {
//     takeCareOfChildren.style.display       = "none";
//     hoursChildCareExp.style.display        = "none";    
//     childrenTakenCareOf.style.display      = "none";  
//     wouldWorkForSinglePrt.style.display    = "none";
//     careChildrenSpecialNeeds.style.display = "none";         
//   }
//  }
//  function onCareGiverForElderly(checkBox) {
//   alterCheckBox(checkBox);
//   const iCanAssist         = document.querySelector(".r-e-i-can-assist");
//   const wouldYouTake       = document.querySelector(".r-e-would-you-take");
//   const liveInHelpCheckBox = document.querySelector("#live-in-help") ;
//   if(checkBox.checked === true) {
//     iCanAssist.style.display   = "block";
//     wouldYouTake.style.display = "block";
//   } else if(liveInHelpCheckBox.checked === false) {
//     iCanAssist.style.display   = "none";
//     wouldYouTake.style.display = "none";
//   }
//  }
//  function onLiveInHelpClick(checkBox) {
//   alterCheckBox(checkBox);
//   const iCanAssist                  = document.querySelector(".r-e-i-can-assist");
//   const wouldYouTake                = document.querySelector(".r-e-would-you-take");
//   const careGiverForElderlyCheckBox = document.querySelector("#caregiver-for-elderly") ;
//   if(checkBox.checked === true) {
//     iCanAssist.style.display   = "block";
//     wouldYouTake.style.display = "block";
//   } else if(careGiverForElderlyCheckBox.checked === false) {
//     iCanAssist.style.display   = "none";
//     wouldYouTake.style.display = "none";
//   }
//  }
//  function onLiveInTutorClick(checkBox)  {
//   alterCheckBox(checkBox);
//   const preferredSubjects        = document.querySelector(".r-e-preferred-subjects");
//   const activitiesWithKids       = document.querySelector(".r-e-activities-with-kids");
//   const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
//   const onlineTutorCheckBox      = document.querySelector("#online-tutor");
//   const virtualChildCare         = document.querySelector("#virtual-childcare")
//   setDynamicLabel('Live in Tutor', checkBox.checked);
//   if(checkBox.checked === true) {
//     preferredSubjects.style.display        = "block";
//     activitiesWithKids.style.display       = "block";
//     preferredStudentAgeGroup.style.display = "block";
//   } else {
//     if(onlineTutorCheckBox.checked === false) {
//       preferredSubjects.style.display = "none";
//     } 
//     if(virtualChildCare.checked === false) {
//       activitiesWithKids.style.display = "none";
//     }
//     if(onlineTutorCheckBox.checked === false && virtualChildCare.checked === false) {
//       preferredStudentAgeGroup.style.display = "none";
//     }
//   }
//  }
//  function onOnlineTutorClick(checkBox) {
//   alterCheckBox(checkBox);
//   const preferredSubjects        = document.querySelector(".r-e-preferred-subjects");
//   const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
//   const pricePerHour             = document.querySelector(".r-e-price-per-hour");
//   const liveInTutorCheckBox      = document.querySelector("#live-in-tutor");
//   const virtualChildCareCheckBox = document.querySelector("#virtual-childcare");
//   setDynamicLabel('Online Tutor', checkBox.checked);
//   if(checkBox.checked === true) {
//     preferredSubjects.style.display        = "block";
//     preferredStudentAgeGroup.style.display = "block";
//     pricePerHour.style.display             = "block";
//   } else {
//     if(liveInTutorCheckBox.checked === false) {
//       preferredSubjects.style.display = "none";
//     }
//     if(liveInTutorCheckBox.checked === false && virtualChildCareCheckBox.checked === false ) {
//       preferredStudentAgeGroup.style.display = "none";
//     }
//     if(virtualChildCareCheckBox.checked === false) {
//       pricePerHour.style.display = "none";
//     }
//   }
//  }
//  function onVirtualChildcareClick(checkBox) {
//   alterCheckBox(checkBox);
//   const activitiesWithKids       = document.querySelector(".r-e-activities-with-kids");
//   const preferredStudentAgeGroup = document.querySelector(".r-e-preferred-student-age-group");
//   const pricePerHour             = document.querySelector(".r-e-price-per-hour");
//   const liveInTutorCheckBox      = document.querySelector("#live-in-tutor");
//   const onlineTutorCheckBox      = document.querySelector("#online-tutor");
//   setDynamicLabel('Virtual Childcare', checkBox.checked);
//   if(checkBox.checked === true) {
//     activitiesWithKids.style.display       = "block";
//     preferredStudentAgeGroup.style.display = "block";
//     pricePerHour.style.display             = "block";
//   } else {
//     if(liveInTutorCheckBox.checked === false) {
//       activitiesWithKids.style.display = "none";
//     }
//     if(liveInTutorCheckBox.checked === false && onlineTutorCheckBox.checked === false) {
//       preferredStudentAgeGroup.style.display = "none";
//     }
//     if(onlineTutorCheckBox.checked === false){
//       pricePerHour.style.display = "none";
//     }
//   }
//  }
// /**
//  * set earliest-starting-date, latest-starting-date
//  */
// const d        = new Date();

// const earliestStartingDateYear    = document.querySelector(".r-e-earliest-starting-date-year");
// const currentYear                 = document.createElement("option");
// currentYear.value                 = d.getFullYear();
// currentYear.textContent           = d.getFullYear();
// earliestStartingDateYear.appendChild(currentYear);
// const currentNextYear             = document.createElement("option");
// currentNextYear.value             = d.getFullYear()+1;
// currentNextYear.textContent       = d.getFullYear()+1;
// earliestStartingDateYear.appendChild(currentNextYear);

// const latestStartingDateYear      = document.querySelector(".r-e-latest-starting-date-year");
// const latestCurrentYear           = document.createElement("option");
// latestCurrentYear.value           = d.getFullYear();
// latestCurrentYear.textContent     = d.getFullYear();
// latestStartingDateYear.appendChild(latestCurrentYear);
// const latestCurrentNextYear       = document.createElement("option");
// latestCurrentNextYear.value       = d.getFullYear()+1;
// latestCurrentNextYear.textContent = d.getFullYear()+1;
// latestStartingDateYear.appendChild(latestCurrentNextYear);
// const currentPlus2Year            = document.createElement("option");
// currentPlus2Year.value            = d.getFullYear()+2;
// currentPlus2Year.textContent      = d.getFullYear()+2;
// latestStartingDateYear.appendChild(currentPlus2Year);
// /**
//  * end
//  */
// /**
//  * set r-e-date-of-birth-year, r-e-date-of-month, r-e-earliest-starting-date-month,
//  * r-e-latest-starting-date-month
//  */
// const dateOfBirthYears = [
//   2004,
//   2003,
//   2002,
//   2001,
//   2000,
//   1999,
//   1998,
//   1997,
//   1996,
//   1995,
//   1994,
//   1993,
//   1992,
//   1991,
//   1990,
//   1989,
//   1988,
//   1987,
//   1986,
//   1985,
//   1984,
//   1983,
//   1982,
//   1981,
//   1980,
//   1979,
//   1978,
//   1977,
//   1976,
//   1975,
//   1974,
//   1973,
//   1972,
//   1971,
//   1970,
//   1969,
//   1968,
//   1967,
//   1966,
//   1965,
//   1964,
//   1963,
//   1962,
//   1961,
//   1960,
//   1959,
//   1958,
//   1957,
//   1956,
//   1955,
//   1954,
//   1953,
//   1952,
//   1951,
//   1950
// ];
// const dateOfYear = document.querySelector(".r-e-date-of-birth-year")
// for(let i = 0; i < dateOfBirthYears.length; i++) {
//     const option       = document.createElement("option");
//     option.value       = dateOfBirthYears[i];
//     option.textContent = dateOfBirthYears[i];
//     dateOfYear.appendChild(option);
// }
// const months = [
//   1,
//   2,
//   3,
//   4,
//   5,
//   6,
//   7,
//   8,
//   9,
//   10,
//   11,
//   12
// ];
// const dateOfBirthMonth = document.querySelector(".r-e-date-of-birth-month");
// for(let i = 0; i < months.length; i++) {
//   const option       = document.createElement("option");
//   option.value       = months[i];
//   option.textContent = months[i];
//   dateOfBirthMonth.append(option); 
// }
// const earliestStartingDateMonth = document.querySelector(".r-e-earliest-starting-date-month");
// for (let i = 0; i < months.length; i++) {
//   const option       = document.createElement("option");
//   option.value       = months[i];
//   option.textContent = months[i];
//   earliestStartingDateMonth.append(option); 
// }
// const latestStartingDateMonth = document.querySelector(".r-e-latest-starting-date-month");
// for (let i = 0; i < months.length; i++) {
//   const option       = document.createElement("option");
//   option.value       = months[i];
//   option.textContent = months[i];
//   latestStartingDateMonth.append(option); 
// }
// /**
//  * end 
//  */
// /**
//  * set r-e-nationality
//  */
// const nationalities = [
//   'afghan',
//   'albanian',
//   'algerian',
//   'american',
//   'andorran',
//   'angolan',
//   'anguillan',
//   'argentine',
//   'armenian',
//   'australian',
//   'austrian',
//   'azerbaijani',
//   'bahamian',
//   'bahraini',
//   'bangladeshi',
//   'barbadian',
//   'belarusian',
//   'belgian',
//   'belizean',
//   'beninese',
//   'bermudian',
//   'bhutanese',
//   'bolivian',
//   'botswanan',
//   'brazilian',
//   'british',
//   'british virgin islander',
//   'bruneian',
//   'bulgarian',
//   'burkinan',
//   'burmese',
//   'burundian',
//   'cambodian',
//   'cameroonian',
//   'canadian',
//   'cape verdean',
//   'cayman islander',
//   'central african',
//   'chadian',
//   'chilean',
//   'chinese',
//   'citizen of antigua and barbuda',
//   'citizen of bosnia and herzegovina',
//   'citizen of guinea bissau',
//   'citizen of kiribati',
//   'citizen of seychelles',
//   'citizen of the dominican republic',
//   'citizen of vanuatu',
//   'colombian',
//   'comoran',
//   'congolese',
//   'cook islander',
//   'costa rican',
//   'croatian',
//   'cuban',
//   'cymraes',
//   'cymro',
//   'cypriot',
//   'czech',
//   'danish',
//   'djiboutian',
//   'dominican',
//   'dutch',
//   'east timorese',
//   'ecuadorean',
//   'egyptian',
//   'emirati',
//   'english',
//   'equatorial euinean',
//   'eritrean',
//   'estonian',
//   'ethiopian',
//   'faroese',
//   'fijian',
//   'filipino',
//   'finnish',
//   'french',
//   'gabonese',
//   'gambian',
//   'georgian',
//   'german',
//   'ghanaian',
//   'gibraltarian',
//   'greek',
//   'greenlandic',
//   'grenadian',
//   'guamanian',
//   'guatemalan',
//   'guinean',
//   'guyanese',
//   'haitian',
//   'honduran',
//   'hong konger',
//   'hungarian',
//   'icelandic',
//   'indian',
//   'indonesian',
//   'iranian',
//   'iraqi',
//   'irish',
//   'israeli',
//   'italian',
//   'ivorian',
//   'jamaican',
//   'japanese',
//   'jordanian',
//   'kazakh',
//   'kenyan',
//   'kittitian',
//   'kosovan',
//   'kuwaiti',
//   'kyrgyz',
//   'lao',
//   'latvian',
//   'lebanese',
//   'liberian',
//   'Libyan',
//   'liechtenstein citizen',
//   'lithuanian',
//   'luxembourger',
//   'macanese',
//   'macedonian',
//   'malagasy',
//   'malawian',
//   'malaysian',
//   'maldivian',
//   'malian',
//   'maltese',
//   'marshallese',
//   'martiniquais',
//   'mauritanian',
//   'mauritian',
//   'mexican',
//   'micronesian',
//   'moldovan',
//   'monegasque',
//   'mongolian',
//   'montenegrin',
//   'montserratian',
//   'moroccan',
//   'mosotho',
//   'mozambican',
//   'namibian',
//   'nauruan',
//   'nepalese',
//   'new zealander',
//   'nicaraguan',
//   'nigerian',
//   'niuean',
//   'north korean',
//   'northern irish',
//   'norwegian',
//   'omani',
//   'pakistani',
//   'palauan',
//   'palestinian',
//   'panamanian',
//   'gapua New guinean',
//   'paraguayan',
//   'peruvian',
//   'pitcairn islander',
//   'polish',
//   'portuguese',
//   'prydeinig',
//   'puerto rican',
//   'qatari',
//   'romanian',
//   'russian',
//   'rwandan',
//   'salvadorean',
//   'sammarinese',
//   'samoan',
//   'sao tomean',
//   'saudi arabian',
//   'scottish',
//   'senegalese',
//   'serbian',
//   'sierra leonean',
//   'singaporean',
//   'slovak',
//   'slovenian',
//   'solomon islander',
//   'somali',
//   'south african',
//   'south korean',
//   'south sudanese',
//   'spanish',
//   'sri lankan',
//   'st helenian',
//   'st lucian',
//   'stateless',
//   'sudanese',
//   'surinamese',
//   'swazi',
//   'swedish',
//   'swiss',
//   'syrian',
//   'taiwanese',
//   'tajik',
//   'tanzanian',
//   'thai',
//   'togolese',
//   'tongan',
//   'trinidadian',
//   'tristanian',
//   'tunisian',
//   'turkish',
//   'turkmen',
//   'turks and caicos islander',
//   'tuvaluan',
//   'ugandan',
//   'ukrainian',
//   'uruguayan',
//   'uzbek',
//   'vatican citizen',
//   'venezuelan',
//   'vietnamese',
//   'vincentian',
//   'wallisian',
//   'welsh',
//   'yemen',
//   'zambian',
//   'zimbabwean'
// ];
// const nationalitySelectInput = document.querySelector(".r-e-nationality-select-input");
// for(let i = 0; i < nationalities.length; i++) {
//   const option       = document.createElement("option");
//   const nationality  = nationalities[i];
//   if(nationality.split(" ").length === 5){
//     const words = nationality.split(" ");
//     const firstWord  = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secondWord = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     const thirdWord  = words[2].charAt(0).toUpperCase() + words[2].slice(1);
//     const fourthWord = words[3].charAt(0).toUpperCase() + words[3].slice(1);
//     const fifthWord  = words[4].charAt(0).toUpperCase() + words[4].slice(1);
//     option.value     = nationality;
//     option.textContent = `${firstWord} ${secondWord} ${thirdWord} ${fourthWord} ${fifthWord}`;
//     nationalitySelectInput.appendChild(option);
//   } else if(nationality.split(" ").length === 4){
//     const words = nationality.split(" ");
//     const firstWord  = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secondWord = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     const thirdWord  = words[2].charAt(0).toUpperCase() + words[2].slice(1);
//     const fourthWord = words[3].charAt(0).toUpperCase() + words[3].slice(1);
//     option.value     = nationality;
//     option.textContent = `${firstWord} ${secondWord} ${thirdWord} ${fourthWord}`;
//     nationalitySelectInput.appendChild(option);
//   } else if(nationality.split(" ").length === 3){
//     const words = nationality.split(" ");
//     const firstWord  = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secondWord = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     const thirdWord  = words[2].charAt(0).toUpperCase() + words[2].slice(1);
//     option.value     = nationality;
//     option.textContent = `${firstWord} ${secondWord} ${thirdWord}`;
//     nationalitySelectInput.appendChild(option);
//   } else if(nationality.split(" ").length === 2){
//     const words = nationality.split(" ");
//     const firstWord  = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secondWord = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     option.value     = nationality;
//     option.textContent = `${firstWord} ${secondWord}`;
//     nationalitySelectInput.appendChild(option);
//   }else {
//     option.value       = nationality;
//     option.textContent = nationality.charAt(0).toUpperCase() + nationality.slice(1);
//     nationalitySelectInput.appendChild(option);
//   }

// }
// /**
//  * end set r-e-nationality
//  */
// /**
//  * set r-e-education
//  */
// const educations = [
//   'primary school',
//   'secondary school',
//   'college',
//   'vocational school',
//   'university',
//   'other'
// ]
// const educationSelect = document.querySelector(".r-e-education");
// for (let i = 0; i < educations.length; i++) {
//   const option = document.createElement("option");
//   const education = educations[i];
//   if(education.split(" ").length === 2) {
//     option.value       = education;
//     const words        = education.split(" ");
//     const firstWord    = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secondWord   = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     option.textContent = `${firstWord} ${secondWord}`;
//     educationSelect.appendChild(option);
//   } else {
//     option.value       = education;
//     option.textContent = education.charAt(0).toUpperCase() + education.slice(1);
//     educationSelect.appendChild(option);
//   }
// }
// /**
//  * end set r-e-education
//  */
// /**
//  * set e-r-religion
//  */
// const religions = [
//   'other',
//   'buddhist',
//   'christian',
//   'catholic',
//   'protestant',
//   'baptist',
//   'hindu',
//   'jewish',
//   'muslim',
//   'sikh',
//   'jain',
//   'no religion'
// ];
// const religionSelect = document.querySelector(".e-r-religion-select");
// for (let i = 0; i < religions.length; i++) {
//   const option = document.createElement("option");
//   const religion = religions[i];
//   if(religion.split(" ").length === 2){
//     const words        = religion.split(" ");
//     const firstWord    = words[0].charAt(0).toUpperCase() + words[0].slice(1);
//     const secWord      = words[1].charAt(0).toUpperCase() + words[1].slice(1);
//     option.value       = religion;
//     option.textContent = `${firstWord} ${secWord}`;
//     religionSelect.appendChild(option);
//   } else {
//     option.value       = religion;
//     option.textContent = religion.charAt(0).toUpperCase() + religion.slice(1);;
//     religionSelect.appendChild(option);
//   }
  
// }
// /**
//  * end 
//  */
// /**
//  * set r-e-how-did-you-find-us-select
//  */
// const howSelect = document.querySelector(".r-e-how-did-you-find-us-select");
// const hows      = [
//   'google',
//   'yahoo',
//   'bing',
//   'internet',
//   'through a freind',
//   'school',
//   'newspaper',
//   'facebook',
//   'instagram',
//   'social media',
//   'university',
//   'magazine',
//   'other'
// ]

// for (let i = 0; i < hows.length; i++) {
//   const option = document.createElement("option");  
// }
// //test
//  function myFunction() {
//   alert("HELLO 10");
// }