package test;

public class Animal {

	int bodyTemp;
	String name;
	String sound;

	public Animal(int bodyTemp, String name, String sound) {
		super();
		this.bodyTemp = bodyTemp;
		this.name = name;
		this.sound = sound;
	}

	public int getBodyTemp() {
		return bodyTemp;
	}

	public void setBodyTemp(int bodyTemp) {
		this.bodyTemp = bodyTemp;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getSound() {
		return sound;
	}

	public void setSound(String sound) {
		this.sound = sound;
	}

}
