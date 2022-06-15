<html>
    <head>
        <title>Computer_Page</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <link href="css/all.css" rel="stylesheet">
        <style>
            .icons{
                margin-left: 30px;
                color: white;
            }
            .homescreen{
                background:url("background5.jpg");
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .logo{
                font-size: 95px;
                font-family:cursive;
            }
            .menu{
                margin-top: 60px;
                padding-left: 500px;
            }
            .effect:hover{
                background: none;
                color: blueviolet;
                font-weight: bold;
                border: 1px groove yellowgreen;
            }
            .content{
                margin-top: 30px;
                font-size:50px;
                color: white;
                text-shadow: 5px 5px 30px blue;
                font-family: cursive;
                animation-name: repeat;
                animation-duration: 2s;
                animation-iteration-count: infinite;
                font-weight: lighter;
            }
            @keyframes repeat {

                0% {color: lightblue; text-shadow: 5px 5px 30px lightblue;}
                20% {color: #45aaf2; text-shadow: 5px 5px 30px  #45aaf2;}
                40% {color: #2d98da; text-shadow: 5px 5px 30px  #2d98da;}
                60% {color: #4b7bec; text-shadow: 5px 5px 30px  #2d98da;}
                80% {color: #3867d6; text-shadow: 5px 5px 30px  #3867d6;}
                100% {color: lightblue; text-shadow: 5px 5px 30px  lightblue;}
              
              }
            .content1{
                text-align: justify; 
                font-family:cursive; 
                font-size:25px;
                overflow: hidden; 
                padding: 0;
                margin-bottom: 16px;
            }
            .write {
                animation: 3s anim-write ease-out;
                color:white;
              }
              @keyframes anim-write {
                0% {
                  opacity: 0;
                  transform: translateY(80%);
                }   
              }
            .signin{
                font-size: 20px;
                color:white;
                border: 2px solid white;
                border-radius:10px 0px 10px 0px;
                margin-top: 30px;
            }
            .signup{
                text-decoration: none;
                border: none;
                outline: none;
                color: white;
                background: #111;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
                font-size: 22px;
            }
            .signup:before{
                content: '';
                background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
                position: absolute;
                top: -2px;
                left:-2px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                width: calc(100% answer8 4px);
                height: calc(100% answer8 4px);
                animation: glowing 20s linear infinite;
                opacity: 0;
                transition: opacity .3s ease-in-out;
                border-radius: 10px;
            }
            .signup:active {
                color: white;
            }
            .signup:active:after {
                background: transparent;
                color: white;
            }
            .signup:hover:before {
                opacity: 1;
            }
            .signup:after {
                z-index: -1;
                content: '';
                position: absolute;
                background: #111;
                left: 0;
                top: 0;
                border-radius: 10px;
            }
            @keyframes glowing {
                0% { background-position: 0 0; }
                50% { background-position: 400% 0; }
                100% { background-position: 0 0; }
            }
            .js{
                font-family: cursive;
                margin-left: 100px;
            }
            .form{
                background:white;
                padding:20px;
                border-radius: 10px;
                padding:20px;
            }
            .stopwatch{
                font-size:25px;
            }
            .row2{
                background: rgba(108, 117, 125, 0.4);
            }
        </style>
        <script>
            window.history.forward();
            function noBack()
            {
                window.history.forward();
            }
            var ss = 0 , mm = 0 , hh = 0 ;
            function Watch()
            {
                var a = document.getElementById("h");
                var b = document.getElementById("m");
                var c = document.getElementById("s");
                ss++;
                //alert(ss);
                if(ss==60)
                {
                    mm++
                    ss = 0;
                    if(mm==5)
                    {
                        hh++
                        mm = 0;
                        window.location.href = "computer_Connection_page.php";
                    }
                }
                a.innerText = hh + ':';
                b.innerText = mm + ':';
                c.innerText = ss;
            }    
            function Start()
            {
                //window.location.href = "js_demo11.html";
                window.setInterval("Watch()",1000);
            }
            function closesession()
            {
                alert ("Want to close this session ?, then press ok");
                window.location.href ="php_Connection_page.php";
            }
        </script>
    </head>
    <body onload="Start()">
        <div class="container-fluid homescreen">
            
            <!--Header Code Start-->
            <div class="row ">
                <div class="col-sm-8">
                    <b id="date" class="text-light js"></b>
                </div>
                <div class="col-sm-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter icons" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram icons" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube icons" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp icons" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill icons" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github icons"  viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icons" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 logo text-light  text-center">
                    <b>QuizzHub</b>
                </div>
                <div class="col-sm-8 menu">
                    <a href="Quizz_Home_Page.html"><button type="button" class="btn btn-light effect" onclick="closesession()">Home</button></a>
                    <a href="Contact_us.php"><button type="button" class="btn btn-light effect" onclick="closesession()">Contact Us</button></a>
                    <a href="signup.php"><button type="button" class="btn btn-light effect" onclick="closesession()">SignIn</button></a>
                    <a href="Admin_login.php"><button type="button" class="btn btn-light effect" onclick="closesession()">Admin</button></a>
                </div>
            </div>
        
            <div class="row row2">
                <div class="col-sm-3 pt-3 text-light">
                    <h3 style="font-family: cursive;">Core <b style="color: yellow; border-bottom:2px solid white; margin-left:10px">PHP</b> :</h3>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-3 pt-3 text-light">
                    <p id="demo" class="text-center" style="font-size: 30px; line-height: 50%;"></p>
                    <b  class="stopwatch" id="h">HH</b>
                    <b  class="stopwatch" id="m">MM</b>
                    <b  class="stopwatch" id="s">SS</b>
                </div>
            </div>
			<div class="row row2">
                <div class="col-sm-2"></div>
				<div class="col-sm-8 form">
                <form action="php_connection_page.php" method="POST">
        <h4>1. Who is a Inventor of PhP?</h4>
        <input type="radio" id="python" name="Answer1" value="a">
        <label for="python"><b>Guido Van Rossum</b></label><br>
        <input type="radio" id="van" name="Answer1" value="b">
        <label for="van"><b>Rossum Van</b></label><br>
        <input type="radio" id="tim" name="Answer1" value="c">
        <label for="tim"><b>Tim Burner's Lee</b></label><br>
        <input type="radio" id="lerdorf" name="Answer1" value="d">
        <label for="lerdorf"><b>Rasmus Lerdrof </b></label><br>

        <h4>2.  Which of the following is correct about PHP?</h4>
        <input type="radio"  id="syntax" name="Answer2" value="a">
        <label for="syntax"><b> PHP is a recursive acronym for "PHP: Hypertext Preprocessor".</b></label><br>
        <input type="radio"  id="syntax1" name="Answer2" value="b">
        <label for="syntax1"><b>PHP is a server side scripting language that is embedded in HTML.</b></label><br>
        <input type="radio"  id="syntax2" name="Answer2" value="c">
        <label for="syntax2"><b>It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</b></label><br>
        <input type="radio"  id="syntax3" name="Answer2" value="d">
        <label for="syntax3"><b>All of the above.</b></label><br>

       <h4>3.  Which of the following function is used to get length of a string?</h4>
       <input type="radio"  id="number" name="Answer3" value="a">
       <label for="number"><b>strlen()</b></label><br>
       <input type="radio"  id="number1" name="Answer3" value="b">
        <label for="number1"><b>size()</b></label><br>
        <input type="radio"  id="number2" name="Answer3" value="c">
       <label for="number2"><b>length</b></label><br>
       <input type="radio"  id="number3" name="Answer3" value="d">
       <label for="number3"><b>None of these</b></label><br>

       <h4>4. PhP Stands for _____?</h4>
       <input type="radio"  id="code" name="Answer4" value="a">
       <label for="code"><b>Hypertext Transfer Protocol </b></label><br>
       <input type="radio"  id="code1" name="Answer4" value="b">
       <label for="code1"><b>Hypertext Markup Language </b></label><br>
       <input type="radio"  id="code2" name="Answer4" value="c">
       <label for="code2"><b>Hypertext Preprocessor </b></label><br>
       <input type="radio"  id="code3" name="Answer4" value="d">
       <label for="code3"><b>Preprocessed Hypertext Page </b></label><br>

       <h4>5. Whay will be the output of this code?</h4>
       <h5>
        $var = 'false';<br>

        if ($var) { <br>
            echo 'true'; <br>
        } else { <br>
            echo 'false'; <br>
        }<br>
       </h5>
       <input type="radio"  id="string" name="Answer5" value="a">
       <label for="string"><b>True</b></label><br>
       <input type="radio"  id="string1" name="Answer5" value="b">
       <label for="string1"><b>False</b></label><br>

       <h4>6. How do we access the value of 'd' later? </h4>
       <h5>
        $a = array(<br>
            'a',<br>
            3 => 'b',<br>
            1 => 'c',<br>
            'd'<br>
        );
       </h5>
       <input type="radio"  id="strip" name="Answer6" value="a">
       <label for="strip"><b>$a[0] </b></label><br>
       <input type="radio"  id="strip1" name="Answer6" value="b">
       <label for="strip1"><b>$a[3] </b></label><br>
       <input type="radio"  id="strip2" name="Answer6" value="c">
       <label for="strip2"><b>$a[2] </b></label><br>
       <input type="radio"  id="strip3" name="Answer6" value="d">
       <label for="strip3"><b>$a[1] </b></label><br>

       <h4>7. Which of the following is NOT a valid PHP comparison operator? </h4>
        <input type="radio"  id="error" name="Answer7" value="a">
        <label for="error"><b>>= </b></label><br>
        <input type="radio"  id="error1" name="Answer7" value="b">
        <label for="error1"><b><=> </b></label><br>
        <input type="radio"  id="error2" name="Answer7" value="c">
        <label for="error2"><b><> </b></label><br>
        <input type="radio"  id="error3" name="Answer7" value="d">
        <label for="error3"><b>!= </b></label><br>

        <h4>8. Which statement about the code below is correct?</h4>
        <h5>class A {}<br>

            class B {}<br>
            
            class C extends A, B {}<br>
        </h5>
        <input type="radio"  id="value" name="Answer8" value="a">
        <label for="value"><b>the code is perfectly fine </b></label><br>
        <input type="radio"  id="value1" name="Answer8" value="b">
        <label for="value1"><b>classes can not be empty </b></label><br>
        <input type="radio"  id="value2" name="Answer8" value="c">
        <label for="value2"><b>class C can not extend both A and B </b></label><br>
        <input type="radio"  id="value3" name="Answer8" value="d">
        <label for="value3"><b>qualifiers 'public' or 'private' are missing in class definitions </b></label><br>

        <h4>9. Which of the following differences are valid between PHP 4 and PHP 5? </h4>
        <input type="radio"  id="block" name="Answer9" value="a">
        <label for="block"><b>improved MySQL support </b></label><br>
        <input type="radio"  id="block1" name="Answer9" value="b">
        <label for="block1"><b>Support for inheritance </b></label><br>
        <input type="radio"  id="block2" name="Answer9" value="c">
        <label for="block2"><b>Built-in native support for SQLite </b></label><br>
        <input type="radio"  id="block3" name="Answer9" value="d">
        <label for="block3"><b>Both a and c </b></label><br>

        <h4>10. What is the difference between echo and print? </h4>
        <input type="radio"  id="function" name="Answer10" value="a">
        <label for="function"><b>Echo can take multiple parameters where as print cannot </b></label><br>
        <input type="radio"  id="function1" name="Answer10" value="b">
        <label for="function1"><b>Print can take multiple parameters where as echo cannot </b></label><br>
        <input type="radio"  id="function2" name="Answer10" value="c">
        <label for="function2"><b>They both behave the same. </b></label><br>
        <input type="radio"  id="function3" name="Answer10" value="d">
        <label for="function3"><b>Print is a function where as echo is not. </b></label><br><br><br>
        <input type="submit" value="Submit" class="w-100 btn-warning submit mb-3 form-control">
    </form> 
				</div>
                <div class="col-sm-2"></div>
			</div>
            <div class="row mt-5">  
                <!--Footer Start-->
                <div class="col-sm-6">
                  <div>
                      <h5 class="mt-4 text-light" style="font-size: 25px;"><b>Get Connected With Us On Social Network :</b></h5><br/>
                  </div>
              </div>
              <div class="col-sm-2"></div>
              <div class="col-sm-4 pt-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp icons" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill icons" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram icons" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icons" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github icons" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube icons" viewBox="0 0 16 16">
                      <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter icons" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
              </div>
              <p style="border-bottom:2px groove white;"></p>
          </div>
          <div class="row text-light" style="background:rgba(0,0,0,0.4);">
            <div class="col-sm-3 text-light">
                <h4 class="text-center mt-5" style="font-weight: bolder;">
                  &copy; 2022 Copyright : QuizzHub.tech
                </h4>
                <h5 style="font-weight: bolder; color:white;" class="text-center mt-2">
                  MadeBy : HBS Team
                </h5>
            </div>
            <div class="col-sm-3 text-center mt-2">
                <h3><b>QuiizzHub</b></h3>
                <h6 style="text-align: justify; font-size:20px" class="pt-2">
                    These is QuizzHub site, where we test your basic knowledge of 
                    <b>Programming Language</b>. There are 10 questions based on some given time interval (10min.)
                </h6>
            </div>
            <div class="col-sm-3">
                <h3><b class="text-center text-light">USEFULL LINKS</b></h3>
                <ul style="color: white">
                  <h5><b>
                      <li><a href="Quizz_Home_Page.html" style="text-decoration: none; color:white;">Home</a></li>
                  </b></h5>
                  
                  <h5><b>
                      <li><a href="Contact_us.php" style="text-decoration: none; color:white;">Contact Us</a></li>
                  </b></h5>
                  <h5><b>
                    <li><a href="SignUp.php" style="text-decoration: none; color:white;">Login</a></li>
                </b></h5>
                  <h5><b>
                      <li><a href="Admin_login.php" style="text-decoration: none; color:white;">Admin</a></li>
                  </b></h5>
              </ul>  
            </div>
            <div class="col-sm-3 text-light">
                <h3><b>CONTACT</b></h3>
                <h5>
                    India , UP - Varanasi 221011
                </h5>
                <h5>
                    E-mail : abhi588777@gmail.com
                </h5>
                <h5>Mob No : +91-9696023201</h5>
                <h5>
                    Linkedin : abhishek_singh
                </h5>
            </div>
        </div>
    </body>
</html>
            
