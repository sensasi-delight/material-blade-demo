@extends('layouts.main')

@section('title', 'Switch')

@section('main')
    <section>
        <h2>Demos</h2>

        <section>
          <h3>Basic</h3>
          <x-mbc::SwitchToggle />
          <x-mbc::SwitchToggle on />
          <x-mbc::SwitchToggle disabled />
          <x-mbc::SwitchToggle disabled on />
        </section>

        <section>
          <h3>With Icon(s)</h3>
          <x-mbc::SwitchToggle icon="check" />
          <x-mbc::SwitchToggle offIcon="signal_wifi_off" />
          <x-mbc::SwitchToggle icon="check" offIcon="remove" />
        </section>

        <section>
          <h3>Colored</h3>
          <x-mbc::SwitchToggle color="primary" on />
          <x-mbc::SwitchToggle color="secondary" on />
          <x-mbc::SwitchToggle color="warning" on />
          <x-mbc::SwitchToggle color="error" on />
          <x-mbc::SwitchToggle color="success" on />
          <x-mbc::SwitchToggle color="info" on />
        </section>
    </section>

    <section>
        <h2>Source Code:</h2>
        <p>
            <a
                href="{{ $url = 'https://github.com/sensasi-delight/material-blade-demo/blob/' . config('app.version') . '/resources/views/pages/switch.blade.php' }}">{{ $url }}</a>
        </p>
    </section>

    <section>
        <h2>References</h2>

        <ul>
            @foreach (['https://material-components.github.io/material-web/demos/switch/', 'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-switch/README.md'] as $url)
                <li>
                    <a href="{{ $url }}" target="_blank">{{ $url }}</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
