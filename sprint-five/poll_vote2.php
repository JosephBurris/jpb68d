<?php
$vote = $_REQUEST['vote2'];

$filename = "poll_result2.txt";
$content = file($filename);

$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<!DOCTYPE HTML>
<html>
    <head>
     <style type="text/css">
       .q3{
          width:  <?php echo intval(100*round($yes/($no+$yes),2));?>px;
          height: 20px;
          background-color: green; 
          animation-name: third;
          animation-duration: 1s;
          animation-delay: 0s;
          -webkit-animation-name: third;
          -webkit-animation-duration: 1s;
          -webkit-animation-delay: 0s;
        }

        @keyframes third {
          0% {width: 0px;}
          100% {width: <?php echo(100*round($yes/($no+$yes),2));?>;}
        }
        @-webkit-keyframes third {
          0% {width: 0px;}
          100% {width: <?php echo(100*round($yes/($no+$yes),2));?>;}
        }

        .q4{
          width: <?php echo intval(100*round($no/($no+$yes),2));?>px;
          height: 20px;
          background-color: red; 
          animation-name: fourth;
          animation-duration: 1s;
          animation-delay: 0s;
          -webkit-animation-name: fourth;
          -webkit-animation-duration: 1s;
          -webkit-animation-delay: 0s;
        }
         
         

        @keyframes fourth {
          0% {width: 0px;}
          100% {width: <?php echo(100*round($no/($no+$yes),2));?>;}
        }
        @-webkit-keyframes fourth {
          0% {width: 0px;}
          100% {width: <?php echo(100*round($no/($no+$yes),2));?>;}
        }
     </style>
    </head>

    <body>
        <h2>Result:</h2>
        <table>
            <tr>
                <td>Yes:</td>
                <td>
                    <div class="q3">
                    <?php echo(100*round($yes/($no+$yes),2)); ?>%
                    </div>
                </td>
            </tr>
            <tr>
                <td>No:</td>
                    <td>
                    <div class="q4">
                    <?php echo(100*round($no/($no+$yes),2)); ?>%
                    </div>
                </td>
            </tr>
        </table>
    <body>
</html>