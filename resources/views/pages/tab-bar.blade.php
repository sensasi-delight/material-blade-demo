@extends('layouts.main')

@section('title', 'Tab Bar')

@section('main')
    <section>
        <h2>Demos</h2>

        <h3>Basic Tabs</h3>

        @php
            $tabs1 = ['Recents', 'Nearby', 'Favorite'];
            
            $tabs2 = [
                'alarm' => 'Recents',
                'send_alt' => 'Nearby',
                'favorite' => 'Favorite',
            ];
            
            $tabs3 = ['alarm', 'send_alt', 'favorite'];
            
            $tabs4 = ['Tabs one', 'Tabs two', 'Tabs three', 'Tabs four', 'Tabs five', 'Tabs six', 'Tabs seven', 'Tabs eight', 'Tabs nine', 'Tabs ten', 'Tabs eleven', 'Tabs twelve'];
            
        @endphp

        <x-mbc::TabBar :tabs="$tabs1" />

        <h3>Tabs with icons next to labels</h3>

        <x-mbc::TabBar :tabs="$tabs2" />

        <h3>Tabs with icons above labels and indicators restricted to content</h3>

        <x-mbc::TabBar :tabs="$tabs2" stacked />

        <h3>Tabs with icons only</h3>

        <x-mbc::TabBar :tabs="$tabs3" iconOnly />

        <h3>Scrolling tabs</h3>

        <p>if your <code>Tabs</code> length is more than screen width, then the <code>Tabs</code> is automatically will be
            scrollable</p>

        <x-mbc::TabBar :tabs="$tabs4" />

        <h3>Colored Tab Bar</h3>

        <!-- ... content ... -->
        <x-mbc::TabBar :tabs="$tabs4" color="primary" lightText elevation="3" />






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
            <a href="{{ $url = 'https://github.com/sensasi-delight/material-blade-demo/blob/' . config('app.version') . '/resources/views/pages/tab-bar.blade.php' }}">{{ $url }}</a>
        </p>
    </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach (['https://material-components.github.io/material-components-web-catalog/#/component/tabs'] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>

    </section>
@endsection
