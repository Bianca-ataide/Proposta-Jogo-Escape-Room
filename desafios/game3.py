
import random

def str_xor(secret, key):
    new_key = key
    i = 0
while len(new_key) < len(secret):
new_key = new_key + key[i]
        i = (i + 1) % len(key)        
    return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


flag_enc = chr(0x32) + chr(0x27) + chr(0x08) + chr(0x09) + chr(0x25) + chr(0x21) + chr(0x23) + chr(0x35) + chr(0x68) + chr(0x18) + chr(0x31) + chr(0x46) + chr(0x09) + chr(0x5f) + chr(0x1f) + chr(0x10) + chr(0x3b) + chr(0x1b) + chr(0x55) + chr(0x1a) + chr(0x34) + chr(0x5d) + chr(0x51) + chr(0x40) + chr(0x54) + chr(0x09) + chr(0x05) + chr(0x04) + chr(0x57) + chr(0x1b) + chr(0x11) + chr(0x31) + chr(0x0e) + chr(0x51) + chr(0x5c) + chr(0x44) + chr(0x51) + chr(0x0a) + chr(0x5b) + chr(0x5a) + chr(0x19)

  
      flag = str_xor(flag_enc, 'enkidu')

      if flag == "":
  print('Houve um problema.')
else:
  print('Correto! Essa é a flag: ' + flag)