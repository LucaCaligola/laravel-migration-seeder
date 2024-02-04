@extends('layout.app')

@section('main-content')

<div class="container">

    <div class="row">

        @foreach ($trains as $train)
            
        <div class="col-3">

            <div class="card m-3 p-2">

                <h3>
                    {{ $train->Azienda }}
                </h3>

                <p>
                    Parte da: {{ $train->Stazione_di_partenza }}
                </p>

                <p>
                    In arrivo a: {{ $train->Stazione_di_arrivo }}
                </p>

                <p>
                    Orario di partenza: {{ $train->Orario_di_partenza }}
                </p>
                <p>
                    Orario di arrivo: {{ $train->Orario_di_arrivo }}
                </p>

                <p>
                    Codice Treno: {{ $train->Codice_treno }}
                </p>

                <p>
                    Numero carrozze: {{ $train->Numero_carrozze }}
                </p>

                <p>

                    In orario: {{ $train->In_orario }}
                </p>

                <p>

                    Cancellato: {{ $train->Cancellato }}
                </p>
            </div>
        </div>
        @endforeach
    </div>   
</div>

@endsection