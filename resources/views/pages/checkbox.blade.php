@extends('layouts.main')

@section('title', 'CheckBox')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::checkbox />
        <x-MaterialBlade::checkbox label="with label" />
        <x-MaterialBlade::checkbox label="Disabled" disabled />
        <x-MaterialBlade::checkbox label="checked" checked />
        <x-MaterialBlade::checkbox label="checked disabled" checked disabled />
        <x-MaterialBlade::checkbox label="indeterminate" indeterminate />
        <x-MaterialBlade::checkbox label="indeterminate disabled" indeterminate disabled />
        <x-MaterialBlade::checkbox label="indeterminate checked disabled" indeterminate checked disabled />

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::checkbox />
&lt;x-MaterialBlade::checkbox label="Basic" />
&lt;x-MaterialBlade::checkbox label="Disabled" disabled />
&lt;x-MaterialBlade::checkbox label="checked" checked />
&lt;x-MaterialBlade::checkbox label="checked disabled" checked disabled />
&lt;x-MaterialBlade::checkbox label="indeterminate" indeterminate />
&lt;x-MaterialBlade::checkbox label="indeterminate disabled" indeterminate disabled />
&lt;x-MaterialBlade::checkbox label="indeterminate checked disabled" indeterminate checked disabled />
        </pre></code>

        <p>
            Use the <code>id</code> props for checks the checkbox from it's label.
        </p>


        <x-MaterialBlade::checkbox label="Click this text" id="the-checkbox" />

        <pre><code>
&lt;x-MaterialBlade::checkbox label="Click this text" id="the-checkbox" />
        </pre></code>


    </section>


    <section>
      <h2>Colored</h2>

      <x-MaterialBlade::checkbox label="Primary" checked />
      <x-MaterialBlade::checkbox label="Secondary" checked color="secondary" />
      <x-MaterialBlade::checkbox label="Success" checked color="success" />
      <x-MaterialBlade::checkbox label="Error" checked color="error" />
      <x-MaterialBlade::checkbox label="Warning" checked color="warning" />
      <x-MaterialBlade::checkbox label="Info" checked color="info" />

      <p>source code:</p>
      <pre><code>
&lt;x-MaterialBlade::checkbox label="Primary" checked />
&lt;x-MaterialBlade::checkbox label="Secondary" checked color="secondary" />
&lt;x-MaterialBlade::checkbox label="Success" checked color="success" />
&lt;x-MaterialBlade::checkbox label="Error" checked color="error" />
&lt;x-MaterialBlade::checkbox label="Warning" checked color="warning" />
&lt;x-MaterialBlade::checkbox label="Info" checked color="info" />
      </pre></code>

    </section>


    <section>
      <h2>Source Code:</h2>
      <p>
        @php $url = sourceCodeGithubUrl('resources/views/pages/checkbox.blade.php') @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
    </section>

    <section>
      <h2>References</h2>

      <ul>
          @foreach (['https://material.io/components/checkboxes/web',
          'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-checkbox/README.md',
          'https://material-components.github.io/material-components-web-catalog/#/component/checkbox'] as $url)
              <li>
                  <a href="{{ $url }}" target="_blank">{{ $url }}</a>
              </li>
          @endforeach
      </ul>
    </section>


@endsection
