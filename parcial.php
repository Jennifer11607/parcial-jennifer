<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARCIAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-primary bg-opacity-50">
    <div class="todo">
        <!-- row1 -->
        <div class="row bg-info m-2">

            <!-- aqui empieza el col1 -->
            <div class="col text-bg-secondary p-2 border border-5 border-dark m-3">
                <!-- navbar -->
                <div class="border border-dark bg-opacity-25 shadow p-1 bg-primary rounded m-4 mt-2 mb-2" >
                    
                        <div class="row">
                            <div class="col text-center shadow p-3 mb-5 bg-secondary border border-1 border-primary rounded-4 m-3">
                                <i class="bi bi-floppy text-primary" style="font-size: 0.75cm;"></i>
                            </div>
                            <div class="col text-center shadow p-3 mb-5 bg-secondary border border-1 border-warning rounded-4 m-3">
                                <i class="bi bi-pencil-square text-warning "style="font-size: 0.75cm;"></i>
                            </div>
                            <div class="col text-center shadow p-3 mb-5 bg-secondary border border-1 border-dark rounded-4 m-3">
                                <i class="bi bi-send-check-fill text-dark"style="font-size: 0.75cm;"></i>
                            </div>
                            <div class="col text-center  shadow p-3 mb-5 bg-secondary p-2 border border-2 border-danger rounded-4 m-3">
                                <i class="bi bi-trash3-fill text-danger" style="font-size: 0.75cm;"></i>
                            </div>
                        </div>
                        
                    
                    <div class="p-6 row m-2 ">
                        <div class=" col text-center"><i class="bi bi-person-bounding-box text-white " style="font-size: 80px;"></i></i></div>
                        <div class="text-center " style="font-family: cursive;">
                            <hr>
                            <h4>FORMULARIO DE INFORMACION PERSONAL</h4>
                            <hr>
                        </div>
                        <!-- formulario -->
                        <form action="" method="get">
                        <div class="row m-2">
                        <div class="col" style="font-family: cursive;">
                                <label for="" class="text-center d-block">CATALOGO</label>
                                <input type="number" name="cat" class="form-control border  border-3 border-primary text-center rounded-5" placeholder="......">
                      </div>
                        
                        <div class="col" style="font-family: cursive;">
                           
                                <label for="" class="text-center d-block">NOMBRE 1</label>
                                <input type="text" name="nom1" class="form-control border border-3 border-secondary text-center rounded-5"
                                    placeholder="Jennifer">
                            
                        </div>
                        <div class="col" style="font-family: cursive;">
                          
                                <label for="" class="text-center d-block">NOMBRE 2</label>
                                <input type="text" name="nom2"class="form-control border border-primary text-center rounded-5"
                                    placeholder="Sucely">
