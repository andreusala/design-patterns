## Builder

### Spanish <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/es.svg" width="22" />
Es un patrón de diseño creacional que nos permite construir objetos complejos paso a paso. El patrón nos permite producir distintos tipos y representaciones de un objeto empleando el mismo código de construcción.

#### Cómo implementarlo
1. Asegúrate de poder definir claramente los pasos comunes de construcción para todas las representaciones disponibles del producto. De lo contrario, no podrás proceder a implementar el patrón.
2. Declara estos pasos en la interfaz constructora base.
3. Crea una clase constructora concreta para cada una de las representaciones de producto e implementa sus pasos de construcción.   No olvides implementar un método para extraer el resulta do de la construcción. La razón por la que este método no se puede declarar dentro de la interfaz constructora es que varios constructores pueden construir productos sin una interfaz común. Por lo tanto, no sabemos cuál será el tipo de retorno para un método como éste. No obstante, si trabajas con productos de una única jerarquía, el método de extracción puede añadirse sin problemas a la interfaz base.
4. Piensa en crear una clase directora. Puede encapsular varias formas de construir un producto utilizando el mismo objeto constructor.
5. El código cliente crea tanto el objeto constructor como el director. Antes de que empiece la construcción, el cliente debe pasar un objeto constructor al director. Normalmente, el cliente hace esto sólo una vez, mediante los parámetros del constructor del director. El director utiliza el objeto constructor para el resto de la construcción. Existe una manera alternativa, en la que el objeto constructor se pasa directamente al método de construcción del director.
6. El resultado de la construcción tan solo se puede obtener directamente del director si todos los productos siguen la misma interfaz. De lo contrario, el cliente deberá extraer el resultado del constructor.


---


### English <img src="https://cdn.staticaly.com/gh/hjnilsson/country-flags/master/svg/gb.svg" width="22" />
It is a creational design pattern that allows us to build complex objects step by step. The pattern allows us to produce different types and representations of an object using the same construction code.

#### How to implement it
1. Make sure you can clearly define the common build steps for all available representations of the product. Otherwise, you will not be able to proceed to implement the pattern.
2. Declare these steps in the base constructor interface.
3. Create a concrete constructor class for each of the product representations and implement its construction steps. Don't forget to implement a method to extract the result of the build. The reason this method cannot be declared inside the constructor interface is that multiple constructors can build products without a common interface. So we don't know what the return type will be for a method like this. However, if you work with products from a single hierarchy, the pull method can be added to the base interface without any problem.
4. Think about creating a director class. You can encapsulate multiple ways to build a product using the same constructor object.
5. The client code creates both the constructor and manager objects. Before construction begins, the client must pass a constructor object to the director. Normally, the client does this only once, using the director's constructor parameters. The director uses the constructor object for the rest of the construction. There is an alternative way, where the constructor object is passed directly to the director's build method.
6. The build result can only be obtained directly from the director if all products follow the same interface. Otherwise, the client will need to extract the result from the constructor.
