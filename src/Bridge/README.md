## Bridge

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño estructural que te permite dividir una clase grande, o un grupo de clases estrechamente relacionadas, en dos jerarquías separadas (abstracción e implementación) que pueden desarrollarse independimiente la una de la otra.

#### Cómo implementarlo
1. Identifica las dimensiones ortogonales de tus clases. Estos conceptos independientes pueden ser: abstracción/plataforma, dominio/infraestructura, front end/back end, o interfaz/implementación.
2. Comprueba qué operaciones necesita el cliente y defínelas en la clase base de abstracción.
3. Determina las operaciones disponibles en todas las plataformas. Declara aquellas que necesite la abstracción en la interfaz general de implementación.
4. Crea clases concretas de implementación para todas las plataformas de tu dominio, pero asegúrate de que todas sigan la interfaz de implementación.
5. Dentro de la clase de abstracción añade un campo de referencia para el tipo de implementación. La abstracción delega la mayor parte del trabajo al objeto de la implementación referenciado en ese campo.
6. Si tienes muchas variantes de lógica de alto nivel, crea abstracciones refinadas para cada variante extendiendo la clase base de abstracción.
7. El código cliente debe pasar un objeto de implementación al constructor de la abstracción para asociar el uno con el otro. Después, el cliente puede ignorar la implementación y trabajar solo con el objeto de la abstracción.

---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a structural design pattern that allows you to divide a large class, or a group of closely related classes, into two separate hierarchies (abstraction and implementation) that can be developed independently of one another.

#### How to implement it
1. Identify the orthogonal dimensions of your classes. These independent concepts can be: abstraction/platform, domain/infrastructure, front-end/back-end, or interface/implementation.
2. Check what operations the client needs and define them in the abstraction base class.
3. Determine the trades available on all platforms. Declare those that need the abstraction in the general implementation interface.
4. Create concrete implementation classes for all platforms in your domain, but make sure they all follow the implementation interface.
5. Inside the abstraction class add a reference field for the implementation type. The abstraction delegates most of the work to the implementation object referenced in that field.
6. If you have many variants of high-level logic, create fine-grained abstractions for each variant by extending the abstraction base class.
7. The client code must pass an implementation object to the abstraction's constructor to associate with each other. Then the client can ignore the implementation and work only with the object of the abstraction.