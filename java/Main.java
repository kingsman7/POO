class Main {
  public static void main(String[] args) {
    /* Car car = new Car("AMQ123", new Account("Angel Barrios", "ca182983"));
    car.passenger = 4;
    car.printDataCar();
    
    User user1 = new User("User", "document", "04144105263");
    user1.printDataUser();

    Driver driver1 = new Driver("Driver", "XCNW7231", "ASKDJH723");
    driver1.printDataDriver();
 */
    UberX uberx = new UberX("AMQ123", new Account("Angel Barrios", "ca182983"), "Chevrolet", "Sonic");
    uberx.setPassenger(4);
    uberx.printDataCar();
  }
}