</div>
                        </div>
                    </div>

                    <div class="row m-2">
                        <div class="col" style="font-family: cursive;">
                            
                                <label for="" class=" text-center d-block">APELLIDO 1</label>
                                <input type="text" name="ape1"class="form-control border border-primary text-center rounded-5"
                                    placeholder="Jimenez">
                           
                        </div>
                        <div class="col" style="font-family: cursive;">
                            
                                <label for="" class="text-center d-block">APELLIDO 2</label>
                                <input type="text" name="ape2" class="form-control border border-primary text-center rounded-5"
                                    placeholder="Gonzalez">
                            
                        </div>
                        <div class="col" style="font-family: cursive;">
                           
                                <label for="" class="text-center d-block">CORREO</label>
                                <input type="email" name="correo" class="form-control border border-primary text-center rounded-5"
                                    placeholder="@gmail.com">
                            
                        </div>
                    </div>

                    <div class="row m-2">
                        <div class="col" style="font-family: cursive;">
                           
                                <label for="" class=" text-center d-block">EDAD</label>
                                <input type="number" name="edad" class="form-control border border-primary text-center rounded-5"
                                    placeholder="23">
                            
                        </div>
                        <div class="col" style="font-family: cursive;">
                            <label for="" class="text-center d-block">SEXO</label>
                            <select class="form-select border border-primary text-center rounded-5"
                                aria-label="Default select example" name="sexo">
                                <option selected>Elige Uno</option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculido</option>
                            </select>
                        </div>
                        <div class="col" style="font-family: cursive;">
                          
                                <label for="" class="text-center d-block">GRADO</label>
                                <input type="text" name="grado" class="form-control border border-primary text-center rounded-5"
                                    placeholder="Alferez de Fragata">
                            
                        </div>
                        <div class="col" style="font-family: cursive;">
                            
                                <label for="" class=" text-center d-block">ARMA</label>
                                <input type="text" name="arma" class="form-control border border-primary text-center rounded-5"
                                    placeholder="Marina">
                            
                        </div>
                    </div>

                    <div class="row m-2">
                        <div class="row">
                            <!-- Primer elemento -->
                            <div class="col" style="font-family: cursive;">
                                <label for="" class="text-center d-block">DEPENDENCIA</label>
                                <select class="form-select border border-primary text-center rounded-5"
                                    aria-label="Default select example" name="dependencia">
                                    <option selected>Elige Uno</option>
                                    <option value="MAGA">Ministerio de Agricultura, Ganadería y Alimentación MAGA</option>
                                    <option value="MARN">Ministerio de Ambiente y Recursos Naturales MARN</option>\
                                    <option value="CIV">Ministerio de Comunicaciones, Infraestructura y Vivienda CIV</option>
                                    <option value="MCD">Ministerio de Cultura y Deportes MCD</option>
                                    <option value="MINDEF">Ministerio de la Defensa Nacional MINDEF</option>
                                    <option value="MINDESCO">Ministerio de Desarrollo Social MINDESCO</option>
                                    <option value="MINECO">Ministerio de Economía MINECO</option>
                                    <option value="MINEDUC">Ministerio de Educación MINEDUC</option>
                                    <option value="MEM">Ministerio de Energía y Minas MEM</option>
                                    <option value="MINFIN">Ministerio de Finanzas Públicas MINFIN</option>
                                    <option value="MINGOB">Ministerio de Gobernación MINGOB</option>
                                    <option value="MINEX">Ministerio de Relaciones Exteriores MINEX</option>
                                    <option value="MSPAS">Ministerio de Salud Pública y Asistencia Social MSPAS</option>
                                    <option value="MINTRABAJO">Ministerio de Trabajo y Previsión Social MINTRABAJO</option>

                                </select>
                            </div>

                            <!-- Segundo elemento -->
                            <div class="col text-center mt-2" style="font-family: cursive;">
                                <label for="" class="d-block">CURSOS</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input rounded-5" type="checkbox" id="inlineCheckbox1"
                                        value="KAIBIL" name="curso">
                                    <label class="form-check-label" name="curso" for="inlineCheckbox1">K</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input rounded-5" type="checkbox" id="inlineCheckbox2"
                                        value="INFORMATICA" name="curso">
                                    <label class="form-check-label" name="curso" for="inlineCheckbox2">I</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input rounded-5" name="curso" type="checkbox" id="inlineCheckbox2"
                                        value="PARACAIDISTA" n>
                                    <label class="form-check-label" name="curso" for="inlineCheckbox2">P</label>
                                </div>
                            </div>
                            
                                <div class="row mt-3 mb-2">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary rounded-5" style="font-family: cursive; font-size: 5mm">Guardar</button>
                                    </div>
                                </div>
                                </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- aqui finaliza el col1 -->

            <!-- col2 -->
            <div class="col text-bg-secondary p-2 border border-5 border-dark m-3">
                <div class="border border-dark bg-opacity-25 shadow p-3 mb-5 bg-success rounded m-3 mt-5 " >
                    <div class="text-white text-center" style="font-family: cursive"><hr><h3>DEPENDENCIAS MILITARES</h3><hr></div>
                    <div class="row">
                    <div class="col-6 mt-5">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/fen2.jpeg" class="d-block  p-3 mb-2  rounded-5 placeholder-wave" alt="..." width="300px" style="border: solid lightblue;">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/BIM2.png" class="d-block w-100 p-3 mb-2 rounded-5 placeholder-wave" alt="..." style="border: solid lightblue;">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/CMD.webp" class="d-block w-100 p-4 mb-3 rounded-5 placeholder-wave" alt="..." style="border: solid lightblue;">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/CNC.jpg" class="d-block w-100 p-3 mb-2 rounded-5 placeholder-wave" alt="..." style="border: solid lightblue;">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/CNP2.jpg" class="d-block w-100 p-3 mb-2 rounded-5 placeholder-wave" alt="..." style="border: solid lightblue;">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/eng2.jpg" class="d-block w-100 p-3 mb-2 rounded-5 placeholder-wave" alt="..." style="border: solid lightblue;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        
                    </div>
                    <!-- col2 row1 -->
                    <div class="col-6">
                        <div class="accordion accordion-flush mt-3 " id="accordionFlushExample">
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header rounded-5">
                                    <button class="accordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne" >
                                        Comando De Fuerza Especial Naval
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"style="text-align: justify; font-family: cursive;">
                                        El Comando Naval Estratégico, es representativo de la sociedad guatemalteca,
                                        constituido por ciudadanos caracterizados con honor, valor, lealtad, virtud,
                                        profesionalismo y confiabilidad, puestos al servicio de nuestra querida patria
                                        Guatemala y dispuestos a cumplir con la máxima fuerza, espíritu y nobleza la
                                        misión encomendada, de "efectuar operaciones navales y de policía marítima en
                                        aguas jurisdiccionales de Guatemala y Alta Mar, con el propósito de contribuir
                                        con otros entes del Estado y Organizaciones Internacionales para contrarrestar
                                        las amenazas emergentes, delitos conexos, combate directo contra el narcotráfico
                                        y el terrorismo transnacional".</div>
                                </div>
                            </div>
                            
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Brigada de Infanteria de Marina
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="text-align: justify; font-family: cursive;">En mi calidad de Comandante de la Brigada de Infantería
                                        de Marina, agradezco a Dios y al Mando del Ejército de Guatemala, por permitirme
                                        ser el líder de una Brigada Estratégica de la Fuerza de Mar, con la misión de
                                        garantizar la soberanía de las aguas interiores, lacustres y fluviales de la
                                        República de Guatemala; coadyuvando a la seguridad y desarrollo integral de los
                                        guatemaltecos.

                                        Los Oficiales Superiores, Oficiales Subalternos, Maestres, Contramaestres,
                                        Marineros, Especialistas e Infantes de Marina, somos respetuosos de la
                                        Constitución Política de la República, Leyes y Reglamentos del Ejército de
                                        Guatemala; asimismo, garantes del respeto de los derechos humanos y de la
                                        dignidad de los ciudadanos.

                                        Como parte de la Fuerza de Mar del Ejército de Guatemala, la Brigada de
                                        Infantería de Marina con su lema “Hombres de mar para conquistar la tierra”
                                        refiere las capacidades diferenciadas y competencias para desarrollar
                                        operaciones anfibias y ribereñas; en los ámbitos lacustres, fluviales y en los
                                        litorales, en respuesta a las amenazas nacionales, transnacionales, protección
                                        al medio ambiente, responder a las amenazas naturales y antropogénicas con el
                                        propósito de salvaguardar la vida de las personas y sus bienes.</div>
                                </div>
                            </div>
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsedaccordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Comandancia De La Marina De La Defensa Nacional
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="text-align: justify; font-family: cursive;">
                                        La Misión de la Marina de la Defensa Nacional es custodiar los espacios
                                        acuáticos jurisdiccionales del Estado de Guatemala, proteger los intereses de
                                        los guatemaltecos en el mar; siendo la única institución del Estado con el
                                        respaldo legal, capacidad debidamente entrenada para garantizar el cumplimiento
                                        de las leyes guatemaltecas en los espacios acuáticos, así como enfrentar a las
                                        amenazas transnacionales que usen dichos espacios soberanos y jurisdiccionales.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Comando Naval Del Caribe
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="text-align: justify; font-family: cursive;">
                                        El Comando Naval del Caribe, es la génesis de la Marina de la Defensa Nacional;
                                        desde el 15 de enero de 1959, bajo la presidencia del General Miguel Idígoras
                                        Fuentes, estamos comprometidos y fiel cumplimiento de la misión, coadyuvando con
                                        las Fuerzas de Tierra y Aire a alcanzar los Objetivos Nacionales.

                                        Las unidades navales que conforman este Comando Naval surcan el mar caribe
                                        guatemalteco, así como nuestros lagos y ríos están al servicio de todos los
                                        ciudadanos guatemaltecos con la finalidad de prevenir y disuadir toda amenaza
                                        directa al Estado, tales como: narcotráfico, tráfico de personas, depredación de
                                        los recursos naturales, pesca ilegal, terrorismo, contrabando, amenazas a la
                                        infraestructura portuaria, control de vedas y la violación a las leyes
                                        aplicables al medio marino.</div>
                                </div>
                            </div>
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Comando Naval Del Pacifico
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="text-align: justify; font-family: cursive;">En mi calidad de Comandante del Comando Naval del
                                        Pacífico, me enorgullece pertenecer a un grupo selecto conformado por hombres y
                                        mujeres de la Fuerza de Mar del glorioso Ejército de Guatemala.

                                        La Tripulación del Comando Naval del Pacífico, está entrenada y capacitada
                                        profesionalmente, para efectuar operaciones de búsqueda y rescate, salvaguarda
                                        naval, control de tráfico marítimo, lacustre y pluvial, con la finalidad de
                                        negar los espacios acuáticos al crimen organizado, cumpliendo con lo estipulado
                                        en la constitución política de Guatemala, leyes nacionales y en apego a los
                                        diferentes acuerdos y tratados nacionales e internacionales que el gobierno de
                                        Guatemala ha firmado y ratificado..</div>
                                </div>
                            </div>
                            <div class="accordion-item p-1 mb-1 bg-success p-1 text-dark bg-opacity-50 text-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-center text-white bg-success bg-opacity-50" style="font-family: cursive;" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Escuela Naval De Guatemala
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="text-align: justify; font-family: cursive;">La Dirección, el personal de Oficiales Superiores,
                                        Oficiales Subalternos, Cuerpo de Guardiamarinas y Cadetes Navales, Marinería,
                                        Policías Navales Ordinarios y personal por contrato, le dan la más cordial
                                        bienvenida a la página oficial de la Escuela Naval de Guatemala.

                                        La misión de la Escuela Naval de Guatemala es el ente del Estado encargado de la
                                        formación, tecnificación, especialización y profesionalización de hombres y
                                        mujeres; militares o civiles que se dedican a la seguridad, la defensa, la
                                        investigación y el desarrollo de las ciencias y técnicas del mar, en los órdenes
                                        naval, mercante, pesquero y portuario para el fortalecimiento del poder marítimo
                                        de Guatemala.

                                        La educación, es el instrumento por medio del cual se logran alcanzar y
                                        consolidar los objetivos de una sociedad y es la premisa fundamental para lograr
                                        el desarrollo de nuestra Guatemala, que tiene el privilegio de ser un país
                                        marítimo y estamos conscientes que solo con las bases sólidas que ofrece la
                                        educación se pueden aprovechar los recursos y todas las oportunidades que nos da
                                        el mar.</div>
                                </div>
                            </div>
                        </div>

                    </div>
