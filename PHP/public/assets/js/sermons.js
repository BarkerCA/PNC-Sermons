// Page Height Adjustment
$(document).ready(function(){
  var body = $('body').height();
  var bodyminus = body - 323;
  $('#main').css({'min-height' : bodyminus});
});

// Foundation Init
$(document).foundation();