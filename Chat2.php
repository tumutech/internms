

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e05866854f.js" crossorigin="anonymous"></script>  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/e05866854f.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="Internee/style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->

    <!-- <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: white;" href="#">Elian PortFolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PortFolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Skills</a>
            </li>


          </ul>

        </div>
      </div>
    </nav> -->
  </header>
  <main>


<div class="container-fluid">
    <div class="row text-white">
    <div class="row">Chat</div>
    <div class="row">
        <div class="col-md-3 mx-auto">
          <div class="d-flex gap-1 align-items-center mx-5"><i class="fa fa-user" aria-hidden="true"></i>Elian</div>
        </div>
        
        <div class="col-md-7 mx-auto">
          <div id='messg' class="bg-dark" style="height: 60vh;">
            <h3 class="text-center">My Chats</h3>
          </div>
        <form method="post" id="chatroom">
        <div class="form-floating ">
            <textarea class="form-control bg-dark text-white" placeholder="Leave a comment here" id="mess"></textarea>
            <label for="floatingTextarea">Message</label>
        </div>
        <button class="btn btn-primary btn-sm" id="submit">Send </button>
        </form>
        </div>
       
    </div>
    </div>
</div>

      
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script type="text/javascript">
    var conn = new WebSocket('ws://localhost:8080');
    
      conn.onopen = function(e) {
          console.log("Connection established!");
      };

      conn.onmessage = function(e) {
          // console.log(e);
          var data = JSON.parse(e.data);
          var userM = document.createElement('div');
          var ico = document.createElement('div');
          var userMessage = document.createElement('div');
          userMessage.textContent = data.mesage;
          userM.setAttribute('style','display:flex;text-dark;gap:10px;background-color: yellow; color: black; width: 150px;height:40px')
          ico.textContent = data.userid;
          userM.appendChild(ico);
          userM.appendChild(userMessage);

          
          document.getElementById('messg').appendChild(userM);
          console.log(data);
      };
      
      var lg = document.getElementById('chatroom');
      lg.addEventListener('submit',(e)=>{
        e.preventDefault();
        var message = document.getElementById('mess').value;
        var data ={
          userid:1,
          mesage: message
        };
        conn.send(JSON.stringify(data));

  // console.log(message);
})
// console.log(lg);
  </script>
</body>

</html>