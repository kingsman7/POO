class Main {
  public static void main(String[] args) {
    Car car = new Car("AMQ123", new Account("Angel Barrios", "ca182983"));
    car.passenger = 4;
    car.printDataCar();
  }
}