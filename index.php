<?php

// Funkcja do generowania klucza
function generateKey()
{
    return openssl_random_pseudo_bytes(32); // 256-bitowy klucz
}

// Funkcja do szyfrowania danych
function encryptData($data, $key)
{
    $iv = openssl_random_pseudo_bytes(16); // Inicjalizacja wektorowa
    $cipherText = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);

    return base64_encode($iv . $cipherText);
}

// Funkcja do deszyfrowania danych
function decryptData($encryptedData, $key)
{
    $data = base64_decode($encryptedData);
    $iv = substr($data, 0, 16); // Pobranie wektora inicjalizacyjnego
    $cipherText = substr($data, 16);

    return openssl_decrypt($cipherText, 'aes-256-cbc', $key, 0, $iv);
}

// Przykładowe dane do zaszyfrowania
$plaintextData = "To są tajne dane!";

// Wygeneruj klucz
$key = generateKey();

// Szyfruj dane
$encryptedData = encryptData($plaintextData, $key);

?>