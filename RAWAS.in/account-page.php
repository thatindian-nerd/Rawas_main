<div id="account-page" class="hidden">


<div class="card">
        <div class="logincard">
            <div class="login-card-header">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                      </svg>
                </a>
                <img width="250" src="white.png" alt="...">
            </div>
            <h1>Sign-in to Rawas.in</h1>
            <a href="#" class="btn" style="margin-bottom: 1.5rem;">
                <img width="40" src="google.svg" alt="">Continue with Google</a>
            <a href="#" class="btn" style="margin-bottom: 1.5rem;">
                <img width="50" src="apple.svg" alt="">Continue with Apple</a>
            </a>

            
            <div class="or">
                <div class="line"></div>
                <p>or</p>
                <div class="line"></div>
            </div><br>
            <div class="input-group">
                <input type="text" name="input" id="input" placeholder="Phone, email or username">
                
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="input" id="input" placeholder="Password">
            
            </div>
            <br><br>
            <a href="#" class="btn" style="margin-bottom: 1.5rem;">Next</a>
            <a href="#" class="btn btn1">Forgot Password</a>
            <div class="signup">Don't have a account?
                <a href=" # ">
                   <a href="./signup.html"> <b >  Sign up </b></a>
                </a>
            </div>
        </div>
        <div class="foot">
            <center>
                <footer>Copyright © 2023 - 2024 RAWAS.in®. All rights reserved.</footer>
            </center>
        </div>
    </div>

</div>


