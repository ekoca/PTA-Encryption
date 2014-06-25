RNT PTA ENCRYPTION 
===

Oracle did not provide me any documentation and no sample codes on their support website. I was asked to resolve the issue and it was little bit pain due to lack of documentations. This is the reason why I checked in my solution into github.

Here is all the details that I got from Oracle RNT:

We can enable “ignore password” settings. If it is enabled, there is one mandatory step which is encrypting SSO string.
In this URL, you need to involve your developer to change the SSO string it is generated.

Currently, it is only base64 encoded; By enable “ignore password”, the string has to be base64 encode then encrypted.

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

I never use Oracle RNT admin panel before, I had to figure how to set up a secret key and enbale the "ignore password" option in the RNT admin panel... You may ask RNT support to do this but they will charce you if you don't figure out. After this, I was able to start coding to make this work! See the rnt.php...

Hope this helps :)
