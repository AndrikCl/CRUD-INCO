@extends('layouts.template')

@section('template_title')
    Entry
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entry') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entries.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Productentry</th>
										<th>Quantityentry</th>
										<th>Priceproductentry</th>
										<th>Brandentry</th>
										<th>Dateentry</th>
										<th>Id Product</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entries as $entry)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $entry->productEntry }}</td>
											<td>{{ $entry->quantityEntry }}</td>
											<td>{{ $entry->priceProductEntry }}</td>
											<td>{{ $entry->brandEntry }}</td>
											<td>{{ $entry->dateEntry }}</td>
											<td>{{ $entry->id_product }}</td>

                                            <td>
                                                <form action="{{ route('entries.destroy',$entry->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entries.show',$entry->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entries.edit',$entry->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $entries->links() !!}
            </div>
        </div>
    </div>
@endsection
