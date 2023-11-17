dias = int(input())
ano = dias//365
mes = (dias - 365*ano)//30
dia = dias - 365*ano - mes*30
print("%.0f ano (s)"%(ano))
print("%.0f mes (es)"%(mes))
print("%.0f dias (s)"%(dia))
