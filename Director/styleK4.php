* {
  transition: .1s ease;
}

body {
  background: #d8d8d8;

  font-family: 'Montserrat';
  margin: 0;
}

a {
  text-decoration: none;
}

.container-shadow {
  position: absolute;
  width: 525px;
  height:1010px;
  left: 50%;
  margin-left: -262.5px;
  margin-top: 60px;
  box-shadow: 0px 30px 50px -20px #000;
}

.container {
  position: absolute;
  width: 590px;
  height:1006px;
  left: 50%;
  margin-left: -298.5px;
  margin-top: 60px;
/*   background: url('https://bit.ly/2kBRtBE'); */
/*   background: #673AB7; */
background-color:#0c1e35;
/*background-image: linear-gradient(315deg, #ffffff 0%, #85C1E9 50%);*/

  box-shadow: 0px 0px 50px -20px #000;
}

.wrap {
  position: relative;
  width: 400px;
  margin: 0 auto;
}

.headings {
  position: relative;
  margin: 90px auto 70px;
}

.headings > a:first-child {
  margin-left: 20px;
  margin-right: 45px;
}

.headings > a {
  color: rgba(255, 255, 255, 0.7);
  padding-bottom: 10px;
  border-bottom: solid 2px rgba(17, 97, 237, 0);
  display: inline-block;
}

.headings > a:hover {
  color: rgba(255, 255, 255, 1);
}

.headings > a.active {
  color: rgba(255, 255, 255, 1);
  border-bottom: solid 2px rgba(17, 97, 237, 1);
}

.headings > a span {
  font-size: 22px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

label {
  color: rgba(255, 255, 255, 0.8);
  text-transform: uppercase;
  padding: 13px 20px;
  position: relative;
  display: block;
  font-size: 14px;
}

input {
  width: 100%;
  color: #fff;
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(255, 255, 255, 0.1);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(255, 255, 255, 0);
  margin-bottom: 10px;
}


                  .b1{
					  
					        width:130px;
                            height:40px;						   
						    //color:#FFF5F3;
							
							//margin:: 0px 21px 27px 215px;
							margin-top:0px;
							margin-bottom:0px;
							margin-left:50px;
							margin-right:0px;
							
							
							 border-radius:30px;
                            
                           background-color:#F35050;
						    border: none;
						   cursor:pointer;
				            
				  
				  }
				  
				  .b2{
					    margin-top:44px;
							margin-bottom:0px;
							margin-left:255px;
							margin-right:0px;
							
					      
					        width:130px;
                            height:40px;					   
						    //color:#FFF5F3;
							//margin:100px 0px 12px 57px;
							 border-radius:30px;
                             border: none;
                             //background-color:#F35050;
				    
				  
				  }


select {
  width: 100%;
 color: #fff;
   
  font-weight: 700;
  font-size: 14px;
  letter-spacing: 1px;
  background: rgba(255, 255, 255, 0.1);
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  outline: none;
  box-sizing: border-box;
  border: 2px solid rgba(255, 255, 255, 0);
  margin-bottom: 10px;
  
}

select option{
	
	background:#4082f5;
	
}

input:active,
input:focus {
  border: 2px solid rgba(255, 255, 255, 0.7);
}

#password {
  padding-right: 50px;
}

#password + i {
  color: rgba(255, 255, 255, 0.7);
  font-size: 25px;
  float: right;
  position: relative;
  top: -43px;
  right: 15px;
  cursor: pointer;
}

#password + i:hover {
  color: rgba(255, 255, 255, 1);
}

input[type='checkbox'] {
  width: inherit;
  padding: 0;
  margin: 20px 5px 30px 20px;
}

input[type='checkbox'] + span {
  color: #fff;
}

#rlabel {
  display: inline-block;
  padding: 0;
  top: 1px;
}

#remember:hover,
#rlabel:hover {
  cursor: pointer;
}

input[type='submit'] {
  //width: 100%;
  background: #4082f5;
  text-transform: uppercase;
 // padding: 12px;
  cursor: pointer;
  box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
}

input[type='submit']:hover {
  background: #5a96ff;
}

#sign-up-form input[type='submit'] {
  margin-top: 50px;
}

footer .hr {
  border-bottom: 2px solid rgba(255, 255, 255, 0.1);
  margin: 30px 0px 40px;
}

footer .fp {
  text-align: center;
}

footer .fp a {
  color: rgba(255, 255, 255, 0.6);
  cursor: pointer;
}

footer .fp a:hover {
  color: rgba(255, 255, 255, 1);
}

#sign-in-form {
  display: block;
}

#sign-up-form {
  display: none;
}

@media (max-width: 524px) {
  .container-shadow {
    width: 400px;
    margin-top: 60px;
    left: 50%;
    margin-left: -200px;
  }
  .container {
    width: 400px;
    margin-top: 60px;
    left: 50%;
    margin-left: -200px;
  }
  .wrap {
    width: 300px;
  }
  footer .hr {
    margin-top: 50px;
  }
}

@media (max-width: 399px) {
  .container-shadow {
    width: 100%;
    margin: 0px;
    left: inherit;
  }
  .container {
    width: 100%;
    margin: 0px;
    left: inherit;
  }
  .wrap {
    width: 80%;
  }
}

@media (max-width:330px) {
  .wrap {
    width: 90%
  }
}