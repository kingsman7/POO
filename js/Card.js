class Card extends Payment{
  constructor(id, number, cvv, name, date){
    super(id)
    this.number = number
    this.cvv = cvv;
    this.name = name
    this.date = date
  }
}