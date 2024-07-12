(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {
      var _input;

      function _onInputEvent(e) {
          _input = e.target;
          var searchText = _input.value.toLowerCase();
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          
          Arr.forEach.call(tables, function(table) {
              Arr.forEach.call(table.tBodies, function(tbody) {
                  Arr.forEach.call(tbody.rows, function(row) {
                      var text = row.textContent.toLowerCase();
                      row.style.display = text.indexOf(searchText) === -1 ? 'none' : 'table-row';
                  });
              });
          });
      }

      return {
          init: function() {
              var inputs = document.getElementsByClassName('light-table-filter');
              Arr.forEach.call(inputs, function(input) {
                  input.oninput = _onInputEvent;
              });
          }
      };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
      if (document.readyState === 'complete') {
          LightTableFilter.init();
      }
  });
})(document);