<style>
  .hidden {
    display: none;
  }

  @import "reset.css";
                                                    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');

                                                    body {
                                                        font: 14px "Open sans", sans-serif;
                                                        min-height: 100vh;
                                                        background-color: #242d34;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        color: white;
                                                    }

                                                    a {
                                                        text-decoration: none;
                                                        color: black;
                                                    }

                                                    b {
                                                        text-decoration: none;
                                                        color: #00acee;
                                                        margin: 10rem 1rem;
                                                    }

                                                    .or {
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        gap: 10px;
                                                        margin-top: 12px;
                                                    }

                                                    h1 {
                                                        text-align: center;
                                                        margin-bottom: 30px;
                                                        font-size: 29px;
                                                        font-weight: 1000;
                                                    }

                                                    .btn {
                                                        border: 1px solid rgb(255, 255, 255);
                                                        border-radius: 15px;
                                                        padding: 10px 10px;
                                                        width: 10vw;
                                                        text-align: center;
                                                        margin-left: 130px;
                                                        display: inline-block;
                                                        align-items: center;
                                                        justify-content: center;
                                                        gap: 10px;
                                                        cursor: pointer;
                                                        background-color: white;
                                                    }

                                                    .btn a {
                                                        color: black;
                                                    }

                                                    .a:not(.btn) {
                                                        color: #00acee;
                                                    }

                                                    .card {
                                                        border: 1px solid black;
                                                        margin-top: 40px;
                                                        height: 88vh;
                                                        width: 43vw;
                                                        background-color: #000000;
                                                        border-radius: 15px;
                                                        border: none;
                                                        padding: 27px 25px;
                                                        display: flex;
                                                        flex-direction: column;
                                                    }

                                                    .login-card {
                                                        position: relative;
                                                        min-width: 600px;
                                                        background-color: black;
                                                        border-radius: 15px;
                                                        padding: 1rem 9rem;
                                                        justify-content: center;
                                                    }

                                                    .login-card-header {
                                                        text-align: center;
                                                        margin-bottom: 1.5rem;
                                                    }

                                                    .login-card-header a {
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        padding: 20px;
                                                    }

                                                    .login-card h1 {
                                                        font-size: 2rem;
                                                        margin-bottom: .17rem;
                                                        font-weight: 700;
                                                    }

                                                    .login-card.btn {
                                                        background-color: white;
                                                        padding: .6rem 1.5rem;
                                                        display: flex;
                                                        align-content: center;
                                                        justify-content: center;
                                                        gap: .5rem;
                                                        border-radius: 50px;
                                                        color: rgb(255, 255, 255);
                                                        border: 1px solid transparent;
                                                        font-weight: 600;
                                                    }

                                                    .login-card .btn img {
                                                        width: 20px;
                                                    }

                                                    .login-card .btn-outline {
                                                        background: none;
                                                        color: white;
                                                        border-color: rgba(225, 225, 225, .4);
                                                    }

                                                    .login-card .line-border {
                                                        position: relative;
                                                        display: flex;
                                                        align-items: center;
                                                        gap: .5rem;
                                                        margin-bottom: 1rem;
                                                    }

                                                    .login-card .line-border:before,
                                                    .login-card .line-border:after {
                                                        content: '';
                                                        display: block;
                                                        height: 1px;
                                                        flex: 1;
                                                        background: rgba(225, 225, 225, .2);
                                                    }

                                                    a .login-card input[type="text"] {
                                                        width: 100%;
                                                        height: 60px;
                                                        border: 1px solid rgba(243, 238, 238, 0.651);
                                                        background: none;
                                                        border-radius: 5px;
                                                        padding-left: .7rem;
                                                        padding-top: 1rem;
                                                        justify-content: center;
                                                        color: rgb(0, 0, 0);
                                                        font-size: 16px;
                                                    }

                                                    .login-card .input-group {
                                                        position: relative;
                                                        margin-bottom: 1.5rem;
                                                    }

                                                    .login-card .input-group span {
                                                        position: absolute;
                                                        inset: 0;
                                                        display: flex;
                                                        align-items: center;
                                                        pointer-events: none;
                                                        font-size: 16px;
                                                        justify-content: center;
                                                        transition: all .3s ease;
                                                        padding: 0 .7rem;
                                                        opacity: .5;
                                                    }

                                                    .input-group {
                                                        width: 22vw;
                                                        padding: 20px 7px;
                                                        font-size: 16px;
                                                        border-radius: 15px;
                                                        text-align: center;
                                                        margin-left: auto;
                                                        margin-right: auto;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        gap: 10px;
                                                        border: 1px solid rgb(211, 204, 204);
                                                    }

                                                    .inputgrp {


                                                        font-size: 16px;
                                                        border-radius: 15px;
                                                        text-align: center;

                                                        display: inline-flex;



                                                    }

                                                    .input-group1 {
                                                        width: 11vw;
                                                        padding: 20px 7px;
                                                        font-size: 16px;
                                                        margin-left: 8.5vw;
                                                        /* align-items: center; */
                                                        justify-content: center;
                                                        text-align: center;
                                                        border-radius: 15px;
                                                        display: inline-block;
                                                        border: 1px solid rgb(211, 204, 204);
                                                    }

                                                    .input-group2 {
                                                        width: 11vw;
                                                        padding: 20px 7px;
                                                        font-size: 16px;
                                                        margin-left: 2vw;
                                                        /* align-items: center; */
                                                        justify-content: center;
                                                        text-align: center;
                                                        border-radius: 15px;
                                                        display: inline-block;
                                                        border: 1px solid rgb(211, 204, 204);
                                                    }

                                                    .foot {
                                                        margin: 2vh 9vw;
                                                        color: #888;
                                                        margin-left: auto;
                                                        margin-right: auto;
                                                    }

                                                    footer {
                                                        margin: 1vh 9vw;
                                                        text-align: center;
                                                        color: #888;
                                                        margin-left: auto;
                                                        margin-right: auto;
                                                    }

                                                    .input_bar {
                                                        display: inline-block;
                                                    }

                                                    #input {
                                                        font-size: 15px;
                                                    }

                                                    .btn1 {
                                                        background-color: #000000;
                                                        color: white;
                                                    }

                                                    .login-card input[type="text"].focus {
                                                        outline: none;
                                                        justify-content: center;
                                                    }

                                                    .signup {
                                                        text-align: center;
                                                        color: #888;
                                                    }

                                                    .signup a {
                                                        color: #d3dee2;
                                                    }

                                                    .login-card input[type="text"] .focus~span {
                                                        color: #00acee;
                                                        justify-content: center;
                                                        font-size: 13px;
                                                        transform: translateY(-15px);
                                                        opacity: 1;
                                                    }

                                                    /*RESPONSIVE*/

                                                    @media(max-width:768px) {
                                                        body {
                                                            background-color: black;
                                                        }

                                                        .login-card-header {
                                                            position: fixed;
                                                            inset: 0;
                                                            bottom: auto;
                                                            padding: 1rem;
                                                        }

                                                        .foot {
                                                            margin: 2vh 9vw;
                                                            color: #888;
                                                            margin-left: auto;
                                                            margin-right: auto;
                                                        }

                                                        footer {
                                                            margin: 1vh 9vw;
                                                            text-align: center;
                                                            color: #888;
                                                            margin-left: auto;
                                                            margin-right: auto;
                                                        }

                                                        .btn {
                                                            border: 1px solid rgb(255, 255, 255);
                                                            border-radius: 15px;
                                                            padding: 13px 188px;
                                                            width: 22vw;
                                                            text-align: center;
                                                            margin-left: -122px;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            gap: 10px;
                                                            cursor: pointer;
                                                            background-color: white;
                                                        }

                                                        .btn1 {
                                                            background-color: #000000;
                                                            color: white;
                                                            justify-content: center;
                                                        }

                                                        .input-group {
                                                            width: 22vw;
                                                            padding: 27px 140px;
                                                            font-size: 16px;
                                                            border-radius: 15px;
                                                            text-align: center;
                                                            margin-left: -68px;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            gap: 10px;
                                                            border: 1px solid rgb(211, 204, 204);
                                                        }

                                                        element.style {
                                                            margin: 3rem -7rem;
                                                            color: #888;
                                                        }

                                                        element.style {
                                                            margin: 4rem -7rem;
                                                            color: #888;
                                                        }
                                                    }

                                                    @media(max-width:768px) {
                                                        .signup {
                                                            margin: 4rem -7rem;
                                                            color: #888;
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .foot {
                                                            margin: -1rem -11rem;
                                                            color: #888;
                                                        }

                                                        .input-group1 {
                                                            width: 30vw;
                                                            padding: 20px 7px;
                                                            font-size: 16px;
                                                            margin-left: 174px;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            border-radius: 15px;
                                                            display: inline-block;
                                                            border: 1px solid rgb(211, 204, 204);
                                                        }

                                                        .input-group2 {
                                                            width: 30vw;
                                                            padding: 20px 7px;
                                                            font-size: 16px;
                                                            margin-left: 1px;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            border-radius: 15px;
                                                            display: inline-block;
                                                            border: 1px solid rgb(211, 204, 204);
                                                        }

                                                        .inputgrp {
                                                            width: 0vw;
                                                            font-size: 16px;
                                                            border-radius: 15px;
                                                            text-align: center;
                                                            margin-left: auto;
                                                            margin-right: auto;
                                                            display: inline-flex;
                                                            justify-content: center;
                                                            gap: 35px;
                                                        }
                                                    }
   

</style>
