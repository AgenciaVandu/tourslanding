@extends('layouts.landing')
@section('content')
<div>
    <h1 class="titular text-center">
      REGISTRO VISITAS DE CAMPO <br />
      10 DE FEBRERO
    </h1>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
        <h1 class="text-center" style="color: #173968;">Ruta del Henequén</h1>
        <form>
            <div class="form-group">
                <label for="first-name">Nombre</label>
                <input type="text" class="form-control" id="first-name">
            </div>
            <div class="form-group">
                <label for="last-name">Apellido</label>
                <input type="text" class="form-control" id="last-name">
            </div>
            <div class="form-group">
                <label for="country">Pais de procedencia</label>
                <input type="text" class="form-control" id="country">
            </div>
            <div class="form-group">
                <label for="idioma">Idioma</label>
                <input type="text" class="form-control" id="idioma">
            </div>
            <div class="form-group">
              <label for="correo">Correo</label>
              <input type="email" class="form-control" id="correo">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="numbre" class="form-control" id="telefono">
            </div>
            <div class="form-group">
                <label style="color: #0054ca;" for="contacto-de-emergencia">Contacto de emergencia</label>
            </div>
            <div class="form-group">
                <label for="nombre-contacto">Nombre</label>
                <input type="text" class="form-control" id="nombre-contacto">
            </div>
            <div class="form-group">
                <label for="parentesco">Parentesco</label>
                <input type="text" class="form-control" id="parentesco">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de menu</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Regular</option>
                  <option>Vegetariano</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alergias">Alergias</label>
                <input type="text" class="form-control" id="alergias">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Quiero que me contacten con más información</label>
            </div>
            <div class="text-center boton-enviar">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
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
                  <img
                    src="/img/imagen1.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <h1 class="titular-ruta">RUTA DEL HENEQUÉN</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:30 am Llegada a Uxmal para Tour en la zona Arqueológica
                </li>
                <li>
                  12:00 pm Visita a la hacienda viva Sotuta de Peón (tour
                  henequenero)
                </li>
                <li>13:30 pm Exposición de productos locales</li>
                <li>14:00 pm Almuerzo en Sotuta de Peón</li>
                <li>16:00 pm Regreso al Hotel (Villa Mercedes)</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/imagen2.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <h1 class="titular-ruta">RUTA DE LA MILPA</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  11:00 am Llegada y tour por la zona arqueológica de Ek
                  Balam
                </li>
                <li>12:30 pm Visita al Cenote Xcanche</li>
                <li>14:00 pm Bienvenida de Coox Mayab</li>
                <li>14:30 Comida con la comunidad maya</li>
                <li>16:00 pm Tour en la milpa</li>
                <li>17:00 pm Taller de tortilla</li>
                <li>18:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/imagen3.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <h1 class="titular-ruta">RUTA AZUL</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:00 am Llegada a Sisal, experiencia en las Chalanas
                </li>
                <li>14:00 pm Comida en Muelle de Sisal</li>
                <li>15:30 pm Recorrido explicación Playas Platino</li>
                <li>17:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/imagen4.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12">
                <h1 class="titular-ruta">RUTA PUUC</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>9:30 am Experiencia en Grutas chocantes</li>
                <li>13:00 pm Caminata por la Ermita</li>
                <li>14:00 pm Almuerzo en el príncipe Tutul – Xiu</li>
                <li>
                  15:30 pm Cata de Miel Tabi / Plática Reserva / Vivero
                  plantas nativas
                </li>
                <li>16:30 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Usar zapatos cómodos</li>
                <li>Usar protector solar</li>
                <li>Usar repelente para moscos</li>
                <li>
                  Experiencia no recomendada para gente claustrofóbica
                </li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil/imagen1.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pr-5 pl-5 pb-4">
                <h1 class="titular-ruta">RUTA DEL HENEQUÉN</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:30 am Llegada a Uxmal para Tour en la zona Arqueológica
                </li>
                <li>
                  12:00 pm Visita a la hacienda viva Sotuta de Peón (tour
                  henequenero)
                </li>
                <li>13:30 pm Exposición de productos locales</li>
                <li>14:00 pm Almuerzo en Sotuta de Peón</li>
                <li>16:00 pm Regreso al Hotel (Villa Mercedes)</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil/imagen2.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA DE LA MILPA</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  11:00 am Llegada y tour por la zona arqueológica de Ek
                  Balam
                </li>
                <li>12:30 pm Visita al Cenote Xcanche</li>
                <li>14:00 pm Bienvenida de Coox Mayab</li>
                <li>14:30 Comida con la comunidad maya</li>
                <li>16:00 pm Tour en la milpa</li>
                <li>17:00 pm Taller de tortilla</li>
                <li>18:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil/imagen3.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA AZUL</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:00 am Llegada a Sisal, experiencia en las Chalanas
                </li>
                <li>14:00 pm Comida en Muelle de Sisal</li>
                <li>15:30 pm Recorrido explicación Playas Platino</li>
                <li>17:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil/imagen4.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA PUUC</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>9:30 am Experiencia en Grutas chocantes</li>
                <li>13:00 pm Caminata por la Ermita</li>
                <li>14:00 pm Almuerzo en el príncipe Tutul – Xiu</li>
                <li>
                  15:30 pm Cata de Miel Tabi / Plática Reserva / Vivero
                  plantas nativas
                </li>
                <li>16:30 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Usar zapatos cómodos</li>
                <li>Usar protector solar</li>
                <li>Usar repelente para moscos</li>
                <li>
                  Experiencia no recomendada para gente claustrofóbica
                </li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil3/imagen1.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pr-5 pl-5 pb-4">
                <h1 class="titular-ruta">RUTA DEL HENEQUÉN</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:30 am Llegada a Uxmal para Tour en la zona Arqueológica
                </li>
                <li>
                  12:00 pm Visita a la hacienda viva Sotuta de Peón (tour
                  henequenero)
                </li>
                <li>13:30 pm Exposición de productos locales</li>
                <li>14:00 pm Almuerzo en Sotuta de Peón</li>
                <li>16:00 pm Regreso al Hotel (Villa Mercedes)</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil3/imagen2.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA DE LA MILPA</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  11:00 am Llegada y tour por la zona arqueológica de Ek
                  Balam
                </li>
                <li>12:30 pm Visita al Cenote Xcanche</li>
                <li>14:00 pm Bienvenida de Coox Mayab</li>
                <li>14:30 Comida con la comunidad maya</li>
                <li>16:00 pm Tour en la milpa</li>
                <li>17:00 pm Taller de tortilla</li>
                <li>18:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil3/imagen3.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA AZUL</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>
                  9:00 am Llegada a Sisal, experiencia en las Chalanas
                </li>
                <li>14:00 pm Comida en Muelle de Sisal</li>
                <li>15:30 pm Recorrido explicación Playas Platino</li>
                <li>17:00 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Llevar gorra para protegerse del sol</li>
                <li>Usar repelente de moscos</li>
                <li>Usar protector solar</li>
                <li>Usar zapatos cómodos</li>
                <li>Llevar traje de baño, toalla y cambio de ropa</li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
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
                  <img
                    src="/img/movil3/imagen4.png"
                    alt="Ruta del Henequén"
                    class="img-fluid"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-12 col-sm-12 pl-5 pr-5 pb-4">
                <h1 class="titular-ruta">RUTA PUUC</h1>
                <li>8:00 am Salida de Mérida</li>
                <li>9:30 am Experiencia en Grutas chocantes</li>
                <li>13:00 pm Caminata por la Ermita</li>
                <li>14:00 pm Almuerzo en el príncipe Tutul – Xiu</li>
                <li>
                  15:30 pm Cata de Miel Tabi / Plática Reserva / Vivero
                  plantas nativas
                </li>
                <li>16:30 pm Regreso al Hotel Villa Mercedes</li>

                <h2 class="titular-ruta pt-3">RECOMENDACIONES</h2>
                <li>Usar zapatos cómodos</li>
                <li>Usar protector solar</li>
                <li>Usar repelente para moscos</li>
                <li>
                  Experiencia no recomendada para gente claustrofóbica
                </li>

                <div class="inscribirme mt-3">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Inscribirme</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection