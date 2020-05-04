<?php

session_start();

if(isset($_SESSION['username'])) { ?>
    <html>
    <head>
        <script>
            function getVote(int) {
              if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
              } else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("poll").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","poll_vote.php?vote="+int,true);
              xmlhttp.send();
            }
            function getVote2(int) {
              if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
              } else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("poll2").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","poll_vote2.php?vote2="+int,true);
              xmlhttp.send();
            }
            function getVote3(int) {
              if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
              } else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("poll3").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","poll_vote3.php?vote3="+int,true);
              xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <p>Welcome Home<p>
        <p>Logged in as</p>
        <?php echo '<p>' . $_SESSION['username'] . '</p>' ?>
        <p><a href="/?logout">Log Out</a></p>
        <div id="poll">
            <h3>Did you like the class: Software Engineering?</h3>
            <form>
                Yes:
                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                <br>No:
                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            </form>
        </div>
        <div id="poll2">
            <h3>Did you like professor Goggins' teaching style?</h3>
            <form>
                Yes:
                <input type="radio" name="vote2" value="0" onclick="getVote2(this.value)">
                <br>No:
                <input type="radio" name="vote2" value="1" onclick="getVote2(this.value)">
            </form>
        </div>
        <div id="poll3">
            <h3>Did you think that the assignments were worthwhile?</h3>
            <form>
                Yes:
                <input type="radio" name="vote3" value="0" onclick="getVote3(this.value)">
                <br>No:
                <input type="radio" name="vote3" value="1" onclick="getVote3(this.value)">
            </form>
        </div>
    </body>
    </html>
<?php }
else {
    header('Location: index.php');
    die();
}