

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Bioskop</title>
</head>
<body>
    <div class='kepala'>
        SELAMAT DATANG DI BIOSKOP
    </div>

    <div class='sign_up'></div>
    <a href='signup.php' class='btn_signup'>Sign Up</a>
    
    <div class='sign_in'></div>
    <a href='signin.php' class='btn_signin'>Sign In</a>

    <div clas='component1'></div>

</body>










<style>
    body {
    position: relative;
    width: 1280px;
    height: 1626px;
    background: #FFFFFF;
    }
    .kepala  {
        position: absolute;
        width: 1013px;
        height: 65px;
        left: calc(50% - 1013px/2 + 0.5px);
        top: 60px;

        font-family: 'Bree Serif';
        font-style: normal;
        font-weight: 400;
        font-size: 48px;
        line-height: 65px;
        text-align: center;

        color: #000000;


    }
    .sign_up {
        position: absolute;
        width: 128px;
        height: 51px;
        left: 1091px;
        top: 33px;

        background: #D9D9D9;
        border-radius: 24px;
    }

    .btn_signup{
        position: absolute;
        width: 91px;
        height: 42px;
        left: 1114px;
        top: 45px;

        font-family: 'Bree Serif';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;

        color: #000000;
    }

    .sign_in {
        position: absolute;
        width: 128px;
        height: 46px;
        left: 1091px;
        top: 87px;

        background: #D9D9D9;
        border-radius: 24px;
    }

    .btn_signin {
        position: absolute;
        width: 67px;
        height: 26px;
        left: 1114px;
        top: 97px;

        font-family: 'Bree Serif';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;

        color: #000000;
    }

    .component1 {
        position: absolute;
        width: 1046px;
        height: 478px;
        left: 117px;
        top: 329px;
    }
</style>
</html>

