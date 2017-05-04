/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function() {
    'use strict';
// var countriesArray = $.map(kycc, function (value, key) { 
//     return { value: value, data: key }; });
var peopleArray = $.map(peoplenames, function (value, key) { 
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
    $('#search').autocomplete({
        lookup: peopleArray,
         onSelect: function(suggestion)
         {

         /*  var wrapper= $("#tagname");
          $(wrapper).append(''+suggestion.data+'');    
*/      var value1= suggestion.data.substr(0, suggestion.data.indexOf('-')); 
        var value2= suggestion.data.substr(suggestion.data.indexOf("-") + 1);

        document.getElementById("is_user_field").value = value1;
        document.getElementById("id_field").value = value2;
        document.getElementById('submit').click();
        }
    });
});