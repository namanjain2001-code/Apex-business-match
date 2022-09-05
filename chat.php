<?php
session_start();
$investorEmail = $_SESSION['investorEmail'];
$entEmail = $_GET['entEmail'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Apex Business Match</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  
  <style>
    body{
    background-image:url(./bg2.jpg) !important;
}
.card-bordered {
    border: 1px solid #ebebeb;
}

.card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    -webkit-transition: .5s;
    transition: .5s;
}

.padding {
    padding: 3rem !important
}

body {
    background-color: #f9f9fa
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}


.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}

.card-header .card-title {
    padding: 0;
    border: none;
}

h4.card-title {
    font-size: 17px;
}

.card-header>*:last-child {
    margin-right: 0;
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px;
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff;
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px;
}
.btn-xs:hover{
    color:#fff !important;
}




.card-title {
    font-family: Roboto,sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}


.ps-container {
    position: relative;
}

.ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden!important;
    -ms-overflow-style: none;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media .avatar {
    flex-shrink: 0;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase;
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table;
}

.media-body {
    min-width: 0;
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
    font-weight: 100;
    color:#9b9b9b;
}

.media>* {
    margin: 0 8px;
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    padding: 0;
    opacity: .8;
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-meta-day::before {
    margin-right: 16px;
}

.media-meta-day::before, .media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb;
}

.media-meta-day::after {
    margin-left: 16px;
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse;
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0;
}

.media {
    padding: 16px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear;
}

.media-chat.media-chat-reverse .media-body p {
    margin-left: auto;
    margin-right: 0px; 
    background-color: #48b0f7;
    color: #fff;
}
.media-chat-reverse{
    float: right;
    clear: right;
    width: 100%;
    margin-right: 0;
}
/* .media-body{
  margin-left: auto;
margin-right: 0px;
} */
.media-chat-reverse .media-body {
margin-left: auto;
margin-right: 0px;

}  

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
}


.border-light {
    border-color: #f1f2f3 !important;
}

.bt-1 {
    border-top: 1px solid #ebebeb !important;
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb;
}

.publisher>*:first-child {
    margin-left: 0;
}

.publisher>* {
    margin: 0 8px;
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent;
}

button, input, optgroup, select, textarea {
    font-family: Roboto,sans-serif;
    font-weight: 300;
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
}

.file-group {
    position: relative;
    overflow: hidden;
} 

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear;
} 

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1; 
    width: 20px;
}

.text-info {
    color: #48b0f7 !important;
}
  </style>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body>
  <div class="page-content page-container" id="page-content">
    <div class="padding">
      <div class="row container ms-auto me-auto d-flex justify-content-center">
        <div class="col-md-6">
          <div class="card card-bordered">
            <div class="card-header">
              <h4 class="card-title"><strong>Name</strong></h4>
            </div>

            <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height: 400px !important">
            <div class='media media-chat media-chat-reverse'><div class='media-body'><p> + chat[i].msg + </p></div></div>


              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px"></div>
              </div>
              <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px">
                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px"></div>
              </div>
            </div>

            <div class="publisher bt-1 border-light">
              <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..." />
              <input class="publisher-input" id="msg" type="text" placeholder="Write something" />
              <span class="publisher-btn file-group">
                <i class="fa fa-paperclip file-browser"></i>
                <input type="file" />
              </span>
              <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a>
              <a class="publisher-btn text-info"  data-abc="true"><svg onclick="send()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    setInterval(function() {
      
      $.ajax({
          url: "chatFetch.php?entEmail=<?php echo($entEmail); ?>",
          type: "GET",
          dataType: "JSON",
          success: function(chat,status) {
            var len = chat.length;
            console.log(chat.length);
            var html = "";
            for (var i=0; i < len; i++) {
              if (chat[i].sender == "<?php echo ($investorEmail);?>") {
                html += "<div class='media media-chat media-chat-reverse'><div class='media-body'><p>" + chat[i].msg + "</p></div></div>";
              } else
                html += "<div class='media media-chat'><div class='media-body'><p>" + chat[i].msg + "</p></div></div>";
            }
            html += "<div class='ps-scrollbar-x-rail' style='left: 0px; bottom: 0px'><div class='ps-scrollbar-x' tabindex='0' style='left: 0px; width: 0px'></div></div><div class='ps-scrollbar-y-rail' style='top: 0px; height: 0px; right: 2px'><div class='ps-scrollbar-y' tabindex='0' style='top: 0px; height: 2px'></div></div>";

            document.getElementById('chat-content').innerHTML = html;
          }

        }

      )
    }, 2000);

    function send() {
      const req = new XMLHttpRequest();

      req.open("get","http://localhost/Apex-business-match/chatInsert.php?sender=" + "<?php echo ($investorEmail); ?>" + "&receiver=" + "<?php echo ($entEmail); ?>" + "&msg=" + document.getElementById('msg').value, true);
      req.send();
      req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {
          console.log(req.responseText);
        }
      }
    }
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>