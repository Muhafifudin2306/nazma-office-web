$(document).ready(function () {
      $("#filter").keyup(function () {

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
                  count = 0;

            // Loop through the comment list
            $(".card-event").each(function () {

                  // If the list item does not contain the text phrase fade it out
                  if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).fadeOut();

                        // Show the list item if the phrase matches and increase the count by 1
                  } else {
                        $(this).show();
                        count++;
                  }
            });

            // Update the count
            var numberItems = count;
            $("#filter-count").text("Total Event = " + count);
      });
});

$(document).ready(function () {
      $(".content-3").slice(0, 3).show();
      if ($(".content-3").length > 3) {
            $("#loadMore").show();
            $("#loadMore").on("click", function (e) {
                  e.preventDefault();
                  $(".content-3:hidden").slice(0, 6).slideDown();
                  if ($(".content-3:hidden").length == 0) {
                        $("#loadMore").text("No Content").addClass("noContent");
                  }
            });
      }

})