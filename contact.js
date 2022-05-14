function formKontrol(){
    ad = document.getElementById("name").value;
    if(ad == "")
    {
        alert("Lütfen Adınızı Yazınız !");
        return false; 
    }  
}
function formKontrol1(){
    soyad = document.getElementById("surname").value;
    if(soyad == "")
    {
        alert("Lütfen Soyadınız Yazınız !");
        return false; 
    }  
}
function formKontrol2(){
    email = document.getElementById("email").value;
    if(email == "")
    {
        alert("Lütfen Mail Adresinizi Yazınız !");
        return false; 
    }  
}
function formKontrol3(){
	var mail = document.getElementById("email").value;
	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (regex.test(mail)==false)
	    {
            alert("Geçersiz Bir Mail Adresi Girdiniz !");
        }
}
function formKontrol4(){
    kullanıcıAdı = document.getElementById("username").value;
    if(kullanıcıAdı == "")
    {
        alert("Lütfen Kullanıcı Adınızı Yazınız !");
        return false; 
    }  
}
function formKontrol5(){
    telefon = document.getElementById("phone").value;
    if(telefon == "")
    {
        alert("Lütfen Telefon Numaranızı Yazınız !");
        return false; 
    }  
}
function formKontrol6(){
    sehir = document.getElementById("city").value;
    if(sehir == "Seçiniz...")
    {
        alert("Lütfen Şehrinizi Seçiniz !");
        return false; 
    }  
}
function formKontrol7(){
    var radio1=document.querySelector("#woman");
    var radio2=document.querySelector("#man");	

    if(radio1.checked==false && radio2.checked==false)
    {
        alert("Lütfen Cinsiyetinizi Seçiniz !");
    }
}
function formKontrol8(){
    var chc1=document.querySelector("#business");
    var chc2=document.querySelector("#personal");	
    var chc3=document.querySelector("#other");
    
    if(chc1.checked==false && chc2.checked==false && chc3.checked==false)
    {
        alert("Lütfen Konu Türü Seçiniz !");
    }
}
function formKontrol9(){
    konu = document.getElementById("subject").value;
    if(konu == "")
    {
        alert("Lütfen Konuyu Yazınız !");
        return false; 
    }  
}
function formKontrol10(){
    mesaj = document.getElementById("message").value;
    if(mesaj == "")
    {
        alert("Lütfen Mesajınızı Yazınız !");
        return false; 
    }  
}
function formKontrol11(){
    dosya = document.getElementById("file").value;
    if(dosya == "")
    {
        alert("Lütfen Dosya Yükleyiniz !");
        return false; 
    }  
}