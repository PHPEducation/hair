@extends('admin.master')
@section('title','Danh sách Salon')
@section('main')	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{__('Salon')}}</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">{{__('List of Salons')}}</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/salons/create')}}" class="btn btn-primary">{{__('Add Salon')}}</a>
								<table class="table table-bordered">				
									<thead>
										<tr class="bg-primary">
											<th>{{__('ID')}}</th>
											<th width="40%">{{__('Name')}}</th>
											<th width="40%">{{__('Address')}}</th>
											<th>{{__('Options')}}</th>
										</tr>
									</thead>
									<tbody>
							
									@foreach ($salons as $salon)

										<tr>
											<td>{{$salon->id}}</td>
											<td>{{$salon->name}}</td>
											<td>{{$salon->address}}</td>
											<td>
												<a href="{{asset('admin/salons/'.$salon->id.'/edit')}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Edit')}}</a>
												<a onClick="return confirm('Bạn có chắc chắn muốn xóa')"href="{{asset('admin/salons/'.$salon->id.'/delete')}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
											</td>
										</tr>
									@endforeach
									</tbody>

								</table>
								<script type="text/javascript">
								$(document).ready(function(e) {
							        $('.pagination li a').click(function(){
										
										var page = $(this).attr('href').split('page=')[1];
										
										$.get('product?page='+page, function(data){
											$('body').html(data);
										});	
										return false;
									});
							    });
							    </script>
															
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
