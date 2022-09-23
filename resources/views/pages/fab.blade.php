@extends('layouts.main')

@section('title', 'Floating Action Button')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::FAB icon="favorite" />

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::FAB icon="favorite" />
        </pre></code>
    </section>
    <section>

        <h2>Variant</h2>

        <x-MaterialBlade::FAB icon="add" />
        <x-MaterialBlade::FAB icon="add" variant="mini" />

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::FAB icon="add" <b>variant="regular"</b> />
&lt;x-MaterialBlade::FAB icon="add" <b>variant="mini"</b> />
        </pre></code>
    </section>
    <section>
        <h2>With Label</h2>

        <x-MaterialBlade::FAB label="Order" />
        <x-MaterialBlade::FAB icon="add" label="Create" />

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::FAB label="Order" />
&lt;x-MaterialBlade::FAB icon="add" label="Create" />
        </pre></code>
    </section>

    <section>
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

    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php
          $url = sourceCodeGithubUrl('resources/views/pages/fab.blade.php')
        @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach ([
              'https://material.io/components/buttons-floating-action-button/web',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-fab/README.md',
              'https://material-components.github.io/material-components-web-catalog/#/component/fab'] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>

    </section>
@endsection
