class Main {

   public static void main(String[] args) {
      System.out.println("Hola, Mundo"); 
      Car car = new Car(); //A partir de ahora el objeto ya tiene vida y ocupa un espacio en memoria.
      car.license = "AMQ123";
      car.driver = "Andres Herrera";
      car.passengenger = 4;
      car.printDataCar();
      


      Car car2 = new Car();
      car2.license = "qwe567";
      car2.driver = "Andrea Herrera";
      car2.passengenger = 3;
      car2.printDataCar();
   }
}