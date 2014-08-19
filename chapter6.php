<html>
	<head>
		<?php require('parts/links.php'); ?>
		<?php
			$chapter = 6;
		?>
		<title>
			PHP Chapter <?php echo $chapter; ?>
		</title>
		<style>
			em{
				color:red;
			}
			code{
				color:green;
			}
		</style>
	</head>
	<body>

		<div class="ui segment tertiary inverted basic" style="margin:0px;">
			<h2 class="ui header">
			  <i class="home circular blue inverted icon"></i>
			  <div class="content">
			    PHP Testing
			    <div class="sub header">This is Jay's notes,testing of PHP,exercises and on..</div>
			  </div>
			</h2>
		</div>
		<div class="ui segment center aligned basic"  style="margin:0px;">
			Chapters<br>
			<?php require('parts/chapterstab.php'); ?>	
		</div>
		
		
		<div class="ui page grid">
			<div class="sixteen wide column">

				<div class="ui segment">
					<h3 class="header">Chapter 6</h3>
					<div class="ui list">
						
						<div class="item">
							<div class="header">OOP</div>
							An <strong>object</strong> is an instance (or occurrence) of a class. The data associated with an object are called its <strong>properties</strong>.  The functions associated
							with an object are called its <strong>methods </strong>. <br>
							<p>Debugging and maintenance of programs is much easier if you use encapsulation. This
							is the idea that a class provides certain methods (the interface) to the code that uses its
							objects, so the outside code does not directly access the data structures of those objects.
							Debugging is thus easier because you know where to look for bugs—the only code that
							changes an object's data structures is within the class and maintenance is easier be-
							cause you can swap out implementations of a class without changing the code that uses
							the class, as long as you maintain the same interface.</p>
							<p>Any nontrivial object-oriented design probably involves inheritance. This is a way of
							defining a new class by saying that it’s like an existing class, but with certain new or
							changed properties and methods. The old class is called the superclass (or parent or
							base class), and the new class is called the subclass (or derived class).</p>
 							<div class="ui horizontal divider">
								<i class="circular browser icon"></i>
							</div>
 							<code>
 								class Person<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;public $name = '';<br>
								&nbsp;&nbsp;&nbsp;&nbsp;function getName()<br>
								{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;return $this->name;<br>
								}<br>

								&nbsp;&nbsp;&nbsp;&nbsp;function setName($newName)<br>
								&nbsp;&nbsp;&nbsp;&nbsp;{<br>
								&nbsp;&nbsp;&nbsp;&nbsp;$this->name = $newName;<br>
								&nbsp;&nbsp;&nbsp;&nbsp;}<br>

								}<br>
								$obj = new Person;<br>
								echo $obj->name ."&lt;hr&gt;";<br>
								$obj->setName('JAY');<br>
								echo $obj->name;<br>
								$obj2 = new Person;<br>
								echo $obj2->name;<br>
							</code>
							<div class="header">Method</div>
							A method is a function defined inside a class. Although PHP imposes no special re-
							strictions, most methods act only on data within the object in which the method resides.
							Method names beginning with two underscores (__) may be used in the future by PHP
							(and are currently used for the object serialization methods __sleep() and
							__wakeup(), described later in this chapter, among others), so it’s recommended that
							you do not begin your method names with this sequence. <br>
							A static method is one that is called on a class, not on an object. Such methods cannot
							access properties. The name of a static method is the class name followed by two colons
							and the function name. <br>
							<div class="header">Declaring Properties</div>
							You can assign default values to properties, but those default values must be simple constants<br>
							<code>
								public $name = "J Doe";// works<br>
								public $age = 0;// works<br>
								public $day = 60 * 60 * 24; // doesn't work<br>
							</code>
							Using access modifiers, you can change the visibility of properties. Properties that are
							accessible outside the object’s scope should be declared public; properties on an in-
							stance that can only be accessed by methods within the same class should be declared
							private. Finally, properties declared as protected can only be accessed by the object’s
							class methods and the class methods of classes inheriting from the class. <br>

							<div class="header">Declaring Constants</div>
							Like global constants, assigned through the define() function, PHP provides a way to
							assign constants within a class. Like static properties, constants can be accessed directly
							through the class or within object methods using the self notation.Once a constant
							is defined, its value cannot be changed <br>
							<code>
								class PaymentMethod <br>
								{ <br>
								const TYPE_CREDITCARD = 0; <br>
								const TYPE_CASH = 1; <br>
								} <br>
								echo PaymentMethod::TYPE_CREDITCARD; <br>
								//output is 0 <br>
							</code>
							<div class="header">Inheritance</div>
							To inherit the properties and methods from another class, use the extends keyword in
							the class definition, followed by the name of the base class<br>
							<div class="header">Interfaces</div>
							Interfaces provide a way for defining contracts to which a class adheres; the interface
							provides method prototypes and constants, and any class that implements the interface
							must provide implementations for all methods in the interface.<br>
							<div class="header">Traits</div>
							Traits provide a mechanism for reusing code outside of a class hierarchy. Traits allow
							you to share functionality across different classes that don’t (and shouldn’t) share a
							common ancestor in a class hierarchy. <br>
							<div class="header">Abstract Method</div>
							PHP also provides a mechanism for declaring that certain methods on the class must
							be implemented by subclasses—the implementation of those methods is not defined
							in the parent class. In these cases, you provide an abstract method; in addition, if a class
							has any methods in it defined as abstract, you must also declare the class as an abstract class <br>
							<div class="header">Constructors</div>
							You may also provide a list of arguments following the class name when instantiating
							an object <br>
							<code>
								$person = new Person("Fred", 35);<br>
							</code>
							These arguments are passed to the class’s constructor, a special function that initializes
							the properties of the class.<br>
							A constructor is a function in the class called __construct(). <br>
							PHP does not provide for an automatic chain of constructors; that is, if you instantiate
							an object of a derived class, only the constructor in the derived class is automatically
							called. For the constructor of the parent class to be called, the constructor in the derived
							class must explicitly call the constructor. <br>

							<code>
								class Person<br>
								{<br>
								public $name, $address, $age;<br>
								}<br>
								function __construct($name, $address, $age)<br>
								{<br>
								$this->name = $name;<br>
								$this->address = $address;<br>
								$this->age = $age;<br>
								}<br>
								class Employee extends Person<br>
								{<br>
								public $position, $salary;<br>
								function __construct($name, $address, $age, $position, $salary)<br>
								{<br>
								parent::__construct($name, $address, $age);<br>
								$this->position = $position;<br>
								$this->salary = $salary;<br>
								}<br>
								}<br>
							</code> <br>
							<div class="header">Destructors</div>
							When an object is destroyed, such as when the last reference to an object is removed
							or the end of the script is reached, its destructor is called. Because PHP automatically
							cleans up all resources when they fall out of scope and at the end of a script’s execution,
							their application is limited. The destructor is a method called __destruct() <br>
							<code>
								class Building <br>
								{<br>
								function __destruct()<br>
								{<br>
								echo "A Building is being destroyed!";<br>
								}<br>	
								}<br>
							</code>
							<div class="header">Introspection</div>
							Introspection is the ability of a program to examine an object’s characteristics, such as
							its name, parent class (if any), properties, and methods. With introspection, you can
							write code that operates on any class or object. <br>
							<div class="header">Serialization</div>
							Serializing an object means converting it to a bytestream representation that can be
							stored in a file. This is useful for persistent data; for example, PHP sessions automati-
							cally save and restore objects.<br>
							<div class="ui horizontal divider">
								The<i class="frown icon"></i>End
							</div>

						</div>
					</div>
					
				</div>
			</div>


		</div>
		<div class="ui segment secondary tertiary center aligned">
					
			<div class="ui icon header black">
				<i class="circular question inverted icon"></i>	&copy; Jay 2014
				<div class="sub header">Have any questions? Contact Me</div>
			</div>
	
		</div>

	
	</body>




</html>
