var $ = require( 'jquery' );

localItemName = localStorage.getItem('vote_yes');
if (localItemName) {
  $(".vote-item[data-name="+localItemName+"]").addClass("border border-blue-500").removeClass("border-transparent");
}

document.addEventListener("DOMContentLoaded", function(event) {
  $(".vote-item").on("click", function(){
    var itemName = $(this).data("name");
    if (localStorage.getItem('vote_yes')) {
      return;
    } else {
      localStorage.setItem('vote_yes', itemName);
      
      let data = {
        'action': 'vote_click_action',
        'itemName': itemName,
      };
      $.ajax({
        url: ajaxurl, // AJAX handler
        data: data,
        type: 'POST',
        beforeSend : function(xhr) {
          console.log('Load');
        },
        success : function(data) {
          if (data) {
            console.log('data', data);
            $(".vote-item[data-name="+itemName+"] .vote-item-result").text(data);
            $(".vote-item[data-name="+itemName+"]").addClass("border border-blue-500").removeClass("border-transparent");
          }
        }
      });
      console.log(itemName);
    }
  })
});