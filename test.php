<?php

require_once 'encrypt_decrypt.php';

// These keys were generated with keygen.php

$public_key = <<<END_PUB
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApzrxdVWcyq43FEkSF2XN
UfsyGUyimYZFkqwzqrfPRzRd12tf871U7PHRPNeiOO2zJIpMcMSxwPPRmS5jA6nW
xELhuSA+99QZFRkoxsEoneYvhwL6dzJ7fzT/QHnADrKA0s538ymBsnfl+LbPRxFt
qarYav7ImE41P7vtKXqjPYZX1a4jTHZRht0l+3GXSNwvOxQUinYEm6GKus2sO8gz
6b/VHCGwB9z90pHFee09aFg5eXjJr7bcs1HyWiLT0s/+/DLncGZxURh6/AxDdG+R
rjqZSTmPR+Rn2fkkdpudHmChMI7RjV/Hp3NsfIb53tBy1r3FDbx2NpLN6iuju3m3
vQIDAQAB
-----END PUBLIC KEY-----
END_PUB;


$private_key = <<<END_PRI
-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEApzrxdVWcyq43FEkSF2XNUfsyGUyimYZFkqwzqrfPRzRd12tf
871U7PHRPNeiOO2zJIpMcMSxwPPRmS5jA6nWxELhuSA+99QZFRkoxsEoneYvhwL6
dzJ7fzT/QHnADrKA0s538ymBsnfl+LbPRxFtqarYav7ImE41P7vtKXqjPYZX1a4j
THZRht0l+3GXSNwvOxQUinYEm6GKus2sO8gz6b/VHCGwB9z90pHFee09aFg5eXjJ
r7bcs1HyWiLT0s/+/DLncGZxURh6/AxDdG+RrjqZSTmPR+Rn2fkkdpudHmChMI7R
jV/Hp3NsfIb53tBy1r3FDbx2NpLN6iuju3m3vQIDAQABAoIBAAU5frSzPYhJhBgC
pmmLuSvwBKMstUHFo6PO9HhHcNbhKHNj++XyCtayQV68v+k2Z+vi1DuLsZ/9HhXC
kL5bDoYoLsQpYT495qC1ngQDoeC5AdAehDO4JIqXXcgmZZ0v731mjPHQYKhyPYGV
OImYXkw4NbW2Cw9TFi/ND75FghcYb9NV4yqsTi6crnyplUIBIyoHm0iNWyFnE/OR
+KQOaeiNtKQTR7/3r6BntYnRPiUn5aJYShvY6/fOqI2eX9mvju6FlE/6j34BASAP
N/L6pkoErfYjz0mfnRTeaLPMlqy8xs17pqSVVZ25L6YI5h1unJRi2WzJJQpnRbRa
EiXu5+ECgYEAs0uEwOxHSigxtWzmxJJPfEJuI6z7gBZZ/cSQ2o4Om8PIFqiri+g8
AnicsYbRTA/heEHlvDvDCrsFqWehMzocwhD2+KV0cScw0g5nSYVVFdiP9IRblxXg
OjUIuUfNU6Isl7jKGOjGSQ26gjV9is6aC5cq8P73pNH3/VLvfvf0b80CgYEA7sYW
UR0ru8yWrBdBIKifLrsJbRApOZhSEknUhGgDfeVgDr99aiwTz4RM+0C3zElkdssu
uKpGPQepMzhITgGct8BY5eiH6nZ8jhnsviUKskOyhei3iB0mCTM5nXtJwglOadV8
EBKRF7FwudzxSMM6Vx6jCx3jiN6Ia/z5sJwhF7ECgYAVpUBZqizRHxkhNgyGHsPJ
1JtHY1LZm9kxcdGrEQticrhtQ9+x/E+CXN1N8WDDNgeaZRo/J1fcq8d7NC+Z56Ih
K7slOZRdNMYIFgUSMy6afJKkinYkP1farxxmgeyf9Cw+BOkhKLkHiMjDf4GwiFDA
pXdhsOZk15SA2MphIb444QKBgGxixLybRj/gVcDWaXzeritzQYsdW+lGCHM+ylY0
NOmQFnN7Xv2z9mYrgxpGPWhhJFZ8UsAGow2PDbIvaTrnpnEOwgvS6ud2U4HZqMqD
XAChlEcO5UjHGn3wn8Wpskh/GvYVr1RIaU5dAHOOJITIAhKL2KzyK1f00+5ZDiqq
JKdxAoGAHVbr6A3uzK7c6vHlgDpSzHWSM6fO553tR6vAm870hM5dE3BMgr6JcBng
tHZ1OCxCPQTJly2Vfj46r/sxctageCabbvY/GaGmPjr8lXzIiJ5ZCyP/8+RQ7Vqb
wUfPK/FxKQd7wsJCWu7GVx3idKA5aUbD8RQX4Ou7Az8iYDXLUd4=
-----END RSA PRIVATE KEY-----
END_PRI;


