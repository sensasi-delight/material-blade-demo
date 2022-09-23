@extends('layouts.main')

@section('title', 'Typography')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::Typography>Lorem ipsum dolor sit amet.</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography slot="Lorem ipsum dolor sit amet." />

        <p>Source code:</p>
        <pre><code>
&lt;x-MaterialBlade::Typography>Lorem ipsum dolor sit amet.&lt;/x-MaterialBlade::Typography>
&lt;!-- or -->
&lt;x-MaterialBlade::Typography slot="Lorem ipsum dolor sit amet." />
  </pre></code>
    </section>

    <section>
        <h2>Variant</h2>

        <x-MaterialBlade::Typography variant="h1">Headline 1</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="h2">Headline 2</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="h3">Headline 3</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="h4">Headline 4</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="h5">Headline 5</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="h6">Headline 6</x-MaterialBlade::Typography>

        <x-MaterialBlade::Typography variant="subtitle1">Subtitle 1</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="subtitle2">Subtitle 2</x-MaterialBlade::Typography>

        <x-MaterialBlade::Typography variant="body1">
            Body 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos blanditiis tenetur unde suscipit, quam
            beatae rerum inventore consectetur, neque doloribus, cupiditate numquam dignissimos laborum fugiat deleniti? Eum
            quasi quidem quibusdam.
        </x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="body2">
            Body 2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aliquid ad quas sunt voluptatum
            officia dolorum cumque, possimus nihil molestias sapiente necessitatibus dolor saepe inventore, soluta id
            accusantium voluptas beatae.
        </x-MaterialBlade::Typography>

        <x-MaterialBlade::Typography variant="button">Button text</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="caption">Caption text</x-MaterialBlade::Typography>
        <x-MaterialBlade::Typography variant="overline">Overline text</x-MaterialBlade::Typography>

        <x-MaterialBlade::Typography>Inherit</x-MaterialBlade::Typography>

    </section>

    <section>
        <h2>Props</h2>

        <style>
            td {
                padding: .3em 1em;
            }
        </style>

        <table>
            <thead>
                <th>Name</th>
                <th>Type</th>
                <th>Default Value</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td><code>slot</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>variant</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>element</code></td>
                    <td><code>string</code></td>
                    <td><code>h1 | h2 | h3 | h4 | h5 | h6 | p</code></td>
                    <td>Optional. </td>
                </tr>
            </tbody>
        </table>

    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php
          $url = sourceCodeGithubUrl('resources/views/pages/typography.blade.php')
        @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>


    <section>
        <h2>References</h2>

        <ul>
            @foreach ([
              'https://material.io/develop/web/guides/typography',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-typography/README.md',
              'https://material-components.github.io/material-components-web-catalog/#/component/typography'
            ] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
