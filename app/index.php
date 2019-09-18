<?php
    include "../includes/functions.php";
    include "../includes/script.php";
    include "../includes/style.php";
    include "../includes/meta.php";
?>

<body class="body-all">
    <main class="main r-flex">
        <section class="slider" id="mainCont">
            <section id="kc-signIn">
                <div class="form-area bg-white">
                    <h3 class="raleway-bold font-36 text-lightblue">Sign in</h3>
                    <p class="raleway-regular font-14 text-grey">Provide email and password</p>

                    <form action="#" class="form-input-area">
                        <div class="r-flex focus-input-area">
                            <span class="text-lightblue font-20">@</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="" id="" placeholder="hello@vendor.com" class="font-16 raleway-normal">
                        </div>
                        <div class="r-flex focus-input-area">
                            &nbsp;<span class="text-lightblue font-20">
                                <svg width="12" height="23" viewBox="0 0 12 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="5.5" stroke="#5ECCF1" />
                                    <path d="M6 12V22H9.5" stroke="#5ECCF1" />
                                    <path d="M9.5 19H7.5" stroke="#5ECCF1" />
                                </svg>

                            </span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="" id="" placeholder="password" class="font-16 raleway-normal">
                        </div>
                    </form>

                    <button
                        class="r-flex login-text btn-register font-18 raleway-bold">login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7H37" stroke="#9C9C9C" />
                            <path d="M28.5 1L36.5 7L28.5 12.5" stroke="#9C9C9C" />
                        </svg>
                    </button>
                </div>
            </section>

            <aside class="signup-tab bg-grey text-center" id="kc-btn">
                <p class="sign-x-text font-16 raleway-regular sign-in-text">
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 0.5L1 8.5L8.5 16.5" stroke="#969696" />
                    </svg>
                    <span>sign in</span>
                </span>
                
                </p>
            </aside>

            <section class="bg-white" id="kc-signUp"> 
                <div class="form-area">
                    <h3 class="raleway-bold font-36 text-lightblue">Sign up</h3>
                    <p class="raleway-regular font-14 text-grey">Fill the form to create account</p>

                    <form action="#" class="form-input-area form-signup">
                        <div class="r-flex focus-input-area bg-grey-dark">
                            <span class="text-lightblue font-20">
                                <svg width="20" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12V22H13.5" stroke="#5ECCF1" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.22252 9.38328C3.4225 10.7748 1.5 13.6633 1.5 17C1.5 21.6944 5.30558 25.5 10 25.5C14.6944 25.5 18.5 21.6944 18.5 17C18.5 13.6633 16.5775 10.7748 13.7775 9.38328L14.2225 8.48776C17.3494 10.0417 19.5 13.2692 19.5 17C19.5 22.2467 15.2467 26.5 10 26.5C4.75329 26.5 0.5 22.2467 0.5 17C0.5 13.2692 2.65062 10.0417 5.77748 8.48776L6.22252 9.38328ZM10 11C12.7614 11 15 8.76142 15 6C15 3.23858 12.7614 1 10 1C7.23858 1 5 3.23858 5 6C5 8.76142 7.23858 11 10 11ZM10 12C13.3137 12 16 9.31371 16 6C16 2.68629 13.3137 0 10 0C6.68629 0 4 2.68629 4 6C4 9.31371 6.68629 12 10 12Z"
                                        fill="#5ECCF1" />
                                    <path d="M13.5 19H11.5" stroke="#5ECCF1" />
                                </svg>
                            </span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="" id="" placeholder="full name" class="font-16 raleway-normal">
                        </div>
                        <div class="r-flex focus-input-area bg-grey-dark">
                            <span class="text-lightblue font-20">@</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="" id="" placeholder="hello@vendor.com" class="font-16 raleway-normal">
                        </div>
                        <div class="r-flex focus-input-area bg-grey-dark">
                            &nbsp;<span class="text-lightblue font-20">
                                <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="5.5" stroke="#5ECCF1" />
                                    <path d="M6 12V22H9.5" stroke="#5ECCF1" />
                                    <path d="M9.5 19H7.5" stroke="#5ECCF1" />
                                </svg>

                            </span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="" id="" placeholder="password" class="font-16 raleway-normal">
                        </div>
                        <div class="r-flex focus-input-area bg-grey-dark">
                            &nbsp;<span class="text-lightblue font-20">
                                <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="5.5" stroke="#5ECCF1" />
                                    <path d="M6 12V22H9.5" stroke="#5ECCF1" />
                                    <path d="M9.5 19H7.5" stroke="#5ECCF1" />
                                </svg>

                            </span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="" id="" placeholder="confirm password" class="font-16 raleway-normal">
                        </div>
                    </form>

                    <div class="r-flex conditions-checkbox">
                        <input type="checkbox" name="" id="">&nbsp;&nbsp;&nbsp;
                        <p class="raleway-regular font-14 text-grey conditions">I agree to the <b>terms</b> and
                            <b>conditions</b></p>
                    </div>

                    <button
                        class="r-flex login-text btn-register font-18 raleway-bold">register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7H37" stroke="#9C9C9C" />
                            <path d="M28.5 1L36.5 7L28.5 12.5" stroke="#9C9C9C" />
                        </svg>
                    </button>
                </div>
            </section>
        </section>
        <div class="error-box raleway-regular font-14">Invalid email or password provided</div>
    </main>
    <script src="/teamgravity/js/app.js"></script>
</body>