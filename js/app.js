$(document).ready(function () {
  $('.nav-link').on('click', function (e) {
    e.preventDefault();
    const page = $(this).data('page');

    $('#mainContent').load(page, function () {
      console.log(page + ' loaded.');
    });
  });
});
