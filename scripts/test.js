function fake_form_submit ()
{

    var post = $('input#posting-value-1').val();

    $.ajax({
    'url': 'your-php-file.php',
    'type': 'POST',
    'dataType': 'json', 
    'data': {post: post},
    'success': function(data)
     {
         if(data.finish)
         {
            $("div.my-fake-form").attr("innerHTML","Form Submited!");
         }
         else
         {
            $("div.my-fake-form").attr("innerHTML","Form Not Submited!");   
         }
     },
     beforeSend: function()
       {
            $(document).ready(function () {
                $("div.my-fake-form").attr("innerHTML","Loading....");
            });
       },
        'error': function(data)
        {
          $(document).ready(function () {
            $("div.my-fake-form").attr("innerHTML","ERROR OCCURRED!");
          });
        }
      });
}

$(document).ready(function () {
    $('a#submit-form-link').click(function (e) {
       e.preventDefault();
       fake_form_submit();
    });
});