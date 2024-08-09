@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<script>
    // document.querySelector('#finish').setAttribute('href','/formulaire/update');
</script>
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Modifier Formulaire 2</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
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
                                <form method="POST" id="myForm">
                                    @csrf
								<div id="wizard1">
									<h3>Volet A</h3>
									<section>
										<div class="row">
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Numéro d’entreprise : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['identifier']) ? $attestation['identifier'] : ''}}" class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le Numéro d’entreprise"  type="text" value="@isset($attestation['num_entreprise']){{$attestation['num_entreprise']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom actuel : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['nom_actuel']) ? $attestation['nom_actuel'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="nom_actuel" placeholder="Entrer le Nom"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nouveau nom : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['nom_nv']) ? $attestation['nom_nv'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="nom_nv" placeholder="Entrer le Nom"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Sigle éventuel : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['sigle']) ? $attestation['sigle'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="sigle" placeholder="Entrer la Forme légale"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Forme légale : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['juridical_form']['code']) ? $attestation['juridical_form']['code'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="forme_legal" placeholder="Entrer la Forme légale"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-5 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Rue : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['addresses'][0]['street']) ? $attestation['addresses'][0]['street'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="rue" placeholder="Entrer le Rue"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° : <span class="tx-danger">*</span></label>
                                                <input class="form-control" value="{{isset($attestation['n']) ? $attestation['n'] : ''}}" data-parsley-class-handler="#lnWrapper" name="n" placeholder="N°"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Boîte : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="boite" placeholder="Boîte"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Code postal : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['code_postal']) ? $attestation['code_postal'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="code_postal" placeholder="Entrer le Code postal"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-8 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Localité : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['localite']) ? $attestation['localite'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Pays : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['pays']) ? $attestation['pays'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <p class="my-3 md-col-12">Lorsque le siège n’est pas situé en Belgique, préciser l’adresse de la succursale en Belgique.</p>
                                            <div class="parsley-input my-2 col-md-5 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Rue : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['addresses'][0]['street']) ? $attestation['addresses'][0]['street'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="rue2" placeholder="Entrer le Rue"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="n2" placeholder="N°"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Boîte : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['boite2']) ? $attestation['boite2'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="boite2" placeholder="Boîte"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Code postal : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['addresses'][0]['zip_code']) ? $attestation['addresses'][0]['zip_code'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="code_postal2" placeholder="Entrer le Code postal"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-8 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Localité : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['localite2']) ? $attestation['localite2'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="localite2" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-4 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Pays : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['pays2']) ? $attestation['pays2'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="pays2" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <p class="my-3 md-col-12">Cessation de la personne morale à la suite d’une fusion / scission (*) par absorption par les personnes morales suivantes</p>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][0]['nom']) ? $attestation['data'][0]['nom'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[0][nom]" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][0]['num_entreprise']) ? $attestation['data'][0]['num_entreprise'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[0][num_entreprise]" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][1]['nom']) ? $attestation['data'][1]['nom'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[1][nom]" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][1]['num_entreprise']) ? $attestation['data'][1]['num_entreprise'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[1][num_entreprise]" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][2]['nom']) ? $attestation['data'][2]['nom'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[2][nom]" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['data'][2]['num_entreprise']) ? $attestation['data'][2]['num_entreprise'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="data[2][num_entreprise]" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                        </div>
									</section>
									<h3>Volet B</h3>
									<section>
                                        <div class="row">
                                            <p class="my-3 col-md-12">Montant  du  capital  (montant  minimum  pour  les  sociétés d’investissement)(le cas écheant)</p>
                                            <div class="parsley-input my-2 col-md-6" id="fnWrapper">
                                                <label>Devise : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['device']) ? $attestation['device'] : ''}}" class="form-control" data-parsley-class-handler="#fnWrapper" name="device" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6" id="fnWrapper">
                                                <label>Montant : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['montant']) ? $attestation['montant'] : ''}}" class="form-control" data-parsley-class-handler="#fnWrapper" name="montant" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label> value="{{isset($attestation['b_date']) ? $attestation['b_date'] : ''}}" Date de l’acte constitutif : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="b_date" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Arrivée du terme : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['arrive_du_terme']) ? $attestation['arrive_du_terme'] : ''}}" class="form-control" data-parsley-class-handler="#fnWrapper" name="arrive_du_terme" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <p class="my-3 col-md-12">Administration, représentation et liquidation (le cas échéant + mention du représentant permanent de la personne morale et du représentant légal de la succursale)</p>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[0][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[0][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[0][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[0][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[1][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[1][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[1][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[1][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[2][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[2][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[2][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[2][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[3][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[3][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[3][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="admin[3][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <p class="my-3 col-md-12">Gestion journalière :</p>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[0][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[0][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[0][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[1][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[1][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[1][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[1][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[2][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[2][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[2][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[2][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[0][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[3][numero]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[3][nom]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[3][qualite]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="gestion[3][date]" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Exercice social (date de fin : JJ / MM) : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['exercice_social']) ? $attestation['exercice_social'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="exercice_social" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Assemblée générale ordinaire (6) : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['assemblee_generale']) ? $attestation['assemblee_generale'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="assemblee_generale" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de la dissolution volontaire : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input value="{{isset($attestation['date_de_dissolution']) ? $attestation['date_de_dissolution'] : ''}}" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_dissolution" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>
                                                </div>   
                                                <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de la clôture de la liquidation : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input value="{{isset($attestation['date_de_cloture']) ? $attestation['date_de_cloture'] : ''}}" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_cloture" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>   
                                                </div>      
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom du registre : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['c_nom_registre']) ? $attestation['c_nom_registre'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="c_nom_registre" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro d’identification : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['numero_identification']) ? $attestation['numero_identification'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="numero_identification" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Adresse e-mail (6) : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['email']) ? $attestation['email'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="email" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Site internet (6) : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['site']) ? $attestation['site'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="site" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            
 

                                        </div>
									</section>
									<h3>Signature formulaire</h3>
									<section>
										<div class="row">
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['signature_nom']) ? $attestation['signature_nom'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="signature_nom" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Fait à : <span class="tx-danger">*</span></label>
                                                <input value="{{isset($attestation['signature_fait_a']) ? $attestation['signature_fait_a'] : ''}}" class="form-control" data-parsley-class-handler="#lnWrapper" name="signature_fait_a" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Le : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input value="{{isset($attestation['signature_le']) ? $attestation['signature_le'] : ''}}" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="signature_le" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>   
                                            
                                            </div>
                                        </div>
                                        <button class="btn btn-main-primary pd-x-20 mt-3" formaction="{{route('formulaire2.update',['id'=>$id])}}" type="submit">Afficher</button>
                                        <button class="btn btn-main-primary pd-x-20 mt-3" formaction="{{route('formulaire2.update-print',['id'=>$id])}}" type="submit">Print</button>
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
