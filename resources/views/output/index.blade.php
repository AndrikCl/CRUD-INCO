@extends('layouts.template')

@section('template_title')
    Output
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Output') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('outputs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Product</th>
										<th>Id Employee</th>
										<th>Productoutput</th>
										<th>Quantityoutput</th>
										<th>Brandproductoutput</th>
										<th>Dateoutput</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($outputs as $output)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $output->id_product }}</td>
											<td>{{ $output->id_employee }}</td>
											<td>{{ $output->productOutput }}</td>
											<td>{{ $output->quantityOutput }}</td>
											<td>{{ $output->brandProductOutput }}</td>
											<td>{{ $output->dateOutput }}</td>

                                            <td>
                                                <form action="{{ route('outputs.destroy',$output->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('outputs.show',$output->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('outputs.edit',$output->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $outputs->links() !!}
            </div>
        </div>
    </div>
@endsection
