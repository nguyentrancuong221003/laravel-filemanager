<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Filemanager</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
      }
    </style>
  </head>
  <body>

    <script>
      function SetUrl(items) {
        var filePath = items[0].url;
        var win = window.opener || window.parent || window.top;
        win.tinymce.activeEditor.windowManager.getParams().setUrl(filePath);
        win.tinymce.activeEditor.windowManager.close();
      }
    </script>

    @include('laravel-filemanager::content')
  </body>
</html>
