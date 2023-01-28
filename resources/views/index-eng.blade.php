@extends('layouts.landing')
@section('content')
    <div>
        <h1 class="titular text-center">
            FIELD TRIPS REGISTRY <br />
            FEBRUARY 10th
        </h1>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @error('name')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('last_name')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('country')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('language')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('email')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('phone')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('emergency_name')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('relationship')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('menu_type')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
                @error('allergies')
                    <li style="color:rgb(240, 100, 100);">{{ $message }}</li>
                @enderror
            </ul>
        </div>
    @endif


    <!-- Modal 1-->
    <div class="modal fade" id="henequen" tabindex="-1" aria-labelledby="henequenLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="text-center" style="color: #173968;">HENEQUÉN TOUR</h1>
                    <form action="{{ route('send-form') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="country">Country of origin</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="form-group">
                            <label for="idioma">Language</label>
                            <input type="text" class="form-control" name="language">
                        </div>
                        <div class="form-group">
                            <label for="correo">Mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Phone number</label>
                            <input type="numbre" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label style="color: #0054ca;" for="contacto-de-emergencia">Emergency contact</label>
                        </div>
                        <div class="form-group">
                            <label for="nombre-contacto">Name</label>
                            <input type="text" class="form-control" name="emergency_name">
                        </div>
                        <div class="form-group">
                            <label for="parentesco">Relationship </label>
                            <input type="text" class="form-control" name="relationship">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option value="" selected disabled>Select an option</option>
                                <option value="regular">Regular</option>
                                <option value="vegetarian">Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alergias">Allergies</label>
                            <input type="text" class="form-control" name="allergies">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="contact_me">
                            <label class="form-check-label" for="exampleCheck1">I want you to contact me with more information</label>
                        </div>

                        <input type="hidden" name="tour_route" value="Enequen">
                        <div class="text-center boton-enviar">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="milpa" tabindex="-1" aria-labelledby="milpaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="text-center" style="color: #173968;">MILPA TOUR</h1>
                    <form action="{{ route('send-form') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="country">Country of origin</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="form-group">
                            <label for="idioma">Language</label>
                            <input type="text" class="form-control" name="language">
                        </div>
                        <div class="form-group">
                            <label for="correo">Mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Phone number</label>
                            <input type="numbre" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label style="color: #0054ca;" for="contacto-de-emergencia">Emergency contact</label>
                        </div>
                        <div class="form-group">
                            <label for="nombre-contacto">Name</label>
                            <input type="text" class="form-control" name="emergency_name">
                        </div>
                        <div class="form-group">
                            <label for="parentesco">Relationship </label>
                            <input type="text" class="form-control" name="relationship">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option value="" selected disabled>Select an option</option>
                                <option value="regular">Regular</option>
                                <option value="vegetarian">Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alergias">Allergies</label>
                            <input type="text" class="form-control" name="allergies">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="contact_me">
                            <label class="form-check-label" for="exampleCheck1">I want you to contact me with more information</label>
                        </div>

                        <input type="hidden" name="tour_route" value="Enequen">
                        <div class="text-center boton-enviar">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="azul" tabindex="-1" aria-labelledby="azulLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="text-center" style="color: #173968;">BLUE TOUR</h1>
                    <form action="{{ route('send-form') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="country">Country of origin</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="form-group">
                            <label for="idioma">Language</label>
                            <input type="text" class="form-control" name="language">
                        </div>
                        <div class="form-group">
                            <label for="correo">Mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Phone number</label>
                            <input type="numbre" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label style="color: #0054ca;" for="contacto-de-emergencia">Emergency contact</label>
                        </div>
                        <div class="form-group">
                            <label for="nombre-contacto">Name</label>
                            <input type="text" class="form-control" name="emergency_name">
                        </div>
                        <div class="form-group">
                            <label for="parentesco">Relationship </label>
                            <input type="text" class="form-control" name="relationship">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option value="" selected disabled>Select an option</option>
                                <option value="regular">Regular</option>
                                <option value="vegetarian">Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alergias">Allergies</label>
                            <input type="text" class="form-control" name="allergies">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="contact_me">
                            <label class="form-check-label" for="exampleCheck1">I want you to contact me with more information</label>
                        </div>

                        <input type="hidden" name="tour_route" value="Enequen">
                        <div class="text-center boton-enviar">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="puuc" tabindex="-1" aria-labelledby="puucLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="text-center" style="color: #173968;">PUUC TOUR</h1>
                    <form action="{{ route('send-form') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        <div class="form-group">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="country">Country of origin</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                        <div class="form-group">
                            <label for="idioma">Language</label>
                            <input type="text" class="form-control" name="language">
                        </div>
                        <div class="form-group">
                            <label for="correo">Mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Phone number</label>
                            <input type="numbre" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label style="color: #0054ca;" for="contacto-de-emergencia">Emergency contact</label>
                        </div>
                        <div class="form-group">
                            <label for="nombre-contacto">Name</label>
                            <input type="text" class="form-control" name="emergency_name">
                        </div>
                        <div class="form-group">
                            <label for="parentesco">Relationship </label>
                            <input type="text" class="form-control" name="relationship">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Menu type</label>
                            <select class="form-control" name="menu_type">
                                <option value="" selected disabled>Select an option</option>
                                <option value="regular">Regular</option>
                                <option value="vegetarian">Vegetarian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alergias">Allergies</label>
                            <input type="text" class="form-control" name="allergies">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="contact_me">
                            <label class="form-check-label" for="exampleCheck1">I want you to contact me with more information</label>
                        </div>

                        <input type="hidden" name="tour_route" value="Enequen">
                        <div class="text-center boton-enviar">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="d-none d-sm-none d-md-none d-lg-block">
        <div class="fondo-rutas">
            <div class="container">
                <div class="ruta">
                    <!-- Ruta 1 -->
                    <div>
                        <div class="row pt-5">
                            <div class="col-lg-4 col-md-12 col-sm-12 m-auto">
                                <figure>
                                    <img src="/img/imagen1.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <h1 class="titular-ruta">HENEQUÉN TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    9:30 am Arrival and tour in Uxmal Archeological Zone
                                </li>
                                <li>
                                    12:00 pm Visit to Hacienda Viva Sotuta de Peón (Henequén Tour)

                                </li>
                                <li>13:30 pm  Exhibition of local products.</li>
                                <li>14:00 pm Lunch at the Sotuta de Peón Hacienda</li>
                                <li>16:00 pm Departure to Villa Mercedes Hotel </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>wear a hat to protect from the sun</li>
                                <li>Wear Sunscreen</li>
                                <li>Wear Comfortable shoes</li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta-2 mt-5">
                    <!-- Ruta 2 -->
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 m-auto">
                                <figure>
                                    <img src="/img/imagen2.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <h1 class="titular-ruta">MILPA TOUR</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    11:00 am Arrival and tour in Ek Balam Archeological Zone

                                </li>
                                <li>12:30 pm Visit to Xcanche Cenote</li>
                                <li>14:00 pm Bienvenida de Coox Mayab</li>
                                <li>14:00 pm Welcome by Coox Mayab
                                </li>
                                <li>16:00 pm Tortillaworkshop</li>
                                <li>17:00 pm Milpatour </li>
                                <li>17:30 pm Departure to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun</li>
                                <li>Use mosquito repellent</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta mt-5">
                    <!-- Ruta 3 -->
                    <div>
                        <div class="row pt-5">
                            <div class="col-lg-4 col-md-12 col-sm-12 m-auto">
                                <figure>
                                    <img src="/img/imagen3.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <h1 class="titular-ruta">BLUE TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes hotel</li>
                                <li>
                                    9:00 am Arrival to Sissal, Chalanas experience (small boats) 

                                </li>
                                <li>14:00 pm Lunch at Sisal’s Dock</li>
                                <li>15:30 pm Tour around Platinum Beaches
                                </li>
                                <li>17:00 pm Return to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fondo-rutapuuc">
                <div class="ruta mt-5">
                    <!-- Ruta 4 -->
                    <div class="container">
                        <div class="row pt-5">
                            <div class="col-lg-4 col-md-12 col-sm-12 m-auto">
                                <figure>
                                    <img src="/img/imagen4.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <h1 class="titular-ruta">RUTA PUUC</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>9:30 am Experience at Chocantes Caverns</li>
                                <li>13:00 pm Walk through the Ermita (Chapel)
                                </li>
                                <li>14:00 pm Lunch at famous restaurant Tutul Xiu
                                </li>
                                <li>
                                    15:30 pm Honey tasting and tour at Tabi Hacienda and Natural Protected Area

                                </li>
                                <li>16:30 pm Departure to Villa Mercedes Hotel</li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear Comfortable shoes</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>
                                    Experience not recommended for claustrophobic people
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none d-sm-none d-md-block d-lg-none">
        <div class="fondo-rutas">
            <div class="container">
                <div class="ruta">
                    <!-- Ruta 1 -->
                    <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil/imagen1.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pr-5 pl-5 pb-4">
                                <h1 class="titular-ruta">HENEQUÉN TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    9:30 am Arrival and tour in Uxmal Archeological Zone
                                </li>
                                <li>
                                    12:00 pm Visit to Hacienda Viva Sotuta de Peón (Henequén Tour)

                                </li>
                                <li>13:30 pm  Exhibition of local products.</li>
                                <li>14:00 pm Lunch at the Sotuta de Peón Hacienda</li>
                                <li>16:00 pm Departure to Villa Mercedes Hotel </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>wear a hat to protect from the sun</li>
                                <li>Wear Sunscreen</li>
                                <li>Wear Comfortable shoes</li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta-2 mt-2">
                    <!-- Ruta 2 -->
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil/imagen2.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">MILPA TOUR</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    11:00 am Arrival and tour in Ek Balam Archeological Zone

                                </li>
                                <li>12:30 pm Visit to Xcanche Cenote</li>
                                <li>14:00 pm Bienvenida de Coox Mayab</li>
                                <li>14:00 pm Welcome by Coox Mayab
                                </li>
                                <li>16:00 pm Tortillaworkshop</li>
                                <li>17:00 pm Milpatour </li>
                                <li>17:30 pm Departure to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun</li>
                                <li>Use mosquito repellent</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta mt-2">
                    <!-- Ruta 3 -->
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil/imagen3.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">BLUE TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes hotel</li>
                                <li>
                                    9:00 am Arrival to Sissal, Chalanas experience (small boats) 

                                </li>
                                <li>14:00 pm Lunch at Sisal’s Dock</li>
                                <li>15:30 pm Tour around Platinum Beaches
                                </li>
                                <li>17:00 pm Return to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fondo-rutapuuc">
                <div class="ruta mt-2">
                    <!-- Ruta 4 -->
                    <div class="container">
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil/imagen4.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">RUTA PUUC</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>9:30 am Experience at Chocantes Caverns</li>
                                <li>13:00 pm Walk through the Ermita (Chapel)
                                </li>
                                <li>14:00 pm Lunch at famous restaurant Tutul Xiu
                                </li>
                                <li>
                                    15:30 pm Honey tasting and tour at Tabi Hacienda and Natural Protected Area

                                </li>
                                <li>16:30 pm Departure to Villa Mercedes Hotel</li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear Comfortable shoes</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>
                                    Experience not recommended for claustrophobic people
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block d-sm-block d-md-none d-lg-none">
        <div class="fondo-rutas">
            <div class="container">
                <div class="ruta">
                    <!-- Ruta 1 -->
                    <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil3/imagen1.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pr-5 pl-5 pb-4">
                                <h1 class="titular-ruta">HENEQUÉN TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    9:30 am Arrival and tour in Uxmal Archeological Zone
                                </li>
                                <li>
                                    12:00 pm Visit to Hacienda Viva Sotuta de Peón (Henequén Tour)

                                </li>
                                <li>13:30 pm  Exhibition of local products.</li>
                                <li>14:00 pm Lunch at the Sotuta de Peón Hacienda</li>
                                <li>16:00 pm Departure to Villa Mercedes Hotel </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>wear a hat to protect from the sun</li>
                                <li>Wear Sunscreen</li>
                                <li>Wear Comfortable shoes</li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#henequen">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta-2 mt-2">
                    <!-- Ruta 2 -->
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil3/imagen2.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">MILPA TOUR</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>
                                    11:00 am Arrival and tour in Ek Balam Archeological Zone

                                </li>
                                <li>12:30 pm Visit to Xcanche Cenote</li>
                                <li>14:00 pm Bienvenida de Coox Mayab</li>
                                <li>14:00 pm Welcome by Coox Mayab
                                </li>
                                <li>16:00 pm Tortillaworkshop</li>
                                <li>17:00 pm Milpatour </li>
                                <li>17:30 pm Departure to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun</li>
                                <li>Use mosquito repellent</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell</li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#milpa">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ruta mt-2">
                    <!-- Ruta 3 -->
                    <div>
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil3/imagen3.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">BLUE TOUR </h1>
                                <li>8:00 am Departure from Villa Mercedes hotel</li>
                                <li>
                                    9:00 am Arrival to Sissal, Chalanas experience (small boats) 

                                </li>
                                <li>14:00 pm Lunch at Sisal’s Dock</li>
                                <li>15:30 pm Tour around Platinum Beaches
                                </li>
                                <li>17:00 pm Return to Villa Mercedes Hotel
                                </li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear a hat to protect from the sun
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>Wear sunscreen
                                </li>
                                <li>Wear Comfortable shoes
                                </li>
                                <li>Bring bathing suit and a towell
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#azul">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fondo-rutapuuc">
                <div class="container mt-2">
                    <!-- Ruta 4 -->
                    <div class="ruta">
                        <div class="row pt-4">
                            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                                <figure>
                                    <img src="/img/movil3/imagen4.png" alt="Ruta del Henequén" class="img-fluid" />
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                                <h1 class="titular-ruta">RUTA PUUC</h1>
                                <li>8:00 am Departure from Villa Mercedes Hotel</li>
                                <li>9:30 am Experience at Chocantes Caverns</li>
                                <li>13:00 pm Walk through the Ermita (Chapel)
                                </li>
                                <li>14:00 pm Lunch at famous restaurant Tutul Xiu
                                </li>
                                <li>
                                    15:30 pm Honey tasting and tour at Tabi Hacienda and Natural Protected Area

                                </li>
                                <li>16:30 pm Departure to Villa Mercedes Hotel</li>

                                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                                <li>Wear Comfortable shoes</li>
                                <li>Wear sunscreen
                                </li>
                                <li>Use mosquito repellent
                                </li>
                                <li>
                                    Experience not recommended for claustrophobic people
                                </li>

                                @if (session('register'))
                                    <div class="inscribirme mt-3">
                                        <button disabled class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @else
                                    <div class="inscribirme mt-3">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#puuc">Sign up</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
