<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Functional React Todo List App</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
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
  <script src="{{ asset('components/TodoList.js') }}"></script>


</body>

</html>