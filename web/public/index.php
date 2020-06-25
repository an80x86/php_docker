<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

  <p>Hello, world!</p>
  <table id="users" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ad</th>
                <th>soyad</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ad</th>
                <th>soyad</th>
            </tr>
        </tfoot>
    </table>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
  $( document ).ready(function() {
    $('#users').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
        "sAjaxSource": "./ajax.php",
	} );
  });
  </script>
</body>

</html>