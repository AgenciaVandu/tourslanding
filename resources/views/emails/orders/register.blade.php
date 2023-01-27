<x-mail::message>
<h1>Registro de Tour</h1>

<x-mail::table>
|        |          |
| ------------- |:-------------:|
| Name      | {{ $name }}      |
| Last Name      | {{ $last_name  }}|
| Country      |{{  $country  }}|
| Language      |{{ $language  }}|
| Email      |{{ $email  }}|
| Phone      |{{ $phone  }}|
| Emergency Name      |{{ $emergency_name  }}|
| Relationship      |{{ $relationship  }}|
| Menu Type      |{{ $menu_type  }}|
| Contact      |@if ($contact_me == 1) Sí @else No @endif|
| Tour      |{{ $tour_route  }}|
</x-mail::table>




{{ config('app.name') }}
</x-mail::message>
