//Vars
const charWhiteList = ['-']  

//Functions
function removeSpecials(str) {
    var lower = str.toLowerCase();
    var upper = str.toUpperCase();

    var res = "";
    for(var i=0; i<lower.length; ++i) {
        if(lower[i] != upper[i] || 
            charWhiteList.includes(lower[i].trim())){
                res += str[i];
            }
    }
    return res;
} 

//Start
var title_input = document.getElementById('title');
var address_input = document.getElementById('address');

/**
 * I'm sure the code above isn't correct but...
 * I dont know enough js for this :(
 * 
 */
title_input.addEventListener('mouseover', function () {
    address_input.value = removeSpecials(title_input.value)
});