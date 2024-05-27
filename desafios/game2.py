import random

def str_xor(secret, key):
    #extend key to secret length
    new_key = key
    i = 0
    while len(new_key) < len(secret):
        new_key = new_key + key[i]
        i = (i + 1) % len(key)        
    return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])



print('H1_5TR4NG3R{' + chr(0x25) + chr(0x64) + chr(0x97) + chr(0x66) + chr(0x99) + chr(0x61) + chr(0x36) + chr(0x37) + chr(0x32) + '}')
