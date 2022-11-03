## Prototype

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño creacional que nos permite copiar objetos existentes sin que el código dependa de sus clases.

#### Cómo implementarlo
1. Crea la interfaz del prototipo y declara el método clonar en ella, o, simplemente, añade el método a todas las clases de una jerarquía de clase existente, si la tienes.
2. Una clase de prototipo debe definir el constructor alternativo que acepta un objeto de dicha clase como argumento. El constructor debe copiar los valores de todos los campos definidos en la clase del objeto que se le pasa a la instancia recién creada. Si deseas cambiar una subclase, debes invocar al constructor padre para permitir que la superclase gestione la clonación de sus campos privados. Si el lenguaje de programación que utilizas no soporta la sobrecarga de métodos, puedes definir un método especial para copiar la información del objeto. El constructor es el lugar más adecuado para hacerlo, porque entrega el objeto resultante justo después de invocar el operador new .
3. Normalmente, el método de clonación consiste en una sola línea que ejecuta un operador new con la versión prototípica del constructor. Observa que todas las clases deben sobreescribir explícitamente el método de clonación y utilizar su propio nombre de clase junto al operador new . De lo contrario, el método de clonación puede producir un objeto a partir de una clase madre.
4. Opcionalmente, puedes crear un registro de prototipos centralizado para almacenar un catálogo de prototipos de uso frecuente. Puedes implementar el registro como una nueva clase de fábrica o colocarlo en la clase base de prototipo con un método estático para buscar el prototipo. Este método debe buscar un prototipo con base en el criterio de búsqueda que el código cliente pase al método. El criterio puede ser una etiqueta tipo string o un grupo complejo de parámetros de búsqueda. Una vez encontrado el prototipo adecuado, el registro deberá clonarlo y devolver la copia al cliente. Por último, sustituye las llamadas directas a los constructores de las subclases por llamadas al método de fábrica del registro de prototipos.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a creational design pattern that allows us to copy existing objects without our code depending on their classes.

#### How to implement it
1. Create the prototype interface and declare the clone method on it, or simply add the method to all classes in an existing class hierarchy, if you have one.
2. A prototype class must define the alternative constructor that accepts an object of that class as an argument. The constructor must copy the values ​​of all fields defined in the class of the object that is passed to the newly created instance. If you want to change a subclass, you must call the parent constructor to let the superclass handle the cloning of its private fields. If the programming language you are using does not support method overloading, you can define a special method to copy the object information. The constructor is the best place to do it, because the delivery of the object results right after calling the new operator.
3. Typically, the clone method consists of a single line that executes a new operator with the prototype version of the constructor. Note that all classes must clearly override the clone method and use their own class name together with the new operator. Otherwise, the clone method can produce an object from a parent class.
4. Optionally, you can create a centralized prototype registry to store a catalog of frequently used prototypes. You can either implement the registry as a new factory class or place it in the prototype base class with a static method to fetch the prototype. This method should search for a prototype based on the search criteria that the client code passes to the method. The criteria can be a string tag or a complex set of search parameters. Once a suitable prototype is found, the registry should clone it and return the copy to the client. Finally, it replaces the direct calls to the constructors of the subclasses with calls to the factory method of the prototype registry.