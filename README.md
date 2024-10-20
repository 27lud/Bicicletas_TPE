# Temática elegida 
Tienda de bicicletas.
# Diagrama
<img width="627" alt="diagrama_bicicletas_db" src="https://github.com/user-attachments/assets/b3a36bb7-e3d1-43e9-996d-7e7ab23bef83">

# Descripción del proyecto
El proyecto inicia con la creación de una base de datos que guardará información acerca de una tienda de bicicletas. Inicialmente se presentan dos tablas, la primera denominada "categoria" que tiene como clave primaria "id" y estará directamente relacionada con nuestra segunda tabla "bicicletas" la cual presentará la clave foranea "id_tipos_fk". 
Cada bicicleta añadida a nuestro catálogo de venta va a pertenecer a una determinada categoría (ya sea BMX, urbana o de montaña) respectivamente, por lo que una misma bicicleta no podrá pertenecer a más de una categoría en nuestro proyecto. Esto permitirá al usuario optimizar su busqueda centrandose primeramente en el tipo de bicicleta que desea adquirir según sus objetivos.
# Pasos para desplegar nuestro sitio
- Instalar xampp (asegurate de cliquear las opciones "Apache" y "MySQL" en este paso).
- Abrir la consola y encender tanto Apache como MySQL.
- Clonar nuestro repositorio "https://github.com/27lud/Bicicletas_TPE.git" en tu carpeta "\xampp\htdocs".
- En phpMyAdmin Importar la base de datos "bicicletas_db.sql". 
- Por último, ya en el browser ingresar a "http://localhost/WEB-2-TPE/".
# Sección pública y privada
Nuestra página cuenta con una vista pública y una privada. 
Por lo que para acceder a aquellas funcionalidades que no se incluyen en la sección pública es necesario que el usuario se encuentre extrictamente logueado y así pasar a ser usuario administrador del sitio. Esto le desbloqueará las opciones de agregar y/o modificar una categoria o item específico. 
# LOGIN
- Una vez posicionado en el "home" de nuestra página cliquear en el apartado "login".
- Alli proporcionar email "webadmin" y password "admin".
- Hacer click en login y ya podrás navegar sin ninguna restricción.
# Participantes
Manuel Díaz y Ludmila Belén Argüello.
