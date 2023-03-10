@extends('dashboard.partials.base')

@section('title')
    Mostrar mi perfil
@endsection

@section('content')
    <div class="mainTray">
        <div class="sectionTitle">
            Mi perfil
        </div>
        @if (session()->has('successUpdateUser'))
            <div class="formSubmitSuccess center">
                {{ session('successUpdateUser') }}
            </div>
        @endif

        <form method="POST" action="{{ route('dashboard.updateProfile') }}" id="editMyProfile" accept-charset="UTF-8"
        enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="mainDataCenterRow">
                    <div class="leftColForm">

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelShirtSizeVol" class="formSections form-label" for="shirtSizeVol"><strong>Talla de
                                        camiseta:
                                    </strong></label>
                                <br />
                                <select id="shirtSizeVol" name="shirtSizeVol" class="small for-select" required>
                                    <option value="">Seleccione:</option>
                                    <option value="XS" {{ $volunteer->shirtSizeVol == 'XS' ? 'selected' : '' }}>XS
                                    </option>
                                    <option value="S" {{ $volunteer->shirtSizeVol == 'S' ? 'selected' : '' }}>S
                                    </option>
                                    <option value="M" {{ $volunteer->shirtSizeVol == 'M' ? 'selected' : '' }}>M
                                    </option>
                                    <option value="L" {{ $volunteer->shirtSizeVol == 'L' ? 'selected' : '' }}>L
                                    </option>
                                    <option value="XL" {{ $volunteer->shirtSizeVol == 'XL' ? 'selected' : '' }}>XL
                                    </option>
                                    <option value="2XL" {{ $volunteer->shirtSizeVol == '2XL' ? 'selected' : '' }}>2XL
                                    </option>
                                    <option value="3XL" {{ $volunteer->shirtSizeVol == '3XL' ? 'selected' : '' }}>3XL
                                    </option>
                                </select>
                            </p>
                        </div>
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelOrganiVol" class="formSections" for="organiVol"><strong>Organizaci??n:
                                    </strong></label>
                                <br />
                                <select name="organiVol" id="organiVol" class="small">
                                    <option value="SIN Empresa Asociada"
                                        {{ $volunteer->organiVol == 'SIN Empresa Asociada' ? 'selected' : '' }}>SIN Empresa
                                        Asociada
                                    </option>
                                    <option value="Arsus Energ??a"
                                        {{ $volunteer->organiVol == 'Arsus Energ??a' ? 'selected' : '' }}>
                                        Arsus Energ??a</option>
                                    <option value="Comunicaciones"
                                        {{ $volunteer->organiVol == 'Comunicaciones' ? 'selected' : '' }}>
                                        Avanzadas Comunicaciones Avanzadas</option>
                                    <option value="Eco Rail" {{ $volunteer->organiVol == 'Eco Rail' ? 'selected' : '' }}>
                                        Eco
                                        Rail
                                    </option>
                                    <option value="Eysertel" {{ $volunteer->organiVol == 'Eysertel' ? 'selected' : '' }}>
                                        Eysertel
                                    </option>
                                    <option value="Fundaci??n Magtel"
                                        {{ $volunteer->organiVol == 'Fundaci??n Magtel' ? 'selected' : '' }}>Fundaci??n
                                        Magtel
                                    </option>
                                    <option value="Ingenier??a y Planificaci??n"
                                        {{ $volunteer->organiVol == 'Ingenier??a y Planificaci??n' ? 'selected' : '' }}>
                                        Ingenier??a y
                                        Planificaci??n</option>
                                    <option value="Magtel Global"
                                        {{ $volunteer->organiVol == 'Magtel Global' ? 'selected' : '' }}>
                                        Magtel Global</option>
                                    <option value="Magtel Operaciones"
                                        {{ $volunteer->organiVol == 'Magtel Operaciones' ? 'selected' : '' }}>Magtel
                                        Operaciones
                                    </option>
                                    <option value="Operadora de Nuevos Sistemas"
                                        {{ $volunteer->organiVol == 'Operadora de Nuevos Sistemas' ? 'selected' : '' }}>
                                        Operadora de
                                        Nuevos Sistemas</option>
                                    <option value="Tharsis Mining"
                                        {{ $volunteer->organiVol == 'Tharsis Mining' ? 'selected' : '' }}>
                                        Tharsis Mining</option>
                                    <option value="UTE Bop S??neca"
                                        {{ $volunteer->organiVol == 'UTE Bop S??neca' ? 'selected' : '' }}>
                                        UTE Bop S??neca</option>
                                    <option value="El Carrascal"
                                        {{ $volunteer->organiVol == 'El Carrascal' ? 'selected' : '' }}>El
                                        Carrascal</option>
                                    <option value="Magtel Energ??a Sostenible"
                                        {{ $volunteer->organiVol == 'Magtel Energ??a Sostenible' ? 'selected' : '' }}>Magtel
                                        Energ??a
                                        Sostenible</option>
                                    <option value="SVF Renting"
                                        {{ $volunteer->organiVol == 'SVF Renting' ? 'selected' : '' }}>
                                        SVF
                                        Renting</option>
                                </select>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelDelegations" class="formSections" for="shirtSizeVol"><strong>Delegaciones:
                                    </strong></label>
                                <br />
                            <p>Si quieres seleccionar m??s de uno usa las teclas Mayuscula o control</p>
                            <?php
                            $checked = [];
                            foreach ($volunteer->delegations as $delegation) {
                                array_push($checked, $delegation->delegation_id);
                            }
                            echo '<select name="delegations[]" id="delegations" multiple="multiple" class="multipleSelect big">';
                            foreach ($allDelegations as $delegation) {
                                if (in_array($delegation->delegation_id, $checked)) {
                                    echo '<option value="' . $delegation->delegation_id . '" selected>' . $delegation->nameDel . '</option>';
                                } else {
                                    echo '<option value="' . $delegation->delegation_id . '">' . $delegation->nameDel . '</option>';
                                }
                            }
                            echo '</select>';
                            ?>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelTelVol" class="formSections" for="telVol"><strong>Tel??fono:
                                    </strong></label>
                                <br />
                                <input type="text" id="telVol" name="telVol" value="{{ $volunteer->telVol }}"
                                    required>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelCorpMailVol" class="formSections" for="corpMailVol"><strong>Correo
                                        Electr??nico
                                        Corporativo: </strong></label>
                                <br />
                                <input type="email" id="corpMailVol" name="corpMailVol"
                                    value="{{ $volunteer->corpMailVol }}">
                            </p>
                        </div>
                    </div>

                    <div class="centerCol">
                        <p>
                            @if (Auth::user()->imageVol == 0 || Auth::user()->imageVol == null)
                                <img class="avatarMyProfile" src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="{{ Auth::user()->nameVol }}">
                            @else
                                <img class="avatarMyProfile" src="data:image/jpeg;base64,{{ base64_encode(Storage::get('avatar/' . Auth::user()->imageVol)) }}"
                                alt="{{ Auth::user()->nameVol }}" id="avatarInTopBar" />
                            @endif
                        </p>
                    </div>

                    <div class="rightColForm">
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labeltypeViaVol" class="formSections" for="typeViaVol"><strong>Tipo de V??a:
                                    </strong></label>
                                <br />
                                <select id="typeViaVol" name="typeViaVol" class="small" required>
                                    <option value="">Seleccione:</option>
                                    <option value="Autopista"
                                        {{ $volunteer->typeViaVol == 'Autopista' ? 'selected' : '' }}>
                                        Autopista
                                    </option>
                                    <option value="Autovia" {{ $volunteer->typeViaVol == 'Autov??a' ? 'selected' : '' }}>
                                        Autov??a
                                    </option>
                                    <option value="Avenida" {{ $volunteer->typeViaVol == 'Avenida' ? 'selected' : '' }}>
                                        Avenida
                                    </option>
                                    <option value="Bulevar" {{ $volunteer->typeViaVol == 'Bulevar' ? 'selected' : '' }}>
                                        Bulevar
                                    </option>
                                    <option value="Calle" {{ $volunteer->typeViaVol == 'Calle' ? 'selected' : '' }}>Calle
                                    </option>
                                    <option value="Calle peatonal"
                                        {{ $volunteer->typeViaVol == 'Calle peatonal' ? 'selected' : '' }}>Calle peatonal
                                    </option>
                                    <option value="Callejon" {{ $volunteer->typeViaVol == 'Callej??n' ? 'selected' : '' }}>
                                        Callej??n
                                    </option>
                                    <option value="Camino" {{ $volunteer->typeViaVol == 'Camino' ? 'selected' : '' }}>
                                        Camino
                                    </option>
                                    <option value="Ca??ada" {{ $volunteer->typeViaVol == 'Ca??ada' ? 'selected' : '' }}>
                                        Ca??ada
                                        real
                                    </option>
                                    <option value="Carretera"
                                        {{ $volunteer->typeViaVol == 'Carretera' ? 'selected' : '' }}>
                                        Carretera
                                    </option>
                                    <option value="Carretera de circunvalaci??n"
                                        {{ $volunteer->typeViaVol == 'Carretera de circunvalaci??n' ? 'selected' : '' }}>
                                        Carretera de
                                        circunvalaci??n</option>
                                    <option value="Carril" {{ $volunteer->typeViaVol == 'Carril' ? 'selected' : '' }}>
                                        Carril
                                    </option>
                                    <option value="Ciclovia" {{ $volunteer->typeViaVol == 'Ciclov??a' ? 'selected' : '' }}>
                                        Ciclov??a
                                    </option>
                                    <option value="Corredera" {{ $volunteer->typeViaVol == 'XS' ? 'selected' : '' }}>
                                        Corredera
                                    </option>
                                    <option value=">Costanilla"
                                        {{ $volunteer->typeViaVol == 'Costanilla' ? 'selected' : '' }}>
                                        Costanilla</option>
                                    <option value="Parque" {{ $volunteer->typeViaVol == 'Parque' ? 'selected' : '' }}>
                                        Parque
                                    </option>
                                    <option value="Pasadizo elevado"
                                        {{ $volunteer->typeViaVol == 'Pasadizo elevado' ? 'selected' : '' }}>Pasadizo
                                        elevado
                                    </option>
                                    <option value="Pasaje" {{ $volunteer->typeViaVol == 'Pasaje' ? 'selected' : '' }}>
                                        Pasaje
                                    </option>
                                    <option value="Paseo maritimo"
                                        {{ $volunteer->typeViaVol == 'Paseo mar??timo' ? 'selected' : '' }}>Paseo mar??timo
                                    </option>
                                    <option value="Plaza" {{ $volunteer->typeViaVol == 'Plaza' ? 'selected' : '' }}>Plaza
                                    </option>
                                    <option value="Pretil" {{ $volunteer->typeViaVol == 'Pretil' ? 'selected' : '' }}>
                                        Pretil
                                    </option>
                                    <option value="Puente" {{ $volunteer->typeViaVol == 'Puente' ? 'selected' : '' }}>
                                        Puente
                                    </option>
                                    <option value="Ronda" {{ $volunteer->typeViaVol == 'Ronda' ? 'selected' : '' }}>Ronda
                                    </option>
                                    <option value="Sendero" {{ $volunteer->typeViaVol == 'Sendero' ? 'selected' : '' }}>
                                        Sendero
                                    </option>
                                    <option value="Travesia" {{ $volunteer->typeViaVol == 'Traves??a' ? 'selected' : '' }}>
                                        Traves??a
                                    </option>
                                    <option value="Tunel" {{ $volunteer->typeViaVol == 'T??nel' ? 'selected' : '' }}>T??nel
                                    </option>
                                    <option value="Via pecuaria"
                                        {{ $volunteer->typeViaVol == 'V??a pecuaria' ? 'selected' : '' }}>V??a
                                        pecuaria</option>
                                    <option value="Via rapida"
                                        {{ $volunteer->typeViaVol == 'V??a rapida' ? 'selected' : '' }}>
                                        V??a
                                        r??pida</option>
                                    <option value="Via verde"
                                        {{ $volunteer->typeViaVol == 'V??a verde' ? 'selected' : '' }}>
                                        V??a
                                        verde</option>
                                    <option value="Urbanizacion"
                                        {{ $volunteer->typeViaVol == 'Urbanizacion' ? 'selected' : '' }}>
                                        Urbanizaci??n</option>
                                </select>
                            </p>
                        </div>
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labeldirecVol" class="formSections" for="direcVol"><strong>Direcci??n:
                                    </strong></label>
                                <br />
                                <input type="text" id="direcVol" name="direcVol" value="{{ $volunteer->direcVol }}"
                                    required>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <label id="labelnumVol" class="formSections" for="numVol"><strong>N??mero: </strong></label>
                            <br />
                            <input type="text" id="numVol" name="numVol" value="{{ $volunteer->numVol }}"
                                maxlength="9" required>
                        </div>
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelflatVol" class="formSections" for="flatVol"><strong>Planta:
                                    </strong></label>
                                <br />
                                <input type="text" id="flatVol" name="flatVol" value="{{ $volunteer->flatVol }}"
                                    maxlength="9">
                            </p>
                        </div>
                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labeladitiInfoVol" class="formSections" for="aditiInfoVol"><strong>Informaci??n
                                        Adicional: </strong></label>
                                <br />
                                <input type="text" id="aditiInfoVol" name="aditiInfoVol"
                                    value="{{ $volunteer->aditiInfoVol }}">
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelCodPosVol" class="formSections" for="codPosVol"><strong>C??digo Postal:
                                    </strong></label>
                                <br />
                                <input type="text" id="codPosVol" name="codPosVol"
                                    value="{{ $volunteer->codPosVol }}" required>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelStateVol" class="formSections" for="stateVol"><strong>Provincia:
                                    </strong></label>
                                <br />
                                <input type="text" id="stateVol" name="stateVol" value="{{ $volunteer->stateVol }}"
                                    readonly>
                            </p>
                        </div>

                        <div class="eachCreateInfoExtraElement">
                            <p>
                                <label id="labelTownVol" class="formSections" for="townVol"><strong>Localidad:
                                    </strong></label>
                                <br />
                                <input type="text" id="townVol" name="townVol" value="{{ $volunteer->townVol }}"
                                    readonly>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="divButtonMyProfile">              
                    <p><button type="submit" class="botonesControl" id="updateMyProfile">Actualizar</button></p>
                
            </div>

        </form>

    </div>
@endsection


@section('headlibraries')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/codPos.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>