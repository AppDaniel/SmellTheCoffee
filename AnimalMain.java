package test;

public class AnimalMain {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Animal snake= new Snake(9, "BrownSnake", "Ziizzzziizz", 13.7, 3);
		System.out.println(snake.toString());
		
		Animal human=new Human(36,"Daniel","YAAAAY" , 2,"blue" , "Sweden");
		System.out.println(human.toString());
		
		Animal dog=new Dog(28, "Hundfan", "woof", 3, "brown", "yellow");
		System.out.println(dog.toString());
		
		Animal cats=new Cats(29, "Siri", "meeeooow", 4, null);
		System.out.println(cats.toString());
		
//		Animal whale=new Whale();
		

	}

}
