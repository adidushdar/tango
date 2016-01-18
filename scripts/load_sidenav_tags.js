$(document).ready(function () {
  $.getJSON("data/tags.json", function (data) {
    var items = [];
    
    $.each(data, function (key, val) {
      items.push("<li class='tag'><a href='#'>" + val + "</a></li>");
    });
   
   $(".sidenav .tag_wrapper").append(items.join(""));
  });
});