@extends('main')

@section('title', 'Fakultas')
@section('content')

    <!--begin::Row-->
        <div class="row">
            <div class="col-12">
                {{-- Form tambah fakultas --}}
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('fakultas.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Fakultas </label>
                        <input type="text" class="form-control" name="nama">
                      </div>

                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan </label>
                        <input type="text" class="form-control" name="singkatan">
                      </div>

                      <div class="mb-3">
                        <label for="nama_dekan" class="form-label">Nama Kaprodi </label>
                        <input type="text" class="form-control" name="kaprodi">
                      </div>

                      <div class="mb-3">
                        <label for="nama_wadek" class="form-label">Sekretaris</label>
                        <input type="text" class="form-control" name="sekretaris">
                      </div>

                      <select name="fakultas_id" class="form-control">
                        @foreach ($fakultas as $item)
                        <option value="{{  $item->id }}">{{  $item->nama }}</option>
                        @endforeach
                      </select>
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