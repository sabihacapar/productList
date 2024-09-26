<?php
try {
    $host = 'localhost';
    $dbname = 'product_managment'; // Veritabanı adını kontrol et
    $username = 'root'; // Kullanıcı adı
    $password = ''; // Şifre

    // PDO ile veritabanı bağlantısını oluştur
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Veritabanına bağlantı başarılı!";
} catch (PDOException $e) {
    echo "Veritabanı bağlantısı başarısız: " . $e->getMessage();
}
