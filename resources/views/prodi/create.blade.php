@extends('main')

@section('title', 'Program Studi')
@section('content')

    <!--begin::Row-->
        <div class="row">
            <div class="col-12">
                {{-- Form tambah prodi --}}
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('prodi.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Prodi </label>
                        <input type="text" class="form-control" name="nama">
                      </div>

                      <div class="mb-3">
                        <label for="kaprodi" class="form-label">Kaprodi </label>
                        <input type="text" class="form-control" name="kaprodi">
                      </div>

                      <div class="mb-3">
                        <label for="nama_fakultas" class="form-label">Nama Fakultas </label>
                        <input type="text" class="form-control" name="nama_fakultas">
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
            </div>
        </div>
    <!--end::Row-->
@endsection