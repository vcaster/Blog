@extends('layouts.backend.main')

@section('title', 'MyBlog | Add New Post')

@section('content')
<!-- Content Wrapper. Contains page content []-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      My Blog
      <small>Add New Post</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><a href="{{ url('/home') }}"<i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('blog.index')}}">Blog</a></li>
      <li class="active">Add New Post</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body ">
                {!! Form::model($post, [
                    'method' => 'POST',
                    'route' => 'blog.store'
                ]) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    {!! Form::label('title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}

                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                    {!! Form::label('slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

                    @if($errors->has('slug'))
                        <span class="help-block">{{ $errors->first('slug') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('excerpt') !!}
                    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('view_count', null, ['class' => 'form-control hidden', 'value' => '0']) !!}
                </div>
                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                    @if($errors->has('body'))
                        <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                    {!! Form::label('published_at', 'Publish Date') !!}
                    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}

                    @if($errors->has('published_at'))
                        <span class="help-block">{{ $errors->first('published_at') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                    {!! Form::label('category_id', 'Category') !!}
                    {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                    @if($errors->has('category_id'))
                        <span class="help-block">{{ $errors->first('category_id') }}</span>
                    @endif
                </div>

                <hr>

                {!! Form::submit('Create new post', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('plugins/font-awesome/css/font-awesome.min.css') !!}
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}
{!! Html::style('css/AdminLTE.min.css') !!}
{!! Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
{!! Html::script('js/jquery-2.2.3.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/app.min.js') !!}
@endsection

@section('script')
  <script type="text/javascript">
    $(ul.pagination).addClass('no-margin pagination-sm');
  </script>
@endsection
