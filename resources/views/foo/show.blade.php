<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Grades
                        </p>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            Name: <strong>{{$foo->name}}</strong>
                            <br>
                            Grade: <strong>{{$foo->thud}}</strong>
                            <br>
                            Passed: <strong>{{ $foo->wombat === 1 ? "true" : "false" }}</strong>
                            <br>
                            Created at: <strong>{{ $foo->created_at }}</strong>
                        </div>
                        <div class="field is-grouped">
                            {{-- Here are the form buttons: save, reset and cancel --}}
                            <div class="control">
                                <a href="{{ route('foo.edit', $foo) }}" class="button is-primary">Edit</a>
                            </div>
                            <div class="control">
                                <form method="POST" action="{{ route('foo.destroy', $foo) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group">
                                        <button class="button is-danger" type="submit">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
