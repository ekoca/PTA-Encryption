RNT PTA ENCRYPTION 
===

Per Oracle RNT documentation.

The available encryption options in RNT are following:
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

I am not a Oracle RNT developer. I never develop anything for RNT before and one day I have been asked to write a php script which authenticate our customer between our site to RNT support site.

I did not know what Oracle RNT is even. So I googled the RNT support website, I found it. However, there is no good source of documentation about available encryption options in RNT. Nobody provide me an access to get the developer site. 

I was stuck almost. Then I started to read many comments on RNT support pages. Finally, I was able to make this script worked so I am sharing this script if anyone needs it.

Hope this helps :)
