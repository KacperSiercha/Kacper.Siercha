## Hashing:

# SHA-256/SHA-3/SHA-512: Funkcje skrótu są powszechnie stosowane do bezpiecznego przechowywania haseł. Hasło jest haszowane, a wynikowy skrót jest przechowywany w bazie danych. Warto zauważyć, że funkcje skrótu są jednokierunkowe, co oznacza, że nie można odzyskać oryginalnego hasła z haszowanej wartości.

## Salt:

# Dodawanie soli (losowego ciągu danych) do hasła przed haszowaniem zwiększa bezpieczeństwo. Każde hasło może mieć inną sól, co uniemożliwia atakom typu rainbow table.

## Key Derivation Functions (KDF):

# Funkcje pochodne klucza, takie jak PBKDF2 (Password-Based Key Derivation Function 2), bcrypt, scrypt, są projektowane specjalnie do bezpiecznego przechowywania haseł. KDF są bardziej czasochłonne, co utrudnia ataki typu brute-force.

## Argon2:

# Argon2 to nowoczesna funkcja kryptograficzna, która jest specjalnie zaprojektowana do przechowywania haseł. Jest rekomendowana przez NIST i jest trudniejsza do atakowania za pomocą różnych technik, takich jak ataki brute-force czy ataki typu rainbow table.

## AES (Advanced Encryption Standard):

# AES jest symetrycznym algorytmem szyfrowania, który może być używany do bezpiecznego przechowywania haseł, jeśli klucz szyfrowania jest bezpieczny. Jednak wymaga on zarządzania kluczami, co może być skomplikowane.

## SSL/TLS:

# Przy komunikacji między aplikacją a bazą danych, stosowanie protokołów zabezpieczających, takich jak SSL/TLS, pomaga w ochronie danych, w tym haseł, przed przechwyceniem.
## Cryptographic Hash Functions do integrowania haseł:

# W celu zabezpieczenia danych przed atakami typu "man-in-the-middle", można użyć funkcji kryptograficznych do integralności haseł, np. HMAC (Hash-based Message Authentication Code).