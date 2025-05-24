@extends('layouts.main')

@section('container')
    <style>
        #stackblitzEmbed {
            width: 100%;
            height: 600px;
        }
    </style>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong><i class="bi bi-info-circle"></i> Panduan Live Node</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="mb-0">
                        <li>List</li>
                        <li>List</li>
                        <li>List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <iframe id="stackblitzEmbed" class="mt-1"
        src="https://stackblitz.com/edit/stackblitz-starters-i4ur7g?embed=1&file=index.js"></iframe>
@endsection
