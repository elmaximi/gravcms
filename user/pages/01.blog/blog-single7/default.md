---
title: '• Tarea | Figuras Geométricas'
---

<html lang="en">
    <head>

    </head>
    <body>

        <b><br><br>Ingrese un numero:</b> <input type="text" id="fapellido" onkeyup="myFunction()">
        <p id="nombre" style="color:Tomato;"></p>
		<script>
            function myFunction() {
                //Imprimir figuras de triangulos formados por asteriscos con ciclo for
                var f,c;
                var st="*";
                var max= document.getElementById("fapellido").value;
                //triangulo rectangulo recto a derechas
                for (f=1;f<=max;f++)
                {
                    for(c=1;c<=f;c++)
                    
                        document.write("*");
                    document.write("<br>");
                }
                document.write("<br>");
                
                //triangulo rectangulo  invertido a izquierdas
                for (f=max;f>=1;f--)
                {
                    for(c=1;c<=max-f;c++)
                        document.write("&nbsp&nbsp");
                    for(c=1;c<=f;c++)
                        document.write("*");
                    document.write("<br>");
                }
                document.write("<br>");
            }

        </script>
    </body>
</html>