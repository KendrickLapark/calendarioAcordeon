@foreach ($volunteers as $volunteer)
            <div class="mainData">
                <div class="row">
                    <div class="avatarUserRow">
                        @if ($volunteer->imageVol == 0 || $volunteer == null)
                            <img src="<?php echo asset('images/dashboard/noProfileImage.jpg'); ?>" alt="No hay imagen" class="avatarInShowAllUsers">
                        @else
                            <img src="{{ asset('storage/avatar/' . $volunteer->imageVol) }}" alt="{{ $volunteer->nameVol }}"
                                class="avatarInShowAllUsers">
                        @endif
                    </div>
                    <div class="nameSurVol">
                        <strong>
                            {{ $volunteer->nameVol }}
                            {{ $volunteer->surnameVol }}
                            {{ $volunteer->surname2Vol }}
                        </strong>
                        <br />
                        @if ($volunteer->organiVol == false)
                            SIN Empresa Asociada
                        @else
                            {{ $volunteer->organiVol }}
                        @endif
                    </div>
                    <div class="mailVol">
                        <i class='bx bx-envelope'></i>
                        <a href="mailto:{{ $volunteer->persMailVol }}">{{ $volunteer->persMailVol }}</a>
                        @if ($volunteer->corpMailVol)
                            (C)
                            <a href="mailto:{{ $volunteer->corpMailVol }}">{{ $volunteer->corpMailVol }}</a>
                        @endif
                    </div>
                    <div class="tlfVol">
                        <i class='bx bxs-phone'></i>
                        <a href="tel:+34{{ $volunteer->telVol }}">{{ $volunteer->telVol }}</a>
                    </div>
                    <div class="controlButtonMoreDetails">
                        <i class='bx bxs-down-arrow'></i>
                    </div>
                </div>
                <div class="hidden">
                    <div class="eachRow">
                        <div>
                            <strong>Fecha de nacimiento: </strong>
                            {{ date('d-m-Y', strtotime($volunteer->birthDateVol)) }}
                        </div>
                        <div>
                            <strong>{{ $volunteer->typeDocVol }}: </strong>
                            {{ $volunteer->numDocVol }}
                        </div>
                        <div>
                            <strong>Sexo:</strong>
                            {{ $volunteer->sexVol }}
                        </div>
                        <div>
                            <strong>Talla de camiseta: </strong>
                            {{ $volunteer->shirtSizeVol }}
                        </div>
                    </div>
                    <div class="eachRow">
                        <div>
                            <strong>Delegaciones: </strong>
                            @if (count($volunteer->delegations) == 0)
                                No tiene delegaci??n
                            @else
                                @foreach ($volunteer->delegations as $delegation)
                                    {{ $delegation->nameDel }},
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="eachRow">
                        <div>
                            <strong>Direcci??n: </strong> <br />
                            <div>
                                {{ $volunteer->typeViaVol }}
                                {{ $volunteer->direcVol }}
                            </div>
                            <div>
                                <strong>N??: </strong>
                                {{ $volunteer->numVol }}
                                {{ $volunteer->flatVol }}
                            </div>
                            <div>
                                <strong>C??digo Postal: </strong>
                                {{ $volunteer->codPosVol }}
                            </div>
                            <div>
                                <strong>Provincia: </strong>
                                {{ $volunteer->stateVol }}
                            </div>
                            <div>
                                <strong>Ciudad: </strong>
                                {{ $volunteer->townVol }}
                            </div>
                            <div>
                                <strong>Informaci??n Adicional: </strong>
                                {{ $volunteer->aditiInfoVol }}
                            </div>

                        </div>
                        <div>
                            <strong>Educaci??n: </strong><br />
                            @if (count($volunteer->education) == 0)
                                No tiene titulaci??n registrada
                            @else
                                @foreach ($volunteer->education as $education)
                                    {{ $education->titleEdu }}
                                    <form method="POST" action="{{ route('dashboard.downloadThatEducation') }}"
                                        accept-charset="UTF-8" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $education->education_id }}">
                                        <p><button type="submit" id="downloadEdu" class="botonesControl"><i
                                                    class='bx bx-save'></i></button></p>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div>
                            <strong>Documentos: </strong> <br />
                            @if (count($volunteer->documents) == 0)
                                No tiene titulaci??n registrada
                            @else
                                @foreach ($volunteer->documents as $document)
                                    {{ $document->titleDoc }}
                                    <form method="POST" action="{{ route('dashboard.showDocument') }}">
                                        @csrf
                                        <input type="hidden" name="doc" value="{{ $document->doc_id }}">
                                        <button type="submit" {{--id="showDocDoc"--}} class="botonesControl"><i
                                                class='bx bx-save'></i></button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    @if (date('Y') - date('Y', strtotime($volunteer->birthDateVol)) <= 17)
                        <div class="eachRow">
                            <div>
                                <span class="redMark">ES MENOR</span>
                                <div>
                                    <strong>Autorizador:</strong>
                                    {{ $volunteer->nameAuthVol }}
                                </div>
                                <div>
                                    <strong>Documento de identidad del autorizador:</strong>
                                    {{ $volunteer->numDocAuthVol }}
                                </div>
                                <div>
                                    <strong>Tel??fono del autorizador:</strong>
                                    <a href="tel:+34{{ $volunteer->tlfAuthVol }}">{{ $volunteer->tlfAuthVol }}</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="eachRow">
                        <div>
                            <div class="eachRow">
                                <div><strong>Intereses:</strong></div>
                            </div>
                            <div class="eachRow">
                                @if (count(App\Http\Controllers\UsersController::showEachInterest($volunteer->activities)) == 0)
                                    <div>Aun no tenemos suficientes datos para mostrar intereses 
                                    </div>
                                @else
                                    <div>
                                        @foreach (App\Http\Controllers\UsersController::showEachInterest($volunteer->activities) as $typeAct)
                                            <p>{{ $typeAct }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="eachRow">
                        <div>
                            <div class="eachRow">
                                <div><strong>Actividades a las que se ha inscrito:</strong></div>
                            </div>
                            @if (count($volunteer->inscriptions) == 0)
                                <div class="eachRowInscription">
                                    <div>No se ha unido a ninguna actividad aun</div>
                                </div>
                            @else
                                @foreach ($volunteer->inscriptions as $eachInscription)
                                    <div class="eachRowInscription">
                                        <div style="width:200px;">
                                            <strong>{{ $eachInscription->activity->nameAct }}</strong>
                                        </div>
                                        <div style="width:100px;">
                                            {{ $eachInscription->activity->dateAct }}
                                        </div>
                                        <div>
                                            @if ($eachInscription->isCompletedIns)
                                                ACEPTADO
                                            @elseif(is_null($eachInscription->filenameIns) && is_null($eachInscription->isCompletedIns))
                                                RECHAZADO
                                            @elseif ($eachInscription->filenameIns == null)
                                                DEBES DE SUBIR EL DOCUMENTO FIRMADO EN LA SECCI??N DE NOTIFICACIONES
                                            @elseif ($eachInscription->filenameIns != null)
                                                PREINSCRIPCI??N REALIZADA<br />
                                                ESPERANDO VALIDACI??N DE UN ADMINISTRADOR
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="eachRow">
                        <div class="controlButton lessDetails">
                            <i class='bx bxs-up-arrow'></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach