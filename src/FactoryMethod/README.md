## Factory Method

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño creacional que proporciona una interfaz para crear objetos en una superclase, mientras permite a las subclases alterar el tipo de objetos que se crearán.

#### Cómo implementarlo
1. Haz que todos los productos sigan la misma interfaz. Esta interfaz deberá declarar métodos que tengan sentido en todos los productos.
2. Añade un patrón Factory Method vacío dentro de la clase creadora. El tipo de retorno del método deberá coincidir con la interfaz común de los productos.
3. Encuentra todas las referencias a constructores de producto en el código de la clase creadora. Una a una, sustitúyelas por invocaciones al Factory Method, mientras extraes el código de creación de productos para colocarlo dentro del Factory Method.
4. Ahora, crea un grupo de subclases creadoras para cada tipo de producto enumerado en el Factory Method. Sobrescribe el Factory Method en las subclases y extrae las partes adecuadas de código constructor del método base.
5. Si hay demasiados tipos de producto y no tiene sentido crear subclases para todos ellos, puedes reutilizar el parámetro de control de la clase base en las subclases.
6. Si, tras todas las extracciones, el Factory Method base queda vacío, puedes hacerlo abstracto. Si queda algo dentro, puedes convertirlo en un comportamiento por defecto del método.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a creational design pattern that provides an interface for creating objects in a superclass, while allowing subclasses to alter the type of objects to be created.

#### How to implement it
1. Make all products follow the same interface. This interface should declare methods that make sense in all products.
2. Add an empty Factory Method pattern inside the creator class. The return type of the method must match the common interface of the products.
3. Find all references to product constructors in the creator class code. One by one, replace them with invocations to the Factory Method, while extracting the product creation code to place it inside the Factory Method.
4. Now, create a group of creator subclasses for each product type listed in the Factory Method. Override the Factory Method in the subclasses and extract the appropriate pieces of constructor code from the base method.
5. If there are too many product types, and it doesn't make sense to subclass all of them, you can reuse the control parameter from the base class in the subclasses.
6. If, after all the extractions, the base Factory Method is empty, you can make it abstract. If there is something left inside, you can make it a default behavior of the method.
