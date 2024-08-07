@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ajouter une Declaration Particuliere</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
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
                                        <div class="card">
                                            <div class="card-body">
                                                <form  method="POST" class="parsley-style-1" id="selectForm2" name="selectForm2">
                                                    @csrf
                                                    <div class="">
                                                        <div class="row mg-b-20">
                                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                                <label>Numéro d’entreprise : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="num_entreprise" placeholder="Entrer le numéro d’entreprise"  type="text"  value="{{isset($attestation['identifier']) ? $attestation['identifier'] : ''}}">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>Dénomination sociale : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" value="{{isset($attestation['denomination']) ? $attestation['denomination'] : ''}}" data-parsley-class-handler="#lnWrapper" name="denomation_sociale" placeholder="Entrer la Dénomination sociale"  type="text">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>Forme légale : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" value="{{isset($attestation['juridical_form']['code']) ? $attestation['identifier'] : ''}}" data-parsley-class-handler="#lnWrapper" name="forme_legale" placeholder="Entrer la forme légale"  type="text">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>Siège social : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" value="{{isset($attestation['juridical_situation']['code']) ? $attestation['juridical_situation']['code'] : ''}}" data-parsley-class-handler="#lnWrapper" name="siege_social" placeholder="Entrer le Siège social"  type="text">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>Représenté par : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" value="{{isset($attestation['company_name']) ? $attestation['company_name'] : ''}}" data-parsley-class-handler="#lnWrapper" name="representer_par" placeholder="Représenté par"  type="text">
                                                            </div>
                                                            <p class="mg-b-10 mt-5">Déclare/Déclarons, en application de l&#39;article 13 de la loi du 4 mai 2023 relative au Registre
                                                                central des interdictions de gérer, qu&#39;à l&#39;encontre de la ou des personnes mentionnée(s) ci-
                                                                dessous :</p>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Nom – Prénom – Numéro de registre national (1) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[0][nom]"  value="{{isset($attestation['personnes'][0]['nom_prenom_register']) ? $attestation['identifier'] : ''}}" placeholder="Nom – Prénom – Numéro de registre national"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Qualité (1) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[0][qualite]" value="{{isset($attestation['personnes'][0]['qualite']) ? $attestation['identifier'] : ''}}" placeholder="Qualité"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Nom – Prénom – Numéro de registre national (2) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[1][nom]" value="{{isset($attestation['personnes'][1]['nom_prenom_register']) ? $attestation['identifier'] : ''}}" placeholder="Nom – Prénom – Numéro de registre national"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Qualité (2) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[1][qualite]" value="{{isset($attestation['personnes'][1]['qualite']) ? $attestation['identifier'] : ''}}" placeholder="Qualité"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Nom – Prénom – Numéro de registre national (3) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[2][nom]" value="{{isset($attestation['personnes'][2]['nom_prenom_register']) ? $attestation['identifier'] : ''}}" placeholder="Nom – Prénom – Numéro de registre national"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Qualité (3) : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" data-parsley-class-handler="#lnWrapper" name="personne[2][qualite]" value="{{isset($attestation['personnes'][2]['qualite']) ? $attestation['identifier'] : ''}}" placeholder="Qualité"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 mt-3 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Fait à : <span class="tx-danger">*</span></label>
                                                                    <input class="form-control" value="{{ isset($attestation['fait_a']) ? $attestation['fait_a'] : '' }}" data-parsley-class-handler="#lnWrapper" name="fait_a" placeholder="Fait à"  type="text">
                                                                </div>
                                                                <div class="parsley-input my-2 mt-3 col-md-6 mg-t-20 mg-md-t-0 mt-3" id="lnWrapper">
                                                                    <label>À la date du : <span class="tx-danger">*</span></label>
                                                                    <div class="input-group col-md-12">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                                            </div>
                                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="en_date_du" value="{{ isset($attestation['en_date_du']) ? \Carbon\Carbon::parse($attestation['en_date_du'])->format('Y-m-d') : '' }}">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <!-- parsley-checkbox -->
                                                    <div class="wd-250" id="cbErrorContainer2"></div>
                                                    <div class="mg-t-30">
                                                        <button class="btn btn-main-primary pd-x-20" formaction="{{route('declaration-particuliere.update',['id'=>$id])}}" type="submit">Afficher</button>
                                                        <button class="btn btn-main-primary pd-x-20" formaction="{{route('declaration-particuliere.update-print',['id'=>$id])}}" type="submit">Print</button>                                                    </div>
                                                </form>
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
@endsection
