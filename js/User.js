class User extends Account {
  constructor(user, phone){
    super(name, document)
    this.user = user
    this.phone = phone
  }

  printDataUser(){
    console.log(`User: ${this.user.name} | Phone: ${this.phone}`)
  }
}