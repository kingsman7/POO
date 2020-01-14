from account import Account

class Driver(Account):
  driver = Account("","")
  def __init__(self, driver):
    super().__init__(driver)
    self.driver = driver
