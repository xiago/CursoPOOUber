class Car{
    private Integer id;
    private String license;
    private Account driver;
    private Integer passengenger;

    //Metodo constructor
    public Car(String license, Account driver) //Dentro del parentesís se colocan los parametros 
    {              //que queremos que sean obligatorios para que se cree un tipo de objeto tipo car.
        this.license = license;
        this.driver = driver;
    }
    //metodo
    void printDataCar(){
        System.out.println("Car License: " + license + "Driver: " + driver.name);
    }

    public Integer getpassengenger()
    {
        return passengenger;
    }

    public void setPassengenger(Integer passengenger)
    {
        this.passengenger = passengenger;
    }
}