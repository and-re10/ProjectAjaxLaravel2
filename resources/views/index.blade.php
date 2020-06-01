@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Exercice Ajax Laravel</h1>

        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userAddModal">
                Add Users
            </button>
            
            <!-- Modal Add Users -->
            <div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        {{-- Formulaire pour creer un nouveau utilisateur --}}
                        <div class="modal-body">
                            {{-- Nom de l'utilisateur --}}
                            <div class="form-group">
                              <label for="">Nom</label>
                              <input type="text" name="nom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                            {{-- Email de l'utilisateur --}}
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    

@endsection