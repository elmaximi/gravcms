---
title: 'Tarea | Frameworks para juegos'
media_order: 'pixijs.png,phaserlogo.jpg,melonjs.jpg,kiwijs.jpg,Gdevelop.png,babylonjs.png'
---

### ¿Qué es un framework?<br>
Un framework es una estructura en capas la cual inidica qué tipo de programas pueden construirse y de qué manera se interrelacionan. Además, incluyen programas reales, interfaces de programación especificas las cuales ofrecen herramientas que facilitan su uso.<br><br> 
Ahora bien, existe una gran variedad de frameworks que sirven para desarrollar juegos, entre ellos están:<br><br>
### •	PixiJS<br>
<p>Es un framework renderizado 2D muy potente, esto quiere decir que ayuda a mostrar y animar gráficos interactivos, facilitando la creación de juegos en javascript y HTML5 sin tener que acceder directamente a la API de WebGL. <br> Pixi js también hace uso del elemento HTML5 canvas para la creación de gráficos interactivos.</p>
![](pixijs.png?resize=400,200)

###     •	Phaser<br>
<p>Phaser es un framework de código abierto para la creación de videojuegos, usa una versión optimizada y más potente de Pixijs para el renderizado para WebGL y Canvas y es soportado por navegadores en sus versiones de ordenadores y móviles. Soporta tanto javascript como typescript.</p>
<p>Es necesario tener corriendo un servidor para poder hacer funcionar nuestro juego. Esto es debido a que cuando solicitas algún servicio en la web estamos usando el protocolo http y el nivel de seguridad del servidor es suficiente para garantizar que accedes a los ficheros que tengas acceso, mientras que si lo pones a funcionar en local se usa el protocolo file:// , al intentar probar el juego usando dicho protocolo los navegadores bloquean algunas de las características de acceso y carga de los recursos al utilizar el framework, por motivos de seguridad establecidos en dicho protocolo, para no darle a javascript la habilidad de cargar cualquier archivo de nuestros sistema de archivo.</p>
![](phaserlogo.jpg?resize=400,200)
<br>
### • MelonJS <br>
<p>Es un framework para sprites 2D, está dividida en clases bien diferenciadas y en los directorios correspondientes encontramos que podemos dejar backgrounds, sprites de jugadores con movimiento, música y efectos sonoros.</p>
<p>Presenta una serie de características, entre ellas:</p>
<p>
    <dd>
        • es muy ligero<br> 
        • compatible con todos los navegadores populares<br> 
        • posee librería independiente             
        • animaciones y transiciones <br> 
        • múltiples pistas de audio<br> 
        • loader customizable<br> 
    </dd>
    </p>
![](melonjs.jpg?resize=400,200)
<br>    
### • KiwiJS <br>
<p>Es un framework de Juegos en HTML5 de Código Abierto. Tiene una interfaz muy amigable, además trabaja con canvas y webgl, tambiém se puede añadir imágenes, audio y recursos de datos. Incluye cargadores de recursos, y es de fácil acceso a la administración de sus archivos.</p>
![](kiwijs.jpg?resize=400,200)
<br> 
###  • GDevelop<br>
<p>Es un frameworkopen source para crear juegos en HTML5 el cual no requieren grandes habilidades de programación. Lo que hace a GDevelop único y tan fácil de usar son los eventos. Los eventos son una forma poderosa de expresar la lógica de tu juego</p>
<p>Además, también incluye una serie de funciones para agilizar el proceso de desarrollo, consta de búsqueda de rutas para objetos, eventos para controlar el juego con ratón o pantalla táctil e incluso un sistema de colisiones para elementos 3D, aunque de entrada el entorno y sus funcionalidades están pensadas para la creación de juegos bidimensionales y manejo de sprites planos.</p>
![](Gdevelop.png?resize=400,200)
<br>
### • BabylonJS<br>
<p>Es un framework 3D basado en WebGL que se centra principalmente en el desarrollo de juegos y la facilidad de uso. Tiene las herramientas para crear, mostrar y texturizar mallas en el espacio, y agregar fuentes de luz y cámaras.</p>
<p>Tiene un sistema de plug-in de motor de física, soporte de audio nativo, un administrador de acciones basado en entradas de usuario y mucho más.</p>
![](babylonjs.png?resize=400,200)