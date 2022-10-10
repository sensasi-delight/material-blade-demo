@extends('layouts.main')

@section('title', 'Snackbar')

@section('main')
    <h2>Demo</h2>

    <x-mbc::Snackbar id="defaultSnackbar" message="Default Snackbar." />
    <x-mbc::Snackbar id="leadingSnackbar" variant="leading" message="Leading Snackbar." />
    <x-mbc::Snackbar id="stackedSnackbar" variant="stacked" message="Stacked Snackbar." />

    <x-mbc::Button label="Default" variant="raised" onclick="openDefaultSnackbar()" />
    <x-mbc::Button label="Leading" variant="raised" onclick="openLeadingSnackbar()" />
    <x-mbc::Button label="Stacked" variant="raised" onclick="openStackedSnackbar()" />

    <h2>Props</h2>

    <table class="propsTable">
        <thead>
            <th>Name</th>
            <th>Type</th>
            <th>Default Value</th>
            <th>Description</th>
        </thead>
        <tbody>
            <tr>
                <td><code>message</code></td>
                <td><code>String</code></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><code>variant</code></td>
                <td><code>String: 'default', 'leading', 'stacked'</code></td>
                <td><code>default</code></td>
                <td>Optional. </td>
            </tr>

            <tr>
                <td><code>open</code></td>
                <td><code>bool</code></td>
                <td><code>false</code></td>
                <td>Optional. </td>
            </tr>

            <tr>
              <td><code>timeout</code></td>
              <td><code>number</code></td>
              <td><code>4000</code></td>
              <td>Optional. timeout in milisecond.</td>
          </tr>
        </tbody>
    </table>

    <h2>Source Code:</h2>
    <p>
        <a href="{{ $sourceCodeUrl }}" target="_blank">{{ $sourceCodeUrl }}</a>
    </p>

    <h2>References</h2>

    <ul>
        @foreach ($references as $url)
            <li>
                <a href="{{ $url }}" target="_blank">{{ $url }}</a>
            </li>
        @endforeach
    </ul>

    <script>
        const defaultSnackbarEl = document.getElementById('defaultSnackbar');
        const leadingSnackbarEl = document.getElementById('leadingSnackbar');
        const stackedSnackbarEl = document.getElementById('stackedSnackbar');

        defaultSnackbarEl.onclick = () => defaultSnackbarEl.MDCSnackbar.close();
        leadingSnackbarEl.onclick = () => leadingSnackbarEl.MDCSnackbar.close();
        stackedSnackbarEl.onclick = () => stackedSnackbarEl.MDCSnackbar.close();

        const openDefaultSnackbar = () => {
            defaultSnackbarEl.MDCSnackbar.open();
        }

        const openLeadingSnackbar = () => {
            leadingSnackbarEl.MDCSnackbar.open();
        }

        const openStackedSnackbar = () => {
            stackedSnackbarEl.MDCSnackbar.open();
        }
    </script>

@endsection
