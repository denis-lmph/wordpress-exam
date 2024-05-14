$(document).ready(function () {
  var ppp = 9; // Post per page
  var pageNumber = 1;

  function load_posts() {
    pageNumber++;
    var str =
      '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
    $.ajax({
      type: 'POST',
      dataType: 'html',
      url: ajax_posts.ajaxurl,
      data: str,
      success: function (data) {
        var $data = $(data);
        if ($data.length) {
          $('#ajax-posts').append($data);
          if ($data.length < 9) {
            $('#more_posts').hide();
          }
        } else {
          $('#more_posts').hide();
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        $loader.html(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
      },
    });
    return false;
  }

  $('#more_posts').on('click', function () {
    load_posts();
    $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
  });
});
