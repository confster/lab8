<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=PT+Sans:400,400italic);

@import url(https://fonts.googleapis.com/css?family=Droid+Serif);

html, body{
  background-image: url('https://wallpaperaccess.com/full/1146666.jpg');
}

body{
  counter-reset:section;
  text-align:center;
}

.container{
  position:relative;
  top:100px;
}

.container h1, .container span{
  font-family:"Pt Sans", helvetica, sans-serif;
}

.container h1{
  text-align:center;
  color:#fff;
  font-weight:100;
  font-size:2em; 
  margin-bottom:10px;
}

.container h2{
  font-family:"droid serif";
  font-style:italic;
  color:#d3b6ca; 
  text-align:center;
  font-size:1.2em;
}

.container form span:before {
  counter-increment:section;
  content:counter(section);
  border:2px solid #4c2639;
  width:40px;
  height:40px;
  color:#fff;
  display:inline-block;
  border-radius:50%;
  line-height:1.6em;
  font-size:1.5em;
  position:relative;
  left:-22px;
  top:-11px;
  background:#2F1E27;
}

form{
  margin-top:25px;
  display:inline-block;
}

.fields{
  border-left:2px solid #4c2639
}

.container span{
    margin-bottom:22px; 
    display:inline-block;
}

.container span:last-child{
   margin-bottom:-11px;
}

input{
  border:none;
  outline:none;
  display:inline-block;
  height:34px;
  vertical-align:middle;
  position:relative;
  bottom:14px;
  right:9px;
  border-radius:22px;
  width:220px;
  box-sizing:border-box;
  padding:0 18px; 
}

input[type="submit"]{ 
  background:rgba(197,62,126,.33) ! important;
  color:#fff;
  position:relative;
  left:9px;
  top:25px; 
  width:100px;
  cursor:pointer;
}

	</style>
</head>
<body>

<div class="container">
  <h2></h2>
  <h1>Road to the moon is here!</h1>
  
  <form method="POST" action="{{ route('add-user') }}" id="join-us" enctype="multipart/form-data"> 
  @csrf
    <div class="fields">
    
    <span>
       <input placeholder="Name" type="text" name="name" required>
    </span>
    
    <br/>
    
     <span>
       <input placeholder="Surname" type="text" name="surname" required>
    </span>
    
    <br/>

    <span>
       <input placeholder="E-mail" type="text" name="email" required>
    </span>

    <br/>

    <div class="submit">
    <input type="file" id="myFile" name="image" value="upload" required>
    </div>

    </div>

    <br>  

    <div class="submit">
      <input class="submit" value="Submit" type="submit" />
    </div>
  </form>
</div>

</body>
</html>