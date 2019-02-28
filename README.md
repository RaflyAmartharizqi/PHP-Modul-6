# PHP-Modul-6

Menciptakan Cookie
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menciptakanCookie1.png)
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menciptakanCookie2.png)
    Dukungan Cookie
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/dukunganCookie.png)
    Menghapus Cookie
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menghapusCookie.png)
    Menciptakan Session
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menciptakanSession1.png)
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menciptakanSession2.png)
    Menghapus Cookie
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menghapusCookie.png)
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/menghapusCookie2.php.png)
    Autentikasi Cookie
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/autentikasi1.png)
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/autentikasi2.png)
    Autentikasi Session
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/autentikasi_cookie/praktikum1.png)
    ![alt text](https://github.com/RaflyAmartharizqi/PHP-Modul-6/blob/master/autentikasi_cookie/praktikum2.png)


1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
  Session digunakan untuk menyimpan suatu nilai. Bedanya jika session telah dibuat dalam suatu file, session dapat diakses oleh file lain selama
  session belum dihapus atau browser belum ditutup. Sedangkan cookie tidak akan terhapus ketika menutup browser, tetapi akan terhapus 
  setelah batas waktu yang ditentukan.
2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
  Session : dengan menutup browser atau membuat codingan untuk menghapusnya
   Cookie : menunggu batas waktu yang telah ditentukan
3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
  Membuat Cookie dan Session
  Cookie : <?php  
           Setcookie('nama_cookie', 'nilai_cookie');  
           echo $_COOKIE['nama_cookie']; 
            ?>
  Session :<html> 

    <head>   
        <title>Set Session</title> 
    </head>  
    
    <body>  
    
    <?php  
// Inisialisasi data session 
session_start(); 
// Set session jika belum ada 
if (!isset($_SESSION['test'])) {   
    $_SESSION['test'] = 'value';

} else { 
    echo 'Session di-set <br />'; 
    // Mencetak nilai session test 
    echo 'Nilai: ' . $_SESSION['test'] . '<br />';  
  // Mencetak semua elemen session   
  print_r($_SESSION); } 
    ?>  
    <p> Tekan Refresh (F5); 
    
    </body> 
    </html> 
 "
 Menghapus Cookie dan Session
 Cookie :
 <html> 
    <head>   
        <title>Hapus Cookie</title> 
    </head> 
    
    <body> 
    
    <?php 
        setcookie('nama_cookie', 'nilai_cookie'); 
        if (isset($_COOKIE['nama_cookie'])) {   
            echo 'cookie di-set <br />'; 
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu 
    setcookie('nama_cookie', '', time() - 1 * 3600); 
    echo 'cookie dihapus';  
    } else {   
        echo 'unset'; } 
    ?>  
<p> Tekan Refresh (F5); 

    </body> 
</html> 
 Session :
            <html>  
    <head>   
        <title>Hapus Session</title> 
    </head>  
    
    <body>  
    
    <?php  
    // Inisialisasi data session 
    session_start(); 
    // Set session jika belum ada 
    if (isset($_SESSION['test'])) {   
        // Hapus session test 
        unset($_SESSION['test']);   
        echo 'session dihapus'; 
    } else {   
        echo 'unset';   
    // Mencetak semua elemen session   
    print_r($_SESSION); } 
    ?>  
    <p> Tekan Refresh (F5); 
    </body> 
    </html>
    
     
    
    
    
    
    
