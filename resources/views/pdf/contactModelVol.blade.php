<!DOCTYPE html>
<html>

<head>
    <title>Inscripcion Voluntariado Magtel</title>
    <style type="text/css">
        * {
            font-size: 14px;
            font-family: 'Lato';
            src: url(<?php echo asset('fonts/Lato-Regular.jpg'); ?>"") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        #logoPDF {
            width: 40%;
            float: left;
        }

        #logoPDF img {
            width: 300px;
        }

        #textHeaderPDF {
            width: 48%;
            float: right;
            text-align: right;
        }

        .textoMarcado {
            color: #01b6ed;
            font-weight: bold;
        }

        .separator {
            margin-top: 55px;
            margin-bottom: 30px;
        }

        .marked {
            font-weight: bold;
        }

        .eachSheet {
            padding-left: 20px;
            padding-right: 20px;
        }


        .eachSheet p.title {
            text-align: center;
            margin: 0 auto;
            font-size: 16px;
            margin-top: 30px;
            font-weight: bold;
        }

        #firstTitle {
            margin-top: 110px !important;
            text-align: center;
            margin: 0 auto;
            font-size: 20px;
            font-weight: bold;
        }

        #legales {
            font-style: italic;
        }

        #firma {
            font-weight: bold;
            width: 50%;
            float: right;
        }

        td,
        th {
            border-bottom: 1px solid #54595f;
        }

        strong {
            font-weight: bold;
        }

        .yesNoBox {
            width: 50px;
            float: left;
            margin-left: 50px;
        }

        .yesNo {
            border: 1px solid black;
            width: 20px;
            height: 20px;
            float: right;
        }

        .subTitle {
            text-decoration: underline;
        }

        .withMargin {
            margin-top: 50px;
        }

        .signContainer {
            width: 100%;
        }

        #signAccordance {
            text-align: right;
        }

        #signDate {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .bothSignContainer {
            display: flex;
            clear: both;
            margin-bottom: 130px;
        }

        #entitySign,
        #volunteerSign {
            width: 50%;
            float: left;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $path = 'images/logoNeg.jpg';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $logoPDF = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    <div id="headerPDF">
        <div id="logoPDF">
            <img src="<?php echo $logoPDF; ?>" />
        </div>
        <div id="textHeaderPDF">
            <span class="textoMarcado">Fundaci??n Magtel</span>
            <br />
            C/ Gabriel Ramos Bejarano 114
            <br />
            (Pol??gono Industrial ???Las Quemadas???), 14014 C??rdoba
        </div>
    </div>


    <div class="eachSheet">

        <p id="firstTitle">MODELO DE ACUERDO O COMPROMISO DE INCORPORACI??N AL PROGRAMA DE VOLUNTARIADO CORPORATIVO</p>
        <p>De una parte, <strong>FUNDACI??N MAGTEL</strong> con CIF <strong>G14936439</strong>, actuando como
            representante legal <strong>D. ADRI??N FERN??NDEZ C??RDENAS</strong> mayor de edad y con DNI.
            <strong>30826308Y</strong>, en calidad de Director de la Fundaci??n Magtel (en adelante "LA FUNDACI??N").</p>
        <p>De otra parte, D??. / D., <strong>{{ $name }}</strong> nacido el d??a
            <strong>{{ $birthDate }}</strong>, con <strong>{{ $numDoc }}</strong>, vecino/a de C??rdoba con
            domicilio en la <strong>{{ $street }}</strong> (en adelante "LA PERSONA VOLUNTARIA").</p>
        <p>Ambas partes se reconocen mutuamente plena capacidad para realizar el presente ACUERDO DE COLABORACI??N, que
            se regir?? por la Ley 45/2015, de 14 de octubre, de Voluntariado.</p>

        <p class="title withMargin">MANIFIESTAN</p>
        <p>I.- Fundaci??n Magtel est?? constituida con personalidad jur??dica aut??noma, y tiene como objeto y fines los
            siguientes:</p>
        <p>Los fines de inter??s general de Fundaci??n Magtel son la educaci??n, promoci??n cultural y la investigaci??n
            cient??fica y tecnol??gica en el ??mbito medioambiental, as?? como la cooperaci??n internacional al desarrollo,
            igualmente, de manera secundaria la fundaci??n perseguir?? fines de acci??n social en estos campos.</p>
        <p>Para la consecuci??n de sus fines, la Fundaci??n establece programas de voluntariado.</p>
        <p>II.- LA PERSONA VOLUNTARIA est?? interesada en colaborar de manera altruista en el marco de alguno de los
            programas de voluntariado de la Fundaci??n.</p>
        <p>III.- Para formalizar las relaciones que ambas partes quieren establecer, dando cumplimento a lo dispuesto en
            el art??culo 12.2.a) de la Ley 45/2015, de 14 de octubre, de Voluntariado, por el que se realiza el presente
            ACUERDO DE COLABORACI??N, que se regir?? por las siguientes,</p>

        <p class="title withMargin">CL??USULAS</p>
        <p><strong>Primera. - Car??cter altruista de la relaci??n:</strong></p>
        <p>La colaboraci??n que preste la PERSONA VOLUNTARIA en cualquiera de los programas de la Fundaci??n tendr?? un
            car??cter totalmente altruista y gratuito, sin que d?? lugar a percibir ning??n tipo de salario, honorarios,
            prima, ayudas o cualquiera otra contraprestaci??n de car??cter retributivo.</p>
        <p>En ning??n caso podr?? tratarse, en consecuencia, de una relaci??n laboral, funcionarial, mercantil o cualquiera
            otra retribuida.</p>
        <p>La Persona Voluntaria consiente la cesi??n de los derechos de imagen para poder difundir en redes de la
            Fundaci??n.</p>
        </p>
        <div style="height:120px;">&nbsp;</div>
    </div>
    <div id="headerPDF">
        <div id="logoPDF">
            <img src="<?php echo $logoPDF; ?>" />
        </div>
        <div id="textHeaderPDF">
            <span class="textoMarcado">Fundaci??n Magtel</span>
            <br />
            C/ Gabriel Ramos Bejarano 114
            <br />
            (Pol??gono Industrial ???Las Quemadas???), 14014 C??rdoba
        </div>
    </div>
    <div style="clear:both;"></div>
    <div class="eachSheet">

        <p class="withMargin"><strong>Segunda. - Derechos y deberes de la persona voluntaria:</strong></p>
        <p class="subTitle">LA PERSONA VOLUNTARIA tiene los siguientes derechos:</p>
        <p>a) Recibir la orientaci??n, formaci??n y apoyo necesarios para el ejercicio de su actividad.
            <br />b) Ser tratado sin discriminaci??n, respetando su libertad, dignidad, intimidad y creencias.
            <br />c) Participar activamente en la Fundaci??n, de acuerdo con sus Estatutos y normas de actuaci??n.
            <br />d) Estar asegurado contra los riesgos de enfermedad y accidentes derivados del ejercicio de su
            actividad.
            <br />e) Ser reembolsado de los gastos que realice en el desarrollo de su actividad.
            <br />f) Disponer de una credencial que le identifique como voluntario/a.
            <br />g) Realizar las actividades en las debidas condiciones de seguridad e higiene.
            <br />h) Recibir una certificaci??n da su participaci??n en los programas y proyectos de voluntariado.
            <br />i) Cesar libremente en su condici??n de persona voluntaria.
        </p>

        <p class="subTitle withMargin">LA PERSONA VOLUNTARIA tiene las siguientes obligaciones:</p>
        <p>a) Cumplir los compromisos adquiridos con La Fundaci??n, respectando sus fines y normativa.
            <br />b) Guardar la confidencialidad respecto a la informaci??n recibida y/o conocida en el desarrollo de su
            actividad voluntaria.
            <br />c) Rechazar cualquier contraprestaci??n material que pudiera recibir, bien del beneficiario, bien de
            otras personas relacionadas con su acci??n.
            <br />d) Respetar los derechos de los beneficiarios de su actividad voluntaria. Actuar de forma diligente y
            solidaria.
            <br />e) Participar en las tareas formativas previstas por la Fundaci??n, tanto espec??ficas de la actividad
            voluntaria, como generales sobre el voluntariado.
            <br />f) Seguir las instrucciones dictadas e impartidas en el desarrollo de las actividades encomendadas.
            <br />g) Utilizar debidamente la credencial y los distintivos de la Fundaci??n.
            <br />h) Respetar y cuidar los recursos materiales que la Fundaci??n ponga a su disposici??n.
        </p>

        <p class="withMargin"><strong>Tercera. - Deberes de LA ENTIDAD:</strong></p>
        <p class="subTitle">FUNDACI??N MAGTEL se compromete con LA PERSONA VOLUNTARIA, a:</p>
        <p>a) Cumplir los compromisos adquiridos en este Acuerdo.
            <br />b) Suscribir una p??liza de seguro, que cubra los riesgos derivados de la acci??n de voluntariado tanto
            la responsabilidad civil como los accidentes y enfermedad.
            <br />c) Cubrir los gastos derivados de prestaci??n del servicio y dotar a LA PERSONA VOLUNTARIA de los
            medios adecuados para el cumplimiento de sus cometidos.
            <br />d) Establecer los sistemas internos de informaci??n y orientaci??n necesarios para la realizaci??n de las
            tareas que sean encomendadas a LA PERSONA VOLUNTARIA.
            <br />e) Proporcionarle la formaci??n espec??fica y la orientaci??n necesaria para el ejercicio de su
            actividad.
            <br />f) Garantizar la realizaci??n de su actividad en las debidas condiciones de seguridad e higiene.
            <br />g) Facilitar a LA PERSONA VOLUNTARIA una credencial que le habilite e identifique para el desarrollo
            de su actividad (Peto).
            <br />h) Expedir un certificado que acredite los servicios prestados de manera mensual.
        </p>

    </div>
    <div style="height:120px;">&nbsp;</div>
    <div id="headerPDF">
        <div id="logoPDF">
            <img src="<?php echo $logoPDF; ?>" />
        </div>
        <div id="textHeaderPDF">
            <span class="textoMarcado">Fundaci??n Magtel</span>
            <br />
            C/ Gabriel Ramos Bejarano 114
            <br />
            (Pol??gono Industrial ???Las Quemadas???), 14014 C??rdoba
        </div>
    </div>
    <div style="clear:both;"></div>

    <div class="eachSheet">
        <p class="withMargin"><strong>Cuarta. - Contenido de las funciones y actividades de LA PERSONA
                VOLUNTARIA:</strong></p>
        <p>LA PERSONA VOLUNTARIA prestar?? su colaboraci??n en las actividades promovidas por Fundaci??n Magtel con las
            funciones detalladas en los anexos al presento acuerdo.</p>

        <p class="withMargin"><strong>Quinta. - Tiempo de dedicaci??n que se compromete a realizar LA PERSONA
                VOLUNTARIA:</strong></p>
        <p>LA PERSONA VOLUNTARIA prestar?? su colaboraci??n en las actividades promovidas por Fundaci??n Magtel por el
            tiempo de cada actividad detallado en los anexos al presento acuerdo.</p>

        <p class="withMargin"><strong>Sexta. - Proceso de formaci??n requerido:</strong></p>
        <p>Si LA PERSONA VOLUNTARIA requiere de un proceso de formaci??n previo o no para el desempe??o de la actividad de
            voluntariado, ser?? especificado en cada anexo por actividad al presente acuerdo.</p>
        <p>En caso afirmativo, LA PERSONA VOLUNTARIA para disponer de dicha formaci??n a trav??s de la colaboraci??n con
            terceras entidades para su capacitaci??n en la actividad en cuesti??n.</p>

        <p class="withMargin"><strong>S??ptima. - Duraci??n del compromiso:</strong></p>
        <p>El presente acuerdo tendr?? una duraci??n indefinida.</p>
        <p>Cualquiera de las partes podr?? dejarlo sin efecto, debiendo comunicar su decisi??n a la otra parte con una
            antelaci??n suficiente, seg??n el tipo de colaboraci??n que se est?? prestando y, en todo caso, de forma que no
            suponga perjuicio para la Fundaci??n Magtel.</p>

        <p class="withMargin"><strong>Octava. ??? Normativa.</strong></p>
        <p>Para lo no previsto en el presente acuerdo, se regir?? por lo dispuesto en la Ley 45/2015, de 14 de octubre,
            de Voluntariado.</p>

    </div>
    <div style="height:240px;">&nbsp;</div>
    <div id="headerPDF">
        <div id="logoPDF">
            <img src="<?php echo $logoPDF; ?>" />
        </div>
        <div id="textHeaderPDF">
            <span class="textoMarcado">Fundaci??n Magtel</span>
            <br />
            C/ Gabriel Ramos Bejarano 114
            <br />
            (Pol??gono Industrial ???Las Quemadas???), 14014 C??rdoba
        </div>
    </div>
    <div style="clear:both;"></div>
    </div>
    <div class="eachSheet">

        <div class="signContainer withMargin">
            <div id="signAccordance">
                En, en prueba de conformidad, firman ambas partes en:
            </div>
            <div id="signDate">
                <strong>
                    En C??rdoba a
                    {{ substr($date, 0, 2) }}
                    de
                    <?php
                    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                    echo $meses[ltrim(substr($date, 3, 2), '0') - 1];
                    ?>
                    de
                    {{ substr($date, -4, 4) }}
                </strong>
            </div>
            <div class="bothSignContainer">
                <div id="entitySign">
                    <strong>LA ENTIDAD.</strong>
                </div>
                <div id="volunteerSign">
                    <strong>LA PERSONA VOLUNTARIA:</strong>
                </div>
            </div>
            <div class="bothSignContainer">
                <div id="entitySign" class="subTitle">
                    <strong>Adri??n Fern??ndez C??rdenas</strong>
                </div>
                <div id="volunteerSign" class="subTitle">
                    <strong>{{ $name }}</strong>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
