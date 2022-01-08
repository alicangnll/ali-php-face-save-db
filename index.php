<head>
    <title>AliDB - Face Recognition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container mt-2">
    <br>
    <h1>AliDB - Face Recognition</h1>
    <hr></hr>
    <form class="mt-4 container" method="get" action="face_save.php">
  <div class="mb-3">
    <label for="pic" class="form-label">Image Link</label>
    <input type="text" class="form-control" name="pic" id="pic">
    <div id="emailHelp" class="form-text">We will take with cURL.</div>
  </div>
  <input type="hidden" name="curl" id="curl" value="0">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr></hr>
<h2>Examples :</h2><br>
<img src="https://camo.githubusercontent.com/3b117608a0ecc83b1943ca432187a34e0f76cd961643edabc83ebc608ce18d98/68747470733a2f2f616c6963616e676e6c6c2e6769746875622e696f2f616c692d7068702d666163652d736176652d64622f64656c6574655f746869732f706963312e706e67" width="100%" height="80%">
</body>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022, Ali Can Gönüllü</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="https://github.com/alicangnll/ali-php-face-save-db/" class="nav-link px-2 text-muted">Project</a></li>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>