<!DOCTYPE html>
<html>
    <head>
        <title>Portofolio Zharfan!</title>
    </head>

    <body>
        <style>
            body {
                background: #313131;
                scroll-behavior: smooth;
            }
            nav{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 50px;
                padding: 10px 90px;
                box-sizing: border-box;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border:1px solid rgba(255, 255, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                z-index: 1000;
            }
            nav .logo{
                height: 60px;
                float: left;
                font-size: 24px;
                font-weight: bolder;
                color: #ff85ba;
                font-family: 'Roboto Condensed', sans-serif;
            }
            nav ul {
                list-style: none;
                float: right;
                padding: 0;
                margin: 0;
                display: flex;
            }
            nav ul li a{
                line-height: 30px;
                color: #fff;
                padding: 12px 30px;
                text-decoration: none;
                font-size: 14px;
                font-weight: bold;
                font-family: 'Roboto Condensed', sans-serif;
                text-transform: uppercase;
                transition: font-size 100ms, color 100ms;
            }
            nav ul li a:hover{
                color:#ff8484;
                font-size: 18px ;
            }
            .Perkenalkan{
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                line-height: 0.9;
                font-size: larger;
                padding-top: 155px;
                padding-bottom: 0;  
                letter-spacing: 6px;
                
            }
            .Nama{
                color: #7f49fc;
                font-weight: bolder;
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                padding-left: 75px;
                font-size: larger;
                margin-top: -25px;
                padding-bottom: 0;  
            }
            .square{
                width: 400px;
                height: 320px;
                margin-top: 100px;
                border-radius: 25px;
                box-shadow: 7px -3px 82px -7px #000000;
                object-fit: cover;
                object-position: 0 30%;
            }
            .gambar{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .textbox1{
                position: absolute;
            }
            .textbox1 h1{
                color: chocolate;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 50px;
                margin-top: 100px;
                margin-bottom: 50px;
                text-align: center; 
                margin-left: 100px;
            }
            .textbox1 p{
                color: #fff;
                font-family: 'Poppins', sans-serif; 
                font-weight: lighter;
                text-align: justify;
                margin-top: 70px;
                margin-left: 100px;
                width: 500px;
            }
            .design{
                padding-left: 775px;
                padding-top: 200px;
                display: flex;
            }
            .card{
            width: 100px;
            height: 130px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 15px;
            background-image: url(images/design1.jpeg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            transition: box-shadow 100ms;
            }
            .card:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card2{
                width: 100px;
            height: 130px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 50px;
            background-image: url(images/design2.jpeg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            transition: box-shadow 100ms;
            }
            .card2:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card3{
                width: 100px;
            height: 130px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 20px;
            background-image: url(images/design3.jpeg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            transition: box-shadow 100ms;
            }
            .card3:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card4{
                width: 100px;
            height: 130px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 40px;
            background-image: url(images/design4.jpeg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            transition: box-shadow 100ms;
            }
            .card4:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card5{
                width: 75px;
            height: 115px;
            display: inline-block;
            border-radius: 10px;
            padding: 125px 250px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 40px;
            background-image: url(images/1666082052_WhatsApp\ Image\ 2022-10-18\ at\ 15.32.13.jpeg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            margin-left: 900px;
            margin-top: -16%;
            transition: box-shadow 100ms;
            }
            .card5:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card6{
                width: 75px;
            height: 115px;
            display: inline-block;
            border-radius: 10px;
            padding: 125px 250px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 40px;
            background-image: url(images/DSCN0201.JPG);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            margin-left: 100px;
            margin-top: -16%;
            z-index: -10px;
            transition: box-shadow 100ms;
            }
            .card6:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .card7{
                width: 75px;
            height: 115px;
            display: inline-block;
            border-radius: 10px;
            padding: 125px 250px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 40px;
            background-image: url(images/11.jpg);
            background-position: center;
            background-size: cover;
            box-shadow: 7px -3px 82px -7px #000000; 
            margin-left: 900px;
            margin-top: -16%;
            transition: box-shadow 100ms;
            }
            .card7:hover{
            box-shadow: 7px -3px 145px -7px #ffffff; 
            }
            .textbox2{
                position: absolute;
                margin-top: 100px;
            }
            .textbox2 h1{
                color: chocolate;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 50px;
                margin-top: 100px;
                margin-bottom: 100px;
                text-align: center; 
                margin-left: 150px;
            }
            .textbox2 h2{
                color: #7f49fc;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 35px;
                margin-bottom: 50px; 
                margin-left: 100px;
            }
            .textbox2 p{
                color: #fff;
                font-family: 'Poppins', sans-serif; 
                font-weight: lighter;
                text-align: justify;
                margin-top: 70px;
                margin-left: 100px;
                width: 500px;
            }
            .textbox3 h2{
                width: 600px;
                color: #7f49fc;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 35px;
                margin-bottom: 50px; 
                margin-top: 75px;
                margin-left: 800px;
                text-align: right;
            }
            .textbox3 p{
                color: #fff;
                font-family: 'Poppins', sans-serif; 
                font-weight: lighter;
                text-align: justify;
                margin-top: 70px;
                margin-left: 900px;
                width: 500px;
            }
            .textbox4 h2{
                color: #7f49fc;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 35px;
                margin-bottom: 50px;    
                margin-left: 5px;
            }
            .textbox4 p{
                color: #fff;
                font-family: 'Poppins', sans-serif; 
                font-weight: lighter;
                text-align: justify;
                margin-top: 70px;
                margin-left: 100px;
                width: 500px;
            }
            .textbox5 h1{
                color: chocolate;
                font-family: 'Montserrat', sans-serif;
                font-weight: bolder;
                font-size: 50px;
                margin-top: 200px;
                margin-bottom: 100px;
                text-align: center; 
                margin-left: 150px;
            }
            .wrapper{
                font-family: 'Poppins', sans-serif; 
                display: inline-flex;
                place-items: center;
                list-style: none;
            }
            .wrapper .icon{
                position: relative;
                background: white;
                border-radius: 50%;
                padding: 15px;
                margin: 10px;
                width: 50px;
                height: 50px;
                font-size: 1.1rem;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                box-shadow: 0 10px 10px rgb(0, 0, 0.1);
                cursor: pointer;
                transition: all 0.2s cubic-bezier(0.68, -0.55, 0.256, 1.55);
            }
        </style>
        <nav>
            <div class="logo">panjar.</div>
                <ul>
                <li><a href="#nama">Nama</a></li>
                <li><a href="#hobi">Hobi</a></li>
                <li><a href="#pendidikan">Pendidikan</a></li>
                <li><a href="">Sosmed</a></li>
            </ul>
        </nav>
        <div class="Perkenalkan fade-in" id="nama">
            <p style="color: white;">
                Halo Perkenalkan! Nama Saya
            </p>
        </div>
        <div class="Nama" style="font-size: 50px;">
            Zharfan Zakkiyan Qinthara Fahmi
        </div>
        <div class="gambar">
            <img src="images/WhatsApp Image 2023-11-19 at 4.56.04 PM.jpeg" class="square">
        </div>
        <div class="textbox1" id="hobi">
            <h1>HOBI</h1>
            <p>Disaat waktu luang saya suka melakukan hal hal yang saya suka, seperti membuat Design Poster, Quotes, dan bermain Game. Saya biasanya suka bermain game Fps seperti Valorant Dan CSGO.
                Saya Suka bermain game karena itulah salah satu cara saya menghibur diri saya, Dan saya suka mendesign dikarenakan saya ingin menuangkan ide design yang saya punya. Saya suka mempublish design saya di akun sosial media saya. </p>

        </div>
        <div class="design">
            <div class="card"></div>
            <div class="card2"></div>
            <div class="card3"></div>
            <div class="card4"></div>
        </div>
        <div class="pendidikan" id="pendidikan">
        <div class="textbox2">
            <h1>PENDIDIKAN</h1>
            <h2>SDS DIAN KENCANA</h2>
            <p>
                Saya pernah bersekolah di SDS Dian Kencana selama 3 tahun hingga lulus dikarenakan saya pernah pindah sekolah saat kelas 4 sd. Disekolah tersebut aku memiliki pengalaman yang cukup banyak dan meraih beberapa kejuaraan.
                Saya lulus dari SDS Dian Kencana dengan nilai yang cukup memuasakan.
            </p>
            <div class="card5">
        </div>
        <div class="textbox3">
            <h2>SMK TELKOM PURWOKERTO</h2>
            <p>
                Sekarang saya bersekolah di SMK Telkom Purwokerto. Saya sekarang masih kelas 10 di sekolah ini dan masih kurang lebih 4 bulan saya sudah bersekolah disini. Memang saya belum terlalu banyak pengalaman
                disini. Namun saya sudah banyak mengenal hal baru, dari cara membuat website, membuat kalkulator dari bahasa c#, dan lain sebagainya lagi.
            </p>
            <div class="card6"> 
        </div>
        <div class="textbox4">
            <h2>SMP TELKOM PURWOKERTO</h2>
            <p>
                Saya juga lulusan SMP Telkom Purwokerto. Di SMP saya juga sering mengikuti perlombaan maupun dari sekolah atau luar. Prestasi yang saya pernah raih saat SMP adalah meraih Juara 2 di ajang lomba
                Design Poster FLS2N 2021 Tingkat Kabupaten Banyumas, saya juga sering meraih juara di acara lomba sekolah seperti fashion show dan design poster.
            </p>
            <div class="card7">
        </div>
        </div>
        <div class="sosmed" id="sosmed">
            <div class="textbox5">
                <h1>SOSMED</h1>
            </div>
            <ul class="wrapper">
                <li class="icon instagram">
                    <span class="tooltip">Instagram</span>
                    <img src="images/instagram-line.png" class="fab fa-instagram">
                </li>

                <li class="icon X">
                    <span class="tooltip">X</span>
                    <img src="images/twitter-x-line.png" class="fab fa-x">
                </li>

                <li class="icon tiktok">
                    <span class="tooltip">Tiktok</span>
                    <img src="images/tiktok-line.png" class="fab fa-tiktok">
                </li>
            </ul>
        </div>
    </body>
</html>