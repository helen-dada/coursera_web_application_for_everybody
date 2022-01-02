<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

  <input type="button" data-wanaget id="btn" value='click' style="width: 220px; margin: 2em;">

<script>
  $(document).ready(function() {
    $('[data-wanaget]').click(function(event) {
     event.preventDefault();
        $.ajax({
          url: '/tests/send_data.php',
          method: 'post',
          dataType: 'html',
          data: {text: 'all is wrong'},
          success: function(data) {
            var res = $.parseJSON(data);
            res.forEach(function(item) {
              alert(item.name);
              alert(item.price);
            })            
        }
      })
    })
  })
  
</script>
</body>
</html>