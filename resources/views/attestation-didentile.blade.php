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
							<h4 class="content-title mb-0 my-auto">Attestation Didentile</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ tableau de bord</span>
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
                                        <h6 class="card-title mb-1">Tableau des attestations didentile</h6>
                                        <p class="text-muted mb-2 card-sub-title">The world’s most popular and easiest to use icon set just got an upgrade. More icons, More styles, More</p>
                                    </div>
                                        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Ajouter</button></div>
								</div>
                                <div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Nom et prénom</th>
												<th class="wd-15p border-bottom-0">né(e) le - à</th>
												<th class="wd-20p border-bottom-0">N° de registre national</th>
												<th class="wd-15p border-bottom-0">Domicilié(e) à</th>
												<th class="wd-10p border-bottom-0">Téléphone</th>
												<th class="wd-25p border-bottom-0">Agissant pour la société</th>
												<th class="wd-25p border-bottom-0">Agissant pour la société ou l’asbl</th>
                                                <th class="wd-25p border-bottom-0">en qualité de</th>
												<th class="wd-25p border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Bella</td>
												<td>Chloe</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
												<td>$654,765</td>
												<td>b.Chloe@datatables.net</td>
                                                <td>b.Chloe@datatables.net</td>
												<td>b.Chloe@datatables.net</td>
												<td>
                                                    <div class="dropdown">
                                                        <button data-toggle="dropdown" class="btn btn-primary btn-sm btn-block d-flex justify-content-center align-items-center">ACTIONS<i class="icon ion-ios-arrow-down mx-1 tx-11 mg-l-3"></i></button>
                                                        <div  class="dropdown-menu tx-13">
                                                            <a href="" class="dropdown-item">Print</a>
                                                            <a href="" class="dropdown-item">Afficher</a>
                                                            <a href="" class="dropdown-item">Edit</a>
                                                            <a href="" class="dropdown-item">Delete</a>
                                                        </div>
                                                    </div>       
                                                </td>
											</tr>
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