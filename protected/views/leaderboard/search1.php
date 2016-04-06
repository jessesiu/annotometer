<html>
  <head>
    <title>User Annotations</title>
    <meta charset="utf-8" />

    <script src="../../js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.json-viewer.js"></script>
    <link rel="stylesheet" href="../../css/jquery.json-viewer.css" type="text/css" media="screen" />

    <style type="text/css">
body {
  margin: 0 100px;
  font-family: sans-serif;
}
textarea#json-input {
  width: 100%;
  height: 200px;
}
textarea#json-input1 {
  width: 100%;
  height: 200px;
}
pre#json-renderer {
  border: 1px solid #aaa;
  padding: 0.5em 1.5em;
}
pre#json-renderer1 {
  border: 1px solid #aaa;
  padding: 0.5em 1.5em;
}
    </style>

    <script>
$(function() {
  $('#btn-json-viewer').click(function() {
    try {
      var input = eval('(' + $('#json-input').val() + ')');
      var input1 = eval('(' + $('#json-input1').val() + ')');
    }
    catch (error) {
      return alert("Cannot eval JSON: " + error);
    }
    var options = {collapsed: $('#collapsed').is(':checked')};
    $('#json-renderer').jsonViewer(input, options);
    $('#json-renderer1').jsonViewer(input1, options);
  });

  // Display JSON sample on load
  $('#btn-json-viewer').click();
});
    </script>
  </head>
  <body>
    <h1><a href="https://www.annotometer.com">Annotometer</a></h1>
    <textarea id="json-input" autocomplete="off">
<?php echo $hypo;
        ?>
</textarea>
        <textarea id="json-input1" autocomplete="off">
<?php echo $icl;
        ?>
</textarea>
    <button id="btn-json-viewer">json-viewer</button>
    <label><input type="checkbox" id="collapsed" />Collapse</label>
    <pre id="json-renderer"></pre>
    <pre id="json-renderer1"></pre>
  </body>
</html>
