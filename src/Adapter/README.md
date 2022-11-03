## Adapter

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño estructural que permite la colaboración entre objetos con interfaces incompatibles

#### Cómo implementarlo
1. Asegúrate de que tienes al menos dos clases con interfaces incompatibles:
   - Una útil clase servicio que no puedes cambiar (a menudo de un tercero, heredada o con muchas dependencias existentes).
   - Una o varias clases cliente que se beneficiarían de contar con una clase de servicio.
2. Declara la interfaz con el cliente y describe el modo en que las clases cliente se comunican con la clase de servicio.
3. Crea la clase adaptadora y haz que siga la interfaz con el cliente. Deja todos los métodos vacíos por ahora.
4. Añade un campo a la clase adaptadora para almacenar una referencia al objeto de servicio. La práctica común es inicializar este campo a través del constructor, pero en ocasiones es adecuado pasarlo al adaptador cuando se invocan sus métodos.
5. Uno por uno, implementa todos los métodos de la interfaz con el cliente en la clase adaptadora. La clase adaptadora deberá delegar la mayor parte del trabajo real al objeto de servicio, gestionando tan solo la interfaz o la conversión de formato de los datos.
6. Las clases cliente deberán utilizar la clase adaptadora a través de la interfaz con el cliente. Esto te permitirá cambiar o extender las clases adaptadoras sin afectar al código cliente.

---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a structural design pattern that allows colaboration between objects with incompatible interfaces. 

#### How to implement it
1. Make sure you have at least two classes with incompatible interfaces:
    - A useful service class that you can't change (often from a third party, legacy, or with many existing dependencies).
    - One or several classes of customers that would benefit from having a class of service.
2. Declare the interface to the client and describe how the client classes communicate with the service class.
3. Create the adapter class and make it follow the interface with the client. Leave all methods empty for now.
4. Add a field to the adapter class to store a reference to the service object. Common practice is to initialize this field through the constructor, but it is sometimes appropriate to pass it to the adapter when its methods are called.
5. One by one, implement all the methods of the client interface in the adapter class. The adapter class should delegate most of the actual work to the service object, handling only the interface or data format conversion.
6. Client classes must use the adapter class through the client interface. This will allow you to change or extend the adapter classes without affecting the client code.