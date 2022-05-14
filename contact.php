<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sude Özkanoğlu|Rapor</title>
    <link rel="stylesheet" href="php.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
</head>
<body class="body h-100 d-flex flex-column">
    <nav class="navbar navbar-expand-sm navbar-light bg-gradient my-3" >
        <div class="container">
            <a href="hakkımda.html"><img src="images/Sude_transparent2.png" width="80" height="55"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="mobile" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="hakkımda.html" class="nav-link">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link active">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <table>
        <tr>
            <td class="baslık">AD-SOYAD</td>
            <td><b><?php 
                echo $_POST['name']."&nbsp;".$_POST['surname'];
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">E-MAİL</td>
            <td><b><?php 
                echo $_POST['email']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">KULLANICI ADI</td>
            <td><b><?php 
                echo $_POST['username']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">TELEFON</td>
            <td><b><?php 
                echo $_POST['phone']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">ŞEHİR</td>
            <td><b><?php 
                echo $_POST['city']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">CİNSİYET</td>
            <td><b><?php 
                echo $_POST['gender']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">KULLANICI ADI</td>
            <td><b><?php 
                echo $_POST['username']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">KONU TÜRÜ</td>
            <td><b><?php
            if(isset($_POST['type'])) {
                $type = $_POST['type'];
                foreach($type as $types) {
                    echo $types. "<br>";
                }
            } 
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">KONU</td>
            <td><b><?php 
                echo $_POST['subject']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">MESAJ</td>
            <td><b><?php 
                echo $_POST['message']
            ?><b></td>
        </tr>
        <tr>
            <td class="baslık">DOSYA</td>
            <td><b><?php 
                echo $_POST['file']
            ?><b></td>
        </tr>
    </table>
    <div class="row">
        <div class="col-md-6">
            <a class="btn" id="btn-1" href="hakkımda.html">Anasayfaya Dön</a>
        </div>
        <div class="col-md-6">
            <a class="btn" id="btn-2" href="contact.html">İletişim Sayfasına Dön</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>
