@extends('faq::layouts.master')

@section('content')
    <div class="content-body">
        <!-- Description -->
        <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">الاسالة الشائعه</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <a href="{{ route('questions.create') }}"
                                    class="btn btn-primary mb-2 waves-effect waves-light">
                                    <i class="fas fa-plus"></i>&nbsp; اضافه سؤال جديد </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">question</th>
                                                <th scope="col">answer</th>
                                                <th scope="col">actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($questions as $question)
                                                <tr>
                                                    <th scope="row">{{ $question->id }}</th>
                                                    <td>{{ $question->question }}</td>
                                                    <td>{{ $question->answer }}</td>
                                                  <td>  <a class="btn btn-warning btn-icon"
                                                        href="{{ route('questions.edit',$question) }}">
                                                        Edit</a>
                                                        
                                                    <a class="btn btn-danger btn-icon" onclick="delete_form(this)"
                                                        data-href="{{ route('questions.destroy',$question) }}">
                                                        Delete</a>
                                                        </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Description -->
    </div>
@endsection
