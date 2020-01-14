from payment import Payment

class Card(Payment):
  name = str
  number = int
  cvv = int
  date = int

  def __init__(self, id, name, number, cvv, date):
    super().__init__(id)
    self.cvv = cvv
    self.date = date
    self.number = number
    self.name = name