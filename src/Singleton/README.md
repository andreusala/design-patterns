## Singleton

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño creacional que nos permite asegurarnos de que una clase tenga una única instancia, a la vez que proporciona un punto de acceso global a dicha instancia.

#### Cómo implementarlo
1. Añade un campo estático privado a la clase para almacenar la instancia Singleton.
2. Declara un método de creación estático público para obtener la instancia Singleton.
3. Implementa una inicialización diferida dentro del método estático. Debe crear un nuevo objeto en su primera llamada y colocarlo dentro del campo estático. El método deberá devolver siempre esa instancia en todas las llamadas siguientes.
4. Declara el constructor de clase como privado. El método estático de la clase seguirá siendo capaz de invocar al constructor, pero no a los otros objetos.
5. Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia Singleton por llamadas a su método de creación estático.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a creational design pattern that allows us to ensure that a class has a single instance, while providing a global access point to that instance.

#### How to implement it
1. Add a private static field to the class to store the Singleton instance.
2. Declare a public static create method to get the Singleton instance.
3. Implement lazy initialization inside the static method. You need to create a new object on your first call and place it inside the static field. The method should always return that instance on all subsequent calls.
4. Declare the class constructor as private. The static method of the class will still be able to call the constructor, but not the other objects.
5. Go through the client code and replace all direct calls to the Singleton instance's constructor with calls to its static create method.