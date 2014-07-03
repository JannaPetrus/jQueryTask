var searchData;
$.ajax({
    type : 'POST',
    url: 'mocks/search.json.php',
    dataType : "json",                     
    success: function (data, textStatus) {
      searchData = data.titles;
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
}).done(function() {
  $( "#search" ).autocomplete({
      source: searchData,
      select: function(){
            $('form.search').trigger('submit');
      }
    })
});