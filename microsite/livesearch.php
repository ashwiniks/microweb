<!DOCTYPE html>
<html>
<head>
<?php include('connection.php')?>	

<title>live search</title>
<script type="text/javascript" src="/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="/styles.css" />
<style type="text/css">
body{color:#666;
     margin:0px;
     padding:0px;
     font-family:arial;
background:#f2f2f2;
font-size:12px;
}
.container{background:#fff;
           padding:34px 15px;
           margin:50px auto;
           position:relative;
           display:block;
           border-radius:15px;
           -moz-border-radius:15px;
           -webkit-border-radius:15px;
           -o-border-radius:15px;
           width:940px;
           border:1px solid #ddd;
           }
.input{border:1px solid #ccc;
       padding:9px;
       border-radius:6px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
     -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
       -o-transition: border linear 0.2s, box-shadow linear 0.2s;
          transition: border linear 0.2s, box-shadow linear 0.2s;
        }
.input:focus{-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
                 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
                 box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
                 border-color:rgba(82, 168, 236, 0.6);
                  }
label{display:block;
      padding:4px;
      font-weight:bold;
       }
.suggestion{background:#fff;
            border:1px solid #ddd;
            position:absolute;
            width:400px;
            height:auto;
            padding:10px;
            z-index:12;
            margin-top:-4px;
            box-shadow: 0px 3px 6px #666;
            -moz-box-shadow: 0px 3px 6px #666;
-webkit-box-shadow: 0px 3px 6px #666;
-o-box-shadow: 0px 3px 6px #666;
border-radius:0px 0px 18px 18px;
display:none;
}
</style>
<script type="text/javascript">
//run the  code when the dom is ready
   $(function() {
//select the input box on focus
$("#txt-search").focus(function() {
    //then we make the suggestion div fade in
$("#result").fadeIn();
//we then attach a status text to it
$("#result").html("<p align='center'>Loading suggestions...</p>");

//let make an ajaxx request when the keyboard key is up.

$(this).keyup(function() {
//we then grab the value in the input box
var productname = $(this).val();
//Now send the ajax request        
$.ajax({type:"POST",url:"search.php",data:"product="+productname,success:function(response) {
//attach the reesult from the php page to the result page.
$('#result').html(response);
}
});
        
      });
   });
   });
</script>
</head>
<body>
<div class="container">

<h1 class="logo">LIVE SEARCH</h1>
<p>Enter the name of product you want to search for, a suggestion appear below</p>

 <form action="lsearch.php" method="post" id="search-form"/>
 <label>Search Products</label>
 <input type="text" name="keyword" id="txt-search" class="input" placeholder="search products" />
 <div class="suggestion" id="result">
 
 </div>
 
 </form>

</div>

</body>

</html>