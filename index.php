<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>TagsInput</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css"/>

<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
    function myfunction(){
        var inp=$("#myinput").val();
        alert(inp);
        var myitems=$("#myinput").tagsinput('items');
        alert(myitems);
    }
</script>

</head>
<body>
 
<div class="col-md-8 col-md-offset-2">
  <div class="text-center">
    <h1>Here is Bootstrap TagsInput</h1>
    <h2>1 more thing</h2>
    
    <h2>2 more thing</h2>
<!-- test -->
<!-- test2 again -->
  </div>

  <div class="form-group">
   
    <input type="text" id="myinput" value="İstanbul, Adıyaman, Adana, Urfa" data-role="tagsinput" class="form-control" />
    <button onclick="myfunction()">Click Me</button>
  </div>
</div>
</body>

</html>
