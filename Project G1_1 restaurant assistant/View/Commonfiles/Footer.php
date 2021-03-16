<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <Style>
    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        background: linear-gradient(91.35deg, rgba(82, 87, 235, 0.767) 1.33%, rgba(6, 33, 83, 0.959) 99.3%);
        height: 18.5rem;
    }

    /*By using , we can css more then one div together*/
    .ourteam,
    .contact {
        width: 370px;
        height: auto;
        left: 44px;
        font-family: Redressed;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 10px;
        color: #b1a6a6ef;
    }

    .ourteam h3 {
        float: left;
        color: #ffe066;
    }

    .cp {
        margin-top: 15%;
        /* For placing that copy bar*/
        background-color: rgba(10, 5, 53, 0.856);
        float: center;
    }

    .cp p {
        color: rgb(219, 230, 200);
        text-align: center;
        float: center;
    }

    .right .contact {
        color: #c5bebeef;
    }

    .social-media {
        margin-top: 18%;
        display: flex;
        justify-content: center;
    }

    .social-icon {
        background-color: #d0bfff;
        height: 46px;
        width: 46px;
        border: 1px solid #333;
        margin: 0 0.45rem;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: #333;
        font-size: 1.3rem;
        border-radius: 50%;
        transition: all 0.5s;
    }

    .social-icon:hover {
        color: #20dbc2;
        border-color: #00bfa6;
    }


    .details {
        width: 343px;
        height: 134px;
        left: 53px;
        /*top: 42px;*/
        font-family: Lobster;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 30px;
        color: #bac8ff;
        text-align: center;
    }

    .teg {
        padding-top: 1rem;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .titel {
        padding: 1px;
        background: none;

    }

    .titel h3 {
        padding: 5px;
        color: #ffe066;
    }
    </Style>

</head>



<body>


    <div class="footer">
        <div class="teg">
            <div class="ourteam">
                <div class="titel">
                    <h3>Our Team</h3><br><br> <br>
                </div>

                <hr>
                <div class="details">
                    <p>
                        <br> 19-39297-1 Sams <br>
                        <hr> 19-39541-1 Rubaiyad<br>
                        <hr> 19-39513-1 Naimul<br>
                        <hr> 19-39292-1 Sufian<br>
                        <hr>
                    </p>
                </div>
            </div>

            <div class="contact">
                <div class="titel">
                    <h3>Contact Us</h3><br><br> <br>
                </div>
                <hr>
                <div class="details">
                    <br>
                    <p>Road-5, Bashundhara,Dhaka. <br> Bangladesh <br> Mobile: 01750096696
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="contact">
                    <div class="titel">
                        <h3>Social media</h3><br><br> <br>
                    </div>
                    <hr>
                </div>
                <div class="icone">
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                </div>
                <div class="cp">
                    <p>Copyright @2021</p>
                </div>

            </div>
        </div>
    </div>




</body>

</html>