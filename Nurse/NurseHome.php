<?php

require 'see.php'


?>

<html>
    <head>
    
        <title>Home page
        </title>
        <style>
        .{
    margin: 0;
    padding: 0;
    
}
	


body{
    font-family:Open Sans, sans-serif;
    line-height: 2.0;
    
    
}
body{
    margin:0;
    padding:0;
    font-family:montserrat;
    background: url("backimage.png");
    background-color: bisque;
    height:100vh;
    overflow:hidden;


}

.center{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    width:400px;
    background: white;
    border-radius: 10px;
    
}

.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    color: #e98484;
}

.center form{
    padding: 0 40px;
    box-sizing:border-box;

}

form .text_field{
    position: relative;
    border-bottom: 2px solid #adadad ;
    margin: 30px 0;
}

.text_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;

}

.text_field label{
    position: absolute;
    top:50%;
    left:5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;

}
.text_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #F35050;
    transition: .5s;
}

.text_field input:focus ~ label,
.text_field input:valid ~ label{
    top: -5px;
    color: #F35050;

}

.text_field input:focus ~ span::before,
.text_field input:valid ~ span::before{

    width: 100%;

}


input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #F35050;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;

}

input[type="submit"] :hover{
    border-color: #F35050;
    transition: .5s;

}

@import url("https://fonts.googleapis.com/css2?family=Lato&display=swap");

html {
  font-size: 62.5%;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



.display-date {
  text-align: center;
  margin-bottom: 10px;
  font-size: 1.6rem;
  font-weight: 600;
}

.display-time {
  display: flex;
  font-size: 5rem;
  font-weight: bold;
  border: 2px solid #ffd868;
  padding: 10px 20px;
  border-radius: 5px;
  transition: ease-in-out 0.1s;
  transition-property: background, box-shadow, color;
  -webkit-box-reflect: below 2px
    linear-gradient(transparent, rgba(255, 255, 255, 0.05));
}

.display-time:hover {
  background: #ffd868;
  box-shadow: 0 0 30px#ffd868;
  color: #272727;
  cursor: pointer;
}


            </style>
    </head>
    <body>
    <div class="center">
            <h1>Welcome</h1>
            <div class="container">
                <img src="nurse.jpg">
      
            
        </div>
    </body>
    

</html>