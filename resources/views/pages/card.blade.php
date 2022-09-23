@extends('layouts.main')

@section('title', 'Card')

@section('main')
    <section>
        <h2>Basic</h2>

        <x-MaterialBlade::Card>

            <!-- Media -->
            <x-MaterialBlade::CardMedia
                src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />

            <!-- Header -->
            <x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />

            <!-- Content -->
            <x-MaterialBlade::CardContent>
                <x-MaterialBlade::Typography variant="body2"
                    slot="Visit ten places on our planet that are undergoing the biggest changes today." />
            </x-MaterialBlade::CardContent>

            <!-- Actions -->
            <x-MaterialBlade::CardActions>

                <!-- Button Actions -->
                <x-slot name="buttons">
                    <x-MaterialBlade::Button label="Read" />
                    <x-MaterialBlade::Button label="Bookmark" />
                </x-slot>

                <!-- Icon Button Actions -->
                <x-slot name="iconButtons">
                    <x-MaterialBlade::IconButton toggle icon="favorite" offIcon="favorite_border" color="error"
                        aria-label="Add to favorites" title="Add to favorites" />
                    <x-MaterialBlade::IconButton icon="share" title="Share" />
                    <x-MaterialBlade::IconButton icon="more_vert" title="More options" aria-label="More options" />
                </x-slot>
            </x-MaterialBlade::CardActions>
        </x-MaterialBlade::Card>


        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Card>
  &lt;!-- Media -->
  &lt;x-MaterialBlade::CardMedia src="..." />

  &lt;!-- Header -->
  &lt;x-MaterialBlade::CardHeader title="..." subtitle="..." />

  &lt;!-- Content -->
  &lt;x-MaterialBlade::CardContent>
    &lt;!-- ... -->
  &lt;/x-MaterialBlade::CardContent>

  &lt;!-- Actions -->
  &lt;x-MaterialBlade::CardActions>
      &lt;!-- Button Actions -->
      &lt;x-slot name="buttons">
        &lt;!-- ... -->
      &lt;/x-slot>

      &lt;!-- Icon Button Actions -->
      &lt;x-slot name="iconButtons">
        &lt;!-- ... -->
      &lt;/x-slot>
  &lt;/x-MaterialBlade::CardActions>
&lt;/x-MaterialBlade::Card>
        </pre></code>


        <h3>Free Form</h3>

        <p>all <code>Card</code> children can be reordered or deleted as you want.</p>

        <h4>Header Only</h4>

        <x-MaterialBlade::Card>
            <!-- Header -->
            <x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />
        </x-MaterialBlade::Card>

        <h4>Media and Action Only</h4>

        <x-MaterialBlade::Card>

            <!-- Media -->
            <x-MaterialBlade::CardMedia
                src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />

            <!-- Actions -->
            <x-MaterialBlade::CardActions>

                <!-- Button Actions -->
                <x-slot name="buttons">
                    <x-MaterialBlade::Button label="Read" />
                    <x-MaterialBlade::Button label="Bookmark" />
                </x-slot>

                <!-- Icon Button Actions -->
                <x-slot name="iconButtons">
                    <x-MaterialBlade::IconButton toggle icon="favorite" offIcon="favorite_border" color="error"
                        aria-label="Add to favorites" title="Add to favorites" />
                    <x-MaterialBlade::IconButton icon="share" title="Share" />
                    <x-MaterialBlade::IconButton icon="more_vert" title="More options" aria-label="More options" />
                </x-slot>
            </x-MaterialBlade::CardActions>
        </x-MaterialBlade::Card>

        <p>you get the point!</p>
    </section>

    <section>
        <h2>Variant</h2>

        <h3>Elevated</h3>
        <x-MaterialBlade::Card variant="elevated">
            <x-MaterialBlade::CardHeader title="Card Title" subtitle="Card Subtitle" />
        </x-MaterialBlade::Card>

        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Card variant="elevated">
  &lt;x-MaterialBlade::CardHeader title="Card Title" subtitle="Card Subtitle" />
&lt;/x-MaterialBlade::Card>
      </pre></code>


        <h3>Outlined</h3>
        <x-MaterialBlade::Card variant="outlined">
            <x-MaterialBlade::CardHeader title="Card Title" subtitle="Card Subtitle" />
        </x-MaterialBlade::Card>

        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Card variant="outlined">
  &lt;x-MaterialBlade::CardHeader title="Card Title" subtitle="Card Subtitle" />
&lt;/x-MaterialBlade::Card>
      </pre></code>
    </section>

    <section>
        <h2>Primary Action</h2>

        <x-MaterialBlade::Card>
            <x-MaterialBlade::CardPrimaryAction>
                <x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />
                <x-MaterialBlade::CardMedia
                    src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
                <x-MaterialBlade::CardContent>
                    <x-MaterialBlade::Typography variant="body2"
                        slot="Visit ten places on our planet that are undergoing the biggest changes today." />
                </x-MaterialBlade::CardContent>
            </x-MaterialBlade::CardPrimaryAction>

            <x-MaterialBlade::CardActions>
                <x-slot name="buttons">
                    <x-MaterialBlade::Button label="Read" />
                    <x-MaterialBlade::Button label="Bookmark" />
                </x-slot>

                <x-slot name="iconButtons">
                    <x-MaterialBlade::IconButton toggle icon="favorite" offIcon="favorite_border" color="error"
                        aria-label="Add to favorites" title="Add to favorites" />
                    <x-MaterialBlade::IconButton icon="share" title="Share" />
                    <x-MaterialBlade::IconButton icon="more_vert" title="More options" aria-label="More options" />
                </x-slot>
            </x-MaterialBlade::CardActions>
        </x-MaterialBlade::Card>

        <p>for clickable card you can wrap all components/elements with <code>CardPrimaryAction</code> component</p>

        <p>Source Code:</p>
        <pre><code>
