var Light = function () {
  this.turnOn = function () { console.log ('turn on'); };
  this.turnOff = function () { console.log ('turn off'); };
};

var light = new Light();
light.turnOn();
light.turnOff();

