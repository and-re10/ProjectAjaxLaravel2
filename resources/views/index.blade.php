@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Exercice Ajax Laravel</h1>

        {{-- Button test --}}
        <button type="button" class="btn btn-primary" id="test">Boutton Test</button>

        <!-- Button Add Utilisateur -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userAddModal">
                Add Users
        </button>

        <!-- Button Add Film -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filmAddModal">
            Add Film
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
                    <form id="addUsers">
                        @csrf
                        <div class="modal-body">
                            {{-- Nom de l'utilisateur --}}
                            <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name="nom" id="" class="form-control @error('nom') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- Email de l'utilisateur --}}
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            {{-- Boutton pour fermer le modal --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            {{-- Bouton pour add un nouveau utilisateur --}}
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Add Films -->
        <div class="modal fade" id="filmAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Film</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    {{-- Formulaire pour creer un nouveau film --}}
                    <form id="addFilms">
                        @csrf
                        <div class="modal-body">
                            {{-- Nom du film --}}
                            <div class="form-group">
                            <label for="">Nom du Film</label>
                            <input type="text" name="nom" id="" class="form-control @error('nom') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            {{-- Email de l'utilisateur
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpId">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
                        </div>

                        <div class="modal-footer">
                            {{-- Boutton pour fermer le modal --}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            {{-- Bouton pour add un nouveau film --}}
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#test').click(function(){
                alert('Hello World, Premier Test!')
            })
            
            $('#addUsers').submit(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();

                // requettes via ajax sans chargament de page
                $.ajax({
                    // Type de methode 
                    type: "POST",
                    // Route du controller
                    url: "{{route('users.store')}}",
                    // Verification du data dans le formulaire
                    data: $('#addUsers').serialize(),
                    // En cas de Success
                    success: function(response) {
                        console.log(response);
                        $("#userAddModal").modal('hide');
                        alert('Data Saved');
                    },
                    error: function(error) {
                        alert("Data Not Saved");
                    }
                });
            });
        });
    </script>



@endsection