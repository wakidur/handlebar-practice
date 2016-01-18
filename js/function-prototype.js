/*
Closures:
A closure is an inner funcion that can access the outer functions' variables. Just as we mentioned earlier in this chapter, a variable has a global scope or a function scope. The closure, being within a function, can access the outer functions' paramenters. 
*/
function calculateArea(height, width, shape) {
	var pi = Math.PI;
	// First Closure
	function getCircleArea() {
		var circleArea = pi * (height * height);
		return circleArea;
	}

	// Second closure
	function getRectangleArea(){
		var area = width * height;
		return area;
	}

	if(shape === 'Circle'){
		return getCircleArea();
	}
	else {
		return getRectangleArea();
	}
}

// Making JavaScript Object-Oriented
var myObject = new Object();
    myObject.id = 100;

// Another common approach to creating an object 
var myObject = {
    id: 100
};
var objectId = myObject.id;

// Defining Constructors
function Message ( subject, recipient, content ) {
	this.subject = subject;
	this.recipient = recipient;
	this.content = content;
}
var myEmail = new Message('JavaScript is cool', 'you@gmail.com', 'Creating objects is simple');

// Creating Methods
function Message ( subject, recipient, content ) {
	this.subject = subject;
	this.recipient = recipient;
	this.content = content;
	// expose the method
	this.showMessage = showMessage;
	function showMessage(){
		console.log('To: ' + recipient + 'subject: ' + subject + 'Message: ' + content);
	}
}
var myEmail = new Message('JavaScript is cool', 'you@gmail.com', 'Creating objects is simple');
myEmail.showMessage();

// JavaScript Prototype
function Message ( subject, recipient, content ) {
	this.subject = subject;
	this.recipient = recipient;
	this.content = content;
}
Message.prototype.show = function() {
	console.log('To: ' + this.recipient + 'Subject: ' + this.subject + 'Message: ' + this.content);
}
var myEmail = new Message('JavaScript is cool', 'you@gmail.com', 'Creating objects is simple');
myEmail.show();
Message.prototype

// Encapsulation
function Message ( subject, recipient, content ) {
	this.subject = subject;
	this.recipient = recipient;
	this.content = content;
}

Message.prototype = {
	constructor: Message,

	sendMessage: function(){
		console.log('Sending message to ' + this.recipient);
	},
	show: function(){
		console.log('To: ' + this.recipient + 'Subject: ' + this.subject + 'Message: ' + this.content);
	}
};

var workMessage = new Message('Work complete', 'boss@mycorp.com', 'My work is done here'); 
var socialMessage = new Message('Time to go out', 'friend@gmail.com', 'Finished work now.'); 
workMessage.send(); 
socialMessage.send();

// Inheritance Using Prototype 
function Animal(name){
	this.name = name; 
}

Animal.prototype.talk = function(){        
	console.log(this.phrase); 
}

function Dog(phrase){        
	this.phrase = phrase; 
} 
Dog.prototype = new Animal(); 
var myDog = new Dog('bark'); 
myDog.talk(); 

Dog.prototype.constructor = Dog; 

function Dog(phrase){         
	this.phrase = phrase;this.constructor('Dog'); 
} 

// Overriding Methods
Dog.prototype.talk = function(){        
	console.log('The dog says');        
	Animal.prototype.talk.call(this); 
} 

Dog.prototype = new Animal(); 
Dog.prototype.constructor = Dog; 
//define the parent property 
Dog.prototype.parent = Animal.prototype; 
Dog.prototype.talk = function(){        
	console.log('The dog says');  
	//use the parent property to invoke the method        
	this.parent.talk.call(this); 
} 

// The Prototype Chain
myDog.toString();

// Conrolling Access to Methods and Properties
function Message  (subject, recipient, content){  

	//private property        
	var privateKey = '11111';    

	//private method        
	function encryptMessage(content){        
		return content || privateKey;        
	}

	this.subject = subject;        
	this.recipient = recipient;        
	this.content = content;   

	//expose the method        
	this.showMessage = showMessage;        
	function showMessage(){                 
		console.log('To:' + recipient + 'Subject: ' + subject + 'Message:' + content);        
	} 

    this.sendMessage = sendMessage;  

    //public method using a private method        
    function sendMessage(){                 
    	console.log(encryptMessage(this.content));        
    }  
}