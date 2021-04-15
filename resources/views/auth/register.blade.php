@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--
                        <h2 class="text-center mb-5">DEPARTAMENTOS</h2>
                          {{ $departamentos }}
                        -->

                        <!-- SIN MODELO -->
                        <!--
                        <div class="form-group row">
                           <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                           <div class="col-md-6">
                               <select
                                   class="form-control @error('departamento') is-invalid @enderror"
                                   name="departamento"
                                   id="departamento"
                               >
                                   <option value="">--Seleccione --</option>
                                   @foreach ($departamentos as $id => $departamento)
                                     <option
                                         value="{{ $id }}"
                                         {{ old('departamento') == $id ? 'selected' : '' }}
                                         >{{$departamento}}</option>
                                   @endforeach
                               </select>

                               @error('departamento')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                        </div>
                        -->

                        <!-- CON MODELO -->
                        <div class="form-group row">
                           <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                           <div class="col-md-6">
                               <select
                                   class="form-control @error('departamento') is-invalid @enderror"
                                   name="departamento"
                                   id="departamento"
                               >
                                   <option value="">--Seleccione --</option>
                                   @foreach ($departamentos as $departamento)
                                     <option
                                         value="{{ $departamento->id }}"
                                         {{ old('departamento') == $departamento->id ? 'selected' : '' }}
                                         >{{$departamento->nombre}}</option>
                                   @endforeach
                               </select>

                               @error('departamento')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
