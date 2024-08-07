@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
    .table-responsive{
        margin-top: 30px
    }
    
</style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Formulaire 1</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<div class="card custom-card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-1">Tableau de Formulaire 1</h6>
                                        {{-- <p class="text-muted mb-2 card-sub-title">The world’s most popular and easiest to use icon set just got an upgrade. More icons, More styles, More</p> --}}
                                    </div>
                                        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><a href="{{route('formulaire.create')}}" class="btn btn-success btn-with-icon btn-block text-white"><i class="typcn typcn-edit mx-1"></i> Ajouter</a></div>
								</div>
                                <div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Numéro d’entreprise</th>
												<th class="wd-15p border-bottom-0">Dénomination sociale</th>
												<th class="wd-20p border-bottom-0">Forme légale</th>
												<th class="wd-15p border-bottom-0">Siège social</th>
												<th class="wd-10p border-bottom-0">Représenté par</th>
												<th class="wd-25p border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
                                            {{-- @foreach ($declarations as $declaration)
											<tr>
												<td>{{$declaration->num_entreprise}}</td>
												<td>{{$declaration->denomation_sociale}}</td>
												<td>{{$declaration->forme_legale}}</td>
												<td>{{$declaration->siege_social}}</td>
												<td>{{$declaration->representer_par}}</td>
												<td>
                                                    <div class="dropdown">
                                                        <button data-toggle="dropdown" style="max-width: 100px" class="btn btn-primary btn-sm btn-block d-flex justify-content-center align-items-center">ACTIONS<i class="icon ion-ios-arrow-down mx-1 tx-11 mg-l-3"></i></button>
                                                        <div  class="dropdown-menu tx-13">
                                                            <a href="{{route('declaration-particuliere.print-pdf',['id'=>$declaration->id])}}" class="dropdown-item">Print</a>
                                                            <a href="{{route('declaration-particuliere.show-pdf',['id'=>$declaration->id])}}" class="dropdown-item">Afficher</a>
                                                            <a href="" class="dropdown-item">Edit</a>
                                                            <a href="" class="dropdown-item">Delete</a>
                                                        </div>
                                                    </div>       
                                                </td>
											</tr>
                                            @endforeach --}}
										</tbody>
									</table>
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
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection