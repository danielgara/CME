-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-01-2018 a las 14:26:53
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `access`
--

DROP TABLE IF EXISTS `access`;
CREATE TABLE IF NOT EXISTS `access` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `access`
--

INSERT INTO `access` (`id`, `date_access`, `username`) VALUES
(1, '2013-11-26 02:58:02', 'admin'),
(2, '2013-11-27 19:27:42', 'admin'),
(3, '2014-02-10 01:11:45', 'admin'),
(4, '2014-02-10 22:45:29', 'admin'),
(5, '2014-03-17 19:33:08', 'admin'),
(6, '2014-08-27 01:07:40', 'admin'),
(7, '2014-08-27 15:39:39', 'admin'),
(8, '2014-08-29 01:39:43', 'admin'),
(9, '2014-09-09 00:47:29', 'admin'),
(10, '2014-09-09 03:31:26', 'admin'),
(11, '2014-10-06 15:17:11', 'admin'),
(12, '2014-10-24 19:01:55', 'admin'),
(13, '2018-01-09 14:13:28', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `component`
--

DROP TABLE IF EXISTS `component`;
CREATE TABLE IF NOT EXISTS `component` (
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `component`
--

INSERT INTO `component` (`name`) VALUES
('Automatic code generator'),
('Cache'),
('Data Validation'),
('Database Class'),
('Error Handler'),
('Helper'),
('ORM'),
('Role Manager'),
('Route Manager'),
('Superclass Controller'),
('Superclass model'),
('Template Manager'),
('Tester');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concern`
--

DROP TABLE IF EXISTS `concern`;
CREATE TABLE IF NOT EXISTS `concern` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `lorder` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `concern`
--

INSERT INTO `concern` (`id`, `name`, `description`, `lorder`, `category`) VALUES
(1, 'Mostrar información en pantalla', 'Tienes que mostrar información en pantalla', 1, 'User Interface'),
(2, 'Pantallas estilizadas', 'Tus pantallas tienen que ser editadas y estilizadas a través de un archivo .CSS. Algunas veces los WAFs estan basados en estilos prefabricados.', 5, 'User Interface'),
(3, 'Herramientas y accesorios para crear vistas', 'Tienes que crear formularios, tablas, u otros elementos de las vistas. (Algunos WAFs soportan la creación rápida de vistas usando un lenguajes front-end parecidos al HTML).', 10, 'User Interface'),
(4, 'Rutas y navegabilidad', 'Tienes que mostrar una pantalla. (Cada sección de una aplicación o enlace tiene una ruta especifica y como llamarlas y conectarlas es muy diferente entre cada WAF).', 15, 'User Interface'),
(5, 'Captura y asignación de datos', 'Tus aplicaciones involucran: crear formularios, o capturar datos, o enviar datos desde un controlador a una vista.', 20, 'User Interface'),
(6, 'Validación de datos en el cliente', 'Tu necesitas hacer validaciones en el lado del cliente. Tales como: garantizar que no se ingresen formularios vacíos o validar los tipos de los datos o validaciones utilizando AJAX. Además no olvides revalidar en el lado del servidor.', 25, 'User Interface'),
(7, 'Carga de archivos', 'Tu necesitas cargar o almacenar archivos tales como: imágenes, documentos, entre otros.', 1, 'Architecture and data flow control'),
(8, 'Captura de errores', 'Tu aplicación genera errores en el cliente, o errores de base de datos o cualquier tipo de errores. Es importante saber como tratarlos, capturarlos y mostrarlos.', 5, 'Architecture and data flow control'),
(9, 'Internationalizacion', 'Tu aplicación requiere manejar múltiples lenguajes', 10, 'Architecture and data flow control'),
(10, 'Localización', 'Tu aplicación requiere mostrar diferentes pantallas dependiendo de donde esta ubicado el usuario final. (por ejemplo: mostrar una aplicación especifica para un usuario en USA y otra distinta para un usuario en UK).', 15, 'Architecture and data flow control'),
(11, 'Almacenamiento en cache', 'Tu aplicación requiere de un rendimiento muy alto. (Algunos WAFs usan un sistema de cache para tener pre-guardada la información).', 20, 'Architecture and data flow control'),
(12, 'Testeo', 'Necesitas aplicar algunos test de datos.', 25, 'Architecture and data flow control'),
(13, 'Portabilidad', 'Tu aplicación requiere una versión para dispositivos móviles y otra para computadores de escritorio.', 30, 'Architecture and data flow control'),
(14, 'Selección de datos', 'Tu necesitas extraer datos desde una base de datos usualmente conectado a un modelo.', 1, 'Data modeling and persistence'),
(15, 'Selección de datos por páginas', 'Tu aplicación requiere extraer datos por páginas. (por ejemplo: sacar de a 10 datos por página, etc).', 5, 'Data modeling and persistence'),
(16, 'Selección de datos de múltiples tablas', 'Tu aplicación requiere extraer datos de múltiples tablas al mismo tiempo CON UN JOIN.', 12, 'Data modeling and persistence'),
(17, 'Almacenamiento de datos', 'Tu aplicación requiere guardar datos en la base de datos.', 15, 'Data modeling and persistence'),
(18, 'Editado de datos', 'Tu aplicación requiere editar datos en una base de datos.', 20, 'Data modeling and persistence'),
(19, 'Borrado de datos', 'Tu aplicación requiere borrar datos de una base de datos.', 25, 'Data modeling and persistence'),
(20, 'Crear funciones de un modelo', 'Tu aplicación requiere crear funciones especificas para un modelo. DIFERENTES a borrar, mostrar, editar y guardar.', 30, 'Data modeling and persistence'),
(21, 'Validaciones en el modelo', 'Tu aplicación requiere aplicación validaciones en a los modelos.', 35, 'Data modeling and persistence'),
(22, 'Autenticación', 'Tu aplicación requiere de un sistema de login.', 1, 'Security'),
(23, 'Autorización', 'Tu aplicación requiere validar el tipo de usuario que puede acceder o no a diferentes zonas.', 5, 'Security'),
(24, 'Control de datos en session', 'Tu aplicación requiere un login, un carro de compras o alguna otra funcionalidad que requiera el control de datos en session.', 10, 'Security'),
(25, 'Validaciones en el servidor', 'Tu aplicación requiere validar datos en el servidor. (por lo general validaciones adicionales a los de los modelos).', 15, 'Security'),
(26, 'Acoplamiento de módulos', 'Tu aplicación requiere acoplar módulos. (algunos WAFs ofrecen sitios web que contienen muchos módulos como: calendarios, generadores de pdf, transformadores de excel, entre otros). Tu debes buscar si el modelo que necesitas esta o no disponible o si tienes que desarrollarlo.', 1, 'Modules and extensions'),
(27, 'Creación de módulos', 'Necesitas crear un nuevo módulo para tu aplicación.', 5, 'Modules and extensions'),
(28, 'Auto-generación de código CRUD', 'Tu aplicación requiere de un CRUD (crear-leer-actualizar y borrar datos). (Algunos WAFs ofrecen la posibilidad de auto-generar este código).', 10, 'Modules and extensions'),
(29, 'Selección de datos usando filtros', 'Tu aplicación requiere extraer datos de la base de datos utilizando consultas especificas con sentencias como WHERE.', 11, 'Data modeling and persistence');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_t`
--

DROP TABLE IF EXISTS `c_t`;
CREATE TABLE IF NOT EXISTS `c_t` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `concern` bigint(20) NOT NULL,
  `Task` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ct_c` (`concern`),
  KEY `ct_t` (`Task`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `c_t`
--

INSERT INTO `c_t` (`id`, `concern`, `Task`) VALUES
(1, 1, 32),
(2, 1, 33),
(3, 1, 36),
(4, 1, 47),
(5, 1, 48),
(6, 1, 49),
(7, 2, 51),
(8, 3, 20),
(9, 3, 21),
(10, 4, 30),
(11, 4, 31),
(12, 5, 38),
(13, 5, 50),
(14, 5, 39),
(15, 5, 48),
(16, 6, 7),
(17, 6, 9),
(18, 7, 39),
(19, 7, 48),
(20, 8, 37),
(21, 8, 17),
(22, 8, 18),
(23, 8, 19),
(25, 9, 41),
(26, 10, 42),
(27, 11, 4),
(28, 11, 5),
(29, 12, 52),
(30, 12, 53),
(31, 14, 43),
(32, 15, 43),
(33, 16, 43),
(34, 17, 43),
(35, 18, 43),
(36, 19, 43),
(37, 20, 43),
(38, 14, 44),
(39, 15, 44),
(40, 16, 44),
(41, 17, 44),
(42, 18, 44),
(43, 19, 44),
(44, 20, 44),
(45, 20, 45),
(46, 14, 46),
(47, 15, 46),
(48, 16, 46),
(49, 17, 46),
(50, 18, 46),
(51, 19, 46),
(52, 20, 46),
(53, 14, 34),
(54, 15, 34),
(55, 16, 34),
(56, 17, 34),
(57, 18, 34),
(58, 19, 34),
(59, 20, 34),
(60, 14, 11),
(61, 15, 11),
(62, 16, 11),
(63, 17, 11),
(64, 18, 11),
(65, 19, 11),
(66, 14, 15),
(67, 15, 15),
(68, 16, 15),
(69, 14, 23),
(70, 15, 23),
(71, 16, 23),
(72, 17, 23),
(73, 18, 23),
(74, 19, 23),
(75, 15, 40),
(76, 17, 12),
(77, 19, 13),
(78, 18, 14),
(79, 16, 24),
(80, 16, 25),
(81, 21, 8),
(82, 22, 38),
(83, 23, 27),
(84, 23, 28),
(85, 23, 29),
(86, 24, 38),
(87, 26, 35),
(88, 26, 20),
(89, 26, 21),
(90, 27, 35),
(91, 27, 22),
(92, 28, 1),
(93, 28, 2),
(94, 28, 3),
(95, 22, 54),
(96, 22, 37),
(97, 23, 37),
(98, 25, 6),
(99, 13, 56),
(100, 7, 57),
(101, 29, 43),
(102, 29, 44),
(103, 29, 46),
(104, 29, 34),
(105, 29, 11),
(106, 29, 15),
(107, 29, 23),
(108, 29, 58);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentation`
--

DROP TABLE IF EXISTS `documentation`;
CREATE TABLE IF NOT EXISTS `documentation` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `task` bigint(20) NOT NULL,
  `framework` varchar(30) NOT NULL,
  `video` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `description` varchar(20000) DEFAULT NULL,
  `note` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `d_t` (`task`),
  KEY `d_f` (`framework`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentation`
--

INSERT INTO `documentation` (`id`, `task`, `framework`, `video`, `link`, `description`, `note`) VALUES
(1, 37, 'Codeigniter', NULL, 'http://runnable.com/UgNsQ-5ArY0lAAAf/how-to-do-a-redirect-to-another-page-in-codeigniter', NULL, 'Redirects are useful to decide where to send the user in some exceptions cases'),
(2, 19, 'Codeigniter', '56EDSocDhjk', NULL, NULL, 'This is an option that combines the others tasks in an example. This video also use FORM VALIDATION which is described in <u>Validations Concerns</u>'),
(3, 17, 'Codeigniter', NULL, NULL, 'Error functions are simple procedural interfaces that are available globally throughout the application”', NULL),
(4, 18, 'Codeigniter', NULL, 'http://ellislab.com/codeigniter/user-guide/general/errors.html', NULL, NULL),
(5, 33, 'Codeigniter', NULL, NULL, '[b]Qué es un controlador?[/b]\r\n\r\nUn controlador es simplemente un archivo de clase que es llamado en una forma que puede ser asociado con un URI.\r\n\r\n[b]considere esta URI:[/b]\r\n\r\nwww.your-site.com/index.php/[b]blog[/b]/\r\nEn el ejemplo anterior, Codeigniter trataría de encontrar un controlador llamado [u]blog.php[/u] y lo cargaría.\r\n\r\n[b]Vamos a intentarlo:  Hola mundo![/b]\r\n\r\nVamos a crear un controlador sencillo, así lo podrás ver en acción. Usando tu editor de texto, cree un archivo llamado blog.php, y coloca dentro el siguiente código:\r\n\r\n[phpcolor=yes]<?php\r\nclass Blog extends CI_Controller {\r\n	function index()\r\n	{\r\n		echo \'Hola mundo!\';\r\n	}\r\n}\r\n?>[/phpcolor]\r\n\r\nLuego guarda el archivo en tu carpeta [u]application/controllers/[/u].\r\n\r\nAhora vista tu sitio usando una URL similar a esto: [u]www.your-site.com/index.php/blog/[/u]\r\nSi lo has hecho correctamente, deberías ver Hola mundo!.\r\n\r\n[b]Nota: [/b]Los nombres de Clases deben empezar con una letra mayúscula.\r\n[b]Nota2:[/b] La función \"index\" es siempre cargada por defecto si el segundo segmento (el que esta despues de \'/blog/\') de la URI está vacía.', NULL),
(6, 36, 'Codeigniter', NULL, NULL, '[b]Cargando una Vista[/b]\r\n\r\nPara cargar un archivo de vista en particular, usará la siguiente función:\r\n\r\n[code]$this->load->view(\'nombre\');[/code]\r\n\r\nDonde [u]nombre[/u] es el nombre de su archivo de vista. [b]Nota: [/b]no es necesario especificar la extensión .php del archivo a menos que use una distinta de .php.\r\n\r\n[b]Cargando múltiples vistas[/b]\r\n\r\nCodeIgniter manejará inteligentemente múltiples llamadas a [u]$this->load->view[/u] desde dentro de un controlador. Si más de una llamada ocurre serán agregados juntos. Por ejemplo, puede querer tener una vista de encabezado, una vista de menu, una vista de contenido, y una vista de píe de página. Eso puede verse más o menos así:\r\n\r\n[phpcolor=yes]<?php\r\n\r\nclass Pagina extends CI_Controller {\r\n\r\n   function index()\r\n   {\r\n      $datos[\'titulo_pagina\'] = \'Su titulo\';\r\n      $this->load->view(\'encabezado\');\r\n      $this->load->view(\'menu\');\r\n      $this->load->view(\'contenido\', $datos);\r\n      $this->load->view(\'pie_de_pagina\');\r\n   }\r\n\r\n}\r\n?>[/phpcolor]\r\n\r\n[b]Guardando Vistas dentro de Sub-carpetas[/b]\r\n\r\nSus archivos de vista pueden ser guardados dentro de sub-carpetas si prefiere ese tipo de organización. Cuando lo haga, necesitará incluir el nombre de la carpeta al cargad la vista. Ejemplo:\r\n\r\n[code]$this->load->view(\'nombre_carpeta/nombre_archivo\');[/code]', NULL),
(7, 48, 'Codeigniter', NULL, NULL, '[b]Comunicación entre el controlador y la vista[/b]\r\n\r\nLos datos son pasados desde el controlador a la vista de la forma de un arreglo o un objeto en el segundo parámetro de la función de carga de vistas. Aquí hay un ejemplo usando un arreglo:\r\n\r\n[code]$datos = array(\r\n               \'titulo\' => \'Mi Titulo\',\r\n               \'encabezado\' => \'Mi Encabezado\',\r\n               \'mensaje\' => \'Mi Mensaje\'\r\n          );[/code]\r\n\r\n[code]$this->load->view(\'vistablog\', $datos);[/code]\r\n\r\nY aquí hay un ejemplo usando un objeto:\r\n\r\n[code]$datos = new Someclass();\r\n$this->load->view(\'vistablog\', $datos);[/code]\r\n\r\n[b]Nota: [/b]si usa un objeto las variables de clase serán convertidas en un arreglo de elementos.\r\n\r\nProbémoslo con su archivo controlador. Ábralo y agregue este código:\r\n\r\n[phpcolor=yes]<?php\r\nclass Blog extends CI_Controller {\r\n	function index()\r\n	{\r\n		$datos[\'titulo\'] = \"Mi Titulo Real\";\r\n		$datos[\'encabezado\'] = \"Mi Encabezado Real\";\r\n		\r\n		$this->load->view(\'vistablog\', $datos);\r\n	}\r\n}\r\n?>[/phpcolor]\r\n\r\nAhora puede abrir su archivo de vista y cambiar el texto a variables que correspondan a las claves del arreglo de sus datos:\r\n\r\n[code]<html>\r\n<head>\r\n<title><?php echo $titulo;?></title>\r\n</head>\r\n<body>\r\n	<h1><?php echo $encabezado;?></h1>\r\n</body>\r\n</html>[/code]\r\n\r\nEntonces cargue la página en la URL que viene usando y debería ver las variables reemplazadas.\r\n\r\n[b]Otra forma de enviar datos[/b]\r\nOtra manera de enviar datos a TODAS las vistas  y NO a una en especifico es:\r\n\r\n[phpcolor=yes]<?php\r\nclass Blog extends CI_Controller {\r\n	function index()\r\n	{\r\n		$datos[\'titulo\'] = \"Mi Titulo Real\";\r\n		$datos[\'encabezado\'] = \"Mi Encabezado Real\";\r\n		\r\n        $this->load->vars($datos);\r\n        $this->load->view(\'cabecera\');\r\n        $this->load->view(\'vistablog\');\r\n        $this->load->view(\'pie_de_pagina\');\r\n	}\r\n}\r\n?>[/phpcolor]', NULL),
(8, 47, 'Codeigniter', NULL, NULL, 'La sintaxis de las vistas en Codeigniter es la misma sintaxis de PHP con HTML.', NULL),
(9, 30, 'Codeigniter', NULL, NULL, '[b]Partes de las URL[/b]\r\n\r\n[b]1) Primera parte:[/b]\r\nLa primera parte de la URL que va despues de index.php/ esta asociada con el nombre del controlador\r\n[b]Ejemplo:[/b]\r\n[code]www.your-site.com/index.php/blog/[/code]\r\n\r\nEn el ejemplo anterior [u]/blog/[/u] quiere decir que se carga el contraldor [u]blog.php[/u]\r\n\r\n[b]2) Segunda parte:[/b]\r\nLa segunda parte de la URL que va despues de index.php/nombre_controlador/ esta asociada con el nombre el nombre de la función del controlador que se va a cargar\r\n[b]Ejemplo:[/b]\r\n[code]www.your-site.com/index.php/blog/index[/code]\r\n\r\nEn el ejemplo anterior [u]/blog/index[/u] quiere decir que se carga la función [u]index[/u] del contraldor [u]blog.php[/u]\r\n\r\n[b]3) Otras partes:[/b]\r\nSi añaden mas de 2 partes a la URL, ellos seran pasados a tu función como parámetros.\r\n[b]Ejemplo:[/b]\r\n[code]www.your-site.com/index.php/products/shoes/sandals/123[/code]\r\n\r\nA tu función se le pasaran los segmentos URI 3 y 4 (\"sandals\" y \"123\"):\r\n\r\n[phpcolor=yes]<?php\r\nclass Products extends CI_Controller {\r\n\r\n	function shoes($sandals, $id)\r\n	{\r\n		echo $sandals;\r\n		echo $id;\r\n	}\r\n}\r\n?>[/phpcolor]', NULL),
(10, 31, 'Codeigniter', NULL, NULL, '[b]Enviar datos[/b]\r\n\r\nLos datos son pasados desde el controlador a la vista de la forma de un arreglo o un objeto en el segundo parámetro de la función de carga de vistas. Aquí hay un ejemplo usando un arreglo:\r\n\r\n[code]$datos = array(\r\n               \'titulo\' => \'Mi Titulo\',\r\n               \'encabezado\' => \'Mi Encabezado\',\r\n               \'mensaje\' => \'Mi Mensaje\'\r\n          );[/code]\r\n\r\n[code]$this->load->view(\'vistablog\', $datos);[/code]\r\n\r\n[b]Otra forma de enviar datos[/b]\r\nOtra manera de enviar datos a TODAS las vistas  y NO a una en especifico es:\r\n\r\n[phpcolor=yes]<?php\r\nclass Blog extends CI_Controller {\r\n	function index()\r\n	{\r\n		$datos[\'titulo\'] = \"Mi Titulo Real\";\r\n		$datos[\'encabezado\'] = \"Mi Encabezado Real\";\r\n		\r\n        $this->load->vars($datos);\r\n        $this->load->view(\'cabecera\');\r\n        $this->load->view(\'vistablog\');\r\n        $this->load->view(\'pie_de_pagina\');\r\n	}\r\n}\r\n?>[/phpcolor]\r\n\r\n[b]Recibir datos[/b]\r\nSi añaden mas de 2 partes a la URL, ellos serán pasados a tu función como parámetros.\r\n[b]Ejemplo:[/b]\r\n[code]www.your-site.com/index.php/products/shoes/sandals/123[/code]\r\n\r\nA tu función se le pasaran los segmentos URI 3 y 4 (\"sandals\" y \"123\"):\r\n\r\n[phpcolor=yes]\r\n<?php \r\nclass Products extends CI_Controller { \r\n\r\n    function shoes($sandals, $id) \r\n    { \r\n        echo $sandals; \r\n        echo $id; \r\n    } \r\n} \r\n?>[/phpcolor]', NULL),
(11, 38, 'Codeigniter', NULL, NULL, '[b]Usar Datos POST, GET, COOKIE, or SERVER[/b]\r\n\r\nCodeIgniter viene con cuatro funciones asistentes que le permite recuperar ítems POST, GET COOKIE or SERVER.\r\n\r\n[code]$this->input->post()\r\n$this->input->get()\r\n$this->input->cookie()\r\n$this->input->server()[/code]\r\n\r\n[b]Formas de recuperar los datos[/b]\r\nEl primer parámetro contendrá el nombre del ítem que está buscando:\r\n[code]$this->input->post(\'algun_dato\');\r\n$this->input->post(\'algun_dato\', TRUE); // si TRUE se hace un Filtrado XSS\r\n$this->input->get(\'algun_dato\');\r\n$this->input->get(\'algun_dato\', TRUE); // con TRUE se hace un Filtrado XSS\r\n$this->input->post(); // devuelve todos los ítems POST con Filtrado XSS\r\n$this->input->get(); // devuelve todos los ítems GET con Filtrado XSS \r\n$this->input->cookie(\'algun_dato\', TRUE);\r\n$this->input->server(\'algun_dato\');\r\n[/code]\r\n\r\n', NULL),
(12, 50, 'Codeigniter', NULL, NULL, '[b]Usar Datos POST, GET, COOKIE, or SERVER[/b]\r\n\r\n[b]EN LAS VISTAS LAS VARIABLES POST, GET, COOKIE, or SERVER SE UTILIZAN EXACTAMENTE DE LA MISMA MANERA QUE EN LOS CONTROLADORES.[/b]\r\n\r\nCodeIgniter viene con cuatro funciones asistentes que le permite recuperar ítems POST, GET COOKIE or SERVER.\r\n\r\n[code]$this->input->post()\r\n$this->input->get()\r\n$this->input->cookie()\r\n$this->input->server()[/code]\r\n\r\n[b]Formas de recuperar los datos[/b]\r\nEl primer parámetro contendrá el nombre del ítem que está buscando:\r\n[code]$this->input->post(\'algun_dato\');\r\n$this->input->post(\'algun_dato\', TRUE); // si TRUE se hace un Filtrado XSS\r\n$this->input->get(\'algun_dato\');\r\n$this->input->get(\'algun_dato\', TRUE); // con TRUE se hace un Filtrado XSS\r\n$this->input->post(); // devuelve todos los ítems POST con Filtrado XSS\r\n$this->input->get(); // devuelve todos los ítems GET con Filtrado XSS \r\n$this->input->cookie(\'algun_dato\', TRUE);\r\n$this->input->server(\'algun_dato\');\r\n[/code]\r\n', NULL),
(13, 11, 'Codeigniter', NULL, NULL, '[b]Conectando automáticamente[/b]\r\n\r\nPara conectarse a una base de datos agregue la palabra [u]database[/u] al arreglo \"library\", como se indica en el siguiente archivo:\r\n[code]application/config/autoload.php[/code]\r\n\r\nIgualmente se deben modificar las lineas 51 en adelante con los valores que usted desea, del archivo [u]application/config/database.php[/u]:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'root\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'test\';\r\n$db[\'default\'][\'dbdriver\'] = \'mysql\';\r\n$db[\'default\'][\'dbprefix\'] = \'\';\r\n$db[\'default\'][\'pconnect\'] = TRUE;\r\n$db[\'default\'][\'db_debug\'] = TRUE;\r\n$db[\'default\'][\'cache_on\'] = FALSE;\r\n$db[\'default\'][\'cachedir\'] = \'\';\r\n$db[\'default\'][\'char_set\'] = \'utf8\';\r\n$db[\'default\'][\'dbcollat\'] = \'utf8_general_ci\';\r\n$db[\'default\'][\'swap_pre\'] = \'\';\r\n$db[\'default\'][\'autoinit\'] = TRUE;\r\n$db[\'default\'][\'stricton\'] = FALSE;[/code]', NULL),
(14, 34, 'Codeigniter', NULL, NULL, '[b]Cargando un Modelo[/b]\r\n\r\nSus modelos suelen ser cargados y llamados desde sus funciones de controlador. Para carga un modelo debe usar la siguiente función:\r\n\r\n[code]$this->load->model(\'Model_name\');[/code]\r\n\r\nSi su modelo esta localizado en una sub-carpeta, incluya la ruta relativa de su carpeta de modelos. Por ejemplo, si tiene un modelo localizado en application/models/blog/queries.php cargará usando esto:\r\n\r\n[code]$this->load->model(\'blog/queries\');[/code]\r\n\r\nUna vez cargado, tendrá que acceder a su funciones de modelo utilizando un objeto con el mismo nombre que su clase:\r\n\r\n[code]$this->load->model(\'Model_name\');\r\n$this->Model_name->function();[/code]\r\n\r\nSi desea que su modelo este asignado a un nombre de objeto diferente, ud. lo puede especificar por medio del segundo parámetro de la función de carga:\r\n\r\n[code]$this->load->model(\'Model_name\', \'fubar\');\r\n$this->fubar->function();\r\n[/code]', NULL),
(15, 46, 'Codeigniter', NULL, NULL, '[b]Cargando funciones:[/b]\r\n\r\nUna vez cargado, tendrá que acceder a su funciones de modelo utilizando un objeto con el mismo nombre que su clase:\r\n\r\n[code]$this->load->model(\'Model_name\');\r\n$this->Model_name->function();[/code]\r\n\r\nAquí hay un ejemplo de un controlador que carga un modelo y luego sirve a una vista:\r\n\r\n[phpcolor=yes]class Blog_controller extends CI_Controller {\r\n\r\n    function blog()\r\n    {\r\n        $this->load->model(\'Blog\');\r\n\r\n        $data[\'query\'] = $this->Blog->get_last_ten_entries();\r\n\r\n        $this->load->view(\'blog\', $data);\r\n    }\r\n}[/phpcolor]\r\n\r\n', NULL),
(16, 44, 'Codeigniter', NULL, NULL, '[b]Qué es un modelo?[/b]\r\n\r\nLos modelos son clases PHP que se han diseñado para trabajar con la información en su base de datos. Por ejemplo, digamos que usted usa CodeIgniter para administrar un blog. Puede que tenga una clase de modelo que contiene funciones para insertar, actualizar y recuperar datos de su blog. Aquí está un ejemplo de lo que podría ser la clase del modelo:\r\n\r\n[phpcolor=yes]class Blogmodel extends CI_Model{\r\n\r\n	var $title   = \'\';\r\n	var $content = \'\';\r\n	var $date    = \'\';\r\n\r\n	function __construct()\r\n	{\r\n		// Llamando al contructor del Modelo\r\n		parent::__construct();\r\n	}\r\n	\r\n	function get_last_ten_entries()\r\n	{\r\n		$query = $this->db->get(\'entries\', 10);\r\n		return $query->result();\r\n	}\r\n\r\n	function insert_entry()\r\n	{\r\n		$this->title   = $_POST[\'title\']; // por favor leer la nota de abajo\r\n		$this->content = $_POST[\'content\'];\r\n		$this->date    = time();\r\n		\r\n		$this->db->insert(\'entries\', $this);\r\n	}\r\n\r\n	function update_entry()\r\n	{\r\n		$this->title   = $_POST[\'title\'];\r\n		$this->content = $_POST[\'content\'];\r\n		$this->date    = time();\r\n\r\n		$this->db->update(\'entries\', $this, array(\'id\', $_POST[\'id\']));\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]Nota: [/b]En aras de la simplicidad, en este ejemplo usamos $_POST directamente. Esto es generalmente una mala práctica, y el enfoque más común sería usar la Clase Input $this->input->post(\'title\')\r\n\r\n[b]Anatomia de un Modelo[/b]\r\n\r\nLa clases de Modelo estan almacenadas en su carpeta application/models/. Se puede anidar dentro de sub-carpetas si desea esta organización.\r\n\r\nEl prototipo básico para una clase de Modelo es esta:\r\n\r\n[phpcolor=yes]class Model_name extends CI_Model {\r\n\r\n    function __construct()\r\n    {\r\n        parent::__construct();\r\n    }\r\n}[/phpcolor]\r\n\r\nDonde [b][b][b]Mode[/b]l_n[/b]ame[/b] es el nombre de su clase. Los nombre de clase TIENEN QUE TENER la primera letra en mayúscula con el resto del nombre en minúscula. Asegúrese de que su clase extiende el modelo de base de la clase.\r\n\r\nEl nombre del archivo será la versión en minúscula de su nombre de clase. Por ejemplo, si su clase es esta:\r\n\r\n[phpcolor=yes]class User_model extends CI_Model {\r\n\r\n    function __construct()\r\n    {\r\n        parent::__construct();\r\n    }\r\n}[/phpcolor]\r\n\r\nSu archivo será este: [u]application/models/user_model.php[/u]', NULL),
(17, 13, 'Codeigniter', NULL, NULL, '[b]Borrar Datos[/b]\r\nGeneralmente estas funciones se utlizan dentro de los Modelos:\r\n\r\n[code]$this->db->delete();[/code]\r\n\r\nGenera una cadena de eliminación SQL y ejecuta la consulta.\r\n\r\n[code]$this->db->delete(\'mitabla\', array(\'id\' => $id)); [/code]\r\n\r\n// Produce:\r\n// DELETE FROM mitabla \r\n// WHERE id = $id\r\n\r\nEl primer parámetro es el nombre de la tabla, el segundo la cláusula WHERE. También puede usar las funciones where() o or_where() en vez de pasar los datos como segundo parámetro de la función:\r\n\r\n[code]$this->db->where(\'id\', $id);\r\n$this->db->delete(\'mitabla\'); [/code]\r\n\r\n// Produce:\r\n// DELETE FROM mitabla \r\n// WHERE id = $id\r\n\r\nUn arreglo de nombres de tablas puede ser pasada a delete() si desea eliminar datos de más de una tabla.\r\n\r\n[code]$tablas = array(\'tabla1\', \'tabla2\', \'tabla3\');\r\n$this->db->where(\'id\', \'5\');\r\n$this->db->delete($tablas);[/code]\r\n\r\nSi desea eliminar todos los datos de una tabla, puede usar la función truncate(), o empty_table().', NULL),
(18, 15, 'Codeigniter', NULL, NULL, '[b]Seleccionar Datos[/b]\r\n\r\nLas siguientes funciones permiten construir una sentencia SELECT SQL.\r\n\r\n[b]$this->db->get();[/b]\r\n\r\nEjecuta la consulta de selección y devuelve el resultado. Puede ser usado solo, para traer todos los registros de una tabla:\r\n\r\n[code]$consulta = $this->db->get(\'mitabla\');\r\n// Produce: SELECT * FROM mitabla[/code]\r\n\r\nEl segundo y tercer parámetro permiten establecer cláusulas de límite y principio:\r\n\r\n[code]$consulta = $this->db->get(\'mitabla\', 10, 20);\r\n// Produce: SELECT * FROM mitabla LIMIT 20, 10 (en MySQL. Otras bases\r\n de datos tienen pequeñas diferencias en la sintaxis).[/code]\r\n\r\nNotará que la funcion de arriba es asignada a la variable llamada $consulta, que puede ser usada para mostrar los resultados:\r\n\r\n[code]$consulta = $this->db->get(\'mitabla\');\r\n\r\nforeach ($consulta->result() as $fila)\r\n{\r\n    echo $fila->titulo;\r\n}[/code]\r\n\r\n[b]$this->db->select();[/b]\r\n\r\nPermite escribir la porción de SELECT de tu consulta:\r\n\r\n[code]$this->db->select(\'titulo, contenido, fecha\');\r\n$consulta = $this->db->get(\'mitabla\');\r\n// Produce: SELECT titulo, contenido, fecha FROM mitabla[/code]\r\n\r\n[b]Nota: [/b]Si está seleccionando todo (*) de una tabla, no es necesario usar esta función. Cuando se omite, CodeIgniter asume que desa SELECT *\r\n\r\n$this->db->select() acepta un opcional segundo parámetro. Si se establece como FALSE, CodeIgniter no intentará proteger los nombres de campos u tablas. Esto es útil si necesita una consulta de selección compuesta.\r\n\r\n[code]$this->db->select(\'(SELECT SUM(pagos.monto) FROM pagos\r\n WHERE pagos.factura_id=4\') AS monto_pagado\', FALSE); \r\n$consulta = $this->db->get(\'mitabla\');[/code]\r\n\r\n[b]$this->db->join();[/b]\r\n\r\nPermite escribir una porción JOIN de la consulta:\r\n\r\n[code]$this->db->select(\'*\');\r\n$this->db->from(\'blogs\');\r\n$this->db->join(\'comentarios\', \'comentarios.id = blogs.id\');\r\n\r\n$query = $this->db->get();\r\n\r\n// Produce: \r\n// SELECT * FROM blogs\r\n// JOIN comentarios ON comentarios.id = blogs.id[/code]\r\n\r\nMultiples llamados a la función pueden ser hechos si necesita multiples joins en una consulta.\r\n\r\nSi necesita algo distinto al natural JOIN puede especificarlo a través del tercer parámetro de la función. Las opciones son: left, right, outer, inner, left outer, and right outer.\r\n\r\n[code]$this->db->join(\'comentarios\', \'comentarios.id = blogs.id\', \'left\');\r\n// Produce: LEFT JOIN comentarios ON comentarios.id = blogs.id[/code]', NULL),
(19, 58, 'Codeigniter', NULL, NULL, '[b]Filtrado de datos[/b]\r\n\r\nPara filtrar datos se utiliza en los modelos la sentencia\r\n[b]$this->db->where();[/b]\r\n\r\n[b]1) Método simpre de clave/valor:[/b]\r\n[code]$this->db->where(\'nombre\', $nombre); \r\n// Produce: WHERE nombre = \'Jose\'[/code]\r\nNote que el signo igual es agregado para usted.\r\n\r\nSi utiliza multiples llamadas a la función, ellos serán encadenados juntos con un AND entre ellos:\r\n\r\n[code]$this->db->where(\'nombre\', $nombre);\r\n$this->db->where(\'titulo\', $titulo);\r\n$this->db->where(\'estado\', $estado); \r\n\r\n// WHERE nombre = \'Jose\' AND titulo = \'jefe\' AND estado = \'activo\'[/code]\r\n\r\n[b]2) Método especial de clave/valor:[/b]\r\nSe puede incluir un operador en el primer parámetro con el objeto de controlar la comparación:\r\n\r\n[code]$this->db->where(\'nombre !=\', $nombre);\r\n$this->db->where(\'id <\', $id); \r\n\r\n// Produce: WHERE nombre != \'Jose\' AND id < 45[/code]\r\n\r\n[b]3) Método de arreglo asociativo:[/b]\r\n[code]$arreglo = array(\'nombre\' => $nombre, \'titulo\' => $titulo, \'status\' => $status);\r\n\r\n$this->db->where($arreglo); \r\n\r\n// Produce: WHERE nombre = \'Joe\' AND titulo = \'boss\' AND status = \'active\'[/code]\r\n\r\n[b]$this->db->get_where();[/b]\r\n\r\nPermite agregar una clausula \"where\" en el segundo parámetro, en vez de usar la función db->where():\r\n\r\n[code]$consulta = $this->db->get_where(\'mitabla\', array(\'id\' => $id), $limite, $principio);[/code]\r\n', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `example`
--

DROP TABLE IF EXISTS `example`;
CREATE TABLE IF NOT EXISTS `example` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `concern` bigint(20) NOT NULL,
  `framework` varchar(100) NOT NULL,
  `description` varchar(40000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `c_e` (`concern`),
  KEY `e_f` (`framework`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `example`
--

INSERT INTO `example` (`id`, `concern`, `framework`, `description`) VALUES
(1, 1, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]hello.php[/u] en la ruta [u]my_app/application/controllers/hello.php[/u] con el siguiente código:\r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass Hello extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'hello\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor] \r\n[b]2)[/b] Crea la vista [u]header.php[/u] en la ruta [u]my_app/application/views/header.php[/u] con el siguiente código:\r\n\r\n[code]<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n	<meta charset=\"utf-8\">\r\n	<title>Welcome to MyAPP</title>\r\n\r\n	<style type=\"text/css\">\r\n\r\n	::selection{ background-color: #E13300; color: white; }\r\n	::moz-selection{ background-color: #E13300; color: white; }\r\n	::webkit-selection{ background-color: #E13300; color: white; }\r\n\r\n	body {\r\n		background-color: #fff;\r\n		margin: 40px;\r\n		font: 13px/20px normal Helvetica, Arial, sans-serif;\r\n		color: #4F5155;\r\n	}\r\n\r\n	a {\r\n		color: #003399;\r\n		background-color: transparent;\r\n		font-weight: normal;\r\n	}\r\n\r\n	h1 {\r\n		color: #444;\r\n		background-color: transparent;\r\n		border-bottom: 1px solid #D0D0D0;\r\n		font-size: 19px;\r\n		font-weight: normal;\r\n		margin: 0 0 14px 0;\r\n		padding: 14px 15px 10px 15px;\r\n	}\r\n\r\n	code {\r\n		font-family: Consolas, Monaco, Courier New, Courier, monospace;\r\n		font-size: 12px;\r\n		background-color: #f9f9f9;\r\n		border: 1px solid #D0D0D0;\r\n		color: #002166;\r\n		display: block;\r\n		margin: 14px 0 14px 0;\r\n		padding: 12px 10px 12px 10px;\r\n	}\r\n\r\n	#body{\r\n		margin: 0 15px 0 15px;\r\n	}\r\n	\r\n	p.footer{\r\n		text-align: right;\r\n		font-size: 11px;\r\n		border-top: 1px solid #D0D0D0;\r\n		line-height: 32px;\r\n		padding: 0 10px 0 10px;\r\n		margin: 20px 0 0 0;\r\n	}\r\n	\r\n	#container{\r\n		margin: 10px;\r\n		border: 1px solid #D0D0D0;\r\n		-webkit-box-shadow: 0 0 8px #D0D0D0;\r\n	}\r\n	</style>\r\n</head>\r\n<body>\r\n\r\n<div id=\"container\">\r\n	<h1>Welcome to MyAPP</h1>\r\n    \r\n    <div id=\"body\">[/code]\r\n\r\n[b]3)[/b] Crea la vista [u]hello.php[/u] en la ruta [u]my_app/application/views/hello.php[/u] con el siguiente código:\r\n[code]<p>Hello World!</p>[/code]\r\n\r\n[b]4)[/b] Crea la vista [u]footer.php[/u] en la ruta [u]my_app/application/views/footer.php[/u] con el siguiente código:\r\n[code]</div>\r\n<p class=\"footer\">Developed by: {your name}</p>\r\n</div>\r\n</body>\r\n</html>[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/hello/index[/u]'),
(2, 4, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]hello.php[/u] en la ruta [u]my_app/application/controllers/hello.php[/u] con el siguiente código: \r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass Hello extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'hello\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n	\r\n	public function about()\r\n	{\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'about\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]2)[/b] Crea la vista [u]hello.php[/u] en la ruta [u]my_app/application/views/hello.php[/u] con el siguiente código:\r\n[code]<p>Welcome</p>\r\n\r\n<p><a href=\"<?php echo base_url(); ?>index.php/hello/about\">About us!</a></p>[/code]\r\n\r\n[b]3)[/b] Crea la vista [u]about.php[/u] en la ruta [u]my_app/application/views/about.php[/u] con el siguiente código:\r\n[code]<p>Company name: MyAPP</p>\r\n<p>Phone: 5555-555-555</p>\r\n<p>Email: test@test.com</p>\r\n<p>Website: www.test.com</p>[/code]\r\n\r\n[b]4)[/b] Modifica la linea 67 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'helper\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'helper\'] = array(\'url\');[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/hello/index[/u]'),
(3, 5, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]currency_converter.php[/u] en la ruta [u]my_app/application/controllers/currency_converter.php[/u] con el siguiente código: \r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass Currency_converter extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'currency\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n	\r\n	public function result()\r\n	{\r\n		$result=$this->input->post(\'among\',TRUE)*$this->input->post(\'rate\',TRUE);\r\n		$data[\'result\'] = $result;\r\n		\r\n		$this->load->vars($data);\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'currency\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]2)[/b] Crea la vista [u]currency.php[/u] en la ruta [u]my_app/application/views/currency.php[/u] con el siguiente código:\r\n[code]<p>Currency converter</p>\r\n<?php echo form_open(\'currency_converter/result\'); ?>\r\n<p>Enter the among: <input type=\"text\" name=\"among\" /><br />\r\nEnter the rate: <input type=\"text\" name=\"rate\" /><br />\r\n<input type=\"submit\" value=\"Calculate\" />\r\n</p>\r\n\r\n<?php if (isset($result)){ ?> The result is: <?php echo $result; } ?>\r\n\r\n<?php echo form_close(); ?>[/code]\r\n\r\n[b]3)[/b] Modifica la linea 67 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'helper\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'helper\'] = array(\'url\', \'form\');[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/currency_converter/index[/u]'),
(4, 14, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]user_selection.php[/u] en la ruta [u]my_app/application/controllers/user_selection.php[/u] con el siguiente código: \r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass User_selection extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->model(\'User\');\r\n        $data[\'users\'] = $this->User->get_all();\r\n\r\n		$this->load->vars($data);\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'user_selection\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]2)[/b] Crea la vista [u]user_selection.php[/u] en la ruta [u]my_app/application/views/user_selection.php[/u] con el siguiente código:\r\n[code]<table border=\"1\" cellpadding=\"5\" style=\"border-collapse:collapse\">\r\n<tr>\r\n        <th>ID</td>\r\n        <th>Name</td>\r\n        <th>Email</td>\r\n        <th>Gender</td>\r\n    </tr>\r\n<?php foreach ($users as $user){ ?>\r\n    <tr>\r\n        <td><?php echo $user->id;?></td>\r\n        <td><?php echo $user->name;?></td>\r\n        <td><?php echo $user->email;?></td>\r\n        <td><?php echo $user->gender;?></td>\r\n    </tr>\r\n<?php } ?>\r\n</table>[/code]\r\n\r\n[b]3)[/b] Crea el modelo [u]user.php[/u] en la ruta [u]my_app/application/models/user.php[/u] con el siguiente código:\r\n[phpcolor=yes]<?php \r\n	\r\nclass User extends CI_Model {\r\n\r\n	var $id=\'\';\r\n	var $name=\'\';\r\n	var $email=\'\';\r\n	var $gender=\'\';\r\n	var $password=\'\';\r\n\r\n    function __construct()\r\n    {\r\n        // Call the Model constructor\r\n        parent::__construct();\r\n    }\r\n	\r\n	function get_all()\r\n    {\r\n        $query = $this->db->get(\'user\');\r\n        return $query->result();\r\n    }\r\n	\r\n}\r\n	\r\n?>[/phpcolor]\r\n\r\n[b]4)[/b] Ingresa a [u]phpmyadmin[/u] mediante la ruta [u]http://localhost/phpmyadmin[/u] crea una nueva base de datos con el nombre [u]test[/u] - luego utilizando la consola sql ejecuta la siguiente consulta:\r\n[code]CREATE TABLE IF NOT EXISTS `user` (\r\n  `id` int(11) NOT NULL AUTO_INCREMENT,\r\n  `name` varchar(100) NOT NULL,\r\n  `email` varchar(100) NOT NULL,\r\n  `gender` varchar(10) NOT NULL,\r\n  `password` varchar(100) NOT NULL,\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;\r\n\r\nINSERT INTO `user` (`id`, `name`, `email`, `gender`, `password`) VALUES\r\n(1, \'Daniel\', \'dan@test.com\', \'male\', \'test567\'),\r\n(2, \'Sara\', \'sara@test.com\', \'female\', \'test568\');[/code]\r\n\r\n[b]5)[/b] Modifica la linea 67 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'helper\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'helper\'] = array(\'url\', \'form\');[/code]\r\n\r\n[b]6)[/b] Modifica la linea 55 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'libraries\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'libraries\'] = array(\'database\');[/code]\r\n\r\n[b]7)[/b] Modifica las lineas 51 a 54 del archivo [u]application/config/database.php[/u]; cambia estas lineas:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'\';[/code]\r\nPor este código:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'root\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'test\';[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/user_selection/index[/u]'),
(5, 19, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]user_delete.php[/u] en la ruta [u]my_app/application/controllers/user_delete.php[/u] con el siguiente código: \r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass User_delete extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'user_delete\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n	\r\n	public function delete()\r\n	{\r\n		$this->load->model(\'User\');\r\n        $this->User->delete($this->input->post(\'id\'));\r\n		$data[\'message\'] = \"User successfully removed\";\r\n		\r\n		$this->load->vars($data);		\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'message\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]2)[/b] Crea la vista [u]user_delete.php[/u] en la ruta [u]my_app/application/views/user_delete.php[/u] con el siguiente código:\r\n[code]<p>User Delete</p>\r\n<?php echo form_open(\'user_delete/delete\'); ?>\r\n<p>Enter the User ID: <input type=\"text\" name=\"id\" /><br />\r\n<input type=\"submit\" value=\"Delete\" />\r\n</p>\r\n\r\n<?php echo form_close(); ?>[/code]\r\n\r\n[b]3)[/b] Crea la vista [u]message.php[/u] en la ruta [u]my_app/application/views/message.php[/u] con el siguiente código:\r\n[code]<p><?php echo $message; ?></p>[/code]\r\n\r\n[b]4)[/b] Crea el modelo [u]user.php[/u] en la ruta [u]my_app/application/models/user.php[/u] con el siguiente código:\r\n[phpcolor=yes]<?php \r\n	\r\nclass User extends CI_Model {\r\n\r\n	var $id=\'\';\r\n	var $name=\'\';\r\n	var $email=\'\';\r\n	var $gender=\'\';\r\n	var $password=\'\';\r\n\r\n    function __construct()\r\n    {\r\n        // Call the Model constructor\r\n        parent::__construct();\r\n    }\r\n	\r\n	function get_all()\r\n    {\r\n        $query = $this->db->get(\'user\');\r\n        return $query->result();\r\n    }\r\n	\r\n	function delete($id)\r\n    {\r\n        $this->db->delete(\'user\', array(\'id\' => $id));\r\n    }\r\n	\r\n}\r\n	\r\n?>[/phpcolor]\r\n\r\n[b]5)[/b] Ingresa a [u]phpmyadmin[/u] mediante la ruta [u]http://localhost/phpmyadmin[/u] crea una nueva base de datos con el nombre [u]test[/u] - luego utilizando la consola sql ejecuta la siguiente consulta:\r\n[code]CREATE TABLE IF NOT EXISTS `user` (\r\n  `id` int(11) NOT NULL AUTO_INCREMENT,\r\n  `name` varchar(100) NOT NULL,\r\n  `email` varchar(100) NOT NULL,\r\n  `gender` varchar(10) NOT NULL,\r\n  `password` varchar(100) NOT NULL,\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;\r\n\r\nINSERT INTO `user` (`id`, `name`, `email`, `gender`, `password`) VALUES\r\n(1, \'Daniel\', \'dan@test.com\', \'male\', \'test567\'),\r\n(2, \'Sara\', \'sara@test.com\', \'female\', \'test568\');[/code]\r\n\r\n[b]6)[/b] Modifica la linea 67 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'helper\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'helper\'] = array(\'url\', \'form\');[/code]\r\n\r\n[b]7)[/b] Modifica la linea 55 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'libraries\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'libraries\'] = array(\'database\');[/code]\r\n\r\n[b]7)[/b] Modifica las lineas 51 a 54 del archivo [u]application/config/database.php[/u]; cambia estas lineas:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'\';[/code]\r\nPor este código:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'root\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'test\';[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/user_delete/index[/u]'),
(6, 29, 'Codeigniter', '[b]Ejemplo:\r\n\r\n1)[/b] Crea el controlador [u]female_users.php[/u] en la ruta [u]my_app/application/controllers/female_users.php[/u] con el siguiente código: \r\n\r\n[phpcolor=no]<?php if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');\r\n\r\nclass Female_users extends CI_Controller {\r\n\r\n	public function index()\r\n	{\r\n		$this->load->model(\'User\');\r\n        $data[\'users\'] = $this->User->only_female();\r\n\r\n		$this->load->vars($data);\r\n		$this->load->view(\'header\');\r\n		$this->load->view(\'female_users\');\r\n		$this->load->view(\'footer\');\r\n	}\r\n}[/phpcolor]\r\n\r\n[b]2)[/b] Crea la vista [u]female_users.php[/u] en la ruta [u]my_app/application/views/female_users.php[/u] con el siguiente código:\r\n[code]<table border=\"1\" cellpadding=\"5\" style=\"border-collapse:collapse\">\r\n<tr>\r\n        <th>ID</td>\r\n        <th>Name</td>\r\n        <th>Email</td>\r\n        <th>Gender</td>\r\n    </tr>\r\n<?php foreach ($users as $user){ ?>\r\n    <tr>\r\n        <td><?php echo $user->id;?></td>\r\n        <td><?php echo $user->name;?></td>\r\n        <td><?php echo $user->email;?></td>\r\n        <td><?php echo $user->gender;?></td>\r\n    </tr>\r\n<?php } ?>\r\n</table>[/code]\r\n\r\n[b]3)[/b] Crea el modelo [u]user.php[/u] en la ruta [u]my_app/application/models/user.php[/u] con el siguiente código:\r\n[phpcolor=yes]<?php \r\n	\r\nclass User extends CI_Model {\r\n\r\n	var $id=\'\';\r\n	var $name=\'\';\r\n	var $email=\'\';\r\n	var $gender=\'\';\r\n	var $password=\'\';\r\n\r\n    function __construct()\r\n    {\r\n        // Call the Model constructor\r\n        parent::__construct();\r\n    }\r\n	\r\n	function only_female()\r\n    {\r\n		$this->db->where(\'gender\', \'female\');\r\n		$query = $this->db->get(\'user\');\r\n        return $query->result();\r\n    }\r\n	\r\n}\r\n	\r\n?>[/phpcolor]\r\n\r\n[b]4)[/b] Ingresa a [u]phpmyadmin[/u] mediante la ruta [u]http://localhost/phpmyadmin[/u] crea una nueva base de datos con el nombre [u]test[/u] - luego utilizando la consola sql ejecuta la siguiente consulta:\r\n[code]CREATE TABLE IF NOT EXISTS `user` (\r\n  `id` int(11) NOT NULL AUTO_INCREMENT,\r\n  `name` varchar(100) NOT NULL,\r\n  `email` varchar(100) NOT NULL,\r\n  `gender` varchar(10) NOT NULL,\r\n  `password` varchar(100) NOT NULL,\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;\r\n\r\nINSERT INTO `user` (`id`, `name`, `email`, `gender`, `password`) VALUES\r\n(1, \'Daniel\', \'dan@test.com\', \'male\', \'test567\'),\r\n(2, \'Sara\', \'sara@test.com\', \'female\', \'test568\');[/code]\r\n\r\n[b]5)[/b] Modifica la linea 67 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'helper\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'helper\'] = array(\'url\', \'form\');[/code]\r\n\r\n[b]6)[/b] Modifica la linea 55 del archivo [u]application/config/autoload.php[/u]; cambia esta linea:\r\n[code]$autoload[\'libraries\'] = array(\'\');[/code]\r\nPor este código:\r\n[code]$autoload[\'libraries\'] = array(\'database\');[/code]\r\n\r\n[b]7)[/b] Modifica las lineas 51 a 54 del archivo [u]application/config/database.php[/u]; cambia estas lineas:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'\';[/code]\r\nPor este código:\r\n[code]$db[\'default\'][\'hostname\'] = \'localhost\';\r\n$db[\'default\'][\'username\'] = \'root\';\r\n$db[\'default\'][\'password\'] = \'\';\r\n$db[\'default\'][\'database\'] = \'test\';[/code]\r\n\r\nFinalmente accede al link: [u]http://localhost/my_app/index.php/female_users/index[/u]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `framework`
--

DROP TABLE IF EXISTS `framework`;
CREATE TABLE IF NOT EXISTS `framework` (
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `framework`
--

INSERT INTO `framework` (`name`) VALUES
('Codeigniter'),
('Yii');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `goal` varchar(1000) NOT NULL,
  `component` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `c_t` (`component`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `goal`, `component`) VALUES
(1, 'Identify how to call and use auto-code generators.', 'Automatic code generator'),
(2, 'Identify what information is created and how to edit it', 'Automatic code generator'),
(3, 'Identify how to delete that information', 'Automatic code generator'),
(4, 'Identify how to call cache', 'Cache'),
(5, 'Identify where cache is used', 'Cache'),
(6, 'Identify how validations in control layer are treated', 'Data Validation'),
(7, 'Identify how validations in view layer are treated', 'Data Validation'),
(8, 'Identify how validations in model layer are treated', 'Data Validation'),
(9, 'Identify what kinds of validations are predefined', 'Data Validation'),
(10, 'Identify how to create new validation types', 'Data Validation'),
(11, 'Identify how to connect to a specific database', 'Database Class'),
(12, 'Identify how to add data to the database', 'Database Class'),
(13, 'Identify how to delete data from the database', 'Database Class'),
(14, 'Identify how to edit data from the database', 'Database Class'),
(15, 'Identify how to select data from the database (even information from various tables)', 'Database Class'),
(16, 'Identify additional functions or functionalities', 'Database Class'),
(17, 'Identify what the sections to catch errors are', 'Error Handler'),
(18, 'Identify what the types of errors are', 'Error Handler'),
(19, 'Identify how to capture and show these errors', 'Error Handler'),
(20, 'Identify what kinds of helpers exist', 'Helper'),
(21, 'Identify what facilities give each helper and how to use them', 'Helper'),
(22, 'Identify how to create and connect a new helper or library', 'Helper'),
(23, 'Identify how the transformation among relational databases and class objects is achieved', 'ORM'),
(24, 'Identify how various objects are gathered from different classes', 'ORM'),
(25, 'Identify how one-one and many-many relations, among others, are treated', 'ORM'),
(26, 'Identify how to call specific SQL statements', 'ORM'),
(27, 'Identify how to validate permissions in the application', 'Role Manager'),
(28, 'Identify how to grant access to specific areas.', 'Role Manager'),
(29, 'Identify how to add types of roles', 'Role Manager'),
(30, 'Identify how URLs are and what means each part of the URLs', 'Route Manager'),
(31, 'Identify how to send and receive data from URLs', 'Route Manager'),
(32, 'Identify what functions are available', 'Superclass Controller'),
(33, 'Identify how to create controller classes and what functions should be override', 'Superclass Controller'),
(34, 'Identify how to call model classes', 'Superclass Controller'),
(35, 'Identify how to call libraries or plugins', 'Superclass Controller'),
(36, 'Identify how to call views', 'Superclass Controller'),
(37, 'Identify how to do redirects ', 'Superclass Controller'),
(38, 'Identify how the variables get, post, session, and files are treated', 'Superclass Controller'),
(39, 'Identify how to receive and send data to views', 'Superclass Controller'),
(40, 'Identify how to show results by pages', 'Superclass Controller'),
(41, 'Identify how to manage different packages of languages', 'Superclass Controller'),
(42, 'Identify how to show information depending on user’s location', 'Superclass Controller'),
(43, 'Identify what functions are available', 'Superclass model'),
(44, 'Identify how to create model classes and what functions should be override', 'Superclass model'),
(45, 'Identify how to create new class functions', 'Superclass model'),
(46, 'Identify how to call attributes and functions classes', 'Superclass model'),
(47, 'Identify if a different syntax is used in the view layer and how it works', 'Template Manager'),
(48, 'Identify how the communication between controller and view layers is achieved', 'Template Manager'),
(49, 'Identify what functions are available', 'Template Manager'),
(50, 'Identify how the variables get, post, session, and files are treated', 'Template Manager'),
(51, 'Identify how to create styles (css files) and where are located', 'Template Manager'),
(52, 'Identify how to create unit tests', 'Tester'),
(53, 'Identify how to debug information', 'Tester'),
(54, 'Identify how to manage login and logout', 'Superclass Controller'),
(56, 'Identify how to design an application for desktop and mobile', 'Superclass Controller'),
(57, 'Identify how to upload files', 'Superclass Controller'),
(58, 'Identify how to filter data', 'Database Class');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(72) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `type`, `email`) VALUES
(1, 'Admin', 'admin', '$2a$08$JyL3VzFSY76kMir2oA0mt.0XrccedWcvt1F/wu6gFjbZgQmCsjJ4W', 'admin', 'zzzexample@example.com'),
(2, 'Jorge', 'jorge', '$2a$08$tndTZZ2T.oGuH.GsRTYpeuvLHJgnXQ2vCYHE843iaugAIQ6UN3YTe', 'user', 'zzzexample2@example.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `c_t`
--
ALTER TABLE `c_t`
  ADD CONSTRAINT `ct_c` FOREIGN KEY (`concern`) REFERENCES `concern` (`id`),
  ADD CONSTRAINT `ct_t` FOREIGN KEY (`Task`) REFERENCES `task` (`id`);

--
-- Filtros para la tabla `documentation`
--
ALTER TABLE `documentation`
  ADD CONSTRAINT `d_f` FOREIGN KEY (`framework`) REFERENCES `framework` (`name`),
  ADD CONSTRAINT `d_t` FOREIGN KEY (`task`) REFERENCES `task` (`id`);

--
-- Filtros para la tabla `example`
--
ALTER TABLE `example`
  ADD CONSTRAINT `c_e` FOREIGN KEY (`concern`) REFERENCES `concern` (`id`),
  ADD CONSTRAINT `e_f` FOREIGN KEY (`framework`) REFERENCES `framework` (`name`);

--
-- Filtros para la tabla `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `c_t` FOREIGN KEY (`component`) REFERENCES `component` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
