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
							<h4 class="content-title mb-0 my-auto">Ajouter une Attestation Didentile</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
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
                                                <form action="{{route('attestation-didentile.store')}}" method="POST" class="parsley-style-1" id="selectForm2" name="selectForm2">
                                                    @csrf
                                                    <div class="">
                                                        <div class="row mg-b-20">
                                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                                <label>Nom et Prénom : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                    <label>Date de naissance : <span class="tx-danger">*</span></label>
                                                                    <div class="input-group col-md-6">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">
                                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                                            </div>
                                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance">
                                                                </div>                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>Ville : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text">
                                                            </div>
                                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                                <label>N° de registre national : <span class="tx-danger">*</span></label>
                                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="num_registre_national" placeholder="Entrer le n° de registre national"  type="text">
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
                                                    </div>
                                                    <p class="mg-b-10">Atteste déposer les actes visant à un(e) ou plusieurs :<span class="tx-danger">*</span></p>
                                                    <div class="parsley-checkbox wd-250 mg-b-0" id="cbWrapper2">
                                                        <label class="ckbox mg-b-5 my-2">
                                                            <input data-parsley-class-handler="#cbWrapper2" data-parsley-errors-container="#cbErrorContainer2" data-parsley-mincheck="2" name="constitution" value="1" type="checkbox" value="1">
                                                            <span>Constitution</span>
                                                        </label>
                                                        <label class="ckbox mg-b-5 my-2"><input name="nomination" type="checkbox" value="1"><span>Nomination(s)</span></label>
                                                        <label class="ckbox mg-b-5 my-2"><input name="demission" type="checkbox" value="1"><span>Démission(s)</span></label>
                                                        <label class="ckbox my-2"><input name="transfert" type="checkbox" value="1"><span>Transfert de siège social</span></label>
                                                        <label class="ckbox my-2"><input name="autre_modification" type="checkbox" value="1"><span>Autres modifications</span></label>
                                                    </div>
                                                    <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0 mt-3" id="lnWrapper">
                                                        <label>Autres modifications : <span class="tx-danger">*</span></label>
                                                        <input class="form-control" data-parsley-class-handler="#lnWrapper" name="autre_modification_value" placeholder="Autres modifications"  type="text">
                                                    </div>
                                                    <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0 mt-3" id="lnWrapper">
                                                        <label>En date du : <span class="tx-danger">*</span></label>
                                                        <div class="input-group col-md-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                                </div>
                                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="en_date_du">
                                                        </div>
                                                    </div>
                                                    <!-- parsley-checkbox -->
                                                    <div class="wd-250" id="cbErrorContainer2"></div>
                                                    <div class="mg-t-30">
                                                        <button class="btn btn-main-primary pd-x-20" type="submit">Ajouter</button>
                                                    </div>
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
