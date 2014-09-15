function selectRegion(){
  
  var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });
  var citiesArray = $.map(cities, function (value, key) { return { value: value, data: key }; });
  var regionsArray = $.map(regions, function (value, key) { return { value: value, data: key }; });
  var areasArray = $.map(areas, function (value, key) { return { value: value, data: key }; });
  var nationalityArray = $.map(nationality, function (value, key) { return { value: value, data: key }; });
  var adressArray = $.map(adress, function (value, key) { return { value: value, data: key }; });



  // Initialize autocomplete with local lookup:
  $('.search_inp-ajax[name="country"]').autocomplete({
      // serviceUrl: '/autosuggest/service/url',
      lookup: countriesArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint) {
        var inp = $('.search_inp-block input:focus');
        var inpX = inp.parent().find('.search_inp-ajax-x');
        inpX.val(hint);
        $('.autocomplete-suggestion').on('click', function(){
          inpX.val('')
        })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = "";
      },
      autoSelectFirst: true
  });



  $('.search_inp-ajax[name="cities"]').autocomplete({
      lookup: citiesArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint, el) {
          var inp = $('.search_inp-block input:focus');
          var inpX = inp.parent().find('.search_inp-ajax-x');
          inpX.val(hint);
          $('.autocomplete-suggestion').on('click', function(){
            inpX.val('')
          })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = "";
      }
  });

  $('.search_inp-ajax[name="region"]').autocomplete({
      // serviceUrl: '/autosuggest/service/url',
      lookup: regionsArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint, el) {
          var inp = $('.search_inp-block input:focus');
          var inpX = inp.parent().find('.search_inp-ajax-x');
          inpX.val(hint);
          $('.autocomplete-suggestion').on('click', function(){
            inpX.val('')
          })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = " ";
      }
  });

  $('.search_inp-ajax[name="areas"]').autocomplete({
      // serviceUrl: '/autosuggest/service/url',
      lookup: areasArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint, el) {
          var inp = $('.search_inp-block input:focus');
          var inpX = inp.parent().find('.search_inp-ajax-x');
          inpX.val(hint);
          $('.autocomplete-suggestion').on('click', function(){
            inpX.val('')
          })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = " ";
      }
  });

  $('.search_inp-ajax[name="nationality"]').autocomplete({
      // serviceUrl: '/autosuggest/service/url',
      lookup: nationalityArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint, el) {
          var inp = $('.search_inp-block input:focus');
          var inpX = inp.parent().find('.search_inp-ajax-x');
          inpX.val(hint);
          $('.autocomplete-suggestion').on('click', function(){
            inpX.val('')
          })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = " ";
      }
  });

  $('.search_inp-ajax[name="adress"]').autocomplete({
      // serviceUrl: '/autosuggest/service/url',
      lookup: adressArray,
      onSelect: function (suggestion) {
        var obj = this.parentElement.lastElementChild;
            obj.innerHTML = this.getAttribute('placeholder');
      },
      onHint: function (hint, el) {
          var inp = $('.search_inp-block input:focus');
          var inpX = inp.parent().find('.search_inp-ajax-x');
          inpX.val(hint);
          $('.autocomplete-suggestion').on('click', function(){
            inpX.val('')
          })
      },
      onInvalidateSelection: function() {
          var obj = this.parentElement.lastElementChild;
            obj.innerHTML = " ";
      }
  });
}