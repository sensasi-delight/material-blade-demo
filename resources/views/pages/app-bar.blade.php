@extends('layouts.main')

@section('title', 'App Bar: Top')

@section('main')
    <section>
        <h2>Basic</h2>

        <iframe src="{{ route('pages.app-bar.iframe.basic') }}" width="100%"></iframe>

        <p>source code:</p>
        <pre>
&lt;x-MaterialBlade::AppBar>
  &lt;x-slot name="start">
      &lt;x-MaterialBlade::IconButton icon="menu" aria-label="Open navigation menu" />

      &lt;span class="mdc-top-app-bar__title">Page title&lt;/span>
  &lt;/x-slot>

  &lt;x-slot name="end">
      &lt;x-MaterialBlade::IconButton icon="favorite" aria-label="Favorite" />
      &lt;x-MaterialBlade::IconButton icon="search" aria-label="Search" />
      &lt;x-MaterialBlade::IconButton icon="more_vert" aria-label="Options" />
  &lt;/x-slot>

&lt;/x-MaterialBlade::AppBar>
        </pre>

    </section>

    <section>
        <h2>Props</h2>

        <table>
            <thead>
                <th>Name</th>
                <th>Type</th>
                <th>Default</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td>color</td>
                    <td>'primary'
                        | 'secondary'
                        | 'success'
                        | 'error'
                        | 'info'
                        | 'warning'
                        | string</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>fixed</td>
                    <td>bool</td>
                    <td>false</td>
                    <td></td>
                </tr>

                <tr>
                    <td>variant</td>
                    <td>
                        | 'short'
                        | 'short-collapsed'
                        | 'dense'
                        | 'prominent'
                        | string</td>
                    <td>basic</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h2>Color</h2>

        <p>Please click one of button below to preview the <code>App Bar</code> color</p>

        <x-MaterialBlade::Button label="primary" onclick="switchColor('#1565c0')" />
        <x-MaterialBlade::Button label="secondary" onclick="switchColor('var(--mdc-theme-secondary)')" />
        <x-MaterialBlade::Button label="success" onclick="switchColor('var(--mdc-theme-success)')" />
        <x-MaterialBlade::Button label="warning" onclick="switchColor('var(--mdc-theme-warning)')" />
        <x-MaterialBlade::Button label="error" onclick="switchColor('var(--mdc-theme-error)')" />
        <x-MaterialBlade::Button label="info" onclick="switchColor('var(--mdc-theme-info)')" />

        <p>or hex color</p>

        <input type="text" onchange="switchColor(this.value)" readonly>
        <input type="color" oninput="switchColor(this.value)">
    </section>

    </section>

    <section>
        <h2>Fixed App Bar</h2>

        <iframe src="{{ route('pages.app-bar.iframe.fixed') }}" width="100%"></iframe>
    </section>

    <p>source code:</p>
    <pre>
&lt;x-MaterialBlade::AppBar fixed>
...
&lt;x-MaterialBlade::AppBar>
      </pre>
    </section>

    <section>
        <h2>Variants</h2>


        <h3>Short</h3>
        <iframe src="{{ route('pages.app-bar.iframe.short') }}" width="100%"></iframe>
        <blockquote>
            Note: Short top app bar should be used with no more than 1 action item.
        </blockquote>

        <h4>Short - always closed</h4>
        <iframe src="{{ route('pages.app-bar.iframe.short-collapsed') }}" width="100%"></iframe>



        <h3>Dense</h3>
        <iframe src="{{ route('pages.app-bar.iframe.dense') }}" width="100%"></iframe>

        <h3>Prominent</h3>
        <iframe src="{{ route('pages.app-bar.iframe.prominent') }}" width="100%"></iframe>

    </section>

    <script>
        const r = document.querySelector(':root');

        switchColor('#1565c0');

        function switchColor(color) {
            r.style.setProperty('--mdc-theme-primary', color)

            const rs = getComputedStyle(r);

            document.querySelectorAll('input').forEach(input => input.value = rs.getPropertyValue('--mdc-theme-primary')
                .trim());

            document.querySelectorAll('iframe').forEach(iframe => iframe.contentWindow.document.querySelector(':root').style
                .setProperty('--mdc-theme-primary', color))
        }
    </script>
@endsection
