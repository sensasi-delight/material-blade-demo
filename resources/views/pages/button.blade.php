@extends('layouts.main')

@section('title', 'Button')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::button>
            Regular Component
        </x-MaterialBlade::button>

        <x-MaterialBlade::button label="Anynomus Component" />

        <p>source code:</p>
        <pre><code>
&lt;!-- set the button text via slot -->
&lt;x-MaterialBlade::button>
  Regular Component
&lt;/x-MaterialBlade::button>

&lt;!-- set the button text via "label" attribute -->
&lt;x-MaterialBlade::button label="Anynomus Component" />
        </pre></code>

    </section>
    <section>
        <h2>Variants</h2>

        <x-MaterialBlade::button>
            Text
        </x-MaterialBlade::button>
        <x-MaterialBlade::button label="Raised" variant="raised" />
        <x-MaterialBlade::button label="Unelevated" variant="unelevated" />
        <x-MaterialBlade::button label="Outlined" variant="outlined" />

        <p>Source Code:</p>
        <pre><code>
&lt;!-- Default Variant -->
&lt;x-MaterialBlade::button>Text&lt;/x-MaterialBlade::button>

&lt;!-- set the variant by the "variant" attribute -->
&lt;x-MaterialBlade::button label="Unelevated" variant="unelevated" />
&lt;x-MaterialBlade::button label="Text" variant="text" />
&lt;x-MaterialBlade::button label="Outlined" variant="outlined" />
</pre></code>
    </section>

    <section>
        <h2>Anchor Tag</h2>

        <x-MaterialBlade::button href="#anchor-tag" label="Anchor Text" variant="text" />
        <x-MaterialBlade::button href="#anchor-tag" label="Anchor Raised" variant="raised" />
        <x-MaterialBlade::button href="#anchor-tag" label="Anchor Unelevated" variant="unelevated" />
        <x-MaterialBlade::button href="#anchor-tag" label="Anchor Outlined" variant="outlined" />

        <p>source code:</p>

        <pre><code>
&lt;x-MaterialBlade::button href="#anchor-tag" label="Anchor Text" variant="text" />
&lt;x-MaterialBlade::button href="#anchor-tag" label="Anchor Raised" variant="raised" />
&lt;x-MaterialBlade::button href="#anchor-tag" label="Anchor Unelevated" variant="unelevated" />
&lt;x-MaterialBlade::button href="#anchor-tag" label="Anchor Outlined" variant="outlined" />
</pre></code>
    </section>

    <section>
        <h2>Disabled</h2>

        <x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
        <x-MaterialBlade::button label="Raised Disabled" variant="raised" disabled />
        <x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
        <x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />

        <p>source code:</p>

        <pre><code>
&lt;x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
&lt;x-MaterialBlade::button label="Raised Disabled" variant="raised" disabled />
&lt;x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
&lt;x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />
        </pre></code>
    </section>

    <section>
        <h2>Button With Icon</h2>

        <x-MaterialBlade::button label="Icon Leading" startIcon="favorite" />
        <x-MaterialBlade::button label="Icon Trailing" endIcon="grade" />
        <x-MaterialBlade::button label="Both" startIcon="noise_control_off" endIcon="disabled_by_default" />

        <p>source code:</p>

        <pre><code>
&lt;x-MaterialBlade::button label="Icon Leading" <b>startIcon="favorite"</b> />
&lt;x-MaterialBlade::button label="Icon Trailing" <b>endIcon="grade"</b> />
&lt;x-MaterialBlade::button label="Both" <b>startIcon="noise_control_off" endIcon="disabled_by_default"</b> />
        </pre></code>

        <p>
            you can also change the icon style, please visit the
            <x-MaterialBlade::button :href="route('pages.icon')" label="Icon component page" variant="text" /> for more information.
        </p>

        <x-MaterialBlade::button label="Two Tone Icon Leading" startIcon="favorite:two-tone" />
        <x-MaterialBlade::button label="Outlined Icon Trailing" endIcon="grade:outlined" />
        <x-MaterialBlade::button label="Both" startIcon="noise_control_off:round" endIcon="disabled_by_default:sharp" />

        <p>source code:</p>

        <pre><code>
&lt;x-MaterialBlade::button label="Two Tone Icon Leading" startIcon="<b>favorite:two-tone</b>" />
&lt;x-MaterialBlade::button label="Outlined Icon Trailing" endIcon="<b>grade:outlined</b>" />
&lt;x-MaterialBlade::button label="Both" startIcon="<b>noise_control_off:round</b>" endIcon="<b>disabled_by_default:sharp</b>" />
      </pre></code>

    </section>

    <section>
        <h2>Sizes</h2>

        <i>On development</i>

        {{-- <x-button label="Small" size="small" />
        <x-button label="Medium" />
        <x-button label="Large" size="large" /> --}}
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
                    <td><code>label</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>optional. </td>
                </tr>
                <tr>
                    <td><code>variant</code></td>
                    <td><code>text | raised | unelevated | oulined</code></td>
                    <td><code>text</code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>color</code></td>
                    <td><code>string</code></td>
                    <td><code>primary</code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>href</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>disableRipple</code></td>
                    <td><code>bool</code></td>
                    <td><code>false</code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>fullWidth</code></td>
                    <td><code>bool</code></td>
                    <td><code>false</code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>withWrapper</code></td>
                    <td><code>bool</code></td>
                    <td><code>false</code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>startIcon</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>Optional. </td>
                </tr>
                <tr>
                    <td><code>endIcon</code></td>
                    <td><code>string</code></td>
                    <td><code></code></td>
                    <td>Optional. </td>
                </tr>
            </tbody>
        </table>

    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php $url = sourceCodeGithubUrl('resources/views/pages/button.blade.php') @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

  <section>
    <h2>References</h2>

    <ul>
        @foreach (['https://material.io/components/buttons/web',
        'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-button/README.md',
        'https://material-components.github.io/material-components-web-catalog/#/component/button'] as $url)
            <li>
                <a href="{{ $url }}" target="_blank">{{ $url }}</a>
            </li>
        @endforeach
    </ul>
  </section>
@endsection
