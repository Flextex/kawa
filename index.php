<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 3D Download Button w/ Meter Progress</title>
  <meta name="viewport" content="width=device-width">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<h1>Click Me!</h1>
<div class="download-wrap">
  <div class="download">
    <a href="generate-link.php?gmexsite" class="button-download">
      download
      <span class="icon-wrap">
        <i class="icon-download"></i>
      </span>
    </a>
    <div class="meter">
      <span class="meter-progress"></span>
    </div>
  </div>
</div>

<button id="reset">Reset</button>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>