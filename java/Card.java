import java.sql.Date;

class Card extends Payment{
  Integer numbre;
  String name;
  Integer cvv;
  Date date;

  public Card(Integer id, Integer number, String name, Integer cvv, Date date){
    super(id);
    this.numbre = number;
    this.cvv = cvv;
    this.name = name;
    this.date = date;
  }
}