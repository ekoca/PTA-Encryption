RNTPTAENCRYPTION 
===

The available encryption options in RNT are:
- PTA_ENCRYPTION_METHOD—This setting specifies the encryption method
you want to use, and is blank by default. The options are des3, aes128, aes192, and
aes256.
- PTA_ENCRYPTION_KEYGEN—This setting specifies the keygen method used
for PTA encryption. The default value is RSSL_KEYGEN_PKCS5_V20, and the other
options are RSSL_KEYGEN_PK55_V15 and RSSL_KEYGEN_NONE.
- PTA_ENCRYPTION_PADDING—This setting specifies the padding method used
for PTA encryption. The default value is RSSL_PAD_ANSIX923, and the other
options are RSSL_PAD_PKCS7, RSSL_PAD_NONE, RSSL_PAD_ZERO, and
RSSL_PAD_ISO10126.
- PTA_SECRET_KEY—This setting specifies the key used to decode the encrypted
PTA string. The value is blank by default. (Do not include the value of
PTA_SECRET_KEY in the string itself. The setting should be used only to encrypt the
value sent.)
