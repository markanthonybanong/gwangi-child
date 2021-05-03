export function contactInformation(userData){
    const container            = $('.contact-information-container');
    const fullNameContainer    = `<div class="fullname-container opacity-background">
                                     <h5>Fullname</h5>
                                     <p>${userData['firstname']} ${userData['lastname']}</p>
                                  </div>`;
    const addressContainer     = `<div class="address-container">
                                     <h5>Address</h5>
                                     <p>${userData['address']}</p>
                                 </div>`;
    const zipCodeContainer     = `<div class="zipcode-container opacity-background">
                                    <h5>Zip code</h5>
                                    <p>${userData['zipcode']}</p>
                                </div>`;
    const cityContainer        = `<div class="city-container">
                                   <h5>City</h5>
                                   <p>${userData['city']}</p>
                                 </div>`;
    const stateRegionContainer = `<div class="state-region-container opacity-background">
                                    <h5>State/Region</h5>
                                    <p>${userData['state_region']}</p>
                                  </div>`;
    const countryContainer     = `<div class="country-container">
                                    <h5>Country</h5>
                                    <p>${userData['country']}</p>
                                 </div>`;
    const mobilePhoneContainer = `<div class="mobile-phone-container opacity-background">
                                    <h5>Mobile Phone No.</h5>
                                    <p>${userData['mobile_phone_no']}</p>
                                  </div>`;

    container.append(fullNameContainer);
    container.append(addressContainer);
    container.append(zipCodeContainer);
    container.append(cityContainer);
    container.append(stateRegionContainer);
    container.append(countryContainer);
    container.append(mobilePhoneContainer);
}