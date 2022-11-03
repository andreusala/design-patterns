## Abstract Method

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño creacional que nos permite producir familias de objetos relacionados sin especificar sus clases concretas.

#### Cómo implementarlo
1. Mapea una matriz de distintos tipos de productos frente a variantes de dichos productos.
2. Declara interfaces abstractas de producto para todos los tipos de productos. Después haz que todas las clases concretas de productos implementen esas interfaces.
3. Declara la interfaz de la fábrica abstracta con un grupo de métodos de creación para todos los productos abstractos.
4. Implementa un grupo de clases concretas de fábrica, una por cada variante de producto.
5. Crea un código de inicialización de la fábrica en algún punto de la aplicación. Deberá instanciar una de las clases concretas de la fábrica, dependiendo de la configuración de la aplicación o del entorno actual. Pasa este objeto de fábrica a todas las clases que construyen productos.
6. Explora el código y encuentra todas las llamadas directas a constructores de producto. Sustitúyelas por llamadas al método de creación adecuado dentro del objeto de fábrica.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
Is a creational design pattern that allows us to produce families of related objects without specifying their concrete classes.

#### How to implement it
1. Map a matrix of different types of products against variants of those products.
2. Declare abstract product interfaces for all product types. Then make all concrete product classes implement those interfaces.
3. Declare the abstract factory interface with a set of create methods for all abstract products.
4. Implement a group of concrete factory classes, one for each product variant.
5. Create a factory initialization code at some point in the application. must instantiate one of the concrete classes from the factory, depending on the current environment or application configuration. Pass this factory object to all classes that build products.
6. Explore the code and find all the direct calls to product constructors. Replace them with calls to the appropriate create method within the factory object.
