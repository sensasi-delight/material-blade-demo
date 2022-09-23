@extends('layouts.main')

@section('title', 'Data Table')

@section('main')
    <section>
        <h2>Demos</h2>

        <h3>Data table standard</h3>

        @php
            $header = ['Dessert', 'Carbs (g)' => 'numeric', 'Protein (g)' => 'numeric', 'Comments'];
            $data = [['Frozen yogurt', 24, 4.0, 'Super tasty'], ['Ice cream sandwich', 37, 4.33333333333, 'I like ice cream more'], ['Eclair', 24, 6.0, 'New filing flavor']];
        @endphp

        <x-MaterialBlade::DataTable :header="$header" :data="$data" />


        <h3>Data table with row selection</h3>

        @php
          $header = ['Signal name', 'Status', 'Severity', 'Stage', 'Time', 'Roles'];
          $data = [[
            false, 'Arcus watch slowdown', 'Online', 'Medium', 'Triaged', '0:33', 'Allison Brie'
          ], [
            true, 'monarch: prod shared ares-managed-features-provider-heavy', 'Offline', 'Huge', 'Triaged', '0:33', 'Brie Larson'
          ], [
            true, 'monarch: prod shared ares-managed-features-provider-heavy', 'Online', 'Minor', 'Not triaged', '0:33', 'Jeremy Lake'
          ], [
            false, 'Arcus watch slowdown', 'Online', 'Negligible', 'Triaged', '0:33', 'Angelina Cheng'
          ]];
        @endphp

        <x-MaterialBlade::DataTable :header="$header" :data="$data" withCheckbox />

        <h3>Data table with pagination</h3>

        <p><i>status: planned</i></p>
        
        <h3>Data table with progress indicator</h3>

        <p><i>status: planned</i></p>

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
        @php
          $url = sourceCodeGithubUrl('resources/views/pages/data-table.blade.php')
        @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach ([
              'https://material.io/components/data-tables/web',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-data-table/README.md',
              'https://material-components.github.io/material-components-web-catalog/#/component/data-table'] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
