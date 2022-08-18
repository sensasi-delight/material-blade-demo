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
        <pre>
&lt;!-- set the button text via slot -->
&lt;x-MaterialBlade::button>
  Regular Component
&lt;/x-MaterialBlade::button>

&lt;!-- set the button text via "label" attribute -->
&lt;x-MaterialBlade::button label="Anynomus Component" />
        </pre>

    </section>
    <section>
        <h2>Variants</h2>

        <x-MaterialBlade::button>
            Contained
        </x-MaterialBlade::button>
        <x-MaterialBlade::button label="Unelevated" variant="unelevated" />
        <x-MaterialBlade::button label="Text" variant="text" />
        <x-MaterialBlade::button label="Outlined" variant="outlined" />

        <p>Source Code:</p>
<pre>
&lt;!-- Default Variant -->
&lt;x-MaterialBlade::button>Contained&lt;/x-MaterialBlade::button>

&lt;!-- set the variant by the "variant" attribute -->
&lt;x-MaterialBlade::button label="Unelevated" variant="unelevated" />
&lt;x-MaterialBlade::button label="Text" variant="text" />
&lt;x-MaterialBlade::button label="Outlined" variant="outlined" />
</pre>
    </section>

    <section>
      <h2>Anchor Tag</h2>

      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Contained" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Unelevated" variant="unelevated" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Text" variant="text" />
      <x-MaterialBlade::button href="#anchor-tag" label="Anchor Outlined" variant="outlined" />

      <p>source code:</p>

<pre>
&lt;x-MaterialBlade::button label="Contained Disabled" disabled />
&lt;x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
&lt;x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
&lt;x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />
</pre>
  </section>

    <section>
        <h2>Colors</h2>

        <x-MaterialBlade::button label="Primary" />
        <x-MaterialBlade::button label="Secondary" color="secondary" />
        <x-MaterialBlade::button label="Success" color="success" />
        <x-MaterialBlade::button label="Error" color="error" />
        <x-MaterialBlade::button label="Warning" color="warning" />
        <x-MaterialBlade::button label="Info" color="info" />

        <p>source code:</p>

        <pre>
&lt;x-MaterialBlade::button label="Primary" />
&lt;x-MaterialBlade::button label="Secondary" color="secondary" />
&lt;x-MaterialBlade::button label="Success" color="success" />
&lt;x-MaterialBlade::button label="Error" color="error" />
&lt;x-MaterialBlade::button label="Warning" color="warning" />
&lt;x-MaterialBlade::button label="Info" color="info" />
        </pre>
    </section>

    <section>
        <h2>Disabled</h2>

        <x-MaterialBlade::button label="Contained Disabled" disabled />
        <x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
        <x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
        <x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />

        <p>source code:</p>

<pre>
&lt;x-MaterialBlade::button label="Contained Disabled" disabled />
&lt;x-MaterialBlade::button label="Unelevated Disabled" variant="unelevated" disabled />
&lt;x-MaterialBlade::button label="Text Disabled" variant="text" disabled />
&lt;x-MaterialBlade::button label="Outlined Disabled" variant="outlined" disabled />
</pre>
    </section>

    <section>
      <h2>Button With Icon</h2>

      <x-MaterialBlade::button label="Icon Leading" start-icon="favorite" />
      <x-MaterialBlade::button label="Icon Trailing" end-icon="grade" />
      <x-MaterialBlade::button label="Both" start-icon="noise_control_off" end-icon="disabled_by_default" />

      <p>source code:</p>

      <pre>
&lt;x-MaterialBlade::button label="Icon Leading" start-icon="favorite" />
&lt;x-MaterialBlade::button label="Icon Trailing" end-icon="grade" />
&lt;x-MaterialBlade::button label="Both" start-icon="noise_control_off" end-icon="disabled_by_default" />
      </pre>

      <p>
        you can also change the icon style, please visit the <x-MaterialBlade::button :href="route('pages.icon')" label="Icon component page" variant="text" /> for more information.
      </p>

      <x-MaterialBlade::button label="Two Tone Icon Leading" start-icon="favorite:two-tone" />
      <x-MaterialBlade::button label="Outlined Icon Trailing" end-icon="grade:outlined" />
      <x-MaterialBlade::button label="Both" start-icon="noise_control_off:round" end-icon="disabled_by_default:sharp" />

      <p>source code:</p>

      <pre>
&lt;x-MaterialBlade::button label="Two Tone Icon Leading" start-icon="favorite:two-tone" />
&lt;x-MaterialBlade::button label="Outlined Icon Trailing" end-icon="grade:outlined" />
&lt;x-MaterialBlade::button label="Both" start-icon="noise_control_off:round" end-icon="disabled_by_default:sharp" />
      </pre>

  </section>

    <section>
        <h2>Sizes</h2>

        <i>On development</i>

        {{-- <x-button label="Small" size="small" />
        <x-button label="Medium" />
        <x-button label="Large" size="large" /> --}}
    </section>



@endsection
