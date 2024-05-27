
import random

def str_xor(secret, key):
    new_key = key
    i = 0
    while len(new_key) < len(secret):
        new_key = new_key + key[i]
        i = (i + 1) % len(key)        
    return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


flag_enc = chr(0x15) + chr(0x27) + chr(0x18) + chr(0x96) + chr(0x55) + chr(0x21) + chr(0x23) + chr(0x27) + chr(0x5f) + chr(0x75) + chr(0x98) + chr(0x2a) + chr(0x1c) + chr(0x5e) + chr(0x1e) + chr(0x1b) + chr(0x3b) + chr(0x17) + chr(0x10c) + chr(0x5b) + chr(0x58) + chr(0x91) + chr(0x3b) + chr(0x42) + chr(0x53) + chr(0x5c)+ chr(0x00) + chr(0x13) + chr(0x0d) + chr(0x5e) + chr(0x50) + chr(0x4d)


num = random.choice(range(10,101))

print('Qual o valor de ' + str(num) + ' na base decimal?')

ans = input('Resposta: ')

try:
  ans_num = int(ans, base=2)
  
  if ans_num == num:
    flag = str_xor(flag_enc, 'enkidu')
    print('Correto! Essa é a flag: ' + flag)
  else:
    print(str(ans_num) + ' e ' + str(num) + ' não são iguais.')
  
except ValueError:
  print('A base decimal deve conter apenas 0s e 1s.')

