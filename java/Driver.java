class Driver extends Account{
  String licenseDiver;
  

  public Driver(String licenseDiver, String name, String document){
    super(name, document);
    this.licenseDiver = licenseDiver;
  }

  void printDataDriver() {
    System.out.println("Driver "+ name + "; license: " + licenseDiver);
  }
}