</div>
                </div>
            </div>
        </div>
    </div>


<!-- row corregido -->
    <!-- row2 -->
    <div class="row bg-info m-2">
    <!-- col1 row2 -->
    <div class="col-6">

        <div class="text-bg-secondary p-2 border border-5 border-dark m-1">
            <div class="border border-dark bg-opacity-25 shadow p-3 mb-5 bg-success rounded mt-5 m-4" style="font-family: cursive;">
                <div class="col text-center"><i class="bi bi-person-bounding-box text-white " style="font-size: 80px;"></i></div>

                <div class="text-center text-white"><hr><h3>TABLA DE INFORMACION</h3><hr></div>

                <?php
                $cat = isset($_GET["cat"]) ? $_GET["cat"] : "";
                $nom1= isset($_GET["nom1"]) ? $_GET["nom1"]: "";
                $nom2 = isset($_GET["nom2"]) ? $_GET["nom2"] : "";
                $ape1= isset($_GET["ape1"]) ? $_GET["ape1"]: "";
                $ape2 = isset($_GET["ape2"]) ? $_GET["ape2"] : "";
                $correo= isset($_GET["correo"]) ? $_GET["correo"]: "";
                $edad = isset($_GET["edad"]) ? $_GET["edad"] : "";
                $sexo= isset($_GET["sexo"]) ? $_GET["sexo"]: "";
                $grado = isset($_GET["grado"]) ? $_GET["grado"] : "";
                $dependencia = isset($_GET["dependencia"]) ? $_GET["dependencia"] : "";
                $curso = isset($_GET["curso"]) ? $_GET["curso"] : "";
                ?>

                <div class="table-responsive">
                    <table class="table text-center table table-bordered border-warning">
                        <thead>
                            <tr>
                                <th scope="col">CATALOGO</th>
                                <th scope="col">NOMBRE 1</th>
                                <th scope="col">NOMBRE 2</th>
                                <th scope="col">APELLIDO 1</th>
                                <th scope="col">APELLIDO 2</th>
                                <th scope="col">CORREO</th>
                                <th scope="col">EDAD</th>
                                <th scope="col">SEXO</th>
                                <th scope="col">GRADO</th>
                                <th scope="col">DEPENDENCIA</th>
                                <th scope="col">CURSO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo "$cat";  ?> </td>
                                <td><?php echo "$nom1";  ?> </td>
                                <td><?php echo "$nom2";  ?> </td>
                                <td><?php echo "$ape1";  ?> </td>
                                <td><?php echo "$ape2";  ?> </td>
                                <td><?php echo "$correo";  ?> </td>
                                <td><?php echo "$edad";  ?> </td>
                                <td><?php echo "$sexo";  ?> </td>
                                <td><?php echo "$grado";  ?> </td>
                                <td><?php echo "$dependencia";  ?> </td>
                                <td><?php echo "$curso";  ?> </td>
                            </tr>   
                           
                         
                          
                            
                           
        
                                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- col2 row2 -->
    <div class="col-6">
        <div class="text-bg-secondary p-2 border border-5 border-dark m-1">
            <div class="border border-dark bg-opacity-25 shadow p-3 mb-5 bg-primary rounded mt-2 m-5">
                <div class="text-wrap text-center ml-2">
                    <hr><h3>GALERIA</h3><hr>
                </div>

                <div class="row">
                <div class="col text-center m-1">
                   <img src="./images/b10.jpg" alt=""  class="img-fluid border border-2 rounded-4 placeholder-wave" width="125px" height="150px">
               </div> 

                    <div class="col text-center m-1">   
                        <img src="./images/b2.jpg" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave" width="125px" height="145px">
                    </div>
                    <div class="col text-center">
                        <img src="./images/b3.jpg" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave" width="145px" height="170px">
                    </div>
                </div>
                <div class="row">
                <div class="col text-center m-1">
                <img src="./images/b4.jpg" alt=""  class="img-fluid border border-2 rounded-4 placeholder-wave " width="150px" height="110px">
                 </div>
                 <div class="col text-center m-1">
               <img src="./images/b9.webp" alt="" class="img-fluid border border-2 rounded-4 mt-2 placeholder-wave" width="200px" height="200px">
                 </div>
                 <div class="col text-center">
                <img src="./images/b6.avif" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave mb-1" width="150px" height="110px">
                </div>
                </div>
                <div class="row">
                <div class="col text-center">
                <img src="./images/b7.webp" alt=""  class="img-fluid border border-2 rounded-4 placeholder-wave" width="150px" height="190px">
                  </div>
                  <div class="col text-center">
                <img src="./images/b8.jpg" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave mb-1" width="180px" height="180px">
               </div>
               
                 <div class="col text-center">
              <img src="./images/b11.jpg" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave mt-1" width="140px" height="100px">
             </div>
                </div>
                <div class="row">
               <div class="col text-center">
                <img src="./images/b5.jpeg" alt="" class="img-fluid border border-2 rounded-4 mt-3 placeholder-wave " width="200px" height="200px">
                 </div>
            <div class="col text-center">
            <img src="./images/b12.jpeg" alt="" class="img-fluid border border-2 rounded-4 placeholder-wave mt-2" width="200px" height="200  px">
             </div>
             <div class="col text-center">     
                        <img src="./images/b1.jpg" alt="" class="img-fluid border border-2 rounded-3 placeholder-wave" width="200px" height="300px">
                    </div>
             </div>
                <!-- Agregar las imágenes restantes aquí -->

            </div>
        </div>
    </div>
    </div>

        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>