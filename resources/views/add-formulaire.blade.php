@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Modifier Formulaire 1</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<div class="card custom-card">
							<div class="card-body">
                                <div class="row">
                                <div class="col-lg-12 col-md-12">
                                <form action="">
								<div id="wizard1">
									<h3>Volet A</h3>
									<section>
										<div class="row">
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Numéro d’entreprise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le Numéro d’entreprise"  type="text" value="@isset($attestation['num_entreprise']){{$attestation['num_entreprise']}}@endisset">
                                            </div>
                                                {{-- <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de naissance : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>                                                            </div> --}}
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Ville : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="nom" placeholder="Entrer le Nom"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Forme légale : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="forme_legal" placeholder="Entrer la Forme légale"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro de téléphone : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="tel" placeholder="Entrer le numéro de téléphone"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Siège(s) ou succursale : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="siege" placeholder="Siège(s) ou succursale"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-5 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Rue : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="rue" placeholder="Entrer le Rue"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="n" placeholder="N°"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Boîte : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="boite" placeholder="Boîte"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Code postal : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="code_postal" placeholder="Entrer le Code postal"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-8 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Localité : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Pays : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <p class="my-3">Si la constitution est la conséquence d'une fusion/scission (*), indiquer le nom et le numéro d'entreprise des personnes morales fusionnées/scindées (*)</p>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                        </div>
									</section>
									<h3>Volet B</h3>
									<section>
                                        <div class="row">
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Nom et Prénom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de naissance : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>                                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Ville : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° de registre national : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="num_registre_national" placeholder="Entrer le n° de registre national"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Domicilié(e) à : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="domicilie" placeholder="Domicilié(e) à"  type="text">
                                            </div>
                                        </div>
									</section>
									<h3>Volet C</h3>
									<section>
										<div class="row">
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Nom et Prénom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de naissance : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>                                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Ville : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° de registre national : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="num_registre_national" placeholder="Entrer le n° de registre national"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Domicilié(e) à : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="domicilie" placeholder="Domicilié(e) à"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro de téléphone : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="tel" placeholder="Entrer le numéro de téléphone"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Agissant pour la société : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="agissant_societe" placeholder="Agissant pour la société"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Agissant pour la société ou l’asbl : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="agissant_societe_asbl" placeholder="Agissant pour la société ou l’asbl"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>En qualité de : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="qualite" placeholder="En qualité de"  type="text">
                                            </div>
                                        </div>
									</section>
								</div>
                            </form>
							</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</div>
						</div>
						<!-- /card -->
@endsection
@section('js')
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datepicker js -->
{{-- <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script> --}}
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.steps js -->
<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!--Internal  Form-wizard js -->
<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
@endsection
