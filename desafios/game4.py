
import random
import sys

def str_xor(secret, key):
    new_key = key
    i = 0
    while len(new_key) < len(secret):
        new_key = new_key + key[i]
        i = (i + 1) % len(key)        
    return "".join([chr(ord(secret_c) ^ ord(new_key_c)) for (secret_c,new_key_c) in zip(secret,new_key)])


flag_enc = chr(0x12) + chr(0x17) + chr(0x08) + chr(0x11) + chr(0x01) + chr(0x96) + chr(0x42) + chr(0x15) + chr(0x5c) + chr(0x01) + chr(0x57) + chr(0x2a) + chr(0x17) + chr(0x5e) + chr(0x5f) + chr(0x0d) + chr(0x19) + chr(0x39) + chr(0x5b) + chr(0x5e) + chr(0x36) + chr(0x53) + chr(0x07) + chr(0x51) + chr(0x18) + chr(0x58) + chr(0x05) + chr(0x57) + chr(0x11) + chr(0x3a) + chr(0x0f) + chr(0x0e) + chr(0x59) + chr(0x06) + chr(0x4d) + chr(0x55) + chr(0x0c) + chr(0x0f) + chr(0x14)


def print_flag():
  flag = str_xor(flag_enc, 'enkidu')
  print(flag)


def print_encouragement():
  encouragements = ['Você consegue!', 'Continue!', 
                    'Olhe o quão longe já chegou!']
  choice = random.choice(range(0, len(encouragements)))
  print('\n-----------------------------------------------------')
  print(encouragements[choice])
  print('-----------------------------------------------------\n\n')



def main():

  print(
'''
|￣￣￣￣￣￣￣￣|
|  Olá!         |
|               |
|               |
|               |
|＿＿＿＿＿＿＿＿| 
 ∧＿∧   ||
(   ´ω` )  ||
/ 　　づ
'''
  )
  print('Bem-vindo ao jogo!\n\n')
  
  while True:
    print('a) Monstrar encorajamento.')
    print('b) Mostrar flag.')
    print('c) Sair\n')
    choice = input('Escolha uma opção: (a/b/c) ')
      
    if choice == 'a':
      print_encouragement()
      
    elif choice == 'b':
      print('\nOpa! Parece que algo está faltando!\n\n')
      
    elif choice == 'c':
      sys.exit(0)
    
    else:
      print('\nOpção inválida "' + choice + '", selecione uma opção "a", "b" ou "c"\n\n')



if __name__ == "__main__":
  main()

