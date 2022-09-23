@extends('layouts.main')

@section('title', 'Tooltip')

@section('main')
    <section>
      <h2>Basic Usage</h2>

      <pre><code>
&lt;x-MaterialBlade::Tooltip>
    &lt;!-- anchor element (required) -->
    &lt;x-MaterialBlade::IconButton icon="info" />

    &lt;!-- Rich tooltip (optional) -->
    &lt;x-slot name="title">
        &lt;!-- Rich tooltip title  -->
    &lt;/x-slot>

    &lt;x-slot name="body">
        &lt;!-- Rich tooltip body  -->
    &lt;/x-slot>

    &lt;x-slot name="action">
        &lt;!-- Rich tooltip footer action  -->
    &lt;/x-slot>
&lt;/x-MaterialBlade::Tooltip>
      </pre></code>
    </section>

    <section>
        <h2>Default Plain Tooltip</h2>
        <x-MaterialBlade::Tooltip title="Delete">
            <x-MaterialBlade::IconButton icon="delete" />
        </x-MaterialBlade::Tooltip>

        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Tooltip title="Delete">
  &lt;x-MaterialBlade::IconButton icon="delete" />
&lt;/x-MaterialBlade::Tooltip>
</pre></code>
    </section>

    <section>
        <h2>Rich Tooltip</h2>

        <x-MaterialBlade::Tooltip>
            <x-MaterialBlade::IconButton icon="account_circle" />

            <x-slot name="title">
                John Doe
            </x-slot>

            <x-slot name="body">
                <x-MaterialBlade::Icon icon="fiber_manual_record" color="success" /> Online
            </x-slot>
        </x-MaterialBlade::Tooltip>

        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Tooltip>
    &lt;x-MaterialBlade::IconButton icon="account_circle" />

    &lt;x-slot name="title">
        John Doe
    &lt;/x-slot>

    &lt;x-slot name="body">
        &lt;x-MaterialBlade::Icon icon="fiber_manual_record" color="success" /> Online
    &lt;/x-slot>
&lt;/x-MaterialBlade::Tooltip>
        </pre></code>
    </section>


    <section>
        <h2>Rich Persistent Tooltip</h2>

        <x-MaterialBlade::Tooltip persistent>
            <x-MaterialBlade::IconButton icon="info" />

            <x-slot name="title">
                Persistent Tooltip
            </x-slot>

            <x-slot name="body">
                You can add the action footer.
            </x-slot>

            <x-slot name="action">
                <x-MaterialBlade::Button label="More" variant="text" />
            </x-slot>
        </x-MaterialBlade::Tooltip>

        <p>source code:</p>

        <pre><code>
&lt;x-MaterialBlade::Tooltip persistent>
    &lt;x-MaterialBlade::IconButton icon="info" />

    &lt;x-slot name="title">
        Persistent Tooltip
    &lt;/x-slot>

    &lt;x-slot name="body">
        You can add the action footer.
    &lt;/x-slot>

    &lt;x-slot name="action">
        &lt;x-MaterialBlade::Button label="More" variant="text" />
    &lt;/x-slot>
&lt;/x-MaterialBlade::Tooltip>
        </pre></code>
    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php
          $url = sourceCodeGithubUrl('resources/views/pages/tooltip.blade.php')
        @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach ([
              'https://material.io/components/tooltips/web',
              'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-tooltip/README.md'
            ] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
