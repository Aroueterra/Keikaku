// external js: isotope.pkgd.js

// init Isotope
var iso = new Isotope( '.grid', {
    itemSelector: '.element-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = itemElem.querySelector('.weight').textContent;
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });
  
  // bind sort button click
  var sortByGroup = document.querySelector('.sort-by-button-group');
  sortByGroup.addEventListener( 'click', function( event ) {
    // only button clicks
    if ( !matchesSelector( event.target, '.button' ) ) {
      return;
    }
    var sortValue = event.target.getAttribute('data-sort-value');
    iso.arrange({ sortBy: sortValue });
  });
  
  // change is-checked class on buttons
  var buttonGroups = document.querySelectorAll('.button-group');
  for ( var i=0; i < buttonGroups.length; i++ ) {
    buttonGroups[i].addEventListener( 'click', onButtonGroupClick );
  }
  
  function onButtonGroupClick( event ) {
    // only button clicks
    if ( !matchesSelector( event.target, '.button' ) ) {
      return;
    }
    var button = event.target;
    button.parentNode.querySelector('.is-checked').classList.remove('is-checked');
    button.classList.add('is-checked');
  }
  