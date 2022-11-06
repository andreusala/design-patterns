## Composite

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño estructural que te permite componer objetos en estructuras de árbol y trabajar con esas estructuras como si fueran objectos individuales.

#### Cómo implementarlo
1. Asegúrate de que el modelo central de tu aplicación pueda representarse como una estructura de árbol. Intenta dividirlo en elementos simples y contenedores. Recuerda que los contenedores deben ser capaces de contener tanto elementos simples como otros contenedores.
2. Declara la interfaz componente con una lista de métodos que tengan sentido para componentes simples y complejos.
3. Crea una clase hoja para representar elementos simples. Un programa puede tener varias clases hoja diferentes.
4. Crea una clase contenedora para representar elementos complejos. Incluye un campo matriz en esta clase para almacenar referencias a subelementos. La matriz debe poder almacenar hojas y contenedores, así que asegúrate de declararla con el tipo de la interfaz componente. Al implementar los métodos de la interfaz componente, recuerda que un contenedor debe delegar la mayor parte del trabajo a los subelementos.
5. Por último, define los métodos para añadir y eliminar elementos hijos dentro del contenedor. Ten en cuenta que estas operaciones se pueden declarar en la interfaz componente. Esto violaría el Principio de segregación de la interfaz porque los métodos de la clase hoja estarían vacíos. No obstante, el cliente podrá tratar a todos los elementos de la misma manera, incluso al componer el árbol.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a structural design pattern that allows to composite objects in tree structures and work with them like they will be individual objects. 

#### How to implement it
1. Make sure that the core model of your application can be represented as a tree structure. Try breaking it down into simple elements and containers. Remember that containers must be able to contain both simple elements and other containers.
2. Declare interface components with a list of methods that make sense for simple and complex components.
3. Create a leaf class to represent simple elements. A program can have several different leaf classes.
4. Create a wrapper class to represent complex elements. Include an array field in this class to store references to subelements. The array must be able to store leaves and containers, so be sure to declare it with the type of the interface components. When implementing the component interface methods, remember that a container should delegate most of the work to subelements.
5. Finally, define the methods to add and remove child elements within the container. Note that these operations can be declared in the interface. This would violate the Interface Segregation Principle because the methods of the leaf class would be empty. However, the client will be able to treat all the elements in the same way, even when composing the tree.
