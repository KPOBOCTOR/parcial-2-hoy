
jasson ali ramos guandique


melvin alexis jimenez lopez





¿Cómo manejan la conexión a la BD y qué pasa si algunos de los datos son incorrectos? Justifiquen la manera de validación de la conexión.

La conexión a la base de datos se maneja mediante un archivo llamado conexion.php, donde se utiliza la clase mysqli de PHP para establecer la conexión con el servidor local, el usuario, la contraseña y el nombre de la base de datos. Para validar la conexión se usa la propiedad connect_error, la cual permite verificar si ocurrió un error al intentar conectarse. En caso de que los datos sean incorrectos, como el nombre de la base de datos o credenciales, el sistema detiene su ejecución y muestra un mensaje de error. Esta validación es importante porque evita que la aplicación continúe funcionando sin conexión, lo que podría generar fallos en el sistema o pérdida de información.

¿Cuál es la diferencia entre $_GET y $_POST en PHP? ¿Cuándo es más apropiado usar cada uno? Da un ejemplo real de tu proyecto.

La diferencia principal entre $_GET y $_POST es la forma en que envían los datos. $_GET envía la información a través de la URL, por lo que los datos son visibles y tienen un límite de tamaño, mientras que $_POST envía los datos de forma oculta dentro de la solicitud HTTP, siendo más seguro y adecuado para enviar información sensible. En este proyecto se utiliza $_POST en el formulario de inicio de sesión, ya que se están enviando datos confidenciales como el usuario y la contraseña. Por ejemplo, en el archivo login.php se reciben los datos con $_POST['usuario'] y $_POST['password'], lo cual es más seguro que usar $_GET.

Tu app va a usarse en una empresa de la zona oriental. ¿Qué riesgos de seguridad identificas en una app web con BD que maneja datos de los usuarios? ¿Cómo los mitigarían?

Uno de los principales riesgos es la inyección SQL, donde un usuario puede ingresar código malicioso en los formularios para manipular la base de datos. También existe el riesgo de robo de contraseñas si estas se almacenan en texto plano, así como accesos no autorizados si no se controla correctamente el inicio de sesión. Otro riesgo es la falta de validación de datos, lo que puede permitir el ingreso de información incorrecta o peligrosa. Para mitigar estos riesgos se recomienda el uso de consultas preparadas para evitar la inyección SQL, la encriptación de contraseñas utilizando funciones como password_hash(), el uso de sesiones para controlar el acceso de usuarios, y la validación de todos los datos ingresados en los formularios.








En el mismo readme realizar un diccionario de datos con las tablas con el siguiente
formato:
Nombre tabla: tabla ususrios





id_usuario	INT	-  	  No	Identificador único del usuario
nombre	VARCHAR	50	  No	Nombre completo del usuario
usuario	VARCHAR	50	  No	Nombre de acceso al sistema
password	VARCHAR	100	No	Contraseña del usuario






tabla: medicamentos







id_medicamento	INT	-	   No	 Identificador del medicamento
nombre	VARCHAR	50	     No	 Nombre del medicamento
precio	DECIMAL	10,2	   No  Precio del producto
tipo	VARCHAR	50	       No 	Categoría del medicamento
disponible	VARCHAR	10	 No	 Indica si está disponible
descripcion	VARCHAR	100	 Sí	 Información adicional del medicamento


