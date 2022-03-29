@extends('layouts.app', ['page' => __('Editar Instituição'), 'pageSlug' => 'instituicao'])

@section('content')

<div class="container-fluid">
<div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ _('Editar Instituição') }}</h5>
                </div>
                    <form action="">

                        <div class="col-12">
                            <div class="painel-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Nome da Instituição</label>
                                        <input type="text" name="name_instituicao" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Diretor</label>              
                                        <input type="text" class="form-control" name="diretor" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Vice Diretor</label>              
                                        <input type="text" class="form-control" name="vicediretor" >
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                  
                        <div class="row mb-2 mr-2">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success float-right mt-4">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
@endsection