<html>
<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <meta charset="UTF-8">
    <title>PDF Upn</title>

    <style type="text/css">
    html { margin: 0px}
      @page { margin: 0cm;
      }
        body {
                 margin:    0cm;
             }

             /**
             * Define the width, height, margins and position of the watermark.
             **/
             #watermark {
                 margin: 0cm;
                 padding: 0cm;
                 position: fixed;
                 top: 0;
                 bottom:   0px;
                 left:     0px;
                 right: 0;
                 /** The width and height may change
                     according to the dimensions of your letterhead
                 **/
                 /* width:    21.8cm;
                 height:   28cm; */

                 /** Your watermark should be behind every content**/
                 z-index:  -1000;
             }
    </style>
</head>
<body>
  <div id="watermark">
    <img src="https://office2.probookingcenter.com/images/pdf/tax3.jpg" height="100%" width="100%" />
  </div>


</body>
