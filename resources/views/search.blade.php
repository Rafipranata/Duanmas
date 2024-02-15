@extends('Template.dashboardAdmin')
@section('search')
    <table class="table mt-3">
        <caption class="ms-4">Data Aduan Masyarakat</caption>
        <thead>
            <tr class="text-center">
                <th>Nama</th>
                <th>Status</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($results as $result)
            <tr class="text-center">
                <td>{{ $result->nama }}</td> <!-- Sesuaikan dengan atribut nama pada model Anda -->
                    @if ($result->status == 'Pending')
                        
                    <td><span class="badge  bg-label-warning">{{ $result->status }} </span></td>
                                            
                    @elseif ($result->status == 'Diterima')
                    
                    <td><span class="badge  bg-label-success">{{ $result->status }} </span></td>
                    
                    @else 
                    
                    <td><span class="badge  bg-label-danger">{{ $result->status }} </span></td>
                    
                    @endif
                    
                <td>
                    <a class="btn btn-warning" href="#">detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">
                    <div>Data tidak ada</div>
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>
@endsection
