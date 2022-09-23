@extends('layouts.main')

@section('title', 'Chip')

@section('main')
    <section>
        <h2>Demos</h2>

        <h3>Basic Chips</h3>

        <x-MaterialBlade::ChipSet>
            <x-MaterialBlade::Chip label="Add to calendar" icon="event" />
            <x-MaterialBlade::Chip label="Bookmark" icon="bookmark" />
            <x-MaterialBlade::Chip label="Set alarm" icon="alarm" />
            <x-MaterialBlade::Chip label="Get directions" icon="directions" />
        </x-MaterialBlade::ChipSet>

        <h3>Choice Chips</h3>

        <x-MaterialBlade::ChipSet variant="choice">
            <x-MaterialBlade::Chip label="Extra Small" />
            <x-MaterialBlade::Chip label="Small" />
            <x-MaterialBlade::Chip label="Medium" selected />
            <x-MaterialBlade::Chip label="Large" />
            <x-MaterialBlade::Chip label="Extra Large" />
        </x-MaterialBlade::ChipSet>

        <h3>Filter Chips</h3>

        <h4>No leading icon</h4>

        <x-MaterialBlade::ChipSet variant="filter">
            <x-MaterialBlade::Chip label="Tops" selected />
            <x-MaterialBlade::Chip label="Bottom" selected />
            <x-MaterialBlade::Chip label="Shoes" />
            <x-MaterialBlade::Chip label="Accessories" />
        </x-MaterialBlade::ChipSet>

        <h4>With leading icon</h4>

        <x-MaterialBlade::ChipSet variant="filter">
            <x-MaterialBlade::Chip label="Alice" icon="face" selected />
            <x-MaterialBlade::Chip label="Bob" icon="face" />
            <x-MaterialBlade::Chip label="Charlie" icon="face" />
            <x-MaterialBlade::Chip label="Accessories" icon="face" />
        </x-MaterialBlade::ChipSet>

        {{-- TODO: Fix the input chips --}}
        {{-- <h3>Input Chips</h3>

        <x-MaterialBlade::ChipSet variant="input">
            <x-MaterialBlade::Chip label="Tops" />
            <x-MaterialBlade::Chip label="Bottom" />
            <x-MaterialBlade::Chip label="Shoes" />
            <x-MaterialBlade::Chip label="Accessories" />
        </x-MaterialBlade::ChipSet> --}}


      </section>
     
    {{-- <section>
        <h2>Props</h2>

        <table>
            <thead>
                <th>Name</th>
                <th>Type</th>
                <th>Default Value</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td><code>icon</code></td>
                    <td>Icon String</td>
                    <td></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>label</code></td>
                    <td>String</td>
                    <td></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>color</code></td>
                    <td>Color String | Hex Color</td>
                    <td>'secondary'</td>
                    <td>Optional. </td>
                </tr>

                <tr>
                    <td><code>variant</code></td>
                    <td>string</td>
                    <td>'regular'</td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>withWrapper</code></td>
                    <td>Bool</td>
                    <td><code>false</code></td>
                    <td>Optional. </td>
                </tr>
            </tbody>
        </table>
    </section> --}}


    <section>
      <h2>Source Code:</h2>
      <p>
        @php $url = sourceCodeGithubUrl('resources/views/pages/chip.blade.php') @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
    </section>

    <section>
      <h2>References</h2>

      <ul>
          @foreach (['https://material.io/components/chips/web',
          'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-chips/deprecated/README.md',
          'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-chips/README.md',
          'https://material-components.github.io/material-components-web-catalog/#/component/chips'] as $url)
              <li>
                  <a href="{{ $url }}" target="_blank">{{ $url }}</a>
              </li>
          @endforeach
      </ul>
    </section>
@endsection
