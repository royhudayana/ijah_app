/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

$(function () {
    'use strict';

    var plantsArray = $.map(plants, function (value, key) { return { value: value, data: key }; });
    var compoundsArray = $.map(compounds, function (value, key) { return { value: value, data: key }; });
    var proteinsArray = $.map(proteins, function (value, key) { return { value: value, data: key }; });
    var diseasesArray = $.map(diseases, function (value, key) { return { value: value, data: key }; });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(plantsArray, function (plants) {
                     // return plants.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(plants.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(compoundsArray, function (compounds) {
                     // return plants.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(plants.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });
    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(proteinsArray, function (proteins) {
                     // return plants.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(plants.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });

    // Setup jQuery ajax mock:
    $.mockjax({
        url: '*',
        responseTime: 2000,
        response: function (settings) {
            var query = settings.data.query,
                queryLowerCase = query.toLowerCase(),
                re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
                suggestions = $.grep(diseasesArray, function (diseases) {
                     // return plants.value.toLowerCase().indexOf(queryLowerCase) === 0;
                    return re.test(plants.value);
                }),
                response = {
                    query: query,
                    suggestions: suggestions
                };

            this.responseText = JSON.stringify(response);
        }
    });

    /*autocomplete-ajax
    ================================================================================================================================================*/

    $("#autocomplete-1").autocomplete({
    source: "search.php",
    minLength: 2,//search after two characters
    select: function(event,ui){
        //do something
        }
    });
    // Initialize ajax autocomplete:
    $('#autocomplete-ajax11').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: plantsArray,
    });
    $('#autocomplete-ajax12').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: compoundsArray,
      });
    $('#autocomplete-ajax13').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: proteinsArray,
    });
    $('#autocomplete-ajax14').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: diseasesArray,
    });


    $('#autocomplete-ajax21').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: plantsArray,
    });
    $('#autocomplete-ajax22').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: compoundsArray,
      });
    $('#autocomplete-ajax23').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: proteinsArray,
    });
    $('#autocomplete-ajax24').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: diseasesArray,
    });


    $('#autocomplete-ajax31').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: plantsArray,
    });
    $('#autocomplete-ajax32').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: compoundsArray,
      });
    $('#autocomplete-ajax33').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: proteinsArray,
    });
    $('#autocomplete-ajax34').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: diseasesArray,
    });


    $('#autocomplete-ajax41').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: plantsArray,
    });
    $('#autocomplete-ajax42').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: compoundsArray,
      });
    $('#autocomplete-ajax43').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: proteinsArray,
    });
    $('#autocomplete-ajax44').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: diseasesArray,
    });


    $('#autocomplete-ajax51').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: plantsArray,
    });
    $('#autocomplete-ajax52').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: compoundsArray,
      });
    $('#autocomplete-ajax53').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: proteinsArray,
    });
    $('#autocomplete-ajax54').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: diseasesArray,
    });

    /*autocomplete-ajax
    ================================================================================================================================================*/

});
