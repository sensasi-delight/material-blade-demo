@extends('layouts.main')

@section('title', 'Floating Action Button')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::Typography slot="test" />

        <x-MaterialBlade::Card />

        <p>source code:</p>
        <pre>
&lt;x-MaterialBlade::FAB icon="favorite" />
        </pre>
    </section>
    <section>

        <h2>Variant</h2>

        <x-MaterialBlade::FAB icon="add" />
        <x-MaterialBlade::FAB icon="add" variant="mini" />

        <p>source code:</p>
        <pre>
&lt;x-MaterialBlade::FAB icon="add" <b>variant="regular"</b> />
&lt;x-MaterialBlade::FAB icon="add" <b>variant="mini"</b> />
        </pre>
    </section>
    <section>
        <h2>With Label</h2>

        <x-MaterialBlade::FAB label="Order" />
        <x-MaterialBlade::FAB icon="add" label="Create" />

        <p>source code:</p>
        <pre>
&lt;x-MaterialBlade::FAB label="Order" />
&lt;x-MaterialBlade::FAB icon="add" label="Create" />
        </pre>
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
        <h2>References</h2>

        <ul>
            <li><a href="https://material.io/components/buttons-floating-action-button/web"
                    target="_blank">https://material.io/components/buttons-floating-action-button/web</a></li>
        </ul>
    </section>

    </section>
@endsection
