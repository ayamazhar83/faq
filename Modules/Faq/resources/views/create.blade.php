@extends('faq::layouts.master')

@section('content')
<div class="content-body">
  <section id="basic-input">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">اضافة سؤال</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                        <form method="POST" action="{{route('questions.store')}}">
                          @csrf
                            <div class="form-group">
                              <label for="question">Question</label>
                              <input type="text" class="form-control" name="question" id="question" aria-describedby="emailHelp" placeholder="Enter Question">
                            </div>
                            <div class="form-group">
                              <label for="answer">Answer</label>
                              <input type="text" class="form-control" name="answer" id="answer" placeholder=" Enter Answer">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>
@endsection
