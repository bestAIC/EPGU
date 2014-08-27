function selectRegion(){
  

  var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });

  // Setup jQuery ajax mock:
  $.mockjax({
      url: '*',
      responseTime: 2000,
      response: function (settings) {
          var query = settings.data.query,
              queryLowerCase = query.toLowerCase(),
              re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
              suggestions = $.grep(countriesArray, function (country) {
                   // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                  return re.test(country.value);
              }),
              response = {
                  query: query,
                  suggestions: suggestions
              };

          this.responseText = JSON.stringify(response);
      }
  });

  // Initialize ajax autocomplete:
  $('#autocomplete-ajax').autocomplete({
     // serviceUrl: '/autosuggest/service/url',
     lookup: countriesArray,
     lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
         var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
         return re.test(suggestion.value);
     },
     onSelect: function(suggestion) {
        $('#selction-ajax').html(suggestion.value + ', ' + suggestion.data)
     },
     onHint: function (hint) {
         $('.search_inp-ajax-x').val(hint);
     },
     onInvalidateSelection: function() {
         $('#selction-ajax').html("");
     }
  });

   // Initialize ajax autocomplete:
  $('#autocomplete-ajax_2').autocomplete({
     // serviceUrl: '/autosuggest/service/url',
     lookup: countriesArray,
     lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
         var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
         return re.test(suggestion.value);
     },
     onSelect: function(suggestion) {
        $('#selction-ajax_2').html(suggestion.value + ', ' + suggestion.data)
     },
     onHint: function (hint) {
         $('.search_inp-ajax-x').val(hint);
     },
     onInvalidateSelection: function() {
         $('#selction-ajax_2').html("");
     }
  });



}