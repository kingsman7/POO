class User extends Account{
  String phone;

  public User(String name, String document, String phone){
    super(name, document);
    this.phone = phone;
  }

  void printDataUser() {
    System.out.println("User "+ name + "; Phone: " + phone);
  }
}