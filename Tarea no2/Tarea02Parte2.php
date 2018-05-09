 <?php
            class Form{
                // Declaracion de variables dentro de la clase Form
                public $nameErr = "",$emailErr = "", $genderErr = "", $websiteErr = "", $name = "", $email = "", $gender = "", $comment = "", $website = "";
                // Funcion encargada de el Manejo de las variables.
                public function Info_Validacion(){
                    // Metodo de Solicitud: "POST", el cual consiste en datos "ocultos" enviados por un formulario cuyo método de envío es post. Es adecuado para formularios. Los datos no son visibles.
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Validacion del Nombre, en Caso de Verdadero y el campo este vacio o sea igual a 0 el mensaje "Name is Required" se le mostrara el usuario. En caso de Falso se guarda y Valida que solo sean letras y espacios. En caso de Verdadero el mensaje "Only Letters and White Space Allowed" se le mostrara al usuario para que modifique el campo.
                        if (empty($_POST["name"])) {
                            $this->nameErr = "Name is required";
                        } 
                        else {
                            $this->name = $this->test_input($_POST["name"]);
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z ]*$/",$this->name)) {
                                $this->nameErr = "Only letters and white space allowed";
                            }
                        }
                    // Validacion del Email, en caso de Verdadero y el campo este vacio o sea igual 0 el mensaje "Email is Required" se le mostrara al usuario. En caso de Falso se guarda y Valida que sea una Direccion de Correo electronico valida. En caso de que no sea valida el mensaje "Invalid email Format" se le mostrara al usuario para que modifique el campo.
                        if (empty($_POST["email"])) {
                            $this->emailErr = "Email is required";
                        } 
                        else {
                            $this->email = $this->test_input($_POST["email"]);
                            // check if e-mail address is well-formed
                            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                                $this->emailErr = "Invalid email format";
                            }
                        }
                    // Validacion del Website, en caso de que el campo este vacio se queda en blanco. En caso de que contenga texto se guarda y valida que sea una direccion de un sitio web valida en caso de que Falso el mensaje "Invalid URL" se le mostrara al usuario para que modifique el campo.
                        if (empty($_POST["website"])) {
                           $this->website = "";
                        } 
                        else {
                           $this->website = $this->test_input($_POST["website"]);
                            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$this->website)) {
                                $this->websiteErr = "Invalid URL";
                            }
                        }
                    // Validacion del Comment, en caso de que el campo este vacio se queda en blanco. en caso de que contenga texto se guarda.
                        if (empty($_POST["comment"])) {
                            $this->comment = "";
                        } 
                        else {
                            $this->comment = $this->test_input($_POST["comment"]);
                        }
                    // Validacion del Genero, en caso de que el campo este vacio o sea igual a 0 el mensaje "Gender is Required" se le mostrara al usuario para que haga su seleccion de genero. En caso de que haya realizado la seleccion el usuario se guarda su Genero.
                        if (empty($_POST["gender"])) {
                            $this->genderErr = "Gender is required";
                        } 
                        else {
                            $this->gender = $this->test_input($_POST["gender"]);
                        }
                    }
                }
                // Funcion de Funciones para trabajar con HTML.
                public function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            }
        ?>