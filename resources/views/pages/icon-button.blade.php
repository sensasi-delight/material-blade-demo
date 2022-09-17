@extends('layouts.main')

@section('title', 'Icon Button')

@section('main')
    <h1>Icon Button</h1>

    <section>
        <h2>Basic</h2>
        <x-MaterialBlade::IconButton icon="delete" />
        <x-MaterialBlade::IconButton icon="send" />
        <x-MaterialBlade::IconButton icon="share" />

        <div>
            <p>source code:</p>
            <pre><code>
&lt;x-MaterialBlade::IconButton icon="delete" />
&lt;x-MaterialBlade::IconButton icon="send" />
&lt;x-MaterialBlade::IconButton icon="share" />
</pre></code>
        </div>

    </section>

    <section>
        <h2>Color</h2>
        <x-MaterialBlade::IconButton icon="home" />
        <x-MaterialBlade::IconButton icon="bluetooth" color="primary" />
        <x-MaterialBlade::IconButton icon="filter_vintage" color="secondary" />
        <x-MaterialBlade::IconButton icon="delete" color="error" />
        <x-MaterialBlade::IconButton icon="paid" color="warning" />
        <x-MaterialBlade::IconButton icon="power_settings_new" color="info" />
        <x-MaterialBlade::IconButton icon="check_circle" color="success" />

        <div>
            <p>source code:
                <pre><code>
&lt;x-MaterialBlade::IconButton icon="home" />
&lt;x-MaterialBlade::IconButton icon="bluetooth" color="primary" />
&lt;x-MaterialBlade::IconButton icon="filter_vintage" color="secondary" />
&lt;x-MaterialBlade::IconButton icon="delete" color="error" />
&lt;x-MaterialBlade::IconButton icon="paid" color="warning" />
&lt;x-MaterialBlade::IconButton icon="power_settings_new" color="info" />
&lt;x-MaterialBlade::IconButton icon="check_circle" color="success" />
</pre></code>
            </p>

        </div>
    </section>

    <section>
        <h2>Toggle</h2>
        <x-MaterialBlade::IconButton icon="home" toggle />
        <x-MaterialBlade::IconButton icon="power_settings_new" color="info" toggle="on" />
        <x-MaterialBlade::IconButton icon="check_circle" color="success" toggle />
        <x-MaterialBlade::IconButton icon="send" color="secondary" toggle="on" disabled />
        <x-MaterialBlade::IconButton icon="photo_camera" color="secondary" toggle="off" disabled />

        <div>
            <p>
                source code:
                <pre><code>
&lt;x-MaterialBlade::IconButton icon="home" toggle/>
&lt;x-MaterialBlade::IconButton icon="power_settings_new" color="info" toggle="on" />
&lt;x-MaterialBlade::IconButton icon="check_circle" color="success" toggle/>
&lt;x-MaterialBlade::IconButton icon="send" color="secondary" toggle="on" disabled/>
&lt;x-MaterialBlade::IconButton icon="photo_camera" color="secondary" toggle="off" disabled/>
</pre></code>
            </p>

        </div>
    </section>

    <section>
        <h2>Toggle off icon</h2>

        <p>By default the <code>OFF</code> state icon of toggle button same with the <code>ON</code> state icon, if you want
            to change the <code>OFF</code> state icon you can simply add the <code>offIcon</code> attribute</p>
        <x-MaterialBlade::IconButton icon="fullscreen_exit" offIcon="fullscreen" toggle />
        <x-MaterialBlade::IconButton icon="wifi" offIcon="wifi_off" toggle="on" />
        <x-MaterialBlade::IconButton icon="favorite" offIcon="favorite:two-tone" toggle color="error" />


        <div>
            <p>
                source code:
                <pre><code>
&lt;x-MaterialBlade::IconButton icon="fullscreen_exit" offIcon="fullscreen" toggle />
&lt;x-MaterialBlade::IconButton icon="wifi" offIcon="wifi_off" toggle="on" />
&lt;x-MaterialBlade::IconButton icon="favorite" offIcon="favorite:two-tone" toggle color="error" />
</pre></code>
            </p>

        </div>
    </section>

    <section>
        <h2>Anchor</h2>

        <p>
            By default the <code>IconButton</code> will be rendered as <code>&lt;button></code> element.
            If you want to make it an <code>&lt;a></code> element please add <code>href</code> attribute to the
            <code>IconButton</code>.
            If you add the <code>disabled</code> attribute the <code>IconButton</code> will be rendered as disabled
            <code>button</code>.
        </p>

        <x-MaterialBlade::IconButton icon="mail" href="mailto:zainadam.id@gmail.com" />
        <x-MaterialBlade::IconButton icon="phone" color="success" href="tel: +123 456 789" />
        <x-MaterialBlade::IconButton icon="phone" color="success" href="tel: +123 456 789" disabled />

        <div>
            <p>
                source code:

                <pre><code>
&lt;x-MaterialBlade::IconButton icon="mail" href="mailto:zainadam.id@gmail.com" />
&lt;x-MaterialBlade::IconButton icon="phone" color="success" href="tel: +123 456 789" />
</pre></code>
            </p>
        </div>
    </section>


    <section>
      <h2>Ripple Disabled</h2>

      <p>
        Just add the <code>ripple="false"<code> attribute to the <code>IconButton</code> component. however, disabling ripple make button not hard to be recognized by user, please add the hover style.
      </p>

      <x-MaterialBlade::IconButton icon="home" ripple="false" />
      <x-MaterialBlade::IconButton icon="close" color="error" ripple="false" />
      <x-MaterialBlade::IconButton icon="logout" color="success" ripple="false" />

      <div>
          <p>
              source code:

              <pre><code>
&lt;x-MaterialBlade::IconButton icon="home" ripple="false" />
&lt;x-MaterialBlade::IconButton icon="close" color="error" ripple="false" />
&lt;x-MaterialBlade::IconButton icon="logout" color="success" ripple="false" />
</pre></code>
          </p>
      </div>
  </section>


@endsection
