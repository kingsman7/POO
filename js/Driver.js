class Driver extends Account {
  constructor(licenseCar, user, license){
    super(name, document)
    this.user = user
    this.license = license
    this.licenseCar = licenseCar
  }

  printDataDriver(){
    console.log(`Driver: ${this.user.name} | Car lisence: ${this.licenseCar}
    Driver License: ${this.license}`)
  }
}