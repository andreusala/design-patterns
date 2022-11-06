## Decorator "Wrapper"

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño estructural que te permite funcionalidades a objetos colocando estos bojetos dentro de objetos encapsuladores especiales que contienen estas funcionalidades.

#### Cómo implementarlo
1. Asegúrate de que tu dominio de negocio puede representarse como un componente primario con varias capas opcionales encima.
2. Decide qué métodos son comunes al componente primario y las capas opcionales. Crea una interfaz de componente y declara esos métodos en ella.
3. Crea una clase concreta de componente y define en ella el comportamiento base.
4. Crea una clase base decoradora. Debe tener un campo para almacenar una referencia a un objeto envuelto. El campo debe declararse con el tipo de interfaz de componente para permitir la vinculación a componentes concretos, así como a decoradores. La clase decoradora base debe delegar todas las operaciones al objeto envuelto.
5. Asegúrate de que todas las clases implementan la interfaz de componente.
6. Crea decoradores concretos extendiéndolos a partir de la decoradora base. Un decorador concreto debe ejecutar su comportamiento antes o después de la llamada al método padre (que siempre delega al objeto envuelto).
7. El código cliente debe ser responsable de crear decoradores y componerlos del modo que el cliente necesite.

---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a structural design pattern that allows to add features to objects placing these objects into special encapsulators which contains their features. 

#### How to implement it
1. Make sure your business domain can be represented as a primary component with multiple optional layers on top.
2. Decide which methods are common to the primary component and the optional layers. Create a component interface and declare those methods in it.
3. Create a concrete component class and define the base behavior in it.
4. Create a decorator base class. You must have a field to store a reference to a wrapped object. The field must be declared with the component interface type to allow binding to specific components as well as decorators. The base decorator class must delegate all operations to the wrapped object.
5. Make sure all classes implement the component interface.
6. Create concrete decorators by extending them from the base decorator. A particular decorator must execute its behavior before or after the parent method call (which always delegates to the wrapped object).
7. Client code should be responsible for creating decorators and composing them the way the client needs.
