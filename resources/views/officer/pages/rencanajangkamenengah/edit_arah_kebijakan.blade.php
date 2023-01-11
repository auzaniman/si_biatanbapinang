@extends('officer.layouts.app')

@section('title')
Arah Kebijakan Setting
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('officer.update_arah_kebijakan', $data->id)}}" enctype="multipart/form-data">
          @method('put')
          @csrf
          <label>Strategi</label>
          <div class="mb-3">
            <textarea type="text" name="strategi" id="strategi" class="summernote" rows="5">
              {{$data->strategi}}
            </textarea>
          </div>
          <label>Arah Kebijakan</label>
          <div class="mb-3">
            <textarea type="text" name="kebijakan" id="kebijakan" class="summernote" rows="5">
              {{$data->kebijakan}}
            </textarea>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
