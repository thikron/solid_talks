
public class GraphicEditor {
	
	public void drawShape(Shape s) {
		if (s.m_type == 1) {
			drawRectangle(s);
		} else if (s.m_type == 2) {
			drawCircle(s);
		}
	}
	
	public void drawCircle(Shape circle) {/*...*/}
	
	public void drawRectangle(Shape rectangle) {/*...*/}
}

class Shape {
	int m_type;
}

class Rectangle extends Shape {
	Rectangle() {
		super.m_type = 1;
	}
}

class Circle extends Shape {
	Circle() {
		super.m_type = 2;
	}
}
