@extends('layouts.app')

@section('content2')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">スケジュール編集</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('calendars.update', ['calendar' => $calendar]) }}">
                        @csrf
                        @method('PUT') <!-- HTTPメソッドをPUTに変更 -->

                        <div class="mb-3">
                            <label for="title" class="form-label">タイトル</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $calendar->title }}" required autocomplete="off">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">概要</label>
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ $calendar->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">開始日</label>
                            <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ $calendar->start_date }}" required autocomplete="off">
                            @error('start_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="end_date" class="form-label">終了日</label>
                            <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ $calendar->end_date }}" required autocomplete="off">
                            @error('end_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary">
                                更新 <!-- ボタンのテキストを変更 -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


