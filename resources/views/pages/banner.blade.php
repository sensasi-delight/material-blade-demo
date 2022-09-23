@extends('layouts.main')

@section('title', 'Banner')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::Banner text="There was a problem processing a transaction on your credit card.">
            <x-MaterialBlade::Button label="Fix it" variant="text" />
            <x-MaterialBlade::Button label="Learn more" variant="text" />
        </x-MaterialBlade::Banner>
        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::Banner text="There was a problem processing a transaction on your credit card.">
  &lt;x-MaterialBlade::Button label="Fix it" variant="text" />
  &lt;x-MaterialBlade::Button label="Learn more" variant="text" />
&lt;/x-MaterialBlade::Banner>
        </pre></code>

    </section>

    <section>
        <h2>Fixed Banner</h2>

        <iframe src="{{ route('pages.banner.iframe.fixed') }}" width="100%"></iframe>

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::Banner <b>fixed</b> text="There was a problem processing a transaction on your credit card.">
  &lt;x-MaterialBlade::Button label="Fix it" variant="text" />
&lt;/x-MaterialBlade::Banner>
        </pre></code>


    </section>

    <section>
        <h2>Icon</h2>

        <x-MaterialBlade::Banner icon="error_outline" text="There was a problem processing a transaction on your credit card.">
            <x-MaterialBlade::Button label="Fix it" variant="text" />
        </x-MaterialBlade::Banner>
        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::Banner <b>icon="error_outline"</b> text="There was a problem processing a transaction on your credit card.">
  &lt;x-MaterialBlade::Button label="Fix it" variant="text" />
&lt;/x-MaterialBlade::Banner>
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
              <td><code>children</code></td>
              <td>button</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><code>text</code></td>
              <td>String</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><code>icon</code></td>
              <td>Icon string</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><code>fixed</code></td>
              <td>Bool</td>
              <td><code>false</code></td>
              <td></td>
            </tr>
          </tbody>
        </table>

    </section>

    <section>
      <h2>Source Code:</h2>
      <p>
        @php $url = sourceCodeGithubUrl('resources/views/pages/banner.blade.php') @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

  <section>
    <h2>References</h2>

    <ul>
        @foreach (['https://material.io/components/banners/web',
        'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-banner/README.md'] as $url)
            <li>
                <a href="{{ $url }}" target="_blank">{{ $url }}</a>
            </li>
        @endforeach
    </ul>
  </section>
@endsection
