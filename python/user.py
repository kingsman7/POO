from account import Account

class User(Account):
  user = Account("","")
  def __init__(self, user):
    super().__init__(user)
    self.user = user
