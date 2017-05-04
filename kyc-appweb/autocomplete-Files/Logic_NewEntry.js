/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function() {
    'use strict';
// var countriesArray = $.map(kycc, function (value, key) { 
//     return { value: value, data: key }; });
var peopleArray = $.map(partnames, function (value, key) { 
    return { value: value, data: key }; });
// var countriesArray = $.map(countries, function (value) { 
//         return {"pooja":"pooja"}; });

// var countriesArray = $.grep(countries, function (value, id) { 
//         return {value:value, data:id }};);

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function(settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(peopleArray, function(search) {
                    // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(search.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });



    // Initialize autocomplete with custom appendTo:
    $('.newentry').autocomplete({
        lookup: peopleArray
    });
});