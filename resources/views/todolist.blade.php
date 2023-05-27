
<!-- {{ Session::get('name') }} -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ᑭᖇIᗩᒪ - Personal Productivity Tool</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{ asset('css/TodoList.css') }}">

</head>

<body>
  @php
    $itemListJson = json_encode($items,true);
  @endphp
  <script>
    var itemListJson = <?php echo $itemListJson ?>;
  </script>
  
  <!-- partial:index.partial.html -->
  <div id="root"></div>
  <!-- partial -->
  <script src='https://unpkg.com/react@18/umd/react.production.min.js'></script>
  <script src='https://unpkg.com/react-dom@18/umd/react-dom.production.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js" integrity="sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('components/TodoList.jsx') }}"></script>


</body>

</html>