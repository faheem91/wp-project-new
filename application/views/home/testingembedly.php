<title>Welcome! | LinkedIn</title>

	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cdn.embed.ly/jquery.preview-0.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://cdn.embed.ly/jquery.preview-0.3.2.css" />
</head>

</head>

<body>
<form action="" method="POST">
    <input id="url" type="text" name="url"/>

    <!-- Placeholder that tells Preview where to put the selector-->
    <div class="selector-wrapper"></div>
</form>
</body>
<script>
    // Set up preview.
    $('#url').preview({key:'f0ba0b25e78a491080cab07f8362e3f8'})

    // On submit add hidden inputs to the form.
    $('form').on('submit', function(){
      $(this).addInputs($('#url').data('preview'));
      return true;
    });
</script>
</html>
