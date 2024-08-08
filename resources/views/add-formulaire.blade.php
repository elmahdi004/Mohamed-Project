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
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="nom" placeholder="Entrer le Nom"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Forme légale : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="forme_legal" placeholder="Entrer la Forme légale"  type="text">
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
                                            <p class="my-2 col-md-12">FACTURE : Les frais de publication doivent être réglés au préalable par virement ou chèque. </p>
                                            <div class="mt-4 mb-2 col-md-6">
                                                <label class="ckbox"><input type="checkbox"><span>Adresse de facturation différente (compléter ci-dessous)</span></label>
                                            </div>
                                            <div class="col-md-6 mt-4 mb-2">
                                                <label class="ckbox"><input type="checkbox"><span>Facture au siège PM</span></label>
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Langue de facturation : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="langue_de_facturation" placeholder="Entrer la Langue de facturation"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="nom" placeholder="Entrer le nom"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Service : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="service" placeholder="Entrer la service"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Destinataire : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="destinataire" placeholder="Entrer la destinataire"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Rue : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="rue" placeholder="Entrer le Rue"  type="text">
                                            </div>
                                            
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Boîte : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="boite" placeholder="Boîte"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° TVA° : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="n" placeholder="N°"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>N° : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="code_postal" placeholder="Entrer le Code postal"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-4 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Code postal : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="code_postal" placeholder="Entrer le Code postal"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-8 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Localité : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="localite" placeholder="Entrer la Localité"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>E-mail : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="pays" placeholder="Entrer le Pays"  type="text">
                                            </div>
                                        </div>
									</section>
									<h3>Volet B</h3>
									<section>
                                        <div class="row">
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>N° d’entreprise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom (en entier) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom (en abrégé) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="num_registre_national" placeholder="Entrer le n° de registre national"  type="text" value="{{ isset($attestation['identifier']) ? $attestation['identifier'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Forme légale : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="domicilie" placeholder="Domicilié(e) à"  type="text">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Adresse complète du siège : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="domicilie" placeholder="Domicilié(e) à"  type="text">
                                            </div>
                                        </div>
									</section>
									<h3>Volet C</h3>
									<section>
										<div class="row">
                                            <p class="my-3 col-md-12">Montant du capital (montant minimum pour les sociétés d’investissement)   (le cas échéant)</p>
                                            <div class="parsley-input my-2 col-md-6" id="fnWrapper">
                                                <label>Devise : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6" id="fnWrapper">
                                                <label>Montant : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Date de l’acte constitutif : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12" id="fnWrapper">
                                                <label>Arrivée du terme : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#fnWrapper" name="nom_prenom" placeholder="Entrer le nom et prénom"  type="text" value="@isset($attestation['company_name']){{$attestation['company_name']}}@endisset">
                                            </div>
                                            {{-- <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Date de naissance : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>   
                                            
                                            </div> --}}
                                            <p class="my-3 col-md-12">Administration  et  représentation (le cas échéant  +  mention  du  représentant permanent de la personne morale et du représentant légal de la succursale) :</p>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>

                                            <p class="my-3 col-md-12">Gestion journalière :</p>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (1): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (2): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (3): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom et prénom (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Qualité (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-3 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Date (4): <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>



                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Exercice social (date de fin : JJ / MM) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Assemblée générale ordinaire (6) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom du registre : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Numéro d’identification : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Adresse e-mail (6) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Site internet (6) : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <p class="my-3">Signature formulaire :</p>
                                            <div class="parsley-input my-2 col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Nom : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                <label>Fait à : <span class="tx-danger">*</span></label>
                                                <input class="form-control" data-parsley-class-handler="#lnWrapper" name="place_de_naissance" placeholder="Entrer la ville de naissance"  type="text" value="{{ isset($attestation["addresses"][0]['municipality']) ? $attestation["addresses"][0]['municipality'] : '' }}">
                                            </div>
                                            <div class="parsley-input my-2 col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                                    <label>Le : <span class="tx-danger">*</span></label>
                                                    <div class="input-group col-md-6">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                                            </div>
                                                        </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="date_de_naissance" value="{{ isset($attestation['company_names'][0]['start_date']) ? \Carbon\Carbon::parse($attestation['company_names'][0]['start_date'])->format('Y-m-d') : '' }}">
                                                </div>   
                                            
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
