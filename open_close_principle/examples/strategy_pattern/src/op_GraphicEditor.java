
public class op_GraphicEditor {
	public void drawShape(Shape shape) {
		shape.draw();
	}
}

public abstract class Shape {
	abstract void draw();
}

class Rectangle extends Shape {
	public void draw() {
		// draw the rectangle
	}
}

class Circle extends Shape {
	public void draw() {
		// draw the circle
	}
}