&lt;x-MaterialBlade::Card>
  &lt;x-MaterialBlade::CardPrimaryAction>
    &lt;x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />
      &lt;x-MaterialBlade::CardMedia src="..." />
      &lt;x-MaterialBlade::CardContent>
        &lt;!-- content -->
      &lt;/x-MaterialBlade::CardContent>
  &lt;/x-MaterialBlade::CardPrimaryAction>

  &lt;x-MaterialBlade::CardActions>
      &lt;x-slot name="buttons">
          &lt;x-MaterialBlade::Button label="Read" />
          &lt;x-MaterialBlade::Button label="Bookmark" />
      &lt;/x-slot>

      &lt;x-slot name="iconButtons">
          &lt;x-MaterialBlade::IconButton toggle icon="favorite" offIcon="favorite_border" color="error"
              aria-label="Add to favorites" title="Add to favorites" />
          &lt;x-MaterialBlade::IconButton icon="share" title="Share" />
          &lt;x-MaterialBlade::IconButton icon="more_vert" title="More options" aria-label="More options" />
      &lt;/x-slot>
  &lt;/x-MaterialBlade::CardActions>
&lt;/x-MaterialBlade::Card>
      </pre></code>
    </section>

    <section>
        <h2>Media Content</h2>

        <p>If you want add some text on the <code>CardMedia</code>, just simply wrap the elements/components with the
            <code>CardMedia</code> component.
        </p>

        <x-MaterialBlade::Card>
            <x-MaterialBlade::CardPrimaryAction>
                <x-MaterialBlade::CardMedia
                    src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg">

                    <x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />
                </x-MaterialBlade::CardMedia>

                <x-MaterialBlade::CardContent>
                  <x-MaterialBlade::Typography variant="body2"
                      slot="Visit ten places on our planet that are undergoing the biggest changes today." />
                </x-MaterialBlade::CardContent>
            </x-MaterialBlade::CardPrimaryAction>
        </x-MaterialBlade::Card>


        <pre><code>
&lt;x-MaterialBlade::Card>
  &lt;x-MaterialBlade::CardPrimaryAction>
    &lt;x-MaterialBlade::CardMedia
      src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" >
      &lt;x-MaterialBlade::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />
    &lt;/x-MaterialBlade::CardMedia>
    &lt;x-MaterialBlade::CardContent>
      &lt;x-MaterialBlade::Typography variant="body2"
          slot="Visit ten places on our planet that are undergoing the biggest changes today." />
    &lt;/x-MaterialBlade::CardContent>
  &lt;/x-MaterialBlade::CardPrimaryAction>
&lt;/x-MaterialBlade::Card>
        </code></pre>
    </section>

    <section>
        <h2>Freestyle</h2>

        <x-MaterialBlade::Card>
            <div
                style="display:flex; flex-direction: row; border-bottom-left-radius: inherit; border-top-left-radius: inherit;">
                <x-MaterialBlade::CardMedia variant="square" style="width: 110px; border-radius: inherit;"
                    src="https://upload.wikimedia.org/wikipedia/en/9/9f/Bohemian_Rhapsody.png">
                </x-MaterialBlade::CardMedia>

                <div>
                    <x-MaterialBlade::CardHeader title="Bohemian Raphsody" subtitle="by Queen" />

                    <x-MaterialBlade::CardActions>
                        <x-slot name="iconButtons">
                            <x-MaterialBlade::IconButton icon="skip_previous" title="Previous" />
                            <x-MaterialBlade::IconButton icon="play_arrow" title="play" style="font-size: 3em;" />
                            <x-MaterialBlade::IconButton icon="skip_next" title="Next" />
                        </x-slot>
                    </x-MaterialBlade::CardActions>
                </div>
            </div>
        </x-MaterialBlade::Card>

        <p>source code:</p>
        <pre><code>
&lt;x-MaterialBlade::Card>
    &lt;div style="display:flex; flex-direction: row; border-bottom-left-radius: inherit; border-top-left-radius: inherit;">
        &lt;x-MaterialBlade::CardMedia variant="square" style="width: 110px; border-radius: inherit;"
            src="https://upload.wikimedia.org/wikipedia/en/9/9f/Bohemian_Rhapsody.png">
        &lt;/x-MaterialBlade::CardMedia>

        &lt;div>
            &lt;x-MaterialBlade::CardHeader title="Bohemian Raphsody" subtitle="by Queen" />

            &lt;x-MaterialBlade::CardActions>
                &lt;x-slot name="iconButtons">
                    &lt;x-MaterialBlade::IconButton icon="skip_previous" title="Previous" />
                    &lt;x-MaterialBlade::IconButton icon="play_arrow" title="play" style="font-size: 3em;" />
                    &lt;x-MaterialBlade::IconButton icon="skip_next" title="Next" />
                &lt;/x-slot>
            &lt;/x-MaterialBlade::CardActions>
        &lt;/div>
    &lt;/div>
&lt;/x-MaterialBlade::Card>
        </pre></code>

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
        @php $url = sourceCodeGithubUrl('resources/views/pages/card.blade.php') @endphp
        <a href="{{ $url }}" target="_blank">{{ $url }}</a>
      </p>
  </section>

  <section>
    <h2>References</h2>

    <ul>
        @foreach (['https://material.io/components/cards/web',
        'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-card/README.md',
        'https://material-components.github.io/material-components-web-catalog/#/component/card'] as $url)
            <li>
                <a href="{{ $url }}" target="_blank">{{ $url }}</a>
            </li>
        @endforeach
    </ul>
  </section>
@endsection