// These are some instrctions I found for the Enigma machine ... it seemd appropriate 
// Credit: http://www.ilord.com/enigma-manual1937-english.html
$plaintext = <<<END_PLAIN
 1937 Enigma Manual - English Translation


I. General.

1. The Enigma encryption machine is a secret object in terms of the secret item regulation 
(Verschlußsachen-Vorschrift) (II. Dv. 99). According to the regulations of this provision, it is to be kept 
locked up.

2. Every user of the encryption machine must be aware of the fact that the construction of the machine requires 
careful usage and maintenance, so that the machine is ready for use at any time.

 
II. Preparation for Using the Machine.

3. Before starting the machine, it is to be checked for proper operation. For this, the wooden protection box is 
to be opened, the holding fixture (Picture I, 1) to be opened by lifting the spring-loaded buttons (I, 2), 
the holding levers (I, 3) to be pivoted down, whereupon the cover plate (I/II, 4) can be opened which exposes 
the thumbwheel (II/IV,5).

4. The thumbwheels (II/IV, 5) are to be rotated against each other, so that the contacts of the encryption 
cylinders become bare. Subsequently, the cover plate (I/II, 4) is to be closed and secured by the the holding 
levers (I, 3).

5. To clean the key contacts, all keys (II, 6) are to be pressed down firmly multiple times, and let snap back 
rapidly. While doing this, one key is to be held down to avoid unnecessary progression of the cylinders.

6. The battery switch (II, 7) is to be set to „dunkel" (dark) when the battery is fresh. As soon as the battery 
voltage degrades after long use, the setting „hell" (light) is to be used for improved brightness of the bulbs. 
Using the setting „hell" too early will lead to premature bulb burn out.

7. In bright sunshine, and to spare the user’s eyes, it is advisable to remove the green Zellon panel (I/II, 8) 
from the wooden cover by lifting and turning the spring-loaded buttons (I/II, 9), and to secure it on top of the 
transparent letters using the same mechanism. The Zellon panel attenuates the light of the bulbs and covers all 
letters so that only the lit letter is visible.

8. For protection against bright sunlight the device can be shaded through pulling the joints of the cover 
hinge (II, 14) out towards the front, and closing the wooden cover down partially.

9. There is a sheet holder (I, 42) on the inside of the wooden cover that allows documents to be held 
comfortably in front of the operators eyes during encryption.

 

END_PLAIN;

echo '<pre>';
echo "Starting Plaintext:\n$plaintext";
echo "\n --- \n";
$ciphertext = encrypt_message($plaintext,$public_key);
echo "\nCiphertext:\n";
echo chunk_split($ciphertext);
$plaintext2 = decrypt_message($ciphertext,$private_key);
echo "\n\nDecrypted Back into Plaintext\n\n";

echo $plaintext2;




?>
