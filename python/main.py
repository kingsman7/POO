from  car import Car
from account import Account

if __name__=="__main__":

  car = Car("QWERS2", Account("Angel Barrios","18410530"))
  print(vars(car))
  print(vars(car.driver))