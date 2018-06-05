<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lost and Found Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div id = "main">
        <div class ="main_logo">
          <a href="lostfound/" ><img src="img/logo.jpg" alt=""></a>
        </div>
        <div class = "lost">
          <a id = "lostBtn" href="#">Lost</a>
        </div>
        <div class = "found">
          <a id = "foundBtn" href="#">Found</a>
        </div>
        
        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-content-position">
              {!! Form::open(['url' => '/addfound', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
				<span class="close">&times;</span>
                <h2>What did you find?</h2>
                <input type="text" placeholder="What is your name?" name="name" required="">
                <input type="email" placeholder="Your email" name="email" required="">

                <div class="modal_div">
                  <div class="calendar">
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                      <input class="form-control" type="text" name="date" placeholder="Click to choose date">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                  </div>

                  <!-- <div class="upload_div">
                    <span id ="name_file_lost">Choose the file</span>
                    <div class="upload">
                      <label for="file-upload-lost" class="custom-file-upload">
                        <img src="img/download.png" alt="download_img">
                      </label>
                      <input id="file-upload-lost" name="image" type="file" required="">
                    </div>
                  </div> -->
                  <div class="upload_div">
                    <span id ="name_file">Choose the file</span>
                    <div class="upload">
                      <label for="file-upload" class="custom-file-upload">
                      <img src="img/download.png" alt="download_img">
                    </label>
                    <input id="file-upload" name="image" type="file" required="">
                    </div>
                  </div>
                </div>

                <div class="description_info">
                  <!-- <input class="description_info" class="info" type="text" placeholder="Информация" name="info"> -->
                  <div class="descr_info">
                    <textarea name="info" id="info" cols="53" rows="10" placeholder="Where did you find?" required=""></textarea>
                  </div>
                <div class="button_send">
                  <button type="submit" class="send_link">SEND</button>
                </div>
				{!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

        <div id="myModal_lost" class="modal_lost">
          <div class="modal-content">
            <div class="modal-content-position">
            	{!! Form::open(['url' => '/addlost', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
				<span class="close">&times;</span>
                <h2>What did you lose?</h2>
                <input type="text" placeholder="What is your name?" name="name" required="">
                <input type="email" placeholder="Your email" name="email" required="">

                <div class="modal_div">
                  <div class="calendar">
                    <div id="datepicker_lost" class="input-group date" data-date-format="dd-mm-yyyy">
                      <input class="form-control" type="text" name="date" placeholder="Click to choose date">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                  </div>

                  <div class="upload_div">
                    <span id ="name_file_lost">Choose the file</span>
                    <div class="upload">
                      <label for="file-upload-lost" class="custom-file-upload">
                        <img src="img/download.png" alt="download_img">
                      </label>
                      <input id="file-upload-lost" name="image" type="file" required="">
                    </div>
                  </div>
                </div>

                <div class="description_info">
                  <!-- <input class="description_info" class="info" type="text" placeholder="Информация" name="info"> -->
                  <div class="descr_info">
                    <textarea name="info" id="info" cols="53" rows="10" placeholder="Where did you lose?" required=""></textarea>
                  </div>
                <div class="button_send">
                  <button type="submit" class="send_link" >SEND</button>
                </div>
				{!! Form::close() !!}
          </div>
        </div>

      </div>
    </div>
  </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src ="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
      <script src = "js/script.js"></script>
  </body>
</html>
